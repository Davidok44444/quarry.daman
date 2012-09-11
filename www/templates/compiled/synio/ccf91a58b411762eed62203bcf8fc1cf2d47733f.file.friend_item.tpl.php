<?php /* Smarty version Smarty-3.1.8, created on 2012-09-04 11:35:45
         compiled from "/home/u224958/quarry.ru/www//templates/skin/synio/actions/ActionProfile/friend_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1314297585045af51cb9a53-52011900%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ccf91a58b411762eed62203bcf8fc1cf2d47733f' => 
    array (
      0 => '/home/u224958/quarry.ru/www//templates/skin/synio/actions/ActionProfile/friend_item.tpl',
      1 => 1345531536,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1314297585045af51cb9a53-52011900',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oUserFriend' => 0,
    'USER_FRIEND_ACCEPT' => 0,
    'USER_FRIEND_OFFER' => 0,
    'aLang' => 0,
    'oUserProfile' => 0,
    'USER_FRIEND_REJECT' => 0,
    'oUserCurrent' => 0,
    'USER_FRIEND_NULL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5045af51e0e0e7_58833978',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5045af51e0e0e7_58833978')) {function content_5045af51e0e0e7_58833978($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['oUserFriend']->value&&($_smarty_tpl->tpl_vars['oUserFriend']->value->getFriendStatus()==$_smarty_tpl->tpl_vars['USER_FRIEND_ACCEPT']->value+$_smarty_tpl->tpl_vars['USER_FRIEND_OFFER']->value||$_smarty_tpl->tpl_vars['oUserFriend']->value->getFriendStatus()==$_smarty_tpl->tpl_vars['USER_FRIEND_ACCEPT']->value+$_smarty_tpl->tpl_vars['USER_FRIEND_ACCEPT']->value)){?>
	<li id="delete_friend_item"><a href="#"  title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_friend_del'];?>
" onclick="return ls.user.removeFriend(this,<?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getId();?>
,'del');"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_friend_del'];?>
</a></li>
<?php }elseif($_smarty_tpl->tpl_vars['oUserFriend']->value&&$_smarty_tpl->tpl_vars['oUserFriend']->value->getStatusTo()==$_smarty_tpl->tpl_vars['USER_FRIEND_REJECT']->value&&$_smarty_tpl->tpl_vars['oUserFriend']->value->getStatusFrom()==$_smarty_tpl->tpl_vars['USER_FRIEND_OFFER']->value&&$_smarty_tpl->tpl_vars['oUserFriend']->value->getUserTo()==$_smarty_tpl->tpl_vars['oUserCurrent']->value->getId()){?>
	<li id="add_friend_item"><a href="#"  title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_friend_add'];?>
" onclick="return ls.user.addFriend(this,<?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getId();?>
,'accept');"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_friend_add'];?>
</a></li>
<?php }elseif($_smarty_tpl->tpl_vars['oUserFriend']->value&&$_smarty_tpl->tpl_vars['oUserFriend']->value->getFriendStatus()==$_smarty_tpl->tpl_vars['USER_FRIEND_OFFER']->value+$_smarty_tpl->tpl_vars['USER_FRIEND_REJECT']->value&&$_smarty_tpl->tpl_vars['oUserFriend']->value->getUserTo()!=$_smarty_tpl->tpl_vars['oUserCurrent']->value->getId()){?>
	<li><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_friend_offer_reject'];?>
</li>							
<?php }elseif($_smarty_tpl->tpl_vars['oUserFriend']->value&&$_smarty_tpl->tpl_vars['oUserFriend']->value->getFriendStatus()==$_smarty_tpl->tpl_vars['USER_FRIEND_OFFER']->value+$_smarty_tpl->tpl_vars['USER_FRIEND_NULL']->value&&$_smarty_tpl->tpl_vars['oUserFriend']->value->getUserFrom()==$_smarty_tpl->tpl_vars['oUserCurrent']->value->getId()){?>
	<li><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_friend_offer_send'];?>
</li>						
<?php }elseif($_smarty_tpl->tpl_vars['oUserFriend']->value&&$_smarty_tpl->tpl_vars['oUserFriend']->value->getFriendStatus()==$_smarty_tpl->tpl_vars['USER_FRIEND_OFFER']->value+$_smarty_tpl->tpl_vars['USER_FRIEND_NULL']->value&&$_smarty_tpl->tpl_vars['oUserFriend']->value->getUserTo()==$_smarty_tpl->tpl_vars['oUserCurrent']->value->getId()){?>
	<li id="add_friend_item"><a href="#"  title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_friend_add'];?>
" onclick="return ls.user.addFriend(this,<?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getId();?>
,'accept');"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_friend_add'];?>
</a></li>
<?php }elseif(!$_smarty_tpl->tpl_vars['oUserFriend']->value){?>
	<div id="add_friend_form" class="modal">
		<header class="modal-header">
			<h3><?php echo $_smarty_tpl->tpl_vars['aLang']->value['profile_add_friend'];?>
</h3>
			<a href="#" class="close jqmClose"></a>
		</header>

		<form onsubmit="return ls.user.addFriend(this,<?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getId();?>
,'add');" class="modal-content">
			<p><label for="add_friend_text"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_friend_add_text_label'];?>
</label>
			<textarea id="add_friend_text" rows="3" class="input-text input-width-full"></textarea></p>

			<button type="submit"  class="button button-primary"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_friend_add_submit'];?>
</button>
		</form>
	</div>
	<li id="add_friend_item"><a href="#"  title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_friend_add'];?>
" id="add_friend_show"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_friend_add'];?>
</a></li>
<?php }else{ ?>
	<li id="add_friend_item"><a href="#" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_friend_add'];?>
" onclick="return ls.user.addFriend(this,<?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getId();?>
,'link');"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_friend_add'];?>
</a></li>
<?php }?><?php }} ?>