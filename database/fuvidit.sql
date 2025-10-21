--
-- PostgreSQL database dump
--

\restrict 7vl4yUCca0UkgGD8c0Qht4TWFazzpcKLrQ3DdodoF1GH6eqCN49BF4n3R5wltjl

-- Dumped from database version 13.4
-- Dumped by pg_dump version 13.22

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- Name: cache; Type: TABLE; Schema: public; Owner: fuviditc_fuvidit
--

CREATE TABLE public.cache (
    key character varying(255) NOT NULL,
    value text NOT NULL,
    expiration integer NOT NULL
);


ALTER TABLE public.cache OWNER TO fuviditc_fuvidit;

--
-- Name: cache_locks; Type: TABLE; Schema: public; Owner: fuviditc_fuvidit
--

CREATE TABLE public.cache_locks (
    key character varying(255) NOT NULL,
    owner character varying(255) NOT NULL,
    expiration integer NOT NULL
);


ALTER TABLE public.cache_locks OWNER TO fuviditc_fuvidit;

--
-- Name: failed_jobs; Type: TABLE; Schema: public; Owner: fuviditc_fuvidit
--

CREATE TABLE public.failed_jobs (
    id bigint NOT NULL,
    uuid character varying(255) NOT NULL,
    connection text NOT NULL,
    queue text NOT NULL,
    payload text NOT NULL,
    exception text NOT NULL,
    failed_at timestamp(0) without time zone DEFAULT now() NOT NULL
);


ALTER TABLE public.failed_jobs OWNER TO fuviditc_fuvidit;

--
-- Name: failed_jobs_id_seq; Type: SEQUENCE; Schema: public; Owner: fuviditc_fuvidit
--

CREATE SEQUENCE public.failed_jobs_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.failed_jobs_id_seq OWNER TO fuviditc_fuvidit;

--
-- Name: failed_jobs_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: fuviditc_fuvidit
--

ALTER SEQUENCE public.failed_jobs_id_seq OWNED BY public.failed_jobs.id;


--
-- Name: images; Type: TABLE; Schema: public; Owner: fuviditc_fuvidit
--

CREATE TABLE public.images (
    id bigint NOT NULL,
    image_path character varying(255) NOT NULL,
    selected_date date NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    titulo character varying(255) NOT NULL,
    link character varying(255) NOT NULL,
    descripcion character varying(255) NOT NULL
);


ALTER TABLE public.images OWNER TO fuviditc_fuvidit;

--
-- Name: images_id_seq; Type: SEQUENCE; Schema: public; Owner: fuviditc_fuvidit
--

CREATE SEQUENCE public.images_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.images_id_seq OWNER TO fuviditc_fuvidit;

--
-- Name: images_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: fuviditc_fuvidit
--

ALTER SEQUENCE public.images_id_seq OWNED BY public.images.id;


--
-- Name: job_batches; Type: TABLE; Schema: public; Owner: fuviditc_fuvidit
--

CREATE TABLE public.job_batches (
    id character varying(255) NOT NULL,
    name character varying(255) NOT NULL,
    total_jobs integer NOT NULL,
    pending_jobs integer NOT NULL,
    failed_jobs integer NOT NULL,
    failed_job_ids text NOT NULL,
    options text,
    cancelled_at integer,
    created_at integer NOT NULL,
    finished_at integer
);


ALTER TABLE public.job_batches OWNER TO fuviditc_fuvidit;

--
-- Name: jobs; Type: TABLE; Schema: public; Owner: fuviditc_fuvidit
--

CREATE TABLE public.jobs (
    id bigint NOT NULL,
    queue character varying(255) NOT NULL,
    payload text NOT NULL,
    attempts smallint NOT NULL,
    reserved_at integer,
    available_at integer NOT NULL,
    created_at integer NOT NULL
);


ALTER TABLE public.jobs OWNER TO fuviditc_fuvidit;

--
-- Name: jobs_id_seq; Type: SEQUENCE; Schema: public; Owner: fuviditc_fuvidit
--

CREATE SEQUENCE public.jobs_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.jobs_id_seq OWNER TO fuviditc_fuvidit;

--
-- Name: jobs_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: fuviditc_fuvidit
--

ALTER SEQUENCE public.jobs_id_seq OWNED BY public.jobs.id;


--
-- Name: migrations; Type: TABLE; Schema: public; Owner: fuviditc_fuvidit
--

CREATE TABLE public.migrations (
    id integer NOT NULL,
    migration character varying(255) NOT NULL,
    batch integer NOT NULL
);


ALTER TABLE public.migrations OWNER TO fuviditc_fuvidit;

--
-- Name: migrations_id_seq; Type: SEQUENCE; Schema: public; Owner: fuviditc_fuvidit
--

CREATE SEQUENCE public.migrations_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.migrations_id_seq OWNER TO fuviditc_fuvidit;

--
-- Name: migrations_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: fuviditc_fuvidit
--

