-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-02-2023 a las 13:37:23
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `baby`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `nombre`, `descripcion`) VALUES
(1, 'cat', 'test1t'),
(2, 'cat      ', 'test2'),
(3, 'category', 'adasdasda');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `listas`
--

CREATE TABLE `listas` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `listas`
--

INSERT INTO `listas` (`id`, `title`) VALUES
(1, 'ropa'),
(2, 'zapatos'),
(3, 'test'),
(4, 'test4'),
(5, 'test 6'),
(6, 'test 7'),
(7, 'test 8'),
(8, 'test 7'),
(9, 'asdasdsadasd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `categoria_id` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `title`, `url`, `img`, `created_at`, `updated_at`, `categoria_id`, `user_id`, `status`) VALUES
(1, 'FedMois Calcetines Antideslizantes de Algodón para Bebé Niño Niña Pack de 5', 'https://www.amazon.es/dp/B0B74LCNGQ/ref=br_dsk_vv_itemdt_dp?colid=3MSQ1LT935SH&coliid=I1J7KZT7QNXCGJ&psc=1', 'https://m.media-amazon.com/images/I/71LAPDyWe3L._AC_UX679_.jpg', '2023-02-23 17:45:20', '2023-02-27 09:16:16', 1, 1, 0),
(2, 'COSTWAY Trona para Bebé Altura Ajustable Silla Alta con Cinturón de Seguridad y Bandeja Extraíble para Comedor Jugar Trona Portátil Evolutiva Bebé (Gris)', 'https://www.amazon.es/dp/B0897M56MC/ref=br_dsk_vv_itemdt_dp?colid=3MSQ1LT935SH&coliid=IJBFGECSPNUWA&psc=1', 'https://m.media-amazon.com/images/I/51cCp7gGq5L._AC_SY355_.jpg', '2023-02-23 17:45:20', '2023-02-24 12:11:38', 2, 1, 1),
(3, 'Twistshake Bathtub', 'https://twistshake.com/es/p/complete-bathroom-set', 'https://products.twistshake.com/images/683_ea0cba648b-big-bath-bundle-1-original.jpg?q=70&w=500&fm=jpg&bg=FAFAFA&auto=format 500w, https://products.twistshake.com/images/683_ea0cba648b-big-bath-bundle-1-original.jpg?q=70&w=767&fm=jpg&bg=FAFAFA&auto=format', '2023-02-23 17:45:24', '2023-02-24 10:03:38', 1, 1, 0),
(4, 'OESSUF Plato de Bambú para Bebés con Ventosa de Silicona, Juego de Vajilla Infantil para Aprender a Comer para El Destete Dirigido por El Bebe (Elefante, verde)', 'https://www.amazon.es/dp/B0B3LNMXK4/ref=br_dsk_vv_itemdt_dp?colid=3MSQ1LT935SH&coliid=I9B6385A97LED&psc=1', 'https://m.media-amazon.com/images/I/71zMWiLtnSL._AC_SX522_.jpg', '2023-02-23 17:45:24', '2023-02-24 10:03:41', 2, 1, 0),
(5, 'telas 1', '', '', '2023-02-23 20:44:00', '2023-02-27 12:21:08', 1, 1, 0),
(6, 'Hakuna Matte Gran Alfombra Puzzle para Niños 1,8x1,2m Elegante Alfombra Bebe para Gatear, Jugar y Yoga - Certificado EN-71, Sin Olor – 48 Piezas y 20 Bordes Empaque Caja de Cartón Reciclable', 'https://www.amazon.es/dp/B081D4Y32M/ref=br_dsk_vv_itemdt_dp?colid=3MSQ1LT935SH&coliid=I1AHXWL7TM806Z&psc=1', 'https://m.media-amazon.com/images/I/81UEp9oQXtL._AC_SY355_.jpg', '2023-02-23 20:44:07', '2023-02-24 10:03:45', 2, 1, 0),
(9, 'Babify Alfombra de Juegos para bebés espesor 1 cm, plegable, antideslizante, extragrande, reversible, impermeable, portátil, de doble cara (180x200x1.0cm) - Modelo Dinos + Tiger Baby', 'https://www.amazon.es/dp/B09BNLN2W9/ref=br_dsk_vv_item_seebyopt?colid=3MSQ1LT935SH&coliid=IX5BYMTNGQQNH', 'https://m.media-amazon.com/images/I/81w3hyW7aML._AC_SX425_.jpg', '2023-02-23 20:47:28', '2023-02-24 10:03:47', 1, 1, 0),
(10, 'Babify Alfombra de Juegos para bebés espesor 1 cm, plegable, antideslizante, extragrande, reversible, impermeable, portátil, de doble cara, para niños pequeños y bebés (180x200x1.0cm), Multicolor', 'https://www.amazon.es/dp/B07XNFS18W/ref=br_dsk_vv_itemdt_dp?colid=3MSQ1LT935SH&coliid=I2ZQ41LU6VCNH4&psc=1', 'https://m.media-amazon.com/images/I/81nY7XLrTkL._AC_SY355_.jpg', '2023-02-23 20:47:28', '2023-02-24 10:03:48', 2, 1, 0),
(11, 'SOLIDEE LED Luz Nocturna Infantil, Lampara Bebe Regulable Táctil Para Dormitorio, Luz Nocturna Con Modo de Luz Cálida, Siete Modos de Gradiente de Color, Recargable por USB, Regalo Para Niños/Adulto', 'https://www.amazon.es/dp/B0B2WG64GM/ref=br_dsk_vv_itemdt_dp?colid=3MSQ1LT935SH&coliid=I2GMNLXPH75V8', 'https://m.media-amazon.com/images/I/71fPmASUQ5L._AC_SX522_.jpg', '2023-02-23 20:49:22', '2023-02-24 10:03:51', 1, 1, 0),
(12, 'Philips Avent SCD301/02 - Set de recién nacido gama natural, 4 biberones, 4 Tetinas, chupete y escobilla, transparente', 'https://www.amazon.es/dp/B07FLGDB5M/ref=br_dsk_vv_itemdt_dp?colid=3MSQ1LT935SH&coliid=I2CG9GEB4A6WB&th=1', 'https://m.media-amazon.com/images/I/71UKMt6BDuL._AC_SY355_.jpg', '2023-02-23 20:49:22', '2023-02-24 10:03:53', 2, 1, 0),
(15, 'Kenuak® Cesta Cambiador Bebé Portátil, Canasta Mueble Recién Nacido, Cambiador de Mesa Impermeable Pañales, Funda Extraíble Suave con Cremallera, Nido Plegable de Viaje 100% Algodón Natural (Beige)', 'https://www.amazon.es/dp/B0B1QY57D3/ref=br_dsk_vv_itemdt_dp?colid=3MSQ1LT935SH&coliid=I1PGCVC2U2Y70T&psc=1', 'https://m.media-amazon.com/images/I/6195t58AomL._AC_SX425_.jpg', '2023-02-23 20:50:39', '2023-02-24 10:03:55', 1, 1, 0),
(16, '1 cepillo de dientes de silicona cian para bebé con 4 cabezales, cepillo de dientes para limpieza de dientes con masaje de encías y 2 cepillos de dientes para dedos y 1 bolsa de almacenamiento', 'https://www.amazon.es/dp/B09VL83RGQ/ref=br_dsk_vv_itemdt_dp?colid=3MSQ1LT935SH&coliid=I2MTIWM19TSZX1', 'https://m.media-amazon.com/images/I/51P2Od8DOJL._AC_SY355_.jpg', '2023-02-23 20:50:39', '2023-02-24 10:03:56', 2, 1, 0),
(19, 'Love Noobs Silicona Cepillo de Dientes Bebé y Mordedor 2 en 1 Cuidado bucal del bebé', 'https://www.amazon.es/dp/B0B721S629/ref=br_dsk_vv_itemdt_dp?colid=3MSQ1LT935SH&coliid=I3AY7HLMC338HC', 'https://m.media-amazon.com/images/I/61jbf+9jMrL._AC_SY355_.jpg', '2023-02-23 20:51:53', '2023-02-24 10:03:58', 1, 1, 0),
(20, 'Dr. Bronner - Organic Castile Soap Unscented Baby-Mild, 32 fl oz liquid (japan import)', 'https://www.amazon.es/dp/B000HK1OOY/ref=br_dsk_vv_itemdt_dp?colid=3MSQ1LT935SH&coliid=I3SBELJNINAFJ8', 'https://m.media-amazon.com/images/I/81LvZnue1HL._AC_SY879_.jpg', '2023-02-23 20:51:53', '2023-02-24 10:04:01', 1, 1, 0),
(21, 'ack N\' Jill Kids Natural Toothpaste, Made With Natural Ingredients, Helps Soothe Gums & Fight Tooth Decay, Suitable From 6 Months+ - Banana Flavour 1 x 50g', 'https://www.amazon.es/dp/B00JLESNIC/ref=br_dsk_vv_itemdt_dp?colid=3MSQ1LT935SH&coliid=I1064OGKK44Z6W&psc=1', 'https://m.media-amazon.com/images/I/513E6xW8vPL._AC_SX425_.jpg', '2023-02-23 20:53:50', '2023-02-24 10:04:04', 2, 1, 0),
(22, 'POÄNG\r\nReposapiés, chapa roble tinte blanco/Knisa beige claro', 'https://www.ikea.com/es/es/p/poang-reposapies-chapa-roble-tinte-blanco-knisa-beige-claro-s09287489/#content', 'https://www.ikea.com/es/es/images/products/poang-reposapies-chapa-roble-tinte-blanco-knisa-beige-claro__0681572_pe720164_s5.jpg?f=s', '2023-02-23 20:53:50', '2023-02-24 10:04:06', 1, 1, 0),
(23, 'POÄNG\r\nMecedora, chapa roble tinte blanco/Knisa beige claro', 'https://www.ikea.com/es/es/p/poang-mecedora-chapa-roble-tinte-blanco-knisa-beige-claro-s19429266/#content', 'https://www.ikea.com/es/es/images/products/poang-mecedora-chapa-roble-tinte-blanco-knisa-beige-claro__0682939_pe720617_s5.jpg?f=s', '2023-02-23 20:55:04', '2023-02-24 10:04:09', 1, 1, 0),
(24, 'Cepillo de Ducha de Bebé,Cepillo de Masaje del Cuero Cabelludo del Bebé,Cepillo de Cuna Para Bebé,cepillo exfoliante,cepillo facial manual por Adultos,Cepillo de Silicona Súper Suave (Azul+Aosa+Verde)', 'https://www.amazon.es/dp/B09VKFN6GM/ref=br_dsk_vv_itemdt_dp?colid=3MSQ1LT935SH&coliid=I24PNPGVGFY920&psc=1', 'https://m.media-amazon.com/images/I/71mZk7ko9ZL._AC_SY355_.jpg', '2023-02-23 20:55:04', '2023-02-24 10:04:11', 2, 1, 0),
(25, 'HappyDoo - Plato Ventosa Bebe Bambu + Babero Silicona + Cuchara Bebe - Plato Bebe Ventosa Bambu Sin Tóxicos - Plato Blw con Ventosa - Plato Bebe Compartimentos - Vajilla Bebe Hipopótamo Gris', 'https://www.amazon.es/dp/B09R12JFVC/ref=br_dsk_vv_itemdt_dp?colid=3MSQ1LT935SH&coliid=IACSZ5HIVS8FM&psc=1', 'https://m.media-amazon.com/images/I/71zANunt0cL._AC_SX425_.jpg', '2023-02-23 20:56:26', '2023-02-24 10:04:13', 2, 1, 0),
(26, 'raydrop - Humidificadores de vapor frío para bebés, humidificador ultrasónico silencioso y pequeño de 1,70 l con apagado automático para mesita de noche, ocupa poco espacio, 110 V (Estados Unidos)', 'https://www.amazon.es/dp/B07XDNNS75/ref=br_dsk_vv_itemdt_dp?colid=3MSQ1LT935SH&coliid=IZ6LFND3X038W', 'https://m.media-amazon.com/images/I/51dopbVc4dL._AC_SY450_.jpg', '2023-02-23 20:56:26', '2023-02-24 10:04:15', 2, 1, 0),
(27, 'El Monstruo de Colores (cartón duro) 2a ed ((Edición revisada))', 'https://www.amazon.es/dp/8494681516/ref=br_dsk_vv_itemdt_dp?colid=3MSQ1LT935SH&coliid=IFQDPZTXDBW3I&psc=1', 'https://m.media-amazon.com/images/I/51ouB3rm3rL._SY698_BO1,204,203,200_.jpg', '2023-02-23 21:02:05', '2023-02-24 10:04:17', 2, 1, 0),
(28, 'Trona EVA 2 en 1 a partir de 6 meses con patas de madera - se puede transformar en silla infantil + pupitre de 3 a 5 años. (Gris)', 'https://www.amazon.es/dp/B092312R76/ref=br_dsk_vv_item_seebyopt?colid=3MSQ1LT935SH&coliid=I9I22CZQ542JF', 'https://m.media-amazon.com/images/I/5124M2eU-9S._AC_SX425_.jpg', '2023-02-23 21:02:05', '2023-02-24 10:04:18', 1, 1, 0),
(29, 'Moonkie Taza de Juguete apilable de Silicona para bebés, Juguete Educativo Juguete Blando para la dentición (Fine Day)', 'https://www.amazon.es/dp/B09PHJK3GR/ref=br_dsk_vv_itemdt_dp?colid=3MSQ1LT935SH&coliid=I1AR1SH1ERMB1R&psc=1', 'https://m.media-amazon.com/images/I/61t3RCveOVL._AC_SY300_SX300_.jpg', '2023-02-23 21:02:05', '2023-02-24 10:04:20', 2, 1, 0),
(30, 'Lixiin 7 Juguetes apilables, Juguete para apretar bebé, Bloques para bebés, círculo de anidación, Juguetes de educación temprana, Regalos para 6, 12, 18 Meses bebés', 'https://www.amazon.es/dp/B0B6B9SLVR/ref=br_dsk_vv_itemdt_dp?colid=3MSQ1LT935SH&coliid=I30G2ROL72VSWN', 'https://m.media-amazon.com/images/I/61-qJdfrH4L._AC_SX425_.jpg', '2023-02-23 21:02:05', '2023-02-24 10:04:22', 1, 1, 0),
(31, 'IIFONII Juguetes Bebes 6-12 Meses - 23 Piezas Bloques Construccion Cubos Apilables | Juguetes Niños Pelotas Sensoriales Bebe | Educativo Juguetes Montessori 6 9 12 Meses/1 2 año', 'https://www.amazon.es/dp/B0B3WXTJ8N/ref=br_dsk_vv_itemdt_dp?colid=3MSQ1LT935SH&coliid=IDRU0KM2YBSJ0', 'https://m.media-amazon.com/images/I/71ji9wlm0eL._AC_SX425_.jpg', '2023-02-23 21:02:05', '2023-02-24 10:04:24', 2, 1, 0),
(32, 'Bieco | Alfombra Bebe Puzzle | Alfombra Puzzle Bebe | Puzzle Suelo Bebe | Suelo Bebe | Alfombra niños Foam | Piezas Puzzle Suelo Bebe | Puzzle Alfombra Bebe | Puzzle Bebe Suelo | Suelo Puzzle Bebe', 'https://www.amazon.es/dp/B01MS00VOJ/ref=br_dsk_vv_itemdt_dp?colid=3MSQ1LT935SH&coliid=I3TFMJ5V3II4LZ', 'https://m.media-amazon.com/images/I/91jBxrgAtvL._AC_SX425_.jpg', '2023-02-23 21:02:05', '2023-02-24 10:04:27', 1, 1, 0),
(33, 'MIMUSELINA | Arrullo Bebe Recien Nacido 2 en 1. Convertible en Manta de Bebé | Arrullo Cálido y Ligero para Invierno | Fabricado en España | Exterior Algodón e Interior Coralina | 90x70cm - Wf. Blanco', 'https://www.amazon.es/dp/B09HTSWDBV/ref=br_dsk_vv_itemdt_dp?colid=3MSQ1LT935SH&coliid=IPFLZEA8NNLA7&psc=1', 'https://m.media-amazon.com/images/I/517x0k2RbDL._AC_SX569_.jpg', '2023-02-23 21:02:05', '2023-02-24 10:04:29', 2, 1, 0),
(34, 'Shanamera Sacaleches Eléctrico Portátil Doble con Pantalla y Múltiples Niveles de Succión | Extractor de Leche Materna Eléctrico Inalámbrico con Bolso y Biberón | Colector de Leche para Bebé (Rosa)', 'https://www.amazon.es/dp/B0B5XBH81P/ref=br_dsk_vv_itemdt_dp?colid=3MSQ1LT935SH&coliid=I107Y21XORS2I6&psc=1', 'https://m.media-amazon.com/images/I/51nuV0gCyBL._AC_SX425_.jpg', '2023-02-23 21:02:05', '2023-02-24 10:04:30', 2, 1, 0),
(41, 'test edt', 'test asd', 'testte asd', '2023-02-24 10:38:47', '2023-02-24 12:23:20', 2, 1, 0),
(42, 'editado ', 'editado', 'asd asdeditado sd', '2023-02-24 10:39:58', '2023-02-24 11:33:48', 3, 1, 0),
(43, 'test status', 'test status', 'test status', '2023-02-24 12:14:16', '2023-02-24 12:14:16', 2, 1, 0),
(44, 'holaa a ', 'as dasd asd asdasd', 'as dasd', '2023-02-24 12:15:09', '2023-02-24 12:16:37', 3, 1, 0),
(45, 'jedita', 'asdsadasd11', 'dasdasdas', '2023-02-24 12:15:41', '2023-02-24 12:24:12', 1, 1, 1),
(46, 'test 4334 3', 'asdadsada', 'asdasdas', '2023-02-27 09:55:13', '2023-02-27 09:55:13', 3, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product_list`
--

CREATE TABLE `product_list` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL,
  `list_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `product_list`
--

INSERT INTO `product_list` (`id`, `descripcion`, `estado`, `list_id`) VALUES
(1, 'polo', 0, 1),
(2, 'polo manga corta', 1, 1),
(3, 'editado 200', 1, 1),
(4, 'telas', 1, 1),
(5, 'telas', 1, 1),
(6, 'asdasd', 1, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `purchases`
--

CREATE TABLE `purchases` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `purchase_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `purchases`
--

INSERT INTO `purchases` (`id`, `user_id`, `product_id`, `purchase_date`) VALUES
(1, 1, 15, '0000-00-00'),
(2, 2, 4, '0000-00-00'),
(3, 2, 1, '2023-02-01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `password`, `created_at`, `updated_at`) VALUES
(1, '', 'admin', 'admin', 'admin', '2023-02-24 09:56:47', '2023-02-24 09:56:47'),
(2, '', 'user', 'user', 'user', '2023-02-24 09:56:47', '2023-02-24 09:56:47');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `listas`
--
ALTER TABLE `listas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoria_id` (`categoria_id`),
  ADD KEY `fk_user_id` (`user_id`);

--
-- Indices de la tabla `product_list`
--
ALTER TABLE `product_list`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_purchase` (`user_id`,`product_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `role` (`role`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `listas`
--
ALTER TABLE `listas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT de la tabla `product_list`
--
ALTER TABLE `product_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `purchases`
--
ALTER TABLE `purchases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`categoria_id`) REFERENCES `categories` (`id`);

--
-- Filtros para la tabla `purchases`
--
ALTER TABLE `purchases`
  ADD CONSTRAINT `purchases_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `purchases_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
