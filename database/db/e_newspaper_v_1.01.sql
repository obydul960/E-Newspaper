-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2016 at 12:50 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `breaking_news`
--

INSERT INTO `breaking_news` (`id`, `news_id`, `news_title`, `news_icon`, `back_link`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(2, 0, '১৯৫৮ সালের এক শুভলগ্নে আজিমপুর এস্টেট ও তৎসংলগ্ন এলাকার ছেলেমেয়েদের ধর্মীয় শিক্ষার', '', '', 1, '2016-08-04 07:04:18', 0, '2016-08-04 07:04:18', 0),
(3, 0, '১৯৫৮ সালের এক শুভলগ্নে আজিমপুর এস্টেট ও তৎসংলগ্ন এলাকার ছেলেমেয়েদের ধর্মীয় শিক্ষার', '', '', 1, '2016-08-04 07:05:06', 0, '2016-08-04 07:05:06', 0),
(4, 0, '১৯৫৮ সালের এক শুভলগ্নে আজিমপুর এস্টেট ও তৎসংলগ্ন এলাকার ছেলেমেয়েদের ধর্মীয় শিক্ষার', '', '', 1, '2016-08-04 07:05:06', 0, '2016-08-04 07:05:06', 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

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
(20, '57a5becff3c5f', '1470480080.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `main_category`
--

CREATE TABLE IF NOT EXISTS `main_category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `view_status` int(11) NOT NULL COMMENT 'home page yes equl 1 and no eql 0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=23 ;

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
(14, 'ভিন্নধমী সংবাদ', 2, 0),
(15, 'পারিবারিক সম্পর্ক', 2, 0),
(16, 'শেখা', 2, 0),
(17, 'পেশীয়', 2, 0),
(18, 'ক্যারিয়ার', 2, 1),
(19, 'ভ্রমনের', 2, 0),
(20, 'ফ্যাশন', 2, 0),
(21, 'সফলের কাহিনী', 2, 0),
(22, 'একাডেমী', 2, 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `news_table`
--

INSERT INTO `news_table` (`id`, `news_id`, `main_category`, `sub_category`, `news_title`, `short_details`, `full_details`, `status`, `position`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, '57a5b70e1b13d', 6, 2, 'আটক জঙ্গিরা বলে, ‘মেরে ফেলেন, জান্নাতে যাব’: আইজিপি', '<p>পুলিশের মহাপরিদর্শক (আইজিপি) এ কে এম শহীদুল হক বলেছেন, আটক জঙ্গিদের কাছ থেকে তেমন কোনো তথ্য পাও', '<p>পুলিশের মহাপরিদর্শক (আইজিপি) এ কে এম শহীদুল হক বলেছেন, আটক জঙ্গিদের কাছ থেকে তেমন কোনো তথ্য পাওয়া যায় না। কোনো জঙ্গিকে আটক করলে বলে, &lsquo;আমাকে মেরে ফেলেন। আমি জান্নাতে যাব।&rsquo;<br />\r\n<br />\r\nআজ শনিবার জাতীয় প্রেসক্লাবে এক আলোচনা সভায় এ কথা জানিয়ে ধর্মের ভুল ব্যাখ্যা থেকে তরুণসমাজকে বাঁচাতে আলেমসমাজের প্রতি আহ্বান জানান আইজিপি।<br />\r\n<br />\r\nশহীদুল হক বলেন, একটি দেশে অন্য কোনো ধর্মের মানুষ থাকতে পারবে না&mdash;এটি অপপ্রচার। ইসলামি ব্যক্তি, আলেমসমাজ, মাদ্রাসার শিক্ষকদের এ ধরনের অপপ্রচার বন্ধে কাজ করতে হবে।<br />\r\n<br />\r\nআইজিপি বলেন, জঙ্গিবাদ কোনো স্থানীয় সমস্যা না। এটি একটি বৈশ্বিক সমস্যা। জঙ্গিরা মানবতার ওপর আঘাত হানে আর ব্লগাররা ধর্ম নিয়ে কটাক্ষ করে।<br />\r\n<br />\r\nগত মঙ্গলবার রাজধানীর গুলশান, কল্যাণপুর ও শোলাকিয়া হামলার &lsquo;মাস্টারমাইন্ড&rsquo; তামিম চৌধুরী ও ব্লগার হত্যায় সন্দেহভাজন চাকরিচ্যুত সেনা কর্মকর্তা জিয়াউল হককে ধরিয়ে দিলে ২০ লাখ টাকা করে পুরস্কার দেওয়া হবে বলে ঘোষণা দেন আইজিপি। সে কথা মনে করিয়ে দিয়ে তিনি বলেন, তামিম ও জিয়া যেখানেই থাকুক, কেউ দেখলে বা সন্ধান পেলে যেন সরাসরি পুলিশকে জানায়। প্রয়োজনে তাঁর (আইজিপি) সঙ্গে যোগাযোগ করে তথ্যদাতাকে নিরাপত্তা দেওয়া হবে। পরিচয় গোপন রাখা হবে।</p>\r\n\r\n<div class="fb-quote fb_iframe_widget" style="padding: 0px; margin: 0px; outline: 0px; display: inline-block; position: absolute; overflow: hidden; left: 490px; top: 418px;"><iframe frameborder="0" height="1000px" name="f8a6fbde84fd78" scrolling="no" src="https://www.facebook.com/v2.5/plugins/quote.php?app_id=1499138263726489&amp;channel=http%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FLcj5EtQ5qmD.js%3Fversion%3D42%23cb%3Df3c06145d33d0cc%26domain%3Dwww.prothom-alo.com%26origin%3Dhttp%253A%252F%252Fwww.prothom-alo.com%252Ff1b82dfb9a6fa58%26relation%3Dparent.parent&amp;container_width=1332&amp;href=http%3A%2F%2Fwww.prothom-alo.com%2Fbangladesh%2Farticle%2F937555%2F%25E0%25A6%2586%25E0%25A6%259F%25E0%25A6%2595-%25E0%25A6%259C%25E0%25A6%2599%25E0%25A7%258D%25E0%25A6%2597%25E0%25A6%25BF%25E0%25A6%25B0%25E0%25A6%25BE-%25E0%25A6%25AC%25E0%25A6%25B2%25E0%25A7%2587-%25E2%2580%2598%25E0%25A6%25AE%25E0%25A7%2587%25E0%25A6%25B0%25E0%25A7%2587-%25E0%25A6%25AB%25E0%25A7%2587%25E0%25A6%25B2%25E0%25A7%2587%25E0%25A6%25A8-%25E0%25A6%259C%25E0%25A6%25BE%25E0%25A6%25A8%25E0%25A7%258D%25E0%25A6%25A8%25E0%25A6%25BE%25E0%25A6%25A4%25E0%25A7%2587-%25E0%25A6%25AF%25E0%25A6%25BE%25E0%25A6%25AC%25E2%2580%2599-%25E0%25A6%2586%25E0%25A6%2587%25E0%25A6%259C%25E0%25A6%25BF%25E0%25A6%25AA%25E0%25A6%25BF&amp;locale=en_US&amp;sdk=joey" style="padding: 0px; margin: 0px; outline: 0px; border-width: initial; border-style: none; position: absolute; visibility: visible; width: 0px; height: 0px;" title="fb:quote Facebook Social Plugin" width="1000px"></iframe></div>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><br />\r\nরাজধানীর গুলশান ও কিশোরগঞ্জের শোলাকিয়ায় হামলার পরে জঙ্গিদের বিরুদ্ধে মানুষের সচেতনতা সৃষ্টি হয়েছে বলে জানান আইজিপি। যে যে অবস্থানে আছে, সেখান থেকে জঙ্গিদের প্রতিহত করার আহ্বান জানান তিনি।</p>\r\n\r\n<p><br />\r\n&lsquo;আমার কাগজ&rsquo; নামের একটি দৈনিক পত্রিকার ১৪ বছর পূর্তি উপলক্ষে ওই আলোচনা সভার আয়োজন করা হয়। &lsquo;জঙ্গিবাদ সন্ত্রাস দমন: কমিউনিটি পুলিশিং ও গণমাধ্যমের ভূমিকা&rsquo; শীর্ষক আলোচনা সভায় মূল বক্তব্য দেন সাংবাদিক আশফাকুজ্জামান। এতে অংশ নেন তথ্য ও যোগাযোগপ্রযুক্তি বিভাগের সচিব শ্যামসুন্দর শিকদার, তথ্য অধিদপ্তরের প্রধান তথ্য কর্মকর্তা এ কে এম শামীম চৌধুরী, একুশে টিভির নির্বাহী সম্পাদক ও বাংলাদেশ ফেডারেল সাংবাদিক ইউনিয়ন বিএফইউজের (একাংশ) সভাপতি মনজুরুল আহসান বুলবুল প্রমুখ।</p>\r\n', 0, 0, '2016-08-06 04:08:14', 0, '2016-08-06 04:08:14', 0),
(2, '57a5b8e0bd1c8', 6, 2, 'ব্লক রেইডে হয়রানি করলে ব্যবস্থা: আছাদুজ্জামান', '<p><span style="color:rgb(34, 34, 34); font-family:solaimanlipi,arial,vrinda,fallbackbengalifont,helvetica,sans-serif; font-size:16px">ঢাকা মহানগর পুলিশের চলমান ব্লক রেইডে কাউকে ', '<p><span style="color:rgb(34, 34, 34); font-family:solaimanlipi,arial,vrinda,fallbackbengalifont,helvetica,sans-serif; font-size:16px">ঢাকা মহানগর পুলিশের চলমান ব্লক রেইডে কাউকে হয়রানি করা যাবে না বলে মন্তব্য করেছেন ডিএমপি কমিশনার মো. আছাদুজ্জামান মিয়া। তিনি বলেছেন, রেইডে নিরীহ কাউকে হয়রানি করার অভিযোগ পাওয়া গেলে সংশ্লিষ্ট পুলিশের বিরুদ্ধে ব্যবস্থা নেওয়া হবে। আজ শনিবার দুপুরে নিজ দপ্তরে ঢাকা মহানগর পুলিশের ওয়েবসাইট উদ্বোধন অনুষ্ঠানে ডিএমপি কমিশনার এ কথা বলেন।</span><br />\r\n<br />\r\n<span style="color:rgb(34, 34, 34); font-family:solaimanlipi,arial,vrinda,fallbackbengalifont,helvetica,sans-serif; font-size:16px">আছাদুজ্জামান মিয়া বলেন, জঙ্গি ও সন্ত্রাস দমনে ব্লক রেইড পরিচালনা করা হচ্ছে। তবে এ ব্লক রেইডের সময় কাউকে হয়রানি করা যাবে না।</span><br />\r\n<br />\r\n<span style="color:rgb(34, 34, 34); font-family:solaimanlipi,arial,vrinda,fallbackbengalifont,helvetica,sans-serif; font-size:16px">বাসাবাড়ি ও মেস ভাড়া দিতে কোনো আপত্তি নেই বলে জানান ডিএমপি কমিশনার। তবে মেস বা বাসায় ওঠা বাসিন্দা ও শিক্ষার্থীদের পরিচয়পত্র সংগ্রহ করার পরামর্শ দেন তিনি। একই সঙ্গে পুলিশের তথ্য ফরম পূরণ করার কথা বলেন তিনি। ওই ফরম বাড়ির মালিক থানায় জমা দেবেন। পুলিশ এ তথ্য যাচাই-বাছাই করে দেখবে।</span></p>\r\n', 0, 0, '2016-08-06 04:16:00', 0, '2016-08-06 04:16:00', 0),
(3, '57a5b91dae94e', 6, 2, 'উত্তরায় সেনা কর্মকর্তার মা খুন হওয়ার রহস্য উদ্‌ঘাটন', '<p>রাজধানীর উত্তরায় সেনা কর্মকর্তার মাকে গলা কেটে হত্যার ঘটনায় জড়িত থাকার অভিযোগে দুজনকে গ্রেপ', '<p>রাজধানীর উত্তরায় সেনা কর্মকর্তার মাকে গলা কেটে হত্যার ঘটনায় জড়িত থাকার অভিযোগে দুজনকে গ্রেপ্তার করা হয়েছে বলে জানিয়েছে র&zwj;্যাপিড অ্যাকশন ব্যাটালিয়ন (র&zwj;্যাব)। আজ শনিবার এ হত্যার রহস্য উদ্&zwnj;ঘাটিত হয়েছে বলে র&zwj;্যাবের পক্ষ থেকে জানানো হয়।</p>\r\n\r\n<div class="fb-quote fb_iframe_widget" style="padding: 0px; margin: 0px; outline: 0px; display: inline-block; position: absolute; overflow: hidden; left: 306.5px; top: 418px;"><iframe frameborder="0" height="1000px" name="f344da6f60cbe24" scrolling="no" src="https://www.facebook.com/v2.5/plugins/quote.php?app_id=1499138263726489&amp;channel=http%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FLcj5EtQ5qmD.js%3Fversion%3D42%23cb%3Df1a0401f9fad0cc%26domain%3Dwww.prothom-alo.com%26origin%3Dhttp%253A%252F%252Fwww.prothom-alo.com%252Ff15093aab7c8ec8%26relation%3Dparent.parent&amp;container_width=1332&amp;href=http%3A%2F%2Fwww.prothom-alo.com%2Fbangladesh%2Farticle%2F937534%2F%25E0%25A6%2589%25E0%25A6%25A4%25E0%25A7%258D%25E0%25A6%25A4%25E0%25A6%25B0%25E0%25A6%25BE%25E0%25A7%259F-%25E0%25A6%25B8%25E0%25A7%2587%25E0%25A6%25A8%25E0%25A6%25BE-%25E0%25A6%2595%25E0%25A6%25B0%25E0%25A7%258D%25E0%25A6%25AE%25E0%25A6%2595%25E0%25A6%25B0%25E0%25A7%258D%25E0%25A6%25A4%25E0%25A6%25BE%25E0%25A6%25B0-%25E0%25A6%25AE%25E0%25A6%25BE-%25E0%25A6%2596%25E0%25A7%2581%25E0%25A6%25A8-%25E0%25A6%25B9%25E0%25A6%2593%25E0%25A7%259F%25E0%25A6%25BE%25E0%25A6%25B0-%25E0%25A6%25B0%25E0%25A6%25B9%25E0%25A6%25B8%25E0%25A7%258D%25E0%25A6%25AF&amp;locale=en_US&amp;sdk=joey" style="padding: 0px; margin: 0px; outline: 0px; border-width: initial; border-style: none; position: absolute; visibility: visible; width: 0px; height: 0px;" title="fb:quote Facebook Social Plugin" width="1000px"></iframe></div>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>গত ৪ জুন উত্তরায় নিজ বাড়িতে গলা কেটে হত্যা করা হয় মনোয়ারা বেগম নামের ওই বৃদ্ধাকে। তিনি উত্তরার ৯ নম্বর সেক্টরের একটি বাড়িতে একা থাকতেন। তিনি সেনাবাহিনীর লেফটেন্যান্ট কর্নেল খালিদ বিন ইউসুফের মা।<br />\r\nউত্তরায় র&zwj;্যাব-১-এর কার্যালয়ে সেনা কর্মকর্তার মা খুন হওয়ার রহস্য উদ্&zwnj;ঘাটন নিয়ে এক বিফ্রিংয়ের আয়োজন করা হয়। র&zwj;্যাবের পক্ষ থেকে জানানো হয়, উত্তরায় সেনা কর্মকর্তার মা খুন হওয়ার ঘটনায় গোলাম নবী ওরফে নবী (২৫) ও মোছা. লাইলী ওরফে লাবণ্য নামের দুজনকে গ্রেপ্তার করা হয়েছে।</p>\r\n', 0, 0, '2016-08-06 04:17:01', 0, '2016-08-06 04:17:01', 0),
(4, '57a5b95d9941d', 6, 3, 'পরিষেবা নিয়ে গণশুনানি সোমবার', '<p>তথ্য পাওয়া আমার আইনি অধিকার, সেবা পাওয়া আমার নাগরিক অধিকার, দুর্নীতিমুক্ত দেশ আমার সাংবিধানি', '<p>তথ্য পাওয়া আমার আইনি অধিকার, সেবা পাওয়া আমার নাগরিক অধিকার, দুর্নীতিমুক্ত দেশ আমার সাংবিধানিক অধিকার&rsquo; স্লোগান সামনে রেখে শেরপুরের নালিতাবাড়ী উপজেলায় আগামী সোমবার সরকারি আটটি প্রতিষ্ঠানের পরিষেবা নিয়ে গণশুনানি হবে। এতে সাধারণ মানুষের বিভিন্ন প্রশ্নের উত্তর দেবেন সংশ্লিষ্ট কর্মকর্তারা।</p>\r\n\r\n<div class="fb-quote fb_iframe_widget" style="padding: 0px; margin: 0px; outline: 0px; display: inline-block; position: absolute; overflow: hidden; left: 201px; top: 456px;"><iframe frameborder="0" height="1000px" name="f2a7145d3f205f4" scrolling="no" src="https://www.facebook.com/v2.5/plugins/quote.php?app_id=1499138263726489&amp;channel=http%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FLcj5EtQ5qmD.js%3Fversion%3D42%23cb%3Dfa467842af4c0c%26domain%3Dwww.prothom-alo.com%26origin%3Dhttp%253A%252F%252Fwww.prothom-alo.com%252Ff229d5632d66b5c%26relation%3Dparent.parent&amp;container_width=1332&amp;href=http%3A%2F%2Fwww.prothom-alo.com%2Fbangladesh%2Farticle%2F937447%2F%25E0%25A6%25AA%25E0%25A6%25B0%25E0%25A6%25BF%25E0%25A6%25B7%25E0%25A7%2587%25E0%25A6%25AC%25E0%25A6%25BE-%25E0%25A6%25A8%25E0%25A6%25BF%25E0%25A7%259F%25E0%25A7%2587-%25E0%25A6%2597%25E0%25A6%25A3%25E0%25A6%25B6%25E0%25A7%2581%25E0%25A6%25A8%25E0%25A6%25BE%25E0%25A6%25A8%25E0%25A6%25BF-%25E0%25A6%25B8%25E0%25A7%2587%25E0%25A6%25BE%25E0%25A6%25AE%25E0%25A6%25AC%25E0%25A6%25BE%25E0%25A6%25B0&amp;locale=en_US&amp;sdk=joey" style="padding: 0px; margin: 0px; outline: 0px; border-width: initial; border-style: none; position: absolute; visibility: visible; width: 0px; height: 0px;" title="fb:quote Facebook Social Plugin" width="1000px"></iframe></div>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>উপজেলা পরিষদ ও দুর্নীতি প্রতিরোধ কমিটির (দুপ্রক) উপজেলা শাখা সূত্রে জানা গেছে, দুর্নীতি দমন কমিশনের (দুদক) আয়োজনে পৌর শহরের শহীদ মুক্তিযোদ্ধা মঞ্চে সোমবার সকাল ১০টায় গণশুনানি শুরু হবে। উপজেলার ভূমি, হিসাবরক্ষণ, সাব-রেজিস্ট্রি, স্বাস্থ্য ও পরিবারকল্যাণ, পল্লী বিদ্যুৎ সমিতি, প্রকল্প বাস্তবায়ন কর্মকর্তা, সমাজসেবা ও উপজেলা সমবায় কার্যালয়ের পরিষেবা নিয়ে জনগণের সরাসরি প্রশ্নের উত্তর দেবেন সংশ্লিষ্ট কর্মকর্তারা। অনুষ্ঠানে উপস্থিত থাকবেন দুদকের কমিশনার নাছির উদ্দিন আহম্মেদ। সভাপতিত্ব করবেন জেলা প্রশাসক (ডিসি) এ এম পারভেজ রহিম।</p>\r\n', 0, 0, '2016-08-06 04:18:05', 0, '2016-08-06 04:18:05', 0),
(5, '57a5b99c5e133', 6, 3, 'পাউবোর কলোনিতে অবৈধ হাট, অতিরিক্ত হাসিল আদায়', '<p><span style="color:rgb(34, 34, 34); font-family:solaimanlipi,arial,vrinda,fallbackbengalifont,helvetica,sans-serif; font-size:16px">ঠাকুরগাঁওয়ের রানীশংকৈল উপজেলার নেকমরদ ইউন', '<p><span style="color:rgb(34, 34, 34); font-family:solaimanlipi,arial,vrinda,fallbackbengalifont,helvetica,sans-serif; font-size:16px">ঠাকুরগাঁওয়ের রানীশংকৈল উপজেলার নেকমরদ ইউনিয়নে পানি উন্নয়ন বোর্ডের (পাউবো) আবাসিক কলোনিতে অবৈধভাবে গবাদিপশুর হাট বসানো হয়েছে। কলোনির পাশের নেকমরদ হাটের ইজারাদারেরা পাউবো কর্তৃপক্ষের কথা বলে অতিরিক্ত হাসিল আদায় করছেন। অথচ পাউবো কোনো টাকা পায় না বলে অভিযোগ উঠেছে।</span><br />\r\n<span style="color:rgb(34, 34, 34); font-family:solaimanlipi,arial,vrinda,fallbackbengalifont,helvetica,sans-serif; font-size:16px">পাউবো ঠাকুরগাঁও কার্যালয় সূত্র জানায়, ৭০-এর দশকে পাউবোর কাজ পরিচালনার জন্য দুই দফায় নেকমরদ এলাকায় ৩ একর ৩৭ শতক জমি অধিগ্রহণ করা হয়। ওই জমিতে কর্মকর্তা-কর্মচারীদের আবাসিক ভবন ও একটি ডাকবাংলো গড়ে তোলা হয়। পরে এ এলাকায় পাউবোর কার্যক্রম সীমিত হয়ে পড়ে। কলোনিতে এখন কিছু পরিবার বাস করলেও বাকিটা খালি পড়ে রয়েছে। এ সুযোগে ২০১২ সালে কলোনিতে পশুর হাট বসানো শুরু হয়। প্রতি রোববার হাট বসে।</span><br />\r\n<span style="color:rgb(34, 34, 34); font-family:solaimanlipi,arial,vrinda,fallbackbengalifont,helvetica,sans-serif; font-size:16px">গত রোববার দুপুরে সরেজমিনে দেখা যায়, নেকমরদ ইউনিয়নের বালিয়াডাঙ্গী-রানীশংকৈল আঞ্চলিক সড়কের পাশে পাউবোর কলোনিতে হাট বসেছে। হাটে বিপুলসংখ্যক মানুষের উপস্থিতি লক্ষ করা যায়। পশু কেনা-বেচা চলছে।</span><br />\r\n<span style="color:rgb(34, 34, 34); font-family:solaimanlipi,arial,vrinda,fallbackbengalifont,helvetica,sans-serif; font-size:16px">হাটের ক্রেতা-বিক্রেতারা বলেন, নেকমরদ ইউনিয়নে হাট বসানোর জায়গা নেই। তাই তাঁরা এখানে বেচা-কেনা করেন। প্রতি হাটবারে এখানে হাজার খানেক গরু-ছাগল কেনাবেচা হয়। কিন্তু হাসিল বেশি রাখা হয়।</span><br />\r\n<span style="color:rgb(34, 34, 34); font-family:solaimanlipi,arial,vrinda,fallbackbengalifont,helvetica,sans-serif; font-size:16px">হাটের কমপক্ষে ছয়জন ক্রেতা বলেন, হাটে প্রতিটি গরুর জন্য ২২০ ও ছাগলের জন্য ১০০ টাকা করে হাসিল আদায় করা হচ্ছে। অথচ জেলা প্রশাসনের তালিকা অনুযায়ী একটি গরুর জন্য ১৮০ ও একটি ছাগলের জন্য ৮০ টাকা হাসিল আদায় করার কথা।</span><br />\r\n<span style="color:rgb(34, 34, 34); font-family:solaimanlipi,arial,vrinda,fallbackbengalifont,helvetica,sans-serif; font-size:16px">পাউবোর কলোনির পাশের নেকমরদ হাটের ইজারাদার তোজাম্মুল হক পাউবোর একটি ঘরের বারান্দায় বসে হাসিল আদায়ের খোঁজখবর নিচ্ছিলেন। তিনি বলেন, জেলার সব হাটেই রসিদের চেয়ে বাড়তি হাসিল আদায় করা হচ্ছে। এটা প্রশাসন ভালোই জানে। জায়গার সংকটের কারণে পাউবোর কাছ থেকে ভাড়া নেওয়া জায়গায় হাট চালাতে হচ্ছে। ভাড়ার জন্য গরুপ্রতি ২০ ও গোল্ডকাপ ফুটবল খেলার খরচের জন্য ১০ টাকা অতিরিক্ত নেওয়া হচ্ছে।</span><br />\r\n<span style="color:rgb(34, 34, 34); font-family:solaimanlipi,arial,vrinda,fallbackbengalifont,helvetica,sans-serif; font-size:16px">জমিটি ব্যবহারের জন্য পাউবোর সঙ্গে চুক্তি হয়েছে কি না, জানতে চাইলে তোজাম্মুল হক বলেন, &lsquo;এসব বিষয় নেকমরদ ইউনিয়ন পরিষদের (ইউপি) চেয়ারম্যান এনামুল হক বলতে পারবেন। তিনিও এ হাটের ইজারার একজন অংশীদার।&rsquo;</span><br />\r\n<span style="color:rgb(34, 34, 34); font-family:solaimanlipi,arial,vrinda,fallbackbengalifont,helvetica,sans-serif; font-size:16px">ইউপি চেয়ারম্যান এনামুল হক মুঠোফোনে বলেন, হাট বসানোর জন্য পাউবোকে তেমন কোনো টাকা দেওয়া হয় না। শুধু কয়েকজন লোককে চা-নাশতা খেতে কিছু টাকা দেওয়া হয়।</span><br />\r\n<span style="color:rgb(34, 34, 34); font-family:solaimanlipi,arial,vrinda,fallbackbengalifont,helvetica,sans-serif; font-size:16px">পাউবোর জেলা কার্যালয়ের উপবিভাগীয় প্রকৌশলী শহিদুল ইসলাম বলেন, নেকমরদে পাউবোর জায়গায় বসানো হাট অবৈধ। এ জমিতে হাট বসানোর জন্য লিখিত অনুমতি নেওয়া হয়নি। এ জন্য পাউবোকে কোনো টাকাও দেওয়া হয় না। এর আগে পদক্ষেপ নিয়েও হাট বসানো বন্ধ করা যায়নি।</span><br />\r\n<span style="color:rgb(34, 34, 34); font-family:solaimanlipi,arial,vrinda,fallbackbengalifont,helvetica,sans-serif; font-size:16px">ইউএনও খন্দকার মো. নাহিদ হাসান বলেন, তিনি হাটে অতিরিক্ত হাসিল আদায়ের খবর জানেন। ইজারাদারেরা বলেছেন, তাঁরা আদায় করা অতিরিক্ত টাকা দিয়ে হাটের জন্য নতুন জমি কিনবেন। তবে এ পর্যন্ত কত টাকা আদায় করা হয়েছে এবং তা কোথায় জমা রয়েছে, তা নির্দিষ্ট করে বলতে পারেননি তিনি।</span><br />\r\n<span style="color:rgb(34, 34, 34); font-family:solaimanlipi,arial,vrinda,fallbackbengalifont,helvetica,sans-serif; font-size:16px">জেলা প্রশাসক মূকেশ চন্দ্র বিশ্বাস বলেন, বিষয়টি খতিয়ে দেখে প্রয়োজনীয় পদক্ষেপ নেওয়া হবে।</span></p>\r\n', 0, 0, '2016-08-06 04:19:08', 0, '2016-08-06 04:19:08', 0),
(6, '57a5ba1b32ae1', 7, 9, 'সাভারে প্রকাশ্যে মাদক বিক্রি?', '<p><span style="color:rgb(34, 34, 34); font-family:solaimanlipi,arial,vrinda,fallbackbengalifont,helvetica,sans-serif; font-size:16px">ঢাকার সাভার পৌর এলাকার বাড্ডা কসাইপাড়া, অমর', '<p><span style="color:rgb(34, 34, 34); font-family:solaimanlipi,arial,vrinda,fallbackbengalifont,helvetica,sans-serif; font-size:16px">ঢাকার সাভার পৌর এলাকার বাড্ডা কসাইপাড়া, অমরপুর, কাঞ্চনপুর ও পোড়াবাড়ির অন্তত ২০ জন তরুণ-তরুণী প্রকাশ্যে মাদক বিক্রি করছেন বলে অভিযোগ পাওয়া গেছে।</span><br />\r\n<span style="color:rgb(34, 34, 34); font-family:solaimanlipi,arial,vrinda,fallbackbengalifont,helvetica,sans-serif; font-size:16px">ঢাকা জেলা গোয়েন্দা (ডিবি) পুলিশের পরিদর্শক এ এফ এম সায়েদ বলেন, গত বুধবার দুপুরে বাড্ডা কসাইপাড়া ও পোড়াবাড়ি এলাকা থেকে ইমরান হোসেন (৩০) ও শহীদুল ইসলাম (৩৮) নামের দুই মাদক ব্যবসায়ীকে আটক করে ডিবি পুলিশ। এরপর ভ্রাম্যমাণ আদালতের মাধ্যমে ইমরানকে ছয় মাসের কারাদণ্ড দেওয়া হয় এবং শহীদুলকে ১০ হাজার টাকা জরিমানা করা হয়।</span><br />\r\n<span style="color:rgb(34, 34, 34); font-family:solaimanlipi,arial,vrinda,fallbackbengalifont,helvetica,sans-serif; font-size:16px">পোড়াবাড়ি, অমরপুর ও বাড্ডা কসাইপাড়া এলাকার কয়েক ব্যক্তি অভিযোগ করেন, ডিবির উপপরিদর্শক (এসআই) জহিরুল ইসলাম বুধবার তাঁদের এলাকা থেকে ইমরান ও শহীদুল ছাড়াও কামাল নামের আরেক মাদক ব্যবসায়ীকে আটক করেন। কিন্তু ঘণ্টা খানেক পর টাকার বিনিময়ে কামালকে ছেড়ে দেন তিনি। আর মোটা অঙ্কের ঘুষের বিনিময়ে ১০ হাজার টাকা জরিমানা করিয়ে শহীদুলের ছাড়া পাওয়ার ব্যবস্থা করে দেন। তাঁরা বলেন, শহীদুল ও কামাল বড় ধরনের মাদক ব্যবসায়ী। তাঁরা এলাকায় ইয়াবার ডিলার হিসেবে পরিচিত। ইমরান ওই দুজনের তুলনায় ক্ষুদ্র ব্যবসায়ী।</span><br />\r\n<span style="color:rgb(34, 34, 34); font-family:solaimanlipi,arial,vrinda,fallbackbengalifont,helvetica,sans-serif; font-size:16px">সরেজমিনে জানা গেছে, বাড্ডা কসাইপাড়া, অমরপুর, কাঞ্চনপুর ও পোড়াবাড়ি এলাকার ২০-২৫ জন তরুণ-তরুণী আবারও মাদক ব্যবসা শুরু করেছেন। তাঁদের অধিকাংশই বেদে সম্প্রদায়ের লোক। তাঁদের কেউ কেউ একাধিকবার মাদকসহ গ্রেপ্তার হয়েছেন। স্থানীয় লোকজন জানান, পুলিশের অতিরিক্ত উপমহাপরিদর্শক পদে পদোন্নতি পেয়ে সদ্য বদলি হওয়া ঢাকার পুলিশ সুপার হাবিবুর রহমান বেদে সম্প্রদায়ের ভাগ্য পরিবর্তনে নানা উদ্যোগ নেন। এরপর অনেকে মাদক ব্যবসা ছেড়ে দিয়েছিলেন। কিন্তু সম্প্রতি তাঁরা আবার ওই ব্যবসায় ঝুঁকেছেন।</span><br />\r\n<span style="color:rgb(34, 34, 34); font-family:solaimanlipi,arial,vrinda,fallbackbengalifont,helvetica,sans-serif; font-size:16px">নাম প্রকাশে অনিচ্ছুক বেদে সম্প্রদায়ের কয়েকজন সরদার বলেন, আবার মাদকের ছোবলে আক্রান্ত হচ্ছে সাভারের বেদেপল্লি। পুলিশকে জানানোর পরও মাদক ব্যবসায়ীদের বিরুদ্ধে কোনো ব্যবস্থা নেওয়া হচ্ছে না। অনেক ক্ষেত্রে পুলিশ তাঁদের আটক করলেও দুর্বল সাজার ব্যবস্থা করে। অনেক সময় টাকা নিয়ে ছেড়ে দেয়।</span><br />\r\n<span style="color:rgb(34, 34, 34); font-family:solaimanlipi,arial,vrinda,fallbackbengalifont,helvetica,sans-serif; font-size:16px">এসআই জহিরুল ইসলাম বুধবার ইমরান ও শহীদুলকে গ্রেপ্তারের কথা স্বীকার করলেও কামালকে আটকের কথা অস্বীকার করেন। ডিবির পরিদর্শক এ এফ এম সায়েদ বলেন, বৃহস্পতিবার এসআই জহিরুল ডিবি থেকে অন্যত্র বদলি হয়ে গেছেন। এরপরও তাঁর বিরুদ্ধে ওঠা অভিযোগগুলো খতিয়ে দেখা হবে।</span><br />\r\n<span style="color:rgb(34, 34, 34); font-family:solaimanlipi,arial,vrinda,fallbackbengalifont,helvetica,sans-serif; font-size:16px">যোগাযোগ করা হলে সাভার মডেল থানার ভারপ্রাপ্ত কর্মকর্তা (ওসি) কামরুজ্জামান বলেন, &lsquo;আমার কাছে এ ধরনের অভিযোগ কেউ করেনি। এরপরও খোঁজ নিয়ে মাদক ব্যবসার সঙ্গে জড়িত ব্যক্তিদের গ্রেপ্তারে অভিযান চালানো</span></p>\r\n', 0, 0, '2016-08-06 04:21:15', 0, '2016-08-06 04:21:15', 0),
(7, '57a5ba4f91e4d', 7, 9, 'পদ্মায় নৌকাডুবির ঘটনায় পাঁচজনের লাশ উদ্ধার', '<p>রাজবাড়ীর কালুখালী উপজেলার কালিকাপুর ইউনিয়নের হরিণবাড়িয়ায় পদ্মা নদীতে নৌকাডুবির ঘটনায় আজ শ', '<p>রাজবাড়ীর কালুখালী উপজেলার কালিকাপুর ইউনিয়নের হরিণবাড়িয়ায় পদ্মা নদীতে নৌকাডুবির ঘটনায় আজ শনিবার সকাল পর্যন্ত দু্ইশিশুসহ পাঁচজনের লাশ উদ্ধার করা হয়েছে। গতকাল শুক্রবার সন্ধ্যায় নৌকাটি ডুবে যায়।</p>\r\n\r\n<div class="fb-quote fb_iframe_widget" style="padding: 0px; margin: 0px; outline: 0px; display: inline-block; position: absolute; overflow: hidden; left: 369px; top: 418px;"><iframe frameborder="0" height="1000px" name="f86f3faedf6f" scrolling="no" src="https://www.facebook.com/v2.5/plugins/quote.php?app_id=1499138263726489&amp;channel=http%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FLcj5EtQ5qmD.js%3Fversion%3D42%23cb%3Df298b2c63ba9498%26domain%3Dwww.prothom-alo.com%26origin%3Dhttp%253A%252F%252Fwww.prothom-alo.com%252Ff357784f6b426c%26relation%3Dparent.parent&amp;container_width=1332&amp;href=http%3A%2F%2Fwww.prothom-alo.com%2Fbangladesh%2Farticle%2F937474%2F%25E0%25A6%25AA%25E0%25A6%25A6%25E0%25A7%258D%25E0%25A6%25AE%25E0%25A6%25BE%25E0%25A7%259F-%25E0%25A6%25A8%25E0%25A7%258C%25E0%25A6%2595%25E0%25A6%25BE%25E0%25A6%25A1%25E0%25A7%2581%25E0%25A6%25AC%25E0%25A6%25BF%25E0%25A6%25B0-%25E0%25A6%2598%25E0%25A6%259F%25E0%25A6%25A8%25E0%25A6%25BE%25E0%25A7%259F-%25E0%25A6%25B6%25E0%25A6%25BF%25E0%25A6%25B6%25E0%25A7%2581%25E0%25A6%25B8%25E0%25A6%25B9-%25E0%25A6%259A%25E0%25A6%25BE%25E0%25A6%25B0%25E0%25A6%259C%25E0%25A6%25A8%25E0%25A7%2587%25E0%25A6%25B0-%25E0%25A6%25B2%25E0%25A6%25BE%25E0%25A6%25B6-%25E0%25A6%2589%25E0%25A6%25A6%25E0%25A7%258D%25E0%25A6%25A7%25E0%25A6%25BE%25E0%25A6%25B0&amp;locale=en_US&amp;sdk=joey" style="padding: 0px; margin: 0px; outline: 0px; border-width: initial; border-style: none; position: absolute; visibility: visible; width: 0px; height: 0px;" title="fb:quote Facebook Social Plugin" width="1000px"></iframe></div>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>যে পাঁচজনের লাশ উদ্ধার করা হয়েছে, তাঁরা হলো চররামনগরের হালিমা বেগম (৪০), তাঁর মেয়ে ফরিদা আক্তার (১৮), সাদারচরের বেগম (৩৫) আলোকবাড়িয়া এলাকার রাজু (৫), তার ভাই রাহুল (১০)।</p>\r\n\r\n<p>প্রত্যক্ষদর্শী ব্যক্তিরা জানান, হরিণবাড়িয়া ঘাট থেকে কিছুটা দূরে ইঞ্জিনচালিত যাত্রীবাহী নৌকাটি ডুবে যায়। এ সময় কাছাকাছি থাকা বনভোজনের একটি ট্রলার কয়েকজনকে উদ্ধার করে। অনেকে সাঁতরে তীরে আসেন। এখন পর্যন্ত প্রায় ৩০ জনকে জীবিত উদ্ধার করা হয়েছে। রাজবাড়ী ফায়ার সার্ভিস ও রাজশাহী থেকে যাওয়া ডুবুরি দল সেখানে উদ্ধারকাজ চালাচ্ছে। নৌকাটি ডুবে যাওয়ার কারণ জানা যায়নি। ইঞ্জিনচালিত নৌকাটি যাত্রী পারাপার করত বলে স্থানীয় লোকজন জানান। সাদারচরের দিকে যাওয়ার সময় নৌকাটি ডুবে যায়।</p>\r\n\r\n<p>উপজেলা নির্বাহী কর্মকর্তা (ইউএনও) কামরুল হাসান ও কালিকাপুর ইউনিয়ন পরিষদের (ইউপি) চেয়ারম্যান আতিয়ার রহমানের ভাষ্য, চারজনের লাশ উদ্ধার করা হয়েছে। অন্যদের লাশ উদ্ধারের চেষ্টা চলছে।</p>\r\n', 0, 0, '2016-08-06 04:22:07', 0, '2016-08-06 04:22:07', 0),
(8, '57a5ba949d99b', 7, 9, 'ত্রাণ দিতে এসেছি রাজনীতি করতে নয় : ওবায়দুল কাদের', '<p>রাজবাড়ীর কালুখালী উপজেলার কালিকাপুর ইউনিয়নের হরিণবাড়িয়ায় পদ্মা নদীতে নৌকাডুবির ঘটনায় আজ শ', '<p>রাজবাড়ীর কালুখালী উপজেলার কালিকাপুর ইউনিয়নের হরিণবাড়িয়ায় পদ্মা নদীতে নৌকাডুবির ঘটনায় আজ শনিবার সকাল পর্যন্ত দু্ইশিশুসহ পাঁচজনের লাশ উদ্ধার করা হয়েছে। গতকাল শুক্রবার সন্ধ্যায় নৌকাটি ডুবে যায়।</p>\r\n\r\n<div class="fb-quote fb_iframe_widget" style="padding: 0px; margin: 0px; outline: 0px; display: inline-block; position: absolute; overflow: hidden; left: 369px; top: 418px;"><iframe frameborder="0" height="1000px" name="f86f3faedf6f" scrolling="no" src="https://www.facebook.com/v2.5/plugins/quote.php?app_id=1499138263726489&amp;channel=http%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FLcj5EtQ5qmD.js%3Fversion%3D42%23cb%3Df298b2c63ba9498%26domain%3Dwww.prothom-alo.com%26origin%3Dhttp%253A%252F%252Fwww.prothom-alo.com%252Ff357784f6b426c%26relation%3Dparent.parent&amp;container_width=1332&amp;href=http%3A%2F%2Fwww.prothom-alo.com%2Fbangladesh%2Farticle%2F937474%2F%25E0%25A6%25AA%25E0%25A6%25A6%25E0%25A7%258D%25E0%25A6%25AE%25E0%25A6%25BE%25E0%25A7%259F-%25E0%25A6%25A8%25E0%25A7%258C%25E0%25A6%2595%25E0%25A6%25BE%25E0%25A6%25A1%25E0%25A7%2581%25E0%25A6%25AC%25E0%25A6%25BF%25E0%25A6%25B0-%25E0%25A6%2598%25E0%25A6%259F%25E0%25A6%25A8%25E0%25A6%25BE%25E0%25A7%259F-%25E0%25A6%25B6%25E0%25A6%25BF%25E0%25A6%25B6%25E0%25A7%2581%25E0%25A6%25B8%25E0%25A6%25B9-%25E0%25A6%259A%25E0%25A6%25BE%25E0%25A6%25B0%25E0%25A6%259C%25E0%25A6%25A8%25E0%25A7%2587%25E0%25A6%25B0-%25E0%25A6%25B2%25E0%25A6%25BE%25E0%25A6%25B6-%25E0%25A6%2589%25E0%25A6%25A6%25E0%25A7%258D%25E0%25A6%25A7%25E0%25A6%25BE%25E0%25A6%25B0&amp;locale=en_US&amp;sdk=joey" style="padding: 0px; margin: 0px; outline: 0px; border-width: initial; border-style: none; position: absolute; visibility: visible; width: 0px; height: 0px;" title="fb:quote Facebook Social Plugin" width="1000px"></iframe></div>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>যে পাঁচজনের লাশ উদ্ধার করা হয়েছে, তাঁরা হলো চররামনগরের হালিমা বেগম (৪০), তাঁর মেয়ে ফরিদা আক্তার (১৮), সাদারচরের বেগম (৩৫) আলোকবাড়িয়া এলাকার রাজু (৫), তার ভাই রাহুল (১০)।</p>\r\n\r\n<p>প্রত্যক্ষদর্শী ব্যক্তিরা জানান, হরিণবাড়িয়া ঘাট থেকে কিছুটা দূরে ইঞ্জিনচালিত যাত্রীবাহী নৌকাটি ডুবে যায়। এ সময় কাছাকাছি থাকা বনভোজনের একটি ট্রলার কয়েকজনকে উদ্ধার করে। অনেকে সাঁতরে তীরে আসেন। এখন পর্যন্ত প্রায় ৩০ জনকে জীবিত উদ্ধার করা হয়েছে। রাজবাড়ী ফায়ার সার্ভিস ও রাজশাহী থেকে যাওয়া ডুবুরি দল সেখানে উদ্ধারকাজ চালাচ্ছে। নৌকাটি ডুবে যাওয়ার কারণ জানা যায়নি। ইঞ্জিনচালিত নৌকাটি যাত্রী পারাপার করত বলে স্থানীয় লোকজন জানান। সাদারচরের দিকে যাওয়ার সময় নৌকাটি ডুবে যায়।</p>\r\n\r\n<p>উপজেলা নির্বাহী কর্মকর্তা (ইউএনও) কামরুল হাসান ও কালিকাপুর ইউনিয়ন পরিষদের (ইউপি) চেয়ারম্যান আতিয়ার রহমানের ভাষ্য, চারজনের লাশ উদ্ধার করা হয়েছে। অন্যদের লাশ উদ্ধারের চেষ্টা চলছে।</p>\r\n', 0, 0, '2016-08-06 04:23:16', 0, '2016-08-06 04:23:16', 0),
(9, '57a5bacc922cb', 7, 10, 'চিকিৎসা চলে সিঁড়িতেও', '<p style="text-align:justify">সড়ক পরিবহন ও সেতুমন্ত্রী ওবায়দুল কাদের বলেছেন, আমরা দুর্গতদের মঝে ত্রাণ দিতে এসেছি', '<p style="text-align:justify">সড়ক পরিবহন ও সেতুমন্ত্রী ওবায়দুল কাদের বলেছেন, আমরা দুর্গতদের মঝে ত্রাণ দিতে এসেছি, রাজনীতি করতে আসেনি। প্রধানমন্ত্রী শেখ হাসিনার নির্দেশে আপনাদের পাশে দাঁড়াতে এসেছি। আমরা টেলিভিশন ক্যামেরার সামনে চেহারা দেখাতে আসেনি। চলতি বন্যায় যারা ক্ষতিগ্রস্ত হয়েছেন, ঘর-বাড়ি হারিয়েছেন তাদের এখন এবং ভবিষতেও সহযোগিতা করা হবে। আ&rsquo;লীগ সাধারণ মানুষের পাশে দাঁড়ায়-তাদের সাহায্য করে। আর এটাই হচ্ছে আ&rsquo;লীগের রাজনীতি।</p>\r\n\r\n<p style="text-align:justify">আজ শনিবার শিবালয় উপজেলার আরিচা বেলায়েত হোসেন উচ্চ বিদ্যালয় প্রাঙ্গণে বন্যাদুর্গতদের মাঝে ত্রাণ বিতরণ অনুষ্ঠানে প্রধান অতিথির বক্তব্যে মন্ত্রী এসব কথা বলেন।</p>\r\n\r\n<p style="text-align:justify">মন্ত্রী বলেন, আমি বিএনপি&rsquo;কে বলব, বন্যা দুর্গত মানুষের পাশে দাঁড়ান। মানুষের বিপদের সময় তাদের ভাগ্য নিয়ে রাজনীতি করবেন না। তিনি বিএনপিকে উদ্দশ্যে করে বলেন, কোনো বন্যাকবলিত এলাকায় আপনাদের কোনো টিম বা কোন নেতাদের আজ পর্যন্ত দেখলাম না।</p>\r\n\r\n<p style="text-align:justify">মন্ত্রী আরো বলেন, এটা আগস্ট মাস, শোকের মাস। আমাদের নেত্রীর নির্দেশ হলো বন্যাদুর্গত ও নদী ভাঙনে যেসব মানুষ বিপদে আছে, তাদের পাশে দাঁড়ালে বঙ্গবন্ধুর আত্মা শান্তি পাবেন।</p>\r\n\r\n<p style="text-align:justify">এ সময় মন্ত্রীর সাথে ছিলেন আ&rsquo;লীগ যুগ্ম সাধারণ সম্পাদক ও সাবেক মন্ত্রী জাহাঙ্গীর কবীর নানক, মানিকগঞ্জ-১ আসনের সংসদ সদস্য এএম নাঈমুর রহমান দুর্জয়, আ&rsquo;লীগ যুব ও ক্রীড়া সম্পাদক সফিউল আরেফিল টুটুল, মানিকগঞ্জ জেলা প্রশাসক রাশিদা ফেরদৌস, পুলিশ সুপার মাহফুজুর রহমান, জেলা আ&rsquo;লীগ সভাপতি অ্যাডভোকেট গোলাম মহীউদ্দিন, সাধারণ সম্পাদক আবদুস সালামসহ জেলা ও উপজেলা আ&rsquo;লীগের বিভিন্ন পর্যায়ের নেতা-কর্মীরা।</p>\r\n\r\n<p style="text-align:justify">এ সময় চার কেজি করে চাল, দু&rsquo;কেজি আলু, ৫শ&rsquo; গ্রাম ডাল, তেল, খাবার স্যালাইন, রুটি, নগদ টাকা বিতরণ করা হয়।</p>\r\n', 0, 0, '2016-08-06 04:24:12', 0, '2016-08-06 04:24:12', 0);
INSERT INTO `news_table` (`id`, `news_id`, `main_category`, `sub_category`, `news_title`, `short_details`, `full_details`, `status`, `position`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(10, '57a5bb0661aa5', 7, 10, 'আশুলিয়ায় মানববন্ধন থানায় মামলা', '<p><span style="color:rgb(34, 34, 34); font-family:solaimanlipi,arial,vrinda,fallbackbengalifont,helvetica,sans-serif; font-size:16px">গণমাধ্যমকর্মীদের ওপর &lsquo;ভূমিদস্যুদের&rsquo; হ', '<p><span style="color:rgb(34, 34, 34); font-family:solaimanlipi,arial,vrinda,fallbackbengalifont,helvetica,sans-serif; font-size:16px">গণমাধ্যমকর্মীদের ওপর &lsquo;ভূমিদস্যুদের&rsquo; হামলার প্রতিবাদে মানববন্ধন হয়েছে। ঢাকার আশুলিয়া প্রেসক্লাবের সামনে গতকাল শুক্রবার সকাল ১০টার দিকে এ কর্মসূচি পালন করা হয়। এতে সাভার ও আশুলিয়ার গণমাধ্যমকর্মীরা অংশ নেন।</span><br />\r\n<span style="color:rgb(34, 34, 34); font-family:solaimanlipi,arial,vrinda,fallbackbengalifont,helvetica,sans-serif; font-size:16px">এদিকে হামলার ওই ঘটনায় আহত সাংবাদিক খোকা মুহাম্মদ চৌধুরী বাদী হয়ে গতকাল ভোরে আশুলিয়া থানায় মামলা করেছেন। এতে ওমর আলী, তাঁর সহযোগী জনি, রুস্তম, সোহেলসহ অজ্ঞাতনামা আরও ১৫ জনকে আসামি করা হয়েছে। পরে রুস্তম ও সোহেলকে পুলিশ গ্রেপ্তার করেছে।</span><br />\r\n<span style="color:rgb(34, 34, 34); font-family:solaimanlipi,arial,vrinda,fallbackbengalifont,helvetica,sans-serif; font-size:16px">বৃহস্পতিবার নবীনগর-কালিয়াকৈর সড়কের পাশে গণকবাড়ি মৌজায় সওজের জমি মাপতে গিয়ে সওজ নয়ারহাট উপবিভাগের উপসহকারী প্র</span><span style="color:rgb(34, 34, 34); font-family:solaimanlipi,arial,vrinda,fallbackbengalifont,helvetica,sans-serif; font-size:16px">কৌশলী শহীদুল ইসলাম ও সার্ভেয়ার (জরিপকারী) আরিফুর রহমান হামলার শিকার হন। এ সময় গণমাধ্যমকর্মীদের ওপরও হামলা করা হয়।</span><br />\r\n<span style="color:rgb(34, 34, 34); font-family:solaimanlipi,arial,vrinda,fallbackbengalifont,helvetica,sans-serif; font-size:16px">অভিযোগ রয়েছে, ওমর আলী দীর্ঘদিন ধরে সওজের প্রায় নয় বিঘা জমি দখল করে আছেন। সেখানে তিনি স্থাপনা নির্মাণ করে ভাড়া আদায় করে আসছেন। সওজ কর্তৃপক্ষ ওই জমি মাপতে গেলে ওমর আলীর নেতৃত্বে হামলা হয়। তবে ওমর আলীর দাবি, ওই জমি তাঁর।</span></p>\r\n\r\n<div>&nbsp;</div>\r\n', 0, 0, '2016-08-06 04:25:10', 0, '2016-08-06 04:25:10', 0),
(11, '57a5bea3e53df', 8, 11, 'ইন্টারনেটই বড় হুমকি!', '<p><span style="color:rgb(34, 34, 34); font-family:solaimanlipi,arial,vrinda,fallbackbengalifont,helvetica,sans-serif; font-size:16px">ব্রাজিলে এই মুহূর্তে সবচেয়ে বড় হুমকি কোনটি?', '<p><span style="color:rgb(34, 34, 34); font-family:solaimanlipi,arial,vrinda,fallbackbengalifont,helvetica,sans-serif; font-size:16px">ব্রাজিলে এই মুহূর্তে সবচেয়ে বড় হুমকি কোনটি? অলিম্পিকে আসা অতিথিদের জন্য সবচেয়ে বড় হুমকি হতে পারে ইন্টারনেট। কারণ, সেখানে পাতা হতে পারে প্রতারণার জাল। বিশেষজ্ঞরা বলছেন, দেশটিতে ইতিমধ্যে ইন্টারনেটভিত্তিক ফিশিং কর্মকাণ্ড বেড়ে গেছে। লোভনীয় প্রস্তাব পাঠিয়ে ইন্টারনেটের মাধ্যমে প্রতারণাকে ফিশিং স্ক্যাম বলে। ব্রাজিলের সম্ভাব্য ইন্টারনেট হুমকি নিয়ে একটি প্রতিবেদন প্রকাশ করেছে বিজনেস ইনসাইডার।&nbsp;</span><br />\r\n<span style="color:rgb(34, 34, 34); font-family:solaimanlipi,arial,vrinda,fallbackbengalifont,helvetica,sans-serif; font-size:16px">প্রতিবেদনে জানানো হয়, রিও অলিম্পিকের বর্ণাঢ্য উদ্বোধন হয়ে গেছে। ক্রীড়াজগতের এই বিশাল যজ্ঞের নিরাপত্তার কাজ সামাল দেওয়া আয়োজকদের জন্য একটি বড় চ্যালেঞ্জ বলে মানছেন সংশ্লিষ্ট সবাই। ব্রাজিলের সরকার পরিকল্পনা করেছে, ৮৫ হাজার সশস্ত্র সেনা ও পুলিশ সদস্য দিয়ে রিও ডি জেনিরোতে অলিম্পিক গেমসের সার্বিক নিরাপত্তা নিশ্চিত করা হবে। কিন্তু বিভিন্ন বিশেষজ্ঞর প্রতিবেদন ও বিশ্লেষণে বলা হচ্ছে, অলিম্পিক দেখতে আসা অতিথিরা ইন্টারনেট থেকে সবচেয়ে বড় হুমকির মুখোমুখি হবেন।&nbsp;</span><br />\r\n<span style="color:rgb(34, 34, 34); font-family:solaimanlipi,arial,vrinda,fallbackbengalifont,helvetica,sans-serif; font-size:16px">সাইবার নিরাপত্তা প্রদানকারী প্রতিষ্ঠান ফোর্টিনেট ২ আগস্ট এক প্রতিবেদনে বলেছে, ব্রাজিলে ক্ষতিকর ও ফিশিং (প্রলুব্ধকারী অনলাইন কার্যক্রম) ডোমেইন নাম ও ইউআরএলের পরিমাণ ক্রমশ বৃদ্ধি পাচ্ছে।&nbsp;</span><br />\r\n<span style="color:rgb(34, 34, 34); font-family:solaimanlipi,arial,vrinda,fallbackbengalifont,helvetica,sans-serif; font-size:16px">প্রতিবেদনে জানানো হয়, দেশটিতে ক্ষতিকর ইউআরএলের সংখ্যা বেড়েছে ৮৩ শতাংশ। যেখানে সমগ্র বিশ্বে এর পরিমাণ বেড়েছে মাত্র ১৬ শতাংশ। এ ছাড়া ইন্টারনেটভিত্তিক ফিশিং কর্মকাণ্ড সারা বিশ্বেই বেড়েছে। ফোর্টিনেটের প্রতিবেদন অনুযায়ী, গত এপ্রিল থেকে জুন মাসে এ ধরনের কাজ বেড়েছে ৭৬ শতাংশ। আর ২০১৬ সালের দ্বিতীয় প্রান্তিকে ব্রাজিল, কলম্বিয়া, রাশিয়া ও ভারতে ফিশিং মেইলের কার্যক্রমও বাড়তে দেখা গেছে।&nbsp;</span><br />\r\n<span style="color:rgb(34, 34, 34); font-family:solaimanlipi,arial,vrinda,fallbackbengalifont,helvetica,sans-serif; font-size:16px">ক্যাসপারস্কি ল্যাবের একটি প্রতিবেদনে জানানো হয়, ব্রাজিলে ফিশিং কর্মকাণ্ডের সবচেয়ে বেশি শিকার হচ্ছে অলিম্পিক গেমসের সঙ্গে সংশ্লিষ্ট কর্মীরা। এ ক্ষেত্রে তাঁদের পরিচয়পত্র সাইবার হামলাকারীদের লক্ষ্য। চলতি বছরের ফেব্রুয়ারি মাসে ইন্টারনেটে এমন কর্মকাণ্ডের হদিস পাওয়া গেছে বলে জানানো হয়েছে ওই প্রতিবেদনে।&nbsp;</span><br />\r\n<span style="color:rgb(34, 34, 34); font-family:solaimanlipi,arial,vrinda,fallbackbengalifont,helvetica,sans-serif; font-size:16px">ক্যাসপারস্কির গবেষকদের বরাত দিয়ে ইনসাইট ক্রাইম জানায়, ব্রাজিলে পরীক্ষা চালিয়ে দেখা গেছে, সেখানে পর্যটকদের ব্যবহার করা প্রতি চারটির মধ্যে একটি ওয়্যারলেস ইন্টারনেট অ্যাকসেস পয়েন্টের নিরাপত্তাব্যবস্থা অত্যন্ত দুর্বল। এগুলোতে সহজেই সাইবার হামলা করা যেতে পারে বলে তাঁদের আশঙ্কা।&nbsp;</span><br />\r\n<span style="color:rgb(34, 34, 34); font-family:solaimanlipi,arial,vrinda,fallbackbengalifont,helvetica,sans-serif; font-size:16px">অন কল ইন্টারন্যাশনালের প্রধান নিরাপত্তা কর্মকর্তা জিম হাটন বলেন, সেখানে অবশ্যই বুদ্ধিমান অপরাধীরা ওত পেতে রয়েছে। এরা ক্রেডিট কার্ড ও পরিচয়পত্র জালিয়াতির কাজ করতে পারে। যদি বিভিন্ন কোম্পানি, বিশেষ করে স্পনসর কোম্পানিগুলো ব্রাজিলে ভ্রমণ করে, তাহলে তারা তাদের বিপণন পরিকল্পনা, মক্কেলদের ব্যাপারে ও কোম্পানির মালিকানা-সম্পর্কিত বিভিন্ন তথ্য সঙ্গে রাখবে। সেগুলোও কিন্তু ঝুঁকিতে রয়েছে।&nbsp;</span><br />\r\n<span style="color:rgb(34, 34, 34); font-family:solaimanlipi,arial,vrinda,fallbackbengalifont,helvetica,sans-serif; font-size:16px">মার্কিন স্টেট ডিপার্টমেন্টের ওভারসিজ সিকিউরিটি অ্যাডভাইজরি কাউন্সিল (ওএসএসি) তাদের প্রতিবেদনে বলেছে, ব্রাজিলে সাইবার নিরাপত্তা ও অনলাইন জালিয়াতির ঘটনায় আর্থিক ক্ষতির পরিমাণ শত কোটি ডলারের কোঠা ছাড়িয়ে গেছে। আর ইনসাইট ক্রাইম বলছে, এসব অবৈধ কার্যক্রম চলতি বছরগুলোতে আরও বেড়েছে।&nbsp;</span><br />\r\n<span style="color:rgb(34, 34, 34); font-family:solaimanlipi,arial,vrinda,fallbackbengalifont,helvetica,sans-serif; font-size:16px">সাম্প্রতিক প্রতিবেদনগুলো দেখিয়েছে যে বিশ্বের বিভিন্ন প্রান্তের অনলাইন অপরাধীদের গোষ্ঠীগুলো ব্রাজিলের সাইবার অপরাধীদের সঙ্গে যোগাযোগের চেষ্টা করছে। অলিম্পিক গেমস উপলক্ষে ব্রাজিলে প্রায় পাঁ লাখ পর্যটক যাবেন বলে আশা করা হচ্ছে। সে ক্ষেত্রে সাইবার অপরাধীরাও যে অনেক মওকা পাবে, তা বোঝাই যায়।</span></p>\r\n', 0, 0, '2016-08-06 04:40:35', 0, '2016-08-06 04:40:35', 0),
(12, '57a5becff3c5f', 9, 12, 'প্রতারণা বন্ধ করছে ফেসবুক', '<p>ফেসবুক গতকাল বৃহস্পতিবার থেকে নিউজ ফিড ফর্মুলা হালনাগাদ করেছে। ফেসবুক ব্যবহারকারীদের কাছে ', '<p>ফেসবুক গতকাল বৃহস্পতিবার থেকে নিউজ ফিড ফর্মুলা হালনাগাদ করেছে। ফেসবুক ব্যবহারকারীদের কাছে আকর্ষণীয় বা অতিরঞ্জিত শিরোনাম দিয়ে ক্লিক করতে প্রলুব্ধ করা হয়&mdash;এমন শিরোনাম বাদ দেওয়া হয়েছে।</p>\r\n\r\n<div class="fb-quote fb_iframe_widget" style="padding: 0px; margin: 0px; outline: 0px; display: inline-block; position: absolute; overflow: hidden; left: 397px; top: 419px;"><iframe frameborder="0" height="1000px" name="f356076ee0b432c" scrolling="no" src="https://www.facebook.com/plugins/quote.php?app_id=&amp;channel=http%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FLcj5EtQ5qmD.js%3Fversion%3D42%23cb%3Df1a3280303d6c24%26domain%3Dwww.prothom-alo.com%26origin%3Dhttp%253A%252F%252Fwww.prothom-alo.com%252Ff298add1d62baa%26relation%3Dparent.parent&amp;container_width=1332&amp;href=http%3A%2F%2Fwww.prothom-alo.com%2Ftechnology%2Farticle%2F936640%2F%25E0%25A6%25AA%25E0%25A7%258D%25E0%25A6%25B0%25E0%25A6%25A4%25E0%25A6%25BE%25E0%25A6%25B0%25E0%25A6%25A3%25E0%25A6%25BE-%25E0%25A6%25AC%25E0%25A6%25A8%25E0%25A7%258D%25E0%25A6%25A7-%25E0%25A6%2595%25E0%25A6%25B0%25E0%25A6%259B%25E0%25A7%2587-%25E0%25A6%25AB%25E0%25A7%2587%25E0%25A6%25B8%25E0%25A6%25AC%25E0%25A7%2581%25E0%25A6%2595&amp;locale=en_US&amp;sdk=joey" style="padding: 0px; margin: 0px; outline: 0px; border-width: initial; border-style: none; position: absolute; visibility: visible; width: 0px; height: 0px;" title="fb:quote Facebook Social Plugin" width="1000px"></iframe></div>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><br />\r\nফেসবুকের গবেষক ক্রিস্টিন হেনড্রিক্স ও অ্যালেক্স পেজাকোভিচ এক ব্লগ পোস্টে জানিয়েছে, ফেসবুকের নিউজ ফিডে পরিবর্তন আনার লক্ষ্য হচ্ছে আকর্ষণীয় ও অতিরঞ্জিত শিরোনাম দিয়ে পাঠককে ভুল জায়গায় নিয়ে যাওয়া এবং আরও বিস্তারিত জানার জন্য একটি লিংকে ক্লিক করতে বলা পোস্টগুলোকে সরিয়ে ফেলা।<br />\r\n<br />\r\nফেসবুকে সাধারণত বেশ কিছু নিউজ ফিডে প্রলুব্ধকর শিরোনাম দেখা যায় যেমন&mdash;&lsquo;হোয়েন সি লুকড আন্ডার হার কোচ কুশন অ্যান্ড স দিস...আই ওয়াজ শকড!&rsquo; এবং &lsquo;হি পুট গারলিক ইন হিড শুজ বিফোর গোয়িং টু বেড অ্যান্ড হট হ্যাপেনস নেক্সট ইজ হার্ড টু বিলিভ&rsquo; প্রভৃতি।<br />\r\n<br />\r\nফেসবুক কর্তৃপক্ষের ভাষ্য, এ ধরনের ক্লিকবেইট বা ক্লিক ব্যবসার পদ্ধতি সরিয়ে ফেলতে তারা কঠোর অবস্থানে। ফেসবুক এমন একটি সিস্টেম ব্যবহার করছে, যা পাঠককে বিভ্রান্তকর শিরোনামগুলো সরিয়ে ফেলবে।<br />\r\n<br />\r\nহেনড্রিক্স বলেন, ফেসবুক ব্যবহারকারীরা এ ধরনের লিংক ও শিরোনাম নিয়ে অভিযোগ করেন। তাঁরা এগুলো সরিয়ে ফেলতে অনুরোধ করেন। এখন থেকে ফেসবুক ব্যবহারকারী এ ধরনের প্রতারণামূলক শিরোনামের নিউজ ফিড খুব কম পাবেন।</p>\r\n\r\n<p><br />\r\nফেসবুকের ভাষ্য, দুটি মূল বিষয় ধরে খবরের শিরোনামগুলো নির্ধারণ করবে ফেসবুক। একটি হচ্ছে নিউজ ফিডের সঙ্গে শিরোনামের মিল দেখে, আরেকটি হচ্ছে শিরোনাম অতিরঞ্জিত করা হয়েছে কি না, তা দেখে। এভাবে যেগুলো ফেসবুক ব্যবহারকারীকে ক্লিক করতে বাধ্য করে, সেগুলোর বিষয়ে ব্যবস্থা নেবে ফেসবুক। তথ্যসূত্র : এএফপি।</p>\r\n', 0, 0, '2016-08-06 04:41:20', 0, '2016-08-06 04:41:20', 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=56 ;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `image_title`, `image`, `back_link`, `status`) VALUES
(13, 'Dhaka', '1470214865.jpg', 'Dhaka', 0),
(14, 'Dhakadfdg', '1470207488.jpg', 'Bangladesh', 0),
(15, 'dfdsg', '1469609505.jpg', 'dfsdf', 0),
(17, 'dfdsg', '1469609590.jpg', 'dfgfdg', 0),
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
(55, 'Dhaka', '1470214826.jpg', 'dfgfdg', 0);

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
(1, '6', 'Hierarchic', 0),
(2, '6', 'principle', 0),
(3, '6', 'Modularity', 0),
(4, '6', 'Simplicity', 0),
(5, '6', 'Selectivity', 0),
(6, '6', 'Universality', 0),
(7, '7', 'English', 0),
(8, '7', 'Français', 0),
(9, '7', 'Svenska', 0),
(10, '7', 'Русский', 0),
(11, '8', 'Home', 0),
(12, '9', 'About', 0);

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
