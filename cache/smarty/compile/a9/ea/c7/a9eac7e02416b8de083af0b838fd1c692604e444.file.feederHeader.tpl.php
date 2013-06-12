<?php /* Smarty version Smarty-3.1.13, created on 2013-06-11 11:17:32
         compiled from "C:\wamp\www\iking\modules\feeder\feederHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3235451b73f8c067a09-97306657%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '3235451b73f8c067a09-97306657',
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
  'unifunc' => 'content_51b73f8c120740_84757412',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51b73f8c120740_84757412')) {function content_51b73f8c120740_84757412($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\wamp\\www\\iking\\tools\\smarty\\plugins\\modifier.escape.php';
?>

<link rel="alternate" type="application/rss+xml" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['meta_title']->value, 'html', 'UTF-8');?>
" href="<?php echo $_smarty_tpl->tpl_vars['feedUrl']->value;?>
" /><?php }} ?>