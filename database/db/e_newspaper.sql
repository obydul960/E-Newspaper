-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2016 at 01:50 PM
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
-- Table structure for table `image_table`
--

CREATE TABLE IF NOT EXISTS `image_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `news_id` varchar(150) NOT NULL,
  `image` varchar(250) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `image_table`
--

INSERT INTO `image_table` (`id`, `news_id`, `image`, `status`) VALUES
(1, '57a0772e9186b', '', 0),
(2, '57a083e2a06ba', '1470133000.jpg', 0),
(3, '57a0840f0314b', '1470135061.jpg', 0),
(4, '57a08547316eb', '1470137671.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `main_category`
--

CREATE TABLE IF NOT EXISTS `main_category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `main_category`
--

INSERT INTO `main_category` (`id`, `category_name`, `status`) VALUES
(2, 'Home', 0),
(3, 'Home name', 0),
(5, 'News', 0),
(6, 'fdgfhgj', 0);

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
('2016_07_25_060344_Slider_image_table', 3);

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
  `created_at` timestamp NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL,
  `updated_by` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `news_table`
--

INSERT INTO `news_table` (`id`, `news_id`, `main_category`, `sub_category`, `news_title`, `short_details`, `full_details`, `status`, `position`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, '57a0772e9186b', 0, 0, 'jhk', '<p>জাপান আন্তর্জাতিক সহযোগিতা সংস্থার (জাইকা) প্রেসিডেন্ট শিনিচি কিতাউকার ঢাকা সফর স্থগিত করা ', '<p>জাপান আন্তর্জাতিক সহযোগিতা সংস্থার (জাইকা) প্রেসিডেন্ট শিনিচি কিতাউকার ঢাকা সফর স্থগিত করা হয়েছে। বাংলাদেশের নিরাপত্তা পরিস্থিতির প্রণিধানযোগ্য উন্নতি দেখতে চায় জাপান। এ কারণেই জাইকা প্রেসিডেন্টের নির্ধারিত সফর স্থগিত করা হয়েছে বলে সংশ্লিষ্ট সূত্র জানিয়েছে। দুদিনের সফরে ৬ আগস্ট বাংলাদেশে আসার কথা ছিল শিনিচি কিতাউকার। সফরকালে প্রধানমন্ত্রী শেখ হাসিনা, অর্থমন্ত্রী আবুল মাল আবদুল মুহিত, স্বরাষ্ট্রমন্ত্রী আসাদুজ্জামান খান, পররাষ্ট্রমন্ত্রী আবুল হাসান মাহমুদ আলী, ইআরডির সিনিয়র সচিব মোহাম্মদ মেজবাহউদ্দিনসহ সরকারের ঊর্ধ্বতন কর্মকর্তাদের সঙ্গে বৈঠক করার কথা ছিল জাইকা প্রধানের। ২০১৫ সালে হোশি কুনিও এবং সর্বশেষ গুলশানের হলি আর্টিজান বেকারিতে সন্ত্রাসী হামলায় সাত জাপানি নাগরিক নিহত হওয়ার পর নিরাপত্তাহীনতায় ভুগছেন বাংলাদেশে কর্মরত দেশটির নাগরিকরা। এর পরিপ্রেক্ষিতে বাংলাদেশে জাপানি কার্যালয়গুলোয় নিরাপত্তা জোরদারে পুলিশকে নির্দেশ দেয়া হয়েছে। জানা গেছে, জাইকার অর্থায়নে পরিচালিত প্রকল্প এলাকায় কর্মরত দেশটির নাগরিকদের নিরাপত্তা নিশ্চিত করতে বলা হয় সরকারের পক্ষ থেকে। এ নিয়ে গতকাল অর্থমন্ত্রীসহ সরকারের শীর্ষ পর্যায়ের কয়েকজন কর্মকর্তার সঙ্গে বৈঠক করে জাইকা। বৈঠকে প্রকল্প এলাকায় অতিরিক্ত পুলিশ ও নিরাপত্তা বাহিনীর সদস্য মোতায়েনের দাবি করেন জাইকার প্রতিনিধিরা। এর পরই স্বরাষ্ট্র মন্ত্রণালয়ের পক্ষ থেকে পুলিশ সদর দফতরকে জাইকার সব অফিসের নিরাপত্তা বাড়ানোর নির্দেশ দেয়া হয়। উল্লেখ্য, জাপানের অর্থায়নে বেশকিছু গুরুত্বপূর্ণ প্রকল্প রয়েছে। এর মধ্যে আছে মেট্রোরেল, মাতারবাড়ীতে কয়লাভিত্তিক বিদ্যুৎকেন্দ্র, কাঁচপুর, মেঘনা-গোমতী সেতু নির্মাণ, বঙ্গবন্ধু সেতুর পাশে আরেকটি রেলসেতু নির্মাণে সমীক্ষা, কর্ণফুলী পানি সরবরাহ ও ভেড়ামারা বিদ্যুৎকেন্দ্র।</p>\r\n', 0, 0, '2016-08-02 03:46:17', 0, '2016-08-02 04:34:22', 0),
(2, '57a083e2a06ba', 0, 0, 'jhk', '<p>জাপান আন্তর্জাতিক সহযোগিতা সংস্থার (জাইকা) প্রেসিডেন্ট শিনিচি কিতাউকার ঢাকা সফর স্থগিত করা ', '<p>জাপান আন্তর্জাতিক সহযোগিতা সংস্থার (জাইকা) প্রেসিডেন্ট শিনিচি কিতাউকার ঢাকা সফর স্থগিত করা হয়েছে। বাংলাদেশের নিরাপত্তা পরিস্থিতির প্রণিধানযোগ্য উন্নতি দেখতে চায় জাপান। এ কারণেই জাইকা প্রেসিডেন্টের নির্ধারিত সফর স্থগিত করা হয়েছে বলে সংশ্লিষ্ট সূত্র জানিয়েছে। দুদিনের সফরে ৬ আগস্ট বাংলাদেশে আসার কথা ছিল শিনিচি কিতাউকার। সফরকালে প্রধানমন্ত্রী শেখ হাসিনা, অর্থমন্ত্রী আবুল মাল আবদুল মুহিত, স্বরাষ্ট্রমন্ত্রী আসাদুজ্জামান খান, পররাষ্ট্রমন্ত্রী আবুল হাসান মাহমুদ আলী, ইআরডির সিনিয়র সচিব মোহাম্মদ মেজবাহউদ্দিনসহ সরকারের ঊর্ধ্বতন কর্মকর্তাদের সঙ্গে বৈঠক করার কথা ছিল জাইকা প্রধানের। ২০১৫ সালে হোশি কুনিও এবং সর্বশেষ গুলশানের হলি আর্টিজান বেকারিতে সন্ত্রাসী হামলায় সাত জাপানি নাগরিক নিহত হওয়ার পর নিরাপত্তাহীনতায় ভুগছেন বাংলাদেশে কর্মরত দেশটির নাগরিকরা। এর পরিপ্রেক্ষিতে বাংলাদেশে জাপানি কার্যালয়গুলোয় নিরাপত্তা জোরদারে পুলিশকে নির্দেশ দেয়া হয়েছে। জানা গেছে, জাইকার অর্থায়নে পরিচালিত প্রকল্প এলাকায় কর্মরত দেশটির নাগরিকদের নিরাপত্তা নিশ্চিত করতে বলা হয় সরকারের পক্ষ থেকে। এ নিয়ে গতকাল অর্থমন্ত্রীসহ সরকারের শীর্ষ পর্যায়ের কয়েকজন কর্মকর্তার সঙ্গে বৈঠক করে জাইকা। বৈঠকে প্রকল্প এলাকায় অতিরিক্ত পুলিশ ও নিরাপত্তা বাহিনীর সদস্য মোতায়েনের দাবি করেন জাইকার প্রতিনিধিরা। এর পরই স্বরাষ্ট্র মন্ত্রণালয়ের পক্ষ থেকে পুলিশ সদর দফতরকে জাইকার সব অফিসের নিরাপত্তা বাড়ানোর নির্দেশ দেয়া হয়। উল্লেখ্য, জাপানের অর্থায়নে বেশকিছু গুরুত্বপূর্ণ প্রকল্প রয়েছে। এর মধ্যে আছে মেট্রোরেল, মাতারবাড়ীতে কয়লাভিত্তিক বিদ্যুৎকেন্দ্র, কাঁচপুর, মেঘনা-গোমতী সেতু নির্মাণ, বঙ্গবন্ধু সেতুর পাশে আরেকটি রেলসেতু নির্মাণে সমীক্ষা, কর্ণফুলী পানি সরবরাহ ও ভেড়ামারা বিদ্যুৎকেন্দ্র।</p>\r\n', 0, 0, '2016-08-02 04:16:40', 0, '2016-08-02 05:28:34', 0),
(3, '57a0840f0314b', 0, 0, 'kamal', '<p>Bangladesh is a buty full country&nbsp;Bangladesh is a buty full country&nbsp;Bangladesh is a buty full country&nbsp;Bangladesh is a buty full country&nbsp;Bangladesh is a buty full country&nbsp;Ba', '<p>Bangladesh is a buty full country&nbsp;Bangladesh is a buty full country&nbsp;Bangladesh is a buty full country&nbsp;Bangladesh is a buty full country&nbsp;Bangladesh is a buty full country&nbsp;Bangladesh is a buty full country&nbsp;Bangladesh is a buty full country</p>\r\n', 0, 0, '2016-08-02 04:51:01', 0, '2016-08-02 05:29:19', 0),
(4, '57a08547316eb', 3, 3, 'jhk', '<p>dfgdsfg</p>\r\n', '<p>dfgdsfg</p>\r\n', 0, 0, '2016-08-02 05:34:31', 0, '2016-08-02 05:34:31', 0);

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
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=55 ;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `image_title`, `image`, `back_link`, `status`) VALUES
(13, 'dfdsg', '1469944535.jpg', 'dfgfdg', 0),
(14, 'Dhaka', '1469943508.jpg', 'Bangladesh', 0),
(15, 'dfdsg', '1469609505.jpg', 'dfsdf', 0),
(17, 'dfdsg', '1469609590.jpg', 'dfgfdg', 0),
(19, 'iu', '1469609651.jpg', 'sfgds', 0),
(20, 'dfggfv', '1469699085.jpg', 'dsfff', 0),
(21, 'dfg', '1469609739.jpg', 'fdg', 0),
(23, 'dfg', '1469615533.jpg', 'sdf', 0),
(24, 'dfgfdgfdg', '1469615573.jpg', 'sdfsdf', 0),
(25, 'dfgfdgfdg', '1469615747.jpg', 'sdfsdf', 0),
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
(54, 'Dhaka', '1469958460.jpg', 'dfgfdg', 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`id`, `main_cat_id`, `sub_cat_name`, `status`) VALUES
(1, 'something', 'gfhfghfgh', 0),
(2, '3', 'About', 0),
(3, '3', 'dsfsdf', 0),
(4, '5', 'sdfsdaf', 0),
(5, '3', 'sdfsdf', 0),
(6, '3', 'sdf', 0);

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
