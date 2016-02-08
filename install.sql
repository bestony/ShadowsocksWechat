CREATE TABLE IF NOT EXISTS `wp_shadowsocks` (
`id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
`openid`  varchar(255) NOT NULL  COMMENT '用户识别码',
`userid`  int(10) NOT NULL  COMMENT 'SS用户编号',
`port`  varchar(255) NOT NULL  COMMENT '端口',
`token`  varchar(255) NOT NULL  COMMENT '微信号识别码',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci CHECKSUM=0 ROW_FORMAT=DYNAMIC DELAY_KEY_WRITE=0;
INSERT INTO `wp_model` (`name`,`title`,`extend`,`relation`,`need_pk`,`field_sort`,`field_group`,`attribute_list`,`template_list`,`template_add`,`template_edit`,`list_grid`,`list_row`,`search_key`,`search_list`,`create_time`,`update_time`,`status`,`engine_type`) VALUES ('shadowsocks','Shadowsocks模型','0','','1','','1:基础','','','','','','10','','','1454910916','1454910916','1','MyISAM');
INSERT INTO `wp_attribute` (`name`,`title`,`field`,`type`,`value`,`remark`,`is_show`,`extra`,`model_id`,`is_must`,`status`,`update_time`,`create_time`,`validate_rule`,`validate_time`,`error_info`,`validate_type`,`auto_rule`,`auto_time`,`auto_type`) VALUES ('openid','用户识别码','varchar(255) NOT NULL','string','','','1','','0','0','1','1454912766','1454912766','','3','','regex','','3','function');
INSERT INTO `wp_attribute` (`name`,`title`,`field`,`type`,`value`,`remark`,`is_show`,`extra`,`model_id`,`is_must`,`status`,`update_time`,`create_time`,`validate_rule`,`validate_time`,`error_info`,`validate_type`,`auto_rule`,`auto_time`,`auto_type`) VALUES ('userid','SS用户编号','int(10) NOT NULL','num','','','1','','0','0','1','1454914985','1454914985','','3','','regex','','3','function');
INSERT INTO `wp_attribute` (`name`,`title`,`field`,`type`,`value`,`remark`,`is_show`,`extra`,`model_id`,`is_must`,`status`,`update_time`,`create_time`,`validate_rule`,`validate_time`,`error_info`,`validate_type`,`auto_rule`,`auto_time`,`auto_type`) VALUES ('port','端口','varchar(255) NOT NULL','string','','','1','','0','0','1','1454912797','1454912797','','3','','regex','','3','function');
INSERT INTO `wp_attribute` (`name`,`title`,`field`,`type`,`value`,`remark`,`is_show`,`extra`,`model_id`,`is_must`,`status`,`update_time`,`create_time`,`validate_rule`,`validate_time`,`error_info`,`validate_type`,`auto_rule`,`auto_time`,`auto_type`) VALUES ('token','微信号识别码','varchar(255) NOT NULL','string','','','1','','0','0','1','1454912855','1454912855','','3','','regex','','3','function');
UPDATE `wp_attribute` SET model_id= (SELECT MAX(id) FROM `wp_model`) WHERE model_id=0;