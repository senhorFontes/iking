<?php /* Smarty version Smarty-3.1.13, created on 2013-06-10 20:47:06
         compiled from "C:\Program Files (x86)\EasyPHP-DevServer-13.1VC9\data\localweb\projects\prestashop\admin\themes\default\template\helpers\list\list_action_default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:334451b61f2a086371-24377299%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb0e53b0b0d4eff738136a713cfb7203aa00a2e0' => 
    array (
      0 => 'C:\\Program Files (x86)\\EasyPHP-DevServer-13.1VC9\\data\\localweb\\projects\\prestashop\\admin\\themes\\default\\template\\helpers\\list\\list_action_default.tpl',
      1 => 1370608675,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '334451b61f2a086371-24377299',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51b61f2a291b48_76700591',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51b61f2a291b48_76700591')) {function content_51b61f2a291b48_76700591($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" class="default" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['name']->value)){?>name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"<?php }?>>
	<img src="../img/admin/asterisk.gif" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>