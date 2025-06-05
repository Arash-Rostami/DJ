-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2021 at 05:20 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dj`
--

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_edu` text COLLATE utf8mb4_unicode_ci,
  `text_date` longtext COLLATE utf8mb4_unicode_ci,
  `text_place` longtext COLLATE utf8mb4_unicode_ci,
  `text_course` longtext COLLATE utf8mb4_unicode_ci,
  `title_pro` text COLLATE utf8mb4_unicode_ci,
  `text_pro` text COLLATE utf8mb4_unicode_ci,
  `title_edu_f` text COLLATE utf8mb4_unicode_ci,
  `title_pro_f` text COLLATE utf8mb4_unicode_ci,
  `text_pro_f` text COLLATE utf8mb4_unicode_ci,
  `text_date_f` longtext COLLATE utf8mb4_unicode_ci,
  `text_place_f` longtext COLLATE utf8mb4_unicode_ci,
  `text_course_f` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `title_edu`, `text_date`, `text_place`, `text_course`, `title_pro`, `text_pro`, `title_edu_f`, `title_pro_f`, `text_pro_f`, `text_date_f`, `text_place_f`, `text_course_f`, `created_at`, `updated_at`) VALUES
(1, 'Education', NULL, NULL, NULL, 'Professor', 'Amir Eslami\r\nHamidReza Dibazar\r\nAmir Honarmand\r\nSharif Lotfi\r\nArman Noroozi\r\nAmir MirSaraf\r\nAhmad Pezhman\r\nAli Akbar Ghorbani\r\nDelbar Hakim Agha\r\nAmir Konjani\r\nDominic Murcott\r\nErrollyn Wallen\r\nGwyn Prichard\r\nStephen Montague', 'تحصیلات', 'اساتید', 'امیر اسلامی\r\nحمیدرضا دیباذر\r\nامیر هنرمند\r\nشریف لطفی\r\nآرمان نوروزی\r\nامیر میر سراف\r\nاحمد پژمان\r\nعلی اکبر قربانی\r\nدلبر حکیم آقا\r\nامیر کنجانی\r\nدومینیک مورکوت\r\nارولین والن\r\nگوین پریشارد\r\nاستفان مونتاگ', NULL, NULL, NULL, NULL, '2021-05-04 09:33:37'),
(2, NULL, 'March 199', 'Takht Jamshid Concert, Perspolis — Playe', 'Literature', NULL, NULL, NULL, NULL, NULL, 'شهریور 78 - خرداد 79', 'کنسرت تخت جمشید ، تخت جمشید - نوازند', 'ادبیات', NULL, '2021-04-27 05:38:09'),
(3, NULL, 'September 1999-June 2000', 'Aboozar High School, Shiraz — Diploma', 'Literature', NULL, NULL, NULL, NULL, NULL, 'شهریور 78 - خرداد 79', 'دبیرستان ابوذر ، شیراز - دیپلم\r\n', 'ادبیات', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `homepage`
--

CREATE TABLE `homepage` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `text` text COLLATE utf8mb4_unicode_ci,
  `title_f` text COLLATE utf8mb4_unicode_ci,
  `text_f` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `homepage`
--

INSERT INTO `homepage` (`id`, `title`, `text`, `title_f`, `text_f`, `created_at`, `updated_at`) VALUES
(1, 'Hello...', 'I\'m Davood Jafari, a passionate composer, performer, and teacher, with vision impairment', 'سلام...', 'من داوود جعفری هستم، آهنگساز ، نوازنده، و معلمی پرشور و دارای اختلال بینایی', NULL, '2021-05-04 09:02:47');

-- --------------------------------------------------------

--
-- Table structure for table `me`
--

CREATE TABLE `me` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_me` text COLLATE utf8mb4_unicode_ci,
  `text_me` longtext COLLATE utf8mb4_unicode_ci,
  `title_mis` text COLLATE utf8mb4_unicode_ci,
  `text_mis` longtext COLLATE utf8mb4_unicode_ci,
  `title_me_f` text COLLATE utf8mb4_unicode_ci,
  `text_me_f` longtext COLLATE utf8mb4_unicode_ci,
  `title_mis_f` text COLLATE utf8mb4_unicode_ci,
  `text_mis_f` longtext COLLATE utf8mb4_unicode_ci,
  `pic` text COLLATE utf8mb4_unicode_ci,
  `pic_caption` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `me`
--

INSERT INTO `me` (`id`, `title_me`, `text_me`, `title_mis`, `text_mis`, `title_me_f`, `text_me_f`, `title_mis_f`, `text_mis_f`, `pic`, `pic_caption`, `created_at`, `updated_at`) VALUES
(1, 'Well, about me ....', 'I - as a blind multi-instrumentalists, composer, and music educator – would like to invite you to spend little time browsing my website. I have based my life primarily upon two core concepts: thinking and working. I feel joy and hope in every moment that I breathe. If you are curious enough to discover the reasons, just read the following few lines.\r\nMy days are devoted mainly to learning, reading, composing, and teaching. I enjoy no activity more than adding to my wisdom as well as knowledge. I properly appreciate the existence of human beings while reading books, listening to music, or watching artistic movies. Words fail to explain the sheer joy I feel while teaching. Not only do I enjoy serving others who need me in some ways, but I also take pleasure in learning from my students every day. I have lived in society where there have never been adequate facilities for the blind. As such, I have spent my life devising methods for achieving my goals. The major issues I had to deal with included learning English prior to the age of computer, preparing notes for instruments I used to play, learning the compositional science, harmony for example. Although the lack of facilities has always posed serious concerns in my life, I must admit that I have greaty enjoyed finding ways to overcome my difficulties at the same time. The harder the task, the more fascinating it feels to have it accomplished.', 'My key objectives', '1. Sharing my composition and artistic projects with you. Given the fact that I am an Iranian composer, my primary focus is on Iranian culture, including Persian music, literature, painting, architecture, theater and so forth.\r\n2. Having taught for nearly twenty years, I have a lot to share with you in connection with music education or music appreciation. Nothing is more enjoyable than inviting others to enjoy a piece of music, or a famous novel.\r\n3. As a blind musician, I will pay meticulous attention to Braille music notation. Braille music is comprehensive enough to cover different aspects to music; however, due to the complexity of Braille music, many visually impaired musicians avoid learning it. A blind musician must be sufficiently competent in the theory of music to appreciate all aspects of Braille music. I aim to develop an easy-to-learn course on Braille music with its essential theories. I firmly believe that Braille music appears relatively efficient in some areas and remarkably efficient in some other areas, particularly those related to compositional sciences. Braille music should be simplified or reformed to assist the blind ever more. It is a complex project, which requires international collaboration. The critique I represented on my web page is merely a small beginning.', 'خوب، در مورد من ...', 'اگر امید و شادی نبود، هیچ گاه این سایت را طراحی نمیکردم. شاید این جمله برای معرفی صاحب این سایت نامتعارف باشد اما اگر حتی کمی کنجکاوی شما را بر انگیزد بد نیست دقایقی را به بررسی زندگی من بپردازید. من یک آهنگساز، معلم موسیقی، و نوازنده ی نابینا هستم. خردورزی و تلاش هسته ی اصلی زندگی مرا تشکیل میدهند. من روزانه به آموختن، کتاب خواندن، آهنگسازی کردن، و درس دادن اشتغال دارم. چه چیزی از افزودن به دانش و خرد انسان لذتبخشتر است. آیا چیزی والاتر از کشف اندیشه های خالقان آثار هنری، آهنگسازان، کارگردانان، نویسندگان، نقاشان و غیره وجود دارد؟ تدریس مرا لبریز از شوق میکند چون نه تنها آرمان من کمک به کسانی است که به من احتیاج دارند بلکه هر روز نیز از شاگردانم می آموزم. من در کشوری زیسته ام که از وجود حد اقل امکانات مخصوص نابینایان محروم است. بر این اساس تمام زندگی من صرف کشف روشهای مناسب برای دستیابی به اهدافم شده است. آموختن زبان انگلیسی پیش از عصر کامپیوتر در ایران، آماده کردن نت برای سازهایی که می‌نواختم، آموختن علوم پیچیده ی آهنگسازی نظیر هارمونی، غلبه بر کنکور هنری که بر اساس رشته های بصری سازمان داده شده است و غیره تنها و تنها بخش کوچکی از ماجرا هستند. اگرچه غلبه بر این دشواریها بخش عظیمی از وقت و انرژی مرا به خود مشغول کرد، باید اقرار کنم که همیشه از انجام دادن امور مشکل لذت فراوان برده ام. هر چه سختتر جذابتر.', 'اهداف اصلی از این وبسایت', '1. ترکیب بندی و پروژه های هنری من با شما با توجه به اینکه من یک آهنگساز ایرانی هستم ، تمرکز اصلی من بر فرهنگ ایرانی ، از جمله موسیقی فارسی ، ادبیات ، نقاشی ، معماری ، تئاتر و موارد دیگر است.\r\n2. نزدیک به بیست سال که تدریس کردم ، چیزهای زیادی در رابطه با آموزش موسیقی یا تقدیر از موسیقی با شما به اشتراک می گذارم. هیچ چیز بیشتر از دعوت دیگران برای لذت بردن از یک قطعه موسیقی یا یک رمان معروف لذت بخش نیست.\r\n3. من به عنوان یک نوازنده نابینا ، توجه دقیق به نت موسیقی بریل می کنم. موسیقی بریل به اندازه کافی جامع است که می تواند جنبه های مختلف موسیقی را پوشش دهد. با این حال ، به دلیل پیچیدگی موسیقی بریل ، بسیاری از نوازندگان کم بینا از یادگیری آن اجتناب می کنند. یک نوازنده نابینا باید به اندازه کافی در تئوری موسیقی مهارت داشته باشد تا از همه جنبه های موسیقی بریل قدردانی کند. من قصد دارم یک دوره یادگیری آسان در مورد موسیقی بریل با تئوری های اساسی آن ایجاد کنم. من قاطعانه اعتقاد دارم که موسیقی بریل در بعضی زمینه ها نسبتاً کارآمد و در بعضی از زمینه ها ، به ویژه در زمینه علوم آهنگسازی ، بسیار کارآمد به نظر می رسد. موسیقی بریل باید برای کمک به نابینایان بیش از پیش ساده یا اصلاح شود. این یک پروژه پیچیده است که نیاز به همکاری بین المللی دارد. نقدی که من در صفحه وب خود ارائه دادم فقط یک شروع کوچک است.', 'images/slider/slider//6078fd6ea7ed6869.jpg', 'Hello', NULL, '2021-05-04 09:05:38');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2014_10_12_000000_create_users_table', 1),
(7, '2021_04_12_232347_create_homepage', 2),
(8, '2021_04_15_004152_create_me_table', 3),
(9, '2021_03_27_075409_create_questions_table', 4),
(10, '2021_04_15_004808_create_education_table', 4),
(11, '2021_04_15_005217_create_occupation_table', 4),
(12, '2021_04_15_021951_create_project_table', 4),
(13, '2021_04_15_023733_create_post_table', 4),
(14, '2021_04_16_030453_create_sliders_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `occupation`
--

CREATE TABLE `occupation` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_ocu` text COLLATE utf8mb4_unicode_ci,
  `text_date` longtext COLLATE utf8mb4_unicode_ci,
  `text_place` longtext COLLATE utf8mb4_unicode_ci,
  `text_job` longtext COLLATE utf8mb4_unicode_ci,
  `title_ocu_f` text COLLATE utf8mb4_unicode_ci,
  `text_date_f` longtext COLLATE utf8mb4_unicode_ci,
  `text_place_f` longtext COLLATE utf8mb4_unicode_ci,
  `text_job_f` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `occupation`
--

INSERT INTO `occupation` (`id`, `title_ocu`, `text_date`, `text_place`, `text_job`, `title_ocu_f`, `text_date_f`, `text_place_f`, `text_job_f`, `created_at`, `updated_at`) VALUES
(1, 'Occupation', NULL, NULL, NULL, 'سابقه شغلی', NULL, NULL, NULL, NULL, '2021-05-04 09:34:12'),
(2, NULL, 'March 1998', 'Takht Jamshid Concert, Perspolis — Player', 'Playing accordion', NULL, 'اسفند 77', 'کنسرت تخت جمشید ، تخت جمشید - نوازنده', '1', '2021-04-27 05:15:44', '2021-04-27 05:47:52'),
(4, NULL, 'March 1998', 'Takht Jamshid Concert, Perspolis — Player', 'Playing accordion', NULL, 'اسفند 77', 'کنسرت تخت جمشید ، تخت جمشید - نوازنده', '2', '2021-04-27 05:56:54', '2021-04-27 05:56:54'),
(6, NULL, 'March 1998', 'Takht Jamshid Concert, Perspolis — Player', 'Playing accordion', NULL, 'اسفند 77', 'کنسرت تخت جمشید ، تخت جمشید - نوازنده', '4', '2021-04-27 06:57:33', '2021-04-27 06:57:33'),
(7, NULL, 'March 1998', 'Takht Jamshid Concert, Perspolis — Player', 'Playing accordion', NULL, 'اسفند 77', 'کنسرت تخت جمشید ، تخت جمشید - نوازنده', '5', '2021-04-27 06:57:48', '2021-04-27 06:57:48'),
(8, NULL, '1', 'Takht Jamshid Concert, Perspolis — Player', 'Playing accordion', NULL, 'اسفند 77', 'کنسرت تخت جمشید ، تخت جمشید - نوازنده', '6', '2021-04-27 06:58:03', '2021-04-27 06:58:03'),
(9, NULL, 'March 1998', 'Takht Jamshid Concert, Perspolis — Player', 'Playing accordion', NULL, 'اسفند 77', 'کنسرت تخت جمشید ، تخت جمشید - نوازنده', '7', '2021-04-27 06:58:15', '2021-04-27 06:58:15'),
(10, NULL, 'March 1998', 'Takht Jamshid Concert, Perspolis — Player', 'Playing accordion', NULL, 'اسفند 77', 'کنسرت تخت جمشید ، تخت جمشید - نوازنده', '8', '2021-04-27 06:58:16', '2021-04-27 06:58:16'),
(11, NULL, 'March 1998', 'Takht Jamshid Concert, Perspolis — Player', 'Playing accordion', NULL, 'اسفند 77', '4', '9', '2021-04-27 06:58:28', '2021-04-27 06:58:28');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_page` text COLLATE utf8mb4_unicode_ci,
  `title_post` text COLLATE utf8mb4_unicode_ci,
  `text_post` longtext COLLATE utf8mb4_unicode_ci,
  `pic` text COLLATE utf8mb4_unicode_ci,
  `pic_caption` longtext COLLATE utf8mb4_unicode_ci,
  `title_page_f` text COLLATE utf8mb4_unicode_ci,
  `title_post_f` text COLLATE utf8mb4_unicode_ci,
  `text_post_f` longtext COLLATE utf8mb4_unicode_ci,
  `pic_f` text COLLATE utf8mb4_unicode_ci,
  `pic_caption_f` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title_page`, `title_post`, `text_post`, `pic`, `pic_caption`, `title_page_f`, `title_post_f`, `text_post_f`, `pic_f`, `pic_caption_f`, `created_at`, `updated_at`) VALUES
