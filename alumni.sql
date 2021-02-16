/*
SQLyog Community v12.3.3 (64 bit)
MySQL - 10.4.14-MariaDB : Database - sma
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `id_admin` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(35) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `profilename` varchar(30) DEFAULT NULL,
  `gender` enum('Male','Fimale') DEFAULT NULL,
  `profileimg` varchar(100) DEFAULT NULL,
  `wa` varchar(15) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `profileaddress` varchar(300) DEFAULT NULL,
  `ip` varchar(50) DEFAULT NULL,
  `sts_aktif` tinyint(4) DEFAULT 1 COMMENT '1=aktif 2=blokir',
  `last_login` datetime DEFAULT NULL,
  `_cid` int(10) DEFAULT NULL,
  `_ctime` datetime DEFAULT NULL,
  `_uid` int(10) DEFAULT NULL,
  `_utime` datetime DEFAULT NULL,
  `lat` varchar(250) DEFAULT NULL,
  `lng` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=MyISAM AUTO_INCREMENT=132 DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

insert  into `admin`(`id_admin`,`username`,`password`,`level`,`profilename`,`gender`,`profileimg`,`wa`,`email`,`profileaddress`,`ip`,`sts_aktif`,`last_login`,`_cid`,`_ctime`,`_uid`,`_utime`,`lat`,`lng`) values 
(2,'super','1b3231655cebb7a1f783eddf27d254ca',1,'IRONMAN','Male','fileadmin_22012021073610.png','0852 3334 1122','robot@mail.net','USA',NULL,1,'2021-02-16 13:26:23',NULL,NULL,NULL,NULL,NULL,NULL),
(14,'admin','21232f297a57a5a743894a0e4a801fc3',2,'Mr.Cepi','Male','fileadmin_22012021013555.png','0852 2096 9224','cs@gmail.com','Indonesia',NULL,1,'2021-02-16 17:27:50',NULL,NULL,NULL,NULL,NULL,NULL);

/*Table structure for table `data_acara` */

DROP TABLE IF EXISTS `data_acara`;

