<?php
class chuong_trinh_phat_thanh
{
    public $id,$active,$name,$name_url,$link_mp3,$file_mp3,$noi_dung,$title,$keyword,$description;
    public function chuong_trinh_phat_thanh($data=array())
    {
    $this->id=isset($data['id'])?$data['id']:'';
    $this->active=isset($data['active'])?$data['active']:'';
    $this->name=isset($data['name'])?$data['name']:'';
    $this->name_url=isset($data['name_url'])?$data['name_url']:'';
    $this->link_mp3=isset($data['link_mp3'])?$data['link_mp3']:'';
    $this->file_mp3=isset($data['file_mp3'])?$data['file_mp3']:'';
    $this->noi_dung=isset($data['noi_dung'])?$data['noi_dung']:'';
    $this->title=isset($data['title'])?$data['title']:'';
    $this->keyword=isset($data['keyword'])?$data['keyword']:'';
    $this->description=isset($data['description'])?$data['description']:'';
          $this->encode();
    }
    public function encode()
        {
            $this->id=addslashes($this->id);
            $this->active=addslashes($this->active);
            $this->name=addslashes($this->name);
            $this->name_url=addslashes($this->name_url);
            $this->link_mp3=addslashes($this->link_mp3);
            $this->file_mp3=addslashes($this->file_mp3);
            $this->noi_dung=addslashes($this->noi_dung);
            $this->title=addslashes($this->title);
            $this->keyword=addslashes($this->keyword);
            $this->description=addslashes($this->description);
        }
    public function decode()
        {
            $this->id=stripslashes($this->id);
            $this->active=stripslashes($this->active);
            $this->name=stripslashes($this->name);
            $this->name_url=stripslashes($this->name_url);
            $this->link_mp3=stripslashes($this->link_mp3);
            $this->file_mp3=stripslashes($this->file_mp3);
            $this->noi_dung=stripslashes($this->noi_dung);
            $this->title=stripslashes($this->title);
            $this->keyword=stripslashes($this->keyword);
            $this->description=stripslashes($this->description);
        }
}
