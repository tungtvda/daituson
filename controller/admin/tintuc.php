<?php
require_once '../../config.php';
require_once DIR.'/model/tintucService.php';
require_once DIR.'/model/danh_muc_tin_tucService.php';
require_once DIR.'/view/admin/tintuc.php';
require_once DIR.'/common/messenger.php';
$data=array();
$insert=true;
if(isset($_SESSION["Admin"]))
{
    if(isset($_GET["action"])&&isset($_GET["id"]))
    {
        if($_GET["action"]=="delete")
        {
            $new_obj= new tintuc();
            $new_obj->id=$_GET["id"];
            tintuc_delete($new_obj);
            header('Location: '.SITE_NAME.'/controller/admin/tintuc.php');
        }
        else if($_GET["action"]=="edit")
        {
            $new_obj=tintuc_getById($_GET["id"]);
            if($new_obj!=false)
            {
                $data['form']=$new_obj[0];
                $data['tab2_class']='default-tab current';
                $data['tab1_class']=' ';
                $insert=false;
            }
            else header('Location: '.SITE_NAME.'/controller/admin/tintuc.php');
        }
        else
        {
            $data['tab1_class']='default-tab current';
        }
    }
    else
    {
        $data['tab1_class']='default-tab current';
    }
    $data['listfkey']['danhmuc_id']=danh_muc_tin_tuc_getByAll();
    if(isset($_GET["action_all"]))
    {
        if($_GET["action_all"]=="ThemMoi")
        {
            $data['tab2_class']='default-tab current';
            $data['tab1_class']=' ';
        }
        else
        {
            $List_tintuc=tintuc_getByAll();
            foreach($List_tintuc as $tintuc)
            {
                if(isset($_GET["check_".$tintuc->id])) tintuc_delete($tintuc);
            }
            header('Location: '.SITE_NAME.'/controller/admin/tintuc.php');
        }
    }
    if(isset($_POST["danhmuc_id"])&&isset($_POST["name"])&&isset($_POST["name_url"])&&isset($_POST["img"])&&isset($_POST["link_video"])&&isset($_POST["noi_dung"])&&isset($_POST["title"])&&isset($_POST["keyword"])&&isset($_POST["description"])&&isset($_POST["created"]))
    {
       $array=$_POST;
       if(!isset($array['id']))
       $array['id']='0';
       if(!isset($array['danhmuc_id']))
       $array['danhmuc_id']='0';
       if(!isset($array['active']))
       $array['active']='0';
       if(!isset($array['name']))
       $array['name']='0';
       if(!isset($array['name_url']))
       $array['name_url']='0';
       if(!isset($array['img']))
       $array['img']='0';
       if(!isset($array['tin_moi']))
       $array['tin_moi']='0';
       if(!isset($array['tin_noi_bat']))
       $array['tin_noi_bat']='0';
       if(!isset($array['link_video']))
       $array['link_video']='0';
       if(!isset($array['noi_dung']))
       $array['noi_dung']='0';
       if(!isset($array['title']))
       $array['title']='0';
       if(!isset($array['keyword']))
       $array['keyword']='0';
       if(!isset($array['description']))
       $array['description']='0';
       if(!isset($array['created']))
       $array['created']='0';
      $new_obj=new tintuc($array);
        if($insert)
        {
            tintuc_insert($new_obj);
            header('Location: '.SITE_NAME.'/controller/admin/tintuc.php');
        }
        else
        {
            $new_obj->id=$_GET["id"];
            tintuc_update($new_obj);
            $insert=false;
            header('Location: '.SITE_NAME.'/controller/admin/tintuc.php');
        }
    }
    $data['username']=isset($_SESSION["UserName"])?$_SESSION["UserName"]:'quản trị viên';
    $data['count_paging']=tintuc_count('');
    $data['page']=isset($_GET['page'])?$_GET['page']:'1';
    $data['table_body']=tintuc_getByPagingReplace($data['page'],20,'id DESC','');
    // gọi phương thức trong tầng view để hiển thị
    view_tintuc($data);
}
else
{
     header('location: '.SITE_NAME);
}
