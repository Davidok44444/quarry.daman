<?php

class PluginGallery_ModuleGallery extends Module {

    public $dir_img = '/LiveStreet_1.0.1/images/';
    public $dir_img_preview = '/LiveStreet_1.0.1/images/preview/';
    public $url_img = 'http://localhost/LiveStreet_1.0.1/images/';
    public $img = 'images';
    
    public function Init() {
        $this->oMapper = Engine::GetMapper ( __CLASS__ );
        $dir = $_SERVER['DOCUMENT_ROOT'];
        //$dir = $dir.'/LiveStreet_1.0.1';
        $this->dir_img = $dir.'/images/';
        $this->dir_img_preview = $dir.'/images/preview/';
        //$this->url_img = '/images/';
    }
    public function getAlbums($pid,$uid) {
       $height = 200;
       $albums = $this->oMapper->getAlbums($pid,$uid);
       
       for($i=0;$i<count($albums);$i++) {
           if($albums[$i]['image_id'] != 0 && $this->getImage($albums[$i]['image_id']))  
               $img = $this->getImage($albums[$i]['image_id']);
           else    
                $img = $this->getImageAlbum($albums[$i]['id']); 
           if($img) { 
                $albums[$i]['image'] = $img;
                $albums[$i]['image']['nh'] = $height;
                $albums[$i]['image']['nw'] = $albums[$i]['image']['width'] / $albums[$i]['image']['height'] * $height;
                
                $file = $this->dir_img_preview.$albums[$i]['image']['id'].'-'.$height.'.jpg';
                if(!file_exists($file))
                    $this->setImageSizeHeight($albums[$i]['image']['id'],$height,$albums[$i]['image']['type']);
           }
           
       }
       return $albums;
                
    }
    public function getAlbum($id) {
       return $this->oMapper->getAlbum($id);
                
    }
    public function createAlbum($name,$type,$uid) {
        return $this->oMapper->createAlbum($name,$type,$uid);
    }
    public function deleteAlbum($aid,$uid) {
        $album = $this->getAlbum($aid);
        if($album && $album['user_id'] == $uid)        
            $this->oMapper->deleteAlbum($aid);
    }
    public function countAlbums($uid) {
        return $this->oMapper->countAlbum($uid);
    }
    public function getImages($aid) {

       return $this->oMapper->getImages($aid);
                
    }
    public function previewImage($id) {
       $img = $this->getImage($id);
       return $this->oMapper->previewImage($img['album_id'],$id);
                
    }
    public function getImage($id) {
       return $this->oMapper->getImage($id);      
    }
    public function getImageView($id) {
       $img = $this->oMapper->getImage($id);
       if(!$img)
           return false;
       $max_size = 1080;
       if($img['height'] > $max_size || $img['width'] > $max_size) {
            $c = $img['width'] /$img['height']; 
            if($c > 1) {
                $img['nw'] = $max_size;
                $img['nh'] = $max_size / $c;
            }
            else {
                $img['nh'] = $max_size;
                $img['nw'] = $max_size * $c;
            }
       }
       else {
           $img['nw'] = $img['width'];
           $img['nh'] = $img['height'];
       }
       
       $img['next'] = $this->oMapper->getImageNext($id);
       if(!$img['next'])
           $img['next'] = $this->oMapper->getImage1Album($img['album_id']);
       $this->setImageSize($id,$img['nh'],$img['nw'],$img['type']);
       return $img;
    }
    public function addImage($name,$aid,$uid,$type,$w,$h) {
       return $this->oMapper->addImage($name,$aid,$uid,$type,$w,$h);
                
    }
    public function deleteImage($id) {
        $this->oMapper->deleteImage($id);
    }
    public function UploadImage($aFile,$aid) {
        $height = 60;
        $uid = Engine::getInstance()->User_GetUserCurrent()->getId();
        
        $album = $this->getAlbum($aid);
        if($uid != $album['user_id']) {
            $this->Message_AddErrorSingle($this->Lang_Get('not_access'),$this->Lang_Get('error'));
            return Router::Action('error');
        }
        
        $type = strtolower(array_pop(explode('.', $aFile['name'])));
        $upload_dir = $this->dir_img;    
        $size = GetImageSize($aFile['tmp_name']);
        
        $name = '';
        $id = $this->PluginGallery_ModuleGallery_addImage($name,$aid,$uid,$type,$size[0],$size[1]);
        $file_url = $upload_dir.$id.'.'.$type;
       
        if(move_uploaded_file($aFile['tmp_name'], $file_url)){
                $this->setImageSizeHeight($id, $height,$type);
                return array('url'=>$this->url_img.'preview/'.$id.'-'.$height.'.jpg','id'=>$id);
            }    
    }
    public function addDes($des) {
        foreach($des as $id => $row) {
            if($id != 'aid') {
                $uid = Engine::getInstance()->User_GetUserCurrent()->getId();
                $img = $this->getImage($id);
                if($img && $img['user_id'] == $uid)
                    $this->oMapper->addDes($id,$row);
            }
        }
    }
    public function setDes($id,$des) {

        $uid = Engine::getInstance()->User_GetUserCurrent()->getId();
        $img = $this->getImage($id);
        if($img && $img['user_id'] == $uid)
            $this->oMapper->addDes($id,$des);
            
        
    }
    public function setNameAlbum($aid,$name) {
        $uid = Engine::getInstance()->User_GetUserCurrent()->getId();
        $album = $this->getAlbum($aid);
        if($album['user_id'] == $uid)
            $this->oMapper->setNameAlbum($aid,$name);
    }
    public function updateImageVote($image) {
       $this->oMapper->updateImageVote($image);
       return true;
   }
   public function setImageSize($id,$h,$w,$type) {
       $infile = $this->dir_img.$id.'.'.$type;
       $outfile= $this->dir_img.'preview/'.$id.'-'.$h.'.jpg';
       $img = $this->ModuleImage_CreateImageObject($infile);
       $img->resize($w,$h);
       imagejpeg($img->get_image(),$outfile,90); 
        
   }
   public function setImageSizeHeight($id,$h,$type) {
       $fileDir = $this->dir_img.$id.'.'.$type;
       $outfile= $this->dir_img.'preview/'.$id.'-'.$h.'.jpg';
       
       $size = GetImageSize($fileDir);
     
        $c = $size[0] / $size[1];
        $w = round($h * $c);
       //$this->ModuleImage_Resize($fileDir,$this->img.'/preview',$id.'-'.$h,8000,8000,$w,$h,false);
       
       $img = $this->ModuleImage_CreateImageObject($fileDir);
       $img->resize($w,$h);
       imagejpeg($img->get_image(),$outfile,90); 
   }

