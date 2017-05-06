<?php
require_once '../../config.php';
require_once DIR.'/model/quang_caoService.php';
require_once DIR.'/view/admin/quang_cao.php';
require_once DIR.'/common/messenger.php';
$data=array();
$insert=true;
if(isset($_SESSION["Admin"]))
{
    if(isset($_GET["action"])&&isset($_GET["id"]))
    {
        if($_GET["action"]=="delete")
        {
            $new_obj= new quang_cao();
            $new_obj->id=$_GET["id"];
            quang_cao_delete($new_obj);
            header('Location: '.SITE_NAME.'/controller/admin/quang_cao.php');
        }
        else if($_GET["action"]=="edit")
        {
            $new_obj=quang_cao_getById($_GET["id"]);
            if($new_obj!=false)
            {
                $data['form']=$new_obj[0];
                $data['tab2_class']='default-tab current';
                $data['tab1_class']=' ';
                $insert=false;
            }
            else header('Location: '.SITE_NAME.'/controller/admin/quang_cao.php');
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
            $List_quang_cao=quang_cao_getByAll();
            foreach($List_quang_cao as $quang_cao)
            {
                if(isset($_GET["check_".$quang_cao->id])) quang_cao_delete($quang_cao);
            }
            header('Location: '.SITE_NAME.'/controller/admin/quang_cao.php');
        }
    }
    if(isset($_POST["name"])&&isset($_POST["img"])&&isset($_POST["link"])&&isset($_POST["vi_tri"]))
    {
       $array=$_POST;
       if(!isset($array['id']))
       $array['id']='0';
       if(!isset($array['name']))
       $array['name']='0';
       if(!isset($array['img']))
       $array['img']='0';
       if(!isset($array['top']))
       $array['top']='0';
       if(!isset($array['bottom']))
       $array['bottom']='0';
       if(!isset($array['link']))
       $array['link']='0';
       if(!isset($array['vi_tri']))
       $array['vi_tri']='0';
      $new_obj=new quang_cao($array);
        if($insert)
        {
            quang_cao_insert($new_obj);
            header('Location: '.SITE_NAME.'/controller/admin/quang_cao.php');
        }
        else
        {
            $new_obj->id=$_GET["id"];
            quang_cao_update($new_obj);
            $insert=false;
            header('Location: '.SITE_NAME.'/controller/admin/quang_cao.php');
        }
    }
    $data['username']=isset($_SESSION["UserName"])?$_SESSION["UserName"]:'quản trị viên';
    $data['count_paging']=quang_cao_count('');
    $data['page']=isset($_GET['page'])?$_GET['page']:'1';
    $data['table_body']=quang_cao_getByPagingReplace($data['page'],20,'id DESC','');
    // gọi phương thức trong tầng view để hiển thị
    view_quang_cao($data);
}
else
{
     header('location: '.SITE_NAME);
}
