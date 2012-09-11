<?php /* Smarty version Smarty-3.1.8, created on 2012-09-04 11:09:03
         compiled from "/home/u224958/quarry.ru/www//templates/skin/synio/nav_content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18077701965045a90f1dfc93-88607470%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e61bd4b319eeb94ddf4d24bdd4ac7b30e4d8c54a' => 
    array (
      0 => '/home/u224958/quarry.ru/www//templates/skin/synio/nav_content.tpl',
      1 => 1345531554,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18077701965045a90f1dfc93-88607470',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu_content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5045a90f2091b8_89074686',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5045a90f2091b8_89074686')) {function content_5045a90f2091b8_89074686($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['menu_content']->value){?>
	<?php echo $_smarty_tpl->getSubTemplate ("menu.".($_smarty_tpl->tpl_vars['menu_content']->value).".content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?><?php }} ?>