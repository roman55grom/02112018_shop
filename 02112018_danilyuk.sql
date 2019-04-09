-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Мар 29 2019 г., 19:27
-- Версия сервера: 10.1.35-MariaDB
-- Версия PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `02112018_danilyuk`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `parent_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`, `parent_id`) VALUES
(1, 'Женщинам', 0),
(2, 'Верхняя одежда', 1),
(3, 'Нижняя одежда', 1),
(4, 'Штаны', 1),
(5, 'Обувь', 1),
(6, 'Мужчинам', 0),
(7, 'Резиновые сапоги', 6),
(8, 'Штаны', 6);

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `articule` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `img_src` varchar(100) NOT NULL,
  `category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `name`, `articule`, `price`, `content`, `img_src`, `category`) VALUES
(1, 'Куртка синяя', '385900', '5400', 'Ветровка выполнена из ветрозащитной и водоотталкивающего текстиля на сетчатой подкладке. Функциональное двухслойное полотно: водонепроницаемость 5000 мм, паропроницаемость 5000 г/м2. Швы проклеены водонепроницаемой лентой. ', '/images/catalog/1.jpg', 2),
(2, 'Кожаная куртка', '385901', '22500', 'Куртка выполнена из натуральной кожи, хлопковая подкладка. Особенности: прямой крой, застежка на молнию, боковые карманы на молнии, воротник-стойка с капюшоном внутри, окантовка трикотажной резинкой.', '/images/catalog/2.jpg', 2),
(3, 'Куртка с карманами', '385902', '9200', 'Куртка выполнена из ветрозащитного текстиля с водонепроницаемой мембраной DryFlight. Модель прямого кроя. Детали: застежка на молнию, два кармана по бокам, карман на молнии спереди.', '/images/catalog/3.png', 2),
(4, 'Куртка с капюшоном', '385903', '6100', 'Модель прямого кроя. Детали: капюшон на кулиске, застежка на молнию, два кармана по бокам, карман на молнии спереди.', '/images/catalog/4.jpg', 2),
(5, 'Куртка Casual', '385904', '8800', 'Модель прямого силуэта. Детали: атласная подкладка (сетчатая в рукавах); застежка на молнии; ветрозащитная планка на кнопках; воротник-стойка.', '/images/catalog/5.jpg', 2),
(6, 'Стильная кожаная куртка', '385905', '12800', 'Куртка выполнена из натуральной кожи на атласной подкладке. Модель прямого кроя. Детали: застежка на молнию; воротник-стойка с застежкой на кнопке; два боковых кармана на молнии; притачной пояс понизу, манжеты на молнии.', '/images/catalog/6.jpg', 2),
(7, 'Кеды серые', '385906', '2900', 'Кеды EASY VULC 2.0 выполнены в классическом стиле из искусственной кожи. Детали: шнуровка, внутренние стелька и подкладка из текстиля, контрастная резиновая подошва, три оригинальные полоски.', '/images/catalog/7.jpg', 5),
(8, 'Кеды черные', '385907', '4500', 'Кеды - стильная обувь на каждый день. Модель черного цвета выполнена из прочного текстиля. Высокая шнуровка - для надежной фиксации стопы. Материал стельки и подкладки - текстиль. Плоская подошва создана из прочной резины.', '/images/catalog/8.jpg', 5),
(9, 'Кеды Casual', '385908', '5900', 'Кеды Vans с контрастной строчкой выполнены из спилка и плотного текстиля. Детали: подкладка из искусственной кожи, текстильная стелька, шнуровка, декоративная белая полоска, подошва из резины.', '/images/catalog/9.jpg', 5),
(10, 'Кеды всепогодные', '385909', '9200', 'Кеды из линейки Mountain Edition - надежная и всепогодная обувь. Плотный текстильный подклад сохраняющий тепло и слой между стелькой и подошвой будут держать ноги в тепле и сухости, в то время как вулканизированная подошва и прочный замшевый верх не дадут влаге проникнуть внутрь.', '/images/catalog/10.jpg', 5),
(11, 'Джинсы', '385910', '4800', 'Джинсы выполнены из плотного хлопкового денима. Особенности: прямой крой, застежка на молнию и пуговицу, пять карманов, шлевки для ремня.', '/images/catalog/11.jpg', 4),
(12, 'Джинсы голубые', '385911', '4200', 'Состав: Хлопок - 97%, Эластан - 3%', '/images/catalog/12.jpg', 4);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
