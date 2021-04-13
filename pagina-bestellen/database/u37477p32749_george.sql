-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Gegenereerd op: 13 apr 2021 om 01:39
-- Serverversie: 10.3.24-MariaDB-cll-lve
-- PHP-versie: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u37477p32749_george`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `cartrow`
--

CREATE TABLE `cartrow` (
  `cartID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `categories`
--

CREATE TABLE `categories` (
  `category_id` int(5) NOT NULL,
  `category_name` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Gegevens worden geëxporteerd voor tabel `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`) VALUES
(2, 'Menu'),
(3, 'Toegankelijkheid'),
(8, 'Social Media'),
(10, 'Verbouwing');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `category`
--

CREATE TABLE `category` (
  `categoryID` int(11) NOT NULL,
  `cat_name` varchar(20) COLLATE utf8_bin NOT NULL,
  `cat_description` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Gegevens worden geëxporteerd voor tabel `category`
--

INSERT INTO `category` (`categoryID`, `cat_name`, `cat_description`) VALUES
(1, 'Breakfast', 'from 09:00 hour till 10:00 hour.'),
(2, 'Lunch', 'from 12:00 hour till 14:00 hour.'),
(3, 'Diner', 'from 18:00 hour till 21:00 hour.'),
(4, 'All Round', 'from 09:00 hour till 22:00 hour.');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `dishtype`
--

CREATE TABLE `dishtype` (
  `dishID` int(11) NOT NULL,
  `dishname` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Gegevens worden geëxporteerd voor tabel `dishtype`
--

INSERT INTO `dishtype` (`dishID`, `dishname`) VALUES
(1, 'Sushi'),
(2, 'Sashimi'),
(3, 'Egg & Sandwiches'),
(4, 'Oysters'),
(5, 'Starters'),
(6, 'Salads'),
(7, 'Vegetarian'),
(8, 'Kids'),
(9, 'Meat'),
(10, 'Grilled steak'),
(11, 'Fish'),
(12, 'Side'),
(13, 'Small bites & Cheese'),
(14, 'Sweet & Ice'),
(15, 'Dessert wine'),
(16, 'White wine'),
(17, 'Red wine'),
(18, 'Rosé wine'),
(19, 'Sparklin wines'),
(20, 'Soda\'s'),
(21, 'Menu\'s');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `login`
--

CREATE TABLE `login` (
  `loginID` int(11) NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `password` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `news`
--

CREATE TABLE `news` (
  `news_id` int(5) NOT NULL,
  `news_title` mediumtext COLLATE utf8_bin NOT NULL,
  `news_image` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `news_date` datetime NOT NULL,
  `news_introduction` mediumtext COLLATE utf8_bin NOT NULL,
  `news_article` mediumtext COLLATE utf8_bin NOT NULL,
  `category_id` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Gegevens worden geëxporteerd voor tabel `news`
--

INSERT INTO `news` (`news_id`, `news_title`, `news_image`, `news_date`, `news_introduction`, `news_article`, `category_id`) VALUES
(17, 'George Hollywood heeft een nieuw menu!', NULL, '2021-04-12 20:00:14', 'George Hollywood bestaat vandaag 5 jaar en heeft zijn menu daarom flink uitgebreid! In dit artikel vind u onze nieuwste gerechten.', 'Artikel', 2);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `option`
--

CREATE TABLE `option` (
  `optionID` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8_bin NOT NULL,
  `description` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `content` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Gegevens worden geëxporteerd voor tabel `option`
--

INSERT INTO `option` (`optionID`, `name`, `description`, `content`) VALUES
(0, 'None', 'nothing to choose from', 'nothing'),
(1, '6pcs', '6 pieces of sashimi', '6 pieces'),
(2, '9pcs', '9 pieces of sashimi', '9 pieces'),
(3, '16pcs', '16 pieces of sashimi', '16 pieces'),
(4, '18pcs', '18 pieces of sashimi', '18 pieces'),
(5, '10pcs', '10 pieces of sushi', '10 pieces'),
(6, '16pcs', '16 pieces of sushi', '16 pieces'),
(7, '24pcs', '24 pieces of sushi', '24 pieces'),
(8, '8pcs', '8 pieces of oysters', '8 pieces'),
(9, '18pcs', '18 pieces of oysters', '18 pieces'),
(10, 'Hollandaise sauce', 'Dutch mayonnaise', '100 ml'),
(11, 'Brioche bun', 'Brioche bun with sesame seeds', '1pcs'),
(12, '300 gr.', '300 gram', '300 gram'),
(13, '1000 gr.', '1000 gram', '1000 gram');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `order`
--

CREATE TABLE `order` (
  `orderID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `taxID` int(11) NOT NULL,
  `shippingID` int(11) NOT NULL,
  `ordertime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `delivertime` timestamp NULL DEFAULT NULL,
  `totalprice` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `orderrow`
--

CREATE TABLE `orderrow` (
  `orderID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `optionID` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `product`
--

CREATE TABLE `product` (
  `productID` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8_bin NOT NULL,
  `description` varchar(100) COLLATE utf8_bin NOT NULL,
  `allergies` varchar(50) COLLATE utf8_bin NOT NULL,
  `price` decimal(5,2) NOT NULL,
  `categoryID` int(11) NOT NULL,
  `dishID` int(11) NOT NULL,
  `optionID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Gegevens worden geëxporteerd voor tabel `product`
--

INSERT INTO `product` (`productID`, `name`, `description`, `allergies`, `price`, `categoryID`, `dishID`, `optionID`) VALUES
(1, 'Crispy asparagus rol', 'tempura, cucumber & avocado', 'Fish', '16.00', 2, 1, 0),
(2, 'Spicy tuna roll', 'sliced tuna, tuna tartare, avocado & chili ', 'Fish', '17.00', 2, 1, 0),
(3, 'Salmon flame roll', 'flame torched salmon & wasabi sesame', 'Fish', '18.00', 2, 1, 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `reservations`
--

CREATE TABLE `reservations` (
  `reservationid` int(11) NOT NULL,
  `timeid` int(11) NOT NULL,
  `reservationdate` date NOT NULL,
  `userID` int(11) DEFAULT NULL,
  `persons` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Gegevens worden geëxporteerd voor tabel `reservations`
--

INSERT INTO `reservations` (`reservationid`, `timeid`, `reservationdate`, `userID`, `persons`) VALUES
(1, 1, '2021-01-01', NULL, 1),
(2, 1, '2021-01-01', NULL, 1),
(3, 1, '2021-01-01', NULL, 1),
(4, 1, '2021-01-01', NULL, 1),
(5, 1, '2021-01-01', NULL, 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `shipping`
--

CREATE TABLE `shipping` (
  `shippingID` int(11) NOT NULL,
  `costs` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `shoppingcart`
--

CREATE TABLE `shoppingcart` (
  `cartID` int(11) NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tax`
--

CREATE TABLE `tax` (
  `taxID` int(11) NOT NULL,
  `taxrate` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `time-slot`
--

CREATE TABLE `time-slot` (
  `timeid` int(11) NOT NULL,
  `starttime` varchar(5) COLLATE utf8_bin NOT NULL,
  `endtime` varchar(5) COLLATE utf8_bin NOT NULL,
  `half-day` varchar(10) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Gegevens worden geëxporteerd voor tabel `time-slot`
--

INSERT INTO `time-slot` (`timeid`, `starttime`, `endtime`, `half-day`) VALUES
(1, '12:00', '14:00', 'lunch'),
(2, '12:15', '14:15', 'lunch'),
(3, '12:30', '14:30', 'lunch'),
(4, '12:45', '14:45', 'lunch'),
(5, '13:00', '15:00', 'lunch'),
(6, '13:15', '15:15', 'lunch'),
(7, '13:30', '15:30', 'lunch'),
(8, '13:45', '15:45', 'lunch'),
(9, '18:00', '20:00', 'diner'),
(10, '18:15', '20:15', 'diner'),
(11, '18:30', '20:30', 'diner'),
(12, '18:45', '20:45', 'diner'),
(13, '19:00', '21:00', 'diner');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user`
--

CREATE TABLE `user` (
  `userID` int(11) NOT NULL,
  `firstname` varchar(50) COLLATE utf8_bin NOT NULL,
  `familyname` varchar(50) COLLATE utf8_bin NOT NULL,
  `address` varchar(50) COLLATE utf8_bin NOT NULL,
  `zipcodeID` varchar(7) COLLATE utf8_bin NOT NULL,
  `city` varchar(50) COLLATE utf8_bin NOT NULL,
  `loginID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `userrole`
--

CREATE TABLE `userrole` (
  `roleID` int(11) NOT NULL,
  `role` varchar(20) COLLATE utf8_bin NOT NULL,
  `roledescription` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `userrolerow`
--

CREATE TABLE `userrolerow` (
  `roleID` int(11) NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `cartrow`
--
ALTER TABLE `cartrow`
  ADD PRIMARY KEY (`cartID`,`productID`),
  ADD KEY `FK_CartRow_Product_idx` (`productID`);

--
-- Indexen voor tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexen voor tabel `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryID`);

--
-- Indexen voor tabel `dishtype`
--
ALTER TABLE `dishtype`
  ADD PRIMARY KEY (`dishID`);

--
-- Indexen voor tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`loginID`);

--
-- Indexen voor tabel `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`),
  ADD KEY `FK_news_category_id->PK_categories_category_id` (`category_id`);

--
-- Indexen voor tabel `option`
--
ALTER TABLE `option`
  ADD PRIMARY KEY (`optionID`);

--
-- Indexen voor tabel `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`orderID`),
  ADD KEY `FK_Order_User_idx` (`userID`),
  ADD KEY `FK_Order_Tax_idx` (`taxID`),
  ADD KEY `FK_Order_Shipping_idx` (`shippingID`);

--
-- Indexen voor tabel `orderrow`
--
ALTER TABLE `orderrow`
  ADD PRIMARY KEY (`orderID`,`productID`,`optionID`),
  ADD KEY `FK_OrderRow_Product_idx` (`productID`);

--
-- Indexen voor tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productID`),
  ADD KEY `FK_Product_Category_idx` (`categoryID`),
  ADD KEY `FK_Product_DishType_idx` (`dishID`),
  ADD KEY `FK_Product_Option_idx` (`optionID`);

--
-- Indexen voor tabel `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`reservationid`),
  ADD KEY `FK_Reservation_userID->customer_userID` (`userID`),
  ADD KEY `FK_Reservation_timeid->timeslot_timeid` (`timeid`);

--
-- Indexen voor tabel `shipping`
--
ALTER TABLE `shipping`
  ADD PRIMARY KEY (`shippingID`);

--
-- Indexen voor tabel `shoppingcart`
--
ALTER TABLE `shoppingcart`
  ADD PRIMARY KEY (`cartID`),
  ADD KEY `FK_ShoppingCart_User_idx` (`userID`);

--
-- Indexen voor tabel `tax`
--
ALTER TABLE `tax`
  ADD PRIMARY KEY (`taxID`);

--
-- Indexen voor tabel `time-slot`
--
ALTER TABLE `time-slot`
  ADD PRIMARY KEY (`timeid`);

--
-- Indexen voor tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`),
  ADD KEY `FK_User_Login_idx` (`loginID`);

--
-- Indexen voor tabel `userrole`
--
ALTER TABLE `userrole`
  ADD PRIMARY KEY (`roleID`);

--
-- Indexen voor tabel `userrolerow`
--
ALTER TABLE `userrolerow`
  ADD PRIMARY KEY (`roleID`,`userID`),
  ADD KEY `FK_UserRoleRow_User_idx` (`userID`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT voor een tabel `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT voor een tabel `reservations`
--
ALTER TABLE `reservations`
  MODIFY `reservationid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT voor een tabel `time-slot`
--
ALTER TABLE `time-slot`
  MODIFY `timeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
-- Beperkingen voor tabel `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `FK_news_category_id->PK_categories_category_id` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
-- Beperkingen voor tabel `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `FK_Reservation_userID->user_userID` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservations_ibfk_1` FOREIGN KEY (`timeid`) REFERENCES `time-slot` (`timeid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
