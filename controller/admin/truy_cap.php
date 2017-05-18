<?php
require_once '../../config.php';
require_once DIR.'/model/truy_capService.php';
require_once DIR.'/view/admin/truy_cap.php';
require_once DIR.'/common/messenger.php';
$data=array();
$insert=true;
if(isset($_SESSION["Admin"]))
{
    if(isset($_GET["action"])&&isset($_GET["id"]))
    {
        if($_GET["action"]=="delete")
        {
            $new_obj= new truy_cap();
            $new_obj->id=$_GET["id"];
            truy_cap_delete($new_obj);
            header('Location: '.SITE_NAME.'/controller/admin/truy_cap.php');
        }
        else if($_GET["action"]=="edit")
        {
            $new_obj=truy_cap_getById($_GET["id"]);
            if($new_obj!=false)
            {
                $data['form']=$new_obj[0];
                $data['tab2_class']='default-tab current';
                $data['tab1_class']=' ';
                $insert=false;
            }
            else header('Location: '.SITE_NAME.'/controller/admin/truy_cap.php');
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
            $List_truy_cap=truy_cap_getByAll();
            foreach($List_truy_cap as $truy_cap)
            {
                if(isset($_GET["check_".$truy_cap->id])) truy_cap_delete($truy_cap);
            }
            header('Location: '.SITE_NAME.'/controller/admin/truy_cap.php');
        }
    }
    if(isset($_POST["number"]))
    {
       $array=$_POST;
       if(!isset($array['id']))
       $array['id']='0';
       if(!isset($array['number']))
       $array['number']='0';
      $new_obj=new truy_cap($array);
        if($insert)
        {
            truy_cap_insert($new_obj);
            header('Location: '.SITE_NAME.'/controller/admin/truy_cap.php');
        }
        else
        {
            $new_obj->id=$_GET["id"];
            truy_cap_update($new_obj);
            $insert=false;
            header('Location: '.SITE_NAME.'/controller/admin/truy_cap.php');
        }
    }
    $data['username']=isset($_SESSION["UserName"])?$_SESSION["UserName"]:'quản trị viên';
    $data['count_paging']=truy_cap_count('');
    $data['page']=isset($_GET['page'])?$_GET['page']:'1';
    $data['table_body']=truy_cap_getByPagingReplace($data['page'],20,'id DESC','');
    // gọi phương thức trong tầng view để hiển thị
    view_truy_cap($data);
}
else
{
     header('location: '.SITE_NAME);
}
