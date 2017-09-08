<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `zyads_adsipuseragent5`;");
E_C("CREATE TABLE `zyads_adsipuseragent5` (
  `useragent` varchar(1000) default NULL,
  `useragentid` int(10) NOT NULL auto_increment,
  PRIMARY KEY  (`useragentid`),
  KEY `useragent` (`useragent`(500))
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=gbk");
E_D("replace into `zyads_adsipuseragent5` values('Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.64 Safari/537.31','1');");
E_D("replace into `zyads_adsipuseragent5` values('Mozilla/5.0 (Windows NT 6.1) AppleWebKit/535.11 (KHTML, like Gecko) Chrome/17.0.963.84 Safari/535.11 SE 2.X MetaSr 1.0','2');");
E_D("replace into `zyads_adsipuseragent5` values('Mozilla/5.0 (Windows NT 5.1; rv:21.0) Gecko/20100101 Firefox/21.0','3');");
E_D("replace into `zyads_adsipuseragent5` values('Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.64 Safari/537.31','4');");
E_D("replace into `zyads_adsipuseragent5` values('Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0; Foxy/2)','5');");
E_D("replace into `zyads_adsipuseragent5` values('Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.17 (KHTML, like Gecko) Chrome/24.0.1312.57 Safari/537.17','6');");
E_D("replace into `zyads_adsipuseragent5` values('Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1','7');");
E_D("replace into `zyads_adsipuseragent5` values('Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Trident/4.0; SE 2.X MetaSr 1.0)','8');");
E_D("replace into `zyads_adsipuseragent5` values('Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/27.0.1453.93 Safari/537.36','9');");
E_D("replace into `zyads_adsipuseragent5` values('Mozilla/5.0 (Windows NT 6.1; rv:21.0) Gecko/20100101 Firefox/21.0','10');");
E_D("replace into `zyads_adsipuseragent5` values('Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)','11');");
E_D("replace into `zyads_adsipuseragent5` values('Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; WOW64; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0)','12');");
E_D("replace into `zyads_adsipuseragent5` values('Mozilla/5.0 (Linux; U; Android 2.3.5; zh-CN; HTC X515d Build/GRJ90) AppleWebKit/534.31 (KHTML, like Gecko) UCBrowser/9.0.1.294 U3/0.8.0 Mobile Safari/534.31','13');");
E_D("replace into `zyads_adsipuseragent5` values('Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Trident/4.0; SV1; .NET CLR 2.0.50727; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729; SE 2.X MetaSr 1.0)','14');");
E_D("replace into `zyads_adsipuseragent5` values('Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0; SV1; .NET CLR 2.0.50727; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729)','15');");
E_D("replace into `zyads_adsipuseragent5` values('Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0; .NET CLR 2.0.50727; AskTbPTV/5.11.3.15590)','16');");
E_D("replace into `zyads_adsipuseragent5` values('Mozilla/5.0 (Windows NT 6.2) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1','17');");
E_D("replace into `zyads_adsipuseragent5` values('Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1','18');");
E_D("replace into `zyads_adsipuseragent5` values('Mozilla/5.0 (Windows NT 6.1; WOW64; rv:21.0) Gecko/20100101 Firefox/21.0','19');");
E_D("replace into `zyads_adsipuseragent5` values('Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; InfoPath.3; SE 2.X MetaSr 1.0)','20');");

require("../../inc/footer.php");
?>