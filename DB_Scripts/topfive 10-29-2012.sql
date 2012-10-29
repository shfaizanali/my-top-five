/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50520
Source Host           : localhost:3306
Source Database       : topfive

Target Server Type    : MYSQL
Target Server Version : 50520
File Encoding         : 65001

Date: 2012-10-30 00:59:36
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `list`
-- ----------------------------
DROP TABLE IF EXISTS `list`;
CREATE TABLE `list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) NOT NULL,
  `category` int(11) NOT NULL,
  `owner` varchar(256) NOT NULL,
  `creaed` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of list
-- ----------------------------

-- ----------------------------
-- Table structure for `list_items`
-- ----------------------------
DROP TABLE IF EXISTS `list_items`;
CREATE TABLE `list_items` (
  `id` int(11) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `list_id` int(11) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `position` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of list_items
-- ----------------------------
INSERT INTO `list_items` VALUES ('0', 'P?íliš žlu?ou?ký', '1', 'P?íliš žlu?ou?ký', '2012-09-25 19:37:52', '0');

-- ----------------------------
-- Table structure for `tags`
-- ----------------------------
DROP TABLE IF EXISTS `tags`;
CREATE TABLE `tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tags
-- ----------------------------
INSERT INTO `tags` VALUES ('1', 'games');
INSERT INTO `tags` VALUES ('2', 'movies');
INSERT INTO `tags` VALUES ('3', 'fun');
INSERT INTO `tags` VALUES ('4', 'comedy');
INSERT INTO `tags` VALUES ('5', 'health');
INSERT INTO `tags` VALUES ('6', 'fitness');
INSERT INTO `tags` VALUES ('7', 'coding');
INSERT INTO `tags` VALUES ('8', 'comics');
INSERT INTO `tags` VALUES ('9', 'technology');
INSERT INTO `tags` VALUES ('10', 'music');
INSERT INTO `tags` VALUES ('11', 'genre');

-- ----------------------------
-- Table structure for `topic`
-- ----------------------------
DROP TABLE IF EXISTS `topic`;
CREATE TABLE `topic` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `title` varchar(256) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `tags` varchar(256) NOT NULL,
  `owner` varchar(256) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of topic
-- ----------------------------

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `facebook_id` varchar(20) NOT NULL,
  `first_name` varchar(256) NOT NULL,
  `last_name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `profile_url` varchar(256) NOT NULL,
  `img_large` varchar(256) NOT NULL,
  `img_small` varchar(500) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2147483647 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', '100000486571065', 'Faizan', 'Ali', 'sh.faizan.ali@gmail.com', 'http://www.facebook.com/sh.faizan.ali', 'https://graph.facebook.com/100000486571065/picture?width=200&height=200', 'https://graph.facebook.com/100000486571065/picture?width=50&height=50', '2012-10-29 17:25:11');
