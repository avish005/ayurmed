-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2020 at 09:31 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `awpl`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `categories` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categories`, `status`) VALUES
(1, 'Hair Care', 1),
(2, 'Wellness', 1),
(4, 'Food', 1),
(5, 'Beauty', 1),
(6, 'Oral Care', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(75) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `comment` text NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `address` varchar(250) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pincode` int(11) NOT NULL,
  `payment_type` varchar(20) NOT NULL,
  `total_price` float NOT NULL,
  `payment_status` varchar(20) NOT NULL,
  `order_status` int(11) NOT NULL,
  `txnid` varchar(20) NOT NULL,
  `mihpayid` varchar(20) NOT NULL,
  `payu_status` varchar(10) NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `user_id`, `address`, `city`, `pincode`, `payment_type`, `total_price`, `payment_status`, `order_status`, `txnid`, `mihpayid`, `payu_status`, `added_on`) VALUES
(1, 3, 'bagbera', 'jsr', 1234567, 'payu', 1900, 'failure', 4, 'd79a5ff74ef680b6c861', '403993715521348889', '', '2020-07-26 12:09:37'),
(2, 3, 'sakchi', 'jsr', 123478, 'payu', 155800, 'success', 4, 'ed802593231bd50ae6af', '403993715521350337', '', '2020-07-27 05:32:55'),
(3, 3, 'bagbera', 'jsr', 988127, 'COD', 1350, 'pending', 1, '22b931cba498d715c48b', '', '', '2020-07-27 02:22:25'),
(4, 3, 'sakchi', 'jsr', 234123, 'payu', 1560, 'success', 1, 'aff254f1054d56925118', '403993715521353845', '', '2020-07-27 02:23:08'),
(5, 4, 'sitarandera', 'jsr', 12736, 'payu', 155800, 'success', 1, 'ef07409b4d81663f0306', '403993715521356200', '', '2020-07-28 05:57:29'),
(6, 3, 'baridih', 'jsr', 2365436, 'COD', 5880, 'Success', 5, '24257dee338b1a1e096a', '', '', '2020-08-02 09:10:58'),
(7, 3, 'kitadih', 'jsr', 83211, 'payu', 2212, 'success', 1, '4b2d45d588d38cc49228', '403993715521383186', '', '2020-08-02 09:14:26'),
(8, 3, 'bagbera colony', 'jamshedpur', 831002, 'COD', 225, 'pending', 1, 'b5490b8a9101b7dee489', '', '', '2020-08-05 04:01:12'),
(9, 3, 'bagbera', 'jamshedpur', 831001, 'COD', 450, 'pending', 1, '4aa0c0a5f00b782dc7ce', '', '', '2020-08-06 02:56:30'),
(10, 3, 'jsr', 'jsr', 12323, 'payu', 367, 'success', 1, 'd00e61c7ac2e15b83387', '403993715521405629', '', '2020-08-06 03:05:55'),
(11, 3, 'bagbera', 'city', 831002, 'COD', 1689, 'pending', 1, 'fdb69cdf462fdf72c348', '', '', '2020-08-08 07:12:00'),
(12, 3, 'Block No-149/2/1, Road No-5, Bagbera Colony', 'Jamshedpur', 831002, 'COD', 1960, 'pending', 1, '3ccbc60367946b5e879d', '', '', '2020-08-08 12:41:03'),
(13, 3, 'Block No-149/2/1, Road No-5, Bagbera Colony', 'Jamshedpur', 831002, 'COD', 1960, 'pending', 1, 'c9ea20dbf78c827945d1', '', '', '2020-08-08 03:08:15'),
(14, 3, 'Block No-149/2/1, Road No-5, Bagbera Colony', 'Jamshedpur', 831002, 'COD', 1960, 'pending', 1, '182a67a548a913714cfd', '', '', '2020-08-08 03:13:30'),
(15, 3, 'Block No-149/2/1, ROAD NO -5', 'Jamshedpur', 831002, 'COD', 199, 'pending', 1, '692b34a0e26ba5f18a71', '', '', '2020-08-08 03:15:43');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `order_id`, `product_id`, `qty`, `price`) VALUES
(1, 1, 8, 1, 1900),
(2, 2, 2, 1, 155800),
(3, 3, 7, 1, 1350),
(4, 4, 9, 1, 1560),
(5, 5, 2, 1, 155800),
(6, 6, 55, 3, 1960),
(7, 7, 9, 2, 168),
(8, 7, 53, 1, 1876),
(9, 8, 28, 1, 225),
(10, 9, 28, 2, 225),
(11, 10, 9, 1, 168),
(12, 10, 29, 1, 199),
(13, 11, 25, 1, 921),
(14, 11, 24, 2, 384),
(15, 12, 56, 1, 1960),
(16, 13, 55, 1, 1960),
(17, 14, 55, 1, 1960),
(18, 15, 29, 1, 199);

