<?php /* Smarty version Smarty-3.1.8, created on 2012-09-04 11:10:12
         compiled from "/home/u224958/quarry.ru/www//templates/skin/synio/actions/ActionIndex/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1761480925045a954869787-75904319%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce73a84aed57bbfca297e0b8e08180f7f75fa539' => 
    array (
      0 => '/home/u224958/quarry.ru/www//templates/skin/synio/actions/ActionIndex/index.tpl',
      1 => 1345531533,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1761480925045a954869787-75904319',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5045a95489e1b2_00672723',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5045a95489e1b2_00672723')) {function content_5045a95489e1b2_00672723($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('menu'=>'blog','menu_content'=>'blog'), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('topic_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>