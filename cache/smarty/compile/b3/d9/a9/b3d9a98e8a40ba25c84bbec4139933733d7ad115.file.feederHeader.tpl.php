<?php /* Smarty version Smarty-3.1.13, created on 2013-06-10 17:22:21
         compiled from "C:\wamp\www\paintball\modules\feeder\feederHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1974351b6438db9d9c9-23598541%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3d9a98e8a40ba25c84bbec4139933733d7ad115' => 
    array (
      0 => 'C:\\wamp\\www\\paintball\\modules\\feeder\\feederHeader.tpl',
      1 => 1370608744,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1974351b6438db9d9c9-23598541',
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
  'unifunc' => 'content_51b6438dc531f1_81807246',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51b6438dc531f1_81807246')) {function content_51b6438dc531f1_81807246($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\wamp\\www\\paintball\\tools\\smarty\\plugins\\modifier.escape.php';
?>

<link rel="alternate" type="application/rss+xml" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['meta_title']->value, 'html', 'UTF-8');?>
" href="<?php echo $_smarty_tpl->tpl_vars['feedUrl']->value;?>
" /><?php }} ?>