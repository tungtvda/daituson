<?php
/**
 * Created by PhpStorm.
 * User: ductho
 * Date: 8/15/14
 * Time: 3:43 PM
 */
require_once DIR.'/view/default/public.php';
function view_footer($data=array())
{
    $asign=array();
    $asign['giay_phep']=$data['config'][0]->giay_phep;
    $asign['trach_nhiem_chinh']=$data['config'][0]->trach_nhiem_chinh;
    $asign['trach_nhiem_noi_dung']=$data['config'][0]->trach_nhiem_noi_dung;
    $asign['tru_so']=$data['config'][0]->tru_so;
    $asign['dien_thoai']=$data['config'][0]->dien_thoai;
    $asign['fax']=$data['config'][0]->fax;
    $asign['email']=$data['config'][0]->email;
    print_template($asign,'footer');
}
