<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `zyads_plan`;");
E_C("CREATE TABLE `zyads_plan` (
  `planid` mediumint(8) NOT NULL auto_increment,
  `uid` mediumint(8) unsigned NOT NULL default '0',
  `username` varchar(20) NOT NULL,
  `planname` char(50) NOT NULL,
  `price` decimal(10,4) NOT NULL default '0.0000',
  `priceadv` decimal(10,4) default '0.0000',
  `gradeprice` tinyint(1) NOT NULL default '0',
  `s0price` decimal(10,4) NOT NULL default '0.0000',
  `s1price` decimal(10,4) NOT NULL default '0.0000',
  `s2price` decimal(10,4) NOT NULL default '0.0000',
  `s3price` decimal(10,4) NOT NULL default '0.0000',
  `priceinfo` varchar(50) default NULL,
  `budget` int(11) NOT NULL default '0',
  `expire` date NOT NULL default '0000-00-00',
  `checkplan` mediumtext NOT NULL,
  `plantype` char(3) NOT NULL default 'cpc',
  `profit` tinyint(3) NOT NULL default '0',
  `deduction` tinyint(3) default '0',
  `clearing` varchar(10) NOT NULL,
  `stopaudit` tinyint(1) NOT NULL default '1',
  `datatime` tinyint(3) NOT NULL default '1',
  `planinfo` mediumtext,
  `serverip` text,
  `audit` char(1) NOT NULL default 'n',
  `restrictions` tinyint(1) NOT NULL default '1',
  `resuid` mediumtext,
  `sitelimit` tinyint(1) NOT NULL default '1',
  `limitsiteid` mediumtext,
  `in_site` tinyint(1) NOT NULL default '0',
  `top` tinyint(1) NOT NULL default '0',
  `logo` varchar(255) default NULL,
  `mark` tinyint(1) NOT NULL default '0',
  `status` tinyint(1) NOT NULL default '1',
  `addtime` datetime NOT NULL,
  PRIMARY KEY  (`planid`),
  KEY `plantype` (`plantype`),
  KEY `uid` (`uid`),
  KEY `status` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=gbk");
E_D("replace into `zyads_plan` values('11','1004','guanggaozhu','金山毒霸CPC','0.0700','0.0800','0','0.0000','0.0000','0.0000','0.0000','资源非常多,欢迎大量投放','500','0000-00-00','true','cpc','0','0','day','1','1','为保证您的收益,系统将在此广告位自动显示其他同规格推荐广告。','','n','1','','1','','0','0','http://www.heima8.com/advertlogo/133507751.gif','0','1','2013-06-02 11:54:31');");
E_D("replace into `zyads_plan` values('12','1004','guanggaozhu','一号店CPS','40.0000','50.0000','0','0.0000','0.0000','0.0000','0.0000','办公用品 3.5% ','500','0000-00-00','true','cps','0','0','week','1','1','玩具图书、服装鞋帽、营养保健、办公用品 3.5%; 食品饮料、美容护理、厨卫清洁、家居箱包 3.5%; 母婴、手机数码家电、店中店 1.5%; 1号团 4元/单','','n','1','','1','','0','0','http://ww.heima8.com/advertlogo/133512701.gif','0','1','2013-06-02 12:04:48');");
E_D("replace into `zyads_plan` values('13','1004','guanggaozhu','搜狐影音CPM','0.0050','0.0060','0','0.0000','0.0000','0.0000','0.0000','每千次弹出5元','500','0000-00-00','true','cpm','0','0','week','1','1','为保证会员收益,在申请审核期间,系统将在投放代码的广告位自动显示其他同规格推荐广告。','','n','1','','1','','0','0','http://ww.heima8.com/advertlogo/141653471.gif','0','1','2013-06-02 12:09:38');");
E_D("replace into `zyads_plan` values('14','1004','guanggaozhu','京东商城CPV','0.0050','0.0060','0','0.0000','0.0000','0.0000','0.0000','每千次展示5元','500','0000-00-00','true','cpv','0','0','week','1','1',' 京东商城（www.360buy.com）是中国B2C市场最大的3C网购专业平台，是中国电子商务领域最受消费者欢迎和最具影响力的电子商务网站之一。','','n','1','','1','','0','0','http://ww.heima8.com/advertlogo/20059.gif','0','1','2013-06-02 12:13:55');");
E_D("replace into `zyads_plan` values('15','1004','guanggaozhu','uusee网络电视','1.0000','2.0000','0','0.0000','0.0000','0.0000','0.0000','每个安装1元','500','0000-00-00','true','cpa','0','0','day','1','1','UUSee网络电视2010 BETA版是悠视网全新打造的下一代全新网络电视收看软件，它不仅传承了2008版的即时直播、搜索、视频加速','','n','1','','1','','0','0','http://ww.heima8.com/advertlogo/107044451.gif','0','1','2013-06-02 12:17:44');");

require("../../inc/footer.php");
?>