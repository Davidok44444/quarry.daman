<?php /* Smarty version Smarty-3.1.8, created on 2012-09-07 19:55:18
         compiled from "/home/u224958/quarry.ru/www//templates/skin/synio/actions/ActionSettings/tuning.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1270354948504a18e61ac431-49141670%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16fee1292427530a412912b0d380de11fec9050c' => 
    array (
      0 => '/home/u224958/quarry.ru/www//templates/skin/synio/actions/ActionSettings/tuning.tpl',
      1 => 1345531539,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1270354948504a18e61ac431-49141670',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LIVESTREET_SECURITY_KEY' => 0,
    'aLang' => 0,
    'oUserCurrent' => 0,
    'aTimezoneList' => 0,
    'sTimezone' => 0,
    '_aRequest' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_504a18e6265293_64226861',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_504a18e6265293_64226861')) {function content_504a18e6265293_64226861($_smarty_tpl) {?><?php if (!is_callable('smarty_function_hook')) include '/home/u224958/quarry.ru/www//engine/modules/viewer/plugs/function.hook.php';
if (!is_callable('smarty_function_router')) include '/home/u224958/quarry.ru/www//engine/modules/viewer/plugs/function.router.php';
?><?php $_smarty_tpl->tpl_vars["sidebarPosition"] = new Smarty_variable('left', null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



<?php echo $_smarty_tpl->getSubTemplate ('menu.settings.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



<?php echo smarty_function_hook(array('run'=>'settings_tuning_begin'),$_smarty_tpl);?>


<form action="<?php echo smarty_function_router(array('page'=>'settings'),$_smarty_tpl);?>
tuning/" method="POST" enctype="multipart/form-data" class="wrapper-content">
	<?php echo smarty_function_hook(array('run'=>'form_settings_tuning_begin'),$_smarty_tpl);?>


	<input type="hidden" name="security_ls_key" value="<?php echo $_smarty_tpl->tpl_vars['LIVESTREET_SECURITY_KEY']->value;?>
" />
	
	<h3><?php echo $_smarty_tpl->tpl_vars['aLang']->value['settings_tuning_notice'];?>
</h3>

	<label><input <?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value->getSettingsNoticeNewTopic()){?>checked<?php }?> type="checkbox" id="settings_notice_new_topic" name="settings_notice_new_topic" value="1" class="input-checkbox" /> <?php echo $_smarty_tpl->tpl_vars['aLang']->value['settings_tuning_notice_new_topic'];?>
</label>
	<label><input <?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value->getSettingsNoticeNewComment()){?>checked<?php }?> type="checkbox" id="settings_notice_new_comment" name="settings_notice_new_comment" value="1" class="input-checkbox" /> <?php echo $_smarty_tpl->tpl_vars['aLang']->value['settings_tuning_notice_new_comment'];?>
</label>
	<label><input <?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value->getSettingsNoticeNewTalk()){?>checked<?php }?> type="checkbox" id="settings_notice_new_talk" name="settings_notice_new_talk" value="1" class="input-checkbox" /> <?php echo $_smarty_tpl->tpl_vars['aLang']->value['settings_tuning_notice_new_talk'];?>
</label>
	<label><input <?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value->getSettingsNoticeReplyComment()){?>checked<?php }?> type="checkbox" id="settings_notice_reply_comment" name="settings_notice_reply_comment" value="1" class="input-checkbox" /> <?php echo $_smarty_tpl->tpl_vars['aLang']->value['settings_tuning_notice_reply_comment'];?>
</label>
	<label><input <?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value->getSettingsNoticeNewFriend()){?>checked<?php }?> type="checkbox" id="settings_notice_new_friend" name="settings_notice_new_friend" value="1" class="input-checkbox" /> <?php echo $_smarty_tpl->tpl_vars['aLang']->value['settings_tuning_notice_new_friend'];?>
</label>

	<br />
	<h3><?php echo $_smarty_tpl->tpl_vars['aLang']->value['settings_tuning_general'];?>
</h3>
	<label><?php echo $_smarty_tpl->tpl_vars['aLang']->value['settings_tuning_general_timezone'];?>
:
		<select name="settings_general_timezone" class="input-width-400">
			<?php  $_smarty_tpl->tpl_vars['sTimezone'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sTimezone']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aTimezoneList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sTimezone']->key => $_smarty_tpl->tpl_vars['sTimezone']->value){
$_smarty_tpl->tpl_vars['sTimezone']->_loop = true;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['sTimezone']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['_aRequest']->value['settings_general_timezone']==$_smarty_tpl->tpl_vars['sTimezone']->value){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['aLang']->value['timezone_list'][$_smarty_tpl->tpl_vars['sTimezone']->value];?>
</option>
			<?php } ?>
		</select>
	</label>


	<?php echo smarty_function_hook(array('run'=>'form_settings_tuning_end'),$_smarty_tpl);?>

	<br />
	<button type="submit"  name="submit_settings_tuning" class="button button-primary"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['settings_profile_submit'];?>
</button>
</form>

<?php echo smarty_function_hook(array('run'=>'settings_tuning_end'),$_smarty_tpl);?>


<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>