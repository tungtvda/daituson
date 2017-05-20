<?php
/**
 * Created by PhpStorm.
 * User: tungtv
 * Date: 11/10/14
 * Time: 2:44 PM
 */
require_once DIR . '/view/default/public.php';
require_once DIR . '/common/cls_fast_template.php';
function show_chuongtring($data = array())
{
    $asign = array();
    $asign['danhsach'] ='Hệ thống đang cập nhật dữ liệu';
    if(count($data['danhsach'])>0)
    {
        $asign['danhsach'] = print_item('chuongtrinh', $data['danhsach']);
    }
    $asign['PAGING']=$data['PAGING'];
    print_template($asign, 'chuongtrinh');
}



