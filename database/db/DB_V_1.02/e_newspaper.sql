-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2016 at 09:38 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `e_newspaper`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_table`
--

CREATE TABLE IF NOT EXISTS `add_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `add_title` varchar(255) NOT NULL,
  `add_image` varchar(255) NOT NULL,
  `status` int(5) NOT NULL,
  `position` int(5) NOT NULL,
  `back_link` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL,
  `updated_by` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `add_table`
--

INSERT INTO `add_table` (`id`, `add_title`, `add_image`, `status`, `position`, `back_link`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'sdfdsaf', '1470569384.jpg', 1, 1, 'sdfa', '2016-08-07 05:29:11', 0, '2016-08-07 05:29:11', 0),
(2, 'sdfdsaf', '1470572893.jpg', 1, 2, 'home', '2016-08-07 05:29:44', 0, '2016-08-07 06:28:13', 0);

-- --------------------------------------------------------

--
-- Table structure for table `breaking_news`
--

CREATE TABLE IF NOT EXISTS `breaking_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `news_id` int(11) NOT NULL,
  `news_title` varchar(250) NOT NULL,
  `news_icon` varchar(150) NOT NULL,
  `back_link` varchar(250) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL,
  `updated_by` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `breaking_news`
--

INSERT INTO `breaking_news` (`id`, `news_id`, `news_title`, `news_icon`, `back_link`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(6, 57, 'obydul', '1470552004.jpg', 'dfgfdg', 0, '2016-08-07 00:40:04', 0, '2016-08-07 00:40:04', 0),
(7, 57, 'পদবঞ্চিতদের অপেক্ষার পরামর্শ মির্জা ফখরুলের', '', 'dsfdsa', 0, '2016-08-08 06:06:20', 0, '2016-08-08 06:06:20', 0),
(8, 57, 'অলিম্পিকে ফেলপসের স্বর্ণ জয়', '', 'dfgfdg', 0, '2016-08-08 06:06:46', 0, '2016-08-08 06:06:46', 0),
(9, 57, 'ইতিহাস গড়ে জিমন্যাস্টের মূলপর্বে বাঙালি মেয়ে দীপা', '', 'dfgfdg', 0, '2016-08-08 06:06:58', 0, '2016-08-08 06:06:58', 0),
(10, 57, 'গাজীপুরে স্বামী হত্যার দায়ে স্ত্রীর ফাঁসির আদেশ', '', 'dfgfdg', 0, '2016-08-08 06:07:10', 0, '2016-08-08 06:07:10', 0),
(11, 57, 'যুদ্ধাপরাধ: ময়মনসিংহে ৬ জনের বিরুদ্ধে গ্রেফতারি পরোয়ানা', '', 'dfgfdg', 0, '2016-08-08 06:07:23', 0, '2016-08-08 06:07:23', 0),
(12, 57, 'গাজীপুরে স্বামী হত্যার দায়ে স্ত্রীর ফাঁসির আদেশ', '', 'http://localhost:8000/news-details/57a5b91dae94e', 0, '2016-08-08 06:07:41', 0, '2016-08-08 23:28:30', 0),
(13, 57, 'ভারতের ৩১ শতাংশ মন্ত্রী ফৌজদারি মামলায় অভিযুক্ত', '', 'http://localhost:8000/news-details/57a5b91dae94e', 1, '2016-08-08 06:07:52', 0, '2016-08-08 23:28:24', 0),
(14, 57, 'ম্যাচ পাতানোর অভিযোগে দক্ষিণ আফ্রিকার চার ক্রিকেটার নিষিদ্ধ', '', 'http://localhost:8000/news-details/57a5b95d9941d', 1, '2016-08-08 06:08:14', 0, '2016-08-08 23:27:45', 0);

-- --------------------------------------------------------

--
-- Table structure for table `image_table`
--

CREATE TABLE IF NOT EXISTS `image_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `news_id` varchar(150) NOT NULL,
  `image` varchar(250) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `image_table`
--

