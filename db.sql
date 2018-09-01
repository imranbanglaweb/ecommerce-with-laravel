-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2018 at 06:25 PM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce_elite_shoppy`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_07_08_110136_create_category_table', 1),
(4, '2018_07_09_115431_create_product_table', 2),
(5, '2017_09_25_114839_create_tbl_menufeature', 3),
(6, '2017_09_29_040216_table_tbl_shipping', 3),
(7, '2017_09_29_172943_table_tbl_order', 3),
(8, '2017_09_29_173035_table_tbl_order_details', 3),
(9, '2017_09_29_173119_table_tbl_payment', 3),
(10, '2017_09_29_224353_table_tbl_product_image', 3),
(11, '2018_07_10_033820_create_slider_table', 4),
(12, '2018_07_10_035004_create_slider_table', 5),
(13, '2018_07_10_045448_create_logo_table', 6),
(14, '2018_07_10_045748_create_social_table', 7),
(15, '2018_07_10_045940_create_sitting_table', 8),
(16, '2017_09_28_233243_table_tbl_customer', 9),
(17, '2017_09_25_114927_create_tbl_page', 10),
(18, '2018_07_22_072613_create_page_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_dis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `category_name`, `category_dis`, `category_slug`, `created_at`, `updated_at`) VALUES
(1, 'MEN', 'mens wear all kind', 'men-slug', NULL, NULL),
(5, 'WOMEN', 'Womens Wear', 'women-slug', NULL, NULL),
(6, 'Child Collection', 'Child Collection', 'Child Collection', NULL, NULL),
(13, 'Electronics', 'Electronics', 'Electronics', NULL, NULL),
(15, 'Food', 'Food', 'Food', NULL, NULL),
(16, 'Phone & Tablets', 'Phone & Tablets', 'Phone & Tablets', NULL, NULL),
(17, 'TV,Audio and Camera', 'TV,Audio and Camera', 'TV,Audio and Camera', NULL, NULL),
(18, 'Beauty & Travels', 'Beauty & Travels', 'Beauty & Travels', NULL, NULL),
(19, 'Sports', 'Sports', 'Sports', NULL, NULL),
(20, 'Books', 'Books', 'Books', NULL, NULL),
(22, 'Others', 'Others', 'Others', NULL, NULL),
(23, 'Home Applience', 'Home Applience', 'Home Applience', NULL, NULL),
(24, 'Health Products', 'Health Products', 'Health Products', NULL, NULL),
(25, 'Cooking', 'Cooking', 'Cooking', NULL, NULL),
(26, 'Meat And Fish', 'Meat And Fish', 'Meat And Fish', NULL, NULL),
(27, 'Beverages', 'Beverages', 'Beverages', NULL, NULL),
(28, 'Accessories', 'Accessories', 'Accessories', NULL, NULL),
(29, 'Office Furniture', 'Office Furniture', 'Office Furniture', NULL, NULL),
(30, 'Computer', 'Computer', 'Computer', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `customer_id` int(10) UNSIGNED NOT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_address` text COLLATE utf8mb4_unicode_ci,
  `customer_city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`customer_id`, `customer_name`, `email`, `password`, `mobile`, `customer_address`, `customer_city`, `country`, `zip_code`, `fax_number`, `created_at`, `updated_at`) VALUES
(2, 'imran', 'md.imran1200@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '01918329829', 'dhaka', '0', 'bn', '150', '454545', NULL, NULL),
(3, 'LL', 'rahman2bits@gmail.com', '14f5cd16659409413ce2eea2b5ab7e2e', '01915645401', 'dhaka', '2', 'un', '1205', '454545', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_logo`
--

