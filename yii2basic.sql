-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Сен 06 2021 г., 16:58
-- Версия сервера: 10.4.17-MariaDB
-- Версия PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `yii2basic`
--

-- --------------------------------------------------------

--
-- Структура таблицы `headermenu`
--

CREATE TABLE `headermenu` (
  `id` int(2) NOT NULL,
  `sort` int(2) NOT NULL,
  `title` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `svg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `headermenu`
--

INSERT INTO `headermenu` (`id`, `sort`, `title`, `link`, `svg`) VALUES
(2, 7, 'Hisobot', '#', '<svg class=\"bi bi-briefcase-fill\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\"\r\n                            fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">\r\n                            <path fill-rule=\"evenodd\"\r\n                                d=\"M0 12.5A1.5 1.5 0 001.5 14h13a1.5 1.5 0 001.5-1.5V6.85L8.129 8.947a.5.5 0 01-.258 0L0 6.85v5.65z\"\r\n                                clip-rule=\"evenodd\" />\r\n                            <path fill-rule=\"evenodd\"\r\n                                d=\"M0 4.5A1.5 1.5 0 011.5 3h13A1.5 1.5 0 0116 4.5v1.384l-7.614 2.03a1.5 1.5 0 01-.772 0L0 5.884V4.5zm5-2A1.5 1.5 0 016.5 1h3A1.5 1.5 0 0111 2.5V3h-1v-.5a.5.5 0 00-.5-.5h-3a.5.5 0 00-.5.5V3H5v-.5z\"\r\n                                clip-rule=\"evenodd\" />\r\n                        </svg>'),
(5, 1, 'Yangilikar', 'http://127.0.0.1/oblstat/web/stat/news', '<svg\r\n                            class=\"bi bi-calendar\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\"\r\n                            xmlns=\"http://www.w3.org/2000/svg\">\r\n                            <path fill-rule=\"evenodd\"\r\n                                d=\"M14 0H2a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V2a2 2 0 00-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z\"\r\n                                clip-rule=\"evenodd\" />\r\n                            <path fill-rule=\"evenodd\"\r\n                                d=\"M6.5 7a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm-9 3a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm-9 3a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2z\"\r\n                                clip-rule=\"evenodd\" />\r\n                        </svg>'),
(6, 4, ' Profil', '../reg/index.php', '<svg\r\n                            class=\"bi bi-graph-up\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"currentColor\"\r\n                            xmlns=\"http://www.w3.org/2000/svg\">\r\n                            <path d=\"M0 0h1v16H0V0zm1 15h15v1H1v-1z\" />\r\n                            <path fill-rule=\"evenodd\"\r\n                                d=\"M14.39 4.312L10.041 9.75 7 6.707l-3.646 3.647-.708-.708L7 5.293 9.959 8.25l3.65-4.563.781.624z\"\r\n                                clip-rule=\"evenodd\" />\r\n                            <path fill-rule=\"evenodd\"\r\n                                d=\"M10 3.5a.5.5 0 01.5-.5h4a.5.5 0 01.5.5v4a.5.5 0 01-1 0V4h-3.5a.5.5 0 01-.5-.5z\"\r\n                                clip-rule=\"evenodd\" />\r\n                        </svg>'),
(7, 33, 'Fermer', '#', '<svg class=\"bi bi-briefcase-fill\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\"\r\n                            fill=\"currentColor\" xmlns=\"http://www.w3.org/2000/svg\">\r\n                            <path fill-rule=\"evenodd\"\r\n                                d=\"M0 12.5A1.5 1.5 0 001.5 14h13a1.5 1.5 0 001.5-1.5V6.85L8.129 8.947a.5.5 0 01-.258 0L0 6.85v5.65z\"\r\n                                clip-rule=\"evenodd\" />\r\n                            <path fill-rule=\"evenodd\"\r\n                                d=\"M0 4.5A1.5 1.5 0 011.5 3h13A1.5 1.5 0 0116 4.5v1.384l-7.614 2.03a1.5 1.5 0 01-.772 0L0 5.884V4.5zm5-2A1.5 1.5 0 016.5 1h3A1.5 1.5 0 0111 2.5V3h-1v-.5a.5.5 0 00-.5-.5h-3a.5.5 0 00-.5.5V3H5v-.5z\"\r\n                                clip-rule=\"evenodd\" />\r\n                        </svg>'),
(9, 5, 'Dinamik ko\'rsatkichlar', '#', ''),
(10, 6, 'Ish rejalar', '#', ''),
(11, 2, 'Press reliz', 'http://127.0.0.1/oblstat/web/stat/press', ''),
(12, 3, 'Yalpi mahsulot', 'http://127.0.0.1/oblstat/web/stat/report', '');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(4) NOT NULL,
  `title` varchar(255) NOT NULL,
  `short` varchar(255) NOT NULL,
  `longer` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `short`, `longer`) VALUES
(1, 'asdasdasd', 'sadasdasdas', ''),
(2, 'sadasdasda', 'asdasdas dasdasd a', ''),
(3, 'asdasdasd', 'sadsadasdasd', ''),
(4, 'sdaasda', 'sdasdasd', 'asdasd');

-- --------------------------------------------------------

--
-- Структура таблицы `vmenu`
--

CREATE TABLE `vmenu` (
  `id` int(2) NOT NULL,
  `sort` int(2) NOT NULL,
  `title` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `vmenu`
--

INSERT INTO `vmenu` (`id`, `sort`, `title`, `link`) VALUES
(2, 0, 'Hisobot', '#'),
(5, 1, 'Yangilikar', '../news/index.php'),
(6, 4, ' Profil', '../reg/index.php'),
(7, 3, 'Fermer', '#'),
(9, 5, 'Dinamik ko\'rsatkichlar', '#'),
(10, 6, 'Ish rejalar', '#');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `headermenu`
--
ALTER TABLE `headermenu`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `vmenu`
--
ALTER TABLE `vmenu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `headermenu`
--
ALTER TABLE `headermenu`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `vmenu`
--
ALTER TABLE `vmenu`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
