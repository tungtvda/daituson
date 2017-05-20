<?php
class tin_phan_anh
{
    public $id,$active,$name,$name_url,$img,$noi_dung,$title,$keyword,$description,$created;
    public function tin_phan_anh($data=array())
    {
    $this->id=isset($data['id'])?$data['id']:'';
    $this->active=isset($data['active'])?$data['active']:'';
    $this->name=isset($data['name'])?$data['name']:'';
    $this->name_url=isset($data['name_url'])?$data['name_url']:'';
    $this->img=isset($data['img'])?$data['img']:'';
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
            $this->active=addslashes($this->active);
            $this->name=addslashes($this->name);
            $this->name_url=addslashes($this->name_url);
            $this->img=addslashes($this->img);
            $this->noi_dung=addslashes($this->noi_dung);
            $this->title=addslashes($this->title);
            $this->keyword=addslashes($this->keyword);
            $this->description=addslashes($this->description);
            $this->created=addslashes($this->created);
        }
    public function decode()
        {
            $this->id=stripslashes($this->id);
            $this->active=stripslashes($this->active);
            $this->name=stripslashes($this->name);
            $this->name_url=stripslashes($this->name_url);
            $this->img=stripslashes($this->img);
            $this->noi_dung=stripslashes($this->noi_dung);
            $this->title=stripslashes($this->title);
            $this->keyword=stripslashes($this->keyword);
            $this->description=stripslashes($this->description);
            $this->created=stripslashes($this->created);
        }
}
