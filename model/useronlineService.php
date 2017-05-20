<?php
require_once DIR.'/model/useronline.php';
require_once DIR.'/model/sqlconnection.php';
//
function useronline_Get($command)
{
            $array_result=array();
    $key=md5($command);
    if(CACHE)
    {
        $mycache=ConnectCache();
        $cachecommand=$mycache->get($key);
        if($cachecommand)
        {
            $array_result=$cachecommand;
        }
        else
        {
          $result=mysqli_query(ConnectSql(),$command);
            if($result!=false)while($row=mysqli_fetch_array($result))
            {
                $new_obj=new useronline($row);
                $new_obj->decode();
                array_push($array_result,$new_obj);
            }
            $mycache->set($key,$array_result);
            saveCacheGroup($mycache,$key,'useronline');
        }
    }
    else
    {
       $result=mysqli_query(ConnectSql(),$command);
       if($result!=false)while($row=mysqli_fetch_array($result))
        {
            $new_obj=new useronline($row);
            $new_obj->decode();
            array_push($array_result,$new_obj);
        }
    }
    return $array_result;
}
//
function useronline_getById($tgtmp)
{
    return useronline_Get('select * from useronline where tgtmp='.$tgtmp);
}
//
function useronline_getByAll()
{
    return useronline_Get('select * from useronline');
}
//
function useronline_getByTop($top,$where,$order)
{
    return useronline_Get("select * from useronline ".(($where!='')?(' where '.$where):'').(($order!='')?" Order By ".$order:'').(($top!='')?' limit '.$top:''));
}
//
function useronline_getByPaging($CurrentPage, $PageSize,$Order,$where)
{
   return useronline_Get("SELECT * FROM  useronline ".(($where!='')?(' where '.$where):'')." Order By ".$Order." Limit ".(($CurrentPage-1)*$PageSize)." , ".$PageSize);
}
//
function useronline_getByPagingReplace($CurrentPage, $PageSize,$Order,$where)
{
   return useronline_Get("SELECT useronline.tgtmp, useronline.ip, useronline.local FROM  useronline ".(($where!='')?(' where '.$where):'')." Order By ".$Order." Limit ".(($CurrentPage-1)*$PageSize)." , ".$PageSize);
}
//
function useronline_insert($obj)
{
    return exe_query("insert into useronline (tgtmp,ip,local) values ('$obj->tgtmp','$obj->ip','$obj->local')",'useronline');
}
//
function useronline_update($obj)
{
    return exe_query("update useronline set tgtmp='$obj->tgtmp',ip='$obj->ip',local='$obj->local' where tgtmp=$obj->tgtmp",'useronline');
}
//
function useronline_delete($obj)
{
    return exe_query('delete from useronline where tgtmp='.$obj->tgtmp,'useronline');
}
function useronline_delete_check($tgtmp)
{
    return exe_query('delete from useronline where tgtmp <'.$tgtmp,'useronline');
}
//
function useronline_count($where)
{
    $result=mysqli_query(ConnectSql(),'select COUNT(tgtmp) as count from useronline '.(($where!='')?'where '.$where:''));
    if($result!=false)
    {
         $row=mysqli_fetch_array($result);
         return $row['count'];
    }
   else return false;
}
