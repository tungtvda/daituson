<?php
require_once '../../config.php';
require_once DIR.'/model/chuong_trinh_phat_thanhService.php';
require_once DIR.'/view/admin/chuong_trinh_phat_thanh.php';
require_once DIR.'/common/messenger.php';
$data=array();
$insert=true;
if(isset($_SESSION["Admin"]))
{
    if(isset($_GET["action"])&&isset($_GET["id"]))
    {
        if($_GET["action"]=="delete")
        {
            $new_obj= new chuong_trinh_phat_thanh();
            $new_obj->id=$_GET["id"];
            chuong_trinh_phat_thanh_delete($new_obj);
            header('Location: '.SITE_NAME.'/controller/admin/chuong_trinh_phat_thanh.php');
        }
        else if($_GET["action"]=="edit")
        {
            $new_obj=chuong_trinh_phat_thanh_getById($_GET["id"]);
            if($new_obj!=false)
            {
                $data['form']=$new_obj[0];
                $data['tab2_class']='default-tab current';
                $data['tab1_class']=' ';
                $insert=false;
            }
            else header('Location: '.SITE_NAME.'/controller/admin/chuong_trinh_phat_thanh.php');
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
            $List_chuong_trinh_phat_thanh=chuong_trinh_phat_thanh_getByAll();
            foreach($List_chuong_trinh_phat_thanh as $chuong_trinh_phat_thanh)
            {
                if(isset($_GET["check_".$chuong_trinh_phat_thanh->id])) chuong_trinh_phat_thanh_delete($chuong_trinh_phat_thanh);
            }
            header('Location: '.SITE_NAME.'/controller/admin/chuong_trinh_phat_thanh.php');
        }
    }
    if(isset($_POST["name"])&&isset($_POST["name_url"])&&isset($_POST["link_mp3"])&&isset($_POST["noi_dung"])&&isset($_POST["title"])&&isset($_POST["keyword"])&&isset($_POST["description"]))
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
       if(!isset($array['link_mp3']))
       $array['link_mp3']='0';
       if(!isset($array['noi_dung']))
       $array['noi_dung']='0';
       if(!isset($array['title']))
       $array['title']='0';
       if(!isset($array['keyword']))
       $array['keyword']='0';
       if(!isset($array['description']))
       $array['description']='0';
      $new_obj=new chuong_trinh_phat_thanh($array);
        if($insert)
        {
            chuong_trinh_phat_thanh_insert($new_obj);
            header('Location: '.SITE_NAME.'/controller/admin/chuong_trinh_phat_thanh.php');
        }
        else
        {
            $new_obj->id=$_GET["id"];
            chuong_trinh_phat_thanh_update($new_obj);
            $insert=false;
            header('Location: '.SITE_NAME.'/controller/admin/chuong_trinh_phat_thanh.php');
        }
    }
    $data['username']=isset($_SESSION["UserName"])?$_SESSION["UserName"]:'quản trị viên';
    $data['count_paging']=chuong_trinh_phat_thanh_count('');
    $data['page']=isset($_GET['page'])?$_GET['page']:'1';
    $data['table_body']=chuong_trinh_phat_thanh_getByPagingReplace($data['page'],20,'id DESC','');
    // gọi phương thức trong tầng view để hiển thị
    view_chuong_trinh_phat_thanh($data);
}
else
{
     header('location: '.SITE_NAME);
}
