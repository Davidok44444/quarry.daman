<?php /* Smarty version Smarty-3.1.8, created on 2012-09-05 17:22:13
         compiled from "/home/u224958/quarry.ru/www//templates/skin/synio/actions/ActionProfile/friends.tpl" */ ?>
<?php /*%%SmartyHeaderCode:117558742850475205614330-40986571%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dbdce1615e23182d04534ff3b16861f2535c3535' => 
    array (
      0 => '/home/u224958/quarry.ru/www//templates/skin/synio/actions/ActionProfile/friends.tpl',
      1 => 1345531536,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '117558742850475205614330-40986571',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aFriends' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5047520565eb57_12174131',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5047520565eb57_12174131')) {function content_5047520565eb57_12174131($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars["sidebarPosition"] = new Smarty_variable('left', null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('menu'=>'people'), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ('actions/ActionProfile/profile_top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



<?php echo $_smarty_tpl->getSubTemplate ('user_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('aUsersList'=>$_smarty_tpl->tpl_vars['aFriends']->value), 0);?>




<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>