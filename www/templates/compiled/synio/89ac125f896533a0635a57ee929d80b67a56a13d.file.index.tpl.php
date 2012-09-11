<?php /* Smarty version Smarty-3.1.8, created on 2012-09-10 21:46:12
         compiled from "/home/u224958/quarry.ru/www//templates/skin/synio/actions/ActionComments/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1803530219504e2764ae5454-69169107%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89ac125f896533a0635a57ee929d80b67a56a13d' => 
    array (
      0 => '/home/u224958/quarry.ru/www//templates/skin/synio/actions/ActionComments/index.tpl',
      1 => 1345531532,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1803530219504e2764ae5454-69169107',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_504e2764b3d652_28196198',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_504e2764b3d652_28196198')) {function content_504e2764b3d652_28196198($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<h2 class="page-header"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['comments_all'];?>
</h2>

<?php echo $_smarty_tpl->getSubTemplate ('comment_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php }} ?>