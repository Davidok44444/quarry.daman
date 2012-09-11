<?php

class PluginGallery_ActionGallery extends ActionPlugin {

    /**
     * Инициализация экшена
     */
    
    protected $oUserCurrent=null;
    protected $aUsersId=array();
    protected $oUserProfile;
    
    public function Init() {
        $this->SetDefaultEvent('index');
        $this->oUserCurrent=$this->User_GetUserCurrent();
        //$this->oUserProfile=$this->User_GetUserCurrent();
        
        $this->Viewer_Assign('oUserCurrent',$this->oUserCurrent);
        //$this->Viewer_Assign('oUserProfile',$this->oUserProfile);
        $this->Viewer_Assign('aParams',array('image'));
        
        if(!isset($_SESSION['gallery']))
            $_SESSION['gallery'] = 'sidebar';
    }

    /**
     * Регистрируем евенты
     */
    protected function RegisterEvent() {
        $this->AddEvent('index','EventIndex');
        $this->AddEvent('album','EventAlbum');
        $this->AddEvent('image','EventImage');
        $this->AddEvent('create','EventCreate');
        $this->AddEvent('delete_album','deleteAlbum');
        $this->AddEvent('add','EventAddImage');
        $this->AddEvent('delete','EventDeleteImage');
        $this->AddEvent('preview','EventPreviewImage');
        $this->AddEvent('uploadimage','EventUploadImage');
        $this->AddEvent('add_des','AddDes');
        $this->AddEvent('set_des','SetDes');
        $this->AddEvent('set_name_album','setNameAlbum');
        $this->AddEvent('ajaxaddcomment','AjaxAddComment');
        $this->AddEvent('ajaxresponsecomment', 'AjaxResponseComment');

    }

    protected function EventIndex() {
        if(Router::GetParam(0))
            $pid = Router::GetParam(0);
        elseif(!$this->User_GetUserCurrent())
            header ('Location: '.Router::GetPath('login'));
        else
            $pid = Engine::getInstance()->User_GetUserCurrent()->getId();
        
        if($this->User_GetUserCurrent())
            $uid = Engine::getInstance()->User_GetUserCurrent()->getId();
        else
            $uid = 0;
        
        $albums = $this->PluginGallery_ModuleGallery_getAlbums($pid,$uid);
        $this->Viewer_Assign('albums',$albums);
        $this->Viewer_Assign('uid',$uid);
        $this->Viewer_Assign('pid',$pid);
        $this->Viewer_Assign('albumUrl',Router::GetPath('gallery'));
       
        $this->oUserProfile = $this->User_GetUserById($pid);
        
        $this->Viewer_Assign('imagesUrl',Router::GetPath('images'));
        
        //$gallery = new PluginGallery_ModuleGallery;
        /*$albums = $gallery->getAlbums(1);
        var_dump($albums);*/
        
    }
    protected function EventAlbum() {
        
        $view = Router::GetParam(1);
        $id = Router::GetParam(0);
  
        if($view == 'full')
            $_SESSION['gallery'] = 'full';
        if($view == 'sidebar')
            $_SESSION['gallery'] = 'sidebar';
        
        if(isset($_SESSION['gallery']))
            $view = $_SESSION['gallery'];
        
        if(isset($_SESSION['gallery']) && $_SESSION['gallery'] == 'full') {
            $view = 'full';
            $width1 = 455;
            $width2 = 920;
            $width_right = 458;
            $height_min = 290;
            $this->Viewer_Assign('noSidebar',true);
            $this->Viewer_Assign('width',$width2+20); 
        }
        else {
            $width1 = 325;
            $width2 = 640;
            $width_right = 300;
            $height_min = 230;
            $this->Viewer_Assign('width',$width2+20);
        }
            

        $album = $this->PluginGallery_ModuleGallery_getAlbum($id);
        $this->Viewer_Assign('album',$album);
        $this->Viewer_Assign('albumUrl',Router::GetPath('gallery'));
        $this->Viewer_Assign('imagesUrl',Router::GetPath('images'));
       
        
        $images = $this->PluginGallery_ModuleGallery_getImages($id);
        if($images) {
            $c = $images[0]['height'] / $images[0]['width'];
            if(count($images)>5 && $c < 2 && $c > 0.5) {

                  if($view == 'full') {
                        $i=0;
                        for($i=1,$r = 0,$i2=1;$r < 2 && $i < count($images);$i++,$i2++) {
                            $rows_1[$r][] = $images[$i];
                            if($this->PluginGallery_ModuleGallery_getHeightImagesRow($rows_1[$r],$width_right) < 200) {
                                $r++;$i2=1;
                            }
                        }
                        for($i2=0;$i2<count($rows_1);$i2++)
                            $rows_1[$i2] = $this->PluginGallery_ModuleGallery_getImagesSizeRow($rows_1[$i2],$width_right);

                        if($i >= count($images)) {
                            $rows_1 = null;
                        }
                        else {
                            $height_row1 = $rows_1[0][0]['nh'] + $rows_1[1][0]['nh'];
                            $image1 = $this->PluginGallery_ModuleGallery_getImages1SizeRow($images[0],$width_right,$height_row1);

                            for($i,$r = 0,$i2=1;$i<count($images);$i++,$i2++) {
                                $rows[$r][] = $images[$i];
                                if($this->PluginGallery_ModuleGallery_getHeightImagesRow($rows[$r],$width2) < $height_min) {
                                    $r++;$i2=1;
                                }
                            }
                            $this->Viewer_Assign('image1',$image1);
                            $this->Viewer_Assign('rows_1',$rows_1);
                        }
                    }
      
                }
            
            if(!isset($rows_1)) {
                  for($i=0,$r = 0,$i2=1;$i<count($images);$i++,$i2++) {
                    $rows[$r][] = $images[$i];
                    if($this->PluginGallery_ModuleGallery_getHeightImagesRow($rows[$r],$width2) < $height_min) {
                        $r++;$i2=1;
                    }
                } 
            }
            
            for($i=0;$i<count($rows);$i++)
                $rows[$i] = $this->PluginGallery_ModuleGallery_getImagesSizeRow($rows[$i],$width2);

            //$this->Viewer_Assign('images',$images);
            $this->Viewer_Assign('rows',$rows);
        }
        
        //$this->Viewer_Assign('oUserProfile',$this->User_GetUserById($album['user_id']));
        
        $this->oUserProfile = $this->User_GetUserById($album['user_id']);
        
        $this->Viewer_Assign('view',$view);
        
    }
    
