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
  `nome` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefone` varchar(11) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `cep` varchar(9) NOT NULL,
  `positivo` int(100) NOT NULL,
  `negativo` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`nome`, `email`, `telefone`, `endereco`, `numero`, `bairro`, `cep`, `positivo`, `negativo`) VALUES
('Ana', 'a.merroto@hotmail.com', '41 8789-900', 'ServidÃ£o das Flores', 's/n', 'Floresta', '89676-456', 0, 0),
('Marcelo Cabral', 'cabral@brturbo.com.br', '55 33439009', 'Rua Dos TrÃªs', '3', 'Costa Sul', '87789-098', 0, 0),
('Higor Bechelli de Oliveira', 'hbechelli@gmail.com', '4799151476', 'Rua Rolf F. Penski', '250', 'Vila Nova', '89237-813', 0, 0),
('Maria das Couves', 'maria.couve@hotmail.com', '45 78901234', 'Av. Querubim', '334', 'Centro', '89098-000', 0, 0),
('Eduardo Mattos', 'mattos@gmail.com', '46 99879877', 'Rua Toda a vida irÃ¡s reto', '666', 'Vila Pequena', '88449-090', 0, 0),
('Paulo Dallagno', 'paulo_aur2@hotmail.com', '47 99151476', 'Rua Rolf F. Pensk', '250', 'Vila Nova', '89237-813', 0, 0);

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
