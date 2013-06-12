<?php /* Smarty version Smarty-3.1.13, created on 2013-06-10 17:22:54
         compiled from "C:\wamp\www\paintball\themes\gameworld\modules\blockadvertising\blockadvertising.tpl" */ ?>
<?php /*%%SmartyHeaderCode:803651b643aeaf0460-25343731%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5cddbc030b72ee972ec3f1e08c84540f814b638' => 
    array (
      0 => 'C:\\wamp\\www\\paintball\\themes\\gameworld\\modules\\blockadvertising\\blockadvertising.tpl',
      1 => 1365620504,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '803651b643aeaf0460-25343731',
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
  'unifunc' => 'content_51b643aeb10278_22135746',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51b643aeb10278_22135746')) {function content_51b643aeb10278_22135746($_smarty_tpl) {?>

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