<?php
class truy_cap
{
    public $id,$number;
    public function truy_cap($data=array())
    {
    $this->id=isset($data['id'])?$data['id']:'';
    $this->number=isset($data['number'])?$data['number']:'';
          $this->encode();
    }
    public function encode()
        {
            $this->id=addslashes($this->id);
            $this->number=addslashes($this->number);
        }
    public function decode()
        {
            $this->id=stripslashes($this->id);
            $this->number=stripslashes($this->number);
        }
}
