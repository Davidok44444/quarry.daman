<?php /* Smarty version Smarty-3.1.8, created on 2012-09-04 11:35:45
         compiled from "/home/u224958/quarry.ru/www//templates/skin/synio/actions/ActionProfile/profile_top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10886726125045af51e9c8b4-68218615%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2cfbe677e68b359bd7c6a9e4fdfef101ac3919d6' => 
    array (
      0 => '/home/u224958/quarry.ru/www//templates/skin/synio/actions/ActionProfile/profile_top.tpl',
      1 => 1345531536,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10886726125045af51e9c8b4-68218615',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oUserProfile' => 0,
    'oVote' => 0,
    'oUserCurrent' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5045af5208ab12_86204568',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5045af5208ab12_86204568')) {function content_5045af5208ab12_86204568($_smarty_tpl) {?><?php if (!is_callable('smarty_function_hook')) include '/home/u224958/quarry.ru/www//engine/modules/viewer/plugs/function.hook.php';
if (!is_callable('smarty_function_router')) include '/home/u224958/quarry.ru/www//engine/modules/viewer/plugs/function.router.php';
?><div class="profile">
	<?php echo smarty_function_hook(array('run'=>'profile_top_begin','oUserProfile'=>$_smarty_tpl->tpl_vars['oUserProfile']->value),$_smarty_tpl);?>

	
	<div class="vote-profile">
		<div id="vote_area_user_<?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getId();?>
" class="vote-topic
																	<?php if ($_smarty_tpl->tpl_vars['oUserProfile']->value->getRating()>0){?>
																		vote-count-positive
																	<?php }elseif($_smarty_tpl->tpl_vars['oUserProfile']->value->getRating()<0){?>
																		vote-count-negative
																	<?php }elseif($_smarty_tpl->tpl_vars['oUserProfile']->value->getRating()==0){?>
																		vote-count-zero
																	<?php }?>
																	
																	<?php if ($_smarty_tpl->tpl_vars['oVote']->value){?> 
																		voted 
																		
																		<?php if ($_smarty_tpl->tpl_vars['oVote']->value->getDirection()>0){?>
																			voted-up
																		<?php }elseif($_smarty_tpl->tpl_vars['oVote']->value->getDirection()<0){?>
																			voted-down
																		<?php }?>
																	<?php }else{ ?>
																		not-voted
																	<?php }?>
																	
																	<?php if (($_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oUserProfile']->value->getId()==$_smarty_tpl->tpl_vars['oUserCurrent']->value->getId())||!$_smarty_tpl->tpl_vars['oUserCurrent']->value){?>
																		vote-nobuttons
																	<?php }?>">
			<div class="vote-item vote-down" onclick="return ls.vote.vote(<?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getId();?>
,this,-1,'user');"><span><i></i></span></div>
			<div class="vote-item vote-count" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_vote_count'];?>
: <?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getCountVote();?>
">
				<span id="vote_total_user_<?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getId();?>
"><?php if ($_smarty_tpl->tpl_vars['oUserProfile']->value->getRating()>0){?>+<?php }?><?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getRating();?>
</span>
			</div>
			<div class="vote-item vote-up" onclick="return ls.vote.vote(<?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getId();?>
,this,1,'user');"><span><i></i></span></div>
		</div>
		<div class="vote-label"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_rating'];?>
</div>
	</div>
	
	<div class="strength">
		<div class="count" id="user_skill_<?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getSkill();?>
</div>
		<div class="vote-label"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_skill'];?>
</div>
	</div>

	<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oUserCurrent']->value->getId()!=$_smarty_tpl->tpl_vars['oUserProfile']->value->getId()){?>
		<a href="<?php echo smarty_function_router(array('page'=>'talk'),$_smarty_tpl);?>
add/?talk_users=<?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getLogin();?>
"><button type="submit"  class="button button-action button-action-send-message"><i class="icon-synio-send-message"></i><span><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_write_prvmsg'];?>
</span></button></a>
	<?php }?>

	<h2 class="page-header user-login word-wrap <?php if (!$_smarty_tpl->tpl_vars['oUserProfile']->value->getProfileName()){?>no-user-name<?php }?>" itemprop="nickname"><?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getLogin();?>
</h2>
	
	<?php if ($_smarty_tpl->tpl_vars['oUserProfile']->value->getProfileName()){?>
		<p class="user-name" itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oUserProfile']->value->getProfileName(), ENT_QUOTES, 'UTF-8', true);?>
</p>
	<?php }?>
	
	<?php echo smarty_function_hook(array('run'=>'profile_top_end','oUserProfile'=>$_smarty_tpl->tpl_vars['oUserProfile']->value),$_smarty_tpl);?>

</div><?php }} ?>