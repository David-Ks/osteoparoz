-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Мар 11 2022 г., 20:01
-- Версия сервера: 10.4.20-MariaDB
-- Версия PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `osteoparoz`
--

-- --------------------------------------------------------

--
-- Структура таблицы `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `map` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `contacts`
--

INSERT INTO `contacts` (`id`, `phone`, `address`, `map`) VALUES
(1, '+374 11 999 887', 'Ալեք Մանուկյան 22', 'none');

-- --------------------------------------------------------

--
-- Структура таблицы `galleries`
--

CREATE TABLE `galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'images/img-1.jpeg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `galleries`
--

INSERT INTO `galleries` (`id`, `img`) VALUES
(58, '/images/gallery/1647024272serv-3.png'),
(59, '/images/gallery/1647024279serv-2.png'),
(60, '/images/gallery/1647024285serv-1.png'),
(61, '/images/gallery/1647024292img.png'),
(62, '/images/gallery/1647024305patient-3.png'),
(63, '/images/gallery/1647024311img.png'),
(64, '/images/gallery/1647024319serv-2.png'),
(65, '/images/gallery/1647024326edu-2.png'),
(66, '/images/gallery/1647024333patient-4.png'),
(67, '/images/gallery/1647025166serv-4.png');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2022_03_09_123018_create_team_types_table', 1),
(4, '2022_03_09_123236_create_service_types_table', 1),
(5, '2022_03_09_123330_create_services_table', 1),
(6, '2022_03_09_124153_create_news_types_table', 1),
(7, '2022_03_09_124330_create_news_table', 1),
(8, '2022_03_09_124544_create_galleries_table', 1),
(9, '2022_03_09_124643_create_videos_table', 1),
(10, '2022_03_09_125313_create_contacts_table', 1),
(11, '2022_03_09_125520_create_socials_table', 1),
(12, '2022_03_09_145840_create_teams_table', 1),
(13, '2022_03_09_150209_create_settings_table', 1),
(14, '2014_10_12_000000_create_users_table', 1),
(15, '2014_10_12_100000_create_password_resets_table', 1),
(16, '2022_03_09_123018_create_team_types_table', 1),
(17, '2022_03_09_123236_create_service_types_table', 1),
(18, '2022_03_09_123330_create_services_table', 1),
(19, '2022_03_09_124153_create_news_types_table', 1),
(20, '2022_03_09_124330_create_news_table', 1),
(21, '2022_03_09_124544_create_galleries_table', 1),
(22, '2022_03_09_124643_create_videos_table', 1),
(23, '2022_03_09_125313_create_contacts_table', 1),
(24, '2022_03_09_125520_create_socials_table', 1),
(25, '2022_03_09_145840_create_teams_table', 1),
(26, '2022_03_09_150209_create_settings_table', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'images/news-1.jpeg',
  `news_type_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `text`, `img`, `news_type_id`) VALUES
(28, '«ՄԻԼԼԿԱԹ» TTԸ-ն ստեղծվել է 000 թ.: Մանրամասն Հանրապետություն ամենահպություններից մեկն է:', 'Լուրջ ուշադրություն է դարձնում որակին սարքավորումները: «ՄԻԼԼԿԱԹ» ՍՊԸ-ն ստեղծվել է 2000 թ.: Մանրամասն Հանրապետությունում ճյուղային ամենահեղինակավոր', '/images/news/1647024811news.png', 1),
(29, '«ՄԻԼԼԿԱԹ» TTԸ-ն ստեղծվել է 000 թ.: Մանրամասն Հանրապետություն ամենահպություններից մեկն է:', 'Լուրջ ուշադրություն է դարձնում որակին սարքավորումները: «ՄԻԼԼԿԱԹ» ՍՊԸ-ն ստեղծվել է 2000 թ.: Մանրամասն Հանրապետությունում ճյուղային ամենահեղինակավոր', '/images/news/1647024822news.png', 1),
(30, '«ՄԻԼԼԿԱԹ» TTԸ-ն ստեղծվել է 000 թ.: Մանրամասն Հանրապետություն ամենահպություններից մեկն է:', 'Լուրջ ուշադրություն է դարձնում որակին սարքավորումները: «ՄԻԼԼԿԱԹ» ՍՊԸ-ն ստեղծվել է 2000 թ.: Մանրամասն Հանրապետությունում ճյուղային ամենահեղինակավոր', '/images/news/1647024832news.png', 1),
(31, '«ՄԻԼԼԿԱԹ» TTԸ-ն ստեղծվել է 000 թ.: Մանրամասն Հանրապետություն ամենահպություններից մեկն է:', 'Լուրջ ուշադրություն է դարձնում որակին սարքավորումները: «ՄԻԼԼԿԱԹ» ՍՊԸ-ն ստեղծվել է 2000 թ.: Մանրամասն Հանրապետությունում ճյուղային ամենահեղինակավոր', '/images/news/1647024844news.png', 2),
(32, '«ՄԻԼԼԿԱԹ» TTԸ-ն ստեղծվել է 000 թ.: Մանրամասն Հանրապետություն ամենահպություններից մեկն է:', 'Լուրջ ուշադրություն է դարձնում որակին սարքավորումները: «ՄԻԼԼԿԱԹ» ՍՊԸ-ն ստեղծվել է 2000 թ.: Մանրամասն Հանրապետությունում ճյուղային ամենահեղինակավոր', '/images/news/1647024858news.png', 2),
(33, '«ՄԻԼԼԿԱԹ» TTԸ-ն ստեղծվել է 000 թ.: Մանրամասն Հանրապետություն ամենահպություններից մեկն է:', 'Լուրջ ուշադրություն է դարձնում որակին սարքավորումները: «ՄԻԼԼԿԱԹ» ՍՊԸ-ն ստեղծվել է 2000 թ.: Մանրամասն Հանրապետությունում ճյուղային ամենահեղինակավոր', '/images/news/1647024870news.png', 2),
(34, 'ՆՅՈՒԹԻ ՎԵՐՆԱԳԻ ՄԻՆՉԵՒ 4-5 ԲԱՌ', 'Հիմնական տեքստ, մինչեւ 1-3 նախադասություն պիտի որ տեղավորվի, բացվելու', '/images/news/edu-1.png', 4),
(35, 'ՆՅՈՒԹԻ ՎԵՐՆԱԳԻ ՄԻՆՉԵՒ 4-5 ԲԱՌ', 'Հիմնական տեքստ, մինչեւ 1-3 նախադասություն պիտի որ տեղավորվի, բացվելու', '/images/news/edu-2.png', 4),
(36, 'ՆՅՈՒԹԻ ՎԵՐՆԱԳԻ ՄԻՆՉԵՒ 4-5 ԲԱՌ', 'Հիմնական տեքստ, մինչեւ 1-3 նախադասություն պիտի որ տեղավորվի, բացվելու', '/images/news/edu-3.png', 4),
(37, 'հԱՅ-ՌՈՒՍԱԿԱՆ ՀԵՏԱԶՈՏՈՒԹՅՈՒՆՆԵՐ', '«ФАКТОРЫ РИСКА ОСТЕОПОРОЗА И ПЕРЕЛОМОВ У АРМЯНСКИХ ЖЕНЩИН, ПОСТОЯННО ПРОЖИВАЮЩИХ В АРМЕНИИ ИЛИ РОССИИ»', '/images/news/1647024781news.png', 3),
(38, 'հԱՅ-ՌՈՒՍԱԿԱՆ ՀԵՏԱԶՈՏՈՒԹՅՈՒՆՆԵՐ', '«ФАКТОРЫ РИСКА ОСТЕОПОРОЗА И ПЕРЕЛОМОВ У АРМЯНСКИХ ЖЕНЩИН, ПОСТОЯННО ПРОЖИВАЮЩИХ В АРМЕНИИ ИЛИ РОССИИ»', '/images/news/patient-2.png', 3),
(39, 'հԱՅ-ՌՈՒՍԱԿԱՆ ՀԵՏԱԶՈՏՈՒԹՅՈՒՆՆԵՐ', '«ФАКТОРЫ РИСКА ОСТЕОПОРОЗА И ПЕРЕЛОМОВ У АРМЯНСКИХ ЖЕНЩИН, ПОСТОЯННО ПРОЖИВАЮЩИХ В АРМЕНИИ ИЛИ РОССИИ»', '/images/news/patient-3.png', 3),
(40, 'հԱՅ-ՌՈՒՍԱԿԱՆ ՀԵՏԱԶՈՏՈՒԹՅՈՒՆՆԵՐ', '«ФАКТОРЫ РИСКА ОСТЕОПОРОЗА И ПЕРЕЛОМОВ У АРМЯНСКИХ ЖЕНЩИН, ПОСТОЯННО ПРОЖИВАЮЩИХ В АРМЕНИИ ИЛИ РОССИИ»', '/images/news/patient-4.png', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `news_types`
--

CREATE TABLE `news_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `news_types`
--

INSERT INTO `news_types` (`id`, `title`) VALUES
(1, 'Բժիշկներին'),
(2, 'Բուժքույրերին'),
(3, 'Պացիենտներին'),
(4, 'Կրթություն');

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'images/service-1.jpeg',
  `service_type_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `services`
--

INSERT INTO `services` (`id`, `title`, `text`, `img`, `service_type_id`) VALUES
(10, 'ռևմատոլոգի խորհրդատվություն', 'chka', '/images/service/serv-1.png', 2),
(11, 'էնդոկրինոլոգի խորհրդատվություն', 'chka', '/images/service/serv-2.png', 2),
(12, 'Դենսիտոմետրիա', 'chka', '/images/service/serv-3.png', 1),
(13, 'Սոնոգրաֆիա', 'chka', '/images/service/serv-4.png', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `service_types`
--

CREATE TABLE `service_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `service_types`
--

INSERT INTO `service_types` (`id`, `title`) VALUES
(1, 'Ախտորոշում'),
(2, 'Խորհրդակցություն');

-- --------------------------------------------------------

--
-- Структура таблицы `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `block_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `settings`
--

INSERT INTO `settings` (`id`, `text`, `block_id`) VALUES
(1, 'TTTTT և իրացնում է Հայաստանի և ԼՂՀ-ի շուկայում հայտնի «ԷԼՆՈՐ» ապրանքանիշի կարագը, սփրեդները:Հանրապետությունում ճյուղային կազմա կերպություններից մեկն է:', 1),
(2, 'Արտադրում և իրացնում է Հայաստանի և ԼՂՀ-ի շուկայում հայտնի «ԷRRRRՐ» ապրանքանիշի կարագը, սփրեդները:Հանրապետությունում ճյուղային կազմա կերպություններից մեկն է:', 2),
(3, 'Արտադրում և իրացնում է Հայաստանի և ԼՂՀ-ի շուկայում հայտնի «ԷԼՆՈՐ» ապրանքանիշի կարագը, սփրեդները:Հանրապետությունում ճյուղային կազմա կերպություններից մեկն է:', 3),
(4, 'Արտադրում և իրացնում է Հայաստանի և ԼՂՀ-ի շուկայում հայտնի «ԷԼՆՈՐ» ապրանքանիշի կարագը, սփրեդները:Հանրապետությունում ճյուղային կազմա կերպություններից մեկն է:', 4),
(5, 'Արտադրում և իրացնում է Հայաստանի ևTTT-ի շուկայում հայտնի «ԷԼՆՈՐ» ապրանքանիշի կարագը, սփրեդները:Հանրապետությունում ճյուղային կազմա կերպություններից մեկն է:', 5);

-- --------------------------------------------------------

--
-- Структура таблицы `socials`
--

CREATE TABLE `socials` (
  `id` int(10) UNSIGNED NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'images/icon-1.jpeg',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `socials`
--

INSERT INTO `socials` (`id`, `icon`, `title`, `url`) VALUES
(6, '/images/social/16470246901647024570face-for-nav.png', 'facebook', '#'),
(7, '/images/social/16470247061647024591inst-for-nav.png', 'instagram', '#');

-- --------------------------------------------------------

--
-- Структура таблицы `teams`
--

CREATE TABLE `teams` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skill` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'images/doc-1.jpeg',
  `team_type_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `teams`
--

INSERT INTO `teams` (`id`, `name`, `skill`, `img`, `team_type_id`) VALUES
(18, 'Անուն Ազգանուն', 'որպես մասնագետ', '/images/team/doc-1.png', 1),
(19, 'Անուն Ազգանուն', 'որպես մասնագետ', '/images/team/doc-2.png', 1),
(20, 'Անուն Ազգանուն', 'որպես մասնագետ', '/images/team/doc-3.png', 2),
(21, 'Անուն Ազգանուն', 'որպես մասնագետ', '/images/team/doc-4.png', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `team_types`
--

CREATE TABLE `team_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `team_types`
--

INSERT INTO `team_types` (`id`, `title`) VALUES
(1, 'Բժիշկ'),
(2, 'Վարչական');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', '$2y$10$mRGeWgmb18CZw2KBgcSC8O.7uEv0riNS2n95BGX6unw0wzM.7tARu', '4dWFMKTXLK5QJLR1XXGq3uchwahB4wvUqEp6ntARpbOqc8tvARUQDVaPBafo', '2022-03-11 12:10:57', '2022-03-11 12:10:57');

-- --------------------------------------------------------

--
-- Структура таблицы `videos`
--

CREATE TABLE `videos` (
  `id` int(10) UNSIGNED NOT NULL,
  `iframe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `videos`
--

INSERT INTO `videos` (`id`, `iframe`, `title`, `text`) VALUES
(3, '<iframe id=\"ytplayer\" type=\"text/html\" class=\"w-100\" height=\"240\" src=\"https://www.youtube.com/embed/fzBTvDraO5U\" frameborder=\"0\" allowfullscreen></iframe>', 'ՆՅՈՒԹԻ ՎԵՐՆԱԳԻ ՄԻՆՉԵՒ 4-5 ԲԱՌ', 'Լուրջ դարձնում ուշադրություն է'),
(4, '<iframe id=\"ytplayer\" type=\"text/html\" class=\"w-100\" height=\"240\" src=\"https://www.youtube.com/embed/fzBTvDraO5U\" frameborder=\"0\" allowfullscreen></iframe>', 'ՆՅՈՒԹԻ ՎԵՐՆԱԳԻ ՄԻՆՉԵՒ 4-5 ԲԱՌ', 'Լուրջ դարձնում ուշադրություն է'),
(5, '<iframe id=\"ytplayer\" type=\"text/html\" class=\"w-100\" height=\"240\" src=\"https://www.youtube.com/embed/fzBTvDraO5U\" frameborder=\"0\" allowfullscreen></iframe>', 'ՆՅՈՒԹԻ ՎԵՐՆԱԳԻ ՄԻՆՉԵՒ 4-5 ԲԱՌ', 'Լուրջ դարձնում ուշադրություն է'),
(6, '<iframe id=\"ytplayer\" type=\"text/html\" class=\"w-100\" height=\"240\" src=\"https://www.youtube.com/embed/fzBTvDraO5U\" frameborder=\"0\" allowfullscreen></iframe>', 'ՆՅՈՒԹԻ ՎԵՐՆԱԳԻ ՄԻՆՉԵՒ 4-5 ԲԱՌ', 'Լուրջ դարձնում ուշադրություն է'),
(7, '<iframe id=\"ytplayer\" type=\"text/html\" class=\"w-100\" height=\"240\" src=\"https://www.youtube.com/embed/fzBTvDraO5U\" frameborder=\"0\" allowfullscreen></iframe>', 'ՆՅՈՒԹԻ ՎԵՐՆԱԳԻ ՄԻՆՉԵՒ 4-5 ԲԱՌ', 'Լուրջ դարձնում ուշադրություն է'),
(8, '<iframe id=\"ytplayer\" type=\"text/html\" class=\"w-100\" height=\"240\" src=\"https://www.youtube.com/embed/fzBTvDraO5U\" frameborder=\"0\" allowfullscreen></iframe>', 'ՆՅՈՒԹԻ ՎԵՐՆԱԳԻ ՄԻՆՉԵՒ 4-5 ԲԱr', 'Լուրջ դարձնում ուշադրություն է'),
(10, '<iframe id=\"ytplayer\" type=\"text/html\" class=\"w-100\" height=\"240\" src=\"https://www.youtube.com/embed/fzBTvDraO5U\" frameborder=\"0\" allowfullscreen></iframe>', 'ՆՅՈՒԹԻ ՎԵՐՆԱԳԻ ՄԻՆՉԵՒ 4-5 ԲԱՌ', 'Լուրջ դարձնում ուշադրություն է');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_news_type_id_foreign` (`news_type_id`);

--
-- Индексы таблицы `news_types`
--
ALTER TABLE `news_types`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `services_service_type_id_foreign` (`service_type_id`);

--
-- Индексы таблицы `service_types`
--
ALTER TABLE `service_types`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teams_team_type_id_foreign` (`team_type_id`);

--
-- Индексы таблицы `team_types`
--
ALTER TABLE `team_types`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Индексы таблицы `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT для таблицы `news_types`
--
ALTER TABLE `news_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `service_types`
--
ALTER TABLE `service_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `socials`
--
ALTER TABLE `socials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT для таблицы `team_types`
--
ALTER TABLE `team_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_news_type_id_foreign` FOREIGN KEY (`news_type_id`) REFERENCES `news_types` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_service_type_id_foreign` FOREIGN KEY (`service_type_id`) REFERENCES `service_types` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `teams`
--
ALTER TABLE `teams`
  ADD CONSTRAINT `teams_team_type_id_foreign` FOREIGN KEY (`team_type_id`) REFERENCES `team_types` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
