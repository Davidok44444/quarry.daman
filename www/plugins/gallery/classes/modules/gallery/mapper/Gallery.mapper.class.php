<?php

class PluginGallery_ModuleGallery_MapperGallery extends Mapper
{

    public function getAlbums($pid,$uid) {
        if($pid == $uid)
            $sql = 'select * from prefix_gallery_album where user_id = '.$uid;
       else
            $sql = 'select * from prefix_gallery_album where status = 1 and user_id = '.$pid;
        
        $aAlbums = array();
        if ($aRows = $this->oDb->select($sql)) {
            foreach ($aRows as $aRow) {
                $aAlbums[] = $aRow;
            }
        }
        return $aAlbums;

    } 
    public function getAlbum($id) {
        $sql = 'select * from prefix_gallery_album where id = '.$id;
        $aRows = $this->oDb->select($sql);
        if(isset($aRows[0]))
            return $aRows[0];
    }
    public function createAlbum($name,$type,$uid) {
        $date = date('Y-m-d h:m:s');
        $sql = 'insert into prefix_gallery_album(name,date,type,user_id) values("'.$name.'","'.$date.'","'.$type.'","'.$uid.'")';
        $this->oDb->select($sql);
        return mysql_insert_id();
    }
    public function countAlbum($uid) {
        $sql = 'select * from prefix_gallery_album where user_id = '.$uid;
        $aRows = $this->oDb->select($sql);
        return count($aRows);
    }
    public function deleteAlbum($aid) {
        $sql = 'delete from prefix_gallery_album where id = '.$aid;
        $this->oDb->select($sql);
        
        $sql = 'update prefix_gallery_image set status = 0 where album_id = '.$aid;
        $this->oDb->select($sql);

    }
    public function setNameAlbum($aid,$name) {
        $sql = 'update prefix_gallery_album set name = "'.$name.'" where id = '.$aid;
        $this->oDb->select($sql);
        
    }
    public function getImages($aid) {
        $sql = 'select * from prefix_gallery_image where status = 1 and album_id = '.$aid;
        $aImages = array();
        if ($aRows = $this->oDb->select($sql)) {
            foreach ($aRows as $aRow) {
                $aImages[] = $aRow;
            }
        }
        return $aImages;
    }
    public function deleteImage($id) {
        $sql = 'update prefix_gallery_image set status = 0 where id = '.$id;
        $this->oDb->select($sql);
         
    }
    public function getImage($id) {
        $sql = 'select img.id, img.name,img.date,img.user_id, img.rating,img.width, img.height, img.type, img.count_vote, img.count_vote_up, img.count_vote_down, img.count_vote_abstain, alb.name as album, alb.id as album_id from prefix_gallery_image as img, prefix_gallery_album as alb where img.status = 1 and img.album_id = alb.id and img.id = '.$id;
        $aRows = $this->oDb->select($sql);
        if($aRows)
            return $aRows[0];
        else
            return false;
    }
    public function getImageNext($id) {
        $img = $this->getImage($id);
        $aid = $img['album_id'];
        $sql = 'select id from prefix_gallery_image where status = 1 and id > '.$id.' and album_id = '.$aid;
        $aRows = $this->oDb->select($sql);
        if($aRows)
            return $aRows[0];
        else
            return false;
    }
    public function getImage1Album($aid) {
        $sql = 'select id from prefix_gallery_image where status = 1 and album_id = '.$aid;
        $aRows = $this->oDb->select($sql);
        if($aRows)
            return $aRows[0];
        else
            return false;
    }
    public function previewImage($aid,$id) {
        $sql = 'update prefix_gallery_album set image_id = '.$id.' where id = '.$aid;
        $this->oDb->select($sql);
    }
    
    public function addImage($name,$aid,$uid,$type,$w,$h) {
        $date = date('Y-m-d h:m:s');
        $sql = 'insert into prefix_gallery_image(name,date,album_id,user_id,type,width,height) values("'.$name.'","'.$date.'","'.$aid.'","'.$uid.'","'.$type.'",'.$w.','.$h.')';
        $this->oDb->select($sql);
        return mysql_insert_id();
        
    }
    
    public function updateImageVote($image) {
        $sql = 'update prefix_gallery_image set rating = '.$image['rating'].', count_vote = '.$image['count_vote'].', count_vote_up = '.$image['count_vote_up'].', count_vote_down = '.$image['count_vote_down'].', count_vote_abstain = '.$image['count_vote_abstain'].' where id = '.$image['id'];
        $this->oDb->select($sql);
    }
    
    public function addDes($id,$des) {
        $sql = 'update prefix_gallery_image set name = "'.$des.'" where id = '.$id;
        $this->oDb->select($sql);
    }
    
    
}


