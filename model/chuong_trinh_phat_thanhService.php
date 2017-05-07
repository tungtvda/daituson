<?php
require_once DIR.'/model/chuong_trinh_phat_thanh.php';
require_once DIR.'/model/sqlconnection.php';
//
function chuong_trinh_phat_thanh_Get($command)
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
                $new_obj=new chuong_trinh_phat_thanh($row);
                $new_obj->decode();
                array_push($array_result,$new_obj);
            }
            $mycache->set($key,$array_result);
            saveCacheGroup($mycache,$key,'chuong_trinh_phat_thanh');
        }
    }
    else
    {
       $result=mysqli_query(ConnectSql(),$command);
       if($result!=false)while($row=mysqli_fetch_array($result))
        {
            $new_obj=new chuong_trinh_phat_thanh($row);
            $new_obj->decode();
            array_push($array_result,$new_obj);
        }
    }
    return $array_result;
}
//
function chuong_trinh_phat_thanh_getById($id)
{
    return chuong_trinh_phat_thanh_Get('select * from chuong_trinh_phat_thanh where id='.$id);
}
//
function chuong_trinh_phat_thanh_getByAll()
{
    return chuong_trinh_phat_thanh_Get('select * from chuong_trinh_phat_thanh');
}
//
function chuong_trinh_phat_thanh_getByTop($top,$where,$order)
{
    return chuong_trinh_phat_thanh_Get("select * from chuong_trinh_phat_thanh ".(($where!='')?(' where '.$where):'').(($order!='')?" Order By ".$order:'').(($top!='')?' limit '.$top:''));
}
//
function chuong_trinh_phat_thanh_getByPaging($CurrentPage, $PageSize,$Order,$where)
{
   return chuong_trinh_phat_thanh_Get("SELECT * FROM  chuong_trinh_phat_thanh ".(($where!='')?(' where '.$where):'')." Order By ".$Order." Limit ".(($CurrentPage-1)*$PageSize)." , ".$PageSize);
}
//
function chuong_trinh_phat_thanh_getByPagingReplace($CurrentPage, $PageSize,$Order,$where)
{
   return chuong_trinh_phat_thanh_Get("SELECT chuong_trinh_phat_thanh.id, chuong_trinh_phat_thanh.active, chuong_trinh_phat_thanh.name, chuong_trinh_phat_thanh.name_url, chuong_trinh_phat_thanh.link_mp3, chuong_trinh_phat_thanh.file_mp3, chuong_trinh_phat_thanh.noi_dung, chuong_trinh_phat_thanh.title, chuong_trinh_phat_thanh.keyword, chuong_trinh_phat_thanh.description FROM  chuong_trinh_phat_thanh ".(($where!='')?(' where '.$where):'')." Order By ".$Order." Limit ".(($CurrentPage-1)*$PageSize)." , ".$PageSize);
}
//
function chuong_trinh_phat_thanh_insert($obj)
{
    return exe_query("insert into chuong_trinh_phat_thanh (active,name,name_url,link_mp3,file_mp3,noi_dung,title,keyword,description) values ('$obj->active','$obj->name','$obj->name_url','$obj->link_mp3','$obj->file_mp3','$obj->noi_dung','$obj->title','$obj->keyword','$obj->description')",'chuong_trinh_phat_thanh');
}
//
function chuong_trinh_phat_thanh_update($obj)
{
    return exe_query("update chuong_trinh_phat_thanh set active='$obj->active',name='$obj->name',name_url='$obj->name_url',link_mp3='$obj->link_mp3',file_mp3='$obj->file_mp3',noi_dung='$obj->noi_dung',title='$obj->title',keyword='$obj->keyword',description='$obj->description' where id=$obj->id",'chuong_trinh_phat_thanh');
}
//
function chuong_trinh_phat_thanh_delete($obj)
{
    return exe_query('delete from chuong_trinh_phat_thanh where id='.$obj->id,'chuong_trinh_phat_thanh');
}
//
function chuong_trinh_phat_thanh_count($where)
{
    $result=mysqli_query(ConnectSql(),'select COUNT(id) as count from chuong_trinh_phat_thanh '.(($where!='')?'where '.$where:''));
    if($result!=false)
    {
         $row=mysqli_fetch_array($result);
         return $row['count'];
    }
   else return false;
}
