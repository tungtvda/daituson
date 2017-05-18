<?php
/**
 * Created by PhpStorm.
 * User: ductho
 * Date: 8/15/14
 * Time: 3:43 PM
 */
require_once DIR . '/view/default/public.php';
function view_right($data=array())
{
    $asign=array();
    $asign['phat_thanh_left'] ='';
    if(count($data['phat_thanh_left'])>0)
    {
        $asign['phat_thanh_left'] = print_item('tintuc_item', $data['phat_thanh_left']);
    }

    $asign['quang_cao_top'] ='';
    if(count($data['quang_cao_top'])>0)
    {
        $asign['quang_cao_top'] = print_item('quang_cao', $data['quang_cao_top']);
    }

    $asign['quang_cao_bottom'] ='';
    if(count($data['quang_cao_bottom'])>0)
    {
        $asign['quang_cao_bottom'] = print_item('quang_cao', $data['quang_cao_bottom']);
    }

    $asign['phan_anh_left'] ='';
    if(count($data['phan_anh_left'])>0)
    {
        $asign['phan_anh_left'] = print_item('phan_anh_left', $data['phan_anh_left']);
    }

    $asign['link_website'] ='';
    if(count($data['link_website'])>0)
    {
        $asign['link_website'] = print_item('tintuc_item', $data['link_website']);
    }
    $asign['quang_cao_full'] ='';
    if(count($data['quang_cao_top'])>0)
    {
        $asign['quang_cao_full'] = print_item('quang_cao', $data['quang_cao_full']);
    }
    $asign['number']=$data['number'][0]->number;
    print_template($asign,'right');
}