(1, 'Blogs - Posts', NULL, NULL, NULL, NULL, 'وبلاگ - پست ها', NULL, NULL, NULL, NULL, NULL, '2021-05-04 09:40:17'),
(3, NULL, 'First post', 'As the official post-game place to go for local sports teams, BW&amp;R offers kids (and attention hungry adults) the opportunity to have their own post-game interview that they, and their parents, can share with family and friends. With a simple, branded backdrop, table, mic (fake) and a camera phone, kids are able to create an authentic feeling post game interview just like the pros. Next to each post game booth will be a set of pre-written questions that the “media” can ask the athletes after the game.', 'images/post/608780b3820294K-Benches-Photo-Download1.jpg', 'pic', NULL, 'پست اول 1\r\n', '\r\nدر فهم چگونگی پیدایش موسیقی همواره داستان ها و افسانه های بی شماری نقل شده است داستان باد ، پیچشش به روی استخوان یا دمدیده شدن در آن ، صدای آبشار و ...این شواهد، داشتن هر حدس و گمانی را از ما سلب می کند.موسیقی، خوانش موسیقی، دست یابی به موسیقی، تماماین افکار و ایده های مختلف را در چه چهار چوبی بگنجانیم که متعلق تمامی افراد جهان باشد؟سخن بسیار ساده یا سخن علمی و منطقی؟هیچجوابی تا کنون به این سوال ساده داده نشده است موسیقی چیست؟ برای برتری دانش، هر اندیشمند با توجه به دانش خود مقاله ای تالیف و معنای موسیقی را همان طور که خود می بیند به سرایش در میآورد.تکرار بیهوده ی مقالات و بحث هایی اینگونه برای هیچ فردی جواب گو نیست.به درستی نمی توان باور داشت که موسیقی برای من همان معنی را داراست که انسانی با شرایط کاملا متفاوت از واژه ی همسان موسیقی برداشتی برابر داشته باشد.شاید موسیقی او صدای حیوانات، هی هی چوپان، صدای ریسه رفتن دختر بچه ای بازیگوش باشد یا چون صحبت کلیشه ای هرروزه صدای ابشار.موسیقی چیست؟بیان احساساتاست؟مضحک ترین حرف دنیای قدیم! اگر احساس است یعنی منطق نیست ، ریاضی نیست، یعنی هرچه پیش آمد خوش آمد یعنی هرچه احساس گفت آری است؟چه کسی جواب را به ما نشان خواهد داد جوابی سخت نقد پذیر چه کسی می تواند موسیقی را، فهمی را برای ذهن کنجکاو ونقادی در آن سوی آبها توضیح دهد؟با حرکتی آرام به سوی تاریخچه ی نقد حرکت می کنیم به گونه ای که تاریخ چند هزار ساله ای را ورق بزنیم', 'images/post/608780b3820294K-Benches-Photo-Download1.jpg', 'pic', '2021-04-27 10:10:43', '2021-04-27 10:10:43'),
(4, NULL, 'Second Post', 'As the official post-game place to go for local sports teams, BW&amp;R offers kids (and attention hungry adults) the opportunity to have their own post-game interview that they, and their parents, can share with family and friends. With a simple, branded backdrop, table, mic (fake) and a camera phone, kids are able to create an authentic feeling post game interview just like the pros. Next to each post game booth will be a set of pre-written questions that the “media” can ask the athletes after the game.', 'images/post/608781e716d27blog-01.jpg', '2', NULL, 'پست اول  2', '\r\nدر فهم چگونگی پیدایش موسیقی همواره داستان ها و افسانه های بی شماری نقل شده است داستان باد ، پیچشش به روی استخوان یا دمدیده شدن در آن ، صدای آبشار و ...این شواهد، داشتن هر حدس و گمانی را از ما سلب می کند.موسیقی، خوانش موسیقی، دست یابی به موسیقی، تماماین افکار و ایده های مختلف را در چه چهار چوبی بگنجانیم که متعلق تمامی افراد جهان باشد؟سخن بسیار ساده یا سخن علمی و منطقی؟هیچجوابی تا کنون به این سوال ساده داده نشده است موسیقی چیست؟ برای برتری دانش، هر اندیشمند با توجه به دانش خود مقاله ای تالیف و معنای موسیقی را همان طور که خود می بیند به سرایش در میآورد.تکرار بیهوده ی مقالات و بحث هایی اینگونه برای هیچ فردی جواب گو نیست.به درستی نمی توان باور داشت که موسیقی برای من همان معنی را داراست که انسانی با شرایط کاملا متفاوت از واژه ی همسان موسیقی برداشتی برابر داشته باشد.شاید موسیقی او صدای حیوانات، هی هی چوپان، صدای ریسه رفتن دختر بچه ای بازیگوش باشد یا چون صحبت کلیشه ای هرروزه صدای ابشار.موسیقی چیست؟بیان احساساتاست؟مضحک ترین حرف دنیای قدیم! اگر احساس است یعنی منطق نیست ، ریاضی نیست، یعنی هرچه پیش آمد خوش آمد یعنی هرچه احساس گفت آری است؟چه کسی جواب را به ما نشان خواهد داد جوابی سخت نقد پذیر چه کسی می تواند موسیقی را، فهمی را برای ذهن کنجکاو ونقادی در آن سوی آبها توضیح دهد؟با حرکتی آرام به سوی تاریخچه ی نقد حرکت می کنیم به گونه ای که تاریخ چند هزار ساله ای را ورق بزنیم', 'images/post/608781e716d27blog-01.jpg', '2', '2021-04-27 10:15:51', '2021-04-27 10:15:51'),
(5, NULL, 'Third Post', 'As the official post-game place to go for local sports teams, BW&amp;R offers kids (and attention hungry adults) the opportunity to have their own post-game interview that they, and their parents, can share with family and friends. With a simple, branded backdrop, table, mic (fake) and a camera phone, kids are able to create an authentic feeling post game interview just like the pros. Next to each post game booth will be a set of pre-written questions that the “media” can ask the athletes after the game.', 'images/post/608782ebd5934blog-02.jpg', '3', NULL, 'پست اول  3', '\r\nدر فهم چگونگی پیدایش موسیقی همواره داستان ها و افسانه های بی شماری نقل شده است داستان باد ، پیچشش به روی استخوان یا دمدیده شدن در آن ، صدای آبشار و ...این شواهد، داشتن هر حدس و گمانی را از ما سلب می کند.موسیقی، خوانش موسیقی، دست یابی به موسیقی، تماماین افکار و ایده های مختلف را در چه چهار چوبی بگنجانیم که متعلق تمامی افراد جهان باشد؟سخن بسیار ساده یا سخن علمی و منطقی؟هیچجوابی تا کنون به این سوال ساده داده نشده است موسیقی چیست؟ برای برتری دانش، هر اندیشمند با توجه به دانش خود مقاله ای تالیف و معنای موسیقی را همان طور که خود می بیند به سرایش در میآورد.تکرار بیهوده ی مقالات و بحث هایی اینگونه برای هیچ فردی جواب گو نیست.به درستی نمی توان باور داشت که موسیقی برای من همان معنی را داراست که انسانی با شرایط کاملا متفاوت از واژه ی همسان موسیقی برداشتی برابر داشته باشد.شاید موسیقی او صدای حیوانات، هی هی چوپان، صدای ریسه رفتن دختر بچه ای بازیگوش باشد یا چون صحبت کلیشه ای هرروزه صدای ابشار.موسیقی چیست؟بیان احساساتاست؟مضحک ترین حرف دنیای قدیم! اگر احساس است یعنی منطق نیست ، ریاضی نیست، یعنی هرچه پیش آمد خوش آمد یعنی هرچه احساس گفت آری است؟چه کسی جواب را به ما نشان خواهد داد جوابی سخت نقد پذیر چه کسی می تواند موسیقی را، فهمی را برای ذهن کنجکاو ونقادی در آن سوی آبها توضیح دهد؟با حرکتی آرام به سوی تاریخچه ی نقد حرکت می کنیم به گونه ای که تاریخ چند هزار ساله ای را ورق بزنیم', 'images/post/608782ebd5934blog-02.jpg', '3', '2021-04-27 10:20:11', '2021-04-27 10:20:11'),
(6, NULL, 'Fourth post', 'As the official post-game place to go for local sports teams, BW&amp;R offers kids (and attention hungry adults) the opportunity to have their own post-game interview that they, and their parents, can share with family and friends. With a simple, branded backdrop, table, mic (fake) and a camera phone, kids are able to create an authentic feeling post game interview just like the pros. Next to each post game booth will be a set of pre-written questions that the “media” can ask the athletes after the game.', 'images/post/608a111db921f374644.jpg', 'Fourth post', NULL, 'پست اول  4', '\r\nدر فهم چگونگی پیدایش موسیقی همواره داستان ها و افسانه های بی شماری نقل شده است داستان باد ، پیچشش به روی استخوان یا دمدیده شدن در آن ، صدای آبشار و ...این شواهد، داشتن هر حدس و گمانی را از ما سلب می کند.موسیقی، خوانش موسیقی، دست یابی به موسیقی، تماماین افکار و ایده های مختلف را در چه چهار چوبی بگنجانیم که متعلق تمامی افراد جهان باشد؟سخن بسیار ساده یا سخن علمی و منطقی؟هیچجوابی تا کنون به این سوال ساده داده نشده است موسیقی چیست؟ برای برتری دانش، هر اندیشمند با توجه به دانش خود مقاله ای تالیف و معنای موسیقی را همان طور که خود می بیند به سرایش در میآورد.تکرار بیهوده ی مقالات و بحث هایی اینگونه برای هیچ فردی جواب گو نیست.به درستی نمی توان باور داشت که موسیقی برای من همان معنی را داراست که انسانی با شرایط کاملا متفاوت از واژه ی همسان موسیقی برداشتی برابر داشته باشد.شاید موسیقی او صدای حیوانات، هی هی چوپان، صدای ریسه رفتن دختر بچه ای بازیگوش باشد یا چون صحبت کلیشه ای هرروزه صدای ابشار.موسیقی چیست؟بیان احساساتاست؟مضحک ترین حرف دنیای قدیم! اگر احساس است یعنی منطق نیست ، ریاضی نیست، یعنی هرچه پیش آمد خوش آمد یعنی هرچه احساس گفت آری است؟چه کسی جواب را به ما نشان خواهد داد جوابی سخت نقد پذیر چه کسی می تواند موسیقی را، فهمی را برای ذهن کنجکاو ونقادی در آن سوی آبها توضیح دهد؟با حرکتی آرام به سوی تاریخچه ی نقد حرکت می کنیم به گونه ای که تاریخ چند هزار ساله ای را ورق بزنیم', 'images/post/608a111db921f374644.jpg', 'Fourth post', '2021-04-29 08:51:26', '2021-04-29 08:51:26');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_project` text COLLATE utf8mb4_unicode_ci,
  `text_project` longtext COLLATE utf8mb4_unicode_ci,
  `date_project` longtext COLLATE utf8mb4_unicode_ci,
  `audio_address` longtext COLLATE utf8mb4_unicode_ci,
  `title_project_f` text COLLATE utf8mb4_unicode_ci,
  `text_project_f` longtext COLLATE utf8mb4_unicode_ci,
  `date_project_f` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title_project`, `text_project`, `date_project`, `audio_address`, `title_project_f`, `text_project_f`, `date_project_f`, `created_at`, `updated_at`) VALUES
