--
-- Table structure for table `Build_menu`
--
DROP TABLE IF EXISTS `Build_menu`;
CREATE TABLE IF NOT EXISTS `Build_menu` (
`id` int(11) NOT NULL  COMMENT '对应建筑原始ID
',
`img` int(11) ,
`name` int(11) ,
`desc1` varchar(512) ,
PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ;
