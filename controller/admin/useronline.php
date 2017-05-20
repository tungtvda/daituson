<?php
require_once '../../config.php';
require_once DIR.'/model/useronlineService.php';
require_once DIR.'/view/admin/useronline.php';
require_once DIR.'/common/messenger.php';
$data=array();
$insert=true;
if(isset($_SESSION["Admin"]))
{
    if(isset($_GET["action"])&&isset($_GET["tgtmp"]))
    {
        if($_GET["action"]=="delete")
        {
            $new_obj= new useronline();
            $new_obj->tgtmp=$_GET["tgtmp"];
            useronline_delete($new_obj);
            header('Location: '.SITE_NAME.'/controller/admin/useronline.php');
        }
        else if($_GET["action"]=="edit")
        {
            $new_obj=useronline_getById($_GET["tgtmp"]);
            if($new_obj!=false)
            {
                $data['form']=$new_obj[0];
                $data['tab2_class']='default-tab current';
                $data['tab1_class']=' ';
                $insert=false;
            }
            else header('Location: '.SITE_NAME.'/controller/admin/useronline.php');
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
            $List_useronline=useronline_getByAll();
            foreach($List_useronline as $useronline)
            {
                if(isset($_GET["check_".$useronline->tgtmp])) useronline_delete($useronline);
            }
            header('Location: '.SITE_NAME.'/controller/admin/useronline.php');
        }
    }
    if(isset($_POST["tgtmp"])&&isset($_POST["ip"])&&isset($_POST["local"]))
    {
       $array=$_POST;
       if(!isset($array['tgtmp']))
       $array['tgtmp']='0';
       if(!isset($array['ip']))
       $array['ip']='0';
       if(!isset($array['local']))
       $array['local']='0';
      $new_obj=new useronline($array);
        if($insert)
        {
            useronline_insert($new_obj);
            header('Location: '.SITE_NAME.'/controller/admin/useronline.php');
        }
        else
        {
            $new_obj->tgtmp=$_GET["tgtmp"];
            useronline_update($new_obj);
            $insert=false;
            header('Location: '.SITE_NAME.'/controller/admin/useronline.php');
        }
    }
    $data['username']=isset($_SESSION["UserName"])?$_SESSION["UserName"]:'quản trị viên';
    $data['count_paging']=useronline_count('');
    $data['page']=isset($_GET['page'])?$_GET['page']:'1';
    $data['table_body']=useronline_getByPagingReplace($data['page'],20,'tgtmp DESC','');
    // gọi phương thức trong tầng view để hiển thị
    view_useronline($data);
}
else
{
     header('location: '.SITE_NAME);
}
