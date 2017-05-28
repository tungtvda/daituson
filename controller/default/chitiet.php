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
require_once DIR . '/common/redict.php';
require_once DIR . '/common/paging.php';
$data['config']=config_getByTop(1,'','');
if(!isset($_GET['danh_muc']))
{
    redict(SITE_NAME);
}
if(!isset($_GET['id']))
{
    redict(SITE_NAME);
}
$title='';
$description='';
$keyword='';
$action='show_detail';
$danh_muc=addslashes($_GET['danh_muc']);
$id=addslashes($_GET['id']);
switch($danh_muc){
    case 'chuong-trinh-phat-thanh':
        $data['detail']=chuong_trinh_phat_thanh_getByTop(1,'name_url="'.$id.'"','id desc');
        if(count($data['detail'])==0){
            redict(SITE_NAME);
        }
        $data['tintuc_lien_quan']=chuong_trinh_phat_thanh_getByTop(10,'id!='.$data['detail'][0]->id,'id desc');
        $title=$data['detail'][0]->title;
        $description= $data['detail'][0]->keyword;
        $keyword=$data['detail'][0]->description;
        $data['html']='detail_chuong_trinh';
        break;
    case 'tin-bai-phan-anh':
        $data['detail']=tin_phan_anh_getByTop(1,'name_url="'.$id.'"','id desc');
        if(count($data['detail'])==0){
            redict(SITE_NAME);
        }
        $data['tintuc_lien_quan']=tin_phan_anh_getByTop(5,'id!='.$data['detail'][0]->id,'id desc');
        $title=$data['detail'][0]->title;
        $description= $data['detail'][0]->keyword;
        $keyword=$data['detail'][0]->description;
        $data['html']='detail_phan_anh';
        if($data['detail'][0]->active==0){
            redict(SITE_NAME);
        }
        break;
    default:
        $data['data_danhmuc']=danh_muc_tin_tuc_getByTop(1,'name_url="'.$danh_muc.'"','id desc');
        if(count($data['data_danhmuc'])==0){
            redict(SITE_NAME);
        }

        $data['detail']=tintuc_getByTop(1,'name_url="'.$id.'"','id desc');
        if(count($data['detail'])==0){
            redict(SITE_NAME);
        }
        $data['tintuc_lien_quan']=tintuc_getByTop(4,'id!='.$data['detail'][0]->id,'id desc');
        $title=$data['detail'][0]->title;
        $description= $data['detail'][0]->keyword;
        $keyword=$data['detail'][0]->description;
        if($data['detail'][0]->active==0){
            redict(SITE_NAME);
        }
}
$data['danhmuc_name']=danh_muc_tin_tuc_getByTop('','','');
$data['tintuc_moi']=tintuc_getByTop(10,'active=1 and tin_moi=1','id desc');
$data['tintuc_noi_bat_tong_hop']=tintuc_getByTop(10,'active=1 and danhmuc_id=1','id desc');
$data['tintuc_noi_bat_chinh_tri']=tintuc_getByTop(10,'active=1 and danhmuc_id=2','id desc');
$data['tintuc_noi_bat_kinh_te']=tintuc_getByTop(10,'active=1 and danhmuc_id=3','id desc');
$data['tintuc_noi_bat_van_hoa']=tintuc_getByTop(10,'active=1 and danhmuc_id=4','id desc');
$data['tintuc_noi_bat_an_ninh']=tintuc_getByTop(10,'active=1 and danhmuc_id=5','id desc');
$data['tintuc_noi_bat_hoat_dong']=tintuc_getByTop(10,'active=1 and danhmuc_id=7','id desc');
$data['tintuc_noi_bat_bai_hat']=tintuc_getByTop(10,'active=1 and danhmuc_id=8','id desc');
$title=($title)?$title:'daituson.com.vn';
$description=($description)?$description:'daituson.com.vn';
$keywords=($keyword)?$keyword:'daituson.com.vn';

show_header($title,$description,$keywords,$data);
show_menu($data,$danh_muc);
//show_slide($data);
$action($data);
show_right($data);
show_footer($data);