    protected function EventImage() {
        
        if($uid = Engine::getInstance()->User_GetUserCurrent()) {
            $uid = Engine::getInstance()->User_GetUserCurrent()->getId();
        }
         else
             $uid = 0;
        $id = Router::GetParam(0);
        $vote = $this->ModuleVote_GetVote($id,'image',$uid);
        
        $this->Viewer_Assign('oVote',$vote);
        if($vote)
            $this->Viewer_Assign('bVoteInfoShow',true);
        
        $image = $this->PluginGallery_ModuleGallery_getImageView($id);
        if(!$image) {
            $url =  Router::GetPath('gallery').'index/'.$uid;
            header('Location: '.$url);
        }
            
        $album = $this->PluginGallery_ModuleGallery_getAlbum($image['album_id']);
        
       // if(isset($image['name']) && $image['name'] == null)
         //   $image['newdes'] = 'Добавить описание';
        
        $this->Viewer_Assign('albumUrl',Router::GetPath('gallery'));
        $this->Viewer_Assign('imagesUrl',Router::GetPath('images'));
        $this->Viewer_Assign('image',$image);
        $this->Viewer_Assign('album',$album);
        $this->Viewer_Assign('id',$id);
        
        $this->Viewer_Assign('id',$id);
        $this->Viewer_Assign('uid',$uid);
        
        
        if (!Config::Get('module.comment.nested_page_reverse') and Config::Get('module.comment.use_nested') and Config::Get('module.comment.nested_per_page')) {
			$iPageDef=ceil($this->Comment_GetCountCommentsRootByTargetId($oTopic->getId(),'topic')/Config::Get('module.comment.nested_per_page'));
		} else {
			$iPageDef=1;
		}
		$iPage=getRequest('cmtpage',0) ? (int)getRequest('cmtpage',0) : $iPageDef;
                
        $aReturn=$this->Comment_GetCommentsByTargetId($id,'image',$iPageDef,Config::Get('module.comment.nested_per_page'));
        $aComments=$aReturn['comments'];
        $this->Viewer_Assign('count_comments',count($aComments));
        $this->Viewer_Assign('aComments',$aComments);
        if($aComments) {
            $comment = array_pop($aComments);
            $idc = $comment->getId();
            $this->Viewer_Assign('iMaxIdComment',$idc);
        }
        

        //$this->Viewer_Assign('oUserProfile',$this->User_GetUserById($image['user_id']));
        
        $this->oUserProfile = $this->User_GetUserById($image['user_id']);
      
    }
     protected function EventDeleteImage() {
        $id = Router::GetParam(0);
         
        $image = $this->PluginGallery_ModuleGallery_getImage($id);
         
        if($uid = Engine::getInstance()->User_GetUserCurrent()) {
            $uid = Engine::getInstance()->User_GetUserCurrent()->getId();
        }
        
        if($image)
        if($image['user_id'] == $uid) {
            $this->PluginGallery_ModuleGallery_deleteImage($id);
            $url = Router::GetPath('gallery'); 
            $url = $url.'album/'.$image['album_id'];
            header('Location: '.$url);
        }
         
     }
    protected function EventPreviewImage() {
       $id = Router::GetParam(0);
         
        $image = $this->PluginGallery_ModuleGallery_getImage($id);
         
        if($uid = Engine::getInstance()->User_GetUserCurrent()) {
            $uid = Engine::getInstance()->User_GetUserCurrent()->getId();
        }
        
        if($image)
        if($image['user_id'] == $uid) {
            $this->PluginGallery_ModuleGallery_previewImage($id);
            $url =  Router::GetPath('gallery').'image/'.$id;
            header('Location: '.$url);
        } 
    } 
    protected function EventCreate() {
        if($uid = Engine::getInstance()->User_GetUserCurrent()) {
            $uid = Engine::getInstance()->User_GetUserCurrent()->getId();
        }
         /*
         $this->Viewer_Assign('uid',$uid);
         $this->Viewer_Assign('oUserProfile',$this->User_GetUserById($uid));
         
         $this->Viewer_Assign('albumUrl',Router::GetPath('gallery'));
         
          * if(isset($_POST['name'])) {
          */
             $n = $this->PluginGallery_ModuleGallery_countAlbums($uid) + 1;
             $name = 'Альбом '.$n;
             $type = 1;
             $uid = Engine::getInstance()->User_GetUserCurrent()->getId();
             
             $aid = $this->PluginGallery_ModuleGallery_createAlbum($name,$type,$uid);
             $url =  Router::GetPath('gallery').'album/'.$aid;
             header('Location: '.$url);
         
         
    }
    protected function deleteAlbum() {
        if($aid = Router::GetParam(0)) {
            if($uid = Engine::getInstance()->User_GetUserCurrent()) {
                $uid = Engine::getInstance()->User_GetUserCurrent()->getId();
            }
            
            $this->PluginGallery_ModuleGallery_deleteAlbum($aid,$uid);
            
            $url =  Router::GetPath('gallery').'index/'.$uid;
            header('Location: '.$url);
        }
    }
    protected function EventAddImage() {

        if($uid = Engine::getInstance()->User_GetUserCurrent()) {
            $uid = Engine::getInstance()->User_GetUserCurrent()->getId();
        }
        $id = Router::GetParam(0);
        $album = $this->PluginGallery_ModuleGallery_getAlbum($id);
        $this->Viewer_Assign('album',$album);
        $this->Viewer_Assign('albumUrl',Router::GetPath('gallery'));

        //$this->Viewer_Assign('oUserProfile',$this->User_GetUserById($uid));
        
        $this->oUserProfile = $this->User_GetUserById($uid);
        
        if(isset($_POST['name'])) {
            $name = $_POST['name'];
            $uid = Engine::getInstance()->User_GetUserCurrent()->getId();
            
            $pic = $_FILES['img'];
            $type = strtolower(array_pop(explode('.', $pic['name'])));
            $upload_dir = 'C:\xampp\htdocs\LiveStreet_1.0.1\images\\';
            
            $size = GetImageSize($pic['tmp_name']);
            $id = $this->PluginGallery_ModuleGallery_addImage($name,$id,$uid,$type,$size[0],$size[1]);
            $file_url = $upload_dir.$id.'.'.$type;
            if(move_uploaded_file($pic['tmp_name'], $file_url)){
            }        
        }
    }
    
