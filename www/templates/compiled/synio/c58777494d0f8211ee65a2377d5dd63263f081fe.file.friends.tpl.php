<?php /* Smarty version Smarty-3.1.8, created on 2012-09-11 13:49:26
         compiled from "/home/u224958/quarry.ru/www//templates/skin/synio/actions/ActionTalk/friends.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1381271803504f0926a61e47-62568855%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c58777494d0f8211ee65a2377d5dd63263f081fe' => 
    array (
      0 => '/home/u224958/quarry.ru/www//templates/skin/synio/actions/ActionTalk/friends.tpl',
      1 => 1345531540,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1381271803504f0926a61e47-62568855',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
    'aUsersFriend' => 0,
    'oFriend' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_504f0926aa9856_61552140',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_504f0926aa9856_61552140')) {function content_504f0926aa9856_61552140($_smarty_tpl) {?><div class="talk-search talk-friends" id="block_talk_search">
	<header>
		<a href="#" class="link-dotted close" onclick="ls.talk.toggleSearchForm(); return false;"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_friends'];?>
</a>
	</header>

	
	<div class="talk-search-content" id="block_talk_friends_content">
		<?php if ($_smarty_tpl->tpl_vars['aUsersFriend']->value){?>
			<ul class="friend-list" id="friends">
				<?php  $_smarty_tpl->tpl_vars['oFriend'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oFriend']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aUsersFriend']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oFriend']->key => $_smarty_tpl->tpl_vars['oFriend']->value){
$_smarty_tpl->tpl_vars['oFriend']->_loop = true;
?>
					<li>
						<input id="talk_friend_<?php echo $_smarty_tpl->tpl_vars['oFriend']->value->getId();?>
" type="checkbox" name="friend[<?php echo $_smarty_tpl->tpl_vars['oFriend']->value->getId();?>
]" class="input-checkbox" /> 
						<label for="talk_friend_<?php echo $_smarty_tpl->tpl_vars['oFriend']->value->getId();?>
" id="talk_friend_<?php echo $_smarty_tpl->tpl_vars['oFriend']->value->getId();?>
_label"><?php echo $_smarty_tpl->tpl_vars['oFriend']->value->getLogin();?>
</label>
					</li>
				<?php } ?>
			</ul>
			
			<ul class="actions">
				<li><a href="#" id="friend_check_all" class="link-dotted"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_friends_check'];?>
</a></li>
				<li><a href="#" id="friend_uncheck_all" class="link-dotted"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_friends_uncheck'];?>
</a></li>
			</ul>
		<?php }else{ ?>
			<div class="notice-empty"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_friends_empty'];?>
</div>
		<?php }?>
	</div>
</div><?php }} ?>