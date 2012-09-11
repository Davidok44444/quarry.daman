<?php /* Smarty version Smarty-3.1.8, created on 2012-09-04 23:06:00
         compiled from "/home/u224958/quarry.ru/www//templates/skin/synio/actions/ActionPersonalBlog/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:202494795650465118aa62d4-32982152%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90d6cd2f084c47e8bb184408e2ed3112a932c8b5' => 
    array (
      0 => '/home/u224958/quarry.ru/www//templates/skin/synio/actions/ActionPersonalBlog/index.tpl',
      1 => 1345531535,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '202494795650465118aa62d4-32982152',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50465118add070_73968691',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50465118add070_73968691')) {function content_50465118add070_73968691($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('menu'=>'blog','menu_content'=>'blog'), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('topic_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>