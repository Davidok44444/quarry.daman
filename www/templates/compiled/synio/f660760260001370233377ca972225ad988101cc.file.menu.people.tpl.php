<?php /* Smarty version Smarty-3.1.8, created on 2012-09-04 11:35:45
         compiled from "/home/u224958/quarry.ru/www//templates/skin/synio/menu.people.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11778453645045af5190c337-88551942%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f660760260001370233377ca972225ad988101cc' => 
    array (
      0 => '/home/u224958/quarry.ru/www//templates/skin/synio/menu.people.tpl',
      1 => 1345531552,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11778453645045af5190c337-88551942',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sMenuItemSelect' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5045af51972641_32563039',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5045af51972641_32563039')) {function content_5045af51972641_32563039($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/home/u224958/quarry.ru/www//engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_hook')) include '/home/u224958/quarry.ru/www//engine/modules/viewer/plugs/function.hook.php';
?><ul class="nav nav-menu">
	<li <?php if ($_smarty_tpl->tpl_vars['sMenuItemSelect']->value=='all'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'people'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['people_menu_users_all'];?>
</a></li>
	<li <?php if ($_smarty_tpl->tpl_vars['sMenuItemSelect']->value=='online'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'people'),$_smarty_tpl);?>
online/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['people_menu_users_online'];?>
</a></li>
	<li <?php if ($_smarty_tpl->tpl_vars['sMenuItemSelect']->value=='new'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'people'),$_smarty_tpl);?>
new/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['people_menu_users_new'];?>
</a></li>
	
	<?php echo smarty_function_hook(array('run'=>'menu_people_people_item'),$_smarty_tpl);?>

</ul>

<?php echo smarty_function_hook(array('run'=>'menu_people'),$_smarty_tpl);?>

<?php }} ?>