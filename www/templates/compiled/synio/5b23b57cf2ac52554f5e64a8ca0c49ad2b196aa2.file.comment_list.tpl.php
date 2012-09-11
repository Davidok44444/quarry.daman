<?php /* Smarty version Smarty-3.1.8, created on 2012-09-05 17:38:45
         compiled from "/home/u224958/quarry.ru/www//templates/skin/synio/comment_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1905959282504755e5406d36-22038257%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b23b57cf2ac52554f5e64a8ca0c49ad2b196aa2' => 
    array (
      0 => '/home/u224958/quarry.ru/www//templates/skin/synio/comment_list.tpl',
      1 => 1345531543,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1905959282504755e5406d36-22038257',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aComments' => 0,
    'oComment' => 0,
    'oTopic' => 0,
    'oUser' => 0,
    'oUserCurrent' => 0,
    'bNoCommentFavourites' => 0,
    'oConfig' => 0,
    'aLang' => 0,
    'oBlog' => 0,
    'aPaging' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_504755e5614337_33538384',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_504755e5614337_33538384')) {function content_504755e5614337_33538384($_smarty_tpl) {?><?php if (!is_callable('smarty_function_date_format')) include '/home/u224958/quarry.ru/www//engine/modules/viewer/plugs/function.date_format.php';
if (!is_callable('smarty_function_router')) include '/home/u224958/quarry.ru/www//engine/modules/viewer/plugs/function.router.php';
?><div class="comments comment-list">
	<?php  $_smarty_tpl->tpl_vars['oComment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oComment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aComments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oComment']->key => $_smarty_tpl->tpl_vars['oComment']->value){
$_smarty_tpl->tpl_vars['oComment']->_loop = true;
?>
		<?php $_smarty_tpl->tpl_vars["oUser"] = new Smarty_variable($_smarty_tpl->tpl_vars['oComment']->value->getUser(), null, 0);?>
		<?php $_smarty_tpl->tpl_vars["oTopic"] = new Smarty_variable($_smarty_tpl->tpl_vars['oComment']->value->getTarget(), null, 0);?>
		<?php $_smarty_tpl->tpl_vars["oBlog"] = new Smarty_variable($_smarty_tpl->tpl_vars['oTopic']->value->getBlog(), null, 0);?>
		
		
		
		
		
		<section class="comment">
			<ul class="comment-info">
				<li class="comment-author">
					<a href="<?php echo $_smarty_tpl->tpl_vars['oUser']->value->getUserWebPath();?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['oUser']->value->getProfileAvatarPath(24);?>
" alt="avatar" class="comment-avatar" /></a>
					<a href="<?php echo $_smarty_tpl->tpl_vars['oUser']->value->getUserWebPath();?>
"><?php echo $_smarty_tpl->tpl_vars['oUser']->value->getLogin();?>
</a>
				</li>
				<li class="comment-date">
					<time datetime="<?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['oComment']->value->getDate(),'format'=>'c'),$_smarty_tpl);?>
"><?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['oComment']->value->getDate(),'hours_back'=>"12",'minutes_back'=>"60",'now'=>"60",'day'=>"day H:i",'format'=>"j F Y, H:i"),$_smarty_tpl);?>
</time>
				</li>
				<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value&&!$_smarty_tpl->tpl_vars['bNoCommentFavourites']->value){?>
					<li class="comment-favourite">
						<div onclick="return ls.favourite.toggle(<?php echo $_smarty_tpl->tpl_vars['oComment']->value->getId();?>
,this,'comment');" class="favourite <?php if ($_smarty_tpl->tpl_vars['oComment']->value->getIsFavourite()){?>active<?php }?>"></div>
						<span class="favourite-count" id="fav_count_comment_<?php echo $_smarty_tpl->tpl_vars['oComment']->value->getId();?>
"><?php if ($_smarty_tpl->tpl_vars['oComment']->value->getCountFavourite()>0){?><?php echo $_smarty_tpl->tpl_vars['oComment']->value->getCountFavourite();?>
<?php }?></span>
					</li>
				<?php }?>
				<li class="comment-link">
					<a href="<?php if ($_smarty_tpl->tpl_vars['oConfig']->value->GetValue('module.comment.nested_per_page')){?><?php echo smarty_function_router(array('page'=>'comments'),$_smarty_tpl);?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getUrl();?>
#comment<?php }?><?php echo $_smarty_tpl->tpl_vars['oComment']->value->getId();?>
" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['comment_url_notice'];?>
">
						<i class="icon-synio-link"></i>
					</a>
				</li>
				<li id="vote_area_comment_<?php echo $_smarty_tpl->tpl_vars['oComment']->value->getId();?>
" class="vote 
																		<?php if ($_smarty_tpl->tpl_vars['oComment']->value->getRating()>0){?>
																			vote-count-positive
																		<?php }elseif($_smarty_tpl->tpl_vars['oComment']->value->getRating()<0){?>
																			vote-count-negative
																		<?php }?>">
					<span class="vote-count" id="vote_total_comment_<?php echo $_smarty_tpl->tpl_vars['oComment']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['oComment']->value->getRating();?>
</span>
				</li>
			</ul>
					
					
			<div class="comment-content">						
				<div class="text">						
					<?php if ($_smarty_tpl->tpl_vars['oComment']->value->isBad()){?>
						<?php echo $_smarty_tpl->tpl_vars['oComment']->value->getText();?>
						
					<?php }else{ ?>
						<?php echo $_smarty_tpl->tpl_vars['oComment']->value->getText();?>

					<?php }?>		
				</div>
			</div>
			
			
			<div class="comment-path">
				<a href="<?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getUrlFull();?>
" class="blog-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oBlog']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
</a> &rarr;
				<a href="<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getUrl();?>
" class="comment-path-topic"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oTopic']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
</a>
				<a href="<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getUrl();?>
#comments" class="comment-path-comments"><?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getCountComment();?>
</a>
			</div>
		</section>
	<?php } ?>	
</div>


<?php echo $_smarty_tpl->getSubTemplate ('paging.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('aPaging'=>$_smarty_tpl->tpl_vars['aPaging']->value), 0);?>
<?php }} ?>