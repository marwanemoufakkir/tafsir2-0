/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE IF NOT EXISTS `laravel` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `laravel`;

CREATE TABLE IF NOT EXISTS `elastic_migrations` (
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DELETE FROM `elastic_migrations`;
/*!40000 ALTER TABLE `elastic_migrations` DISABLE KEYS */;
INSERT INTO `elastic_migrations` (`migration`, `batch`) VALUES
	('2022_06_21_074030_create_my_index', 1);
/*!40000 ALTER TABLE `elastic_migrations` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DELETE FROM `failed_jobs`;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DELETE FROM `migrations`;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2022_06_13_064214_create_surahs_table', 2),
	(6, '2019_15_12_112000_create_elastic_migrations_table', 3);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DELETE FROM `password_resets`;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DELETE FROM `personal_access_tokens`;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `surahs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `arabic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DELETE FROM `surahs`;
/*!40000 ALTER TABLE `surahs` DISABLE KEYS */;
INSERT INTO `surahs` (`id`, `arabic`, `latin`, `created_at`, `updated_at`) VALUES
	(1, 'سورة الفاتحة', 'Al-Fatiha', NULL, NULL),
	(2, 'سورة البقرة', 'Al-Baqara', NULL, NULL),
	(3, 'سورة آل عمران', 'Aal-e-Imran', NULL, NULL),
	(4, 'سورة النساء', 'An-Nisa', NULL, NULL),
	(5, 'سورة المائدة', 'Al-Maeda', NULL, NULL),
	(6, 'سورة الأنعام', 'Al-Anaam', NULL, NULL),
	(7, 'سورة الأعراف', 'Al-Araf', NULL, NULL),
	(8, 'سورة الأنفال', 'Al-Anfal', NULL, NULL),
	(9, 'سورة التوبة', 'At-Taubah', NULL, NULL),
	(10, 'سورة يونس', 'Yunus', NULL, NULL),
	(11, 'سورة هود', 'Hud', NULL, NULL),
	(12, 'سورة يوسف', 'Yusuf', NULL, NULL),
	(13, 'سورة الرعد', 'Ar-Rad', NULL, NULL),
	(14, 'سورة إبراهيم', 'Ibrahim', NULL, NULL),
	(15, 'سورة الحجر', 'Al-Hijr', NULL, NULL),
	(16, 'سورة النحل', 'An-Nahl', NULL, NULL),
	(17, 'سورة الإسراء', 'Al-Isra', NULL, NULL),
	(18, 'سورة الكهف', 'Al-Kahf', NULL, NULL),
	(19, 'سورة مريم', 'Maryam', NULL, NULL),
	(20, 'سورة طه', 'Taha', NULL, NULL),
	(21, 'سورة الأنبياء', 'Al-Anbiya', NULL, NULL),
	(22, 'سورة الحج', 'Al-Hajj', NULL, NULL),
	(23, 'سورة المؤمنون', 'Al-Mumenoon', NULL, NULL),
	(24, 'سورة النور', 'An-Noor', NULL, NULL),
	(25, 'سورة الفرقان', 'Al-Furqan', NULL, NULL),
	(26, 'سورة الشعراء', 'Ash-Shuara', NULL, NULL),
	(27, 'سورة النمل', 'An-Naml', NULL, NULL),
	(28, 'سورة القصص', 'Al-Qasas', NULL, NULL),
	(29, 'سورة العنكبوت', 'Al-Ankaboot', NULL, NULL),
	(30, 'سورة الروم', 'Ar-Room', NULL, NULL),
	(31, 'سورة لقمان', 'Luqman', NULL, NULL),
	(32, 'سورة السجدة', 'As-Sajda', NULL, NULL),
	(33, 'سورة الأحزاب', 'Al-Ahzab', NULL, NULL),
	(34, 'سورة سبأ', 'Saba', NULL, NULL),
	(35, 'سورة فاطر', 'Fatir', NULL, NULL),
	(36, 'سورة يس', 'Ya Seen', NULL, NULL),
	(37, 'سورة الصافات', 'As-Saaffat', NULL, NULL),
	(38, 'سورة ص', 'Sad', NULL, NULL),
	(39, 'سورة الزمر', 'Az-Zumar', NULL, NULL),
	(40, 'سورة غافر', 'Ghafir', NULL, NULL),
	(41, 'سورة فصلت', 'Fussilat', NULL, NULL),
	(42, 'سورة الشورى', 'Ash-Shura', NULL, NULL),
	(43, 'سورة الزخرف', 'Az-Zukhruf', NULL, NULL),
	(44, 'سورة الدخان', 'Ad-Dukhan', NULL, NULL),
	(45, 'سورة الجاثية', 'Al-Jathiya', NULL, NULL),
	(46, 'سورة الأحقاف', 'Al-Ahqaf', NULL, NULL),
	(47, 'سورة محمد', 'Muhammad', NULL, NULL),
	(48, 'سورة الفتح', 'Al-Fath', NULL, NULL),
	(49, 'سورة الحجرات', 'Al-Hujraat', NULL, NULL),
	(50, 'سورة ق', 'Qaf', NULL, NULL),
	(51, 'سورة الذاريات', 'Adh-Dhariyat', NULL, NULL),
	(52, 'سورة الطور', 'At-tur', NULL, NULL),
	(53, 'سورة النجم', 'An-Najm', NULL, NULL),
	(54, 'سورة القمر', 'Al-Qamar', NULL, NULL),
	(55, 'سورة الرحمن', 'Al-Rahman', NULL, NULL),
	(56, 'سورة الواقعة', 'Al-Waqia', NULL, NULL),
	(57, 'سورة الحديد', 'Al-Hadid', NULL, NULL),
	(58, 'سورة المجادلة', 'Al-Mujadila', NULL, NULL),
	(59, 'سورة الحشر', 'Al-Hashr', NULL, NULL),
	(60, 'سورة الممتحنة', 'Al-Mumtahina', NULL, NULL),
	(61, 'سورة الصف', 'As-Saff', NULL, NULL),
	(62, 'سورة الجمعة', 'Al-Jumua', NULL, NULL),
	(63, 'سورة المنافقون', 'Al-Munafiqoon', NULL, NULL),
	(64, 'سورة التغابن', 'At-Taghabun', NULL, NULL),
	(65, 'سورة الطلاق', 'At-Talaq', NULL, NULL),
	(66, 'سورة التحريم', 'At-Tahrim', NULL, NULL),
	(67, 'سورة الملك', 'Al-Mulk', NULL, NULL),
	(68, 'سورة القلم', 'Al-Qalam', NULL, NULL),
	(69, 'سورة الحاقة', 'Al-Haaqqa', NULL, NULL),
	(70, 'سورة المعارج', 'Al-Maarij', NULL, NULL),
	(71, 'سورة نوح', 'Nooh', NULL, NULL),
	(72, 'سورة الجن', 'Al-Jinn', NULL, NULL),
	(73, 'سورة المزمل', 'Al-Muzzammil', NULL, NULL),
	(74, 'سورة المدثر', 'Al-Muddathir', NULL, NULL),
	(75, 'سورة القيامة', 'Al-Qiyama', NULL, NULL),
	(76, 'سورة الإنسان', 'Al-Insan', NULL, NULL),
	(77, 'سورة المرسلات', 'Al-Mursalat', NULL, NULL),
	(78, 'سورة النبأ', 'An-Naba', NULL, NULL),
	(79, 'سورة النازعات', 'An-Naziat', NULL, NULL),
	(80, 'سورة عبس', 'Abasa', NULL, NULL),
	(81, 'سورة التكوير', 'At-Takwir', NULL, NULL),
	(82, 'سورة الإنفطار', 'AL-Infitar', NULL, NULL),
	(83, 'سورة المطففين', 'Al-Mutaffifin', NULL, NULL),
	(84, 'سورة الانشقاق', 'Al-Inshiqaq', NULL, NULL),
	(85, 'سورة البروج', 'Al-Burooj', NULL, NULL),
	(86, 'سورة الطارق', 'At-Tariq', NULL, NULL),
	(87, 'سورة الأعلى', 'Al-Ala', NULL, NULL),
	(88, 'سورة الغاشية', 'Al-Ghashiya', NULL, NULL),
	(89, 'سورة الفجر', 'Al-Fajr', NULL, NULL),
	(90, 'سورة البلد', 'Al-Balad', NULL, NULL),
	(91, 'سورة الشمس', 'Ash-Shams', NULL, NULL),
	(92, 'سورة الليل', 'Al-Lail', NULL, NULL),
	(93, 'سورة الضحى', 'Ad-Dhuha', NULL, NULL),
	(94, 'سورة الشرح', 'Al-Inshirah', NULL, NULL),
	(95, 'سورة التين', 'At-Tin', NULL, NULL),
	(96, 'سورة العلق', 'Al-Alaq', NULL, NULL),
	(97, 'سورة القدر', 'Al-Qadr', NULL, NULL),
	(98, 'سورة البينة', 'Al-Bayyina', NULL, NULL),
	(99, 'سورة الزلزلة', 'Al-Zalzala', NULL, NULL),
	(100, 'سورة العاديات', 'Al-Adiyat', NULL, NULL),
	(101, 'سورة القارعة', 'Al-Qaria', NULL, NULL),
	(102, 'سورة التكاثر', 'At-Takathur', NULL, NULL),
	(103, 'سورة العصر', 'Al-Asr', NULL, NULL),
	(104, 'سورة الهمزة', 'Al-Humaza', NULL, NULL),
	(105, 'سورة الفيل', 'Al-fil', NULL, NULL),
	(106, 'سورة قريش', 'Quraish', NULL, NULL),
	(107, 'سورة الماعون', 'Al-Maun', NULL, NULL),
	(108, 'سورة الكوثر', 'Al-Kauther', NULL, NULL),
	(109, 'سورة الكافرون', 'Al-Kafiroon', NULL, NULL),
	(110, 'سورة النصر', 'An-Nasr', NULL, NULL),
	(111, 'سورة المسد', 'Al-Masadd', NULL, NULL),
	(112, 'سورة الإخلاص', 'Al-Ikhlas', NULL, NULL),
	(113, 'سورة الفلق', 'Al-Falaq', NULL, NULL),
	(114, 'سورة الناس', 'An-Nas', NULL, NULL);
/*!40000 ALTER TABLE `surahs` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
