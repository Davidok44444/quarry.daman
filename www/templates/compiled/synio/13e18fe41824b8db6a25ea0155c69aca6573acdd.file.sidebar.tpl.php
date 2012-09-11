<?php /* Smarty version Smarty-3.1.8, created on 2012-09-04 11:10:11
         compiled from "/home/u224958/quarry.ru/www//templates/skin/synio/sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11547425165045a9536c66f6-39392370%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '13e18fe41824b8db6a25ea0155c69aca6573acdd' => 
    array (
      0 => '/home/u224958/quarry.ru/www//templates/skin/synio/sidebar.tpl',
      1 => 1345531561,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11547425165045a9536c66f6-39392370',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sidebarPosition' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5045a9536e4725_66937902',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5045a9536e4725_66937902')) {function content_5045a9536e4725_66937902($_smarty_tpl) {?><aside id="sidebar" <?php if ($_smarty_tpl->tpl_vars['sidebarPosition']->value=='left'){?>class="sidebar-profile"<?php }?>>
	<?php echo $_smarty_tpl->getSubTemplate ('blocks.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('group'=>'right'), 0);?>

</aside><?php }} ?>