<?php
require_once '../../config.php';
require_once DIR.'/model/danh_muc_tin_tucService.php';
require_once DIR.'/view/admin/danh_muc_tin_tuc.php';
require_once DIR.'/common/messenger.php';
require_once DIR.'/common/locdautiengviet.php';
$data=array();
$insert=true;
if(isset($_SESSION["Admin"]))
{
    if(isset($_GET["action"])&&isset($_GET["id"]))
    {
        if($_GET["action"]=="delete")
        {
            $new_obj= new danh_muc_tin_tuc();
            $new_obj->id=$_GET["id"];
//            danh_muc_tin_tuc_delete($new_obj);
            header('Location: '.SITE_NAME.'/controller/admin/danh_muc_tin_tuc.php');
        }
        else if($_GET["action"]=="edit")
        {
            $new_obj=danh_muc_tin_tuc_getById($_GET["id"]);
            if($new_obj!=false)
            {
                $data['form']=$new_obj[0];
                $data['tab2_class']='default-tab current';
                $data['tab1_class']=' ';
                $insert=false;
            }
            else header('Location: '.SITE_NAME.'/controller/admin/danh_muc_tin_tuc.php');
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
    if(isset($_GET["action_all"]))
    {
        if($_GET["action_all"]=="ThemMoi")
        {
            $data['tab2_class']='default-tab current';
            $data['tab1_class']=' ';
        }
        else
        {
            $List_danh_muc_tin_tuc=danh_muc_tin_tuc_getByAll();
            foreach($List_danh_muc_tin_tuc as $danh_muc_tin_tuc)
            {
//                if(isset($_GET["check_".$danh_muc_tin_tuc->id])) danh_muc_tin_tuc_delete($danh_muc_tin_tuc);
            }
            header('Location: '.SITE_NAME.'/controller/admin/danh_muc_tin_tuc.php');
        }
    }
    if(isset($_POST["name"])&&isset($_POST["name_url"])&&isset($_POST["vi_tri"])&&isset($_POST["title"])&&isset($_POST["keyword"])&&isset($_POST["description"]))
    {
       $array=$_POST;
       if(!isset($array['id']))
       $array['id']='0';
       if(!isset($array['name']))
       $array['name']='0';
       if(!isset($array['name_url']))
           $array['name_url']='0';
        $array['name_url']=LocDau($array['name']);
       if(!isset($array['vi_tri']))
       $array['vi_tri']='0';
       if(!isset($array['title']))
       $array['title']='0';
       if(!isset($array['keyword']))
       $array['keyword']='0';
       if(!isset($array['description']))
       $array['description']='0';
      $new_obj=new danh_muc_tin_tuc($array);
        if($insert)
        {
            danh_muc_tin_tuc_insert($new_obj);
            header('Location: '.SITE_NAME.'/controller/admin/danh_muc_tin_tuc.php');
        }
        else
        {
            $new_obj->id=$_GET["id"];
            danh_muc_tin_tuc_update($new_obj);
            $insert=false;
            header('Location: '.SITE_NAME.'/controller/admin/danh_muc_tin_tuc.php');
        }
    }
    $data['username']=isset($_SESSION["UserName"])?$_SESSION["UserName"]:'quản trị viên';
    $data['count_paging']=danh_muc_tin_tuc_count('');
    $data['page']=isset($_GET['page'])?$_GET['page']:'1';
    $data['table_body']=danh_muc_tin_tuc_getByPagingReplace($data['page'],20,'id DESC','');
    // gọi phương thức trong tầng view để hiển thị
    view_danh_muc_tin_tuc($data);
}
else
{
     header('location: '.SITE_NAME);
}
