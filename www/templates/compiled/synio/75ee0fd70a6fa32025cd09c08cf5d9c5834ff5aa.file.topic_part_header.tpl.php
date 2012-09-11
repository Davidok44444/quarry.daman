<?php /* Smarty version Smarty-3.1.8, created on 2012-09-04 11:10:13
         compiled from "/home/u224958/quarry.ru/www//templates/skin/synio/topic_part_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11674248375045a95551a333-17215699%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75ee0fd70a6fa32025cd09c08cf5d9c5834ff5aa' => 
    array (
      0 => '/home/u224958/quarry.ru/www//templates/skin/synio/topic_part_header.tpl',
      1 => 1345531563,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11674248375045a95551a333-17215699',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oTopic' => 0,
    'bTopicList' => 0,
    'aLang' => 0,
    'oBlog' => 0,
    'oUserCurrent' => 0,
    'LIVESTREET_SECURITY_KEY' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5045a9556b10a9_43840854',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5045a9556b10a9_43840854')) {function content_5045a9556b10a9_43840854($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cfg')) include '/home/u224958/quarry.ru/www//engine/modules/viewer/plugs/function.cfg.php';
if (!is_callable('smarty_function_router')) include '/home/u224958/quarry.ru/www//engine/modules/viewer/plugs/function.router.php';
?><?php $_smarty_tpl->tpl_vars["oBlog"] = new Smarty_variable($_smarty_tpl->tpl_vars['oTopic']->value->getBlog(), null, 0);?>
<?php $_smarty_tpl->tpl_vars["oUser"] = new Smarty_variable($_smarty_tpl->tpl_vars['oTopic']->value->getUser(), null, 0);?>
<?php $_smarty_tpl->tpl_vars["oVote"] = new Smarty_variable($_smarty_tpl->tpl_vars['oTopic']->value->getVote(), null, 0);?>


<article class="topic topic-type-<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getType();?>
 js-topic">
	<header class="topic-header">
		<h1 class="topic-title word-wrap">
			<?php if ($_smarty_tpl->tpl_vars['bTopicList']->value){?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getUrl();?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oTopic']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
</a>
			<?php }else{ ?>
				<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oTopic']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>

			<?php }?>
			
			<?php if ($_smarty_tpl->tpl_vars['oTopic']->value->getPublish()==0){?>   
				<i class="icon-synio-topic-draft" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_unpublish'];?>
"></i>
			<?php }?>
			
			<?php if ($_smarty_tpl->tpl_vars['oTopic']->value->getType()=='link'){?> 
				<i class="icon-synio-topic-link" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_link'];?>
"></i>
			<?php }?>
		</h1>
		
		
		<div class="topic-info">
			<a href="<?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getUrlFull();?>
" class="topic-blog"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oBlog']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
</a> 
			<?php if ($_smarty_tpl->tpl_vars['oBlog']->value->getType()!='personal'){?>
				<a href="#" class="blog-list-info" onclick="return ls.infobox.showInfoBlog(this,<?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getId();?>
);"></a>
			<?php }?>
		</div>
		
		<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value&&($_smarty_tpl->tpl_vars['oUserCurrent']->value->getId()==$_smarty_tpl->tpl_vars['oTopic']->value->getUserId()||$_smarty_tpl->tpl_vars['oUserCurrent']->value->isAdministrator()||$_smarty_tpl->tpl_vars['oBlog']->value->getUserIsAdministrator()||$_smarty_tpl->tpl_vars['oBlog']->value->getUserIsModerator()||$_smarty_tpl->tpl_vars['oBlog']->value->getOwnerId()==$_smarty_tpl->tpl_vars['oUserCurrent']->value->getId())){?>
			<ul class="topic-actions">								   
				<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value&&($_smarty_tpl->tpl_vars['oUserCurrent']->value->getId()==$_smarty_tpl->tpl_vars['oTopic']->value->getUserId()||$_smarty_tpl->tpl_vars['oUserCurrent']->value->isAdministrator()||$_smarty_tpl->tpl_vars['oBlog']->value->getUserIsAdministrator()||$_smarty_tpl->tpl_vars['oBlog']->value->getUserIsModerator()||$_smarty_tpl->tpl_vars['oBlog']->value->getOwnerId()==$_smarty_tpl->tpl_vars['oUserCurrent']->value->getId())){?>
					<li class="edit"><i class="icon-synio-actions-edit"></i><a href="<?php echo smarty_function_cfg(array('name'=>'path.root.web'),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getType();?>
/edit/<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getId();?>
/" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_edit'];?>
" class="actions-edit"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_edit'];?>
</a></li>
				<?php }?>
				
				<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value&&($_smarty_tpl->tpl_vars['oUserCurrent']->value->isAdministrator()||$_smarty_tpl->tpl_vars['oBlog']->value->getUserIsAdministrator()||$_smarty_tpl->tpl_vars['oBlog']->value->getOwnerId()==$_smarty_tpl->tpl_vars['oUserCurrent']->value->getId())){?>
					<li class="delete"><i class="icon-synio-actions-delete"></i><a href="<?php echo smarty_function_router(array('page'=>'topic'),$_smarty_tpl);?>
delete/<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getId();?>
/?security_ls_key=<?php echo $_smarty_tpl->tpl_vars['LIVESTREET_SECURITY_KEY']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_delete'];?>
" onclick="return confirm('<?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_delete_confirm'];?>
');" class="actions-delete"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_delete'];?>
</a></li>
				<?php }?>
			</ul>
		<?php }?>
	</header><?php }} ?>