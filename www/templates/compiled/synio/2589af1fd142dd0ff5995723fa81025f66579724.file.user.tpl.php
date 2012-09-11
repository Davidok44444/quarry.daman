<?php /* Smarty version Smarty-3.1.8, created on 2012-09-07 15:24:59
         compiled from "/home/u224958/quarry.ru/www//templates/skin/synio/actions/ActionStream/user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20479236935049d98b994301-32503510%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2589af1fd142dd0ff5995723fa81025f66579724' => 
    array (
      0 => '/home/u224958/quarry.ru/www//templates/skin/synio/actions/ActionStream/user.tpl',
      1 => 1345531539,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20479236935049d98b994301-32503510',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
    'aStreamEvents' => 0,
    'bDisableGetMoreButton' => 0,
    'iStreamLastId' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5049d98b9e12f9_43898465',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5049d98b9e12f9_43898465')) {function content_5049d98b9e12f9_43898465($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('menu'=>"stream"), 0);?>


<h2 class="page-header"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['stream_menu'];?>
</h2>

<?php if (count($_smarty_tpl->tpl_vars['aStreamEvents']->value)){?>
	<ul class="stream-list" id="stream-list">
		<?php echo $_smarty_tpl->getSubTemplate ('actions/ActionStream/events.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</ul>

    <?php if (!$_smarty_tpl->tpl_vars['bDisableGetMoreButton']->value){?>
        <input type="hidden" id="stream_last_id" value="<?php echo $_smarty_tpl->tpl_vars['iStreamLastId']->value;?>
" />
        <a class="stream-get-more" id="stream_get_more" href="javascript:ls.stream.getMore()"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['stream_get_more'];?>
 &darr;</a>
    <?php }?>
<?php }else{ ?>
    <?php echo $_smarty_tpl->tpl_vars['aLang']->value['stream_no_events'];?>

<?php }?>


<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>