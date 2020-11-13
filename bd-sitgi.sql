-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 12-05-2019 a las 15:53:19
-- Versión del servidor: 5.7.23
-- Versión de PHP: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacoras`
--

CREATE TABLE `bitacoras` (
  `id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora_inicio` time NOT NULL,
  `hora_final` time NOT NULL,
  `operacion` varchar(150) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `descripcion`) VALUES
(1, 'Construcción', 'Lorem ipsum dolor sit amet, consectetur adipiscing elita.'),
(2, 'Cocina', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(3, 'Jardinería', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(4, 'Albañíleria', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(5, 'Soldadura', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(6, 'Pinturas', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(7, 'Escalas y Andamios', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(8, 'Equipos de Limpieza', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(9, 'Brochas y Rodillos', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `tipodocumento` varchar(2) NOT NULL,
  `numdocumento` varchar(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `direccion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `tipodocumento`, `numdocumento`, `nombre`, `telefono`, `direccion`) VALUES
(1, 'V-', '14063125', 'Yelitza Bellorin', '04148938731', 'Barrio Altamira - Calle las Brisas'),
(2, 'V-', '27288069', 'Wilmer Mendoza', '04269875029', 'Barrio Altamira - Calle las Brisas'),
(3, 'V-', '13923479', 'Wilmer Mendoza', '04143941406', 'Barrio Altamira - Calle las Brisas'),
(4, 'V-', '26119392', 'Rosanyelis Mendoza', '04148035253', 'Barrio Altamira - Calle las Brisas'),
(5, 'V-', '26119492', 'Maria Fabiola Giraldo', '04242426889', 'Vía principal de Playa Grande');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalles_ingresos`
--

CREATE TABLE `detalles_ingresos` (
  `id` int(11) NOT NULL,
  `id_ingreso` int(11) NOT NULL,
  `lote` varchar(10) NOT NULL,
  `precio_costo` decimal(30,2) NOT NULL,
  `precio_venta` decimal(30,2) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detalles_ingresos`
--

INSERT INTO `detalles_ingresos` (`id`, `id_ingreso`, `lote`, `precio_costo`, `precio_venta`, `cantidad`, `id_producto`) VALUES
(1, 1, 'zwf543', '1500.00', '1800.00', 25, 3),
(2, 1, 'rt453', '200.00', '300.00', 30, 4),
(3, 2, 'adsfe234', '1500.00', '2000.00', 25, 2),
(4, 2, 'qwe243', '1500.00', '3000.00', 100, 5);

--
-- Disparadores `detalles_ingresos`
--

DELIMITER $$
CREATE TRIGGER `tr_actStockIngreso` AFTER INSERT ON `detalles_ingresos` FOR EACH ROW BEGIN 
    		UPDATE productos SET stock=stock+NEW.cantidad 
            WHERE productos.id=NEW.id_producto; 
        END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalles_ventas`
--

CREATE TABLE `detalles_ventas` (
  `id` int(11) NOT NULL,
  `id_venta` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `precio_venta` decimal(30,2) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detalles_ventas`
--

INSERT INTO `detalles_ventas` (`id`, `id_venta`, `id_producto`, `precio_venta`, `cantidad`) VALUES
(1, 1, 4, '260.00', 10),
(2, 1, 3, '1950.00', 10),
(3, 2, 2, '1950.00', 10),
(4, 2, 5, '1950.00', 10);

--
-- Disparadores `detalles_ventas`
--
DELIMITER $$
CREATE TRIGGER `tr_actstockVenta` AFTER INSERT ON `detalles_ventas` FOR EACH ROW BEGIN
    	UPDATE productos SET stock = stock - NEW.cantidad
        WHERE productos.id = NEW.id_producto;
    END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE `empresas` (
  `id` int(11) NOT NULL,
  `rif` varchar(15) NOT NULL,
  `razon_social` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `iva` float NOT NULL,
  `tipo_moneda` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`id`, `rif`, `razon_social`, `direccion`, `telefono`, `iva`, `tipo_moneda`) VALUES
(1, 'J-26119392-9', 'Distribuidora Moya López. C.A', 'Calle Acosta, frente al Mercado', '0414-8035352', 16, 'Bs.S');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingresos`
--

CREATE TABLE `ingresos` (
  `id` int(11) NOT NULL,
  `tipocomprobante` varchar(20) NOT NULL,
  `seriecomprobante` varchar(10) NOT NULL,
  `numcomprobante` varchar(10) NOT NULL,
  `fecha_hora` datetime NOT NULL,
  `impuesto` decimal(30,2) NOT NULL,
  `id_proveedor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ingresos`
--

INSERT INTO `ingresos` (`id`, `tipocomprobante`, `seriecomprobante`, `numcomprobante`, `fecha_hora`, `impuesto`, `id_proveedor`) VALUES
(1, 'Factura', '0001', '0002', '2019-05-09 00:59:13', '16.00', 2),
(2, 'Factura', '000021', '000024', '2019-05-09 09:03:54', '16.00', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`id`, `nombre`, `descripcion`) VALUES
(1, 'Ferrer', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(2, 'Hitman', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(3, 'Romeral', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(4, 'HP', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(5, 'Casio', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(6, 'Mistyc', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `codigo` varchar(10) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `stock` int(11) NOT NULL,
  `lote` varchar(10) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `id_marca` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `codigo`, `nombre`, `descripcion`, `stock`, `lote`, `id_categoria`, `id_marca`) VALUES
(1, '0102456', 'Esmeril', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 0, 'Z1w3T', 2, 1),
(2, '0356489725', 'Zegueta', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 15, 'SD12gT', 1, 3),
(3, '3654978702', 'Pala', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 15, 'GT984', 4, 2),
(4, '3564879365', 'Clavos', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 20, 'TT434', 2, 1),
(5, '2364548795', 'Alambre', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 90, 'DEE43', 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedors`
--

