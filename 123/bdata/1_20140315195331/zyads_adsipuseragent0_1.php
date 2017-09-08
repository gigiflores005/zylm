<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `zyads_adsipuseragent0`;");
E_C("CREATE TABLE `zyads_adsipuseragent0` (
  `useragent` varchar(1000) default NULL,
  `useragentid` int(10) NOT NULL auto_increment,
  PRIMARY KEY  (`useragentid`),
  KEY `useragent` (`useragent`(500))
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=gbk");
E_D("replace into `zyads_adsipuseragent0` values('Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; Trident/6.0)','1');");
E_D("replace into `zyads_adsipuseragent0` values('Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0; .NET CLR 2.0.50727)','2');");
E_D("replace into `zyads_adsipuseragent0` values('Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.64 Safari/537.31','3');");
E_D("replace into `zyads_adsipuseragent0` values('Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Trident/4.0; QQDownload 716; Foxy/2; .NET CLR 2.0.50727; SE 2.X MetaSr 1.0)','4');");
E_D("replace into `zyads_adsipuseragent0` values('Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.17 (KHTML, like Gecko) Chrome/24.0.1312.57 Safari/537.17','5');");
E_D("replace into `zyads_adsipuseragent0` values('Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1','6');");
E_D("replace into `zyads_adsipuseragent0` values('Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Trident/4.0; SE 2.X MetaSr 1.0)','7');");
E_D("replace into `zyads_adsipuseragent0` values('Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Trident/4.0; TencentTraveler 4.0)','8');");
E_D("replace into `zyads_adsipuseragent0` values('Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.17 (KHTML, like Gecko) Chrome/24.0.1312.57 Safari/537.17','9');");
E_D("replace into `zyads_adsipuseragent0` values('Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0)','10');");
E_D("replace into `zyads_adsipuseragent0` values('Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.22 (KHTML, like Gecko) Chrome/25.0.1364.97 Safari/537.22','11');");
E_D("replace into `zyads_adsipuseragent0` values('Mozilla/5.0 (Windows NT 6.1; WOW64; rv:21.0) Gecko/20100101 Firefox/21.0','12');");

require("../../inc/footer.php");
?>