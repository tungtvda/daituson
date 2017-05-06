<?php
class danh_muc_tin_tuc
{
    public $id,$name,$name_url,$vi_tri,$title,$keyword,$description;
    public function danh_muc_tin_tuc($data=array())
    {
    $this->id=isset($data['id'])?$data['id']:'';
    $this->name=isset($data['name'])?$data['name']:'';
    $this->name_url=isset($data['name_url'])?$data['name_url']:'';
    $this->vi_tri=isset($data['vi_tri'])?$data['vi_tri']:'';
    $this->title=isset($data['title'])?$data['title']:'';
    $this->keyword=isset($data['keyword'])?$data['keyword']:'';
    $this->description=isset($data['description'])?$data['description']:'';
          $this->encode();
    }
    public function encode()
        {
            $this->id=addslashes($this->id);
            $this->name=addslashes($this->name);
            $this->name_url=addslashes($this->name_url);
            $this->vi_tri=addslashes($this->vi_tri);
            $this->title=addslashes($this->title);
            $this->keyword=addslashes($this->keyword);
            $this->description=addslashes($this->description);
        }
    public function decode()
        {
            $this->id=stripslashes($this->id);
            $this->name=stripslashes($this->name);
            $this->name_url=stripslashes($this->name_url);
            $this->vi_tri=stripslashes($this->vi_tri);
            $this->title=stripslashes($this->title);
            $this->keyword=stripslashes($this->keyword);
            $this->description=stripslashes($this->description);
        }
}
