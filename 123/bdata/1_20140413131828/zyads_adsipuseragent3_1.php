<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `zyads_adsipuseragent3`;");
E_C("CREATE TABLE `zyads_adsipuseragent3` (
  `useragent` varchar(1000) default NULL,
  `useragentid` int(10) NOT NULL auto_increment,
  PRIMARY KEY  (`useragentid`),
  KEY `useragent` (`useragent`(500))
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=gbk");
E_D("replace into `zyads_adsipuseragent3` values('Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1','1');");
E_D("replace into `zyads_adsipuseragent3` values('Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.43 Safari/537.31','2');");
E_D("replace into `zyads_adsipuseragent3` values('Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0; .NET4.0C; .NET CLR 2.0.50727)','3');");
E_D("replace into `zyads_adsipuseragent3` values('Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1','4');");
E_D("replace into `zyads_adsipuseragent3` values('Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1478.0 Safari/537.36','5');");
E_D("replace into `zyads_adsipuseragent3` values('Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0)','6');");
E_D("replace into `zyads_adsipuseragent3` values('Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1','7');");
E_D("replace into `zyads_adsipuseragent3` values('Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.64 Safari/537.31','8');");
E_D("replace into `zyads_adsipuseragent3` values('Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0)','9');");
E_D("replace into `zyads_adsipuseragent3` values('Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/27.0.1453.93 Safari/537.36','10');");
E_D("replace into `zyads_adsipuseragent3` values('Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0)','11');");
E_D("replace into `zyads_adsipuseragent3` values('Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)','12');");

require("../../inc/footer.php");
?>