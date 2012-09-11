<?php /* Smarty version Smarty-3.1.8, created on 2012-09-04 11:09:03
         compiled from "/home/u224958/quarry.ru/www/plugins/page/templates/skin/default/main_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7633212015045a90f10af07-22628942%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '37244b6ec210b731b109ffee9643a68ff8005bd8' => 
    array (
      0 => '/home/u224958/quarry.ru/www/plugins/page/templates/skin/default/main_menu.tpl',
      1 => 1345531568,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7633212015045a90f10af07-22628942',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aPagesMain' => 0,
    'sAction' => 0,
    'sEvent' => 0,
    'oPage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5045a90f1567e8_63534506',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5045a90f1567e8_63534506')) {function content_5045a90f1567e8_63534506($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/home/u224958/quarry.ru/www//engine/modules/viewer/plugs/function.router.php';
?><?php  $_smarty_tpl->tpl_vars['oPage'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oPage']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aPagesMain']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oPage']->key => $_smarty_tpl->tpl_vars['oPage']->value){
$_smarty_tpl->tpl_vars['oPage']->_loop = true;
?>
	<li <?php if ($_smarty_tpl->tpl_vars['sAction']->value=='page'&&$_smarty_tpl->tpl_vars['sEvent']->value==$_smarty_tpl->tpl_vars['oPage']->value->getUrl()){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'page'),$_smarty_tpl);?>
<?php echo $_smarty_tpl->tpl_vars['oPage']->value->getUrlFull();?>
/" ><?php echo $_smarty_tpl->tpl_vars['oPage']->value->getTitle();?>
</a><i></i></li>
<?php } ?>	<?php }} ?>