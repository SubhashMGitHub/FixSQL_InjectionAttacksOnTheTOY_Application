CREATE DATABASE IF NOT EXISTS `CS5340-TOY-APPLICATION`;

USE `CS5340-TOY-APPLICATION`;

# Dump of Table Messages
# ------------------------------------------------------------

DROP TABLE IF EXISTS `messages`;

CREATE TABLE `messages` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` varchar(25) DEFAULT NULL,
  `message` text,
  `time` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `messages` (`id`, `user_id`, `message`, `time`)
VALUES
	(1,'admin','Test Message: Tesla is recalling nearly 1.1 million of its vehicles due to an automatic window safety issue that can cause fingers to be pinched.',1663987669),
	(2,'user','Test Message: Sorry I am posting this lab a couple of days later than promised. Took me a bit to find time to modify one or two things in the toy application',1663987723);


# Dump of Table Users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `username` varchar(25) NOT NULL DEFAULT '',
  `password` varchar(100) DEFAULT NULL,
  `firstname` varchar(25) DEFAULT NULL,
  `lastname` varchar(25) DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `users` (`username`, `password`, `firstname`, `lastname`, `is_admin`, `is_active`)
VALUES
	('admin','admin','Admin','User',1,1),
	('user','user','Ordinary','User',0,1);
