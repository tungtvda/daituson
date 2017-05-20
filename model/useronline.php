<?php
class useronline
{
    public $tgtmp,$ip,$local;
    public function useronline($data=array())
    {
    $this->tgtmp=isset($data['tgtmp'])?$data['tgtmp']:'';
    $this->ip=isset($data['ip'])?$data['ip']:'';
    $this->local=isset($data['local'])?$data['local']:'';
          $this->encode();
    }
    public function encode()
        {
            $this->tgtmp=addslashes($this->tgtmp);
            $this->ip=addslashes($this->ip);
            $this->local=addslashes($this->local);
        }
    public function decode()
        {
            $this->tgtmp=stripslashes($this->tgtmp);
            $this->ip=stripslashes($this->ip);
            $this->local=stripslashes($this->local);
        }
}
