/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50524
Source Host           : localhost:3306
Source Database       : commerz

Target Server Type    : MYSQL
Target Server Version : 50524
File Encoding         : 65001

Date: 2013-07-18 18:24:40
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `cz_admin`
-- ----------------------------
DROP TABLE IF EXISTS `cz_admin`;
CREATE TABLE `cz_admin` (
  `admin_id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(120) DEFAULT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `last_ip` varchar(64) DEFAULT NULL,
  `login_count` int(10) unsigned DEFAULT NULL,
  `add_time` int(11) NOT NULL,
  PRIMARY KEY (`admin_id`),
  KEY `admin` (`admin_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cz_admin
-- ----------------------------
INSERT INTO `cz_admin` VALUES ('1', 'admin', '3a766893670c021b60b0f7b89e0000a6', null, null, null, null, '0');

-- ----------------------------
-- Table structure for `cz_admin_log`
-- ----------------------------
DROP TABLE IF EXISTS `cz_admin_log`;
CREATE TABLE `cz_admin_log` (
  `log_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `add_time` int(11) NOT NULL,
  `admin_id` smallint(5) NOT NULL,
  `log_info` varchar(255) DEFAULT NULL,
  `log_ip` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`log_id`),
  KEY `log` (`admin_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cz_admin_log
-- ----------------------------

-- ----------------------------
-- Table structure for `cz_area`
-- ----------------------------
DROP TABLE IF EXISTS `cz_area`;
CREATE TABLE `cz_area` (
  `area_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pid` int(10) unsigned DEFAULT NULL,
  `path` varchar(200) DEFAULT NULL,
  `area_name` varchar(100) DEFAULT NULL,
  `grade` mediumint(8) DEFAULT NULL,
  `sort` tinyint(4) unsigned DEFAULT NULL,
  PRIMARY KEY (`area_id`),
  KEY `area` (`area_id`,`pid`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cz_area
-- ----------------------------

-- ----------------------------
-- Table structure for `cz_attribute`
-- ----------------------------
DROP TABLE IF EXISTS `cz_attribute`;
CREATE TABLE `cz_attribute` (
  `attr_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `type_id` int(8) DEFAULT NULL,
  `attr_name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`attr_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cz_attribute
-- ----------------------------

-- ----------------------------
-- Table structure for `cz_authassignment`
-- ----------------------------
DROP TABLE IF EXISTS `cz_authassignment`;
CREATE TABLE `cz_authassignment` (
  `itemname` varchar(64) NOT NULL,
  `userid` varchar(64) NOT NULL,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`itemname`,`userid`),
  CONSTRAINT `cz_authassignment_ibfk_1` FOREIGN KEY (`itemname`) REFERENCES `cz_authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cz_authassignment
-- ----------------------------

-- ----------------------------
-- Table structure for `cz_authitem`
-- ----------------------------
DROP TABLE IF EXISTS `cz_authitem`;
CREATE TABLE `cz_authitem` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cz_authitem
-- ----------------------------
INSERT INTO `cz_authitem` VALUES ('Authority', '2', null, null, null);

-- ----------------------------
-- Table structure for `cz_authitemchild`
-- ----------------------------
DROP TABLE IF EXISTS `cz_authitemchild`;
CREATE TABLE `cz_authitemchild` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`),
  CONSTRAINT `cz_authitemchild_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `cz_authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `cz_authitemchild_ibfk_2` FOREIGN KEY (`child`) REFERENCES `cz_authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cz_authitemchild
-- ----------------------------

-- ----------------------------
-- Table structure for `cz_author_connector`
-- ----------------------------
DROP TABLE IF EXISTS `cz_author_connector`;
CREATE TABLE `cz_author_connector` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(50) DEFAULT NULL,
  `infos` varchar(100) DEFAULT NULL,
  `logo` varchar(150) DEFAULT NULL,
  `openId` char(50) DEFAULT NULL,
  `source` char(50) DEFAULT NULL,
  `accessToken` char(50) DEFAULT NULL,
  `createTime` char(30) DEFAULT NULL,
  `validate` char(3) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cz_author_connector
-- ----------------------------

-- ----------------------------
-- Table structure for `cz_bonus`
-- ----------------------------
DROP TABLE IF EXISTS `cz_bonus`;
CREATE TABLE `cz_bonus` (
  `bonus_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `bonus_name` varchar(255) DEFAULT NULL,
  `status` tinyint(1) unsigned DEFAULT NULL,
  `bonus_money` decimal(10,2) DEFAULT NULL,
  `bonus_number` tinyint(5) DEFAULT NULL,
  `start_time` int(11) DEFAULT NULL,
  `end_time` int(11) unsigned DEFAULT NULL,
  `infos` varchar(255) DEFAULT NULL,
  `bonus_type` tinyint(1) DEFAULT NULL,
  `min_price` decimal(10,2) DEFAULT NULL,
  `bonus_config` text,
  `add_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`bonus_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cz_bonus
-- ----------------------------

-- ----------------------------
-- Table structure for `cz_booking`
-- ----------------------------
DROP TABLE IF EXISTS `cz_booking`;
CREATE TABLE `cz_booking` (
  `booking_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `goods_id` mediumint(11) DEFAULT NULL,
  `goods_name` varchar(100) DEFAULT NULL,
  `booking_time` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`booking_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cz_booking
-- ----------------------------

-- ----------------------------
-- Table structure for `cz_brand`
-- ----------------------------
DROP TABLE IF EXISTS `cz_brand`;
CREATE TABLE `cz_brand` (
  `brand_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(60) DEFAULT NULL,
  `brand_logo` varchar(200) DEFAULT NULL,
  `brand_desc` text,
  `brand_url` varchar(255) DEFAULT NULL,
  `sort` tinyint(3) DEFAULT NULL,
  `is_show` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`brand_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cz_brand
-- ----------------------------

-- ----------------------------
-- Table structure for `cz_category`
-- ----------------------------
DROP TABLE IF EXISTS `cz_category`;
CREATE TABLE `cz_category` (
  `cid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `root` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `level` tinyint(5) DEFAULT NULL,
  `lang` varchar(200) DEFAULT NULL,
  `is_show` tinyint(1) DEFAULT NULL,
  `price_attr` mediumint(5) DEFAULT NULL,
  `sort` tinyint(3) DEFAULT NULL,
  `seo_title` varchar(255) DEFAULT NULL,
  `seo_keywords` varchar(255) DEFAULT NULL,
  `seo_description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cz_category
-- ----------------------------

-- ----------------------------
-- Table structure for `cz_gift`
-- ----------------------------
DROP TABLE IF EXISTS `cz_gift`;
CREATE TABLE `cz_gift` (
  `gift_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `gift_name` varchar(255) DEFAULT NULL,
  `gift_cid` tinyint(5) unsigned DEFAULT NULL,
  `gift_type` tinyint(1) unsigned DEFAULT NULL,
  `gift_sn` varchar(60) DEFAULT NULL,
  `gift_code` varchar(60) DEFAULT NULL,
  `is_on_sale` tinyint(1) DEFAULT NULL,
  `gift_number` tinyint(5) DEFAULT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `gift_brief` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`gift_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cz_gift
-- ----------------------------

-- ----------------------------
-- Table structure for `cz_goods`
-- ----------------------------
DROP TABLE IF EXISTS `cz_goods`;
CREATE TABLE `cz_goods` (
  `goods_id` mediumint(11) unsigned NOT NULL AUTO_INCREMENT,
  `goods_name` varchar(100) DEFAULT NULL,
  `goods_sn` varchar(100) DEFAULT NULL,
  `goods_code` varchar(100) DEFAULT NULL,
  `cid` int(11) DEFAULT NULL,
  `brand_id` int(11) DEFAULT NULL,
  `is_onsale` tinyint(1) DEFAULT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `goods_brief` varchar(255) DEFAULT NULL,
  `shop_price` decimal(10,2) DEFAULT NULL,
  `market_price` decimal(10,2) DEFAULT NULL,
  `cost_price` decimal(10,2) DEFAULT NULL,
  `integral` int(10) DEFAULT NULL,
  `goods_desc` text,
  `thumb_type` tinyint(1) DEFAULT NULL,
  `goods_thumb` varchar(255) DEFAULT NULL,
  `goods_number` smallint(5) DEFAULT NULL,
  `warn_number` tinyint(3) DEFAULT NULL,
  `goods_weight` decimal(10,3) DEFAULT NULL,
  `goods_type` int(11) DEFAULT NULL,
  `add_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`goods_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cz_goods
-- ----------------------------

-- ----------------------------
-- Table structure for `cz_goods_attr`
-- ----------------------------
DROP TABLE IF EXISTS `cz_goods_attr`;
CREATE TABLE `cz_goods_attr` (
  `goods_attr_id` mediumint(11) unsigned NOT NULL AUTO_INCREMENT,
  `goods_id` mediumint(11) NOT NULL,
  `attr_id` int(11) NOT NULL,
  `attr_name` varchar(60) NOT NULL,
  `attr_sn` varchar(100) DEFAULT NULL,
  `attr_price` decimal(10,2) DEFAULT NULL,
  `arrt_number` smallint(5) DEFAULT NULL,
  PRIMARY KEY (`goods_attr_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cz_goods_attr
-- ----------------------------

-- ----------------------------
-- Table structure for `cz_goods_gallery`
-- ----------------------------
DROP TABLE IF EXISTS `cz_goods_gallery`;
CREATE TABLE `cz_goods_gallery` (
  `gallery_id` mediumint(11) unsigned NOT NULL AUTO_INCREMENT,
  `goods_id` mediumint(11) NOT NULL,
  `img_url` varchar(255) DEFAULT NULL,
  `thumb_url` varchar(255) DEFAULT NULL,
  `img_original` varchar(255) DEFAULT NULL,
  `is_default` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`gallery_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cz_goods_gallery
-- ----------------------------

-- ----------------------------
-- Table structure for `cz_goods_promotion`
-- ----------------------------
DROP TABLE IF EXISTS `cz_goods_promotion`;
CREATE TABLE `cz_goods_promotion` (
  `gp_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `start_time` int(11) DEFAULT NULL,
  `end_time` int(11) DEFAULT NULL,
  `infos` varchar(255) DEFAULT NULL,
  `op_type` tinyint(1) unsigned DEFAULT NULL,
  `brand_id` int(11) DEFAULT NULL,
  `cid` int(11) DEFAULT NULL,
  `min_price` decimal(10,2) DEFAULT NULL,
  `bouns_id` int(11) DEFAULT NULL,
  `add_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`gp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cz_goods_promotion
-- ----------------------------

-- ----------------------------
-- Table structure for `cz_goods_type`
-- ----------------------------
DROP TABLE IF EXISTS `cz_goods_type`;
CREATE TABLE `cz_goods_type` (
  `type_id` int(8) unsigned NOT NULL AUTO_INCREMENT,
  `type_name` varchar(60) DEFAULT NULL,
  `is_show` tinyint(1) DEFAULT NULL,
  `sort` tinyint(3) DEFAULT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cz_goods_type
-- ----------------------------

-- ----------------------------
-- Table structure for `cz_integral`
-- ----------------------------
DROP TABLE IF EXISTS `cz_integral`;
CREATE TABLE `cz_integral` (
  `integral_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `integral_name` varchar(255) DEFAULT NULL,
  `integral` int(8) unsigned DEFAULT NULL,
  `integral_money` decimal(10,2) DEFAULT NULL,
  `status` tinyint(1) unsigned DEFAULT NULL,
  `integral_type` tinyint(1) unsigned DEFAULT NULL,
  `integral_config` text,
  `add_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`integral_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cz_integral
-- ----------------------------

-- ----------------------------
-- Table structure for `cz_order`
-- ----------------------------
DROP TABLE IF EXISTS `cz_order`;
CREATE TABLE `cz_order` (
  `order_id` mediumint(11) unsigned NOT NULL AUTO_INCREMENT,
  `order_sn` varchar(20) DEFAULT NULL,
  `order_type` tinyint(1) DEFAULT NULL,
  `user_id` mediumint(11) DEFAULT NULL,
  `add_time` int(11) DEFAULT NULL,
  `confirm_time` int(11) DEFAULT NULL,
  `order_status` tinyint(1) DEFAULT NULL,
  `pay_time` int(1) DEFAULT NULL,
  `pay_status` tinyint(1) DEFAULT NULL,
  `shipping_time` int(1) DEFAULT NULL,
  `shipping_code` varchar(60) DEFAULT NULL,
  `shipping_status` tinyint(1) DEFAULT NULL,
  `consignee` varchar(60) DEFAULT NULL,
  `province` int(10) DEFAULT NULL,
  `city` int(10) DEFAULT NULL,
  `district` int(10) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `zipcode` varchar(60) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `shipping_id` int(11) DEFAULT NULL,
  `shipping_name` varchar(100) DEFAULT NULL,
  `pay_id` int(11) DEFAULT NULL,
  `pay_name` varchar(100) DEFAULT NULL,
  `goods_amount` decimal(10,2) DEFAULT NULL,
  `shipping_fee` decimal(10,2) DEFAULT NULL,
  `card_fee` decimal(10,2) DEFAULT NULL,
  `pay_fee` decimal(10,2) DEFAULT NULL,
  `money_paid` decimal(10,2) DEFAULT NULL,
  `bonus_id` mediumint(11) DEFAULT NULL,
  `bonus_money` decimal(10,2) DEFAULT NULL,
  `integral_id` int(11) DEFAULT NULL,
  `integral_money` decimal(10,2) DEFAULT NULL,
  `order_amount` decimal(10,2) DEFAULT NULL,
  `pay_note` varchar(255) DEFAULT NULL,
  `invoice_no` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cz_order
-- ----------------------------

-- ----------------------------
-- Table structure for `cz_order_goods`
-- ----------------------------
DROP TABLE IF EXISTS `cz_order_goods`;
CREATE TABLE `cz_order_goods` (
  `og_id` mediumint(11) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` mediumint(11) NOT NULL,
  `goods_id` mediumint(11) NOT NULL,
  `goods_name` varchar(100) DEFAULT NULL,
  `goods_sn` varchar(100) DEFAULT NULL,
  `goods_number` smallint(5) DEFAULT NULL,
  `goods_attr_id` mediumint(11) DEFAULT NULL,
  `attr_name` varchar(100) DEFAULT NULL,
  `goods_price` decimal(10,2) DEFAULT NULL,
  `integral` int(10) DEFAULT NULL,
  `integral_money` decimal(10,2) DEFAULT NULL,
  `goods_amount` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`og_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cz_order_goods
-- ----------------------------

-- ----------------------------
-- Table structure for `cz_order_promotion`
-- ----------------------------
DROP TABLE IF EXISTS `cz_order_promotion`;
CREATE TABLE `cz_order_promotion` (
  `op_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `start_time` int(11) DEFAULT NULL,
  `end_time` int(11) DEFAULT NULL,
  `infos` varchar(255) DEFAULT NULL,
  `op_type` tinyint(1) unsigned DEFAULT NULL,
  `brand_id` int(11) DEFAULT NULL,
  `cid` int(11) DEFAULT NULL,
  `min_price` decimal(10,2) DEFAULT NULL,
  `bouns_id` int(11) DEFAULT NULL,
  `add_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`op_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cz_order_promotion
-- ----------------------------

-- ----------------------------
-- Table structure for `cz_payment`
-- ----------------------------
DROP TABLE IF EXISTS `cz_payment`;
CREATE TABLE `cz_payment` (
  `pay_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pay_code` varchar(32) NOT NULL,
  `pay_logo` varchar(150) DEFAULT NULL,
  `pay_name` varchar(100) NOT NULL,
  `pay_desc` text,
  `status` tinyint(1) unsigned DEFAULT NULL,
  `pay_fee` decimal(10,2) DEFAULT NULL,
  `is_cod` tinyint(1) unsigned DEFAULT NULL,
  `is_pos` tinyint(1) DEFAULT NULL,
  `pay_config` text,
  PRIMARY KEY (`pay_id`),
  KEY `pay` (`pay_id`,`pay_code`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cz_payment
-- ----------------------------

-- ----------------------------
-- Table structure for `cz_presell`
-- ----------------------------
DROP TABLE IF EXISTS `cz_presell`;
CREATE TABLE `cz_presell` (
  `presell_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `goods_id` mediumint(11) unsigned DEFAULT NULL,
  `start_time` int(11) DEFAULT NULL,
  `end_time` int(11) DEFAULT NULL,
  `presell_price` varchar(60) DEFAULT NULL,
  `presell_payment` decimal(10,2) DEFAULT NULL,
  `presell_people_one` tinyint(5) unsigned DEFAULT NULL,
  `presell_price_one` decimal(10,2) DEFAULT NULL,
  `presell_people_two` tinyint(5) unsigned DEFAULT NULL,
  `presell_price_two` decimal(10,2) DEFAULT NULL,
  `presell_people_three` tinyint(5) DEFAULT NULL,
  `presell_price_three` decimal(10,2) DEFAULT NULL,
  `infos` varchar(255) DEFAULT NULL,
  `add_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`presell_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cz_presell
-- ----------------------------

-- ----------------------------
-- Table structure for `cz_shipping`
-- ----------------------------
DROP TABLE IF EXISTS `cz_shipping`;
CREATE TABLE `cz_shipping` (
  `shipping_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `shipping_code` varchar(32) NOT NULL,
  `shipping_name` varchar(100) NOT NULL,
  `shipping_desc` text,
  `status` tinyint(1) unsigned DEFAULT NULL,
  `is_cod` tinyint(1) DEFAULT NULL,
  `is_gua` tinyint(1) DEFAULT NULL,
  `sort` tinyint(4) DEFAULT NULL,
  `pay_type` tinyint(1) DEFAULT NULL,
  `shipping_config` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`shipping_id`),
  KEY `shipping` (`shipping_id`,`shipping_code`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cz_shipping
-- ----------------------------

-- ----------------------------
-- Table structure for `cz_shipping_area`
-- ----------------------------
DROP TABLE IF EXISTS `cz_shipping_area`;
CREATE TABLE `cz_shipping_area` (
  `id` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(1) unsigned DEFAULT NULL,
  `shipping_id` int(11) DEFAULT NULL,
  `shipping_config` text,
  PRIMARY KEY (`id`),
  KEY `shipping_area` (`shipping_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cz_shipping_area
-- ----------------------------

-- ----------------------------
-- Table structure for `cz_system`
-- ----------------------------
DROP TABLE IF EXISTS `cz_system`;
CREATE TABLE `cz_system` (
  `varname` varchar(20) NOT NULL DEFAULT '',
  `info` varchar(100) DEFAULT NULL,
  `groupid` tinyint(3) unsigned DEFAULT NULL,
  `value` text,
  `lang` tinyint(1) unsigned DEFAULT NULL,
  PRIMARY KEY (`varname`),
  KEY `varname` (`varname`,`groupid`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cz_system
-- ----------------------------

-- ----------------------------
-- Table structure for `cz_time_goods`
-- ----------------------------
DROP TABLE IF EXISTS `cz_time_goods`;
CREATE TABLE `cz_time_goods` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `tp_id` int(11) NOT NULL,
  `goods_id` mediumint(11) unsigned NOT NULL,
  `goods_code` varchar(100) DEFAULT NULL,
  `goods_name` varchar(255) DEFAULT NULL,
  `goods_attr` varchar(255) DEFAULT NULL,
  `goods_price` decimal(10,2) DEFAULT NULL,
  `promotion_price` decimal(10,2) DEFAULT NULL,
  `max_number` tinyint(5) DEFAULT NULL,
  `add_time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cz_time_goods
-- ----------------------------

-- ----------------------------
-- Table structure for `cz_time_promotion`
-- ----------------------------
DROP TABLE IF EXISTS `cz_time_promotion`;
CREATE TABLE `cz_time_promotion` (
  `tp_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `status` tinyint(1) unsigned DEFAULT NULL,
  `start_time` int(11) DEFAULT NULL,
  `end_time` int(11) DEFAULT NULL,
  `infos` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`tp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cz_time_promotion
-- ----------------------------

-- ----------------------------
-- Table structure for `cz_tuan`
-- ----------------------------
DROP TABLE IF EXISTS `cz_tuan`;
CREATE TABLE `cz_tuan` (
  `tuan_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `goods_id` mediumint(11) unsigned DEFAULT NULL,
  `start_time` int(11) DEFAULT NULL,
  `end_time` int(11) DEFAULT NULL,
  `tuan_price` decimal(10,2) DEFAULT NULL,
  `min_number` tinyint(5) DEFAULT NULL,
  `add_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`tuan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cz_tuan
-- ----------------------------

-- ----------------------------
-- Table structure for `cz_user`
-- ----------------------------
DROP TABLE IF EXISTS `cz_user`;
CREATE TABLE `cz_user` (
  `user_id` mediumint(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `user_rank` tinyint(3) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `user_points` int(10) unsigned DEFAULT NULL,
  `reg_time` int(11) unsigned DEFAULT NULL,
  `last_login` int(11) DEFAULT NULL,
  `last_ip` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cz_user
-- ----------------------------

-- ----------------------------
-- Table structure for `cz_user_bonus`
-- ----------------------------
DROP TABLE IF EXISTS `cz_user_bonus`;
CREATE TABLE `cz_user_bonus` (
  `ub_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `bonus_id` int(11) unsigned DEFAULT NULL,
  `bonus_sn` varchar(60) DEFAULT NULL,
  `user_id` mediumint(11) DEFAULT NULL,
  `used_time` int(11) DEFAULT NULL,
  `order_id` mediumint(11) DEFAULT NULL,
  `add_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`ub_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cz_user_bonus
-- ----------------------------
