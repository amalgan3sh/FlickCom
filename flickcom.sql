/*
SQLyog Community v13.1.7 (64 bit)
MySQL - 10.10.2-MariaDB : Database - flickcom
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`flickcom` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `flickcom`;

/*Table structure for table `release` */

DROP TABLE IF EXISTS `release`;

CREATE TABLE `release` (
  `release_id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(25) NOT NULL,
  PRIMARY KEY (`release_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `release` */

insert  into `release`(`release_id`,`category`) values 
(1,'OTT'),
(10,'THEATER');

/*Table structure for table `tbl_addmembers` */

DROP TABLE IF EXISTS `tbl_addmembers`;

CREATE TABLE `tbl_addmembers` (
  `addmemb_id` int(11) NOT NULL AUTO_INCREMENT,
  `FName` varchar(25) NOT NULL,
  `LName` varchar(25) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `Designation` varchar(25) NOT NULL,
  PRIMARY KEY (`addmemb_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tbl_addmembers` */

insert  into `tbl_addmembers`(`addmemb_id`,`FName`,`LName`,`Email`,`password`,`Designation`) values 
(24,'Hima','MS','himams@gmail.com','himams123','Camera Operator'),
(25,'Amal','Ganesh','amalganesh@gmail.com','amal123','Director');

/*Table structure for table `tbl_apply` */

DROP TABLE IF EXISTS `tbl_apply`;

CREATE TABLE `tbl_apply` (
  `apply_id` int(11) NOT NULL AUTO_INCREMENT,
  `reg_id` int(11) NOT NULL,
  `vaccancy_id` int(11) NOT NULL,
  `status` varchar(15) NOT NULL,
  `qualification` varchar(30) NOT NULL,
  `certificate` varchar(200) NOT NULL,
  `resume` varchar(200) NOT NULL,
  `apply_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `reason` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`apply_id`),
  KEY `reg_id` (`reg_id`),
  CONSTRAINT `tbl_apply_ibfk_1` FOREIGN KEY (`reg_id`) REFERENCES `tbl_registration` (`reg_id`),
  CONSTRAINT `tbl_apply_ibfk_2` FOREIGN KEY (`reg_id`) REFERENCES `tbl_registration` (`reg_id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tbl_apply` */

insert  into `tbl_apply`(`apply_id`,`reg_id`,`vaccancy_id`,`status`,`qualification`,`certificate`,`resume`,`apply_date`,`reason`) values 
(34,33,19,'rejected','SDFGHJ','fileuploadarray.pdf','fileuploadhima.pdf','2022-06-28 20:06:35',NULL),
(35,38,27,'Rejected','sdfghjkl','fileuploadarray.pdf','fileuploadhima.pdf','2022-06-29 12:02:35','ccch'),
(36,38,28,'pending','dsfgh','fileuploadhima.pdf','fileuploadarray.pdf','2022-06-29 12:04:00',NULL),
(37,33,0,'pending','bca','invoice (3).pdf','invoice.pdf','2023-10-11 20:44:42',NULL),
(38,39,0,'pending','bca','invoice (2).pdf','invoice (2).pdf','2023-10-11 20:57:27',NULL),
(39,35,0,'pending','MCA','binu.pdf','invoice (2).pdf','2023-10-26 14:31:54',NULL);

/*Table structure for table `tbl_apply_audition` */

DROP TABLE IF EXISTS `tbl_apply_audition`;

CREATE TABLE `tbl_apply_audition` (
  `applyAud_id` int(11) NOT NULL AUTO_INCREMENT,
  `reg_id` int(11) NOT NULL,
  `freshers_id` int(11) DEFAULT NULL,
  `audition_id` int(11) NOT NULL,
  `email` varchar(35) NOT NULL,
  `marital-status` varchar(20) NOT NULL,
  `education1` varchar(30) NOT NULL,
  `education2` varchar(30) DEFAULT NULL,
  `certificate` varchar(300) NOT NULL,
  `resume` varchar(300) NOT NULL,
  `medical-certificate` varchar(300) NOT NULL,
  `intro` varchar(300) NOT NULL,
  `photo` varchar(300) NOT NULL,
  `status` varchar(20) NOT NULL,
  `apply_date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  PRIMARY KEY (`applyAud_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tbl_apply_audition` */

insert  into `tbl_apply_audition`(`applyAud_id`,`reg_id`,`freshers_id`,`audition_id`,`email`,`marital-status`,`education1`,`education2`,`certificate`,`resume`,`medical-certificate`,`intro`,`photo`,`status`,`apply_date`) values 
(1,35,NULL,19,'aleenajoseph@gmail.com','Single','','','','','','','','pending','2022-06-29 14:06:35.966631'),
(2,35,NULL,21,'aleena@gmail.com','Single','MSc in Film & TV Production','','','','','','','pending','2022-06-29 14:06:35.966631'),
(3,36,NULL,20,'ameena@gmail.com','Married','','MscMusic','','','','','','pending','2022-06-29 14:06:35.966631'),
(4,35,43,16,'aaaa@gmail.com','single','','ssss','ssssssssss','wwwwwwwwww','nnnnnnn','hgggggg','rrrrrrrrr','tttttt','2022-06-29 14:06:35.966631'),
(6,36,NULL,22,'aaaaaaaaaaa@gmail.com','Married','MA in Film Studies.','','fileuploadarray.pdf','fileuploadhima.pdf','fileuploadarray.pdf','fileuploadEnnum Ninne Poojikkam - Sreya Jayadeep - The Loft Sessions @Wonderwall Media.mp4','fileuploadceb27.jpg','pending','2022-06-29 14:06:35.966631'),
(7,37,NULL,21,'sdfghjk@gmail.com','Single','Bsc.Digital Filmmaking','','fileuploadhima.pdf','fileuploadarray.pdf','fileuploadarray.pdf','Intro.mp4','fileuploadceb27.jpg','Verified','2022-06-29 16:01:23.956935');

/*Table structure for table `tbl_aud` */

DROP TABLE IF EXISTS `tbl_aud`;

CREATE TABLE `tbl_aud` (
  `aud_id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(25) NOT NULL,
  PRIMARY KEY (`aud_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tbl_aud` */

insert  into `tbl_aud`(`aud_id`,`category`) values 
(1,'Acting'),
(2,'Choreography'),
(3,'Music'),
(6,'Casting');

/*Table structure for table `tbl_audition` */

DROP TABLE IF EXISTS `tbl_audition`;

CREATE TABLE `tbl_audition` (
  `audition_id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(25) NOT NULL,
  `skills` varchar(25) NOT NULL,
  `qualification` varchar(25) NOT NULL,
  `venue` varchar(25) NOT NULL,
  `date` varchar(15) NOT NULL,
  `lastupdates` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  PRIMARY KEY (`audition_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tbl_audition` */

insert  into `tbl_audition`(`audition_id`,`category`,`skills`,`qualification`,`venue`,`date`,`lastupdates`) values 
(17,'Camera Operator','Digital Editing','Degree in Animation','DAFSF','1986','2022-06-26 21:08:58.971665'),
(18,'Animation','Digital Editing','BA Animation','KFY','1986','2022-06-26 21:36:30.347493'),
(19,'Acting','Directing','Bsc.Digital Filmmaking','CALK','1993','2022-06-27 16:35:49.385546'),
(20,'Music','Lighting','MSc in Cinema.','clj','1986','2022-06-28 12:12:12.698952'),
(21,'Acting','Creativity','MA in Film Studies.','Kochi','1991','2022-06-28 20:34:17.676330'),
(22,'Music','Digital Editing','MSc in Cinema.','RDTYFU','1985','2022-06-29 09:17:19.949371'),
(23,'Acting','Writing','Bsc.Digital Filmmaking','SD','2006','2022-06-29 10:00:32.019864'),
(24,'Acting','Screen Writing','Electrical Engineering','mumbai','1986','2023-10-26 14:38:02.186583');

/*Table structure for table `tbl_films` */

DROP TABLE IF EXISTS `tbl_films`;

CREATE TABLE `tbl_films` (
  `film_id` int(11) NOT NULL AUTO_INCREMENT,
  `release_id` int(11) NOT NULL,
  `film_name` varchar(25) NOT NULL,
  `pic` varchar(300) NOT NULL,
  `release_date` varchar(10) NOT NULL,
  `film_type` varchar(25) NOT NULL,
  `Last_updation` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  PRIMARY KEY (`film_id`),
  KEY `tbl_films_ibfk_1` (`release_id`),
  CONSTRAINT `tbl_films_ibfk_1` FOREIGN KEY (`release_id`) REFERENCES `release` (`release_id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tbl_films` */

insert  into `tbl_films`(`film_id`,`release_id`,`film_name`,`pic`,`release_date`,`film_type`,`Last_updation`) values 
(26,1,'HEY SINAMIKA','hey!.webp','2022-10-23','CrimeThriller','2022-06-26 17:44:03.453170'),
(31,1,'BEAST','beast.jfif','2022-07-03','SciFi','2022-06-26 18:24:08.461009');

/*Table structure for table `tbl_filmtype` */

DROP TABLE IF EXISTS `tbl_filmtype`;

CREATE TABLE `tbl_filmtype` (
  `filmtype_id` int(11) NOT NULL AUTO_INCREMENT,
  `types` varchar(25) NOT NULL,
  PRIMARY KEY (`filmtype_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tbl_filmtype` */

insert  into `tbl_filmtype`(`filmtype_id`,`types`) values 
(6,'Action'),
(7,'SciFi'),
(8,'CrimeThriller');

/*Table structure for table `tbl_freshers` */

DROP TABLE IF EXISTS `tbl_freshers`;

CREATE TABLE `tbl_freshers` (
  `profile_id` int(11) NOT NULL AUTO_INCREMENT,
  `reg_id` int(11) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `alt_mobile` varchar(11) NOT NULL,
  `address` varchar(20) NOT NULL,
  `address2` varchar(20) DEFAULT NULL,
  `city` varchar(15) NOT NULL,
  `state` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `pin` varchar(10) NOT NULL,
  `pic` varchar(200) NOT NULL,
  `Vaccancy_feild` varchar(35) DEFAULT NULL,
  `category` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`profile_id`),
  KEY `reg_id` (`reg_id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tbl_freshers` */

insert  into `tbl_freshers`(`profile_id`,`reg_id`,`dob`,`alt_mobile`,`address`,`address2`,`city`,`state`,`country`,`pin`,`pic`,`Vaccancy_feild`,`category`) values 
(33,33,'2016-05-06','7895678908','AAAAAAAAAAAAA','KKKKKKKKK','QQQQQQQQQQ','EEEEEEEEEE','SSSSS','789098','profile.jpg','',''),
(34,34,'2015-12-28','8890789067','VADAKARA','KOOLIVAYAL','KOOLIVAYAL','KERALA','INDIAN','673593','profile.jpg','Camera Operator/Assistant',''),
(35,35,'2016-09-01','8790611290','Puthiyedath','Kalathuvayal','ABL','Kerala','Indian','673593','about.jpg','','Acting'),
(36,36,'2016-03-03','7790845678','AAAAAA','AAAAAAAA','AAAAAAA','AAAAAAAAA','AAAAAA','789678','ceblist7.jpg','','Music'),
(37,37,'2016-12-29','6789098765','ASDF','DDDDDD','DDDDDDDD','DDDDDD','DDDDDD','890890','fileuploadceb27.jpg','','Acting'),
(38,38,'2016-12-28','8908908908','AMALA','AMALA','AMALA','AMALA','AMALA','789789','cebsingle2.png','Boom Operator/Sound Trainee','');

/*Table structure for table `tbl_qualification` */

DROP TABLE IF EXISTS `tbl_qualification`;

CREATE TABLE `tbl_qualification` (
  `qual_id` int(11) NOT NULL AUTO_INCREMENT,
  `qualification` varchar(35) NOT NULL,
  PRIMARY KEY (`qual_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tbl_qualification` */

insert  into `tbl_qualification`(`qual_id`,`qualification`) values 
(4,'Electrical Engineering'),
(5,'Bsc.Digital Filmmaking'),
(6,'cinematography'),
(7,'MSc in Cinema.'),
(8,'MA in Film Studies.'),
(10,'MSc in Film & TV Production'),
(11,'BA Animation'),
(12,'BA (Hons)Digital Content Creation'),
(13,'Other');

/*Table structure for table `tbl_registration` */

DROP TABLE IF EXISTS `tbl_registration`;

CREATE TABLE `tbl_registration` (
  `reg_id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `Fname` varchar(15) DEFAULT NULL,
  `Lname` varchar(15) DEFAULT NULL,
  `Mobile` varchar(12) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `reg_email` varchar(25) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY (`reg_id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tbl_registration` */

insert  into `tbl_registration`(`reg_id`,`role_id`,`Fname`,`Lname`,`Mobile`,`gender`,`reg_email`,`password`) values 
(1,0,'','','','','admin@gmail.com','Admin'),
(33,2,'HARITHA','KRISHNAN','7789012678','female','haritha@gmail.com','haritha123'),
(34,3,NULL,NULL,NULL,NULL,'himams@gmail.com','himams123'),
(35,2,'ALEENA','JOSEPH','7902320998','female','aleena@gmail.com','aleena123'),
(36,2,'AMEENA','SHERINE','9909789619','female','ameena@gmail.com','ameena123'),
(37,2,'AAAAAAAAAA','AAAAAAAA','8907865678','female','aaa@gmail.com','123456'),
(38,2,'AMALA','AAAA','8890678909','female','amala@gmail.com','amala@gmail.com'),
(39,1,'Amal','Ganesh','7896541236','male','amal@gmail.com','amal123'),
(41,3,NULL,NULL,NULL,NULL,'amalganesh@gmail.com','amal123');

/*Table structure for table `tbl_skills` */

DROP TABLE IF EXISTS `tbl_skills`;

CREATE TABLE `tbl_skills` (
  `skill_id` int(11) NOT NULL AUTO_INCREMENT,
  `skills` varchar(25) NOT NULL,
  PRIMARY KEY (`skill_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tbl_skills` */

insert  into `tbl_skills`(`skill_id`,`skills`) values 
(1,'Screen Writing'),
(2,'Writing'),
(3,'Directing'),
(4,'Lighting'),
(5,'Digital Editing'),
(6,'Software'),
(7,'Creativity'),
(8,'Film Editing'),
(9,'Technical Expertise'),
(10,'Communication');

/*Table structure for table `tbl_staffdesignation` */

DROP TABLE IF EXISTS `tbl_staffdesignation`;

CREATE TABLE `tbl_staffdesignation` (
  `des_id` int(11) NOT NULL AUTO_INCREMENT,
  `designation` varchar(25) NOT NULL,
  PRIMARY KEY (`des_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tbl_staffdesignation` */

insert  into `tbl_staffdesignation`(`des_id`,`designation`) values 
(2,'Director'),
(3,'Production Controller'),
(4,'Camera Operator'),
(5,'Cinematographer'),
(6,'Editor'),
(7,'Assistant Director'),
(8,'Photographer');

/*Table structure for table `tbl_vacancy-field` */

DROP TABLE IF EXISTS `tbl_vacancy-field`;

CREATE TABLE `tbl_vacancy-field` (
  `vacfield_id` int(11) NOT NULL AUTO_INCREMENT,
  `field` varchar(30) NOT NULL,
  PRIMARY KEY (`vacfield_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tbl_vacancy-field` */

insert  into `tbl_vacancy-field`(`vacfield_id`,`field`) values 
(1,'Production Assistant (PA)'),
(2,'Associate/Assistant Producer'),
(3,'Apprentice/Assistant Editor'),
(4,'Camera Operator/Assistant'),
(5,'Boom Operator/Sound Trainee'),
(6,'1st/2nd Assistant Director'),
(7,'Screenwriter');

/*Table structure for table `tbl_vaccancy` */

DROP TABLE IF EXISTS `tbl_vaccancy`;

CREATE TABLE `tbl_vaccancy` (
  `vaccancy_id` int(11) NOT NULL AUTO_INCREMENT,
  `Vaccancy_feild` varchar(35) NOT NULL,
  `Total_vaccancy` int(11) NOT NULL,
  `qualification` varchar(25) NOT NULL,
  `experience` int(11) NOT NULL,
  `deadline` varchar(10) NOT NULL,
  `lastupdates` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  PRIMARY KEY (`vaccancy_id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tbl_vaccancy` */

insert  into `tbl_vaccancy`(`vaccancy_id`,`Vaccancy_feild`,`Total_vaccancy`,`qualification`,`experience`,`deadline`,`lastupdates`) values 
(19,'Production Assistant (PA)',3,'MSc in Fil',3,'1997','2022-06-28 18:54:07.334125'),
(20,'Production Assistant (PA)',2,'MSc in Cin',1,'1980','2022-06-28 18:59:31.926383'),
(21,'Associate/Assistant Producer',1,'MSc in Fil',1,'1988','2022-06-28 19:00:07.226426'),
(22,'Associate/Assistant Producer',2,'cinematogr',0,'1998','2022-06-28 19:00:33.603589'),
(23,'Apprentice/Assistant Editor',3,'BA Animation',2,'1985','2022-06-28 19:02:04.405452'),
(24,'Apprentice/Assistant Editor',3,'MSc in Cinema.',3,'1997','2022-06-28 19:02:30.978725'),
(25,'Camera Operator/Assistant',1,'MA in Film Studies.',3,'2013','2022-06-28 19:02:50.338942'),
(26,'Camera Operator/Assistant',4,'Bsc.Digital Filmmaking',4,'1994','2022-06-28 19:03:02.893296'),
(27,'Boom Operator/Sound Trainee',4,'Electrical Engineering',2,'2008','2022-06-28 19:03:16.556107'),
(28,'Boom Operator/Sound Trainee',2,'cinematography',2,'2007','2022-06-28 19:03:33.827436'),
(29,'1st/2nd Assistant Director',2,'cinematography',2,'2007','2022-06-28 19:03:48.290380'),
(31,'1st/2nd Assistant Director',1,'BA (Hons)Digital Content ',5,'1995','2022-06-28 19:04:27.364337'),
(32,'Screenwriter',6,'MSc in Film & TV Producti',2,'2008','2022-06-28 19:04:54.980391'),
(33,'Screenwriter',4,'MSc in Film & TV Producti',4,'2006','2022-06-28 19:05:09.176177'),
(34,'Camera Operator/Assistant',10,'Electrical Engineering',1,'1986','2023-10-26 14:41:21.121401');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
