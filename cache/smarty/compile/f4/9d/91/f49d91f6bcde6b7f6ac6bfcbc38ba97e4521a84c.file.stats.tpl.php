<?php /* Smarty version Smarty-3.1.13, created on 2013-06-10 19:07:25
         compiled from "C:\wamp\www\paintball\admin\themes\default\template\controllers\stats\stats.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2328851b623ed8b9757-80770101%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f49d91f6bcde6b7f6ac6bfcbc38ba97e4521a84c' => 
    array (
      0 => 'C:\\wamp\\www\\paintball\\admin\\themes\\default\\template\\controllers\\stats\\stats.tpl',
      1 => 1370608673,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2328851b623ed8b9757-80770101',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_name' => 0,
    'module_instance' => 0,
    'hook' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51b623ed8f2fb5_39752350',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51b623ed8f2fb5_39752350')) {function content_51b623ed8f2fb5_39752350($_smarty_tpl) {?>

<div>
	<?php if ($_smarty_tpl->tpl_vars['module_name']->value){?>
		<?php if ($_smarty_tpl->tpl_vars['module_instance']->value&&$_smarty_tpl->tpl_vars['module_instance']->value->active){?>
			<?php echo $_smarty_tpl->tpl_vars['hook']->value;?>

		<?php }else{ ?>
			<?php echo smartyTranslate(array('s'=>'Module not found'),$_smarty_tpl);?>

		<?php }?>
	<?php }else{ ?>
		<h3 class="space"><?php echo smartyTranslate(array('s'=>'Please select a module from the left column.'),$_smarty_tpl);?>
</h3>
	<?php }?>
</div>
</div>
</div>


<?php }} ?>