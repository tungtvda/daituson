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
    print_template($asign, 'index');
}



