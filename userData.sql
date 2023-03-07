-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 05 2023 г., 18:27
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `userData`
--

-- --------------------------------------------------------

--
-- Структура таблицы `userData`
--

CREATE TABLE `userData` (
  `id` int NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `name` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `password` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `userData`
--

INSERT INTO `userData` (`id`, `created_at`, `updated_at`, `name`, `email`, `password`) VALUES
(1, '2023-02-04 11:54:15', '2023-02-05 15:24:49', 'Jon', 'Yakuza@jmail.com', 'weARYakuza450678'),
(2, '2023-02-04 11:54:56', '2023-02-04 11:54:56', 'Misha', 'ZubenkoMihail@mail.ru', 'm0f1ozn1k'),
(3, '2023-02-04 11:55:31', '2023-02-04 12:17:57', 'Manky', 'fanyManky@gmail.com', 'lesBoresZalez2211166'),
(4, '2023-02-04 11:56:42', '2023-02-04 11:56:42', 'Capitan', 'ZhmyshenkoVA@ymail.ru', 'boltorez09988');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `userData`
--
ALTER TABLE `userData`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `userData`
--
ALTER TABLE `userData`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
