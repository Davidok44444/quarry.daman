<?php /* Smarty version Smarty-3.1.8, created on 2012-09-11 17:23:18
         compiled from "/home/u224958/quarry.ru/www//templates/skin/synio/nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3907346475045a90f166e29-45523600%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ab406e5c4178a60a5c445b94459103c48cb101e' => 
    array (
      0 => '/home/u224958/quarry.ru/www//templates/skin/synio/nav.tpl',
      1 => 1347369794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3907346475045a90f166e29-45523600',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5045a90f1d4543_00908994',
  'variables' => 
  array (
    'menu' => 0,
    'aMenuContainers' => 0,
    'aMenuFetch' => 0,
    'oUserCurrent' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5045a90f1d4543_00908994')) {function content_5045a90f1d4543_00908994($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/home/u224958/quarry.ru/www//engine/modules/viewer/plugs/function.router.php';
?><nav id="nav">
	<?php if ($_smarty_tpl->tpl_vars['menu']->value){?>
		<?php if (in_array($_smarty_tpl->tpl_vars['menu']->value,$_smarty_tpl->tpl_vars['aMenuContainers']->value)){?><?php echo $_smarty_tpl->tpl_vars['aMenuFetch']->value[$_smarty_tpl->tpl_vars['menu']->value];?>
<?php }else{ ?><?php echo $_smarty_tpl->getSubTemplate ("menu.".($_smarty_tpl->tpl_vars['menu']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?>
	<?php }?>
	
	<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value){?>
		<a href="<?php echo smarty_function_router(array('page'=>'topic'),$_smarty_tpl);?>
add/" class="button button-write" id="modal_write_show"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_create'];?>
</a>
	<?php }?>
	
	<div class="search-header">
		<div class="search-header-show" id="search-header-show"><i class="icon-synio-search"></i> <a href="#" class="link-dotted"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['search_submit'];?>
</a></div>
		
		<form class="search-header-form" id="search-header-form" action="<?php echo smarty_function_router(array('page'=>'search'),$_smarty_tpl);?>
topics/" style="display: none">
			<input type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['search'];?>
" maxlength="255" name="q" class="input-text">
			<input type="submit" value="" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['search_submit'];?>
" class="input-submit">
		</form>
	</div>
</nav><?php }} ?>