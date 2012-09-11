<?php /* Smarty version Smarty-3.1.8, created on 2012-09-04 11:09:03
         compiled from "/home/u224958/quarry.ru/www//templates/skin/synio/toolbar_admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10175762085045a90f432d63-65366199%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c2fc862e9af4bc1fdc2d9fc242fe49c07b7a9d5' => 
    array (
      0 => '/home/u224958/quarry.ru/www//templates/skin/synio/toolbar_admin.tpl',
      1 => 1345531562,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10175762085045a90f432d63-65366199',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oUserCurrent' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5045a90f45ccd4_29743300',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5045a90f45ccd4_29743300')) {function content_5045a90f45ccd4_29743300($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/home/u224958/quarry.ru/www//engine/modules/viewer/plugs/function.router.php';
?><?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oUserCurrent']->value->isAdministrator()){?>
<section class="toolbar-admin">
	<a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['admin_title'];?>
">
		<i></i>
	</a>
</section>
<?php }?><?php }} ?>