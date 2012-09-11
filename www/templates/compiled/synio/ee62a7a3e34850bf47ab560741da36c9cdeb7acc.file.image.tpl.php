<?php /* Smarty version Smarty-3.1.8, created on 2012-09-04 12:37:42
         compiled from "/home/u224958/quarry.ru/www/plugins/gallery/templates/skin/default/actions/ActionGallery/image.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13047470745045a9533fb479-42919700%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee62a7a3e34850bf47ab560741da36c9cdeb7acc' => 
    array (
      0 => '/home/u224958/quarry.ru/www/plugins/gallery/templates/skin/default/actions/ActionGallery/image.tpl',
      1 => 1346747798,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13047470745045a9533fb479-42919700',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5045a95365aff9_44965028',
  'variables' => 
  array (
    'oUserProfile' => 0,
    'albumUrl' => 0,
    'image' => 0,
    'imagesUrl' => 0,
    'oUserCurrent' => 0,
    'uid' => 0,
    'album' => 0,
    'oVote' => 0,
    'oConfig' => 0,
    'bVoteInfoShow' => 0,
    'aLang' => 0,
    'id' => 0,
    'count_comments' => 0,
    'iMaxIdComment' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5045a95365aff9_44965028')) {function content_5045a95365aff9_44965028($_smarty_tpl) {?><?php if (!is_callable('smarty_function_date_format')) include '/home/u224958/quarry.ru/www//engine/modules/viewer/plugs/function.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



<h1 class="gallery-header"><a href="<?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getUserWebPath();?>
"><?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getLogin();?>
</a>/<a href="<?php echo $_smarty_tpl->tpl_vars['albumUrl']->value;?>
index/<?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getId();?>
">Фотоальбомы</a>/<a href="<?php echo $_smarty_tpl->tpl_vars['albumUrl']->value;?>
album/<?php echo $_smarty_tpl->tpl_vars['image']->value['album_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['image']->value['album'];?>
</a></h1>
 
<a href="<?php echo $_smarty_tpl->tpl_vars['albumUrl']->value;?>
image/<?php echo $_smarty_tpl->tpl_vars['image']->value['next']['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['imagesUrl']->value;?>
preview/<?php echo $_smarty_tpl->tpl_vars['image']->value['id'];?>
-<?php echo $_smarty_tpl->tpl_vars['image']->value['nh'];?>
.jpg" style="max-width:650px;"></a>
<div class="topic">
<footer class="topic-footer">
    <div id="description-image">
        
        <?php if ($_smarty_tpl->tpl_vars['image']->value['name']){?>
            <?php echo $_smarty_tpl->tpl_vars['image']->value['name'];?>

                    <?php }elseif($_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['image']->value['user_id']==$_smarty_tpl->tpl_vars['oUserCurrent']->value->getId()){?>
                Добавить описание
        <?php }?>

        
    </div>
         <input type="hidden" id="user-id" value="<?php echo $_smarty_tpl->tpl_vars['image']->value['user_id'];?>
">
        <input type="hidden" id="uid" value="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
">
        <input type="hidden" id="des-name-img" value="<?php echo $_smarty_tpl->tpl_vars['image']->value['name'];?>
">
    <div id="description-edit" style="display: none;">
       
        <input type="hidden" id="img-id" value="<?php echo $_smarty_tpl->tpl_vars['image']->value['id'];?>
">

        <p id="sub-name">Сохранить</p>
    </div>

    <br/><br/>
<ul class="topic-info">
			 <li class="topic-info-author"><a rel="author" href="<?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getUserWebPath();?>
"><?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getLogin();?>
</a></li>
		

  	<li class="topic-info-date">
				<time datetime="<?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['image']->value['date'],'format'=>'c'),$_smarty_tpl);?>
" title="<?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['image']->value['date'],'format'=>'j F Y, H:i'),$_smarty_tpl);?>
">
					<?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['image']->value['date'],'hours_back'=>"12",'minutes_back'=>"60",'now'=>"60",'day'=>"day H:i",'format'=>"j F Y, H:i"),$_smarty_tpl);?>

				</time>
	</li>
        <?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['image']->value['user_id']==$_smarty_tpl->tpl_vars['oUserCurrent']->value->getId()){?>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['albumUrl']->value;?>
delete/<?php echo $_smarty_tpl->tpl_vars['image']->value['id'];?>
">Удалить</a></li>
            <?php if ($_smarty_tpl->tpl_vars['image']->value['id']!=$_smarty_tpl->tpl_vars['album']->value['image_id']){?>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['albumUrl']->value;?>
preview/<?php echo $_smarty_tpl->tpl_vars['image']->value['id'];?>
">Cделать обложкой альбома</a></li>
            <?php }?>
	<?php }?>
        <li class="topic-info-vote">
				<div id="vote_area_image_<?php echo $_smarty_tpl->tpl_vars['image']->value['id'];?>
" class="vote-topic
                    <?php if ($_smarty_tpl->tpl_vars['oVote']->value||($_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['image']->value['user_id']==$_smarty_tpl->tpl_vars['oUserCurrent']->value->getId())||strtotime($_smarty_tpl->tpl_vars['image']->value['date'])<time()-$_smarty_tpl->tpl_vars['oConfig']->value->GetValue('acl.vote.topic.limit_time')){?>
                            <?php if ($_smarty_tpl->tpl_vars['image']->value['rating']>0){?>
                                    vote-count-positive
                                        <?php }elseif($_smarty_tpl->tpl_vars['image']->value['rating']<0){?>
                                    vote-count-negative
                                        <?php }elseif($_smarty_tpl->tpl_vars['image']->value['rating']==0){?>
                                    vote-count-zero
                            <?php }?>
                    <?php }?>

                    <?php if (!$_smarty_tpl->tpl_vars['oUserCurrent']->value||($_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['image']->value['user_id']!=$_smarty_tpl->tpl_vars['oUserCurrent']->value->getId())){?>
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
           
                    <?php if ($_smarty_tpl->tpl_vars['bVoteInfoShow']->value){?>js-infobox-vote-topic<?php }?>">
                
                <div class="vote-item vote-down" onclick="return ls.vote.vote(<?php echo $_smarty_tpl->tpl_vars['image']->value['id'];?>
,this,-1,'image');"><span><i></i></span></div>
                <div class="vote-item vote-count" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_vote_count'];?>
: <?php echo $_smarty_tpl->tpl_vars['image']->value['count_vote'];?>
">
                        <span id="vote_total_image_<?php echo $_smarty_tpl->tpl_vars['image']->value['id'];?>
">
                                <?php if ($_smarty_tpl->tpl_vars['bVoteInfoShow']->value){?>
                                        <?php if ($_smarty_tpl->tpl_vars['image']->value['rating']>0){?>+<?php }?><?php echo $_smarty_tpl->tpl_vars['image']->value['rating'];?>

                                <?php }else{ ?>
                                        <i onclick="return ls.vote.vote(<?php echo $_smarty_tpl->tpl_vars['image']->value['id'];?>
,this,0,'image');"></i>
                                <?php }?>
                        </span>
                </div>
                <div class="vote-item vote-up" onclick="return ls.vote.vote(<?php echo $_smarty_tpl->tpl_vars['image']->value['id'];?>
,1,1,'image');"><span><i></i></span></div>
                <?php if ($_smarty_tpl->tpl_vars['bVoteInfoShow']->value){?>
                        <div id="vote-info-image-<?php echo $_smarty_tpl->tpl_vars['image']->value['id'];?>
" style="display: none;">
                                <ul class="vote-topic-info">
                                        <li><i class="icon-synio-vote-info-up"></i> <?php echo $_smarty_tpl->tpl_vars['image']->value['count_vote_up'];?>
</li>
                                        <li><i class="icon-synio-vote-info-down"></i> <?php echo $_smarty_tpl->tpl_vars['image']->value['count_vote_down'];?>
</li>
                                        <li><i class="icon-synio-vote-info-zero"></i> <?php echo $_smarty_tpl->tpl_vars['image']->value['count_vote_abstain'];?>
</li>
                                        
                                </ul>
                        </div>
                <?php }?>
                
                
	</div>
     </li>
     
</ul>
</footer>
 </div>
 
 <div id="image-comments">
<?php echo $_smarty_tpl->getSubTemplate ('comment_tree.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('iTargetId'=>$_smarty_tpl->tpl_vars['id']->value,'iAuthorId'=>$_smarty_tpl->tpl_vars['image']->value['user_id'],'sAuthorNotice'=>$_smarty_tpl->tpl_vars['aLang']->value['topic_author'],'sTargetType'=>'image','iCountComment'=>$_smarty_tpl->tpl_vars['count_comments']->value,'sNoticeNotAllow'=>$_smarty_tpl->tpl_vars['aLang']->value['topic_comment_notallow'],'sNoticeCommentAdd'=>$_smarty_tpl->tpl_vars['aLang']->value['topic_comment_add'],'sDateReadLast'=>'2012-08-22 17:42:17','iMaxIdComment'=>$_smarty_tpl->tpl_vars['iMaxIdComment']->value), 0);?>

</div>
        
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>