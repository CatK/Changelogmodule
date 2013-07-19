/*
Install this patch on your database 
@Nekkathecat
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `devblog`
-- ----------------------------
DROP TABLE IF EXISTS `devblog`;
CREATE TABLE `devblog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL DEFAULT 'NO TITLE',
  `message` text,
  `author` varchar(255) NOT NULL DEFAULT 'UNKNOWN',
  `avatar` varchar(255) NOT NULL DEFAULT 'none.png',
  `visible` int(11) NOT NULL DEFAULT '1',
  `coms` int(11) NOT NULL DEFAULT '0',
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `category` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=74 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of devblog
-- ----------------------------
INSERT INTO `devblog` VALUES ('1', 'TEST', 'LOL', 'CatK', 'none.png', '1', '0', '2013-07-14 19:21:05', 'Nashira');
