<?php /* Smarty version Smarty-3.1.8, created on 2012-09-10 13:05:36
         compiled from "/home/u224958/quarry.ru/www//templates/skin/synio/actions/ActionTopic/saved.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1870229083504dad6066f791-81131405%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db8b7b2a1f86a142eede5441ae53a6575fba2c2b' => 
    array (
      0 => '/home/u224958/quarry.ru/www//templates/skin/synio/actions/ActionTopic/saved.tpl',
      1 => 1345531540,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1870229083504dad6066f791-81131405',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_504dad606dc993_60810166',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_504dad606dc993_60810166')) {function content_504dad606dc993_60810166($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('menu_content'=>'create'), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('topic_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>