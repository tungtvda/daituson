<?php
/**
 * Created by JetBrains PhpStorm.
 * User: nguyenvietdinh
 * Date: 2/6/14
 * Time: 3:51 PM
 * To change this template use File | Settings | File Templates.
 */
require_once DIR.'/common/cls_fast_template.php';
require_once DIR.'/common/locdautiengviet.php';
require_once DIR . '/common/redict.php';
function print_template($data=array(),$tem)
{
    $ft=new FastTemplate(DIR.'/view/default/template');
    $ft->define($tem,$tem.'.tpl');
    $ft->assign('SITE-NAME',SITE_NAME);
    if(count($data)>0)
    {
        $keys=array_keys($data);
        foreach($keys as $item)
        {
            $ft->assign($item,$data[$item]);
        }
    }
    print $ft->parse_and_return($tem);
}

function print_item($file,$ListItem,$LocDau=false,$LocDauAssign=false,$numberformat=false)
{
    if(count($ListItem)>0)
    {
        $array_var=get_object_vars($ListItem[0]);
        $var_name_array=array_keys($array_var);
        $result='';
        $ft=new FastTemplate(DIR.'/view/default/template/item');
        $ft->define('item',$file.'.tpl');
        $ft->assign('SITE-NAME',SITE_NAME);
        $dem=1;
        foreach($ListItem as $item)
        {

            foreach($var_name_array as $var)
            {
                if($LocDau!=false)
                {
                    if($LocDau==$var)
                    {
                        $ft->assign($LocDauAssign,LocDau($item->$var));
                    }
                }

                if($numberformat!=false)
                {
                    if($numberformat==$var)
                    {
                        $ft->assign($var,number_format($item->$var,0,'.','.'));
                    }
                    else
                    {
                        $ft->assign($var,$item->$var);
                    }
                }
                else
                {
                    $ft->assign($var,$item->$var);
                }
            }


            if(get_class($item)=='tintuc')
            {
                $data_dm=danh_muc_tin_tuc_getById($item->danhmuc_id);
                if(count($data_dm)==0){
                    redict(SITE_NAME);
                }
                $ft->assign('right','');
                if($dem%2==0){
                    $ft->assign('right','loop-right');
                }
                $ft->assign('link',link_news($item,$data_dm[0]->name_url));
            }
            if(get_class($item)=='chuong_trinh_phat_thanh')
            {
                $ft->assign('link',link_phat_thanh($item));
            }

            if(get_class($item)=='tin_phan_anh')
            {
                $ft->assign('link',link_phan_anh($item));
                $content=$item->noi_dung;
                if (strlen($content) > 300) {
                    $ten1=strip_tags($content);

                    $ten = substr($ten1, 0, 300);
                    $name = substr($ten, 0, strrpos($ten, ' ')) . "...";
                    $ft->assign('noi_dung',$name);
                } else {
                    $ft->assign('noi_dung',strip_tags($content));
                }
                $created = date("d-m-Y", strtotime($item->created));
                $ft->assign('created',strip_tags($created));
            }
            $dem=$dem+1;
            $result.=$ft->parse_and_return('item');
        }
        return $result;
    }
    else
    {
        return '';
    }

}


function link_news($app,$name_url)
{
    return SITE_NAME.'/'.$name_url.'/'.$app->name_url.'.html';
}

function link_phat_thanh($app)
{
    return SITE_NAME.'/chuong-trinh-phat-thanh/'.$app->name_url.'.html';
}
function link_phan_anh($app)
{
    return SITE_NAME.'/tin-bai-phan-anh/'.$app->name_url.'.html';
}
