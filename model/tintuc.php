<?php
class tintuc
{
    public $id,$danhmuc_id,$active,$name,$name_url,$img,$tin_moi,$tin_noi_bat,$link_video,$noi_dung,$title,$keyword,$description,$created;
    public function tintuc($data=array())
    {
    $this->id=isset($data['id'])?$data['id']:'';
    $this->danhmuc_id=isset($data['danhmuc_id'])?$data['danhmuc_id']:'';
    $this->active=isset($data['active'])?$data['active']:'';
    $this->name=isset($data['name'])?$data['name']:'';
    $this->name_url=isset($data['name_url'])?$data['name_url']:'';
    $this->img=isset($data['img'])?$data['img']:'';
    $this->tin_moi=isset($data['tin_moi'])?$data['tin_moi']:'';
    $this->tin_noi_bat=isset($data['tin_noi_bat'])?$data['tin_noi_bat']:'';
    $this->link_video=isset($data['link_video'])?$data['link_video']:'';
    $this->noi_dung=isset($data['noi_dung'])?$data['noi_dung']:'';
    $this->title=isset($data['title'])?$data['title']:'';
    $this->keyword=isset($data['keyword'])?$data['keyword']:'';
    $this->description=isset($data['description'])?$data['description']:'';
    $this->created=isset($data['created'])?$data['created']:'';
          $this->encode();
    }
    public function encode()
        {
            $this->id=addslashes($this->id);
            $this->danhmuc_id=addslashes($this->danhmuc_id);
            $this->active=addslashes($this->active);
            $this->name=addslashes($this->name);
            $this->name_url=addslashes($this->name_url);
            $this->img=addslashes($this->img);
            $this->tin_moi=addslashes($this->tin_moi);
            $this->tin_noi_bat=addslashes($this->tin_noi_bat);
            $this->link_video=addslashes($this->link_video);
            $this->noi_dung=addslashes($this->noi_dung);
            $this->title=addslashes($this->title);
            $this->keyword=addslashes($this->keyword);
            $this->description=addslashes($this->description);
            $this->created=addslashes($this->created);
        }
    public function decode()
        {
            $this->id=stripslashes($this->id);
            $this->danhmuc_id=stripslashes($this->danhmuc_id);
            $this->active=stripslashes($this->active);
            $this->name=stripslashes($this->name);
            $this->name_url=stripslashes($this->name_url);
            $this->img=stripslashes($this->img);
            $this->tin_moi=stripslashes($this->tin_moi);
            $this->tin_noi_bat=stripslashes($this->tin_noi_bat);
            $this->link_video=stripslashes($this->link_video);
            $this->noi_dung=stripslashes($this->noi_dung);
            $this->title=stripslashes($this->title);
            $this->keyword=stripslashes($this->keyword);
            $this->description=stripslashes($this->description);
            $this->created=stripslashes($this->created);
        }
}
