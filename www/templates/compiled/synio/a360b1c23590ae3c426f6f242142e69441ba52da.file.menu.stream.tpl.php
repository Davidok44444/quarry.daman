<?php /* Smarty version Smarty-3.1.8, created on 2012-09-07 15:24:59
         compiled from "/home/u224958/quarry.ru/www//templates/skin/synio/menu.stream.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3203495045049d98ba0ac66-98538237%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a360b1c23590ae3c426f6f242142e69441ba52da' => 
    array (
      0 => '/home/u224958/quarry.ru/www//templates/skin/synio/menu.stream.tpl',
      1 => 1345531553,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3203495045049d98ba0ac66-98538237',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oUserCurrent' => 0,
    'sMenuItemSelect' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5049d98ba393d2_45586635',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5049d98ba393d2_45586635')) {function content_5049d98ba393d2_45586635($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/home/u224958/quarry.ru/www//engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_hook')) include '/home/u224958/quarry.ru/www//engine/modules/viewer/plugs/function.hook.php';
?><ul class="nav nav-menu">
	<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value){?>
		<li <?php if ($_smarty_tpl->tpl_vars['sMenuItemSelect']->value=='user'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'stream'),$_smarty_tpl);?>
user/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['stream_menu_user'];?>
</a></li>
	<?php }?>
	<li <?php if ($_smarty_tpl->tpl_vars['sMenuItemSelect']->value=='all'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'stream'),$_smarty_tpl);?>
all/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['stream_menu_all'];?>
</a></li>

	<?php echo smarty_function_hook(array('run'=>'menu_stream_item'),$_smarty_tpl);?>

</ul>
<?php echo smarty_function_hook(array('run'=>'menu_stream'),$_smarty_tpl);?>

<?php }} ?>