-- PostgreSQL conversion from MySQL dump
--
-- Servidor: 127.0.0.1:5432
-- Tiempo de generación: 21-05-2025 a las 20:22:38

--
-- Base de datos: `fuvidit_web2`
--

--
-- Estructura de tabla para la tabla `cache`
--

DROP TABLE IF EXISTS "cache";
CREATE TABLE "cache" (
  "key" VARCHAR(255) PRIMARY KEY,
  "value" TEXT NOT NULL,
  "expiration" INTEGER NOT NULL
);

--
-- Estructura de tabla para la tabla `cache_locks`
--

DROP TABLE IF EXISTS "cache_locks";
CREATE TABLE "cache_locks" (
  "key" VARCHAR(255) PRIMARY KEY,
  "owner" VARCHAR(255) NOT NULL,
  "expiration" INTEGER NOT NULL
);

--
-- Estructura de tabla para la tabla `failed_jobs`
--

DROP TABLE IF EXISTS "failed_jobs";
CREATE TABLE "failed_jobs" (
  "id" BIGSERIAL PRIMARY KEY,
  "uuid" VARCHAR(255) UNIQUE NOT NULL,
  "connection" TEXT NOT NULL,
  "queue" TEXT NOT NULL,
  "payload" TEXT NOT NULL,
  "exception" TEXT NOT NULL,
  "failed_at" TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL DEFAULT NOW()
);

--
-- Estructura de tabla para la tabla `images`
--

DROP TABLE IF EXISTS "images";
CREATE TABLE "images" (
  "id" BIGSERIAL PRIMARY KEY,
  "image_path" VARCHAR(255) NOT NULL,
  "selected_date" DATE NOT NULL,
  "created_at" TIMESTAMP(0) WITHOUT TIME ZONE NULL,
  "updated_at" TIMESTAMP(0) WITHOUT TIME ZONE NULL,
  "titulo" VARCHAR(255) NOT NULL,
  "link" VARCHAR(255) NOT NULL,
  "descripcion" VARCHAR(255) NOT NULL
);

--
-- Estructura de tabla para la tabla `jobs`
--

DROP TABLE IF EXISTS "jobs";
CREATE TABLE "jobs" (
  "id" BIGSERIAL PRIMARY KEY,
  "queue" VARCHAR(255) NOT NULL,
  "payload" TEXT NOT NULL,
  "attempts" SMALLINT NOT NULL,
  "reserved_at" INTEGER NULL,
  "available_at" INTEGER NOT NULL,
  "created_at" INTEGER NOT NULL
);

--
-- Estructura de tabla para la tabla `job_batches`
--

DROP TABLE IF EXISTS "job_batches";
CREATE TABLE "job_batches" (
  "id" VARCHAR(255) PRIMARY KEY,
  "name" VARCHAR(255) NOT NULL,
  "total_jobs" INTEGER NOT NULL,
  "pending_jobs" INTEGER NOT NULL,
  "failed_jobs" INTEGER NOT NULL,
  "failed_job_ids" TEXT NOT NULL,
  "options" TEXT,
  "cancelled_at" INTEGER NULL,
  "created_at" INTEGER NOT NULL,
  "finished_at" INTEGER NULL
);

--
-- Estructura de tabla para la tabla `migrations`
--

DROP TABLE IF EXISTS "migrations";
CREATE TABLE "migrations" (
  "id" SERIAL PRIMARY KEY,
  "migration" VARCHAR(255) NOT NULL,
  "batch" INTEGER NOT NULL
);

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO "migrations" ("migration", "batch") VALUES
('0001_01_01_000000_create_users_table', 1),
('0001_01_01_000001_create_cache_table', 1),
('0001_01_01_000002_create_jobs_table', 1),
('2025_02_11_174311_create_noticias_table', 1);

--
-- Estructura de tabla para la tabla `noticias`
--

