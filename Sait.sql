-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:8889
-- Время создания: Июл 06 2024 г., 10:59
-- Версия сервера: 5.7.39
-- Версия PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `Sait`
--

-- --------------------------------------------------------

--
-- Структура таблицы `hotels`
--

CREATE TABLE `hotels` (
  `id_h` int(11) NOT NULL,
  `name` text NOT NULL,
  `password` text NOT NULL,
  `address` text,
  `kolvo_zv` int(1) DEFAULT NULL,
  `number` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `hotels`
--

INSERT INTO `hotels` (`id_h`, `name`, `password`, `address`, `kolvo_zv`, `number`) VALUES
(13, 'Отель Авион Внуково', '12345', 'улица Привольная , д.1, Марушкино', 5, '89651672020'),
(14, 'Отель Novotel Moscow City', '12345', 'Пресненская Набережная, д. 2, Москва', 4, '89763832738'),
(17, 'Отель A.Kosterev', '12345678', 'Tverskaya Street, 9Ас5, Москва', 2, '89342434324'),
(18, 'Апарт-Отель Шерстон Окружная', '123', 'ул. Новый Арбат, 32, Москва, Москва', 3, '89345553465'),
(19, 'Отель Plaza Garden Moscow WTC', '4321', 'Краснопресненская Набережная, 12, Москва', 5, '89534338888');

-- --------------------------------------------------------

--
-- Структура таблицы `numbers`
--

CREATE TABLE `numbers` (
  `id_num` int(11) NOT NULL,
  `id_h` int(11) NOT NULL,
  `num` int(11) NOT NULL,
  `kol_chel` int(11) NOT NULL,
  `tip` text NOT NULL,
  `opis` text,
  `photo` text,
  `pitanie` int(11) DEFAULT NULL,
  `price_day` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `numbers`
--

INSERT INTO `numbers` (`id_num`, `id_h`, `num`, `kol_chel`, `tip`, `opis`, `photo`, `pitanie`, `price_day`) VALUES
(3, 13, 10, 2, 'Стандартные', ' Просторный', 'upload/dizajn-komnaty-podrostka-1.webp', 1500, 15000),
(4, 13, 20, 3, 'Сюит', 'Очень комфортный номер', 'upload/Unknown.jpeg', 2800, 23000),
(11, 14, 102, 2, 'Сюит', ' Просто на двоих', 'upload/Unknown.jpeg', 2000, 35000),
(12, 14, 101, 1, 'Люкс', ' Очень удобно', 'upload/chist-8-obrez.jpg', 4000, 30000),
(13, 17, 1, 4, 'Стандартные', 'Дёшево и уютно ', 'upload/unnamed.jpg', 1000, 4000),
(14, 17, 12, 3, 'Лоу кост', 'Шведский стол в комплекте', 'upload/b838b6e7ad5e686d2559d47b2b97376f.jpg', 600, 2000),
(15, 17, 23, 5, 'Стандартные', ' Пятый на полу', 'upload/room_02.jpg', 1500, 5000),
(16, 18, 1, 3, 'Стандартные', ' Ну тут не плохо', 'upload/nstandart3m01.png', 900, 8000),
(17, 18, 58, 2, 'Сюит', ' Хорошо', 'upload/statya-spalnia-s-dvumia-krovatiami-1.jpg', 3000, 13000),
(18, 19, 1001, 1, 'Люкс', ' Туалет на улице', 'upload/dizain-komnati-v-stile-kosmos-dizain-krasi-1.jpg', 10000, 100000),
(19, 19, 696, 2, 'Люкс', 'Муж в восторге! ', 'upload/komnata_s_akcentami_cveta_fuksii_dlya_dvuh_devochek_homedit.jpg.webp', 1000, 40000);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`id_h`);

--
-- Индексы таблицы `numbers`
--
ALTER TABLE `numbers`
  ADD PRIMARY KEY (`id_num`),
  ADD KEY `fc_1` (`id_h`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id_h` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблицы `numbers`
--
ALTER TABLE `numbers`
  MODIFY `id_num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `numbers`
--
ALTER TABLE `numbers`
  ADD CONSTRAINT `fc_1` FOREIGN KEY (`id_h`) REFERENCES `hotels` (`id_h`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
