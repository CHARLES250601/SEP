/*
SQLyog Community v13.1.7 (64 bit)
MySQL - 10.4.13-MariaDB : Database - sdp_master
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`sdp_master` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `sdp_master`;

/*Table structure for table `cart` */

DROP TABLE IF EXISTS `cart`;

CREATE TABLE `cart` (
  `cart_id` BIGINT(20) NOT NULL AUTO_INCREMENT,
  `game_id` BIGINT(20) NOT NULL,
  `cart_quantity` BIGINT(20) NOT NULL,
  `users_id` BIGINT(20) NOT NULL,
  `cart_checked` TINYINT(1) DEFAULT 1,
  PRIMARY KEY (`cart_id`)
) ENGINE=INNODB AUTO_INCREMENT=84 DEFAULT CHARSET=utf8mb4;

/*Data for the table `cart` */

/*Table structure for table `dinvoice` */

DROP TABLE IF EXISTS `dinvoice`;

CREATE TABLE `dinvoice` (
  `dinvoice_id` BIGINT(20) NOT NULL AUTO_INCREMENT,
  `invoice_id` VARCHAR(15) DEFAULT NULL,
  `game_id` BIGINT(20) DEFAULT NULL,
  `quantity` INT(10) DEFAULT NULL,
  PRIMARY KEY (`dinvoice_id`)
) ENGINE=INNODB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8mb4;

/*Data for the table `dinvoice` */

INSERT  INTO `dinvoice`(`dinvoice_id`,`invoice_id`,`game_id`,`quantity`) VALUES 
(10,'21-11-2021-1',34,3),
(11,'21-11-2021-2',28,1),
(14,'06-12-2021-1',28,5),
(15,'06-12-2021-1',34,3),
(16,'06-12-2021-2',39,2),
(17,'06-12-2021-2',30,2),
(18,'12-12-2021-1',20,2),
(19,'12-12-2021-1',23,2),
(20,'12-12-2021-2',36,4),
(21,'12-12-2021-2',37,2),
(22,'12-12-2021-2',23,4),
(23,'12-12-2021-3',28,1),
(24,'12-12-2021-3',33,2),
(25,'12-12-2021-4',35,2),
(26,'12-12-2021-4',38,1),
(27,'12-12-2021-5',11,3),
(28,'12-12-2021-5',30,2),
(29,'12-12-2021-6',28,1),
(30,'12-12-2021-6',9,1),
(31,'12-12-2021-6',40,1),
(32,'12-12-2021-6',17,1),
(33,'12-12-2021-7',26,1),
(34,'12-12-2021-8',30,2),
(35,'01-12-2021-1',41,1),
(36,'01-12-2021-1',36,1),
(37,'01-12-2021-2',38,1),
(38,'03-12-2021-1',40,1),
(39,'03-12-2021-2',35,1),
(40,'04-12-2021-1',39,1),
(41,'04-12-2021-2',33,1),
(42,'04-12-2021-3',32,1),
(43,'04-12-2021-4',34,1),
(44,'06-12-2021-3',35,1),
(45,'06-12-2021-4',32,1),
(46,'06-12-2021-5',27,1),
(47,'06-12-2021-6',15,1),
(48,'06-12-2021-7',8,1),
(49,'06-12-2021-8',20,1),
(50,'06-12-2021-9',41,1),
(51,'06-12-2021-10',36,1),
(52,'08-12-2021-1',31,1),
(53,'08-12-2021-2',36,1),
(54,'08-12-2021-3',32,1);

/*Table structure for table `djual` */

DROP TABLE IF EXISTS `djual`;