DROP TABLE IF EXISTS "noticias";
CREATE TABLE "noticias" (
  "id" BIGSERIAL PRIMARY KEY,
  "titulo" VARCHAR(255) NOT NULL,
  "descripcion" TEXT NOT NULL,
  "link" VARCHAR(255) NULL,
  "image" VARCHAR(255) NULL,
  "fecha" VARCHAR(255) NULL,
  "created_at" TIMESTAMP(0) WITHOUT TIME ZONE NULL,
  "updated_at" TIMESTAMP(0) WITHOUT TIME ZONE NULL
);

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO "noticias" ("titulo", "descripcion", "link", "image", "fecha", "created_at", "updated_at") VALUES
('FUVIDIT participa en las mesas de trabajo del Instituto Venezolano de Investigaciones Científicas (IVIC)', 'La Fundación Venezolana de Investigación Desarrollo e Innovación para el Transporte, participo en las mesas de trabajo referentes a la agenda científica en los espacios acuáticos.', 'https://www.instagram.com/p/DBNH6eTIvIo/?igsh=MXU1MWR3emw1MWNsdg==', 'prensa/foHwzbgylxhGxwDzYUtgxpRvlhnH6ZkeuRhewUaM.jpg', '16-10-2024 12:20 PM', '2025-05-13 19:43:16', '2025-05-13 19:43:16'),
('FUVIDIT realiza un recorrido por las instalaciones de la C.A Metro de Valencia', 'La Fundación Venezolana de Investigación Desarrollo e Innovación para el Transporte, realizo una visita a las instalaciones del Metro de Valencia, para supervisar el funcionamiento de la brida de sujeción de empalme de este sistema ferroviario y contemplar los diferentes proyectos para el crecimiento del mismo.', 'https://www.instagram.com/p/DBgaYd5ReOn/?igsh=MWc4ZWt6OHZzZWh2Mw==', 'prensa/YHVAciPL9jad1xFERV4ebxczTS5Metb0xpVcX7Ys.jpg', '24-10-2024 2:00 PM', '2025-05-13 19:52:42', '2025-05-13 19:52:42'),
('FUVIDIT, realizó inspección técnica a las instalaciones de Metro Maracaibo', 'El equipo de la Fundación Venezolana de Investigación Desarrollo e Innovación para el Transporte, realizó una visita técnica a las instalaciones del Metro de Maracaibo, para hacer la inspección de diferentes proyectos de sustitución de importaciones e innovación en el transporte ferroviario.', 'https://www.instagram.com/reel/DCozLFPRcSc/?igsh=cmRibGlhaTBxaWwz', 'prensa/G8t3Mi8C082tBFhJH5Avob6vex0t6snFTRaDVEKl.jpg', '21-11-2024 1:00 PM', '2025-05-13 19:54:11', '2025-05-13 19:54:11'),
('FUVIDIT, visitó las instalaciones del departamento de electrificación del IFE', 'Con los planes de seguir fortaleciendo los sistemas ferroviarios del país, la FUVIDIT realizó una inspección técnica en el departamento de electrificación del Instituto de Ferrocarriles del Estado, para poder conversar con los especialistas en el tema y poder visibilizar cuales son las necesidades que presentan en esta área.', 'https://www.instagram.com/p/DCsLo1JhNUI/?img_index=2&igsh=MWM2N3hicXZ2N2RxMg==', 'prensa/Hg8V670M00QdF64y3kNEdaHKyccmmHdzG5H4tFJ8.jpg', '23-11-2024 11:00 AM', '2025-05-13 19:58:02', '2025-05-13 19:58:38'),
('La FUVIDIT, celebra el sexto aniversario de su creación.', 'La Fundación Venezolana de Investigación, Desarrollo e Innovación para el Transporte, celebró su sexto aniversario con una misa y entrega de reconocimientos a los trabajadores que han estado desde los inicios de la FUVIDIT.', 'https://www.instagram.com/p/DFtT_YLBebp/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==', 'prensa/9W21KYE2Yy0QWZR3NSl00Y0CTZFv6Fp4C7ovGJzU.jpg', '05-02-2025 12:00 PM', '2025-05-15 21:06:18', '2025-05-15 21:06:18'),
('Personal técnico de la FUVIDIT, realizó visita técnica a las instalaciones de la compañía Equiweld Andina, C.A.', 'Personal técnico de la Fundación Venezolana de Investigación Desarrollo e Innovación para el Transporte y del Instituto de Ferrocarriles del Estado, realizó una visita por los talleres y laboratorios de una empresa nacional especializada en sistemas eléctricos.\r\n\r\nEsto con los fines de poder visualizar las diferentes áreas de trabajo con las que está empresa cuenta, y poder realizar diferentes alianzas en materia de impulsar los trabajos de innovación y sustitución de importaciones en los sistemas ferroviarios con sistemas eléctricos de catenaria.', 'https://www.instagram.com/p/DF5OA9bR-IY/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==', 'prensa/rtYXYLWZhzh2DIUPTwODux2XuQv1B0jMPiBJ6yS8.jpg', '12-02-2025 12:00 PM', '2025-05-15 21:09:52', '2025-05-15 21:09:52');

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

DROP TABLE IF EXISTS "password_reset_tokens";
CREATE TABLE "password_reset_tokens" (
  "email" VARCHAR(255) PRIMARY KEY,
  "token" VARCHAR(255) NOT NULL,
  "created_at" TIMESTAMP(0) WITHOUT TIME ZONE NULL
);

