<?php /* Smarty version Smarty-3.1.13, created on 2013-06-10 19:07:20
         compiled from "C:\wamp\www\paintball\themes\default\mobile\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:509151b623e82bb856-52775380%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd36f75c8548e9a0fa979bb4f8241f70ae584b5f2' => 
    array (
      0 => 'C:\\wamp\\www\\paintball\\themes\\default\\mobile\\index.tpl',
      1 => 1370608757,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '509151b623e82bb856-52775380',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51b623e82c9b50_26522085',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51b623e82c9b50_26522085')) {function content_51b623e82c9b50_26522085($_smarty_tpl) {?>
	<div data-role="content" id="content">
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"DisplayMobileIndex"),$_smarty_tpl);?>

		<?php echo $_smarty_tpl->getSubTemplate ('./sitemap.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div><!-- /content -->
<?php }} ?>