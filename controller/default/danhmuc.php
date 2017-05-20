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
$title='';
$description='';
$keyword='';

$action='show_danhmuc';
$danh_muc=addslashes($_GET['danh_muc']);
switch($danh_muc){
    case 'chuong-trinh-phat-thanh':
        $title='Chương trình phát thanh';
        $description= 'Chương trình phát thanh';
        $keyword='Chương trình phát thanh';
        $data['current']=isset($_GET['page'])?$_GET['page']:'1';
        $data['pagesize']=20;
        $data['count']=chuong_trinh_phat_thanh_count('');
        $data['danhsach']=chuong_trinh_phat_thanh_getByPaging($data['current'],$data['pagesize'],'id desc','');
        $data['PAGING'] = showPagingAtLink($data['count'], $data['pagesize'], $data['current'], '' . SITE_NAME . '/chuong-trinh-phat-thanh/');
        $action='show_chuongtring';
        break;
    case 'tin-bai-phan-anh':
        $title='Tin bài phản ánh';
        $description='Tin bài phản ánh';
        $keyword='Tin bài phản ánh';
        $data['current']=isset($_GET['page'])?$_GET['page']:'1';
        $data['pagesize']=15;
        $data['count']=tin_phan_anh_count('');
        $data['danhsach']=tin_phan_anh_getByPaging($data['current'],$data['pagesize'],'id desc','');
        $data['PAGING'] = showPagingAtLink($data['count'], $data['pagesize'], $data['current'], '' . SITE_NAME . '/tin-bai-phan-anh/');
        $action='show_phananh';
        break;
    default:
        $data['data_danhmuc']=danh_muc_tin_tuc_getByTop(1,'name_url="'.$danh_muc.'"','id desc');
        if(count($data['data_danhmuc'])==0){
            redict(SITE_NAME);
        }
        $dk='danhmuc_id='.$data['data_danhmuc'][0]->id;
        $data['current']=isset($_GET['page'])?$_GET['page']:'1';
        $data['pagesize']=12;
        $data['count']=tintuc_count($dk);
        $data['danhsach']=tintuc_getByPaging($data['current'],$data['pagesize'],'id desc',$dk);
        $data['PAGING'] = showPagingAtLink($data['count'], $data['pagesize'], $data['current'], '' . SITE_NAME . '/'.$data['data_danhmuc'][0]->name_url.'/');
        $title=$data['data_danhmuc'][0]->title;
        $description= $data['data_danhmuc'][0]->keyword;
        $keyword=$data['data_danhmuc'][0]->description;

}
$title=($title)?$title:'daituson.com.vn';
$description=($description)?$description:'daituson.com.vn';
$keywords=($keyword)?$keyword:'daituson.com.vn';

show_header($title,$description,$keywords,$data);
show_menu($data,$danh_muc);
//show_slide($data);
$action($data);
show_right($data);
show_footer($data);
