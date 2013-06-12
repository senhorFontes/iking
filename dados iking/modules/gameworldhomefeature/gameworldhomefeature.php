<?php


if (!defined('_CAN_LOAD_FILES_'))
	exit;

class gameworldhomefeature extends Module
{
	public function __construct()
	{
		$this->name = 'gameworldhomefeature';
		$this->tab = 'MyBlock';
		$this->version = '1.0';
		$this->author = 'CodeSpot';

		parent::__construct();

		$this->displayName = $this->l('Featured Products by Category on the homepage');
		$this->description = $this->l('Displays Featured Products by category in your homepage.');
	}

	public function install()
	{
		if (!Configuration::updateValue('HOME_FEATURED_ID_CAT', '') OR
			!Configuration::updateValue('HOME_FEATURED_MYNBR', 4) OR
			!parent::install() OR
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
			Configuration::updateValue('HOME_FEATURED_ID_CAT', $cat);
			
			$nbr = (int)(Tools::getValue('mynbr'));
			if (!$nbr OR $nbr <= 0 OR !Validate::isInt($nbr))
				$errors[] = $this->l('Invalid number of products');
			else
				Configuration::updateValue('HOME_FEATURED_MYNBR', (int)($nbr));
				
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
		$arrCheck = explode(",",Configuration::get('HOME_FEATURED_ID_CAT'));
		$output = '
		<form action="'.$_SERVER['REQUEST_URI'].'" method="post">
			<fieldset><legend><img src="'.$this->_path.'logo.gif" alt="" title="" />'.$this->l('Settings').'</legend>
				<div class="margin-form">
					<p class="clear">Mark all checkbox(es) of categories which have products appear in your homepage<sup> *</sup></p>
				</div>
				<div style="overflow: auto; min-height: 300px;" id="categoryList">
					<table cellspacing="0" cellpadding="0" class="table">
						<tr>
							<th>c</th>
							<th>ID</th>
							<th style="width: 600px">Category</th>
						</tr>'
						.$this->getCheckboxCatalog($arrCheck,$categories,$list_cat[0][0],1).
					'</table>
				</div>
				<br/>
				<label>'.$this->l('Number of products').'</label>
				<div class="margin-form">
					<input type="text" size="5" name="mynbr" value="'.Tools::getValue('mynbr', (int)(Configuration::get('HOME_FEATURED_MYNBR'))).'" />
					<p class="clear">'.$this->l('The number of products displayed for each category on homepage (default: 4).').'</p>
					
				</div>
				<center><input type="submit" name="submitMyHomeFeatured" value="'.$this->l('Save').'" class="button" /></center>
			</fieldset>
		</form>';
		
		return $output;
	}
	
	function hookHome($params)
	{
		global $smarty;
		if(Configuration::get('HOME_FEATURED_ID_CAT') != "")
			$id_cat = explode(",",Configuration::get('HOME_FEATURED_ID_CAT'));
		$categories = array();
		if(isset($id_cat))
			foreach ($id_cat as $id)
				$categories[] = new Category($id, Configuration::get('PS_LANG_DEFAULT'));
		$smarty->assign(array(
		'categories' => $categories,
		'nbr' => Configuration::get('HOME_FEATURED_MYNBR')));

		return $this->display(__FILE__, 'gameworldhomefeature.tpl');
	}
}