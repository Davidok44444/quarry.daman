<?php /* Smarty version Smarty-3.1.8, created on 2012-09-05 17:22:13
         compiled from "/home/u224958/quarry.ru/www//templates/skin/synio/actions/ActionProfile/stream.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1013862143504752055332a0-04889580%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fbdc3405c6f0d9e60f532ffbb26750cbd3a27818' => 
    array (
      0 => '/home/u224958/quarry.ru/www//templates/skin/synio/actions/ActionProfile/stream.tpl',
      1 => 1345531536,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1013862143504752055332a0-04889580',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aStreamEvents' => 0,
    'bDisableGetMoreButton' => 0,
    'iStreamLastId' => 0,
    'oUserProfile' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5047520574e416_69209893',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5047520574e416_69209893')) {function content_5047520574e416_69209893($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars["sidebarPosition"] = new Smarty_variable('left', null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('menu'=>'people'), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ('actions/ActionProfile/profile_top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



<?php if (count($_smarty_tpl->tpl_vars['aStreamEvents']->value)){?>
	<ul class="stream-list" id="stream-list">
	<?php echo $_smarty_tpl->getSubTemplate ('actions/ActionStream/events.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</ul>

	<?php if (!$_smarty_tpl->tpl_vars['bDisableGetMoreButton']->value){?>
		<input type="hidden" id="stream_last_id" value="<?php echo $_smarty_tpl->tpl_vars['iStreamLastId']->value;?>
" />
		<a class="stream-get-more" id="stream_get_more" href="javascript:ls.stream.getMoreByUser(<?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getId();?>
)"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['stream_get_more'];?>
 &darr;</a>
	<?php }?>
<?php }else{ ?>
	<?php echo $_smarty_tpl->tpl_vars['aLang']->value['stream_no_events'];?>

<?php }?>



<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>