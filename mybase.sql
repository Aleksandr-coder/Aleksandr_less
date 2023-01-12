-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 12 2023 г., 19:20
-- Версия сервера: 5.6.51-log
-- Версия PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `mybase`
--

-- --------------------------------------------------------

--
-- Структура таблицы `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `name_company` char(20) NOT NULL,
  `adress` char(200) NOT NULL,
  `country` char(60) NOT NULL,
  `about` text NOT NULL,
  `phone` int(11) NOT NULL,
  `create_tr` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_tr` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `about`
--

INSERT INTO `about` (`id`, `name_company`, `adress`, `country`, `about`, `phone`, `create_tr`, `update_tr`) VALUES
(1, 'Asus', 'Бэйтоу, Тайбэй, Тайвань', 'Тайвань', 'Asus расположенная на Тайване транснациональная компания, специализирующаяся на компьютерной электронике', 923756789, '2022-12-27 12:57:47', '2022-12-27 12:57:47');

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `admin_login` char(40) NOT NULL,
  `password` text NOT NULL,
  `email` char(200) NOT NULL,
  `phone` int(12) NOT NULL,
  `first_name` char(60) DEFAULT NULL,
  `last_name` char(60) DEFAULT NULL,
  `create_at` timestamp NOT NULL,
  `update_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `admin`
--

INSERT INTO `admin` (`id`, `admin_login`, `password`, `email`, `phone`, `first_name`, `last_name`, `create_at`, `update_at`) VALUES
(1, 'Web_Admin', '12345678Her', 'admin@gmail.com', 1234567890, 'Mike', 'Noob', '2022-12-27 14:51:47', '2022-12-27 14:51:47');

-- --------------------------------------------------------

--
-- Структура таблицы `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `name_foto` char(40) NOT NULL,
  `name_country` char(60) NOT NULL,
  `current_tr` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_tr` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `gallery`
--

INSERT INTO `gallery` (`id`, `name_foto`, `name_country`, `current_tr`, `update_tr`) VALUES
(1, 'Alligator', 'Africa', '2022-12-27 14:25:09', '2022-12-27 14:25:09'),
(3, 'Koala', 'Australia', '2022-12-27 14:27:07', '2022-12-27 14:27:07'),
(4, 'Tiger', 'Africa', '2022-12-27 14:28:35', '2022-12-27 14:28:35');

-- --------------------------------------------------------

--
-- Структура таблицы `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `name_User` varchar(60) NOT NULL,
  `login` char(60) NOT NULL,
  `email` char(200) NOT NULL,
  `password` text NOT NULL,
  `current_tr` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_tr` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `home`
--

INSERT INTO `home` (`id`, `name_User`, `login`, `email`, `password`, `current_tr`, `update_tr`) VALUES
(1, 'Aleksandr', 'Alex_user', 'Alex@gmail.com', '12345678', '2022-12-27 14:18:47', '2022-12-27 14:18:47'),
(2, 'Vlad', 'Vlad_user', 'Vlad@gmail.com', 'qwerty123', '2023-01-11 17:44:11', '2023-01-11 17:44:11'),
(3, 'Viktor', 'Viktor_user', 'Viktor@gmail.com', 'qazwsxe', '2023-01-11 17:44:55', '2023-01-11 17:44:55'),
(4, 'Admin', 'Admin_root', 'Admin@gmail.com', 'ad6523sd', '2023-01-11 17:46:14', '2023-01-11 17:46:14'),
(9, 'Oleg', 'Oleg_user', 'Oleg@gmail.com', '12345678', '2022-12-27 14:18:47', '2022-12-27 14:18:47'),
(10, 'Mike', 'Mike_user', 'Mike@gmail.com', 'qwerty123', '2023-01-11 17:44:11', '2023-01-11 17:44:11'),
(11, 'John', 'John_user', 'John@gmail.com', 'qazwsxe', '2023-01-11 17:44:55', '2023-01-11 17:44:55'),
(12, 'Igor', 'Igor', 'Igor@gmail.com', 'ad6523sd', '2023-01-11 17:46:14', '2023-01-11 17:46:14');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` char(200) NOT NULL,
  `login` char(60) NOT NULL,
  `password` text NOT NULL,
  `phone` int(11) NOT NULL,
  `first_name` char(60) DEFAULT NULL,
  `last_name` char(60) DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `email`, `login`, `password`, `phone`, `first_name`, `last_name`, `create_at`, `update_at`) VALUES
(1, 'test@test.com', 'test', '123', 123456789, 'First', 'Last', '2022-12-26 18:47:55', '2022-12-26 18:47:55'),
(2, 'test2@gmail.com', 'test2', '', 1234567890, '', '', '2022-12-26 18:52:38', '2022-12-26 18:52:38');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `about`
--
ALTER TABLE `about`
  ADD UNIQUE KEY `id` (`id`) USING BTREE,
  ADD UNIQUE KEY `id_5` (`id`,`name_company`);

--
-- Индексы таблицы `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_login` (`admin_login`);

--
-- Индексы таблицы `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name_foto` (`name_foto`);

--
-- Индексы таблицы `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `login` (`login`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `login` (`login`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
