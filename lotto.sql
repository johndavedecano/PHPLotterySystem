-- phpMyAdmin SQL Dump
-- version 3.5.8.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2013 at 01:16 PM
-- Server version: 5.6.11-log
-- PHP Version: 5.4.14

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lotto`
--

-- --------------------------------------------------------

--
-- Table structure for table `bets`
--

CREATE TABLE IF NOT EXISTS `bets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `draw_id` int(11) NOT NULL DEFAULT '0',
  `numbers` text,
  `ticket_number` text,
  `security_code` text,
  `lucky_pick` tinyint(4) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `bets`
--

INSERT INTO `bets` (`id`, `draw_id`, `numbers`, `ticket_number`, `security_code`, `lucky_pick`, `created_at`, `updated_at`) VALUES
(28, 101, '2,17,27,31,38,41', '201310070', '9ec5ef88c87f7e735fd6e5dfa23c39c1', 1, '2013-10-06 21:29:28', '2013-10-06 21:29:28'),
(29, 101, '16,20,25,27,28,36', '2013100729', 'ff951095ce726bdddc55f16dcc5c16f4', 1, '2013-10-06 21:30:20', '2013-10-06 21:30:20'),
(30, 101, '5,8,25,26,32,35', '2013100730', 'b7def3cba42f9dab19365009f6b32580', 1, '2013-10-06 21:30:26', '2013-10-06 21:30:26'),
(31, 101, '7,12,20,23,28,41', '2013100731', '643cd05be74ec998cd85488ac0e73427', 1, '2013-10-06 21:30:31', '2013-10-06 21:30:31'),
(32, 101, '4,14,15,28,37,39', '2013100732', '42791e7743679601421df824ef47e70a', 1, '2013-10-06 21:30:38', '2013-10-06 21:30:38'),
(33, 101, '6,9,15,17,33,39', '2013100733', 'd73a1e7d3cc7bbbce962e169e13b5502', 1, '2013-10-06 21:30:42', '2013-10-06 21:30:42');

-- --------------------------------------------------------

--
-- Table structure for table `draws`
--

CREATE TABLE IF NOT EXISTS `draws` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numbers` text NOT NULL,
  `winning_price` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` char(50) NOT NULL DEFAULT 'open',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=103 ;

--
-- Dumping data for table `draws`
--

INSERT INTO `draws` (`id`, `numbers`, `winning_price`, `date`, `status`, `created_at`, `updated_at`) VALUES
(101, '1,4,6,9,18,34', 200000, '2013-10-06 21:32:27', 'closed', '2013-10-06 21:29:14', '2013-10-06 21:32:27'),
(102, '', 2000000, '2013-10-06 16:00:00', 'open', '2013-10-07 05:47:17', '2013-10-07 05:47:17');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `groups_name_unique` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `throttle`
--

CREATE TABLE IF NOT EXISTS `throttle` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `ip_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `attempts` int(11) NOT NULL DEFAULT '0',
  `suspended` tinyint(4) NOT NULL DEFAULT '0',
  `banned` tinyint(4) NOT NULL DEFAULT '0',
  `last_attempt_at` timestamp NULL DEFAULT NULL,
  `suspended_at` timestamp NULL DEFAULT NULL,
  `banned_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `throttle`
--

INSERT INTO `throttle` (`id`, `user_id`, `ip_address`, `attempts`, `suspended`, `banned`, `last_attempt_at`, `suspended_at`, `banned_at`) VALUES
(1, 1, '0.0.0.0', 0, 0, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `activated` tinyint(4) NOT NULL DEFAULT '0',
  `activation_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `activated_at` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_login` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `persist_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reset_password_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_activation_code_index` (`activation_code`),
  KEY `users_reset_password_code_index` (`reset_password_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `permissions`, `activated`, `activation_code`, `activated_at`, `last_login`, `persist_code`, `reset_password_code`, `first_name`, `last_name`, `created_at`, `updated_at`) VALUES
(1, 'testing@test.com', '$2y$10$VsmfwnTJrNuDuJ8sgPE1vuDwD4gDtLJGCga0zMtNReaXjz7WMCUMS', '{"superuser":1}', 1, NULL, NULL, '2013-10-07 05:08:24', '$2y$10$wBmEOZb418lWjiABlBtnRuDesUxDi6ZufQcF5IJaswihZ6peCxja.', NULL, NULL, NULL, '2013-10-03 05:33:33', '2013-10-06 21:08:24');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE IF NOT EXISTS `users_groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `group_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `winners`
--

CREATE TABLE IF NOT EXISTS `winners` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `draw_id` varchar(50) DEFAULT NULL,
  `winning_numbers` text,
  `winning_price` int(11) DEFAULT NULL,
  `ticket_number` varchar(50) DEFAULT NULL,
  `security_code` varchar(50) DEFAULT NULL,
  `draw_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
