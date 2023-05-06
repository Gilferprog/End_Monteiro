-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06/05/2023 às 00:06
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `enderecomt`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbruas`
--

CREATE TABLE `tbruas` (
  `id` int(10) NOT NULL,
  `rua` varchar(100) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `referencia` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbruas`
--

INSERT INTO `tbruas` (`id`, `rua`, `bairro`, `referencia`) VALUES
(2, 'Wagner Augusto Bezerra Japiassu', 'Novo Horizonte', 'Rua do Estadual'),
(3, 'Antonio Saturno Bezerra', 'Boa Vista', 'Ultima rua atrás do Mega 10'),
(4, 'Maria Bernadina Alcântara de Farias', 'Vila Popular', 'Rua entre o Sacolão o o Edificil'),
(5, 'José Sebastiao de Lima', 'Vila Popular', 'Rua do Bob Esponja que sai na Padaria'),
(6, 'Manoel Joaquim da Silva', 'Centro', 'Rua atrás da Vasconcelos Motos, Rua da Conab'),
(7, 'Cononel Manoel Rafael', 'Centro', 'Beco en frente o Açouque publico'),
(8, 'Joventina Rafael', 'Vila Popular', 'Rua frente ao Clube de Flávio José'),
(9, 'Fernando Paraguai', 'Vila Popular', 'Entra rua Merc. Kaline , 3 rua a direita'),
(10, 'Marcolino de Freitas', 'Vila Popular', 'Entra rua Merc. Kaline , 1 rua a direita'),
(11, 'João Viana', 'Bela Vista', 'Rua atrás do Mega 10'),
(12, 'Alba Maria', 'Centro', 'Frente Praça da Saudade'),
(14, 'Alba Valeria', 'Centro', 'Ultima rua atrás do Mega 10');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tbruas`
--
ALTER TABLE `tbruas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbruas`
--
ALTER TABLE `tbruas`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
