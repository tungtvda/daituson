<?php
/**
 * Created by PhpStorm.
 * User: tungtv
 * Date: 11/10/14
 * Time: 2:40 PM
 */
if(!defined('SITE_NAME'))
{
    require_once '../../config.php';
}

require_once DIR.'/controller/default/public.php';
require_once DIR . '/common/class.phpmailer.php';
require_once(DIR . "/common/Mail.php");
$data['config']=config_getByTop(1,'','');
$data['tintuc_moi']=tintuc_getByTop(10,'active=1 and tin_moi=1','id desc');
$data['tintuc_noibat']=tintuc_getByTop(1,'active=1 and show_index=1','id desc');
if(count($data['tintuc_noibat'])==0){
    $data['tintuc_noibat']=tintuc_getByTop(1,'active=1','id desc');
}
$data['tintuc_noi_bat_tong_hop']=tintuc_getByTop(10,'active=1 and danhmuc_id=1','id desc');
$data['tintuc_noi_bat_chinh_tri']=tintuc_getByTop(10,'active=1 and danhmuc_id=2','id desc');
$data['tintuc_noi_bat_kinh_te']=tintuc_getByTop(10,'active=1 and danhmuc_id=3','id desc');
$data['tintuc_noi_bat_van_hoa']=tintuc_getByTop(10,'active=1 and danhmuc_id=4','id desc');
$data['tintuc_noi_bat_an_ninh']=tintuc_getByTop(10,'active=1 and danhmuc_id=5','id desc');
$data['tintuc_noi_bat_hoat_dong']=tintuc_getByTop(10,'active=1 and danhmuc_id=7','id desc');
$data['tintuc_noi_bat_bai_hat']=tintuc_getByTop(10,'active=1 and danhmuc_id=8','id desc');

$data['danhmuc_name']=danh_muc_tin_tuc_getByTop('','','');

$title=$data['config'][0]->title;
$description= $data['config'][0]->keyword;
$keyword=$data['config'][0]->description;
$title=($title)?$title:'daituson.com.vn';
$description=($description)?$description:'daituson.com.vn';
$keywords=($keyword)?$keyword:'daituson.com.vn';

show_header($title,$description,$keywords,$data);
show_menu($data,'trangchu');
//show_slide($data);
show_index($data);
show_right($data);
show_footer($data);
