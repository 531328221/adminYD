/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : adminyd

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-04-03 00:11:20
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) DEFAULT NULL,
  `email` char(60) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `remember_token` char(64) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'a531328221', '531328221@qq.com', '$2y$10$3P5yb3L9xbCwjl7jdFOBFerX8onXFcr/9RluQMY45IrzwkLimSg2m', '2018-04-02 13:09:58', '2018-04-02 13:09:58', 'F2GmGHVFX99HCXg119oW9E5ULEAEPrL6IJhzRC2vm2kstpLeVX3XsMcaaNMA');
INSERT INTO `users` VALUES ('2', 'a531328222', '531328222@qq.com', '$2y$10$pHT71gRiM7Z88DYf6gIvD.KhZDVldm8DN8mio7VumCajHt0t6Mnym', '2018-04-03 00:10:05', '2018-04-03 00:10:05', null);
