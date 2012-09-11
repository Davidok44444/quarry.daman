<?php /* Smarty version Smarty-3.1.8, created on 2012-09-04 11:32:58
         compiled from "/home/u224958/quarry.ru/www/plugins/page/templates/skin/default/actions/ActionPage/page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8497239085045aeaa266a24-98094408%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bbc53cb706c568305efcc98973bc143e98f335d6' => 
    array (
      0 => '/home/u224958/quarry.ru/www/plugins/page/templates/skin/default/actions/ActionPage/page.tpl',
      1 => 1345531567,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8497239085045aeaa266a24-98094408',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oConfig' => 0,
    'oPage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5045aeaa2ed7a4_28656020',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5045aeaa2ed7a4_28656020')) {function content_5045aeaa2ed7a4_28656020($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars["noSidebar"] = new Smarty_variable(true, null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="topic">
	<div class="topic-content text">
		<?php if ($_smarty_tpl->tpl_vars['oConfig']->value->GetValue('view.tinymce')){?>
			<?php echo $_smarty_tpl->tpl_vars['oPage']->value->getText();?>

		<?php }else{ ?>
			<?php if ($_smarty_tpl->tpl_vars['oPage']->value->getAutoBr()){?>
				<?php echo nl2br($_smarty_tpl->tpl_vars['oPage']->value->getText());?>

			<?php }else{ ?>
				<?php echo $_smarty_tpl->tpl_vars['oPage']->value->getText();?>

			<?php }?>
		<?php }?>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>