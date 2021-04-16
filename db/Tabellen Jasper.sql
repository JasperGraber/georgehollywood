DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `news_id` int(5) NOT NULL AUTO_INCREMENT,
  `news_title` text NOT NULL,
  `news_image` varchar(100) DEFAULT NULL,
  `news_date` datetime NOT NULL,
  `news_introduction` varchar(200) NOT NULL,
  `news_article` text NOT NULL,
  `category_id` int(5) DEFAULT NULL,
  PRIMARY KEY (`news_id`),
  KEY `FK_news_category_id->PK_categories_category_id` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=35;

INSERT INTO `news` (`news_id`, `news_title`, `news_image`, `news_date`, `news_introduction`, `news_article`, `category_id`) VALUES
(17, 'George Hollywood heeft een nieuw menu!', 'shutterstock_1009968298.jpg', '2021-04-15 22:53:04', 'George Hollywood bestaat vandaag 5 jaar en heeft zijn menu daarom flink uitgebreid! In dit artikel vind u onze nieuwste gerechten.', 'Artikel.', 2),
(24, 'test', 'reserveren-lunch-foto.jpeg', '2021-04-14 15:37:32', 'dit is een inleiding', 'dit is het artikel', 8),
(27, 'Dit is een voorbeeld van een titel met een varchar met een maximum aantal van 100 characters!!!!!!!!', '', '2021-04-14 21:32:20', 'Dit is een voorbeeld van een inleiding van een artikel met een varchar met een maximum aantal van 200 characters! Je ziet al dat dit een stuk langer en uitgebreider is, voor hele een mooie inleiding!\r', 'd', 2);

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `category_id` int(5) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(30) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13;

INSERT INTO `categories` (`category_id`, `category_name`) VALUES
(2, 'Menu'),
(3, 'Toegankelijkheid'),
(8, 'Social Media'),
(12, 'Verbouwing');

ALTER TABLE `news`
  ADD CONSTRAINT `FK_news_category_id->PK_categories_category_id` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;