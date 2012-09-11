<?php /* Smarty version Smarty-3.1.8, created on 2012-09-05 16:51:18
         compiled from "/home/u224958/quarry.ru/www//templates/skin/synio/menu.settings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:179996242750474ac64cb243-55373851%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f9b7b1289bf05fff11a2d43124722e0847c81b1' => 
    array (
      0 => '/home/u224958/quarry.ru/www//templates/skin/synio/menu.settings.tpl',
      1 => 1345531553,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '179996242750474ac64cb243-55373851',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
    'sMenuSubItemSelect' => 0,
    'oConfig' => 0,
    'sMenuItemSelect' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50474ac654f4b6_95454727',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50474ac654f4b6_95454727')) {function content_50474ac654f4b6_95454727($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/home/u224958/quarry.ru/www//engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_hook')) include '/home/u224958/quarry.ru/www//engine/modules/viewer/plugs/function.hook.php';
?><h2 class="page-header"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['settings_menu'];?>
</h2>

<ul class="nav nav-pills">
	<li <?php if ($_smarty_tpl->tpl_vars['sMenuSubItemSelect']->value=='profile'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'settings'),$_smarty_tpl);?>
profile/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['settings_menu_profile'];?>
</a></li>
	<li <?php if ($_smarty_tpl->tpl_vars['sMenuSubItemSelect']->value=='account'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'settings'),$_smarty_tpl);?>
account/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['settings_menu_account'];?>
</a></li>
	<li <?php if ($_smarty_tpl->tpl_vars['sMenuSubItemSelect']->value=='tuning'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'settings'),$_smarty_tpl);?>
tuning/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['settings_menu_tuning'];?>
</a></li>
	
	<?php if ($_smarty_tpl->tpl_vars['oConfig']->value->GetValue('general.reg.invite')){?>
		<li <?php if ($_smarty_tpl->tpl_vars['sMenuItemSelect']->value=='invite'){?>class="active"<?php }?>>
			<a href="<?php echo smarty_function_router(array('page'=>'settings'),$_smarty_tpl);?>
invite/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['settings_menu_invite'];?>
</a>
		</li>
	<?php }?>

	<?php echo smarty_function_hook(array('run'=>'menu_settings_settings_item'),$_smarty_tpl);?>

</ul>

<?php echo smarty_function_hook(array('run'=>'menu_settings'),$_smarty_tpl);?>

		
		
		

<?php }} ?>