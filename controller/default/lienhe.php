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
require_once DIR . '/common/class.phpmailer.php';
require_once(DIR . "/common/Mail.php");
$data['config']=config_getByTop(1,'','');

$title='Liên hệ';
$description= 'Liên hệ';
$keyword='Liên hệ';
$title=($title)?$title:'daituson.com.vn';
$description=($description)?$description:'daituson.com.vn';
$keywords=($keyword)?$keyword:'daituson.com.vn';

show_header($title,$description,$keywords,$data);
show_menu($data,'lienhe');
//show_slide($data);
show_lienhe($data);
show_right($data);
show_footer($data);