    protected function AddDes() {
        
        $aid = getRequest('aid');
        if(isset($_POST))
            $this->PluginGallery_ModuleGallery_addDes($_POST);
        if($aid) {
            $url =  Router::GetPath('gallery').'album/'.$aid;
            header('Location: '.$url);
        }
        
    }
    protected function SetDes() {
        
        
        if(isset($_POST))
            $this->PluginGallery_ModuleGallery_setDes(getRequest('id'),getRequest('des'));
        
    }
    protected function setNameAlbum() {
        
        $aid = getRequest('aid');
        $name = getRequest('name');
        
        if($aid) {
            $this->PluginGallery_ModuleGallery_setNameAlbum($aid,$name);
        
            $url =  Router::GetPath('gallery').'album/'.$aid;
            header('Location: '.$url);
        }
        
    }
    
   protected function EventUploadImage() {

      
            $this->Viewer_SetResponseAjax('json');
         
         
            if (!$this->User_IsAuthorization()) {
			$this->Message_AddErrorSingle($this->Lang_Get('not_access'),$this->Lang_Get('error'));
			return Router::Action('error');
         
            }
		/**
		 * Файл был загружен?
		 */
		if (!isset($_FILES['Filedata']['tmp_name'])) {
			$this->Message_AddError($this->Lang_Get('system_error'), $this->Lang_Get('error'));
			return false;
		}
                $aid = getRequest('aid');

		if($img = $this->PluginGallery_ModuleGallery_UploadImage($_FILES['Filedata'],$aid)) {
                    
                    $this->Viewer_AssignAjax('file', $img['url']);
                    $this->Viewer_AssignAjax('id', $img['id']);
                  $this->Message_AddNotice($this->Lang_Get('topic_photoset_photo_added'), $this->Lang_Get('attention'));
               } 
               else 
                   $this->Message_AddError($this->Lang_Get('system_error'), $this->Lang_Get('error'));
            
        }
    
