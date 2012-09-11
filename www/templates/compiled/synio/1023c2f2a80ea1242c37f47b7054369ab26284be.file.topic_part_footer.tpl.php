<?php /* Smarty version Smarty-3.1.8, created on 2012-09-04 11:10:13
         compiled from "/home/u224958/quarry.ru/www//templates/skin/synio/topic_part_footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11001224965045a9556bf118-16054172%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1023c2f2a80ea1242c37f47b7054369ab26284be' => 
    array (
      0 => '/home/u224958/quarry.ru/www//templates/skin/synio/topic_part_footer.tpl',
      1 => 1345531563,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11001224965045a9556bf118-16054172',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oTopic' => 0,
    'sTag' => 0,
    'aLang' => 0,
    'oUserCurrent' => 0,
    'oFavourite' => 0,
    'bTopicList' => 0,
    'oUser' => 0,
    'oVote' => 0,
    'oConfig' => 0,
    'bVoteInfoShow' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5045a955aa95a5_94721015',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5045a955aa95a5_94721015')) {function content_5045a955aa95a5_94721015($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/home/u224958/quarry.ru/www//engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_block_hookb')) include '/home/u224958/quarry.ru/www//engine/modules/viewer/plugs/block.hookb.php';
if (!is_callable('smarty_function_date_format')) include '/home/u224958/quarry.ru/www//engine/modules/viewer/plugs/function.date_format.php';
if (!is_callable('smarty_function_hook')) include '/home/u224958/quarry.ru/www//engine/modules/viewer/plugs/function.hook.php';
?>	<?php $_smarty_tpl->tpl_vars["oBlog"] = new Smarty_variable($_smarty_tpl->tpl_vars['oTopic']->value->getBlog(), null, 0);?>
	<?php $_smarty_tpl->tpl_vars["oUser"] = new Smarty_variable($_smarty_tpl->tpl_vars['oTopic']->value->getUser(), null, 0);?>
	<?php $_smarty_tpl->tpl_vars["oVote"] = new Smarty_variable($_smarty_tpl->tpl_vars['oTopic']->value->getVote(), null, 0);?>
	<?php $_smarty_tpl->tpl_vars["oFavourite"] = new Smarty_variable($_smarty_tpl->tpl_vars['oTopic']->value->getFavourite(), null, 0);?>


	<footer class="topic-footer">
		<ul class="topic-tags js-favourite-insert-after-form js-favourite-tags-topic-<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getId();?>
">
			<li><i class="icon-synio-tags"></i></li>
			
			<?php if ($_smarty_tpl->tpl_vars['oTopic']->value->getTagsArray()){?><?php  $_smarty_tpl->tpl_vars['sTag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sTag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['oTopic']->value->getTagsArray(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['sTag']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['sTag']->key => $_smarty_tpl->tpl_vars['sTag']->value){
$_smarty_tpl->tpl_vars['sTag']->_loop = true;
 $_smarty_tpl->tpl_vars['sTag']->index++;
 $_smarty_tpl->tpl_vars['sTag']->first = $_smarty_tpl->tpl_vars['sTag']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['tags_list']['first'] = $_smarty_tpl->tpl_vars['sTag']->first;
?><li><?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['tags_list']['first']){?>, <?php }?><a rel="tag" href="<?php echo smarty_function_router(array('page'=>'tag'),$_smarty_tpl);?>
<?php echo rawurlencode($_smarty_tpl->tpl_vars['sTag']->value);?>
/"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sTag']->value, ENT_QUOTES, 'UTF-8', true);?>
</a></li><?php } ?><?php }else{ ?><li><?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_tags_empty'];?>
</li><?php }?><?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value){?><?php if ($_smarty_tpl->tpl_vars['oFavourite']->value){?><?php  $_smarty_tpl->tpl_vars['sTag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sTag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['oFavourite']->value->getTagsArray(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sTag']->key => $_smarty_tpl->tpl_vars['sTag']->value){
$_smarty_tpl->tpl_vars['sTag']->_loop = true;
?><li class="topic-tags-user js-favourite-tag-user">, <a rel="tag" href="<?php echo $_smarty_tpl->tpl_vars['oUserCurrent']->value->getUserWebPath();?>
favourites/topics/tag/<?php echo rawurlencode($_smarty_tpl->tpl_vars['sTag']->value);?>
/"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sTag']->value, ENT_QUOTES, 'UTF-8', true);?>
</a></li><?php } ?><?php }?><li class="topic-tags-edit js-favourite-tag-edit" <?php if (!$_smarty_tpl->tpl_vars['oFavourite']->value){?>style="display:none;"<?php }?>><a href="#" onclick="return ls.favourite.showEditTags(<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getId();?>
,'topic',this);" class="link-dotted"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['favourite_form_tags_button_show'];?>
</a></li><?php }?>
		</ul>
		
		
		<div class="topic-share" id="topic_share_<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getId();?>
">
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('hookb', array('run'=>"topic_share",'topic'=>$_smarty_tpl->tpl_vars['oTopic']->value,'bTopicList'=>$_smarty_tpl->tpl_vars['bTopicList']->value)); $_block_repeat=true; echo smarty_block_hookb(array('run'=>"topic_share",'topic'=>$_smarty_tpl->tpl_vars['oTopic']->value,'bTopicList'=>$_smarty_tpl->tpl_vars['bTopicList']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<div class="yashare-auto-init" data-yashareTitle="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oTopic']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
" data-yashareLink="<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getUrl();?>
" data-yashareL10n="ru" data-yashareType="button" data-yashareQuickServices="yaru,vkontakte,facebook,twitter,odnoklassniki,moimir,lj,gplus"></div>
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hookb(array('run'=>"topic_share",'topic'=>$_smarty_tpl->tpl_vars['oTopic']->value,'bTopicList'=>$_smarty_tpl->tpl_vars['bTopicList']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<div class="arrow"></div>
			<div class="close" onclick="jQuery('#topic_share_<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getId();?>
').slideToggle(); return false;"></div>
		</div>


		<ul class="topic-info">
			<li class="topic-info-author">
				<a href="<?php echo $_smarty_tpl->tpl_vars['oUser']->value->getUserWebPath();?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['oUser']->value->getProfileAvatarPath(24);?>
" alt="avatar" class="avatar" /></a>
				<a rel="author" href="<?php echo $_smarty_tpl->tpl_vars['oUser']->value->getUserWebPath();?>
"><?php echo $_smarty_tpl->tpl_vars['oUser']->value->getLogin();?>
</a>
			</li>
			<li class="topic-info-date">
				<time datetime="<?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['oTopic']->value->getDateAdd(),'format'=>'c'),$_smarty_tpl);?>
" title="<?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['oTopic']->value->getDateAdd(),'format'=>'j F Y, H:i'),$_smarty_tpl);?>
">
					<?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['oTopic']->value->getDateAdd(),'hours_back'=>"12",'minutes_back'=>"60",'now'=>"60",'day'=>"day H:i",'format'=>"j F Y, H:i"),$_smarty_tpl);?>

				</time>
			</li>
			<li class="topic-info-share" data-topic-id="<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getId();?>
" onclick="jQuery('#topic_share_<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getId();?>
').slideToggle(); return false;"><i class="icon-synio-share-blue" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_share'];?>
"></i></li>
			
			<li class="topic-info-favourite" onclick="return ls.favourite.toggle(<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getId();?>
,$('#fav_topic_<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getId();?>
'),'topic');">
				<i id="fav_topic_<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getId();?>
" class="favourite <?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oTopic']->value->getIsFavourite()){?>active<?php }?>"></i>
				<span class="favourite-count" id="fav_count_topic_<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getId();?>
"><?php if ($_smarty_tpl->tpl_vars['oTopic']->value->getCountFavourite()>0){?><?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getCountFavourite();?>
<?php }?></span>
			</li>
		
			<?php if ($_smarty_tpl->tpl_vars['bTopicList']->value){?>
				<li class="topic-info-comments">
					<?php if ($_smarty_tpl->tpl_vars['oTopic']->value->getCountCommentNew()){?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getUrl();?>
#comments" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_comment_read'];?>
" class="new">
							<i class="icon-synio-comments-green-filled"></i>
							<span><?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getCountComment();?>
</span>
							<span class="count">+<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getCountCommentNew();?>
</span>
						</a>
					<?php }else{ ?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getUrl();?>
#comments" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_comment_read'];?>
">
							<?php if ($_smarty_tpl->tpl_vars['oTopic']->value->getCountComment()){?>
								<i class="icon-synio-comments-green-filled"></i>
							<?php }else{ ?>
								<i class="icon-synio-comments-blue"></i>
							<?php }?>
							
							<span><?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getCountComment();?>
</span>
						</a>
					<?php }?>
				</li>
			<?php }?>


			<?php if ($_smarty_tpl->tpl_vars['oVote']->value||($_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oTopic']->value->getUserId()==$_smarty_tpl->tpl_vars['oUserCurrent']->value->getId())||strtotime($_smarty_tpl->tpl_vars['oTopic']->value->getDateAdd())<time()-$_smarty_tpl->tpl_vars['oConfig']->value->GetValue('acl.vote.topic.limit_time')){?>
				<?php $_smarty_tpl->tpl_vars["bVoteInfoShow"] = new Smarty_variable(true, null, 0);?>
			<?php }?>
			
			<li class="topic-info-vote">
				<div id="vote_area_topic_<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getId();?>
" class="vote-topic
																	<?php if ($_smarty_tpl->tpl_vars['oVote']->value||($_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oTopic']->value->getUserId()==$_smarty_tpl->tpl_vars['oUserCurrent']->value->getId())||strtotime($_smarty_tpl->tpl_vars['oTopic']->value->getDateAdd())<time()-$_smarty_tpl->tpl_vars['oConfig']->value->GetValue('acl.vote.topic.limit_time')){?>
																		<?php if ($_smarty_tpl->tpl_vars['oTopic']->value->getRating()>0){?>
																			vote-count-positive
																		<?php }elseif($_smarty_tpl->tpl_vars['oTopic']->value->getRating()<0){?>
																			vote-count-negative
																		<?php }elseif($_smarty_tpl->tpl_vars['oTopic']->value->getRating()==0){?>
																			vote-count-zero
																		<?php }?>
																	<?php }?>
																	
																	<?php if (!$_smarty_tpl->tpl_vars['oUserCurrent']->value||($_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oTopic']->value->getUserId()!=$_smarty_tpl->tpl_vars['oUserCurrent']->value->getId())){?>
																		vote-not-self
																	<?php }?>
																	
																	<?php if ($_smarty_tpl->tpl_vars['oVote']->value){?> 
																		voted
																		
																		<?php if ($_smarty_tpl->tpl_vars['oVote']->value->getDirection()>0){?>
																			voted-up
																		<?php }elseif($_smarty_tpl->tpl_vars['oVote']->value->getDirection()<0){?>
																			voted-down
																		<?php }elseif($_smarty_tpl->tpl_vars['oVote']->value->getDirection()==0){?>
																			voted-zero
																		<?php }?>
																	<?php }else{ ?>
																		not-voted
																	<?php }?>
																	
																	<?php if ((strtotime($_smarty_tpl->tpl_vars['oTopic']->value->getDateAdd())<time()-$_smarty_tpl->tpl_vars['oConfig']->value->GetValue('acl.vote.topic.limit_time')&&!$_smarty_tpl->tpl_vars['oVote']->value)||($_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oTopic']->value->getUserId()==$_smarty_tpl->tpl_vars['oUserCurrent']->value->getId())){?>
																		vote-nobuttons
																	<?php }?>
																	
																	<?php if (strtotime($_smarty_tpl->tpl_vars['oTopic']->value->getDateAdd())>time()-$_smarty_tpl->tpl_vars['oConfig']->value->GetValue('acl.vote.topic.limit_time')){?>
																		vote-not-expired
																	<?php }?>

																	<?php if ($_smarty_tpl->tpl_vars['bVoteInfoShow']->value){?>js-infobox-vote-topic<?php }?>">
					<div class="vote-item vote-down" onclick="return ls.vote.vote(<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getId();?>
,this,-1,'topic');"><span><i></i></span></div>
					<div class="vote-item vote-count" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_vote_count'];?>
: <?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getCountVote();?>
">
						<span id="vote_total_topic_<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getId();?>
">
							<?php if ($_smarty_tpl->tpl_vars['bVoteInfoShow']->value){?>
								<?php if ($_smarty_tpl->tpl_vars['oTopic']->value->getRating()>0){?>+<?php }?><?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getRating();?>

							<?php }else{ ?>
								<i onclick="return ls.vote.vote(<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getId();?>
,this,0,'topic');"></i>
							<?php }?>
						</span>
					</div>
					<div class="vote-item vote-up" onclick="return ls.vote.vote(<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getId();?>
,this,1,'topic');"><span><i></i></span></div>
					<?php if ($_smarty_tpl->tpl_vars['bVoteInfoShow']->value){?>
						<div id="vote-info-topic-<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getId();?>
" style="display: none;">
							<ul class="vote-topic-info">
								<li><i class="icon-synio-vote-info-up"></i> <?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getCountVoteUp();?>
</li>
								<li><i class="icon-synio-vote-info-down"></i> <?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getCountVoteDown();?>
</li>
								<li><i class="icon-synio-vote-info-zero"></i> <?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getCountVoteAbstain();?>
</li>
								<?php echo smarty_function_hook(array('run'=>'topic_show_vote_stats','topic'=>$_smarty_tpl->tpl_vars['oTopic']->value),$_smarty_tpl);?>

							</ul>
						</div>
					<?php }?>
				</div>
			</li>
			
			<?php echo smarty_function_hook(array('run'=>'topic_show_info','topic'=>$_smarty_tpl->tpl_vars['oTopic']->value),$_smarty_tpl);?>

		</ul>

		
		<?php if (!$_smarty_tpl->tpl_vars['bTopicList']->value){?>
			<?php echo smarty_function_hook(array('run'=>'topic_show_end','topic'=>$_smarty_tpl->tpl_vars['oTopic']->value),$_smarty_tpl);?>

		<?php }?>
	</footer>
</article> <!-- /.topic --><?php }} ?>