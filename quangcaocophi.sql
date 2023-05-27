CREATE TABLE `quangcao` (
  `idquangcao` int(11) NOT NULL auto_increment,
  `tenquangcao` varchar(300) collate utf8_unicode_ci NOT NULL,
  `anhminhhoa` varchar(300) collate utf8_unicode_ci NOT NULL,
  `lienket` varchar(300) collate utf8_unicode_ci NOT NULL,
  `vitri` int(11) NOT NULL,
    `phiquangcao` int(11) NULL,
  PRIMARY KEY  (`idquangcao`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=20 ;
INSERT INTO `quangcao` VALUES (18, 'Xe', 'images/uploads/20151224045650_phonhadat.gif', 'http://www.chotot.vn/toan-quoc/mua-ban#           ', 1);
INSERT INTO `quangcao` VALUES (15, 'Quảng cáo vui', 'images/uploads/20151203042714_quangcao3.png', 'http://xem.vn        ', 0);
INSERT INTO `quangcao` VALUES (19, 'Xe', 'images/uploads/20151224045553_20151201112118_quangcao1.jpg', 'http://thegioixe.vn/bmw-gioi-thieu-concept-sedan-co-nho/', 1);
INSERT INTO `quangcao` VALUES (1, 'Quảng cáo xe', 'images/uploads/20151224045742_20151201104646_quangcao2.jpg', 'http://www.thegoixe.vn   ', 1);
