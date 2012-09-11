<?php /* Smarty version Smarty-3.1.8, created on 2012-09-04 23:24:24
         compiled from "/home/u224958/quarry.ru/www//templates/skin/synio/notify/russian/notify.registration.tpl" */ ?>
<?php /*%%SmartyHeaderCode:129561567850465568c181f2-95161815%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ff304c5173921454a765ccc3855cabc005a827f' => 
    array (
      0 => '/home/u224958/quarry.ru/www//templates/skin/synio/notify/russian/notify.registration.tpl',
      1 => 1345531557,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '129561567850465568c181f2-95161815',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oUser' => 0,
    'sPassword' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50465568d104f0_90278650',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50465568d104f0_90278650')) {function content_50465568d104f0_90278650($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cfg')) include '/home/u224958/quarry.ru/www//engine/modules/viewer/plugs/function.cfg.php';
?>Вы зарегистрировались на сайте <a href="<?php echo smarty_function_cfg(array('name'=>'path.root.web'),$_smarty_tpl);?>
"><?php echo smarty_function_cfg(array('name'=>'view.name'),$_smarty_tpl);?>
</a><br>
Ваши регистрационные данные:<br>
&nbsp;&nbsp;&nbsp;логин: <b><?php echo $_smarty_tpl->tpl_vars['oUser']->value->getLogin();?>
</b><br>
&nbsp;&nbsp;&nbsp;пароль: <b><?php echo $_smarty_tpl->tpl_vars['sPassword']->value;?>
</b><br>						
<br><br>
С уважением, администрация сайта <a href="<?php echo smarty_function_cfg(array('name'=>'path.root.web'),$_smarty_tpl);?>
"><?php echo smarty_function_cfg(array('name'=>'view.name'),$_smarty_tpl);?>
</a><?php }} ?>