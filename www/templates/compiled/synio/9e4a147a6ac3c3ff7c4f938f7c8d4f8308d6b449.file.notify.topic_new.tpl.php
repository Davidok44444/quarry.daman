<?php /* Smarty version Smarty-3.1.8, created on 2012-09-08 23:21:48
         compiled from "/home/u224958/quarry.ru/www//templates/skin/synio/notify/russian/notify.topic_new.tpl" */ ?>
<?php /*%%SmartyHeaderCode:630103386504b9acc024083-40779665%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e4a147a6ac3c3ff7c4f938f7c8d4f8308d6b449' => 
    array (
      0 => '/home/u224958/quarry.ru/www//templates/skin/synio/notify/russian/notify.topic_new.tpl',
      1 => 1345531558,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '630103386504b9acc024083-40779665',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oUserTopic' => 0,
    'oBlog' => 0,
    'oTopic' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_504b9acc1164a5_87961646',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_504b9acc1164a5_87961646')) {function content_504b9acc1164a5_87961646($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cfg')) include '/home/u224958/quarry.ru/www//engine/modules/viewer/plugs/function.cfg.php';
?>Пользователь <a href="<?php echo $_smarty_tpl->tpl_vars['oUserTopic']->value->getUserWebPath();?>
"><?php echo $_smarty_tpl->tpl_vars['oUserTopic']->value->getLogin();?>
</a> опубликовал в блоге <b>«<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oBlog']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
»</b> новый топик -  <a href="<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getUrl();?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oTopic']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
</a><br>
														
<br><br>
С уважением, администрация сайта <a href="<?php echo smarty_function_cfg(array('name'=>'path.root.web'),$_smarty_tpl);?>
"><?php echo smarty_function_cfg(array('name'=>'view.name'),$_smarty_tpl);?>
</a><?php }} ?>