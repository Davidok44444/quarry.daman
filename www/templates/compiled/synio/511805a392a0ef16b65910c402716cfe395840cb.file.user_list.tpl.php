<?php /* Smarty version Smarty-3.1.8, created on 2012-09-04 23:07:51
         compiled from "/home/u224958/quarry.ru/www//templates/skin/synio/user_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26987841150465187417f00-86328978%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '511805a392a0ef16b65910c402716cfe395840cb' => 
    array (
      0 => '/home/u224958/quarry.ru/www//templates/skin/synio/user_list.tpl',
      1 => 1345531564,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26987841150465187417f00-86328978',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'bUsersUseOrder' => 0,
    'sUsersOrder' => 0,
    'sUsersRootPage' => 0,
    'sUsersOrderWayNext' => 0,
    'sUsersOrderWay' => 0,
    'aLang' => 0,
    'aUsersList' => 0,
    'oUserList' => 0,
    'oUserCurrent' => 0,
    'oUserNote' => 0,
    'sUserListEmpty' => 0,
    'aPaging' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_504651875b4996_91913949',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_504651875b4996_91913949')) {function content_504651875b4996_91913949($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/home/u224958/quarry.ru/www//engine/modules/viewer/plugs/function.router.php';
?><table class="table table-users">
	<?php if ($_smarty_tpl->tpl_vars['bUsersUseOrder']->value){?>
		<thead>
			<tr>
				<th class="cell-name cell-tab">
					<div class="cell-tab-inner <?php if ($_smarty_tpl->tpl_vars['sUsersOrder']->value=='user_login'){?>active<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['sUsersRootPage']->value;?>
?order=user_login&order_way=<?php if ($_smarty_tpl->tpl_vars['sUsersOrder']->value=='user_login'){?><?php echo $_smarty_tpl->tpl_vars['sUsersOrderWayNext']->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['sUsersOrderWay']->value;?>
<?php }?>" <?php if ($_smarty_tpl->tpl_vars['sUsersOrder']->value=='user_login'){?>class="<?php echo $_smarty_tpl->tpl_vars['sUsersOrderWay']->value;?>
"<?php }?>><span><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user'];?>
</span></a></div>
				</th>
				<th>&nbsp;</th>
				<th class="cell-skill cell-tab">
					<div class="cell-tab-inner <?php if ($_smarty_tpl->tpl_vars['sUsersOrder']->value=='user_skill'){?>active<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['sUsersRootPage']->value;?>
?order=user_skill&order_way=<?php if ($_smarty_tpl->tpl_vars['sUsersOrder']->value=='user_skill'){?><?php echo $_smarty_tpl->tpl_vars['sUsersOrderWayNext']->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['sUsersOrderWay']->value;?>
<?php }?>" <?php if ($_smarty_tpl->tpl_vars['sUsersOrder']->value=='user_skill'){?>class="<?php echo $_smarty_tpl->tpl_vars['sUsersOrderWay']->value;?>
"<?php }?>><span><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_skill'];?>
</span></a></div>
				</th>
				<th class="cell-rating cell-tab">
					<div class="cell-tab-inner <?php if ($_smarty_tpl->tpl_vars['sUsersOrder']->value=='user_rating'){?>active<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['sUsersRootPage']->value;?>
?order=user_rating&order_way=<?php if ($_smarty_tpl->tpl_vars['sUsersOrder']->value=='user_rating'){?><?php echo $_smarty_tpl->tpl_vars['sUsersOrderWayNext']->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['sUsersOrderWay']->value;?>
<?php }?>" <?php if ($_smarty_tpl->tpl_vars['sUsersOrder']->value=='user_rating'){?>class="<?php echo $_smarty_tpl->tpl_vars['sUsersOrderWay']->value;?>
"<?php }?>><span><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_rating'];?>
</span></a></div>
				</th>
			</tr>
		</thead>
	<?php }else{ ?>
		<thead>
			<tr>
				<th class="cell-name cell-tab"><div class="cell-tab-inner"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user'];?>
</div></th>
				<th>&nbsp;</th>
				<th class="cell-skill cell-tab"><div class="cell-tab-inner"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_skill'];?>
</div></th>
				<th class="cell-rating cell-tab">
					<div class="cell-tab-inner active"><span><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_rating'];?>
</span></div>
				</th>
			</tr>
		</thead>
	<?php }?>

	<tbody>
		<?php if ($_smarty_tpl->tpl_vars['aUsersList']->value){?>
			<?php  $_smarty_tpl->tpl_vars['oUserList'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oUserList']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aUsersList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oUserList']->key => $_smarty_tpl->tpl_vars['oUserList']->value){
$_smarty_tpl->tpl_vars['oUserList']->_loop = true;
?>
				<?php $_smarty_tpl->tpl_vars["oSession"] = new Smarty_variable($_smarty_tpl->tpl_vars['oUserList']->value->getSession(), null, 0);?>
				<?php $_smarty_tpl->tpl_vars["oUserNote"] = new Smarty_variable($_smarty_tpl->tpl_vars['oUserList']->value->getUserNote(), null, 0);?>
				<tr>
					<td class="cell-name">
						<a href="<?php echo $_smarty_tpl->tpl_vars['oUserList']->value->getUserWebPath();?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['oUserList']->value->getProfileAvatarPath(48);?>
" alt="avatar" class="avatar" /></a>
						<div class="name <?php if (!$_smarty_tpl->tpl_vars['oUserList']->value->getProfileName()){?>no-realname<?php }?>">
							<p class="username word-wrap"><a href="<?php echo $_smarty_tpl->tpl_vars['oUserList']->value->getUserWebPath();?>
"><?php echo $_smarty_tpl->tpl_vars['oUserList']->value->getLogin();?>
</a></p>
							<?php if ($_smarty_tpl->tpl_vars['oUserList']->value->getProfileName()){?><p class="realname"><?php echo $_smarty_tpl->tpl_vars['oUserList']->value->getProfileName();?>
</p><?php }?>
						</div>
					</td>
					<td>
						<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value){?>
							<?php if ($_smarty_tpl->tpl_vars['oUserNote']->value){?>
								<button type="button" class="button button-action button-action-note js-infobox" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oUserNote']->value->getText(), ENT_QUOTES, 'UTF-8', true);?>
"><i class="icon-synio-comments-green"></i></button>
							<?php }?>
							<a href="<?php echo smarty_function_router(array('page'=>'talk'),$_smarty_tpl);?>
add/?talk_users=<?php echo $_smarty_tpl->tpl_vars['oUserList']->value->getLogin();?>
"><button type="submit"  class="button button-action button-action-send-message"><i class="icon-synio-send-message"></i><span><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_write_prvmsg'];?>
</span></button></a>
						<?php }?>
					</td>
					<td class="cell-skill"><?php echo $_smarty_tpl->tpl_vars['oUserList']->value->getSkill();?>
</td>
					<td class="cell-rating <?php if ($_smarty_tpl->tpl_vars['oUserList']->value->getRating()<0){?>negative<?php }?>"><strong><?php echo $_smarty_tpl->tpl_vars['oUserList']->value->getRating();?>
</strong></td>
				</tr>
			<?php } ?>
		<?php }else{ ?>
			<tr>
				<td colspan="4">
					<?php if ($_smarty_tpl->tpl_vars['sUserListEmpty']->value){?>
						<?php echo $_smarty_tpl->tpl_vars['sUserListEmpty']->value;?>

					<?php }else{ ?>
						<?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_empty'];?>

					<?php }?>
				</td>
			</tr>
		<?php }?>
	</tbody>
</table>


<?php echo $_smarty_tpl->getSubTemplate ('paging.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('aPaging'=>$_smarty_tpl->tpl_vars['aPaging']->value), 0);?>
<?php }} ?>