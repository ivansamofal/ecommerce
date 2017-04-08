-- phpMyAdmin SQL Dump
-- version 4.0.10.10
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 09 2017 г., 02:33
-- Версия сервера: 5.5.45
-- Версия PHP: 5.4.44

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `internet`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text` varchar(5000) COLLATE utf8_unicode_ci NOT NULL,
  `author` int(11) NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` date NOT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL,
  `likes` int(11) NOT NULL,
  `hits` int(11) NOT NULL,
  `intro_picture` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `main_picture` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `date` (`date`),
  UNIQUE KEY `alias` (`alias`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `title`, `text`, `author`, `alias`, `date`, `category`, `is_published`, `likes`, `hits`, `intro_picture`, `main_picture`) VALUES
(1, 'Это интересный текст', 'Это интересный текст Это интересный текст Это интересный текст Это интересный текст Это интересный текст Это интересный текст Это интересный текст Это интересный текст Это интересный текст Это интересный текст Это интересный текст Это интересный текст Это интересный текст Это интересный текст Это интересный текст Это интересный текст Это интересный текст Это интересный текст Это интересный текст Это интересный текст ', 5, 'this_is_text', '2017-04-04', '5', 1, 0, 0, '670-400.png', '670-400.png'),
(2, 'Это интересный текст', 'Это интересный текст Это интересный текст Это интересный текст Это интересный текст Это интересный текст Это интересный текст Это интересный текст Это интересный текст Это интересный текст Это интересный текст Это интересный текст Это интересный текст Это интересный текст Это интересный текст Это интересный текст ', 4, 'yo_common', '2017-04-12', '4', 1, 0, 0, '670-400.png', '670-400.png'),
(3, 'Еще один текст', 'Еще один текст Еще один текст Еще один текст Еще один текст Еще один текст Еще один текст Еще один текст Еще один текст Еще один текст Еще один текст Еще один текст Еще один текст ', 2, 'another_text', '2017-04-18', '2', 1, 0, 0, '670-400.png', '670-400.png'),
(4, 'Еще один текст', 'Еще один текст Еще один текст Еще один текст Еще один текст Еще один текст Еще один текст Еще один текст Еще один текст Еще один текст Еще один текст Еще один текст Еще один текст ', 2, 'anothre_text2', '2017-04-19', '3', 1, 0, 0, '670-400.png', '670-400.png');

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1491686284),
('m130524_201442_init', 1491686290),
('m170408_211627_create_table_articles', 1491686290);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
