<?php /* Smarty version Smarty-3.1.13, created on 2013-06-10 17:22:53
         compiled from "C:\wamp\www\paintball\themes\gameworld\modules\blockcurrencies\blockcurrencies.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1870951b643adb8e6d2-37140833%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb20a4a6bd09903696b77cb8a95748677afc40df' => 
    array (
      0 => 'C:\\wamp\\www\\paintball\\themes\\gameworld\\modules\\blockcurrencies\\blockcurrencies.tpl',
      1 => 1365620504,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1870951b643adb8e6d2-37140833',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'request_uri' => 0,
    'currencies' => 0,
    'cookie' => 0,
    'f_currency' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51b643adbccbe7_66690691',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51b643adbccbe7_66690691')) {function content_51b643adbccbe7_66690691($_smarty_tpl) {?>

<!-- Block currencies module -->
<div id="currencies_block_top">
	<form id="setCurrency" action="<?php echo $_smarty_tpl->tpl_vars['request_uri']->value;?>
" method="post">
		<p class="label"><?php echo smartyTranslate(array('s'=>'currency','mod'=>'blockcurrencies'),$_smarty_tpl);?>
</p>
		<p class="select">
			<select onchange="setCurrency(this.value);">
				<?php  $_smarty_tpl->tpl_vars['f_currency'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f_currency']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f_currency']->key => $_smarty_tpl->tpl_vars['f_currency']->value){
$_smarty_tpl->tpl_vars['f_currency']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['f_currency']->key;
?>
					<option <?php if ($_smarty_tpl->tpl_vars['cookie']->value->id_currency==$_smarty_tpl->tpl_vars['f_currency']->value['id_currency']){?>selected='selected'<?php }?> value='<?php echo $_smarty_tpl->tpl_vars['f_currency']->value['id_currency'];?>
'>
						<?php echo $_smarty_tpl->tpl_vars['f_currency']->value['sign'];?>

					</option>
				<?php } ?>
			</select>
		</p>
		<p>
				<input type="hidden" name="id_currency" id="id_currency" value=""/>
				<input type="hidden" name="SubmitCurrency" value="" />
		</p>
	</form>
</div>
<!-- /Block currencies module --><?php }} ?>