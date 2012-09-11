<?php /* Smarty version Smarty-3.1.8, created on 2012-09-04 15:40:01
         compiled from "/home/u224958/quarry.ru/www//templates/skin/synio/actions/ActionBlog/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19700146585045e891c45163-38555340%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba4a95ad9e60f5d4497bb6d1faa0ce426ca5cc74' => 
    array (
      0 => '/home/u224958/quarry.ru/www//templates/skin/synio/actions/ActionBlog/index.tpl',
      1 => 1345531532,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19700146585045e891c45163-38555340',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5045e891d0bcc1_32839228',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5045e891d0bcc1_32839228')) {function content_5045e891d0bcc1_32839228($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('menu'=>'blog','menu_content'=>'blog'), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('topic_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>