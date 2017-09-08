<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `zyads_adsipuseragent8`;");
E_C("CREATE TABLE `zyads_adsipuseragent8` (
  `useragent` varchar(1000) default NULL,
  `useragentid` int(10) NOT NULL auto_increment,
  PRIMARY KEY  (`useragentid`),
  KEY `useragent` (`useragent`(500))
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=gbk");
E_D("replace into `zyads_adsipuseragent8` values('Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1','1');");
E_D("replace into `zyads_adsipuseragent8` values('Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.17 (KHTML, like Gecko) Chrome/24.0.1312.57 Safari/537.17','2');");
E_D("replace into `zyads_adsipuseragent8` values('Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.64 Safari/537.31','3');");
E_D("replace into `zyads_adsipuseragent8` values('NokiaX6-00/UCWEB8.8.0.212/50/999','4');");
E_D("replace into `zyads_adsipuseragent8` values('Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; QQDownload 718; SV1; .NET CLR 2.0.50727; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729)','5');");
E_D("replace into `zyads_adsipuseragent8` values('Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0; .NET4.0C; .NET CLR 2.0.50727; .NET CLR 3.0.4506.2152)','6');");
E_D("replace into `zyads_adsipuseragent8` values('Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.3 Safari/537.36','7');");
E_D("replace into `zyads_adsipuseragent8` values('Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1','8');");
E_D("replace into `zyads_adsipuseragent8` values('Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1','9');");
E_D("replace into `zyads_adsipuseragent8` values('Mozilla/5.0 (Windows NT 6.1; rv:19.0) Gecko/20100101 Firefox/19.0','10');");
E_D("replace into `zyads_adsipuseragent8` values('Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Trident/4.0; SE 2.X MetaSr 1.0)','11');");
E_D("replace into `zyads_adsipuseragent8` values('Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Trident/4.0; Sicent; .NET CLR 2.0.50727)','12');");
E_D("replace into `zyads_adsipuseragent8` values('Mozilla/5.0 (iPhone; CPU iPhone OS 5_1_1 like Mac OS X) AppleWebKit/534.46 (KHTML, like Gecko) Version/5.1 Mobile/9B206 Safari/7534.48.3','13');");
E_D("replace into `zyads_adsipuseragent8` values('Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.17 (KHTML, like Gecko) Chrome/24.0.1312.57 Safari/537.17','14');");

require("../../inc/footer.php");
?>