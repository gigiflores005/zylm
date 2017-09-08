<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `zyads_adsipuseragent7`;");
E_C("CREATE TABLE `zyads_adsipuseragent7` (
  `useragent` varchar(1000) default NULL,
  `useragentid` int(10) NOT NULL auto_increment,
  PRIMARY KEY  (`useragentid`),
  KEY `useragent` (`useragent`(500))
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=gbk");
E_D("replace into `zyads_adsipuseragent7` values('Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.64 Safari/537.31','1');");
E_D("replace into `zyads_adsipuseragent7` values('Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)','2');");
E_D("replace into `zyads_adsipuseragent7` values('Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.17 (KHTML, like Gecko) Chrome/24.0.1312.57 Safari/537.17','3');");
E_D("replace into `zyads_adsipuseragent7` values('Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Trident/4.0; .NET CLR 2.0.50727; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729; SE 2.X MetaSr 1.0)','4');");
E_D("replace into `zyads_adsipuseragent7` values('Mozilla/5.0 (Windows NT 5.1; rv:21.0) Gecko/20100101 Firefox/21.0','5');");
E_D("replace into `zyads_adsipuseragent7` values('Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.17 (KHTML, like Gecko) Chrome/24.0.1312.57 Safari/537.17 SE 2.X MetaSr 1.0','6');");
E_D("replace into `zyads_adsipuseragent7` values('Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/27.0.1453.94 Safari/537.36','7');");
E_D("replace into `zyads_adsipuseragent7` values('Mozilla/5.0 (iPad; CPU OS 6_1_3 like Mac OS X) BaiduHD 2.1.0 AppleWebKit/534.46 (KHTML, like Gecko) Mobile/9B176','8');");
E_D("replace into `zyads_adsipuseragent7` values('Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Trident/4.0; QQDownload 732; BRI/2; .NET4.0C; .NET4.0E; .NET CLR 2.0.50727; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729)','9');");
E_D("replace into `zyads_adsipuseragent7` values('Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0)','10');");
E_D("replace into `zyads_adsipuseragent7` values('Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; Trident/4.0; Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1) ; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; CIBA; Tablet PC 2.0; SE 2.X MetaSr 1.0)','11');");
E_D("replace into `zyads_adsipuseragent7` values('Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/4.0; GTB7.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; .NET4.0C; .NET4.0E; SE 2.X MetaSr 1.0)','12');");
E_D("replace into `zyads_adsipuseragent7` values('Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Win64; x64; Trident/4.0; .NET CLR 2.0.50727; SLCC2; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; .NET4.0C; .NET4.0E; Tablet PC 2.0)','13');");
E_D("replace into `zyads_adsipuseragent7` values('Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/6.0; QQBrowser/7.3.8581.400)','14');");
E_D("replace into `zyads_adsipuseragent7` values('Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 2.0.50727; SE 2.X MetaSr 1.0)','15');");
E_D("replace into `zyads_adsipuseragent7` values('Mozilla/5.0 (Linux; U; Android 4.1.1; zh-cn; MI 2C Build/JRO03L) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 Mobile Safari/534.30; 360browser(securitypay,securityinstalled) uppay; 360 Aphone Browser (4.6.1)','16');");

require("../../inc/footer.php");
?>