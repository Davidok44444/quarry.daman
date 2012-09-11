<?php /* Smarty version Smarty-3.1.8, created on 2012-09-04 12:10:45
         compiled from "/home/u224958/quarry.ru/www//templates/skin/synio/actions/ActionError/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8828499195045b785b0a775-54100820%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91e5bca392b07408ac8e90f6278500a166d59b13' => 
    array (
      0 => '/home/u224958/quarry.ru/www//templates/skin/synio/actions/ActionError/index.tpl',
      1 => 1345531532,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8828499195045b785b0a775-54100820',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aMsgError' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5045b785ba08c4_70163693',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5045b785ba08c4_70163693')) {function content_5045b785ba08c4_70163693($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cfg')) include '/home/u224958/quarry.ru/www//engine/modules/viewer/plugs/function.cfg.php';
?><?php $_smarty_tpl->tpl_vars["noSidebar"] = new Smarty_variable(true, null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('noShowSystemMessage'=>true), 0);?>



<div class="content-error">
	<?php if ($_smarty_tpl->tpl_vars['aMsgError']->value[0]['title']){?>
		<h2 class="page-header"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['error'];?>
: <span><?php echo $_smarty_tpl->tpl_vars['aMsgError']->value[0]['title'];?>
</span></h2>
	<?php }?>

	<p><?php echo $_smarty_tpl->tpl_vars['aMsgError']->value[0]['msg'];?>
</p>
	<br />
	<br />
	<p><a href="javascript:history.go(-1);"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['site_history_back'];?>
</a><br />
	<a href="<?php echo smarty_function_cfg(array('name'=>'path.root.web'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['site_go_main'];?>
</a></p>
</div>


<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>