<?php /* Smarty version Smarty-3.1.8, created on 2012-09-07 14:14:21
         compiled from "/home/u224958/quarry.ru/www//templates/skin/synio/actions/ActionProfile/created_notes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15496462665049c8fd5f72a5-34150694%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5fff2d583e9b36224cddfdc02b48361bc53f45b' => 
    array (
      0 => '/home/u224958/quarry.ru/www//templates/skin/synio/actions/ActionProfile/created_notes.tpl',
      1 => 1345531535,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15496462665049c8fd5f72a5-34150694',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aNotes' => 0,
    'oNote' => 0,
    'aLang' => 0,
    'aPaging' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5049c8fd669b29_22002634',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5049c8fd669b29_22002634')) {function content_5049c8fd669b29_22002634($_smarty_tpl) {?><?php if (!is_callable('smarty_function_date_format')) include '/home/u224958/quarry.ru/www//engine/modules/viewer/plugs/function.date_format.php';
?><?php $_smarty_tpl->tpl_vars["sidebarPosition"] = new Smarty_variable('left', null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('menu'=>'people'), 0);?>




<?php echo $_smarty_tpl->getSubTemplate ('actions/ActionProfile/profile_top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('menu.profile_created.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



<?php if ($_smarty_tpl->tpl_vars['aNotes']->value){?>
	<table class="table table-profile-notes" cellspacing="0">
		<?php  $_smarty_tpl->tpl_vars['oNote'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oNote']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aNotes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oNote']->key => $_smarty_tpl->tpl_vars['oNote']->value){
$_smarty_tpl->tpl_vars['oNote']->_loop = true;
?>
			<tr>
				<td class="cell-username"><a href="<?php echo $_smarty_tpl->tpl_vars['oNote']->value->getTargetUser()->getUserWebPath();?>
"><?php echo $_smarty_tpl->tpl_vars['oNote']->value->getTargetUser()->getLogin();?>
</a></td>
				<td class="cell-note"><?php echo $_smarty_tpl->tpl_vars['oNote']->value->getText();?>
</td>
				<td class="cell-date"><?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['oNote']->value->getDateAdd(),'format'=>"j F Y"),$_smarty_tpl);?>
</td>
			</tr>
		<?php } ?>
	</table>
<?php }else{ ?>
	<div class="notice-empty"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_note_list_empty'];?>
</div>
<?php }?>


<?php echo $_smarty_tpl->getSubTemplate ('paging.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('aPaging'=>$_smarty_tpl->tpl_vars['aPaging']->value), 0);?>




<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>