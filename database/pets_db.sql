/*
SQLyog Community v13.1.7 (64 bit)
MySQL - 8.0.15 : Database - pets_dating_site
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `comments` */

DROP TABLE IF EXISTS `comments`;

CREATE TABLE `comments` (
  `commentID` int(11) NOT NULL AUTO_INCREMENT,
  `userID` int(11) DEFAULT NULL,
  `postID` varchar(110) DEFAULT NULL,
  `message` text,
  PRIMARY KEY (`commentID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `comments` */

/*Table structure for table `friend_list` */

DROP TABLE IF EXISTS `friend_list`;

CREATE TABLE `friend_list` (
  `fr_ID` int(11) NOT NULL AUTO_INCREMENT,
  `userID` int(11) DEFAULT NULL,
  `friendID` int(11) DEFAULT NULL,
  `friend_post` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`fr_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `friend_list` */

insert  into `friend_list`(`fr_ID`,`userID`,`friendID`,`friend_post`) values 
(1,14,8,0),
(2,8,10,0),
(3,14,11,0),
(4,14,12,0);

/*Table structure for table `image_uploads` */

DROP TABLE IF EXISTS `image_uploads`;

CREATE TABLE `image_uploads` (
  `imgID` int(11) NOT NULL AUTO_INCREMENT,
  `userID` int(11) NOT NULL,
  `postID` varchar(110) NOT NULL,
  `postDes` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `postImages` varchar(110) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postDate` varchar(110) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postStatus` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`imgID`)
) ENGINE=InnoDB AUTO_INCREMENT=151 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `image_uploads` */

insert  into `image_uploads`(`imgID`,`userID`,`postID`,`postDes`,`postImages`,`postDate`,`postStatus`) values 
(118,10,'10pet_img2022-04-06 12:15:40','cute','Syrian-hamster_Shutterstock_Johannes-Menge.jpg','2022-04-06 12:15:40',1),
(119,8,'8pet_img2022-04-06 12:22:28','My pets','Persian-Cat-23-4-1-758x635.jpg','2022-04-06 12:22:28',1),
(120,8,'8pet_img2022-04-06 12:22:28','My pets','shutterstock1481706194jpg_2021-03-03-03-15-17.jpg','2022-04-06 12:22:28',1),
(122,8,'8pet_img2022-04-07 08:11:53','cuteeeee','Syrian-hamster_Shutterstock_Johannes-Menge.jpg','2022-04-07 08:11:53',0),
(124,8,'8pet_img2022-04-07 08:41:26','wew','dog_230497594.jpg','2022-04-07 08:41:26',0),
(128,11,'11pet_img2022-04-07 11:08:56','','shutterstock1481706194jpg_2021-03-03-03-15-17.jpg','2022-04-07 11:08:56',0),
(131,10,'10pet_img2022-04-07 11:21:05','sleepy ','275464229_500484921758632_851071049499175135_n.gif','2022-04-07 11:21:05',0),
(132,10,'10pet_img2022-04-07 11:49:51','','shutterstock1481706194jpg_2021-03-03-03-15-17.jpg','2022-04-07 11:49:51',0),
(133,10,'10pet_img2022-04-07 11:51:00','','shutterstock1481706194jpg_2021-03-03-03-15-17.jpg','2022-04-07 11:51:00',0),
(134,10,'10pet_img2022-04-07 11:51:36','','Syrian-hamster_Shutterstock_Johannes-Menge.jpg','2022-04-07 11:51:36',0),
(135,13,'13pet_img2022-05-11 07:32:24','','Persian-Cat-23-4-1-758x635.jpg','2022-05-11 07:32:24',0),
(143,13,'132022-05-11 08:20:08','hello',NULL,'2022-05-11 08:20:08',0),
(144,13,'132022-05-11 08:23:36','I am so pretty today! Wanna be my friend and meet up???!',NULL,'2022-05-11 08:23:36',0),
(145,13,'13pet_img2022-05-11 08:25:30','So sleepy!!','275464229_500484921758632_851071049499175135_n.gif','2022-05-11 08:25:30',0),
(146,14,'14pet_img2022-06-16 00:55:32','hello!!!','Idle__001.png','2022-06-16 00:55:32',0),
(147,14,'14pet_img2022-06-16 01:03:57','my pets','Persian-Cat-23-4-1-758x635.jpg','2022-06-16 01:03:57',0),
(148,14,'14pet_img2022-06-16 01:03:57','my pets','Syrian-hamster_Shutterstock_Johannes-Menge.jpg','2022-06-16 01:03:57',0),
(149,14,'14pet_img2022-06-16 01:03:57','my pets','shutterstock1481706194jpg_2021-03-03-03-15-17.jpg','2022-06-16 01:03:57',0),
(150,14,'14pet_img2022-06-16 01:03:57','my pets','dog_230497594.jpg','2022-06-16 01:03:57',0);

/*Table structure for table `pets` */

DROP TABLE IF EXISTS `pets`;

CREATE TABLE `pets` (
  `petID` int(11) NOT NULL AUTO_INCREMENT,
  `animal_type` varchar(110) DEFAULT NULL,
  PRIMARY KEY (`petID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `pets` */

insert  into `pets`(`petID`,`animal_type`) values 
(1,'Dog'),
(2,'Cat'),
(3,'Hamster'),
(4,'Bird'),
(5,'Fish');

/*Table structure for table `post_reacts` */

DROP TABLE IF EXISTS `post_reacts`;

CREATE TABLE `post_reacts` (
  `reactID` int(11) NOT NULL AUTO_INCREMENT,
  `userID` int(11) DEFAULT NULL,
  `postID` varchar(110) DEFAULT NULL,
  `heart_reacted` tinyint(4) DEFAULT '0',
  `liker_name` varchar(110) DEFAULT NULL,
  PRIMARY KEY (`reactID`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `post_reacts` */

insert  into `post_reacts`(`reactID`,`userID`,`postID`,`heart_reacted`,`liker_name`) values 
(17,10,'10pet_img2022-04-06 12:15:40',0,NULL),
(18,8,'8pet_img2022-04-06 12:22:28',0,NULL),
(19,8,'8pet_img2022-04-06 12:22:28',0,NULL),
(20,10,'10pet_img2022-04-07 07:30:15',0,NULL),
(21,8,'8pet_img2022-04-07 08:11:53',0,NULL),
(22,8,'8pet_img2022-04-07 08:13:36',0,NULL),
(23,8,'8pet_img2022-04-07 08:41:26',0,NULL),
(24,8,'8pet_img2022-04-07 09:27:16',0,NULL),
(25,8,'8pet_img2022-04-07 09:27:16',0,NULL),
(26,10,'10pet_img2022-04-07 10:22:36',0,NULL),
(27,11,'11pet_img2022-04-07 11:08:56',0,NULL),
(28,10,'10pet_img2022-04-07 11:14:04',0,NULL),
(29,10,'10pet_img2022-04-07 11:14:04',0,NULL),
(30,10,'10pet_img2022-04-07 11:20:44',0,NULL),
(31,10,'10pet_img2022-04-07 11:21:05',0,NULL),
(32,10,'10pet_img2022-04-07 11:49:51',0,NULL),
(33,10,'10pet_img2022-04-07 11:51:00',0,NULL),
(34,10,'10pet_img2022-04-07 11:51:36',0,NULL),
(35,13,'13pet_img2022-05-11 07:31:04',0,NULL),
(36,13,'13pet_img2022-05-11 07:32:24',0,NULL),
(37,13,'13pet_img2022-05-11 07:40:36',0,NULL),
(38,13,'13pet_img2022-05-11 08:25:11',0,NULL),
(39,13,'13pet_img2022-05-11 08:25:30',0,NULL),
(40,14,'14pet_img2022-06-16 00:55:32',0,NULL),
(41,14,'14pet_img2022-06-16 01:03:57',0,NULL),
(42,14,'14pet_img2022-06-16 01:03:57',0,NULL),
(43,14,'14pet_img2022-06-16 01:03:57',0,NULL),
(44,14,'14pet_img2022-06-16 01:03:57',0,NULL);

/*Table structure for table `user_account` */

DROP TABLE IF EXISTS `user_account`;

CREATE TABLE `user_account` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(110) DEFAULT NULL,
  `email` varchar(110) DEFAULT NULL,
  `username` varchar(110) DEFAULT NULL,
  `password` varchar(110) DEFAULT NULL,
  `address` varchar(110) DEFAULT NULL,
  `gender` varchar(110) DEFAULT NULL,
  `contact` varchar(110) DEFAULT NULL,
  `pro_image` varchar(110) DEFAULT NULL,
  `date_created` varchar(110) DEFAULT NULL,
  `pet_type` int(11) DEFAULT NULL,
  `breed_type` varchar(110) DEFAULT NULL,
  `recent_post` varchar(110) DEFAULT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `user_account` */

insert  into `user_account`(`userID`,`name`,`email`,`username`,`password`,`address`,`gender`,`contact`,`pro_image`,`date_created`,`pet_type`,`breed_type`,`recent_post`) values 
(8,'Judie','judie@gmail.com','judie','$2y$10$kcHx2HrgghLY0devhvWzYO5PER1hNeCOn8laJIIFsrbSwrFS9SRli','New York','Male','0998134343','cartoon-dog.gif','04/06/2022 10:32:33 am',2,'Persian cat','8pet_img2022-04-07 09:27:16'),
(10,'vince','vince@123.com','vince','$2y$10$3UpQKlXuM7/EEM4qP1NF/e0yFv9Gmfvzxe1wKfkBLp2L/1fBjsZ2O','Japan','Female','12345','cartoon-dog.gif','04/06/2022 12:07:30 pm',2,'Persian Cat','10pet_img2022-04-07 11:51:36'),
(11,'Cute Dog','cutedog@gmail.com','cute','$2y$10$4u8pKZhebDi6BOEDb21H/e05DY.9UkFYYaZeaey1pgm6zY7QDylZW','New York','Female','099878','cartoon-dog.gif','04/07/2022 10:23:45 am',2,'Persian Cat','11pet_img2022-04-07 11:08:56'),
(12,'Thor','thor@gmail.com','thor','$2y$10$cIkuuiO92fSkcNdtI..0GeoPw69e9cfalOYMYUhp22eUb4Avx1G6S','Cebu City','Male','09981571398','cartoon-dog.gif','04/11/2022 06:19:33 am',1,'Husky',NULL),
(13,'kitty','kitty@123.com','kitty','$2y$10$mHi.EwfN91E8AbGWj3kDT.CzYAi/LwJn/jeEc3lw2cRsS6V/Guvp.','Florida New York','Male','464758','cartoon-dog.gif','05/11/2022 07:30:21 am',2,'Persian','13pet_img2022-05-11 08:25:30'),
(14,'bins','bins@123.com','bins','$2y$10$OhR1JhvzSCrkq05dlZYXEuem07yFV9dqU/R8H/rZEYOA1c9h/sEDe','tokyo','Male','57676879','cartoon-dog.gif','06/16/2022 12:54:24 am',1,'husky','14pet_img2022-06-16 01:03:57');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
