-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3380
-- Время создания: Июл 09 2021 г., 00:38
-- Версия сервера: 8.0.19
-- Версия PHP: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `homework`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cart`
--

CREATE TABLE `cart` (
  `id` int NOT NULL,
  `goods_id` int NOT NULL,
  `session_id` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `cart`
--

INSERT INTO `cart` (`id`, `goods_id`, `session_id`) VALUES
(1, 2, '03ts7lq4f9idpqivmgbs2esre6'),
(2, 2, '03ts7lq4f9idpqivmgbs2esre6'),
(7, 4, 'j8tdlh118g6e3qcbpqj46klo14'),
(10, 2, 'j8tdlh118g6e3qcbpqj46klo14'),
(20, 3, 'j8tdlh118g6e3qcbpqj46klo14'),
(21, 1, 'j8tdlh118g6e3qcbpqj46klo14'),
(22, 1, 'd36hnrmkda59rf2vfuqgdl8p53'),
(23, 2, 'd36hnrmkda59rf2vfuqgdl8p53'),
(24, 3, 'd36hnrmkda59rf2vfuqgdl8p53'),
(25, 4, 'd36hnrmkda59rf2vfuqgdl8p53'),
(26, 5, 'd36hnrmkda59rf2vfuqgdl8p53'),
(27, 1, '7dd5l65356lsjr9r72mtc5mpr2'),
(28, 2, '7dd5l65356lsjr9r72mtc5mpr2'),
(30, 1, '111'),
(31, 1, '111'),
(43, 10, 'a6hqc6unl7vjbnpkgagsep87jksdi5dd'),
(44, 1, 'a6hqc6unl7vjbnpkgagsep87jksdi5dd'),
(46, 3, 'a6hqc6unl7vjbnpkgagsep87jksdi5dd'),
(63, 2, '84bfccmn3mc92goq4uehuolqa84vtsbq'),
(64, 2, '84bfccmn3mc92goq4uehuolqa84vtsbq'),
(70, 1, 'kqfck42te7n21b9op3r58srh5qvqea6p'),
(71, 1, 'kqfck42te7n21b9op3r58srh5qvqea6p'),
(72, 2, 'kqfck42te7n21b9op3r58srh5qvqea6p'),
(73, 1, 'kqfck42te7n21b9op3r58srh5qvqea6p'),
(74, 1, 'kqfck42te7n21b9op3r58srh5qvqea6p'),
(75, 1, 'kgn0pesl46o9jr41v10j6dqd0a6ih0vc'),
(76, 1, '72nun08880ckcbqhpr93gsn3aocvifgq'),
(77, 1, '6h8e8j5u3742kgvfu8eqmnqtd9ppu2gu'),
(78, 1, 'vmt5n3tpaiufip52gp6934f6h07k5pl5'),
(79, 1, 'cl08522k8q2o641tfbrfc86q23j71btj');

-- --------------------------------------------------------

--
-- Структура таблицы `catalog`
--

CREATE TABLE `catalog` (
  `id` int NOT NULL,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `catalog`
--

INSERT INTO `catalog` (`id`, `name`, `price`, `description`, `image`) VALUES
(1, 'Консервы', 100, 'Ооочень вкусные штуки для ваших питомцев!', 'cons.jpg'),
(2, 'Лакомства', 32, 'Иногда можно порадовать', 'yam.jpg'),
(3, 'Наполнитель', 150, 'Наполнитель для кошачьих туалетов', 'nap.jpg'),
(4, 'Когтеточки', 30, 'Чтобы не портить мебель', 'cogt.jpg'),
(5, 'Игрушка', 130, 'Повеселит всех в доме!', 'play.jpg'),
(10, 'Сухой корм', 300, 'Содержит все необходимое для вашего питомца', NULL),
(11, 'Сухой корм', 300, 'Содержит все необходимое для вашего питомца', NULL),
(12, 'Сухой корм', 300, 'Содержит все необходимое для вашего питомца', NULL),
(13, 'Сухой корм', 300, 'Содержит все необходимое для вашего питомца', NULL),
(14, 'Сухой корм', 300, 'Содержит все необходимое для вашего питомца', NULL),
(15, 'Сухой корм', 300, 'Содержит все необходимое для вашего питомца', NULL),
(16, 'Сухой корм', 300, 'Содержит все необходимое для вашего питомца', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `feedback`
--

CREATE TABLE `feedback` (
  `id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `feedback` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `feedback`) VALUES
(3, 'Вава', 'привет!'),
(4, 'Леша', 'пукцеце');

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

CREATE TABLE `images` (
  `id` int NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `views` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `images`
--

INSERT INTO `images` (`id`, `name`, `views`) VALUES
(1, '01.jpg', 22),
(2, '02.jpg', 1),
(3, '03.jpg', 1),
(4, '04.jpg', 0),
(5, '05.jpg', 0),
(6, '06.jpg', 0),
(7, '07.jpg', 0),
(8, '08.jpg', 0),
(9, '09.jpg', 0),
(10, '10.jpg', 0),
(11, '11.jpg', 2),
(12, '12.jpg', 1),
(13, '13.jpg', 2),
(14, '14.jpg', 7),
(15, '15.jpg', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `session_id` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `name`, `phone`, `session_id`, `status`) VALUES
(2, 'Юрий', '8934563485', 'j8tdlh118g6e3qcbpqj46klo14', 'deleted'),
(3, 'Вася', '82520958209', 'd36hnrmkda59rf2vfuqgdl8p53', 'accepted'),
(7, 'Юрий', '+79065555555', 'kqfck42te7n21b9op3r58srh5qvqea6p', 'accepted'),
(8, 'Юрий', '+79065555555', '72nun08880ckcbqhpr93gsn3aocvifgq', 'accepted');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `login` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `pass`) VALUES
(1, 'admin', '$2y$10$v.EPj/BWZIyPoRV2X2WnjucF.O7v.f0i5jbCVzBrTfq22Je4kTfHK'),
(2, 'user', '$2y$10$iEqC2GR6nHebGi8BhzPYt.f7YlIEBDmfsvz.0xjxLvT0fxq/ACPXK');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT для таблицы `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `images`
--
ALTER TABLE `images`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
