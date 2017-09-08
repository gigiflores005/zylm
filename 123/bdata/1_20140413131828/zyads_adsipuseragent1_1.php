<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `zyads_adsipuseragent1`;");
E_C("CREATE TABLE `zyads_adsipuseragent1` (
  `useragent` varchar(1000) default NULL,
  `useragentid` int(10) NOT NULL auto_increment,
  PRIMARY KEY  (`useragentid`),
  KEY `useragent` (`useragent`(500))
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=gbk");
E_D("replace into `zyads_adsipuseragent1` values('Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1','1');");
E_D("replace into `zyads_adsipuseragent1` values('Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.17 (KHTML, like Gecko) Chrome/24.0.1312.57 Safari/537.17','2');");
E_D("replace into `zyads_adsipuseragent1` values('Mozilla/4.0 (Compatible win32 67.70.209.170; MSIE 8.0; Windows NT 5.1; Trident/4.0; .NET CLR 2.0.50727; .NET CLR 3.0.04506.648; .NET CLR 3.5.21022; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729; .NET4.0C; .NET4.0E; KB974488)','3');");
E_D("replace into `zyads_adsipuseragent1` values('Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0)','4');");
E_D("replace into `zyads_adsipuseragent1` values('Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)','5');");
E_D("replace into `zyads_adsipuseragent1` values('Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.17 (KHTML, like Gecko) Chrome/24.0.1312.57 Safari/537.17','6');");
E_D("replace into `zyads_adsipuseragent1` values('Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1','7');");
E_D("replace into `zyads_adsipuseragent1` values('Mozilla/4.0 (Windows; U; Windows NT 5.1; zh-TW; rv:1.9.0.11)','8');");
E_D("replace into `zyads_adsipuseragent1` values('Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.97 Safari/537.11','9');");
E_D("replace into `zyads_adsipuseragent1` values('Mozilla/5.0 (Windows NT 5.2) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1','10');");
E_D("replace into `zyads_adsipuseragent1` values('Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; KB974488; SE 2.X MetaSr 1.0)','11');");
E_D("replace into `zyads_adsipuseragent1` values('Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E; MDDC; Media Center PC 6.0; SE 2.X MetaSr 1.0)','12');");
E_D("replace into `zyads_adsipuseragent1` values('Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0; SV1; Alexa Toolbar)','13');");

require("../../inc/footer.php");
?>