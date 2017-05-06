<?php
class link_website
{
    public $id,$name,$link,$vi_tri;
    public function link_website($data=array())
    {
    $this->id=isset($data['id'])?$data['id']:'';
    $this->name=isset($data['name'])?$data['name']:'';
    $this->link=isset($data['link'])?$data['link']:'';
    $this->vi_tri=isset($data['vi_tri'])?$data['vi_tri']:'';
          $this->encode();
    }
    public function encode()
        {
            $this->id=addslashes($this->id);
            $this->name=addslashes($this->name);
            $this->link=addslashes($this->link);
            $this->vi_tri=addslashes($this->vi_tri);
        }
    public function decode()
        {
            $this->id=stripslashes($this->id);
            $this->name=stripslashes($this->name);
            $this->link=stripslashes($this->link);
            $this->vi_tri=stripslashes($this->vi_tri);
        }
}
