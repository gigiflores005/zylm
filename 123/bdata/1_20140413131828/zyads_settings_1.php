<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `zyads_settings`;");
E_C("CREATE TABLE `zyads_settings` (
  `title` varchar(50) NOT NULL,
  `value` varchar(500) NOT NULL,
  PRIMARY KEY  (`title`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk");
E_D("replace into `zyads_settings` values('mail_send','2');");
E_D("replace into `zyads_settings` values('mail_server','smtp.qq.com');");
E_D("replace into `zyads_settings` values('mail_port','25');");
E_D("replace into `zyads_settings` values('mail_auth','1');");
E_D("replace into `zyads_settings` values('mail_from','775541977@qq.com');");
E_D("replace into `zyads_settings` values('mail_username','775541977@qq.com');");
E_D("replace into `zyads_settings` values('mail_password','fengkuang.8');");
E_D("replace into `zyads_settings` values('tomail','');");
E_D("replace into `zyads_settings` values('zlink_on','cpc,cpm,cpa,cps');");
E_D("replace into `zyads_settings` values('sitename','AK广告联盟');");
E_D("replace into `zyads_settings` values('siteurl','127.0.0.1');");
E_D("replace into `zyads_settings` values('authorized_url','127.0.0.1');");
E_D("replace into `zyads_settings` values('siteip','127.0.0.1');");
E_D("replace into `zyads_settings` values('pv_step','10');");
E_D("replace into `zyads_settings` values('url_key','61989');");
E_D("replace into `zyads_settings` values('site_status','3');");
E_D("replace into `zyads_settings` values('alexa','0');");
E_D("replace into `zyads_settings` values('min_budeget','100');");
E_D("replace into `zyads_settings` values('chexiao_code','20');");
E_D("replace into `zyads_settings` values('in_site','0');");
E_D("replace into `zyads_settings` values('union_bz','0');");
E_D("replace into `zyads_settings` values('do2click','1');");
E_D("replace into `zyads_settings` values('cpcmin_price','0.006');");
E_D("replace into `zyads_settings` values('cpmmin_price','0.004');");
E_D("replace into `zyads_settings` values('cpvmin_price','0.003');");
E_D("replace into `zyads_settings` values('cpamin_price','0.2');");
E_D("replace into `zyads_settings` values('cpsmin_price','20');");
E_D("replace into `zyads_settings` values('jsurl','http://127.0.0.1');");
E_D("replace into `zyads_settings` values('imgurl','http://127.0.0.1');");
E_D("replace into `zyads_settings` values('jumpurl','http://127.0.0.1');");
E_D("replace into `zyads_settings` values('sync_setting','');");
E_D("replace into `zyads_settings` values('db_ms','0');");
E_D("replace into `zyads_settings` values('memcached_host','127.0.0.1');");
E_D("replace into `zyads_settings` values('memcached_port','11211');");
E_D("replace into `zyads_settings` values('cache_type','file');");
E_D("replace into `zyads_settings` values('cache_time','1800');");
E_D("replace into `zyads_settings` values('close_reg_aff','0');");
E_D("replace into `zyads_settings` values('close_reg_adv','1');");
E_D("replace into `zyads_settings` values('reg_money','0');");
E_D("replace into `zyads_settings` values('regmoney_type','week');");
E_D("replace into `zyads_settings` values('regmoney','0');");
E_D("replace into `zyads_settings` values('aff_reg_status','2');");
E_D("replace into `zyads_settings` values('adv_reg_status','2');");
E_D("replace into `zyads_settings` values('min_clearing','50');");
E_D("replace into `zyads_settings` values('clearing_tax','5');");
E_D("replace into `zyads_settings` values('clearing_charges','0.5');");
E_D("replace into `zyads_settings` values('clearing_cycle','day,week,month');");
E_D("replace into `zyads_settings` values('clearing_weekdata','1');");
E_D("replace into `zyads_settings` values('clearing_monthdata','2');");
E_D("replace into `zyads_settings` values('min_pay','1000');");
E_D("replace into `zyads_settings` values('default_pay','alipay');");
E_D("replace into `zyads_settings` values('99bill_id','');");
E_D("replace into `zyads_settings` values('99bill_key','198929');");
E_D("replace into `zyads_settings` values('chinabank_id','');");
E_D("replace into `zyads_settings` values('chinabank_key','');");
E_D("replace into `zyads_settings` values('alipay_email','');");
E_D("replace into `zyads_settings` values('alipay_id','');");
E_D("replace into `zyads_settings` values('alipay_key','');");
E_D("replace into `zyads_settings` values('tenpay_id','');");
E_D("replace into `zyads_settings` values('tenpay_key','');");
E_D("replace into `zyads_settings` values('cpc_deduction','30');");
E_D("replace into `zyads_settings` values('cpm_deduction','70');");
E_D("replace into `zyads_settings` values('cpa_deduction','0');");
E_D("replace into `zyads_settings` values('cps_deduction','0');");
E_D("replace into `zyads_settings` values('cpv_deduction','0');");
E_D("replace into `zyads_settings` values('union_ck','9');");
E_D("replace into `zyads_settings` values('recommend_tc','30');");
E_D("replace into `zyads_settings` values('recommend_status','1');");
E_D("replace into `zyads_settings` values('ip_del_date','7');");
E_D("replace into `zyads_settings` values('add_day_pv','58000');");
E_D("replace into `zyads_settings` values('gmt_time','8');");
E_D("replace into `zyads_settings` values('make_html','0');");
E_D("replace into `zyads_settings` values('check_code','0');");
E_D("replace into `zyads_settings` values('reg_type','0');");
E_D("replace into `zyads_settings` values('sync_load','www.zyiis.com');");
E_D("replace into `zyads_settings` values('clearing_atuo','0');");
E_D("replace into `zyads_settings` values('show_text_noads','没有合适的广告可显示，请返回联盟重新选择广告');");
E_D("replace into `zyads_settings` values('show_text_nodomain','域名限制hh');");
E_D("replace into `zyads_settings` values('show_text_nouserstatus','用户未激活');");
E_D("replace into `zyads_settings` values('show_text_nozone','广告位出错，请重新选择广告或是删除当前广告位');");
E_D("replace into `zyads_settings` values('inip_admin','0');");
E_D("replace into `zyads_settings` values('in_admin_ip','');");
E_D("replace into `zyads_settings` values('integral_status','1');");
E_D("replace into `zyads_settings` values('integral_day','17');");
E_D("replace into `zyads_settings` values('integral_daypv','100');");
E_D("replace into `zyads_settings` values('integral_topay','1');");
E_D("replace into `zyads_settings` values('reg_code','0');");
E_D("replace into `zyads_settings` values('tax_status','1');");
E_D("replace into `zyads_settings` values('tax_1','800');");
E_D("replace into `zyads_settings` values('tax_2_1','800');");
E_D("replace into `zyads_settings` values('tax_2_2','4000');");
E_D("replace into `zyads_settings` values('tax_2_bfb','20');");
E_D("replace into `zyads_settings` values('tax_3_1','4000');");
E_D("replace into `zyads_settings` values('tax_3_2','20000');");
E_D("replace into `zyads_settings` values('tax_3_bfb','20');");
E_D("replace into `zyads_settings` values('tax_4_1','20000');");
E_D("replace into `zyads_settings` values('tax_4_2','50000');");
E_D("replace into `zyads_settings` values('tax_4_bfb','30');");
E_D("replace into `zyads_settings` values('tax_5_1','50000');");
E_D("replace into `zyads_settings` values('tax_5_2','');");
E_D("replace into `zyads_settings` values('tax_5_bfb','40');");
E_D("replace into `zyads_settings` values('tax_6_1','');");
E_D("replace into `zyads_settings` values('tax_6_2','');");
E_D("replace into `zyads_settings` values('tax_6_bfb','');");
E_D("replace into `zyads_settings` values('codeurl','http://127.0.0.1');");

require("../../inc/footer.php");
?>