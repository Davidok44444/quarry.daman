{include file='header.tpl'}



<h1 class="gallery-header"><a href="{$oUserProfile->getUserWebPath()}">{$oUserProfile->getLogin()}</a>/<a href="{$albumUrl}index/{$album.user_id}">Фотоальбомы</a>/
    {if $oUserCurrent && $oUserCurrent->getId() == $album.user_id}
        <input type="text" value="{$album.name}" id="album-name">
    {else} 
        {$album.name}
    {/if}
</h1>

{if $oUserCurrent && $oUserCurrent->getId() == $album.user_id}
     <a href="{$albumUrl}delete_album/{$album.id}" class="album-delete" style="float:right;margin:10px;">Удалить Альбом</a>
    
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
               
		
                
                <br/>
                 <input type="hidden" name="aid" value="{$album.id}" />
                <input id="btnCancel1" type="button" value="Отменить закачку" onclick="cancelQueue(upload1);" disabled="disabled" style="margin-left: 2px; height: 22px; font-size: 8pt;visibility: hidden;" />
             <div style="width:100%;">   
             <div style="position: absolute; left: 40px;"><span id="spanButtonPlaceholder1"></span></div>    
             <div id="gallery-update" style="position: absolute; right: 40px; display:none;">
                 <input type="submit" value="Сохранить" style="display:none;" id="des-sub" class="button button-write">
                 <a href="{$albumUrl}album/{$album.id}" id="update-album">Перейти в альбом</a>
             </div>
            </div>
                </form>
        <br/>
        <br/>
                <div style="padding-left: 5px;">
							
                                                      
                                                       
	</div>    
	</div>    
{/if}


<div class="gallery" id="gallery">
{if $image1}
    <ul style="width: {$width}px;">
    <li><a href="{$albumUrl}image/{$image1.id}"><img src="{$imagesUrl}preview/{$image1.id}-{$image1.nh}-big.jpg"></a></li>
    <li> 
        {if $rows_1}
            {foreach from=$rows_1 item=row}
                <ul class="gallery-h">
                {foreach from=$row item=image}<li><a href="{$albumUrl}image/{$image.id}"><img src="{$imagesUrl}preview/{$image.id}-{$image.nh}.jpg"></a></li>{/foreach}
                </ul>
            {/foreach}
        {/if}
    </il>
    </ul>
{/if}
{if $rows}
    {foreach from=$rows item=row}
        <ul  class="gallery-c" style="width: {$width}px;">
        {foreach from=$row item=image}<li><a href="{$albumUrl}image/{$image.id}"><img src="{$imagesUrl}preview/{$image.id}-{$image.nh}.jpg"></a></li>{/foreach}
        </ul>
    {/foreach}
{/if}
</div>

{include file='footer.tpl'}