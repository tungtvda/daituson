<?php
require_once DIR.'/common/paging.php';
require_once DIR.'/common/cls_fast_template.php';
function view_config($data)
{
    $ft=new FastTemplate(DIR.'/view/admin/templates');
    $ft->define('header','header.tpl');
    $ft->define('body','body.tpl');
    $ft->define('footer','footer.tpl');
    //
    $ft->assign('TAB1-CLASS',isset($data['tab1_class'])?$data['tab1_class']:'');
    $ft->assign('TAB2-CLASS',isset($data['tab2_class'])?$data['tab2_class']:'');
    $ft->assign('USER-NAME',isset($data['username'])?$data['username']:'');
    $ft->assign('NOTIFICATION-CONTENT',isset($data['notififation_content'])?$data['notififation_content']:'');
    $ft->assign('TABLE-HEADER',showTableHeader());
    $ft->assign('PAGING',showPaging($data['count_paging'],20,$data['page']));
    $ft->assign('TABLE-BODY',showTableBody($data['table_body']));
    $ft->assign('TABLE-NAME','Cấu hình hệ thống');
    $ft->assign('CONTENT-BOX-LEFT',isset($data['content_box_left'])?$data['content_box_left']:'');
    $ft->assign('CONTENT-BOX-RIGHT',isset($data['content_box_right'])?$data['content_box_right']:' ');
    $ft->assign('NOTIFICATION',isset($data['notification'])?$data['notification']:' ');
    $ft->assign('SITE-NAME',isset($data['sitename'])?$data['sitename']:SITE_NAME);
    $ft->assign('kichhoat_config', 'active');
    $ft->assign('FORM',showFrom(isset($data['form'])?$data['form']:'',isset($data['listfkey'])?$data['listfkey']:array()));
    //
    print $ft->parse_and_return('header');
    print $ft->parse_and_return('body');
    print $ft->parse_and_return('footer');
}
//
function showTableHeader()
{
    return '<th>banner</th><th>icon</th><th>Tên</th><th>Điện thoại</th><th>fax</th><th>email</th><th>Trụ sở</th>';
}
//
function showTableBody($data)
{
    $TableBody='';
    if(count($data)>0) foreach($data as $obj)
    {
        $TableBody.="<tr><td><input type=\"checkbox\" name=\"check_".$obj->Id."\"/></td>";
        $TableBody.="<td><img src=\"".$obj->banner."\" width=\"50px\" height=\"50px\"/> </td>";
        $TableBody.="<td><img src=\"".$obj->icon."\" width=\"50px\" height=\"50px\"/> </td>";
        $TableBody.="<td>".$obj->name."</td>";
        $TableBody.="<td>".$obj->dien_thoai."</td>";
        $TableBody.="<td>".$obj->fax."</td>";
        $TableBody.="<td>".$obj->email."</td>";
        $TableBody.="<td>".$obj->tru_so."</td>";
        $TableBody.="<td><a href=\"?action=edit&Id=".$obj->Id."\" title=\"Edit\"><img src=\"".SITE_NAME."/view/admin/Themes/images/pencil.png\" alt=\"Edit\"></a>";
        $TableBody.="</td>";
        $TableBody.="</tr>";
    }
    return $TableBody;
}
//
function showFrom($form,$ListKey=array())
{
    $str_from='';
    $str_from.='<p><label>banner</label><input class="text-input small-input" type="text"  name="banner" value="'.(($form!=false)?$form->banner:'').'"/><a class="button" onclick="openKcEditor(\'banner\');">Upload ảnh</a></p>';
    $str_from.='<p><label>icon</label><input class="text-input small-input" type="text"  name="icon" value="'.(($form!=false)?$form->icon:'').'"/><a class="button" onclick="openKcEditor(\'icon\');">Upload ảnh</a></p>';
    $str_from.='<p><label>Tên</label><input class="text-input small-input" type="text"  name="name" value="'.(($form!=false)?$form->name:'').'" /></p>';
    $str_from.='<p><label>Điện thoại</label><input class="text-input small-input" type="text"  name="dien_thoai" value="'.(($form!=false)?$form->dien_thoai:'').'" /></p>';
    $str_from.='<p><label>fax</label><input class="text-input small-input" type="text"  name="fax" value="'.(($form!=false)?$form->fax:'').'" /></p>';
    $str_from.='<p><label>email</label><input class="text-input small-input" type="text"  name="email" value="'.(($form!=false)?$form->email:'').'" /></p>';
    $str_from.='<p><label>Trụ sở</label><input class="text-input small-input" type="text"  name="tru_so" value="'.(($form!=false)?$form->tru_so:'').'" /></p>';
    $str_from.='<p><label>Giấy phép</label><input class="text-input small-input" type="text"  name="giay_phep" value="'.(($form!=false)?$form->giay_phep:'').'" /></p>';
    $str_from.='<p><label>Trách nhiệm chính</label><input class="text-input small-input" type="text"  name="trach_nhiem_chinh" value="'.(($form!=false)?$form->trach_nhiem_chinh:'').'" /></p>';
    $str_from.='<p><label>Trách nhiệm nội dung</label><input class="text-input small-input" type="text"  name="trach_nhiem_noi_dung" value="'.(($form!=false)?$form->trach_nhiem_noi_dung:'').'" /></p>';
    $str_from.='<p><label>Slide text</label><textarea style="width: 100%" name="slide_text">'.(($form!=false)?$form->slide_text:'').'</textarea></p>';
    $str_from.='<p><label>Giới thiệu</label><textarea name="gioi_thieu">'.(($form!=false)?$form->gioi_thieu:'').'</textarea><script type="text/javascript">CKEDITOR.replace(\'gioi_thieu\'); </script></p>';
    $str_from.='<p><label>title</label><input class="text-input small-input" type="text"  name="title" value="'.(($form!=false)?$form->title:'').'" /></p>';
    $str_from.='<p><label>keyword</label><input class="text-input small-input" type="text"  name="keyword" value="'.(($form!=false)?$form->keyword:'').'" /></p>';
    $str_from.='<p><label>description</label><input class="text-input small-input" type="text"  name="description" value="'.(($form!=false)?$form->description:'').'" /></p>';
    return $str_from;
}
