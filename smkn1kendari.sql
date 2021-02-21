/*
SQLyog Community v12.3.3 (64 bit)
MySQL - 10.4.14-MariaDB : Database - sman1kendari
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
(2,'super','1b3231655cebb7a1f783eddf27d254ca',1,'IRONMAN','Male','fileadmin_22012021073610.png','0852 3334 1122','robot@mail.net','USA',NULL,1,'2021-02-11 16:05:11',NULL,NULL,NULL,NULL,NULL,NULL),
(14,'admin','21232f297a57a5a743894a0e4a801fc3',2,'Mr.Cepi','Male','fileadmin_22012021013555.png','0852 2096 9224','cs@gmail.com','Indonesia',NULL,1,'2021-02-17 14:37:26',NULL,NULL,NULL,NULL,NULL,NULL);

/*Table structure for table `data _chat` */

DROP TABLE IF EXISTS `data _chat`;

CREATE TABLE `data _chat` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tgl` datetime DEFAULT current_timestamp(),
  `sender` int(11) DEFAULT NULL,
  `receive` int(11) DEFAULT NULL,
  `chat` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `data _chat` */

/*Table structure for table `data_alumni` */

DROP TABLE IF EXISTS `data_alumni`;

CREATE TABLE `data_alumni` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(250) DEFAULT NULL,
  `jk` varchar(1) DEFAULT NULL,
  `hp` varchar(15) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `alamat` varchar(250) DEFAULT NULL,
  `id_goldar` int(11) DEFAULT NULL,
  `id_penghasilan` int(11) DEFAULT NULL,
  `id_kelas_1` int(11) DEFAULT NULL,
  `id_kelas_2` int(11) DEFAULT NULL,
  `id_kelas_3` int(11) DEFAULT NULL,
  `id_tahun` int(11) DEFAULT NULL,
  `sts_pekerjaan` tinyint(4) DEFAULT 1 COMMENT '1=sudah bekerja 2=belum',
  `id_pekerjaan` int(11) DEFAULT NULL,
  `sts_menikah` tinyint(4) DEFAULT NULL COMMENT '1=blm kawin 2=sudah 3=cerai',
  `jml_anak` int(11) DEFAULT NULL,
  `_cdate` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `data_alumni` */

/*Table structure for table `data_informasi` */

DROP TABLE IF EXISTS `data_informasi`;

CREATE TABLE `data_informasi` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_ji` tinyint(4) DEFAULT 1 COMMENT '1= berita 2=event 3=loker',
  `judul` varchar(250) DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `tgl` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `data_informasi` */

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
(9,'Copyright','grims'),
(10,'Record log','2000'),
(11,'Version','DEV 1.0.0'),
(12,'Power',''),
(13,'Title Name','GRIMS'),
(14,'Header Name','GRIMS');

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
(90,14,'Mr.Cepi','admin','Login','2021-02-16 20:49:31'),
(91,14,'Mr.Cepi','admin','Login','2021-02-16 22:00:01'),
(92,14,'Mr.Cepi','admin','Login','2021-02-16 22:03:05'),
(93,14,'Mr.Cepi','admin','Login','2021-02-17 06:04:30'),
(94,14,'Mr.Cepi','admin','Login','2021-02-17 06:04:56'),
(95,14,'Mr.Cepi','admin','Login','2021-02-17 09:45:47'),
(96,14,'Mr.Cepi','admin','Login','2021-02-17 14:37:02'),
(97,14,'Mr.Cepi','admin','Login','2021-02-17 14:37:26');

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

/*Table structure for table `tr_goldar` */

DROP TABLE IF EXISTS `tr_goldar`;

CREATE TABLE `tr_goldar` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tr_goldar` */

insert  into `tr_goldar`(`id`,`nama`) values 
(1,'A'),
(2,'B'),
(3,'AB'),
(4,'O');

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

/*Table structure for table `tr_jp` */

DROP TABLE IF EXISTS `tr_jp`;

CREATE TABLE `tr_jp` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tr_jp` */

insert  into `tr_jp`(`id`,`nama`) values 
(1,'SMA'),
(2,'D2'),
(3,'D3'),
(4,'D4'),
(5,'S1'),
(6,'S2'),
(7,'S3');

/*Table structure for table `tr_kelas` */

DROP TABLE IF EXISTS `tr_kelas`;

CREATE TABLE `tr_kelas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_tingkat` int(11) DEFAULT NULL,
  `nama_kelas` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tr_kelas` */

insert  into `tr_kelas`(`id`,`id_tingkat`,`nama_kelas`) values 
(1,1,'IPA'),
(2,1,'IPS');

/*Table structure for table `tr_pekerjaan` */

DROP TABLE IF EXISTS `tr_pekerjaan`;

CREATE TABLE `tr_pekerjaan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tr_pekerjaan` */

insert  into `tr_pekerjaan`(`id`,`nama`) values 
(1,'Wiraswasta'),
(2,'Wirausaha'),
(3,'Pedagang'),
(4,'Petani'),
(5,'Nelayan'),
(6,'Pegawai Negeri (PNS)'),
(7,'TNI'),
(8,'POLRI'),
(9,'Dokter'),
(10,'Guru / Pengajar'),
(11,'Tidak Bekerja'),
(12,'TKI/TKW');

/*Table structure for table `tr_penghasilan` */

DROP TABLE IF EXISTS `tr_penghasilan`;

CREATE TABLE `tr_penghasilan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `penghasilan` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tr_penghasilan` */

insert  into `tr_penghasilan`(`id`,`penghasilan`) values 
(1,'< 1.000.000'),
(2,'1.000.000 - 2.500.000'),
(3,'2.500.000 - 5.000.000'),
(4,'> 5.000.000');

/*Table structure for table `tr_tahun` */

DROP TABLE IF EXISTS `tr_tahun`;

CREATE TABLE `tr_tahun` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tahun` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tr_tahun` */

insert  into `tr_tahun`(`id`,`tahun`) values 
(1,1993),
(2,1994),
(3,1995),
(7,1996),
(8,1997),
(9,1998),
(10,1999),
(12,1997),
(13,1997),
(14,1997),
(15,1997),
(19,1994),
(20,2000),
(21,2001);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
