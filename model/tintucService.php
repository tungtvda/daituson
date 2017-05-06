<?php
require_once DIR.'/model/tintuc.php';
require_once DIR.'/model/sqlconnection.php';
//
function tintuc_Get($command)
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
                $new_obj=new tintuc($row);
                $new_obj->decode();
                array_push($array_result,$new_obj);
            }
            $mycache->set($key,$array_result);
            saveCacheGroup($mycache,$key,'tintuc');
        }
    }
    else
    {
       $result=mysqli_query(ConnectSql(),$command);
       if($result!=false)while($row=mysqli_fetch_array($result))
        {
            $new_obj=new tintuc($row);
            $new_obj->decode();
            array_push($array_result,$new_obj);
        }
    }
    return $array_result;
}
//
function tintuc_getById($id)
{
    return tintuc_Get('select * from tintuc where id='.$id);
}
//
function tintuc_getByAll()
{
    return tintuc_Get('select * from tintuc');
}
//
function tintuc_getByTop($top,$where,$order)
{
    return tintuc_Get("select * from tintuc ".(($where!='')?(' where '.$where):'').(($order!='')?" Order By ".$order:'').(($top!='')?' limit '.$top:''));
}
//
function tintuc_getByPaging($CurrentPage, $PageSize,$Order,$where)
{
   return tintuc_Get("SELECT * FROM  tintuc ".(($where!='')?(' where '.$where):'')." Order By ".$Order." Limit ".(($CurrentPage-1)*$PageSize)." , ".$PageSize);
}
//
function tintuc_getByPagingReplace($CurrentPage, $PageSize,$Order,$where)
{
   return tintuc_Get("SELECT tintuc.id, danh_muc_tin_tuc.name as danhmuc_id, tintuc.active, tintuc.name, tintuc.name_url, tintuc.img, tintuc.tin_moi, tintuc.tin_noi_bat, tintuc.link_video, tintuc.noi_dung, tintuc.title, tintuc.keyword, tintuc.description, tintuc.created FROM  tintuc, danh_muc_tin_tuc where danh_muc_tin_tuc.id=tintuc.danhmuc_id  ".(($where!='')?(' and '.$where):'')." Order By ".$Order." Limit ".(($CurrentPage-1)*$PageSize)." , ".$PageSize);
}
//
function tintuc_insert($obj)
{
    return exe_query("insert into tintuc (danhmuc_id,active,name,name_url,img,tin_moi,tin_noi_bat,link_video,noi_dung,title,keyword,description,created) values ('$obj->danhmuc_id','$obj->active','$obj->name','$obj->name_url','$obj->img','$obj->tin_moi','$obj->tin_noi_bat','$obj->link_video','$obj->noi_dung','$obj->title','$obj->keyword','$obj->description','$obj->created')",'tintuc');
}
//
function tintuc_update($obj)
{
    return exe_query("update tintuc set danhmuc_id='$obj->danhmuc_id',active='$obj->active',name='$obj->name',name_url='$obj->name_url',img='$obj->img',tin_moi='$obj->tin_moi',tin_noi_bat='$obj->tin_noi_bat',link_video='$obj->link_video',noi_dung='$obj->noi_dung',title='$obj->title',keyword='$obj->keyword',description='$obj->description',created='$obj->created' where id=$obj->id",'tintuc');
}
//
function tintuc_delete($obj)
{
    return exe_query('delete from tintuc where id='.$obj->id,'tintuc');
}
//
function tintuc_count($where)
{
    $result=mysqli_query(ConnectSql(),'select COUNT(id) as count from tintuc '.(($where!='')?'where '.$where:''));
    if($result!=false)
    {
         $row=mysqli_fetch_array($result);
         return $row['count'];
    }
   else return false;
}
