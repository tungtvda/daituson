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
        $asign['link_website'] = print_item('link_web', $data['link_website']);
    }
    $asign['quang_cao_full'] ='';
    if(count($data['quang_cao_top'])>0)
    {
        $asign['quang_cao_full'] = print_item('quang_cao', $data['quang_cao_full']);
    }
    $asign['number']=$data['number'][0]->number;

    $REMOTE_ADDR=$_SERVER['REMOTE_ADDR'];
    $PHP_SELF=$_SERVER['PHP_SELF'];
    $tg=time();
    $tgout=900;
    $tgnew=$tg - $tgout;
    $user_online=new useronline();
    $user_online->tgtmp=$tg;
    $user_online->ip=$REMOTE_ADDR;
    $user_online->local=$PHP_SELF;
    useronline_insert($user_online);
    useronline_delete_check($tgnew);
    $data_user_online=useronline_count('local="'.$PHP_SELF.'"');
//    echo "user online :$user";
    $asign['online']=$data_user_online;
    print_template($asign,'right');
}