CREATE TABLE `data_acara` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kode` varchar(100) DEFAULT NULL,
  `id_jenis_acara` int(11) DEFAULT NULL,
  `judul_acara` text DEFAULT NULL,
  `durasi` int(11) DEFAULT NULL,
  `tgl` date DEFAULT NULL,
  `waktu` varchar(10) DEFAULT NULL,
  `_cid` int(11) DEFAULT NULL,
  `_ctime` datetime DEFAULT current_timestamp(),
  `_uid` int(11) DEFAULT NULL,
  `_utime` datetime DEFAULT NULL,
  `tempat` varchar(100) DEFAULT NULL,
  `cp` varchar(100) DEFAULT NULL,
  `file_peserta` varchar(100) DEFAULT NULL,
  `jml_undangan` int(11) DEFAULT NULL,
  `pewara` varchar(250) DEFAULT NULL,
  `s_tempat` varchar(250) DEFAULT NULL,
  `l_media` varchar(250) DEFAULT NULL,
  `ajudan_dinas` varchar(250) DEFAULT NULL,
  `watermark` varchar(250) DEFAULT NULL,
  `pakaian` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4;

/*Data for the table `data_acara` */

insert  into `data_acara`(`id`,`kode`,`id_jenis_acara`,`judul_acara`,`durasi`,`tgl`,`waktu`,`_cid`,`_ctime`,`_uid`,`_utime`,`tempat`,`cp`,`file_peserta`,`jml_undangan`,`pewara`,`s_tempat`,`l_media`,`ajudan_dinas`,`watermark`,`pakaian`) values 
(3,'20210125160009',1,'yyy',1,'2021-01-25',NULL,14,'2021-01-25 16:00:09',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(4,'20210125160029',1,'dddd',4,'2021-01-25',NULL,14,'2021-01-25 16:00:29',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(5,'20210126061214',1,'kemerdekaan',2021,'2021-01-28',NULL,14,'2021-01-26 06:12:14',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(6,'20210126061828',4,'fgfgfgfg',1,'2021-01-26',NULL,14,'2021-01-26 06:18:28',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(7,'20210126062846',1,'kemerdekaan',1,'2021-01-26',NULL,14,'2021-01-26 06:28:46',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(8,'20210126062947',1,'dfdfdfdf',1,'2021-01-26',NULL,14,'2021-01-26 06:29:47',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(9,'20210126063119',1,'kemerdekaan',1,'2021-01-26',NULL,14,'2021-01-26 06:31:19',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(10,'20210127210939',1,'dfdfdf',1,'2021-01-27',NULL,14,'2021-01-27 21:09:39',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(11,'20210127225631',1,'Kemerdekan republik indensia tahun 2021 Kemerdekan republik indensia tahun 2021Kemerdekan republik indensia tahun 2021 Kemerdekan republik indensia tahun 2021',6,'2021-01-29',NULL,14,'2021-01-27 22:56:31',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(12,'20210128103116',1,'I just create the event',1,'2021-01-28',NULL,14,'2021-01-28 10:31:16',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(13,'20210128105039',1,'pelantikan kapolri',1,'2021-01-28',NULL,14,'2021-01-28 10:50:39',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(14,'20210128143914',1,'Terpesona',NULL,'2021-01-28','13.00',14,'2021-01-28 14:39:14',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(15,'20210128144429',1,'jen',NULL,'0000-00-00','',14,'2021-01-28 14:44:29',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(16,'20210128185601',1,'sdsdsd',NULL,'2021-01-29','34:34',14,'2021-01-28 18:56:01',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(17,'20210129064917',1,'pelantikan',NULL,'0000-00-00','',14,'2021-01-29 06:49:17',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(18,'20210129071912',1,'TES',NULL,'0000-00-00','',14,'2021-01-29 07:19:12',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(19,'20210129071934',1,'dddd',NULL,'0000-00-00','',14,'2021-01-29 07:19:34',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(20,'20210129072021',1,'sdfsdfdsf',NULL,'0000-00-00','',14,'2021-01-29 07:20:21',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(21,'20210129072049',1,'sdsdsdsd',NULL,'0000-00-00','',14,'2021-01-29 07:20:49',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(22,'20210129073355',1,'acara negara',NULL,'2021-01-29','34:34',14,'2021-01-29 07:33:55',NULL,NULL,NULL,NULL,'2021/20210129073355/file-peserta-29_01_2021.docx',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(23,'20210129080456',1,'siap siap',NULL,'2021-01-29','',14,'2021-01-29 08:04:56',NULL,NULL,NULL,NULL,'2021/20210129080456/file-peserta-29_01_2021.JPG',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(24,'20210129082625',1,'okok',NULL,'2021-01-29','',14,'2021-01-29 08:26:25',NULL,NULL,NULL,NULL,'2021/20210129082625/file-peserta-29_01_2021.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(25,'20210129112037',1,'trip newzealend',NULL,'2021-01-29','',14,'2021-01-29 11:20:37',NULL,NULL,NULL,NULL,'2021/20210129112037/file-peserta-29_01_2021.docx',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(26,'2021012916463989',1,'you ',NULL,'2021-01-29','',14,'2021-01-29 16:46:39',NULL,NULL,NULL,NULL,'2021/2021012916463989/file-peserta-29_01_2021.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(27,'2021013008550164',1,'hari sabtu',NULL,'2021-01-30','',14,'2021-01-30 08:55:01',NULL,NULL,NULL,NULL,'2021/2021013008550164/file-peserta-30_01_2021.JPG',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(28,'2021013008582761',1,'sabtu',NULL,'2021-01-30','',14,'2021-01-30 08:58:27',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(29,'2021013010053898',1,'sabtu siang',NULL,'2021-02-03','',14,'2021-01-30 10:05:38',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(30,'2021013014590036',1,'sabtu malam',NULL,'2021-01-30','',14,'2021-01-30 14:59:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(31,'2021020118483273',1,'peresmian gedung gbk',NULL,'2021-02-01','',14,'2021-02-01 18:48:32',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(32,'2021020511271153',32,'Peresmian gedung gbk',NULL,'2021-02-27','34:34',14,'2021-02-05 09:32:03',14,'2021-02-09 16:35:14','JAKARTAf','085221288210','2021/2021020509535726/file-peserta-05_02_2021.xlsx',34,'rererer','e','sss','sss','asas','');

/*Table structure for table `kalkulasi_waktu` */

DROP TABLE IF EXISTS `kalkulasi_waktu`;

CREATE TABLE `kalkulasi_waktu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `agenda` text DEFAULT NULL,
  `jam_mulai` time DEFAULT NULL,
  `jam_akhir` time DEFAULT NULL,
  `durasi` varchar(5) DEFAULT NULL,
  `kode` varchar(100) DEFAULT NULL,
  `tgl` datetime DEFAULT current_timestamp(),
  `urut` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8mb4;

