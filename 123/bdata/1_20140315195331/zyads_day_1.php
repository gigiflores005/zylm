<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `zyads_day`;");
E_C("CREATE TABLE `zyads_day` (
  `day` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=gbk");
E_D("replace into `zyads_day` values('2014-03-15');");

require("../../inc/footer.php");
?>