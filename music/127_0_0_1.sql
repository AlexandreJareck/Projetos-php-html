-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 06-Dez-2018 às 02:18
-- Versão do servidor: 10.1.36-MariaDB
-- versão do PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_musicas`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_musica`
--

CREATE TABLE `tb_musica` (
  `id_musica` int(11) NOT NULL,
  `musica` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `banda` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `genero` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tempo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_musica`
--

INSERT INTO `tb_musica` (`id_musica`, `musica`, `banda`, `genero`, `tempo`, `id_usuario`) VALUES
(6, 'Small tallk', 'Loud', 'PsyTrance', '5:55', 2),
(7, 'Rounder', 'GMS', 'PsyTrance', '6:21', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuario`
--

CREATE TABLE `tb_usuario` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_usuario`
--

INSERT INTO `tb_usuario` (`id_usuario`, `usuario`, `senha`, `email`) VALUES
(2, 'teste', '202cb962ac59075b964b07152d234b70', 'teste@teste'),
(3, 'teste2', '202cb962ac59075b964b07152d234b70', 'teste2@2'),
(10, 'admin', '202cb962ac59075b964b07152d234b70', 'admin@admin'),
(11, 'Alexandre Jareck', '202cb962ac59075b964b07152d234b70', 'xandysjp@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_musica`
--
ALTER TABLE `tb_musica`
  ADD PRIMARY KEY (`id_musica`);

--
-- Indexes for table `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_musica`
--
ALTER TABLE `tb_musica`
  MODIFY `id_musica` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tb_usuario`
--
ALTER TABLE `tb_usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
