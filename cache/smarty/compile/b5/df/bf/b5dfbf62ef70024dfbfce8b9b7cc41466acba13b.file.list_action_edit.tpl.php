<?php /* Smarty version Smarty-3.1.13, created on 2013-06-10 21:14:15
         compiled from "C:\wamp\www\iking\admin4388\themes\default\template\helpers\list\list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:718451b679e7ace6f0-20047744%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5dfbf62ef70024dfbfce8b9b7cc41466acba13b' => 
    array (
      0 => 'C:\\wamp\\www\\iking\\admin4388\\themes\\default\\template\\helpers\\list\\list_action_edit.tpl',
      1 => 1370608676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '718451b679e7ace6f0-20047744',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51b679e7b4e0a1_18273508',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51b679e7b4e0a1_18273508')) {function content_51b679e7b4e0a1_18273508($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" class="edit" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<img src="../img/admin/edit.gif" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>