CREATE TABLE `proveedors` (
  `id` int(11) NOT NULL,
  `rif` varchar(15) NOT NULL,
  `razon_social` varchar(100) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `correo` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `proveedors`
--

INSERT INTO `proveedors` (`id`, `rif`, `razon_social`, `nombre`, `telefono`, `direccion`, `correo`) VALUES
(1, 'J-13923475-1', 'Distribuciones Ferrer', 'Wilmer Mendoza', '04143941406', 'Barrio Altamira - Calle las Brisas', 'wilmermendoza@gmail.com'),
(2, 'J-12234339-2', 'Distribuidora Carabobeña', 'Wladimir Mendez', '04248832412', 'Calle Juncal cruce con Calle Monagas', 'wladimirmendez@gmail.com'),
(3, 'J-25648972-4', 'Distribuidora Materiales Cain. C.A', 'Marco Manuel Rodríguez', '04142154654', 'Caracas - calle Guarenas', 'marcomanuel132@gmail.com'),
(4, 'J-13112378-2', 'Inversiones Solera', 'Carlos Figueroa', '04125021468', 'Punta de Mata - Estado Monagas', 'carlos1232figueroa@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `stockmermas`
--

CREATE TABLE `stockmermas` (
  `id` int(11) NOT NULL,
  `motivo` varchar(100) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `cedula` varchar(10) NOT NULL,
  `login` varchar(15) NOT NULL,
  `password` varchar(8) NOT NULL,
  `rol` varchar(15) NOT NULL,
  `pregunta` varchar(50) NOT NULL,
  `respuesta` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id` int(11) NOT NULL,
  `id_empresa` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `tipocomprobante` varchar(15) NOT NULL,
  `seriecomprobante` varchar(15) NOT NULL,
  `numcomprobante` int(11) NOT NULL,
  `fecha_hora` datetime NOT NULL,
  `impuesto` decimal(20,2) NOT NULL,
  `totalventa` decimal(20,2) NOT NULL,
  `estatus` tinyint(1) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id`, `id_empresa`, `id_cliente`, `tipocomprobante`, `seriecomprobante`, `numcomprobante`, `fecha_hora`, `impuesto`, `totalventa`, `estatus`, `id_usuario`) VALUES
(1, 1, 1, 'Factura', '0001', 1, '2019-05-09 07:07:44', '16.00', '22100.00', 0, NULL),
(2, 1, 3, 'Factura', '00012', 35, '2019-05-09 09:05:25', '16.00', '39000.00', 1, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bitacoras`
--
ALTER TABLE `bitacoras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bitacorausuario` (`id_usuario`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalles_ingresos`
--
ALTER TABLE `detalles_ingresos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ingresodetalles` (`id_ingreso`),
  ADD KEY `detalleingresoproducto` (`id_producto`);

--
-- Indices de la tabla `detalles_ventas`
--
ALTER TABLE `detalles_ventas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detalleventa` (`id_venta`),
  ADD KEY `productodetallesventa` (`id_producto`);

--
-- Indices de la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ingresos`
--
ALTER TABLE `ingresos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ingresoproveedor` (`id_proveedor`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoriaproducto` (`id_categoria`),
  ADD KEY `marcaproducto` (`id_marca`);

--
-- Indices de la tabla `proveedors`
--
ALTER TABLE `proveedors`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `stockmermas`
--
ALTER TABLE `stockmermas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mermaproductos` (`id_producto`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ventacliente` (`id_cliente`),
  ADD KEY `empresaventa` (`id_empresa`),
  ADD KEY `usuarioventa` (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bitacoras`
--
ALTER TABLE `bitacoras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `detalles_ingresos`
--
ALTER TABLE `detalles_ingresos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `detalles_ventas`
--
ALTER TABLE `detalles_ventas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `ingresos`
--
ALTER TABLE `ingresos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `proveedors`
--
ALTER TABLE `proveedors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `stockmermas`
--
ALTER TABLE `stockmermas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `bitacoras`
--
ALTER TABLE `bitacoras`
  ADD CONSTRAINT `bitacorausuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `detalles_ingresos`
--
ALTER TABLE `detalles_ingresos`
  ADD CONSTRAINT `detalleingresoproducto` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ingresodetalles` FOREIGN KEY (`id_ingreso`) REFERENCES `ingresos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `detalles_ventas`
--
ALTER TABLE `detalles_ventas`
  ADD CONSTRAINT `detalleventa` FOREIGN KEY (`id_venta`) REFERENCES `ventas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `productodetallesventa` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ingresos`
--
ALTER TABLE `ingresos`
  ADD CONSTRAINT `ingresoproveedor` FOREIGN KEY (`id_proveedor`) REFERENCES `proveedors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `categoriaproducto` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `marcaproducto` FOREIGN KEY (`id_marca`) REFERENCES `marcas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `stockmermas`
--
ALTER TABLE `stockmermas`
  ADD CONSTRAINT `mermaproductos` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `empresaventa` FOREIGN KEY (`id_empresa`) REFERENCES `empresas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuarioventa` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ventacliente` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