INSERT INTO `image_table` (`id`, `news_id`, `image`, `status`) VALUES
(1, '57a0772e9186b', '1470133000.jpg', 0),
(2, '57a083e2a06ba', '1470133000.jpg', 0),
(3, '57a19c5c9b324', '1470133000.jpg', 0),
(4, '57a08547316eb', '1470137671.jpg', 0),
(5, '57a588884e0db', '1470466184.jpg', 0),
(6, '57a58acfe3510', '1470466768.jpg', 0),
(7, '57a58bf14483e', '1470467057.jpg', 0),
(8, '57a58c5db1f09', '1470467165.jpg', 0),
(9, '57a5b70e1b13d', '1470478094.jpg', 0),
(10, '57a5b8e0bd1c8', '1470478560.jpg', 0),
(11, '57a5b91dae94e', '1470478621.jpg', 0),
(12, '57a5b95d9941d', '1470478685.jpg', 0),
(13, '57a5b99c5e133', '1470478748.jpg', 0),
(14, '57a5ba1b32ae1', '1470478875.jpg', 0),
(15, '57a5ba4f91e4d', '1470478927.jpg', 0),
(16, '57a5ba949d99b', '1470478996.jpg', 0),
(17, '57a5bacc922cb', '1470479052.jpg', 0),
(18, '57a5bb0661aa5', '1470479110.jpg', 0),
(19, '57a5bea3e53df', '1470480035.jpg', 0),
(20, '57a5becff3c5f', '1470480080.jpg', 0),
(21, '57a6d4b1e57bc', '1470551217.jpg', 0),
(22, '57a712dbec603', '1470567132.jpg', 0),
(23, '57a814d909d06', '1470633177.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `kryptonit3_counter_page`
--

CREATE TABLE IF NOT EXISTS `kryptonit3_counter_page` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `page` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `kryptonit3_counter_page_page_unique` (`page`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `kryptonit3_counter_page`
--

INSERT INTO `kryptonit3_counter_page` (`id`, `page`) VALUES
(1, '104a152d-7ac9-55b9-9079-f261a5b33f5d'),
(3, '169974bc-527c-5530-a0eb-8263e62b3d8d'),
(6, '450c67f2-40d1-5156-a2e2-fdc7c3860733'),
(4, '4b465db1-cbc8-5b21-94be-61d08132071a'),
(2, 'a3012283-3d72-514e-abbd-9fc45d1eb1e5'),
(7, 'a32ae361-027d-58ca-ae1a-5f274aa2f3ef'),
(5, 'd90558a2-1481-52d4-9f5d-473fcc8033ba');

-- --------------------------------------------------------

--
-- Table structure for table `kryptonit3_counter_page_visitor`
--

CREATE TABLE IF NOT EXISTS `kryptonit3_counter_page_visitor` (
  `page_id` bigint(20) unsigned NOT NULL,
  `visitor_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NOT NULL,
  KEY `kryptonit3_counter_page_visitor_page_id_index` (`page_id`),
  KEY `kryptonit3_counter_page_visitor_visitor_id_index` (`visitor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kryptonit3_counter_page_visitor`
--

INSERT INTO `kryptonit3_counter_page_visitor` (`page_id`, `visitor_id`, `created_at`) VALUES
(1, 1, '2016-08-09 00:19:43'),
(2, 1, '2016-08-09 00:53:15'),
(3, 1, '2016-08-09 00:22:27'),
(4, 1, '2016-08-09 01:13:36'),
(5, 1, '2016-08-09 00:57:32'),
(6, 1, '2016-08-09 00:59:30'),
(7, 1, '2016-08-09 01:13:46');

-- --------------------------------------------------------

--
-- Table structure for table `kryptonit3_counter_visitor`
--

CREATE TABLE IF NOT EXISTS `kryptonit3_counter_visitor` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `visitor` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `kryptonit3_counter_visitor_visitor_unique` (`visitor`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `kryptonit3_counter_visitor`
--

INSERT INTO `kryptonit3_counter_visitor` (`id`, `visitor`) VALUES
(1, 'd73681888a26a769e1c4424673392f2c6ffd8919ecca222453866dd95c09632b');

-- --------------------------------------------------------

--
-- Table structure for table `main_category`
--

CREATE TABLE IF NOT EXISTS `main_category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL COMMENT 'value 1 show top and value 0 show down',
  `view_status` int(11) NOT NULL COMMENT 'home page yes equl 1 and no eql 0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=24 ;

--
-- Dumping data for table `main_category`
--

INSERT INTO `main_category` (`id`, `category_name`, `status`, `view_status`) VALUES
(6, 'জাতীয়', 1, 0),
(7, 'আন্তর্জাতিক', 1, 1),
(8, 'খেলা', 1, 1),
(9, 'বিনোদন', 1, 1),
(10, 'চাকুরী', 1, 0),
(11, 'প্রযুক্তি', 1, 0),
(12, 'অর্থনীতি', 1, 0),
(13, 'সম্পর্কের গল', 2, 0),
(14, 'ভিন্নধমী সংবাদ', 1, 0),
(15, 'পারিবারিক সম্পর্ক', 2, 0),
(16, 'শেখা', 2, 0),
(17, 'পেশীয়', 2, 0),
(18, 'ক্যারিয়ার', 0, 1),
(19, 'ভ্রমনের', 0, 0),
(20, 'ফ্যাশন', 1, 0),
(21, 'সফলের কাহিনী', 0, 0),
(22, 'একাডেমী', 0, 0),
(23, 'home', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_07_23_095256_main_catagory', 2),
('2016_07_23_100229_sub_category', 2),
('2016_07_25_060344_Slider_image_table', 3),
('2015_06_21_181359_create_kryptonit3_counter_page_table', 4),
('2015_06_21_193003_create_kryptonit3_counter_visitor_table', 4),
('2015_06_21_193059_create_kryptonit3_counter_page_visitor_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `news_table`
--

CREATE TABLE IF NOT EXISTS `news_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `news_id` varchar(150) NOT NULL,
  `main_category` int(11) NOT NULL,
  `sub_category` int(11) NOT NULL,
  `news_title` varchar(150) NOT NULL,
  `short_details` varchar(200) NOT NULL,
  `full_details` text NOT NULL,
  `status` int(11) NOT NULL,
  `position` int(11) NOT NULL,
  `selected_news` int(11) NOT NULL,
  `hite_count` int(11) NOT NULL,
  `created_at` timestamp NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL,
  `updated_by` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `news_table`
--

INSERT INTO `news_table` (`id`, `news_id`, `main_category`, `sub_category`, `news_title`, `short_details`, `full_details`, `status`, `position`, `selected_news`, `hite_count`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, '57a5b70e1b13d', 6, 2, 'আটক জঙ্গিরা বলে, ‘মেরে ফেলেন, জান্নাতে যাব’: আইজিপি', '<p>পুলিশের মহাপরিদর্শক (আইজিপি) এ কে এম শহীদুল হক বলেছেন, আটক জঙ্গিদের কাছ থেকে তেমন কোনো তথ্য পাও', '<p>পুলিশের মহাপরিদর্শক (আইজিপি) এ কে এম শহীদুল হক বলেছেন, আটক জঙ্গিদের কাছ থেকে তেমন কোনো তথ্য পাওয়া যায় না। কোনো জঙ্গিকে আটক করলে বলে, &lsquo;আমাকে মেরে ফেলেন। আমি জান্নাতে যাব।&rsquo;<br />\r\n<br />\r\nআজ শনিবার জাতীয় প্রেসক্লাবে এক আলোচনা সভায় এ কথা জানিয়ে ধর্মের ভুল ব্যাখ্যা থেকে তরুণসমাজকে বাঁচাতে আলেমসমাজের প্রতি আহ্বান জানান আইজিপি।<br />\r\n<br />\r\nশহীদুল হক বলেন, একটি দেশে অন্য কোনো ধর্মের মানুষ থাকতে পারবে না&mdash;এটি অপপ্রচার। ইসলামি ব্যক্তি, আলেমসমাজ, মাদ্রাসার শিক্ষকদের এ ধরনের অপপ্রচার বন্ধে কাজ করতে হবে।<br />\r\n<br />\r\nআইজিপি বলেন, জঙ্গিবাদ কোনো স্থানীয় সমস্যা না। এটি একটি বৈশ্বিক সমস্যা। জঙ্গিরা মানবতার ওপর আঘাত হানে আর ব্লগাররা ধর্ম নিয়ে কটাক্ষ করে।<br />\r\n<br />\r\nগত মঙ্গলবার রাজধানীর গুলশান, কল্যাণপুর ও শোলাকিয়া হামলার &lsquo;মাস্টারমাইন্ড&rsquo; তামিম চৌধুরী ও ব্লগার হত্যায় সন্দেহভাজন চাকরিচ্যুত সেনা কর্মকর্তা জিয়াউল হককে ধরিয়ে দিলে ২০ লাখ টাকা করে পুরস্কার দেওয়া হবে বলে ঘোষণা দেন আইজিপি। সে কথা মনে করিয়ে দিয়ে তিনি বলেন, তামিম ও জিয়া যেখানেই থাকুক, কেউ দেখলে বা সন্ধান পেলে যেন সরাসরি পুলিশকে জানায়। প্রয়োজনে তাঁর (আইজিপি) সঙ্গে যোগাযোগ করে তথ্যদাতাকে নিরাপত্তা দেওয়া হবে। পরিচয় গোপন রাখা হবে।</p>\r\n\r\n<div class="fb-quote fb_iframe_widget" style="padding: 0px; margin: 0px; outline: 0px; display: inline-block; position: absolute; overflow: hidden; left: 490px; top: 418px;"><iframe frameborder="0" height="1000px" name="f8a6fbde84fd78" scrolling="no" src="https://www.facebook.com/v2.5/plugins/quote.php?app_id=1499138263726489&amp;channel=http%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FLcj5EtQ5qmD.js%3Fversion%3D42%23cb%3Df3c06145d33d0cc%26domain%3Dwww.prothom-alo.com%26origin%3Dhttp%253A%252F%252Fwww.prothom-alo.com%252Ff1b82dfb9a6fa58%26relation%3Dparent.parent&amp;container_width=1332&amp;href=http%3A%2F%2Fwww.prothom-alo.com%2Fbangladesh%2Farticle%2F937555%2F%25E0%25A6%2586%25E0%25A6%259F%25E0%25A6%2595-%25E0%25A6%259C%25E0%25A6%2599%25E0%25A7%258D%25E0%25A6%2597%25E0%25A6%25BF%25E0%25A6%25B0%25E0%25A6%25BE-%25E0%25A6%25AC%25E0%25A6%25B2%25E0%25A7%2587-%25E2%2580%2598%25E0%25A6%25AE%25E0%25A7%2587%25E0%25A6%25B0%25E0%25A7%2587-%25E0%25A6%25AB%25E0%25A7%2587%25E0%25A6%25B2%25E0%25A7%2587%25E0%25A6%25A8-%25E0%25A6%259C%25E0%25A6%25BE%25E0%25A6%25A8%25E0%25A7%258D%25E0%25A6%25A8%25E0%25A6%25BE%25E0%25A6%25A4%25E0%25A7%2587-%25E0%25A6%25AF%25E0%25A6%25BE%25E0%25A6%25AC%25E2%2580%2599-%25E0%25A6%2586%25E0%25A6%2587%25E0%25A6%259C%25E0%25A6%25BF%25E0%25A6%25AA%25E0%25A6%25BF&amp;locale=en_US&amp;sdk=joey" style="padding: 0px; margin: 0px; outline: 0px; border-width: initial; border-style: none; position: absolute; visibility: visible; width: 0px; height: 0px;" title="fb:quote Facebook Social Plugin" width="1000px"></iframe></div>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><br />\r\nরাজধানীর গুলশান ও কিশোরগঞ্জের শোলাকিয়ায় হামলার পরে জঙ্গিদের বিরুদ্ধে মানুষের সচেতনতা সৃষ্টি হয়েছে বলে জানান আইজিপি। যে যে অবস্থানে আছে, সেখান থেকে জঙ্গিদের প্রতিহত করার আহ্বান জানান তিনি।</p>\r\n\r\n<p><br />\r\n&lsquo;আমার কাগজ&rsquo; নামের একটি দৈনিক পত্রিকার ১৪ বছর পূর্তি উপলক্ষে ওই আলোচনা সভার আয়োজন করা হয়। &lsquo;জঙ্গিবাদ সন্ত্রাস দমন: কমিউনিটি পুলিশিং ও গণমাধ্যমের ভূমিকা&rsquo; শীর্ষক আলোচনা সভায় মূল বক্তব্য দেন সাংবাদিক আশফাকুজ্জামান। এতে অংশ নেন তথ্য ও যোগাযোগপ্রযুক্তি বিভাগের সচিব শ্যামসুন্দর শিকদার, তথ্য অধিদপ্তরের প্রধান তথ্য কর্মকর্তা এ কে এম শামীম চৌধুরী, একুশে টিভির নির্বাহী সম্পাদক ও বাংলাদেশ ফেডারেল সাংবাদিক ইউনিয়ন বিএফইউজের (একাংশ) সভাপতি মনজুরুল আহসান বুলবুল প্রমুখ।</p>\r\n', 0, 0, 0, 14, '2016-08-06 04:08:14', 0, '2016-08-06 04:08:14', 0),
(3, '57a5b91dae94e', 6, 2, 'উত্তরায় সেনা কর্মকর্তার মা খুন হওয়ার রহস্য উদ্‌ঘাটন', '<p>রাজধানীর উত্তরায় সেনা কর্মকর্তার মাকে গলা কেটে হত্যার ঘটনায় জড়িত থাকার অভিযোগে দুজনকে গ্রেপ', '<p>রাজধানীর উত্তরায় সেনা কর্মকর্তার মাকে গলা কেটে হত্যার ঘটনায় জড়িত থাকার অভিযোগে দুজনকে গ্রেপ্তার করা হয়েছে বলে জানিয়েছে র&zwj;্যাপিড অ্যাকশন ব্যাটালিয়ন (র&zwj;্যাব)। আজ শনিবার এ হত্যার রহস্য উদ্&zwnj;ঘাটিত হয়েছে বলে র&zwj;্যাবের পক্ষ থেকে জানানো হয়।</p>\r\n\r\n<div class="fb-quote fb_iframe_widget" style="padding: 0px; margin: 0px; outline: 0px; display: inline-block; position: absolute; overflow: hidden; left: 306.5px; top: 418px;"><iframe frameborder="0" height="1000px" name="f344da6f60cbe24" scrolling="no" src="https://www.facebook.com/v2.5/plugins/quote.php?app_id=1499138263726489&amp;channel=http%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FLcj5EtQ5qmD.js%3Fversion%3D42%23cb%3Df1a0401f9fad0cc%26domain%3Dwww.prothom-alo.com%26origin%3Dhttp%253A%252F%252Fwww.prothom-alo.com%252Ff15093aab7c8ec8%26relation%3Dparent.parent&amp;container_width=1332&amp;href=http%3A%2F%2Fwww.prothom-alo.com%2Fbangladesh%2Farticle%2F937534%2F%25E0%25A6%2589%25E0%25A6%25A4%25E0%25A7%258D%25E0%25A6%25A4%25E0%25A6%25B0%25E0%25A6%25BE%25E0%25A7%259F-%25E0%25A6%25B8%25E0%25A7%2587%25E0%25A6%25A8%25E0%25A6%25BE-%25E0%25A6%2595%25E0%25A6%25B0%25E0%25A7%258D%25E0%25A6%25AE%25E0%25A6%2595%25E0%25A6%25B0%25E0%25A7%258D%25E0%25A6%25A4%25E0%25A6%25BE%25E0%25A6%25B0-%25E0%25A6%25AE%25E0%25A6%25BE-%25E0%25A6%2596%25E0%25A7%2581%25E0%25A6%25A8-%25E0%25A6%25B9%25E0%25A6%2593%25E0%25A7%259F%25E0%25A6%25BE%25E0%25A6%25B0-%25E0%25A6%25B0%25E0%25A6%25B9%25E0%25A6%25B8%25E0%25A7%258D%25E0%25A6%25AF&amp;locale=en_US&amp;sdk=joey" style="padding: 0px; margin: 0px; outline: 0px; border-width: initial; border-style: none; position: absolute; visibility: visible; width: 0px; height: 0px;" title="fb:quote Facebook Social Plugin" width="1000px"></iframe></div>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>গত ৪ জুন উত্তরায় নিজ বাড়িতে গলা কেটে হত্যা করা হয় মনোয়ারা বেগম নামের ওই বৃদ্ধাকে। তিনি উত্তরার ৯ নম্বর সেক্টরের একটি বাড়িতে একা থাকতেন। তিনি সেনাবাহিনীর লেফটেন্যান্ট কর্নেল খালিদ বিন ইউসুফের মা।<br />\r\nউত্তরায় র&zwj;্যাব-১-এর কার্যালয়ে সেনা কর্মকর্তার মা খুন হওয়ার রহস্য উদ্&zwnj;ঘাটন নিয়ে এক বিফ্রিংয়ের আয়োজন করা হয়। র&zwj;্যাবের পক্ষ থেকে জানানো হয়, উত্তরায় সেনা কর্মকর্তার মা খুন হওয়ার ঘটনায় গোলাম নবী ওরফে নবী (২৫) ও মোছা. লাইলী ওরফে লাবণ্য নামের দুজনকে গ্রেপ্তার করা হয়েছে।</p>\r\n', 0, 0, 0, 6, '2016-08-06 04:17:01', 0, '2016-08-06 04:17:01', 0),
(4, '57a5b95d9941d', 6, 3, 'পরিষেবা নিয়ে গণশুনানি সোমবার', '<p>তথ্য পাওয়া আমার আইনি অধিকার, সেবা পাওয়া আমার নাগরিক অধিকার, দুর্নীতিমুক্ত দেশ আমার সাংবিধানি', '<p>তথ্য পাওয়া আমার আইনি অধিকার, সেবা পাওয়া আমার নাগরিক অধিকার, দুর্নীতিমুক্ত দেশ আমার সাংবিধানিক অধিকার&rsquo; স্লোগান সামনে রেখে শেরপুরের নালিতাবাড়ী উপজেলায় আগামী সোমবার সরকারি আটটি প্রতিষ্ঠানের পরিষেবা নিয়ে গণশুনানি হবে। এতে সাধারণ মানুষের বিভিন্ন প্রশ্নের উত্তর দেবেন সংশ্লিষ্ট কর্মকর্তারা।</p>\r\n\r\n<div class="fb-quote fb_iframe_widget" style="padding: 0px; margin: 0px; outline: 0px; display: inline-block; position: absolute; overflow: hidden; left: 201px; top: 456px;"><iframe frameborder="0" height="1000px" name="f2a7145d3f205f4" scrolling="no" src="https://www.facebook.com/v2.5/plugins/quote.php?app_id=1499138263726489&amp;channel=http%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FLcj5EtQ5qmD.js%3Fversion%3D42%23cb%3Dfa467842af4c0c%26domain%3Dwww.prothom-alo.com%26origin%3Dhttp%253A%252F%252Fwww.prothom-alo.com%252Ff229d5632d66b5c%26relation%3Dparent.parent&amp;container_width=1332&amp;href=http%3A%2F%2Fwww.prothom-alo.com%2Fbangladesh%2Farticle%2F937447%2F%25E0%25A6%25AA%25E0%25A6%25B0%25E0%25A6%25BF%25E0%25A6%25B7%25E0%25A7%2587%25E0%25A6%25AC%25E0%25A6%25BE-%25E0%25A6%25A8%25E0%25A6%25BF%25E0%25A7%259F%25E0%25A7%2587-%25E0%25A6%2597%25E0%25A6%25A3%25E0%25A6%25B6%25E0%25A7%2581%25E0%25A6%25A8%25E0%25A6%25BE%25E0%25A6%25A8%25E0%25A6%25BF-%25E0%25A6%25B8%25E0%25A7%2587%25E0%25A6%25BE%25E0%25A6%25AE%25E0%25A6%25AC%25E0%25A6%25BE%25E0%25A6%25B0&amp;locale=en_US&amp;sdk=joey" style="padding: 0px; margin: 0px; outline: 0px; border-width: initial; border-style: none; position: absolute; visibility: visible; width: 0px; height: 0px;" title="fb:quote Facebook Social Plugin" width="1000px"></iframe></div>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>উপজেলা পরিষদ ও দুর্নীতি প্রতিরোধ কমিটির (দুপ্রক) উপজেলা শাখা সূত্রে জানা গেছে, দুর্নীতি দমন কমিশনের (দুদক) আয়োজনে পৌর শহরের শহীদ মুক্তিযোদ্ধা মঞ্চে সোমবার সকাল ১০টায় গণশুনানি শুরু হবে। উপজেলার ভূমি, হিসাবরক্ষণ, সাব-রেজিস্ট্রি, স্বাস্থ্য ও পরিবারকল্যাণ, পল্লী বিদ্যুৎ সমিতি, প্রকল্প বাস্তবায়ন কর্মকর্তা, সমাজসেবা ও উপজেলা সমবায় কার্যালয়ের পরিষেবা নিয়ে জনগণের সরাসরি প্রশ্নের উত্তর দেবেন সংশ্লিষ্ট কর্মকর্তারা। অনুষ্ঠানে উপস্থিত থাকবেন দুদকের কমিশনার নাছির উদ্দিন আহম্মেদ। সভাপতিত্ব করবেন জেলা প্রশাসক (ডিসি) এ এম পারভেজ রহিম।</p>\r\n', 0, 0, 0, 0, '2016-08-06 04:18:05', 0, '2016-08-06 04:18:05', 0),
(7, '57a5ba4f91e4d', 7, 9, 'পদ্মায় নৌকাডুবির ঘটনায় পাঁচজনের লাশ উদ্ধার', '<p>রাজবাড়ীর কালুখালী উপজেলার কালিকাপুর ইউনিয়নের হরিণবাড়িয়ায় পদ্মা নদীতে নৌকাডুবির ঘটনায় আজ শ', '<p>রাজবাড়ীর কালুখালী উপজেলার কালিকাপুর ইউনিয়নের হরিণবাড়িয়ায় পদ্মা নদীতে নৌকাডুবির ঘটনায় আজ শনিবার সকাল পর্যন্ত দু্ইশিশুসহ পাঁচজনের লাশ উদ্ধার করা হয়েছে। গতকাল শুক্রবার সন্ধ্যায় নৌকাটি ডুবে যায়।</p>\r\n\r\n<div class="fb-quote fb_iframe_widget" style="padding: 0px; margin: 0px; outline: 0px; display: inline-block; position: absolute; overflow: hidden; left: 369px; top: 418px;"><iframe frameborder="0" height="1000px" name="f86f3faedf6f" scrolling="no" src="https://www.facebook.com/v2.5/plugins/quote.php?app_id=1499138263726489&amp;channel=http%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FLcj5EtQ5qmD.js%3Fversion%3D42%23cb%3Df298b2c63ba9498%26domain%3Dwww.prothom-alo.com%26origin%3Dhttp%253A%252F%252Fwww.prothom-alo.com%252Ff357784f6b426c%26relation%3Dparent.parent&amp;container_width=1332&amp;href=http%3A%2F%2Fwww.prothom-alo.com%2Fbangladesh%2Farticle%2F937474%2F%25E0%25A6%25AA%25E0%25A6%25A6%25E0%25A7%258D%25E0%25A6%25AE%25E0%25A6%25BE%25E0%25A7%259F-%25E0%25A6%25A8%25E0%25A7%258C%25E0%25A6%2595%25E0%25A6%25BE%25E0%25A6%25A1%25E0%25A7%2581%25E0%25A6%25AC%25E0%25A6%25BF%25E0%25A6%25B0-%25E0%25A6%2598%25E0%25A6%259F%25E0%25A6%25A8%25E0%25A6%25BE%25E0%25A7%259F-%25E0%25A6%25B6%25E0%25A6%25BF%25E0%25A6%25B6%25E0%25A7%2581%25E0%25A6%25B8%25E0%25A6%25B9-%25E0%25A6%259A%25E0%25A6%25BE%25E0%25A6%25B0%25E0%25A6%259C%25E0%25A6%25A8%25E0%25A7%2587%25E0%25A6%25B0-%25E0%25A6%25B2%25E0%25A6%25BE%25E0%25A6%25B6-%25E0%25A6%2589%25E0%25A6%25A6%25E0%25A7%258D%25E0%25A6%25A7%25E0%25A6%25BE%25E0%25A6%25B0&amp;locale=en_US&amp;sdk=joey" style="padding: 0px; margin: 0px; outline: 0px; border-width: initial; border-style: none; position: absolute; visibility: visible; width: 0px; height: 0px;" title="fb:quote Facebook Social Plugin" width="1000px"></iframe></div>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>যে পাঁচজনের লাশ উদ্ধার করা হয়েছে, তাঁরা হলো চররামনগরের হালিমা বেগম (৪০), তাঁর মেয়ে ফরিদা আক্তার (১৮), সাদারচরের বেগম (৩৫) আলোকবাড়িয়া এলাকার রাজু (৫), তার ভাই রাহুল (১০)।</p>\r\n\r\n<p>প্রত্যক্ষদর্শী ব্যক্তিরা জানান, হরিণবাড়িয়া ঘাট থেকে কিছুটা দূরে ইঞ্জিনচালিত যাত্রীবাহী নৌকাটি ডুবে যায়। এ সময় কাছাকাছি থাকা বনভোজনের একটি ট্রলার কয়েকজনকে উদ্ধার করে। অনেকে সাঁতরে তীরে আসেন। এখন পর্যন্ত প্রায় ৩০ জনকে জীবিত উদ্ধার করা হয়েছে। রাজবাড়ী ফায়ার সার্ভিস ও রাজশাহী থেকে যাওয়া ডুবুরি দল সেখানে উদ্ধারকাজ চালাচ্ছে। নৌকাটি ডুবে যাওয়ার কারণ জানা যায়নি। ইঞ্জিনচালিত নৌকাটি যাত্রী পারাপার করত বলে স্থানীয় লোকজন জানান। সাদারচরের দিকে যাওয়ার সময় নৌকাটি ডুবে যায়।</p>\r\n\r\n<p>উপজেলা নির্বাহী কর্মকর্তা (ইউএনও) কামরুল হাসান ও কালিকাপুর ইউনিয়ন পরিষদের (ইউপি) চেয়ারম্যান আতিয়ার রহমানের ভাষ্য, চারজনের লাশ উদ্ধার করা হয়েছে। অন্যদের লাশ উদ্ধারের চেষ্টা চলছে।</p>\r\n', 0, 0, 0, 0, '2016-08-06 04:22:07', 0, '2016-08-06 04:22:07', 0),
(8, '57a5ba949d99b', 7, 9, 'ত্রাণ দিতে এসেছি রাজনীতি করতে নয় : ওবায়দুল কাদের', '<p>রাজবাড়ীর কালুখালী উপজেলার কালিকাপুর ইউনিয়নের হরিণবাড়িয়ায় পদ্মা নদীতে নৌকাডুবির ঘটনায় আজ শ', '<p>রাজবাড়ীর কালুখালী উপজেলার কালিকাপুর ইউনিয়নের হরিণবাড়িয়ায় পদ্মা নদীতে নৌকাডুবির ঘটনায় আজ শনিবার সকাল পর্যন্ত দু্ইশিশুসহ পাঁচজনের লাশ উদ্ধার করা হয়েছে। গতকাল শুক্রবার সন্ধ্যায় নৌকাটি ডুবে যায়।</p>\r\n\r\n<div class="fb-quote fb_iframe_widget" style="padding: 0px; margin: 0px; outline: 0px; display: inline-block; position: absolute; overflow: hidden; left: 369px; top: 418px;"><iframe frameborder="0" height="1000px" name="f86f3faedf6f" scrolling="no" src="https://www.facebook.com/v2.5/plugins/quote.php?app_id=1499138263726489&amp;channel=http%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FLcj5EtQ5qmD.js%3Fversion%3D42%23cb%3Df298b2c63ba9498%26domain%3Dwww.prothom-alo.com%26origin%3Dhttp%253A%252F%252Fwww.prothom-alo.com%252Ff357784f6b426c%26relation%3Dparent.parent&amp;container_width=1332&amp;href=http%3A%2F%2Fwww.prothom-alo.com%2Fbangladesh%2Farticle%2F937474%2F%25E0%25A6%25AA%25E0%25A6%25A6%25E0%25A7%258D%25E0%25A6%25AE%25E0%25A6%25BE%25E0%25A7%259F-%25E0%25A6%25A8%25E0%25A7%258C%25E0%25A6%2595%25E0%25A6%25BE%25E0%25A6%25A1%25E0%25A7%2581%25E0%25A6%25AC%25E0%25A6%25BF%25E0%25A6%25B0-%25E0%25A6%2598%25E0%25A6%259F%25E0%25A6%25A8%25E0%25A6%25BE%25E0%25A7%259F-%25E0%25A6%25B6%25E0%25A6%25BF%25E0%25A6%25B6%25E0%25A7%2581%25E0%25A6%25B8%25E0%25A6%25B9-%25E0%25A6%259A%25E0%25A6%25BE%25E0%25A6%25B0%25E0%25A6%259C%25E0%25A6%25A8%25E0%25A7%2587%25E0%25A6%25B0-%25E0%25A6%25B2%25E0%25A6%25BE%25E0%25A6%25B6-%25E0%25A6%2589%25E0%25A6%25A6%25E0%25A7%258D%25E0%25A6%25A7%25E0%25A6%25BE%25E0%25A6%25B0&amp;locale=en_US&amp;sdk=joey" style="padding: 0px; margin: 0px; outline: 0px; border-width: initial; border-style: none; position: absolute; visibility: visible; width: 0px; height: 0px;" title="fb:quote Facebook Social Plugin" width="1000px"></iframe></div>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>যে পাঁচজনের লাশ উদ্ধার করা হয়েছে, তাঁরা হলো চররামনগরের হালিমা বেগম (৪০), তাঁর মেয়ে ফরিদা আক্তার (১৮), সাদারচরের বেগম (৩৫) আলোকবাড়িয়া এলাকার রাজু (৫), তার ভাই রাহুল (১০)।</p>\r\n\r\n<p>প্রত্যক্ষদর্শী ব্যক্তিরা জানান, হরিণবাড়িয়া ঘাট থেকে কিছুটা দূরে ইঞ্জিনচালিত যাত্রীবাহী নৌকাটি ডুবে যায়। এ সময় কাছাকাছি থাকা বনভোজনের একটি ট্রলার কয়েকজনকে উদ্ধার করে। অনেকে সাঁতরে তীরে আসেন। এখন পর্যন্ত প্রায় ৩০ জনকে জীবিত উদ্ধার করা হয়েছে। রাজবাড়ী ফায়ার সার্ভিস ও রাজশাহী থেকে যাওয়া ডুবুরি দল সেখানে উদ্ধারকাজ চালাচ্ছে। নৌকাটি ডুবে যাওয়ার কারণ জানা যায়নি। ইঞ্জিনচালিত নৌকাটি যাত্রী পারাপার করত বলে স্থানীয় লোকজন জানান। সাদারচরের দিকে যাওয়ার সময় নৌকাটি ডুবে যায়।</p>\r\n\r\n<p>উপজেলা নির্বাহী কর্মকর্তা (ইউএনও) কামরুল হাসান ও কালিকাপুর ইউনিয়ন পরিষদের (ইউপি) চেয়ারম্যান আতিয়ার রহমানের ভাষ্য, চারজনের লাশ উদ্ধার করা হয়েছে। অন্যদের লাশ উদ্ধারের চেষ্টা চলছে।</p>\r\n', 0, 0, 0, 2, '2016-08-06 04:23:16', 0, '2016-08-06 04:23:16', 0),
(13, '57a6d4b1e57bc', 8, 11, 'obydul', '<p>sdfadsaf</p>\r\n', '<p>sdfadsaf</p>\r\n', 0, 0, 0, 0, '2016-08-07 00:26:57', 0, '2016-08-07 00:26:57', 0),
(14, '57a712dbec603', 6, 2, 'obydul', '<p>sdafdsf</p>\r\n', '<p>sdafdsf</p>\r\n', 0, 0, 1, 2, '2016-08-07 04:52:11', 0, '2016-08-07 04:52:11', 0),
(15, '57a814d909d06', 7, 8, 'pranto', '<p>sdfdsafdsaf</p>\r\n', '<p>sdfdsafdsaf</p>\r\n', 0, 0, 1, 1, '2016-08-07 23:12:57', 0, '2016-08-07 23:12:57', 0);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `image_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `back_link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL COMMENT 'status 1 display show status 0 display hide',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=57 ;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `image_title`, `image`, `back_link`, `status`) VALUES
(13, 'Dhaka', '1470214865.jpg', 'Dhaka', 0),
(14, 'Dhakadfdg', '1470207488.jpg', 'http://localhost:8000/category-news-details/6', 1),
(15, 'dfdsg', '1469609505.jpg', 'https://laravel.com/docs/4.2/schema', 1),
(17, 'dfdsg', '1469609590.jpg', 'home', 0),
(19, 'iu', '1469609651.jpg', 'sfgds', 0),
(21, 'dfg', '1469609739.jpg', 'fdg', 0),
(23, 'dfg', '1469615533.jpg', 'sdf', 0),
(24, 'dfgfdgfdg', '1469615573.jpg', 'sdfsdf', 0),
(26, 'dfdsg', '1469616214.jpg', 'sdf', 0),
(27, 'dfdsg', '1469616263.jpg', 'sdf', 0),
(28, 'dfgfdgfdg', '1469616276.jpg', 'sdfsda', 0),
(29, 'iu', '1469616675.jpg', 'gfhfgh', 0),
(30, 'iu', '1469616739.jpg', 'gfhfgh', 0),
(31, 'dfg', '1469617373.jpg', 'dfgfdg', 0),
(32, 'dfgdfg', '1469618118.jpg', 'fg', 0),
(33, 'iu', '1469618312.jpg', 'sdf', 0),
(34, 'dfg', '1469619093.jpg', 'df', 0),
(35, 'dfgfdgfdg', '1469619228.jpg', 'dsff', 0),
(36, 'dfg', '1469680018.jpg', 'dfg', 0),
(37, 'dfgfdgfdg', '1469680189.jpg', 'egfd', 0),
(38, 'dfgfdgfdg', '1469681537.jpg', 'fgfd', 0),
(39, 'dfgfdgfdg', '1469681818.jpg', 'dfgfdg', 0),
(40, 'dfgfdgfdg', '1469681908.jpg', 'dsf', 0),
(41, 'iu', '1469682077.jpg', 'hgj', 0),
(42, 'iu', '1469682108.jpg', 'gj', 0),
(43, 'dfgfdgfdg', '1469682303.jpg', 'sdf', 0),
(44, 'dfgfdgfdg', '1469682359.jpg', 'fdgg', 0),
(45, 'dfgfdgfdg', '1469682411.jpg', 'dfgfdg', 0),
(46, 'dfgfdgfdg', '1469682460.jpg', 'dfgfdg', 0),
(47, 'dfgfdgfdg', '1469682683.jpg', 'fdgfdg', 0),
(48, 'dfgfdgfdg', '1469682743.jpg', 'dfgfdg', 0),
(49, 'dfgfdgfdg', '1469684178.jpg', 'dfgfdg', 0),
(50, 'dfgfdgfdg', '1469685929.jpg', 'dfgfdg', 0),
(51, 'dfgfdgfdg', '1469939616.jpg', 'dsf', 0),
(52, 'Dhaka', '1469956143.jpg', 'fdsgdfsg', 0),
(53, 'Dhaka', '1469956718.jpg', 'dfgfdg', 0),
(54, 'Dhaka', '1469958460.jpg', 'dfgfdg', 0),
(55, 'Dhaka', '1470214826.jpg', 'dfgfdg', 0),
(56, 'Dhaka', '1470551150.jpg', 'http://localhost:8000/news-details/57a5b70e1b13d', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE IF NOT EXISTS `sub_category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `main_cat_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sub_cat_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`id`, `main_cat_id`, `sub_cat_name`, `status`) VALUES
(1, '6', 'Hierarchic', 1),
(2, '6', 'principle', 1),
(3, '6', 'Modularity', 1),
(4, '6', 'Simplicity', 1),
(5, '6', 'Selectivity', 0),
(6, '6', 'Universality', 1),
(7, '7', 'English', 1),
(8, '7', 'Français', 1),
(9, '7', 'Svenska', 1),
(10, '7', 'Русский', 1),
(11, '8', 'Home', 1),
(12, '9', 'About', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'obydul haque', 'obydulhaque960@gmail.com', '$2y$10$ALyJ4pflrBGVeXRXTMXB5OTVNMELjIQJCzb4ZNcodn7qSzsXRBgca', 'Y9Sjiz1yRY7yPBc4c2nCOUrYZDKHQIY8ajX7bEs78aww4DzQ169MZBCrNrax', '2016-07-22 23:16:20', '2016-07-23 02:16:25');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kryptonit3_counter_page_visitor`
--
ALTER TABLE `kryptonit3_counter_page_visitor`
  ADD CONSTRAINT `kryptonit3_counter_page_visitor_visitor_id_foreign` FOREIGN KEY (`visitor_id`) REFERENCES `kryptonit3_counter_visitor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kryptonit3_counter_page_visitor_page_id_foreign` FOREIGN KEY (`page_id`) REFERENCES `kryptonit3_counter_page` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
