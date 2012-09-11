<?php /* Smarty version Smarty-3.1.8, created on 2012-09-04 12:08:24
         compiled from "/home/u224958/quarry.ru/www//templates/skin/synio/actions/ActionLogin/exit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7977447955045b6f811e8e5-62732060%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb55804de7f773ad10e85a019552346c9367d4ec' => 
    array (
      0 => '/home/u224958/quarry.ru/www//templates/skin/synio/actions/ActionLogin/exit.tpl',
      1 => 1345531533,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7977447955045b6f811e8e5-62732060',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5045b6f819a1e6_52445603',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5045b6f819a1e6_52445603')) {function content_5045b6f819a1e6_52445603($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars["noSidebar"] = new Smarty_variable(true, null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<h2 class="page-header"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_exit_notice'];?>
</h2>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>