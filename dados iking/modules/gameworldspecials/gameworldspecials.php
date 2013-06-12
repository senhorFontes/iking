<?php
/*
* 2007-2011 PrestaShop 
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2011 PrestaShop SA
*  @version  Release: $Revision: 1.4 $
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

class gameworldspecials extends Module
{
	private $_html = '';
	private $_postErrors = array();

    function __construct()
    {
        $this->name = 'gameworldspecials';
        $this->tab = 'MyBlock';
        $this->version = 1.0;
		$this->author = 'CodeSpot';

		parent::__construct();

		$this->displayName = $this->l('Product specials block');
		$this->description = $this->l('Adds a block with current product specials.');
	}

	public function install()
	{
		Configuration::updateValue('BLOCK_MYSPECIAL_NUM', 3);
		return (parent::install() AND $this->registerHook('rightColumn'));
	}

	public function getContent()
	{
		$output = '<h2>'.$this->displayName.'</h2>';
		if (Tools::isSubmit('submitMyspecials'))
		{
			$nbr = (int)(Tools::getValue('nbr'));
			if (!$nbr OR $nbr <= 0 OR !Validate::isInt($nbr))
				$errors[] = $this->l('Invalid number of products');
			else
				Configuration::updateValue('BLOCK_MYSPECIAL_NUM', (int)($nbr));
			if (isset($errors) AND sizeof($errors))
				$output .= $this->displayError(implode('<br />', $errors));
			else
				$output .= $this->displayConfirmation($this->l('Settings updated'));
		}
		return $output.$this->displayForm();
	}

	public function displayForm()
	{
		return '
		<form action="'.$_SERVER['REQUEST_URI'].'" method="post">
			<fieldset>
				<legend><img src="'.$this->_path.'logo.gif" alt="" title="" />'.$this->l('Settings').'</legend>
				<label>'.$this->l('Number of products displayed').'</label>
				<div class="margin-form">
					<input type="text" size="5" name="nbr" value="'.Tools::getValue('nbr', (int)(Configuration::get('BLOCK_MYSPECIAL_NUM'))).'" />
					<p class="clear">'.$this->l('The number of products displayed on block (default: 4).').'</p>
				</div>
				<center><input type="submit" name="submitMyspecials" value="'.$this->l('Save').'" class="button" /></center>
			</fieldset>
		</form>';
	}
	
	public static function getMyPricesDrop($id_lang, $nbProducts = 10)
	{
		$groups = FrontController::getCurrentCustomerGroups();
		$sqlGroups = (count($groups) ? 'IN ('.implode(',', $groups).')' : '= 1');
		
		global $cookie, $cart;

		$id_group = $cookie->id_customer ? (int)(Customer::getDefaultGroupId((int)($cookie->id_customer))) : _PS_DEFAULT_CUSTOMER_GROUP_;
		$id_address = $cart->{Configuration::get('PS_TAX_ADDRESS_TYPE')};
		$ids = Address::getCountryAndState($id_address);
		$id_country = (int)($ids['id_country'] ? $ids['id_country'] : Configuration::get('PS_COUNTRY_DEFAULT'));
		
		$currentDate = date('Y-m-d H:i:s');
		$ids_product = SpecificPrice::getProductIdByDate((int)(Context::getContext()->shop->id), (int)($cookie->id_currency), $id_country, $id_group, $currentDate, $currentDate);
		
		$sql = '
		SELECT p.*, pl.`description`, pl.`description_short`, pl.`link_rewrite`, pl.`meta_description`, pl.`meta_keywords`, pl.`meta_title`,
		pl.`name`, p.`ean13`, p.`upc`, i.`id_image`, il.`legend`, t.`rate`, m.`name` AS manufacturer_name,
		DATEDIFF(p.`date_add`, DATE_SUB(NOW(), INTERVAL '.(Validate::isUnsignedInt(Configuration::get('PS_NB_DAYS_NEW_PRODUCT')) ? Configuration::get('PS_NB_DAYS_NEW_PRODUCT') : 20).' DAY)) > 0 AS new
		FROM `'._DB_PREFIX_.'product` p
		LEFT JOIN `'._DB_PREFIX_.'product_lang` pl ON (p.`id_product` = pl.`id_product` AND pl.`id_lang` = '.(int)($id_lang).')
		LEFT JOIN `'._DB_PREFIX_.'image` i ON (i.`id_product` = p.`id_product` AND i.`cover` = 1)
		LEFT JOIN `'._DB_PREFIX_.'image_lang` il ON (i.`id_image` = il.`id_image` AND il.`id_lang` = '.(int)($id_lang).')
		LEFT JOIN `'._DB_PREFIX_.'tax_rule` tr ON (p.`id_tax_rules_group` = tr.`id_tax_rules_group`
		                                           AND tr.`id_country` = '.(int)Context::getContext()->country->id.'
	                                           	   AND tr.`id_state` = 0)
	    LEFT JOIN `'._DB_PREFIX_.'tax` t ON (t.`id_tax` = tr.`id_tax`)
		LEFT JOIN `'._DB_PREFIX_.'manufacturer` m ON (m.`id_manufacturer` = p.`id_manufacturer`)
		WHERE 1
		AND p.`active` = 1
		AND p.`show_price` = 1
		AND p.`id_product` IN('.((is_array($ids_product) AND sizeof($ids_product)) ? implode(', ', array_map('intval', $ids_product)) : 0).')
		AND p.`id_product` IN (
			SELECT cp.`id_product`
			FROM `'._DB_PREFIX_.'category_group` cg
			LEFT JOIN `'._DB_PREFIX_.'category_product` cp ON (cp.`id_category` = cg.`id_category`)
			WHERE cg.`id_group` '.$sqlGroups.'
		)
		ORDER BY RAND() LIMIT 0, '.(int)($nbProducts);
		$result = Db::getInstance(_PS_USE_SQL_SLAVE_)->ExecuteS($sql);

		if (!$result)
			return false;
		return Product::getProductsProperties($id_lang, $result);
	}
	
	public function hookRightColumn($params)
	{
		if (Configuration::get('PS_CATALOG_MODE'))
			return ;
		
		global $smarty;
		$nb = (int)(Configuration::get('BLOCK_MYSPECIAL_NUM'));
		$myspecial = $this->getMyPricesDrop((int)($params['cookie']->id_lang),$nb);
		/*echo "<pre>";
		print_r($myspecial);
		echo "</pre>";*/
		if (!$myspecial)
			return;
		$smarty->assign(array('myspecial' => $myspecial));
		return $this->display(__FILE__, 'gameworldspecials.tpl');
	}
		
	public function hookLeftColumn($params)
	{
		return $this->hookRightColumn($params);
	}
		
}


