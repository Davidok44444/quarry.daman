<?php /* Smarty version Smarty-3.1.8, created on 2012-09-04 11:35:45
         compiled from "/home/u224958/quarry.ru/www//templates/skin/synio/actions/ActionProfile/created_topics.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7489101035045af51864b91-99446319%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fcbf0b201a669f48dac8d7451b89b59e13ca9eb9' => 
    array (
      0 => '/home/u224958/quarry.ru/www//templates/skin/synio/actions/ActionProfile/created_topics.tpl',
      1 => 1345531535,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7489101035045af51864b91-99446319',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5045af518b0429_43297092',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5045af518b0429_43297092')) {function content_5045af518b0429_43297092($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars["sidebarPosition"] = new Smarty_variable('left', null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('menu'=>'people'), 0);?>




<?php echo $_smarty_tpl->getSubTemplate ('actions/ActionProfile/profile_top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('menu.profile_created.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>




<?php echo $_smarty_tpl->getSubTemplate ('topic_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>