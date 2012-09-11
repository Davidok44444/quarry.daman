<?php /* Smarty version Smarty-3.1.8, created on 2012-09-04 22:20:37
         compiled from "/home/u224958/quarry.ru/www//templates/skin/synio/menu.profile_whois.tpl" */ ?>
<?php /*%%SmartyHeaderCode:104248051350464675ab16c0-56923515%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '361a20850e4f3f8c88fa3ed69d6459482b76d301' => 
    array (
      0 => '/home/u224958/quarry.ru/www//templates/skin/synio/menu.profile_whois.tpl',
      1 => 1345531553,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '104248051350464675ab16c0-56923515',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sMenuSubItemSelect' => 0,
    'oUserProfile' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50464675af3698_23794477',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50464675af3698_23794477')) {function content_50464675af3698_23794477($_smarty_tpl) {?><?php if (!is_callable('smarty_function_hook')) include '/home/u224958/quarry.ru/www//engine/modules/viewer/plugs/function.hook.php';
?><ul class="nav nav-pills nav-pills-profile">
	<li <?php if ($_smarty_tpl->tpl_vars['sMenuSubItemSelect']->value=='main'){?>class="active"<?php }?>>
		<a href="<?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getUserWebPath();?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_menu_profile_whois'];?>
</a>
	</li>

	<?php echo smarty_function_hook(array('run'=>'menu_profile_whois_item','oUserProfile'=>$_smarty_tpl->tpl_vars['oUserProfile']->value),$_smarty_tpl);?>

</ul>

<?php echo smarty_function_hook(array('run'=>'menu_profile_whois','oUserProfile'=>$_smarty_tpl->tpl_vars['oUserProfile']->value),$_smarty_tpl);?>

<?php }} ?>