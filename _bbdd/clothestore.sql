-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2021 at 12:58 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clothestore`
--

-- --------------------------------------------------------

--
-- Table structure for table `datos_users`
--

CREATE TABLE `categorias` (
    `id_categoria` int auto_increment,
    `usuario` varchar(16) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
    `nombreCategoria` varchar (150) CHARACTER SET utf8 COLLATE utf8_spanish_ci,
    `fechaCaptura` date,
    PRIMARY KEY `id_categoria`(`id_categoria`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `datos_users` (
  `usuario` varchar(16) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(32) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(32) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(32) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `productos`(
    `id_producto` int auto_increment,
    `id_categoria` int NOT NULL,
    `nombre` varchar(32) CHARACTER SET utf8 COLLATE utf8_spanish_ci,
    `marca` varchar(32) CHARACTER SET utf8 COLLATE utf8_spanish_ci,
    `talla` varchar(32) CHARACTER SET utf8 COLLATE utf8_spanish_ci,
    `stock` int,
    `precio` float ,
    `fechaCaptura` date,
    PRIMARY KEY `id_producto`(`id_producto`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `ventas`(
    `id_venta` int NOT NULL,
    `usuario` varchar(16) CHARACTER SET utf8 COLLATE utf8_spanish_ci,
    `id_producto` int,
    `precio` float,
    `fechaCompra` date
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



--
-- Dumping data for table `datos_users`
--
INSERT INTO `categorias`(`usuario`, `nombreCategoria`, `fechaCaptura`) VALUES 
('ppp','Partes de arriba','2021-01-14'), 
('a','Pantalones','2021-01-13'), 
('b','Zapatillas','2021-01-15'), 
('c','Pantalones','2021-01-17'), 
('d','Partes de arriba','2021-01-16'), 
('e','Zapatillas','2021-01-18');


INSERT INTO `datos_users` (`usuario`, `password`, `nombre`, `apellido`, `email`) VALUES
('ppp', '$2y$10$/c8gT9YgdfTb57.JlFA.9O3NzSjLRwEwelOS8pxxJs.S6b7ZVFyxC', 'ppp', 'ppp', 'ppp@p.p'),
('a', '$2y$10$KQqOjtTfemg0cANSVbu/DupbEqpelxa06ubJjx33h.FDutR1.OhQG', 'a', 'a', 'a@a.a'),
('b', '$2y$10$G3JGPhWkBoPpzLlljUg/oet0KaeiYPLRDCPXHvDtPJIKxBszF02IG', 'b', 'b', 'b@b.b'),
('c', '$2y$10$t5.edC4VY7R43M3.75wZt.21uTpJUipiI8vgDOZv0nIHvl1y33TQG', 'c', 'c', 'c@c.c'),
('c', '$2y$10$FLBcdZldsmDZi2KLGP8Gtu6nCCNitN/DHUyogrZZ3GargKfNq.P9S', 'c', 'c', 'c@c.c'),
('c', '$2y$10$CHe1qIliB84Tz8mtcGrxLuwK5LT/qGvpnGQxIEJTuPr1Jyadvaz.C', 'c', 'c', 'c@c.c'),
('d', '$2y$10$SfgSE/lfRIUdxOM8RPFda.CqjEBJhVH01b3jdYDQelLwxa2l0AsYS', 'd', 'd', 'd@d.d'),
('e', '$2y$10$nBvBbhSetnPeGrBXkbY08OBbLOetcAVqT5W65t/nVoQD6fLMYKrUy', 'e', 'e', 'e@e.e');

INSERT INTO `productos` (`id_categoria`, `nombre`, `marca`, `talla`, `stock`, `precio`, `fechaCaptura`) VALUES
(10001, 'Camisa Gucci Unisex', 'Gucci', 'S', '6', 19.99, '2021-01-01'),
(10002, 'Camisa Gucci Unisex', 'Gucci', 'M', '10', 19.99, '2021-01-01'),
(10003, 'Camisa Gucci Unisex', 'Gucci', 'L', '8', 19.99, '2021-01-01'),
(10004, 'Chaqueta Gucci Deluxe', 'Gucci', 'S', '3', 59.99, '2021-01-02'),
(10005, 'Chaqueta Gucci Deluxe', 'Gucci', 'M', '5', 59.99, '2021-01-02'),
(10006, 'Chaqueta Gucci Deluxe', 'Gucci', 'L', '2', 59.99, '2021-01-02'),
(10007, 'Abrigo Negro invernal 2021', 'Gucci', 'S', '15', 64.99, '2021-01-03'),
(10008, 'Abrigo Negro invernal 2021', 'Gucci', 'M', '20', 64.99, '2021-01-03'),
(10009, 'Abrigo Negro invernal 2021', 'Gucci', 'L', '18', 64.99, '2021-01-03'),
(10010, 'Bufanda marron para invierno', 'Gucci', 'S', '10', 24.99, '2021-01-04'),
(10011, 'Bufanda marron para invierno', 'Gucci', 'M', '15', 24.99, '2021-01-04'),
(10012, 'Bufanda marron para invierno', 'Gucci', 'L', '12', 24.99, '2021-01-04'),
(10013, 'Camiseta color salmon', 'Jack&Jones', 'S', '7', 14.99, '2021-01-05'),
(10014, 'Camiseta color salmon', 'Jack&Jones', 'M', '12', 14.99, '2021-01-05'),
(10015, 'Camiseta color salmon', 'Jack&Jones', 'L', '10', 14.99, '2021-01-05'),
(10016, 'Abrigo marron oscuro', 'Jack&Jones', 'S', '13', 89.99, '2021-01-05'),
(10017, 'Abrigo marron oscuro', 'Jack&Jones', 'M', '17', 89.99, '2021-01-05'),
(10018, 'Abrigo marron oscuro', 'Jack&Jones', 'L', '15', 89.99, '2021-01-05'),
(10019, 'Camisa blanca veraniega', 'Zara', 'S', '3', 19.99, '2021-01-06'),
(10020, 'Camisa blanca veraniega', 'Zara', 'M', '7', 19.99, '2021-01-06'),
(10021, 'Camisa blanca veraniega', 'Zara', 'L', '5', 19.99, '2021-01-06'),
(10022, 'Top para mujer blanco', 'Zara', 'S', '7', 22.99, '2021-01-06'),
(10023, 'Top para mujer blanco', 'Zara', 'M', '13', 22.99, '2021-01-06'),
(10024, 'Top para mujer blanco', 'Zara', 'L', '10', 22.99, '2021-01-06');


INSERT INTO `ventas` (`id_venta`, `usuario`, `id_producto`, `precio`, `fechaCompra`) VALUES
(20001, 'ppp', 10001, 19.99, '2021-01-14'),
(20002, 'a', 10017, 89.99, '2021-01-14'),
(20003, 'b', 10008, 64.99, '2021-01-15'),
(20004, 'c', 10011, 24.99, '2021-01-17'),
(20005, 'd', 10023, 22.99, '2021-01-17'),
(20006, 'e', 10013, 14.99, '2021-01-18');

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
