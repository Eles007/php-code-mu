-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Янв 25 2026 г., 13:51
-- Версия сервера: 10.4.32-MariaDB
-- Версия PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `mydb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(32) NOT NULL,
  `name` varchar(32) NOT NULL,
  `password` varchar(128) NOT NULL,
  `role` varchar(10) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `name`, `password`, `role`, `status`) VALUES
(5, 'user', 'Иван', '$2y$10$OU3ZaXqe6q.r6.hbGbHj8Op7GDQvYLzCRTaTvjVva/kjcH/hENwCW', 'admin', 0),
(6, 'user2', 'Иван2', '$2y$10$nKncvASg8Q9pQACLaCepi.jhTqDHZvrstydUFBU8bF2h.jeJd5Jkq', 'moderator', 0),
(7, 'user3', 'Иван3', '$2y$10$52ASRd6BBhzLXA.7SciFXuGYc6m2ci4WypoMuwwUIAFyUwZuxrwwy', 'user', 0),
(8, 'user4', 'Иван4', '$2y$10$YpH0Z2ByKQtBYVn2bDWDaO4jZR1b9XBdojguo.UpRPO5Zu1y9qb3C', 'user', 0),
(9, 'user6', 'Иван6', '$2y$10$aVDX.QjNjGIHIoYlHFHsCe3smDV.pThLUUKUwjNXFzpkUJhJTbmfe', 'user', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
