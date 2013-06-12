<?php /* Smarty version Smarty-3.1.13, created on 2013-06-10 19:07:19
         compiled from "C:\wamp\www\paintball\themes\default\mobile\errors.tpl" */ ?>
<?php /*%%SmartyHeaderCode:672751b623e7bb9136-67426887%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1833c5c9574ed7f9b848a385ce3761e06b00603' => 
    array (
      0 => 'C:\\wamp\\www\\paintball\\themes\\default\\mobile\\errors.tpl',
      1 => 1370608757,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '672751b623e7bb9136-67426887',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errors' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51b623e7c1fc13_85697188',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51b623e7c1fc13_85697188')) {function content_51b623e7c1fc13_85697188($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['errors']->value)&&$_smarty_tpl->tpl_vars['errors']->value){?>
	<script type="text/javascript">
		
		function popErrorMessage(errorTitle, errorMessage)
		{
			$('<div class="error-box"><h1>'+errorTitle+'</h1>'+errorMessage+'</div>').appendTo('body');
			var close_bt = '';
			close_bt += '<a href="#" data-role="button" data-icon="delete" data-iconpos="notext" data-theme="e" class="close-bt" >delete</a>';
			$('.error-box').append(close_bt);
			$('.error-box').find('.close-bt').button();
			$('.error-box').find('.close-bt').bind('click', function(e)
			{
				e.preventDefault();
				$('.error-box').fadeOut(400, function() {
					$(this).remove();
				})
			});
		}
		$(function()
		{
			var errorTitle = '<?php if (count($_smarty_tpl->tpl_vars['errors']->value)>1){?><?php echo smartyTranslate(array('s'=>'There are %d errors:','js'=>1,'sprintf'=>count($_smarty_tpl->tpl_vars['errors']->value)),$_smarty_tpl);?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>'There is %d error:','js'=>1,'sprintf'=>count($_smarty_tpl->tpl_vars['errors']->value)),$_smarty_tpl);?>
<?php }?>';
			var errorMessage = '<ol>';
			
			<?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value){
$_smarty_tpl->tpl_vars['error']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['error']->key;
?>
			errorMessage += '<li><?php echo addslashes($_smarty_tpl->tpl_vars['error']->value);?>
</li>';
			<?php } ?>
			
			errorMessage += '</ol>';
			popErrorMessage(errorTitle, errorMessage);
		});
		
	</script>
<?php }?>
<?php }} ?>