<?php /* Smarty version Smarty-3.1.8, created on 2012-09-04 11:32:44
         compiled from "/home/u224958/quarry.ru/www//templates/skin/synio/topic.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5657655225045ae9c5c5ea3-52369833%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b15592634c853e85ef88cca2e115e49c503ce477' => 
    array (
      0 => '/home/u224958/quarry.ru/www//templates/skin/synio/topic.tpl',
      1 => 1345531563,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5657655225045ae9c5c5ea3-52369833',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oTopic' => 0,
    'LS' => 0,
    'sTopicTemplateName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5045ae9c5fbb79_43553737',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5045ae9c5fbb79_43553737')) {function content_5045ae9c5fbb79_43553737($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['LS']->value->Topic_IsAllowTopicType($_smarty_tpl->tpl_vars['oTopic']->value->getType())){?>
	<?php $_smarty_tpl->tpl_vars["sTopicTemplateName"] = new Smarty_variable("topic_".($_smarty_tpl->tpl_vars['oTopic']->value->getType()).".tpl", null, 0);?>
	<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['sTopicTemplateName']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?><?php }} ?>