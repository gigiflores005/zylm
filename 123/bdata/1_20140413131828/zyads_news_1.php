<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `zyads_news`;");
E_C("CREATE TABLE `zyads_news` (
  `id` int(11) NOT NULL auto_increment,
  `tit` varchar(100) NOT NULL default '',
  `conn` mediumtext NOT NULL,
  `time` datetime NOT NULL default '0000-00-00 00:00:00',
  `top` tinyint(1) NOT NULL default '0',
  `color` char(7) default NULL,
  `is_view` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=gbk");
E_D("replace into `zyads_news` values('33','wealin 联系客服修改银行名称 ','wealin 联系客服修改银行名称 ','2008-06-19 23:59:41','0',NULL,'0');");
E_D("replace into `zyads_news` values('34','cq532 联系客服 工行名称不对 ','cq532 联系客服 工行名称不对 ','2008-06-19 23:59:51','0',NULL,'0');");
E_D("replace into `zyads_news` values('35','hybbq 银行开户名称不对。联系客服 ','hybbq 银行开户名称不对。联系客服 ','2008-06-20 00:00:00','0',NULL,'0');");
E_D("replace into `zyads_news` values('36','任何人作弊,直接封号,不通知！ ','任何人作弊,直接封号,不通知！ ','2008-06-20 00:00:12','0',NULL,'0');");
E_D("replace into `zyads_news` values('37','dy88516 银行开户名称没有写。联系客户 ','dy88516 银行开户名称没有写。联系客户 ','2008-06-20 00:00:23','0',NULL,'0');");
E_D("replace into `zyads_news` values('38','25号前结算完毕！lyw999的银行名字不对联系客服！ ','25号前结算完毕！lyw999的银行名字不对联系客服！ ','2008-06-20 00:00:31','0',NULL,'0');");
E_D("replace into `zyads_news` values('41','任何人作弊,直接封号,不通知！ ','任何人作弊,直接封号,不通知！ ','2009-02-18 10:34:49','0',NULL,'0');");
E_D("replace into `zyads_news` values('42','任何人作弊,直接封号,不通知！ ','任何人作弊,直接封号,不通知！ ','2009-03-04 20:49:35','0',NULL,'0');");
E_D("replace into `zyads_news` values('43','任何人作弊,直接封号,不通知！ ','任何人作弊,直接封号,不通知！ ','2009-03-04 20:49:39','0',NULL,'0');");
E_D("replace into `zyads_news` values('44','vvvvvv','<p>vvvvvvvvvv</p>','2014-03-15 17:21:15','0','#FF0000','0');");
E_D("replace into `zyads_news` values('45','hjnnmn','<p>nmnmnm</p>','2014-03-15 17:22:35','1','#0000FF','0');");

require("../../inc/footer.php");
?>