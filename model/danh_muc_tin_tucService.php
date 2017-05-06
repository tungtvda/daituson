<?php
require_once DIR.'/model/danh_muc_tin_tuc.php';
require_once DIR.'/model/sqlconnection.php';
//
function danh_muc_tin_tuc_Get($command)
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
                $new_obj=new danh_muc_tin_tuc($row);
                $new_obj->decode();
                array_push($array_result,$new_obj);
            }
            $mycache->set($key,$array_result);
            saveCacheGroup($mycache,$key,'danh_muc_tin_tuc');
        }
    }
    else
    {
       $result=mysqli_query(ConnectSql(),$command);
       if($result!=false)while($row=mysqli_fetch_array($result))
        {
            $new_obj=new danh_muc_tin_tuc($row);
            $new_obj->decode();
            array_push($array_result,$new_obj);
        }
    }
    return $array_result;
}
//
function danh_muc_tin_tuc_getById($id)
{
    return danh_muc_tin_tuc_Get('select * from danh_muc_tin_tuc where id='.$id);
}
//
function danh_muc_tin_tuc_getByAll()
{
    return danh_muc_tin_tuc_Get('select * from danh_muc_tin_tuc');
}
//
function danh_muc_tin_tuc_getByTop($top,$where,$order)
{
    return danh_muc_tin_tuc_Get("select * from danh_muc_tin_tuc ".(($where!='')?(' where '.$where):'').(($order!='')?" Order By ".$order:'').(($top!='')?' limit '.$top:''));
}
//
function danh_muc_tin_tuc_getByPaging($CurrentPage, $PageSize,$Order,$where)
{
   return danh_muc_tin_tuc_Get("SELECT * FROM  danh_muc_tin_tuc ".(($where!='')?(' where '.$where):'')." Order By ".$Order." Limit ".(($CurrentPage-1)*$PageSize)." , ".$PageSize);
}
//
function danh_muc_tin_tuc_getByPagingReplace($CurrentPage, $PageSize,$Order,$where)
{
   return danh_muc_tin_tuc_Get("SELECT danh_muc_tin_tuc.id, danh_muc_tin_tuc.name, danh_muc_tin_tuc.name_url, danh_muc_tin_tuc.vi_tri, danh_muc_tin_tuc.title, danh_muc_tin_tuc.keyword, danh_muc_tin_tuc.description FROM  danh_muc_tin_tuc ".(($where!='')?(' where '.$where):'')." Order By ".$Order." Limit ".(($CurrentPage-1)*$PageSize)." , ".$PageSize);
}
//
function danh_muc_tin_tuc_insert($obj)
{
    return exe_query("insert into danh_muc_tin_tuc (name,name_url,vi_tri,title,keyword,description) values ('$obj->name','$obj->name_url','$obj->vi_tri','$obj->title','$obj->keyword','$obj->description')",'danh_muc_tin_tuc');
}
//
function danh_muc_tin_tuc_update($obj)
{
    return exe_query("update danh_muc_tin_tuc set name='$obj->name',name_url='$obj->name_url',vi_tri='$obj->vi_tri',title='$obj->title',keyword='$obj->keyword',description='$obj->description' where id=$obj->id",'danh_muc_tin_tuc');
}
//
function danh_muc_tin_tuc_delete($obj)
{
    return exe_query('delete from danh_muc_tin_tuc where id='.$obj->id,'danh_muc_tin_tuc');
}
//
function danh_muc_tin_tuc_count($where)
{
    $result=mysqli_query(ConnectSql(),'select COUNT(id) as count from danh_muc_tin_tuc '.(($where!='')?'where '.$where:''));
    if($result!=false)
    {
         $row=mysqli_fetch_array($result);
         return $row['count'];
    }
   else return false;
}
