<?php
if (!defined('_PS_VERSION_'))
	exit;

class gameworldcsmanufacturer extends Module
{
	function __construct()
	{
		$this->name = 'gameworldcsmanufacturer';
		$this->tab = 'My Blocks';
		$this->version = 1.0;
		$this->author = 'Codespot';

		parent::__construct();

		$this->displayName = $this->l('CS Slider of Manufacturer Logo.');
		$this->description = $this->l('Adds Slider of Manufacturer Logo.');
	}

	function install()
	{
		return (parent::install() AND $this->registerHook('footer') AND $this->registerHook('header'));
	}

	function hookFooter($params)
	{
		global $smarty;
		$manufacturers = Manufacturer::getManufacturers();

		$smarty->assign(array(
			'manus' => $manufacturers,
			'ps_manu_img_dir' => _PS_MANU_IMG_DIR_
		));
		return $this->display(__FILE__, 'gameworldcsmanufacturer.tpl');
	}
	
	function hookHeader($params)
	{
		$this->context->controller->addJs($this->_path.'jquery.simplyscroll.js');
		$this->context->controller->addCss($this->_path.'jquery.simplyscroll.css', 'all');
	}
}


