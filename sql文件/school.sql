/*
SQLyog Ultimate v10.00 Beta1
MySQL - 5.7.31 : Database - mystudent
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`mystudent` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `mystudent`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `Adminname` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `id` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `admin` */

insert  into `admin`(`Adminname`,`password`,`id`) values ('admin1','12345',1),('admin2','1234',2);

/*Table structure for table `studentinfo` */

DROP TABLE IF EXISTS `studentinfo`;

CREATE TABLE `studentinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sno` varchar(20) NOT NULL,
  `name` varchar(5) NOT NULL,
  `sex` varchar(1) NOT NULL,
  `age` int(11) NOT NULL,
  `institute` varchar(15) NOT NULL,
  `phone_number` char(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

/*Data for the table `studentinfo` */

insert  into `studentinfo`(`id`,`sno`,`name`,`sex`,`age`,`institute`,`phone_number`,`time`) values (5,'2118030305','周怡','',19,'医学院','17825674523','2019-06-24 01:11:51'),(6,'4118020207','曾宇聪','男',19,'土木工程学院','13423578634','2021-06-21 14:35:13'),(8,'3229565603','付小东','男',21,'机械学院','13424567623','2019-02-12 13:12:13'),(16,'2230909042','李四','男',22,'教育学院','13459834524','2019-02-19 00:45:13'),(23,'3233707004','张三','男',21,'土木工程学院','13423464598','2021-11-04 12:43:39'),(26,'J7W7QV7Y33','小恶','男',21,'热塔尔学院','13424567623','2019-09-20 14:16:28'),(27,'32233578902','李丽','女',20,'艺术学院','13443245894','2022-09-20 14:16:28');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
