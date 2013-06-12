<?php


if (!defined('_CAN_LOAD_FILES_'))
	exit;

class gameworldtopseller extends Module
{
	public function __construct()
	{
		$this->name = 'gameworldtopseller';
		$this->tab = 'MyBlock';
		$this->version = '1.0';
		$this->author = 'CodeSpot';

		parent::__construct();

		$this->displayName = $this->l('Best Seller Products by Category on the homepage');
		$this->description = $this->l('Displays best seller Products block by category in your homepage.');
	}

	public function install()
	{
		if (!Configuration::updateValue('HOME_TOPSELLER_ID_CAT', '') OR
			!Configuration::updateValue('HOME_TOPSELLER_MYNBR', 6) OR
			!parent::install() OR
			!$this->registerHook('header') OR
			!$this->registerHook('home'))
			return false;
		return true;
	}

	public function uninstall()
	{
		if (!parent::uninstall())
			return false;
		return true;
	}

	public function getContent()
	{
		$output = '<h2>'.$this->displayName.'</h2>';
		if (Tools::isSubmit('submitMyHomeFeatured'))
		{
			$cat = implode(",", Tools::getValue('categoryBox'));
			Configuration::updateValue('HOME_TOPSELLER_ID_CAT', $cat);
			
			$nbr = (int)(Tools::getValue('mynbr'));
			if (!$nbr OR $nbr <= 0 OR !Validate::isInt($nbr))
				$errors[] = $this->l('Invalid number of products');
			else
				Configuration::updateValue('HOME_TOPSELLER_MYNBR', (int)($nbr));
				
			if (isset($errors) AND sizeof($errors))
				$output .= $this->displayError(implode('<br />', $errors));
			else
				$output .= $this->displayConfirmation($this->l('Settings updated'));
		}
		return $output.$this->displayForm();
	}
	
	
	
	
	public static function getCheckboxCatalog($arrCheck,$categories, $current, $id_category = 1, $has_suite = array())
	{
		global $done;
		static $irow;
		if (!isset($done[$current['infos']['id_parent']]))
			$done[$current['infos']['id_parent']] = 0;
		$done[$current['infos']['id_parent']] += 1;
		if(! empty ($categories[$current['infos']['id_parent']]))
		$todo = sizeof($categories[$current['infos']['id_parent']]);
		$doneC = $done[$current['infos']['id_parent']];

		$level = $current['infos']['level_depth'] + 1;
		
		if($id_category != 1)
		{
			$result = '
			<tr class="'.($irow++ % 2 ? 'alt_row' : '').'">
				<td>
					<input type="checkbox" name="categoryBox[]" class="categoryBox" id="categoryBox_'.$id_category.'" value="'.$id_category.'"'.(in_array($id_category, $arrCheck) ? ' checked="checked"' : '').'/>
				</td>
				<td>
					'.$id_category.'
				</td>
				<td>';
				for ($i = 2; $i < $level; $i++)
					if (! empty ($has_suite[$i - 2]))
					$result .= '<img src="../img/admin/lvl_'.$has_suite[$i - 2].'.gif" alt="" />';
				$result .= '<img style="vertical-align:middle" src="../img/admin/'.($level == 1 ? 'lv1.gif' : 'lv2_'.($todo == $doneC ? 'f' : 'b').'.gif').'" alt="" /> &nbsp;
				<label for="categoryBox_'.$id_category.'" class="t">'.stripslashes($current['infos']['name']).'</label></td>
			</tr>';
		}
		else
			$result = '';
		
		if ($level > 1)
			$has_suite[] = ($todo == $doneC ? 0 : 1);

		if (isset($categories[$id_category]))
			foreach ($categories[$id_category] AS $key => $row)
				if ($key != 'infos')
					$result.= self::getCheckboxCatalog($arrCheck,$categories, $categories[$id_category][$key], $key, $has_suite);
		
		return $result;
	}
	
	public function displayForm()
	{
		global $cookie;
		$categories = Category::getCategories((int)($cookie->id_lang), false);
		$list_cat = array();
		foreach ($categories as $key=>$cat)
		{
			foreach($cat as $id=>$info)
				$list_cat[][]=$info;
		}
		$arrCheck = explode(",",Configuration::get('HOME_TOPSELLER_ID_CAT'));
		$output = '
		<form action="'.$_SERVER['REQUEST_URI'].'" method="post">
			<fieldset><legend><img src="'.$this->_path.'logo.gif" alt="" title="" />'.$this->l('Settings').'</legend>
				<div class="margin-form">
					<p class="clear">Mark all checkbox(es) of categories which have products appear in your homepage<sup> *</sup></p>
				</div>
				<div style="overflow: auto" id="categoryList">
					<table cellspacing="0" cellpadding="0" class="table">
						<tr>
							<th>c</th>
							<th>ID</th>
							<th style="width: 600px">Category</th>
						</tr>';
						if(isset($categories))
						{
							$output .=$this->getCheckboxCatalog($arrCheck,$categories,$list_cat[0][0],1);
						 }
						  $output .=
					'</table>
				</div>
				<br/>
				<label>'.$this->l('Number of products').'</label>
				<div class="margin-form">
					<input type="text" size="5" name="mynbr" value="'.Tools::getValue('mynbr', (int)(Configuration::get('HOME_TOPSELLER_MYNBR'))).'" />
					<p class="clear">'.$this->l('The number of products displayed for each category on homepage (default: 6).').'</p>
					
				</div>
				<center><input type="submit" name="submitMyHomeFeatured" value="'.$this->l('Save').'" class="button" /></center>
			</fieldset>
		</form>';
		
		return $output;
	}
	
