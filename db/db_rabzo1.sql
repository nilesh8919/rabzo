-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2019 at 06:44 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rabzo1`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `bannername` varchar(255) NOT NULL,
  `line1` varchar(255) NOT NULL,
  `line2` varchar(255) NOT NULL,
  `bannertext` varchar(255) DEFAULT NULL,
  `status` enum('Active','Deactive') NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `bannername`, `line1`, `line2`, `bannertext`, `status`, `updated_at`, `created_at`) VALUES
(50, '1559580526_banner2.png', 'dffdg', 'gddg', NULL, 'Active', '2019-06-03 11:18:46', '2019-06-03 11:18:46'),
(51, '1559580549_tasty-hamburger-composition_23-2147695638.jpg', 'wrter', 'yty', NULL, 'Active', '2019-06-03 11:19:09', '2019-06-03 11:19:09');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(11) NOT NULL,
  `heading` text NOT NULL,
  `paragraph1` text NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `heading`, `paragraph1`, `updated_at`, `created_at`) VALUES
(7, 'dsddfs', '<p>sdf</p>', '2019-04-02 01:32:13', '2019-04-02 01:32:13'),
(8, 'gr', '<p>yrtty</p>', '2019-04-02 01:38:41', '2019-04-02 01:38:41');

-- --------------------------------------------------------

--
-- Table structure for table `logos`
--

CREATE TABLE `logos` (
  `id` int(11) NOT NULL,
  `logoname` varchar(100) NOT NULL,
  `status` enum('Active','Deactive') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logos`
--

INSERT INTO `logos` (`id`, `logoname`, `status`, `created_at`, `updated_at`) VALUES
(19, '1532513357_sc (1).png', 'Active', '2018-08-07 05:50:42', '2018-07-25 10:09:17');

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `id` int(11) NOT NULL,
  `modules_name` varchar(255) NOT NULL,
  `sequence_no` int(11) NOT NULL DEFAULT '0',
  `status` enum('active','inactive') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`id`, `modules_name`, `sequence_no`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Manage Cms', 1, 'active', '2019-04-08 05:24:13', '0000-00-00 00:00:00'),