-- --------------------------------------------------------

--
-- Table structure for table `order_status`
--

CREATE TABLE `order_status` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_status`
--

INSERT INTO `order_status` (`id`, `name`) VALUES
(1, 'Pending'),
(2, 'Processing'),
(3, 'Shipped'),
(4, 'Canceled'),
(5, 'Complete');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mrp` float NOT NULL,
  `price` float NOT NULL,
  `qty` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `short_desc` varchar(2000) NOT NULL,
  `description` text NOT NULL,
  `best_seller` int(11) NOT NULL,
  `meta_title` varchar(2000) NOT NULL,
  `meta_desc` varchar(2000) NOT NULL,
  `meta_keyword` varchar(2000) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `categories_id`, `name`, `mrp`, `price`, `qty`, `image`, `short_desc`, `description`, `best_seller`, `meta_title`, `meta_desc`, `meta_keyword`, `status`) VALUES
(1, 4, 'G-COFFEEDOC(100gm)', 595, 496, 10, '828050478_G-COFFEEDOC.jpg', 'Mauris dapibus tellus quis risus maximus molestie. Curabitur eget tortor tellus.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus scelerisque quis nisi porta congue. Aenean sed maximus ligula. Vestibulum quis eros id ex condimentum lacinia. Nam interdum finibus odio, sit amet commodo erat varius sed. In at velit velit. Nullam vitae gravida mi. Donec aliquet nunc non ipsum bibendum, et elementum nibh lobortis. Fusce tempor elit at mauris luctus euismod. Donec eu massa eros. Aenean maximus vitae nisl ut sollicitudin. Aenean urna arcu, laoreet at ante eget, maximus mattis lacus. Mauris dapibus tellus quis risus maximus molestie. Curabitur eget tortor tellus.', 0, 'Realme C3 (Frozen Blue, 64 GB) (4 GB RAM)', 'Realme C3 (Frozen Blue, 64 GB) (4 GB RAM)', 'Realme C3 (Frozen Blue, 64 GB) (4 GB RAM)', 1),
(2, 4, 'MASSDOC Powder(1 KG)', 3779, 3149, 4, '565131894_MASSDOC-POWDER.jpg', 'Aenean tempus ut leo nec laoreet. Vestibulum ut est neque.', 'Curabitur eget augue dolor. Curabitur id dapibus massa. Vestibulum at enim quis metus ultrices posuere vitae sit amet eros. Morbi et libero pellentesque, efficitur odio nec, congue lorem. Vestibulum faucibus, risus eget pretium efficitur, neque nulla eleifend purus, non venenatis lorem ligula vel nulla. Fusce finibus efficitur sapien vitae laoreet. Integer imperdiet justo sed tellus dictum, at egestas arcu finibus. Fusce et augue elit. Praesent tincidunt purus in purus dictum volutpat. Aenean tempus ut leo nec laoreet. Vestibulum ut est neque.', 1, 'APPLE IPHONE 11 PRO MAX (512GB) - MIDNIGHT GREEN', '', 'APPLE IPHONE 11 PRO MAX (512GB) - MIDNIGHT GREEN', 1),
(3, 4, 'SLIMDOC Powder(500gm)', 1558, 1298, 5, '141350014_SLIMDOC-POWDER.jpg', 'Nullam purus lorem, tincidunt vitae tristique non, imperdiet ut urna.', 'Nullam a nunc et lorem ornare faucibus. Etiam tortor lacus, auctor eget enim at, tincidunt dignissim magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin tincidunt eros eget felis tempor, id volutpat ipsum lacinia. Donec scelerisque risus non purus scelerisque tristique. Mauris enim ligula, condimentum sed iaculis nec, porttitor eu nunc. Sed hendrerit vel arcu vitae iaculis. Phasellus vehicula molestie leo. Nullam purus lorem, tincidunt vitae tristique non, imperdiet ut urna.', 0, 'Samsung Galaxy S10 Plus 1TB (Ceramic White, 12GB RAM)', 'Samsung Galaxy S10 Plus 1TB (Ceramic White, 12GB RAM)', 'Samsung Galaxy S10 Plus 1TB (Ceramic White, 12GB RAM)', 1),
(4, 5, 'Heal Care Cream(50gm)', 250, 210, 3, '885111404_heal-doc-cream.jpg', 'per inceptos himenaeos. Ut commodo ullamcorper quam non pulvinar.', 'Duis a felis congue, feugiat est non, suscipit quam. In elit lacus, auctor sed lacus eget, egestas consectetur leo. Duis pellentesque pharetra ante, ac ornare nibh faucibus id. Integer pulvinar malesuada nisl. Nulla vel orci nunc. Nullam a tellus eu ex ullamcorper mollis. Donec commodo ligula a accumsan fermentum. Mauris sed orci lacinia, posuere leo molestie, pretium mi. Cras sodales, neque id cursus fermentum, mi purus vehicula sem, vel laoreet lorem justo id tortor. Sed ut urna ut ipsum vestibulum commodo. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut commodo ullamcorper quam non pulvinar.', 0, 'SHEEN-SOLID TROUSER-OLIVE', 'SHEEN-SOLID TROUSER-OLIVE', 'SHEEN-SOLID TROUSER-OLIVE', 1),
(5, 5, 'Herbal Face Scrub(50gm)', 229, 191, 8, '591942462_herbal-face-scrub.jpg', 'a nisl pharetra orci, at condimentum nisl lorem elementum ipsum.', 'Nunc auctor turpis ante, eget bibendum mi mollis in. Aliquam quis neque ut libero malesuada auctor. Aliquam interdum enim at commodo gravida. Donec nisl sem, molestie ut quam quis, vulputate venenatis ipsum. Aenean quis ex ut magna accumsan fringilla. Quisque id ex massa. Sed libero ante, fringilla ac condimentum in, porttitor ac risus. Integer mattis odio nec nunc semper imperdiet. In porttitor tellus eget sapien vulputate, eu euismod lacus aliquet. Maecenas molestie elit augue, sit amet fringilla dolor congue et. Nunc eu libero auctor, sollicitudin lectus quis, porta ligula. In vel ullamcorper risus. Nullam viverra, mi sit amet laoreet luctus, urna nisl pharetra orci, at condimentum nisl lorem elementum ipsum.', 0, 'NATURE-LINEN SHIRT-GREEN', 'NATURE-LINEN SHIRT-GREEN', 'NATURE-LINEN SHIRT-GREEN', 1),
(6, 5, 'Herbal Face Pack(50gm)', 215, 179, 8, '169353045_herbal-face-pack.jpg', 'lacus quis urna tristique suscipit. Praesent vitae mi mollis dui facilisis convallis eu faucibus augue.', 'Duis in risus quis lectus dictum fringilla. Aenean tempor pellentesque velit id ullamcorper. Ut id aliquam odio. Morbi id pharetra libero, ut tempor nisi. Maecenas a lectus nec risus maximus rutrum. Mauris vel elit ut magna semper laoreet nec sed magna. Quisque eleifend vel sem non malesuada. Interdum et malesuada fames ac ante ipsum primis in faucibus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum eget posuere orci, eu ultrices sapien. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam sit amet ex dictum nisl bibendum elementum non in turpis. In bibendum ipsum nunc, bibendum lacinia lacus maximus eu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus aliquam lacus quis urna tristique suscipit. Praesent vitae mi mollis dui facilisis convallis eu faucibus augue.', 1, 'Monte Carlo Turquoise Blue Solid Collar T Shirt', '', 'Monte Carlo Turquoise Blue Solid Collar T Shirt', 1),
(7, 5, 'Herbal Facewash(100ml)', 1900, 1350, 7, '940446722_exe-herbal-facewash.jpg', 'isl pharetra orci, at condimentum nisl lorem elementum ipsum.', 'Nunc auctor turpis ante, eget bibendum mi mollis in. Aliquam quis neque ut libero malesuada auctor. Aliquam interdum enim at commodo gravida. Donec nisl sem, molestie ut quam quis, vulputate venenatis ipsum. Aenean quis ex ut magna accumsan fringilla. Quisque id ex massa. Sed libero ante, fringilla ac condimentum in, porttitor ac risus. Integer mattis odio nec nunc semper imperdiet. In porttitor tellus eget sapien vulputate, eu euismod lacus aliquet. Maecenas molestie elit augue, sit amet fringilla dolor congue et. Nunc eu libero auctor, sollicitudin lectus quis, porta ligula. In vel ullamcorper risus. Nullam viverra, mi sit amet laoreet luctus, urna nisl pharetra orci, at condimentum nisl lorem elementum ipsum.', 0, 'Floral Print Polo T-shirt', 'Floral Print Polo T-shirt', 'Floral Print Polo T-shirt', 1),
(8, 5, 'Aloevera Saffron Gel(50gm)', 235, 196, 10, '783638786_aloevera-saffron-gel.jpg', 'rius, lacus velit aliquam ex, in dignissim sem eros ac erat. Vestibulum ac arcu tortor.', 'Vestibulum in auctor turpis. Quisque hendrerit eget turpis et molestie. Phasellus nec nibh a lacus rhoncus eleifend. Donec suscipit id diam non mattis. Fusce eu luctus leo. Etiam eget dui libero. Etiam eros lorem, rhoncus et convallis eget, tempus vel tellus. Nam at diam quis nisl tincidunt aliquam. Quisque placerat magna non libero interdum varius vel id risus. Vivamus mollis maximus fermentum. Donec eget nulla dui. Sed ultricies malesuada metus, non feugiat purus fringilla ac. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer accumsan, tortor id eleifend varius, lacus velit aliquam ex, in dignissim sem eros ac erat. Vestibulum ac arcu tortor.', 1, 'Floral Embroidered Polo T-shirt', 'Floral Embroidered Polo T-shirt', 'Floral Embroidered Polo T-shirt', 1),
(9, 5, 'Aloevera Cucumber Cream(50gm)', 202, 168, 50, '454923558_aloevera-cucumber-cream.jpg', 's mus. Vestibulum eget posuere orci, eu ultrices sapien. Orc', 'aximus rutrum. Mauris vel elit ut magna semper laoreet nec sed magna. Quisque eleifend vel sem non malesuada. Interdum et malesuada fames ac ante ipsum primis in faucibus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum eget posuere orci, eu ultrices sapien. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam sit amet ex d', 1, 'Floral Print Polo T-shirt Latest', 'Floral Print Polo T-shirt Latest', 'Floral Print Polo T-shirt Latest', 1),
(10, 4, 'OMEGADOC Capsule(30 cap.)', 1076, 889, 10, '769126501_OMEGADOC.jpg', 'omegadoc', 'omegadoc', 0, 'omegadoc', 'omegadoc', 'omegadoc', 1),
(11, 4, 'DIGIDOC Powder(100gm)', 227, 189, 11, '568918418_DIGIDOC-POWDER.jpg', 'DIGIDOC Powder', 'DIGIDOC Powder', 0, 'DIGIDOC Powder', 'DIGIDOC Powder', 'DIGIDOC Powder', 1),
(12, 4, 'CURCIDOC Drop(50ml)', 538, 448, 10, '662681173_CURCIDOC-DROP.jpg', 'CURCIDOC Drop', 'CURCIDOC Drop', 1, 'CURCIDOC Drop', '', '', 1),
(13, 4, 'STEVIADOC Drop(50ml)', 383, 319, 10, '201765600_STEVIADOC-DROP.jpg', 'STEVIADOC Drop', 'STEVIADOC Drop', 0, 'STEVIADOC Drop', 'STEVIADOC Drop', 'STEVIADOC Drop', 1),
(14, 4, 'FENNELDOC Drop(50ml)', 219, 183, 5, '303198363_FENNELDOC-DROP.jpg', 'FENNELDOC Drop', 'FENNELDOC Drop', 0, 'FENNELDOC Drop', 'FENNELDOC Drop', 'FENNELDOC Drop', 1),
(15, 4, 'BERRYDOC Juice(1000ml)', 1859, 1549, 5, '191970811_BERRYDOC-JUICE.jpg', 'BERRYDOC Juice', 'BERRYDOC Juice', 0, 'BERRYDOC Juice', 'BERRYDOC Juice', 'BERRYDOC Juice', 1),
(16, 4, 'SEABUCKDOC  Juice(500ml)', 1048, 874, 5, '148915955_SEABUCKDOC.jpg', 'SEABUCKDOC  Juice', 'SEABUCKDOC  Juice', 0, 'SEABUCKDOC  Juice', 'SEABUCKDOC  Juice', 'SEABUCKDOC  Juice', 1),
(17, 4, 'COW-C-DOC Capsule(30cap.)', 1068, 890, 3, '175109008_COW-C-DOC.jpg', 'COW-C-DOC Capsule', 'COW-C-DOC Capsule', 0, 'COW-C-DOC Capsule', 'COW-C-DOC Capsule', 'COW-C-DOC Capsule', 1),
(18, 4, 'CURCIDOC Capsule(30 Cap.)', 1052, 877, 3, '678758872_CURCIDOC-CAPSULE.jpg', 'CURCIDOC Capsule', 'CURCIDOC Capsule', 0, 'CURCIDOC Capsule', 'CURCIDOC Capsule', 'CURCIDOC Capsule', 1),
(19, 4, 'MORIDOC Capsule(60 Cap.)', 1068, 887, 3, '274463960_MORIDOC.jpg', 'MORIDOC Capsule', 'MORIDOC Capsule', 0, 'MORIDOC Capsule', 'MORIDOC Capsule', 'MORIDOC Capsule', 1),
(20, 4, 'SPIRADOC Capsule(60 Cap.)', 1074, 895, 2, '910120988_SPIRADOC-CAPSULE.jpg', 'SPIRADOC Capsule', 'SPIRADOC Capsule', 0, 'SPIRADOC Capsule', 'SPIRADOC Capsule', 'SPIRADOC Capsule', 1),
(21, 4, 'VITADOC Capsule(30 Cap.)', 1425, 1187, 2, '138098968_VITADOC.jpg', 'VITADOC Capsule', 'VITADOC Capsule', 0, 'VITADOC Capsule', 'VITADOC Capsule', 'VITADOC Capsule', 1),
(22, 4, 'HEIGHTDOC Powder(500gm)', 2689, 2489, 5, '586746627_HEIGHTDOC-POWDER.jpg', 'HEIGHTDOC Powder', 'HEIGHTDOC Powder', 1, 'HEIGHTDOC Powder', 'HEIGHTDOC Powder', 'HEIGHTDOC Powder', 1),
(23, 4, 'MUSCLEDOC(1 kg)', 4919, 4099, 4, '360651569_MUSCLEDOC.jpg', 'MUSCLEDOC', 'MUSCLEDOC', 1, 'MUSCLEDOC', 'MUSCLEDOC', 'MUSCLEDOC', 1),
(24, 4, 'FITDOC Powder(100gm)', 460, 384, 10, '804365179_FITDOC-POWDER.jpg', 'FITDOC Powder', 'FITDOC Powder', 0, 'FITDOC Powder', 'FITDOC Powder', 'FITDOC Powder', 1),
(25, 4, 'Noni Juice(500ml)', 1105, 921, 10, '960917533_Noni-Juice.jpg', 'Noni Juice', 'Noni Juice', 1, 'Noni Juice', 'Noni Juice', 'Noni Juice', 1),
(26, 1, 'EXE Hair(100ml)', 214, 178, 10, '620876290_exe-hair-cleanger.jpg', 'EXE Hair', 'EXE Hair', 1, 'EXE Hair', 'EXE Hair', 'EXE Hair', 1),
(27, 1, 'Hair Doc(100ml)', 224, 187, 10, '160889286_Hair-Doc.jpg', 'Hair Doc', 'Hair Doc', 1, 'Hair Doc', 'Hair Doc', 'Hair Doc', 1),
(28, 1, 'EXE Hair Conditioner(100ml)', 270, 225, 10, '921158376_exe-hair-c.jpg', 'EXE Hair Conditioner', 'EXE Hair Conditioner', 1, 'EXE Hair Conditioner', 'EXE Hair Conditioner', 'EXE Hair Conditioner', 1),
(29, 6, 'DENTODOC Dental Cream(100ml)', 239, 199, 10, '232669710_Dento-Doc.jpg', 'DENTODOC Dental Cream', 'DENTODOC Dental Cream', 1, 'DENTODOC Dental Cream', 'DENTODOC Dental Cream', 'DENTODOC Dental Cream', 1),
(30, 2, 'Veindoc Oil(25ml)', 251, 209, 10, '191948989_veindoc oil.jpg', 'Veindoc Oil', 'Veindoc Oil', 1, 'Veindoc Oil', 'Veindoc Oil', 'Veindoc Oil', 1),
(31, 2, 'Joint Curator Oil(50ml)', 370, 308, 10, '750361212_Joint-Curator-Oil.jpg', 'Joint Curator Oil', 'Joint Curator Oil', 1, 'Joint Curator Oil', 'Joint Curator Oil', 'Joint Curator Oil', 1),
(32, 2, 'Panch Tulsi(25ml)', 370, 308, 10, '870375344_Panch-Tulsi-drop.jpg', 'Panch Tulsi', 'Panch Tulsi', 1, 'Panch Tulsi', 'Panch Tulsi', 'Panch Tulsi', 1),
(33, 2, 'JC Gel(50gm)', 403, 336, 10, '826052125_jc-gel.jpg', 'JC Gel', 'JC Gel', 0, 'JC Gel', 'JC Gel', 'JC Gel', 1),
(34, 2, 'Herbal Green Tea(100gm)', 417, 347, 10, '807276829_Herbal-Tea.jpg', 'Herbal Green Tea', 'Herbal Green Tea', 1, 'Herbal Green Tea', 'Herbal Green Tea', 'Herbal Green Tea', 1),
(35, 2, 'Adicttdoc Drop(25ml)', 425, 354, 10, '607861951_adicttdoc.jpg', 'Adicttdoc Drop', 'Adicttdoc Drop', 0, 'Adicttdoc Drop', 'Adicttdoc Drop', 'Adicttdoc Drop', 1),
(36, 2, 'Triphala Ras(500ml)', 437, 364, 10, '796809936_triphala-ras.jpg', 'Triphala Ras', 'Triphala Ras', 0, 'Triphala Ras', 'Triphala Ras', 'Triphala Ras', 1),
(37, 2, 'Coughdoc Ras(200ml)', 470, 392, 10, '113009806_coughdoc.jpg', 'Coughdoc Ras', 'Coughdoc Ras', 1, 'Coughdoc Ras', 'Coughdoc Ras', 'Coughdoc Ras', 1),
(38, 2, 'Prodoc(200gm)', 605, 504, 5, '168828514_Prodoc.jpg', 'Prodoc', 'Prodoc', 0, 'Prodoc', 'Prodoc', 'Prodoc', 1),
(39, 2, 'B-Ton Gel(100gm)', 675, 563, 5, '703907865_bton-gel.jpg', 'b-ton', 'b-ton', 0, 'b-ton', 'b-ton', 'b-ton', 1),
(40, 2, 'kidgdoc(250gm)', 739, 616, 10, '744386582_Kidgdog.jpg', 'kidgdoc', 'kidgdoc', 0, 'kidgdoc', 'kidgdoc', 'kidgdoc', 1),
(41, 2, 'Aloevera Juice(1000ml)', 941, 784, 10, '806355325_Aloevera.jpg', 'Aloevera Juice', 'Aloevera Juice', 1, 'Aloevera Juice', 'Aloevera Juice', 'Aloevera Juice', 1),
(42, 2, 'Obeodoc(1000ml)', 2363, 1969, 10, '481997818_Obeodoc.jpg', 'Obeodoc', 'Obeodoc', 0, 'Obeodoc', 'Obeodoc', 'Obeodoc', 1),
(43, 2, 'Alrgydoc Ras(500ml)', 1198, 998, 10, '803963497_alrgydoc.jpg', 'Alrgydoc Ras', 'Alrgydoc Ras', 0, 'Alrgydoc Ras', 'Alrgydoc Ras', 'Alrgydoc Ras', 1),
(44, 2, 'Braindoc Ras(500ml)', 1277, 1064, 10, '311285347_braindoc.jpg', 'Braindoc Ras', 'Braindoc Ras', 0, 'Braindoc Ras', 'Braindoc Ras', 'Braindoc Ras', 1),
(45, 2, 'Gynedoc(500ml)', 1378, 1148, 5, '203550586_Gynedoc-rasd.jpg', 'Gynedoc', 'Gynedoc', 0, 'Gynedoc', 'Gynedoc', 'Gynedoc', 1),
(46, 2, 'Daibodoc Ras(1000ml)', 1395, 1163, 10, '135645013_Diabodoc-box.jpg', 'Daibodoc', 'Daibodoc', 0, 'Daibodoc', 'Daibodoc', 'Daibodoc', 1),
(47, 2, 'Livodoc(500ml)', 1411, 1176, 5, '946422808_Livodoc.jpg', 'Livodoc', 'Livodoc', 0, 'Livodoc', 'Livodoc', 'Livodoc', 1),
(48, 2, 'Immunodoc(1000ml)', 1902, 1585, 10, '254123748_IMMUNODOC.jpg', 'Immunodoc', 'Immunodoc', 1, 'Immunodoc', 'Immunodoc', 'Immunodoc', 1),
(49, 2, 'Fevodoc Ras(1000ml)', 2050, 1708, 10, '243290760_FEVOODOC.jpg', 'Fevodoc Ras', 'Fevodoc Ras', 1, 'Fevodoc Ras', 'Fevodoc Ras', 'Fevodoc Ras', 1),
(50, 2, 'Orthodoc Ras(1000ml)', 2070, 1725, 10, '767122694_Orthodoc.jpg', 'Orthodoc Ras', 'Orthodoc Ras', 1, 'Orthodoc Ras', 'Orthodoc Ras', 'Orthodoc Ras', 1),
(51, 2, 'Cardiodoc(1000ml)', 2090, 1742, 10, '915504695_cardiodoc-ras.jpg', 'Cardiodoc', 'Cardiodoc', 1, 'Cardiodoc', 'Cardiodoc', 'Cardiodoc', 1),
(52, 2, 'Thunder Blast(500ml)', 2134, 1779, 10, '513539542_THUNDER.jpg', 'Thunder Blast', 'Thunder Blast', 0, 'Thunder Blast', 'Thunder Blast', 'Thunder Blast', 1),
(53, 2, 'Stondoc(1000ml)', 2251, 1876, 10, '269403306_Stondoc.jpg', 'Stondoc', 'Stondoc', 0, 'Stondoc', 'Stondoc', 'Stondoc', 1),
(54, 2, 'Pilodoc Ras(1000ml)', 2318, 1932, 10, '743831608_Pilodoc.jpg', 'Pilodoc Ras', 'Pilodoc Ras', 0, 'Pilodoc Ras', 'Pilodoc Ras', 'Pilodoc Ras', 1),
(55, 2, 'Thyrodoc Ras(1000ml)', 2352, 1960, 10, '972154815_Thyrodoc.jpg', 'Thyrodoc Ras', 'Thyrodoc Ras', 0, 'Thyrodoc Ras', 'Thyrodoc Ras', 'Thyrodoc Ras', 1),
(56, 2, 'Chlorodoc Ras(1000ml)', 2352, 1960, 10, '968528558_Chlorodoc.jpg', 'Chlorodoc Ras', 'Chlorodoc Ras', 0, 'Chlorodoc Ras', 'Chlorodoc Ras', 'Chlorodoc Ras', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`, `mobile`, `added_on`) VALUES
(3, 'Avinash Kumar', 'avinash', 'stunneravi@gmail.com', '12345678', '2020-07-25 06:24:30'),
(11, 'soul', 'soul', 'soulh975@gmail.com', '259869', '2020-08-07 06:46:17'),
(12, 'test', 'test', 'test', 'test', '2020-08-08 08:02:09');

-- --------------------------------------------------------

--
-- Table structure for table `user_address`
--

CREATE TABLE `user_address` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pincode` int(11) NOT NULL,
  `updated_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_address`
--

INSERT INTO `user_address` (`id`, `user_id`, `address`, `city`, `pincode`, `updated_on`) VALUES
(1, 3, 'Bagbera Colony', 'Jamshedpur', 831002, '2020-08-09 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `user_id`, `product_id`, `added_on`) VALUES
(34, 4, 9, '2020-07-28 08:02:43'),
(35, 4, 3, '2020-07-28 08:07:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_status`
--
ALTER TABLE `order_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_address`
--
ALTER TABLE `user_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `order_status`
--
ALTER TABLE `order_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_address`
--
ALTER TABLE `user_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
