<?php /* Smarty version Smarty-3.1.13, created on 2013-06-10 17:22:53
         compiled from "C:\wamp\www\paintball\themes\gameworld\modules\blockpermanentlinks\blockpermanentlinks-header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1335451b643adbf1b21-94935760%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '255cdacfc5fc1e639b3d86e0f2116dacccc6a518' => 
    array (
      0 => 'C:\\wamp\\www\\paintball\\themes\\gameworld\\modules\\blockpermanentlinks\\blockpermanentlinks-header.tpl',
      1 => 1365620502,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1335451b643adbf1b21-94935760',
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
  'unifunc' => 'content_51b643adcbed54_96791263',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51b643adcbed54_96791263')) {function content_51b643adcbed54_96791263($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\wamp\\www\\paintball\\tools\\smarty\\plugins\\modifier.escape.php';
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