<?php /* Smarty version Smarty-3.1.13, created on 2013-06-12 18:36:33
         compiled from "C:\wamp\www\iking\themes\gameworld\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2801051b8f7f10cccc8-37285804%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a42f0228a26218b897fd41ce18be5246fe66fef4' => 
    array (
      0 => 'C:\\wamp\\www\\iking\\themes\\gameworld\\header.tpl',
      1 => 1365620526,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2801051b8f7f10cccc8-37285804',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang_iso' => 0,
    'meta_title' => 0,
    'meta_description' => 0,
    'meta_keywords' => 0,
    'meta_language' => 0,
    'nobots' => 0,
    'nofollow' => 0,
    'favicon_url' => 0,
    'img_update_time' => 0,
    'content_dir' => 0,
    'base_uri' => 0,
    'static_token' => 0,
    'token' => 0,
    'priceDisplayPrecision' => 0,
    'currency' => 0,
    'priceDisplay' => 0,
    'roundMode' => 0,
    'css_files' => 0,
    'css_uri' => 0,
    'media' => 0,
    'js_files' => 0,
    'js_uri' => 0,
    'css_dir' => 0,
    'page_name' => 0,
    'js_dir' => 0,
    'HOOK_HEADER' => 0,
    'hide_left_column' => 0,
    'hide_right_column' => 0,
    'content_only' => 0,
    'restricted_country_mode' => 0,
    'geolocation_country' => 0,
    'link' => 0,
    'shop_name' => 0,
    'img_ps_dir' => 0,
    'HOOK_TOP' => 0,
    'HOOK_MY_STATIC_TOP' => 0,
    'HOOK_LEFT_COLUMN' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51b8f7f12b1209_18218058',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51b8f7f12b1209_18218058')) {function content_51b8f7f12b1209_18218058($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\wamp\\www\\iking\\tools\\smarty\\plugins\\modifier.escape.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7 lt-ie6 " lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8 ie7" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9 ie8" lang="en"> <![endif]-->
<!--[if gt IE 8]> <html lang="fr" class="no-js ie9" lang="en"> <![endif]-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
">
	<head>
		<title><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['meta_title']->value, 'htmlall', 'UTF-8');?>
</title>
<?php if (isset($_smarty_tpl->tpl_vars['meta_description']->value)&&$_smarty_tpl->tpl_vars['meta_description']->value){?>
		<meta name="description" content="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['meta_description']->value, 'html', 'UTF-8');?>
" />
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['meta_keywords']->value)&&$_smarty_tpl->tpl_vars['meta_keywords']->value){?>
		<meta name="keywords" content="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['meta_keywords']->value, 'html', 'UTF-8');?>
" />
<?php }?>
		<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
		<meta http-equiv="content-language" content="<?php echo $_smarty_tpl->tpl_vars['meta_language']->value;?>
" />
		<meta name="generator" content="PrestaShop" />
		<meta name="robots" content="<?php if (isset($_smarty_tpl->tpl_vars['nobots']->value)){?>no<?php }?>index,<?php if (isset($_smarty_tpl->tpl_vars['nofollow']->value)&&$_smarty_tpl->tpl_vars['nofollow']->value){?>no<?php }?>follow" />
		<link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo $_smarty_tpl->tpl_vars['favicon_url']->value;?>
?<?php echo $_smarty_tpl->tpl_vars['img_update_time']->value;?>
" />
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo $_smarty_tpl->tpl_vars['favicon_url']->value;?>
?<?php echo $_smarty_tpl->tpl_vars['img_update_time']->value;?>
" />
		<script type="text/javascript">
			var baseDir = '<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
';
			var baseUri = '<?php echo $_smarty_tpl->tpl_vars['base_uri']->value;?>
';
			var static_token = '<?php echo $_smarty_tpl->tpl_vars['static_token']->value;?>
';
			var token = '<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
';
			var priceDisplayPrecision = <?php echo $_smarty_tpl->tpl_vars['priceDisplayPrecision']->value*$_smarty_tpl->tpl_vars['currency']->value->decimals;?>
;
			var priceDisplayMethod = <?php echo $_smarty_tpl->tpl_vars['priceDisplay']->value;?>
;
			var roundMode = <?php echo $_smarty_tpl->tpl_vars['roundMode']->value;?>
;
		</script>
<?php if (isset($_smarty_tpl->tpl_vars['css_files']->value)){?>
	<?php  $_smarty_tpl->tpl_vars['media'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['media']->_loop = false;
 $_smarty_tpl->tpl_vars['css_uri'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['css_files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['media']->key => $_smarty_tpl->tpl_vars['media']->value){
$_smarty_tpl->tpl_vars['media']->_loop = true;
 $_smarty_tpl->tpl_vars['css_uri']->value = $_smarty_tpl->tpl_vars['media']->key;
?>
	<link href="<?php echo $_smarty_tpl->tpl_vars['css_uri']->value;?>
" rel="stylesheet" type="text/css" media="<?php echo $_smarty_tpl->tpl_vars['media']->value;?>
" />
	<?php } ?>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['js_files']->value)){?>
	<?php  $_smarty_tpl->tpl_vars['js_uri'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js_uri']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['js_files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js_uri']->key => $_smarty_tpl->tpl_vars['js_uri']->value){
$_smarty_tpl->tpl_vars['js_uri']->_loop = true;
?>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js_uri']->value;?>
"></script>
	<?php } ?>
<?php }?>
<!--[if IE 7]><link href="<?php echo $_smarty_tpl->tpl_vars['css_dir']->value;?>
global-ie.css" rel="stylesheet" type="text/css" media="<?php echo $_smarty_tpl->tpl_vars['media']->value;?>
" /><![endif]-->
<?php if ($_smarty_tpl->tpl_vars['page_name']->value=='products-comparison'){?>
	<link href="<?php echo $_smarty_tpl->tpl_vars['css_dir']->value;?>
jquery.jscrollpane.css" rel="stylesheet" type="text/css" media="<?php echo $_smarty_tpl->tpl_vars['media']->value;?>
" />
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js_dir']->value;?>
jquery.jscrollpane.min.js"></script>
<?php }?>
		<?php echo $_smarty_tpl->tpl_vars['HOOK_HEADER']->value;?>

	</head>
	
	<body <?php if (isset($_smarty_tpl->tpl_vars['page_name']->value)){?>id="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page_name']->value, 'htmlall', 'UTF-8');?>
"<?php }?> class="<?php if ($_smarty_tpl->tpl_vars['hide_left_column']->value){?>hide-left-column<?php }?> <?php if ($_smarty_tpl->tpl_vars['hide_right_column']->value){?>hide-right-column<?php }?>">
	<?php if (!$_smarty_tpl->tpl_vars['content_only']->value){?>
		<?php if (isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&$_smarty_tpl->tpl_vars['restricted_country_mode']->value){?>
		<div id="restricted-country">
			<p><?php echo smartyTranslate(array('s'=>'You cannot place a new order from your country.'),$_smarty_tpl);?>
 <span class="bold"><?php echo $_smarty_tpl->tpl_vars['geolocation_country']->value;?>
</span></p>
		</div>
		<?php }?>
		<div class="wrapper">
		<div id="page" class="container_9 clearfix">

			<!-- Header -->
			<div id="header" class="grid_9 alpha omega">
				<a id="header_logo" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('index.php');?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['shop_name']->value, 'htmlall', 'UTF-8');?>
">
					<img class="logo" src="<?php echo $_smarty_tpl->tpl_vars['img_ps_dir']->value;?>
logo.jpg?<?php echo $_smarty_tpl->tpl_vars['img_update_time']->value;?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['shop_name']->value, 'htmlall', 'UTF-8');?>
"/>
				</a>
				<div id="header_right" class="grid_6 omega">
					<?php echo $_smarty_tpl->tpl_vars['HOOK_TOP']->value;?>

					<?php if ($_smarty_tpl->tpl_vars['HOOK_MY_STATIC_TOP']->value){?><?php echo $_smarty_tpl->tpl_vars['HOOK_MY_STATIC_TOP']->value;?>
<?php }?>
				</div>
			</div>
		<?php if ($_smarty_tpl->tpl_vars['page_name']->value!=='index'){?>
				<!-- Breadcumb -->
				<script type="text/javascript">
					jQuery(document).ready(function() {
						if (jQuery("#old_bc").html()) {
							jQuery("#bc").html(jQuery("#old_bc").html());
							jQuery("#old_bc").hide();
						}
					});
				</script>
				<div class="bc_line">
					<div id="bc" class="breadcrumb"></div>
				</div>
			<?php }?>
			<div id="columns" class="grid_9 alpha omega clearfix">
				<!-- Left -->
				<?php if ($_smarty_tpl->tpl_vars['page_name']->value!='index'){?>
				<div id="left_column" class="column grid_2 alpha">
					<?php echo $_smarty_tpl->tpl_vars['HOOK_LEFT_COLUMN']->value;?>

				</div>
				<?php }?>
				<!-- Center -->
				<div id="center_column" class=" grid_5">
		<?php }?>
<?php }} ?>