<?php
require_once DIR . '/view/default/public.php';
require_once DIR . '/common/locdautiengviet.php';

function view_menu($data = array())
{
    $asign = array();
    $asign['banner']= $data['config'][0]->banner;
    $asign['name']= $data['config'][0]->name;
    $asign['slide_text']= $data['config'][0]->slide_text;
    $asign['menu']='';
    $asign['trangchu_mn'] = ($data['active'] == 'trangchu') ? 'menuactive current-menu-item' : '';
    $asign['gioithieu_mn'] = ($data['active'] == 'gioithieu') ? 'menuactive current-menu-item' : '';
    $asign['lienhe_mn'] = ($data['active'] == 'lienhe') ? 'menuactive current-menu-item' : '';
    $asign['phatthanh_mn'] = ($data['active'] == 'chuong-trinh-phat-thanh') ? 'menuactive current-menu-item' : '';
    foreach($data['danhmuc_menu'] as $row_menu){
        $active='';
        if($row_menu->name_url==$data['active']){
            $active='menuactive current-menu-item';
        }
        $asign['menu'].='<li class="'.$active.'"> <a href="'.SITE_NAME.'/'.$row_menu->name_url.'/">'.$row_menu->name.'</a></li>';
    }

    print_template($asign, 'menu');
}
