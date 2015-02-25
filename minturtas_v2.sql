-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2015 at 02:50 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `symfony`
--

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE IF NOT EXISTS `location` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=6 ;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `name`) VALUES
(1, 'Šiauliai'),
(2, 'Kelmė'),
(3, 'Kuršėnai'),
(4, 'Pakruojis'),
(5, 'Joniškis');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `caption` text COLLATE utf8_bin NOT NULL,
  `image` text COLLATE utf8_bin NOT NULL,
  `parent_id` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=7 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `caption`, `image`, `parent_id`, `active`) VALUES
(1, 'Pradžia', '', 0, 0),
(2, 'Skelbimai', '', 0, 0),
(3, 'Butai', '', 2, 1),
(4, 'Namai', '', 0, 1),
(5, 'Mediniai', '', 4, 1),
(6, 'Sklypai', '', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE IF NOT EXISTS `property` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `link` text COLLATE utf8_bin NOT NULL,
  `name` text COLLATE utf8_bin NOT NULL,
  `type_id` int(11) NOT NULL,
  `location_id` int(11) NOT NULL,
  `sale` tinyint(1) NOT NULL,
  `rent` tinyint(1) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `area` decimal(10,0) NOT NULL,
  `bedrooms` int(11) NOT NULL,
  `floor` int(11) NOT NULL,
  `short_description` text COLLATE utf8_bin NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL,
  `main_img` text COLLATE utf8_bin NOT NULL,
  `images` text COLLATE utf8_bin NOT NULL,
  `latitude` text COLLATE utf8_bin NOT NULL,
  `longitude` text COLLATE utf8_bin NOT NULL,
  `modify_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `create_date` datetime NOT NULL,
  `viewed` int(11) NOT NULL,
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `reduced_price` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `viewed` (`viewed`),
  KEY `modify_date` (`modify_date`),
  FULLTEXT KEY `link` (`link`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=13 ;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`id`, `link`, `name`, `type_id`, `location_id`, `sale`, `rent`, `price`, `area`, `bedrooms`, `floor`, `short_description`, `description`, `main_img`, `images`, `latitude`, `longitude`, `modify_date`, `create_date`, `viewed`, `featured`, `reduced_price`) VALUES
(1, 'vieno-kambario-butas-1', 'Vieno kambario butas', 1, 1, 1, 0, '45000', '43', 2, 3, '1.	Uždaras kiemas; nuo ivažiavimo gatves skiria šiltnamis ir malkin?, o nuo kaimyno skiria uosio aukšta tvora su aštriais tekintais ...', '1.	Uždaras kiemas; nuo ?važiavimo gatv?s skiria šiltnamis ir malkin?, o nuo kaimyno skiria uosio aukšta tvora su aštriais tekintais metaliniais strypais ant viršaus;\r\n2.	Kiemo statiniai: pav?sin? su židiniu - žaliuz?s ant dur? ir lang? ( stalas su suoliukais); malkin?; šiltnamis su stiklo paketais,baseinas ', 'ed57a37.jpg', 'c8953.jpg;ed57a37.jpg;21ae05a5.jpg', '55.908731', '23.258294', '2014-12-22 13:00:48', '2014-08-27 15:00:00', 5, 0, 0),
(2, 'dvieju-kambariu-butas-2', 'dvieju kambariu butas', 1, 1, 1, 0, '99000', '64', 2, 1, '9.	Visame sklype yra įrengta lietaus kanalizacija, todėl polaidžio vandenys niekuomet nesemia sklypo...', '9.	Visame sklype yra įrengta lietaus kanalizacija, todėl polaidžio vandenys niekuomet nesemia sklypo;\r\n10.	Kieme yra daug dekoratyvinių medžių ir krūmų, skoningai suformuoti gėlynai, praktikuojama daug vazoninių gėlių;\r\n11.	Profesionaliai prižiūrėtas (perskiepytos obelys) ir išgenėtas sodas bei dekoratyviniai augalai;\r\n12.	Grotuoti langai, videokameros ir signalizacija apsaugo namą nuo nepageidaujamų svečių; valdos aplinką galime stebėti interneto dėka, esant reikalui, peržiūrėti videokamerų įrašus;\r\n13.	Švenčių dienomis ir kitomis progomis ar vakarais galima įsijungti namo fasado apšvietimą iš visų pusių kokybiškais šviestuvais su ekonominėmis lempomis;\r\n14.	Šalia ,"Vijolės upelis" su sutvarkyta aplinka, apželdinta pakrante, yra automobilių stovėjimo akmenimis grįsta aikštelė;', '720b60.jpg', 'a201_093849.jpg', '55.923232', '23.322265', '2014-08-27 12:26:37', '2014-08-27 15:26:00', 2, 0, 0),
(3, '643-37th-ave-3', '643 37th Ave', 1, 2, 0, 1, '249000', '150', 4, 2, 'Quisque non dictum eros. Praesent porta vehicula arcu eu ornare. Donec id egestas arcu. Suspendisse auctor condimentum ligula ultricies cursus. Vestibulum vel orci vel lacus rhoncus sagittis sed vitae ...', 'Quisque non dictum eros. Praesent porta vehicula arcu eu ornare. Donec id egestas arcu. Suspendisse auctor condimentum ligula ultricies cursus. Vestibulum vel orci vel lacus rhoncus sagittis sed vitae Quisque non dictum eros. Praesent porta vehicula arcu eu ornare. Donec id egestas arcu. Suspendisse auctor condimentum ligula ultricies cursus. Vestibulum vel orci vel lacus rhoncus sagittis sed vitae Quisque non dictum eros. Praesent porta vehicula arcu eu ornare. Donec id egestas arcu. Suspendisse auctor condimentum ligula ultricies cursus. Vestibulum vel orci vel lacus rhoncus sagittis sed vitae Quisque non dictum eros. Praesent porta vehicula arcu eu ornare. Donec id egestas arcu. Suspendisse auctor condimentum ligula ultricies cursus. Vestibulum vel orci vel lacus rhoncus sagittis sed vitae ', '19.jpg', '', '55.930154', '23.310808', '2014-09-01 11:10:01', '0000-00-00 00:00:00', 2, 1, 0),
(4, '677-cottage-terrace-4', '677 Cottage Terrace', 2, 2, 1, 0, '59000', '650', 5, 8, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur et risus vitae lectus dapibus sagittis sit amet eu eros. Pellentesque accumsan mi nec tristique vehicula. Suspendisse potenti. Cras f', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur et risus vitae lectus dapibus sagittis sit amet eu eros. Pellentesque accumsan mi nec tristique vehicula. Suspendisse potenti. Cras f Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur et risus vitae lectus dapibus sagittis sit amet eu eros. Pellentesque accumsan mi nec tristique vehicula. Suspendisse potenti. Cras f Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur et risus vitae lectus dapibus sagittis sit amet eu eros. Pellentesque accumsan mi nec tristique vehicula. Suspendisse potenti. Cras f Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur et risus vitae lectus dapibus sagittis sit amet eu eros. Pellentesque accumsan mi nec tristique vehicula. Suspendisse potenti. Cras f', '17.jpg', '', '55.932486', '23.294908', '2014-09-01 11:11:29', '2014-09-10 07:19:46', 5, 0, 0),
(5, 'dvieju-kambariu-butas-2', 'dvieju kambariu butas', 1, 1, 1, 0, '99000', '64', 2, 1, '9.	Visame sklype yra įrengta lietaus kanalizacija, todėl polaidžio vandenys niekuomet nesemia sklypo...', '9.	Visame sklype yra įrengta lietaus kanalizacija, todėl polaidžio vandenys niekuomet nesemia sklypo;\r\n10.	Kieme yra daug dekoratyvinių medžių ir krūmų, skoningai suformuoti gėlynai, praktikuojama daug vazoninių gėlių;\r\n11.	Profesionaliai prižiūrėtas (perskiepytos obelys) ir išgenėtas sodas bei dekoratyviniai augalai;\r\n12.	Grotuoti langai, videokameros ir signalizacija apsaugo namą nuo nepageidaujamų svečių; valdos aplinką galime stebėti interneto dėka, esant reikalui, peržiūrėti videokamerų įrašus;\r\n13.	Švenčių dienomis ir kitomis progomis ar vakarais galima įsijungti namo fasado apšvietimą iš visų pusių kokybiškais šviestuvais su ekonominėmis lempomis;\r\n14.	Šalia ,"Vijolės upelis" su sutvarkyta aplinka, apželdinta pakrante, yra automobilių stovėjimo akmenimis grįsta aikštelė;', '720b60.jpg', 'a201_093849.jpg', '55.953232', '23.322265', '2014-08-27 09:26:37', '2014-08-27 15:26:00', 0, 0, 0),
(6, '643-37th-ave-3', '643 37th Ave', 1, 2, 0, 1, '249000', '150', 4, 2, 'Quisque non dictum eros. Praesent porta vehicula arcu eu ornare. Donec id egestas arcu. Suspendisse auctor condimentum ligula ultricies cursus. Vestibulum vel orci vel lacus rhoncus sagittis sed vitae ...', 'Quisque non dictum eros. Praesent porta vehicula arcu eu ornare. Donec id egestas arcu. Suspendisse auctor condimentum ligula ultricies cursus. Vestibulum vel orci vel lacus rhoncus sagittis sed vitae Quisque non dictum eros. Praesent porta vehicula arcu eu ornare. Donec id egestas arcu. Suspendisse auctor condimentum ligula ultricies cursus. Vestibulum vel orci vel lacus rhoncus sagittis sed vitae Quisque non dictum eros. Praesent porta vehicula arcu eu ornare. Donec id egestas arcu. Suspendisse auctor condimentum ligula ultricies cursus. Vestibulum vel orci vel lacus rhoncus sagittis sed vitae Quisque non dictum eros. Praesent porta vehicula arcu eu ornare. Donec id egestas arcu. Suspendisse auctor condimentum ligula ultricies cursus. Vestibulum vel orci vel lacus rhoncus sagittis sed vitae ', '19.jpg', '', '55.930154', '23.280808', '2014-09-01 08:10:01', '0000-00-00 00:00:00', 0, 1, 1),
(7, '677-cottage-terrace-4', '677 Cottage Terrace', 2, 2, 1, 0, '59000', '650', 5, 8, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur et risus vitae lectus dapibus sagittis sit amet eu eros. Pellentesque accumsan mi nec tristique vehicula. Suspendisse potenti. Cras f', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur et risus vitae lectus dapibus sagittis sit amet eu eros. Pellentesque accumsan mi nec tristique vehicula. Suspendisse potenti. Cras f Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur et risus vitae lectus dapibus sagittis sit amet eu eros. Pellentesque accumsan mi nec tristique vehicula. Suspendisse potenti. Cras f Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur et risus vitae lectus dapibus sagittis sit amet eu eros. Pellentesque accumsan mi nec tristique vehicula. Suspendisse potenti. Cras f Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur et risus vitae lectus dapibus sagittis sit amet eu eros. Pellentesque accumsan mi nec tristique vehicula. Suspendisse potenti. Cras f', '17.jpg', '', '55.932486', '23.294908', '2014-09-01 08:11:29', '2014-09-10 07:19:46', 0, 0, 0),
(8, 'vieno-kambario-butas-1', 'Vieno kambario butas', 1, 1, 1, 0, '45000', '43', 2, 3, '1.	Uždaras kiemas; nuo ?važiavimo gatv?s skiria šiltnamis ir malkin?, o nuo kaimyno skiria uosio aukšta tvora su aštriais tekintais ...', '1.	Uždaras kiemas; nuo ?važiavimo gatv?s skiria šiltnamis ir malkin?, o nuo kaimyno skiria uosio aukšta tvora su aštriais tekintais metaliniais strypais ant viršaus;\r\n2.	Kiemo statiniai: pav?sin? su židiniu - žaliuz?s ant dur? ir lang? ( stalas su suoliukais); malkin?; šiltnamis su stiklo paketais,baseinas ', 'c8953.jpg', 'ed57a37.jpg;21ae05a5.jpg', '55.908731', '23.298294', '2014-08-27 09:00:48', '2014-08-27 15:00:00', 0, 0, 0),
(9, 'vieno-kambario-butas-1', 'Vieno kambario butas', 1, 1, 1, 0, '45000', '43', 2, 3, '1.	Uždaras kiemas; nuo ?važiavimo gatv?s skiria šiltnamis ir malkin?, o nuo kaimyno skiria uosio aukšta tvora su aštriais tekintais ...', '1.	Uždaras kiemas; nuo ?važiavimo gatv?s skiria šiltnamis ir malkin?, o nuo kaimyno skiria uosio aukšta tvora su aštriais tekintais metaliniais strypais ant viršaus;\r\n2.	Kiemo statiniai: pav?sin? su židiniu - žaliuz?s ant dur? ir lang? ( stalas su suoliukais); malkin?; šiltnamis su stiklo paketais,baseinas ', '21ae05a5.jpg', 'c8953.jpg;ed57a37.jpg', '55.898731', '23.228294', '2014-08-27 09:00:48', '2014-08-27 15:00:00', 0, 0, 0),
(10, 'dvieju-kambariu-butas-2', 'dvieju kambariu butas', 1, 1, 1, 0, '99000', '64', 2, 1, '9.	Visame sklype yra įrengta lietaus kanalizacija, todėl polaidžio vandenys niekuomet nesemia sklypo...', '9.	Visame sklype yra įrengta lietaus kanalizacija, todėl polaidžio vandenys niekuomet nesemia sklypo;\r\n10.	Kieme yra daug dekoratyvinių medžių ir krūmų, skoningai suformuoti gėlynai, praktikuojama daug vazoninių gėlių;\r\n11.	Profesionaliai prižiūrėtas (perskiepytos obelys) ir išgenėtas sodas bei dekoratyviniai augalai;\r\n12.	Grotuoti langai, videokameros ir signalizacija apsaugo namą nuo nepageidaujamų svečių; valdos aplinką galime stebėti interneto dėka, esant reikalui, peržiūrėti videokamerų įrašus;\r\n13.	Švenčių dienomis ir kitomis progomis ar vakarais galima įsijungti namo fasado apšvietimą iš visų pusių kokybiškais šviestuvais su ekonominėmis lempomis;\r\n14.	Šalia ,"Vijolės upelis" su sutvarkyta aplinka, apželdinta pakrante, yra automobilių stovėjimo akmenimis grįsta aikštelė;', '720b60.jpg', 'a201_093849.jpg', '55.853232', '23.307265', '2014-08-27 09:26:37', '2014-08-27 15:26:00', 0, 1, 0),
(11, '643-37th-ave-3', '643 37th Ave', 1, 2, 0, 1, '249000', '150', 4, 2, 'Quisque non dictum eros. Praesent porta vehicula arcu eu ornare. Donec id egestas arcu. Suspendisse auctor condimentum ligula ultricies cursus. Vestibulum vel orci vel lacus rhoncus sagittis sed vitae ...', 'Quisque non dictum eros. Praesent porta vehicula arcu eu ornare. Donec id egestas arcu. Suspendisse auctor condimentum ligula ultricies cursus. Vestibulum vel orci vel lacus rhoncus sagittis sed vitae Quisque non dictum eros. Praesent porta vehicula arcu eu ornare. Donec id egestas arcu. Suspendisse auctor condimentum ligula ultricies cursus. Vestibulum vel orci vel lacus rhoncus sagittis sed vitae Quisque non dictum eros. Praesent porta vehicula arcu eu ornare. Donec id egestas arcu. Suspendisse auctor condimentum ligula ultricies cursus. Vestibulum vel orci vel lacus rhoncus sagittis sed vitae Quisque non dictum eros. Praesent porta vehicula arcu eu ornare. Donec id egestas arcu. Suspendisse auctor condimentum ligula ultricies cursus. Vestibulum vel orci vel lacus rhoncus sagittis sed vitae ', '19.jpg', '', '55.900150', '23.291008', '2014-09-01 08:10:01', '0000-00-00 00:00:00', 0, 0, 0),
(12, '677-cottage-terrace-4', '677 Cottage Terrace', 2, 2, 1, 0, '59000', '650', 5, 8, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur et risus vitae lectus dapibus sagittis sit amet eu eros. Pellentesque accumsan mi nec tristique vehicula. Suspendisse potenti. Cras f', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur et risus vitae lectus dapibus sagittis sit amet eu eros. Pellentesque accumsan mi nec tristique vehicula. Suspendisse potenti. Cras f Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur et risus vitae lectus dapibus sagittis sit amet eu eros. Pellentesque accumsan mi nec tristique vehicula. Suspendisse potenti. Cras f Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur et risus vitae lectus dapibus sagittis sit amet eu eros. Pellentesque accumsan mi nec tristique vehicula. Suspendisse potenti. Cras f Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur et risus vitae lectus dapibus sagittis sit amet eu eros. Pellentesque accumsan mi nec tristique vehicula. Suspendisse potenti. Cras f', '17.jpg', '', '55.930486', '23.254908', '2014-09-01 08:11:29', '2014-09-10 07:19:46', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE IF NOT EXISTS `type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8_bin NOT NULL,
  `marker` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=4 ;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id`, `name`, `marker`) VALUES
(1, 'Butas', 'condo'),
(2, 'Namas', 'family-house'),
(3, 'Sodas', 'single-home');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
