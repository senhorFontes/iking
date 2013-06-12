<?php /* Smarty version Smarty-3.1.13, created on 2013-06-10 17:22:23
         compiled from "C:\wamp\www\paintball\modules\blockadvertising\blockadvertising.tpl" */ ?>
<?php /*%%SmartyHeaderCode:753451b6438fa89292-52942971%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98e91f4d3f9e98abe73c3e06aaaa45f73e30b1df' => 
    array (
      0 => 'C:\\wamp\\www\\paintball\\modules\\blockadvertising\\blockadvertising.tpl',
      1 => 1370608736,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '753451b6438fa89292-52942971',
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
  'unifunc' => 'content_51b6438fad1610_19089607',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51b6438fad1610_19089607')) {function content_51b6438fad1610_19089607($_smarty_tpl) {?>

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