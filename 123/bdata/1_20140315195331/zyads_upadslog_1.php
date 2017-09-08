<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `zyads_upadslog`;");
E_C("CREATE TABLE `zyads_upadslog` (
  `uplogid` mediumint(8) NOT NULL auto_increment,
  `adsid` mediumint(9) NOT NULL,
  `username` varchar(50) default NULL,
  `adstype` char(4) NOT NULL,
  `adstypeid` mediumint(8) NOT NULL,
  `olddata` mediumtext NOT NULL,
  `updata` mediumtext NOT NULL,
  `addtime` datetime NOT NULL,
  `status` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`uplogid`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=gbk");
E_D("replace into `zyads_upadslog` values('1','1','admin','','7','YTo1OntzOjM6InVybCI7czoyNToiaHR0cDovL3d3dy5saXl1YW56aGFvLmNvbSI7czo4OiJpbWFnZXVybCI7czozNjoiL2EvMjAxMy0wNi0wMi8xMzcwMTQ1NDM4NzM5NjIyMjIuZ2lmIjtzOjU6IndpZHRoIjtzOjM6Ijk1MCI7czo2OiJoZWlnaHQiO3M6MjoiOTAiO3M6NjoiYWRpbmZvIjtzOjA6IiI7fQ==','YTo1OntzOjM6InVybCI7czoyNToiaHR0cDovL3d3dy5saXl1YW56aGFvLmNvbSI7czo4OiJpbWFnZXVybCI7czozNjoiL2EvMjAxMy0wNi0wMy8xMzcwMjM1NTU1MjE2NDI1NzUuZ2lmIjtzOjU6IndpZHRoIjtpOjk1MDtzOjY6ImhlaWdodCI7aTo5MDtzOjY6ImFkaW5mbyI7czowOiIiO30=','2013-06-03 12:59:15','1');");
E_D("replace into `zyads_upadslog` values('2','3','admin','','9','YToxOntzOjM6InVybCI7czoyNToiaHR0cDovL3d3dy5saXl1YW56aGFvLmNvbSI7fQ==','YToxOntzOjM6InVybCI7czoxNjoiaHR0cDovLzEyNy4wLjAuMSI7fQ==','2014-03-15 17:30:52','1');");
E_D("replace into `zyads_upadslog` values('3','5','admin','','16','YTozOntzOjM6InVybCI7czoyNToiaHR0cDovL3d3dy5saXl1YW56aGFvLmNvbSI7czo4OiJpbWFnZXVybCI7czozNjoiL2EvMjAxMy0wNi0wMi8xMzcwMTQ2NzMxNjgzOTExMjQuanBnIjtzOjU6InpsaW5rIjtzOjE6IjAiO30=','YTozOntzOjM6InVybCI7czoxNjoiaHR0cDovLzEyNy4wLjAuMSI7czo4OiJpbWFnZXVybCI7TjtzOjU6InpsaW5rIjtzOjE6IjEiO30=','2014-03-15 17:54:53','1');");
E_D("replace into `zyads_upadslog` values('4','7','admin','','7','YToyOntzOjM6InVybCI7czoxNzoiaHR0cDovL2Nhb25pbWEucnUiO3M6ODoiaW1hZ2V1cmwiO3M6MzY6Ii9hLzIwMTMtMDYtMDMvMTM3MDIzNjc1OTE1OTc1NjI0LmdpZiI7fQ==','YToyOntzOjM6InVybCI7czoyOToiaHR0cDovL3d3dy4yMzQ1LmNvbS8/azIyMDg4NjciO3M6ODoiaW1hZ2V1cmwiO047fQ==','2014-03-15 19:41:30','1');");
E_D("replace into `zyads_upadslog` values('5','6','admin','','15','YToyOntzOjM6InVybCI7czoxNzoiaHR0cDovL2Nhb25pbWEucnUiO3M6ODoiaW1hZ2V1cmwiO3M6MzY6Ii9hLzIwMTMtMDYtMDMvMTM3MDIzNjI3MDM3NTc3MTc1LmdpZiI7fQ==','YToyOntzOjM6InVybCI7czoyOToiaHR0cDovL3d3dy4yMzQ1LmNvbS8/azIyMDg4NjciO3M6ODoiaW1hZ2V1cmwiO047fQ==','2014-03-15 19:41:38','1');");
E_D("replace into `zyads_upadslog` values('6','5','admin','','16','YToxOntzOjM6InVybCI7czoxNjoiaHR0cDovLzEyNy4wLjAuMSI7fQ==','YToxOntzOjM6InVybCI7czoyOToiaHR0cDovL3d3dy4yMzQ1LmNvbS8/azIyMDg4NjciO30=','2014-03-15 19:41:47','1');");
E_D("replace into `zyads_upadslog` values('7','1','admin','','7','YToyOntzOjM6InVybCI7czoxNzoiaHR0cDovL2Nhb25pbWEucnUiO3M6ODoiaW1hZ2V1cmwiO3M6MzY6Ii9hLzIwMTMtMDYtMDMvMTM3MDIzNTU1NTIxNjQyNTc1LmdpZiI7fQ==','YToyOntzOjM6InVybCI7czoyOToiaHR0cDovL3d3dy4yMzQ1LmNvbS8/azIyMDg4NjciO3M6ODoiaW1hZ2V1cmwiO047fQ==','2014-03-15 19:42:01','1');");
E_D("replace into `zyads_upadslog` values('8','2','admin','','20','YToyOntzOjM6InVybCI7czoyNToiaHR0cDovL3d3dy5saXl1YW56aGFvLmNvbSI7czo4OiJpbWFnZXVybCI7czozNjoiL2EvMjAxMy0wNi0wMi8xMzcwMTQ1OTk2MTI1MDc5MzQuZ2lmIjt9','YToyOntzOjM6InVybCI7czoyOToiaHR0cDovL3d3dy4yMzQ1LmNvbS8/azIyMDg4NjciO3M6ODoiaW1hZ2V1cmwiO047fQ==','2014-03-15 19:42:08','1');");
E_D("replace into `zyads_upadslog` values('9','3','admin','','9','YToxOntzOjM6InVybCI7czoxNjoiaHR0cDovLzEyNy4wLjAuMSI7fQ==','YToxOntzOjM6InVybCI7czoyOToiaHR0cDovL3d3dy4yMzQ1LmNvbS8/azIyMDg4NjciO30=','2014-03-15 19:42:16','1');");
E_D("replace into `zyads_upadslog` values('10','4','admin','','15','YToyOntzOjM6InVybCI7czoxNzoiaHR0cDovL2Nhb25pbWEucnUiO3M6ODoiaW1hZ2V1cmwiO3M6MzY6Ii9hLzIwMTMtMDYtMDIvMTM3MDE0NjUzOTgxNTU2NTQ1LmdpZiI7fQ==','YToyOntzOjM6InVybCI7czoyOToiaHR0cDovL3d3dy4yMzQ1LmNvbS8/azIyMDg4NjciO3M6ODoiaW1hZ2V1cmwiO047fQ==','2014-03-15 19:42:24','1');");

require("../../inc/footer.php");
?>