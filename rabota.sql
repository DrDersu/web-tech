-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 24 2020 г., 07:34
-- Версия сервера: 10.4.10-MariaDB
-- Версия PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `rabota`
--

-- --------------------------------------------------------

--
-- Структура таблицы `employers`
--

CREATE TABLE `employers` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name_company` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `company_desc` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `employers`
--

INSERT INTO `employers` (`id`, `full_name`, `url`, `phone`, `email`, `name_company`, `location`, `password`, `company_desc`) VALUES
(3, 'Erlan Orazbekuly', 'https://www.mateo-arquitectura.com/wp-content/uploads/2017/07/01_pggm_mateo_arquitectura.jpg', '8123123123', 'erlan@gmail.com', 'Erlan-Industries', 'Nur-Sultan', '0843dfafabed5f6245228dc1146c4c4d86f41c28', 'My company is your new place to work. It\'s true.'),
(4, 'Dimaw Amangaliuly', 'https://intalent.pro/sites/default/files/styles/new_photo_in_article/public/foto/article/ii2.jpg?itok=gzi34i_2', '656656', 'dimaw@mail.ru', 'Dimaw-Industries', 'Nur-Sultan', '045555fa74ce86d90af69feff0880a9a18c2f36e', 'My company is very good and very reach!!!');

-- --------------------------------------------------------

--
-- Структура таблицы `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `worker_id` int(11) NOT NULL,
  `vac_id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `messages`
--

INSERT INTO `messages` (`id`, `created_at`, `updated_at`, `text`, `worker_id`, `vac_id`, `emp_id`) VALUES
(2, '2020-12-23 04:10:32', '2020-12-23 04:10:32', 'Okay, You should get to work at 8 am, tomorrow.', 2, 1, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2020_12_11_024352_create_vacancies_table', 2),
(13, '2020_12_07_102610_employers', 3),
(14, '2020_12_11_044624_create_vacancies_table', 3),
(15, '2020_12_23_072334_create_messages_table', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `requestes`
--

CREATE TABLE `requestes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vac_id` int(11) NOT NULL,
  `worker_id` int(11) NOT NULL,
  `req_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `requestes`
--

INSERT INTO `requestes` (`id`, `vac_id`, `worker_id`, `req_date`) VALUES
(5, 2, 2, '2020-12-24 02:26:35');

-- --------------------------------------------------------

--
-- Структура таблицы `vacancies`
--

CREATE TABLE `vacancies` (
  `id` int(10) UNSIGNED NOT NULL,
  `salary` int(11) NOT NULL,
  `speciality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `vacancies`
--

INSERT INTO `vacancies` (`id`, `salary`, `speciality`, `experience`, `emp_id`) VALUES
(1, 340000, 'Assistant', 4, 3),
(2, 150000, 'Headmaster\'s Driver', 2, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `workers`
--

CREATE TABLE `workers` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `workers`
--

INSERT INTO `workers` (`id`, `full_name`, `url`, `phone`, `email`, `location`, `password`, `age`) VALUES
(2, 'Erlan Orazbekuly', 'https://kninevox.com/wp-content/uploads/2020/06/Anonymous-Guy-Fawkes.jpg', '656656', 'erlan@mail.ru', 'Nur-Sultan', 'baa1ee1e6b56a1d232c61990c27da8b7c7e01dfe', 21),
(3, 'Dimaw', 'https://cdn0.iconfinder.com/data/icons/sewing-52/512/Cloth_Washing_cleaner_cleaning_cloth_laundry_shirt_wash_washing_basin-512.png', '523423', 'dimaw1406@gmail.com', 'Atyrau', '045555fa74ce86d90af69feff0880a9a18c2f36e', 21);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `employers`
--
ALTER TABLE `employers`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `requestes`
--
ALTER TABLE `requestes`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `vacancies`
--
ALTER TABLE `vacancies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vacancies_emp_id_foreign` (`emp_id`);

--
-- Индексы таблицы `workers`
--
ALTER TABLE `workers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `employers`
--
ALTER TABLE `employers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `requestes`
--
ALTER TABLE `requestes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `vacancies`
--
ALTER TABLE `vacancies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `workers`
--
ALTER TABLE `workers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `vacancies`
--
ALTER TABLE `vacancies`
  ADD CONSTRAINT `vacancies_emp_id_foreign` FOREIGN KEY (`emp_id`) REFERENCES `employers` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
