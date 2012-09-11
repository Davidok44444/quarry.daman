<?php /* Smarty version Smarty-3.1.8, created on 2012-09-11 13:50:06
         compiled from "/home/u224958/quarry.ru/www//templates/skin/synio/notify/russian/notify.talk_new.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1908124933504f094e423958-12066450%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d59f030d0422c7813e458f247ea23f432a70726' => 
    array (
      0 => '/home/u224958/quarry.ru/www//templates/skin/synio/notify/russian/notify.talk_new.tpl',
      1 => 1345531558,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1908124933504f094e423958-12066450',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oUserFrom' => 0,
    'oTalk' => 0,
    'oConfig' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_504f094e480fb8_31614844',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_504f094e480fb8_31614844')) {function content_504f094e480fb8_31614844($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/home/u224958/quarry.ru/www//engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_cfg')) include '/home/u224958/quarry.ru/www//engine/modules/viewer/plugs/function.cfg.php';
?>Вам пришло новое письмо от пользователя <a href="<?php echo $_smarty_tpl->tpl_vars['oUserFrom']->value->getUserWebPath();?>
"><?php echo $_smarty_tpl->tpl_vars['oUserFrom']->value->getLogin();?>
</a>, прочитать и ответить на него можно перейдя по <a href="<?php echo smarty_function_router(array('page'=>'talk'),$_smarty_tpl);?>
read/<?php echo $_smarty_tpl->tpl_vars['oTalk']->value->getId();?>
/">этой ссылке</a><br>
Тема письма: <b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oTalk']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
</b><br>
<?php if ($_smarty_tpl->tpl_vars['oConfig']->value->GetValue('sys.mail.include_talk')){?>
	Текст сообщения: <i><?php echo $_smarty_tpl->tpl_vars['oTalk']->value->getText();?>
</i>	<br>			
<?php }?>
Не забудьте предварительно авторизоваться!
<br><br>
С уважением, администрация сайта <a href="<?php echo smarty_function_cfg(array('name'=>'path.root.web'),$_smarty_tpl);?>
"><?php echo smarty_function_cfg(array('name'=>'view.name'),$_smarty_tpl);?>
</a><?php }} ?>