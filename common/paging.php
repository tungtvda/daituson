<?php

/**
 * @author vdbkpro
 * @copyright 2013
 */

function showPaging($countRecord,$PageSize,$currentPage,$dk_pt='')
{
    $result="";
    if($PageSize>=$countRecord) return $result;
    if($currentPage!=1)
    {
        $result=$result."<a class=\"phantrang\" href=\"?page=1".$dk_pt."\" title=\"First Page\"> First</a><a class=\"phantrang\" href=\"?page=".($currentPage-1)."".$dk_pt."\" title=\"Previous Page\"> Previous</a>";
    }
    for($i=1;$i<=($countRecord/$PageSize+1);$i++)
    {
		if($i==$currentPage) $result=$result."<a href=\"?page=".$i."".$dk_pt."\" class=\"phantrang number kichhoat\" title=\"".$i."\">".$i."</a>";
        else
        {
            $result=$result."<a class=\"phantrang\" href=\"?page=".$i."".$dk_pt."\" class=\"number \" title=\"".$i."\">".$i."</a>";
        }
        
    }
    if($currentPage!=intval($countRecord/$PageSize+1))
    {
        $result=$result."<a class=\"phantrang\" href=\"?page=".($currentPage+1)."".$dk_pt."\" title=\"Next Page\">Next </a><a class=\"phantrang\" href=".$dk_pt."\"?page=".intval($countRecord/$PageSize+1)."".$dk_pt."\" title=\"Last Page\">Last </a>";
    }
    return $result;
}

function showPagingAtLink($countRecord,$PageSize,$currentPage,$Link)
{
    $result="";
    if($PageSize>=$countRecord) return $result;
    if($currentPage!=1)
    {
        $result=$result."<li><a class=\"page-numbers\" href=\"".$Link."trang-1\" title=\"First Page\"> <<</a></li><li class='prev'><a class=\"page-numbers\" href=\"".$Link."trang-".($currentPage-1)."\" title=\"Previous Page\"> «</a></li>";
    }
    for($i=1;$i<=($countRecord/$PageSize+1);$i++)
    {
        if($i==$currentPage) $result=$result."<li ><span class=\"page-numbers current\">".$i."</span></li>";
        else
        {
            $result=$result."<li><a class=\"page-numbers\" href=\"".$Link."trang-".$i."\" class=\"number \" title=\"".$i."\">".$i."</a></li>";
        }

    }
    if($currentPage!=intval($countRecord/$PageSize+1))
    {
        $result=$result."<li class='next'><a class=\"page-numbers\" href=\"".$Link."trang-".($currentPage+1)."\" title=\"Next Page\">»</a></li><li><a class=\"page-numbers\" href=\"".$Link."trang-".intval($countRecord/$PageSize+1)."\" title=\"Last Page\">>> </a></li>";
    }
    return $result;
}
function showPagingPart($count,$currentPage,$Link)
{
    $result="";
    if($count<2) return $result;
    if($currentPage!=1)
    {
        $result=$result."<li><a href=\"".$Link."-page-1\" title=\"First Page\"> First</a></li><li><a href=\"".$Link."-page-".($currentPage-1)."\" title=\"Previous Page\"> Previous</a></li>";
    }
    for($i=1;$i<=$count;$i++)
    {
        if($i==$currentPage) $result=$result."<li><a href=\"".$Link."-page-".$i."\" class=\"number current\" title=\"".$i."\">".$i."</a></li>";
        else
        {
            $result=$result."<li><a href=\"".$Link."-page-".$i."\" class=\"number \" title=\"".$i."\">".$i."</a></li>";
        }

    }
    if($currentPage!=$count)
    {
        $result=$result."<li><a href=\"".$Link."-page-".($currentPage+1)."\" title=\"Next Page\">Next </a></li><li><a href=\"".$Link."-page-".$count."\" title=\"Last Page\">Last </a></li>";
    }
    return $result;
}
?>