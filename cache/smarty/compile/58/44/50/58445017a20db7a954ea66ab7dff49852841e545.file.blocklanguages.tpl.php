<?php /* Smarty version Smarty-3.1.13, created on 2013-06-12 18:36:30
         compiled from "C:\wamp\www\iking\themes\gameworld\modules\blocklanguages\blocklanguages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:424851b8f7ee3ee244-58213811%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58445017a20db7a954ea66ab7dff49852841e545' => 
    array (
      0 => 'C:\\wamp\\www\\iking\\themes\\gameworld\\modules\\blocklanguages\\blocklanguages.tpl',
      1 => 1365620502,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '424851b8f7ee3ee244-58213811',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'languages' => 0,
    'language' => 0,
    'lang_iso' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51b8f7ee42e745_89185528',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51b8f7ee42e745_89185528')) {function content_51b8f7ee42e745_89185528($_smarty_tpl) {?>

<!-- Block languages module -->
<div id="languages_block_top">
	<p class="label"><?php echo smartyTranslate(array('s'=>'language','mod'=>'blocklanguages'),$_smarty_tpl);?>
</p>
	<p class="select">
		<select onchange="javascript:location.href=this.value">
			<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value){
$_smarty_tpl->tpl_vars['language']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['language']->key;
?>
				<option <?php if ($_smarty_tpl->tpl_vars['language']->value['iso_code']==$_smarty_tpl->tpl_vars['lang_iso']->value){?>selected='selected'<?php }?> value='<?php echo $_smarty_tpl->tpl_vars['link']->value->getLanguageLink($_smarty_tpl->tpl_vars['language']->value['id_lang']);?>
'>
					<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>

				</option>
			<?php } ?>
		</select>
	</p>
</div>
<!-- /Block languages module -->
<?php }} ?>