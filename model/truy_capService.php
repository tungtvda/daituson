<?php
require_once DIR.'/model/truy_cap.php';
require_once DIR.'/model/sqlconnection.php';
//
function truy_cap_Get($command)
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
                $new_obj=new truy_cap($row);
                $new_obj->decode();
                array_push($array_result,$new_obj);
            }
            $mycache->set($key,$array_result);
            saveCacheGroup($mycache,$key,'truy_cap');
        }
    }
    else
    {
       $result=mysqli_query(ConnectSql(),$command);
       if($result!=false)while($row=mysqli_fetch_array($result))
        {
            $new_obj=new truy_cap($row);
            $new_obj->decode();
            array_push($array_result,$new_obj);
        }
    }
    return $array_result;
}
//
function truy_cap_getById($id)
{
    return truy_cap_Get('select * from truy_cap where id='.$id);
}
//
function truy_cap_getByAll()
{
    return truy_cap_Get('select * from truy_cap');
}
//
function truy_cap_getByTop($top,$where,$order)
{
    return truy_cap_Get("select * from truy_cap ".(($where!='')?(' where '.$where):'').(($order!='')?" Order By ".$order:'').(($top!='')?' limit '.$top:''));
}
//
function truy_cap_getByPaging($CurrentPage, $PageSize,$Order,$where)
{
   return truy_cap_Get("SELECT * FROM  truy_cap ".(($where!='')?(' where '.$where):'')." Order By ".$Order." Limit ".(($CurrentPage-1)*$PageSize)." , ".$PageSize);
}
//
function truy_cap_getByPagingReplace($CurrentPage, $PageSize,$Order,$where)
{
   return truy_cap_Get("SELECT truy_cap.id, truy_cap.number FROM  truy_cap ".(($where!='')?(' where '.$where):'')." Order By ".$Order." Limit ".(($CurrentPage-1)*$PageSize)." , ".$PageSize);
}
//
function truy_cap_insert($obj)
{
    return exe_query("insert into truy_cap (number) values ('$obj->number')",'truy_cap');
}
//
function truy_cap_update($obj)
{
    return exe_query("update truy_cap set number='$obj->number' where id=$obj->id",'truy_cap');
}
//
function truy_cap_delete($obj)
{
    return exe_query('delete from truy_cap where id='.$obj->id,'truy_cap');
}
//
function truy_cap_count($where)
{
    $result=mysqli_query(ConnectSql(),'select COUNT(id) as count from truy_cap '.(($where!='')?'where '.$where:''));
    if($result!=false)
    {
         $row=mysqli_fetch_array($result);
         return $row['count'];
    }
   else return false;
}
