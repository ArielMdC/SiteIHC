-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 12-Dez-2017 às 13:19
-- Versão do servidor: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd2`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `colaboradores`
--

CREATE TABLE `colaboradores` (
  `nome` varchar(50) NOT NULL,
  `maiortitulacao` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `lattes` varchar(100) NOT NULL,
  `senha` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `colaboradores`
--

INSERT INTO `colaboradores` (`nome`, `maiortitulacao`, `email`, `lattes`, `senha`) VALUES
('Ariel Mota de Carvalho', 'A', 'arielmcarvalho@gmail.com', 'https://lattes.com', '123456'),
('Lucas Costa Xavier', 'A', 'lucascx12@gmail.com', 'https://lattes2.com', '123456'),
('teste', 'A', 'teste@teste', 'www.lattes.com', '123456');

-- --------------------------------------------------------

--
-- Estrutura da tabela `videos`
--

CREATE TABLE `videos` (
  `email` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `significado` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `tag` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `videos`
--

INSERT INTO `videos` (`email`, `link`, `significado`, `foto`, `tag`) VALUES
('arielmcarvalho@gmail.com.', 'https://www.youtube.com/watch?v=Zb1zIhUFuVs.', 'FotossÃ­ntese.', '073d6b8579972f9154027ee8094c2f91..', 'Area_biologica'),
('lucascx12@gmail.com.', 'https://www.youtube.com/watch?v=uum5V3skNHE.', 'Java.', 'cb6e466790ca162423bfccbb724c3a72..', 'Area_Tecnologica');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
