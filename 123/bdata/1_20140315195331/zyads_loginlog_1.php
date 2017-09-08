<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `zyads_loginlog`;");
E_C("CREATE TABLE `zyads_loginlog` (
  `id` mediumint(8) NOT NULL auto_increment,
  `username` varchar(20) NOT NULL,
  `logintype` varchar(10) NOT NULL,
  `logininfo` varchar(20) NOT NULL,
  `loginip` char(15) NOT NULL,
  `logintime` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=71 DEFAULT CHARSET=gbk");
E_D("replace into `zyads_loginlog` values('1','admin','admin','Succe','127.0.0.1','2013-05-09 19:34:17');");
E_D("replace into `zyads_loginlog` values('2','nihao','member','Succe','127.0.0.1','2013-05-09 19:39:23');");
E_D("replace into `zyads_loginlog` values('3','admin','admin','Succe','127.0.0.1','2013-05-09 19:51:11');");
E_D("replace into `zyads_loginlog` values('4','nihaoya','member','Succe','127.0.0.1','2013-05-09 19:52:04');");
E_D("replace into `zyads_loginlog` values('5','admin','admin','Succe','127.0.0.1','2013-05-12 18:55:52');");
E_D("replace into `zyads_loginlog` values('6','nihao','member','Faile','127.0.0.1','2013-05-12 18:56:49');");
E_D("replace into `zyads_loginlog` values('7','nihao','member','Succe','127.0.0.1','2013-05-12 18:57:25');");
E_D("replace into `zyads_loginlog` values('8','admin','admin','Succe','127.0.0.1','2013-05-13 21:49:51');");
E_D("replace into `zyads_loginlog` values('9','nihao','member','Succe','127.0.0.1','2013-05-13 21:52:53');");
E_D("replace into `zyads_loginlog` values('10','admin','admin','Succe','127.0.0.1','2013-05-13 22:09:54');");
E_D("replace into `zyads_loginlog` values('11','admin','admin','Succe','127.0.0.1','2013-05-13 22:16:25');");
E_D("replace into `zyads_loginlog` values('12','admin','admin','Succe','127.0.0.1','2013-05-13 22:18:14');");
E_D("replace into `zyads_loginlog` values('13','admin','admin','Succe','127.0.0.1','2013-05-13 22:23:56');");
E_D("replace into `zyads_loginlog` values('14','admin','admin','Succe','127.0.0.1','2013-05-13 22:27:57');");
E_D("replace into `zyads_loginlog` values('15','admin','admin','Succe','127.0.0.1','2013-05-13 22:37:26');");
E_D("replace into `zyads_loginlog` values('16','admin','admin','Succe','127.0.0.1','2013-05-13 23:12:11');");
E_D("replace into `zyads_loginlog` values('17','admin','admin','Succe','127.0.0.1','2013-05-13 23:18:30');");
E_D("replace into `zyads_loginlog` values('18','admin','admin','Succe','127.0.0.1','2013-05-13 23:27:53');");
E_D("replace into `zyads_loginlog` values('19','admin','admin','Succe','127.0.0.1','2013-05-13 23:49:27');");
E_D("replace into `zyads_loginlog` values('20','admin','admin','Succe','127.0.0.1','2013-05-14 00:28:57');");
E_D("replace into `zyads_loginlog` values('21','admin','admin','Succe','127.0.0.1','2013-05-14 01:14:19');");
E_D("replace into `zyads_loginlog` values('22','admin','admin','Succe','127.0.0.1','2013-05-14 01:14:37');");
E_D("replace into `zyads_loginlog` values('23','admin','admin','Succe','127.0.0.1','2013-05-14 01:46:03');");
E_D("replace into `zyads_loginlog` values('24','nihao','member','Succe','127.0.0.1','2013-05-14 15:14:19');");
E_D("replace into `zyads_loginlog` values('25','admin','admin','Succe','127.0.0.1','2013-05-14 15:15:06');");
E_D("replace into `zyads_loginlog` values('26','nihaoya','member','Faile','127.0.0.1','2013-05-14 15:15:38');");
E_D("replace into `zyads_loginlog` values('27','nihaoya','member','Faile','127.0.0.1','2013-05-14 15:15:53');");
E_D("replace into `zyads_loginlog` values('28','admin','admin','Succe','127.0.0.1','2013-05-14 15:16:13');");
E_D("replace into `zyads_loginlog` values('29','nihaoya','member','Succe','127.0.0.1','2013-05-14 15:17:22');");
E_D("replace into `zyads_loginlog` values('30','admin','admin','Succe','127.0.0.1','2013-05-14 16:00:42');");
E_D("replace into `zyads_loginlog` values('31','admin','admin','Succe','127.0.0.1','2013-05-15 13:38:45');");
E_D("replace into `zyads_loginlog` values('32','nihao','member','Succe','127.0.0.1','2013-05-15 13:42:15');");
E_D("replace into `zyads_loginlog` values('33','nihao','member','Succe','127.0.0.1','2013-05-15 14:32:13');");
E_D("replace into `zyads_loginlog` values('34','nihaoya','member','Succe','127.0.0.1','2013-05-15 14:33:27');");
E_D("replace into `zyads_loginlog` values('35','nihaoya','member','Succe','127.0.0.1','2013-05-15 14:35:12');");
E_D("replace into `zyads_loginlog` values('36','nihao','member','Succe','127.0.0.1','2013-05-15 14:43:24');");
E_D("replace into `zyads_loginlog` values('37','admin','admin','Succe','127.0.0.1','2013-05-15 23:38:59');");
E_D("replace into `zyads_loginlog` values('38','admin','admin','Succe','127.0.0.1','2013-05-18 01:25:17');");
E_D("replace into `zyads_loginlog` values('39','admin','admin','Succe','27.213.3.79','2013-06-02 11:38:42');");
E_D("replace into `zyads_loginlog` values('40','guanggaozhu','member','Succe','27.213.3.79','2013-06-02 11:44:39');");
E_D("replace into `zyads_loginlog` values('41','wangzhanzhu','member','Succe','27.213.3.79','2013-06-02 11:57:44');");
E_D("replace into `zyads_loginlog` values('42','ajjfsfd','member','Faile','46.118.153.7','2013-06-03 00:57:10');");
E_D("replace into `zyads_loginlog` values('43','admin','admin','Succe','58.57.11.36','2013-06-03 11:00:51');");
E_D("replace into `zyads_loginlog` values('44','wangzhanzhu','member','Succe','58.57.11.36','2013-06-03 11:01:42');");
E_D("replace into `zyads_loginlog` values('45','admin','admin','Succe','58.57.11.36','2013-06-03 11:37:28');");
E_D("replace into `zyads_loginlog` values('46','wangzhanzhu','member','Succe','58.57.11.36','2013-06-03 11:40:17');");
E_D("replace into `zyads_loginlog` values('47','admin','member','Faile','101.16.160.55','2013-06-03 16:22:41');");
E_D("replace into `zyads_loginlog` values('48','admin','member','Faile','101.16.160.55','2013-06-03 16:24:18');");
E_D("replace into `zyads_loginlog` values('49','wangzhanzhu','member','Succe','58.57.11.36','2013-06-04 14:39:52');");
E_D("replace into `zyads_loginlog` values('50','wangzhanzhu','member','Succe','119.179.85.4','2013-06-04 20:10:17');");
E_D("replace into `zyads_loginlog` values('51','wangzhanzhu','member','Succe','27.216.7.16','2013-06-07 20:15:45');");
E_D("replace into `zyads_loginlog` values('52','wangzhanzhu','member','Succe','58.57.11.36','2013-06-08 15:45:13');");
E_D("replace into `zyads_loginlog` values('53','admin','admin','Succe','58.57.11.36','2013-06-08 15:48:02');");
E_D("replace into `zyads_loginlog` values('54','wangzhanzhu','member','Succe','58.57.11.36','2013-06-08 17:05:14');");
E_D("replace into `zyads_loginlog` values('55','admin','admin','Succe','222.215.160.187','2013-06-09 12:59:03');");
E_D("replace into `zyads_loginlog` values('56','admin','admin','Succe','58.57.11.36','2013-06-09 12:59:42');");
E_D("replace into `zyads_loginlog` values('57','guanggaozhu','member','Succe','222.215.160.187','2013-06-09 13:00:11');");
E_D("replace into `zyads_loginlog` values('58','admin','admin','Faile','127.0.0.1','2014-03-15 16:57:01');");
E_D("replace into `zyads_loginlog` values('59','admin','admin','Succe','127.0.0.1','2014-03-15 16:57:06');");
E_D("replace into `zyads_loginlog` values('60','lmycgs','member','Succe','127.0.0.1','2014-03-15 17:00:34');");
E_D("replace into `zyads_loginlog` values('61','lmycgs','member','Succe','127.0.0.1','2014-03-15 17:29:52');");
E_D("replace into `zyads_loginlog` values('62','lmycgs3','member','Succe','127.0.0.1','2014-03-15 17:59:22');");
E_D("replace into `zyads_loginlog` values('63','lmycgs','member','Succe','127.0.0.1','2014-03-15 18:10:35');");
E_D("replace into `zyads_loginlog` values('64','admin','admin','Succe','127.0.0.1','2014-03-15 18:28:52');");
E_D("replace into `zyads_loginlog` values('65','lmycgs','member','Succe','127.0.0.1','2014-03-15 18:56:37');");
E_D("replace into `zyads_loginlog` values('66','lmycgs','member','Succe','127.0.0.1','2014-03-15 18:57:38');");
E_D("replace into `zyads_loginlog` values('67','lmycgs','member','Succe','127.0.0.1','2014-03-15 19:04:34');");
E_D("replace into `zyads_loginlog` values('68','wangzhanzhu','member','Succe','127.0.0.1','2014-03-15 19:14:08');");
E_D("replace into `zyads_loginlog` values('69','lmycgs','member','Succe','127.0.0.1','2014-03-15 19:21:25');");
E_D("replace into `zyads_loginlog` values('70','lmycgs','member','Succe','127.0.0.1','2014-03-15 19:29:08');");

require("../../inc/footer.php");
?>