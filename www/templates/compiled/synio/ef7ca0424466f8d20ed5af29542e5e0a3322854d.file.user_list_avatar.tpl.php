<?php /* Smarty version Smarty-3.1.8, created on 2012-09-05 00:01:34
         compiled from "/home/u224958/quarry.ru/www//templates/skin/synio/user_list_avatar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:157037500150465e1e2e06c9-45802469%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef7ca0424466f8d20ed5af29542e5e0a3322854d' => 
    array (
      0 => '/home/u224958/quarry.ru/www//templates/skin/synio/user_list_avatar.tpl',
      1 => 1345531564,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '157037500150465e1e2e06c9-45802469',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aUsersList' => 0,
    'oUserList' => 0,
    'sUserListEmpty' => 0,
    'aLang' => 0,
    'aPaging' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50465e1e80ce39_34535039',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50465e1e80ce39_34535039')) {function content_50465e1e80ce39_34535039($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['aUsersList']->value){?>
	<ul class="user-list-avatar">
		<?php  $_smarty_tpl->tpl_vars['oUserList'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oUserList']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aUsersList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oUserList']->key => $_smarty_tpl->tpl_vars['oUserList']->value){
$_smarty_tpl->tpl_vars['oUserList']->_loop = true;
?>
			<?php $_smarty_tpl->tpl_vars["oSession"] = new Smarty_variable($_smarty_tpl->tpl_vars['oUserList']->value->getSession(), null, 0);?>
			
			<li>
				<a href="<?php echo $_smarty_tpl->tpl_vars['oUserList']->value->getUserWebPath();?>
" title="<?php echo $_smarty_tpl->tpl_vars['oUserList']->value->getLogin();?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['oUserList']->value->getProfileAvatarPath(48);?>
" alt="avatar" class="avatar" /></a>
			</li>
		<?php } ?>
	</ul>
<?php }else{ ?>
	<?php if ($_smarty_tpl->tpl_vars['sUserListEmpty']->value){?>
		<div class="notice-empty"><?php echo $_smarty_tpl->tpl_vars['sUserListEmpty']->value;?>
</div>
	<?php }else{ ?>
		<div class="notice-empty"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_empty'];?>
</div>
	<?php }?>
<?php }?>


<?php echo $_smarty_tpl->getSubTemplate ('paging.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('aPaging'=>$_smarty_tpl->tpl_vars['aPaging']->value), 0);?>
<?php }} ?>