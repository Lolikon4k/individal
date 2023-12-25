-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 24 2023 г., 23:31
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `BookSell`
--

-- --------------------------------------------------------

--
-- Структура таблицы `books`
--

CREATE TABLE `books` (
  `id` bigint UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `YearPublishing` date NOT NULL,
  `contPages` int UNSIGNED NOT NULL,
  `imageBook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bookNameDownload` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_publisher` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cost` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `books`
--

INSERT INTO `books` (`id`, `description`, `name`, `author`, `YearPublishing`, `contPages`, `imageBook`, `bookNameDownload`, `id_publisher`, `created_at`, `updated_at`, `cost`) VALUES
(17, 'Захватывающая история из популярного мобильного приложения «Лига мечтателей»!\r\n\r\nКнига «Печать Нострадамуса. Тайна последнего предсказания» перенесет вас на просторы Франции позднего Средневековья. Вместе с отважной красавицей Мадлен Бланкар вы окажетесь при дворе прославленной Екатерины Медичи и раскроете серию кровавых преступлений, которые наводят ужас на всю Францию.\r\n\r\nИнтригующий детективный сюжет с ореолом мистики, блестящими историческими стилизациями и любовной интригой захватит с головой любителей саспенса и головоломок. Книжный мир «Печати Нострадамуса» блестяще воссоздает атмосферу прошедших веков и наполнен событиями, которые, затейливо переплетаясь друг с другом, ведут к неожиданной развязке.', 'Пелевина Оксана: Печать Нострадамуса. Тайна последнего предсказания', 'Оксана Пелевина', '2004-12-12', 352, '1703126073.webp', '1703126073.pdf', 9, '2023-12-20 23:34:33', '2023-12-20 23:34:33', 600),
(18, 'Ее жизнь — борьба. Борьба за каждую спокойную минуту без насмешек и издевательств. Его жизнь — борьба. Борьба с соперниками на поле и с болью, о которой никто не должен знать. На первый взгляд, Шаннон и Джонни настолько разные, насколько вообще можно себе представить. Жертва школьного буллинга и домашнего насилия, Шаннон никогда не чувствует себя в безопасности и хочет только одного — стать невидимкой. Перспективный спортсмен и любимый сын обеспеченных родителей, Джонни пользуется в школе особыми привилегиями и привык ко всеобщему вниманию и восхищению. Их дороги никогда бы не пересеклись, если бы не несчастный случай. А может, наоборот — счастливый?.. Впервые на русском!\r\n\r\n*На территории России только в магазинах «Читай-город», в интернет-магазине www.chitai-gorod.ru, в магазинах «Буквоед», в интернет-магазине https://www.bookvoed.ru/, в интернет-магазине https://book24.ru/ в период с 06.12.2023 по 09.01.2024 г. вкл.', 'Уолш Х.: Зацепить 13-го', 'Уолш Х.', '2010-04-04', 800, '1703126126.webp', '1703126126.pdf', 10, '2023-12-20 23:35:26', '2023-12-20 23:35:26', 800),
(19, 'Нейтан Хокинс — капитан хоккейной команды университета Мейпл-Хиллз, ответственный и рассудительный на льду, но безрассудный шутник за его пределами. Стейси ненавидит хоккеистов. Кому вообще нужен этот хоккей? Её мечта — попасть в сборную США по фигурному катанию, и к её осуществлению она шла всю жизнь. В результате досадной ошибки какого-то сотрудника университетского отдела расписания, определённо лишённого и совести, и чувства прекрасного, обе сборные вынуждены тренироваться на стадионе в одно время. Теперь искры между Стейси и Нейтом рискуют сорвать занятия, растопив лёд: всё-таки Анастасия всю жизнь верила, что ненавидит хоккеистов. Или… нет?', 'Грейс Ханна: Когда тает лёд', 'Ханна Грейс', '2005-04-12', 475, '1703126176.webp', '1703126176.pdf', 11, '2023-12-20 23:36:16', '2023-12-20 23:36:16', 577),
(20, 'Ванесса Мазур знает, что поступает правильно.\r\n\r\nДва года проработав личным ассистентом известного футболиста, она наконец готова уйти и начать карьеру графического дизайнера. Эйдена Грейвса по прозвищу \"Виннипегская стена\" обожают тысячи, но на деле он холоден, недружелюбен и едва заговорил с Ванессой за все это время.\r\n\r\nКаковы шансы, что спустя месяц после ее ухода Эйден вдруг появится у нее на пороге и станет умолять вернуться? Ванесса ошарашена, ведь он предлагает ей кое-что еще: абсолютно возмутительное и даже опасное.\r\n\r\nКак отказать человеку, который привык получать все, что хочет? И что выйдет, если Ванесса все же согласится?', 'Запата Мариана: Виннипегская стена и я', 'Мариана Запата', '2004-02-12', 124, '1703126219.webp', '1703126219.pdf', 12, '2023-12-20 23:36:59', '2023-12-20 23:36:59', 469),
(21, 'Идеальный роман для любителей горячих хоккеистов и поклонников творчества Эль Кеннеди, Ильзы Мэдден-Миллз и Елены Хантинг.\r\n\r\nДорога в большой спорт, которым она жила, закрыта для нее навсегда. Парень, которому она отдала свое сердце, принадлежит другой.\r\n\r\nКори Каллахан должна была стать звездой хоккейной команды колледжа, но из-за трагической случайности вынуждена отказаться от большого спорта.\r\n\r\nАдам Хартли — ее сосед по общежитию, перспективный спортсмен, и он знает ее как никто другой.\r\n\r\nОт одного вида Хартли сердце Кори начинает биться так, будто вот-вот выпрыгнет из груди. Они понимают друг друга без слов и, кажется, просто созданы быть вместе. Если бы не одно «но»: у Хартли есть девушка, а Кори для него просто друг, с которым можно смеяться до колик и играть в видеоигры. Так бы все и продолжалось, но однажды ночью Хартли стучит в ее дверь...\r\n\r\n«Никто не пишет о хоккее так, как Сарина Боуэн». — Эль Кеннеди, автор бестселлера New York Times «Сделка»\r\n\r\nСарина Боуэн — автор бестселлеров USA Today и Wall Street Journal, лауреат премии RITA и создательница трех десятков популярных современных романов о любви. Ее предки рубили леса Вермонта и обрабатывали суровые земли северных Штатов с 1760-х годов. Сарина же благодарна судьбе, что живет в эпоху, когда повсеместно используется Wi-Fi, ноутбук можно взять с собой в дорогу и почти на каждом углу продают ароматный эспрессо. Заядлая горнолыжница, она перенесла любовь к зимним видам спорта на страницы своих произведений.\r\n\r\n«Мне очень понравилось! Не могу дождаться, чтобы прочитать остальные книги Боуэн». — Колин Гувер, автор бестселлера New York Times «Все закончится на нас»', 'Боуэн Сарина: Год нашей любви', 'Сарина Боуэн', '2004-12-31', 3333, '1703126260.webp', '1703126260.pdf', 13, '2023-12-20 23:37:40', '2023-12-20 23:37:40', 333),
(22, 'На Императора совершено нападение — кто-то пытался его отравить! Пока он находится без сознания, борьба за престол ожесточается. Министерства враждуют друг с другом, и вокруг воцаряется хаос. А мое положение вице-главы Академии становится шатким…\r\n\r\nНо я не собираюсь сдаваться.\r\n\r\nМеня зовут Фэн Чживэй.\r\n\r\nЯ прошла слишком долгий путь, чтобы сейчас опустить руки.\r\n\r\nС каждым днем обстановка в империи усложняется. И мне приходится сражаться бок о бок рядом с человеком, которого еще совсем недавно считала своим врагом. Я знаю, что справлюсь, так как всегда была сильна духом. Но, кажется, рядом с Нин И я начинаю чувствовать то, чего не испытывала прежде…\r\n\r\nЗнаменитый китайский роман популярной писательницы Тянься Гуйюань! Впервые на русском языке! Тянься Гуйюань занимает первое место в списке ТОП-50 самых влиятельных писательниц китайской интернет-литературы.\r\n\r\nВы окунетесь в атмосферу Древнего Китая с его пленительными пейзажами и роскошными пагодами, окажетесь в центре дворцовых интриг и примите участие в кровавой схватке за трон. Ну и, конечно… влюбитесь. Так искренне, чисто и самоотверженно, как описывают только в китайских романах.\r\n\r\nВас ожидают цветные вклейки с персонажами в традиционных китайских костюмах на мелованной бумаге, запечатанные форзацы и закрашенный обрез!\r\n\r\nНа «Возрождение фениксов» есть шикарная дорама на Netflix с известными актерами, которая уже популярна не только в Китае, но и в России. Дорама стала одним из самых рейтинговых шоу года. Номинирована на лучший драматический сериал на Asian Television Awards и выиграла премию за лучшую операторскую работу на 25 Шанхайском телевизионном фестивале.\r\n\r\nИллюстрация на обложке Екатерины Александрович-Голондзевской (Otraenna).\r\n\r\nВнутренние арты Ольги Брыкиной (Oriollie).\r\nПродолжение романа «Восхождение фениксов».', 'Гуйюань Тянься: Восстание клана Чан', 'Тянься Гуйюань', '2010-10-12', 384, '1703279219.webp', '1703279219.pdf', 11, '2023-12-22 18:06:59', '2023-12-22 18:06:59', 450),
(23, 'На Императора совершено нападение — кто-то пытался его отравить! Пока он находится без сознания, борьба за престол ожесточается. Министерства враждуют друг с другом, и вокруг воцаряется хаос. А мое положение вице-главы Академии становится шатким…\r\n\r\nНо я не собираюсь сдаваться.\r\n\r\nМеня зовут Фэн Чживэй.\r\n\r\nЯ прошла слишком долгий путь, чтобы сейчас опустить руки.\r\n\r\nС каждым днем обстановка в империи усложняется. И мне приходится сражаться бок о бок рядом с человеком, которого еще совсем недавно считала своим врагом. Я знаю, что справлюсь, так как всегда была сильна духом. Но, кажется, рядом с Нин И я начинаю чувствовать то, чего не испытывала прежде…\r\n\r\nЗнаменитый китайский роман популярной писательницы Тянься Гуйюань! Впервые на русском языке! Тянься Гуйюань занимает первое место в списке ТОП-50 самых влиятельных писательниц китайской интернет-литературы.\r\n\r\nВы окунетесь в атмосферу Древнего Китая с его пленительными пейзажами и роскошными пагодами, окажетесь в центре дворцовых интриг и примите участие в кровавой схватке за трон. Ну и, конечно… влюбитесь. Так искренне, чисто и самоотверженно, как описывают только в китайских романах.\r\n\r\nВас ожидают цветные вклейки с персонажами в традиционных китайских костюмах на мелованной бумаге, запечатанные форзацы и закрашенный обрез!\r\n\r\nНа «Возрождение фениксов» есть шикарная дорама на Netflix с известными актерами, которая уже популярна не только в Китае, но и в России. Дорама стала одним из самых рейтинговых шоу года. Номинирована на лучший драматический сериал на Asian Television Awards и выиграла премию за лучшую операторскую работу на 25 Шанхайском телевизионном фестивале.\r\n\r\nИллюстрация на обложке Екатерины Александрович-Голондзевской (Otraenna).\r\n\r\nВнутренние арты Ольги Брыкиной (Oriollie).\r\n\r\nПродолжение романа «Восхождение фениксов».', 'Гуйюань Тянься: Восстание клана Чан', 'Тянься Гуйюань', '2015-02-12', 709, '1703279444.webp', '1703279444.pdf', 12, '2023-12-22 18:10:44', '2023-12-22 18:10:44', 869);

-- --------------------------------------------------------

--
-- Структура таблицы `buys`
--

CREATE TABLE `buys` (
  `id` bigint UNSIGNED NOT NULL,
  `id_book` bigint UNSIGNED NOT NULL,
  `id_user` bigint UNSIGNED NOT NULL,
  `id_method_pays` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `buys`
--

INSERT INTO `buys` (`id`, `id_book`, `id_user`, `id_method_pays`, `created_at`, `updated_at`) VALUES
(6, 17, 3, 7, '2023-12-20 23:38:03', '2023-12-20 23:38:03'),
(7, 18, 3, 7, '2023-12-20 23:52:35', '2023-12-20 23:52:35'),
(8, 21, 3, 6, '2023-12-21 02:17:24', '2023-12-21 02:17:24'),
(9, 19, 3, 4, '2023-12-21 03:47:17', '2023-12-21 03:47:17'),
(10, 20, 3, 4, '2023-12-21 04:48:50', '2023-12-21 04:48:50'),
(11, 23, 3, 6, '2023-12-23 04:02:28', '2023-12-23 04:02:28');

-- --------------------------------------------------------

--
-- Структура таблицы `janrs`
--

CREATE TABLE `janrs` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `janrs`
--

INSERT INTO `janrs` (`id`, `title`, `created_at`, `updated_at`) VALUES
(12, 'Роман', '2023-12-20 23:26:28', '2023-12-20 23:26:28'),
(13, 'Повесть', '2023-12-20 23:26:33', '2023-12-20 23:26:33'),
(14, 'Рассказ', '2023-12-20 23:26:41', '2023-12-20 23:26:41'),
(15, 'Новелла', '2023-12-20 23:26:47', '2023-12-20 23:26:47'),
(16, 'Притча', '2023-12-20 23:26:53', '2023-12-20 23:26:53'),
(17, 'Сказка', '2023-12-20 23:26:57', '2023-12-20 23:26:57'),
(18, 'Драма', '2023-12-20 23:27:05', '2023-12-20 23:27:05'),
(19, 'Комедия', '2023-12-20 23:27:10', '2023-12-20 23:27:10'),
(20, 'Трагедия', '2023-12-20 23:27:17', '2023-12-20 23:27:17'),
(21, 'эпиграмма', '2023-12-20 23:27:24', '2023-12-20 23:27:24'),
(22, 'Кошельки', '2023-12-20 23:29:33', '2023-12-20 23:29:33');

-- --------------------------------------------------------

--
-- Структура таблицы `janrs_to_books`
--

CREATE TABLE `janrs_to_books` (
  `id` bigint UNSIGNED NOT NULL,
  `id_book` bigint UNSIGNED NOT NULL,
  `id_janr` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `janrs_to_books`
--

INSERT INTO `janrs_to_books` (`id`, `id_book`, `id_janr`, `created_at`, `updated_at`) VALUES
(13, 17, 12, '2023-12-20 23:34:33', '2023-12-20 23:34:33'),
(14, 17, 13, '2023-12-20 23:34:33', '2023-12-20 23:34:33'),
(15, 17, 14, '2023-12-20 23:34:33', '2023-12-20 23:34:33'),
(16, 18, 14, '2023-12-20 23:35:26', '2023-12-20 23:35:26'),
(17, 18, 17, '2023-12-20 23:35:26', '2023-12-20 23:35:26'),
(18, 18, 20, '2023-12-20 23:35:26', '2023-12-20 23:35:26'),
(19, 19, 15, '2023-12-20 23:36:16', '2023-12-20 23:36:16'),
(20, 19, 17, '2023-12-20 23:36:16', '2023-12-20 23:36:16'),
(21, 19, 20, '2023-12-20 23:36:16', '2023-12-20 23:36:16'),
(22, 20, 15, '2023-12-20 23:36:59', '2023-12-20 23:36:59'),
(23, 20, 16, '2023-12-20 23:36:59', '2023-12-20 23:36:59'),
(24, 20, 19, '2023-12-20 23:36:59', '2023-12-20 23:36:59'),
(25, 20, 21, '2023-12-20 23:36:59', '2023-12-20 23:36:59'),
(26, 21, 14, '2023-12-20 23:37:40', '2023-12-20 23:37:40'),
(27, 21, 17, '2023-12-20 23:37:40', '2023-12-20 23:37:40'),
(28, 21, 19, '2023-12-20 23:37:40', '2023-12-20 23:37:40'),
(29, 22, 12, '2023-12-22 18:06:59', '2023-12-22 18:06:59'),
(30, 22, 14, '2023-12-22 18:06:59', '2023-12-22 18:06:59'),
(31, 22, 17, '2023-12-22 18:06:59', '2023-12-22 18:06:59'),
(32, 23, 14, '2023-12-22 18:10:44', '2023-12-22 18:10:44'),
(33, 23, 17, '2023-12-22 18:10:44', '2023-12-22 18:10:44'),
(34, 23, 18, '2023-12-22 18:10:44', '2023-12-22 18:10:44');

-- --------------------------------------------------------

--
-- Структура таблицы `method_pays`
--

CREATE TABLE `method_pays` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imgPay` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_typePay` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `method_pays`
--

INSERT INTO `method_pays` (`id`, `title`, `imgPay`, `id_typePay`, `created_at`, `updated_at`) VALUES
(4, 'visa-mc-world', '1703125886.png', 8, '2023-12-20 23:31:26', '2023-12-20 23:31:26'),
(5, 'приватбанк', '1703125907.png', 8, '2023-12-20 23:31:47', '2023-12-20 23:31:47'),
(6, 'онлайн-банк', '1703125917.png', 7, '2023-12-20 23:31:57', '2023-12-20 23:31:57'),
(7, 'сбп', '1703125932.png', 8, '2023-12-20 23:32:12', '2023-12-20 23:32:12'),
(8, 'visa-mc-kzt', '1703125949.png', 8, '2023-12-20 23:32:29', '2023-12-20 23:32:29'),
(9, 'monobank', '1703125960.png', 8, '2023-12-20 23:32:40', '2023-12-20 23:32:40'),
(10, 'юmoney', '1703125975.png', 7, '2023-12-20 23:32:55', '2023-12-20 23:32:55'),
(11, 'union-pay', '1703125986.png', 8, '2023-12-20 23:33:06', '2023-12-20 23:33:06'),
(12, 'perfect-money', '1703125997.png', 7, '2023-12-20 23:33:17', '2023-12-20 23:33:17');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(6, '2013_01_00_000000_create_roles_table', 1),
(7, '2014_10_12_000000_create_users_table', 1),
(8, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(9, '2019_08_19_000000_create_failed_jobs_table', 1),
(40, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(41, '2023_12_20_174638_create_janrs_table', 2),
(42, '2023_12_20_174712_create_publishers_table', 2),
(43, '2023_12_20_174730_create_age_restrictions_table', 2),
(44, '2023_12_20_175226_create_books_table', 2),
(45, '2023_12_20_175227_create_type_pays_table', 2),
(46, '2023_12_20_184652_create_janrs_to_books_table', 2),
(47, '2023_12_20_184653_create_method_pays_table', 2),
(48, '2023_12_20_184806_create_buys_table', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `publishers`
--

CREATE TABLE `publishers` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `publishers`
--

INSERT INTO `publishers` (`id`, `title`, `created_at`, `updated_at`) VALUES
(9, 'АСТ', '2023-12-20 23:27:49', '2023-12-20 23:27:49'),
(10, 'Просвещение', '2023-12-20 23:27:57', '2023-12-20 23:27:57'),
(11, 'РИПОЛ', '2023-12-20 23:28:41', '2023-12-20 23:28:41'),
(12, 'Росмэн', '2023-12-20 23:28:51', '2023-12-20 23:28:51'),
(13, 'Триумф', '2023-12-20 23:29:00', '2023-12-20 23:29:00'),
(14, 'Фламинго', '2023-12-20 23:29:15', '2023-12-20 23:29:15');

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Администратор', NULL, NULL),
(2, 'Пользователь', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `type_pays`
--

CREATE TABLE `type_pays` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `type_pays`
--

INSERT INTO `type_pays` (`id`, `title`, `created_at`, `updated_at`) VALUES
(7, 'Крипта', '2023-12-20 23:29:45', '2023-12-20 23:29:45'),
(8, 'Карта', '2023-12-20 23:29:54', '2023-12-20 23:29:54');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `login` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'banner.jpg',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'avatar.jpg',
  `role_id` bigint UNSIGNED NOT NULL DEFAULT '2',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `birthday`, `phone`, `login`, `banner`, `image`, `role_id`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Равиль', 'Гилязетдинов', '2004-10-12', '79961034643', 'Alirias', 'banner.jpg', 'avatar.jpg', 2, 'raaa@mail.ru', NULL, '$2y$12$FnTz6KX8E9KVEQnvFfoGQOhVv6hFWIt.ZS.TVJ67wTH0ykILfGQcy', NULL, '2023-12-20 11:52:59', '2023-12-20 11:52:59'),
(2, 'фыв', 'фыв', '2222-02-22', '44444', 'asd', 'banner.jpg', 'avatar.jpg', 2, 'asd@mail.ru', NULL, '$2y$12$Fhwf2Q0ojNI8kQ4aUM/6Z.KyPRl1D2g5/2OqSU2N41zf346jE7rnC', NULL, '2023-12-20 11:56:48', '2023-12-20 11:56:48'),
(3, 'Равиль', 'Гилязетдинов', '2004-11-12', '+79961034643', 'Aliriras21', '1703093668.jpg', '1703093668.jpg', 1, 'asdf@mail.ru', NULL, '$2y$12$4BxVsQsJbnsFpeMz4/qmS.wZ9GyhKcLua71q8FGNa7dZ7s3JhMiSW', NULL, '2023-12-20 14:00:19', '2023-12-20 14:34:52'),
(9, 'ффф', 'фффф', '2004-10-12', '+79961034647', 'aaaa', 'banner.jpg', 'avatar.jpg', 2, 'ravaaaaa@mail.ru', NULL, '$2y$12$wK3ytnRfFUm67LuZF3Ayp.hptcsf1W1ZiKTXNWwmIy92rmvT2wfM2', NULL, '2023-12-22 15:18:01', '2023-12-22 15:18:01');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `books_id_publisher_foreign` (`id_publisher`),
  ADD KEY `YearPublishing` (`YearPublishing`);

--
-- Индексы таблицы `buys`
--
ALTER TABLE `buys`
  ADD PRIMARY KEY (`id`),
  ADD KEY `buys_id_book_foreign` (`id_book`),
  ADD KEY `buys_id_user_foreign` (`id_user`),
  ADD KEY `buys_id_method_pays_foreign` (`id_method_pays`);

--
-- Индексы таблицы `janrs`
--
ALTER TABLE `janrs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `janrs_to_books`
--
ALTER TABLE `janrs_to_books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `janrs_to_books_id_book_foreign` (`id_book`),
  ADD KEY `janrs_to_books_id_janr_foreign` (`id_janr`);

--
-- Индексы таблицы `method_pays`
--
ALTER TABLE `method_pays`
  ADD PRIMARY KEY (`id`),
  ADD KEY `method_pays_id_typepay_foreign` (`id_typePay`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `publishers`
--
ALTER TABLE `publishers`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `type_pays`
--
ALTER TABLE `type_pays`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`),
  ADD UNIQUE KEY `users_login_unique` (`login`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT для таблицы `buys`
--
ALTER TABLE `buys`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `janrs`
--
ALTER TABLE `janrs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT для таблицы `janrs_to_books`
--
ALTER TABLE `janrs_to_books`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT для таблицы `method_pays`
--
ALTER TABLE `method_pays`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `publishers`
--
ALTER TABLE `publishers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `type_pays`
--
ALTER TABLE `type_pays`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_id_publisher_foreign` FOREIGN KEY (`id_publisher`) REFERENCES `publishers` (`id`);

--
-- Ограничения внешнего ключа таблицы `buys`
--
ALTER TABLE `buys`
  ADD CONSTRAINT `buys_id_book_foreign` FOREIGN KEY (`id_book`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `buys_id_method_pays_foreign` FOREIGN KEY (`id_method_pays`) REFERENCES `method_pays` (`id`),
  ADD CONSTRAINT `buys_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Ограничения внешнего ключа таблицы `janrs_to_books`
--
ALTER TABLE `janrs_to_books`
  ADD CONSTRAINT `janrs_to_books_id_book_foreign` FOREIGN KEY (`id_book`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `janrs_to_books_id_janr_foreign` FOREIGN KEY (`id_janr`) REFERENCES `janrs` (`id`);

--
-- Ограничения внешнего ключа таблицы `method_pays`
--
ALTER TABLE `method_pays`
  ADD CONSTRAINT `method_pays_id_typepay_foreign` FOREIGN KEY (`id_typePay`) REFERENCES `type_pays` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