--
-- Estructura de tabla para la tabla `sessions`
--

DROP TABLE IF EXISTS "sessions";
CREATE TABLE "sessions" (
  "id" VARCHAR(255) PRIMARY KEY,
  "user_id" BIGINT NULL,
  "ip_address" VARCHAR(45) NULL,
  "user_agent" TEXT,
  "payload" TEXT NOT NULL,
  "last_activity" INTEGER NOT NULL
);

CREATE INDEX "sessions_user_id_index" ON "sessions" ("user_id");
CREATE INDEX "sessions_last_activity_index" ON "sessions" ("last_activity");

--
-- Volcado de datos para la tabla `sessions`
--

INSERT INTO "sessions" ("id", "user_id", "ip_address", "user_agent", "payload", "last_activity") VALUES
('94oAUblhpssPxJW3yRAJu1lBTWoY9HCxJ0mVIdbl', NULL, '10.10.30.224', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiejdCQllKaXBjd0xMdUcwcU10eFh1RTZaRml4SG5vTndZbDR5ZmZGSyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8xMC4xMC4zMC4yNTQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1747851496),
('hTRyQ8SD2WvkON6Drn0lftNMnKPDtODDhucxeON2', NULL, '10.10.30.108', 'HomeNet/1.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiODUwWW90MkMybXZTbVYwUFpiM0NkRTUzSHBIWWE5TDBCUzRzcXg1diI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8xMC4xMC4zMC4yNTQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1747849046),
('Llx1cLLHJ3IAmd06m0nOXtY9kuowET22hXFlWBjP', NULL, '10.10.30.224', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:138.0) Gecko/20100101 Firefox/138.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoia3dhUUxiekdtbjZ2MnlpY2J4WlJYQXZCWHkxSjBkbGN2VXE1M0M0VSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8xMC4xMC4zMC4yNTQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1747850903),
('mSYm7tBGzoD4zXyj38RoMnP4SIpQ90rQEXdp8CkH', NULL, '10.10.30.108', 'HomeNet/1.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZUh3bTA4RUpRNmw3YzhVZjBRd2hrcVI2RmpseVBqNWJNYjdTTmpkYyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8xMC4xMC4zMC4yNTQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1747852706),
('RCMVeInmlnqsBGrMUmM9RNkYsvXBtVwSnr23iM99', NULL, '10.10.30.108', 'HomeNet/1.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicUVDdmI5aHFDS3R3ODRacFpXeWxiWmFwWm1PWG5jeE8wOGZsTjZsdiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8xMC4xMC4zMC4yNTQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1747856366),
('v8J918GlxVncMji7UPIbfhxqrnGTR1Pa63Nx4sWA', NULL, '10.10.30.108', 'HomeNet/1.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQ3k0WE1rWlhFN29yRG9rV0oxbWR5ZWFsYTZjTW1vUU10Q0NjQ0NYZyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHA6Ly8xMC4xMC4zMC4yNTQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1747845385);

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS "users";
CREATE TABLE "users" (
  "id" BIGSERIAL PRIMARY KEY,
  "name" VARCHAR(255) NOT NULL,
  "email" VARCHAR(255) UNIQUE NOT NULL,
  "email_verified_at" TIMESTAMP(0) WITHOUT TIME ZONE NULL,
  "password" VARCHAR(255) NOT NULL,
  "remember_token" VARCHAR(100) NULL,
  "created_at" TIMESTAMP(0) WITHOUT TIME ZONE NULL,
  "updated_at" TIMESTAMP(0) WITHOUT TIME ZONE NULL
);

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO "users" ("name", "email", "email_verified_at", "password", "remember_token", "created_at", "updated_at") VALUES
('Paola Yépez', 'comunicaciones@fuvidit.com', '2025-02-12 23:33:40', '$2y$12$VDtv4nf3dY0DPD.vEUQcfe7N1Y37CH.JbZxXLQATWuG.KWIk5pb3S', '7UJ9CYF7vFEOwi6UxhpbatCTngWrUXY3mI73cIeZik0qRnXGyPZF51tYuFmN', '2025-02-12 23:33:40', '2025-02-12 23:33:40'),
('Administrador', 'admin@fuvidit.com', '2025-05-10 03:46:53', '$2y$12$/fmLc1X/0QC3tTjvKdK8m.vDIyWKJrqhP/ZjV.31dcgcFhLwFQoea', 'lxrue1iQICJL1FMzUFw9NCX6xdU9xEyp5YSeTSQHQ3Vs7F1BVCma28MNjzKq', '2025-05-10 03:46:53', '2025-05-10 03:46:53');
