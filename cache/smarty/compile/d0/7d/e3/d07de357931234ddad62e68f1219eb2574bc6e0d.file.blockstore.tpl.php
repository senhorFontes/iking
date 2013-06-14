<?php /* Smarty version Smarty-3.1.13, created on 2013-06-12 18:36:32
         compiled from "C:\wamp\www\iking\themes\gameworld\modules\blockstore\blockstore.tpl" */ ?>
<?php /*%%SmartyHeaderCode:807051b8f7f013d5a0-21919569%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd07de357931234ddad62e68f1219eb2574bc6e0d' => 
    array (
      0 => 'C:\\wamp\\www\\iking\\themes\\gameworld\\modules\\blockstore\\blockstore.tpl',
      1 => 1365620504,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '807051b8f7f013d5a0-21919569',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'module_dir' => 0,
    'store_img' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51b8f7f018a218_42003896',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51b8f7f018a218_42003896')) {function content_51b8f7f018a218_42003896($_smarty_tpl) {?>

<!-- Block stores module -->
<div id="stores_block_left" class="block">
	<h4><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('stores');?>
" title="<?php echo smartyTranslate(array('s'=>'Our stores','mod'=>'blockstore'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Our stores','mod'=>'blockstore'),$_smarty_tpl);?>
</a></h4>
	<div class="block_content blockstore">
		<p>
			<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('stores');?>
" title="<?php echo smartyTranslate(array('s'=>'Our stores','mod'=>'blockstore'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
<?php echo $_smarty_tpl->tpl_vars['store_img']->value;?>
" alt="<?php echo smartyTranslate(array('s'=>'Our stores','mod'=>'blockstore'),$_smarty_tpl);?>
" /></a>
			<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('stores');?>
" title="<?php echo smartyTranslate(array('s'=>'Our stores','mod'=>'blockstore'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Discover our stores','mod'=>'blockstore'),$_smarty_tpl);?>
</a>
		</p>
	</div>
</div>
<!-- /Block stores module -->
<?php }} ?>