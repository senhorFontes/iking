<?php /* Smarty version Smarty-3.1.13, created on 2013-06-10 19:07:29
         compiled from "C:\wamp\www\paintball\admin\themes\default\template\helpers\list\list_action_transferstock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:347451b623f15809e3-80597600%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '60781d61669861bfde6650f9bed92a0c88693425' => 
    array (
      0 => 'C:\\wamp\\www\\paintball\\admin\\themes\\default\\template\\helpers\\list\\list_action_transferstock.tpl',
      1 => 1370608676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '347451b623f15809e3-80597600',
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
  'unifunc' => 'content_51b623f1598ca7_32379602',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51b623f1598ca7_32379602')) {function content_51b623f1598ca7_32379602($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<img src="../img/admin/transfer_stock.png" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a>
<?php }} ?>