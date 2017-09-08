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
E_D("replace into `zyads_plan` values('11','1004','guanggaozhu','��ɽ����CPC','0.0700','0.0800','0','0.0000','0.0000','0.0000','0.0000','��Դ�ǳ���,��ӭ����Ͷ��','500','0000-00-00','true','cpc','0','0','day','1','1','Ϊ��֤��������,ϵͳ���ڴ˹��λ�Զ���ʾ����ͬ����Ƽ���档','','n','1','','1','','0','0','http://www.heima8.com/advertlogo/133507751.gif','0','1','2013-06-02 11:54:31');");
E_D("replace into `zyads_plan` values('12','1004','guanggaozhu','һ�ŵ�CPS','40.0000','50.0000','0','0.0000','0.0000','0.0000','0.0000','�칫��Ʒ 3.5% ','500','0000-00-00','true','cps','0','0','week','1','1','���ͼ�顢��װЬñ��Ӫ���������칫��Ʒ 3.5%; ʳƷ���ϡ����ݻ���������ࡢ�Ҿ���� 3.5%; ĸӤ���ֻ�����ҵ硢���е� 1.5%; 1���� 4Ԫ/��','','n','1','','1','','0','0','http://ww.heima8.com/advertlogo/133512701.gif','0','1','2013-06-02 12:04:48');");
E_D("replace into `zyads_plan` values('13','1004','guanggaozhu','�Ѻ�Ӱ��CPM','0.0050','0.0060','0','0.0000','0.0000','0.0000','0.0000','ÿǧ�ε���5Ԫ','500','0000-00-00','true','cpm','0','0','week','1','1','Ϊ��֤��Ա����,����������ڼ�,ϵͳ����Ͷ�Ŵ���Ĺ��λ�Զ���ʾ����ͬ����Ƽ���档','','n','1','','1','','0','0','http://ww.heima8.com/advertlogo/141653471.gif','0','1','2013-06-02 12:09:38');");
E_D("replace into `zyads_plan` values('14','1004','guanggaozhu','�����̳�CPV','0.0050','0.0060','0','0.0000','0.0000','0.0000','0.0000','ÿǧ��չʾ5Ԫ','500','0000-00-00','true','cpv','0','0','week','1','1',' �����̳ǣ�www.360buy.com�����й�B2C�г�����3C����רҵƽ̨�����й����������������������߻�ӭ�����Ӱ�����ĵ���������վ֮һ��','','n','1','','1','','0','0','http://ww.heima8.com/advertlogo/20059.gif','0','1','2013-06-02 12:13:55');");
E_D("replace into `zyads_plan` values('15','1004','guanggaozhu','uusee�������','1.0000','2.0000','0','0.0000','0.0000','0.0000','0.0000','ÿ����װ1Ԫ','500','0000-00-00','true','cpa','0','0','day','1','1','UUSee�������2010 BETA����������ȫ�´������һ��ȫ����������տ������������������2008��ļ�ʱֱ������������Ƶ����','','n','1','','1','','0','0','http://ww.heima8.com/advertlogo/107044451.gif','0','1','2013-06-02 12:17:44');");

require("../../inc/footer.php");
?>