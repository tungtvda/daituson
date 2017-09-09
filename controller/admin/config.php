<?php
require_once '../../config.php';
require_once DIR.'/model/configService.php';
require_once DIR.'/view/admin/config.php';
require_once DIR.'/common/messenger.php';
$data=array();
$insert=true;
if(isset($_SESSION["Admin"]))
{
    if(isset($_GET["action"])&&isset($_GET["Id"]))
    {
        if($_GET["action"]=="delete")
        {
            $new_obj= new config();
            $new_obj->Id=$_GET["Id"];
//            config_delete($new_obj);
            header('Location: '.SITE_NAME.'/controller/admin/config.php');
        }
        else if($_GET["action"]=="edit")
        {
            $new_obj=config_getById($_GET["Id"]);
            if($new_obj!=false)
            {
                $data['form']=$new_obj[0];
                $data['tab2_class']='default-tab current';
                $data['tab1_class']=' ';
                $insert=false;
            }
            else header('Location: '.SITE_NAME.'/controller/admin/config.php');
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
            $List_config=config_getByAll();
            foreach($List_config as $config)
            {
//                if(isset($_GET["check_".$config->Id])) config_delete($config);
            }
            header('Location: '.SITE_NAME.'/controller/admin/config.php');
        }
    }
    if(isset($_POST["banner"])&&isset($_POST["icon"])&&isset($_POST["name"])&&isset($_POST["dien_thoai"])&&isset($_POST["fax"])&&isset($_POST["email"])&&isset($_POST["tru_so"])&&isset($_POST["giay_phep"])&&isset($_POST["trach_nhiem_chinh"])&&isset($_POST["trach_nhiem_noi_dung"])&&isset($_POST["slide_text"])&&isset($_POST["slide_text_tac_do"])&&isset($_POST["slide_text_mau_chu"])&&isset($_POST["slide_text_mau_nen"])&&isset($_POST["slide_text_co_chu"])&&isset($_POST["gioi_thieu"])&&isset($_POST["title"])&&isset($_POST["keyword"])&&isset($_POST["description"]))
    {
       $array=$_POST;
       if(!isset($array['Id']))
       $array['Id']='0';
       if(!isset($array['banner']))
       $array['banner']='0';
       if(!isset($array['icon']))
       $array['icon']='0';
       if(!isset($array['name']))
       $array['name']='0';
       if(!isset($array['dien_thoai']))
       $array['dien_thoai']='0';
       if(!isset($array['fax']))
       $array['fax']='0';
       if(!isset($array['email']))
       $array['email']='0';
       if(!isset($array['tru_so']))
       $array['tru_so']='0';
       if(!isset($array['giay_phep']))
       $array['giay_phep']='0';
       if(!isset($array['trach_nhiem_chinh']))
       $array['trach_nhiem_chinh']='0';
       if(!isset($array['trach_nhiem_noi_dung']))
       $array['trach_nhiem_noi_dung']='0';
       if(!isset($array['slide_text']))
       $array['slide_text']='0';
       if(!isset($array['slide_text_tac_do']))
       $array['slide_text_tac_do']='0';
       if(!isset($array['slide_text_mau_chu']))
       $array['slide_text_mau_chu']='0';
       if(!isset($array['slide_text_mau_nen']))
       $array['slide_text_mau_nen']='0';
       if(!isset($array['slide_text_co_chu']))
       $array['slide_text_co_chu']='0';
       if(!isset($array['gioi_thieu']))
       $array['gioi_thieu']='0';
       if(!isset($array['title']))
       $array['title']='0';
       if(!isset($array['keyword']))
       $array['keyword']='0';
       if(!isset($array['description']))
       $array['description']='0';
      $new_obj=new config($array);
        if($insert)
        {
//            config_insert($new_obj);
            header('Location: '.SITE_NAME.'/controller/admin/config.php');
        }
        else
        {
            $new_obj->Id=$_GET["Id"];
            config_update($new_obj);
            $insert=false;
            header('Location: '.SITE_NAME.'/controller/admin/config.php');
        }
    }
    $data['username']=isset($_SESSION["UserName"])?$_SESSION["UserName"]:'quản trị viên';
    $data['count_paging']=config_count('');
    $data['page']=isset($_GET['page'])?$_GET['page']:'1';
    $data['table_body']=config_getByPagingReplace($data['page'],20,'Id DESC','');
    // gọi phương thức trong tầng view để hiển thị
    view_config($data);
}
else
{
     header('location: '.SITE_NAME);
}