   public function getImages1SizeRow($image,$width,$height) {
 
       $image['nh'] = $height+3;
       $image['nw'] = $width;
       
       $file0 = $this->dir_img_preview.$image['id'].'-'.$image['nh'].'-big.jpg';
 
       if(!file_exists($file0))
        $this->ImagesSize($image['id'], $image['nw'], $image['nh'],$image['type']);
       
       return $image;
   }
   public function getHeightImagesRow($images,$width) {
      $sum_c = 0;
       for($i=0;$i<count($images);$i++) { 
          $images[$i]['c'] = $images[$i]['width'] / $images[$i]['height'];
          $sum_c += $images[$i]['c'];
      }
      $nw = round((($images[0]['c'] / $sum_c) * $width)-4);
      return round($nw * ( $images[0]['height'] / $images[0]['width']));
   
   }
   public function getImagesSizeRow($images,$width) {
      $height_max = 300;
      $sum_c = 0;
       for($i=0;$i<count($images);$i++) { 
          $images[$i]['c'] = ($images[$i]['width'] / $images[$i]['height']);
          $sum_c += $images[$i]['c'];
  
      }
      for($i=0;$i<count($images);$i++) {
          
          $c = ($images[$i]['c'] / $sum_c);
          $images[$i]['nw'] = ceil(($c * $width)-4);           
          $images[$i]['nh'] = ceil($images[0]['nw'] * ( $images[0]['height'] / $images[0]['width']));
          if($images[$i]['nh'] > $height_max) {
              $images[$i]['nh'] = $height_max;
              $images[$i]['nw'] = ceil($images[$i]['nh'] * ( $images[$i]['width']/$images[$i]['height']));
          }
          $file = $this->dir_img_preview.$images[$i]['id'].'-'.$images[$i]['nh'].'.jpg';
          if(!file_exists($file))
            $this->setImageSize($images[$i]['id'], $images[$i]['nh'],$images[$i]['nw'],$images[$i]['type']);
          //$this->setImageSizeHeight($images[$i]['id'], $images[$i]['nh'],$images[$i]['type']);
      }
      
      return $images;
   }
   
   public function ImagesSize($id,$width,$height,$type) {
       
       $infile = $this->dir_img.$id.'.'.$type;
       $outfile = $this->dir_img_preview.$id.'-'.$height.'-big.jpg';
       
       $img = $this->ModuleImage_CreateImageObject($infile);
       $img2 = $this->ModuleImage_CropProportion($img,$width,$height,true);
       $img2->resize($width,$height);
       
        imagejpeg($img2->get_image(),$outfile,90);    
   }

   
   public function getImageAlbum($aid) {
       if($images = $this->getImages($aid))
           if($images)
            return $images[0];
           else
               return false;
   }
   


}
?>
