<?php
/**
 * Created by PhpStorm.
 * User: ductho
 * Date: 11/20/14
 * Time: 11:00 AM
 */
require_once DIR . '/common/class.phpmailer.php';
require_once(DIR . "/common/Mail.php");
$array_files=scandir(DIR.'/model');
foreach ($array_files as $filename) {
    $path = DIR.'/model/' . $filename;
    if (is_file($path)) {
        require_once $path;
    }
}
//
$array_files=scandir(DIR.'/view/default');
foreach ($array_files as $filename) {
    $path = DIR.'/view/default/' . $filename;
    if (is_file($path)) {
        require_once $path;
    }
}
function show_header($title,$description,$keyword,$data1=array())
{
    $data=array();
    $data['Title']=$title;
    $data['Description']=$description;
    $data['Keyword']=$keyword;
    $data['config']=$data1['config'];
    if (isset($data1['link_anh'])) {
        $data['link_anh'] = $data1['link_anh'];
    } else {
        $data['link_anh'] = $data1['config'][0]->banner;
    }
    view_header($data);
}
function show_header2($title,$description,$keyword,$data1=array())
{
    $data=array();
    $data['Title']=$title;
    $data['Description']=$description;
    $data['Keyword']=$keyword;
    $data['config']=$data1['config'];
    $_SESSION['lienhe']=$data['config'][0]->Phone;
    view_header2($data);
}

function  show_slide($data1=array())
{
    $data=array();
    $data['slide']=slide_getByTop('','','position desc');
    view_slide($data);
}

function  show_left($data1=array(),$active='trangchu')
{
    $data=array();
    $data['danhmuc_left']=danhmuc1_getByTop('','id!=1','position asc');
    $data['noibat_left']=sanpham_getByTop(5,'highlights=1','id desc');
    view_left($data);
    booking_table();
}

function  show_left2($data1=array())
{
    $data=array();

    $data['danhmuc1']=$data1['danhmuc1'];
    $data['doitac']=$data1['doitac'];
    $data['sanpham_left']=$data1['sanpham_left'];
    $data['tag']=$data1['tag'];
    view_left2($data);
}
function  show_right($data1=array())
{
    $data=array();
//    $data['ykien']=ykien_getByTop('6','','View desc');
    view_right($data);
}
function show_menu($data1=array(),$active='trangchu')
{
    $data=array();
    $data['config']=$data1['config'];
    $data['active']=$active;
    $data['danhmuc_menu']=danh_muc_tin_tuc_getByTop('','','vi_tri asc');
    view_menu($data);
}

function show_banner($data1=array())
{
    $data=array();
    $data['banner']=$data1['banner'];
    view_banner($data);
}

function show_footer($data1=array())
{
    $data=array();
    $data['config']=$data1['config'];
    view_footer($data);
}