CREATE TABLE `tbl_logo` (
  `id` int(10) UNSIGNED NOT NULL,
  `logo_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_logo`
--

INSERT INTO `tbl_logo` (`id`, `logo_title`, `logo_link`, `logo_image`, `created_at`, `updated_at`) VALUES
(4, 'B Shop', 'http://localhost/ecommerce_with_laravel/', 'public/Backend/LogoImage/logo-b-shop.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menufecture`
--

CREATE TABLE `tbl_menufecture` (
  `id` int(10) UNSIGNED NOT NULL,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_menufecture`
--

INSERT INTO `tbl_menufecture` (`id`, `brand_name`, `status`, `created_at`, `updated_at`) VALUES
(5, 'Sony', 1, '2018-07-18 14:55:13', '2018-07-18 14:55:13'),
(2, 'Orion', 1, '2018-07-09 16:24:59', '2018-07-09 16:24:59'),
(3, 'Bata', 3, '2018-07-09 16:26:56', '2018-07-09 16:26:56'),
(4, 'Apex', 4, '2018-07-09 16:49:05', '2018-07-09 16:49:05'),
(6, 'Walton', 1, '2018-07-18 14:55:25', '2018-07-18 14:55:25'),
(8, 'Oppo', 1, '2018-07-22 17:40:57', '2018-07-22 17:40:57'),
(9, 'Samsung', 1, '2018-07-22 17:44:40', '2018-07-22 17:44:40'),
(10, 'Nivea', 1, '2018-07-22 17:59:15', '2018-07-22 17:59:15'),
(11, 'Pran', 1, '2018-07-23 06:40:01', '2018-07-23 06:40:01');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `order_total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `customer_id`, `shipping_id`, `payment_id`, `order_total`, `order_status`, `order_date`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 5, '74,000.00', 'pending', NULL, NULL, NULL),
(2, 3, 2, 6, '30,000.00', 'pending', NULL, NULL, NULL),
(3, 3, 2, 7, '30,000.00', 'pending', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_details`
--

CREATE TABLE `tbl_order_details` (
  `order_details_id` int(10) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_order_details`
--

INSERT INTO `tbl_order_details` (`order_details_id`, `order_id`, `product_id`, `product_name`, `product_price`, `product_quantity`, `created_at`, `updated_at`) VALUES
(1, 1, 5, 'Sony R302E 32" - LED TV - Black', '24000', 2, NULL, NULL),
(2, 1, 3, 'Rajguru Royal Blue Tassor Silk Saree for Women', '15000', 1, NULL, NULL),
(3, 1, 2, 'Analog Watch', '8000', 1, NULL, NULL),
(4, 1, 1, 'Big Wing Sneakers (Navy)', '3000', 1, NULL, NULL),
(5, 2, 3, 'Rajguru Royal Blue Tassor Silk Saree for Women', '15000', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page`
--

CREATE TABLE `tbl_page` (
  `id` int(10) UNSIGNED NOT NULL,
  `page_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_dis` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_page`
--

INSERT INTO `tbl_page` (`id`, `page_title`, `page_slug`, `page_dis`, `created_at`, `updated_at`) VALUES
(11, 'Contat Us', 'Contat-Us', '<p style="text-align: center;"><em><strong>Contat Us</strong></em></p>', NULL, NULL),
(10, 'About Us', 'about-us', '<h1><em><strong><span style="color: #008080;">About Us</span></strong></em></h1>', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `payment_id` int(10) UNSIGNED NOT NULL,
  `payment_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`payment_id`, `payment_type`, `payment_status`, `created_at`, `updated_at`) VALUES
(1, 'Paypal', 'pending', NULL, NULL),
(2, 'Cash_On_delivery', 'pending', NULL, NULL),
(3, 'Cash_On_delivery', 'pending', NULL, NULL),
(4, 'Cash_On_delivery', 'pending', NULL, NULL),
(5, 'Cash_On_delivery', 'pending', NULL, NULL),
(6, 'SSL_Commerze', 'pending', NULL, NULL),
(7, 'Cash_On_delivery', 'pending', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `menufecture_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `product_shortdis` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_longdis` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_status` tinyint(4) NOT NULL,
  `product_top` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `category_id`, `menufecture_id`, `product_name`, `product_price`, `product_quantity`, `product_shortdis`, `product_longdis`, `product_status`, `product_top`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 'Big Wing Sneakers (Navy)', '3000', 5, 'Big Wing Sneakers (Navy)', 'Big Wing Sneakers (Navy)', 1, NULL, NULL, NULL),
(2, 1, 2, 'Analog Watch', '8000', 45, 'Analog Watch', 'Analog Watch', 1, NULL, NULL, NULL),
(3, 5, 2, 'Rajguru Royal Blue Tassor Silk Saree for Women', '15000', 5, 'Rajguru Royal Blue Tassor Silk Saree for Women', 'Rajguru Royal Blue Tassor Silk Saree for Women', 1, NULL, NULL, NULL),
(6, 16, 8, 'OPPO F7 - Smartphone - 6.23" - 6GB RAM - 128GB ROM - 16MP Camera - Diamond Black', '35000', 2, 'Display Type: LTPS IPS LCD capacitive touchscreen, 16M colors Display Size: 6.23 inches, 96.9 cm2 (~82.5% screen-to-body ratio) Resolution: 1080 x 2280 pixels (~405 ppi density) Multitouch: Yes Protection: Corning Gorilla Glass 5, ColorOS 5.0 Card slot: microSD, up to 256 GB (dedicated slot)', 'Display Type: LTPS IPS LCD capacitive touchscreen, 16M colors Display Size: 6.23 inches, 96.9 cm2 (~82.5% screen-to-body ratio) Resolution: 1080 x 2280 pixels (~405 ppi density) Multitouch: Yes Protection: Corning Gorilla Glass 5, ColorOS 5.0 Card slot: microSD, up to 256 GB (dedicated slot)', 1, NULL, NULL, NULL),
(5, 13, 5, 'Sony R302E 32" - LED TV - Black', '24000', 100, 'HD Ready Clear Resolution Enhancer Picture Enhancement: 24p True Cinema Smartphone Plug and Play', 'HD Ready Clear Resolution Enhancer Picture Enhancement: 24p True Cinema Smartphone Plug and Play', 1, NULL, NULL, NULL),
(7, 16, 9, 'Samsung Galaxy S9 Plus - Smartphone - 6.2" - 6GB RAM - 64GB ROM - 12 MP Camera - Lilac Purple', '105900', 1, 'Up to 12-month EMI facility6.2" Super AMOLED Infinity DisplayQualcomm Snapdragon 845 processorOcta-Core, 2.8GHz (2.65GHz) + 1.76GHz64GB ROM and 6GB RAM12MP Rear and 8MP Front Camera', 'Up to 12-month EMI facility6.2" Super AMOLED Infinity DisplayQualcomm Snapdragon 845 processorOcta-Core, 2.8GHz (2.65GHz) + 1.76GHz64GB ROM and 6GB RAM12MP Rear and 8MP Front Camera', 1, NULL, NULL, NULL),
(8, 18, 10, 'Nivea Face Wash Pro- White Ice Mud Serun Foam For Men - 120gm', '298', 1, 'Product Type: Face Wash Capacity: 120gm Gender: Men', 'Product Type: Face Wash Capacity: 120gm Gender: Men', 1, NULL, NULL, NULL),
(9, 17, 9, 'Samsung 32" J4303 Smart LED TV - Black', '30000', 1, 'Product Type: TVColor: BlackDisplay Type: LEDModel: J4303Brand: SamsungMore vibrant colours for better imag', 'Product Type: TVColor: BlackDisplay Type: LEDModel: J4303Brand: SamsungMore vibrant colours for better imag', 1, NULL, NULL, NULL),
(10, 15, 11, 'Pran Pran Bombay Biryani Mix – 40 gm Combo Of 2Pack', '120', 1, 'Product Type: Spices Capacity: 40gm Combo Of 2Pack Brand: Pran Good Quality Product', 'Product Type: Spices Capacity: 40gm Combo Of 2Pack Brand: Pran Good Quality Product', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_image`
--

CREATE TABLE `tbl_product_image` (
  `product_image_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `image_option` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_label` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_product_image`
--

INSERT INTO `tbl_product_image` (`product_image_id`, `product_id`, `image_option`, `image_label`, `created_at`, `updated_at`) VALUES
(1, 1, 'product_image/174036s1.jpg', 1, NULL, NULL),
(2, 1, 'product_image/174036s2.jpg', 0, NULL, NULL),
(3, 1, 'product_image/174036s3.jpg', 0, NULL, NULL),
(4, 1, 'product_image/174036s4.jpg', 0, NULL, NULL),
(5, 1, 'product_image/174036s7.jpg', 0, NULL, NULL),
(6, 2, 'product_image/190832m7.jpg', 1, NULL, NULL),
(7, 2, 'product_image/190832top2.jpg', 0, NULL, NULL),
(8, 2, 'product_image/190832w6.jpg', 0, NULL, NULL),
(9, 3, 'product_image/1405591.jpg', 1, NULL, NULL),
(10, 4, 'product_image/0304191 (1).jpg', 1, NULL, NULL),
(11, 4, 'product_image/0304191 (2).jpg', 0, NULL, NULL),
(12, 4, 'product_image/0304192.jpg', 0, NULL, NULL),
(13, 4, 'product_image/0304193.jpg', 0, NULL, NULL),
(14, 4, 'product_image/0304194.jpg', 0, NULL, NULL),
(15, 4, 'product_image/0304195.jpg', 0, NULL, NULL),
(16, 5, 'product_image/1458502 (1).jpg', 1, NULL, NULL),
(17, 5, 'product_image/1458503 (1).jpg', 0, NULL, NULL),
(18, 5, 'product_image/1458504 (1).jpg', 0, NULL, NULL),
(19, 5, 'product_image/145850sony.jpg', 0, NULL, NULL),
(20, 6, 'product_image/174229oppo01.jpg', 1, NULL, NULL),
(21, 6, 'product_image/174229oppo02.jpg', 0, NULL, NULL),
(22, 6, 'product_image/174229oppo03.jpg', 0, NULL, NULL),
(23, 6, 'product_image/174229oppo04.jpg', 0, NULL, NULL),
(24, 7, 'product_image/175452samsun01.jpg', 1, NULL, NULL),
(25, 7, 'product_image/175452samsun02.jpg', 0, NULL, NULL),
(26, 7, 'product_image/175452samsun03.jpg', 0, NULL, NULL),
(27, 7, 'product_image/175452samsung.jpg', 0, NULL, NULL),
(28, 7, 'product_image/175452Samsung-Galaxy-Grand-Prime-1024x565.jpg', 0, NULL, NULL),
(29, 8, 'product_image/180021nivea.jpg', 1, NULL, NULL),
(30, 9, 'product_image/063801samsung-tv01.jpg', 1, NULL, NULL),
(31, 9, 'product_image/063801samsung-tv02.jpg', 0, NULL, NULL),
(32, 9, 'product_image/063801samsung-tv03.jpg', 0, NULL, NULL),
(33, 10, 'product_image/064059pran.jpg', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shipping`
--

CREATE TABLE `tbl_shipping` (
  `shipping_id` int(10) UNSIGNED NOT NULL,
  `shipping_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_shipping`
--

INSERT INTO `tbl_shipping` (`shipping_id`, `shipping_name`, `company_name`, `email`, `mobile`, `address`, `city`, `country`, `zip_code`, `phone_number`, `created_at`, `updated_at`) VALUES
(1, 'Agmira', 'Agmira', 'agmira@yahoo.com', '01915645401', 'dhaka', '0', 'un', '1205', '55-55-55', NULL, NULL),
(2, 'a', 'a', 'md.imran10@gmail.com', '01918329829', 'dhaka', '1', 'bn', '1205', '55-55-55', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sitting`
--

CREATE TABLE `tbl_sitting` (
  `id` int(10) UNSIGNED NOT NULL,
  `theme_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `theme_dis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `theme_author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `theme_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_sitting`
--

INSERT INTO `tbl_sitting` (`id`, `theme_name`, `theme_dis`, `theme_author`, `footer_text`, `theme_color`, `created_at`, `updated_at`) VALUES
(1, 'Ecommerce', 'Ecommerce', 'imran', 'imranweb-bd.com', '#8080ff', '2018-07-10 19:37:04', '2018-07-10 19:37:04');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `id` int(10) UNSIGNED NOT NULL,
  `slider_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_caption` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_status` tinyint(4) NOT NULL,
  `slider_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`id`, `slider_title`, `slider_caption`, `slider_content`, `slider_link`, `slider_status`, `slider_image`, `created_at`, `updated_at`) VALUES
(1, 'SUMMER COLLECTION', 'New Arrivals On Sale', 'SUMMER COLLECTION', 'https://www.google.com/', 1, 'public/Backend/SliderImage/m7.jpg', '2018-07-10 04:21:25', '2018-07-10 04:21:25'),
(2, 'THE BIGGEST SALE', 'THE BIGGEST SALE', 'THE BIGGEST SALE', 'https://www.google.com/', 1, 'public/Backend/SliderImage/banner3.jpg', '2018-07-10 04:32:14', '2018-07-10 04:32:14'),
(3, 'SUMMER COLLECTION', 'Summer Sale', 'logo_image', 'https://www.google.com/', 1, 'public/Backend/SliderImage/banner4.jpg', '2018-07-10 15:59:46', '2018-07-10 15:59:46'),
(4, 'THE BIGGEST SALE', 'THE BIGGEST SALE', 'THE BIGGEST SALE', 'https://www.google.com/', 1, 'public/Backend/SliderImage/100900linkdin.png', '2018-07-10 16:00:57', '2018-07-10 16:00:57');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_social`
--

CREATE TABLE `tbl_social` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_social`
--

INSERT INTO `tbl_social` (`id`, `name`, `title`, `link`, `image`, `created_at`, `updated_at`) VALUES
(66, 'Twitter', 'twitter', 'https://twitter.com/', 'public/Backend/Socialimage/151935linkdin.png', NULL, NULL),
(62, 'facebook', 'facebook', 'http://facebook.com', 'public/Backend/Socialimage/083052facebook.png', NULL, NULL),
(63, 'Linkdin', 'Linkdin Social Site', 'https://www.linkdin.com/', 'public/Backend/Socialimage/090059linkdin.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` int(11) NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Imran', 'md.imran1200@gmail.com', 1918329829, '$2y$10$BtKO7.iwcMeE1R7hQ9hGl.a4ISSygYMk7GSixeNrqvjuxjzZPNrl6', 'xWLpRODYIIAfYvIlKAt0ImvM1Rrya0NHE0JM4PrzfYiOrcT3aMMPau5C3gHt', '2018-07-08 08:18:58', '2018-07-08 08:18:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `tbl_logo`
--
ALTER TABLE `tbl_logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_menufecture`
--
ALTER TABLE `tbl_menufecture`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD PRIMARY KEY (`order_details_id`);

--
-- Indexes for table `tbl_page`
--
ALTER TABLE `tbl_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_product_image`
--
ALTER TABLE `tbl_product_image`
  ADD PRIMARY KEY (`product_image_id`);

--
-- Indexes for table `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  ADD PRIMARY KEY (`shipping_id`);

--
-- Indexes for table `tbl_sitting`
--
ALTER TABLE `tbl_sitting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_social`
--
ALTER TABLE `tbl_social`
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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `customer_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_logo`
--
ALTER TABLE `tbl_logo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_menufecture`
--
ALTER TABLE `tbl_menufecture`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  MODIFY `order_details_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_page`
--
ALTER TABLE `tbl_page`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `payment_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_product_image`
--
ALTER TABLE `tbl_product_image`
  MODIFY `product_image_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  MODIFY `shipping_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_sitting`
--
ALTER TABLE `tbl_sitting`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_social`
--
ALTER TABLE `tbl_social`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
