<?php /* Smarty version Smarty-3.1.8, created on 2012-09-06 15:35:36
         compiled from "/home/u224958/quarry.ru/www//templates/skin/synio/actions/ActionProfile/favourite_topics.tpl" */ ?>
<?php /*%%SmartyHeaderCode:58473022850488a8890cac9-13947736%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec1a95a727736cd3156e4e1230a763e3a02ee620' => 
    array (
      0 => '/home/u224958/quarry.ru/www//templates/skin/synio/actions/ActionProfile/favourite_topics.tpl',
      1 => 1345531536,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '58473022850488a8890cac9-13947736',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oUserCurrent' => 0,
    'oUserProfile' => 0,
    'aBlock' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50488a88a61b43_76114030',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50488a88a61b43_76114030')) {function content_50488a88a61b43_76114030($_smarty_tpl) {?><?php if (!is_callable('smarty_insert_block')) include '/home/u224958/quarry.ru/www//engine/modules/viewer/plugs/insert.block.php';
?><?php $_smarty_tpl->tpl_vars["sidebarPosition"] = new Smarty_variable('left', null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('menu'=>'people'), 0);?>




<?php echo $_smarty_tpl->getSubTemplate ('actions/ActionProfile/profile_top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('menu.profile_favourite.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oUserCurrent']->value->getId()==$_smarty_tpl->tpl_vars['oUserProfile']->value->getId()){?>
	<?php $_smarty_tpl->createLocalArrayVariable('aBlockParams', null, 0);
$_smarty_tpl->tpl_vars['aBlockParams']->value['user'] = $_smarty_tpl->tpl_vars['oUserProfile']->value;?>
	<?php echo smarty_insert_block(array('block' => 'tagsFavouriteTopic', 'params' => $_smarty_tpl->tpl_vars['aBlock']->value['params']),$_smarty_tpl);?>

<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ('topic_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>




<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>