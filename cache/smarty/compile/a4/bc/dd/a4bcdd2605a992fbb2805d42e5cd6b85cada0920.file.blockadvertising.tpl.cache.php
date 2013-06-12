<?php /* Smarty version Smarty-3.1.13, created on 2013-06-10 20:49:30
         compiled from "C:\wamp\www\iking\modules\blockadvertising\blockadvertising.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3183851b6741ab65ac0-67606756%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4bcdd2605a992fbb2805d42e5cd6b85cada0920' => 
    array (
      0 => 'C:\\wamp\\www\\iking\\modules\\blockadvertising\\blockadvertising.tpl',
      1 => 1370608736,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3183851b6741ab65ac0-67606756',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'adv_link' => 0,
    'adv_title' => 0,
    'image' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51b6741abc46b7_08489340',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51b6741abc46b7_08489340')) {function content_51b6741abc46b7_08489340($_smarty_tpl) {?>

<!-- MODULE Block advertising -->
<div class="advertising_block">
	<a href="<?php echo $_smarty_tpl->tpl_vars['adv_link']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
" width="155"  height="163" /></a>
</div>
<!-- /MODULE Block advertising -->
<?php }} ?>