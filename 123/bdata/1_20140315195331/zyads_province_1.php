<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `zyads_province`;");
E_C("CREATE TABLE `zyads_province` (
  `day` date NOT NULL,
  `uid` mediumint(9) unsigned NOT NULL,
  `province` mediumint(9) unsigned NOT NULL default '0',
  `province0` mediumint(9) unsigned NOT NULL,
  `province1` mediumint(9) unsigned NOT NULL,
  `province2` mediumint(9) unsigned NOT NULL,
  `province3` mediumint(9) unsigned NOT NULL,
  `province4` mediumint(9) unsigned NOT NULL,
  `province5` mediumint(9) unsigned NOT NULL,
  `province6` mediumint(9) unsigned NOT NULL,
  `province7` mediumint(9) unsigned NOT NULL,
  `province8` mediumint(9) unsigned NOT NULL,
  `province9` mediumint(9) unsigned NOT NULL,
  `province10` mediumint(9) unsigned NOT NULL,
  `province11` mediumint(9) unsigned NOT NULL,
  `province12` mediumint(9) unsigned NOT NULL,
  `province13` mediumint(9) unsigned NOT NULL,
  `province14` mediumint(9) unsigned NOT NULL,
  `province15` mediumint(9) unsigned NOT NULL,
  `province16` mediumint(9) unsigned NOT NULL,
  `province17` mediumint(9) unsigned NOT NULL,
  `province18` mediumint(9) unsigned NOT NULL,
  `province19` mediumint(9) unsigned NOT NULL,
  `province20` mediumint(9) unsigned NOT NULL,
  `province21` mediumint(9) unsigned NOT NULL,
  `province22` mediumint(9) unsigned NOT NULL,
  `province23` mediumint(9) unsigned NOT NULL,
  `province24` mediumint(9) unsigned NOT NULL,
  `province25` mediumint(9) unsigned NOT NULL,
  `province26` mediumint(9) unsigned NOT NULL,
  `province27` mediumint(9) unsigned NOT NULL,
  `province28` mediumint(9) unsigned NOT NULL,
  `province29` mediumint(9) unsigned NOT NULL,
  `province30` mediumint(9) unsigned NOT NULL,
  `province31` mediumint(9) unsigned NOT NULL,
  `province32` mediumint(9) unsigned NOT NULL,
  `province33` mediumint(9) unsigned NOT NULL,
  `province34` mediumint(9) unsigned NOT NULL,
  `province35` mediumint(9) unsigned NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=gbk");
E_D("replace into `zyads_province` values('2013-06-02','1002','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','3','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `zyads_province` values('2013-06-03','1002','0','3','0','0','1','7','0','2','0','1','2','3','3','1','0','5','1','1','0','4','0','2','0','0','2','0','0','0','0','1','0','0','0','0','0','0','0');");
E_D("replace into `zyads_province` values('2013-06-04','1002','2','5','0','0','4','1','1','0','0','0','7','1','3','2','2','6','3','1','2','6','1','1','1','1','1','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `zyads_province` values('2013-06-05','1002','1','1','0','1','2','2','0','0','0','0','2','1','1','3','3','4','3','0','0','5','0','1','1','1','1','0','0','0','0','2','0','0','0','0','0','0','0');");
E_D("replace into `zyads_province` values('2013-06-06','1002','1','0','0','0','1','3','2','0','1','0','0','0','0','3','0','6','2','0','1','0','0','1','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `zyads_province` values('2013-06-07','1002','3','3','0','0','0','0','0','0','0','0','2','0','0','1','2','4','0','0','1','2','0','2','0','2','0','0','0','0','0','2','0','0','0','0','0','0','0');");
E_D("replace into `zyads_province` values('2013-06-08','1002','0','1','0','2','1','1','0','0','0','1','3','0','0','2','0','4','0','0','0','2','0','1','3','0','0','0','0','0','0','0','1','0','0','0','0','0','0');");
E_D("replace into `zyads_province` values('2013-06-09','1002','2','0','0','0','2','0','0','0','0','0','0','1','0','0','1','3','0','0','0','2','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');");
E_D("replace into `zyads_province` values('2014-03-15','1010','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','1','0');");

require("../../inc/footer.php");
?>