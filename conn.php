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
$Id: config.php 30 2009-08-10 07:14:27Z jian@zyiis.com $
*/
//ini_set('display_errors', 'On');
//error_reporting(E_ALL &~E_NOTICE);
error_reporting(0);
set_magic_quotes_runtime(0);
date_default_timezone_set("prc");
define('IN_ZYADS', TRUE);
define('LIB_DIR', dirname(__FILE__).'/lib');
define('APP_DIR', dirname(__FILE__).'/app');
define('WWW_DIR', dirname(__FILE__));
require WWW_DIR . '/settings.php';
define('TIMES',time());
define('DATETIMES', date("Y-m-d H:i:s", TIMES));
define('DAYS',date('Y-m-d', TIMES));
define('UI','UI');

/******** Mysql 配置 *********/
$GLOBALS['C_MYSQL'] = array(
	'dbhost' => 'localhost',	//主机名
	'dbport' => '3306',		//连接端口
	'dbuser' => 'root',		//数据库用户名
	'dbpsw' => 'root',		//数据库密码
	'dbname' => 'zygg',		//数据库表名
	'charset' => 'gbk',		//连接字符集
	'sqlmode' => '1'		//MYSQL sql-mode开关 0=关闭 1=开启 
);
$GLOBALS['C_Slave'] = '';

/******** 支持银行 配置 *********/
// 1 = 开启 0 = 关闭
$GLOBALS['C_Bank'] = array(
'工商银行' => array('icbc',1),
'招商银行' => array('cmbc',0),
'建设银行' => array('ccb',0),
'农业银行' => array('abc',0),
'中国银行' => array('boc',0),
'支付宝' => array('alipay',1),
'财付通' => array('tenpay',0),
);

/******** 常用尺寸规格 配置 *********/
$GLOBALS['C_Specs'] = array('950x90','760x90','728x90','468x60','250x60','200x200','160x600','120x240');

/******** 问题类型 *********/
//会员咨询问题的分类
$GLOBALS['C_MsgType'] = array('财务结算','广告投放','帐户更改','网站审核','其它');


/*****************************/
function gC(){
	static $dbo;
	if (is_null($dbo)) {
		require_once LIB_DIR."/db/mysqlclass.php";
		$dbo = new Db_MysqlClass($GLOBALS['C_MYSQL'],$GLOBALS['C_Slave']);
		if ($GLOBALS['C_ZYIIS']['db_ms'] =='1'){
			$dbo->masterslave = 1;
		}
	}
	return $dbo;
}
function zAddslashes(&$value){
	return str_replace(array('"',"'"),array('&quot;','&#39;'),addslashes($value));
}
function InstallLicense(){
	/*$zl = zend_loader_install_license(WWW_DIR."/zyiis.zl");
	if (!$zl) {
		die("无法加载文件");
	}*/
}
?>