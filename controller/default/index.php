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

$title=$data['config'][0]->title;
$description= $data['config'][0]->keyword;
$keyword=$data['config'][0]->description;
$title=($title)?$title:'daituson.com.vn';
$description=($description)?$description:'daituson.com.vn';
$keywords=($keyword)?$keyword:'daituson.com.vn';

show_header($title,$description,$keywords,$data);
show_menu($data,'trangchu');
//show_slide($data);
show_index($data);
//show_footer($data);
