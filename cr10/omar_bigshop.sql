-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2017 at 02:34 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `omar_bigshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cartId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `productId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cartId`, `userId`, `productId`) VALUES
(40, 2, 1),
(41, 2, 2),
(42, 2, 1),
(43, 2, 1),
(44, 2, 1),
(45, 2, 1),
(46, 2, 1),
(47, 2, 1),
(48, 2, 1),
(49, 2, 1),
(50, 2, 1),
(51, 2, 1),
(52, 2, 1),
(53, 2, 1),
(54, 2, 1),
(55, 2, 1),
(56, 2, 1),
(57, 2, 1),
(58, 2, 2),
(59, 2, 1),
(62, 2, 2),
(63, 2, 3),
(64, 2, 8),
(65, 2, 2),
(66, 2, 2),
(67, 2, 2),
(68, 2, 1),
(69, 2, 1),
(70, 2, 1),
(71, 2, 3),
(72, 2, 3),
(73, 2, 8);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productId` int(11) NOT NULL,
  `productName` varchar(50) NOT NULL,
  `productImg` varchar(500) NOT NULL,
  `productPrice` int(11) NOT NULL,
  `productDetail` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productId`, `productName`, `productImg`, `productPrice`, `productDetail`) VALUES
(1, 'macbook', 'https://images-na.ssl-images-amazon.com/images/I/81qonnN9cmL._SL1500_.jpg', 750, 'Apple MacBook Air 13.3-Inch Laptop (Intel Core i5 1.6GHz, 128GB Flash, 8GB RAM, OS X El Capitan)'),
(2, 'Nintendo Switch with Gray Joy-Con', 'https://images-na.ssl-images-amazon.com/images/I/819Yqb%2BsM5L._AC_.jpg', 357, 'Introducing Nintendo Switch! In addition to providing single and multiplayer thrills at home, the Nintendo Switch system also enables gamers to play the same title wherever, whenever and with whomever they choose. The mobility of a handheld is now added to the power of a home gaming system to enable unprecedented new video game play styles.'),
(3, 'Xbox One X Project Scorpio Edition 1TB Console', 'https://images-na.ssl-images-amazon.com/images/I/51eM3exlcvL._AC_.jpg', 650, 'What’s in the box: Xbox One X Project Scorpio Edition 1TB Console, Project Scorpio Edition Wireless Controller, Xbox One X Vertical Stand, 1-month Game Pass subscription trial, 14-day Xbox Live Gold trial, HDMI cable (4K capable), and AC Power cable.\r\nGames play better on Xbox One X Project Scorpio Edition. Experience 40% more power than any other console.'),
(4, 'PlayStation 4 Pro 1TB Console', 'https://images-na.ssl-images-amazon.com/images/I/41GGPRqTZtL._AC_SX430_.jpg', 350, 'Spectacular graphics – Explore vivid game worlds with rich visuals heightened by PS4 Pro.\r\nEnhanced gameplay – Support for faster frame rates delivers super-sharp action for select PS4 games.\r\nOne unified gaming community – Compatible with every PS4 game. Play online with other PS4 players with PlayStation Plus.\r\nExtraordinary entertainment – With up to 4K streaming and 4K auto-upscaling for video content.\r\nMount not included.'),
(5, 'Nintendo New 2DS XL - Black + Turquoise', 'https://images-na.ssl-images-amazon.com/images/I/716%2BUi40HcL._AC_.jpg', 210, 'Colorful accents add style, while the sleek clamshell design makes it comfortable to hold and helps to keep screens safe from scratches when closed.\r\nA fast processor offers short loading times, so you can start playing in a snap. And it\'s all in a lightweight, play-anywhere package.\r\nThe C Stick brings enhanced controls (like intuitive camera control) to compatible games, while ZL and ZR buttons give you plenty of options.'),
(6, 'Nintendo Entertainment System: NES Classic Edition', 'https://images-na.ssl-images-amazon.com/images/I/81s7B%2BAls-L._AC_.jpg', 100, 'The Nintendo Entertainment System: NES Classic Edition has the original look and feel, only smaller, sleeker, and pre-loaded with 30 games\r\nThe pre-installed games include: Super Mario Bros., Donkey Kong, The Legend of Zelda, PAC-MAN, Dr. Mario, Mega Man, Final Fantasy, and dozens more\r\nIncludes a standard HDMI cable'),
(7, 'dell laptop', 'https://images-na.ssl-images-amazon.com/images/I/71B6qS0EqUL._SL1500_.jpg', 850, 'Dell Inspiron 15.6\" Full HD Gaming Laptop (7th Gen Intel Quad Core i7, 8 GB RAM, 1000 GB HDD + 128GB SSD), NVIDIA GeForce GTX 1050 Graphics) (i5577-7359BLK-PUS), Metal Chassis'),
(8, 'asus laptop', 'https://images-na.ssl-images-amazon.com/images/I/81JVBIzqQ9L._SL1500_.jpg', 1150, 'ASUS M580VD-EB76 VivoBook 15.6\" FHD thin and light Gaming Laptop Computer (Intel Core i7-7700HQ, GTX 1050 4GB, 16GB DDR4, 256GB SSD+1TB HDD), backlit keyboard'),
(9, 'hp', 'https://images-na.ssl-images-amazon.com/images/I/81prx-qi38L._SL1500_.jpg', 950, 'HP 15-F222WM 15.6\" Touch Screen Laptop (Intel Quad Core Pentium N3540 Processor, 4GB Memory, 500GB Hard Drive, Windows 10)'),
(10, 'Samsung XE510C24-K01US Chromebook Pro', 'https://images-na.ssl-images-amazon.com/images/I/817xBiCju9L._SL1500_.jpg', 500, 'Tablet and Notebook in One with built-in PEN for writing and drawing. Slim and lightweight design with 3:2 aspect ratio QHD touch screen display\r\nExperience more with Intel processor and access to 2 million Android apps from Google Play store');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `firstName` varchar(60) NOT NULL,
  `lastName` varchar(60) NOT NULL,
  `userEmail` varchar(150) NOT NULL,
  `userPass` varchar(250) NOT NULL,
  `photolink` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `firstName`, `lastName`, `userEmail`, `userPass`, `photolink`) VALUES
(2, 'ttt', 'ttt', 't@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'http://i0.kym-cdn.com/entries/icons/mobile/000/013/564/doge.jpg'),
(3, 'rrr', 'rrr', 'w@gmail.com', '95fbeb8f769d2c0079d1d11348877da944aaefaba6ecf9f7f7dab6344ece8605', 'aa'),
(4, 'uuu', 'uuu', 'u@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', '66666');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartId`),
  ADD KEY `userId` (`userId`) USING BTREE,
  ADD KEY `productId` (`productId`) USING BTREE;

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`productId`) REFERENCES `products` (`productId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