ALTER SEQUENCE public.migrations_id_seq OWNED BY public.migrations.id;


--
-- Name: noticias; Type: TABLE; Schema: public; Owner: fuviditc_fuvidit
--

CREATE TABLE public.noticias (
    id bigint NOT NULL,
    titulo character varying(255) NOT NULL,
    descripcion text NOT NULL,
    link character varying(255),
    image character varying(255),
    fecha character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.noticias OWNER TO fuviditc_fuvidit;

--
-- Name: noticias_id_seq; Type: SEQUENCE; Schema: public; Owner: fuviditc_fuvidit
--

CREATE SEQUENCE public.noticias_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.noticias_id_seq OWNER TO fuviditc_fuvidit;

--
-- Name: noticias_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: fuviditc_fuvidit
--

ALTER SEQUENCE public.noticias_id_seq OWNED BY public.noticias.id;


--
-- Name: password_reset_tokens; Type: TABLE; Schema: public; Owner: fuviditc_fuvidit
--

CREATE TABLE public.password_reset_tokens (
    email character varying(255) NOT NULL,
    token character varying(255) NOT NULL,
    created_at timestamp(0) without time zone
);


ALTER TABLE public.password_reset_tokens OWNER TO fuviditc_fuvidit;

--
-- Name: sessions; Type: TABLE; Schema: public; Owner: fuviditc_fuvidit
--

CREATE TABLE public.sessions (
    id character varying(255) NOT NULL,
    user_id bigint,
    ip_address character varying(45),
    user_agent text,
    payload text NOT NULL,
    last_activity integer NOT NULL
);


ALTER TABLE public.sessions OWNER TO fuviditc_fuvidit;

--
-- Name: users; Type: TABLE; Schema: public; Owner: fuviditc_fuvidit
--

CREATE TABLE public.users (
    id bigint NOT NULL,
    name character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    email_verified_at timestamp(0) without time zone,
    password character varying(255) NOT NULL,
    remember_token character varying(100),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.users OWNER TO fuviditc_fuvidit;

--
-- Name: users_id_seq; Type: SEQUENCE; Schema: public; Owner: fuviditc_fuvidit
--

CREATE SEQUENCE public.users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.users_id_seq OWNER TO fuviditc_fuvidit;

--
-- Name: users_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: fuviditc_fuvidit
--

ALTER SEQUENCE public.users_id_seq OWNED BY public.users.id;


--
-- Name: failed_jobs id; Type: DEFAULT; Schema: public; Owner: fuviditc_fuvidit
--

ALTER TABLE ONLY public.failed_jobs ALTER COLUMN id SET DEFAULT nextval('public.failed_jobs_id_seq'::regclass);


--
-- Name: images id; Type: DEFAULT; Schema: public; Owner: fuviditc_fuvidit
--

ALTER TABLE ONLY public.images ALTER COLUMN id SET DEFAULT nextval('public.images_id_seq'::regclass);


--
-- Name: jobs id; Type: DEFAULT; Schema: public; Owner: fuviditc_fuvidit
--

ALTER TABLE ONLY public.jobs ALTER COLUMN id SET DEFAULT nextval('public.jobs_id_seq'::regclass);


--
-- Name: migrations id; Type: DEFAULT; Schema: public; Owner: fuviditc_fuvidit
--

ALTER TABLE ONLY public.migrations ALTER COLUMN id SET DEFAULT nextval('public.migrations_id_seq'::regclass);


--
-- Name: noticias id; Type: DEFAULT; Schema: public; Owner: fuviditc_fuvidit
--

ALTER TABLE ONLY public.noticias ALTER COLUMN id SET DEFAULT nextval('public.noticias_id_seq'::regclass);


--
-- Name: users id; Type: DEFAULT; Schema: public; Owner: fuviditc_fuvidit
--

ALTER TABLE ONLY public.users ALTER COLUMN id SET DEFAULT nextval('public.users_id_seq'::regclass);


--
-- Data for Name: cache; Type: TABLE DATA; Schema: public; Owner: fuviditc_fuvidit
--

COPY public.cache (key, value, expiration) FROM stdin;
\.


--
-- Data for Name: cache_locks; Type: TABLE DATA; Schema: public; Owner: fuviditc_fuvidit
--

COPY public.cache_locks (key, owner, expiration) FROM stdin;
\.


--
-- Data for Name: failed_jobs; Type: TABLE DATA; Schema: public; Owner: fuviditc_fuvidit
--

COPY public.failed_jobs (id, uuid, connection, queue, payload, exception, failed_at) FROM stdin;
\.


--
-- Data for Name: images; Type: TABLE DATA; Schema: public; Owner: fuviditc_fuvidit
--

COPY public.images (id, image_path, selected_date, created_at, updated_at, titulo, link, descripcion) FROM stdin;
\.


--
-- Data for Name: job_batches; Type: TABLE DATA; Schema: public; Owner: fuviditc_fuvidit
--

COPY public.job_batches (id, name, total_jobs, pending_jobs, failed_jobs, failed_job_ids, options, cancelled_at, created_at, finished_at) FROM stdin;
\.


--
-- Data for Name: jobs; Type: TABLE DATA; Schema: public; Owner: fuviditc_fuvidit
--

COPY public.jobs (id, queue, payload, attempts, reserved_at, available_at, created_at) FROM stdin;
\.


--
-- Data for Name: migrations; Type: TABLE DATA; Schema: public; Owner: fuviditc_fuvidit
--

COPY public.migrations (id, migration, batch) FROM stdin;
1	0001_01_01_000000_create_users_table	1
2	0001_01_01_000001_create_cache_table	1
3	0001_01_01_000002_create_jobs_table	1
4	2025_02_11_174311_create_noticias_table	1
\.


--
-- Data for Name: noticias; Type: TABLE DATA; Schema: public; Owner: fuviditc_fuvidit
--

COPY public.noticias (id, titulo, descripcion, link, image, fecha, created_at, updated_at) FROM stdin;
1	FUVIDIT participa en las mesas de trabajo del Instituto Venezolano de Investigaciones Científicas (IVIC)	La Fundación Venezolana de Investigación Desarrollo e Innovación para el Transporte, participo en las mesas de trabajo referentes a la agenda científica en los espacios acuáticos.	https://www.instagram.com/p/DBNH6eTIvIo/?igsh=MXU1MWR3emw1MWNsdg==	prensa/foHwzbgylxhGxwDzYUtgxpRvlhnH6ZkeuRhewUaM.jpg	16-10-2024 12:20 PM	2025-05-13 19:43:16	2025-05-13 19:43:16
2	FUVIDIT realiza un recorrido por las instalaciones de la C.A Metro de Valencia	La Fundación Venezolana de Investigación Desarrollo e Innovación para el Transporte, realizo una visita a las instalaciones del Metro de Valencia, para supervisar el funcionamiento de la brida de sujeción de empalme de este sistema ferroviario y contemplar los diferentes proyectos para el crecimiento del mismo.	https://www.instagram.com/p/DBgaYd5ReOn/?igsh=MWc4ZWt6OHZzZWh2Mw==	prensa/YHVAciPL9jad1xFERV4ebxczTS5Metb0xpVcX7Ys.jpg	24-10-2024 2:00 PM	2025-05-13 19:52:42	2025-05-13 19:52:42
3	FUVIDIT, realizó inspección técnica a las instalaciones de Metro Maracaibo	El equipo de la Fundación Venezolana de Investigación Desarrollo e Innovación para el Transporte, realizó una visita técnica a las instalaciones del Metro de Maracaibo, para hacer la inspección de diferentes proyectos de sustitución de importaciones e innovación en el transporte ferroviario.	https://www.instagram.com/reel/DCozLFPRcSc/?igsh=cmRibGlhaTBxaWwz	prensa/G8t3Mi8C082tBFhJH5Avob6vex0t6snFTRaDVEKl.jpg	21-11-2024 1:00 PM	2025-05-13 19:54:11	2025-05-13 19:54:11
4	FUVIDIT, visitó las instalaciones del departamento de electrificación del IFE	Con los planes de seguir fortaleciendo los sistemas ferroviarios del país, la FUVIDIT realizó una inspección técnica en el departamento de electrificación del Instituto de Ferrocarriles del Estado, para poder conversar con los especialistas en el tema y poder visibilizar cuales son las necesidades que presentan en esta área.	https://www.instagram.com/p/DCsLo1JhNUI/?img_index=2&igsh=MWM2N3hicXZ2N2RxMg==	prensa/Hg8V670M00QdF64y3kNEdaHKyccmmHdzG5H4tFJ8.jpg	23-11-2024 11:00 AM	2025-05-13 19:58:02	2025-05-13 19:58:38
5	La FUVIDIT, celebra el sexto aniversario de su creación.	La Fundación Venezolana de Investigación, Desarrollo e Innovación para el Transporte, celebró su sexto aniversario con una misa y entrega de reconocimientos a los trabajadores que han estado desde los inicios de la FUVIDIT.	https://www.instagram.com/p/DFtT_YLBebp/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==	prensa/9W21KYE2Yy0QWZR3NSl00Y0CTZFv6Fp4C7ovGJzU.jpg	05-02-2025 12:00 PM	2025-05-15 21:06:18	2025-05-15 21:06:18
6	Personal técnico de la FUVIDIT, realizó visita técnica a las instalaciones de la compañía Equiweld Andina, C.A.	Personal técnico de la Fundación Venezolana de Investigación Desarrollo e Innovación para el Transporte y del Instituto de Ferrocarriles del Estado, realizó una visita por los talleres y laboratorios de una empresa nacional especializada en sistemas eléctricos.\\r\\n\\r\\nEsto con los fines de poder visualizar las diferentes áreas de trabajo con las que está empresa cuenta, y poder realizar diferentes alianzas en materia de impulsar los trabajos de innovación y sustitución de importaciones en los sistemas ferroviarios con sistemas eléctricos de catenaria.	https://www.instagram.com/p/DF5OA9bR-IY/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==	prensa/rtYXYLWZhzh2DIUPTwODux2XuQv1B0jMPiBJ6yS8.jpg	12-02-2025 12:00 PM	2025-05-15 21:09:52	2025-05-15 21:09:52
\.


--
-- Data for Name: password_reset_tokens; Type: TABLE DATA; Schema: public; Owner: fuviditc_fuvidit
--

COPY public.password_reset_tokens (email, token, created_at) FROM stdin;
\.


--
-- Data for Name: sessions; Type: TABLE DATA; Schema: public; Owner: fuviditc_fuvidit
--

COPY public.sessions (id, user_id, ip_address, user_agent, payload, last_activity) FROM stdin;
98NF7d4yOBJ4C7ABG2isoN4wjt3jbaJ3pupUuR8p	\N	117.33.163.216	Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1	YTozOntzOjY6Il90b2tlbiI7czo0MDoid1QxSFBtdU1sOFNrUlhsTHZ6OEh4Q2JWcUVLWVNMWTF3MFAyUVRDZCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vZnV2aWRpdC5jb20udmUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19	1759838171
HqTk3TKIlWkULY5R7VaAJfVR6mIlJy7ES3SaGA8k	\N	190.202.41.98	Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.0.0 Safari/537.36	YTozOntzOjY6Il90b2tlbiI7czo0MDoiRjBVY3VtNTdsNWdQTjRNbEQzb0ZsQWRYTUFFbUhPYjYwM0JRTmkxWSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vZnV2aWRpdC5jb20udmUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19	1759843628
au1oZDbJ2mJ7U6YkBlnouJVUSG9TejSBlaFhFGSs	\N	190.202.41.98	Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36	YTozOntzOjY6Il90b2tlbiI7czo0MDoicDJOZHNna2M3ekVndHNMYXZNMGtHdmI0bUZKN0J4QmNWUjc5NW1rYiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHBzOi8vZnV2aWRpdC5jb20udmUvb2JzZXJ2YXRvcmlvIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==	1759844908
ekUjYXDIoZBtlE88gog0xKu7Vj6d0Vh7NadPQfwu	\N	190.202.41.98	Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.0.0 Safari/537.36	YTozOntzOjY6Il90b2tlbiI7czo0MDoiTTV2MlNPYVFXVXpTekVpYVpNUmg5SWg2bDNHSFRtTTNaYTlFd2hidSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vZnV2aWRpdC5jb20udmUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19	1759853234
iih6Pdv01818mOzIp8qId1utc9kXYUZD6K3xeAkz	\N	132.232.144.200	Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1	YTozOntzOjY6Il90b2tlbiI7czo0MDoieTZraWpJS3ZpZ3ZyVzlOVDlBVkZ5eTZWWkFLYkIzUG12ckFxaE5IRCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vZnV2aWRpdC5jb20udmUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19	1759853308
OvZTnqYT9P6gqzTHeOnntqU7Szq8JUqTp3S1B0sw	\N	162.120.185.245	Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36	YToyOntzOjY6Il90b2tlbiI7czo0MDoiTTV2cUk5bjRrSklRQU4xT080NjNsbzVucURSaERPMW9vdDZRd3BWOSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==	1759855944
ZyO5aKEHO8vMf98bDwyLHt04xtfYkqDCCGGLcn7X	\N	162.120.185.245	Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36	YToyOntzOjY6Il90b2tlbiI7czo0MDoiV1RGZEpCVzRnRkwxWkcya0F0UEJDZE9NVjdqcjd6bDJoejhxY1N3TCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==	1759865262
yVrFmzNzKqPbyDOf3vZYjZzAVrwy3NjeN8IKk115	\N	131.72.171.249	Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.0.0 Safari/537.36	YTozOntzOjY6Il90b2tlbiI7czo0MDoieXFIS1FIdXoycUVTeUEzd1NmY0hET2lyOHBDSkw5QUlMVHBLUzN0cSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vZnV2aWRpdC5jb20udmUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19	1759866941
RQ8M0PICFGx5LIDHxctFLiAlghBFyOotiLfmWWbo	\N	57.141.0.72	meta-externalagent/1.1 (+https://developers.facebook.com/docs/sharing/webmasters/crawler)	YTozOntzOjY6Il90b2tlbiI7czo0MDoiNkdlcUFuUVVOOWxIdWVyamgyNXhXRk0zckdjY0tkNmdsdWV4R055bSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vZnV2aWRpdC5jb20udmUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19	1759877401
aHOqUIiZ6uBukJ6cou5EUeYdTHHXPqPIIoJ19oDH	\N	43.155.195.141	Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1	YTozOntzOjY6Il90b2tlbiI7czo0MDoid3ZKaUU2WlNkTmlrTFlQbWJDOHJLTFBoMmtjWDBOb0VsOHNuUnBCcSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vZnV2aWRpdC5jb20udmUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19	1759839458
oI7A2EP8RauMdhhWvxmMIvX6nVzc6QehjgnoTjIN	\N	193.186.4.223	Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.0.0 Mobile Safari/537.36	YTozOntzOjY6Il90b2tlbiI7czo0MDoiVDYzVzg4bXk2QXVKbkxRQ3hpT2RMaWVJbnJCUE1sRTc2STFZcXpGeiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vZnV2aWRpdC5jb20udmUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19	1759844564
msj7uXomn5aF5B391i3ov1dJv0cYzlOuGTWUfYGe	\N	162.120.185.245	Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36	YToyOntzOjY6Il90b2tlbiI7czo0MDoiOTdxeWRub3EzYW5OZzBVVGlidzlIV3JCWU1Xc29rQ3ZpUUtDZFNucCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==	1759849271
C9xlxK02lxddynOvkAO1GIx7OGuKXuGxG72G1K41	\N	162.120.186.116	Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.0.0 Safari/537.36	YTozOntzOjY6Il90b2tlbiI7czo0MDoiYmhxdEY4UkZmQVM2dzlsRUFuZzVhZGVnQUpkakdYT2Y0NmlRMXQwRSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vZnV2aWRpdC5jb20udmUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19	1759853240
4l2BbHtSUdHtErs9CUM7uJl4oRpOW1Z00ku6EPli	\N	40.77.167.132	Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36	YTozOntzOjY6Il90b2tlbiI7czo0MDoiODBmRXhYc3IwdU9mV1h3WDVONTExVjlXZnZaOEhUUGQyWGpUYmRNTyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHBzOi8vd3d3LmZ1dmlkaXQuY29tLnZlIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==	1759854291
iDsVkM4r3BlFvX3dQnwUu54b5d0Yf8wPLzBxGCli	\N	57.141.0.31	meta-externalagent/1.1 (+https://developers.facebook.com/docs/sharing/webmasters/crawler)	YTozOntzOjY6Il90b2tlbiI7czo0MDoiems2N2dNWFN2YVNpb1hDRmhEUnVkVnh6R2k4ZHd2MFpTbUpqWGpOYyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHBzOi8vd3d3LmZ1dmlkaXQuY29tLnZlIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==	1759857437
BFyjr8VQs3yDoM9gXCheHdhrmv3o4o1lYw1IzdsG	\N	162.120.186.116	Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36	YToyOntzOjY6Il90b2tlbiI7czo0MDoiQkRkYW5NaGxTQzNuZmNlQm1CSENwb2d2QnhPenVJa0pqZGlkbm5LSyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==	1759865281
xlG8xszPaMnYdlczUHeIafzL22w6rXpp8XdI4UfD	\N	131.72.171.249	Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.0.0 Safari/537.36	YTozOntzOjY6Il90b2tlbiI7czo0MDoiZnVMdUVYRThaRW02a0VveThybjY1UkdwdW5wSzM5WW1FTFRRdG9obCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHBzOi8vZnV2aWRpdC5jb20udmUvb2JzZXJ2YXRvcmlvIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==	1759866955
bc1qeOEH7wpCGLuPW0ahkySKxbS8KuK188rz7dGz	\N	54.174.58.251	Mozilla/5.0 (compatible; HubSpot Crawler; HubSpot Domain check; +https://www.hubspot.com)	YTozOntzOjY6Il90b2tlbiI7czo0MDoiMzZMN1lNTkFDTnBnY0l0a1RPS0JCbU1mQlI0NTR3OVlWZlZ5TE9mUiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vZnV2aWRpdC5jb20udmUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19	1759840874
2DP5KOcQ7cT0k4QhwaNu4dRO66O42ocJN8HN9jDw	\N	114.119.135.245	Mozilla/5.0 (Linux; Android 7.0;) AppleWebKit/537.36 (KHTML, like Gecko) Mobile Safari/537.36 (compatible; PetalBot;+https://webmaster.petalsearch.com/site/petalbot)	YTozOntzOjY6Il90b2tlbiI7czo0MDoiV2tjQkZCY1E4YkdNWW1WbzNId25KZEMwMng4ZEhtODhkZW1EazNaOCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHBzOi8vZnV2aWRpdC5jb20udmUvcHJlbnNhIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==	1759844584
skILZolEj9RkCjv34qWIIEV07gE99B4gz6Z6KnU1	\N	193.186.4.253	Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Mobile Safari/537.36	YToyOntzOjY6Il90b2tlbiI7czo0MDoiQUxYV0JuOURXWUIwZTAzODBVYUozTGthdGhja2lKM29SdTlqM1FNVSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==	1759851744
VM1SphtVve6ee4eraFCjxJdhFvksJxsi6tNGlbcw	\N	162.120.185.245	Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.0.0 Safari/537.36	YTozOntzOjY6Il90b2tlbiI7czo0MDoiSVMzbnBmQXJUWkhSQnpUdzMyVjljV25BYzNyMjFFajdpcTZzS2N1cyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vZnV2aWRpdC5jb20udmUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19	1759853276
GtFFamezklTEfOEX7ERXq9goC0n9E6aPwCKvOzCf	\N	72.14.201.253	Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36	YToyOntzOjY6Il90b2tlbiI7czo0MDoidlI3RTBXbWhHU2tJZWlsREdVRzhuOEcwR2dtQlhYTEw2STE0aENoZSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==	1759855745
sSUGLf8yH5oMWTtRzA3vAiU37wFTyn7aJTrbbY5a	\N	201.208.240.146	Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.0.0 Safari/537.36 Edg/141.0.0.0	YTozOntzOjY6Il90b2tlbiI7czo0MDoiQkxoZEZiZVlTbGZKQ3pUWlM3MnlLTllzbDZuYnUyM25iNjNFQTN6NCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vZnV2aWRpdC5jb20udmUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19	1759857489
j4DjggWzw5Vze7YXDGStqqYqLYZoSxMFo5u0bQiq	\N	193.186.4.223	Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36	YToyOntzOjY6Il90b2tlbiI7czo0MDoid1F0dW54ZDNtQjl4WThmWUtEUUtCakplSjFadUF4bmZjdW9DdXJJWSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==	1759865282
KJN8wivon8ImKnnDACmapoTjumYbDDsVuXa7KLd4	\N	119.45.20.16	Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1	YTozOntzOjY6Il90b2tlbiI7czo0MDoibk1vdllpRDZqYk9KZ3AycFhVYUJHRUFLZ1M1dFJ2RnI4UTlxMkJmWiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vZnV2aWRpdC5jb20udmUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19	1759867072
HcLCVXbHQgLc9CtWI8nIHBrVpE7WKJG31VcbwHec	\N	154.17.138.116	Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.9449.1297 Mobile Safari/537.36	YTozOntzOjY6Il90b2tlbiI7czo0MDoialBPa1Jnc0F4dU55dnpjSU1yVU1qWXZENFp5VURtbFFxT2c0V0NlQSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vZnV2aWRpdC5jb20udmUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19	1759841744
iiKlaFQQYtVcZYYk3v7KzOP1529zIhsC7jCsyQr8	\N	162.120.186.117	Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36	YToyOntzOjY6Il90b2tlbiI7czo0MDoiU2hQZDZQQTZFZWNJY1hBcEIxQ0xPNDhrakJzQzBOZk9DZTBGWEVmQyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==	1759844830
UjT4SwOG0ZIaUErtEsz0CweYU8gB011js1m5waTX	\N	43.130.37.243	Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1	YTozOntzOjY6Il90b2tlbiI7czo0MDoiMHFqMHMwOTZ1NXRzbmVHV3lDdkRaUmxYMURnTUxnMTVoNElxWkVKUCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vZnV2aWRpdC5jb20udmUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19	1759852542
YJxR6BwrUxPkaJ5eRaYE66DyC0dMtG8egwp5dj3p	\N	193.186.4.253	Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.0.0 Safari/537.36	YTozOntzOjY6Il90b2tlbiI7czo0MDoiOUphNlVma0FJUFFwem8yTUlDdW1adTFHdm56ZlNCVFY5S216eDBFTSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHBzOi8vZnV2aWRpdC5jb20udmUvbm9zb3Ryb3MiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19	1759853277
Gh3qtNbuuO3jD431vrJOkKZtMXa8PPnWKHGrGqNA	\N	162.120.186.116	Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36	YToyOntzOjY6Il90b2tlbiI7czo0MDoiZjgxU2N4bVQwa3Z2cUlEN2htejZzRk9NcG5XT0tIUkI2cERtQm9jbyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==	1759855746
vNodpG4zGe2VApbwiB4NxEGNdjVDGzpxAsLcdP7T	\N	40.77.167.14	Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36	YTozOntzOjY6Il90b2tlbiI7czo0MDoiM09tcmtQazR6blgxb2pCY1d5RjBmeTdGQ0hiUU4xUEJETzFNMHZsWCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vZnV2aWRpdC5jb20udmUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19	1759860448
7q0jkd1gTlJOsrBjUOhKruDLUeBpJUvqdICFDPoy	\N	162.120.186.117	Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36	YToyOntzOjY6Il90b2tlbiI7czo0MDoiRlRDRHh6UEJjeEVoS1pNbUVZMERFS1BpWFQzaWtyenRjS1g4QXhQWCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==	1759865901
hglxEO0j89x73mLVWjyLT6fOef5qf67UI1mctgd9	\N	40.77.167.43	Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36	YTozOntzOjY6Il90b2tlbiI7czo0MDoiWmR6YjNScVU4VDQ0RVpST2NwQmFQMmZqazJqRVBLTzJmUzk2OUluSiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTA6Imh0dHBzOi8vd3d3LmZ1dmlkaXQuY29tLnZlL3B1YmxpYy9pbmRleC5waHAvcHJlbnNhIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==	1759868255
pMaZxI40XX5jF3mD2WLosWTX8VM5ZG0RxUh9zG77	\N	190.202.41.98	Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.0.0 Safari/537.36	YTozOntzOjY6Il90b2tlbiI7czo0MDoiNGdzTE9kRFdTZTRCZHFvMjQ0RUZzMTdFVUZVOWhhbzlHMkVCc1ZtYSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vZnV2aWRpdC5jb20udmUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19	1759843385
lGdZl3YGYyMdtnNtPfp1y7GipscLmsjSpoV4lI3V	\N	190.202.41.98	Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36	YTozOntzOjY6Il90b2tlbiI7czo0MDoiNTd1OG5uNWMzNFMzVk1JS3FXQkJBOWhrQURpdHBGandQM21zRlFociI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vZnV2aWRpdC5jb20udmUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19	1759844830
5MhpF7b8IWJWX9ECS6kpVb6UJJpeAYKvw13bIj70	\N	190.202.41.98	Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.0.0 Safari/537.36	YTozOntzOjY6Il90b2tlbiI7czo0MDoidVd0bFROR1dYV1FCS29NMEJ0SHNQc2x0OXBTbjdCT0VrRjJKU05KSSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vZnV2aWRpdC5jb20udmUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19	1759853229
XerU6e53cbcsL95vbgwsriqB4xQS9mrpUAhf9ind	\N	190.202.41.98	Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.0.0 Safari/537.36	YTozOntzOjY6Il90b2tlbiI7czo0MDoiZ1pxS1E5dWNiU1VFZG5wVVNKVG9Ga051S2ZQSXl2Z1ZWcjJhdEpCTCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vZnV2aWRpdC5jb20udmUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19	1759853279
uRCeRCE3bqqxgeSmLZNLzq8rQwgGSjEAjOopR6Jz	\N	193.186.4.223	Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36	YToyOntzOjY6Il90b2tlbiI7czo0MDoiUTBNeWNKMXIwd1BVNXRvMUhsN2c3TE0yUjExMnhMazBmTkE2ZnMwViI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==	1759855943
en11L0CnkC4u1rqjnKdRFkLBVpGaH1TsbZUKhWtX	\N	43.157.147.3	Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1	YTozOntzOjY6Il90b2tlbiI7czo0MDoiQWlBVmRScG82RzNRUk9TRkpoZEEwUnlRR3VMN1ViVGFOVFlpeWlTNyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vZnV2aWRpdC5jb20udmUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19	1759864817
J1Xp5t1dtfGbdrovZ34p8aYTQxXrgPHvURpWWODV	\N	193.186.4.253	Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36	YToyOntzOjY6Il90b2tlbiI7czo0MDoiWUEzb0R6b3Y4SDU2cWdLWkZCZ2UwY3dRbUpEVDVXOHY3N3RHSm5GVCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==	1759865906
DNzLmFptpcLgTOxZVkaj4mAVGUOOVfAtTMViNmpQ	\N	175.44.42.135	Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36	YTozOntzOjY6Il90b2tlbiI7czo0MDoiZWljVVF5MDlwenhQNkpBYXlQMVczellLc3dqeHdLNXRVTmVGYmZuNSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHBzOi8vd3d3LmZ1dmlkaXQuY29tLnZlIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==	1759875320
\.


--
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: fuviditc_fuvidit
--

COPY public.users (id, name, email, email_verified_at, password, remember_token, created_at, updated_at) FROM stdin;
1	Paola Yépez	comunicaciones@fuvidit.com	2025-02-12 23:33:40	$2y$12$VDtv4nf3dY0DPD.vEUQcfe7N1Y37CH.JbZxXLQATWuG.KWIk5pb3S	7UJ9CYF7vFEOwi6UxhpbatCTngWrUXY3mI73cIeZik0qRnXGyPZF51tYuFmN	2025-02-12 23:33:40	2025-02-12 23:33:40
2	Administrador	admin@fuvidit.com	2025-05-10 03:46:53	$2y$12$/fmLc1X/0QC3tTjvKdK8m.vDIyWKJrqhP/ZjV.31dcgcFhLwFQoea	lxrue1iQICJL1FMzUFw9NCX6xdU9xEyp5YSeTSQHQ3Vs7F1BVCma28MNjzKq	2025-05-10 03:46:53	2025-05-10 03:46:53
\.


--
-- Name: failed_jobs_id_seq; Type: SEQUENCE SET; Schema: public; Owner: fuviditc_fuvidit
--

SELECT pg_catalog.setval('public.failed_jobs_id_seq', 1, false);


--
-- Name: images_id_seq; Type: SEQUENCE SET; Schema: public; Owner: fuviditc_fuvidit
--

SELECT pg_catalog.setval('public.images_id_seq', 1, false);


--
-- Name: jobs_id_seq; Type: SEQUENCE SET; Schema: public; Owner: fuviditc_fuvidit
--

SELECT pg_catalog.setval('public.jobs_id_seq', 1, false);


--
-- Name: migrations_id_seq; Type: SEQUENCE SET; Schema: public; Owner: fuviditc_fuvidit
--

SELECT pg_catalog.setval('public.migrations_id_seq', 4, true);


--
-- Name: noticias_id_seq; Type: SEQUENCE SET; Schema: public; Owner: fuviditc_fuvidit
--

SELECT pg_catalog.setval('public.noticias_id_seq', 6, true);


--
-- Name: users_id_seq; Type: SEQUENCE SET; Schema: public; Owner: fuviditc_fuvidit
--

SELECT pg_catalog.setval('public.users_id_seq', 2, true);


--
-- Name: cache_locks cache_locks_pkey; Type: CONSTRAINT; Schema: public; Owner: fuviditc_fuvidit
--

ALTER TABLE ONLY public.cache_locks
    ADD CONSTRAINT cache_locks_pkey PRIMARY KEY (key);


--
-- Name: cache cache_pkey; Type: CONSTRAINT; Schema: public; Owner: fuviditc_fuvidit
--

ALTER TABLE ONLY public.cache
    ADD CONSTRAINT cache_pkey PRIMARY KEY (key);


--
-- Name: failed_jobs failed_jobs_pkey; Type: CONSTRAINT; Schema: public; Owner: fuviditc_fuvidit
--

ALTER TABLE ONLY public.failed_jobs
    ADD CONSTRAINT failed_jobs_pkey PRIMARY KEY (id);


--
-- Name: failed_jobs failed_jobs_uuid_key; Type: CONSTRAINT; Schema: public; Owner: fuviditc_fuvidit
--

ALTER TABLE ONLY public.failed_jobs
    ADD CONSTRAINT failed_jobs_uuid_key UNIQUE (uuid);


--
-- Name: images images_pkey; Type: CONSTRAINT; Schema: public; Owner: fuviditc_fuvidit
--

ALTER TABLE ONLY public.images
    ADD CONSTRAINT images_pkey PRIMARY KEY (id);


--
-- Name: job_batches job_batches_pkey; Type: CONSTRAINT; Schema: public; Owner: fuviditc_fuvidit
--

ALTER TABLE ONLY public.job_batches
    ADD CONSTRAINT job_batches_pkey PRIMARY KEY (id);


--
-- Name: jobs jobs_pkey; Type: CONSTRAINT; Schema: public; Owner: fuviditc_fuvidit
--

ALTER TABLE ONLY public.jobs
    ADD CONSTRAINT jobs_pkey PRIMARY KEY (id);


--
-- Name: migrations migrations_pkey; Type: CONSTRAINT; Schema: public; Owner: fuviditc_fuvidit
--

ALTER TABLE ONLY public.migrations
    ADD CONSTRAINT migrations_pkey PRIMARY KEY (id);


--
-- Name: noticias noticias_pkey; Type: CONSTRAINT; Schema: public; Owner: fuviditc_fuvidit
--

ALTER TABLE ONLY public.noticias
    ADD CONSTRAINT noticias_pkey PRIMARY KEY (id);


--
-- Name: password_reset_tokens password_reset_tokens_pkey; Type: CONSTRAINT; Schema: public; Owner: fuviditc_fuvidit
--

ALTER TABLE ONLY public.password_reset_tokens
    ADD CONSTRAINT password_reset_tokens_pkey PRIMARY KEY (email);


--
-- Name: sessions sessions_pkey; Type: CONSTRAINT; Schema: public; Owner: fuviditc_fuvidit
--

ALTER TABLE ONLY public.sessions
    ADD CONSTRAINT sessions_pkey PRIMARY KEY (id);


--
-- Name: users users_email_key; Type: CONSTRAINT; Schema: public; Owner: fuviditc_fuvidit
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_email_key UNIQUE (email);


--
-- Name: users users_pkey; Type: CONSTRAINT; Schema: public; Owner: fuviditc_fuvidit
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);


--
-- Name: sessions_last_activity_index; Type: INDEX; Schema: public; Owner: fuviditc_fuvidit
--

CREATE INDEX sessions_last_activity_index ON public.sessions USING btree (last_activity);


--
-- Name: sessions_user_id_index; Type: INDEX; Schema: public; Owner: fuviditc_fuvidit
--

CREATE INDEX sessions_user_id_index ON public.sessions USING btree (user_id);


--
-- Name: SCHEMA public; Type: ACL; Schema: -; Owner: postgres
--

GRANT ALL ON SCHEMA public TO fuviditc_fuvidit;


--
-- PostgreSQL database dump complete
--

\unrestrict 7vl4yUCca0UkgGD8c0Qht4TWFazzpcKLrQ3DdodoF1GH6eqCN49BF4n3R5wltjl

