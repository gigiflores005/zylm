<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `zyads_adsipuseragent9`;");
E_C("CREATE TABLE `zyads_adsipuseragent9` (
  `useragent` varchar(1000) default NULL,
  `useragentid` int(10) NOT NULL auto_increment,
  PRIMARY KEY  (`useragentid`),
  KEY `useragent` (`useragent`(500))
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=gbk");
E_D("replace into `zyads_adsipuseragent9` values('Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; SE 2.X MetaSr 1.0)','1');");
E_D("replace into `zyads_adsipuseragent9` values('Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1','2');");
E_D("replace into `zyads_adsipuseragent9` values('JUC (Linux; U; 2.2.1; zh-cn; MB525; 480*854) UCWEB7.9.0.94/139/800','3');");
E_D("replace into `zyads_adsipuseragent9` values('Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/27.0.1453.94 Safari/537.36','4');");
E_D("replace into `zyads_adsipuseragent9` values('Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E; SE 2.X MetaSr 1.0)','5');");
E_D("replace into `zyads_adsipuseragent9` values('Mozilla/5.0 (Windows NT 5.1; rv:21.0) Gecko/20100101 Firefox/21.0','6');");
E_D("replace into `zyads_adsipuseragent9` values('Mozilla/5.0 (Windows NT 5.1) AppleWebKit/535.11 (KHTML, like Gecko) Chrome/17.0.963.84 Safari/535.11 SE 2.X MetaSr 1.0','7');");
E_D("replace into `zyads_adsipuseragent9` values('Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.64 Safari/537.31','8');");
E_D("replace into `zyads_adsipuseragent9` values('Mozilla/5.0 (iPhone; CPU iPhone OS 5_0_1 like Mac OS X) AppleWebKit/534.46 (KHTML, like Gecko) Version/5.1 Mobile/9A406 Safari/7534.48.3','9');");
E_D("replace into `zyads_adsipuseragent9` values('Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; SLCC1; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30618; .NET4.0C; TheWorld)','10');");
E_D("replace into `zyads_adsipuseragent9` values('Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0)','11');");
E_D("replace into `zyads_adsipuseragent9` values('Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.64 Safari/537.31','12');");
E_D("replace into `zyads_adsipuseragent9` values('Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1','13');");
E_D("replace into `zyads_adsipuseragent9` values('Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0)','14');");
E_D("replace into `zyads_adsipuseragent9` values('Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; Trident/6.0)','15');");

require("../../inc/footer.php");
?>