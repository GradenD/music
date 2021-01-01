-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 01 2021 г., 17:42
-- Версия сервера: 5.6.37
-- Версия PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `dark-music`
--

-- --------------------------------------------------------

--
-- Структура таблицы `album`
--

CREATE TABLE `album` (
  `id` int(11) NOT NULL,
  `tytle` varchar(255) NOT NULL,
  `autor` int(11) NOT NULL,
  `listening` int(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `album`
--

INSERT INTO `album` (`id`, `tytle`, `autor`, `listening`, `img`, `date`) VALUES
(1, 'Great Depression', 1, 100, 'great.jpg', '2020-12-20'),
(2, '3D19', 2, 150, '3d.jpg', '2020-12-20'),
(3, 'ICE CREAM', 2, 377, 'ice.jpg', '2020-12-20'),
(4, 'FILES', 2, 666, 'files.jpg', '2020-12-20'),
(5, 'Use Me', 8, 1111, 'use.jpg', '2020-12-20'),
(6, 'White Noise', 8, 153, 'white.jpg', '2020-12-20'),
(7, 'All We Know Of Heaven, All We Need Of Hell', 8, 3234, 'all-we.jpg', '2020-12-20'),
(8, 'знаки зодиака Ч. 2', 9, 543, 'znak.jpg', '2020-12-20'),
(9, '53:55', 9, 33, '53_55.jpg', '2020-12-20'),
(10, 'Убегу', 9, 66, 'run.jpg', '2020-12-20'),
(11, 'Интернет-принц', 9, 373, 'internet.jpg', '2020-12-20'),
(12, 'New Empire, Vol. 2', 7, 377, 'new2.jpeg', '2020-12-20'),
(13, 'New Empire, Vol. 1', 7, 88, 'new1.jpg', '2020-12-20'),
(14, 'Five', 7, 87, 'five.jpg', '2020-12-20'),
(15, 'Day Of The Dead', 7, 333, 'day.jpg', '2020-12-20'),
(16, 'MIRRORS', 4, 1356, 'mirror.jpg', '2020-12-20'),
(17, 'One More City', 10, 555, 'lcp.jpg', '2020-12-20'),
(18, 'Unleashed', 11, 1577, 'unleashed.jpg', '2020-12-20');

-- --------------------------------------------------------

--
-- Структура таблицы `author`
--

CREATE TABLE `author` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `author`
--

INSERT INTO `author` (`id`, `name`) VALUES
(1, 'Markul'),
(2, 'OBLADAET'),
(3, 'Beau Young Prince '),
(4, 'MARKUSPHOENIX '),
(5, 'Mnogoznaal'),
(6, 'Pharaoh'),
(7, 'Hollywood Undead'),
(8, 'PVRIS'),
(9, 'Егор Натс'),
(10, 'ЛСП'),
(11, 'skillet');

-- --------------------------------------------------------

--
-- Структура таблицы `instagram`
--

CREATE TABLE `instagram` (
  `id` int(11) NOT NULL,
  `tytle` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `instagram`
--

INSERT INTO `instagram` (`id`, `tytle`, `img`, `date`) VALUES
(1, 'monogozanaal', 'mnogo.jpg', '2020-12-18 09:22:27'),
(2, 'pharaoh', 'pharaoh.jpg', '2020-12-18 09:22:52'),
(3, 'pvris', 'pvris.jpg', '2020-12-18 09:23:29'),
(4, 'skillet', 'skillet.jpg', '2020-12-18 09:26:10'),
(5, 'obla', 'obla.jpg', '2020-12-18 09:28:28'),
(6, 'markul', 'markul.jpg', '2020-12-18 09:29:05');

-- --------------------------------------------------------

--
-- Структура таблицы `music_autor`
--

CREATE TABLE `music_autor` (
  `id` int(11) NOT NULL,
  `tytle` varchar(255) NOT NULL,
  `autor` int(11) NOT NULL,
  `listening` int(255) NOT NULL,
  `mp3` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `music_autor`
--

INSERT INTO `music_autor` (`id`, `tytle`, `autor`, `listening`, `mp3`, `img`) VALUES
(1, 'Скалы', 1, 456, 'Markul - Скалы.mp3', 'masrk-skall.jpg'),
(2, '3D19', 2, 987, 'Obladaet - 3D19.mp3', 'obladaet.jpg'),
(3, 'B.I.D', 1, 150, 'Markul - B.I.D.mp3', 'markul.jpg'),
(4, 'Mirrors', 4, 1111, 'MARKUSPHOENIX - Mirrors.mp3', 'markus.jpg'),
(5, 'Речная Часть', 5, 1577, 'Mnogoznaal - Речная Часть.mp3', 'mnogo.jpg'),
(6, 'Let Go', 3, 988, 'Beau Young Prince - Let Go.mp3', 'let-go.jpg'),
(7, 'На Луне', 6, 333, 'Pharaoh - На Луне.mp3', 'pharaoh_lune.jpg'),
(8, 'Coming Home', 7, 266, 'Hollywood Undead - Coming Home.mp3', 'hollywood.jpg'),
(9, 'Wish You Well', 8, 999, 'PVRIS - Wish You Well.mp3', 'pvris.jpg'),
(10, 'You and I', 8, 1234, 'Pvris - You and I.mp3', 'pvris-you.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `music_profile`
--

CREATE TABLE `music_profile` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL DEFAULT 'audio-defoult.jpg',
  `tytle` varchar(255) NOT NULL,
  `autor` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `listening` int(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `music_profile`
--

INSERT INTO `music_profile` (`id`, `user`, `url`, `img`, `tytle`, `autor`, `date`, `listening`) VALUES
(1, 1, 'Markul - Скалы.mp3', 'masrk-skall.jpg', 'Скалы', 'Markul', '2020-11-30 19:00:00', 5),
(2, 1, 'Obladaet - 3D19.mp3', 'obladaet.jpg', '3D19', 'Obladaet', '2020-12-03 19:00:00', 9),
(3, 1, 'MARKUSPHOENIX - Mirrors.mp3', 'markus.jpg', 'Mirrors', 'MARKUSPHOENIX', '2020-12-09 19:00:00', 7),
(4, 1, 'Pvris - You and I.mp3', 'pvris-you.jpg', 'You and I', 'PVRIS', '2020-12-15 19:00:00', 6),
(5, 1, 'Mnogoznaal - Речная Часть.mp3', 'mnogo.jpg', 'Речная Часть', 'Mnogoznaal', '2020-12-17 19:00:00', 3),
(6, 1, 'Katya Tu - Настоящую.mp3', 'katya-tu-bez-filtrov.jpg', 'Настоящую', 'Katya Tu', '2020-12-31 19:00:00', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `news_glav`
--

CREATE TABLE `news_glav` (
  `id` int(11) NOT NULL,
  `tytle` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news_glav`
--

INSERT INTO `news_glav` (`id`, `tytle`, `text`, `img`) VALUES
(1, '', 'cantus find the music your Choice & discover our new tracks. Connect directly with your favorite band member.', 'slide-1.jpg'),
(2, '', 'cantus find the music your Choice & discover our new tracks. Connect directly with your favorite band member.', 'slide-2.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `role`
--

CREATE TABLE `role` (
  `id` int(10) NOT NULL,
  `role` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `role`
--

INSERT INTO `role` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL DEFAULT 'Enter your Last Name',
  `birthday` date NOT NULL,
  `phone` varchar(20) NOT NULL DEFAULT 'Enter your Phone',
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL DEFAULT 'Enter your Country',
  `skype` varchar(255) NOT NULL DEFAULT 'Enter your Skype',
  `instagram` varchar(255) NOT NULL DEFAULT 'Enter your Instagram',
  `role` int(10) NOT NULL DEFAULT '2',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `name`, `lastname`, `birthday`, `phone`, `email`, `password`, `country`, `skype`, `instagram`, `role`, `date`) VALUES
(1, 'Иван', 'Бахарев', '1998-04-05', '89507260264', 'bacharevia@mail.ru', '81dc9bdb52d04dc20036dbd8313ed055', 'Russian', 'live:.cid.d1924dba0ec65b2b', 'The Gallywix Community', 1, '2020-11-30 19:00:00'),
(3, 'Олежа', 'Олегович', '0000-00-00', '76776678', 'paxom.tema2@mail.ru', '81dc9bdb52d04dc20036dbd8313ed055', 'Enter your Country 2', 'Enter your Skype 2', 'instagram 222', 2, '2020-12-16 11:45:19');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id`),
  ADD KEY `autor` (`autor`);

--
-- Индексы таблицы `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `instagram`
--
ALTER TABLE `instagram`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `music_autor`
--
ALTER TABLE `music_autor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `autor` (`autor`);

--
-- Индексы таблицы `music_profile`
--
ALTER TABLE `music_profile`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user` (`user`);

--
-- Индексы таблицы `news_glav`
--
ALTER TABLE `news_glav`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `role` (`role`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `album`
--
ALTER TABLE `album`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT для таблицы `author`
--
ALTER TABLE `author`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT для таблицы `instagram`
--
ALTER TABLE `instagram`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `music_autor`
--
ALTER TABLE `music_autor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT для таблицы `music_profile`
--
ALTER TABLE `music_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `news_glav`
--
ALTER TABLE `news_glav`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `role`
--
ALTER TABLE `role`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `album`
--
ALTER TABLE `album`
  ADD CONSTRAINT `album_ibfk_1` FOREIGN KEY (`autor`) REFERENCES `author` (`id`);

--
-- Ограничения внешнего ключа таблицы `music_autor`
--
ALTER TABLE `music_autor`
  ADD CONSTRAINT `music_autor_ibfk_1` FOREIGN KEY (`autor`) REFERENCES `author` (`id`);

--
-- Ограничения внешнего ключа таблицы `music_profile`
--
ALTER TABLE `music_profile`
  ADD CONSTRAINT `music_profile_ibfk_1` FOREIGN KEY (`user`) REFERENCES `user` (`id`);

--
-- Ограничения внешнего ключа таблицы `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role`) REFERENCES `role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
