-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2019 at 12:44 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `realmotos`
--

-- --------------------------------------------------------

--
-- Table structure for table `adm`
--

CREATE TABLE `adm` (
  `idADM` int(11) NOT NULL,
  `Nome` varchar(70) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `moto`
--

CREATE TABLE `moto` (
  `idMoto` int(11) NOT NULL,
  `Nome` varchar(15) DEFAULT NULL,
  `Valor` double DEFAULT NULL,
  `Ano` int(11) DEFAULT NULL,
  `Descricao` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `moto`
--

INSERT INTO `moto` (`idMoto`, `Nome`, `Valor`, `Ano`, `Descricao`) VALUES
(6, 'Viny', 1, 1, 'Corno'),
(7, 'Viny', 1, 1, 'Corno'),
(8, 'Viny', 1, 1, 'Corno'),
(9, 'Viny', 1, 1, 'Corno'),
(10, 'Viny', 1, 1, 'Corno'),
(11, 'a', 4, 8, 'a'),
(12, 'Viny', 4, 1, 'CORNO'),
(13, 'Viny', 4, 1, 'CORNO'),
(14, 'Viny', 4, 1, 'CORNO'),
(15, 'Viny', 4, 1, 'CORNO'),
(16, 'Viny', 4, 1, 'CORNO'),
(17, 'Viny', 4, 1, 'CORNO'),
(18, 'Viny', 4, 1, 'CORNO'),
(19, 'Viny', 4, 1, 'CORNO');

-- --------------------------------------------------------

--
-- Table structure for table `produto`
--

CREATE TABLE `produto` (
  `idProduto` int(11) NOT NULL,
  `Nome` varchar(50) DEFAULT NULL,
  `Descricao` varchar(120) DEFAULT NULL,
  `Valor` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produto`
--

INSERT INTO `produto` (`idProduto`, `Nome`, `Descricao`, `Valor`) VALUES
(1, 'aaa', 'aaa', 222),
(2, 'aa', 'a32321', 5);

-- --------------------------------------------------------

--
-- Table structure for table `servico`
--

CREATE TABLE `servico` (
  `idServico` int(11) NOT NULL,
  `Nome` varchar(120) DEFAULT NULL,
  `Descricao` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `servico`
--

INSERT INTO `servico` (`idServico`, `Nome`, `Descricao`) VALUES
(1, 'serviÃ§o 1', 'serviÃ§o de vagabundo');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sample`
--

CREATE TABLE `tbl_sample` (
  `id` int(11) NOT NULL,
  `first_name` varchar(250) NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `teste` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sample`
--

INSERT INTO `tbl_sample` (`id`, `first_name`, `last_name`, `teste`) VALUES
(2, 'John', 'Smith', 'Corno'),
(11, 'Moore', 'David', ''),
(8, 'Peter', 'Parker', ''),
(14, 'Guadalupe', 'Bolan', 'CORNO'),
(22, 'Steave', 'Smith', ''),
(23, 'Austin', 'Miller', ''),
(24, 'VINY', 'CORNO', 'CORNO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adm`
--
ALTER TABLE `adm`
  ADD PRIMARY KEY (`idADM`);

--
-- Indexes for table `moto`
--
ALTER TABLE `moto`
  ADD PRIMARY KEY (`idMoto`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`idProduto`);

--
-- Indexes for table `servico`
--
ALTER TABLE `servico`
  ADD PRIMARY KEY (`idServico`);

--
-- Indexes for table `tbl_sample`
--
ALTER TABLE `tbl_sample`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adm`
--
ALTER TABLE `adm`
  MODIFY `idADM` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `moto`
--
ALTER TABLE `moto`
  MODIFY `idMoto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `idProduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `servico`
--
ALTER TABLE `servico`
  MODIFY `idServico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_sample`
--
ALTER TABLE `tbl_sample`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
