-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 01-Jul-2016 às 09:47
-- Versão do servidor: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cadastro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL auto_increment,
  `nome` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefone` varchar(11) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `cep` varchar(9) NOT NULL,
  `login` varchar(40) NOT NULL default '',
  `senha` varchar(40) NOT NULL default '',
  `postar` enum('positivo', 'negativo') NOT NULL default 'positivo'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`,`nome`, `email`, `telefone`, `endereco`, `numero`, `bairro`, `cep`, `login`, `senha`, `postar`) VALUES
(1, 'Ana', 'a.merroto@hotmail.com', '41 8789-900', 'ServidÃ£o das Flores', 's/n', 'Floresta', '89676-456', 'a.meroto', '123456', 'positivo'),
(2, 'Marcelo Cabral', 'cabral@brturbo.com.br', '55 33439009', 'Rua Dos TrÃªs', '3', 'Costa Sul', '87789-098', 'cabral', '123456', 'negativo'),
(3, 'Higor Bechelli de Oliveira', 'hbechelli@gmail.com', '4799151476', 'Rua Rolf F. Penski', '250', 'Vila Nova', '89237-813','hbechelli', '123456',  'negativo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
