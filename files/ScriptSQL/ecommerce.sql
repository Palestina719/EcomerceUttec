-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-10-2016 a las 20:46:39
-- Versión del servidor: 5.7.11
-- Versión de PHP: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `ecommerce`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_product` (`name` VARCHAR(100), `provider` VARCHAR(100), `price` FLOAT, `units` INT, `buy` INT, `description` VARCHAR(100))  BEGIN

INSERT INTO PRODUCTS (ID_PRODUCT, NAME, PROVIDER, PRICE, UNITS, BUY, DESCRIPTION, CREATE_AT)
VALUES (null, name, provider, price, units, buy, description, NOW());

SELECT MAX(id_product) AS id FROM products;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_product_image` (`name` VARCHAR(100), `route` VARCHAR(250), `id_product` INT)  BEGIN

INSERT INTO PRODUCT_IMAGES (ID_IMAGE, NAME, ROUTE, DATE, ID_PRODUCT)
VALUES (null, name, route, NOW(), id_product);

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_slider_image` (`name` VARCHAR(100), `route` VARCHAR(250), `id_product` INT)  BEGIN

INSERT INTO SLIDER_IMAGES (ID_SLIDER, NAME, ROUTE, DATE, ID_PRODUCT)
VALUES (null, name, route, NOW(), id_product);

END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
    `id_product` int(11) NOT NULL,
    `name` varchar(45) DEFAULT NULL,
    `provider` varchar(45) DEFAULT NULL,
    `price` float DEFAULT NULL,
    `units` int(11) DEFAULT NULL,
    `buy` int(11) DEFAULT NULL,
    `description` varchar(250) DEFAULT NULL,
    `create_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id_product`, `name`, `provider`, `price`, `units`, `buy`, `description`, `create_at`) VALUES
(1, 'producto_1', 'Choice', 99.99, 4, 1, 'texto largo que funciona como ejemplo', '2016-10-17'),
(2, 'producto_2', 'Microsoft', 70.00, 4, 3, 'texto largo que funciona como ejemplo', '2016-10-17'),
(3, 'producto_3', 'Apple', 80.00, 4, 6, 'texto largo que funciona como ejemplo', '2016-10-17'),
(4, 'producto_4', 'Panasonic', 67.00, 4, 1, 'texto largo que funciona como ejemplo', '2016-10-17'),
(5, 'producto_5', 'LG', 176.99, 4, 2, 'texto largo que funciona como ejemplo', '2016-10-17'),
(6, 'producto_6', 'GigaBite', 178.99, 4, 1, 'texto largo que funciona como ejemplo', '2016-10-17'),
(7, 'producto_7', 'Kingston Labs', 148.99, 11, 1, 'texto largo que funciona como ejemplo', '2016-10-17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product_images`
--

CREATE TABLE `product_images` (
    `id_image` int(11) NOT NULL,
    `name` varchar(250) DEFAULT NULL,
    `route` varchar(250) DEFAULT NULL,
    `date` date DEFAULT NULL,
    `id_product` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `product_images`
--

INSERT INTO `product_images` (`id_image`, `name`, `route`, `date`, `id_product`) VALUES
(1, 'IMG_20151115_103153724.jpg', '../files/products/IMG_20151115_103153724.jpg', '2016-10-17', 1),
(2, 'IMG_20151115_103224988.jpg', '../files/products/IMG_20151115_103224988.jpg', '2016-10-17', 1),
(3, 'IMG_20151115_103300426.jpg', '../files/products/IMG_20151115_103300426.jpg', '2016-10-17', 1),
(4, 'IMG_20151115_103406918.jpg', '../files/products/IMG_20151115_103406918.jpg', '2016-10-17', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slider_images`
--

CREATE TABLE `slider_images` (
    `id_slider` int(11) NOT NULL,
    `name` varchar(250) DEFAULT NULL,
    `route` varchar(250) DEFAULT NULL,
    `date` date DEFAULT NULL,
    `id_product` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `slider_images`
--

INSERT INTO `slider_images` (`id_slider`, `name`, `route`, `date`, `id_product`) VALUES
(30, '17-10-16_Slider_A.jpg', '../files/slider/17-10-16_Slider_A.jpg', '2016-10-17', 1),
(31, '17-10-16_Slider_B.jpg', '../files/slider/17-10-16_Slider_B.jpg', '2016-10-17', 2),
(32, '17-10-16_Slider_C.jpg', '../files/slider/17-10-16_Slider_C.jpg', '2016-10-17', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_product`);

--
-- Indices de la tabla `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id_image`),
  ADD KEY `products.id_productos-product_images.id_product_images_idx` (`id_product`);

--
-- Indices de la tabla `slider_images`
--
ALTER TABLE `slider_images`
  ADD PRIMARY KEY (`id_slider`),
  ADD KEY `slidertoproducts-id_productto_idx` (`id_product`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id_image` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `slider_images`
--
ALTER TABLE `slider_images`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `products.id_productos-product_images.id_product_images` FOREIGN KEY (`id_product`) REFERENCES `products` (`id_product`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `slider_images`
--
ALTER TABLE `slider_images`
  ADD CONSTRAINT `slidertoproducts-id_productto` FOREIGN KEY (`id_product`) REFERENCES `products` (`id_product`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
