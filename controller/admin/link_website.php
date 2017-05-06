<?php
require_once '../../config.php';
require_once DIR.'/model/link_websiteService.php';
require_once DIR.'/view/admin/link_website.php';
require_once DIR.'/common/messenger.php';
$data=array();
$insert=true;
if(isset($_SESSION["Admin"]))
{
    if(isset($_GET["action"])&&isset($_GET["id"]))
    {
        if($_GET["action"]=="delete")
        {
            $new_obj= new link_website();
            $new_obj->id=$_GET["id"];
            link_website_delete($new_obj);
            header('Location: '.SITE_NAME.'/controller/admin/link_website.php');
        }
        else if($_GET["action"]=="edit")
        {
            $new_obj=link_website_getById($_GET["id"]);
            if($new_obj!=false)
            {
                $data['form']=$new_obj[0];
                $data['tab2_class']='default-tab current';
                $data['tab1_class']=' ';
                $insert=false;
            }
            else header('Location: '.SITE_NAME.'/controller/admin/link_website.php');
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
            $List_link_website=link_website_getByAll();
            foreach($List_link_website as $link_website)
            {
                if(isset($_GET["check_".$link_website->id])) link_website_delete($link_website);
            }
            header('Location: '.SITE_NAME.'/controller/admin/link_website.php');
        }
    }
    if(isset($_POST["name"])&&isset($_POST["link"])&&isset($_POST["vi_tri"]))
    {
       $array=$_POST;
       if(!isset($array['id']))
       $array['id']='0';
       if(!isset($array['name']))
       $array['name']='0';
       if(!isset($array['link']))
       $array['link']='0';
       if(!isset($array['vi_tri']))
       $array['vi_tri']='0';
      $new_obj=new link_website($array);
        if($insert)
        {
            link_website_insert($new_obj);
            header('Location: '.SITE_NAME.'/controller/admin/link_website.php');
        }
        else
        {
            $new_obj->id=$_GET["id"];
            link_website_update($new_obj);
            $insert=false;
            header('Location: '.SITE_NAME.'/controller/admin/link_website.php');
        }
    }
    $data['username']=isset($_SESSION["UserName"])?$_SESSION["UserName"]:'quản trị viên';
    $data['count_paging']=link_website_count('');
    $data['page']=isset($_GET['page'])?$_GET['page']:'1';
    $data['table_body']=link_website_getByPagingReplace($data['page'],20,'id DESC','');
    // gọi phương thức trong tầng view để hiển thị
    view_link_website($data);
}
else
{
     header('location: '.SITE_NAME);
}
