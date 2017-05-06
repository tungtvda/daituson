<?php
require_once DIR.'/model/link_website.php';
require_once DIR.'/model/sqlconnection.php';
//
function link_website_Get($command)
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
                $new_obj=new link_website($row);
                $new_obj->decode();
                array_push($array_result,$new_obj);
            }
            $mycache->set($key,$array_result);
            saveCacheGroup($mycache,$key,'link_website');
        }
    }
    else
    {
       $result=mysqli_query(ConnectSql(),$command);
       if($result!=false)while($row=mysqli_fetch_array($result))
        {
            $new_obj=new link_website($row);
            $new_obj->decode();
            array_push($array_result,$new_obj);
        }
    }
    return $array_result;
}
//
function link_website_getById($id)
{
    return link_website_Get('select * from link_website where id='.$id);
}
//
function link_website_getByAll()
{
    return link_website_Get('select * from link_website');
}
//
function link_website_getByTop($top,$where,$order)
{
    return link_website_Get("select * from link_website ".(($where!='')?(' where '.$where):'').(($order!='')?" Order By ".$order:'').(($top!='')?' limit '.$top:''));
}
//
function link_website_getByPaging($CurrentPage, $PageSize,$Order,$where)
{
   return link_website_Get("SELECT * FROM  link_website ".(($where!='')?(' where '.$where):'')." Order By ".$Order." Limit ".(($CurrentPage-1)*$PageSize)." , ".$PageSize);
}
//
function link_website_getByPagingReplace($CurrentPage, $PageSize,$Order,$where)
{
   return link_website_Get("SELECT link_website.id, link_website.name, link_website.link, link_website.vi_tri FROM  link_website ".(($where!='')?(' where '.$where):'')." Order By ".$Order." Limit ".(($CurrentPage-1)*$PageSize)." , ".$PageSize);
}
//
function link_website_insert($obj)
{
    return exe_query("insert into link_website (name,link,vi_tri) values ('$obj->name','$obj->link','$obj->vi_tri')",'link_website');
}
//
function link_website_update($obj)
{
    return exe_query("update link_website set name='$obj->name',link='$obj->link',vi_tri='$obj->vi_tri' where id=$obj->id",'link_website');
}
//
function link_website_delete($obj)
{
    return exe_query('delete from link_website where id='.$obj->id,'link_website');
}
//
function link_website_count($where)
{
    $result=mysqli_query(ConnectSql(),'select COUNT(id) as count from link_website '.(($where!='')?'where '.$where:''));
    if($result!=false)
    {
         $row=mysqli_fetch_array($result);
         return $row['count'];
    }
   else return false;
}