/*Data for the table `kalkulasi_waktu` */

insert  into `kalkulasi_waktu`(`id`,`agenda`,`jam_mulai`,`jam_akhir`,`durasi`,`kode`,`tgl`,`urut`) values 
(34,'sambutan','07:30:00','07:50:00','20','2021012916463989','2021-01-29 23:30:02',1),
(35,'doa','09:51:00','10:21:00','30','2021012916463989','2021-01-29 23:30:23',7),
(36,NULL,'10:59:00','07:00:00',NULL,'2021012916463989','2021-01-29 23:31:57',9),
(37,'dsdsd','08:51:00','09:21:00','30','2021012916463989','2021-01-29 23:36:58',5),
(38,'','10:21:00','10:59:00','38','2021012916463989','2021-01-29 23:37:06',8),
(39,'33','08:21:00','08:51:00','30','2021012916463989','2021-01-29 23:37:08',4),
(40,'break','07:50:00','07:51:00','1','2021012916463989','2021-01-29 23:37:16',2),
(41,NULL,'09:21:00','09:51:00','30','2021012916463989','2021-01-29 23:41:13',6),
(42,NULL,'07:51:00','08:21:00','30','2021012916463989','2021-01-29 23:43:36',3),
(43,NULL,'07:00:00','07:30:00','30','2021012916463989','2021-01-29 23:44:36',10),
(44,'ss','14:35:00','07:00:00','14:35','2021013008582761','2021-01-30 08:58:27',1),
(45,'terpesona','07:00:00','07:00:00','09:00','2021013008582761','2021-01-30 08:59:31',2),
(46,'','07:00:00','07:00:00','07:15','2021013008582761','2021-01-30 09:01:51',3),
(47,'upacara','01:15:00','01:20:00','5','2021013008550164','2021-01-30 09:13:27',1),
(48,'doa','01:22:00','01:27:00','5','2021013008550164','2021-01-30 09:13:32',3),
(49,'makan siang','01:27:00','01:49:00','22','2021013008550164','2021-01-30 09:15:48',4),
(50,'sambutan','01:20:00','01:22:00','2','2021013008550164','2021-01-30 09:16:35',2),
(51,'sambutan','07:30:00','08:00:00','30','2021013010053898','2021-01-30 10:05:38',1),
(52,'doa oleh pak ustd','09:10:00','09:15:00','5','2021013010053898','2021-01-30 10:06:37',4),
(53,'break','09:00:00','09:10:00','10','2021013010053898','2021-01-30 10:07:09',3),
(54,'','08:00:00','09:00:00','60','2021013010053898','2021-01-30 10:22:34',2),
(55,'pentutupan','09:15:00','09:45:00','30','2021013010053898','2021-01-30 10:23:50',5),
(56,'sambutan','07:30:00','08:10:00','40','2021013014590036','2021-01-30 14:59:00',1),
(57,'doa','09:10:00','10:10:00','60','2021013014590036','2021-01-30 14:59:57',3),
(61,'','08:10:00','09:10:00','60','2021013014590036','2021-01-30 15:05:25',2),
(68,'sambutan menteri','07:30:00','07:41:00','11','2021020118483273','2021-02-01 18:48:32',1),
(69,NULL,'07:41:00','08:11:00','30','2021020118483273','2021-02-01 18:48:56',2),
(70,NULL,NULL,NULL,NULL,'2021020509320396','2021-02-05 09:32:03',1),
(71,'sambutan','15:35:00','16:05:00','30','2021020509535726','2021-02-05 09:55:44',1),
(72,'doa ','16:05:00','16:35:00','30','2021020509535726','2021-02-05 09:56:04',2),
(75,'makan siang','16:35:00','17:03:00','28','2021020509535726','2021-02-05 09:59:07',3),
(76,NULL,'18:03:00','18:33:00','30','2021020509535726','2021-02-05 09:59:08',6),
(77,NULL,'17:33:00','18:03:00','30','2021020509535726','2021-02-05 09:59:10',5),
(79,NULL,'17:03:00','17:33:00','30','2021020509535726','2021-02-05 09:59:12',4),
(81,'sambutan','01:00:00','01:01:00','1','2021020511262378','2021-02-05 11:26:38',1),
(82,'doa ','01:01:00','01:31:00','30','2021020511262378','2021-02-05 11:26:41',2),
(83,'break','01:31:00','02:01:00','30','2021020511262378','2021-02-05 11:26:44',3),
(96,'okedfdfdfdf&nbsp;<br />\n<strong>oke </strong>lah','08:30:00','08:50:00','20','2021020511271153','2021-02-05 19:29:52',1),
(97,'<span style=\"color:#e74c3c\">doa</span>','09:50:00','11:10:00','80','2021020511271153','2021-02-05 19:30:12',4),
(98,'makan<br />\n<strong>siang</strong> ah','11:10:00','11:40:00','30','2021020511271153','2021-02-05 19:30:20',5),
(99,'doa sdsdsdsd','09:20:00','09:50:00','30','2021020511271153','2021-02-05 20:33:31',3),
(100,'sss sepertinyasss seper<span style=\"color:#16a085\">tinyasss seper</span>tinyasss sepertinyasss sepertinya','08:50:00','09:20:00','30','2021020511271153','2021-02-09 14:42:54',2);

