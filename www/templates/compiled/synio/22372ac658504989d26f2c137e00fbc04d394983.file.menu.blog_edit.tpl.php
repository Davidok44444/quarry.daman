<?php /* Smarty version Smarty-3.1.8, created on 2012-09-07 18:04:02
         compiled from "/home/u224958/quarry.ru/www//templates/skin/synio/menu.blog_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5552933345049fed2c762c8-62954399%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22372ac658504989d26f2c137e00fbc04d394983' => 
    array (
      0 => '/home/u224958/quarry.ru/www//templates/skin/synio/menu.blog_edit.tpl',
      1 => 1345531552,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5552933345049fed2c762c8-62954399',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
    'oBlogEdit' => 0,
    'sMenuItemSelect' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5049fed2d05859_27212331',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5049fed2d05859_27212331')) {function content_5049fed2d05859_27212331($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/home/u224958/quarry.ru/www//engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_hook')) include '/home/u224958/quarry.ru/www//engine/modules/viewer/plugs/function.hook.php';
?><h2 class="page-header"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_admin'];?>
: <a href="<?php echo $_smarty_tpl->tpl_vars['oBlogEdit']->value->getUrlFull();?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oBlogEdit']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
</a></h2>

<ul class="nav nav-pills">
	<li <?php if ($_smarty_tpl->tpl_vars['sMenuItemSelect']->value=='profile'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'blog'),$_smarty_tpl);?>
edit/<?php echo $_smarty_tpl->tpl_vars['oBlogEdit']->value->getId();?>
/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_admin_profile'];?>
</a></li>
	<li <?php if ($_smarty_tpl->tpl_vars['sMenuItemSelect']->value=='admin'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'blog'),$_smarty_tpl);?>
admin/<?php echo $_smarty_tpl->tpl_vars['oBlogEdit']->value->getId();?>
/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_admin_users'];?>
</a></li>

	<?php echo smarty_function_hook(array('run'=>'menu_blog_edit_admin_item'),$_smarty_tpl);?>

</ul>

<?php echo smarty_function_hook(array('run'=>'menu_blog_edit'),$_smarty_tpl);?>
<?php }} ?>