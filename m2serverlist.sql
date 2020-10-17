#
# SQL Export
# Created by Querious (300050)
# Created: October 17, 2020 at 5:34:21 PM GMT+2
# Encoding: Unicode (UTF-8)
#


SET @ORIG_FOREIGN_KEY_CHECKS = @@FOREIGN_KEY_CHECKS;
SET FOREIGN_KEY_CHECKS = 0;

SET @ORIG_UNIQUE_CHECKS = @@UNIQUE_CHECKS;
SET UNIQUE_CHECKS = 0;

SET @ORIG_TIME_ZONE = @@TIME_ZONE;
SET TIME_ZONE = '+00:00';

SET @ORIG_SQL_MODE = @@SQL_MODE;
SET SQL_MODE = 'NO_AUTO_VALUE_ON_ZERO';



DROP TABLE IF EXISTS `servers`;


CREATE TABLE `servers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `website` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `description` text NOT NULL,
  `vip` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;




LOCK TABLES `servers` WRITE;
INSERT INTO `servers` (`id`, `name`, `website`, `description`, `vip`) VALUES 
	(1,'Gameforge Metin2','https://gameforge.com/en-US/play/metin2','Become a part of the legendary oriental action MMO! Put your skill to the test in epic PvE battles against dragons and sinister demon lords, enter merciless PvP duels and become a true martial arts master!',1),
	(2,'Ekura CZ','https://www.ekura.cz/','Private server from Ekura for the Czech Republic. Large community of players, Czech, Slovak. If you want to spend a few months on something, to have a great feeling every time you play, then this server is perfect for you.',0),
	(3,'World of Fantasy','http://worldoffantasy.ro/','Join the World Of Fantasy! We are waiting you and your friends with impressive systems such as: Gaya points and store system New weapons, armors, pets and mounts Crafting, scarf and title systems Remote NPC system Special Inventory Interface modifier Metin2 Top 100, 200 Server, Metin2 Private Server, Metin2 Servers',0),
	(4,'Metin2Light','http://www.metin2light.ro/','Mod: PvM Medium | Max Level: 120 | Max Status: 90 | Sistems: Alchemy, Pets, Power Mounts, Crafting, SwitchBot, Offline Shops, Bonus transfer, Gaya Market and much more! Metin2 Top 100, 200 Server, Metin2 Private Server, Metin2 Servers',1),
	(5,'Astens2 GF','http://hamarosan.hu/hu','Astens2 Lvl max 120 PvM / PVP Medium Rates: EXP: 200x | Drop: 200x | Gold: 200x. No Lag, No Bugs, ItemShop activ, Staff activ. If you want to see more than, for exaple on the site, follow us! Link: https://www.facebook.com/Astens2/ Metin2 Top 100, 200 Server, Metin2 Private Server, Metin2 Servers',1),
	(6,'Zaos Europe | International | NewSchool','https://zaos.eu/coming-soon','As a lone warrior in this conflict, you must choose an allegiance and confront enemies from all sides as you strive to overcome conflict against the mightiest of challengers. Metin2 Top 100, 200 Server, Metin2 Private Server, Metin2 Servers',0),
	(7,'Metin2 Epic Gamers','http://metin2.epic-gamers.ro/','Metin2, Mode: PVM HARD LEVEL MAX: 105 Rates: 150% Staff : Respectful Enjoy, Team Metin2 Epic Gamers Metin2 Top 100, 200 Server, Metin2 Private Server, Metin2 Servers',1);
UNLOCK TABLES;






SET FOREIGN_KEY_CHECKS = @ORIG_FOREIGN_KEY_CHECKS;

SET UNIQUE_CHECKS = @ORIG_UNIQUE_CHECKS;

SET @ORIG_TIME_ZONE = @@TIME_ZONE;
SET TIME_ZONE = @ORIG_TIME_ZONE;

SET SQL_MODE = @ORIG_SQL_MODE;



# Export Finished: October 17, 2020 at 5:34:21 PM GMT+2

