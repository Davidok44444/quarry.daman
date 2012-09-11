<?php /* Smarty version Smarty-3.1.8, created on 2012-09-05 18:26:43
         compiled from "/home/u224958/quarry.ru/www//templates/skin/synio/actions/ActionBlog/blog.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1347082258504761232f5dd2-42709092%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd18afe80087f1c2084dc9d3500c411020f2ac469' => 
    array (
      0 => '/home/u224958/quarry.ru/www//templates/skin/synio/actions/ActionBlog/blog.tpl',
      1 => 1345531531,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1347082258504761232f5dd2-42709092',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oBlog' => 0,
    'oUserCurrent' => 0,
    'aLang' => 0,
    'aBlogs' => 0,
    'oBlogDelete' => 0,
    'LIVESTREET_SECURITY_KEY' => 0,
    'oVote' => 0,
    'oUserOwner' => 0,
    'iCountBlogUsers' => 0,
    'iCountBlogAdministrators' => 0,
    'aBlogAdministrators' => 0,
    'oBlogUser' => 0,
    'oUser' => 0,
    'iCountBlogModerators' => 0,
    'aBlogModerators' => 0,
    'sMenuSubItemSelect' => 0,
    'sMenuSubBlogUrl' => 0,
    'iCountTopicsBlogNew' => 0,
    'sPeriodSelectCurrent' => 0,
    'sPeriodSelectRoot' => 0,
    'bCloseBlog' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_504761239b5df1_00609802',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_504761239b5df1_00609802')) {function content_504761239b5df1_00609802($_smarty_tpl) {?><?php if (!is_callable('smarty_function_lang_load')) include '/home/u224958/quarry.ru/www//engine/modules/viewer/plugs/function.lang_load.php';
if (!is_callable('smarty_function_router')) include '/home/u224958/quarry.ru/www//engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_modifier_declension')) include '/home/u224958/quarry.ru/www//engine/modules/viewer/plugs/modifier.declension.php';
if (!is_callable('smarty_function_date_format')) include '/home/u224958/quarry.ru/www//engine/modules/viewer/plugs/function.date_format.php';
if (!is_callable('smarty_function_hook')) include '/home/u224958/quarry.ru/www//engine/modules/viewer/plugs/function.hook.php';
?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php $_smarty_tpl->tpl_vars["oUserOwner"] = new Smarty_variable($_smarty_tpl->tpl_vars['oBlog']->value->getOwner(), null, 0);?>
<?php $_smarty_tpl->tpl_vars["oVote"] = new Smarty_variable($_smarty_tpl->tpl_vars['oBlog']->value->getVote(), null, 0);?>


<script type="text/javascript">
	jQuery(function($){
		ls.lang.load(<?php echo smarty_function_lang_load(array('name'=>"blog_fold_info,blog_expand_info"),$_smarty_tpl);?>
);
	});
</script>


<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oUserCurrent']->value->isAdministrator()){?>
	<div id="blog_delete_form" class="modal">
		<header class="modal-header">
			<h3><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_admin_delete_title'];?>
</h3>
			<a href="#" class="close jqmClose"></a>
		</header>
		
		
		<form action="<?php echo smarty_function_router(array('page'=>'blog'),$_smarty_tpl);?>
delete/<?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getId();?>
/" method="POST" class="modal-content">
			<p><label for="topic_move_to"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_admin_delete_move'];?>
:</label>
			<select name="topic_move_to" id="topic_move_to" class="input-width-full">
				<option value="-1"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_delete_clear'];?>
</option>
				<?php if ($_smarty_tpl->tpl_vars['aBlogs']->value){?>
					<optgroup label="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['blogs'];?>
">
						<?php  $_smarty_tpl->tpl_vars['oBlogDelete'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oBlogDelete']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aBlogs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oBlogDelete']->key => $_smarty_tpl->tpl_vars['oBlogDelete']->value){
$_smarty_tpl->tpl_vars['oBlogDelete']->_loop = true;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['oBlogDelete']->value->getId();?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oBlogDelete']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
</option>
						<?php } ?>
					</optgroup>
				<?php }?>
			</select></p>
			
			<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['LIVESTREET_SECURITY_KEY']->value;?>
" name="security_ls_key" />
			<button type="submit"  class="button button-primary"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_delete'];?>
</button>
		</form>
	</div>
<?php }?>


<div class="blog-top">
	<h2 class="page-header"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oBlog']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
 <?php if ($_smarty_tpl->tpl_vars['oBlog']->value->getType()=='close'){?> <i title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_closed'];?>
" class="icon-synio-topic-private"></i><?php }?></h2>

	<div id="vote_area_blog_<?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getId();?>
" class="vote-topic 
															<?php if ($_smarty_tpl->tpl_vars['oBlog']->value->getRating()>0){?>
																vote-count-positive
															<?php }elseif($_smarty_tpl->tpl_vars['oBlog']->value->getRating()<0){?>
																vote-count-negative
															<?php }elseif($_smarty_tpl->tpl_vars['oBlog']->value->getRating()==0){?>
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
															
															<?php if (($_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oUserOwner']->value->getId()==$_smarty_tpl->tpl_vars['oUserCurrent']->value->getId())){?>
																vote-nobuttons
															<?php }?>">
		<a href="#" class="vote-item vote-down" onclick="return ls.vote.vote(<?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getId();?>
,this,-1,'blog');"><span><i></i></span></a>
		<div class="vote-item vote-count" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_vote_count'];?>
: <?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getCountVote();?>
"><span id="vote_total_blog_<?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getId();?>
"><?php if ($_smarty_tpl->tpl_vars['oBlog']->value->getRating()>0){?>+<?php }?><?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getRating();?>
</span></div>
		<a href="#" class="vote-item vote-up" onclick="return ls.vote.vote(<?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getId();?>
,this,1,'blog');"><span><i></i></span></a>
	</div>
</div>

<div class="blog-mini" id="blog-mini">
	<span id="blog_user_count_<?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['iCountBlogUsers']->value;?>
</span> <?php echo smarty_modifier_declension($_smarty_tpl->tpl_vars['iCountBlogUsers']->value,$_smarty_tpl->tpl_vars['aLang']->value['reader_declension'],'russian');?>
,
	<?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getCountTopic();?>
 <?php echo smarty_modifier_declension($_smarty_tpl->tpl_vars['oBlog']->value->getCountTopic(),$_smarty_tpl->tpl_vars['aLang']->value['topic_declension'],'russian');?>

	<div class="fl-r" id="blog-mini-header">
		<a href="#" class="link-dotted" onclick="ls.blog.toggleInfo(); return false;"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_expand_info'];?>
</a>
		<a href="<?php echo smarty_function_router(array('page'=>'rss'),$_smarty_tpl);?>
blog/<?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getUrl();?>
/">RSS</a>
		<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oUserCurrent']->value->getId()!=$_smarty_tpl->tpl_vars['oBlog']->value->getOwnerId()){?>
			<button type="submit"  class="button button-small" id="button-blog-join-first-<?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getId();?>
" data-button-additional="button-blog-join-second-<?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getId();?>
" data-only-text="1" onclick="ls.blog.toggleJoin(this, <?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getId();?>
); return false;"><?php if ($_smarty_tpl->tpl_vars['oBlog']->value->getUserIsJoin()){?><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_leave'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_join'];?>
<?php }?></button>
		<?php }?>
	</div>
</div>



<div class="blog" id="blog" style="display: none">
	<div class="blog-inner">
		<header class="blog-header">
			<img src="<?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getAvatarPath(48);?>
" alt="avatar" class="avatar" />
			<span class="close" onclick="ls.blog.toggleInfo(); return false;"><a href="#" class="link-dotted"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_fold_info'];?>
</a><i class="icon-synio-close"></i></span>
		</header>

		
		<div class="blog-content">
			<p class="blog-description"><?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getDescription();?>
</p>
		
			
			<ul class="blog-info">
				<li><span><?php echo $_smarty_tpl->tpl_vars['aLang']->value['infobox_blog_create'];?>
</span> <strong><?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['oBlog']->value->getDateAdd(),'format'=>"j F Y"),$_smarty_tpl);?>
</strong></li>
				<li><span><?php echo $_smarty_tpl->tpl_vars['aLang']->value['infobox_blog_topics'];?>
</span> <strong><?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getCountTopic();?>
</strong></li>
				<li><span><a href="<?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getUrlFull();?>
users/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['infobox_blog_users'];?>
</a></span> <strong><?php echo $_smarty_tpl->tpl_vars['iCountBlogUsers']->value;?>
</strong></li>
				<li class="rating"><span><?php echo $_smarty_tpl->tpl_vars['aLang']->value['infobox_blog_rating'];?>
</span> <strong><?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getRating();?>
</strong></li>
			</ul>
			
			
			<?php echo smarty_function_hook(array('run'=>'blog_info_begin','oBlog'=>$_smarty_tpl->tpl_vars['oBlog']->value),$_smarty_tpl);?>

			<strong><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_user_administrators'];?>
 (<?php echo $_smarty_tpl->tpl_vars['iCountBlogAdministrators']->value;?>
)</strong><br />
			<span class="user-avatar">
				<a href="<?php echo $_smarty_tpl->tpl_vars['oUserOwner']->value->getUserWebPath();?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['oUserOwner']->value->getProfileAvatarPath(24);?>
" alt="avatar" /></a>		
				<a href="<?php echo $_smarty_tpl->tpl_vars['oUserOwner']->value->getUserWebPath();?>
"><?php echo $_smarty_tpl->tpl_vars['oUserOwner']->value->getLogin();?>
</a>
			</span>
			<?php if ($_smarty_tpl->tpl_vars['aBlogAdministrators']->value){?>			
				<?php  $_smarty_tpl->tpl_vars['oBlogUser'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oBlogUser']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aBlogAdministrators']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oBlogUser']->key => $_smarty_tpl->tpl_vars['oBlogUser']->value){
$_smarty_tpl->tpl_vars['oBlogUser']->_loop = true;
?>
					<?php $_smarty_tpl->tpl_vars["oUser"] = new Smarty_variable($_smarty_tpl->tpl_vars['oBlogUser']->value->getUser(), null, 0);?>  
					<span class="user-avatar">
						<a href="<?php echo $_smarty_tpl->tpl_vars['oUser']->value->getUserWebPath();?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['oUser']->value->getProfileAvatarPath(24);?>
" alt="avatar" /></a>		
						<a href="<?php echo $_smarty_tpl->tpl_vars['oUser']->value->getUserWebPath();?>
"><?php echo $_smarty_tpl->tpl_vars['oUser']->value->getLogin();?>
</a>
					</span>
				<?php } ?>	
			<?php }?><br /><br />		

			
			<strong><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_user_moderators'];?>
 (<?php echo $_smarty_tpl->tpl_vars['iCountBlogModerators']->value;?>
)</strong><br />
			<?php if ($_smarty_tpl->tpl_vars['aBlogModerators']->value){?>						
				<?php  $_smarty_tpl->tpl_vars['oBlogUser'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oBlogUser']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aBlogModerators']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oBlogUser']->key => $_smarty_tpl->tpl_vars['oBlogUser']->value){
$_smarty_tpl->tpl_vars['oBlogUser']->_loop = true;
?>  
					<?php $_smarty_tpl->tpl_vars["oUser"] = new Smarty_variable($_smarty_tpl->tpl_vars['oBlogUser']->value->getUser(), null, 0);?>							
					<span class="user-avatar">
						<a href="<?php echo $_smarty_tpl->tpl_vars['oUser']->value->getUserWebPath();?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['oUser']->value->getProfileAvatarPath(24);?>
" alt="avatar" /></a>		
						<a href="<?php echo $_smarty_tpl->tpl_vars['oUser']->value->getUserWebPath();?>
"><?php echo $_smarty_tpl->tpl_vars['oUser']->value->getLogin();?>
</a>
					</span>
				<?php } ?>							
			<?php }else{ ?>
				<span class="notice-empty"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_user_moderators_empty'];?>
</span>
			<?php }?>
			<?php echo smarty_function_hook(array('run'=>'blog_info_end','oBlog'=>$_smarty_tpl->tpl_vars['oBlog']->value),$_smarty_tpl);?>

			
			
			
			<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value&&($_smarty_tpl->tpl_vars['oUserCurrent']->value->getId()==$_smarty_tpl->tpl_vars['oBlog']->value->getOwnerId()||$_smarty_tpl->tpl_vars['oUserCurrent']->value->isAdministrator()||$_smarty_tpl->tpl_vars['oBlog']->value->getUserIsAdministrator())){?>
				<br /><br />
				<ul class="actions">
					<li>
						<a href="<?php echo smarty_function_router(array('page'=>'blog'),$_smarty_tpl);?>
edit/<?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getId();?>
/" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_edit'];?>
" class="edit"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_edit'];?>
</a></li>
						<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value->isAdministrator()){?>
							<li><a href="#" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_delete'];?>
" id="blog_delete_show" class="delete"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_delete'];?>
</a>
						<?php }else{ ?>
							<a href="<?php echo smarty_function_router(array('page'=>'blog'),$_smarty_tpl);?>
delete/<?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getId();?>
/?security_ls_key=<?php echo $_smarty_tpl->tpl_vars['LIVESTREET_SECURITY_KEY']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_delete'];?>
" onclick="return confirm('<?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_admin_delete_confirm'];?>
');" ><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_delete'];?>
</a>
						<?php }?>
					</li>
				</ul>
			<?php }?>
		</div>
	</div>
	
	<footer class="blog-footer" id="blog-footer">
		<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oUserCurrent']->value->getId()!=$_smarty_tpl->tpl_vars['oBlog']->value->getOwnerId()){?>
			<button type="submit"  class="button button-small" id="button-blog-join-second-<?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getId();?>
" data-button-additional="button-blog-join-first-<?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getId();?>
" data-only-text="1" onclick="ls.blog.toggleJoin(this, <?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getId();?>
); return false;"><?php if ($_smarty_tpl->tpl_vars['oBlog']->value->getUserIsJoin()){?><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_leave'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_join'];?>
<?php }?></button>
		<?php }?>
		<a href="<?php echo smarty_function_router(array('page'=>'rss'),$_smarty_tpl);?>
blog/<?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getUrl();?>
/" class="rss">RSS</a>
		
		<div class="admin">
			<?php echo $_smarty_tpl->tpl_vars['aLang']->value['blogs_owner'];?>
 —
			<a href="<?php echo $_smarty_tpl->tpl_vars['oUserOwner']->value->getUserWebPath();?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['oUserOwner']->value->getProfileAvatarPath(24);?>
" alt="avatar" class="avatar" /></a>
			<a href="<?php echo $_smarty_tpl->tpl_vars['oUserOwner']->value->getUserWebPath();?>
"><?php echo $_smarty_tpl->tpl_vars['oUserOwner']->value->getLogin();?>
</a>
		</div>
	</footer>
</div>

<?php echo smarty_function_hook(array('run'=>'blog_info','oBlog'=>$_smarty_tpl->tpl_vars['oBlog']->value),$_smarty_tpl);?>


<div class="nav-menu-wrapper">
	<ul class="nav nav-pills">
		<li <?php if ($_smarty_tpl->tpl_vars['sMenuSubItemSelect']->value=='good'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['sMenuSubBlogUrl']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_menu_collective_good'];?>
</a></li>
		<li <?php if ($_smarty_tpl->tpl_vars['sMenuSubItemSelect']->value=='new'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['sMenuSubBlogUrl']->value;?>
newall/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_menu_collective_new'];?>
</a><?php if ($_smarty_tpl->tpl_vars['iCountTopicsBlogNew']->value>0){?> <a href="<?php echo $_smarty_tpl->tpl_vars['sMenuSubBlogUrl']->value;?>
new/" class="new">+<?php echo $_smarty_tpl->tpl_vars['iCountTopicsBlogNew']->value;?>
</a><?php }?></li>
		<li <?php if ($_smarty_tpl->tpl_vars['sMenuSubItemSelect']->value=='discussed'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['sMenuSubBlogUrl']->value;?>
discussed/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_menu_collective_discussed'];?>
</a></li>
		<li <?php if ($_smarty_tpl->tpl_vars['sMenuSubItemSelect']->value=='top'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['sMenuSubBlogUrl']->value;?>
top/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_menu_collective_top'];?>
</a></li>
		<?php echo smarty_function_hook(array('run'=>'menu_blog_blog_item'),$_smarty_tpl);?>

	</ul>

	<?php if ($_smarty_tpl->tpl_vars['sPeriodSelectCurrent']->value){?>
		<ul class="nav nav-pills nav-pills-dropdown">
			<li <?php if ($_smarty_tpl->tpl_vars['sPeriodSelectCurrent']->value=='1'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['sPeriodSelectRoot']->value;?>
?period=1"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_menu_top_period_24h'];?>
</a></li>
			<li <?php if ($_smarty_tpl->tpl_vars['sPeriodSelectCurrent']->value=='7'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['sPeriodSelectRoot']->value;?>
?period=7"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_menu_top_period_7d'];?>
</a></li>
			<li <?php if ($_smarty_tpl->tpl_vars['sPeriodSelectCurrent']->value=='30'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['sPeriodSelectRoot']->value;?>
?period=30"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_menu_top_period_30d'];?>
</a></li>
			<li <?php if ($_smarty_tpl->tpl_vars['sPeriodSelectCurrent']->value=='all'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['sPeriodSelectRoot']->value;?>
?period=all"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_menu_top_period_all'];?>
</a></li>
		</ul>
	<?php }?>
</div>




<?php if ($_smarty_tpl->tpl_vars['bCloseBlog']->value){?>
	<?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_close_show'];?>

<?php }else{ ?>
	<?php echo $_smarty_tpl->getSubTemplate ('topic_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?>


<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>