	public static function getBestSalesByCategory($id_category, $id_lang, $nbProducts = 10)
	{
		if ($nbProducts < 1) $nbProducts = 10;
		
		$groups = FrontController::getCurrentCustomerGroups();
		$sqlGroups = (count($groups) ? 'IN ('.implode(',', $groups).')' : '= 1');

		$result = Db::getInstance(_PS_USE_SQL_SLAVE_)->ExecuteS('
		SELECT p.*,
			pl.`description`, pl.`description_short`, pl.`link_rewrite`, pl.`meta_description`, pl.`meta_keywords`, pl.`meta_title`, pl.`name`, m.`name` AS manufacturer_name, p.`id_manufacturer` as id_manufacturer,
			i.`id_image`, il.`legend`,
			ps.`quantity` AS sales, t.`rate`, pl.`meta_keywords`, pl.`meta_title`, pl.`meta_description`,
			DATEDIFF(p.`date_add`, DATE_SUB(NOW(), INTERVAL '.(Validate::isUnsignedInt(Configuration::get('PS_NB_DAYS_NEW_PRODUCT')) ? Configuration::get('PS_NB_DAYS_NEW_PRODUCT') : 20).' DAY)) > 0 AS new
		FROM `'._DB_PREFIX_.'product_sale` ps
		LEFT JOIN `'._DB_PREFIX_.'product` p ON ps.`id_product` = p.`id_product`
		LEFT JOIN `'._DB_PREFIX_.'category_product` cp ON p.`id_product` = cp.`id_product`
		LEFT JOIN `'._DB_PREFIX_.'product_lang` pl ON (p.`id_product` = pl.`id_product` AND pl.`id_lang` = '.(int)($id_lang).')
		LEFT JOIN `'._DB_PREFIX_.'image` i ON (i.`id_product` = p.`id_product` AND i.`cover` = 1)
		LEFT JOIN `'._DB_PREFIX_.'image_lang` il ON (i.`id_image` = il.`id_image` AND il.`id_lang` = '.(int)($id_lang).')
		LEFT JOIN `'._DB_PREFIX_.'manufacturer` m ON (m.`id_manufacturer` = p.`id_manufacturer`)
		LEFT JOIN `'._DB_PREFIX_.'tax_rule` tr ON (p.`id_tax_rules_group` = tr.`id_tax_rules_group`
		                                           AND tr.`id_country` = '.(int)Context::getContext()->country->id.'
	                                           	   AND tr.`id_state` = 0)
	    LEFT JOIN `'._DB_PREFIX_.'tax` t ON (t.`id_tax` = tr.`id_tax`)
		WHERE p.`active` = 1 AND cp.`id_category` = '.(int)($id_category).'
		 AND p.`id_product` IN (
			SELECT cp.`id_product`
			FROM `'._DB_PREFIX_.'category_group` cg
			LEFT JOIN `'._DB_PREFIX_.'category_product` cp ON (cp.`id_category` = cg.`id_category`)
			WHERE cg.`id_group` '.$sqlGroups.'
		)
		ORDER BY sales DESC LIMIT 0, '.(int)($nbProducts));

		if (!$result)
			return false;
		return Product::getProductsProperties($id_lang, $result);
	}
	
	public function hookHeader()
	{
		$this->context->controller->addjs($this->_path.'jquery-ui.min.js');
	}
	
	function hookHome($params)
	{
		global $smarty, $cookie;
		$id_cat = explode(",",Configuration::get('HOME_TOPSELLER_ID_CAT'));
		$best_seller = ProductSale::getBestSales((int)(Configuration::get('PS_LANG_DEFAULT')),0,6);
		$categories = array();
		$nb = Configuration::get('HOME_TOPSELLER_MYNBR');
		foreach ($id_cat as $id) //gameworldtopseller::getBestSalesByCategory($category->id,(int)($cookie->id_lang), $nbr)
			if(!empty($id))
			{
				$categories[$id] = new Category($id, Configuration::get('PS_LANG_DEFAULT'));
				$categories[$id]->topseller = $this->getBestSalesByCategory($id, (int)($cookie->id_lang),$nb);
			}
		$smarty->assign(array(
		'best_seller' => $best_seller,
		'categories' => $categories
		));

		return $this->display(__FILE__, 'gameworldtopseller.tpl');
	}
}