/*Table structure for table `main_konfig` */

DROP TABLE IF EXISTS `main_konfig`;

CREATE TABLE `main_konfig` (
  `id_konfig` int(10) unsigned NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `value` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `main_konfig` */

insert  into `main_konfig`(`id_konfig`,`nama`,`value`) values 
(1,'Loggo','logo.png'),
(2,'Favicon','fileb_15122020085520.ico'),
(3,'loggo_login','filec_23122020104601.png'),
(4,'loggo_admin','filed_23122020105958.png'),
(5,'Project Date','01/12/2020'),
(6,'Client Name','TNI AL'),
(8,'Product By','#'),
(7,'Aplication Name','ALUMNI93'),
(9,'Copyright','alumni'),
(10,'Record log','2000'),
(11,'Version','DEV 1.0.0'),
(12,'Power',''),
(13,'Title Name','alumni'),
(14,'Header Name','alumni');

/*Table structure for table `main_level` */

DROP TABLE IF EXISTS `main_level`;

CREATE TABLE `main_level` (
  `id_level` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code_level` int(5) DEFAULT NULL,
  `levelname` varchar(25) NOT NULL,
  `direct` text DEFAULT NULL,
  `ket` text DEFAULT NULL,
  `control` text DEFAULT NULL,
  `_ctime` datetime DEFAULT NULL,
  `_cid` int(11) DEFAULT NULL,
  `_utime` datetime DEFAULT NULL,
  `_uid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_level`)
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

/*Data for the table `main_level` */

insert  into `main_level`(`id_level`,`code_level`,`levelname`,`direct`,`ket`,`control`,`_ctime`,`_cid`,`_utime`,`_uid`) values 
(1,1,'super','super','kelola keseluruhan',NULL,NULL,NULL,'2020-07-22 22:05:14',2),
(2,2,'admin','dashboard','admin',NULL,NULL,NULL,'2020-12-16 05:37:55',2),
(51,3,'kasubag','kasubag','kasubag',NULL,'2021-01-22 01:22:10',2,'2021-01-22 01:23:21',2),
(52,4,'kabag','kabag','kabag',NULL,'2021-01-22 01:23:31',2,NULL,NULL),
(53,5,'karo','karo','karo',NULL,'2021-01-22 01:23:44',2,'2021-01-22 01:23:49',2);

/*Table structure for table `main_log` */

DROP TABLE IF EXISTS `main_log`;

CREATE TABLE `main_log` (
  `id_log` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_admin` int(11) DEFAULT NULL,
  `nama_user` varchar(56) DEFAULT NULL,
  `table_updated` varchar(25) DEFAULT NULL,
  `aksi` text NOT NULL,
  `tgl` datetime DEFAULT NULL,
  PRIMARY KEY (`id_log`)
) ENGINE=MyISAM AUTO_INCREMENT=98 DEFAULT CHARSET=latin1;

/*Data for the table `main_log` */

insert  into `main_log`(`id_log`,`id_admin`,`nama_user`,`table_updated`,`aksi`,`tgl`) values 
(40,14,'Mr.Cepi','admin','Login','2021-01-22 07:36:19'),
(2,128,'USH-359','admin','Login','2020-12-24 15:58:14'),
(39,2,'IRONMAN','admin','Login','2021-01-22 07:20:48'),
(4,128,'USH-359','admin','Login','2020-12-24 19:37:26'),
(5,128,'USH-359','admin','Login','2020-12-25 13:42:42'),
(6,128,'USH-359','admin','Login','2020-12-25 14:28:22'),
(7,14,'Mr.Cepi','admin','Login','2020-12-25 14:46:16'),
(8,14,'Mr.Cepi','admin','Login','2020-12-25 14:54:44'),
(9,128,'USH-359','admin','Login','2020-12-25 15:20:37'),
(10,14,'Mr.Cepi','admin','Login','2020-12-25 15:21:56'),
(11,14,'Mr.Cepi','admin','Login','2020-12-25 16:55:58'),
(12,2,'IRONMAN','admin','Login','2020-12-25 16:59:53'),
(13,14,'Mr.Cepi','admin','Login','2020-12-25 17:14:04'),
(14,128,'USH-359','admin','Login','2020-12-25 18:37:52'),
(15,128,'USH-359','admin','Login','2020-12-25 20:28:06'),
(16,128,'USH-359','admin','Login','2020-12-25 20:40:29'),
(17,14,'Mr.Cepi','admin','Login','2020-12-25 20:42:20'),
(18,14,'Mr.Cepi','admin','Login','2020-12-25 20:47:43'),
(19,14,'Mr.Cepi','admin','Login','2020-12-26 10:00:18'),
(20,14,'Mr.Cepi','admin','Login','2020-12-26 10:11:48'),
(21,14,'Mr.Cepi','admin','Login','2020-12-26 13:08:12'),
(22,14,'Mr.Cepi','admin','Login','2020-12-26 14:54:58'),
(23,14,'Mr.Cepi','admin','Login','2020-12-26 16:50:34'),
(24,128,'USH-359','admin','Login','2020-12-26 17:06:13'),
(25,14,'Mr.Cepi','admin','Login','2020-12-26 17:08:42'),
(26,128,'USH-359','admin','Login','2020-12-26 20:43:42'),
(27,14,'Mr.Cepi','admin','Login','2020-12-26 21:37:44'),
(28,14,'Mr.Cepi','admin','Login','2020-12-28 10:00:13'),
(29,14,'Mr.Cepi','admin','Login','2020-12-28 10:33:41'),
(30,128,'USH-359','admin','Login','2020-12-28 10:43:06'),
(31,14,'Mr.Cepi','admin','Login','2020-12-28 10:49:15'),
(32,128,'USH-359','admin','Login','2020-12-28 13:10:40'),
(33,14,'Mr.Cepi','admin','Login','2020-12-28 13:17:59'),
(34,128,'USH-359','admin','Login','2020-12-28 13:24:26'),
(35,14,'Mr.Cepi','admin','Login','2020-12-28 13:33:50'),
(36,2,'IRONMAN','admin','Login','2020-12-28 13:34:44'),
(37,128,'USH-359','data_kri','Login','2020-12-28 14:40:39'),
(38,2,'IRONMAN','admin','Login','2021-01-22 07:19:23'),
(41,14,'Mr.Cepi','admin','Login','2021-01-22 07:38:22'),
(42,14,'Mr.Cepi','admin','Login','2021-01-23 18:53:37'),
(43,14,'Mr.Cepi','admin','Login','2021-01-24 06:03:33'),
(44,14,'Mr.Cepi','admin','Login','2021-01-24 13:01:30'),
(45,14,'Mr.Cepi','admin','Login','2021-01-24 18:13:40'),
(46,14,'Mr.Cepi','admin','Login','2021-01-24 18:18:35'),
(47,14,'Mr.Cepi','admin','Login','2021-01-24 20:15:10'),
(48,14,'Mr.Cepi','admin','Login','2021-01-24 21:40:37'),
(49,14,'Mr.Cepi','admin','Login','2021-01-25 07:41:01'),
(50,14,'Mr.Cepi','admin','Login','2021-01-25 09:32:42'),
(51,14,'Mr.Cepi','admin','Login','2021-01-25 10:23:02'),
(52,14,'Mr.Cepi','admin','Login','2021-01-25 20:20:27'),
(53,14,'Mr.Cepi','admin','Login','2021-01-26 06:04:09'),
(54,14,'Mr.Cepi','admin','Login','2021-01-26 06:58:14'),
(55,14,'Mr.Cepi','admin','Login','2021-01-26 11:33:13'),
(56,14,'Mr.Cepi','admin','Login','2021-01-26 13:46:15'),
(57,14,'Mr.Cepi','admin','Login','2021-01-26 15:56:43'),
(58,14,'Mr.Cepi','admin','Login','2021-01-26 16:26:37'),
(59,14,'Mr.Cepi','admin','Login','2021-01-26 22:56:15'),
(60,14,'Mr.Cepi','admin','Login','2021-01-26 22:58:10'),
(61,14,'Mr.Cepi','admin','Login','2021-01-27 20:28:13'),
(62,14,'Mr.Cepi','admin','Login','2021-01-27 20:30:30'),
(63,14,'Mr.Cepi','admin','Login','2021-01-28 07:57:29'),
(64,14,'Mr.Cepi','admin','Login','2021-01-28 09:20:41'),
(65,14,'Mr.Cepi','admin','Login','2021-01-28 12:17:06'),
(66,14,'Mr.Cepi','admin','Login','2021-01-28 14:16:54'),
(67,14,'Mr.Cepi','admin','Login','2021-01-28 18:53:51'),
(68,14,'Mr.Cepi','admin','Login','2021-01-28 20:25:23'),
(69,14,'Mr.Cepi','admin','Login','2021-01-29 06:43:44'),
(70,14,'Mr.Cepi','admin','Login','2021-01-29 06:43:44'),
(71,14,'Mr.Cepi','admin','Login','2021-01-29 08:01:14'),
(72,14,'Mr.Cepi','admin','Login','2021-01-29 11:19:17'),
(73,14,'Mr.Cepi','admin','Login','2021-01-29 16:46:25'),
(74,14,'Mr.Cepi','admin','Login','2021-01-30 08:54:51'),
(75,14,'Mr.Cepi','admin','Login','2021-01-30 08:57:58'),
(76,14,'Mr.Cepi','admin','Login','2021-01-30 10:04:29'),
(77,14,'Mr.Cepi','admin','Login','2021-01-30 14:58:42'),
(78,14,'Mr.Cepi','admin','Login','2021-02-01 14:05:29'),
(79,14,'Mr.Cepi','admin','Login','2021-02-01 18:32:09'),
(80,14,'Mr.Cepi','admin','Login','2021-02-02 05:34:39'),
(81,14,'Mr.Cepi','admin','Login','2021-02-03 14:56:01'),
(82,14,'Mr.Cepi','admin','Login','2021-02-04 13:47:03'),
(83,14,'Mr.Cepi','admin','Login','2021-02-05 07:47:19'),
(84,14,'Mr.Cepi','admin','Login','2021-02-05 19:12:39'),
(85,14,'Mr.Cepi','admin','Login','2021-02-06 06:33:03'),
(86,14,'Mr.Cepi','admin','Login','2021-02-08 13:46:33'),
(87,14,'Mr.Cepi','admin','Login','2021-02-09 13:22:09'),
(88,14,'Mr.Cepi','admin','Login','2021-02-10 10:11:44'),
(89,2,'IRONMAN','admin','Login','2021-02-11 16:05:11'),
(90,14,'Mr.Cepi','admin','Login','2021-02-12 07:54:57'),
(91,14,'Mr.Cepi','admin','Login','2021-02-15 09:35:05'),
(92,14,'Mr.Cepi','admin','Login','2021-02-16 06:59:08'),
(93,14,'Mr.Cepi','admin','Login','2021-02-16 12:52:05'),
(94,14,'Mr.Cepi','admin','Login','2021-02-16 13:17:38'),
(95,2,'IRONMAN','admin','Login','2021-02-16 13:26:23'),
(96,14,'Mr.Cepi','admin','Login','2021-02-16 13:28:49'),
(97,14,'Mr.Cepi','admin','Login','2021-02-16 17:27:50');

/*Table structure for table `main_menu` */

DROP TABLE IF EXISTS `main_menu`;

CREATE TABLE `main_menu` (
  `id_menu` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(25) DEFAULT NULL,
  `level` enum('1','2') DEFAULT NULL,
  `id_main` int(11) DEFAULT 0,
  `dropdown` varchar(10) DEFAULT NULL,
  `icon` varchar(25) DEFAULT NULL,
  `hak_akses` int(11) DEFAULT NULL,
  `link` varchar(50) DEFAULT NULL,
  `target` varchar(10) DEFAULT NULL,
  `_ctime` datetime DEFAULT NULL,
  `_cid` int(10) DEFAULT NULL,
  `_utime` datetime DEFAULT NULL,
  `_uid` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_menu`)
) ENGINE=MyISAM AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;

/*Data for the table `main_menu` */

insert  into `main_menu`(`id_menu`,`nama`,`level`,`id_main`,`dropdown`,`icon`,`hak_akses`,`link`,`target`,`_ctime`,`_cid`,`_utime`,`_uid`) values 
(1,'Dashboard','1',0,'no','fas fa-tachometer-alt',1,'super/dashboard','direct','2019-12-06 17:08:21',2,NULL,NULL),
(2,'User Group','1',0,'no','fas fa-star',1,'super/manajemen','direct','2019-12-06 17:08:54',2,'2019-12-07 11:38:46',2),
(3,'Data user','1',0,'no','fas fa-users',1,'super/data_user','direct','2019-12-06 17:27:07',2,'2019-12-07 20:39:29',2),
(4,'Data Log','1',0,'no','fas fa-key',1,'super/data_log','direct','2019-12-07 11:30:13',2,'2019-12-07 21:01:23',2),
(5,'Config App','1',0,'no','fas fa-cog',1,'super/config_app','direct','2019-12-07 11:31:27',2,'2019-12-07 11:33:48',2),
(25,'Dashboard','1',0,'no','fas fa-tachometer-alt',2,'index','direct','2020-12-08 07:30:24',2,'2020-12-15 10:36:46',2),
(26,'Maps GRIMS','1',0,'no','fas fa-map',2,'maps','newtab','2020-12-08 07:32:32',2,'2020-12-15 11:18:45',2),
(49,'KONLOG','1',0,'no','fas fa-laptop',3,'page_konlog','direct','2020-12-17 23:39:05',2,'2020-12-18 09:04:20',2),
(50,'KONIS','1',0,'no','fas fa-laptop',3,'page_konis','direct','2020-12-17 23:39:24',2,'2020-12-18 09:04:27',2),
(38,'Laporan','1',0,'no','fas fa-chart-bar',2,'page_report','direct','2020-12-09 07:05:31',2,'2020-12-23 08:39:54',2),
(39,'Setting Maps','1',0,'no','fas fa-cog',2,'page_settingmaps','direct','2020-12-09 08:22:15',2,'2020-12-23 08:39:38',2),
(52,'DATA LANTAMAL','2',40,'no','#',2,'page_lantamal','direct','2020-12-22 12:49:34',2,NULL,NULL),
(53,'DATA LANAL','2',40,'no','#',2,'page_lanal','direct','2020-12-22 12:50:19',2,'2020-12-22 12:50:36',2),
(54,'DATA BRIGIF','2',40,'no','#',2,'page_brigif','direct','2020-12-22 12:51:56',2,NULL,NULL),
(40,'Master','1',0,'yes','fas fa-database',2,'master','direct','2020-12-09 08:22:56',2,'2020-12-10 05:29:41',2),
(44,'Icon Marker','2',40,'no','#',2,'mimarker','direct','2020-12-13 14:09:11',2,'2020-12-15 11:08:57',2),
(55,'DATA POSAL','2',40,'no','#',2,'page_posal','direct','2020-12-22 12:53:42',2,NULL,NULL),
(51,'KONPERS','1',0,'no','fas fa-laptop',3,'page_konpers','direct','2020-12-17 23:39:42',2,'2020-12-18 09:04:35',2),
(48,'DATA KRI','2',40,'no','#',2,'page_kri','direct','2020-12-15 10:35:14',2,'2020-12-22 12:48:49',2),
(56,'DATA SATRAD','2',40,'no','#',2,'page_satrad','direct','2020-12-22 12:54:15',2,NULL,NULL);

/*Table structure for table `pengaturan` */

DROP TABLE IF EXISTS `pengaturan`;

CREATE TABLE `pengaturan` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `val` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `pengaturan` */

insert  into `pengaturan`(`id`,`title`,`val`) values 
(1,'direktory_upload','F:/XAMPP/htdocs/dir_pandu/'),
(2,'frontend download','http://localhost/pandu-acara/download');

/*Table structure for table `tr_jenis_acara` */

DROP TABLE IF EXISTS `tr_jenis_acara`;

CREATE TABLE `tr_jenis_acara` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_acara` int(11) DEFAULT NULL,
  `jenis` varchar(100) DEFAULT NULL,
  `acara` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tr_jenis_acara` */

insert  into `tr_jenis_acara`(`id`,`id_acara`,`jenis`,`acara`) values 
(1,1,'Kenegaraan','Ibu kota'),
(2,1,'Resmi','Ibu kota'),
(3,1,'Tidak resmi','Ibu kota'),
(4,2,'Dalam Negeri','Kunjungan kerja'),
(5,3,'Dalam Negeri','Kunjungan kerja'),
(6,4,'TAMARA','Kunjungan kerja');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
