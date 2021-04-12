DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `news_id` int(5) NOT NULL AUTO_INCREMENT,
  `news_title` text NOT NULL,
  `news_image` varchar(10) DEFAULT NULL,
  `news_date` datetime NOT NULL,
  `news_introduction` text NOT NULL,
  `news_article` text NOT NULL,
  `category_id` int(5) DEFAULT NULL,
  PRIMARY KEY (`news_id`),
  KEY `FK_news_category_id->PK_categories_category_id` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19;

INSERT INTO `news` (`news_id`, `news_title`, `news_image`, `news_date`, `news_introduction`, `news_article`, `category_id`) VALUES
(17, 'George Hollywood heeft een nieuw menu!', NULL, '2021-04-12 20:00:14', 'George Hollywood bestaat vandaag 5 jaar en heeft zijn menu daarom flink uitgebreid! In dit artikel vind u onze nieuwste gerechten.', 'Artikel', 2);

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `category_id` int(5) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(30) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11;

INSERT INTO `categories` (`category_id`, `category_name`) VALUES
(2, 'Menu'),
(3, 'Toegankelijkheid'),
(8, 'Social Media'),
(10, 'Verbouwing');

ALTER TABLE `news`
  ADD CONSTRAINT `FK_news_category_id->PK_categories_category_id` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;