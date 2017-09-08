<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `zyads_sessions`;");
E_C("CREATE TABLE `zyads_sessions` (
  `session_id` char(32) character set gbk collate gbk_bin NOT NULL,
  `session_expires` int(10) unsigned NOT NULL default '0',
  `session_data` text,
  PRIMARY KEY  (`session_id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk");
E_D("replace into `zyads_sessions` values('27a16d35e4e1f318a3ddad1981d79a29','1394886066','serviceqq|s:9:\"350826748\";username|s:6:\"lmycgs\";password|s:32:\"e7de33bd2f5ccb2a18e3f825f5cdd9dd\";usertype|s:1:\"1\";uid|s:4:\"1010\";userhash|s:8:\"f2700504\";l_ip|s:9:\"127.0.0.1\";l_time|s:19:\"2014-03-15 19:21:25\";imgcode|s:4:\"EJMG\";adminusername|s:5:\"admin\";adminpassword|s:32:\"ec15d79e36e14dd258cfff3d48b73d35\";adminuid|N;adminusertype|s:1:\"1\";adminhash|s:8:\"6bf9c657\";');");
E_D("replace into `zyads_sessions` values('3840e6a9bb0f2df44c8b94f992f35103','1394884536','imgcode|s:4:\"XBUE\";serviceqq|N;username|s:6:\"lmycgs\";password|s:32:\"e7de33bd2f5ccb2a18e3f825f5cdd9dd\";usertype|s:1:\"1\";uid|s:4:\"1010\";userhash|s:8:\"f2700504\";l_ip|s:9:\"127.0.0.1\";l_time|s:19:\"2014-03-15 19:04:34\";');");

require("../../inc/footer.php");
?>