CREATE TABLE `djual` (
  `invoice_id` VARCHAR(15) NOT NULL,
  `game_id` VARCHAR(5) NOT NULL,
  `game_name` VARCHAR(15) NOT NULL,
  `game_sell_price` INT(20) NOT NULL,
  `game_stok` INT(10) NOT NULL,
  `game_buy_price` INT(20) NOT NULL,
  `subtotal` INT(20) NOT NULL,
  `grandtotal` INT(20) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4;

/*Data for the table `djual` */

/*Table structure for table `dredeem` */

DROP TABLE IF EXISTS `dredeem`;

CREATE TABLE `dredeem` (
  `voucher_id` VARCHAR(5) NOT NULL,
  `voucher_redeem` VARCHAR(15) NOT NULL,
  `user_id` VARCHAR(15) NOT NULL,
  `user_name` VARCHAR(15) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4;

/*Data for the table `dredeem` */

/*Table structure for table `drefund` */

DROP TABLE IF EXISTS `drefund`;

CREATE TABLE `drefund` (
  `drefund_id` INT(15) NOT NULL AUTO_INCREMENT,
  `refund_id` INT(15) NOT NULL,
  `game_id` VARCHAR(5) NOT NULL,
  `quantity` INT(25) NOT NULL,
  `harga` INT(25) NOT NULL,
  `status` VARCHAR(25) DEFAULT NULL,
  PRIMARY KEY (`drefund_id`)
) ENGINE=INNODB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `drefund` */

INSERT  INTO `drefund`(`drefund_id`,`refund_id`,`game_id`,`quantity`,`harga`,`status`) VALUES 
(4,9,'36',1,460000,'diTolak'),
(5,9,'37',2,90000,'diTerima');

/*Table structure for table `ekspedisi` */

DROP TABLE IF EXISTS `ekspedisi`;

CREATE TABLE `ekspedisi` (
  `ekspedisi_id` BIGINT(20) NOT NULL AUTO_INCREMENT,
  `ekspedisi_name` VARCHAR(50) DEFAULT NULL,
  `ekspedisi_price` BIGINT(20) DEFAULT NULL,
  PRIMARY KEY (`ekspedisi_id`)
) ENGINE=INNODB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `ekspedisi` */

INSERT  INTO `ekspedisi`(`ekspedisi_id`,`ekspedisi_name`,`ekspedisi_price`) VALUES 
(1,'JNE',13000),
(2,'Tiki',11000),
(3,'JNT',10000),
(4,'SiCepat',7000);

/*Table structure for table `game` */

DROP TABLE IF EXISTS `game`;

CREATE TABLE `game` (
  `game_id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `game_name` VARCHAR(255) NOT NULL,
  `game_desc` VARCHAR(255) DEFAULT NULL,
  `game_sell_price` INT(20) NOT NULL,
  `game_buy_price` INT(20) NOT NULL,
  `quantity` INT(10) NOT NULL,
  `genre_game` VARCHAR(20) NOT NULL,
  `platform` VARCHAR(20) NOT NULL,
  `game_gambar` VARCHAR(255) DEFAULT NULL,
  `game_gambar2` VARCHAR(255) DEFAULT NULL,
  `game_gambar3` VARCHAR(255) DEFAULT NULL,
  `game_gambar4` VARCHAR(255) DEFAULT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  `deleted_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`game_id`)
) ENGINE=INNODB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4;

/*Data for the table `game` */

INSERT  INTO `game`(`game_id`,`game_name`,`game_desc`,`game_sell_price`,`game_buy_price`,`quantity`,`genre_game`,`platform`,`game_gambar`,`game_gambar2`,`game_gambar3`,`game_gambar4`,`created_at`,`updated_at`,`deleted_at`) VALUES 
(1,'Assassin\'s Creed','Choose your fate in Assassin\'s Creed® Odyssey. From outcast to living legend, embark on an odyssey to uncover the secrets of your past and change the fate of Ancient Greece.',620000,585000,15,'Action','PS4','As001.png',NULL,NULL,NULL,'2021-07-01 14:00:38','2021-07-01 14:00:38',NULL),
(2,'Battlefield™ 2042','Adapt and overcome in the near-future, all-out war of Battlefield™ 2042. Join the fight on Orbital with a diverse selection of Specialists, cutting-edge weaponry, and vehicles to choose from.',650000,625000,16,'Action','XBOX ONE','Ba001.png',NULL,NULL,NULL,'2021-07-01 15:00:30','2021-07-01 15:00:30',NULL),
(3,'Back 4 Blood','Back 4 Blood is a thrilling cooperative first-person shooter from the creators of the critically acclaimed Left 4 Dead franchise. You are at the center of a war against the Ridden. These once-human hosts of a deadly parasite have turned into terrifying cr',756000,740000,5,'Action','PC','Ba002.png',NULL,NULL,NULL,'2021-07-01 15:00:33','2021-07-01 15:00:33',NULL),
(4,'Borderland','The Ultimate Vault Hunter’s Upgrade lets you get the most out of the Borderlands 2 experience.',90000,75000,4,'Action','PS3','Bo001.png',NULL,NULL,NULL,'2021-07-02 09:05:23','2021-07-02 09:05:23',NULL),
(5,'Borderland 2','The Ultimate Vault Hunter’s Upgrade lets you get the most out of the Borderlands 2 experience.',120000,100000,3,'Action','PS3','Bo002.png',NULL,NULL,NULL,'2021-07-02 09:05:23','2021-07-02 09:05:23',NULL),
(6,'Borderland 3','The original shooter-looter returns, packing bazillions of guns and a mayhem-fueled adventure! Blast through new worlds and enemies as one of four new Vault Hunters.',145000,125000,4,'Action','PS4','Bo003.png',NULL,NULL,NULL,'2021-07-02 09:05:23','2021-07-02 09:05:23',NULL),
(7,'Cyberpunk 2077','Cyberpunk 2077 is an open-world, action-adventure story set in Night City, a megalopolis',238900,210000,10,'Adventure','XBOX ONE','Cy001.png',NULL,NULL,NULL,'2021-07-02 09:08:23','2021-07-02 09:08:23',NULL),
(8,'Dark Deception','Dark Deception is a story driven first-person horror action maze game that mixes the fast-paced style of classic arcade games with fun horror game design. Trapped in a dark world full of nightmarish mazes and ridiculous monsters, the only way out is to fa',306822,290000,6,'Action','NINTENDO SWITCH','Da001.png',NULL,NULL,NULL,'2021-07-10 09:08:23','2021-07-10 09:08:23',NULL),
(9,'Demon Slayer: Kimetsu no Yaiba – The Hinokami Chronicles','In solo play mode, walk the path of Tanjiro Kamado whose family is slaughtered and sister transformed into a demon. Experience the story depicted in the anime \"\"Demon Slayer: Kimetsu no Yaiba\"\" as Tanjiro fights to restore Nezuko\'s humanity and battle the',209000,190000,14,'Action','PS4','De001.png',NULL,NULL,NULL,'2021-07-10 10:08:23','2021-07-10 10:08:23',NULL),
(10,'Dino Crisis 3','Set in the year 2548, it has been 300 years since Earth lost contact with the colony ship Ozymandias, en route to a2. Somehow, the ship has reappeared near Jupiter. A team called S.O.A.R. (Special Operations And Reconnaissance) is sent aboard the probe sh',120000,100000,10,'Adventure','XBOX','Di001.png',NULL,NULL,NULL,'2021-07-10 11:10:55','2021-07-10 11:10:55',NULL),
(11,'Disco Elysium - The Final Cut','Disco Elysium - The Final Cut is the definitive edition of the groundbreaking role playing game. You’re a detective with a unique skill system at your disposal and a whole city block to carve your path across. Interrogate unforgettable characters, crack m',170000,154000,14,'Adventure','PC','Di002.png',NULL,NULL,NULL,'2021-08-10 12:03:45','2021-08-10 12:03:45',NULL),
(12,'Doom Eternal','Hell’s armies have invaded Earth. Become the Slayer in an epic single-player campaign to conquer demons across dimensions and stop the final destruction of humanity.',1185000,1000000,5,'Adventure','PS4','Do001.png',NULL,NULL,NULL,'2021-08-10 14:02:01','2021-08-10 14:02:01',NULL),
(13,'Fifa 22','Powered by Football™, EA SPORTS™ FIFA 22 brings the game even closer to the real thing with fundamental gameplay advances and a new season of innovation across every mode.',670000,630000,10,'Sports','PS4','Fi001.png',NULL,NULL,NULL,'2021-08-10 14:02:01','2021-08-10 14:02:01',NULL),
(14,'Forza Horizon 4','Dynamic seasons change everything at the world’s greatest automotive festival. Go it alone or team up with others to explore beautiful and historic Britain in a shared open world. Collect, modify and drive over 450 cars. Race, stunt, create and explore – ',250000,235000,13,'Racing','XBOX ONE','Fo001.png',NULL,NULL,NULL,'2021-08-10 14:02:01','2021-08-10 14:02:01',NULL),
(15,'GOD FALL','The Many Realms of Aperion Awaits – Adventure across exotic vistas, from the above-ground reefs of the Water Realm to the subterranean crimson forests of the Earth Realm\r\nMaster Breathtaking Weapons – Master all five weapon classes, each with unique plays',865000,830000,4,'Adventure','PS5','Go001.png',NULL,NULL,NULL,'2021-08-10 14:07:01','2021-08-10 14:07:01',NULL),
(16,'Horizon Zero Dawn','EARTH IS OURS NO MORE Experience Aloy’s entire legendary quest to unravel the mysteries of a world ruled by deadly Machines.',210000,200000,10,'Adventure','PS4','Ho001.png',NULL,NULL,NULL,'2021-08-10 14:07:01','2021-08-10 14:07:01',NULL),
(17,'Iron Harvest','Iron Harvest is a real-time strategy game (RTS) set in the alternate reality of 1920+, just after the end of the Great War. The Game lets you control giant dieselpunk mechs, combining epic singleplayer and coop campaigns as well as skirmishes with intense',180000,150000,19,'Adventure','PC','Ir001.png',NULL,NULL,NULL,'2021-08-13 15:33:33','2021-08-13 15:33:33',NULL),
(18,'It Takes Two','Embark on the craziest journey of your life in It Takes Two, a genre-bending platform adventure created purely for co-op. Invite a friend to join for free with Friend’s Pass and work together across a huge variety of gleefully disruptive gameplay challeng',480000,465000,6,'Adventure','PS4','It001.png',NULL,NULL,NULL,'2021-08-13 15:35:20','2021-08-13 15:35:20',NULL),
(19,'Kena: bridge of spirits','Kena, a young Spirit Guide, travels to an abandoned village in search of the sacred mountain shrine.  She struggles to uncover the secrets of this forgotten community hidden in an overgrown forest where wandering spirits are trapped.',89000,67000,4,'Adventure','PC','Ke001.png',NULL,NULL,NULL,'2021-08-13 15:35:20','2021-08-13 15:35:20',NULL),
(20,'Life is Strange: True Colors','A bold new era of the award-winning Life is Strange begins, with an all-new playable lead character and a thrilling mystery to solve!\r\n\r\nAlex Chen has long suppressed her \'curse\': the supernatural ability to experience, absorb and manipulate the strong em',870000,863000,3,'Adventure','PS4','Li001.png',NULL,NULL,NULL,'2021-08-14 08:11:00','2021-08-14 08:11:00',NULL),
(21,'Minecraft','The primary point of Minecraft is to survive, craft, and explore the randomly generated world the player spawns into, while taking on various challenges like navigating mineshafts and the Nether and, eventually, defeating the Ender Dragon. Minecraft is de',100000,90000,21,'Adventure','PC','Mi001.png',NULL,NULL,NULL,'2021-08-14 08:11:00','2021-08-14 08:11:00',NULL),
(22,'Monster Hunter: World','Monster Hunter: World is an action role-playing game developed and published by Capcom and the fifth mainline installment in the Monster Hunter series. ... In the game, the player takes the role of a Hunter, tasked to hunt down and either kill or trap mon',350000,300000,15,'Adventure','PS4','Mo001.png',NULL,NULL,NULL,'2021-08-14 08:11:00','2021-08-14 08:11:00',NULL),
(23,'Naruto Shippuden: ultimate ninja storm 4','a broad set of Ninja Skills will be yours to use against the fiercest foes you’ll ever encounter. Massive attacks in the form of “Ultimate Jutsus”, energetic evolutions with the “Awakening”, the inimitable shurikens & kunais and a unique playstyle for eac',70000,55000,11,'Action','PS4','Na001.png',NULL,NULL,NULL,'2021-08-15 16:33:20','2021-08-15 16:33:20',NULL),
(24,'NBA2021','Assemble your G.O.A.T. NBA fantasy team of current players and historic legends and compete against the world. Uncover rare and highly-rated player cards by participating in many rewarding game events and daily and weekly challenges, and compare your hard',150000,100000,7,'Sports','PS4','NB001.jpg',NULL,NULL,NULL,'2021-08-15 16:33:20','2021-08-15 16:33:20',NULL),
(25,'New Super Mario Bros.™ U Deluxe','Join Mario, Luigi, and pals for single-player or multiplayer fun anytime, anywhere! Take on two family-friendly, side-scrolling adventures with up to three friends* as you try to save the Mushroom Kingdom. Includes the New Super Mario Bros. U and harder, ',853000,810000,3,'Adventure','NINTENDO SWITCH','Ne001.png',NULL,NULL,NULL,'2021-08-15 16:33:20','2021-08-15 16:33:20',NULL),
(26,'Nier Automata','NieR: Automata tells the story of androids 2B, 9S and A2 and their battle to reclaim the machine-driven dystopia overrun by powerful machines.',210000,175000,5,'Adventure','PS4','Ni001.png',NULL,NULL,NULL,'2021-08-15 16:33:20','2021-08-15 16:33:20',NULL),
(27,'Nickelodeon All-Star Brawl','Brawl it out as your favorite Nickelodeon characters in bombastic platform battles! With a power-packed cast of heroes from the Nickelodeon universe, face-off with all-stars from SpongeBob Squarepants, Teenage Mutant Ninja Turtles, The Loud House, Danny P',170000,150000,12,'Action','PS5','Ni002.png',NULL,NULL,NULL,'2021-08-15 16:33:20','2021-08-15 16:33:20',NULL),
(28,'Persona 4 Golden','Inaba—a quiet town in rural Japan sets the scene for budding adolescence in Persona 4 Golden.',260000,254000,12,'Adventure','PC','Pe001.png',NULL,NULL,NULL,'2021-08-17 10:12:20','2021-08-17 10:12:20',NULL),
(29,'Phasmophobia','Phasmophobia is a 4 player online co-op psychological horror where you and your team members of paranormal investigators will enter haunted locations filled with paranormal activity and gather as much evidence of the paranormal as you can. You will use yo',90000,70000,17,'Adventure','PC','Ph001.png',NULL,NULL,NULL,'2021-08-17 10:12:20','2021-08-17 10:12:20',NULL),
(30,'Raft','Trapped on a small raft with nothing but a hook made of old plastic, players awake on a vast,',135000,120000,11,'Adventure','PC','Ra001.png',NULL,NULL,NULL,'2021-08-17 10:12:20','2021-08-17 10:12:20',NULL),
(31,'Scarlet Nexus','In the far distant future, a psionic hormone was discovered in the human brain, granting people extra-sensory powers and changed the world as we knew it. As humanity entered this new era, deranged mutants known as Others began to descend from the sky with',550000,520000,15,'Action','PS4','Sc001.png',NULL,NULL,NULL,'2021-08-17 10:12:20','2021-08-17 10:12:20',NULL),
(32,'Star Wars Squadrons','Master the art of starfighter combat in the authentic piloting experience STAR WARS™: Squadrons. Buckle up and feel the adrenaline of first-person, multiplayer space dogfights alongside your squadron. Pilots who enlist will step into the cockpits of starf',460000,450000,14,'Action','PS4','St001.png',NULL,NULL,NULL,'2021-08-17 10:12:20','2021-08-17 10:12:20',NULL),
(33,'SUBNAUTICA DEEP OCEAN','Subnautica\r\nDescend into the depths of an alien underwater world filled with wonder and peril. Craft equipment, pilot submarines and out-smart wildlife to explore lush coral reefs, volcanoes, cave systems, and more - all while trying to survive.\r\nSubnauti',175000,160000,16,'Adventure','PS4','Su001.png',NULL,NULL,NULL,'2021-08-17 10:12:20','2021-08-17 10:12:20',NULL),
(34,'Sunset Overdrive','Don’t miss the single-player campaign from the game that IGN awarded Best Xbox One Game of 2014, the game that Polygon rated 9 out of 10, and the game that Eurogamer calls “a breath of fresh air.” In Sunset Overdrive, the year is 2027 and Sunset City is u',125000,100000,16,'Adventure','XBOX','Su002.png',NULL,NULL,NULL,'2021-08-20 17:32:14','2021-08-17 17:32:14',NULL),
(35,'Super Monkey Ball Banana Mania','Roll through wondrous worlds with AiAi and friends as you race to stop monkey mad scientist Dr. Bad-Boon from blowing up Jungle Island! Join the all-star monkey team of AiAi, MeeMee, GonGon, Baby, YanYan and Doctor as you bounce, tilt, and roll your way a',639000,600000,19,'Adventure','PS5','Su003.png','Su011.jpg','Su013.jpg','Su099.jpg','2021-08-20 17:32:14','2021-08-17 17:32:14',NULL),
(36,'Tekken 7','Discover the epic conclusion of the Mishima clan and unravel the reasons behind each step of their ceaseless fight. Powered by Unreal Engine 4, TEKKEN 7 features stunning story-driven cinematic battles and intense duels that can be enjoyed with friends an',460000,400000,12,'Action','PC','Te001.png',NULL,NULL,NULL,'2021-08-20 17:32:14','2021-12-05 22:09:00',NULL),
(37,'Terraria','Dig, Fight, Explore, Build: The very world is at your fingertips as you fight for survival, fortune, and glory. Will you delve deep into cavernous expanses in search of treasure and raw materials with which to craft ever-evolving gear, machinery, and aest',90000,86000,20,'Adventure','PC','Te002.png',NULL,NULL,NULL,'2021-08-20 17:32:14','2021-08-17 17:32:14',NULL),
(38,'The Walking Dead: Saints & Sinners','Saints & Sinners is a game unlike any other in The Walking Dead universe. Every challenge you face and decision you make is driven by YOU. Fight the undead, scavenge through the flooded ruins of New Orleans, and face gut-wrenching choices for you and the ',209999,189000,17,'Action','PS4','Th001.png',NULL,NULL,NULL,'2021-08-20 17:32:14','2021-08-17 17:32:14',NULL),
(39,'Tom Clancy\'s Ghost Recon® Wildlands','Create a team with up to 3 friends in Tom Clancy’s Ghost Recon® Wildlands and enjoy the ultimate military shooter experience set in a massive, dangerous, and responsive open world. You can also play PVP in 4v4 class-based, tactical fights: Ghost War.',155000,140000,15,'Adventure','PS4','To001.png',NULL,NULL,NULL,'2021-08-20 17:32:14','2021-08-17 17:32:14',NULL),
(40,'Valheim','A battle-slain warrior, the Valkyries have ferried your soul to Valheim, the tenth Norse world. Besieged by creatures of chaos and ancient enemies of the gods, you are the newest custodian of the primordial purgatory, tasked with slaying Odin’s ancient ri',110000,100000,17,'Action','PC','Va001.png',NULL,NULL,NULL,'2021-08-20 17:32:14','2021-08-17 17:32:14',NULL),
(41,'Wwe 2k20','2K invites players to Step Inside the squared circle with WWE 2K20, available October 22. Your favorite WWE Superstars, Legends, Hall of Famers and NXT’s best will join the festivities and celebrate the rebirth of the WWE 2K franchise!',210000,180000,8,'Action','PS4','Ww001.png',NULL,NULL,NULL,'2021-08-20 17:32:14','2021-08-17 17:32:14',NULL);

/*Table structure for table `hinvoice` */

DROP TABLE IF EXISTS `hinvoice`;

CREATE TABLE `hinvoice` (
  `invoice_id` VARCHAR(15) NOT NULL,
  `invoice_date` DATE NOT NULL,
  `invoice_time` TIME NOT NULL,
  `invoice_status` VARCHAR(30) NOT NULL,
  `users_id_customer` VARCHAR(15) NOT NULL,
  `nama_penerima` VARCHAR(50) NOT NULL,
  `alamat_penerima` VARCHAR(255) NOT NULL,
  `telp_penerima` VARCHAR(30) NOT NULL,
  `users_id_karyawan` VARCHAR(15) DEFAULT NULL,
  `grandtotal` INT(20) NOT NULL,
  `ekspedisi_id` BIGINT(20) NOT NULL,
  `nomorresi` VARCHAR(20) DEFAULT NULL,
  PRIMARY KEY (`invoice_id`)
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4;

/*Data for the table `hinvoice` */

INSERT  INTO `hinvoice`(`invoice_id`,`invoice_date`,`invoice_time`,`invoice_status`,`users_id_customer`,`nama_penerima`,`alamat_penerima`,`telp_penerima`,`users_id_karyawan`,`grandtotal`,`ekspedisi_id`,`nomorresi`) VALUES 
('01-12-2021-1','2021-12-01','00:48:14','Menunggu Konfirmasi','2','Naruto','ploso 11','086845341232',NULL,681000,2,NULL),
('01-12-2021-2','2021-12-01','00:49:02','Menunggu Konfirmasi','2','Naruto','ploso 11','086845341232',NULL,222999,1,NULL),
('03-12-2021-1','2021-12-03','03:50:56','Menunggu Konfirmasi','3','Budi','mojoarum 13','087843742232',NULL,117000,4,NULL),
('03-12-2021-2','2021-12-03','03:52:20','Menunggu Konfirmasi','3','Budi','mojoarum 13','087843742232',NULL,652000,1,NULL),
('04-12-2021-1','2021-12-04','07:57:32','Menunggu Konfirmasi','4','Kim-unch','kalijudan 15','081243861266',NULL,168000,1,NULL),
('04-12-2021-2','2021-12-04','07:58:42','Menunggu Konfirmasi','4','Kim-unch','kalijudan 15','081243861266',NULL,182000,4,NULL),
('04-12-2021-3','2021-12-04','08:05:21','Menunggu Konfirmasi','5','Alex','mayjend sungkono 98','087833211232',NULL,473000,1,NULL),
('04-12-2021-4','2021-12-04','08:06:47','Menunggu Konfirmasi','5','Alex','mayjend sungkono 98','087833211232',NULL,138000,1,NULL),
('06-12-2021-1','2021-12-06','21:40:16','Terkonfirmasi','2','Naruto','ploso 11','086845341232',NULL,1688000,1,NULL),
('06-12-2021-10','2021-12-06','18:48:59','Menunggu Konfirmasi','9','Tris','majapahit 50','087867842132',NULL,473000,1,NULL),
('06-12-2021-2','2021-12-06','22:00:27','Menunggu Konfirmasi','2','Naruto','ploso 11','086845341232',NULL,593000,1,NULL),
('06-12-2021-3','2021-12-06','18:41:03','Menunggu Konfirmasi','6','Marco','kenjeran 1a','082883741232',NULL,652000,1,NULL),
('06-12-2021-4','2021-12-06','18:41:16','Menunggu Konfirmasi','6','Marco','kenjeran 1a','082883741232',NULL,473000,1,NULL),
('06-12-2021-5','2021-12-06','18:42:58','Menunggu Konfirmasi','7','stephanie','kapasan 3e','087843844892',NULL,183000,1,NULL),
('06-12-2021-6','2021-12-06','18:43:11','Menunggu Konfirmasi','7','stephanie','kapasan 3e','087843844892',NULL,878000,1,NULL),
('06-12-2021-7','2021-12-06','18:44:47','Menunggu Konfirmasi','8','Santoso','simokerto 20','08284441236',NULL,319822,1,NULL),
('06-12-2021-8','2021-12-06','18:44:59','Menunggu Konfirmasi','8','Santoso','simokerto 20','08284441236',NULL,883000,1,NULL),
('06-12-2021-9','2021-12-06','18:48:49','Menunggu Konfirmasi','9','Tris','majapahit 50','087867842132',NULL,223000,1,NULL),
('08-12-2021-1','2021-12-08','22:56:26','Menunggu Konfirmasi','10','Brandon','ahmad yanni 23a','084889341232',NULL,563000,1,NULL),
('08-12-2021-2','2021-12-08','22:56:36','Menunggu Konfirmasi','10','Brandon','ahmad yanni 23a','084889341232',NULL,473000,1,NULL),
('08-12-2021-3','2021-12-08','22:56:45','Menunggu Konfirmasi','10','Brandon','ahmad yanni 23a','084889341232',NULL,473000,1,NULL),
('12-12-2021-1','2021-12-12','09:12:59','Selesai','2','Naruto','ploso 11','086845341232',NULL,1890000,3,'SJ12971241'),
('12-12-2021-2','2021-12-12','09:15:00','Selesai','1','Gojo','konoha 23','087843841232',NULL,3210000,3,'Sj12947102'),
('12-12-2021-3','2021-12-12','09:16:28','Terkirim','4','Kim-unch','kalijudan 15','081243861266','13',623000,1,'SJ1284r7103'),
('12-12-2021-4','2021-12-12','09:18:59','Terkirim','7','stephanie','kapasan 3e','087843844892',NULL,1500999,1,'SJ120751823'),
('12-12-2021-5','2021-12-12','09:20:17','Selesai','7','stephanie','kapasan 3e','087843844892',NULL,793000,1,'Sj12905712045'),
('12-12-2021-6','2021-12-12','09:27:27','Selesai','8','Santoso','simokerto 20','08284441236',NULL,772000,1,'JS102195156230'),
('12-12-2021-7','2021-12-12','09:28:09','Selesai','8','Santoso','simokerto 20','08284441236',NULL,217000,4,'JS021846190521'),
('12-12-2021-8','2021-12-12','09:30:18','Terkirim','8','Santoso','simokerto 20','08284441236',NULL,283000,1,'JAs0129461294Sa'),
('21-11-2021-1','2021-11-21','13:28:02','Terkonfirmasi','2','Naruto','ploso 11','086845341232','11',388000,1,NULL),
('21-11-2021-2','2021-11-21','14:12:51','Terkonfirmasi','2','Naruto','ploso 11','086845341232','11',271000,2,NULL);

/*Table structure for table `hjual` */

DROP TABLE IF EXISTS `hjual`;

CREATE TABLE `hjual` (
  `invoice_id` VARCHAR(15) NOT NULL,
  `tanggal_invoice` DATE NOT NULL,
  `users_id_customer` VARCHAR(15) NOT NULL,
  `users_name_customer` VARCHAR(30) NOT NULL,
  `users_address` VARCHAR(255) DEFAULT NULL,
  `users_id_karyawan` VARCHAR(15) NOT NULL,
  `users_username_karyawan` VARCHAR(30) NOT NULL,
  `grandtotal` INT(20) NOT NULL,
  PRIMARY KEY (`invoice_id`)
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4;

/*Data for the table `hjual` */

/*Table structure for table `hredeem` */

DROP TABLE IF EXISTS `hredeem`;

CREATE TABLE `hredeem` (
  `voucher_id` VARCHAR(5) NOT NULL,
  `voucher_name` VARCHAR(15) NOT NULL,
  `voucher_kode` VARCHAR(15) NOT NULL,
  `user_id_customer` VARCHAR(15) NOT NULL,
  `tanggal_terbit` DATE NOT NULL,
  `tanggal_exp` DATE NOT NULL,
  `voucher_nominal` INT(20) NOT NULL,
  `voucher_status` INT(1) NOT NULL,
  PRIMARY KEY (`voucher_id`)
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4;

/*Data for the table `hredeem` */

/*Table structure for table `hrefund` */

DROP TABLE IF EXISTS `hrefund`;

CREATE TABLE `hrefund` (
  `refund_id` INT(15) NOT NULL AUTO_INCREMENT,
  `tanggal_refund` DATE NOT NULL,
  `user_id_customer` VARCHAR(15) NOT NULL,
  `user_id_karyawan` VARCHAR(15) DEFAULT NULL,
  `invoice_id` VARCHAR(15) NOT NULL,
  `alasan_refund` VARCHAR(255) DEFAULT NULL,
  `refund_total` INT(20) NOT NULL,
  `refund_status` VARCHAR(30) NOT NULL,
  PRIMARY KEY (`refund_id`)
) ENGINE=INNODB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

/*Data for the table `hrefund` */

INSERT  INTO `hrefund`(`refund_id`,`tanggal_refund`,`user_id_customer`,`user_id_karyawan`,`invoice_id`,`alasan_refund`,`refund_total`,`refund_status`) VALUES 
(9,'2021-12-12','1','11','12-12-2021-2','Game Salah beli',640000,'Selesai');

/*Table structure for table `laporan` */

DROP TABLE IF EXISTS `laporan`;

CREATE TABLE `laporan` (
  `laporan_id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `hewan_id` INT(11) DEFAULT NULL,
  `pengguna_id` INT(11) DEFAULT NULL,
  `laporan_deskripsi` TEXT DEFAULT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  `deleted_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`laporan_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `laporan` */

insert  into `laporan`(`laporan_id`,`hewan_id`,`pengguna_id`,`laporan_deskripsi`,`created_at`,`updated_at`,`deleted_at`) values 
(1,62,1,'Kondisi 1',NULL,NULL,NULL),
(2,29,1,'tern dalam kondisi baik',NULL,NULL,NULL);

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

/*Table structure for table `penggunaan_voucher` */

DROP TABLE IF EXISTS `penggunaan_voucher`;

CREATE TABLE `penggunaan_voucher` (
  `voucher_id` int(10) unsigned NOT NULL,
  `users_id` int(10) unsigned NOT NULL,
  `jumlah_penggunaan` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `penggunaan_voucher` */

insert  into `penggunaan_voucher`(`voucher_id`,`users_id`,`jumlah_penggunaan`,`created_at`,`updated_at`) values 
(5,2,1,'2021-12-02 08:13:49','2021-12-02 08:13:49'),
(6,2,1,'2021-12-02 08:13:59','2021-12-02 08:13:59'),
(5,1,1,'2021-12-02 08:14:42','2021-12-02 08:14:42'),
(8,1,1,'2021-12-02 08:16:13','2021-12-02 08:16:13'),
(9,1,1,'2021-12-02 08:16:22','2021-12-02 08:16:22'),
(8,3,1,'2021-12-02 08:17:11','2021-12-02 08:17:11'),
(5,3,1,'2021-12-02 08:17:43','2021-12-02 08:17:43'),
(9,3,1,'2021-12-02 08:18:11','2021-12-02 08:18:11'),
(9,6,1,'2021-12-02 10:48:02','2021-12-02 10:48:02'),
(8,6,1,'2021-12-02 10:48:10','2021-12-02 10:48:10'),
(7,6,1,'2021-12-02 10:48:16','2021-12-02 10:48:16'),
(9,7,1,'2021-12-02 10:49:18','2021-12-02 10:49:18'),
(8,7,1,'2021-12-02 10:49:24','2021-12-02 10:49:24'),
(7,7,1,'2021-12-02 10:49:34','2021-12-02 10:49:34'),
(6,7,1,'2021-12-02 10:49:42','2021-12-02 10:49:42'),
(9,10,1,'2021-12-02 10:53:52','2021-12-02 10:53:52'),
(7,10,1,'2021-12-02 10:53:57','2021-12-02 10:53:57'),
(5,10,1,'2021-12-02 10:54:04','2021-12-02 10:54:04'),
(6,10,1,'2021-12-02 10:54:17','2021-12-02 10:54:17'),
(6,9,1,'2021-12-02 10:58:29','2021-12-02 10:58:29'),
(5,9,1,'2021-12-02 10:58:34','2021-12-02 10:58:34'),
(9,9,1,'2021-12-02 10:58:39','2021-12-02 10:58:39'),
(6,8,1,'2021-12-02 10:59:00','2021-12-02 10:59:00'),
(5,8,1,'2021-12-02 10:59:06','2021-12-02 10:59:06'),
(9,2,1,'2021-12-01 00:47:10','2021-12-01 00:47:10'),
(9,4,1,'2021-12-04 07:55:20','2021-12-04 07:55:20'),
(5,4,1,'2021-12-04 08:02:36','2021-12-04 08:02:36'),
(6,4,1,'2021-12-04 08:02:41','2021-12-04 08:02:41'),
(7,4,1,'2021-12-04 08:02:44','2021-12-04 08:02:44'),
(8,4,1,'2021-12-04 08:02:49','2021-12-04 08:02:49'),
(5,5,1,'2021-12-04 08:03:44','2021-12-04 08:03:44'),
(6,5,1,'2021-12-04 08:03:48','2021-12-04 08:03:48'),
(7,5,1,'2021-12-04 08:03:54','2021-12-04 08:03:54'),
(8,5,1,'2021-12-04 08:03:58','2021-12-04 08:03:58'),
(9,5,1,'2021-12-04 08:04:06','2021-12-04 08:04:06'),
(10,6,1,'2021-12-04 08:38:31','2021-12-04 08:38:31'),
(5,6,1,'2021-12-06 18:40:27','2021-12-06 18:40:27'),
(6,6,1,'2021-12-06 18:40:32','2021-12-06 18:40:32'),
(5,7,1,'2021-12-06 18:42:03','2021-12-06 18:42:03'),
(10,7,1,'2021-12-06 18:42:33','2021-12-06 18:42:33'),
(8,8,1,'2021-12-06 18:43:48','2021-12-06 18:43:48'),
(9,8,1,'2021-12-06 18:43:52','2021-12-06 18:43:52'),
(7,8,1,'2021-12-06 18:44:03','2021-12-06 18:44:03'),
(10,8,1,'2021-12-06 18:44:10','2021-12-06 18:44:10'),
(7,9,1,'2021-12-06 18:48:00','2021-12-06 18:48:00'),
(10,9,1,'2021-12-06 18:48:08','2021-12-06 18:48:08'),
(8,9,1,'2021-12-06 18:48:18','2021-12-06 18:48:18'),
(10,10,1,'2021-12-08 22:55:38','2021-12-08 22:55:38');

/*Table structure for table `personal_access_tokens` */

DROP TABLE IF EXISTS `personal_access_tokens`;

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `personal_access_tokens` */

/*Table structure for table `saldo` */

DROP TABLE IF EXISTS `saldo`;

CREATE TABLE `saldo` (
  `id_pembayaran` varchar(15) NOT NULL,
  `tanggal_topup` date NOT NULL,
  `metode_pembayaran` varchar(15) NOT NULL,
  `user_id_customer` varchar(15) NOT NULL,
  `nominal_topup` int(20) NOT NULL,
  `waktu_topup` time NOT NULL,
  PRIMARY KEY (`id_pembayaran`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `saldo` */

/*Table structure for table `topup` */

DROP TABLE IF EXISTS `topup`;

CREATE TABLE `topup` (
  `id_pembayaran` varchar(15) NOT NULL,
  `tanggal_topup` date NOT NULL,
  `metode_pembayaran` varchar(15) NOT NULL,
  `user_id_customer` varchar(15) NOT NULL,
  `nominal_topup` int(20) NOT NULL,
  `waktu_topup` time NOT NULL,
  PRIMARY KEY (`id_pembayaran`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `topup` */

insert  into `topup`(`id_pembayaran`,`tanggal_topup`,`metode_pembayaran`,`user_id_customer`,`nominal_topup`,`waktu_topup`) values 
('B2021-12-0117','2021-12-01','BCA Transfer','2',181000,'00:48:14'),
('B2021-12-0611','2021-12-06','BCA Transfer','2',593000,'22:00:27'),
('B2021-12-1215','2021-12-12','BCA Transfer','7',793000,'09:20:17'),
('M2021-12-1216','2021-12-12','Mbanking','8',100000,'09:26:06'),
('O2021-10-261','2021-10-26','Ovo','1',50000,'21:51:17'),
('O2021-11-022','2021-11-02','Ovo','2',100000,'20:56:41'),
('O2021-11-023','2021-11-02','Ovo','2',100000,'20:56:48'),
('O2021-11-024','2021-11-02','Ovo','2',0,'20:56:58'),
('O2021-11-025','2021-11-02','Ovo','2',0,'20:57:10'),
('O2021-11-166','2021-11-16','Ovo','2',1000000,'23:39:04'),
('O2021-11-167','2021-11-16','Ovo','2',2000000,'23:39:44'),
('O2021-11-218','2021-11-21','Ovo','2',3000000,'13:12:38'),
('O2021-11-219','2021-11-21','Ovo','2',1000000,'14:12:20'),
('O2021-12-0118','2021-12-01','Ovo','2',222999,'00:49:02'),
('O2021-12-1214','2021-12-12','Ovo','7',350999,'09:18:59'),
('S2021-12-0610','2021-12-06','Shoppepay','2',1560822,'21:40:16'),
('S2021-12-1212','2021-12-12','Shoppepay','2',1890000,'09:12:59'),
('S2021-12-1213','2021-12-12','Shoppepay','1',1285000,'09:15:00');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `users_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `users_password` varchar(100) NOT NULL,
  `users_username` varchar(30) NOT NULL,
  `users_name` varchar(30) NOT NULL,
  `users_email` varchar(50) NOT NULL,
  `users_address` varchar(255) DEFAULT NULL,
  `users_born_date` date DEFAULT NULL,
  `users_jenis_kelamin` varchar(1) DEFAULT NULL,
  `users_phone_number` varchar(255) DEFAULT NULL,
  `users_image_profile` varchar(255) DEFAULT NULL,
  `users_role` varchar(30) NOT NULL,
  `users_saldo` int(10) DEFAULT NULL,
  PRIMARY KEY (`users_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4;

/*Data for the table `users` */

insert  into `users`(`users_id`,`users_password`,`users_username`,`users_name`,`users_email`,`users_address`,`users_born_date`,`users_jenis_kelamin`,`users_phone_number`,`users_image_profile`,`users_role`,`users_saldo`) values 
(1,'$2y$10$SGy3sWRURy2nh3GXJ6L7/OSxiq9nJtDkNFqfoCykK2cpVJwqJXxq6','Gojo55','Gojo','gojo@gmail.com','konoha 23','2009-12-21','L','087843841232',NULL,'customer',2760000),
(2,'$2y$10$SGy3sWRURy2nh3GXJ6L7/OSxiq9nJtDkNFqfoCykK2cpVJwqJXxq6','Narutox','Naruto','nartoh@gmail.com','ploso 11','2010-04-19','L','086845341232',NULL,'customer',0),
(3,'$2y$10$SGy3sWRURy2nh3GXJ6L7/OSxiq9nJtDkNFqfoCykK2cpVJwqJXxq6','Budiraha','Budi','budi@gmail.com','mojoarum 13','2005-03-11','L','087843742232',NULL,'customer',81000),
(4,'$2y$10$SGy3sWRURy2nh3GXJ6L7/OSxiq9nJtDkNFqfoCykK2cpVJwqJXxq6','unchkim','Kim-unch','kimunch@gmail.com','kalijudan 15','2005-08-11','L','081243861266',NULL,'customer',1277000),
(5,'$2y$10$SGy3sWRURy2nh3GXJ6L7/OSxiq9nJtDkNFqfoCykK2cpVJwqJXxq6','Alex Knight','Alex','alex@gmail.com','mayjend sungkono 98','2012-07-20','L','087833211232',NULL,'customer',4389000),
(6,'$2y$10$SGy3sWRURy2nh3GXJ6L7/OSxiq9nJtDkNFqfoCykK2cpVJwqJXxq6','Marco22','Marco','marco@gmail.com','kenjeran 1a','2000-11-29','L','082883741232',NULL,'customer',1775000),
(7,'$2y$10$SGy3sWRURy2nh3GXJ6L7/OSxiq9nJtDkNFqfoCykK2cpVJwqJXxq6','Dvid11','David','david@gmail.com','kapasan 3e','1998-07-01','P','087843844892',NULL,'customer',39000),
(8,'$2y$10$SGy3sWRURy2nh3GXJ6L7/OSxiq9nJtDkNFqfoCykK2cpVJwqJXxq6','santo123','Santoso','santoso@gmail.com','simokerto 20','2002-08-10','L','08284441236',NULL,'customer',1755178),
(9,'$2y$10$SGy3sWRURy2nh3GXJ6L7/OSxiq9nJtDkNFqfoCykK2cpVJwqJXxq6','Tris99','Tris','tris@gmail.com','majapahit 50','2005-08-10','P','087867842132',NULL,'customer',2044000),
(10,'$2y$10$SGy3sWRURy2nh3GXJ6L7/OSxiq9nJtDkNFqfoCykK2cpVJwqJXxq6','Brandon','Brandon','bkent@gmail.com','ahmad yanni 23a','2003-08-11','L','084889341232',NULL,'customer',2291000),
(11,'$2y$10$SGy3sWRURy2nh3GXJ6L7/OSxiq9nJtDkNFqfoCykK2cpVJwqJXxq6','Ndre','Andreas','andreas@gmail.com','sukolilo 12d','1990-10-21','L','085123855323',NULL,'karyawan',NULL),
(12,'$2y$10$SGy3sWRURy2nh3GXJ6L7/OSxiq9nJtDkNFqfoCykK2cpVJwqJXxq6','Tiff','Tiffani','Tiffani12@gmail.com','ngagel jaya tengah 13','1998-11-13','P','087843163214',NULL,'karyawan',NULL),
(13,'$2y$10$SGy3sWRURy2nh3GXJ6L7/OSxiq9nJtDkNFqfoCykK2cpVJwqJXxq6','Fitri','Fitriah','Fitri@gmail.com','kapasan utara 125','1996-05-02','P','084214681962',NULL,'karyawan',NULL),
(14,'$2y$10$SGy3sWRURy2nh3GXJ6L7/OSxiq9nJtDkNFqfoCykK2cpVJwqJXxq6','Bayu','Bayu','bayu20@gmail.com','pogot 68','1997-05-11','L','081295825032',NULL,'karyawan',NULL),
(15,'$2y$10$SGy3sWRURy2nh3GXJ6L7/OSxiq9nJtDkNFqfoCykK2cpVJwqJXxq6','Yusron','Yusron','yusron2001@gmail.com','bubutan 50a','1985-03-11','L','089458184562',NULL,'karyawan',NULL),
(16,'$2y$10$SGy3sWRURy2nh3GXJ6L7/OSxiq9nJtDkNFqfoCykK2cpVJwqJXxq6','Felis','Felis','felis1996@gmail.com','mulyosari 9a','1996-02-09','L','089291945795',NULL,'owner',NULL),
(17,'$2y$10$C1PHxvWBH7rSQg59nYHC3OaUgGpDmUJgWSdGWeb.79snqKdIuiJJe','haha123','haha','haha@gmail.com','hahahahahaha','2021-10-20','L','1000100010',NULL,'customer',0),
(18,'$2y$10$Tnp4Lo1S1U0JikxKxTvopu6JfhLUGSiAMtCr2KtxefUSEbfYtSvbK','felsaisaf','sasasa','asasasa@gmail.com','fasasfas','2021-10-05','L','082121841471313',NULL,'customer',0),
(21,'$2y$10$FLDjEJMC/KPgxpp9q.3Egu5OqVTwwH1VUSYhLdwTgQEzhVJ5XA8ja','xixiixxi','xxx','xx@gmail.com','wadad','2021-11-08','L','1000100010',NULL,'customer',0);

/*Table structure for table `vouchers` */

DROP TABLE IF EXISTS `vouchers`;

CREATE TABLE `vouchers` (
  `voucher_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kode_voucher` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_saldo` int(11) NOT NULL,
  `tanggal_awal` timestamp NULL DEFAULT NULL,
  `tanggal_akhir` timestamp NULL DEFAULT NULL,
  `limit_penggunaan` int(11) DEFAULT NULL,
  `penggunaan_maksimal` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`voucher_id`),
  UNIQUE KEY `vouchers_kode_voucher_unique` (`kode_voucher`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `vouchers` */

insert  into `vouchers`(`voucher_id`,`kode_voucher`,`jumlah_saldo`,`tanggal_awal`,`tanggal_akhir`,`limit_penggunaan`,`penggunaan_maksimal`,`created_at`,`updated_at`) values 
(5,'NOVEMBERCERIA',100000,'2021-11-30 00:00:00','2021-12-31 00:00:00',36,50,'2021-11-30 19:05:52','2021-12-08 22:55:45'),
(6,'DECEMBER50',50000,'2021-12-01 00:00:00','2021-12-31 00:00:00',5,20,'2021-12-01 20:21:38','2021-12-08 22:55:42'),
(7,'HOLIDAY150',150000,'2021-12-01 00:00:00','2021-12-31 00:00:00',50,60,'2021-12-01 20:21:55','2021-12-06 18:48:00'),
(8,'SPECIALSEASON',200000,'2021-12-01 00:00:00','2021-12-31 00:00:00',85,100,'2021-12-01 20:22:12','2021-12-06 18:48:18'),
(9,'LIBURANHAPPY',500000,'2021-12-01 00:00:00','2022-01-29 00:00:00',32,50,'2021-12-01 20:23:00','2021-12-06 18:48:04'),
(10,'MEGAVOUCHER',1000000,'2021-12-04 00:00:00','2022-01-31 00:00:00',13,20,'2021-12-04 08:37:38','2021-12-08 22:55:38');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
