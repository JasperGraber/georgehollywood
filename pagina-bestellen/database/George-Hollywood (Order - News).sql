-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 06 apr 2021 om 10:18
-- Serverversie: 8.0.21
-- PHP-versie: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `george-hollywood`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `cartrow`
--

DROP TABLE IF EXISTS `cartrow`;
CREATE TABLE IF NOT EXISTS `cartrow` (
  `cartID` int NOT NULL,
  `productID` int NOT NULL,
  `amount` int NOT NULL,
  PRIMARY KEY (`cartID`,`productID`),
  KEY `FK_CartRow_Product_idx` (`productID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `categoryID` int NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`categoryID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `dishtype`
--

DROP TABLE IF EXISTS `dishtype`;
CREATE TABLE IF NOT EXISTS `dishtype` (
  `dishID` int NOT NULL,
  `dishname` varchar(50) NOT NULL,
  PRIMARY KEY (`dishID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `loginID` int NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`loginID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `news_id` int NOT NULL AUTO_INCREMENT,
  `news_title` text NOT NULL,
  `news_image` varchar(10) DEFAULT NULL,
  `news_date` datetime NOT NULL,
  `news_introduction` text NOT NULL,
  `news_article` text NOT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `option`
--

DROP TABLE IF EXISTS `option`;
CREATE TABLE IF NOT EXISTS `option` (
  `optionID` int NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) DEFAULT NULL,
  `content` varchar(20) NOT NULL,
  PRIMARY KEY (`optionID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `order`
--

DROP TABLE IF EXISTS `order`;
CREATE TABLE IF NOT EXISTS `order` (
  `orderID` int NOT NULL,
  `userID` int NOT NULL,
  `taxID` int NOT NULL,
  `shippingID` int NOT NULL,
  `date` datetime NOT NULL,
  `totalprice` float NOT NULL,
  PRIMARY KEY (`orderID`),
  KEY `FK_Order_User_idx` (`userID`),
  KEY `FK_Order_Tax_idx` (`taxID`),
  KEY `FK_Order_Shipping_idx` (`shippingID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `orderrow`
--

DROP TABLE IF EXISTS `orderrow`;
CREATE TABLE IF NOT EXISTS `orderrow` (
  `orderID` int NOT NULL,
  `productID` int NOT NULL,
  `optionID` int NOT NULL,
  `amount` int NOT NULL,
  PRIMARY KEY (`orderID`,`productID`,`optionID`),
  KEY `FK_OrderRow_Product_idx` (`productID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `productID` int NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  `allergies` varchar(50) NOT NULL,
  `price` float NOT NULL,
  `categoryID` int NOT NULL,
  `dishID` int NOT NULL,
  `optionID` int NOT NULL,
  PRIMARY KEY (`productID`),
  KEY `FK_Product_Category_idx` (`categoryID`),
  KEY `FK_Product_DishType_idx` (`dishID`),
  KEY `FK_Product_Option_idx` (`optionID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `shipping`
--

DROP TABLE IF EXISTS `shipping`;
CREATE TABLE IF NOT EXISTS `shipping` (
  `shippingID` int NOT NULL,
  `costs` float NOT NULL,
  PRIMARY KEY (`shippingID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `shoppingcart`
--

DROP TABLE IF EXISTS `shoppingcart`;
CREATE TABLE IF NOT EXISTS `shoppingcart` (
  `cartID` int NOT NULL,
  `userID` int NOT NULL,
  PRIMARY KEY (`cartID`),
  KEY `FK_ShoppingCart_User_idx` (`userID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tax`
--

DROP TABLE IF EXISTS `tax`;
CREATE TABLE IF NOT EXISTS `tax` (
  `taxID` int NOT NULL,
  `taxrate` float NOT NULL,
  PRIMARY KEY (`taxID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `userID` int NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `familyname` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `zipcodeID` varchar(7) NOT NULL,
  `city` varchar(50) NOT NULL,
  `loginID` int NOT NULL,
  PRIMARY KEY (`userID`),
  KEY `FK_User_Login_idx` (`loginID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `userrole`
--

DROP TABLE IF EXISTS `userrole`;
CREATE TABLE IF NOT EXISTS `userrole` (
  `roleID` int NOT NULL,
  `role` varchar(20) NOT NULL,
  `roledescription` varchar(100) NOT NULL,
  PRIMARY KEY (`roleID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `userrolerow`
--

DROP TABLE IF EXISTS `userrolerow`;
CREATE TABLE IF NOT EXISTS `userrolerow` (
  `roleID` int NOT NULL,
  `userID` int NOT NULL,
  PRIMARY KEY (`roleID`,`userID`),
  KEY `FK_UserRoleRow_User_idx` (`userID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `cartrow`
--
ALTER TABLE `cartrow`
  ADD CONSTRAINT `FK_CartRow_Product` FOREIGN KEY (`productID`) REFERENCES `product` (`productID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_CartRow_ShoppingCart` FOREIGN KEY (`cartID`) REFERENCES `shoppingcart` (`cartID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Beperkingen voor tabel `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `FK_Order_Shipping` FOREIGN KEY (`shippingID`) REFERENCES `shipping` (`shippingID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_Order_Tax` FOREIGN KEY (`taxID`) REFERENCES `tax` (`taxID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_Order_User` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Beperkingen voor tabel `orderrow`
--
ALTER TABLE `orderrow`
  ADD CONSTRAINT `FK_OrderRow_Order` FOREIGN KEY (`orderID`) REFERENCES `order` (`orderID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_OrderRow_Product` FOREIGN KEY (`productID`) REFERENCES `product` (`productID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Beperkingen voor tabel `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `FK_Product_Category` FOREIGN KEY (`categoryID`) REFERENCES `category` (`categoryID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_Product_DishType` FOREIGN KEY (`dishID`) REFERENCES `dishtype` (`dishID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_Product_Option` FOREIGN KEY (`optionID`) REFERENCES `option` (`optionID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Beperkingen voor tabel `shoppingcart`
--
ALTER TABLE `shoppingcart`
  ADD CONSTRAINT `FK_ShoppingCart_User` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Beperkingen voor tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK_User_Login` FOREIGN KEY (`loginID`) REFERENCES `login` (`loginID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Beperkingen voor tabel `userrolerow`
--
ALTER TABLE `userrolerow`
  ADD CONSTRAINT `FK_UserRoleRow_User` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_UserRoleRow_UserRole` FOREIGN KEY (`roleID`) REFERENCES `userrole` (`roleID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
