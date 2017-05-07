<?php
require_once DIR.'/common/paging.php';
require_once DIR.'/common/cls_fast_template.php';
function view_tintuc($data)
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
    $ft->assign('TABLE-NAME','tintuc');
    $ft->assign('CONTENT-BOX-LEFT',isset($data['content_box_left'])?$data['content_box_left']:'');
    $ft->assign('CONTENT-BOX-RIGHT',isset($data['content_box_right'])?$data['content_box_right']:' ');
    $ft->assign('NOTIFICATION',isset($data['notification'])?$data['notification']:' ');
    $ft->assign('SITE-NAME',isset($data['sitename'])?$data['sitename']:SITE_NAME);
    $ft->assign('FORM',showFrom(isset($data['form'])?$data['form']:'',isset($data['listfkey'])?$data['listfkey']:array()));
    //
    print $ft->parse_and_return('header');
    print $ft->parse_and_return('body');
    print $ft->parse_and_return('footer');
}
//
function showTableHeader()
{
    return '<th>id</th><th>danhmuc_id</th><th>active</th><th>name</th><th>img</th><th>tin_moi</th><th>tin_noi_bat</th><th>created</th>';
}
//
function showTableBody($data)
{
    $TableBody='';
    if(count($data)>0) foreach($data as $obj)
    {
        $TableBody.="<tr><td><input type=\"checkbox\" name=\"check_".$obj->id."\"/></td>";
        $TableBody.="<td>".$obj->id."</td>";
        $TableBody.="<td>".$obj->danhmuc_id."</td>";
        $TableBody.="<td>".$obj->active."</td>";
        $TableBody.="<td>".$obj->name."</td>";
        $TableBody.="<td><img src=\"".$obj->img."\" width=\"50px\" height=\"50px\"/> </td>";
        $TableBody.="<td>".$obj->tin_moi."</td>";
        $TableBody.="<td>".$obj->tin_noi_bat."</td>";
        $TableBody.="<td>".$obj->created."</td>";
        $TableBody.="<td><a href=\"?action=edit&id=".$obj->id."\" title=\"Edit\"><img src=\"".SITE_NAME."/view/admin/Themes/images/pencil.png\" alt=\"Edit\"></a>";
        $TableBody.="<a href=\"?action=delete&id=".$obj->id."\" title=\"Delete\" onClick=\"return confirm('Bạn có chắc chắc muốn xóa?')\"><img src=\"".SITE_NAME."/view/admin/Themes/images/cross.png\" alt=\"Delete\"></a> ";
        $TableBody.="</td>";
        $TableBody.="</tr>";
    }
    return $TableBody;
}
//
function showFrom($form,$ListKey=array())
{
    $str_from='';
    $str_from.='<p><label>danhmuc_id</label>';
    $str_from.='<select name="danhmuc_id">';
    if(isset($ListKey['danhmuc_id']))
    {
        foreach($ListKey['danhmuc_id'] as $key)
        {
            $str_from.='<option value="'.$key->id.'" '.(($form!=false)?(($form->danhmuc_id==$key->id)?'selected':''):'').'>'.$key->name.'</option>';
        }
    }
    $str_from.='</select></p>';
    $str_from.='<p><label>active</label><input  type="checkbox"  name="active" value="1" '.(($form!=false)?(($form->active=='1')?'checked':''):'').' /></p>';
    $str_from.='<p><label>name</label><input class="text-input small-input" type="text"  name="name" value="'.(($form!=false)?$form->name:'').'" /></p>';
    $str_from.='<p><label>name_url</label><input class="text-input small-input" type="text"  name="name_url" value="'.(($form!=false)?$form->name_url:'').'" /></p>';
    $str_from.='<p><label>img</label><input class="text-input small-input" type="text"  name="img" value="'.(($form!=false)?$form->img:'').'"/><a class="button" onclick="openKcEditor(\'img\');">Upload ảnh</a></p>';
    $str_from.='<p><label>tin_moi</label><input  type="checkbox"  name="tin_moi" value="1" '.(($form!=false)?(($form->tin_moi=='1')?'checked':''):'').' /></p>';
    $str_from.='<p><label>tin_noi_bat</label><input  type="checkbox"  name="tin_noi_bat" value="1" '.(($form!=false)?(($form->tin_noi_bat=='1')?'checked':''):'').' /></p>';
    $str_from.='<p><label>link_video</label><input class="text-input small-input" type="text"  name="link_video" value="'.(($form!=false)?$form->link_video:'').'" /></p>';
    $str_from.='<p><label>file_mp4</label><input class="text-input small-input" type="text"  name="file_mp4" value="'.(($form!=false)?$form->file_mp4:'').'"/><a class="button" onclick="openKcEditor(\'file_mp4\');">Upload file mp4</a></p>';
    $str_from.='<p><label>noi_dung</label><textarea name="noi_dung">'.(($form!=false)?$form->noi_dung:'').'</textarea><script type="text/javascript">CKEDITOR.replace(\'noi_dung\'); </script></p>';
    $str_from.='<p><label>title</label><input class="text-input small-input" type="text"  name="title" value="'.(($form!=false)?$form->title:'').'" /></p>';
    $str_from.='<p><label>keyword</label><input class="text-input small-input" type="text"  name="keyword" value="'.(($form!=false)?$form->keyword:'').'" /></p>';
    $str_from.='<p><label>description</label><input class="text-input small-input" type="text"  name="description" value="'.(($form!=false)?$form->description:'').'" /></p>';
    $str_from.='<p><label>created</label><input class="text-input small-input" type="text"  name="created" value="'.(($form!=false)?$form->created:'').'" /></p>';
    return $str_from;
}
