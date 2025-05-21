-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 21-05-2025 a las 20:22:38
-- Versión del servidor: 8.3.0
-- Versión de PHP: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `fuvidit_web2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cache`
--

DROP TABLE IF EXISTS `cache`;
CREATE TABLE IF NOT EXISTS `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
CREATE TABLE IF NOT EXISTS `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `image_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selected_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jobs`
--

DROP TABLE IF EXISTS `jobs`;
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
CREATE TABLE IF NOT EXISTS `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(33, '0001_01_01_000000_create_users_table', 1),
(34, '0001_01_01_000001_create_cache_table', 1),
(35, '0001_01_01_000002_create_jobs_table', 1),
(36, '2025_02_11_174311_create_noticias_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

DROP TABLE IF EXISTS `noticias`;
CREATE TABLE IF NOT EXISTS `noticias` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `descripcion`, `link`, `image`, `fecha`, `created_at`, `updated_at`) VALUES
(25, 'FUVIDIT participa en las mesas de trabajo del Instituto Venezolano de Investigaciones Científicas (IVIC)', 'La Fundación Venezolana de Investigación Desarrollo e Innovación para el Transporte, participo en las mesas de trabajo referentes a la agenda científica en los espacios acuáticos.', 'https://www.instagram.com/p/DBNH6eTIvIo/?igsh=MXU1MWR3emw1MWNsdg==', 'prensa/foHwzbgylxhGxwDzYUtgxpRvlhnH6ZkeuRhewUaM.jpg', '16-10-2024 12:20 PM', '2025-05-13 19:43:16', '2025-05-13 19:43:16'),
(26, 'FUVIDIT realiza un recorrido por las instalaciones de la C.A Metro de Valencia', 'La Fundación Venezolana de Investigación Desarrollo e Innovación para el Transporte, realizo una visita a las instalaciones del Metro de Valencia, para supervisar el funcionamiento de la brida de sujeción de empalme de este sistema ferroviario y contemplar los diferentes proyectos para el crecimiento del mismo.', 'https://www.instagram.com/p/DBgaYd5ReOn/?igsh=MWc4ZWt6OHZzZWh2Mw==', 'prensa/YHVAciPL9jad1xFERV4ebxczTS5Metb0xpVcX7Ys.jpg', '24-10-2024 2:00 PM', '2025-05-13 19:52:42', '2025-05-13 19:52:42'),
(27, 'FUVIDIT, realizó inspección técnica a las instalaciones de Metro Maracaibo', 'El equipo de la Fundación Venezolana de Investigación Desarrollo e Innovación para el Transporte, realizó una visita técnica a las instalaciones del Metro de Maracaibo, para hacer la inspección de diferentes proyectos de sustitución de importaciones e innovación en el transporte ferroviario.', 'https://www.instagram.com/reel/DCozLFPRcSc/?igsh=cmRibGlhaTBxaWwz', 'prensa/G8t3Mi8C082tBFhJH5Avob6vex0t6snFTRaDVEKl.jpg', '21-11-2024 1:00 PM', '2025-05-13 19:54:11', '2025-05-13 19:54:11'),
(28, 'FUVIDIT, visitó las instalaciones del departamento de electrificación del IFE', 'Con los planes de seguir fortaleciendo los sistemas ferroviarios del país, la FUVIDIT realizó una inspección técnica en el departamento de electrificación del Instituto de Ferrocarriles del Estado, para poder conversar con los especialistas en el tema y poder visibilizar cuales son las necesidades que presentan en esta área.', 'https://www.instagram.com/p/DCsLo1JhNUI/?img_index=2&igsh=MWM2N3hicXZ2N2RxMg==', 'prensa/Hg8V670M00QdF64y3kNEdaHKyccmmHdzG5H4tFJ8.jpg', '23-11-2024 11:00 AM', '2025-05-13 19:58:02', '2025-05-13 19:58:38'),
(29, 'La FUVIDIT, celebra el sexto aniversario de su creación.', 'La Fundación Venezolana de Investigación, Desarrollo e Innovación para el Transporte, celebró su sexto aniversario con una misa y entrega de reconocimientos a los trabajadores que han estado desde los inicios de la FUVIDIT.', 'https://www.instagram.com/p/DFtT_YLBebp/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==', 'prensa/9W21KYE2Yy0QWZR3NSl00Y0CTZFv6Fp4C7ovGJzU.jpg', '05-02-2025 12:00 PM', '2025-05-15 21:06:18', '2025-05-15 21:06:18'),
(30, 'Personal técnico de la FUVIDIT, realizó visita técnica a las instalaciones de la compañía Equiweld Andina, C.A.', 'Personal técnico de la Fundación Venezolana de Investigación Desarrollo e Innovación para el Transporte y del Instituto de Ferrocarriles del Estado, realizó una visita por los talleres y laboratorios de una empresa nacional especializada en sistemas eléctricos.\r\n\r\nEsto con los fines de poder visualizar las diferentes áreas de trabajo con las que está empresa cuenta, y poder realizar diferentes alianzas en materia de impulsar los trabajos de innovación y sustitución de importaciones en los sistemas ferroviarios con sistemas eléctricos de catenaria.', 'https://www.instagram.com/p/DF5OA9bR-IY/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==', 'prensa/rtYXYLWZhzh2DIUPTwODux2XuQv1B0jMPiBJ6yS8.jpg', '12-02-2025 12:00 PM', '2025-05-15 21:09:52', '2025-05-15 21:09:52');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessions`
--

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('94oAUblhpssPxJW3yRAJu1lBTWoY9HCxJ0mVIdbl', NULL, '10.10.30.224', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiejdCQllKaXBjd0xMdUcwcU10eFh1RTZaRml4SG5vTndZbDR5ZmZGSyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8xMC4xMC4zMC4yNTQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1747851496),
('hTRyQ8SD2WvkON6Drn0lftNMnKPDtODDhucxeON2', NULL, '10.10.30.108', 'HomeNet/1.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiODUwWW90MkMybXZTbVYwUFpiM0NkRTUzSHBIWWE5TDBCUzRzcXg1diI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8xMC4xMC4zMC4yNTQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1747849046),
('Llx1cLLHJ3IAmd06m0nOXtY9kuowET22hXFlWBjP', NULL, '10.10.30.224', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:138.0) Gecko/20100101 Firefox/138.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoia3dhUUxiekdtbjZ2MnlpY2J4WlJYQXZCWHkxSjBkbGN2VXE1M0M0VSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8xMC4xMC4zMC4yNTQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1747850903),
('mSYm7tBGzoD4zXyj38RoMnP4SIpQ90rQEXdp8CkH', NULL, '10.10.30.108', 'HomeNet/1.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZUh3bTA4RUpRNmw3YzhVZjBRd2hrcVI2RmpseVBqNWJNYjdTTmpkYyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8xMC4xMC4zMC4yNTQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1747852706),
('RCMVeInmlnqsBGrMUmM9RNkYsvXBtVwSnr23iM99', NULL, '10.10.30.108', 'HomeNet/1.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicUVDdmI5aHFDS3R3ODRacFpXeWxiWmFwWm1PWG5jeE8wOGZsTjZsdiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8xMC4xMC4zMC4yNTQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1747856366),
('v8J918GlxVncMji7UPIbfhxqrnGTR1Pa63Nx4sWA', NULL, '10.10.30.108', 'HomeNet/1.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQ3k0WE1rWlhFN29yRG9rV0oxbWR5ZWFsYTZjTW1vUU10Q0NjQ0NYZyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8xMC4xMC4zMC4yNTQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1747845385);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Paola Yépez', 'comunicaciones@fuvidit.com', '2025-02-12 23:33:40', '$2y$12$VDtv4nf3dY0DPD.vEUQcfe7N1Y37CH.JbZxXLQATWuG.KWIk5pb3S', '7UJ9CYF7vFEOwi6UxhpbatCTngWrUXY3mI73cIeZik0qRnXGyPZF51tYuFmN', '2025-02-12 23:33:40', '2025-02-12 23:33:40'),
(2, 'Administrador', 'admin@fuvidit.com', '2025-05-10 03:46:53', '$2y$12$/fmLc1X/0QC3tTjvKdK8m.vDIyWKJrqhP/ZjV.31dcgcFhLwFQoea', 'lxrue1iQICJL1FMzUFw9NCX6xdU9xEyp5YSeTSQHQ3Vs7F1BVCma28MNjzKq', '2025-05-10 03:46:53', '2025-05-10 03:46:53');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
