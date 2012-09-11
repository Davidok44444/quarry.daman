var upload1;




function edit_des() {
    $('#des-sub').css('visibility','visible');
}



window.onload = function() {
   var name = $('#des-name-img').val();
   $('#img-id').before('<textarea name="name" cols="50" rows="5">' + name + '</textarea>');
   
    $('#album-name').focusout(function(){
       aid = $('#album_id').val();
       name = $('#album-name').val();
      $.post(aRouter['gallery']+'set_name_album',{aid:aid,name:name},function(){
          $('#album-name').css('border','none');
      });
    }); 
   
    $('#description-image').click(function(){
        if($('#uid').val() == $('#user-id').val()) {
            $('#description-image').css('display','none');
            $('#description-edit').css('display','block');
            $('#description-edit textarea').focus();
        }
    });

       
     $('#description-edit textarea').focusout(function(){
       var id = $('#img-id').val();
       var des = $('#description-edit textarea').val();
       $.post(aRouter['gallery']+'set_des',{id:id,des:des},function(){
           $('#description-edit').css('display','none');
           $('#description-image').css('display','block');
           if(des == '')
               des = 'Добавить описание';
           $('#description-image').html(des);
           
       })
   }); 
       
     $('#swfu_images ul li textarea').change(function(){
         $('#des-sub').css('diplay','block');
         $('#update-album').css('display','none');
     });  
       
        
    

            upload1 = new SWFUpload({
                    // Backend Settings
                    upload_url: aRouter['gallery']+'uploadimage/',
                    post_params: {
                        "aid" : $('#album_id').val(),
                            security_ls_key: LIVESTREET_SECURITY_KEY 
                    },

                    // File Upload Settings
                    file_size_limit : "102400",	// 100MB
                    file_types : "*.jpg;*.png;*.gif",
                    file_types_description : "jpg,png",
                    file_upload_limit : "30",
                    file_queue_limit : "0",

                    // Event Handler Settings (all my handlers are in the Handler.js file)
                    file_dialog_start_handler : fileDialogStart,
                    file_queued_handler : fileQueued,
                    file_queue_error_handler : fileQueueError,
                    file_dialog_complete_handler : fileDialogComplete,
                    upload_start_handler : uploadStart,
                    upload_progress_handler : uploadProgress,
                    upload_error_handler : uploadError,
                    upload_success_handler : uploadSuccess,
                    upload_complete_handler : uploadComplete,

                    // Button Settings
                    button_image_url : "/templates/skin/synio/images/add.png",
                    button_placeholder_id : "spanButtonPlaceholder1",
                    button_width: 88,
                    button_height: 26,

                    // Flash Settings
                    flash_url : "/engine/lib/external/swfupload/swfupload.swf",


                    custom_settings : {
                    //	progressTarget : "fsUploadProgress1",
                            cancelButtonId : "btnCancel1"
                    },


                    // Debug Settings
                    debug: false
            });
               
}

  
   
     uploadStart = function(file) {
            /*
            var readers = new FileReader();
            readers.onload = function(event) {
                var url = event.target.result;
                var data = {};
                data.id = 1;
                data.file = url;
                ls.photoset.addPhotoImage2(data);
            }
         */
            ls.photoset.addPhotoEmpty();
            
             /* readers.readAsDataURL(file);*/
         
       }      
       
       uploadProgress = function(e, file, bytesLoaded, percent) {
		//$('#photoset_photo_empty_progress').text(file.name+': '+( percent==100 ? 'resize..' : percent +'%'));
                $('#photoset_photo_empty_progress').text('Загрузка...');
                //$('#btnCancel1').css('visibility','visible');
	}
       
        uploadSuccess = function(file, server, received) {
           
            ls.photoset.addPhoto2(jQuery.parseJSON(server));
            //$('#des-sub').css('visibility','visible');
            //$('#btnCancel1').css('visibility','hidden');
            $('#gallery').css('display','none');
            $('#gallery-update').css('display','block');
        }
     