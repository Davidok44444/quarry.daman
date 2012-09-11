<?php /* Smarty version Smarty-3.1.8, created on 2012-09-04 11:13:05
         compiled from "/home/u224958/quarry.ru/www/plugins/gallery/templates/skin/default/actions/ActionGallery/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1701003595045aa012b9c66-35455660%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eac72ea8f673eb63147341c8b76e77e74922081f' => 
    array (
      0 => '/home/u224958/quarry.ru/www/plugins/gallery/templates/skin/default/actions/ActionGallery/index.tpl',
      1 => 1346662753,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1701003595045aa012b9c66-35455660',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oUserProfile' => 0,
    'albums' => 0,
    'album' => 0,
    'albumUrl' => 0,
    'imagesUrl' => 0,
    'oUserCurrent' => 0,
    'pid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5045aa0149e8b7_51461142',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5045aa0149e8b7_51461142')) {function content_5045aa0149e8b7_51461142($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('menu'=>'blog'), 0);?>



<h1 class="gallery-header"><a href="<?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getUserWebPath();?>
"><?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getLogin();?>
</a>/Фотоальбомы</h1>


<div class="albums">
<ul style="width:700px;">
<?php  $_smarty_tpl->tpl_vars['album'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['album']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['albums']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['album']->key => $_smarty_tpl->tpl_vars['album']->value){
$_smarty_tpl->tpl_vars['album']->_loop = true;
?>
  <li style="display:inline-block;">
      <?php if ($_smarty_tpl->tpl_vars['album']->value['image']){?>
          <a href="<?php echo $_smarty_tpl->tpl_vars['albumUrl']->value;?>
album/<?php echo $_smarty_tpl->tpl_vars['album']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['imagesUrl']->value;?>
preview/<?php echo $_smarty_tpl->tpl_vars['album']->value['image']['id'];?>
-<?php echo $_smarty_tpl->tpl_vars['album']->value['image']['nh'];?>
.jpg" style="max-width:264px"></a><br/>
      <?php }else{ ?>
          <a href="<?php echo $_smarty_tpl->tpl_vars['albumUrl']->value;?>
album/<?php echo $_smarty_tpl->tpl_vars['album']->value['id'];?>
"><div class="album-a" style="margin: auto;"></div></a><br/>
      <?php }?>
      <a href="<?php echo $_smarty_tpl->tpl_vars['albumUrl']->value;?>
album/<?php echo $_smarty_tpl->tpl_vars['album']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['album']->value['name'];?>
</a>
     
  </li>  
<?php } ?>
<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oUserCurrent']->value->getId()==$_smarty_tpl->tpl_vars['pid']->value){?>
    <li style="display:inline-block;">
        <a href="<?php echo $_smarty_tpl->tpl_vars['albumUrl']->value;?>
create/"><div class="album-add" style="margin: auto;"></div></a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['albumUrl']->value;?>
create/">Добавить альбом</a>

    </li>
<?php }?>
</ul>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>