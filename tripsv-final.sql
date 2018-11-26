-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-11-2018 a las 20:20:23
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tripsv`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int(11) NOT NULL,
  `categoria` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `id_compra` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `acompañantes` int(11) DEFAULT NULL,
  `total` double(8,2) DEFAULT NULL,
  `estado` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stockpago` double DEFAULT NULL,
  `paquete_id` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ubicacion_id` int(11) NOT NULL,
  `cliente_id` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comprobantes`
--

CREATE TABLE `comprobantes` (
  `id_comprobante` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `compra_id` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paquete_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `guias`
--

CREATE TABLE `guias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apellido` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dui` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_profile` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disponibilidad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `guias`
--

INSERT INTO `guias` (`id`, `nombre`, `apellido`, `dui`, `img_profile`, `disponibilidad`, `created_at`, `updated_at`) VALUES
(1, 'Maria', 'Garcia', '4552246-2', 'http://127.0.0.1:8000/image/TuXrHIuxvY45Hl7jq1Q7sLH9kR4UM1wx12FGixKQ.png', 'Disponible', '2018-11-23 02:37:16', '2018-11-23 02:37:16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(15, '2014_10_12_000000_create_users_table', 1),
(16, '2014_10_12_100000_create_password_resets_table', 1),
(17, '2018_11_06_220806_create_transporte_models_table', 1),
(18, '2018_11_07_143654_create_guias_table', 1),
(19, '2018_11_13_161839_create_posts_table', 1),
(20, '2018_11_13_161926_create_categorias_table', 1),
(21, '2018_11_13_161934_create_multimedia_table', 1),
(22, '2018_11_13_161942_create_turista_clientes_table', 1),
(23, '2018_11_13_161949_create_paquetes_table', 1),
(24, '2018_11_13_161959_create_ruta_turisticas_table', 1),
(25, '2018_11_13_162010_create_compras_table', 1),
(26, '2018_11_13_162117_create_unidades_transportes_table', 1),
(27, '2018_11_13_162130_create_comprobantes_table', 1),
(28, '2018_11_13_162136_create_ubicacions_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `multimedia`
--

CREATE TABLE `multimedia` (
  `id_multimedia` int(11) NOT NULL,
  `url` text COLLATE utf8mb4_unicode_ci,
  `tipo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_id` int(11) DEFAULT NULL,
  `paquete_id` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paquetes`
--

CREATE TABLE `paquetes` (
  `id_paquete` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titulo` text COLLATE utf8mb4_unicode_ci,
  `slug` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cupo` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `fechaDeViaje` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hora_partida` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hora_regreso` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `guia_id` int(11) NOT NULL,
  `rutaTuristica_id` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transporte_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posts`
--

CREATE TABLE `posts` (
  `id_post` int(11) NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ruta_turisticas`
--

CREATE TABLE `ruta_turisticas` (
  `id_ruta` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitudInicial` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `longitudInicial` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitudfinal` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `longitudfinal` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titulo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transporte_models`
--

CREATE TABLE `transporte_models` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `capacidad` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `transporte_models`
--

INSERT INTO `transporte_models` (`id`, `nombre`, `descripcion`, `capacidad`, `created_at`, `updated_at`) VALUES
(1, 'Microbus #1', 'Microbus color rojo, con aire acondicionado.', 30, '2018-11-23 02:24:50', '2018-11-23 02:24:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turista_clientes`
--

CREATE TABLE `turista_clientes` (
  `id_turista` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dui` int(11) NOT NULL,
  `edad` int(11) NOT NULL,
  `direccion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ubicacions`
--

CREATE TABLE `ubicacions` (
  `id_ubicacion` int(11) NOT NULL,
  `departamento` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `punto_encuentro` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `costo` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rol` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `rol`, `img`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Frank Navas', 'navasfran98@gmail.com', 'admin', 'perfil/pvz2.png', '$2y$10$lRIckK86/x1Wdh19TWUzeOpMBjd0UJD2kS..2hjxnTAgtW454hD6a', 'ltabB9jo6pdDiQtZRfBQgYVeuVZWo0cqezKGjumtRDkau7qM2rAZqdJaBfg6', '2018-11-19 03:14:02', '2018-11-23 02:24:11'),
(2, 'USUARIO2', 'user2@gmail.com', 'admin', 'perfil/sonic.png', '$2y$10$lRIckK86/x1Wdh19TWUzeOpMBjd0UJD2kS..2hjxnTAgtW454hD6a', 'cQvlNi9Wsq20bTDPRjx4dkSXcRPx78wRG6EMv1BZyn0tYtrgk2vBd1Y8g0vF', '2018-11-19 03:14:02', '2018-11-19 06:44:17');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id_compra`),
  ADD KEY `compras_paquete_id_index` (`paquete_id`),
  ADD KEY `compras_ubicacion_id_index` (`ubicacion_id`),
  ADD KEY `compras_cliente_id_index` (`cliente_id`),
  ADD KEY `paquete_id` (`paquete_id`),
  ADD KEY `ubicacion_id` (`ubicacion_id`),
  ADD KEY `cliente_id` (`cliente_id`);

--
-- Indices de la tabla `comprobantes`
--
ALTER TABLE `comprobantes`
  ADD PRIMARY KEY (`id_comprobante`),
  ADD KEY `comprobantes_compra_id_index` (`compra_id`),
  ADD KEY `comprobantes_paquete_id_index` (`paquete_id`),
  ADD KEY `compra_id` (`compra_id`),
  ADD KEY `paquete_id` (`paquete_id`);

--
-- Indices de la tabla `guias`
--
ALTER TABLE `guias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `multimedia`
--
ALTER TABLE `multimedia`
  ADD PRIMARY KEY (`id_multimedia`),
  ADD KEY `multimedia_paquete_id_index` (`paquete_id`),
  ADD KEY `paquete_id` (`paquete_id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indices de la tabla `paquetes`
--
ALTER TABLE `paquetes`
  ADD PRIMARY KEY (`id_paquete`),
  ADD KEY `paquetes_guia_id_index` (`guia_id`),
  ADD KEY `paquetes_rutaturistica_id_index` (`rutaTuristica_id`),
  ADD KEY `paquetes_transporte_id_index` (`transporte_id`),
  ADD KEY `rutaTuristica_id` (`rutaTuristica_id`),
  ADD KEY `transporte_id` (`transporte_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id_post`),
  ADD UNIQUE KEY `user_id` (`user_id`),
  ADD KEY `posts_categoria_id_index` (`categoria_id`),
  ADD KEY `posts_usuario_id_index` (`user_id`),
  ADD KEY `user_id_2` (`user_id`),
  ADD KEY `categoria_id` (`categoria_id`),
  ADD KEY `user_id_3` (`user_id`);

--
-- Indices de la tabla `ruta_turisticas`
--
ALTER TABLE `ruta_turisticas`
  ADD PRIMARY KEY (`id_ruta`);

--
-- Indices de la tabla `transporte_models`
--
ALTER TABLE `transporte_models`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `turista_clientes`
--
ALTER TABLE `turista_clientes`
  ADD PRIMARY KEY (`id_turista`),
  ADD KEY `turista_clientes_user_id_index` (`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indices de la tabla `ubicacions`
--
ALTER TABLE `ubicacions`
  ADD PRIMARY KEY (`id_ubicacion`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `comprobantes`
--
ALTER TABLE `comprobantes`
  MODIFY `id_comprobante` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `guias`
--
ALTER TABLE `guias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `multimedia`
--
ALTER TABLE `multimedia`
  MODIFY `id_multimedia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `posts`
--
ALTER TABLE `posts`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `transporte_models`
--
ALTER TABLE `transporte_models`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `ubicacions`
--
ALTER TABLE `ubicacions`
  MODIFY `id_ubicacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `compras_ibfk_2` FOREIGN KEY (`ubicacion_id`) REFERENCES `ubicacions` (`id_ubicacion`),
  ADD CONSTRAINT `compras_ibfk_3` FOREIGN KEY (`cliente_id`) REFERENCES `turista_clientes` (`id_turista`),
  ADD CONSTRAINT `compras_ibfk_4` FOREIGN KEY (`paquete_id`) REFERENCES `paquetes` (`id_paquete`);

--
-- Filtros para la tabla `comprobantes`
--
ALTER TABLE `comprobantes`
  ADD CONSTRAINT `comprobantes_ibfk_1` FOREIGN KEY (`compra_id`) REFERENCES `compras` (`id_compra`);

--
-- Filtros para la tabla `multimedia`
--
ALTER TABLE `multimedia`
  ADD CONSTRAINT `multimedia_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id_post`),
  ADD CONSTRAINT `multimedia_ibfk_2` FOREIGN KEY (`paquete_id`) REFERENCES `paquetes` (`id_paquete`);

--
-- Filtros para la tabla `paquetes`
--
ALTER TABLE `paquetes`
  ADD CONSTRAINT `paquetes_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `paquetes_ibfk_2` FOREIGN KEY (`transporte_id`) REFERENCES `transporte_models` (`id`),
  ADD CONSTRAINT `paquetes_ibfk_3` FOREIGN KEY (`guia_id`) REFERENCES `guias` (`id`),
  ADD CONSTRAINT `paquetes_ibfk_4` FOREIGN KEY (`rutaTuristica_id`) REFERENCES `ruta_turisticas` (`id_ruta`);

--
-- Filtros para la tabla `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id_categoria`),
  ADD CONSTRAINT `posts_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
