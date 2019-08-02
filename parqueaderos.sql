/*
Navicat MySQL Data Transfer

Source Server         : LOCAL
Source Server Version : 50505
Source Host           : 127.0.0.1:3306
Source Database       : parqueaderos

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2019-08-02 15:44:22
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for parqueaderos
-- ----------------------------
DROP TABLE IF EXISTS `parqueaderos`;
CREATE TABLE `parqueaderos` (
  `id_parqueadero` int(11) NOT NULL AUTO_INCREMENT,
  `puesto1` tinyint(1) DEFAULT 0,
  `puesto2` tinyint(1) DEFAULT 0,
  `puesto3` tinyint(1) DEFAULT 0,
  `puesto4` tinyint(1) DEFAULT 0,
  `puesto5` tinyint(1) DEFAULT 0,
  PRIMARY KEY (`id_parqueadero`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of parqueaderos
-- ----------------------------
