<?php
/*
+---------------------------------------------------------------------------+
| ZYIIS.COM                                                                 |
| ==========                                                                |
|                                                                           |
| Copyright (c) 2005-2009 Zyiis Limited                                     |
| For contact details, see: http://www.zyiis.com/                           |
|                                                                           |
+---------------------------------------------------------------------------+
$Id: index.php 23 2010-08-18 07:25:27Z Administrator $
*/
define('ZYIIS_VERSIONS', '7.0');
define('CONTROLLER_NAME','install');
define('DS', DIRECTORY_SEPARATOR);
define("INSTALL",true);
require '../config.php';
InstallLicense();
define('P_TPL',WWW_DIR.'/templates/');
define('Z_TPL','install');
define('TPL_DIR',P_TPL.Z_TPL);
$action = $_GET['action'];
if(!$action){require TPL_DIR . '/default.php';die;};
if($action=='check'){require TPL_DIR . '/checks.php';die;};
require LIB_DIR . '/z.php';
require APP_DIR . '/zyiis-app.php';
Z::import(APP_DIR);
Zyiis::start()->run(); 
?>

