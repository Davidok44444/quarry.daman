<?php /* Smarty version Smarty-3.1.8, created on 2012-09-07 15:03:25
         compiled from "/home/u224958/quarry.ru/www//templates/skin/synio/actions/ActionTag/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9812277445049d47dbb4672-24578132%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4fa448ca2e1582d2d94cfc8c735a7a7ad3c923e' => 
    array (
      0 => '/home/u224958/quarry.ru/www//templates/skin/synio/actions/ActionTag/index.tpl',
      1 => 1345531539,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9812277445049d47dbb4672-24578132',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
    'sTag' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5049d47dbe7c93_21894067',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5049d47dbe7c93_21894067')) {function content_5049d47dbe7c93_21894067($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



<form action="" method="GET" class="js-tag-search-form search-tags">
	<input type="text" name="tag" placeholder="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_tags_search'];?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sTag']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="input-text input-width-full autocomplete-tags js-tag-search" />
</form>


<?php echo $_smarty_tpl->getSubTemplate ('topic_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>