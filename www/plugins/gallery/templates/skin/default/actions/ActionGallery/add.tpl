{include file='header.tpl'}
<h1 class="gallery-header"><a href="{$oUserProfile->getUserWebPath()}">{$oUserProfile->getLogin()}</a>/<a href="{$albumUrl}index/{$oUserProfile->getId()}">Фотоальбомы</a>/<a href="{$albumUrl}album/{$album.id}">{$album.name}</a>/Загрузка изображений</h1>
 
<br/>



<form id="photoset-upload-form" method="POST" enctype="multipart/form-data" onsubmit="return false;" class="modal modal-image-upload">
	<header class="modal-header">
		<h3>{$aLang.uploadimg}</h3>
		<a href="#" class="close jqmClose"></a>
	</header>
	
	<div id="topic-photo-upload-input" class="topic-photo-upload-input modal-content">
		<label for="photoset-upload-file">{$aLang.topic_photoset_choose_image}:</label>
                <input type="file" id="photoset-upload-file" name="Filedata" multiple="multiple" /><br><br>

		<button type="submit" class="button button-primary" onclick="ls.photoset.upload_image();">{$aLang.topic_photoset_upload_choose}</button>
		<button type="submit" class="button" onclick="ls.photoset.closeForm();">{$aLang.topic_photoset_upload_close}</button>
		<input type="hidden" name="aid" value="{$album.id}" id="album_id"/>
             
	</div>
</form>


	<div class="topic-photo-upload">
	
		
		<div class="topic-photo-upload-rules">
			{$aLang.topic_photoset_upload_rules|ls_lang:"SIZE%%`$oConfig->get('module.topic.photoset.photo_max_size')`":"COUNT%%`$oConfig->get('module.topic.photoset.count_photos_max')`"}
		</div>
		
		<input type="hidden" name="topic_main_photo" id="topic_main_photo" value="{$_aRequest.topic_main_photo}" />
		<form method="POST" name="form1" action="{router page="gallery"}add_des">
		<ul id="swfu_images">
			
		</ul>
               
		
                <span id="spanButtonPlaceholder1"></span>
                <br/>
                <input id="btnCancel1" type="button" value="Отменить закачку" onclick="cancelQueue(upload1);" disabled="disabled" style="margin-left: 2px; height: 22px; font-size: 8pt;" />
            
                <br/><br/>
                <input type="hidden" name="aid" value="{$album.id}" />
                 <input type="submit" value="Сохранить">
             
                </form>
               
                <div style="padding-left: 5px;">
							
                                                      
                                                       
						</div>
	</div>

{include file='footer.tpl'}