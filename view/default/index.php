<?php
/**
 * Created by PhpStorm.
 * User: tungtv
 * Date: 11/10/14
 * Time: 2:44 PM
 */
require_once DIR . '/view/default/public.php';
require_once DIR . '/common/cls_fast_template.php';
function show_index($data = array())
{
    $asign = array();
    $asign['tintuc_moi'] ='';
    if(count($data['tintuc_moi'])>0)
    {
        $asign['tintuc_moi'] = print_item('tintuc_item', $data['tintuc_moi']);
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

    $asign['tintuc_noi_bat_phong_su'] ='';
    $asign['tintuc_noi_bat_phong_su_show'] ='display: none';
    if(count($data['tintuc_noi_bat_phong_su'])>0)
    {
        $asign['tintuc_noi_bat_phong_su'] = print_item('danh_muc_tin', $data['tintuc_noi_bat_phong_su']);
        $asign['tintuc_noi_bat_phong_su_show'] ='';
    }

    $asign['tintuc_noi_bat_bai_hat'] ='';
    $asign['tintuc_noi_bat_bai_hat_show'] ='display: none';
    if(count($data['tintuc_noi_bat_bai_hat'])>0)
    {
        $asign['tintuc_noi_bat_bai_hat'] = print_item('danh_muc_tin', $data['tintuc_noi_bat_bai_hat']);
        $asign['tintuc_noi_bat_bai_hat_show'] ='';
    }


    $asign['video_index']='';
    $asign['name_index']=$data['tintuc_noibat'][0]->name;
    if($data['tintuc_noibat'][0]->link_video!=''){
        $asign['video_index']='<iframe width="100%" height="315" src="'.$data['tintuc_noibat'][0]->link_video.'" frameborder="0" allowfullscreen></iframe>';
    }else{
        $asign['video_index']=' <video class="video-js vjs-default-skin" controls="" preload="auto" width="100%" height="600" poster="'.$data['tintuc_noibat'][0]->img.'" data-setup="">
                        <source src="'.$data['tintuc_noibat'][0]->file_mp4.'" type="video/mp4">
                        <p>Mô tả:<br></p>
                    </video>';
    }
    $asign['name_tonghop']=$data['danhmuc_name'][0]->name;
    $asign['name_chinhtri']=$data['danhmuc_name'][1]->name;
    $asign['name_kinhte']=$data['danhmuc_name'][2]->name;
    $asign['name_vanhoa']=$data['danhmuc_name'][3]->name;
    $asign['name_anninh']=$data['danhmuc_name'][4]->name;
    $asign['name_phongsu']=$data['danhmuc_name'][5]->name;
    $asign['name_nghiepvu']=$data['danhmuc_name'][6]->name;
    $asign['name_chonloc']=$data['danhmuc_name'][7]->name;

    $asign['name_tonghop_url']=$data['danhmuc_name'][0]->name_url;
    $asign['name_chinhtri_url']=$data['danhmuc_name'][1]->name_url;
    $asign['name_kinhte_url']=$data['danhmuc_name'][2]->name_url;
    $asign['name_vanhoa_url']=$data['danhmuc_name'][3]->name_url;
    $asign['name_anninh_url']=$data['danhmuc_name'][4]->name_url;
    $asign['name_phongsu_url']=$data['danhmuc_name'][5]->name_url;
    $asign['name_nghiepvu_url']=$data['danhmuc_name'][6]->name_url;
    $asign['name_chonloc_url']=$data['danhmuc_name'][7]->name_url;

    print_template($asign, 'index');
}



