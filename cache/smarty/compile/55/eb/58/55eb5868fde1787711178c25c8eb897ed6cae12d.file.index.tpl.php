<?php /* Smarty version Smarty-3.1.13, created on 2013-06-11 00:27:17
         compiled from "C:\wamp\www\iking\themes\default\mobile\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2136651b66ee594fd04-71425440%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55eb5868fde1787711178c25c8eb897ed6cae12d' => 
    array (
      0 => 'C:\\wamp\\www\\iking\\themes\\default\\mobile\\index.tpl',
      1 => 1370608757,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2136651b66ee594fd04-71425440',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51b66ee595e9c6_24574560',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51b66ee595e9c6_24574560')) {function content_51b66ee595e9c6_24574560($_smarty_tpl) {?>
	<div data-role="content" id="content">
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"DisplayMobileIndex"),$_smarty_tpl);?>

		<?php echo $_smarty_tpl->getSubTemplate ('./sitemap.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div><!-- /content -->
<?php }} ?>