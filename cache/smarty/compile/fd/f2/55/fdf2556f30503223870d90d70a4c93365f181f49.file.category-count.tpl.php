<?php /* Smarty version Smarty-3.1.13, created on 2013-06-10 20:45:28
         compiled from "C:\Program Files (x86)\EasyPHP-DevServer-13.1VC9\data\localweb\projects\prestashop\themes\default\category-count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2396651b61ec8847929-55995041%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fdf2556f30503223870d90d70a4c93365f181f49' => 
    array (
      0 => 'C:\\Program Files (x86)\\EasyPHP-DevServer-13.1VC9\\data\\localweb\\projects\\prestashop\\themes\\default\\category-count.tpl',
      1 => 1370608753,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2396651b61ec8847929-55995041',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'nb_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51b61ec8926406_16467098',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51b61ec8926406_16467098')) {function content_51b61ec8926406_16467098($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['category']->value->id==1||$_smarty_tpl->tpl_vars['nb_products']->value==0){?>
	<?php echo smartyTranslate(array('s'=>'There are no products in  this category'),$_smarty_tpl);?>

<?php }else{ ?>
	<?php if ($_smarty_tpl->tpl_vars['nb_products']->value==1){?>
		<?php echo smartyTranslate(array('s'=>'There is %d product.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>

	<?php }else{ ?>
		<?php echo smartyTranslate(array('s'=>'There are %d products.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>

	<?php }?>
<?php }?><?php }} ?>