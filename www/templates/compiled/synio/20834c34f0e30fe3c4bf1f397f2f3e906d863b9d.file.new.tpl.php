<?php /* Smarty version Smarty-3.1.8, created on 2012-09-08 17:11:39
         compiled from "/home/u224958/quarry.ru/www//templates/skin/synio/actions/ActionPeople/new.tpl" */ ?>
<?php /*%%SmartyHeaderCode:643933657504b440bbd87d3-77755128%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20834c34f0e30fe3c4bf1f397f2f3e906d863b9d' => 
    array (
      0 => '/home/u224958/quarry.ru/www//templates/skin/synio/actions/ActionPeople/new.tpl',
      1 => 1345531534,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '643933657504b440bbd87d3-77755128',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aUsersRegister' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_504b440bc293d6_24471559',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_504b440bc293d6_24471559')) {function content_504b440bc293d6_24471559($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('menu'=>'people'), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ('user_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('aUsersList'=>$_smarty_tpl->tpl_vars['aUsersRegister']->value), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>