<?php
require_once '../../config.php';
require_once DIR.'/model/tin_phan_anhService.php';
require_once DIR.'/view/admin/tin_phan_anh.php';
require_once DIR.'/common/messenger.php';
$data=array();
$insert=true;
if(isset($_SESSION["Admin"]))
{
    if(isset($_GET["action"])&&isset($_GET["id"]))
    {
        if($_GET["action"]=="delete")
        {
            $new_obj= new tin_phan_anh();
            $new_obj->id=$_GET["id"];
            tin_phan_anh_delete($new_obj);
            header('Location: '.SITE_NAME.'/controller/admin/tin_phan_anh.php');
        }
        else if($_GET["action"]=="edit")
        {
            $new_obj=tin_phan_anh_getById($_GET["id"]);
            if($new_obj!=false)
            {
                $data['form']=$new_obj[0];
                $data['tab2_class']='default-tab current';
                $data['tab1_class']=' ';
                $insert=false;
            }
            else header('Location: '.SITE_NAME.'/controller/admin/tin_phan_anh.php');
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
            $List_tin_phan_anh=tin_phan_anh_getByAll();
            foreach($List_tin_phan_anh as $tin_phan_anh)
            {
                if(isset($_GET["check_".$tin_phan_anh->id])) tin_phan_anh_delete($tin_phan_anh);
            }
            header('Location: '.SITE_NAME.'/controller/admin/tin_phan_anh.php');
        }
    }
    if(isset($_POST["name"])&&isset($_POST["name_url"])&&isset($_POST["img"])&&isset($_POST["title"])&&isset($_POST["keyword"])&&isset($_POST["description"]))
    {
       $array=$_POST;
       if(!isset($array['id']))
       $array['id']='0';
       if(!isset($array['active']))
       $array['active']='0';
       if(!isset($array['name']))
       $array['name']='0';
       if(!isset($array['name_url']))
       $array['name_url']='0';
       if(!isset($array['img']))
       $array['img']='0';
       if(!isset($array['title']))
       $array['title']='0';
       if(!isset($array['keyword']))
       $array['keyword']='0';
       if(!isset($array['description']))
       $array['description']='0';
      $new_obj=new tin_phan_anh($array);
        if($insert)
        {
            tin_phan_anh_insert($new_obj);
            header('Location: '.SITE_NAME.'/controller/admin/tin_phan_anh.php');
        }
        else
        {
            $new_obj->id=$_GET["id"];
            tin_phan_anh_update($new_obj);
            $insert=false;
            header('Location: '.SITE_NAME.'/controller/admin/tin_phan_anh.php');
        }
    }
    $data['username']=isset($_SESSION["UserName"])?$_SESSION["UserName"]:'quản trị viên';
    $data['count_paging']=tin_phan_anh_count('');
    $data['page']=isset($_GET['page'])?$_GET['page']:'1';
    $data['table_body']=tin_phan_anh_getByPagingReplace($data['page'],20,'id DESC','');
    // gọi phương thức trong tầng view để hiển thị
    view_tin_phan_anh($data);
}
else
{
     header('location: '.SITE_NAME);
}
