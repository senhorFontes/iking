<?php /* Smarty version Smarty-3.1.13, created on 2013-06-12 18:36:31
         compiled from "C:\wamp\www\iking\themes\gameworld\modules\blockadvertising\blockadvertising.tpl" */ ?>
<?php /*%%SmartyHeaderCode:863451b8f7ef7dccd5-28079611%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '382fe19eb1b1d82315ff55d4ec32684b8d8b0b31' => 
    array (
      0 => 'C:\\wamp\\www\\iking\\themes\\gameworld\\modules\\blockadvertising\\blockadvertising.tpl',
      1 => 1365620504,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '863451b8f7ef7dccd5-28079611',
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
  'unifunc' => 'content_51b8f7ef7fc9b9_39871905',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51b8f7ef7fc9b9_39871905')) {function content_51b8f7ef7fc9b9_39871905($_smarty_tpl) {?>

<!-- MODULE Block advertising -->
<div class="advertising_block">
	<a href="<?php echo $_smarty_tpl->tpl_vars['adv_link']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
"/></a>
</div>
<!-- /MODULE Block advertising -->
<?php }} ?>