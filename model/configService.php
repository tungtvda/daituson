<?php
require_once DIR.'/model/config.php';
require_once DIR.'/model/sqlconnection.php';
//
function config_Get($command)
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
                $new_obj=new config($row);
                $new_obj->decode();
                array_push($array_result,$new_obj);
            }
            $mycache->set($key,$array_result);
            saveCacheGroup($mycache,$key,'config');
        }
    }
    else
    {
       $result=mysqli_query(ConnectSql(),$command);
       if($result!=false)while($row=mysqli_fetch_array($result))
        {
            $new_obj=new config($row);
            $new_obj->decode();
            array_push($array_result,$new_obj);
        }
    }
    return $array_result;
}
//
function config_getById($Id)
{
    return config_Get('select * from config where Id='.$Id);
}
//
function config_getByAll()
{
    return config_Get('select * from config');
}
//
function config_getByTop($top,$where,$order)
{
    return config_Get("select * from config ".(($where!='')?(' where '.$where):'').(($order!='')?" Order By ".$order:'').(($top!='')?' limit '.$top:''));
}
//
function config_getByPaging($CurrentPage, $PageSize,$Order,$where)
{
   return config_Get("SELECT * FROM  config ".(($where!='')?(' where '.$where):'')." Order By ".$Order." Limit ".(($CurrentPage-1)*$PageSize)." , ".$PageSize);
}
//
function config_getByPagingReplace($CurrentPage, $PageSize,$Order,$where)
{
   return config_Get("SELECT config.Id, config.banner, config.icon, config.name, config.dien_thoai, config.fax, config.email, config.tru_so, config.giay_phep, config.trach_nhiem_chinh, config.trach_nhiem_noi_dung, config.gioi_thieu, config.title, config.keyword, config.description FROM  config ".(($where!='')?(' where '.$where):'')." Order By ".$Order." Limit ".(($CurrentPage-1)*$PageSize)." , ".$PageSize);
}
//
function config_insert($obj)
{
    return exe_query("insert into config (banner,icon,name,dien_thoai,fax,email,tru_so,giay_phep,trach_nhiem_chinh,trach_nhiem_noi_dung,gioi_thieu,title,keyword,description) values ('$obj->banner','$obj->icon','$obj->name','$obj->dien_thoai','$obj->fax','$obj->email','$obj->tru_so','$obj->giay_phep','$obj->trach_nhiem_chinh','$obj->trach_nhiem_noi_dung','$obj->gioi_thieu','$obj->title','$obj->keyword','$obj->description')",'config');
}
//
function config_update($obj)
{
    return exe_query("update config set banner='$obj->banner',icon='$obj->icon',name='$obj->name',dien_thoai='$obj->dien_thoai',fax='$obj->fax',email='$obj->email',tru_so='$obj->tru_so',giay_phep='$obj->giay_phep',trach_nhiem_chinh='$obj->trach_nhiem_chinh',trach_nhiem_noi_dung='$obj->trach_nhiem_noi_dung',gioi_thieu='$obj->gioi_thieu',title='$obj->title',keyword='$obj->keyword',description='$obj->description' where Id=$obj->Id",'config');
}
//
function config_delete($obj)
{
    return exe_query('delete from config where Id='.$obj->Id,'config');
}
//
function config_count($where)
{
    $result=mysqli_query(ConnectSql(),'select COUNT(Id) as count from config '.(($where!='')?'where '.$where:''));
    if($result!=false)
    {
         $row=mysqli_fetch_array($result);
         return $row['count'];
    }
   else return false;
}
