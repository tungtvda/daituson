<?php

/**
 * @author vdbkpro
 * @copyright 2013
 */
define("SITE_NAME", "http://localhost/daituson");
define("DIR", dirname(__FILE__));
define('SERVER','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','daituson');
define('CACHE',false);
define('DATETIME_FORMAT',"y-m-d H:i:s");
define('PRIVATE_KEY','hoidinhnvbk');
session_start();
require_once DIR.'/common/minifi.output.php';
ob_start("minify_output");
require_once DIR.'/model/truy_capService.php';
$data_count=truy_cap_getById(1);
$number=$data_count[0]->number+1;
$data_update['id']=1;
$data_update['number']=$number;
$data_update=new truy_cap($data_update);
truy_cap_update($data_update);
