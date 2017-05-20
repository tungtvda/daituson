<?php
/**
 * Created by PhpStorm.
 * User: tungtv
 * Date: 11/10/14
 * Time: 2:44 PM
 */
require_once DIR . '/view/default/public.php';
require_once DIR . '/common/cls_fast_template.php';
function show_detail($data = array())
{
    $asign = array();
    $html='detail';
    if(isset($data['html'])){
        $html=$data['html'];
        if($data['html']=='detail_chuong_trinh'){
            $asign['file_mp3']=$data['detail'][0]->file_mp3;
            $asign['tintuc_lien_quan'] ='';
            $asign['tintuc_lien_quan_show'] ='display: none';
            if(count($data['tintuc_lien_quan'])>0)
            {
                $asign['tintuc_lien_quan'] = print_item('chuongtrinh', $data['tintuc_lien_quan']);
                $asign['tintuc_lien_quan_show'] ='';
            }
        }else{
            $asign['tintuc_lien_quan'] ='';
            $asign['tintuc_lien_quan_show'] ='display: none';
            if(count($data['tintuc_lien_quan'])>0)
            {
                $asign['tintuc_lien_quan'] = print_item('chuongtrinh', $data['tintuc_lien_quan']);
                $asign['tintuc_lien_quan_show'] ='';
            }
        }

    }else{
        $asign['name_danhmuc']=$data['data_danhmuc'][0]->name;
        $asign['video_index']='';
        if($data['detail'][0]->link_video!=''){
            $asign['video_index']='<iframe width="100%" height="315" src="'.$data['detail'][0]->link_video.'?autoplay=1" atut frameborder="0" allowfullscreen></iframe>';
        }else{
            $asign['video_index']=' <video class="video-js vjs-default-skin" controls="" preload="auto" width="100%" height="600" poster="'.$data['detail'][0]->img.'" data-setup="" autoplay>
                        <source src="'.$data['detail'][0]->file_mp4.'" type="video/mp4">
                        <p>Mô tả:<br></p>
                    </video>';
        }
        $asign['tintuc_moi'] ='';
        if(count($data['tintuc_moi'])>0)
        {
            $asign['tintuc_moi'] = print_item('tintuc_item', $data['tintuc_moi']);
        }
        $asign['tintuc_lien_quan'] ='';
        $asign['tintuc_lien_quan_show'] ='display: none';
        if(count($data['tintuc_lien_quan'])>0)
        {
            $asign['tintuc_lien_quan'] = print_item('tintuc_list_index', $data['tintuc_lien_quan']);
            $asign['tintuc_lien_quan_show'] ='';
        }
        $asign['tintuc_noi_bat_chinh_tri'] ='';
        $asign['tintuc_noi_bat_chinh_tri_show'] ='display: none';
        if(count($data['tintuc_noi_bat_chinh_tri'])>0)
        {
            $asign['tintuc_noi_bat_chinh_tri'] = print_item('tintuc_list_index', $data['tintuc_noi_bat_chinh_tri']);
            $asign['tintuc_noi_bat_chinh_tri_show'] ='';
        }

        $asign['tintuc_noi_bat_tong_hop'] ='';
        $asign['tintuc_noi_bat_tong_hop_show'] ='display: none';
        if(count($data['tintuc_noi_bat_tong_hop'])>0)
        {
            $asign['tintuc_noi_bat_tong_hop'] = print_item('tintuc_list_index', $data['tintuc_noi_bat_tong_hop']);
            $asign['tintuc_noi_bat_tong_hop_show'] ='';
        }
        $asign['tintuc_noi_bat_kinh_te'] ='';
        $asign['tintuc_noi_bat_kinh_te_show'] ='display: none';
        if(count($data['tintuc_noi_bat_kinh_te'])>0)
        {
            $asign['tintuc_noi_bat_kinh_te'] = print_item('tintuc_list_index', $data['tintuc_noi_bat_kinh_te']);
            $asign['tintuc_noi_bat_kinh_te_show'] ='';
        }
        $asign['tintuc_noi_bat_van_hoa'] ='';
        $asign['tintuc_noi_bat_van_hoa_show'] ='display: none';
        if(count($data['tintuc_noi_bat_van_hoa'])>0)
        {
            $asign['tintuc_noi_bat_van_hoa'] = print_item('tintuc_list_index', $data['tintuc_noi_bat_van_hoa']);
            $asign['tintuc_noi_bat_van_hoa_show'] ='';
        }
        $asign['tintuc_noi_bat_an_ninh'] ='';
        $asign['tintuc_noi_bat_an_ninh_show'] ='display: none';
        if(count($data['tintuc_noi_bat_an_ninh'])>0)
        {
            $asign['tintuc_noi_bat_an_ninh'] = print_item('tintuc_list_index', $data['tintuc_noi_bat_an_ninh']);
            $asign['tintuc_noi_bat_an_ninh_show'] ='';
        }

        $asign['tintuc_noi_bat_hoat_dong'] ='';
        $asign['tintuc_noi_bat_hoat_dong_show'] ='display: none';
        if(count($data['tintuc_noi_bat_hoat_dong'])>0)
        {
            $asign['tintuc_noi_bat_hoat_dong'] = print_item('danh_muc_tin', $data['tintuc_noi_bat_hoat_dong']);
            $asign['tintuc_noi_bat_hoat_dong_show'] ='';
        }

        $asign['tintuc_noi_bat_bai_hat'] ='';
        $asign['tintuc_noi_bat_bai_hat_show'] ='display: none';
        if(count($data['tintuc_noi_bat_bai_hat'])>0)
        {
            $asign['tintuc_noi_bat_bai_hat'] = print_item('danh_muc_tin', $data['tintuc_noi_bat_bai_hat']);
            $asign['tintuc_noi_bat_bai_hat_show'] ='';
        }
    }
    $asign['name_index']=$data['detail'][0]->name;
    $asign['noi_dung']=$data['detail'][0]->noi_dung;
    $asign['noi_dung_hidden']='';
    if($asign['noi_dung']==''){
        $asign['noi_dung_hidden']='display: none';

    }

    print_template($asign, $html);
}