    protected function AjaxAddComment() {
		/**
		 * Устанавливаем формат Ajax ответа
		 */
		$this->Viewer_SetResponseAjax('json');
		$this->SubmitComment();                
                
    }
    
    protected function SubmitComment() {
		
                $id = getRequest('cmt_target_id');
                $sText=$this->Text_Parser(getRequest('comment_text'));
                
		if (!$this->User_IsAuthorization()) {
			$this->Message_AddErrorSingle($this->Lang_Get('need_authorization'),$this->Lang_Get('error'));
			return;
		}
                $sText=$this->Text_Parser(getRequest('comment_text'));
		if (!func_check($sText,'text',2,10000)) {
			$this->Message_AddErrorSingle($this->Lang_Get('topic_comment_add_text_error'),$this->Lang_Get('error'));
			return;
		}
                $sParentId=(int)getRequest('reply');
		if (!func_check($sParentId,'id')) {
			$this->Message_AddErrorSingle($this->Lang_Get('system_error'),$this->Lang_Get('error'));
			return;
		}
		$oCommentParent=null;
		if ($sParentId!=0) {
			/**
			 * Проверяем существует ли комментарий на который отвечаем
			 */
			if (!($oCommentParent=$this->Comment_GetCommentById($sParentId))) {
				$this->Message_AddErrorSingle($this->Lang_Get('system_error'),$this->Lang_Get('error'));
				return;
			}
			/**
			 * Проверяем из одного топика ли новый коммент и тот на который отвечаем
			 */
			if ($oCommentParent->getTargetId()!=$id) {
				$this->Message_AddErrorSingle($this->Lang_Get('system_error'),$this->Lang_Get('error'));
				return;
			}
		} else {
			/**
			 * Корневой комментарий
			 */
			$sParentId=null;
		}
		/**
		 * Проверка на дублирующий коммент
		 */
		if ($this->Comment_GetCommentUnique($id,'topic',$this->oUserCurrent->getId(),$sParentId,md5($sText))) {
			$this->Message_AddErrorSingle($this->Lang_Get('topic_comment_spam'),$this->Lang_Get('error'));
			return;
		}
	
		$oCommentNew=Engine::GetEntity('Comment');
		$oCommentNew->setTargetId($id);
		$oCommentNew->setTargetType('image');
		$oCommentNew->setTargetParentId(0);
		$oCommentNew->setUserId($this->oUserCurrent->getId());
		$oCommentNew->setText($sText);
		$oCommentNew->setDate(date("Y-m-d H:i:s"));
		$oCommentNew->setUserIp(func_getIp());
		$oCommentNew->setPid($sParentId);
		$oCommentNew->setTextHash(md5($sText));

		/**
		 * Добавляем коммент
		 */
                
		if ($this->Comment_AddComment($oCommentNew)) {
			$this->Hook_Run('comment_add_after', array('oCommentNew'=>$oCommentNew,'oCommentParent'=>$oCommentParent,'oTopic'=>null));

			$this->Viewer_AssignAjax('sCommentId',$oCommentNew->getId());

			
			/**
			 * Сохраняем дату последнего коммента для юзера
			 */
			//$this->oUserCurrent->setDateCommentLast(date("Y-m-d H:i:s"));
			//$this->User_Update($this->oUserCurrent);


		} else {
			$this->Message_AddErrorSingle($this->Lang_Get('system_error'),$this->Lang_Get('error'));
		}
	}
	/**
	 * Получение новых комментариев
	 *
	 */
	protected function AjaxResponseComment() {
		/**
		 * Устанавливаем формат Ajax ответа
		 */
		$this->Viewer_SetResponseAjax('json');
		/**
		 * Пользователь авторизован?
		 */
		if (!$this->oUserCurrent) {
			$this->Message_AddErrorSingle($this->Lang_Get('need_authorization'),$this->Lang_Get('error'));
			return;
		}
		/**
		 * Топик существует?
		 */
		$idTopic=getRequest('idTarget',null,'post');
		if (!($oTopic=$this->PluginGallery_ModuleGallery_getImage($idTopic))) {
			$this->Message_AddErrorSingle($this->Lang_Get('system_error'),$this->Lang_Get('error'));
			return;
		}

		$idCommentLast=getRequest('idCommentLast',null,'post');
		$selfIdComment=getRequest('selfIdComment',null,'post');
		$aComments=array();
		/**
		 * Если используется постраничность, возвращаем только добавленный комментарий
		 */
		if (getRequest('bUsePaging',null,'post') and $selfIdComment) {
			if ($oComment=$this->Comment_GetCommentById($selfIdComment) and $oComment->getTargetId()==$oTopic['id'] and $oComment->getTargetType()=='image') {
				$oViewerLocal=$this->Viewer_GetLocalViewer();
				$oViewerLocal->Assign('oUserCurrent',$this->oUserCurrent);
				$oViewerLocal->Assign('bOneComment',true);

				$oViewerLocal->Assign('oComment',$oComment);
				$sText=$oViewerLocal->Fetch($this->Comment_GetTemplateCommentByTarget($oTopic['id'],'image'));
				$aCmt=array();
				$aCmt[]=array(
					'html' => $sText,
					'obj'  => $oComment,
				);
			} else {
				$aCmt=array();
			}
			$aReturn['comments']=$aCmt;
			$aReturn['iMaxIdComment']=$selfIdComment;
		} else {
			$aReturn=$this->Comment_GetCommentsNewByTargetId($oTopic['id'],'image',$idCommentLast);
		}
		$iMaxIdComment=$aReturn['iMaxIdComment'];

		
		$aCmts=$aReturn['comments'];
		if ($aCmts and is_array($aCmts)) {
			foreach ($aCmts as $aCmt) {
				$aComments[]=array(
					'html' => $aCmt['html'],
					'idParent' => $aCmt['obj']->getPid(),
					'id' => $aCmt['obj']->getId(),
				);
			}
		}

                /*
                $oTopicRead=Engine::GetEntity('Topic_TopicRead');
		$oTopicRead->setTopicId($oTopic['id']);
		$oTopicRead->setUserId($this->oUserCurrent->getId());
		$oTopicRead->setCommentCountLast(count($aComments));
		$oTopicRead->setCommentIdLast($iMaxIdComment);
		$oTopicRead->setDateRead(date("Y-m-d H:i:s"));
		$this->Topic_SetTopicRead($oTopicRead);
*/
                
		$this->Viewer_AssignAjax('iMaxIdComment',$iMaxIdComment);
		$this->Viewer_AssignAjax('aComments',$aComments);
	}

    /**
     * Завершение работы экшена
     */
    public function EventShutdown() {
        
         $this->Viewer_Assign('oUserProfile',$this->oUserProfile);
        
        
        if(isset($this->oUserProfile)) {
            $count_albums = $this->PluginGallery_ModuleGallery_countAlbums($this->oUserProfile->getId());
            $this->Viewer_Assign('count_albums','('.$count_albums.')');
        }
    }
}
?>
