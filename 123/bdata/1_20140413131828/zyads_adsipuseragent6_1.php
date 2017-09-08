<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `zyads_adsipuseragent6`;");
E_C("CREATE TABLE `zyads_adsipuseragent6` (
  `useragent` varchar(1000) default NULL,
  `useragentid` int(10) NOT NULL auto_increment,
  PRIMARY KEY  (`useragentid`),
  KEY `useragent` (`useragent`(500))
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=gbk");
E_D("replace into `zyads_adsipuseragent6` values('Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; QQBrowser/7.3.8581.400)','1');");
E_D("replace into `zyads_adsipuseragent6` values('Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Trident/4.0)','2');");
E_D("replace into `zyads_adsipuseragent6` values('Mozilla/5.0 (Windows NT 5.2) AppleWebKit/536.11 (KHTML, like Gecko) Chrome/20.0.1132.11 TaoBrowser/3.1 Safari/536.11','3');");
E_D("replace into `zyads_adsipuseragent6` values('Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1','4');");
E_D("replace into `zyads_adsipuseragent6` values('Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0)','5');");
E_D("replace into `zyads_adsipuseragent6` values('Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/6.0; qihu theworld)','6');");
E_D("replace into `zyads_adsipuseragent6` values('Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0; QQBrowser/7.3.8126.400)','7');");
E_D("replace into `zyads_adsipuseragent6` values('Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 2.0.50727; SE 2.X MetaSr 1.0)','8');");
E_D("replace into `zyads_adsipuseragent6` values('Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0)','9');");
E_D("replace into `zyads_adsipuseragent6` values('Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.17 (KHTML, like Gecko) Chrome/24.0.1312.57 Safari/537.17','10');");
E_D("replace into `zyads_adsipuseragent6` values('Mozilla/5.0 (Windows NT 5.1; rv:19.0) Gecko/20100101 Firefox/19.0','11');");
E_D("replace into `zyads_adsipuseragent6` values('Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0; znwb6500)','12');");
E_D("replace into `zyads_adsipuseragent6` values('Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1','13');");

require("../../inc/footer.php");
?>