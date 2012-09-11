<?php /* Smarty version Smarty-3.1.8, created on 2012-09-04 11:32:44
         compiled from "/home/u224958/quarry.ru/www//templates/skin/synio/actions/ActionBlog/topic.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20126178735045ae9c1b94e9-78661038%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a8be338a0f091cacfb8127b76dcd6164ab38b7f' => 
    array (
      0 => '/home/u224958/quarry.ru/www//templates/skin/synio/actions/ActionBlog/topic.tpl',
      1 => 1345531532,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20126178735045ae9c1b94e9-78661038',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oTopic' => 0,
    'aLang' => 0,
    'aPagingCmt' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5045ae9c22c068_65063829',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5045ae9c22c068_65063829')) {function content_5045ae9c22c068_65063829($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('menu'=>'blog'), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ('topic.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('comment_tree.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('iTargetId'=>$_smarty_tpl->tpl_vars['oTopic']->value->getId(),'iAuthorId'=>$_smarty_tpl->tpl_vars['oTopic']->value->getUserId(),'sAuthorNotice'=>$_smarty_tpl->tpl_vars['aLang']->value['topic_author'],'sTargetType'=>'topic','iCountComment'=>$_smarty_tpl->tpl_vars['oTopic']->value->getCountComment(),'sDateReadLast'=>$_smarty_tpl->tpl_vars['oTopic']->value->getDateRead(),'bAllowNewComment'=>$_smarty_tpl->tpl_vars['oTopic']->value->getForbidComment(),'sNoticeNotAllow'=>$_smarty_tpl->tpl_vars['aLang']->value['topic_comment_notallow'],'sNoticeCommentAdd'=>$_smarty_tpl->tpl_vars['aLang']->value['topic_comment_add'],'bAllowSubscribe'=>true,'oSubscribeComment'=>$_smarty_tpl->tpl_vars['oTopic']->value->getSubscribeNewComment(),'aPagingCmt'=>$_smarty_tpl->tpl_vars['aPagingCmt']->value), 0);?>



<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>