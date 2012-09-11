<?php /* Smarty version Smarty-3.1.8, created on 2012-09-05 17:38:45
         compiled from "/home/u224958/quarry.ru/www//templates/skin/synio/notify/russian/notify.user_friend_new.tpl" */ ?>
<?php /*%%SmartyHeaderCode:168108189504755e556bc76-74042429%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a5e39123d54f31743eef57ae002d22f47ac885c' => 
    array (
      0 => '/home/u224958/quarry.ru/www//templates/skin/synio/notify/russian/notify.user_friend_new.tpl',
      1 => 1345531559,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '168108189504755e556bc76-74042429',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oUserFrom' => 0,
    'sText' => 0,
    'sPath' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_504755e55b9956_12591169',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_504755e55b9956_12591169')) {function content_504755e55b9956_12591169($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cfg')) include '/home/u224958/quarry.ru/www//engine/modules/viewer/plugs/function.cfg.php';
?>Пользователь «<a href="<?php echo $_smarty_tpl->tpl_vars['oUserFrom']->value->getUserWebPath();?>
"><?php echo $_smarty_tpl->tpl_vars['oUserFrom']->value->getLogin();?>
</a>»</b> хочет добавить вас в друзья.						
<br /><br />
<i><?php echo $_smarty_tpl->tpl_vars['sText']->value;?>
</i>
<a href='<?php echo $_smarty_tpl->tpl_vars['sPath']->value;?>
'>Посмотреть заявку</a> (Не забудьте предварительно авторизоваться!)
<br />
С уважением, администрация сайта <a href="<?php echo smarty_function_cfg(array('name'=>'path.root.web'),$_smarty_tpl);?>
"><?php echo smarty_function_cfg(array('name'=>'view.name'),$_smarty_tpl);?>
</a><?php }} ?>