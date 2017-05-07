<?php
require_once DIR.'/model/quang_cao.php';
require_once DIR.'/model/sqlconnection.php';
//
function quang_cao_Get($command)
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
                $new_obj=new quang_cao($row);
                $new_obj->decode();
                array_push($array_result,$new_obj);
            }
            $mycache->set($key,$array_result);
            saveCacheGroup($mycache,$key,'quang_cao');
        }
    }
    else
    {
       $result=mysqli_query(ConnectSql(),$command);
       if($result!=false)while($row=mysqli_fetch_array($result))
        {
            $new_obj=new quang_cao($row);
            $new_obj->decode();
            array_push($array_result,$new_obj);
        }
    }
    return $array_result;
}
//
function quang_cao_getById($id)
{
    return quang_cao_Get('select * from quang_cao where id='.$id);
}
//
function quang_cao_getByAll()
{
    return quang_cao_Get('select * from quang_cao');
}
//
function quang_cao_getByTop($top,$where,$order)
{
    return quang_cao_Get("select * from quang_cao ".(($where!='')?(' where '.$where):'').(($order!='')?" Order By ".$order:'').(($top!='')?' limit '.$top:''));
}
//
function quang_cao_getByPaging($CurrentPage, $PageSize,$Order,$where)
{
   return quang_cao_Get("SELECT * FROM  quang_cao ".(($where!='')?(' where '.$where):'')." Order By ".$Order." Limit ".(($CurrentPage-1)*$PageSize)." , ".$PageSize);
}
//
function quang_cao_getByPagingReplace($CurrentPage, $PageSize,$Order,$where)
{
   return quang_cao_Get("SELECT quang_cao.id, quang_cao.active, quang_cao.name, quang_cao.img, quang_cao.top, quang_cao.bottom, quang_cao.link, quang_cao.vi_tri FROM  quang_cao ".(($where!='')?(' where '.$where):'')." Order By ".$Order." Limit ".(($CurrentPage-1)*$PageSize)." , ".$PageSize);
}
//
function quang_cao_insert($obj)
{
    return exe_query("insert into quang_cao (active,name,img,top,bottom,link,vi_tri) values ('$obj->active','$obj->name','$obj->img','$obj->top','$obj->bottom','$obj->link','$obj->vi_tri')",'quang_cao');
}
//
function quang_cao_update($obj)
{
    return exe_query("update quang_cao set active='$obj->active',name='$obj->name',img='$obj->img',top='$obj->top',bottom='$obj->bottom',link='$obj->link',vi_tri='$obj->vi_tri' where id=$obj->id",'quang_cao');
}
//
function quang_cao_delete($obj)
{
    return exe_query('delete from quang_cao where id='.$obj->id,'quang_cao');
}
//
function quang_cao_count($where)
{
    $result=mysqli_query(ConnectSql(),'select COUNT(id) as count from quang_cao '.(($where!='')?'where '.$where:''));
    if($result!=false)
    {
         $row=mysqli_fetch_array($result);
         return $row['count'];
    }
   else return false;
}
