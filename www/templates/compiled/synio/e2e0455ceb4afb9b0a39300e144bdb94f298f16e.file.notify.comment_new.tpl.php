<?php /* Smarty version Smarty-3.1.8, created on 2012-09-07 15:29:47
         compiled from "/home/u224958/quarry.ru/www//templates/skin/synio/notify/russian/notify.comment_new.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7950579735049daab892367-16774703%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2e0455ceb4afb9b0a39300e144bdb94f298f16e' => 
    array (
      0 => '/home/u224958/quarry.ru/www//templates/skin/synio/notify/russian/notify.comment_new.tpl',
      1 => 1345531557,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7950579735049daab892367-16774703',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oUserComment' => 0,
    'oTopic' => 0,
    'oConfig' => 0,
    'oComment' => 0,
    'sSubscribeKey' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5049daab909341_95883522',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5049daab909341_95883522')) {function content_5049daab909341_95883522($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/home/u224958/quarry.ru/www//engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_cfg')) include '/home/u224958/quarry.ru/www//engine/modules/viewer/plugs/function.cfg.php';
?>Пользователь <a href="<?php echo $_smarty_tpl->tpl_vars['oUserComment']->value->getUserWebPath();?>
"><?php echo $_smarty_tpl->tpl_vars['oUserComment']->value->getLogin();?>
</a> оставил новый комментарий к топику <b>«<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oTopic']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
»</b>, прочитать его можно перейдя по <a href="<?php if ($_smarty_tpl->tpl_vars['oConfig']->value->GetValue('module.comment.nested_per_page')){?><?php echo smarty_function_router(array('page'=>'comments'),$_smarty_tpl);?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getUrl();?>
#comment<?php }?><?php echo $_smarty_tpl->tpl_vars['oComment']->value->getId();?>
">этой ссылке</a><br>
<?php if ($_smarty_tpl->tpl_vars['oConfig']->value->GetValue('sys.mail.include_comment')){?>
	Текст сообщения: <i><?php echo $_smarty_tpl->tpl_vars['oComment']->value->getText();?>
</i>				
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['sSubscribeKey']->value){?>
	<br><br>
	<a href="<?php echo smarty_function_router(array('page'=>'subscribe'),$_smarty_tpl);?>
unsubscribe/<?php echo $_smarty_tpl->tpl_vars['sSubscribeKey']->value;?>
/">Отписаться от новых комментариев к этому топику</a>
<?php }?>

<br><br>
С уважением, администрация сайта <a href="<?php echo smarty_function_cfg(array('name'=>'path.root.web'),$_smarty_tpl);?>
"><?php echo smarty_function_cfg(array('name'=>'view.name'),$_smarty_tpl);?>
</a><?php }} ?>