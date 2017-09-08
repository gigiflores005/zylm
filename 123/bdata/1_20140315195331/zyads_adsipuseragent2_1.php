<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `zyads_adsipuseragent2`;");
E_C("CREATE TABLE `zyads_adsipuseragent2` (
  `useragent` varchar(1000) default NULL,
  `useragentid` int(10) NOT NULL auto_increment,
  PRIMARY KEY  (`useragentid`),
  KEY `useragent` (`useragent`(500))
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=gbk");
E_D("replace into `zyads_adsipuseragent2` values('Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/27.0.1453.94 Safari/537.36','1');");
E_D("replace into `zyads_adsipuseragent2` values('Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1','2');");
E_D("replace into `zyads_adsipuseragent2` values('Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1','3');");
E_D("replace into `zyads_adsipuseragent2` values('Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 2.0.50727; LBBROWSER)','4');");
E_D("replace into `zyads_adsipuseragent2` values('Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.1 (KHTML, like Gecko) Maxthon/4.0.6.2000 Chrome/26.0.1410.43 Safari/537.1','5');");
E_D("replace into `zyads_adsipuseragent2` values('Mozilla/5.0 (Windows NT 5.1; rv:21.0) Gecko/20100101 Firefox/21.0','6');");
E_D("replace into `zyads_adsipuseragent2` values('Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Trident/4.0; @CkbhU*-928:A*yfye+UC9`Z1qh,+IKM~{QZ+K; SV1; SE 2.X MetaSr 1.0)','7');");
E_D("replace into `zyads_adsipuseragent2` values('Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; .NET4.0C; .NET4.0E; Alexa Toolbar)','8');");
E_D("replace into `zyads_adsipuseragent2` values('Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0) LBBROWSER','9');");
E_D("replace into `zyads_adsipuseragent2` values('Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0)','10');");
E_D("replace into `zyads_adsipuseragent2` values('Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.92 Safari/537.1 LBBROWSER','11');");
E_D("replace into `zyads_adsipuseragent2` values('Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Trident/4.0; QQDownload 732; BRI/2; .NET4.0C; .NET4.0E; .NET CLR 2.0.50727; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729)','12');");
E_D("replace into `zyads_adsipuseragent2` values('Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0)','13');");
E_D("replace into `zyads_adsipuseragent2` values('Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.17 (KHTML, like Gecko) Chrome/24.0.1312.57 Safari/537.17','14');");
E_D("replace into `zyads_adsipuseragent2` values('Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.64 Safari/537.31','15');");
E_D("replace into `zyads_adsipuseragent2` values('Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.17 (KHTML, like Gecko) Chrome/24.0.1312.52 Safari/537.17','16');");
E_D("replace into `zyads_adsipuseragent2` values('Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.64 Safari/537.31 AlexaToolbar/alxg-3.1','17');");
E_D("replace into `zyads_adsipuseragent2` values('Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1','18');");
E_D("replace into `zyads_adsipuseragent2` values('Mozilla/5.0 (Windows NT 6.2) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1','19');");
E_D("replace into `zyads_adsipuseragent2` values('Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0; .NET CLR 2.0.50727)','20');");

require("../../inc/footer.php");
?>