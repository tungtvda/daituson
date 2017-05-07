<?php
require_once DIR.'/model/tin_phan_anh.php';
require_once DIR.'/model/sqlconnection.php';
//
function tin_phan_anh_Get($command)
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
                $new_obj=new tin_phan_anh($row);
                $new_obj->decode();
                array_push($array_result,$new_obj);
            }
            $mycache->set($key,$array_result);
            saveCacheGroup($mycache,$key,'tin_phan_anh');
        }
    }
    else
    {
       $result=mysqli_query(ConnectSql(),$command);
       if($result!=false)while($row=mysqli_fetch_array($result))
        {
            $new_obj=new tin_phan_anh($row);
            $new_obj->decode();
            array_push($array_result,$new_obj);
        }
    }
    return $array_result;
}
//
function tin_phan_anh_getById($id)
{
    return tin_phan_anh_Get('select * from tin_phan_anh where id='.$id);
}
//
function tin_phan_anh_getByAll()
{
    return tin_phan_anh_Get('select * from tin_phan_anh');
}
//
function tin_phan_anh_getByTop($top,$where,$order)
{
    return tin_phan_anh_Get("select * from tin_phan_anh ".(($where!='')?(' where '.$where):'').(($order!='')?" Order By ".$order:'').(($top!='')?' limit '.$top:''));
}
//
function tin_phan_anh_getByPaging($CurrentPage, $PageSize,$Order,$where)
{
   return tin_phan_anh_Get("SELECT * FROM  tin_phan_anh ".(($where!='')?(' where '.$where):'')." Order By ".$Order." Limit ".(($CurrentPage-1)*$PageSize)." , ".$PageSize);
}
//
function tin_phan_anh_getByPagingReplace($CurrentPage, $PageSize,$Order,$where)
{
   return tin_phan_anh_Get("SELECT tin_phan_anh.id, tin_phan_anh.active, tin_phan_anh.name, tin_phan_anh.name_url, tin_phan_anh.img, tin_phan_anh.noi_dung, tin_phan_anh.title, tin_phan_anh.keyword, tin_phan_anh.description FROM  tin_phan_anh ".(($where!='')?(' where '.$where):'')." Order By ".$Order." Limit ".(($CurrentPage-1)*$PageSize)." , ".$PageSize);
}
//
function tin_phan_anh_insert($obj)
{
    return exe_query("insert into tin_phan_anh (active,name,name_url,img,noi_dung,title,keyword,description) values ('$obj->active','$obj->name','$obj->name_url','$obj->img','$obj->noi_dung','$obj->title','$obj->keyword','$obj->description')",'tin_phan_anh');
}
//
function tin_phan_anh_update($obj)
{
    return exe_query("update tin_phan_anh set active='$obj->active',name='$obj->name',name_url='$obj->name_url',img='$obj->img',noi_dung='$obj->noi_dung',title='$obj->title',keyword='$obj->keyword',description='$obj->description' where id=$obj->id",'tin_phan_anh');
}
//
function tin_phan_anh_delete($obj)
{
    return exe_query('delete from tin_phan_anh where id='.$obj->id,'tin_phan_anh');
}
//
function tin_phan_anh_count($where)
{
    $result=mysqli_query(ConnectSql(),'select COUNT(id) as count from tin_phan_anh '.(($where!='')?'where '.$where:''));
    if($result!=false)
    {
         $row=mysqli_fetch_array($result);
         return $row['count'];
    }
   else return false;
}
