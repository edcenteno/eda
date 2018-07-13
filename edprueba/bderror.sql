-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-01-2018 a las 03:04:22
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bderror`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE `articulo` (
  `idarticulo` int(11) NOT NULL,
  `idcategoria` int(11) NOT NULL,
  `idunidad_medida` int(11) NOT NULL,
  `nombre` varchar(50) CHARACTER SET latin1 NOT NULL,
  `descripcion` text CHARACTER SET latin1,
  `imagen` varchar(150) CHARACTER SET latin1 DEFAULT NULL,
  `estado` char(1) CHARACTER SET latin1 NOT NULL,
  `codigo_barra` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`idarticulo`, `idcategoria`, `idunidad_medida`, `nombre`, `descripcion`, `imagen`, `estado`, `codigo_barra`) VALUES
(4561, 20, 1, '5414331180', 'BOLA CAMPO S11 R1 VII BC-PT-AM T -U', 'Files/Articulo/BOLA CAMPO S11_r1.jpg', 'A', ''),
(4562, 19, 1, '4107539800', 'MEDIA MATIS JUVENIL TRAINING VII PT T ', 'Files/Articulo/media matis juvenil.jpg', 'A', ''),
(4564, 19, 1, '4107529800', 'MEDIA VICTORIA VII  PT-BC T', 'Files/Articulo/media victoria.jpg', 'A', ''),
(4565, 19, 1, '4107526091', 'MEDIA VICTORIA VII MR-BC T', 'Files/Articulo/media mr.jpg', 'A', ''),
(4566, 19, 1, '4107521110', 'MEDIA  VICTORIA  BC-PT T ', 'Files/Articulo/media1.jpg', 'A', ''),
(4567, 19, 1, '4111101110', 'MEDIA TRAINING VII BC-PT T ', 'Files/Articulo/media training.jpg', 'A', ''),
(4568, 19, 1, '4107571110', 'MEDIA MATIS ADULTO VII  BC-PT T', 'Files/Articulo/media matis adulto.jpg', 'A', ''),
(4569, 19, 1, '4302221192', 'MEDIA TRIPACK CANO INVISIVEL', 'Files/Articulo/media tripack.jpg', 'A', ''),
(4570, 17, 1, '6530159000-P', 'JOELHEIRA SUPORTE PARA ROTULA NEOPRENE PT T -P - Cod: 650022', 'Files/Articulo/JOELHEIRA 3.jpg', 'A', ''),
(4571, 17, 1, '6530159000-M', 'JOELHEIRA SUPORTE PARA ROTULA NEOPRENE PT T -M- Cod: 650022', 'Files/Articulo/JOELHEIRA 2.jpg', 'A', ''),
(4572, 17, 1, '6530159000-G', 'JOELHEIRA SUPORTE PARA ROTULA NEOPRENE PT T -G - Cod: 650022', 'Files/Articulo/JOELHEIRA 1.jpg', 'A', ''),
(4573, 17, 1, '6530209000-P', 'TORNOZELEIRA NEOPRENE IV PT T -P Cod: 641017', 'Files/Articulo/TORNOZELEIRA 1.jpg', 'A', ''),
(4574, 17, 1, '6530209000-M', 'TORNOZELEIRA NEOPRENE IV PT T -M Cod: 641017', 'Files/Articulo/TORNOZELEIRA 2.jpg', 'A', ''),
(4575, 17, 1, '6530209000-G', 'TORNOZELEIRA NEOPRENE IV PT T -Y Cod: 641017', 'Files/Articulo/TORNOZELEIRA 3.jpg', 'A', ''),
(4576, 20, 1, '5414301170', 'BOLA S11 CAMPO PRO VII BC-PT-LJ T -U', 'Files/Articulo/BOLA CAMPO S11_2.jpg', 'A', ''),
(4577, 20, 1, '5414331170', 'BOLA CAMPO S11 R1 VII BC-PT-LJ T -U', 'Files/Articulo/BOLA CAMPO S11.jpg', 'A', ''),
(4578, 17, 1, '6530179000-G', 'COXAL NEOPRENE IV PT T -G - Cod: 652015', 'Files/Articulo/coxal neoprene 3.jpg', 'A', ''),
(4579, 17, 1, '6530179000-M', 'COXAL NEOPRENE IV PT T -M - Cod: 652015', 'Files/Articulo/coxal neoprene 2.jpg', 'A', ''),
(4580, 17, 1, '6530179000-P', 'COXAL NEOPRENE IV PT T -P - Cod: 652015', 'Files/Articulo/coxal neoprene.jpg', 'A', ''),
(4581, 17, 1, '6101352470-U', 'CANELEIRA MATIS VI AM-MR T -U', 'Files/Articulo/caneleira matis 3.jpg', 'A', ''),
(4582, 17, 1, '6101356820-U', 'CANELEIRA MATIS VI MR-VD T -U', 'Files/Articulo/caneleira matis 2.jpg', 'A', ''),
(4583, 17, 1, '6101359600-U', 'CANELEIRA MATIS VI PT-LJ T -U', 'Files/Articulo/caneleira matis.jpg', 'A', ''),
(4584, 17, 1, '6101331400-U', 'CANELEIRA BRASIL 70 V BC-AZ T -U', 'Files/Articulo/caneleira 2.jpg', 'A', ''),
(4585, 17, 1, '6101339600-U', 'CANELEIRA BRASIL 70 V PT-LJ T -U', 'Files/Articulo/caneleira.jpg', 'A', ''),
(4586, 19, 1, '4107579800', 'MEDIA MATIS ADULTO VII PT T', 'Files/Articulo/media matis adulto.jpg', 'A', ''),
(4587, 19, 1, '4107531110', 'MEDIA MATIS JUVENIL TRAINING VII BC PT T', 'Files/Articulo/media matis juvenil.jpg', 'A', ''),
(4588, 19, 1, '4136311110', 'MEDIA MATIS KIDS', 'Files/Articulo/Media Kids.png', 'A', ''),
(4589, 27, 1, 'RINAT16', 'CAMISETA DE ARQUERO RINAT NIÃ‘O TALLA 16', 'Files/Articulo/prueba1.jpg', 'A', ''),
(4590, 27, 1, 'RINATNINO14', 'CAMISETA DE ARQUERO RINAT NIÃ‘O TALLA 14', 'Files/Articulo/prueba1.jpg', 'A', ''),
(4591, 27, 1, 'RINATNINO12', 'CAMISETA DE ARQUERO RINAT NIÃ‘O TALLA 12', 'Files/Articulo/prueba1.jpg', 'A', ''),
(4592, 27, 1, '3110999700', 'CAM GOL S11 PRO 12 I ML PT AM T M TALLA S', 'Files/Articulo/prueba1.jpg', 'A', ''),
(4593, 27, 1, '3110999831', 'CAM GOL S11 PRO 12 I ML PT MG - TALLA L', '', 'A', ''),
(4594, 27, 1, '3110999831', 'CAM GOL S11 PRO 12 I ML PT AM T M TALLA MEDIO', '', 'A', ''),
(4595, 27, 1, '3110999700', 'CAM GOL S11 PRO 12 I ML PT AM TALLA L', '', 'A', ''),
(4596, 27, 1, '3110999700', 'CAM GOL S11 PRO 12 I ML PT AM TALLA  XL', '', 'A', ''),
(4597, 27, 1, '3110999700', 'CAM GOL S11 PRO 12 I ML PT AM TALLA M', '', 'A', ''),
(4598, 27, 1, '3110999831', 'CAM GOL S11 PRO 12 I ML PT MG - TALLA XL', '', 'A', ''),
(4599, 27, 1, 'UHSPORT', 'CAMISETA DE ARQUERO UHLSPORT', '', 'A', ''),
(4600, 19, 1, '4107196090', 'MEDIA DIGITAL 2012 TALLA 39-43', '', 'A', ''),
(4601, 19, 1, '4107148330', 'MEDIA S11 KANGURU 2012 ', '', 'A', ''),
(4602, 19, 1, 'MUFCSOCK', 'MUFC H SOCK', '', 'A', ''),
(4603, 19, 1, 'TEAMSOCK', 'SOCCER TEAM SOCK', 'Files/Articulo/MEDIA.jpg', 'A', ''),
(4604, 19, 1, 'MATISMEDIA', 'MEDIA MATIS INFANTIL 2012', 'Files/Articulo/MEDIA.jpg', 'A', ''),
(4605, 19, 1, 'TRIPACKMEDIA', 'TRIPACK MEDIAS ADIDAS ', 'Files/Articulo/MEDIA.jpg', 'A', ''),
(4606, 19, 1, 'DRAGONCITO', 'MEDIAS DRAGONCITO NIÃ‘O TALLA 6-9', 'Files/Articulo/MEDIA.jpg', 'A', ''),
(4607, 19, 1, 'DRAGONCITO.', 'MEDIAS DRAGONCITO NIÃ‘O TALLA 10-13', 'Files/Articulo/MEDIA.jpg', 'A', ''),
(4608, 25, 1, '6202469660G', 'LUVA DELTA ASTRO KIDS PT LI VM', 'Files/Articulo/LUVA GUANTE KIDS.jpg', 'A', ''),
(4609, 25, 1, '6202469660M', 'LUVA DELTA ASTRO KIDS PT LI VM', 'Files/Articulo/LUVA GUANTE KIDS.jpg', 'A', ''),
(4610, 25, 1, '6202469660P', 'LUVA DELTA ASTRO KIDS PT LI VM', 'Files/Articulo/LUVA GUANTE KIDS.jpg', 'A', ''),
(4611, 25, 1, '6202469470G', 'LUVA DELTA ASTRO KIDS PT VD AM', 'Files/Articulo/LUVA GUANTE KIDS VD.jpg', 'A', '555555'),
(4612, 25, 1, '6202469470M', 'LUVA DELTA ASTRO KIDS PT VD AM', 'Files/Articulo/LUVA GUANTE KIDS VD.jpg', 'A', '555'),
(4613, 25, 1, '6202469470P', 'LUVA DELTA ASTRO KIDS PT VD AM', 'Files/Articulo/LUVA GUANTE KIDS VD.jpg', 'A', ''),
(4614, 25, 1, '620218320010', 'LUVA DELTA PRO EXO V LI BC', 'Files/Articulo/LUVA GUANTE DELTRAPRO.jpg', 'A', ''),
(4615, 25, 1, '620218320009', 'LUVA DELTA PRO EXO V LI BC', 'Files/Articulo/LUVA GUANTE DELTRAPRO.jpg', 'A', ''),
(4616, 25, 1, '620227966010', 'LUVA DELTA ASTRO TRAINING PT-LI-VM', 'Files/Articulo/LUVA GUANTE astro training.jpg', 'A', ''),
(4617, 25, 1, '620227966009', 'LUVA DELTA ASTRO TRAINING PT-LI-VM', 'Files/Articulo/LUVA GUANTE astro training.jpg', 'A', ''),
(4618, 25, 1, '620227966008', 'LUVA DELTA ASTRO TRAINING PT-LI-VM', 'Files/Articulo/LUVA GUANTE astro training.jpg', 'A', ''),
(4619, 20, 1, '5107731960', 'BOLA CAMPO MATIS N3', 'Files/Articulo/bola campo.jpg', 'A', ''),
(4620, 20, 1, '5107721151', 'BOLA CAMPO MATIS N4', 'Files/Articulo/bola campo.jpg', 'A', ''),
(4621, 20, 1, '5112511450', 'BOLA CAMPO DIGITAL C/C BC - COD:511281', 'Files/Articulo/bola campo.jpg', 'A', ''),
(4622, 20, 1, '5112531450', 'BOLA CAMPO COD: 511281', 'Files/Articulo/bola campo.jpg', 'A', ''),
(4623, 20, 1, '5107761110', 'BOLA CAMPO PLAYER BC-PT-TU', 'Files/Articulo/bola campo.jpg', 'A', ''),
(4624, 20, 1, '5112741810', 'BOLA DIGITAL FULBITO - COD 511284', 'Files/Articulo/bola campo.jpg', 'A', ''),
(4625, 20, 1, '5107691711', 'BOLA STORM FULBITO', 'Files/Articulo/bola campo.jpg', 'A', ''),
(4626, 20, 1, '5112531450', 'BOLA  FUTSAL DIGITAL 500 - COD:511283', 'Files/Articulo/bola campo.jpg', 'A', ''),
(4627, 20, 1, '5302503020', 'BOLA BASQUETE SHOOT', 'Files/Articulo/Logo sotefutbol1.png', 'A', ''),
(4628, 20, 1, '5107741542', 'BOLA CAMPO STORM VII BC-VD-DR', 'Files/Articulo/bola campo.jpg', 'A', ''),
(4629, 20, 1, '5107741640', 'BOLA CAMPO STORM VII BC-VC-VM-AZ', 'Files/Articulo/bola campo.jpg', 'A', ''),
(4630, 20, 1, '5107371640', 'BOLA VOLEY MG 3600', 'Files/Articulo/BOLA VOLLEY.jpg', 'A', ''),
(4631, 20, 1, '5107371992', 'BOLA VOLLEY MG 3600', 'Files/Articulo/BOLA VOLLEY.jpg', 'A', ''),
(4632, 28, 1, '310302', 'Polo Rojo de entrenamiento peru espaÃ±a 82 - 1600 RE', 'Files/Articulo/ENTRENAMIENTO PERU 82.jpg', 'A', ''),
(4633, 28, 1, '310301', 'Polo Blanco de entrenamiento peru espaÃ±a 82 - 1600 WH', 'Files/Articulo/kit espaÃ±a 82.jpg', 'A', ''),
(4634, 2, 1, '310300', 'CAMISETA PENALTY PERU ESPAÃ‘A 82  - 1600 BC VM', 'Files/Articulo/CAMISETA ORIGINAL PERU 82.jpeg', 'A', ''),
(4635, 20, 1, '5107767500', 'BOLA CAMPO PLAYER RX-AM-TU', 'Files/Articulo/futebol1.jpg', 'A', ''),
(4636, 25, 1, '620218320008', 'LUVA DELTA PRO EXO V LI BC', 'Files/Articulo/futebol1.jpg', 'A', ''),
(4637, 28, 1, 'ax', 'adasdasd', 'Files/Articulo/penalty.png', 'A', '1234563');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `idcategoria` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `estado` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`idcategoria`, `nombre`, `estado`) VALUES
(2, 'CAMISETA', 'A'),
(17, 'IMPLEMENTOS MEDICINALES', 'A'),
(19, 'MEDIAS', 'A'),
(20, 'PELOTAS', 'A'),
(21, 'OTROS', 'A'),
(22, 'SHORT', 'A'),
(23, 'CASACA BUZOS', 'A'),
(24, 'ACCESORIOS', 'A'),
(25, 'GUANTES', 'A'),
(26, 'CHIMPUNES', 'A'),
(27, 'ARQUERO CAMISETA PANTALON', 'A'),
(28, 'POLO', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `credito`
--

CREATE TABLE `credito` (
  `idcredito` int(11) NOT NULL,
  `idventa` int(11) NOT NULL,
  `fecha_pago` date NOT NULL,
  `total_pago` decimal(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_documento_sucursal`
