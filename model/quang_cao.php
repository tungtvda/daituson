<?php
class quang_cao
{
    public $id,$active,$name,$img,$top,$bottom,$link,$vi_tri;
    public function quang_cao($data=array())
    {
    $this->id=isset($data['id'])?$data['id']:'';
    $this->active=isset($data['active'])?$data['active']:'';
    $this->name=isset($data['name'])?$data['name']:'';
    $this->img=isset($data['img'])?$data['img']:'';
    $this->top=isset($data['top'])?$data['top']:'';
    $this->bottom=isset($data['bottom'])?$data['bottom']:'';
    $this->link=isset($data['link'])?$data['link']:'';
    $this->vi_tri=isset($data['vi_tri'])?$data['vi_tri']:'';
          $this->encode();
    }
    public function encode()
        {
            $this->id=addslashes($this->id);
            $this->active=addslashes($this->active);
            $this->name=addslashes($this->name);
            $this->img=addslashes($this->img);
            $this->top=addslashes($this->top);
            $this->bottom=addslashes($this->bottom);
            $this->link=addslashes($this->link);
            $this->vi_tri=addslashes($this->vi_tri);
        }
    public function decode()
        {
            $this->id=stripslashes($this->id);
            $this->active=stripslashes($this->active);
            $this->name=stripslashes($this->name);
            $this->img=stripslashes($this->img);
            $this->top=stripslashes($this->top);
            $this->bottom=stripslashes($this->bottom);
            $this->link=stripslashes($this->link);
            $this->vi_tri=stripslashes($this->vi_tri);
        }
}