(1, 'Projects', NULL, NULL, NULL, 'پروژه ها', NULL, NULL, NULL, '2021-05-04 09:39:21'),
(2, NULL, 'Selat for four voices - ', '2021', ' ', NULL, 'سلات برای 4 صدا -  ', '2021', '2021-04-19 02:28:35', '2021-04-20 09:14:12'),
(3, NULL, 'Sheshgah for six accordions and electronic  ', '2020', NULL, NULL, 'ششگاه برای شش آکاردیون و الکترونیک', '2020', '2021-04-19 03:06:27', '2021-04-20 09:20:46'),
(4, NULL, 'Seven cities of Persian music for string quartet, Iranian quartet and voice five movements and four interludes', '2020', 'NULL', NULL, 'هفت شهر موسیقی ایرانی برای کوارتت زهی ، کوارتت ایرانی و صدای پنج حرکت و چهار مدخل  ', '2020', '2021-04-19 03:08:25', '2021-04-20 09:20:46'),
(5, NULL, '176 for symphonic orchestra', '2020', 'audio/projects/', NULL, '176 برای ارکستر سمفونیک', '2020', '2021-04-19 03:10:26', '2021-04-19 03:10:26'),
(6, NULL, 'Whirling cycles for percussion ensemble', '2020', 'audio/projects/607c92dba12d7end-of-affair-audio.mp3', NULL, 'چرخه های چرخشی برای گروه کوبه ای', '2020', '2021-04-19 03:13:15', '2021-04-19 03:13:15'),
(8, NULL, 'Zoorkhaneh for Iranian ensemble, viola, percussion, singer, dancer and video', '2020', 'audio/projects/607c932e8a10cShadmehr-Aghili-Bi-Ehsas.mp3', NULL, 'زورخانه برای گروه ایرانی ، ویولا ، سازهای کوبه ای ، خواننده ، رقصنده و ویدیو', '2020', '2021-04-19 03:14:38', '2021-04-19 03:14:38'),
(10, NULL, 'Abeyance solo for the cello', '2020', 'audio/projects/607c984ef3c7eBefour (Zayn Malik)-(SpaceMaza.com).mp3', NULL, 'انفرادی انفرادی برای ویولن سل', '2020', '2021-04-19 03:36:31', '2021-04-19 03:36:31'),
(11, NULL, 'From the heart of the desert for oboe and harp', '2020', 'audio/projects/607c98b826d3bal035_mind_against_walking_away_2981475022800627242.mp3', NULL, 'از دل کویر برای آبوا و چنگ', '2020', '2021-04-19 03:38:16', '2021-04-19 03:38:16'),
(12, NULL, 'Sound poetry no for solo voice', '2019', 'audio/projects/607c9c015401fend-of-affair-audio.mp3', NULL, 'شعر صدا نه برای صدای انفرادی', '2019', '2021-04-19 03:52:17', '2021-04-19 03:52:17'),
(13, NULL, 'Sound poetry no 1 for voice, Braille note taker, and electronic', '2019', ' ', NULL, 'شعر صدا شماره 1 برای صدا ، یادداشت بریل و الکترونیکی', '2019', '2021-04-19 03:54:24', '2021-04-19 03:54:24'),
(14, NULL, 'Panjgah for flutes family', '2019', ' ', NULL, 'پنجگاه برای خانواده فلوت', '2019', '2021-04-19 10:02:14', '2021-04-19 10:02:14'),
(15, NULL, 'Iranian colors for chamber ensemble', '2019', 'audio/projects/607cf2f14d59fal035_mind_against_walking_away_2981475022800627242.mp3', NULL, 'رنگهای ایرانی برای گروه مجلسی', '2019', '2021-04-19 10:03:13', '2021-04-19 10:03:13'),
(16, NULL, 'Dargha for soprano, harp, clarinet and double bass', '2019', NULL, NULL, 'درگه برای سوپرانو ، چنگ ، ​​کلارینت و کنترباس', '2019', '2021-04-19 10:21:00', '2021-04-19 10:21:00'),
(17, NULL, 'Elegy for the spring for string quartet', '2019', 'audio/projects/607cf790ce51fal035_mind_against_walking_away_2981475022800627242.mp3', NULL, 'مرثیه بهاری برای کوارتت زهی', '2019', '2021-04-19 10:22:56', '2021-04-19 10:22:56');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` enum('class','cooperation','question') COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `type`, `name`, `phone`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'class', 'Arash', '09122398772', 'davoud.jafari@gmail.com', 'Hello', '2021-04-22 10:04:56', '2021-04-22 10:04:56'),
(2, 'cooperation', 'arash', '09122398772', 'admin@admin.com', 'test 2', '2021-04-22 10:05:45', '2021-04-22 10:05:45'),
(5, 'class', 'fonts', '09122398772', 'arashtest@test.com', 'odnwienciwencikew', '2021-04-23 02:26:55', '2021-04-23 02:26:55'),
(6, 'class', 'dj', '09122398772', 'arashtest@test.com', 'jclsdncs', '2021-04-23 10:52:06', '2021-04-23 10:52:06'),
(7, 'question', 'ds', '09122398772', 'arashrostami@time-gr.com', 'jed;wpjdwe', '2021-04-23 10:52:27', '2021-04-23 10:52:27');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `caption` text COLLATE utf8mb4_unicode_ci,
  `picture` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `caption`, `picture`, `created_at`, `updated_at`) VALUES
(6, 'It is a photo of slider showing Davood standing while holding a mirror before a lady', 'images/slider/6079026b2ae9eimg-01.jpg', '2021-04-16 10:20:11', '2021-04-16 10:20:11'),
(7, 'It is a photo of slider showing Davood standing while holding a mirror in the middle of a concert hall', 'images/slider/607902a59496cimg-02.jpg', '2021-04-16 10:21:09', '2021-04-16 10:21:09'),
(8, 'It is a photo of slider showing Davood standing while holding a mirror', 'images/slider/607902c5e58b0img-03.jpg', '2021-04-16 10:21:41', '2021-04-16 10:21:41'),
(9, 'It is a photo of slider showing Davood standing while holding a mirror from another angle', 'images/slider/607902e01b1d9img-04.jpg', '2021-04-16 10:22:08', '2021-04-16 10:22:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Davoud Jafari', 'davoud.jafari@gmail.com', '$2y$10$pPvHxUis17oar4OPs.JwieXUIGNpj3ArwlT7Q2UNCg74YAfIfOK0O', '2021-04-12 02:13:56', '2021-04-12 02:13:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homepage`
--
ALTER TABLE `homepage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `me`
--
ALTER TABLE `me`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `occupation`
--
ALTER TABLE `occupation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `homepage`
--
ALTER TABLE `homepage`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `me`
--
ALTER TABLE `me`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `occupation`
--
ALTER TABLE `occupation`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
