<?php /* Smarty version Smarty-3.1.13, created on 2013-06-10 17:22:55
         compiled from "C:\wamp\www\paintball\themes\gameworld\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1274551b643af80f361-37989714%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '666256a456b38e45dfeadd40310243c97b20b088' => 
    array (
      0 => 'C:\\wamp\\www\\paintball\\themes\\gameworld\\footer.tpl',
      1 => 1365620526,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1274551b643af80f361-37989714',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content_only' => 0,
    'page_name' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
    'HOOK_FOOTER' => 0,
    'PS_ALLOW_MOBILE_DEVICE' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51b643af851925_75858385',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51b643af851925_75858385')) {function content_51b643af851925_75858385($_smarty_tpl) {?>

		<?php if (!$_smarty_tpl->tpl_vars['content_only']->value){?>
				</div>
<?php if ($_smarty_tpl->tpl_vars['page_name']->value!='index'){?>
<!-- Right -->
				<div id="right_column" class="column grid_2 omega">
					<?php echo $_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value;?>

				</div>
<?php }?>
			</div>
<!-- Footer -->
			<div id="footer" class="grid_9 alpha omega clearfix">
				<div class="main_footer">
					<?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTER']->value;?>

					<?php if ($_smarty_tpl->tpl_vars['PS_ALLOW_MOBILE_DEVICE']->value){?>
					<p class="center clearBoth"><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('index',true);?>
?mobile_theme_ok"><?php echo smartyTranslate(array('s'=>'Browse the mobile site'),$_smarty_tpl);?>
</a></p>
					<?php }?>
				</div>
			</div>
		</div>
	</div>
	<?php }?>
	</body>
</html>
<?php }} ?>