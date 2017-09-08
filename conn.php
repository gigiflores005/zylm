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

/******** Mysql ���� *********/
$GLOBALS['C_MYSQL'] = array(
	'dbhost' => 'localhost',	//������
	'dbport' => '3306',		//���Ӷ˿�
	'dbuser' => 'root',		//���ݿ��û���
	'dbpsw' => 'root',		//���ݿ�����
	'dbname' => 'zygg',		//���ݿ����
	'charset' => 'gbk',		//�����ַ���
	'sqlmode' => '1'		//MYSQL sql-mode���� 0=�ر� 1=���� 
);
$GLOBALS['C_Slave'] = '';

/******** ֧������ ���� *********/
// 1 = ���� 0 = �ر�
$GLOBALS['C_Bank'] = array(
'��������' => array('icbc',1),
'��������' => array('cmbc',0),
'��������' => array('ccb',0),
'ũҵ����' => array('abc',0),
'�й�����' => array('boc',0),
'֧����' => array('alipay',1),
'�Ƹ�ͨ' => array('tenpay',0),
);

/******** ���óߴ��� ���� *********/
$GLOBALS['C_Specs'] = array('950x90','760x90','728x90','468x60','250x60','200x200','160x600','120x240');

/******** �������� *********/
//��Ա��ѯ����ķ���
$GLOBALS['C_MsgType'] = array('�������','���Ͷ��','�ʻ�����','��վ���','����');


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
		die("�޷������ļ�");
	}*/
}
?>