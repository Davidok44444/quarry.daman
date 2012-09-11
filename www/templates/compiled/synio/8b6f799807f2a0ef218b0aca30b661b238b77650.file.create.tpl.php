<?php /* Smarty version Smarty-3.1.8, created on 2012-09-05 09:43:06
         compiled from "/home/u224958/quarry.ru/www/plugins/gallery/templates/skin/default/actions/ActionGallery/create.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11086056925046e66ac51149-17275382%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b6f799807f2a0ef218b0aca30b661b238b77650' => 
    array (
      0 => '/home/u224958/quarry.ru/www/plugins/gallery/templates/skin/default/actions/ActionGallery/create.tpl',
      1 => 1346661332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11086056925046e66ac51149-17275382',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oUserProfile' => 0,
    'albumUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5046e66ad576f6_13136268',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5046e66ad576f6_13136268')) {function content_5046e66ad576f6_13136268($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('menu'=>'blog'), 0);?>

<h1 class="gallery-header"><a href="<?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getUserWebPath();?>
"><?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getLogin();?>
</a>/<a href="<?php echo $_smarty_tpl->tpl_vars['albumUrl']->value;?>
index/<?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getId();?>
">Фотоальбомы</a>/Добавить альбом</h1>

<form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['albumUrl']->value;?>
create">
<br/>
 <p> Заголовок:
    <input type="text" name="name">
</p>    
<input type=submit value="Сохранить">
</form>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>