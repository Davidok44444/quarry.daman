<?php /* Smarty version Smarty-3.1.8, created on 2012-09-05 17:38:45
         compiled from "/home/u224958/quarry.ru/www//templates/skin/synio/actions/ActionProfile/created_comments.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1186845085504755e51d7547-81033040%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '655d1d9a1a7bbf8bf7e0f5a960053607e8e7b3ed' => 
    array (
      0 => '/home/u224958/quarry.ru/www//templates/skin/synio/actions/ActionProfile/created_comments.tpl',
      1 => 1345531535,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1186845085504755e51d7547-81033040',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_504755e52cf533_25974321',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_504755e52cf533_25974321')) {function content_504755e52cf533_25974321($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars["sidebarPosition"] = new Smarty_variable('left', null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('menu'=>'people'), 0);?>




<?php echo $_smarty_tpl->getSubTemplate ('actions/ActionProfile/profile_top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('menu.profile_created.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>




<?php echo $_smarty_tpl->getSubTemplate ('comment_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>