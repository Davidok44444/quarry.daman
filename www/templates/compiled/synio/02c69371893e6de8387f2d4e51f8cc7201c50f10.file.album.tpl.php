<?php /* Smarty version Smarty-3.1.8, created on 2012-09-04 12:44:48
         compiled from "/home/u224958/quarry.ru/www/plugins/gallery/templates/skin/default/actions/ActionGallery/album.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17429303555045a90e7675a5-08584092%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02c69371893e6de8387f2d4e51f8cc7201c50f10' => 
    array (
      0 => '/home/u224958/quarry.ru/www/plugins/gallery/templates/skin/default/actions/ActionGallery/album.tpl',
      1 => 1346748185,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17429303555045a90e7675a5-08584092',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5045a90ea57e55_56506831',
  'variables' => 
  array (
    'oUserProfile' => 0,
    'albumUrl' => 0,
    'album' => 0,
    'oUserCurrent' => 0,
    'aLang' => 0,
    'oConfig' => 0,
    '_aRequest' => 0,
    'image1' => 0,
    'width' => 0,
    'imagesUrl' => 0,
    'rows_1' => 0,
    'row' => 0,
    'image' => 0,
    'rows' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5045a90ea57e55_56506831')) {function content_5045a90ea57e55_56506831($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_ls_lang')) include '/home/u224958/quarry.ru/www//engine/modules/viewer/plugs/modifier.ls_lang.php';
if (!is_callable('smarty_function_router')) include '/home/u224958/quarry.ru/www//engine/modules/viewer/plugs/function.router.php';
?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>




<h1 class="gallery-header"><a href="<?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getUserWebPath();?>
"><?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getLogin();?>
</a>/<a href="<?php echo $_smarty_tpl->tpl_vars['albumUrl']->value;?>
index/<?php echo $_smarty_tpl->tpl_vars['album']->value['user_id'];?>
">Фотоальбомы</a>/
    <?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oUserCurrent']->value->getId()==$_smarty_tpl->tpl_vars['album']->value['user_id']){?>
        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['album']->value['name'];?>
" id="album-name">
    <?php }else{ ?> 
        <?php echo $_smarty_tpl->tpl_vars['album']->value['name'];?>

    <?php }?>
</h1>

<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oUserCurrent']->value->getId()==$_smarty_tpl->tpl_vars['album']->value['user_id']){?>
     <a href="<?php echo $_smarty_tpl->tpl_vars['albumUrl']->value;?>
delete_album/<?php echo $_smarty_tpl->tpl_vars['album']->value['id'];?>
" class="album-delete" style="float:right;margin:10px;">Удалить Альбом</a>
    
<form id="photoset-upload-form" method="POST" enctype="multipart/form-data" onsubmit="return false;" class="modal modal-image-upload">
	<header class="modal-header">
		<h3><?php echo $_smarty_tpl->tpl_vars['aLang']->value['uploadimg'];?>
</h3>
		<a href="#" class="close jqmClose"></a>
	</header>
	
	<div id="topic-photo-upload-input" class="topic-photo-upload-input modal-content">
		<label for="photoset-upload-file"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_photoset_choose_image'];?>
:</label>
                <input type="file" id="photoset-upload-file" name="Filedata" multiple="multiple" /><br><br>

		<button type="submit" class="button button-primary" onclick="ls.photoset.upload_image();"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_photoset_upload_choose'];?>
</button>
		<button type="submit" class="button" onclick="ls.photoset.closeForm();"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_photoset_upload_close'];?>
</button>
		<input type="hidden" name="aid" value="<?php echo $_smarty_tpl->tpl_vars['album']->value['id'];?>
" id="album_id"/>
             
	</div>
</form>


	<div class="topic-photo-upload">
	
		
		<div class="topic-photo-upload-rules">
			<?php echo smarty_modifier_ls_lang($_smarty_tpl->tpl_vars['aLang']->value['topic_photoset_upload_rules'],"SIZE%%".($_smarty_tpl->tpl_vars['oConfig']->value->get('module.topic.photoset.photo_max_size')),"COUNT%%".($_smarty_tpl->tpl_vars['oConfig']->value->get('module.topic.photoset.count_photos_max')));?>

		</div>
		
		<input type="hidden" name="topic_main_photo" id="topic_main_photo" value="<?php echo $_smarty_tpl->tpl_vars['_aRequest']->value['topic_main_photo'];?>
" />
		<form method="POST" name="form1" action="<?php echo smarty_function_router(array('page'=>"gallery"),$_smarty_tpl);?>
add_des">
		<ul id="swfu_images">
			
		</ul>
               
		
                
                <br/>
                 <input type="hidden" name="aid" value="<?php echo $_smarty_tpl->tpl_vars['album']->value['id'];?>
" />
                <input id="btnCancel1" type="button" value="Отменить закачку" onclick="cancelQueue(upload1);" disabled="disabled" style="margin-left: 2px; height: 22px; font-size: 8pt;visibility: hidden;" />
             <div style="width:100%;">   
             <div style="position: absolute; left: 40px;"><span id="spanButtonPlaceholder1"></span></div>    
             <div id="gallery-update" style="position: absolute; right: 40px; display:none;">
                 <input type="submit" value="Сохранить" style="display:none;" id="des-sub" class="button button-write">
                 <a href="<?php echo $_smarty_tpl->tpl_vars['albumUrl']->value;?>
album/<?php echo $_smarty_tpl->tpl_vars['album']->value['id'];?>
" id="update-album">Перейти в альбом</a>
             </div>
            </div>
                </form>
        <br/>
        <br/>
                <div style="padding-left: 5px;">
							
                                                      
                                                       
	</div>    
	</div>    
<?php }?>


<div class="gallery" id="gallery">
<?php if ($_smarty_tpl->tpl_vars['image1']->value){?>
    <ul style="width: <?php echo $_smarty_tpl->tpl_vars['width']->value;?>
px;">
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['albumUrl']->value;?>
image/<?php echo $_smarty_tpl->tpl_vars['image1']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['imagesUrl']->value;?>
preview/<?php echo $_smarty_tpl->tpl_vars['image1']->value['id'];?>
-<?php echo $_smarty_tpl->tpl_vars['image1']->value['nh'];?>
-big.jpg"></a></li>
    <li> 
        <?php if ($_smarty_tpl->tpl_vars['rows_1']->value){?>
            <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows_1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                <ul class="gallery-h">
                <?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['row']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value){
$_smarty_tpl->tpl_vars['image']->_loop = true;
?><li><a href="<?php echo $_smarty_tpl->tpl_vars['albumUrl']->value;?>
image/<?php echo $_smarty_tpl->tpl_vars['image']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['imagesUrl']->value;?>
preview/<?php echo $_smarty_tpl->tpl_vars['image']->value['id'];?>
-<?php echo $_smarty_tpl->tpl_vars['image']->value['nh'];?>
.jpg"></a></li><?php } ?>
                </ul>
            <?php } ?>
        <?php }?>
    </il>
    </ul>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['rows']->value){?>
    <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
        <ul  class="gallery-c" style="width: <?php echo $_smarty_tpl->tpl_vars['width']->value;?>
px;">
        <?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['row']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value){
$_smarty_tpl->tpl_vars['image']->_loop = true;
?><li><a href="<?php echo $_smarty_tpl->tpl_vars['albumUrl']->value;?>
image/<?php echo $_smarty_tpl->tpl_vars['image']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['imagesUrl']->value;?>
preview/<?php echo $_smarty_tpl->tpl_vars['image']->value['id'];?>
-<?php echo $_smarty_tpl->tpl_vars['image']->value['nh'];?>
.jpg"></a></li><?php } ?>
        </ul>
    <?php } ?>
<?php }?>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>