(2, 'Manage Templates', 2, 'active', '2019-04-08 05:24:18', '0000-00-00 00:00:00'),
(3, 'Manage Packages', 3, 'active', '2019-04-08 05:24:22', '0000-00-00 00:00:00'),
(4, 'Manage Blog', 5, 'active', '2019-04-08 05:24:31', '0000-00-00 00:00:00'),
(5, 'Manage Advertisement', 6, 'active', '2019-04-08 05:24:35', '0000-00-00 00:00:00'),
(6, 'Manage Settings', 7, 'inactive', '2019-05-20 17:37:50', '0000-00-00 00:00:00'),
(7, 'Manage Reviews', 8, 'active', '2019-04-08 05:24:40', '0000-00-00 00:00:00'),
(8, 'Reports', 9, 'active', '2019-04-08 05:24:43', '0000-00-00 00:00:00'),
(9, 'Manage Admin', 10, 'active', '2019-04-08 05:24:46', '0000-00-00 00:00:00'),
(10, 'Backup', 11, 'active', '2019-04-08 05:24:48', '0000-00-00 00:00:00'),
(11, 'USER', 12, 'inactive', '2019-05-20 17:38:40', '0000-00-00 00:00:00'),
(12, 'ORDERS', 14, 'active', '2019-05-02 07:58:07', '0000-00-00 00:00:00'),
(13, 'Merchant', 4, 'active', '2019-04-08 05:26:29', '0000-00-00 00:00:00'),
(15, 'Payment Gateway', 13, 'active', '2019-05-02 07:58:04', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `mt_address_book`
--

CREATE TABLE `mt_address_book` (
  `id` int(14) NOT NULL,
  `client_id` int(14) NOT NULL DEFAULT '0',
  `street` varchar(255) NOT NULL DEFAULT '',
  `city` varchar(255) NOT NULL DEFAULT '',
  `state` varchar(255) NOT NULL DEFAULT '',
  `zipcode` varchar(255) NOT NULL DEFAULT '',
  `location_name` varchar(255) NOT NULL DEFAULT '',
  `country_code` varchar(3) NOT NULL DEFAULT '',
  `as_default` int(1) NOT NULL DEFAULT '1',
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip_address` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mt_admin_user`
--

CREATE TABLE `mt_admin_user` (
  `admin_id` int(14) NOT NULL,
  `username` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(100) NOT NULL DEFAULT '',
  `first_name` varchar(255) NOT NULL DEFAULT '',
  `last_name` varchar(255) NOT NULL DEFAULT '',
  `role` varchar(100) NOT NULL DEFAULT '',
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip_address` varchar(50) NOT NULL DEFAULT '',
  `user_lang` int(14) NOT NULL DEFAULT '0',
  `email_address` varchar(255) NOT NULL DEFAULT '',
  `lost_password_code` varchar(255) NOT NULL DEFAULT '',
  `session_token` varchar(255) NOT NULL DEFAULT '',
  `last_login` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_access` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mt_admin_user`
--

INSERT INTO `mt_admin_user` (`admin_id`, `username`, `password`, `first_name`, `last_name`, `role`, `date_created`, `date_modified`, `ip_address`, `user_lang`, `email_address`, `lost_password_code`, `session_token`, `last_login`, `user_access`) VALUES
(1, 'eccentric', '8c7ef17df3ef399e1c4c272577dc1c80', '', '', '', '2018-12-06 02:35:26', '0000-00-00 00:00:00', '203.192.219.86', 0, '', '', '74161092983837ec5754f503cfaaee0929fd48974e7', '2019-03-19 11:04:52', '["autologin","dashboard","merchant","sponsoredMerchantList","packages","Cuisine","dishes","OrderStatus","incomingorders","settings","themesettings","managelocation","commisionsettings","voucher","invoice","merchantcommission","withdrawal","incomingwithdrawal","withdrawalsettings","emailsettings","emailtpl","notisettings","emailogs","cronjobs","customPage","Ratings","ContactSettings","SocialSettings","ManageCurrency","ManageLanguage","Seo","addons","addonexport","mobileapp","pointsprogram","merchantapp","analytics","customerlist","subscriberlist","reviews","bankdeposit","paymentgatewaysettings","paymentgateway","paypalSettings","cardpaymentsettings","stripeSettings","mercadopagoSettings","sisowsettings","payumonenysettings","obdsettings","payserasettings","payondelivery","barclay","epaybg","authorize","braintree","razor","mollie","ipay88","moneris","sms","smsSettings","smsPackage","smstransaction","smslogs","fax","faxtransaction","faxpackage","faxlogs","faxsettings","reports","rptMerchantReg","rptMerchantPayment","rptMerchanteSales","rptmerchantsalesummary","rptbookingsummary","userList","voguepay","printermodule"]');

-- --------------------------------------------------------

--
-- Table structure for table `mt_advertisement`
--

CREATE TABLE `mt_advertisement` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `merchant_id` int(11) DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mt_advertisement`
--

INSERT INTO `mt_advertisement` (`id`, `title`, `description`, `images`, `link`, `merchant_id`, `created_at`, `status`) VALUES
(1, 'title2', 'fsdf', '1558378539_download.jpg', 'dfdfd', 0, '2019-04-20 12:08:17', 'Publish');

-- --------------------------------------------------------

--
-- Table structure for table `mt_bank_deposit`
--

CREATE TABLE `mt_bank_deposit` (
  `id` int(14) NOT NULL,
  `merchant_id` int(14) NOT NULL DEFAULT '0',
  `branch_code` varchar(100) NOT NULL DEFAULT '',
  `date_of_deposit` date NOT NULL DEFAULT '0000-00-00',
  `time_of_deposit` varchar(50) NOT NULL DEFAULT '',
  `amount` float(14,4) NOT NULL DEFAULT '0.0000',
  `scanphoto` varchar(255) NOT NULL DEFAULT '',
  `status` varchar(100) NOT NULL DEFAULT 'pending',
  `date_created` date NOT NULL DEFAULT '0000-00-00',
  `ip_address` varchar(50) NOT NULL DEFAULT '',
  `transaction_type` varchar(255) NOT NULL DEFAULT 'merchant_signup',
  `client_id` int(14) NOT NULL DEFAULT '0',
  `order_id` int(14) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mt_barclay_trans`
--

CREATE TABLE `mt_barclay_trans` (
  `id` int(14) NOT NULL,
  `orderid` varchar(14) NOT NULL DEFAULT '',
  `token` varchar(255) NOT NULL DEFAULT '',
  `transaction_type` varchar(255) NOT NULL DEFAULT 'signup',
  `date_created` date NOT NULL DEFAULT '0000-00-00',
  `ip_address` varchar(50) NOT NULL DEFAULT '',
  `param1` varchar(255) NOT NULL DEFAULT '',
  `param2` text,
  `param3` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mt_barclay_trans`
--

INSERT INTO `mt_barclay_trans` (`id`, `orderid`, `token`, `transaction_type`, `date_created`, `ip_address`, `param1`, `param2`, `param3`) VALUES
(1, '1', '1111111111', 'signup', '0000-00-00', '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mt_bookingtable`
--

CREATE TABLE `mt_bookingtable` (
  `booking_id` int(14) NOT NULL,
  `merchant_id` int(14) NOT NULL DEFAULT '0',
  `number_guest` int(14) NOT NULL DEFAULT '0',
  `date_booking` date NOT NULL DEFAULT '0000-00-00',
  `booking_time` varchar(50) NOT NULL DEFAULT '',
  `booking_name` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL DEFAULT '',
  `mobile` varchar(100) NOT NULL DEFAULT '',
  `booking_notes` text,
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip_address` varchar(100) NOT NULL DEFAULT '',
  `date_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `viewed` int(1) NOT NULL DEFAULT '1',
  `client_id` int(14) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mt_bookingtable_history`
--

CREATE TABLE `mt_bookingtable_history` (
  `id` int(14) NOT NULL,
  `booking_id` int(14) NOT NULL DEFAULT '0',
  `status` varchar(255) NOT NULL DEFAULT '',
  `remarks` varchar(255) NOT NULL DEFAULT '',
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mt_category`
--

CREATE TABLE `mt_category` (
  `id` int(14) NOT NULL,
  `category_name` varchar(255) NOT NULL DEFAULT '',
  `category_description` text,
  `photo` varchar(255) NOT NULL DEFAULT '',
  `status` varchar(100) NOT NULL DEFAULT '',
  `sequence` int(14) NOT NULL DEFAULT '0',
  `date_created` varchar(50) NOT NULL DEFAULT '',
  `date_modified` varchar(50) DEFAULT '',
  `ip_address` varchar(50) NOT NULL DEFAULT '',
  `spicydish` int(2) NOT NULL DEFAULT '1',
  `spicydish_notes` text,
  `dish` text,
  `category_name_trans` text,
  `category_description_trans` text,
  `parent_cat_id` int(14) NOT NULL DEFAULT '0',
  `source` varchar(20) NOT NULL DEFAULT 'NIL'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mt_category`
--

INSERT INTO `mt_category` (`id`, `category_name`, `category_description`, `photo`, `status`, `sequence`, `date_created`, `date_modified`, `ip_address`, `spicydish`, `spicydish_notes`, `dish`, `category_name_trans`, `category_description_trans`, `parent_cat_id`, `source`) VALUES
(1, 'Indian', 'indian food', '', 'publish', 0, '2018-12-06 14:27:16', '', '203.192.219.86', 1, '', '', NULL, NULL, 0, 'NIL'),
(2, 'Italian', 'italian', '', 'publish', 0, '2018-12-06 14:27:28', '', '203.192.219.86', 1, '', '', NULL, NULL, 0, 'NIL'),
(3, 'maxican', 'maxican', '', 'publish', 0, '2018-12-06 14:27:43', '', '203.192.219.86', 1, '', '', NULL, NULL, 0, 'NIL'),
(4, 'Vegetarian food', 'Varhadi Vyanjan is pure Vegetarian  restaurant', '1544170574-Varhadi-Vyanjan-Nagpur-3-296x420.jpg', 'publish', 0, '2018-12-07 13:46:16', '', '203.192.219.81', 1, '', '', NULL, NULL, 0, 'NIL'),
(6, 'Non Vegetarian', 'food not suitable for vegetarians containing meat. the non-veg fare has more to it than just chicken\\'' (of a person) having a diet that includes meat.', '1544177175-929b5413ee195892da67bdaf154510fa_1530076699.jpg', 'publish', 0, '2018-12-07 15:36:17', '2018-12-07 15:36:46', '203.192.219.81', 1, '', '', NULL, NULL, 0, 'NIL');

-- --------------------------------------------------------

--
-- Table structure for table `mt_client`
--

CREATE TABLE `mt_client` (
  `client_id` int(14) NOT NULL,
  `social_strategy` varchar(100) NOT NULL DEFAULT 'web',
  `first_name` varchar(255) NOT NULL DEFAULT '',
  `last_name` varchar(255) NOT NULL DEFAULT '',
  `email_address` varchar(200) NOT NULL DEFAULT '',
  `password` varchar(100) NOT NULL DEFAULT '',
  `street` varchar(255) NOT NULL DEFAULT '',
  `city` varchar(255) NOT NULL DEFAULT '',
  `state` varchar(255) NOT NULL DEFAULT '',
  `zipcode` varchar(100) NOT NULL DEFAULT '',
  `country_code` varchar(3) NOT NULL DEFAULT '',
  `location_name` text,
  `contact_phone` varchar(20) NOT NULL DEFAULT '',
  `lost_password_token` varchar(255) NOT NULL DEFAULT '',
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_login` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip_address` varchar(50) NOT NULL DEFAULT '',
  `status` varchar(100) NOT NULL DEFAULT 'active',
  `token` varchar(255) NOT NULL DEFAULT '',
  `mobile_verification_code` int(14) NOT NULL DEFAULT '0',
  `mobile_verification_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `custom_field1` varchar(255) NOT NULL DEFAULT '',
  `custom_field2` varchar(255) NOT NULL DEFAULT '',
  `avatar` varchar(255) NOT NULL DEFAULT '',
  `email_verification_code` varchar(14) NOT NULL DEFAULT '',
  `is_guest` int(1) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mt_client`
--

INSERT INTO `mt_client` (`client_id`, `social_strategy`, `first_name`, `last_name`, `email_address`, `password`, `street`, `city`, `state`, `zipcode`, `country_code`, `location_name`, `contact_phone`, `lost_password_token`, `date_created`, `date_modified`, `last_login`, `ip_address`, `status`, `token`, `mobile_verification_code`, `mobile_verification_date`, `custom_field1`, `custom_field2`, `avatar`, `email_verification_code`, `is_guest`) VALUES
(1, 'web', 'Eccentric', 'Infosyatem', 'coonect@eisys.in', 'f398860b5fc24a8725f0358b0f68ad7a', '', '', '', '', '', NULL, '9860749070', '', '2018-12-06 15:22:40', '0000-00-00 00:00:00', '2018-12-06 15:22:40', '203.192.219.86', 'active', '', 0, '0000-00-00 00:00:00', '', '', '', '', 2),
(2, 'web', 'Pratik', 'Tambekar', 'pratik.tambekar91@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', '', '', '', '', NULL, '9579337525', '', '2018-12-07 14:29:30', '2018-12-07 16:20:41', '2018-12-07 18:43:42', '203.192.219.81', 'active', '', 0, '0000-00-00 00:00:00', '', '', '1544179826-24796357_1130456643724410_1058395946851542726_n.jpg', '', 2),
(3, 'facebook', 'shital', 'pachurkar', 'shital@gmail.com', '474c9d36dd11280665c4431c2b9b3b69', '', '', '', '', '', NULL, '8755241547', '', '2019-04-09 21:48:10', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '49.35.123.54', 'active', '', 0, '0000-00-00 00:00:00', '', '', '', '', 2),
(4, 'android', 'test1', 'user', 'ash29testid@gmail.com', '202cb962ac59075b964b07152d234b70', '', '', '', '', '', 'ngp', '1234567899', '', '2019-04-18 11:42:36', '0000-00-00 00:00:00', '2019-05-02 12:57:52', '103.83.137.2', 'active', '', 0, '0000-00-00 00:00:00', '', '', '', '', 2),
(5, 'android', 'abhijat', 'abhishek', 'abhijat@123', '9adc07996bdc6d9fa85866b42ddd78dd', '', '', '', '', '', '79.123', '9665974013', '', '2019-04-18 22:48:01', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '203.192.219.55', 'active', '', 0, '0000-00-00 00:00:00', '', '', '', '', 2),
(6, 'android', 'abhi', 'abhishek', 'abhi@gmail.com', '167784d36ab99e49738fe6a6a98798b7', '', '', '', '', '', '79.123', '7767997692', '', '2019-04-18 22:56:47', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '203.192.219.55', 'active', '', 0, '0000-00-00 00:00:00', '', '', '', '', 2),
(7, 'android', 'sumit', 'mukharjee', 'sumit@gmail.com', '4f73954d7ffa07973f2d28bde12fca4d', '', '', '', '', '', '79.123', '7992358336', '', '2019-04-18 22:58:16', '0000-00-00 00:00:00', '2019-04-18 23:03:08', '203.192.219.55', 'active', '', 0, '0000-00-00 00:00:00', '', '', '', '', 2),
(8, 'android', 'ash', 'bhite', '12345', '29e8ccb3f7c7ef3bf52f2d62f2653e46', '', '', '', '', '', '79.123', 'ash@gmail.com', '', '2019-04-20 12:52:42', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '103.83.137.2', 'active', '', 0, '0000-00-00 00:00:00', '', '', '', '', 2),
(9, 'android', ' ashwin', 'bhite', '12345678', '00cedcf91beffa9ee69f6cfe23a4602d', '', '', '', '', '', '79.123', 'abc@gmail.com', '', '2019-04-20 16:06:09', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '117.247.95.160', 'active', '', 0, '0000-00-00 00:00:00', '', '', '', '', 2),
(10, 'android', 'varun', 'dhawan', '123456', '29e8ccb3f7c7ef3bf52f2d62f2653e46', '', '', '', '', '', '79.123', 'v12@gmail.com', '', '2019-04-20 16:13:12', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '117.247.95.160', 'active', '', 0, '0000-00-00 00:00:00', '', '', '', '', 2),
(11, 'android', 'soha ', 'ali', '1234567899', '8fcc2b1886ba855abad109c350c7b61a', '', '', '', '', '', '123456', 'khan@gmail.com', '', '2019-04-20 18:49:13', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '117.247.95.160', 'active', '', 0, '0000-00-00 00:00:00', '', '', '', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `mt_client_cc`
--

CREATE TABLE `mt_client_cc` (
  `cc_id` int(14) NOT NULL,
  `client_id` int(14) NOT NULL DEFAULT '0',
  `card_name` varchar(255) NOT NULL DEFAULT '',
  `credit_card_number` varchar(20) NOT NULL DEFAULT '',
  `expiration_month` varchar(5) NOT NULL DEFAULT '',
  `expiration_yr` varchar(5) NOT NULL DEFAULT '',
  `cvv` varchar(20) NOT NULL DEFAULT '',
  `billing_address` varchar(255) NOT NULL DEFAULT '',
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mt_cooking_ref`
--

CREATE TABLE `mt_cooking_ref` (
  `cook_id` int(14) NOT NULL,
  `merchant_id` int(14) NOT NULL DEFAULT '0',
  `cooking_name` varchar(255) NOT NULL DEFAULT '',
  `sequence` int(14) NOT NULL DEFAULT '0',
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` varchar(50) NOT NULL DEFAULT 'published',
  `ip_address` varchar(50) NOT NULL DEFAULT '',
  `cooking_name_trans` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mt_cooking_ref`
--

INSERT INTO `mt_cooking_ref` (`cook_id`, `merchant_id`, `cooking_name`, `sequence`, `date_created`, `date_modified`, `status`, `ip_address`, `cooking_name_trans`) VALUES
(2, 16, 'test', 0, '2019-05-20 05:33:38', '2019-05-20 05:33:38', 'Publish', '', NULL),
(4, 16, 'test', 0, '2019-05-20 05:36:31', '2019-05-20 05:36:31', 'Publish', '', NULL),
(5, 16, 'test', 0, '2019-05-20 05:37:04', '2019-05-20 05:37:04', 'Publish', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mt_cuisine`
--

CREATE TABLE `mt_cuisine` (
  `id` int(14) NOT NULL,
  `cuisine_name` varchar(255) NOT NULL DEFAULT '',
  `sequence` int(14) NOT NULL DEFAULT '0',
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip_address` varchar(50) NOT NULL DEFAULT '',
  `cuisine_name_trans` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mt_cuisine`
--

INSERT INTO `mt_cuisine` (`id`, `cuisine_name`, `sequence`, `date_created`, `date_modified`, `ip_address`, `cuisine_name_trans`) VALUES
(1, 'American', 0, '2018-12-06 02:35:28', '0000-00-00 00:00:00', '203.192.219.86', ''),
(2, 'Deli', 0, '2018-12-06 02:35:28', '0000-00-00 00:00:00', '203.192.219.86', ''),
(3, 'Indian', 0, '2018-12-06 02:35:28', '0000-00-00 00:00:00', '203.192.219.86', ''),
(4, 'Mediterranean', 0, '2018-12-06 02:35:28', '0000-00-00 00:00:00', '203.192.219.86', ''),
(5, 'Sandwiches', 0, '2018-12-06 02:35:28', '0000-00-00 00:00:00', '203.192.219.86', ''),
(6, 'Barbeque', 0, '2018-12-06 02:35:28', '0000-00-00 00:00:00', '203.192.219.86', ''),
(7, 'Diner', 0, '2018-12-06 02:35:28', '0000-00-00 00:00:00', '203.192.219.86', ''),
(8, 'Italian', 0, '2018-12-06 02:35:28', '0000-00-00 00:00:00', '203.192.219.86', ''),
(9, 'Mexican', 0, '2018-12-06 02:35:28', '0000-00-00 00:00:00', '203.192.219.86', ''),
(10, 'Sushi', 0, '2018-12-06 02:35:28', '0000-00-00 00:00:00', '203.192.219.86', ''),
(11, 'Burgers', 0, '2018-12-06 02:35:28', '0000-00-00 00:00:00', '203.192.219.86', ''),
(12, 'Greek', 0, '2018-12-06 02:35:28', '0000-00-00 00:00:00', '203.192.219.86', ''),
(13, 'Japanese', 0, '2018-12-06 02:35:28', '0000-00-00 00:00:00', '203.192.219.86', ''),
(14, 'Middle Eastern', 0, '2018-12-06 02:35:28', '0000-00-00 00:00:00', '203.192.219.86', ''),
(15, 'Thai', 0, '2018-12-06 02:35:28', '0000-00-00 00:00:00', '203.192.219.86', ''),
(16, 'Chinese', 0, '2018-12-06 02:35:28', '0000-00-00 00:00:00', '203.192.219.86', ''),
(17, 'Healthy', 0, '2018-12-06 02:35:28', '0000-00-00 00:00:00', '203.192.219.86', ''),
(18, 'Korean', 0, '2018-12-06 02:35:28', '0000-00-00 00:00:00', '203.192.219.86', ''),
(19, 'Pizza', 0, '2018-12-06 02:35:28', '0000-00-00 00:00:00', '203.192.219.86', ''),
(20, 'Vegetarian', 0, '2018-12-06 02:35:28', '0000-00-00 00:00:00', '203.192.219.86', ''),
(21, 'North Indian', 0, '2018-12-07 15:24:35', '0000-00-00 00:00:00', '203.192.219.81', NULL),
(22, ' Biryani', 0, '2018-12-07 15:24:48', '0000-00-00 00:00:00', '203.192.219.81', NULL),
(23, 'Mughlai', 0, '2018-12-07 15:25:09', '0000-00-00 00:00:00', '203.192.219.81', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mt_currency`
--

CREATE TABLE `mt_currency` (
  `currency_code` varchar(3) NOT NULL DEFAULT '',
  `currency_symbol` varchar(100) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mt_custom_page`
--

CREATE TABLE `mt_custom_page` (
  `id` int(14) NOT NULL,
  `slug_name` varchar(255) NOT NULL DEFAULT '',
  `page_name` varchar(255) NOT NULL DEFAULT '',
  `content` text,
  `seo_title` varchar(255) NOT NULL DEFAULT '',
  `meta_description` varchar(255) NOT NULL DEFAULT '',
  `meta_keywords` varchar(255) NOT NULL DEFAULT '',
  `icons` varchar(255) NOT NULL DEFAULT '',
  `assign_to` varchar(50) NOT NULL DEFAULT '',
  `sequence` int(14) NOT NULL DEFAULT '0',
  `status` varchar(50) NOT NULL DEFAULT 'pending',
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip_address` varchar(100) NOT NULL DEFAULT '',
  `open_new_tab` int(11) NOT NULL DEFAULT '1',
  `is_custom_link` int(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mt_dishes`
--

CREATE TABLE `mt_dishes` (
  `dish_id` int(14) NOT NULL,
  `dish_name` varchar(255) NOT NULL DEFAULT '',
  `photo` varchar(255) NOT NULL DEFAULT '',
  `status` varchar(100) NOT NULL DEFAULT 'Active',
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip_address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mt_dishes`
--

INSERT INTO `mt_dishes` (`dish_id`, `dish_name`, `photo`, `status`, `date_created`, `date_modified`, `ip_address`) VALUES
(1, 'Biryani', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(2, 'Chickan Tikka Masala', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(3, 'Samosa', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(4, 'Butter Chicken', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(5, 'Gajar Ka halwa', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(6, 'Naan', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(7, 'Tandori Chicken', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(8, 'GulabJamun', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(9, 'Panipuri', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(10, 'Dosa', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(11, 'Khichadi', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(12, 'Palak Paneer', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(13, 'Chana Masala', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(14, 'Korma', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(15, 'Matter Paneer', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(16, 'Raita', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(17, 'Idli', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(18, 'Pongal', '', 'Active', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(19, 'Chicken Tikka', '', 'Active', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `mt_email_logs`
--

CREATE TABLE `mt_email_logs` (
  `id` int(14) NOT NULL,
  `email_address` varchar(255) NOT NULL DEFAULT '',
  `sender` varchar(255) NOT NULL DEFAULT '',
  `subject` varchar(255) NOT NULL DEFAULT '',
  `content` text,
  `status` varchar(200) NOT NULL DEFAULT 'pending',
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip_address` varchar(50) NOT NULL DEFAULT '',
  `module_type` varchar(255) NOT NULL DEFAULT '',
  `user_type` varchar(100) NOT NULL DEFAULT '',
  `user_id` int(14) NOT NULL DEFAULT '0',
  `merchant_id` int(14) NOT NULL DEFAULT '0',
  `email_provider` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mt_email_logs`
--

INSERT INTO `mt_email_logs` (`id`, `email_address`, `sender`, `subject`, `content`, `status`, `date_created`, `ip_address`, `module_type`, `user_type`, `user_id`, `merchant_id`, `email_provider`) VALUES
(1, 'connect@eisys.in', 'connect@eisys.in', 'Welcome Rabzo Kitchen', 'hi  Rabzo Kitchen\n\nThank you for joining us!\n\nLogin here\nhttps://ensivosolutions.com/rabzo1/merchant\n\nRegards\n - Rabzo ', 'sent', '2018-12-06 14:14:32', '204.93.193.167', 'core', '', 0, 0, ''),
(2, 'connect@eisys.in', 'connect@eisys.in', 'Your Activation Code', 'hi Rabzo Kitchen<br />\n<br />\nYour activation code is 133142<br />\n<br />\nRegards<br />\n  - Rabzo ', 'sent', '2018-12-06 14:14:33', '203.192.219.86', 'core', '', 0, 0, ''),
(3, 'connect@eisys.in', 'connect@eisys.in', 'Account Status Updated', 'hi Rabzo Kitchen\n\nYour merchant records status has change to active\n\nRegards\n - Rabzo ', 'sent', '2018-12-06 14:25:02', '204.93.193.167', 'core', '', 0, 0, ''),
(4, 'connect@eisys.in', 'connect@eisys.in', 'Account Status Updated', 'hi Rabzo Kitchen\n\nYour merchant records status has change to active\n\nRegards\n - Rabzo ', 'sent', '2018-12-06 14:25:21', '204.93.193.167', 'core', '', 0, 0, ''),
(5, 'connect@eisys.in', 'connect@eisys.in', 'Account Status Updated', 'hi Rabzo Kitchen\n\nYour merchant records status has change to active\n\nRegards\n - Rabzo ', 'sent', '2018-12-06 14:26:00', '204.93.193.167', 'core', '', 0, 0, ''),
(6, 'connect@eisys.in', 'connect@eisys.in', 'Welcome ashwin', 'hi eccenric<br />\n<br />\nthank you for signup <br />\n<br />\nRegards<br />\n- Rabzo ', 'sent', '2018-12-06 15:22:40', '203.192.219.86', 'core', '', 0, 0, ''),
(7, 'pratik.tambekar91@gmail.com', 'connect@eisys.in', 'Welcome Pratik', 'hi Pratik<br />\n<br />\nthank you for signup <br />\n<br />\nRegards<br />\n- Rabzo ', 'sent', '2018-12-07 14:29:30', '203.192.219.81', 'core', '', 0, 0, ''),
(8, 'connect@eisys.in', 'connect@eisys.in', 'Account Status Updated', 'hi Rabzo Kitchen\n\nYour merchant records status has change to pending\n\nRegards\n - Rabzo ', 'error occurred', '2018-12-08 18:07:12', '::1', 'core', '', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `mt_fax_broadcast`
--

CREATE TABLE `mt_fax_broadcast` (
  `id` int(14) NOT NULL,
  `merchant_id` int(14) NOT NULL DEFAULT '0',
  `faxno` varchar(50) NOT NULL DEFAULT '',
  `recipname` varchar(32) NOT NULL DEFAULT '',
  `faxurl` varchar(255) NOT NULL DEFAULT '',
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `jobid` varchar(255) NOT NULL DEFAULT '',
  `api_raw_response` text,
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_process` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_postback` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mt_fax_package`
--

CREATE TABLE `mt_fax_package` (
  `fax_package_id` int(14) NOT NULL,
  `title` varchar(255) NOT NULL DEFAULT '',
  `description` text,
  `price` float(14,4) NOT NULL DEFAULT '0.0000',
  `promo_price` float(14,4) NOT NULL DEFAULT '0.0000',
  `fax_limit` int(14) NOT NULL DEFAULT '0',
  `sequence` int(14) NOT NULL DEFAULT '0',
  `status` varchar(100) NOT NULL DEFAULT '',
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip_address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mt_fax_package_trans`
--

CREATE TABLE `mt_fax_package_trans` (
  `id` int(14) NOT NULL,
  `merchant_id` int(14) NOT NULL DEFAULT '0',
  `fax_package_id` int(14) NOT NULL DEFAULT '0',
  `payment_type` varchar(50) NOT NULL DEFAULT '',
  `package_price` float(14,4) NOT NULL DEFAULT '0.0000',
  `fax_limit` int(14) NOT NULL DEFAULT '0',
  `status` varchar(100) NOT NULL DEFAULT 'pending',
  `payment_reference` varchar(255) NOT NULL DEFAULT '',
  `payment_gateway_response` text,
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mt_ingredients`
--

CREATE TABLE `mt_ingredients` (
  `ingredients_id` int(14) NOT NULL,
  `merchant_id` int(14) NOT NULL DEFAULT '0',
  `ingredients_name` varchar(255) NOT NULL DEFAULT '',
  `sequence` int(14) NOT NULL DEFAULT '0',
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` varchar(50) NOT NULL DEFAULT 'published',
  `ip_address` varchar(50) NOT NULL DEFAULT '',
  `ingredients_name_trans` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mt_invoice`
--

CREATE TABLE `mt_invoice` (
  `invoice_number` int(14) NOT NULL,
  `invoice_token` varchar(100) NOT NULL DEFAULT '',
  `merchant_id` int(14) NOT NULL DEFAULT '0',
  `merchant_name` varchar(255) NOT NULL DEFAULT '',
  `merchant_contact_email` varchar(200) NOT NULL DEFAULT '',
  `merchant_contact_phone` varchar(50) NOT NULL DEFAULT '',
  `invoice_terms` int(14) NOT NULL DEFAULT '0',
  `invoice_total` float(14,4) NOT NULL DEFAULT '0.0000',
  `date_from` date NOT NULL DEFAULT '0000-00-00',
  `date_to` date NOT NULL DEFAULT '0000-00-00',
  `pdf_filename` varchar(255) NOT NULL DEFAULT '',
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `payment_status` varchar(255) NOT NULL DEFAULT 'unpaid',
  `viewed` varchar(2) NOT NULL DEFAULT '2',
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_process` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mt_invoice_history`
--

CREATE TABLE `mt_invoice_history` (
  `id` int(14) NOT NULL,
  `invoice_number` varchar(14) NOT NULL DEFAULT '',
  `payment_status` varchar(100) NOT NULL DEFAULT '',
  `remarks` varchar(255) NOT NULL DEFAULT '',
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip_address` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mt_item`
--

CREATE TABLE `mt_item` (
  `id` int(14) NOT NULL,
  `merchant_id` int(14) NOT NULL DEFAULT '0',
  `item_name` varchar(255) NOT NULL DEFAULT '',
  `item_description` text,
  `status` varchar(50) NOT NULL DEFAULT '',
  `category` text,
  `price` text,
  `addon_item` text,
  `cooking_ref` text,
  `discount` varchar(14) NOT NULL DEFAULT '',
  `multi_option` text,
  `multi_option_value` text,
  `photo` varchar(255) NOT NULL DEFAULT '',
  `sequence` int(14) NOT NULL DEFAULT '0',
  `is_featured` varchar(1) NOT NULL DEFAULT '',
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip_address` varchar(50) NOT NULL DEFAULT '',
  `ingredients` text,
  `spicydish` int(2) NOT NULL DEFAULT '1',
  `two_flavors` int(2) DEFAULT NULL,
  `two_flavors_position` text,
  `require_addon` text,
  `dish` text,
  `item_name_trans` text,
  `item_description_trans` text,
  `non_taxable` int(1) NOT NULL DEFAULT '1',
  `not_available` int(1) NOT NULL DEFAULT '1',
  `gallery_photo` text,
  `points_earned` int(14) NOT NULL DEFAULT '0',
  `points_disabled` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mt_item`
--

INSERT INTO `mt_item` (`id`, `merchant_id`, `item_name`, `item_description`, `status`, `category`, `price`, `addon_item`, `cooking_ref`, `discount`, `multi_option`, `multi_option_value`, `photo`, `sequence`, `is_featured`, `date_created`, `date_modified`, `ip_address`, `ingredients`, `spicydish`, `two_flavors`, `two_flavors_position`, `require_addon`, `dish`, `item_name_trans`, `item_description_trans`, `non_taxable`, `not_available`, `gallery_photo`, `points_earned`, `points_disabled`) VALUES
(1, 17, 'Chicken Tikka', 'Chicken tikka masala is a dish of chunks of roasted marinated chicken in a spiced curry sauce. The sauce is usually creamy and orange-coloured. There are multiple claims to its place of origin such as the Indian subcontinent and the United Kingdom. It is among the United Kingdom''s ', 'publish', '6', 'a:2:{s:2:"38";i:60;s:2:"40";i:120;}', '', '["1"]', '30', '', '', '1544086829-Hyderabadi-Dum-Biryani-1.jpg', 0, '', '2018-12-06 14:32:28', '0000-00-00 00:00:00', '203.192.219.86', '["1"]', 0, 0, '', '', '', NULL, NULL, 1, 1, '1544086848-shutterstock_277542194.jpg', 0, 1),
(2, 0, 'Bhendi Masala', 'Bhendi Masala', 'publish', '4', 'a:2:{s:2:"38";i:60;s:2:"40";i:120;}', '', '', '', '', '', '1544171187-Varhadi-Vyanjan-Nagpur-1.jpg', 1, '', '2018-12-07 13:55:49', '2018-12-07 13:57:28', '203.192.219.81', '', 0, 2, '', '', '', NULL, NULL, 1, 1, '["1544171123-bhendimasala.jpg","1544171243-bhindi-masala-step-by-step-recipe.jpg"]', 0, 1),
(3, 4, 'Kadai paneer', 'Kadai paneer', 'publish', '4', 'a:2:{s:2:"38";i:60;s:2:"40";i:120;}', '', '', '', '', '', '', 2, '', '2018-12-07 13:58:12', '2018-12-07 13:58:53', '203.192.219.81', '', 0, 0, '', '', '', NULL, NULL, 1, 1, '["1544171275-kadai-paneer-recipe-1-500x500.jpg","1544171330-kadaipaneer.jpg"]', 0, 1),
(4, 4, 'Matar Paneer', 'Mutter paneer', 'publish', '4', 'a:2:{s:2:"38";i:60;s:2:"40";i:120;}', '', '', '', '', '', '', 4, '', '2018-12-07 14:00:42', '0000-00-00 00:00:00', '203.192.219.81', '', 0, 0, '', '', '', NULL, NULL, 1, 1, '["1544171410-Matar-Paneer-Recipe-Step-By-Step-Instructions.jpg","1544171419-mutter-paneer.jpg"]', 0, 1),
(5, 4, 'Mix Veg', 'Mix Veg', 'publish', '4', 'a:2:{s:2:"38";i:60;s:2:"40";i:120;}', '', '', '', '', '', '', 6, '', '2018-12-07 14:02:24', '0000-00-00 00:00:00', '203.192.219.81', '', 0, 0, '', '', '', NULL, NULL, 1, 1, '["1544171493-mix-veg.jpg","1544171536-mxveg2.jpg"]', 0, 1),
(6, 4, 'Veg kholapuri', '', 'publish', '4', 'a:2:{s:2:"38";i:60;s:2:"40";i:120;}', '', '', '', '', '', '', 7, '', '2018-12-07 14:04:14', '0000-00-00 00:00:00', '203.192.219.81', '', 0, 0, '', '', '', NULL, NULL, 1, 1, '["1544171592-veg_kholapuri.jpg","1544171632-veg_kholapuri2.jpg"]', 0, 1),
(7, 4, 'Masala rice', 'Masala rice', 'publish', '4', 'a:2:{s:2:"38";i:60;s:2:"40";i:120;}', '', '', '', '', '', '', 5, '', '2018-12-07 14:05:51', '0000-00-00 00:00:00', '203.192.219.81', '', 0, 0, '', '', '', NULL, NULL, 1, 1, '["1544171695-masala-rice.png","1544171730-masalarice.jpg"]', 0, 1),
(8, 4, 'Veg Pulao', '', 'publish', '4', 'a:2:{s:2:"38";i:60;s:2:"40";i:120;}', '', '', '', '', '', '', 8, '', '2018-12-07 14:07:57', '0000-00-00 00:00:00', '203.192.219.81', '', 0, 0, '', '', '', NULL, NULL, 1, 1, '["1544171804-vegetable-pulav-recipe.jpg","1544171853-vegpulaoo.jpg"]', 0, 1),
(9, 4, 'Veg Anda Curry', '', 'publish', '4', '{"14":"90","13":"170"}', '', '', '', '', '', '', 9, '', '2018-12-07 14:12:52', '0000-00-00 00:00:00', '203.192.219.81', '', 0, 0, '', '', '', NULL, NULL, 1, 1, '["1544172143-veg-anda-curry.jpg","1544172154-vegandacurry.jpg"]', 0, 1),
(10, 4, 'Kopta Curry', 'Kopta Curry', 'publish', '4', 'a:2:{s:2:"38";i:60;s:2:"40";i:120;}', '', '', '', '', '', '', 3, '', '2018-12-07 14:15:25', '0000-00-00 00:00:00', '203.192.219.81', '', 0, 0, '', '', '', NULL, NULL, 1, 1, '["1544172224-MalaiKoftaCurry-1.jpg","1544172299-koptacurry.jpg","1544172305-477292-1-eng-GB_lamb-kofta-curry-470x540.jpg"]', 0, 1),
(11, 17, 'chicken curry', '<span style="color:rgb(51,55,61);font-family:''-apple-system'', BlinkMacSystemFont, ''Segoe UI'', Roboto, Helvetica, Arial, sans-serif, ''Apple Color Emoji'', ''Segoe UI Emoji'', ''Segoe UI Symbol'';">Costly, Online Payment facility not available, Taste is good ,on same cost you would get better meal than shankar saoji. last one it uses saoji masala it makes you stomach upset</span>', 'publish', '6', 'a:2:{s:2:"38";i:60;s:2:"40";i:120;}', '', '', '', '', '', '', 0, '', '2018-12-07 15:44:07', '0000-00-00 00:00:00', '203.192.219.81', '', 0, 0, '', '', '', NULL, NULL, 1, 1, '["1544177632-malvani-chicken-curry_620x330_81514354104.jpg"]', 0, 1),
(12, 5, 'Mutton Curry', 'Mutton Curry', 'publish', '6', 'a:2:{s:2:"38";i:60;s:2:"40";i:120;}', '', '', '', '', '', '', 0, '', '2018-12-07 15:45:18', '0000-00-00 00:00:00', '203.192.219.81', '', 0, 0, '', '', '', NULL, NULL, 1, 1, '["1544177697-download.jpg","1544177704-shankar-saoji-bhojnalay-wadi-nagpur-restaurants-kms7h3k0wb.jpg"]', 0, 1),
(13, 5, 'Egg Curry', 'Egg Curry', 'publish', '6', 'a:2:{s:2:"38";i:60;s:2:"40";i:120;}', '', '', '', '', '', '', 0, '', '2018-12-07 15:46:34', '0000-00-00 00:00:00', '203.192.219.81', '', 0, 0, '', '', '', NULL, NULL, 1, 1, '["1544177772-punjabi-egg-curry-anda-curry.jpg","1544177780-vegandacurry.jpg"]', 0, 1),
(14, 5, 'Khura', 'Goat Leg called as Khura in marathi langiage', 'publish', '6', 'a:2:{s:2:"38";i:60;s:2:"40";i:120;}', '', '', '', '', '', '', 0, '', '2018-12-07 15:47:32', '0000-00-00 00:00:00', '203.192.219.81', '', 0, 0, '', '', '', NULL, NULL, 1, 1, '["1544177849-mutton.jpg"]', 0, 1),
(15, 5, 'Crab', 'Crab', 'publish', '6', 'a:2:{s:2:"38";i:60;s:2:"40";i:120;}', '', '', '', '', '', '', 0, '', '2018-12-07 15:48:17', '0000-00-00 00:00:00', '203.192.219.81', '', 0, 0, '', '', '', NULL, NULL, 1, 1, '["1544177895-4QNlZ.jpg"]', 0, 1),
(16, 5, 'Muglai Chicken', '', 'publish', '6', 'a:2:{s:2:"38";i:60;s:2:"40";i:120;}', '', '', '', '', '', '', 0, '', '2018-12-07 15:49:45', '2018-12-07 15:50:48', '203.192.219.81', '', 0, 0, '', '', '', NULL, NULL, 1, 1, '["1544177974-DYXrH.jpg"]', 0, 1),
(17, 5, 'Chicken Biryani', 'Chicken Biryani', 'publish', '6', 'a:2:{s:2:"38";i:60;s:2:"40";i:120;}', '', '', '', '', '', '', 0, '', '2018-12-07 15:55:37', '0000-00-00 00:00:00', '203.192.219.81', '', 0, 0, '', '', '', NULL, NULL, 1, 1, '["1544178332-download-(1).jpg","1544178333-7e20d8583a374b1490b859b8223f373e.png"]', 0, 1),
(18, 5, 'Mutton Biryani', 'Mutton Biryani', 'publish', '6', 'a:2:{s:2:"38";i:60;s:2:"40";i:120;}', '', '', '', '', '', '', 0, '', '2018-12-07 15:56:23', '0000-00-00 00:00:00', '203.192.219.81', '', 0, 0, '', '', '', NULL, NULL, 1, 1, '["1544178380-mutton-biryani-620.jpg","1544178381-mutton-biryani2.jpg"]', 0, 1),
(19, 5, 'Egg Biryani', 'Egg Biryani', 'publish', '6', 'a:2:{s:2:"38";i:60;s:2:"40";i:120;}', '', '', '', '', '', '', 0, '', '2018-12-07 15:57:15', '0000-00-00 00:00:00', '203.192.219.81', '', 0, 0, '', '', '', NULL, NULL, 1, 1, '["1544178419-1-12.jpg","1544178419-Egg-Biryani.jpg"]', 0, 1),
(20, 5, 'Veg Biryani', '', 'publish', '5', 'a:2:{s:2:"38";i:60;s:2:"40";i:120;}', '', '', '', '', '', '', 0, '', '2018-12-07 15:58:11', '0000-00-00 00:00:00', '203.192.219.81', '', 0, 0, '', '', '', NULL, NULL, 1, 1, '["1544178475-download-(2).jpg","1544178475-vegetable-biryani-recipe.jpg"]', 0, 1),
(21, 5, 'Patwadi', '', 'publish', '5', 'a:2:{s:2:"38";i:60;s:2:"40";i:120;}', '', '', '', '', '', '', 0, '', '2018-12-07 15:59:58', '0000-00-00 00:00:00', '203.192.219.81', '', 0, 0, '', '', '', NULL, NULL, 1, 1, '["1544178588-patwai1.jpg","1544178588-patwadi.jpg"]', 0, 1),
(22, 5, 'Paneer Butter masala', 'Paneer Butter masala', 'publish', '5', 'a:2:{s:2:"38";i:60;s:2:"40";i:120;}', '', '', '', '', '', '', 0, '', '2018-12-07 16:01:39', '0000-00-00 00:00:00', '203.192.219.81', '', 0, 0, '', '', '', NULL, NULL, 1, 1, '["1544178684-pbm.jpg","1544178685-pbm2.jpg"]', 0, 1),
(23, 5, 'Dal Fry', 'Dal Fry', 'publish', '5', 'a:2:{s:2:"38";i:60;s:2:"40";i:120;}', '{"5":["1"]}', '', '', '{"2":["multiple"],"3":["one"],"4":["one"],"5":["one"]}', '{"2":[""],"3":[""],"4":[""],"5":[""]}', '', 0, '', '2018-12-07 16:03:09', '2018-12-07 16:42:38', '203.192.219.81', '', 0, 0, '{"2":[""],"3":[""],"4":[""],"5":[""]}', '', '', NULL, NULL, 1, 1, '["1544178776-Dal-Fry_11.jpg","1544178779-Dal-Fry1.jpg"]', 0, 1),
(24, 16, 'sdfs', '<p>sdfs</p>', 'publish', NULL, 'a:2:{i:38;s:2:"10";i:39;s:2:"20";}', NULL, NULL, '100', NULL, NULL, '1556901938_download.jpg', 0, '', '2019-05-03 16:45:38', '2019-05-03 16:45:38', '::1', NULL, 1, 1, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `mt_item_images`
--

CREATE TABLE `mt_item_images` (
  `id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `image_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `source` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'NIL'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mt_item_images`
--

INSERT INTO `mt_item_images` (`id`, `item_id`, `image_name`, `datetime`, `source`) VALUES
(1, 1, 'Chicken_Tikka_Recipe_.jpg', '2019-04-27 11:59:25', 'web'),
(2, 1, 'chickentikkakebab.jpg', '2019-04-27 11:59:39', 'web'),
(3, 1, 'Tandoori-Chicken-Tikka-with-Lemon-and-Sage_ExtraLarge1000_ID-2483976.jpg', '2019-04-27 12:00:07', 'web');

-- --------------------------------------------------------

--
-- Table structure for table `mt_languages`
--

CREATE TABLE `mt_languages` (
  `lang_id` int(14) NOT NULL,
  `country_code` varchar(14) NOT NULL DEFAULT '',
  `language_code` varchar(255) NOT NULL,
  `source_text` text,
  `is_assign` int(1) NOT NULL DEFAULT '2',
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` varchar(50) NOT NULL DEFAULT '',
  `ip_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mt_location_area`
--

CREATE TABLE `mt_location_area` (
  `area_id` int(14) NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT '',
  `city_id` int(14) NOT NULL DEFAULT '0',
  `sequence` int(14) NOT NULL DEFAULT '0',
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip_address` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mt_location_cities`
--

CREATE TABLE `mt_location_cities` (
  `city_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL DEFAULT '',
  `postal_code` varchar(255) NOT NULL DEFAULT '',
  `state_id` int(11) NOT NULL,
  `sequence` int(14) NOT NULL DEFAULT '0',
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip_address` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mt_location_countries`
--

CREATE TABLE `mt_location_countries` (
  `country_id` int(11) NOT NULL,
  `shortcode` varchar(3) NOT NULL DEFAULT '',
  `country_name` varchar(150) NOT NULL DEFAULT '',
  `phonecode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mt_location_countries`
--

INSERT INTO `mt_location_countries` (`country_id`, `shortcode`, `country_name`, `phonecode`) VALUES
(1, 'AF', 'Afghanistan', 93),
(2, 'AL', 'Albania', 355),
(3, 'DZ', 'Algeria', 213),
(4, 'AS', 'American Samoa', 1684),
(5, 'AD', 'Andorra', 376),
(6, 'AO', 'Angola', 244),
(7, 'AI', 'Anguilla', 1264),
(8, 'AQ', 'Antarctica', 0),
(9, 'AG', 'Antigua And Barbuda', 1268),
(10, 'AR', 'Argentina', 54),
(11, 'AM', 'Armenia', 374),
(12, 'AW', 'Aruba', 297),
(13, 'AU', 'Australia', 61),
(14, 'AT', 'Austria', 43),
(15, 'AZ', 'Azerbaijan', 994),
(16, 'BS', 'Bahamas The', 1242),
(17, 'BH', 'Bahrain', 973),
(18, 'BD', 'Bangladesh', 880),
(19, 'BB', 'Barbados', 1246),
(20, 'BY', 'Belarus', 375),
(21, 'BE', 'Belgium', 32),
(22, 'BZ', 'Belize', 501),
(23, 'BJ', 'Benin', 229),
(24, 'BM', 'Bermuda', 1441),
(25, 'BT', 'Bhutan', 975),
(26, 'BO', 'Bolivia', 591),
(27, 'BA', 'Bosnia and Herzegovina', 387),
(28, 'BW', 'Botswana', 267),
(29, 'BV', 'Bouvet Island', 0),
(30, 'BR', 'Brazil', 55),
(31, 'IO', 'British Indian Ocean Territory', 246),
(32, 'BN', 'Brunei', 673),
(33, 'BG', 'Bulgaria', 359),
(34, 'BF', 'Burkina Faso', 226),
(35, 'BI', 'Burundi', 257),
(36, 'KH', 'Cambodia', 855),
(37, 'CM', 'Cameroon', 237),
(38, 'CA', 'Canada', 1),
(39, 'CV', 'Cape Verde', 238),
(40, 'KY', 'Cayman Islands', 1345),
(41, 'CF', 'Central African Republic', 236),
(42, 'TD', 'Chad', 235),
(43, 'CL', 'Chile', 56),
(44, 'CN', 'China', 86),
(45, 'CX', 'Christmas Island', 61),
(46, 'CC', 'Cocos (Keeling) Islands', 672),
(47, 'CO', 'Colombia', 57),
(48, 'KM', 'Comoros', 269),
(49, 'CG', 'Congo', 242),
(50, 'CD', 'Congo The Democratic Republic Of The', 242),
(51, 'CK', 'Cook Islands', 682),
(52, 'CR', 'Costa Rica', 506),
(53, 'CI', 'Cote D''Ivoire (Ivory Coast)', 225),
(54, 'HR', 'Croatia (Hrvatska)', 385),
(55, 'CU', 'Cuba', 53),
(56, 'CY', 'Cyprus', 357),
(57, 'CZ', 'Czech Republic', 420),
(58, 'DK', 'Denmark', 45),
(59, 'DJ', 'Djibouti', 253),
(60, 'DM', 'Dominica', 1767),
(61, 'DO', 'Dominican Republic', 1809),
(62, 'TP', 'East Timor', 670),
(63, 'EC', 'Ecuador', 593),
(64, 'EG', 'Egypt', 20),
(65, 'SV', 'El Salvador', 503),
(66, 'GQ', 'Equatorial Guinea', 240),
(67, 'ER', 'Eritrea', 291),
(68, 'EE', 'Estonia', 372),
(69, 'ET', 'Ethiopia', 251),
(70, 'XA', 'External Territories of Australia', 61),
(71, 'FK', 'Falkland Islands', 500),
(72, 'FO', 'Faroe Islands', 298),
(73, 'FJ', 'Fiji Islands', 679),
(74, 'FI', 'Finland', 358),
(75, 'FR', 'France', 33),
(76, 'GF', 'French Guiana', 594),
(77, 'PF', 'French Polynesia', 689),
(78, 'TF', 'French Southern Territories', 0),
(79, 'GA', 'Gabon', 241),
(80, 'GM', 'Gambia The', 220),
(81, 'GE', 'Georgia', 995),
(82, 'DE', 'Germany', 49),
(83, 'GH', 'Ghana', 233),
(84, 'GI', 'Gibraltar', 350),
(85, 'GR', 'Greece', 30),
(86, 'GL', 'Greenland', 299),
(87, 'GD', 'Grenada', 1473),
(88, 'GP', 'Guadeloupe', 590),
(89, 'GU', 'Guam', 1671),
(90, 'GT', 'Guatemala', 502),
(91, 'XU', 'Guernsey and Alderney', 44),
(92, 'GN', 'Guinea', 224),
(93, 'GW', 'Guinea-Bissau', 245),
(94, 'GY', 'Guyana', 592),
(95, 'HT', 'Haiti', 509),
(96, 'HM', 'Heard and McDonald Islands', 0),
(97, 'HN', 'Honduras', 504),
(98, 'HK', 'Hong Kong S.A.R.', 852),
(99, 'HU', 'Hungary', 36),
(100, 'IS', 'Iceland', 354),
(101, 'IN', 'India', 91),
(102, 'ID', 'Indonesia', 62),
(103, 'IR', 'Iran', 98),
(104, 'IQ', 'Iraq', 964),
(105, 'IE', 'Ireland', 353),
(106, 'IL', 'Israel', 972),
(107, 'IT', 'Italy', 39),
(108, 'JM', 'Jamaica', 1876),
(109, 'JP', 'Japan', 81),
(110, 'XJ', 'Jersey', 44),
(111, 'JO', 'Jordan', 962),
(112, 'KZ', 'Kazakhstan', 7),
(113, 'KE', 'Kenya', 254),
(114, 'KI', 'Kiribati', 686),
(115, 'KP', 'Korea North', 850),
(116, 'KR', 'Korea South', 82),
(117, 'KW', 'Kuwait', 965),
(118, 'KG', 'Kyrgyzstan', 996),
(119, 'LA', 'Laos', 856),
(120, 'LV', 'Latvia', 371),
(121, 'LB', 'Lebanon', 961),
(122, 'LS', 'Lesotho', 266),
(123, 'LR', 'Liberia', 231),
(124, 'LY', 'Libya', 218),
(125, 'LI', 'Liechtenstein', 423),
(126, 'LT', 'Lithuania', 370),
(127, 'LU', 'Luxembourg', 352),
(128, 'MO', 'Macau S.A.R.', 853),
(129, 'MK', 'Macedonia', 389),
(130, 'MG', 'Madagascar', 261),
(131, 'MW', 'Malawi', 265),
(132, 'MY', 'Malaysia', 60),
(133, 'MV', 'Maldives', 960),
(134, 'ML', 'Mali', 223),
(135, 'MT', 'Malta', 356),
(136, 'XM', 'Man (Isle of)', 44),
(137, 'MH', 'Marshall Islands', 692),
(138, 'MQ', 'Martinique', 596),
(139, 'MR', 'Mauritania', 222),
(140, 'MU', 'Mauritius', 230),
(141, 'YT', 'Mayotte', 269),
(142, 'MX', 'Mexico', 52),
(143, 'FM', 'Micronesia', 691),
(144, 'MD', 'Moldova', 373),
(145, 'MC', 'Monaco', 377),
(146, 'MN', 'Mongolia', 976),
(147, 'MS', 'Montserrat', 1664),
(148, 'MA', 'Morocco', 212),
(149, 'MZ', 'Mozambique', 258),
(150, 'MM', 'Myanmar', 95),
(151, 'NA', 'Namibia', 264),
(152, 'NR', 'Nauru', 674),
(153, 'NP', 'Nepal', 977),
(154, 'AN', 'Netherlands Antilles', 599),
(155, 'NL', 'Netherlands The', 31),
(156, 'NC', 'New Caledonia', 687),
(157, 'NZ', 'New Zealand', 64),
(158, 'NI', 'Nicaragua', 505),
(159, 'NE', 'Niger', 227),
(160, 'NG', 'Nigeria', 234),
(161, 'NU', 'Niue', 683),
(162, 'NF', 'Norfolk Island', 672),
(163, 'MP', 'Northern Mariana Islands', 1670),
(164, 'NO', 'Norway', 47),
(165, 'OM', 'Oman', 968),
(166, 'PK', 'Pakistan', 92),
(167, 'PW', 'Palau', 680),
(168, 'PS', 'Palestinian Territory Occupied', 970),
(169, 'PA', 'Panama', 507),
(170, 'PG', 'Papua new Guinea', 675),
(171, 'PY', 'Paraguay', 595),
(172, 'PE', 'Peru', 51),
(173, 'PH', 'Philippines', 63),
(174, 'PN', 'Pitcairn Island', 0),
(175, 'PL', 'Poland', 48),
(176, 'PT', 'Portugal', 351),
(177, 'PR', 'Puerto Rico', 1787),
(178, 'QA', 'Qatar', 974),
(179, 'RE', 'Reunion', 262),
(180, 'RO', 'Romania', 40),
(181, 'RU', 'Russia', 70),
(182, 'RW', 'Rwanda', 250),
(183, 'SH', 'Saint Helena', 290),
(184, 'KN', 'Saint Kitts And Nevis', 1869),
(185, 'LC', 'Saint Lucia', 1758),
(186, 'PM', 'Saint Pierre and Miquelon', 508),
(187, 'VC', 'Saint Vincent And The Grenadines', 1784),
(188, 'WS', 'Samoa', 684),
(189, 'SM', 'San Marino', 378),
(190, 'ST', 'Sao Tome and Principe', 239),
(191, 'SA', 'Saudi Arabia', 966),
(192, 'SN', 'Senegal', 221),
(193, 'RS', 'Serbia', 381),
(194, 'SC', 'Seychelles', 248),
(195, 'SL', 'Sierra Leone', 232),
(196, 'SG', 'Singapore', 65),
(197, 'SK', 'Slovakia', 421),
(198, 'SI', 'Slovenia', 386),
(199, 'XG', 'Smaller Territories of the UK', 44),
(200, 'SB', 'Solomon Islands', 677),
(201, 'SO', 'Somalia', 252),
(202, 'ZA', 'South Africa', 27),
(203, 'GS', 'South Georgia', 0),
(204, 'SS', 'South Sudan', 211),
(205, 'ES', 'Spain', 34),
(206, 'LK', 'Sri Lanka', 94),
(207, 'SD', 'Sudan', 249),
(208, 'SR', 'Suriname', 597),
(209, 'SJ', 'Svalbard And Jan Mayen Islands', 47),
(210, 'SZ', 'Swaziland', 268),
(211, 'SE', 'Sweden', 46),
(212, 'CH', 'Switzerland', 41),
(213, 'SY', 'Syria', 963),
(214, 'TW', 'Taiwan', 886),
(215, 'TJ', 'Tajikistan', 992),
(216, 'TZ', 'Tanzania', 255),
(217, 'TH', 'Thailand', 66),
(218, 'TG', 'Togo', 228),
(219, 'TK', 'Tokelau', 690),
(220, 'TO', 'Tonga', 676),
(221, 'TT', 'Trinidad And Tobago', 1868),
(222, 'TN', 'Tunisia', 216),
(223, 'TR', 'Turkey', 90),
(224, 'TM', 'Turkmenistan', 7370),
(225, 'TC', 'Turks And Caicos Islands', 1649),
(226, 'TV', 'Tuvalu', 688),
(227, 'UG', 'Uganda', 256),
(228, 'UA', 'Ukraine', 380),
(229, 'AE', 'United Arab Emirates', 971),
(230, 'GB', 'United Kingdom', 44),
(231, 'US', 'United States', 1),
(232, 'UM', 'United States Minor Outlying Islands', 1),
(233, 'UY', 'Uruguay', 598),
(234, 'UZ', 'Uzbekistan', 998),
(235, 'VU', 'Vanuatu', 678),
(236, 'VA', 'Vatican City State (Holy See)', 39),
(237, 'VE', 'Venezuela', 58),
(238, 'VN', 'Vietnam', 84),
(239, 'VG', 'Virgin Islands (British)', 1284),
(240, 'VI', 'Virgin Islands (US)', 1340),
(241, 'WF', 'Wallis And Futuna Islands', 681),
(242, 'EH', 'Western Sahara', 212),
(243, 'YE', 'Yemen', 967),
(244, 'YU', 'Yugoslavia', 38),
(245, 'ZM', 'Zambia', 260),
(246, 'ZW', 'Zimbabwe', 263);

-- --------------------------------------------------------

--
-- Table structure for table `mt_location_rate`
--

CREATE TABLE `mt_location_rate` (
  `rate_id` int(14) NOT NULL,
  `merchant_id` int(14) NOT NULL DEFAULT '0',
  `country_id` int(14) NOT NULL DEFAULT '0',
  `state_id` int(14) NOT NULL DEFAULT '0',
  `city_id` int(14) DEFAULT '0',
  `area_id` int(14) NOT NULL DEFAULT '0',
  `fee` float(14,5) NOT NULL DEFAULT '0.00000',
  `sequence` int(14) NOT NULL DEFAULT '0',
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip_address` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mt_location_states`
--

CREATE TABLE `mt_location_states` (
  `state_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL DEFAULT '',
  `country_id` int(11) NOT NULL DEFAULT '1',
  `sequence` int(14) NOT NULL DEFAULT '0',
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip_address` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mt_merchant`
--

CREATE TABLE `mt_merchant` (
  `id` int(14) NOT NULL,
  `restaurant_slug` varchar(255) NOT NULL DEFAULT '',
  `restaurant_name` varchar(255) NOT NULL DEFAULT '',
  `owner_name` varchar(255) DEFAULT NULL,
  `restaurant_phone` varchar(100) NOT NULL DEFAULT '',
  `contact_name` varchar(255) NOT NULL DEFAULT '',
  `contact_phone` varchar(100) NOT NULL DEFAULT '',
  `contact_email` varchar(255) NOT NULL DEFAULT '',
  `country_code` varchar(3) NOT NULL DEFAULT '',
  `address` text,
  `street` text,
  `city` varchar(255) NOT NULL DEFAULT '',
  `state` varchar(255) NOT NULL DEFAULT '',
  `post_code` varchar(100) NOT NULL DEFAULT '',
  `gst_number` varchar(255) DEFAULT NULL,
  `adhar_number` varchar(255) DEFAULT NULL,
  `pan_number` varchar(255) DEFAULT NULL,
  `fssi_number` varchar(255) DEFAULT NULL,
  `cuisine` text,
  `service` varchar(255) NOT NULL DEFAULT '',
  `free_delivery` int(1) NOT NULL DEFAULT '2',
  `delivery_estimation` varchar(100) NOT NULL DEFAULT '',
  `username` varchar(100) NOT NULL DEFAULT '',
  `password` varchar(100) NOT NULL DEFAULT '',
  `activation_key` varchar(50) NOT NULL DEFAULT '',
  `activation_token` varchar(255) NOT NULL DEFAULT '',
  `status` varchar(100) NOT NULL DEFAULT 'pending',
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_activated` datetime DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `ip_address` varchar(50) NOT NULL DEFAULT '',
  `package_id` int(14) DEFAULT NULL,
  `package_price` float(14,5) DEFAULT NULL,
  `membership_expired` date DEFAULT NULL,
  `payment_steps` varchar(255) DEFAULT NULL,
  `is_featured` int(1) NOT NULL DEFAULT '1',
  `is_ready` int(1) NOT NULL DEFAULT '1',
  `is_sponsored` int(2) NOT NULL DEFAULT '1',
  `sponsored_expiration` date DEFAULT NULL,
  `lost_password_code` varchar(50) NOT NULL DEFAULT '',
  `user_lang` int(14) NOT NULL DEFAULT '0',
  `membership_purchase_date` datetime DEFAULT NULL,
  `sort_featured` int(14) NOT NULL DEFAULT '0',
  `is_commission` int(1) NOT NULL DEFAULT '1',
  `percent_commision` float(14,5) NOT NULL DEFAULT '0.00000',
  `abn` varchar(255) NOT NULL DEFAULT '',
  `session_token` varchar(255) NOT NULL DEFAULT '',
  `commision_type` varchar(50) NOT NULL DEFAULT 'percentage',
  `mobile_session_token` varchar(255) NOT NULL DEFAULT '',
  `merchant_key` varchar(255) NOT NULL DEFAULT '',
  `latitude` varchar(50) NOT NULL DEFAULT '',
  `lontitude` varchar(50) NOT NULL DEFAULT '',
  `delivery_charges` float(14,5) NOT NULL DEFAULT '0.00000',
  `minimum_order` float(14,5) NOT NULL DEFAULT '0.00000',
  `delivery_minimum_order` float(14,5) NOT NULL DEFAULT '0.00000',
  `delivery_maximum_order` float(14,5) NOT NULL DEFAULT '0.00000',
  `pickup_minimum_order` float(14,5) NOT NULL DEFAULT '0.00000',
  `pickup_maximum_order` float(14,5) NOT NULL DEFAULT '0.00000',
  `country_name` varchar(255) NOT NULL DEFAULT '',
  `country_id` int(14) NOT NULL DEFAULT '0',
  `state_id` int(14) NOT NULL DEFAULT '0',
  `city_id` int(14) NOT NULL DEFAULT '0',
  `area_id` int(14) NOT NULL DEFAULT '0',
  `logo` varchar(255) NOT NULL DEFAULT '',
  `merchant_type` int(1) NOT NULL DEFAULT '1',
  `invoice_terms` int(14) NOT NULL DEFAULT '7',
  `source` varchar(25) NOT NULL DEFAULT 'NIL'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mt_merchant`
--

INSERT INTO `mt_merchant` (`id`, `restaurant_slug`, `restaurant_name`, `owner_name`, `restaurant_phone`, `contact_name`, `contact_phone`, `contact_email`, `country_code`, `address`, `street`, `city`, `state`, `post_code`, `gst_number`, `adhar_number`, `pan_number`, `fssi_number`, `cuisine`, `service`, `free_delivery`, `delivery_estimation`, `username`, `password`, `activation_key`, `activation_token`, `status`, `date_created`, `date_modified`, `date_activated`, `last_login`, `ip_address`, `package_id`, `package_price`, `membership_expired`, `payment_steps`, `is_featured`, `is_ready`, `is_sponsored`, `sponsored_expiration`, `lost_password_code`, `user_lang`, `membership_purchase_date`, `sort_featured`, `is_commission`, `percent_commision`, `abn`, `session_token`, `commision_type`, `mobile_session_token`, `merchant_key`, `latitude`, `lontitude`, `delivery_charges`, `minimum_order`, `delivery_minimum_order`, `delivery_maximum_order`, `pickup_minimum_order`, `pickup_maximum_order`, `country_name`, `country_id`, `state_id`, `city_id`, `area_id`, `logo`, `merchant_type`, `invoice_terms`, `source`) VALUES
(1, 'khana hai khayenge', 'Haldiram', 'Pankaj Chaure', '9874563210', '', '7896541239', 'panlaj@gmail.com', 'IN', 'Plot no 22, Gajanandham, Near Sahakar Nagar, Khamla Road, Nagpur', NULL, 'Nagpur', 'Maharashtra', '440025', 'GST789546122', '1234567890', 'PCMKL1254M', '5464PNK34', '2,3', 'null', 2, '', 'haldiram', 'e110d2051765e6cbf7b19df6085a2dce', 'VZ5A4J', '', 'Active', '2019-06-06 15:56:09', '2019-06-06 15:56:09', '2019-06-06 15:56:09', NULL, '::1', NULL, NULL, NULL, 'Cash on delivery,Paytm', 1, 1, 1, NULL, '', 0, NULL, 0, 1, 0.00000, '', '', 'percentage', '', '', '20.0000', '10.0000', 0.00000, 0.00000, 0.00000, 0.00000, 0.00000, 0.00000, '', 0, 0, 0, 0, '1559836569_b-logo1.png', 1, 7, 'NIL'),
(2, 'Khao Dil se', 'Dwarka', 'Dwarka Owner', '785412369', '', '1234567890', 'dwarka@gmail.com', 'IN', 'Plot No 16 Prashnat Nagar Awshthi Chauk Jafar Nagar', NULL, 'Nagpur', 'Maharashtra', '441111', '456879', '8796541', 'APY123654', '123546', '1,4', 'null', 2, '', 'dwarka', 'ab280dbe10f20d872402a0a6fefdae1a', 'OZW5F3', '', 'Active', '2019-06-06 16:20:06', '2019-06-06 16:20:06', '2019-06-06 16:20:06', NULL, '::1', NULL, NULL, NULL, 'Cash on delivery,Paytm', 1, 1, 1, NULL, '', 0, NULL, 0, 1, 0.00000, '', '', 'percentage', '', '', '10.0000', '20.0000', 0.00000, 0.00000, 0.00000, 0.00000, 0.00000, 0.00000, '', 0, 0, 0, 0, '1559838006_b-logo2 (1).png', 1, 7, 'NIL'),
(3, 'Anna Raskala', 'Anna Hotel', 'Anna Reddy', '547965412', '', '8888898745', 'anna@gmail.com', 'IN', 'Plot no 17 Narala Digori Nagpur', NULL, 'Nagpur', 'MAHARASHTRA', '440015', '78787878787', '89898989898', '212121212121', '5555555555', '5,7', 'null', 2, '', 'anna', 'a70f9e38ff015afaa9ab0aacabee2e13', '0OWRJT', '', 'Active', '2019-06-06 16:25:14', '2019-06-06 16:28:54', '2019-06-06 16:25:14', NULL, '::1', NULL, NULL, NULL, 'Cash on delivery,Pay on delivery,Rupay,Paytm', 1, 1, 1, NULL, '', 0, NULL, 0, 1, 0.00000, '', '', 'percentage', '', '', '20.0000', '20.0000', 0.00000, 0.00000, 0.00000, 0.00000, 0.00000, 0.00000, '', 0, 0, 0, 0, '1559838314_6.jpg', 1, 7, 'NIL');

-- --------------------------------------------------------

--
-- Table structure for table `mt_merchant_categories`
--

CREATE TABLE `mt_merchant_categories` (
  `id` int(11) NOT NULL,
  `merchant_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL DEFAULT '0',
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `source` varchar(25) NOT NULL DEFAULT 'NIL'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mt_merchant_cc`
--

CREATE TABLE `mt_merchant_cc` (
  `mt_id` int(14) NOT NULL,
  `merchant_id` int(14) NOT NULL DEFAULT '0',
  `card_name` varchar(255) NOT NULL DEFAULT '',
  `credit_card_number` varchar(20) NOT NULL DEFAULT '',
  `expiration_month` varchar(5) NOT NULL DEFAULT '',
  `expiration_yr` varchar(5) NOT NULL DEFAULT '',
  `cvv` varchar(20) NOT NULL,
  `billing_address` varchar(255) NOT NULL DEFAULT '',
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mt_merchant_cuisine`
--

CREATE TABLE `mt_merchant_cuisine` (
  `id` int(11) NOT NULL,
  `merchant_id` int(11) NOT NULL,
  `cuisine_id` int(11) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `source` varchar(25) NOT NULL DEFAULT 'NIL'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mt_merchant_cuisine`
--

INSERT INTO `mt_merchant_cuisine` (`id`, `merchant_id`, `cuisine_id`, `datetime`, `source`) VALUES
(1, 1, 2, '2019-06-06 15:56:09', 'NIL'),
(2, 1, 3, '2019-06-06 15:56:09', 'NIL'),
(3, 2, 1, '2019-06-06 16:20:06', 'NIL'),
(4, 2, 4, '2019-06-06 16:20:06', 'NIL'),
(10, 3, 7, '2019-06-06 16:28:54', 'NIL'),
(9, 3, 5, '2019-06-06 16:28:54', 'NIL');

-- --------------------------------------------------------

--
-- Table structure for table `mt_merchant_images`
--

CREATE TABLE `mt_merchant_images` (
  `id` int(11) NOT NULL,
  `merchant_id` int(11) NOT NULL,
  `images` tinytext NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `source` varchar(25) NOT NULL DEFAULT 'NIL'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mt_merchant_images`
--

INSERT INTO `mt_merchant_images` (`id`, `merchant_id`, `images`, `datetime`, `source`) VALUES
(1, 1, 'food.jpg', '2019-06-06 15:56:09', 'NIL'),
(2, 1, 'food1.jpg', '2019-06-06 15:56:09', 'NIL'),
(3, 1, 'food3.jpg', '2019-06-06 15:56:09', 'NIL'),
(4, 1, 'food4.jpg', '2019-06-06 15:56:09', 'NIL'),
(5, 2, 'food1.jpg', '2019-06-06 16:20:06', 'NIL'),
(6, 2, 'food3.jpg', '2019-06-06 16:20:06', 'NIL'),
(7, 2, 'food4.jpg', '2019-06-06 16:20:06', 'NIL'),
(18, 3, '7.jpg', '2019-06-06 16:26:29', 'NIL'),
(17, 3, '5.jpg', '2019-06-06 16:26:29', 'NIL'),
(16, 3, '4.jpg', '2019-06-06 16:26:29', 'NIL'),
(15, 3, '2.jpg', '2019-06-06 16:26:29', 'NIL'),
(14, 3, '1.jpg', '2019-06-06 16:26:29', 'NIL');

-- --------------------------------------------------------

--
-- Table structure for table `mt_merchant_meta`
--

CREATE TABLE `mt_merchant_meta` (
  `id` int(11) NOT NULL,
  `merchant_id` int(11) NOT NULL,
  `merchant_key` varchar(255) NOT NULL,
  `merchant_value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mt_merchant_meta`
--

INSERT INTO `mt_merchant_meta` (`id`, `merchant_id`, `merchant_key`, `merchant_value`) VALUES
(21, 13, 'merchant_user_type', 'Employee'),
(22, 13, 'merchant_website_url', 'http://rabzo.com'),
(23, 13, 'merchant_no_of_outlets', 'Employee'),
(24, 13, 'merchant_outlet_area', 'asdsdsd'),
(25, 13, 'merchant_cost_for_two', '100-400'),
(26, 13, 'merchant_establishment_type', 'Casual Dining'),
(27, 13, 'merchant_support_delivery', 'No'),
(28, 13, 'merchant_shop_license', 'uploads/background_banner1.jpg'),
(29, 13, 'merchant_fassai_certificate', 'uploads/noimage.jpg'),
(30, 13, 'merchant_gst_pan_certificate', 'uploads/rabzo_log_WEB.png'),
(31, 12, 'merchant_user_type', 'Employee'),
(32, 12, 'merchant_website_url', 'https://www.rabzo.com'),
(33, 12, 'merchant_no_of_outlets', 'Employee'),
(34, 12, 'merchant_outlet_area', 'gfgfgf'),
(35, 12, 'merchant_cost_for_two', '100-400'),
(36, 12, 'merchant_establishment_type', 'Fine Dining'),
(37, 12, 'merchant_support_delivery', 'Yes'),
(38, 12, 'merchant_shop_license', 'uploads/map_pointer_small.png'),
(39, 12, 'merchant_fassai_certificate', 'uploads/rabzo_log_WEB.png'),
(40, 12, 'merchant_gst_pan_certificate', 'uploads/map_pointer_small.png'),
(41, 13, 'merchant_user_type', 'Employee'),
(42, 13, 'merchant_website_url', 'https://www.rabzo.com'),
(43, 13, 'merchant_no_of_outlets', 'Employee'),
(44, 13, 'merchant_outlet_area', 'gfgfgf'),
(45, 13, 'merchant_cost_for_two', '100-400'),
(46, 13, 'merchant_establishment_type', 'Fine Dining'),
(47, 13, 'merchant_support_delivery', 'Yes'),
(48, 13, 'merchant_shop_license', 'uploads/map_pointer_small.png'),
(49, 13, 'merchant_fassai_certificate', 'uploads/'),
(50, 13, 'merchant_gst_pan_certificate', 'uploads/'),
(51, 14, 'merchant_user_type', 'Employee'),
(52, 14, 'merchant_website_url', 'https://www.rabzo.com'),
(53, 14, 'merchant_no_of_outlets', 'Employee'),
(54, 14, 'merchant_outlet_area', 'Khamla'),
(55, 14, 'merchant_cost_for_two', '100'),
(56, 14, 'merchant_establishment_type', 'Casual Dining'),
(57, 14, 'merchant_support_delivery', 'Yes'),
(58, 14, 'merchant_shop_license', 'uploads/people-table.png'),
(59, 14, 'merchant_fassai_certificate', 'uploads/about-us.png'),
(60, 14, 'merchant_gst_pan_certificate', 'uploads/Definisi-Perencanaan-dan-Pengendalian-Produksi.jpg'),
(61, 15, 'merchant_gst_number', '14562ksss'),
(62, 15, 'merchant_pan_number', 'PSB1245687'),
(63, 15, 'merchant_aadhar_number', '12345698745'),
(64, 15, 'merchant_fssi_number', '13513xs');

-- --------------------------------------------------------

--
-- Table structure for table `mt_merchant_payment_provider`
--

CREATE TABLE `mt_merchant_payment_provider` (
  `id` int(11) NOT NULL,
  `merchant_id` int(11) DEFAULT '0',
  `payment_provider_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mt_merchant_payment_provider`
--

INSERT INTO `mt_merchant_payment_provider` (`id`, `merchant_id`, `payment_provider_name`) VALUES
(1, 1, 'Cash on delivery'),
(2, 1, 'Paytm'),
(3, 2, 'Cash on delivery'),
(4, 2, 'Paytm'),
(13, 3, 'Cash on delivery'),
(14, 3, 'Pay on delivery'),
(15, 3, 'Rupay'),
(16, 3, 'Paytm');

-- --------------------------------------------------------

--
-- Table structure for table `mt_merchant_services`
--

CREATE TABLE `mt_merchant_services` (
  `id` int(11) NOT NULL,
  `services_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mt_merchant_user`
--

CREATE TABLE `mt_merchant_user` (
  `merchant_user_id` int(14) NOT NULL,
  `merchant_id` int(14) NOT NULL DEFAULT '0',
  `first_name` varchar(255) NOT NULL DEFAULT '',
  `last_name` varchar(255) NOT NULL DEFAULT '',
  `username` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL DEFAULT '',
  `user_access` text,
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` varchar(100) NOT NULL DEFAULT 'active',
  `last_login` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip_address` varchar(50) NOT NULL DEFAULT '',
  `contact_email` varchar(255) NOT NULL DEFAULT '',
  `session_token` varchar(255) NOT NULL DEFAULT '',
  `mobile_session_token` varchar(255) NOT NULL DEFAULT '',
  `lost_password_code` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mt_minimum_table`
--

CREATE TABLE `mt_minimum_table` (
  `id` int(14) NOT NULL,
  `merchant_id` int(14) NOT NULL DEFAULT '0',
  `distance_from` int(14) NOT NULL DEFAULT '0',
  `distance_to` int(14) DEFAULT '0',
  `shipping_units` varchar(5) NOT NULL DEFAULT '',
  `min_order` float(14,4) NOT NULL DEFAULT '0.0000'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mt_mobile_broadcast`
--

CREATE TABLE `mt_mobile_broadcast` (
  `broadcast_id` int(14) NOT NULL,
  `push_title` varchar(255) NOT NULL DEFAULT '',
  `push_message` varchar(255) NOT NULL DEFAULT '',
  `device_platform` int(14) NOT NULL DEFAULT '1',
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mt_newsletter`
--

CREATE TABLE `mt_newsletter` (
  `id` int(14) NOT NULL,
  `email_address` varchar(255) NOT NULL DEFAULT '',
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mt_offers`
--

CREATE TABLE `mt_offers` (
  `id` int(14) NOT NULL,
  `merchant_id` int(14) NOT NULL DEFAULT '0',
  `offer_percentage` float(14,4) NOT NULL DEFAULT '0.0000',
  `offer_price` float(14,4) NOT NULL DEFAULT '0.0000',
  `valid_from` date NOT NULL DEFAULT '0000-00-00',
  `valid_to` date NOT NULL DEFAULT '0000-00-00',
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip_address` varchar(50) NOT NULL,
  `applicable_to` varchar(100) NOT NULL DEFAULT 'all'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mt_offers`
--

INSERT INTO `mt_offers` (`id`, `merchant_id`, `offer_percentage`, `offer_price`, `valid_from`, `valid_to`, `status`, `date_created`, `date_modified`, `ip_address`, `applicable_to`) VALUES
(1, 17, 25.0000, 200.0000, '2019-05-10', '2019-05-12', 'active', '2019-04-29 18:18:31', '0000-00-00 00:00:00', '157.45.71.254', 'Dienin');

-- --------------------------------------------------------

--
-- Table structure for table `mt_option`
--

CREATE TABLE `mt_option` (
  `id` int(14) NOT NULL,
  `merchant_id` int(14) NOT NULL DEFAULT '0',
  `option_name` varchar(255) NOT NULL DEFAULT '',
  `option_value` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mt_option`
--

INSERT INTO `mt_option` (`id`, `merchant_id`, `option_name`, `option_value`) VALUES
(1, 0, 'website_title', 'test'),
(2, 0, 'website_address', 'dfsf'),
(3, 0, 'admin_country_set', 'IN'),
(4, 0, 'website_contact_phone', 'fd'),
(5, 0, 'website_contact_email', 'fds'),
(6, 0, 'contact_us_tpl_subject_en', 'contact us form'),
(7, 0, 'contact_us_tpl_content_en', 'hi admin \n\nnew contact us\nname : [name] \nemail : [email]  \ncountry : [country] \nphone : [phone] \nmessage : [message] \n\nRegards \n- [sitename]'),
(8, 0, 'contact_us_email', '1'),
(9, 0, 'customer_welcome_email_tpl_subject_en', 'Welcome [firstname]'),
(10, 0, 'customer_welcome_email_tpl_content_en', 'hi [firstname]\n\nthank you for signup \n\nRegards\n- [sitename]'),
(11, 0, 'customer_welcome_email_email', '1'),
(12, 0, 'customer_forgot_password_tpl_subject_en', 'Forgot password'),
(13, 0, 'customer_forgot_password_tpl_content_en', 'Hi [firstname]\n\nYou have requested for your password\nclick in the link to change your password\n[change_pass_link]\n\nRegards\n - [sitename]'),
(14, 0, 'customer_forgot_password_email', '1'),
(15, 0, 'customer_verification_code_email_tpl_subject_en', 'Signup Verification Code'),
(16, 0, 'customer_verification_code_email_tpl_content_en', 'hi [firstname]\n\nYour signup verification is [code]\n\nRegards\n- [sitename]'),
(17, 0, 'customer_verification_code_email_email', '1'),
(18, 0, 'merchant_verification_code_tpl_subject_en', 'Your Activation Code'),
(19, 0, 'merchant_verification_code_tpl_content_en', 'hi [restaurant_name]\n\nYour activation code is [code]\n\nRegards\n  - [sitename]'),
(20, 0, 'merchant_verification_code_email', '1'),
(21, 0, 'merchant_forgot_password_tpl_subject_en', 'Merchant Forgot Password'),
(22, 0, 'merchant_forgot_password_tpl_content_en', 'hi [restaurant_name]\n\nYour Your verification code is  [code]\n\nRegards\n - [sitename]'),
(23, 0, 'merchant_forgot_password_email', '1'),
(24, 0, 'admin_forgot_password_tpl_subject_en', 'Admin Change Password'),
(25, 0, 'admin_forgot_password_tpl_content_en', 'hi admin\n\nYour password has been reset to : [newpassword]\n\nRegards\n- [sitename]'),
(26, 0, 'admin_forgot_password_email', '1'),
(27, 0, 'merchant_new_signup_tpl_subject_en', 'New Restaurant Signup - [restaurant_name]'),
(28, 0, 'merchant_new_signup_tpl_content_en', 'hi admin\n\nNew restaurant signup \nname : [restaurant_name]\npackage : [package_name]\ntype : [merchant_type]\n\nregard'),
(29, 0, 'merchant_new_signup_sms_content_en', 'New Restaurant Signup name : [restaurant_name]\npackage : [package_name]\ntype : [merchant_type] '),
(30, 0, 'receipt_template_tpl_subject_en', 'Your Receipt for Order ID : [order_id]'),
(31, 0, 'receipt_template_tpl_content_en', 'Dear [customer_name],\n\n\nThank you for shopping at [sitename]. We hope you enjoy your new purchase! Your order number is [order_id]. We have included your order receipt and delivery details below:\n\n[receipt]\n\nKind Regards'),
(32, 0, 'receipt_template_sms_content_en', 'Hi [customer_name] \nWe have receive your order,\nDetails:\nOrder ID : [order_id]\nRestaurant : [restaurant_name]\nTotal Amount : [total_amount]\nOrder Details : \n[order_details]\n\nRegards\n[sitename]\n'),
(33, 0, 'receipt_template_email', '1'),
(34, 0, 'receipt_template_sms', '1'),
(35, 0, 'receipt_send_to_merchant_tpl_subject_en', 'New Order : [order_id] From [customer_name]'),
(36, 0, 'receipt_send_to_merchant_tpl_content_en', 'hi [restaurant_name],\n\nThere is a new order with the reference number [order_id] from customer [customer_name]\n\n[receipt]\n\nAccept Order\n[accept_link]\n\nDecline Order\n[decline_link]\n\nKind Regards'),
(37, 0, 'receipt_send_to_merchant_sms_content_en', 'New Order : [order_id] From [customer_name]\ntotal amout : [total_amount]\ndetails : \n[order_details]\n'),
(38, 0, 'receipt_send_to_merchant_email', '1'),
(39, 0, 'receipt_send_to_admin_email', '1'),
(40, 0, 'receipt_send_to_admin_tpl_subject_en', 'New Order : [order_id] From [customer_name]'),
(41, 0, 'receipt_send_to_admin_tpl_content_en', 'hi admin,\n\nThere is a new order to [restaurant_name]\nwith the reference number [order_id] from customer [customer_name]\n\n[receipt]\n\nAccept Order\n[accept_link]\n\nDecline Order\n[decline_link]\n\nKind Regards'),
(42, 0, 'receipt_send_to_admin_sms_content_en', 'New Order : [order_id] From [customer_name]\ntotal amout : [total_amount]\ndetails : [order_details]'),
(43, 0, 'offline_bank_deposit_tpl_subject_en', 'Bank deposit instructions'),
(44, 0, 'offline_bank_deposit_tpl_content_en', 'Hi [restaurant_name]\n\nDeposit Instructions\n\nPlease deposit [amount] to :\n\nBank : Your bank name\nAccount Number : Your bank account number\nAccount Name : Your bank account name\n\nWhen deposit is completed \nfill in your bank deposit information \n[verify_payment_link]\n\n\nKind Regards\n  -[sitename]'),
(45, 0, 'offline_bank_deposit_signup_merchant_tpl_subject_en', 'Bank deposit instructions'),
(46, 0, 'offline_bank_deposit_signup_merchant_tpl_content_en', 'Hi [restaurant_name]\n\nDeposit Instructions\n\nPlease deposit [amount] to :\n\nBank : Your bank name\nAccount Number : Your bank account number\nAccount Name : Your bank account name\n\nWhen deposit is completed \nfill in your bank deposit information \n[verify_payment_link]\n\n\nKind Regards\n  -[sitename]'),
(47, 0, 'offline_bank_deposit_signup_merchant_email', '1'),
(48, 0, 'offline_bank_deposit_purchase_email', '1'),
(49, 0, 'offline_bank_deposit_purchase_tpl_subject_en', 'Bank deposit instructions for order id : [order_id]'),
(50, 0, 'offline_bank_deposit_purchase_tpl_content_en', 'Hi [customer_name]\n\nDeposit Instructions\n\nPlease deposit [amount] to :\n\nBank : Your bank name\nAccount Number : Your bank account number\nAccount Name : Your bank account name\n\nWhen deposit is completed \nfill in your bank deposit information \n[verify_payment_link]\n\n\nKind Regards\n  -[sitename]'),
(51, 0, 'merchant_near_expiration_email', '1'),
(52, 0, 'merchant_near_expiration_sms', '1'),
(53, 0, 'merchant_near_expiration_tpl_subject_en', 'Your membership about to expired'),
(54, 0, 'merchant_near_expiration_tpl_content_en', 'hi [restaurant_name]\n\n Your membership is about to expire in [expiration_date]\n\nRegards\n - [sitename]'),
(55, 0, 'merchant_near_expiration_sms_content_en', 'hi [restaurant_name]\n Your membership is about to expire in [expiration_date]\nRegards\n - [sitename]'),
(56, 0, 'merchant_near_expiration_day', '5'),
(57, 0, 'merchant_change_status_email', '1'),
(58, 0, 'merchant_change_status_tpl_subject_en', 'Account Status Updated'),
(59, 0, 'merchant_change_status_tpl_content_en', 'hi [restaurant_name]\n\nYour merchant records status has change to [status]\n\nRegards\n - [sitename]'),
(60, 0, 'merchant_change_status_sms_content_en', 'hi [restaurant_name]\n\nYour merchant records status has change to [status]\n\nRegards\n - [sitename]'),
(61, 0, 'customer_booked_email', '1'),
(62, 0, 'customer_booked_tpl_subject_en', 'We have receive your Booking'),
(63, 0, 'customer_booked_tpl_content_en', 'Hi [customer_name]\n\nwe have receive your booking \nfor restaurant [restaurant_name]\nwith the following information\n\nNumber of guest : [number_guest]\nDate of Booking : [date_booking]\nTime : [time]\nEmail address : [email]\nMobile  : [mobile]\nSpecial instruction : [instruction]\n\nYour booking id : [booking_id]\n\nPlease wait for the merchant to accept your booking.\nyou will receive another email for confirmation from the merchant\n\nRegards\n - [sitename]'),
(64, 0, 'booked_notify_admin_email', '1'),
(65, 0, 'booked_notify_admin_tpl_subject_en', 'New booking from [restaurant_name]'),
(66, 0, 'booked_notify_admin_tpl_content_en', 'hi admin\n\nthere is new booking from [restaurant_name]\nwith the following information\n\nBooking ID : [booking_id]\nName : [customer_name]\nNumber of guest : [number_guest]\nDate of Booking : [date_booking]\nTime : [time]\nEmail address : [email]\nMobile  : [mobile]\nSpecial instruction : [instruction]\n'),
(67, 0, 'booked_notify_merchant_tpl_subject_en', 'New booking from [customer_name]'),
(68, 0, 'booked_notify_merchant_tpl_content_en', 'hi [restaurant_name]\n\nthere is new booking from [customer_name]\nwith the following information\n\nBooking ID : [booking_id]\nName : [customer_name]\nNumber of guest : [number_guest]\nDate of Booking : [date_booking]\nTime : [time]\nEmail address : [email]\nMobile  : [mobile]\nSpecial instruction : [instruction]\n\n'),
(69, 0, 'booking_update_status_tpl_subject_en', 'Update with your booking id [booking_id]'),
(70, 0, 'booking_update_status_tpl_content_en', 'Hi [customer_name]\n\nYour booking id [booking_id]\nstatus updated to [status]\n\nmerchant remarks :\n[merchant_remarks]\n\nRegards\n - [sitename]'),
(71, 0, 'merchant_welcome_signup_email', '1'),
(72, 0, 'merchant_welcome_signup_tpl_subject_en', 'Welcome [restaurant_name]'),
(73, 0, 'merchant_welcome_signup_tpl_content_en', 'hi  [restaurant_name]\n\nThank you for joining us!\n\nLogin here\n[login_url]\n\nRegards\n - [sitename]'),
(74, 0, 'order_idle_to_merchant_tpl_subject_en', 'Order ID [order_id] has been IDLE for [idle_time]'),
(75, 0, 'order_idle_to_merchant_tpl_content_en', 'hi [restaurant_name]\n\nKindly take  action on Order ID : [order_Id]\n\nRegards\n- [sitename]'),
(76, 0, 'order_idle_to_merchant_sms_content_en', 'hi [restaurant_name]\n\nKindly take action on Order ID : [order_Id]\n\nRegards\n- [sitename]'),
(77, 0, 'order_idle_to_admin_tpl_subject_en', 'Order ID [order_id] has been IDLE for [idle_time]'),
(78, 0, 'order_idle_to_admin_tpl_content_en', 'hi admin\n\nKindly take action on Order ID : [order_id]\n\nRegards\n- [sitename]'),
(79, 0, 'order_idle_to_admin_sms_content_en', 'hi admin\n\nKindly take action on Order ID : [order_Id]\n\nRegards\n- [sitename]'),
(80, 0, 'merchant_invoice_email', '1'),
(81, 0, 'merchant_invoice_tpl_subject_en', 'Your new Invoice : [invoice_number]'),
(82, 0, 'merchant_invoice_tpl_content_en', 'hi [restaurant_name]\n\nyour invoice is now ready\nInvoice number : [invoice_number]\nTerms : [terms]\nPeriod : [period]\n\nYou can donwload your invoice below\n[invoice_link]\n\nRegards\n - [sitename]'),
(83, 0, 'admin_decimal_place', '2'),
(84, 0, 'installation_done', '1'),
(85, 0, 'paymentgateway', '[\\"cod\\",\\"ocr\\",\\"pyr\\",\\"pyp\\",\\"stp\\",\\"mcd\\",\\"ide\\",\\"payu\\",\\"pys\\",\\"bcy\\",\\"epy\\",\\"atz\\",\\"obd\\",\\"btr\\",\\"rzr\\",\\"vog\\"]'),
(86, 0, 'wd_paypal_minimum', ''),
(87, 0, 'wd_bank_minimum', ''),
(88, 0, 'wd_days_process', ''),
(89, 0, 'wd_paypal', ''),
(90, 0, 'wd_paypal_mode', ''),
(91, 0, 'wd_paypal_mode_user', ''),
(92, 0, 'wd_paypal_mode_pass', ''),
(93, 0, 'wd_paypal_mode_signature', ''),
(94, 0, 'wd_bank_deposit', ''),
(95, 0, 'wd_template_payout', '<p>Hi {merchant-name},</p>\r\n<br/>\r\n<p>We\\''re just letting you know that we got your request to pay out {payout-amount} via {payment-method} to {account}</p>\r\n<br/> \r\n	\r\n<p>\r\nYou can cancel this request any time before {cancel-date} here:<br/>\r\n{cancel-link}\r\n</p>\r\n\r\n<p>\r\nWe will complete this request on the {process-date} (or the next business day), but it can take up to 7 days to appear in your account. A second confirmation email will be sent at this time.\r\n</p>\r\n\r\n<br/>\r\n<p> Kind Regards</p>'),
(96, 0, 'wd_template_process', '<p>Hi {merchant-name},</p>\r\n<br/>\r\n<p>We just processed your request for {payout-amount} via {payment-method}.</p>\r\n<p>Your payment was sent to {acoount}</p>\r\n<br/> \r\n\r\n<p>Happy Spending!</p>\r\n\r\n<br/>\r\n<p> Kind Regards</p>'),
(97, 0, 'wd_enabled_paypal', ''),
(98, 0, 'wd_payout_disabled', ''),
(99, 0, 'wd_payout_notification', '2'),
(100, 0, 'wd_template_payout_subject', 'Your Request for Withdrawal was Received'),
(101, 0, 'wd_template_process_subject', 'Your Request for Withdrawal has been Processed'),
(102, 0, 'wd_bank_fields', 'default'),
(103, 0, 'admin_razor_key_id_sanbox', ''),
(104, 0, 'admin_razor_secret_key_sanbox', ''),
(105, 0, 'admin_razor_key_id_live', ''),
(106, 0, 'admin_razor_secret_key_live', ''),
(107, 0, 'admin_rzr_enabled', '2'),
(108, 0, 'admin_rzr_mode', 'sandbox'),
(109, 0, 'admin_enabled_card', ''),
(110, 0, 'admin_bankdeposit_enabled', 'yes'),
(111, 0, 'admin_deposit_instructions', ''),
(112, 0, 'admin_deposit_sender', ''),
(113, 0, 'admin_deposit_subject', ''),
(114, 0, 'theme_hide_logo', ''),
(115, 0, 'theme_hide_how_works', ''),
(116, 0, 'theme_hide_cuisine', ''),
(117, 0, 'disabled_featured_merchant', ''),
(118, 0, 'disabled_subscription', ''),
(119, 0, 'social_flag', ''),
(120, 0, 'theme_custom_footer', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat.'),
(121, 0, 'theme_show_app', ''),
(122, 0, 'theme_app_android', ''),
(123, 0, 'theme_app_ios', ''),
(124, 0, 'theme_app_windows', ''),
(125, 0, 'theme_filter_colapse', ''),
(126, 0, 'theme_list_style', 'gridview'),
(127, 0, 'enabled_search_map', 'yes'),
(128, 0, 'theme_menu_colapse', ''),
(129, 0, 'theme_top_menu', '[\\"browse\\",\\"resto_signup\\",\\"contact\\",\\"signup\\"]'),
(130, 0, 'show_language', ''),
(131, 0, 'theme_promo_tab', ''),
(132, 0, 'merchant_tbl_book_disabled', ''),
(133, 0, 'theme_hours_tab', ''),
(134, 0, 'theme_reviews_tab', ''),
(135, 0, 'theme_map_tab', ''),
(136, 0, 'theme_info_tab', ''),
(137, 0, 'theme_photos_tab', ''),
(138, 0, 'cookie_law_enabled', ''),
(139, 0, 'cookie_accept_text', ''),
(140, 0, 'cookie_info_text', ''),
(141, 0, 'cookie_msg_text', ''),
(142, 0, 'cookie_info_link', ''),
(143, 0, 'theme_search_merchant_name', ''),
(144, 0, 'theme_search_street_name', ''),
(145, 0, 'theme_search_cuisine', ''),
(146, 0, 'theme_search_foodname', ''),
(147, 0, 'theme_compression', '2'),
(148, 0, 'theme_search_merchant_address', ''),
(149, 0, 'theme_lang_pos', 'bottom'),
(150, 0, 'theme_hide_footer_section1', ''),
(151, 0, 'theme_hide_footer_section2', ''),
(152, 0, 'theme_time_pick', ''),
(153, 0, 'featured_merchant_sort', ''),
(154, 0, 'age_restriction', ''),
(155, 0, 'age_restriction_content', ''),
(156, 0, 'age_restriction_exit_link', ''),
(157, 0, 'browse_page_sort', ''),
(158, 0, 'website_disbaled_auto_cart', ''),
(159, 0, 'website_enabled_mobile_verification', ''),
(160, 0, 'website_date_picker_format', 'yy-mm-dd'),
(161, 0, 'website_time_picker_format', '12'),
(162, 0, 'website_date_format', ''),
(163, 0, 'website_time_format', ''),
(164, 0, 'merchant_sigup_status', 'pending'),
(165, 0, 'merchant_email_verification', ''),
(166, 0, 'merchant_payment_enabled', ''),
(167, 0, 'admin_enabled_paypal', ''),
(168, 0, 'admin_currency_set', 'INR'),
(169, 0, 'home_search_text', 'nagpur'),
(170, 0, 'home_search_subtext', ''),
(171, 0, 'home_search_mode', 'address'),
(172, 0, 'website_logo', '1557256273_rabzo2.png'),
(173, 0, 'admin_use_separators', 'yes'),
(174, 0, 'google_auto_address', ''),
(175, 0, 'home_search_radius', '10'),
(176, 0, 'home_search_unit_type', 'km'),
(177, 0, 'google_default_country', 'yes'),
(178, 0, 'enabled_advance_search', 'yes'),
(179, 0, 'disabled_share_location', ''),
(180, 0, 'admin_currency_position', 'left'),
(181, 0, 'merchant_default_country', 'IN'),
(182, 0, 'merchant_specific_country', ''),
(183, 0, 'map_marker', ''),
(184, 0, 'global_admin_sender_email', 'kumbhare.ashwin@gmail.com'),
(185, 0, 'merchant_disabled_registration', ''),
(186, 0, 'merchant_days_can_edit_status', ''),
(187, 0, 'disabled_website_ordering', ''),
(188, 0, 'admin_activated_menu', ''),
(189, 0, 'website_hide_foodprice', ''),
(190, 0, 'disabled_cc_management', ''),
(191, 0, 'merchant_reg_abn', ''),
(192, 0, 'spicydish', ''),
(193, 0, 'website_timezone', 'Asia/Kolkata'),
(194, 0, 'website_admin_mutiple_login', ''),
(195, 0, 'website_merchant_mutiple_login', ''),
(196, 0, 'website_disabled_guest_checkout', ''),
(197, 0, 'website_reviews_actual_purchase', 'yes'),
(198, 0, 'website_terms_merchant', ''),
(199, 0, 'website_terms_merchant_url', ''),
(200, 0, 'website_terms_customer', ''),
(201, 0, 'website_terms_customer_url', ''),
(202, 0, 'admin_thousand_separator', ','),
(203, 0, 'admin_decimal_separator', '.'),
(204, 0, 'website_disabled_login_popup', ''),
(205, 0, 'merchant_can_edit_reviews', 'yes'),
(206, 0, 'website_enabled_rcpt', ''),
(207, 0, 'website_receipt_logo', ''),
(208, 0, 'disabled_cart_sticky', ''),
(209, 0, 'search_result_bydistance', '2'),
(210, 0, 'google_geo_api_key', 'AIzaSyB7Q0UsuofIIjwBQfw5Wni9GTcIoh7UPv4'),
(211, 0, 'website_enabled_map_address', ''),
(212, 0, 'client_custom_field_name1', ''),
(213, 0, 'client_custom_field_name2', ''),
(214, 0, 'merchant_days_can_edit_status_basedon', '1'),
(215, 0, 'merchant_status_disabled', ''),
(216, 0, 'view_map_disabled', ''),
(217, 0, 'view_map_default_zoom', ''),
(218, 0, 'view_map_default_zoom_s', ''),
(219, 0, 'receipt_default_subject', ''),
(220, 0, 'merchant_changeorder_sms', ''),
(221, 0, 'customer_ask_address', ''),
(222, 0, 'captcha_site_key', ''),
(223, 0, 'captcha_secret', ''),
(224, 0, 'captcha_lang', ''),
(225, 0, 'captcha_customer_signup', ''),
(226, 0, 'captcha_merchant_signup', ''),
(227, 0, 'captcha_customer_login', ''),
(228, 0, 'captcha_merchant_login', ''),
(229, 0, 'captcha_admin_login', ''),
(230, 0, 'captcha_order', ''),
(231, 0, 'blocked_email_add', ''),
(232, 0, 'blocked_mobile', ''),
(233, 0, 'admin_zipcode_searchtype', '1'),
(234, 0, 'mobilelogo', '1544447242-rabzo_log_WEB.png'),
(235, 0, 'theme_enabled_email_verification', ''),
(236, 0, 'google_distance_method', 'straight_line'),
(237, 0, 'google_use_curl', ''),
(238, 0, 'admin_menu_allowed_merchant', '2'),
(239, 0, 'admin_printing_receipt_width', ''),
(240, 0, 'admin_printing_receipt_size', ''),
(241, 0, 'enabled_merchant_check_closing_time', '1'),
(242, 0, 'admin_add_space_between_price', '1'),
(243, 0, 'enabled_food_search_menu', ''),
(244, 0, 'location_default_country', '1'),
(245, 0, 'cod_change_required', '2'),
(246, 0, 'website_disabled_cart_validation', '1'),
(247, 3, 'merchant_switch_master_cod', '1'),
(248, 3, 'merchant_switch_master_ccr', ''),
(249, 3, 'merchant_switch_master_pyr', ''),
(250, 3, 'merchant_latitude', '21.1850462'),
(251, 3, 'merchant_longtitude', '79.0701547'),
(252, 3, 'merchant_master_table_boooking', '1'),
(253, 3, 'merchant_switch_master_ocr', ''),
(254, 3, 'merchant_switch_master_pyp', ''),
(255, 3, 'merchant_switch_master_stp', ''),
(256, 3, 'merchant_switch_master_mcd', ''),
(257, 3, 'merchant_switch_master_ide', ''),
(258, 3, 'merchant_switch_master_payu', ''),
(259, 3, 'merchant_switch_master_pys', ''),
(260, 3, 'merchant_switch_master_bcy', ''),
(261, 3, 'merchant_switch_master_epy', ''),
(262, 3, 'merchant_switch_master_atz', ''),
(263, 3, 'merchant_switch_master_obd', ''),
(264, 3, 'merchant_switch_master_btr', ''),
(265, 3, 'merchant_switch_master_rzr', '1'),
(266, 3, 'merchant_switch_master_vog', ''),
(267, 3, 'merchant_minimum_order', '300'),
(268, 3, 'merchant_tax', ''),
(269, 3, 'merchant_delivery_charges', '20'),
(270, 3, 'stores_open_day', '[\\"monday\\",\\"tuesday\\",\\"wednesday\\",\\"thursday\\",\\"friday\\",\\"saturday\\",\\"sunday\\"]'),
(271, 3, 'stores_open_starts', '{\\"monday\\":\\"8:00\\",\\"tuesday\\":\\"8:00\\",\\"wednesday\\":\\"8:00\\",\\"thursday\\":\\"8:00\\",\\"friday\\":\\"8:00\\",\\"saturday\\":\\"8:00\\",\\"sunday\\":\\"8:00\\"}'),
(272, 3, 'stores_open_ends', '{\\"monday\\":\\"16:00\\",\\"tuesday\\":\\"16:00\\",\\"wednesday\\":\\"16:00\\",\\"thursday\\":\\"16:00\\",\\"friday\\":\\"16:00\\",\\"saturday\\":\\"16:00\\",\\"sunday\\":\\"16:00\\"}'),
(273, 3, 'stores_open_custom_text', '{\\"monday\\":\\"\\",\\"tuesday\\":\\"\\",\\"wednesday\\":\\"\\",\\"thursday\\":\\"\\",\\"friday\\":\\"\\",\\"saturday\\":\\"\\",\\"sunday\\":\\"\\"}'),
(274, 3, 'merchant_photo', '1544087049-logo1.png'),
(275, 3, 'merchant_delivery_estimation', '60 min'),
(276, 3, 'merchant_delivery_miles', '10'),
(277, 3, 'merchant_photo_bg', '1544087059-Hyderabadi-Dum-Biryani-1.jpg'),
(278, 3, 'merchant_disabled_cod', ''),
(279, 3, 'merchant_disabled_ccr', ''),
(280, 3, 'merchant_extenal', ''),
(281, 3, 'merchant_enabled_voucher', ''),
(282, 3, 'merchant_distance_type', 'km'),
(283, 3, 'merchant_timezone', 'Asia/Kolkata'),
(284, 3, 'merchant_close_msg', ''),
(285, 3, 'merchant_preorder', ''),
(286, 3, 'merchant_maximum_order', ''),
(287, 3, 'merchant_packaging_charge', '10'),
(288, 3, 'merchant_close_msg_holiday', ''),
(289, 3, 'merchant_holiday', '[\\"\\"]'),
(290, 3, 'merchant_activated_menu', '3'),
(291, 3, 'spicydish', ''),
(292, 3, 'merchant_required_delivery_time', ''),
(293, 3, 'merchant_close_store', ''),
(294, 3, 'merchant_packaging_increment', '2'),
(295, 3, 'merchant_show_time', 'yes'),
(296, 3, 'merchant_enabled_tip', '2'),
(297, 3, 'merchant_tip_default', ''),
(298, 3, 'merchant_minimum_order_pickup', ''),
(299, 3, 'merchant_maximum_order_pickup', ''),
(300, 3, 'merchant_disabled_ordering', ''),
(301, 3, 'merchant_tax_charges', ''),
(302, 3, 'stores_open_pm_start', '{\\"monday\\":\\"4:00 PM\\",\\"tuesday\\":\\"4:00 PM\\",\\"wednesday\\":\\"4:00 PM\\",\\"thursday\\":\\"4:00 PM\\",\\"friday\\":\\"4:00 PM\\",\\"saturday\\":\\"4:00 PM\\",\\"sunday\\":\\"4:00 PM\\"}'),
(303, 3, 'stores_open_pm_ends', '{\\"monday\\":\\"10:00 PM\\",\\"tuesday\\":\\"10:00 PM\\",\\"wednesday\\":\\"10:00 PM\\",\\"thursday\\":\\"10:00 PM\\",\\"friday\\":\\"10:00 PM\\",\\"saturday\\":\\"12:00 AM\\",\\"sunday\\":\\"12:00 AM\\"}'),
(304, 3, 'food_option_not_available', ''),
(305, 3, 'order_verification', ''),
(306, 3, 'order_sms_code_waiting', ''),
(307, 3, 'disabled_food_gallery', ''),
(308, 3, 'merchant_apply_tax', ''),
(309, 3, 'printing_receipt_width', ''),
(310, 3, 'printing_receipt_size', ''),
(311, 3, 'free_delivery_above_price', '300'),
(312, 3, 'merchant_minimum_order_dinein', ''),
(313, 3, 'merchant_maximum_order_dinein', ''),
(314, 3, 'food_viewing_private', ''),
(315, 3, 'merchant_tax_number', ''),
(316, 3, 'merchant_gallery', '[\\"1544090341-Hyderabadi-Dum-Biryani-1.jpg\\",\\"1544090342-shutterstock_277542194.jpg\\"]'),
(317, 3, 'gallery_disabled', ''),
(318, 3, 'payment_provider', '[\\"1\\"]'),
(319, 3, 'merchant_payondeliver_enabled', 'yes'),
(320, 4, 'merchant_switch_master_cod', ''),
(321, 4, 'merchant_switch_master_ccr', ''),
(322, 4, 'merchant_switch_master_pyr', ''),
(323, 4, 'merchant_latitude', '21.118123'),
(324, 4, 'merchant_longtitude', '79.056797'),
(325, 4, 'merchant_master_table_boooking', '1'),
(326, 4, 'merchant_switch_master_ocr', ''),
(327, 4, 'merchant_switch_master_pyp', ''),
(328, 4, 'merchant_switch_master_stp', ''),
(329, 4, 'merchant_switch_master_mcd', ''),
(330, 4, 'merchant_switch_master_ide', ''),
(331, 4, 'merchant_switch_master_payu', ''),
(332, 4, 'merchant_switch_master_pys', ''),
(333, 4, 'merchant_switch_master_bcy', ''),
(334, 4, 'merchant_switch_master_epy', ''),
(335, 4, 'merchant_switch_master_atz', ''),
(336, 4, 'merchant_switch_master_obd', ''),
(337, 4, 'merchant_switch_master_btr', ''),
(338, 4, 'merchant_switch_master_rzr', ''),
(339, 4, 'merchant_switch_master_vog', ''),
(340, 4, 'merchant_minimum_order', '80'),
(341, 4, 'merchant_tax', ''),
(342, 4, 'merchant_delivery_charges', ''),
(343, 4, 'stores_open_day', ''),
(344, 4, 'stores_open_starts', '{\\"monday\\":\\"18:00\\",\\"tuesday\\":\\"18:00\\",\\"wednesday\\":\\"18:00\\",\\"thursday\\":\\"18:00\\",\\"friday\\":\\"18:00\\",\\"saturday\\":\\"18:00\\",\\"sunday\\":\\"18:00\\"}'),
(345, 4, 'stores_open_ends', '{\\"monday\\":\\"22:30\\",\\"tuesday\\":\\"22:30\\",\\"wednesday\\":\\"22:30\\",\\"thursday\\":\\"22:30\\",\\"friday\\":\\"22:30\\",\\"saturday\\":\\"22:30\\",\\"sunday\\":\\"22:30\\"}'),
(346, 4, 'stores_open_custom_text', '{\\"monday\\":\\"all day\\",\\"tuesday\\":\\"\\",\\"wednesday\\":\\"\\",\\"thursday\\":\\"\\",\\"friday\\":\\"\\",\\"saturday\\":\\"\\",\\"sunday\\":\\"\\"}'),
(348, 4, 'merchant_delivery_estimation', ''),
(349, 4, 'merchant_delivery_miles', ''),
(350, 4, 'merchant_photo_bg', '1544170219-varhadi-vyanjan-pratap-nagar-nagpur-restaurants-mq9mpl.jpg'),
(351, 4, 'merchant_disabled_cod', ''),
(352, 4, 'merchant_disabled_ccr', ''),
(353, 4, 'merchant_extenal', ''),
(354, 4, 'merchant_enabled_voucher', ''),
(355, 4, 'merchant_distance_type', 'mi'),
(356, 4, 'merchant_timezone', ''),
(357, 4, 'merchant_close_msg', ''),
(358, 4, 'merchant_preorder', ''),
(359, 4, 'merchant_maximum_order', ''),
(360, 4, 'merchant_packaging_charge', ''),
(361, 4, 'merchant_close_msg_holiday', ''),
(362, 4, 'merchant_holiday', '[\\"\\"]'),
(363, 4, 'merchant_activated_menu', ''),
(364, 4, 'spicydish', ''),
(365, 4, 'merchant_required_delivery_time', ''),
(366, 4, 'merchant_close_store', ''),
(367, 4, 'merchant_packaging_increment', ''),
(368, 4, 'merchant_show_time', ''),
(369, 4, 'merchant_enabled_tip', ''),
(370, 4, 'merchant_tip_default', ''),
(371, 4, 'merchant_minimum_order_pickup', ''),
(372, 4, 'merchant_maximum_order_pickup', ''),
(373, 4, 'merchant_disabled_ordering', ''),
(374, 4, 'merchant_tax_charges', ''),
(375, 4, 'stores_open_pm_start', '{\\"monday\\":\\"6:00 PM\\",\\"tuesday\\":\\"6:00 PM\\",\\"wednesday\\":\\"6:00 PM\\",\\"thursday\\":\\"6:00 PM\\",\\"friday\\":\\"6:00 PM\\",\\"saturday\\":\\"6:00 PM\\",\\"sunday\\":\\"6:00 PM\\"}'),
(376, 4, 'stores_open_pm_ends', '{\\"monday\\":\\"10:30 PM\\",\\"tuesday\\":\\"10:30 PM\\",\\"wednesday\\":\\"10:30 PM\\",\\"thursday\\":\\"10:30 PM\\",\\"friday\\":\\"10:30 PM\\",\\"saturday\\":\\"10:30 PM\\",\\"sunday\\":\\"10:30 PM\\"}'),
(377, 4, 'food_option_not_available', ''),
(378, 4, 'order_verification', ''),
(379, 4, 'order_sms_code_waiting', ''),
(380, 4, 'disabled_food_gallery', ''),
(381, 4, 'merchant_apply_tax', ''),
(382, 4, 'printing_receipt_width', ''),
(383, 4, 'printing_receipt_size', ''),
(384, 4, 'free_delivery_above_price', ''),
(385, 4, 'merchant_minimum_order_dinein', ''),
(386, 4, 'merchant_maximum_order_dinein', ''),
(387, 4, 'food_viewing_private', ''),
(388, 4, 'merchant_tax_number', ''),
(389, 4, 'merchant_gallery', '[\\"1544172513-477292-1-eng-GB_lamb-kofta-curry-470x540.jpg\\",\\"1544172520-1499895456-greek-salad-delish.jpg\\",\\"1544172525-baingan.jpg\\",\\"1544172530-bhendimasala.jpg\\",\\"1544172536-kadaipaneer.jpg\\",\\"1544172543-punjabi-egg-curry-anda-curry.jpg\\",\\"1544172549-mix-veg.jpg\\",\\"1544172559-mutter-paneer.jpg\\",\\"1544172574-masala-rice.png\\"]'),
(390, 4, 'gallery_disabled', ''),
(391, 4, 'merchant_information', '<p tabindex=\\"0\\" aria-label=\\"No Alcohol Available\\" class=\\"res-info-feature clearfix mb5\\" style=\\"box-sizing: inherit; outline: 0px; margin-bottom: 5px; color: rgb(51, 55, 61); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\\"><p class=\\"res-info-feature-text\\" style=\\"box-sizing: inherit; line-height: 12px !important;\\">No Alcohol Available</p></p><p tabindex=\\"0\\" aria-label=\\"Table Reservation Not Required\\" class=\\"res-info-feature clearfix mb5\\" style=\\"box-sizing: inherit; outline: 0px; margin-bottom: 5px; color: rgb(51, 55, 61); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\\"><p class=\\"res-info-feature-text\\" style=\\"box-sizing: inherit; line-height: 12px !important;\\">Table Reservation Not Required</p></p><p tabindex=\\"0\\" aria-label=\\"Table booking recommended\\" class=\\"res-info-feature clearfix mb5\\" style=\\"box-sizing: inherit; outline: 0px; margin-bottom: 5px; color: rgb(51, 55, 61); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\\"><p class=\\"res-info-feature-text\\" style=\\"box-sizing: inherit; line-height: 12px !important;\\">Table booking recommended</p></p><p tabindex=\\"0\\" aria-label=\\"Outdoor Seating\\" class=\\"res-info-feature clearfix mb5\\" style=\\"box-sizing: inherit; outline: 0px; margin-bottom: 5px; color: rgb(51, 55, 61); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\\"><p class=\\"res-info-feature-text\\" style=\\"box-sizing: inherit; line-height: 12px !important;\\">Outdoor Seating</p></p><p tabindex=\\"0\\" aria-label=\\"Table reservation required\\" class=\\"res-info-feature clearfix mb5\\" style=\\"box-sizing: inherit; outline: 0px; margin-bottom: 5px; color: rgb(51, 55, 61); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\\"><p class=\\"res-info-feature-text\\" style=\\"box-sizing: inherit; line-height: 12px !important;\\">Table reservation required</p></p>'),
(392, 5, 'merchant_switch_master_cod', ''),
(393, 5, 'merchant_switch_master_ccr', ''),
(394, 5, 'merchant_switch_master_pyr', ''),
(395, 5, 'merchant_latitude', '21.112513'),
(396, 5, 'merchant_longtitude', '79.040049'),
(397, 5, 'merchant_master_table_boooking', '1'),
(398, 5, 'merchant_switch_master_ocr', ''),
(399, 5, 'merchant_switch_master_pyp', ''),
(400, 5, 'merchant_switch_master_stp', ''),
(401, 5, 'merchant_switch_master_mcd', ''),
(402, 5, 'merchant_switch_master_ide', ''),
(403, 5, 'merchant_switch_master_payu', ''),
(404, 5, 'merchant_switch_master_pys', ''),
(405, 5, 'merchant_switch_master_bcy', ''),
(406, 5, 'merchant_switch_master_epy', ''),
(407, 5, 'merchant_switch_master_atz', ''),
(408, 5, 'merchant_switch_master_obd', ''),
(409, 5, 'merchant_switch_master_btr', ''),
(410, 5, 'merchant_switch_master_rzr', ''),
(411, 5, 'merchant_switch_master_vog', ''),
(412, 5, 'merchant_information', '<p tabindex=\\"0\\" aria-label=\\"Table reservation required\\" class=\\"res-info-feature clearfix mb5\\" style=\\"box-sizing: inherit; outline: 0px; margin-bottom: 5px; color: rgb(51, 55, 61); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\\"><p class=\\"res-info-feature-text\\" style=\\"box-sizing: inherit; line-height: 12px !important;\\">Table reservation required</p></p><p tabindex=\\"0\\" aria-label=\\"Free Parking\\" class=\\"res-info-feature clearfix mb5\\" style=\\"box-sizing: inherit; outline: 0px; margin-bottom: 5px; color: rgb(51, 55, 61); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\\"><p class=\\"res-info-feature-text\\" style=\\"box-sizing: inherit; line-height: 12px !important;\\">Free Parking</p></p><p tabindex=\\"0\\" aria-label=\\"Table Reservation Not Required\\" class=\\"res-info-feature clearfix mb5\\" style=\\"box-sizing: inherit; outline: 0px; margin-bottom: 5px; color: rgb(51, 55, 61); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\\"><p class=\\"res-info-feature-text\\" style=\\"box-sizing: inherit; line-height: 12px !important;\\">Table Reservation Not Required</p></p><p tabindex=\\"0\\" aria-label=\\"Table booking recommended\\" class=\\"res-info-feature clearfix mb5\\" style=\\"box-sizing: inherit; outline: 0px; margin-bottom: 5px; color: rgb(51, 55, 61); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\\"><p class=\\"res-info-feature-text\\" style=\\"box-sizing: inherit; line-height: 12px !important;\\">Table booking recommended</p></p>'),
(413, 5, 'merchant_minimum_order', '100'),
(414, 5, 'merchant_tax', ''),
(415, 5, 'merchant_delivery_charges', ''),
(416, 5, 'stores_open_day', '[\\"monday\\",\\"tuesday\\",\\"wednesday\\",\\"thursday\\",\\"friday\\",\\"saturday\\",\\"sunday\\"]'),
(417, 5, 'stores_open_starts', '{\\"monday\\":\\"12:00\\",\\"tuesday\\":\\"12:00\\",\\"wednesday\\":\\"12:00\\",\\"thursday\\":\\"12:00\\",\\"friday\\":\\"12:00\\",\\"saturday\\":\\"12:00\\",\\"sunday\\":\\"12:00\\"}'),
(418, 5, 'stores_open_ends', '{\\"monday\\":\\"23:55\\",\\"tuesday\\":\\"23:55\\",\\"wednesday\\":\\"23:55\\",\\"thursday\\":\\"23:55\\",\\"friday\\":\\"23:55\\",\\"saturday\\":\\"23:55\\",\\"sunday\\":\\"23:55\\"}'),
(419, 5, 'stores_open_custom_text', '{\\"monday\\":\\"\\",\\"tuesday\\":\\"\\",\\"wednesday\\":\\"\\",\\"thursday\\":\\"\\",\\"friday\\":\\"\\",\\"saturday\\":\\"\\",\\"sunday\\":\\"\\"}'),
(421, 5, 'merchant_delivery_estimation', '30'),
(422, 5, 'merchant_delivery_miles', '25'),
(423, 5, 'merchant_photo_bg', '1544175644-shankar-saoji-bhojanalay-trimurti-nagar-nagpur-restaurants-1shw0ek.jpg'),
(424, 5, 'merchant_disabled_cod', ''),
(425, 5, 'merchant_disabled_ccr', ''),
(426, 5, 'merchant_extenal', ''),
(427, 5, 'merchant_enabled_voucher', ''),
(428, 5, 'merchant_distance_type', 'km'),
(429, 5, 'merchant_timezone', 'Asia/Kolkata'),
(430, 5, 'merchant_close_msg', ''),
(431, 5, 'merchant_preorder', ''),
(432, 5, 'merchant_maximum_order', ''),
(433, 5, 'merchant_packaging_charge', ''),
(434, 5, 'merchant_close_msg_holiday', ''),
(435, 5, 'merchant_holiday', '[\\"\\"]'),
(436, 5, 'merchant_activated_menu', '3'),
(437, 5, 'spicydish', ''),
(438, 5, 'merchant_required_delivery_time', 'yes'),
(439, 5, 'merchant_close_store', ''),
(440, 5, 'merchant_packaging_increment', ''),
(441, 5, 'merchant_show_time', ''),
(442, 5, 'merchant_enabled_tip', ''),
(443, 5, 'merchant_tip_default', ''),
(444, 5, 'merchant_minimum_order_pickup', ''),
(445, 5, 'merchant_maximum_order_pickup', ''),
(446, 5, 'merchant_disabled_ordering', ''),
(447, 5, 'merchant_tax_charges', ''),
(448, 5, 'stores_open_pm_start', '{\\"monday\\":\\"\\",\\"tuesday\\":\\"\\",\\"wednesday\\":\\"\\",\\"thursday\\":\\"\\",\\"friday\\":\\"\\",\\"saturday\\":\\"\\",\\"sunday\\":\\"\\"}'),
(449, 5, 'stores_open_pm_ends', '{\\"monday\\":\\"\\",\\"tuesday\\":\\"\\",\\"wednesday\\":\\"\\",\\"thursday\\":\\"\\",\\"friday\\":\\"\\",\\"saturday\\":\\"\\",\\"sunday\\":\\"\\"}'),
(450, 5, 'food_option_not_available', ''),
(451, 5, 'order_verification', '2'),
(452, 5, 'order_sms_code_waiting', ''),
(453, 5, 'disabled_food_gallery', ''),
(454, 5, 'merchant_apply_tax', ''),
(455, 5, 'printing_receipt_width', ''),
(456, 5, 'printing_receipt_size', ''),
(457, 5, 'free_delivery_above_price', ''),
(458, 5, 'merchant_minimum_order_dinein', '100'),
(459, 5, 'merchant_maximum_order_dinein', '100'),
(460, 5, 'food_viewing_private', ''),
(461, 5, 'merchant_tax_number', ''),
(462, 5, 'merchant_gallery', '[\\"1544176132-shankar-saoji-bhojanalay-trimurti-nagar-nagpur-restaurants-1shw0ek.jpg\\",\\"1544176146-shankar-saoji-bhojanalay-trimurti-nagar-nagpur-restaurants-31xiw9s.jpg\\",\\"1544176323-4QNlZ.jpg\\",\\"1544176327-929b5413ee195892da67bdaf154510fa_1530076699.jpg\\",\\"1544176330-41330a24a3d68b7fa5b0bd3d0a0bbe09_1522869249.jpg\\",\\"1544176338-download.jpg\\",\\"1544176344-DYXrH.jpg\\",\\"1544176348-images-(1).jpg\\",\\"1544176353-shankar-saoji-bhojnalay-wadi-nagpur-restaurants-56g0a5mhsm.jpg\\",\\"1544176359-shankar-saoji-bhojnalay-wadi-nagpur-restaurants-kms7h3k0wb.jpg\\",\\"1544176365-YJtfE.jpg\\",\\"1544176373-shankar-saoji-bhojnalay-wadi-nagpur-restaurants-kms7h3k0wb.jpg\\",\\"1544176388-YJtfE.jpg\\"]'),
(463, 5, 'gallery_disabled', ''),
(464, 6, 'merchant_switch_master_cod', '1'),
(465, 6, 'merchant_switch_master_ccr', ''),
(466, 6, 'merchant_switch_master_pyr', ''),
(467, 6, 'merchant_latitude', ''),
(468, 6, 'merchant_longtitude', ''),
(469, 6, 'merchant_master_table_boooking', '1'),
(470, 6, 'merchant_switch_master_ocr', ''),
(471, 6, 'merchant_switch_master_pyp', ''),
(472, 6, 'merchant_switch_master_stp', ''),
(473, 6, 'merchant_switch_master_mcd', ''),
(474, 6, 'merchant_switch_master_ide', ''),
(475, 6, 'merchant_switch_master_payu', ''),
(476, 6, 'merchant_switch_master_pys', ''),
(477, 6, 'merchant_switch_master_bcy', ''),
(478, 6, 'merchant_switch_master_epy', ''),
(479, 6, 'merchant_switch_master_atz', ''),
(480, 6, 'merchant_switch_master_obd', ''),
(481, 6, 'merchant_switch_master_btr', ''),
(482, 6, 'merchant_switch_master_rzr', ''),
(483, 6, 'merchant_switch_master_vog', ''),
(484, 6, 'merchant_minimum_order', ''),
(485, 6, 'merchant_tax', ''),
(486, 6, 'merchant_delivery_charges', ''),
(487, 6, 'stores_open_day', ''),
(488, 6, 'stores_open_starts', '{\\"monday\\":false,\\"tuesday\\":false,\\"wednesday\\":false,\\"thursday\\":false,\\"friday\\":false,\\"saturday\\":false,\\"sunday\\":false}'),
(489, 6, 'stores_open_ends', '{\\"monday\\":false,\\"tuesday\\":false,\\"wednesday\\":false,\\"thursday\\":false,\\"friday\\":false,\\"saturday\\":false,\\"sunday\\":false}'),
(490, 6, 'stores_open_custom_text', '{\\"monday\\":\\"\\",\\"tuesday\\":\\"\\",\\"wednesday\\":\\"\\",\\"thursday\\":\\"\\",\\"friday\\":\\"\\",\\"saturday\\":\\"\\",\\"sunday\\":\\"\\"}'),
(491, 6, 'merchant_photo', '1544268357-download.jpg'),
(492, 6, 'merchant_delivery_estimation', ''),
(493, 6, 'merchant_delivery_miles', ''),
(494, 6, 'merchant_photo_bg', ''),
(495, 6, 'merchant_disabled_cod', ''),
(496, 6, 'merchant_disabled_ccr', ''),
(497, 6, 'merchant_extenal', ''),
(498, 6, 'merchant_enabled_voucher', ''),
(499, 6, 'merchant_distance_type', 'mi'),
(500, 6, 'merchant_timezone', ''),
(501, 6, 'merchant_close_msg', ''),
(502, 6, 'merchant_preorder', ''),
(503, 6, 'merchant_maximum_order', ''),
(504, 6, 'merchant_packaging_charge', ''),
(505, 6, 'merchant_close_msg_holiday', ''),
(506, 6, 'merchant_holiday', '[\\"\\"]'),
(507, 6, 'merchant_activated_menu', ''),
(508, 6, 'spicydish', ''),
(509, 6, 'merchant_required_delivery_time', ''),
(510, 6, 'merchant_close_store', ''),
(511, 6, 'merchant_packaging_increment', ''),
(512, 6, 'merchant_show_time', ''),
(513, 6, 'merchant_enabled_tip', ''),
(514, 6, 'merchant_tip_default', ''),
(515, 6, 'merchant_minimum_order_pickup', ''),
(516, 6, 'merchant_maximum_order_pickup', ''),
(517, 6, 'merchant_disabled_ordering', ''),
(518, 6, 'merchant_tax_charges', ''),
(519, 6, 'stores_open_pm_start', '{\\"monday\\":\\"\\",\\"tuesday\\":\\"\\",\\"wednesday\\":\\"\\",\\"thursday\\":\\"\\",\\"friday\\":\\"\\",\\"saturday\\":\\"\\",\\"sunday\\":\\"\\"}'),
(520, 6, 'stores_open_pm_ends', '{\\"monday\\":\\"\\",\\"tuesday\\":\\"\\",\\"wednesday\\":\\"\\",\\"thursday\\":\\"\\",\\"friday\\":\\"\\",\\"saturday\\":\\"\\",\\"sunday\\":\\"\\"}'),
(521, 6, 'food_option_not_available', ''),
(522, 6, 'order_verification', ''),
(523, 6, 'order_sms_code_waiting', ''),
(524, 6, 'disabled_food_gallery', ''),
(525, 6, 'merchant_apply_tax', ''),
(526, 6, 'printing_receipt_width', ''),
(527, 6, 'printing_receipt_size', ''),
(528, 6, 'free_delivery_above_price', ''),
(529, 6, 'merchant_minimum_order_dinein', ''),
(530, 6, 'merchant_maximum_order_dinein', ''),
(531, 6, 'food_viewing_private', ''),
(532, 6, 'merchant_tax_number', ''),
(533, 7, 'merchant_switch_master_cod', '1'),
(534, 7, 'merchant_switch_master_ccr', ''),
(535, 7, 'merchant_switch_master_pyr', ''),
(536, 7, 'merchant_latitude', ''),
(537, 7, 'merchant_longtitude', ''),
(538, 7, 'merchant_master_table_boooking', '1'),
(539, 7, 'merchant_switch_master_ocr', ''),
(540, 7, 'merchant_switch_master_pyp', ''),
(541, 7, 'merchant_switch_master_stp', ''),
(542, 7, 'merchant_switch_master_mcd', ''),
(543, 7, 'merchant_switch_master_ide', ''),
(544, 7, 'merchant_switch_master_payu', ''),
(545, 7, 'merchant_switch_master_pys', ''),
(546, 7, 'merchant_switch_master_bcy', ''),
(547, 7, 'merchant_switch_master_epy', ''),
(548, 7, 'merchant_switch_master_atz', ''),
(549, 7, 'merchant_switch_master_obd', ''),
(550, 7, 'merchant_switch_master_btr', ''),
(551, 7, 'merchant_switch_master_rzr', ''),
(552, 7, 'merchant_switch_master_vog', ''),
(553, 7, 'merchant_minimum_order', ''),
(554, 7, 'merchant_tax', ''),
(555, 7, 'merchant_delivery_charges', ''),
(556, 7, 'stores_open_day', ''),
(557, 7, 'stores_open_starts', '{\\"monday\\":false,\\"tuesday\\":false,\\"wednesday\\":false,\\"thursday\\":false,\\"friday\\":false,\\"saturday\\":false,\\"sunday\\":false}'),
(558, 7, 'stores_open_ends', '{\\"monday\\":false,\\"tuesday\\":false,\\"wednesday\\":false,\\"thursday\\":false,\\"friday\\":false,\\"saturday\\":false,\\"sunday\\":false}'),
(559, 7, 'stores_open_custom_text', '{\\"monday\\":\\"\\",\\"tuesday\\":\\"\\",\\"wednesday\\":\\"\\",\\"thursday\\":\\"\\",\\"friday\\":\\"\\",\\"saturday\\":\\"\\",\\"sunday\\":\\"\\"}'),
(560, 7, 'merchant_photo', '1544271456-veeraswamy-nagpur-dosa.jpg'),
(561, 7, 'merchant_delivery_estimation', ''),
(562, 7, 'merchant_delivery_miles', ''),
(563, 7, 'merchant_photo_bg', ''),
(564, 7, 'merchant_disabled_cod', ''),
(565, 7, 'merchant_disabled_ccr', ''),
(566, 7, 'merchant_extenal', ''),
(567, 7, 'merchant_enabled_voucher', ''),
(568, 7, 'merchant_distance_type', 'mi'),
(569, 7, 'merchant_timezone', ''),
(570, 7, 'merchant_close_msg', ''),
(571, 7, 'merchant_preorder', ''),
(572, 7, 'merchant_maximum_order', ''),
(573, 7, 'merchant_packaging_charge', ''),
(574, 7, 'merchant_close_msg_holiday', ''),
(575, 7, 'merchant_holiday', '[\\"\\"]'),
(576, 7, 'merchant_activated_menu', ''),
(577, 7, 'spicydish', ''),
(578, 7, 'merchant_required_delivery_time', ''),
(579, 7, 'merchant_close_store', ''),
(580, 7, 'merchant_packaging_increment', ''),
(581, 7, 'merchant_show_time', ''),
(582, 7, 'merchant_enabled_tip', ''),
(583, 7, 'merchant_tip_default', ''),
(584, 7, 'merchant_minimum_order_pickup', ''),
(585, 7, 'merchant_maximum_order_pickup', ''),
(586, 7, 'merchant_disabled_ordering', ''),
(587, 7, 'merchant_tax_charges', ''),
(588, 7, 'stores_open_pm_start', '{\\"monday\\":\\"\\",\\"tuesday\\":\\"\\",\\"wednesday\\":\\"\\",\\"thursday\\":\\"\\",\\"friday\\":\\"\\",\\"saturday\\":\\"\\",\\"sunday\\":\\"\\"}'),
(589, 7, 'stores_open_pm_ends', '{\\"monday\\":\\"\\",\\"tuesday\\":\\"\\",\\"wednesday\\":\\"\\",\\"thursday\\":\\"\\",\\"friday\\":\\"\\",\\"saturday\\":\\"\\",\\"sunday\\":\\"\\"}'),
(590, 7, 'food_option_not_available', ''),
(591, 7, 'order_verification', ''),
(592, 7, 'order_sms_code_waiting', ''),
(593, 7, 'disabled_food_gallery', ''),
(594, 7, 'merchant_apply_tax', ''),
(595, 7, 'printing_receipt_width', ''),
(596, 7, 'printing_receipt_size', ''),
(597, 7, 'free_delivery_above_price', ''),
(598, 7, 'merchant_minimum_order_dinein', ''),
(599, 7, 'merchant_maximum_order_dinein', ''),
(600, 7, 'food_viewing_private', ''),
(601, 7, 'merchant_tax_number', ''),
(602, 5, 'merchant_photo', '1544272253-10247chicken_kassa.jpg'),
(603, 4, 'merchant_photo', '1544272377-product-500x500.jpeg'),
(604, 8, 'merchant_switch_master_cod', '1'),
(605, 8, 'merchant_switch_master_ccr', ''),
(606, 8, 'merchant_switch_master_pyr', ''),
(607, 8, 'merchant_latitude', ''),
(608, 8, 'merchant_longtitude', ''),
(609, 8, 'merchant_master_table_boooking', '1'),
(610, 8, 'merchant_switch_master_ocr', ''),
(611, 8, 'merchant_switch_master_pyp', ''),
(612, 8, 'merchant_switch_master_stp', ''),
(613, 8, 'merchant_switch_master_mcd', ''),
(614, 8, 'merchant_switch_master_ide', ''),
(615, 8, 'merchant_switch_master_payu', ''),
(616, 8, 'merchant_switch_master_pys', ''),
(617, 8, 'merchant_switch_master_bcy', ''),
(618, 8, 'merchant_switch_master_epy', ''),
(619, 8, 'merchant_switch_master_atz', ''),
(620, 8, 'merchant_switch_master_obd', ''),
(621, 8, 'merchant_switch_master_btr', ''),
(622, 8, 'merchant_switch_master_rzr', ''),
(623, 8, 'merchant_switch_master_vog', ''),
(624, 8, 'merchant_minimum_order', ''),
(625, 8, 'merchant_tax', ''),
(626, 8, 'merchant_delivery_charges', ''),
(627, 8, 'stores_open_day', ''),
(628, 8, 'stores_open_starts', '{\\"monday\\":false,\\"tuesday\\":false,\\"wednesday\\":false,\\"thursday\\":false,\\"friday\\":false,\\"saturday\\":false,\\"sunday\\":false}'),
(629, 8, 'stores_open_ends', '{\\"monday\\":false,\\"tuesday\\":false,\\"wednesday\\":false,\\"thursday\\":false,\\"friday\\":false,\\"saturday\\":false,\\"sunday\\":false}'),
(630, 8, 'stores_open_custom_text', '{\\"monday\\":\\"\\",\\"tuesday\\":\\"\\",\\"wednesday\\":\\"\\",\\"thursday\\":\\"\\",\\"friday\\":\\"\\",\\"saturday\\":\\"\\",\\"sunday\\":\\"\\"}'),
(631, 8, 'merchant_photo', '1544272998-depositphotos_170884776-stock-photo-vada-pav-food.jpg'),
(632, 8, 'merchant_delivery_estimation', ''),
(633, 8, 'merchant_delivery_miles', ''),
(634, 8, 'merchant_photo_bg', ''),
(635, 8, 'merchant_disabled_cod', ''),
(636, 8, 'merchant_disabled_ccr', ''),
(637, 8, 'merchant_extenal', ''),
(638, 8, 'merchant_enabled_voucher', ''),
(639, 8, 'merchant_distance_type', 'mi'),
(640, 8, 'merchant_timezone', ''),
(641, 8, 'merchant_close_msg', ''),
(642, 8, 'merchant_preorder', ''),
(643, 8, 'merchant_maximum_order', ''),
(644, 8, 'merchant_packaging_charge', ''),
(645, 8, 'merchant_close_msg_holiday', ''),
(646, 8, 'merchant_holiday', '[\\"\\"]'),
(647, 8, 'merchant_activated_menu', ''),
(648, 8, 'spicydish', ''),
(649, 8, 'merchant_required_delivery_time', ''),
(650, 8, 'merchant_close_store', ''),
(651, 8, 'merchant_packaging_increment', ''),
(652, 8, 'merchant_show_time', ''),
(653, 8, 'merchant_enabled_tip', ''),
(654, 8, 'merchant_tip_default', ''),
(655, 8, 'merchant_minimum_order_pickup', ''),
(656, 8, 'merchant_maximum_order_pickup', ''),
(657, 8, 'merchant_disabled_ordering', ''),
(658, 8, 'merchant_tax_charges', ''),
(659, 8, 'stores_open_pm_start', '{\\"monday\\":\\"\\",\\"tuesday\\":\\"\\",\\"wednesday\\":\\"\\",\\"thursday\\":\\"\\",\\"friday\\":\\"\\",\\"saturday\\":\\"\\",\\"sunday\\":\\"\\"}'),
(660, 8, 'stores_open_pm_ends', '{\\"monday\\":\\"\\",\\"tuesday\\":\\"\\",\\"wednesday\\":\\"\\",\\"thursday\\":\\"\\",\\"friday\\":\\"\\",\\"saturday\\":\\"\\",\\"sunday\\":\\"\\"}'),
(661, 8, 'food_option_not_available', ''),
(662, 8, 'order_verification', ''),
(663, 8, 'order_sms_code_waiting', ''),
(664, 8, 'disabled_food_gallery', ''),
(665, 8, 'merchant_apply_tax', ''),
(666, 8, 'printing_receipt_width', ''),
(667, 8, 'printing_receipt_size', ''),
(668, 8, 'free_delivery_above_price', ''),
(669, 8, 'merchant_minimum_order_dinein', ''),
(670, 8, 'merchant_maximum_order_dinein', ''),
(671, 8, 'food_viewing_private', ''),
(672, 8, 'merchant_tax_number', ''),
(673, 9, 'merchant_switch_master_cod', '1'),
(674, 9, 'merchant_switch_master_ccr', ''),
(675, 9, 'merchant_switch_master_pyr', ''),
(676, 9, 'merchant_latitude', ''),
(677, 9, 'merchant_longtitude', ''),
(678, 9, 'merchant_master_table_boooking', '1'),
(679, 9, 'merchant_switch_master_ocr', ''),
(680, 9, 'merchant_switch_master_pyp', ''),
(681, 9, 'merchant_switch_master_stp', ''),
(682, 9, 'merchant_switch_master_mcd', ''),
(683, 9, 'merchant_switch_master_ide', ''),
(684, 9, 'merchant_switch_master_payu', ''),
(685, 9, 'merchant_switch_master_pys', ''),
(686, 9, 'merchant_switch_master_bcy', ''),
(687, 9, 'merchant_switch_master_epy', ''),
(688, 9, 'merchant_switch_master_atz', ''),
(689, 9, 'merchant_switch_master_obd', ''),
(690, 9, 'merchant_switch_master_btr', ''),
(691, 9, 'merchant_switch_master_rzr', ''),
(692, 9, 'merchant_switch_master_vog', ''),
(693, 9, 'merchant_minimum_order', ''),
(694, 9, 'merchant_tax', ''),
(695, 9, 'merchant_delivery_charges', ''),
(696, 9, 'stores_open_day', ''),
(697, 9, 'stores_open_starts', '{\\"monday\\":false,\\"tuesday\\":false,\\"wednesday\\":false,\\"thursday\\":false,\\"friday\\":false,\\"saturday\\":false,\\"sunday\\":false}'),
(698, 9, 'stores_open_ends', '{\\"monday\\":false,\\"tuesday\\":false,\\"wednesday\\":false,\\"thursday\\":false,\\"friday\\":false,\\"saturday\\":false,\\"sunday\\":false}'),
(699, 9, 'stores_open_custom_text', '{\\"monday\\":\\"\\",\\"tuesday\\":\\"\\",\\"wednesday\\":\\"\\",\\"thursday\\":\\"\\",\\"friday\\":\\"\\",\\"saturday\\":\\"\\",\\"sunday\\":\\"\\"}'),
(700, 9, 'merchant_photo', '1544273178-authentic-eid-al-fitr-chicken-biryani-2-size-3.jpg'),
(701, 9, 'merchant_delivery_estimation', ''),
(702, 9, 'merchant_delivery_miles', ''),
(703, 9, 'merchant_photo_bg', ''),
(704, 9, 'merchant_disabled_cod', ''),
(705, 9, 'merchant_disabled_ccr', ''),
(706, 9, 'merchant_extenal', ''),
(707, 9, 'merchant_enabled_voucher', ''),
(708, 9, 'merchant_distance_type', 'mi'),
(709, 9, 'merchant_timezone', ''),
(710, 9, 'merchant_close_msg', ''),
(711, 9, 'merchant_preorder', ''),
(712, 9, 'merchant_maximum_order', ''),
(713, 9, 'merchant_packaging_charge', ''),
(714, 9, 'merchant_close_msg_holiday', ''),
(715, 9, 'merchant_holiday', '[\\"\\"]'),
(716, 9, 'merchant_activated_menu', ''),
(717, 9, 'spicydish', ''),
(718, 9, 'merchant_required_delivery_time', ''),
(719, 9, 'merchant_close_store', ''),
(720, 9, 'merchant_packaging_increment', ''),
(721, 9, 'merchant_show_time', ''),
(722, 9, 'merchant_enabled_tip', ''),
(723, 9, 'merchant_tip_default', ''),
(724, 9, 'merchant_minimum_order_pickup', ''),
(725, 9, 'merchant_maximum_order_pickup', ''),
(726, 9, 'merchant_disabled_ordering', ''),
(727, 9, 'merchant_tax_charges', ''),
(728, 9, 'stores_open_pm_start', '{\\"monday\\":\\"\\",\\"tuesday\\":\\"\\",\\"wednesday\\":\\"\\",\\"thursday\\":\\"\\",\\"friday\\":\\"\\",\\"saturday\\":\\"\\",\\"sunday\\":\\"\\"}'),
(729, 9, 'stores_open_pm_ends', '{\\"monday\\":\\"\\",\\"tuesday\\":\\"\\",\\"wednesday\\":\\"\\",\\"thursday\\":\\"\\",\\"friday\\":\\"\\",\\"saturday\\":\\"\\",\\"sunday\\":\\"\\"}'),
(730, 9, 'food_option_not_available', ''),
(731, 9, 'order_verification', ''),
(732, 9, 'order_sms_code_waiting', ''),
(733, 9, 'disabled_food_gallery', ''),
(734, 9, 'merchant_apply_tax', ''),
(735, 9, 'printing_receipt_width', ''),
(736, 9, 'printing_receipt_size', ''),
(737, 9, 'free_delivery_above_price', ''),
(738, 9, 'merchant_minimum_order_dinein', ''),
(739, 9, 'merchant_maximum_order_dinein', ''),
(740, 9, 'food_viewing_private', ''),
(741, 9, 'merchant_tax_number', ''),
(742, 10, 'merchant_switch_master_cod', '1'),
(743, 10, 'merchant_switch_master_ccr', ''),
(744, 10, 'merchant_switch_master_pyr', ''),
(745, 10, 'merchant_latitude', ''),
(746, 10, 'merchant_longtitude', ''),
(747, 10, 'merchant_master_table_boooking', '1'),
(748, 10, 'merchant_switch_master_ocr', ''),
(749, 10, 'merchant_switch_master_pyp', ''),
(750, 10, 'merchant_switch_master_stp', ''),
(751, 10, 'merchant_switch_master_mcd', ''),
(752, 10, 'merchant_switch_master_ide', ''),
(753, 10, 'merchant_switch_master_payu', ''),
(754, 10, 'merchant_switch_master_pys', ''),
(755, 10, 'merchant_switch_master_bcy', ''),
(756, 10, 'merchant_switch_master_epy', ''),
(757, 10, 'merchant_switch_master_atz', ''),
(758, 10, 'merchant_switch_master_obd', ''),
(759, 10, 'merchant_switch_master_btr', ''),
(760, 10, 'merchant_switch_master_rzr', ''),
(761, 10, 'merchant_switch_master_vog', ''),
(762, 10, 'merchant_minimum_order', ''),
(763, 10, 'merchant_tax', ''),
(764, 10, 'merchant_delivery_charges', ''),
(765, 10, 'stores_open_day', ''),
(766, 10, 'stores_open_starts', '{\\"monday\\":false,\\"tuesday\\":false,\\"wednesday\\":false,\\"thursday\\":false,\\"friday\\":false,\\"saturday\\":false,\\"sunday\\":false}');
INSERT INTO `mt_option` (`id`, `merchant_id`, `option_name`, `option_value`) VALUES
(767, 10, 'stores_open_ends', '{\\"monday\\":false,\\"tuesday\\":false,\\"wednesday\\":false,\\"thursday\\":false,\\"friday\\":false,\\"saturday\\":false,\\"sunday\\":false}'),
(768, 10, 'stores_open_custom_text', '{\\"monday\\":\\"\\",\\"tuesday\\":\\"\\",\\"wednesday\\":\\"\\",\\"thursday\\":\\"\\",\\"friday\\":\\"\\",\\"saturday\\":\\"\\",\\"sunday\\":\\"\\"}'),
(769, 10, 'merchant_photo', '1544273993-hqdefault.jpg'),
(770, 10, 'merchant_delivery_estimation', ''),
(771, 10, 'merchant_delivery_miles', ''),
(772, 10, 'merchant_photo_bg', ''),
(773, 10, 'merchant_disabled_cod', ''),
(774, 10, 'merchant_disabled_ccr', ''),
(775, 10, 'merchant_extenal', ''),
(776, 10, 'merchant_enabled_voucher', ''),
(777, 10, 'merchant_distance_type', 'mi'),
(778, 10, 'merchant_timezone', ''),
(779, 10, 'merchant_close_msg', ''),
(780, 10, 'merchant_preorder', ''),
(781, 10, 'merchant_maximum_order', ''),
(782, 10, 'merchant_packaging_charge', ''),
(783, 10, 'merchant_close_msg_holiday', ''),
(784, 10, 'merchant_holiday', '[\\"\\"]'),
(785, 10, 'merchant_activated_menu', ''),
(786, 10, 'spicydish', ''),
(787, 10, 'merchant_required_delivery_time', ''),
(788, 10, 'merchant_close_store', ''),
(789, 10, 'merchant_packaging_increment', ''),
(790, 10, 'merchant_show_time', ''),
(791, 10, 'merchant_enabled_tip', ''),
(792, 10, 'merchant_tip_default', ''),
(793, 10, 'merchant_minimum_order_pickup', ''),
(794, 10, 'merchant_maximum_order_pickup', ''),
(795, 10, 'merchant_disabled_ordering', ''),
(796, 10, 'merchant_tax_charges', ''),
(797, 10, 'stores_open_pm_start', '{\\"monday\\":\\"\\",\\"tuesday\\":\\"\\",\\"wednesday\\":\\"\\",\\"thursday\\":\\"\\",\\"friday\\":\\"\\",\\"saturday\\":\\"\\",\\"sunday\\":\\"\\"}'),
(798, 10, 'stores_open_pm_ends', '{\\"monday\\":\\"\\",\\"tuesday\\":\\"\\",\\"wednesday\\":\\"\\",\\"thursday\\":\\"\\",\\"friday\\":\\"\\",\\"saturday\\":\\"\\",\\"sunday\\":\\"\\"}'),
(799, 10, 'food_option_not_available', ''),
(800, 10, 'order_verification', ''),
(801, 10, 'order_sms_code_waiting', ''),
(802, 10, 'disabled_food_gallery', ''),
(803, 10, 'merchant_apply_tax', ''),
(804, 10, 'printing_receipt_width', ''),
(805, 10, 'printing_receipt_size', ''),
(806, 10, 'free_delivery_above_price', ''),
(807, 10, 'merchant_minimum_order_dinein', ''),
(808, 10, 'merchant_maximum_order_dinein', ''),
(809, 10, 'food_viewing_private', ''),
(810, 10, 'merchant_tax_number', ''),
(811, 11, 'merchant_switch_master_cod', '1'),
(812, 11, 'merchant_switch_master_ccr', ''),
(813, 11, 'merchant_switch_master_pyr', ''),
(814, 11, 'merchant_latitude', ''),
(815, 11, 'merchant_longtitude', ''),
(816, 11, 'merchant_master_table_boooking', '1'),
(817, 11, 'merchant_switch_master_ocr', ''),
(818, 11, 'merchant_switch_master_pyp', ''),
(819, 11, 'merchant_switch_master_stp', ''),
(820, 11, 'merchant_switch_master_mcd', ''),
(821, 11, 'merchant_switch_master_ide', ''),
(822, 11, 'merchant_switch_master_payu', ''),
(823, 11, 'merchant_switch_master_pys', ''),
(824, 11, 'merchant_switch_master_bcy', ''),
(825, 11, 'merchant_switch_master_epy', ''),
(826, 11, 'merchant_switch_master_atz', ''),
(827, 11, 'merchant_switch_master_obd', ''),
(828, 11, 'merchant_switch_master_btr', ''),
(829, 11, 'merchant_switch_master_rzr', ''),
(830, 11, 'merchant_switch_master_vog', ''),
(831, 11, 'merchant_minimum_order', ''),
(832, 11, 'merchant_tax', ''),
(833, 11, 'merchant_delivery_charges', ''),
(834, 11, 'stores_open_day', ''),
(835, 11, 'stores_open_starts', '{\\"monday\\":false,\\"tuesday\\":false,\\"wednesday\\":false,\\"thursday\\":false,\\"friday\\":false,\\"saturday\\":false,\\"sunday\\":false}'),
(836, 11, 'stores_open_ends', '{\\"monday\\":false,\\"tuesday\\":false,\\"wednesday\\":false,\\"thursday\\":false,\\"friday\\":false,\\"saturday\\":false,\\"sunday\\":false}'),
(837, 11, 'stores_open_custom_text', '{\\"monday\\":\\"\\",\\"tuesday\\":\\"\\",\\"wednesday\\":\\"\\",\\"thursday\\":\\"\\",\\"friday\\":\\"\\",\\"saturday\\":\\"\\",\\"sunday\\":\\"\\"}'),
(838, 11, 'merchant_photo', '1544275062-gajar-halwa-recipe-step-by-step-instructions.jpg'),
(839, 11, 'merchant_delivery_estimation', ''),
(840, 11, 'merchant_delivery_miles', ''),
(841, 11, 'merchant_photo_bg', ''),
(842, 11, 'merchant_disabled_cod', ''),
(843, 11, 'merchant_disabled_ccr', ''),
(844, 11, 'merchant_extenal', ''),
(845, 11, 'merchant_enabled_voucher', ''),
(846, 11, 'merchant_distance_type', 'mi'),
(847, 11, 'merchant_timezone', ''),
(848, 11, 'merchant_close_msg', ''),
(849, 11, 'merchant_preorder', ''),
(850, 11, 'merchant_maximum_order', ''),
(851, 11, 'merchant_packaging_charge', ''),
(852, 11, 'merchant_close_msg_holiday', ''),
(853, 11, 'merchant_holiday', '[\\"\\"]'),
(854, 11, 'merchant_activated_menu', ''),
(855, 11, 'spicydish', ''),
(856, 11, 'merchant_required_delivery_time', ''),
(857, 11, 'merchant_close_store', ''),
(858, 11, 'merchant_packaging_increment', ''),
(859, 11, 'merchant_show_time', ''),
(860, 11, 'merchant_enabled_tip', ''),
(861, 11, 'merchant_tip_default', ''),
(862, 11, 'merchant_minimum_order_pickup', ''),
(863, 11, 'merchant_maximum_order_pickup', ''),
(864, 11, 'merchant_disabled_ordering', ''),
(865, 11, 'merchant_tax_charges', ''),
(866, 11, 'stores_open_pm_start', '{\\"monday\\":\\"\\",\\"tuesday\\":\\"\\",\\"wednesday\\":\\"\\",\\"thursday\\":\\"\\",\\"friday\\":\\"\\",\\"saturday\\":\\"\\",\\"sunday\\":\\"\\"}'),
(867, 11, 'stores_open_pm_ends', '{\\"monday\\":\\"\\",\\"tuesday\\":\\"\\",\\"wednesday\\":\\"\\",\\"thursday\\":\\"\\",\\"friday\\":\\"\\",\\"saturday\\":\\"\\",\\"sunday\\":\\"\\"}'),
(868, 11, 'food_option_not_available', ''),
(869, 11, 'order_verification', ''),
(870, 11, 'order_sms_code_waiting', ''),
(871, 11, 'disabled_food_gallery', ''),
(872, 11, 'merchant_apply_tax', ''),
(873, 11, 'printing_receipt_width', ''),
(874, 11, 'printing_receipt_size', ''),
(875, 11, 'free_delivery_above_price', ''),
(876, 11, 'merchant_minimum_order_dinein', ''),
(877, 11, 'merchant_maximum_order_dinein', ''),
(878, 11, 'food_viewing_private', ''),
(879, 11, 'merchant_tax_number', ''),
(880, 0, 'contact_content', 'Plot No 16 Prashant Nagar, Awasthi Chauk, Nagpur'),
(881, 0, 'contact_map', ''),
(882, 0, 'map_latitude', ''),
(883, 0, 'map_longitude', ''),
(884, 0, 'contact_email_receiver', ''),
(885, 0, 'contact_field', '[\\"name\\",\\"email\\",\\"phone\\",\\"country\\",\\"message\\"]'),
(886, 0, 'fb_flag', ''),
(887, 0, 'fb_app_id', ''),
(888, 0, 'fb_app_secret', ''),
(889, 0, 'admin_fb_page', 'www.facebook.com'),
(890, 0, 'admin_twitter_page', ''),
(891, 0, 'admin_google_page', 'www.google.com'),
(892, 0, 'admin_merchant_share', ''),
(893, 0, 'google_client_id', ''),
(894, 0, 'google_client_secret', ''),
(895, 0, 'google_client_redirect_ulr', 'http://localhost/rabzo1/store/GoogleLogin'),
(896, 0, 'google_login_enabled', ''),
(897, 0, 'default_share_text', ''),
(898, 0, 'admin_intagram_page', 'www.instagram.com'),
(899, 0, 'admin_youtube_url', 'www.youtube.com'),
(900, 13, 'merchant_switch_master_cod', ''),
(901, 13, 'merchant_switch_master_ccr', ''),
(902, 13, 'merchant_switch_master_pyr', ''),
(903, 13, 'merchant_latitude', ''),
(904, 13, 'merchant_longtitude', ''),
(905, 13, 'merchant_master_table_boooking', ''),
(906, 13, 'merchant_switch_master_ocr', ''),
(907, 13, 'merchant_switch_master_pyp', ''),
(908, 13, 'merchant_switch_master_stp', ''),
(909, 13, 'merchant_switch_master_mcd', ''),
(910, 13, 'merchant_switch_master_ide', ''),
(911, 13, 'merchant_switch_master_payu', ''),
(912, 13, 'merchant_switch_master_pys', ''),
(913, 13, 'merchant_switch_master_bcy', ''),
(914, 13, 'merchant_switch_master_epy', ''),
(915, 13, 'merchant_switch_master_atz', ''),
(916, 13, 'merchant_switch_master_obd', ''),
(917, 13, 'merchant_switch_master_btr', ''),
(918, 13, 'merchant_switch_master_rzr', ''),
(919, 13, 'merchant_switch_master_vog', ''),
(920, 0, 'admin_payu_enabled', 'yes'),
(921, 0, 'admin_payu_mode', 'Sandbox'),
(922, 0, 'admin_payu_key', 'test'),
(923, 0, 'admin_payu_salt', 'test2'),
(924, 0, 'first_step_image', '1559580647_1.gif'),
(925, 0, 'first_step_heading', 'Coose Your Meal'),
(926, 0, 'first_step_content', 'sdf'),
(927, 0, 'second_step_image', '1559580647_2.gif'),
(928, 0, 'second_step_heading', 'We''ll cook it for you'),
(929, 0, 'second_step_content', 'sdfs'),
(930, 0, 'third_step_image', '1559580647_3.gif'),
(931, 0, 'third_step_image', '1559580647_3.gif'),
(932, 0, 'third_step_content', 'fsfs');

-- --------------------------------------------------------

--
-- Table structure for table `mt_order`
--

CREATE TABLE `mt_order` (
  `order_id` int(14) NOT NULL,
  `merchant_id` int(14) NOT NULL DEFAULT '0',
  `client_id` int(14) NOT NULL DEFAULT '0',
  `json_details` text,
  `trans_type` varchar(100) NOT NULL DEFAULT '',
  `payment_type` varchar(100) NOT NULL DEFAULT '',
  `sub_total` float(14,4) NOT NULL DEFAULT '0.0000',
  `tax` float(14,4) NOT NULL DEFAULT '0.0000',
  `taxable_total` decimal(14,4) NOT NULL,
  `total_w_tax` float(14,4) NOT NULL DEFAULT '0.0000',
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `stats_id` int(14) NOT NULL DEFAULT '0',
  `viewed` int(1) NOT NULL DEFAULT '1',
  `delivery_charge` float(14,4) NOT NULL DEFAULT '0.0000',
  `delivery_date` date NOT NULL DEFAULT '0000-00-00',
  `delivery_time` varchar(100) NOT NULL DEFAULT '',
  `delivery_asap` varchar(14) NOT NULL DEFAULT '',
  `delivery_instruction` varchar(255) NOT NULL DEFAULT '',
  `voucher_code` varchar(100) NOT NULL DEFAULT '',
  `voucher_amount` float(14,4) NOT NULL DEFAULT '0.0000',
  `voucher_type` varchar(100) NOT NULL DEFAULT '',
  `cc_id` int(14) NOT NULL DEFAULT '0',
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip_address` varchar(50) NOT NULL DEFAULT '',
  `order_change` float(14,4) NOT NULL DEFAULT '0.0000',
  `payment_provider_name` varchar(255) NOT NULL DEFAULT '',
  `discounted_amount` float(14,5) NOT NULL DEFAULT '0.00000',
  `discount_percentage` float(14,5) NOT NULL DEFAULT '0.00000',
  `percent_commision` float(14,4) NOT NULL DEFAULT '0.0000',
  `total_commission` float(14,4) NOT NULL DEFAULT '0.0000',
  `commision_ontop` int(2) NOT NULL DEFAULT '2',
  `merchant_earnings` float(14,4) NOT NULL DEFAULT '0.0000',
  `packaging` float(14,4) NOT NULL DEFAULT '0.0000',
  `cart_tip_percentage` float(14,4) NOT NULL DEFAULT '0.0000',
  `cart_tip_value` float(14,4) NOT NULL DEFAULT '0.0000',
  `card_fee` float(14,4) NOT NULL DEFAULT '0.0000',
  `donot_apply_tax_delivery` int(1) NOT NULL DEFAULT '1',
  `order_locked` int(1) NOT NULL DEFAULT '1',
  `request_from` varchar(10) NOT NULL DEFAULT 'web',
  `mobile_cart_details` text,
  `points_discount` float(14,4) NOT NULL DEFAULT '0.0000',
  `apply_food_tax` int(1) NOT NULL DEFAULT '0',
  `order_id_token` varchar(100) NOT NULL DEFAULT '',
  `admin_viewed` int(1) NOT NULL DEFAULT '0',
  `merchantapp_viewed` int(1) NOT NULL DEFAULT '0',
  `dinein_number_of_guest` varchar(14) NOT NULL DEFAULT '',
  `dinein_special_instruction` varchar(255) NOT NULL DEFAULT '',
  `critical` int(1) NOT NULL DEFAULT '1',
  `commision_type` varchar(50) NOT NULL DEFAULT 'percentage',
  `calculation_method` int(1) NOT NULL DEFAULT '1',
  `sofort_trans_id` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mt_order_delivery_address`
--

CREATE TABLE `mt_order_delivery_address` (
  `id` int(14) NOT NULL,
  `order_id` int(14) NOT NULL DEFAULT '0',
  `client_id` int(14) NOT NULL DEFAULT '0',
  `street` varchar(255) NOT NULL DEFAULT '',
  `city` varchar(255) NOT NULL DEFAULT '',
  `state` varchar(255) NOT NULL DEFAULT '',
  `zipcode` varchar(255) NOT NULL DEFAULT '',
  `location_name` varchar(255) NOT NULL DEFAULT '',
  `country` varchar(255) NOT NULL DEFAULT '',
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip_address` varchar(50) NOT NULL DEFAULT '',
  `contact_phone` varchar(100) NOT NULL DEFAULT '',
  `formatted_address` text,
  `google_lat` varchar(50) NOT NULL DEFAULT '',
  `google_lng` varchar(50) NOT NULL DEFAULT '',
  `area_name` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mt_order_details`
--

CREATE TABLE `mt_order_details` (
  `id` int(14) NOT NULL,
  `order_id` int(14) NOT NULL DEFAULT '0',
  `client_id` int(14) NOT NULL DEFAULT '0',
  `item_id` int(14) NOT NULL DEFAULT '0',
  `item_name` varchar(255) NOT NULL DEFAULT '',
  `order_notes` text,
  `normal_price` float(14,4) NOT NULL DEFAULT '0.0000',
  `discounted_price` float(14,4) NOT NULL DEFAULT '0.0000',
  `size` varchar(255) NOT NULL DEFAULT '',
  `qty` int(14) NOT NULL DEFAULT '0',
  `cooking_ref` varchar(255) NOT NULL DEFAULT '',
  `addon` text,
  `ingredients` text,
  `non_taxable` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mt_order_details`
--

INSERT INTO `mt_order_details` (`id`, `order_id`, `client_id`, `item_id`, `item_name`, `order_notes`, `normal_price`, `discounted_price`, `size`, `qty`, `cooking_ref`, `addon`, `ingredients`, `non_taxable`) VALUES
(1, 1, 0, 1, 'ghfh', NULL, 0.0000, 0.0000, '1', 0, '', NULL, NULL, 1),
(2, 1, 0, 2, 'ghfh', NULL, 0.0000, 0.0000, '1', 0, '', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `mt_order_history`
--

CREATE TABLE `mt_order_history` (
  `id` int(14) NOT NULL,
  `order_id` int(14) NOT NULL DEFAULT '0',
  `status` varchar(255) NOT NULL DEFAULT '',
  `remarks` text,
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip_address` varchar(50) NOT NULL DEFAULT '',
  `task_id` int(14) NOT NULL DEFAULT '0',
  `reason` text,
  `customer_signature` varchar(255) NOT NULL DEFAULT '',
  `notification_viewed` int(1) NOT NULL DEFAULT '2',
  `driver_id` int(14) NOT NULL DEFAULT '0',
  `driver_location_lat` varchar(50) NOT NULL DEFAULT '',
  `driver_location_lng` varchar(50) NOT NULL DEFAULT '',
  `remarks2` varchar(255) NOT NULL DEFAULT '',
  `remarks_args` varchar(255) NOT NULL DEFAULT '',
  `notes` varchar(255) NOT NULL DEFAULT '',
  `photo_task_id` int(14) NOT NULL DEFAULT '0',
  `receive_by` varchar(255) NOT NULL DEFAULT '',
  `signature_base30` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mt_order_sms`
--

CREATE TABLE `mt_order_sms` (
  `id` int(14) NOT NULL,
  `mobile` varchar(50) NOT NULL DEFAULT '',
  `code` int(4) NOT NULL,
  `session` varchar(255) NOT NULL DEFAULT '',
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mt_order_status`
--

CREATE TABLE `mt_order_status` (
  `stats_id` int(14) NOT NULL,
  `merchant_id` int(14) NOT NULL DEFAULT '0',
  `description` varchar(200) NOT NULL DEFAULT '',
  `date_created` date NOT NULL DEFAULT '0000-00-00',
  `date_modified` date NOT NULL DEFAULT '0000-00-00',
  `ip_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mt_order_status`
--

INSERT INTO `mt_order_status` (`stats_id`, `merchant_id`, `description`, `date_created`, `date_modified`, `ip_address`) VALUES
(1, 0, 'pending', '2018-12-06', '0000-00-00', '203.192.219.86'),
(2, 0, 'cancelled', '2018-12-06', '0000-00-00', '203.192.219.86'),
(3, 0, 'delivered', '2018-12-06', '0000-00-00', '203.192.219.86'),
(4, 0, 'paid', '2018-12-06', '0000-00-00', '203.192.219.86'),
(5, 0, 'accepted', '2018-12-06', '0000-00-00', '203.192.219.86'),
(6, 0, 'decline', '2018-12-06', '0000-00-00', '203.192.219.86');

-- --------------------------------------------------------

--
-- Table structure for table `mt_packages`
--

CREATE TABLE `mt_packages` (
  `id` int(14) NOT NULL,
  `title` varchar(255) NOT NULL DEFAULT '',
  `description` text,
  `price` float(14,4) NOT NULL DEFAULT '0.0000',
  `promo_price` float(14,4) NOT NULL DEFAULT '0.0000',
  `expiration` int(14) NOT NULL DEFAULT '0',
  `expiration_type` varchar(50) NOT NULL DEFAULT 'days',
  `unlimited_post` int(1) NOT NULL DEFAULT '2',
  `post_limit` int(14) NOT NULL DEFAULT '0',
  `sequence` int(14) NOT NULL DEFAULT '0',
  `status` varchar(100) NOT NULL DEFAULT '',
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip_address` varchar(50) NOT NULL DEFAULT '',
  `sell_limit` int(14) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mt_packages`
--

INSERT INTO `mt_packages` (`id`, `title`, `description`, `price`, `promo_price`, `expiration`, `expiration_type`, `unlimited_post`, `post_limit`, `sequence`, `status`, `date_created`, `date_modified`, `ip_address`, `sell_limit`) VALUES
(1, 'silver', 'get free access to to 1000s of customers', 600.0000, 0.0000, 365, 'year', 2, 20, 0, 'publish', '2018-12-06 02:50:55', '0000-00-00 00:00:00', '203.192.219.86', 0),
(2, 'gold', 'create 50 products ', 1000.0000, 0.0000, 365, 'year', 2, 50, 0, 'publish', '2018-12-06 02:51:31', '0000-00-00 00:00:00', '203.192.219.86', 0),
(3, 'free', 'free', 0.0000, 0.0000, 365, 'year', 2, 10, 0, 'publish', '2018-12-06 14:13:42', '0000-00-00 00:00:00', '203.192.219.86', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `mt_package_trans`
--

CREATE TABLE `mt_package_trans` (
  `id` int(14) NOT NULL,
  `package_id` int(14) NOT NULL DEFAULT '0',
  `merchant_id` int(14) NOT NULL DEFAULT '0',
  `price` float(14,4) NOT NULL DEFAULT '0.0000',
  `payment_type` varchar(100) NOT NULL DEFAULT '',
  `mt_id` int(14) NOT NULL DEFAULT '0',
  `TOKEN` varchar(255) NOT NULL DEFAULT '',
  `membership_expired` date NOT NULL DEFAULT '0000-00-00',
  `TRANSACTIONID` varchar(255) NOT NULL DEFAULT '',
  `TRANSACTIONTYPE` varchar(100) NOT NULL DEFAULT '',
  `PAYMENTSTATUS` varchar(100) NOT NULL DEFAULT '',
  `PAYPALFULLRESPONSE` text,
  `status` varchar(100) NOT NULL DEFAULT 'pending',
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip_address` varchar(50) NOT NULL DEFAULT '',
  `fee` float(14,4) NOT NULL DEFAULT '0.0000'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mt_payment_order`
--

CREATE TABLE `mt_payment_order` (
  `id` int(14) NOT NULL,
  `payment_type` varchar(10) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `payment_reference` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `order_id` int(14) NOT NULL DEFAULT '0',
  `raw_response` text CHARACTER SET utf8 NOT NULL,
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip_address` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mt_payment_provider`
--

CREATE TABLE `mt_payment_provider` (
  `id` int(14) NOT NULL,
  `payment_name` varchar(255) NOT NULL DEFAULT '',
  `payment_logo` varchar(255) NOT NULL DEFAULT '',
  `sequence` int(14) NOT NULL DEFAULT '0',
  `status` varchar(255) NOT NULL DEFAULT 'publish',
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mt_payment_provider`
--

INSERT INTO `mt_payment_provider` (`id`, `payment_name`, `payment_logo`, `sequence`, `status`, `date_created`, `date_modified`, `ip_address`) VALUES
(2, 'Cash on delivery', '', 1, 'publish', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(3, 'Rupay', '', 2, 'publish', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(4, 'Offline credit card payment', '', 3, 'publish', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(5, 'Paytm', '', 4, 'publish', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(6, 'Pay on delivery', '', 5, 'publish', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(7, 'Phonepay', '', 6, 'publish', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(8, 'Paypal', '', 7, 'publish', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(9, 'Googlepay', '', 8, 'publish', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(10, 'Payumoney', '', 9, 'publish', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `mt_paypal_checkout`
--

CREATE TABLE `mt_paypal_checkout` (
  `id` int(14) NOT NULL,
  `order_id` int(14) NOT NULL DEFAULT '0',
  `token` varchar(255) NOT NULL DEFAULT '',
  `paypal_request` text,
  `paypal_response` text,
  `status` varchar(255) NOT NULL DEFAULT 'checkout',
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip_address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mt_paypal_payment`
--

CREATE TABLE `mt_paypal_payment` (
  `id` int(14) NOT NULL,
  `order_id` int(14) NOT NULL DEFAULT '0',
  `TOKEN` varchar(255) NOT NULL DEFAULT '',
  `TRANSACTIONID` varchar(100) NOT NULL DEFAULT '',
  `TRANSACTIONTYPE` varchar(100) NOT NULL DEFAULT '',
  `PAYMENTTYPE` varchar(100) NOT NULL DEFAULT '',
  `ORDERTIME` varchar(100) NOT NULL DEFAULT '',
  `AMT` varchar(14) NOT NULL DEFAULT '',
  `FEEAMT` varchar(14) NOT NULL DEFAULT '',
  `TAXAMT` varchar(14) NOT NULL DEFAULT '',
  `CURRENCYCODE` varchar(3) NOT NULL DEFAULT '',
  `PAYMENTSTATUS` varchar(100) NOT NULL DEFAULT '',
  `CORRELATIONID` varchar(100) NOT NULL DEFAULT '',
  `TIMESTAMP` varchar(100) NOT NULL DEFAULT '',
  `json_details` text,
  `date_created` varchar(50) NOT NULL DEFAULT '',
  `ip_address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mt_rating`
--

CREATE TABLE `mt_rating` (
  `id` int(14) NOT NULL,
  `merchant_id` int(14) NOT NULL DEFAULT '0',
  `ratings` float(14,1) NOT NULL DEFAULT '0.0',
  `client_id` int(14) NOT NULL DEFAULT '0',
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mt_rating_meaning`
--

CREATE TABLE `mt_rating_meaning` (
  `id` int(14) NOT NULL,
  `rating_start` float(14,1) NOT NULL DEFAULT '0.0',
  `rating_end` float(14,1) NOT NULL DEFAULT '0.0',
  `meaning` varchar(255) NOT NULL DEFAULT '',
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mt_rating_meaning`
--

INSERT INTO `mt_rating_meaning` (`id`, `rating_start`, `rating_end`, `meaning`, `date_created`, `date_modified`, `ip_address`) VALUES
(1, 1.0, 1.9, 'poor', '2018-12-06 02:35:28', '0000-00-00 00:00:00', '203.192.219.86'),
(2, 2.0, 2.9, 'good', '2018-12-06 02:35:28', '0000-00-00 00:00:00', '203.192.219.86'),
(3, 3.0, 4.0, 'very good', '2018-12-06 02:35:28', '0000-00-00 00:00:00', '203.192.219.86'),
(4, 4.1, 5.0, 'excellent', '2018-12-06 02:35:28', '0000-00-00 00:00:00', '203.192.219.86');

-- --------------------------------------------------------

--
-- Table structure for table `mt_receive_post`
--

CREATE TABLE `mt_receive_post` (
  `id` int(14) NOT NULL,
  `payment_type` varchar(3) NOT NULL DEFAULT '',
  `receive_post` text,
  `status` text,
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mt_review`
--

CREATE TABLE `mt_review` (
  `id` int(14) NOT NULL,
  `merchant_id` int(14) NOT NULL DEFAULT '0',
  `client_id` int(14) NOT NULL DEFAULT '0',
  `review` text,
  `rating` float(14,1) NOT NULL DEFAULT '0.0',
  `status` varchar(100) NOT NULL DEFAULT 'publish',
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip_address` varchar(50) NOT NULL DEFAULT '',
  `order_id` varchar(14) NOT NULL,
  `parent_id` int(14) NOT NULL DEFAULT '0',
  `reply_from` varchar(255) NOT NULL DEFAULT '',
  `date_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mt_review`
--

INSERT INTO `mt_review` (`id`, `merchant_id`, `client_id`, `review`, `rating`, `status`, `date_created`, `ip_address`, `order_id`, `parent_id`, `reply_from`, `date_modified`) VALUES
(1, 17, 1, 'hf', 5.0, 'publish', '0000-00-00 00:00:00', '', '', 0, '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `mt_shipping_rate`
--

CREATE TABLE `mt_shipping_rate` (
  `id` int(14) NOT NULL,
  `merchant_id` int(14) NOT NULL DEFAULT '0',
  `distance_from` int(14) NOT NULL DEFAULT '0',
  `distance_to` int(14) NOT NULL DEFAULT '0',
  `shipping_units` varchar(5) NOT NULL DEFAULT '',
  `distance_price` float(14,4) NOT NULL DEFAULT '0.0000'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mt_size`
--

CREATE TABLE `mt_size` (
  `id` int(14) NOT NULL,
  `merchant_id` int(14) NOT NULL DEFAULT '0',
  `size_name` varchar(255) NOT NULL DEFAULT '',
  `sequence` int(14) NOT NULL DEFAULT '0',
  `status` varchar(50) NOT NULL DEFAULT 'published',
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip_address` varchar(50) NOT NULL DEFAULT '',
  `size_name_trans` text,
  `source` varchar(20) NOT NULL DEFAULT 'NIL'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mt_size`
--

INSERT INTO `mt_size` (`id`, `merchant_id`, `size_name`, `sequence`, `status`, `date_created`, `date_modified`, `ip_address`, `size_name_trans`, `source`) VALUES
(38, 17, 'Half', 0, 'published', '2019-04-27 00:00:00', '0000-00-00 00:00:00', '', NULL, 'NIL'),
(39, 17, 'medium', 0, 'published', '2019-04-27 03:05:00', '0000-00-00 00:00:00', '', NULL, 'NIL'),
(40, 17, 'Full', 0, 'published', '2019-04-27 00:00:00', '0000-00-00 00:00:00', '', NULL, 'NIL'),
(41, 17, 'Full Handi', 0, 'published', '2019-04-30 00:00:00', '2019-04-30 00:00:00', '', NULL, 'web');

-- --------------------------------------------------------

--
-- Table structure for table `mt_sms_broadcast`
--

CREATE TABLE `mt_sms_broadcast` (
  `broadcast_id` int(14) NOT NULL,
  `merchant_id` int(14) NOT NULL DEFAULT '0',
  `send_to` int(14) NOT NULL DEFAULT '0',
  `list_mobile_number` text NOT NULL,
  `sms_alert_message` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mt_sms_broadcast_details`
--

CREATE TABLE `mt_sms_broadcast_details` (
  `id` int(14) NOT NULL,
  `merchant_id` int(14) NOT NULL DEFAULT '0',
  `broadcast_id` int(14) NOT NULL DEFAULT '0',
  `client_id` int(14) NOT NULL DEFAULT '0',
  `client_name` varchar(255) NOT NULL DEFAULT '',
  `contact_phone` varchar(50) NOT NULL DEFAULT '',
  `sms_message` varchar(255) NOT NULL DEFAULT '',
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `gateway_response` text,
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_executed` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip_address` varchar(50) NOT NULL DEFAULT '',
  `gateway` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mt_sms_package`
--

CREATE TABLE `mt_sms_package` (
  `sms_package_id` int(14) NOT NULL,
  `title` varchar(255) NOT NULL DEFAULT '',
  `description` text,
  `price` float(14,4) NOT NULL DEFAULT '0.0000',
  `promo_price` float(14,4) NOT NULL DEFAULT '0.0000',
  `sms_limit` int(14) NOT NULL DEFAULT '0',
  `sequence` int(14) NOT NULL DEFAULT '0',
  `status` varchar(100) NOT NULL DEFAULT '',
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip_address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mt_sms_package_trans`
--

CREATE TABLE `mt_sms_package_trans` (
  `id` int(14) NOT NULL,
  `merchant_id` int(14) NOT NULL DEFAULT '0',
  `sms_package_id` int(14) NOT NULL DEFAULT '0',
  `payment_type` varchar(50) NOT NULL DEFAULT '',
  `package_price` float(14,4) NOT NULL DEFAULT '0.0000',
  `sms_limit` int(14) NOT NULL DEFAULT '0',
  `status` varchar(100) NOT NULL DEFAULT 'pending',
  `payment_reference` varchar(255) NOT NULL DEFAULT '',
  `payment_gateway_response` text,
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip_address` varchar(50) NOT NULL,
  `cc_id` int(14) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mt_stripe_logs`
--

CREATE TABLE `mt_stripe_logs` (
  `id` int(14) NOT NULL,
  `order_id` int(14) NOT NULL,
  `json_result` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mt_subcategory`
--

CREATE TABLE `mt_subcategory` (
  `subcat_id` int(14) NOT NULL,
  `merchant_id` int(14) NOT NULL DEFAULT '0',
  `subcategory_name` varchar(255) NOT NULL DEFAULT '',
  `subcategory_description` text,
  `discount` varchar(20) NOT NULL DEFAULT '',
  `sequence` int(14) NOT NULL DEFAULT '0',
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip_address` varchar(50) NOT NULL DEFAULT '',
  `status` varchar(100) NOT NULL DEFAULT 'publish',
  `subcategory_name_trans` text,
  `subcategory_description_trans` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mt_subcategory`
--

INSERT INTO `mt_subcategory` (`subcat_id`, `merchant_id`, `subcategory_name`, `subcategory_description`, `discount`, `sequence`, `date_created`, `date_modified`, `ip_address`, `status`, `subcategory_name_trans`, `subcategory_description_trans`) VALUES
(1, 3, 'veg', '', '', 0, '2018-12-06 16:05:07', '0000-00-00 00:00:00', '203.192.219.86', 'publish', NULL, NULL),
(2, 5, 'Salad', 'salad', '', 0, '2018-12-07 16:06:44', '0000-00-00 00:00:00', '203.192.219.81', 'publish', NULL, NULL),
(3, 5, 'Soup', 'Soup', '', 0, '2018-12-07 16:07:21', '0000-00-00 00:00:00', '203.192.219.81', 'publish', NULL, NULL),
(4, 5, 'Starter', 'starter', '', 0, '2018-12-07 16:07:36', '0000-00-00 00:00:00', '203.192.219.81', 'publish', NULL, NULL),
(5, 5, 'snacks', 'snacks', '', 0, '2018-12-07 16:07:57', '0000-00-00 00:00:00', '203.192.219.81', 'publish', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mt_subcategory_item`
--

CREATE TABLE `mt_subcategory_item` (
  `sub_item_id` int(14) NOT NULL,
  `merchant_id` int(14) NOT NULL DEFAULT '0',
  `sub_item_name` varchar(255) NOT NULL DEFAULT '',
  `item_description` text,
  `category` varchar(255) NOT NULL DEFAULT '',
  `price` varchar(15) NOT NULL DEFAULT '',
  `photo` varchar(255) NOT NULL DEFAULT '',
  `sequence` int(14) NOT NULL DEFAULT '0',
  `status` varchar(50) NOT NULL DEFAULT '',
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip_address` varchar(50) NOT NULL DEFAULT '',
  `sub_item_name_trans` text,
  `item_description_trans` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mt_subcategory_item`
--

INSERT INTO `mt_subcategory_item` (`sub_item_id`, `merchant_id`, `sub_item_name`, `item_description`, `category`, `price`, `photo`, `sequence`, `status`, `date_created`, `date_modified`, `ip_address`, `sub_item_name_trans`, `item_description_trans`) VALUES
(1, 5, 'papad', 'Moong Papad', '["5"]', '20', '1544179127-download-(3).jpg', 0, 'publish', '2018-12-07 16:08:48', '0000-00-00 00:00:00', '203.192.219.81', NULL, NULL),
(2, 5, 'Masala papad', 'Masala papad', '["5"]', '30', '1544179267-masala_papad-1.jpg', 0, 'publish', '2018-12-07 16:11:10', '0000-00-00 00:00:00', '203.192.219.81', NULL, NULL),
(3, 5, 'Boil Nuts', 'Boil Nuts', '["5"]', '60', '1544179324-hqdefault.jpg', 0, 'publish', '2018-12-07 16:12:06', '0000-00-00 00:00:00', '203.192.219.81', NULL, NULL),
(4, 5, 'Chicken Tikka', 'Chicken Tikka', '["4"]', '100', '1544179366-Tandoori-Chicken-Tikka-with-Lemon-and-Sage_ExtraLarge1000_ID-2483976.jpg', 0, 'publish', '2018-12-07 16:12:49', '0000-00-00 00:00:00', '203.192.219.81', NULL, NULL),
(5, 5, 'manchow soup', 'manchow soup', '["3"]', '90', '1544179425-homemade-chicken-manchow-soup.1024x1024-4.jpg', 0, 'publish', '2018-12-07 16:13:48', '0000-00-00 00:00:00', '203.192.219.81', NULL, NULL),
(6, 5, 'Tomato soup', 'Tomato soup', '["3"]', '80', '1544179469-tomato-soup-recipes-480x270.jpg', 0, 'publish', '2018-12-07 16:14:31', '0000-00-00 00:00:00', '203.192.219.81', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mt_voucher`
--

CREATE TABLE `mt_voucher` (
  `id` int(14) NOT NULL,
  `voucher_name` varchar(255) NOT NULL DEFAULT '',
  `merchant_id` int(14) NOT NULL DEFAULT '0',
  `number_of_voucher` int(14) NOT NULL DEFAULT '0',
  `amount` float NOT NULL,
  `voucher_type` varchar(100) NOT NULL DEFAULT 'fixed amount',
  `status` varchar(100) NOT NULL DEFAULT '',
  `date_created` varchar(50) NOT NULL DEFAULT '',
  `date_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mt_voucher`
--

INSERT INTO `mt_voucher` (`id`, `voucher_name`, `merchant_id`, `number_of_voucher`, `amount`, `voucher_type`, `status`, `date_created`, `date_modified`, `ip_address`) VALUES
(1, 'MAY2019', 17, 1, 200, 'fixed amount', 'active', '2019-04-30 23:40:02', '0000-00-00 00:00:00', '157.49.205.202');

-- --------------------------------------------------------

--
-- Table structure for table `mt_voucher_list`
--

CREATE TABLE `mt_voucher_list` (
  `voucher_id` int(14) NOT NULL,
  `voucher_code` varchar(50) NOT NULL DEFAULT '',
  `status` varchar(50) CHARACTER SET latin1 NOT NULL DEFAULT 'unused',
  `client_id` int(14) NOT NULL DEFAULT '0',
  `date_used` varchar(50) NOT NULL DEFAULT '',
  `order_id` int(14) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mt_voucher_new`
--

CREATE TABLE `mt_voucher_new` (
  `id` int(14) NOT NULL,
  `voucher_owner` varchar(255) NOT NULL DEFAULT 'merchant',
  `merchant_id` int(14) NOT NULL DEFAULT '0',
  `joining_merchant` text,
  `voucher_name` varchar(255) NOT NULL DEFAULT '',
  `voucher_type` varchar(255) NOT NULL DEFAULT '',
  `amount` float(14,4) NOT NULL DEFAULT '0.0000',
  `expiration` date NOT NULL DEFAULT '0000-00-00',
  `status` varchar(100) NOT NULL DEFAULT '',
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip_address` varchar(100) NOT NULL DEFAULT '',
  `used_once` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mt_voucher_new`
--

INSERT INTO `mt_voucher_new` (`id`, `voucher_owner`, `merchant_id`, `joining_merchant`, `voucher_name`, `voucher_type`, `amount`, `expiration`, `status`, `date_created`, `date_modified`, `ip_address`, `used_once`) VALUES
(1, 'merchant', 9, NULL, 'chch', 'Fixed Amount', 58.0000, '2003-02-02', 'Publish', '2019-05-02 18:04:38', '2019-05-02 18:04:38', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mt_withdrawal`
--

CREATE TABLE `mt_withdrawal` (
  `withdrawal_id` int(14) NOT NULL,
  `merchant_id` int(14) NOT NULL DEFAULT '0',
  `payment_type` varchar(100) NOT NULL DEFAULT '',
  `payment_method` varchar(100) NOT NULL DEFAULT '',
  `amount` float(14,4) NOT NULL DEFAULT '0.0000',
  `current_balance` float(14,4) NOT NULL DEFAULT '0.0000',
  `balance` float(14,4) NOT NULL DEFAULT '0.0000',
  `currency_code` varchar(3) NOT NULL DEFAULT '',
  `account` varchar(255) NOT NULL DEFAULT '',
  `account_name` varchar(255) NOT NULL DEFAULT '',
  `bank_account_number` varchar(255) NOT NULL DEFAULT '',
  `swift_code` varchar(100) NOT NULL DEFAULT '',
  `bank_name` varchar(255) NOT NULL DEFAULT '',
  `bank_branch` varchar(255) NOT NULL DEFAULT '',
  `bank_country` varchar(50) NOT NULL DEFAULT '',
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `viewed` int(2) NOT NULL DEFAULT '1',
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_to_process` date NOT NULL DEFAULT '0000-00-00',
  `date_process` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `api_raw_response` text,
  `withdrawal_token` text,
  `ip_address` varchar(50) NOT NULL DEFAULT '',
  `bank_type` varchar(255) NOT NULL DEFAULT 'default'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mt_zipcode`
--

CREATE TABLE `mt_zipcode` (
  `zipcode_id` int(14) NOT NULL,
  `zipcode` varchar(255) NOT NULL DEFAULT '',
  `country_code` varchar(5) NOT NULL DEFAULT '',
  `city` varchar(255) NOT NULL DEFAULT '',
  `area` varchar(255) NOT NULL DEFAULT '',
  `stree_name` varchar(255) NOT NULL DEFAULT '',
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sub_modules`
--

CREATE TABLE `sub_modules` (
  `id` int(11) NOT NULL,
  `module_id` int(11) NOT NULL,
  `sub_module_name` varchar(255) NOT NULL,
  `status` enum('active','inactive') NOT NULL,
  `sub_module_routes` varchar(255) NOT NULL,
  `icons` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_modules`
--

INSERT INTO `sub_modules` (`id`, `module_id`, `sub_module_name`, `status`, `sub_module_routes`, `icons`, `created_at`, `updated_at`) VALUES
(1, 1, 'Manage Cms', 'active', '/manage_cms', '', '2019-03-28 09:36:53', '0000-00-00 00:00:00'),
(2, 1, 'Manage FAQ', 'active', '/manage_faq', '', '2019-03-28 09:36:38', '0000-00-00 00:00:00'),
(3, 1, 'Manage Home Page Banner', 'active', '/manage_banner', '', '2019-03-28 09:36:38', '0000-00-00 00:00:00'),
(4, 1, 'Manage Navigation', 'inactive', '/manage_nevigation', '', '2019-05-20 17:36:15', '0000-00-00 00:00:00'),
(5, 2, 'Manage Email Templates', 'active', '/manage_emailtemplate', '', '2019-03-28 09:41:40', '0000-00-00 00:00:00'),
(6, 2, 'Manage SMS Templates', 'active', '/manage_smstemplate', '', '2019-03-28 09:42:02', '0000-00-00 00:00:00'),
(7, 2, 'Manage Notification Templates', 'active', '/manage_notificationtemplate', '', '2019-03-28 09:42:06', '0000-00-00 00:00:00'),
(8, 2, 'Manage System Templates', 'active', '/manage_systemtemplate', '', '2019-03-28 09:42:11', '0000-00-00 00:00:00'),
(9, 3, 'Packages', 'active', '/manage_packages', '', '2019-04-02 05:12:58', '0000-00-00 00:00:00'),
(10, 4, 'Categories', 'active', '/manage_categories', '', '2019-04-02 05:16:23', '0000-00-00 00:00:00'),
(11, 4, 'Posts', 'active', '/manage_posts', '', '2019-04-02 05:16:14', '0000-00-00 00:00:00'),
(12, 4, 'Contributions', 'active', '/manage_contributions', '', '2019-04-02 05:16:14', '0000-00-00 00:00:00'),
(13, 4, 'Comments', 'active', '/manage_comments', '', '2019-04-02 05:16:14', '0000-00-00 00:00:00'),
(15, 5, 'Manage Advertisement', 'active', 'manage_advertisement', '', '2019-04-02 05:17:41', '0000-00-00 00:00:00'),
(16, 5, 'Manage Advertisement Requests', 'inactive', 'manage_advertisement_requests', '', '2019-05-20 18:56:20', '0000-00-00 00:00:00'),
(17, 6, 'Website Settings', 'active', '/website_settings', '', '2019-04-02 05:21:41', '0000-00-00 00:00:00'),
(18, 6, 'Maintenance Mode Settings', 'active', '/maintenance_mode_settings', '', '2019-04-02 05:21:41', '0000-00-00 00:00:00'),
(19, 6, 'Manage Translation', 'active', '/manage_translation', '', '2019-04-02 05:21:41', '0000-00-00 00:00:00'),
(20, 6, 'Manage Phone Code', 'active', '/manage_phone_code', '', '2019-04-02 05:21:41', '0000-00-00 00:00:00'),
(21, 6, 'Manage Location', 'active', '/manage_location', '', '2019-04-02 05:21:41', '0000-00-00 00:00:00'),
(22, 6, 'Manage Language', 'active', '/manage_language', '', '2019-04-02 05:21:41', '0000-00-00 00:00:00'),
(23, 7, 'Reviews', 'active', '/manage_reviews', '', '2019-04-02 05:23:28', '0000-00-00 00:00:00'),
(24, 9, 'Manage Admin', 'active', '/manage_admin', '', '2019-04-02 05:27:03', '0000-00-00 00:00:00'),
(25, 9, 'Manage Password', 'active', '/manage_password', '', '2019-04-02 05:27:08', '0000-00-00 00:00:00'),
(26, 10, 'Database Backup', 'active', '/database_backup', '', '2019-04-02 05:27:00', '0000-00-00 00:00:00'),
(27, 10, 'Images Backup', 'active', '/image_backup', '', '2019-04-02 05:26:51', '0000-00-00 00:00:00'),
(28, 11, 'Manage Users', 'active', '/manage_users', '', '2019-04-02 05:31:02', '0000-00-00 00:00:00'),
(32, 12, 'Manage Orders', 'active', '/manage_orders', '', '2019-04-02 05:31:54', '0000-00-00 00:00:00'),
(33, 13, 'Manage Merchant', 'active', '/manage_merchant', '', '2019-04-08 05:27:18', '0000-00-00 00:00:00'),
(34, 13, 'Cuisine', 'active', 'cuisine', '', '2019-04-08 06:50:05', '0000-00-00 00:00:00'),
(35, 14, 'Add', 'active', '/manage_voucher', '', '2019-04-12 11:59:52', '0000-00-00 00:00:00'),
(36, 13, 'Manage Categories', 'active', '/manage_categories', '', '2019-04-08 05:27:18', '0000-00-00 00:00:00'),
(37, 15, 'PayUmoney', 'active', '/manage_payumoney', '', '2019-05-02 07:51:00', '0000-00-00 00:00:00'),
(38, 15, 'Paytm', 'active', '/manage_paytm', '', '2019-05-02 10:07:45', '0000-00-00 00:00:00'),
(39, 12, 'Order Status', 'inactive', '/manage_orders', '', '2019-05-21 08:59:38', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `original_password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `looking_for` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `company_institute` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `position` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `experience` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `about_us` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `scale_of_company` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `company_size` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `original_password`, `type`, `looking_for`, `remember_token`, `firstname`, `lastname`, `phone_no`, `location`, `company_institute`, `position`, `website`, `category`, `experience`, `about_us`, `scale_of_company`, `company_size`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$12$g.UGyuatQYBxB1CSQY2aquX.YL25jt0Ey8PlK/fs6ISu3aUnRnsXi', '123456', 'admin', '', 'pHxcW5RGhR2SpT4f4WHrqXJlJviwms63jGTpgwdY49dKOThzAHoZ5Oi19yUP', '', '', '', '', NULL, NULL, NULL, '', '', '', '', '', NULL, '2018-10-15 10:59:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mt_address_book`
--
ALTER TABLE `mt_address_book`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `as_default` (`as_default`);

--
-- Indexes for table `mt_admin_user`
--
ALTER TABLE `mt_admin_user`
  ADD PRIMARY KEY (`admin_id`),
  ADD KEY `admin_id` (`admin_id`),
  ADD KEY `username` (`username`),
  ADD KEY `password` (`password`),
  ADD KEY `lost_password_code` (`lost_password_code`),
  ADD KEY `session_token` (`session_token`);

--
-- Indexes for table `mt_advertisement`
--
ALTER TABLE `mt_advertisement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mt_bank_deposit`
--
ALTER TABLE `mt_bank_deposit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `merchant_id` (`merchant_id`),
  ADD KEY `status` (`status`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `mt_barclay_trans`
--
ALTER TABLE `mt_barclay_trans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orderid` (`orderid`),
  ADD KEY `token` (`token`),
  ADD KEY `transaction_type` (`transaction_type`);

--
-- Indexes for table `mt_bookingtable`
--
ALTER TABLE `mt_bookingtable`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `merchant_id` (`merchant_id`),
  ADD KEY `status` (`status`),
  ADD KEY `viewed` (`viewed`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `date_booking` (`date_booking`);

--
-- Indexes for table `mt_bookingtable_history`
--
ALTER TABLE `mt_bookingtable_history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `booking_id` (`booking_id`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `mt_category`
--
ALTER TABLE `mt_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_name` (`category_name`),
  ADD KEY `status` (`status`),
  ADD KEY `sequence` (`sequence`),
  ADD KEY `parent_cat_id` (`parent_cat_id`);

--
-- Indexes for table `mt_client`
--
ALTER TABLE `mt_client`
  ADD PRIMARY KEY (`client_id`),
  ADD KEY `social_strategy` (`social_strategy`),
  ADD KEY `email_address` (`email_address`),
  ADD KEY `password` (`password`),
  ADD KEY `street` (`street`),
  ADD KEY `city` (`city`),
  ADD KEY `state` (`state`),
  ADD KEY `contact_phone` (`contact_phone`),
  ADD KEY `lost_password_token` (`lost_password_token`),
  ADD KEY `status` (`status`),
  ADD KEY `token` (`token`),
  ADD KEY `mobile_verification_code` (`mobile_verification_code`),
  ADD KEY `is_guest` (`is_guest`),
  ADD KEY `email_verification_code` (`email_verification_code`);

--
-- Indexes for table `mt_client_cc`
--
ALTER TABLE `mt_client_cc`
  ADD PRIMARY KEY (`cc_id`),
  ADD KEY `client_id` (`client_id`);

--
-- Indexes for table `mt_cooking_ref`
--
ALTER TABLE `mt_cooking_ref`
  ADD PRIMARY KEY (`cook_id`),
  ADD KEY `merchant_id` (`merchant_id`),
  ADD KEY `cooking_name` (`cooking_name`),
  ADD KEY `sequence` (`sequence`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `mt_cuisine`
--
ALTER TABLE `mt_cuisine`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cuisine_name` (`cuisine_name`),
  ADD KEY `sequence` (`sequence`);

--
-- Indexes for table `mt_currency`
--
ALTER TABLE `mt_currency`
  ADD PRIMARY KEY (`currency_code`),
  ADD KEY `currency_symbol` (`currency_symbol`),
  ADD KEY `currency_code` (`currency_code`);

--
-- Indexes for table `mt_custom_page`
--
ALTER TABLE `mt_custom_page`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slug_name` (`slug_name`);

--
-- Indexes for table `mt_dishes`
--
ALTER TABLE `mt_dishes`
  ADD PRIMARY KEY (`dish_id`),
  ADD KEY `dish_name` (`dish_name`);

--
-- Indexes for table `mt_email_logs`
--
ALTER TABLE `mt_email_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `user_type` (`user_type`),
  ADD KEY `merchant_id` (`merchant_id`),
  ADD KEY `module_type` (`module_type`),
  ADD KEY `email_address` (`email_address`);

--
-- Indexes for table `mt_fax_broadcast`
--
ALTER TABLE `mt_fax_broadcast`
  ADD PRIMARY KEY (`id`),
  ADD KEY `merchant_id` (`merchant_id`);

--
-- Indexes for table `mt_fax_package`
--
ALTER TABLE `mt_fax_package`
  ADD PRIMARY KEY (`fax_package_id`),
  ADD KEY `title` (`title`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `mt_fax_package_trans`
--
ALTER TABLE `mt_fax_package_trans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mt_ingredients`
--
ALTER TABLE `mt_ingredients`
  ADD PRIMARY KEY (`ingredients_id`),
  ADD KEY `merchant_id` (`merchant_id`),
  ADD KEY `status` (`status`),
  ADD KEY `ingredients_name` (`ingredients_name`);

--
-- Indexes for table `mt_invoice`
--
ALTER TABLE `mt_invoice`
  ADD PRIMARY KEY (`invoice_number`),
  ADD KEY `invoice_token` (`invoice_token`),
  ADD KEY `merchant_id` (`merchant_id`),
  ADD KEY `status` (`status`),
  ADD KEY `date_from` (`date_from`),
  ADD KEY `date_to` (`date_to`),
  ADD KEY `invoice_total` (`invoice_total`);

--
-- Indexes for table `mt_invoice_history`
--
ALTER TABLE `mt_invoice_history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoice_number` (`invoice_number`),
  ADD KEY `payment_status` (`payment_status`);

--
-- Indexes for table `mt_item`
--
ALTER TABLE `mt_item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `merchant_id` (`merchant_id`),
  ADD KEY `item_name` (`item_name`),
  ADD KEY `status` (`status`),
  ADD KEY `is_featured` (`is_featured`),
  ADD KEY `spicydish` (`spicydish`),
  ADD KEY `two_flavors` (`two_flavors`),
  ADD KEY `points_earned` (`points_earned`),
  ADD KEY `points_disabled` (`points_disabled`);

--
-- Indexes for table `mt_item_images`
--
ALTER TABLE `mt_item_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mt_languages`
--
ALTER TABLE `mt_languages`
  ADD PRIMARY KEY (`lang_id`);

--
-- Indexes for table `mt_location_area`
--
ALTER TABLE `mt_location_area`
  ADD PRIMARY KEY (`area_id`),
  ADD KEY `city_id` (`city_id`),
  ADD KEY `sequence` (`sequence`),
  ADD KEY `name` (`name`);

--
-- Indexes for table `mt_location_cities`
--
ALTER TABLE `mt_location_cities`
  ADD PRIMARY KEY (`city_id`),
  ADD KEY `postal_code` (`postal_code`),
  ADD KEY `state_id` (`state_id`),
  ADD KEY `sequence` (`sequence`),
  ADD KEY `name` (`name`);

--
-- Indexes for table `mt_location_countries`
--
ALTER TABLE `mt_location_countries`
  ADD PRIMARY KEY (`country_id`),
  ADD KEY `shortcode` (`shortcode`);

--
-- Indexes for table `mt_location_rate`
--
ALTER TABLE `mt_location_rate`
  ADD PRIMARY KEY (`rate_id`);

--
-- Indexes for table `mt_location_states`
--
ALTER TABLE `mt_location_states`
  ADD PRIMARY KEY (`state_id`),
  ADD KEY `country_id` (`country_id`),
  ADD KEY `sequence` (`sequence`),
  ADD KEY `name` (`name`);

--
-- Indexes for table `mt_merchant`
--
ALTER TABLE `mt_merchant`
  ADD PRIMARY KEY (`id`),
  ADD KEY `restaurant_slug` (`restaurant_slug`),
  ADD KEY `restaurant_name` (`restaurant_name`),
  ADD KEY `post_code` (`post_code`),
  ADD KEY `service` (`service`),
  ADD KEY `username` (`username`),
  ADD KEY `password` (`password`),
  ADD KEY `status` (`status`),
  ADD KEY `package_id` (`package_id`),
  ADD KEY `payment_steps` (`payment_steps`),
  ADD KEY `is_featured` (`is_featured`),
  ADD KEY `is_ready` (`is_ready`),
  ADD KEY `is_sponsored` (`is_sponsored`),
  ADD KEY `is_commission` (`is_commission`),
  ADD KEY `percent_commision` (`percent_commision`),
  ADD KEY `session_token` (`session_token`),
  ADD KEY `commision_type` (`commision_type`),
  ADD KEY `delivery_charges` (`delivery_charges`),
  ADD KEY `merchant_id` (`id`),
  ADD KEY `country_id` (`country_id`),
  ADD KEY `state_id` (`state_id`),
  ADD KEY `city_id` (`city_id`),
  ADD KEY `area_id` (`area_id`),
  ADD KEY `latitude` (`latitude`),
  ADD KEY `lontitude` (`lontitude`),
  ADD KEY `merchant_type` (`merchant_type`),
  ADD KEY `invoice_terms` (`invoice_terms`);

--
-- Indexes for table `mt_merchant_categories`
--
ALTER TABLE `mt_merchant_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mt_merchant_cc`
--
ALTER TABLE `mt_merchant_cc`
  ADD PRIMARY KEY (`mt_id`),
  ADD KEY `merchant_id` (`merchant_id`);

--
-- Indexes for table `mt_merchant_cuisine`
--
ALTER TABLE `mt_merchant_cuisine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mt_merchant_images`
--
ALTER TABLE `mt_merchant_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mt_merchant_meta`
--
ALTER TABLE `mt_merchant_meta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mt_merchant_payment_provider`
--
ALTER TABLE `mt_merchant_payment_provider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mt_merchant_user`
--
ALTER TABLE `mt_merchant_user`
  ADD PRIMARY KEY (`merchant_user_id`),
  ADD KEY `merchant_id` (`merchant_id`),
  ADD KEY `username` (`username`),
  ADD KEY `password` (`password`),
  ADD KEY `status` (`status`),
  ADD KEY `session_token` (`session_token`),
  ADD KEY `mobile_session_token` (`mobile_session_token`),
  ADD KEY `lost_password_code` (`lost_password_code`);

--
-- Indexes for table `mt_minimum_table`
--
ALTER TABLE `mt_minimum_table`
  ADD PRIMARY KEY (`id`),
  ADD KEY `merchant_id` (`merchant_id`);

--
-- Indexes for table `mt_mobile_broadcast`
--
ALTER TABLE `mt_mobile_broadcast`
  ADD PRIMARY KEY (`broadcast_id`);

--
-- Indexes for table `mt_newsletter`
--
ALTER TABLE `mt_newsletter`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email_address` (`email_address`);

--
-- Indexes for table `mt_offers`
--
ALTER TABLE `mt_offers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `merchant_id` (`merchant_id`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `mt_option`
--
ALTER TABLE `mt_option`
  ADD PRIMARY KEY (`id`),
  ADD KEY `merchant_id` (`merchant_id`),
  ADD KEY `option_name` (`option_name`);

--
-- Indexes for table `mt_order`
--
ALTER TABLE `mt_order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `merchant_id` (`merchant_id`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `order_id_token` (`order_id_token`),
  ADD KEY `merchantapp_viewed` (`merchantapp_viewed`),
  ADD KEY `admin_viewed` (`admin_viewed`),
  ADD KEY `viewed` (`viewed`),
  ADD KEY `total_commission` (`total_commission`),
  ADD KEY `merchant_earnings` (`merchant_earnings`),
  ADD KEY `total_w_tax` (`total_w_tax`),
  ADD KEY `taxable_total` (`taxable_total`),
  ADD KEY `sub_total` (`sub_total`),
  ADD KEY `payment_type` (`payment_type`),
  ADD KEY `trans_type` (`trans_type`);

--
-- Indexes for table `mt_order_delivery_address`
--
ALTER TABLE `mt_order_delivery_address`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `google_lat` (`google_lat`),
  ADD KEY `google_lng` (`google_lng`);

--
-- Indexes for table `mt_order_details`
--
ALTER TABLE `mt_order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `item_id` (`item_id`);

--
-- Indexes for table `mt_order_history`
--
ALTER TABLE `mt_order_history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `status` (`status`),
  ADD KEY `task_id` (`task_id`),
  ADD KEY `driver_id` (`driver_id`),
  ADD KEY `driver_location_lat` (`driver_location_lat`),
  ADD KEY `driver_location_lng` (`driver_location_lng`);

--
-- Indexes for table `mt_order_sms`
--
ALTER TABLE `mt_order_sms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `session` (`session`),
  ADD KEY `code` (`code`);

--
-- Indexes for table `mt_order_status`
--
ALTER TABLE `mt_order_status`
  ADD PRIMARY KEY (`stats_id`),
  ADD KEY `merchant_id` (`merchant_id`);

--
-- Indexes for table `mt_packages`
--
ALTER TABLE `mt_packages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `title` (`title`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `mt_package_trans`
--
ALTER TABLE `mt_package_trans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `package_id` (`package_id`),
  ADD KEY `merchant_id` (`merchant_id`),
  ADD KEY `TRANSACTIONID` (`TRANSACTIONID`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `mt_payment_order`
--
ALTER TABLE `mt_payment_order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `payment_type` (`payment_type`),
  ADD KEY `payment_reference` (`payment_reference`);

--
-- Indexes for table `mt_payment_provider`
--
ALTER TABLE `mt_payment_provider`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payment_name` (`payment_name`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `mt_paypal_checkout`
--
ALTER TABLE `mt_paypal_checkout`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `token` (`token`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `mt_paypal_payment`
--
ALTER TABLE `mt_paypal_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mt_rating`
--
ALTER TABLE `mt_rating`
  ADD PRIMARY KEY (`id`),
  ADD KEY `merchant_id` (`merchant_id`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `ratings` (`ratings`);

--
-- Indexes for table `mt_rating_meaning`
--
ALTER TABLE `mt_rating_meaning`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mt_receive_post`
--
ALTER TABLE `mt_receive_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mt_review`
--
ALTER TABLE `mt_review`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `merchant_id` (`merchant_id`),
  ADD KEY `rating` (`rating`),
  ADD KEY `status` (`status`),
  ADD KEY `parent_id` (`parent_id`);

--
-- Indexes for table `mt_shipping_rate`
--
ALTER TABLE `mt_shipping_rate`
  ADD PRIMARY KEY (`id`),
  ADD KEY `merchant_id` (`merchant_id`);

--
-- Indexes for table `mt_size`
--
ALTER TABLE `mt_size`
  ADD PRIMARY KEY (`id`),
  ADD KEY `merchant_id` (`merchant_id`),
  ADD KEY `size_name` (`size_name`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `mt_sms_broadcast`
--
ALTER TABLE `mt_sms_broadcast`
  ADD PRIMARY KEY (`broadcast_id`),
  ADD KEY `merchant_id` (`merchant_id`),
  ADD KEY `send_to` (`send_to`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `mt_sms_broadcast_details`
--
ALTER TABLE `mt_sms_broadcast_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `merchant_id` (`merchant_id`),
  ADD KEY `broadcast_id` (`broadcast_id`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `status` (`status`),
  ADD KEY `gateway` (`gateway`);

--
-- Indexes for table `mt_sms_package`
--
ALTER TABLE `mt_sms_package`
  ADD PRIMARY KEY (`sms_package_id`);

--
-- Indexes for table `mt_sms_package_trans`
--
ALTER TABLE `mt_sms_package_trans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cc_id` (`cc_id`),
  ADD KEY `merchant_id` (`merchant_id`),
  ADD KEY `sms_package_id` (`sms_package_id`),
  ADD KEY `payment_type` (`payment_type`);

--
-- Indexes for table `mt_stripe_logs`
--
ALTER TABLE `mt_stripe_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mt_subcategory`
--
ALTER TABLE `mt_subcategory`
  ADD PRIMARY KEY (`subcat_id`),
  ADD KEY `merchant_id` (`merchant_id`),
  ADD KEY `subcategory_name` (`subcategory_name`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `mt_subcategory_item`
--
ALTER TABLE `mt_subcategory_item`
  ADD PRIMARY KEY (`sub_item_id`),
  ADD KEY `merchant_id` (`merchant_id`),
  ADD KEY `sub_item_name` (`sub_item_name`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `mt_voucher`
--
ALTER TABLE `mt_voucher`
  ADD PRIMARY KEY (`id`),
  ADD KEY `voucher_name` (`voucher_name`),
  ADD KEY `merchant_id` (`merchant_id`),
  ADD KEY `voucher_type` (`voucher_type`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `mt_voucher_list`
--
ALTER TABLE `mt_voucher_list`
  ADD PRIMARY KEY (`voucher_id`),
  ADD KEY `voucher_code` (`voucher_code`),
  ADD KEY `status` (`status`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `date_used` (`date_used`);

--
-- Indexes for table `mt_voucher_new`
--
ALTER TABLE `mt_voucher_new`
  ADD PRIMARY KEY (`id`),
  ADD KEY `voucher_name` (`voucher_name`),
  ADD KEY `status` (`status`),
  ADD KEY `voucher_owner` (`voucher_owner`),
  ADD KEY `merchant_id` (`merchant_id`),
  ADD KEY `voucher_type` (`voucher_type`);

--
-- Indexes for table `mt_withdrawal`
--
ALTER TABLE `mt_withdrawal`
  ADD PRIMARY KEY (`withdrawal_id`),
  ADD KEY `merchant_id` (`merchant_id`),
  ADD KEY `payment_type` (`payment_type`),
  ADD KEY `payment_method` (`payment_method`),
  ADD KEY `status` (`status`),
  ADD KEY `viewed` (`viewed`);

--
-- Indexes for table `mt_zipcode`
--
ALTER TABLE `mt_zipcode`
  ADD PRIMARY KEY (`zipcode_id`),
  ADD KEY `country_code` (`country_code`),
  ADD KEY `area` (`area`),
  ADD KEY `stree_name` (`stree_name`);

--
-- Indexes for table `sub_modules`
--
ALTER TABLE `sub_modules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `mt_address_book`
--
ALTER TABLE `mt_address_book`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_admin_user`
--
ALTER TABLE `mt_admin_user`
  MODIFY `admin_id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `mt_advertisement`
--
ALTER TABLE `mt_advertisement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `mt_bank_deposit`
--
ALTER TABLE `mt_bank_deposit`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_barclay_trans`
--
ALTER TABLE `mt_barclay_trans`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `mt_bookingtable`
--
ALTER TABLE `mt_bookingtable`
  MODIFY `booking_id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_bookingtable_history`
--
ALTER TABLE `mt_bookingtable_history`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_category`
--
ALTER TABLE `mt_category`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `mt_client`
--
ALTER TABLE `mt_client`
  MODIFY `client_id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `mt_client_cc`
--
ALTER TABLE `mt_client_cc`
  MODIFY `cc_id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_cooking_ref`
--
ALTER TABLE `mt_cooking_ref`
  MODIFY `cook_id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `mt_cuisine`
--
ALTER TABLE `mt_cuisine`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `mt_custom_page`
--
ALTER TABLE `mt_custom_page`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_dishes`
--
ALTER TABLE `mt_dishes`
  MODIFY `dish_id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `mt_email_logs`
--
ALTER TABLE `mt_email_logs`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `mt_fax_broadcast`
--
ALTER TABLE `mt_fax_broadcast`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_fax_package`
--
ALTER TABLE `mt_fax_package`
  MODIFY `fax_package_id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_fax_package_trans`
--
ALTER TABLE `mt_fax_package_trans`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_ingredients`
--
ALTER TABLE `mt_ingredients`
  MODIFY `ingredients_id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_invoice`
--
ALTER TABLE `mt_invoice`
  MODIFY `invoice_number` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_invoice_history`
--
ALTER TABLE `mt_invoice_history`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_item`
--
ALTER TABLE `mt_item`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `mt_item_images`
--
ALTER TABLE `mt_item_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `mt_languages`
--
ALTER TABLE `mt_languages`
  MODIFY `lang_id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_location_area`
--
ALTER TABLE `mt_location_area`
  MODIFY `area_id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_location_cities`
--
ALTER TABLE `mt_location_cities`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_location_countries`
--
ALTER TABLE `mt_location_countries`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;
--
-- AUTO_INCREMENT for table `mt_location_rate`
--
ALTER TABLE `mt_location_rate`
  MODIFY `rate_id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_location_states`
--
ALTER TABLE `mt_location_states`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_merchant`
--
ALTER TABLE `mt_merchant`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `mt_merchant_categories`
--
ALTER TABLE `mt_merchant_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_merchant_cc`
--
ALTER TABLE `mt_merchant_cc`
  MODIFY `mt_id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_merchant_cuisine`
--
ALTER TABLE `mt_merchant_cuisine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `mt_merchant_images`
--
ALTER TABLE `mt_merchant_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `mt_merchant_meta`
--
ALTER TABLE `mt_merchant_meta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT for table `mt_merchant_payment_provider`
--
ALTER TABLE `mt_merchant_payment_provider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `mt_merchant_user`
--
ALTER TABLE `mt_merchant_user`
  MODIFY `merchant_user_id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_minimum_table`
--
ALTER TABLE `mt_minimum_table`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_mobile_broadcast`
--
ALTER TABLE `mt_mobile_broadcast`
  MODIFY `broadcast_id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_newsletter`
--
ALTER TABLE `mt_newsletter`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_offers`
--
ALTER TABLE `mt_offers`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `mt_option`
--
ALTER TABLE `mt_option`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=933;
--
-- AUTO_INCREMENT for table `mt_order`
--
ALTER TABLE `mt_order`
  MODIFY `order_id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_order_delivery_address`
--
ALTER TABLE `mt_order_delivery_address`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_order_details`
--
ALTER TABLE `mt_order_details`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `mt_order_history`
--
ALTER TABLE `mt_order_history`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_order_sms`
--
ALTER TABLE `mt_order_sms`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_order_status`
--
ALTER TABLE `mt_order_status`
  MODIFY `stats_id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `mt_packages`
--
ALTER TABLE `mt_packages`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `mt_package_trans`
--
ALTER TABLE `mt_package_trans`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_payment_order`
--
ALTER TABLE `mt_payment_order`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_payment_provider`
--
ALTER TABLE `mt_payment_provider`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `mt_paypal_checkout`
--
ALTER TABLE `mt_paypal_checkout`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_paypal_payment`
--
ALTER TABLE `mt_paypal_payment`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_rating`
--
ALTER TABLE `mt_rating`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_rating_meaning`
--
ALTER TABLE `mt_rating_meaning`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `mt_receive_post`
--
ALTER TABLE `mt_receive_post`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_review`
--
ALTER TABLE `mt_review`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `mt_shipping_rate`
--
ALTER TABLE `mt_shipping_rate`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_size`
--
ALTER TABLE `mt_size`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `mt_sms_broadcast`
--
ALTER TABLE `mt_sms_broadcast`
  MODIFY `broadcast_id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_sms_broadcast_details`
--
ALTER TABLE `mt_sms_broadcast_details`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_sms_package`
--
ALTER TABLE `mt_sms_package`
  MODIFY `sms_package_id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_sms_package_trans`
--
ALTER TABLE `mt_sms_package_trans`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_stripe_logs`
--
ALTER TABLE `mt_stripe_logs`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_subcategory`
--
ALTER TABLE `mt_subcategory`
  MODIFY `subcat_id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `mt_subcategory_item`
--
ALTER TABLE `mt_subcategory_item`
  MODIFY `sub_item_id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `mt_voucher`
--
ALTER TABLE `mt_voucher`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `mt_voucher_list`
--
ALTER TABLE `mt_voucher_list`
  MODIFY `voucher_id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_voucher_new`
--
ALTER TABLE `mt_voucher_new`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `mt_withdrawal`
--
ALTER TABLE `mt_withdrawal`
  MODIFY `withdrawal_id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mt_zipcode`
--
ALTER TABLE `mt_zipcode`
  MODIFY `zipcode_id` int(14) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sub_modules`
--
ALTER TABLE `sub_modules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
