<?php /* Smarty version Smarty-3.1.13, created on 2013-06-11 11:17:32
         compiled from "C:\wamp\www\iking\themes\gameworld\modules\blockpermanentlinks\blockpermanentlinks-header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3152951b73f8c486f17-08290072%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aeeed6fc44e45dd253f8601a2773be53da7aa9b2' => 
    array (
      0 => 'C:\\wamp\\www\\iking\\themes\\gameworld\\modules\\blockpermanentlinks\\blockpermanentlinks-header.tpl',
      1 => 1365620502,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3152951b73f8c486f17-08290072',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_name' => 0,
    'base_dir' => 0,
    'shop_name' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51b73f8c61f7d3_71637342',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51b73f8c61f7d3_71637342')) {function content_51b73f8c61f7d3_71637342($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\wamp\\www\\iking\\tools\\smarty\\plugins\\modifier.escape.php';
?>

<!-- Block permanent links module HEADER -->
<ul id="header_links">
	<li id="header_link_home" <?php if ($_smarty_tpl->tpl_vars['page_name']->value=='index'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['shop_name']->value, 'htmlall', 'UTF-8');?>
" ><?php echo smartyTranslate(array('s'=>'Home','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
</a></li>
	<li id="header_link_specialproduct" <?php if ($_smarty_tpl->tpl_vars['page_name']->value=='prices-drop'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('prices-drop');?>
" title="<?php echo smartyTranslate(array('s'=>'All specials','mod'=>'blockspecials'),$_smarty_tpl);?>
" ><?php echo smartyTranslate(array('s'=>'Specials','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
</a></li>
	<li id="header_link_sitemap" <?php if ($_smarty_tpl->tpl_vars['page_name']->value=='sitemap'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('sitemap');?>
" title="<?php echo smartyTranslate(array('s'=>'sitemap','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
"  ><?php echo smartyTranslate(array('s'=>'Sitemap','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
</a></li>
	<li id="header_link_contact" <?php if ($_smarty_tpl->tpl_vars['page_name']->value=='contact'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true);?>
" title="<?php echo smartyTranslate(array('s'=>'contact','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
" ><?php echo smartyTranslate(array('s'=>'Contact','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
</a></li>
</ul>
<!-- /Block permanent links module HEADER -->
<?php }} ?>