--

CREATE TABLE `detalle_documento_sucursal` (
  `iddetalle_documento_sucursal` int(11) NOT NULL,
  `idsucursal` int(11) NOT NULL,
  `idtipo_documento` int(11) NOT NULL,
  `ultima_serie` varchar(7) NOT NULL,
  `ultimo_numero` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `detalle_documento_sucursal`
--

INSERT INTO `detalle_documento_sucursal` (`iddetalle_documento_sucursal`, `idsucursal`, `idtipo_documento`, `ultima_serie`, `ultimo_numero`) VALUES
(1, 1, 3, '0001', '00001'),
(2, 1, 12, '0001', '00002'),
(3, 1, 7, '0001', '00003'),
(4, 1, 9, '0001', '00666'),
(5, 1, 6, '0002', '00001'),
(6, 1, 17, '0001', '00001'),
(7, 1, 10, '0001', '00001'),
(8, 1, 11, '0001', '00001'),
(9, 1, 15, '0001', '00001'),
(10, 1, 16, '0001', '00001'),
(11, 1, 18, '0001', '00500');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_ingreso`
--

CREATE TABLE `detalle_ingreso` (
  `iddetalle_ingreso` int(11) NOT NULL,
  `idingreso` int(11) NOT NULL,
  `idarticulo` int(11) NOT NULL,
  `codigo` varchar(50) NOT NULL,
  `serie` varchar(50) DEFAULT NULL,
  `descripcion` varchar(1024) DEFAULT NULL,
  `stock_ingreso` int(11) NOT NULL,
  `stock_actual` int(11) NOT NULL,
  `precio_compra` decimal(8,2) NOT NULL,
  `precio_ventadistribuidor` decimal(8,2) NOT NULL,
  `precio_ventapublico` decimal(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `detalle_ingreso`
--

INSERT INTO `detalle_ingreso` (`iddetalle_ingreso`, `idingreso`, `idarticulo`, `codigo`, `serie`, `descripcion`, `stock_ingreso`, `stock_actual`, `precio_compra`, `precio_ventadistribuidor`, `precio_ventapublico`) VALUES
(15, 8, 4566, '4107521110', 'MEDIA  VICTORIA  BC-PT T ', '', 240, 240, '10.76', '17.21', '36.67'),
(16, 8, 4565, '4107526091', 'MEDIA VICTORIA VII MR-BC T', '', 240, 240, '10.76', '17.21', '36.67'),
(17, 8, 4564, '4107529800', 'MEDIA VICTORIA VII  PT-BC T', '', 240, 240, '10.76', '17.21', '36.67'),
(18, 8, 4568, '4107571110', 'MEDIA MATIS ADULTO VII  BC-PT T', '', 240, 240, '7.75', '12.40', '26.41'),
(19, 8, 4586, '4107579800', 'MEDIA MATIS ADULTO VII PT T', '', 240, 240, '7.75', '12.40', '26.41'),
(20, 8, 4587, '4107531110', 'MEDIA MATIS JUVENIL TRAINING VII BC PT T', '', 360, 360, '9.41', '15.05', '32.05'),
(21, 8, 4562, '4107539800', 'MEDIA MATIS JUVENIL TRAINING VII PT T ', '', 360, 360, '9.41', '15.05', '32.05'),
(22, 8, 4588, '4136311110', 'MEDIA MATIS KIDS', '', 720, 720, '7.30', '11.68', '24.87'),
(23, 8, 4567, '4111101110', 'MEDIA TRAINING VII BC-PT T ', '', 720, 720, '6.88', '11.02', '23.46'),
(24, 8, 4569, '4302221192', 'MEDIA TRIPACK CANO INVISIVEL', '', 600, 600, '7.52', '12.04', '25.64'),
(25, 9, 4576, '5414301170', 'BOLA S11 CAMPO PRO VII BC-PT-LJ T -U', '', 500, 500, '131.67', '210.67', '265.00'),
(26, 9, 4577, '5414331170', 'BOLA CAMPO S11 R1 VII BC-PT-LJ T -U', '', 1500, 1500, '75.24', '120.38', '150.00'),
(27, 9, 4561, '5414331180', 'BOLA CAMPO S11 R1 VII BC-PT-AM T -U', '', 1000, 1000, '75.24', '120.38', '150.00'),
(28, 10, 4575, '6530209000-G', 'TORNOZELEIRA NEOPRENE IV PT T -Y Cod: 650022', '', 200, 200, '12.23', '22.03', '41.67'),
(29, 10, 4574, '6530209000-M', 'TORNOZELEIRA NEOPRENE IV PT T -M Cod: 650022', '', 500, 500, '12.23', '22.03', '41.67'),
(30, 10, 4573, '6530209000-P', 'TORNOZELEIRA NEOPRENE IV PT T -P Cod: 650022', '', 200, 200, '12.23', '22.03', '41.67'),
(31, 10, 4572, '6530159000-G', 'JOELHEIRA SUPORTE PARA ROTULA NEOPRENE PT T -G - C', '', 200, 200, '13.17', '23.02', '44.87'),
(32, 10, 4571, '6530159000-M', 'JOELHEIRA SUPORTE PARA ROTULA NEOPRENE PT T -M- Co', '', 500, 500, '13.17', '23.02', '44.87'),
(33, 10, 4570, '6530159000-P', 'JOELHEIRA SUPORTE PARA ROTULA NEOPRENE PT T -P - C', '', 200, 200, '13.17', '23.02', '44.87'),
(34, 10, 4580, '6530179000-P', 'COXAL NEOPRENE IV PT T -P - Cod: 652015', '', 200, 200, '11.78', '20.98', '40.13'),
(35, 10, 4579, '6530179000-M', 'COXAL NEOPRENE IV PT T -M - Cod: 652015', '', 500, 500, '11.78', '20.98', '40.13'),
(36, 10, 4578, '6530179000-G', 'COXAL NEOPRENE IV PT T -G - Cod: 652015', '', 200, 200, '11.78', '20.98', '40.13'),
(37, 10, 4583, '6101359600-U', 'CANELEIRA MATIS VI PT-LJ T -U', '', 300, 300, '7.13', '11.40', '24.29'),
(38, 10, 4582, '6101356820-U', 'CANELEIRA MATIS VI MR-VD T -U', '', 600, 600, '7.13', '11.40', '24.29'),
(39, 10, 4581, '6101352470-U', 'CANELEIRA MATIS VI AM-MR T -U', '', 300, 300, '7.13', '11.40', '24.29'),
(40, 10, 4585, '6101339600-U', 'CANELEIRA BRASIL 70 V PT-LJ T -U', '', 600, 600, '7.13', '11.40', '24.29'),
(41, 10, 4584, '6101331400-U', 'CANELEIRA BRASIL 70 V BC-AZ T -U', '', 600, 600, '7.13', '11.40', '24.29'),
(42, 11, 4619, '5107731960', 'BOLA CAMPO MATIS N3', '', 1200, 1200, '21.30', '36.71', '72.61'),
(43, 11, 4620, '5107721151', 'BOLA CAMPO MATIS N4', '', 1200, 1200, '21.30', '36.71', '72.61'),
(44, 11, 4621, '5112511450', 'BOLA CAMPO DIGITAL C/C BC - COD:511281', '', 1200, 1200, '24.75', '47.15', '84.35'),
(45, 11, 4626, '5112531450', 'BOLA  FUTSAL DIGITAL 500 - COD:511283', '', 1200, 1200, '25.74', '47.15', '87.72'),
(46, 11, 4625, '5107691711', 'BOLA STORM FULBITO', '', 1200, 1200, '22.28', '41.00', '75.91'),
(47, 11, 4624, '5112741810', 'BOLA DIGITAL FULBITO - COD 511284', '', 1200, 1200, '27.23', '47.15', '92.78'),
(48, 11, 4623, '5107761110', 'BOLA CAMPO PLAYER BC-PT-TU', '', 2004, 2004, '14.36', '20.45', '48.92'),
(49, 11, 4635, '5107767500', 'BOLA CAMPO PLAYER RX-AM-TU', '', 2004, 2004, '14.36', '20.45', '48.92'),
(50, 12, 4627, '5302503020', 'BOLA BASQUETE SHOOT', '', 1200, 1200, '14.37', '23.00', '48.99'),
(51, 12, 4628, '5107741542', 'BOLA CAMPO STORM VII BC-VD-DR', '', 600, 600, '22.28', '35.64', '75.91'),
(52, 12, 4629, '5107741640', 'BOLA CAMPO STORM VII BC-VC-VM-AZ', '', 600, 600, '22.28', '35.64', '75.91'),
(53, 13, 4630, '5107371640', 'BOLA VOLEY MG 3600', '', 600, 600, '15.09', '24.14', '51.42'),
(54, 13, 4631, '5107371992', 'BOLA VOLLEY MG 3600', '', 600, 600, '15.09', '24.14', '51.42'),
(55, 13, 4618, '620227966008', 'LUVA DELTA ASTRO TRAINING PT-LI-VM', '', 300, 300, '24.40', '39.05', '83.17'),
(56, 13, 4617, '620227966009', 'LUVA DELTA ASTRO TRAINING PT-LI-VM', '', 450, 450, '24.40', '39.05', '83.17'),
(57, 13, 4616, '620227966010', 'LUVA DELTA ASTRO TRAINING PT-LI-VM', '', 150, 150, '24.40', '39.05', '83.17'),
(58, 13, 4636, '620218320008', 'LUVA DELTA PRO EXO V LI BC', '', 300, 300, '64.30', '102.88', '219.14'),
(59, 13, 4615, '620218320009', 'LUVA DELTA PRO EXO V LI BC', '', 450, 450, '64.30', '102.88', '219.14'),
(60, 13, 4614, '620218320010', 'LUVA DELTA PRO EXO V LI BC', '', 150, 150, '64.30', '102.88', '219.14'),
(61, 13, 4613, '6202469470P', 'LUVA DELTA ASTRO KIDS PT VD AM', '', 75, 75, '22.97', '36.75', '78.27'),
(62, 13, 4612, '6202469470M', 'LUVA DELTA ASTRO KIDS PT VD AM', '555', 225, 225, '22.97', '36.75', '78.27'),
(63, 13, 4611, '6202469470G', 'LUVA DELTA ASTRO KIDS PT VD AM', '555555', 150, 150, '22.97', '36.75', '78.27'),
(64, 13, 4610, '6202469660P', 'LUVA DELTA ASTRO KIDS PT LI VM', '', 75, 75, '22.97', '36.75', '78.27'),
(65, 13, 4609, '6202469660M', 'LUVA DELTA ASTRO KIDS PT LI VM', '', 225, 225, '22.97', '36.75', '78.27'),
(66, 13, 4608, '6202469660G', 'LUVA DELTA ASTRO KIDS PT LI VM', '', 150, 150, '22.97', '36.75', '78.27'),
(67, 14, 4633, '310301', 'Polo Blanco de entrenamiento peru espaÃ±a 82 - 160', '', 43, 43, '16.00', '25.00', '25.00'),
(68, 14, 4632, '310302', 'Polo Rojo de entrenamiento peru espaÃ±a 82 - 1600 ', '', 16, 16, '16.00', '25.00', '25.00'),
(69, 14, 4634, '310300', 'CAMISETA PENALTY PERU ESPAÃ‘A 82  - 1600 BC VM', '', 51, 51, '30.00', '41.43', '41.43');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_pedido`
--

CREATE TABLE `detalle_pedido` (
  `iddetalle_pedido` int(11) NOT NULL,
  `idpedido` int(11) NOT NULL,
  `iddetalle_ingreso` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio_venta` decimal(8,2) NOT NULL,
  `descuento` decimal(8,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `detalle_pedido`
--

INSERT INTO `detalle_pedido` (`iddetalle_pedido`, `idpedido`, `iddetalle_ingreso`, `cantidad`, `precio_venta`, `descuento`) VALUES
(27, 24, 69, 1, '41.43', '0.00'),
(28, 25, 67, 1, '25.00', '0.00'),
(30, 27, 69, 1, '41.43', '0.00'),
(70, 32, 30, 6, '41.67', '0.00'),
(71, 32, 29, 6, '41.67', '0.00'),
(72, 32, 28, 6, '41.67', '0.00'),
(73, 32, 33, 6, '44.87', '0.00'),
(74, 32, 32, 6, '44.87', '0.00'),
(75, 32, 31, 6, '44.87', '0.00'),
(76, 32, 34, 6, '40.13', '0.00'),
(77, 32, 35, 6, '40.13', '0.00'),
(78, 32, 36, 6, '40.13', '0.00'),
(79, 32, 42, 10, '72.61', '0.00'),
(80, 32, 46, 10, '75.91', '0.00'),
(81, 32, 44, 4, '84.35', '0.00'),
(82, 32, 45, 10, '87.72', '0.00'),
(83, 32, 48, 80, '48.92', '0.00'),
(84, 32, 69, 4, '41.43', '0.00'),
(85, 32, 69, 4, '41.43', '0.00'),
(86, 32, 69, 2, '41.43', '0.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `idempleado` int(11) NOT NULL,
  `apellidos` varchar(40) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `tipo_documento` varchar(20) NOT NULL,
  `num_documento` varchar(20) NOT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `email` varchar(70) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `foto` varchar(50) NOT NULL,
  `login` varchar(50) NOT NULL,
  `clave` varchar(32) NOT NULL,
  `estado` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`idempleado`, `apellidos`, `nombre`, `tipo_documento`, `num_documento`, `direccion`, `telefono`, `email`, `fecha_nacimiento`, `foto`, `login`, `clave`, `estado`) VALUES
(1, 'Torres', 'Adalberto', 'DNI', '10002053', 'Alemania 401', '997877414', 'tiingenieros@gmail.com', '0000-00-00', '', 'admin', 'ac917c38f591255c6924394c101a501e', 'S'),
(3, 'Correa', 'Jossly', 'DNI', '10002052', 'Caceres 401', '997877414', 'josslycorrea@gmail.com', '2016-12-02', 'Files/Empleado/ivan.jpg', 'vendedor', 'ac917c38f591255c6924394c101a501e', 'A'),
(4, 'Rodriguez Colque', 'Jean Paul', 'DNI', '10205600', 'Pueblo Libre', '2471130', '', '1980-01-01', '', 'jeanpaul', '0771e3b76ae2f2838e69351031497b1e', 'A'),
(5, 'Vidal', 'Rafo', 'DNI', '10002050', 'Surco', '2470530', 'rafo.vidal@penaltyperu.com', '1980-01-15', '', 'rafo', 'ad99ca6fd94da792868edb2e0b28acc5', 'A'),
(6, 'CALDERON', 'GILBERTO', 'RUC', '10002000', 'LURIN', '', '', '1980-01-01', '', 'GILBERTO', '94f183f7afc290abf62929e2159f91f2', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `global`
--

CREATE TABLE `global` (
  `idglobal` int(11) NOT NULL,
  `empresa` varchar(100) NOT NULL,
  `nombre_impuesto` varchar(10) NOT NULL,
  `porcentaje_impuesto` decimal(5,0) NOT NULL,
  `simbolo_moneda` varchar(5) NOT NULL,
  `logo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `global`
--

INSERT INTO `global` (`idglobal`, `empresa`, `nombre_impuesto`, `porcentaje_impuesto`, `simbolo_moneda`, `logo`) VALUES
(1, 'NEGOCIOS ESPORTIVOS SAC', 'IGV 18%', '18', 'S/', 'Files/Global/Logo sotefutbol1.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingreso`
--

CREATE TABLE `ingreso` (
  `idingreso` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `idsucursal` int(11) NOT NULL,
  `idproveedor` int(11) NOT NULL,
  `tipo_comprobante` varchar(20) NOT NULL,
  `serie_comprobante` varchar(7) NOT NULL,
  `num_comprobante` varchar(10) NOT NULL,
  `fecha` date NOT NULL,
  `impuesto` decimal(8,2) NOT NULL,
  `total` decimal(8,2) NOT NULL,
  `estado` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ingreso`
--

INSERT INTO `ingreso` (`idingreso`, `idusuario`, `idsucursal`, `idproveedor`, `tipo_comprobante`, `serie_comprobante`, `num_comprobante`, `fecha`, `impuesto`, `total`, `estado`) VALUES
(8, 25, 1, 5, 'ORDEN', '0001', '9830', '2017-12-14', '18.00', '32964.00', 'A'),
(9, 25, 1, 5, 'GUIA-REMISION', '001', '9066', '2017-12-14', '18.00', '253935.00', 'A'),
(10, 25, 1, 5, 'ORDEN', '001', '9831', '2017-12-14', '18.00', '50574.00', 'A'),
(11, 25, 1, 10, 'ORDEN', '001', '271', '2017-12-14', '18.00', '228674.88', 'A'),
(12, 25, 1, 10, 'ORDEN', '001', '272', '2017-12-14', '18.00', '43980.00', 'A'),
(13, 25, 1, 5, 'ORDEN', '001', 'CAM03', '2017-12-14', '18.00', '118611.00', 'A'),
(14, 25, 1, 11, 'ORDEN', '001', '141217-01', '2017-12-14', '18.00', '2474.00', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `idpedido` int(11) NOT NULL,
  `idcliente` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `idsucursal` int(11) NOT NULL,
  `tipo_pedido` varchar(20) NOT NULL,
  `fecha` date NOT NULL,
  `numero` int(11) DEFAULT NULL,
  `estado` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`idpedido`, `idcliente`, `idusuario`, `idsucursal`, `tipo_pedido`, `fecha`, `numero`, `estado`) VALUES
(24, 8, 24, 1, 'Venta', '2017-12-20', 333, 'C'),
(25, 2, 24, 1, 'Venta', '2017-12-23', 334, 'C'),
(27, 2, 24, 1, 'Venta', '2017-12-29', 336, 'C'),
(32, 8, 31, 1, 'Pedido', '2017-12-30', 339, 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `idpersona` int(11) NOT NULL,
  `tipo_persona` varchar(20) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `tipo_documento` varchar(20) NOT NULL,
  `num_documento` varchar(20) NOT NULL,
  `direccion_departamento` varchar(45) DEFAULT NULL,
  `direccion_provincia` varchar(45) DEFAULT NULL,
  `direccion_distrito` varchar(45) DEFAULT NULL,
  `direccion_calle` varchar(70) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `numero_cuenta` varchar(32) DEFAULT NULL,
  `estado` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`idpersona`, `tipo_persona`, `nombre`, `tipo_documento`, `num_documento`, `direccion_departamento`, `direccion_provincia`, `direccion_distrito`, `direccion_calle`, `telefono`, `email`, `numero_cuenta`, `estado`) VALUES
(1, 'Proveedor', 'CORREA GONZALEZ S.A.C.', 'NIC', '20600123123', 'Lima', 'Lima', 'San Isidro', 'Av Aramburu', '257896', 'carlos@gmail.com', '305871596336', 'A'),
(2, 'Cliente', 'VARIOS', 'DNI', '10002050', 'Lima', 'Lima', 'LIMA', 'Lima', '2471125', 'tiingenieros@gmail.com', '', 'A'),
(3, 'Proveedor', 'ALMERCO ABOGADOS S.A.C.', 'RUC', '2', 'Lima', 'Lima', 'Lima', '1351', '9874565889', 'nuevoperu@gmail.com', '678646546546546548', 'A'),
(4, 'Cliente', 'Lily Gonzalez', 'DNI', '09167279', 'Lima', 'Lima', 'Surco', 'Caceres 402', '', '', '', 'A'),
(5, 'Proveedor', 'CAMBUCCI', 'NIC', '61.088.894/0008-84', 'BRASIL', 'BRASIL', 'SAN ROQUE', 'Getulio Vargas 930', '', '', '', 'A'),
(6, 'Proveedor', 'NEGOCIOS ESPORTIVOS - SEDE LA MOLINA', 'RUC', '20523341791', 'LIMA', 'LIMA', 'LA MOLINA', 'A', '2', '', '', 'A'),
(7, 'Cliente', 'NEGOCIOS ESPORTIVOS - LURIN', 'RUC', '20523341791', 'LIMA', 'LIMA', 'LURIN', '', '', '', '', 'A'),
(8, 'Cliente', 'PATUELLI PERU SAC', 'RUC', '20555448750', 'LIMA', 'LIMA', 'LIMA', 'Jr. Cusco Nro. 111', '', '', '', 'A'),
(9, 'Cliente', 'COLEGIO', 'RUC', '10100020531', 'LIMA', 'LIMA', 'LIMA', '', '', '', '', 'A'),
(10, 'Proveedor', 'LATINTRADE', 'RUC', '20600092805', 'LIMA', 'LIMA', 'LIMA', 'LIMA', '', '', '', 'A'),
(11, 'Proveedor', 'BILLYE JEAN', 'RUC', '1', 'LIMA', 'LIMA', 'LIMA', '', '', '', '', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursal`
--

CREATE TABLE `sucursal` (
  `idsucursal` int(11) NOT NULL,
  `razon_social` varchar(150) NOT NULL,
  `tipo_documento` varchar(20) NOT NULL,
  `num_documento` varchar(20) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `email` varchar(70) DEFAULT NULL,
  `representante` varchar(150) DEFAULT NULL,
  `logo` varchar(50) DEFAULT NULL,
  `estado` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sucursal`
--

INSERT INTO `sucursal` (`idsucursal`, `razon_social`, `tipo_documento`, `num_documento`, `direccion`, `telefono`, `email`, `representante`, `logo`, `estado`) VALUES
(1, 'NEGOCIO ESPORTIVOS - SEDE LURIN', 'RUC', '20523341791', 'Av. la Fontana Nro 440 - La Molina int. 1011(C.C La Rotonda II)', '3682346', 'rafo.vidal@penaltyperu.com', 'RICHARD ALMERCO', 'Files/Sucursal/futebol1.jpg', 'A'),
(2, 'NEGOCIO ESPORTIVO  - SEDE LA MOLINA', 'RUC', '20523341791', 'Av. la Fontana Nro 440 - La Molina int. 1011(C.C La Rotonda II)', '3682346', 'rafo.vidal@penaltyperu.com', 'RICHARD ALMERCO', 'Files/Sucursal/futebol2.jpg', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_documento`
--

CREATE TABLE `tipo_documento` (
  `idtipo_documento` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `operacion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_documento`
--

INSERT INTO `tipo_documento` (`idtipo_documento`, `nombre`, `operacion`) VALUES
(1, 'RUC', 'Persona'),
(2, 'DNI', 'Persona'),
(3, 'TICKET-BOLETA', 'Comprobante'),
(5, 'NIC', 'Persona'),
(6, 'FACTURA', 'Comprobante'),
(7, 'BOLETA', 'Comprobante'),
(8, 'CEDULA', 'Persona'),
(9, 'GUIA-REMISION', 'Comprobante'),
(10, 'NOTA DE INGRESO', 'Comprobante'),
(11, 'NOTA DE SALIDA', 'Comprobante'),
(12, 'TICKET-FACTURA', 'Comprobante'),
(13, 'ORDEN DE COMPRA', 'Comprobante'),
(14, 'PEDIDO DE COMPRA', 'Comprobante'),
(15, 'NOTA DE DEBITO', 'Comprobante'),
(16, 'NOTA DE CREDITO', 'Comprobante'),
(17, 'COTIZACION', 'Comprobante'),
(18, 'PEDIDO DE VENTA', 'Comprobante');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidad_medida`
--

CREATE TABLE `unidad_medida` (
  `idunidad_medida` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `prefijo` varchar(5) NOT NULL,
  `estado` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `unidad_medida`
--

INSERT INTO `unidad_medida` (`idunidad_medida`, `nombre`, `prefijo`, `estado`) VALUES
(1, 'Unidad', 'Und', 'A'),
(2, 'Caja', 'Cja', 'A'),
(3, 'Paquete', 'Pqt', 'A'),
(4, 'Metro', 'Mt', 'A'),
(5, 'Docena', 'Doc', 'A'),
(6, 'Decena', 'Dec', 'A'),
(7, 'Ciento', 'Cto', 'A'),
(8, 'Tableta', 'Tab', 'A'),
(9, 'Paquete x 10', 'PQ10', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `idsucursal` int(11) NOT NULL,
  `idempleado` int(11) NOT NULL,
  `tipo_usuario` varchar(20) NOT NULL,
  `fecha_registro` date NOT NULL,
  `mnu_almacen` bit(1) NOT NULL,
  `mnu_compras` bit(1) NOT NULL,
  `mnu_ventas` bit(1) NOT NULL,
  `mnu_mantenimiento` bit(1) NOT NULL,
  `mnu_seguridad` bit(1) NOT NULL,
  `mnu_consulta_compras` bit(1) NOT NULL,
  `mnu_consulta_ventas` bit(1) NOT NULL,
  `mnu_admin` bit(1) NOT NULL,
  `estado` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `idsucursal`, `idempleado`, `tipo_usuario`, `fecha_registro`, `mnu_almacen`, `mnu_compras`, `mnu_ventas`, `mnu_mantenimiento`, `mnu_seguridad`, `mnu_consulta_compras`, `mnu_consulta_ventas`, `mnu_admin`, `estado`) VALUES
(22, 2, 1, 'Administrador', '2016-03-03', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', 'A'),
(23, 2, 3, 'Empleado', '2016-12-29', b'1', b'1', b'1', b'0', b'0', b'1', b'1', b'0', 'A'),
(24, 1, 1, 'Administrador', '2017-11-12', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', 'A'),
(25, 1, 5, 'Administrador', '2017-11-12', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', 'A'),
(26, 2, 5, 'Administrador', '2017-11-12', b'1', b'1', b'1', b'1', b'0', b'1', b'1', b'0', 'A'),
(27, 1, 4, 'Empleado', '2017-11-12', b'1', b'1', b'1', b'0', b'0', b'1', b'1', b'0', 'A'),
(28, 2, 4, 'Empleado', '2017-11-12', b'1', b'1', b'1', b'0', b'0', b'1', b'1', b'0', 'A'),
(29, 1, 3, 'Administrador', '2017-12-01', b'1', b'1', b'1', b'1', b'0', b'1', b'1', b'0', 'A'),
(30, 2, 3, 'Administrador', '2017-12-01', b'0', b'0', b'1', b'0', b'0', b'0', b'0', b'0', 'A'),
(31, 1, 6, 'Empleado', '2017-12-13', b'1', b'1', b'1', b'0', b'0', b'1', b'1', b'0', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `idventa` int(11) NOT NULL,
  `idpedido` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `tipo_venta` varchar(20) NOT NULL,
  `tipo_comprobante` varchar(20) NOT NULL,
  `serie_comprobante` varchar(7) NOT NULL,
  `num_comprobante` varchar(10) NOT NULL,
  `fecha` date NOT NULL,
  `impuesto` decimal(8,2) NOT NULL,
  `total` decimal(8,2) NOT NULL,
  `estado` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`idventa`, `idpedido`, `idusuario`, `tipo_venta`, `tipo_comprobante`, `serie_comprobante`, `num_comprobante`, `fecha`, `impuesto`, `total`, `estado`) VALUES
(13, 24, 24, 'Contado', 'BOLETA', '0001', '00001', '2017-12-20', '0.00', '0.00', 'A'),
(14, 25, 24, 'Contado', 'FACTURA', '0001', '00687', '2017-12-23', '0.00', '0.00', 'A'),
(15, 27, 24, 'Contado', 'BOLETA', '0001', '00002', '2017-12-29', '0.00', '0.00', 'A');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`idarticulo`),
  ADD KEY `fk_articulo_categoria_idx` (`idcategoria`),
  ADD KEY `fk_articulo_unidad_medida_idx` (`idunidad_medida`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idcategoria`);

--
-- Indices de la tabla `credito`
--
ALTER TABLE `credito`
  ADD PRIMARY KEY (`idcredito`),
  ADD KEY `fk_credito_venta1_idx` (`idventa`);

--
-- Indices de la tabla `detalle_documento_sucursal`
--
ALTER TABLE `detalle_documento_sucursal`
  ADD PRIMARY KEY (`iddetalle_documento_sucursal`),
  ADD KEY `fk_documento_sucursal_idx` (`idtipo_documento`),
  ADD KEY `fk_detalle_sucursal_idx` (`idsucursal`);

--
-- Indices de la tabla `detalle_ingreso`
--
ALTER TABLE `detalle_ingreso`
  ADD PRIMARY KEY (`iddetalle_ingreso`),
  ADD KEY `fk_detalle_articulo_idx` (`idarticulo`),
  ADD KEY `fk_detalle_ingreso_idx` (`idingreso`);

--
-- Indices de la tabla `detalle_pedido`
--
ALTER TABLE `detalle_pedido`
  ADD PRIMARY KEY (`iddetalle_pedido`),
  ADD KEY `fk_detalle_venta_ingreso_idx` (`iddetalle_ingreso`),
  ADD KEY `fk_detalle_venta_idx` (`idpedido`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`idempleado`);

--
-- Indices de la tabla `global`
--
ALTER TABLE `global`
  ADD PRIMARY KEY (`idglobal`),
  ADD UNIQUE KEY `empresa_UNIQUE` (`empresa`);

--
-- Indices de la tabla `ingreso`
--
ALTER TABLE `ingreso`
  ADD PRIMARY KEY (`idingreso`),
  ADD KEY `fk_ingreso_proveedor_idx` (`idproveedor`),
  ADD KEY `fk_ingreso_usuario_idx` (`idusuario`),
  ADD KEY `fk_ingreso_sucursal_idx` (`idsucursal`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`idpedido`),
  ADD KEY `fk_venta_cliente_idx` (`idcliente`),
  ADD KEY `fk_venta_trabajador_idx` (`idusuario`),
  ADD KEY `fk_pedido_sucursal_idx` (`idsucursal`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`idpersona`);

--
-- Indices de la tabla `sucursal`
--
ALTER TABLE `sucursal`
  ADD PRIMARY KEY (`idsucursal`);

--
-- Indices de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  ADD PRIMARY KEY (`idtipo_documento`),
  ADD UNIQUE KEY `nombre_UNIQUE` (`nombre`);

--
-- Indices de la tabla `unidad_medida`
--
ALTER TABLE `unidad_medida`
  ADD PRIMARY KEY (`idunidad_medida`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`),
  ADD KEY `fk_usuario_empleado_idx` (`idempleado`),
  ADD KEY `fk_usuario_sucursal_idx` (`idsucursal`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`idventa`),
  ADD KEY `fk_venta_pedido_idx` (`idpedido`),
  ADD KEY `fk_venta_usuario_idx` (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulo`
--
ALTER TABLE `articulo`
  MODIFY `idarticulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4638;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idcategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `credito`
--
ALTER TABLE `credito`
  MODIFY `idcredito` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_documento_sucursal`
--
ALTER TABLE `detalle_documento_sucursal`
  MODIFY `iddetalle_documento_sucursal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `detalle_ingreso`
--
ALTER TABLE `detalle_ingreso`
  MODIFY `iddetalle_ingreso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT de la tabla `detalle_pedido`
--
ALTER TABLE `detalle_pedido`
  MODIFY `iddetalle_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `idempleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `global`
--
ALTER TABLE `global`
  MODIFY `idglobal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `ingreso`
--
ALTER TABLE `ingreso`
  MODIFY `idingreso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `idpedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `idpersona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `sucursal`
--
ALTER TABLE `sucursal`
  MODIFY `idsucursal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  MODIFY `idtipo_documento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `unidad_medida`
--
ALTER TABLE `unidad_medida`
  MODIFY `idunidad_medida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `idventa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD CONSTRAINT `fk_articulo_categoria` FOREIGN KEY (`idcategoria`) REFERENCES `categoria` (`idcategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_articulo_unidad_medida` FOREIGN KEY (`idunidad_medida`) REFERENCES `unidad_medida` (`idunidad_medida`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `credito`
--
ALTER TABLE `credito`
  ADD CONSTRAINT `fk_credito_venta1` FOREIGN KEY (`idventa`) REFERENCES `venta` (`idventa`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `detalle_documento_sucursal`
--
ALTER TABLE `detalle_documento_sucursal`
  ADD CONSTRAINT `fk_detalle_sucursal` FOREIGN KEY (`idsucursal`) REFERENCES `sucursal` (`idsucursal`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_documento_sucursal` FOREIGN KEY (`idtipo_documento`) REFERENCES `tipo_documento` (`idtipo_documento`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `detalle_ingreso`
--
ALTER TABLE `detalle_ingreso`
  ADD CONSTRAINT `fk_detalle_articulo` FOREIGN KEY (`idarticulo`) REFERENCES `articulo` (`idarticulo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_detalle_ingreso` FOREIGN KEY (`idingreso`) REFERENCES `ingreso` (`idingreso`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `detalle_pedido`
--
ALTER TABLE `detalle_pedido`
  ADD CONSTRAINT `fk_detalle_pedido` FOREIGN KEY (`idpedido`) REFERENCES `pedido` (`idpedido`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_detalle_pedido_ingreso` FOREIGN KEY (`iddetalle_ingreso`) REFERENCES `detalle_ingreso` (`iddetalle_ingreso`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ingreso`
--
ALTER TABLE `ingreso`
  ADD CONSTRAINT `fk_ingreso_proveedor` FOREIGN KEY (`idproveedor`) REFERENCES `persona` (`idpersona`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ingreso_sucursal` FOREIGN KEY (`idsucursal`) REFERENCES `sucursal` (`idsucursal`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ingreso_usuario` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `fk_pedido_cliente` FOREIGN KEY (`idcliente`) REFERENCES `persona` (`idpersona`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pedido_sucursal` FOREIGN KEY (`idsucursal`) REFERENCES `sucursal` (`idsucursal`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pedido_trabajador` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usuario_empleado` FOREIGN KEY (`idempleado`) REFERENCES `empleado` (`idempleado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_sucursal` FOREIGN KEY (`idsucursal`) REFERENCES `sucursal` (`idsucursal`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `fk_venta_pedido` FOREIGN KEY (`idpedido`) REFERENCES `pedido` (`idpedido`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_venta_usuario` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
