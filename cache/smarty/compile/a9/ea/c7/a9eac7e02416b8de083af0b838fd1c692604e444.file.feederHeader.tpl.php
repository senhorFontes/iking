<?php /* Smarty version Smarty-3.1.13, created on 2013-06-12 18:36:30
         compiled from "C:\wamp\www\iking\modules\feeder\feederHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1497151b8f7ee3ac2a8-78128736%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a9eac7e02416b8de083af0b838fd1c692604e444' => 
    array (
      0 => 'C:\\wamp\\www\\iking\\modules\\feeder\\feederHeader.tpl',
      1 => 1370608744,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1497151b8f7ee3ac2a8-78128736',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'meta_title' => 0,
    'feedUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51b8f7ee3c6255_73623536',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51b8f7ee3c6255_73623536')) {function content_51b8f7ee3c6255_73623536($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\wamp\\www\\iking\\tools\\smarty\\plugins\\modifier.escape.php';
?>

<link rel="alternate" type="application/rss+xml" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['meta_title']->value, 'html', 'UTF-8');?>
" href="<?php echo $_smarty_tpl->tpl_vars['feedUrl']->value;?>
" /><?php }} ?>