-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Out-2020 às 17:46
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `tde3_dwb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_carrinho`
--

CREATE TABLE `tb_carrinho` (
  `foto` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `preco` double NOT NULL,
  `quantidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_carrinho`
--

INSERT INTO `tb_carrinho` (`foto`, `descricao`, `preco`, `quantidade`) VALUES
('https://img.ibxk.com.br/2019/12/09/09172924967167.jpg?w=328', 'Camisa Polo', 59.9, 1),
('https://img.ibxk.com.br/2019/12/09/09172924967167.jpg?w=328', 'Camisa Polo', 59.9, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_produto`
--

CREATE TABLE `tb_produto` (
  `foto` varchar(255) NOT NULL,
  `descricao` varchar(30) NOT NULL,
  `preco` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_produto`
--

INSERT INTO `tb_produto` (`foto`, `descricao`, `preco`) VALUES
('https://img.ibxk.com.br/2019/12/09/09172924967167.jpg?w=328', 'Celular Bonzin Zerado', 9099.99),
('https://img.ibxk.com.br/2019/12/09/09172924967167.jpg?w=328', 'Arroz Parboilizado', 4.35),
('https://img.ibxk.com.br/2019/12/09/09172924967167.jpg?w=328', 'Camisa Polo', 59.9);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
