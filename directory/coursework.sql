-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Мар 18 2024 г., 19:18
-- Версия сервера: 10.4.25-MariaDB
-- Версия PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `coursework`
--

-- --------------------------------------------------------

--
-- Структура таблицы `tourist`
--

CREATE TABLE `tourist` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `surname` varchar(50) DEFAULT NULL,
  `patronymic` varchar(50) DEFAULT NULL,
  `gender` int(1) DEFAULT NULL,
  `old` varchar(4) DEFAULT NULL,
  `passport_data` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `tourist`
--

INSERT INTO `tourist` (`id`, `name`, `surname`, `patronymic`, `gender`, `old`, `passport_data`) VALUES
(1, 'Тимофей', 'Николаев', 'Георгиевич', 1, '20', '7415 925881'),
(3, 'Есения', 'Фомина', 'Владиславовна', 0, '32', NULL),
(4, 'Александра', 'Савельева', 'Сергеевна', 0, '40', NULL),
(8, 'Георгий', 'Гольдин', 'Михалыч', 1, '20', NULL),
(10, 'Антон', 'Логунов', 'Борисович', 1, '20', '949844849'),
(11, '1', '1', '1', NULL, '1', '1'),
(12, '2', '2', '2', NULL, '2', '2'),
(13, 'Генадий', 'Горин', '5', NULL, '57', '4982455266'),
(14, '13', '123', '159', NULL, '777', '696'),
(15, 'Кирилл', 'Кириллов', 'Сергеевич', NULL, '31', '54654654'),
(18, '5', '5', '5', NULL, '5', '5'),
(19, 'Иван', 'Султанов', 'Геннадиевич', NULL, '32', '45 15 223775'),
(20, '1', '1', '1', 0, '1', '1');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `tourist`
--
ALTER TABLE `tourist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `tourist`
--
ALTER TABLE `tourist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
