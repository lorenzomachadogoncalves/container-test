-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01/12/2023 às 02:50
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `gerenciamento`
--
CREATE DATABASE IF NOT EXISTS `gerenciamento` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `gerenciamento`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `dispositivo`
--

CREATE TABLE `dispositivo` (
  `codDisp` int(4) NOT NULL,
  `nomDisp` varchar(50) NOT NULL,
  `endMAC` varchar(17) NOT NULL,
  `codUsu` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `dispositivo`
--

INSERT INTO `dispositivo` (`codDisp`, `nomDisp`, `endMAC`, `codUsu`) VALUES
(1, 'placa de rede 2', '9D-F3-B3-29-BA-UH', 1),
(4, 'computador pichau gamer 2', 'AS-F7-AS-F7-AS-98', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `codUsu` int(4) NOT NULL,
  `nomUsu` varchar(50) NOT NULL,
  `senhaUsu` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`codUsu`, `nomUsu`, `senhaUsu`) VALUES
(1, 'lorenzo', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(2, 'superxandao', '250e77f12a5ab6972a0895d290c4792f0a326ea8');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `dispositivo`
--
ALTER TABLE `dispositivo`
  ADD PRIMARY KEY (`codDisp`),
  ADD KEY `codUsu` (`codUsu`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`codUsu`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `dispositivo`
--
ALTER TABLE `dispositivo`
  MODIFY `codDisp` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `codUsu` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `dispositivo`
--
ALTER TABLE `dispositivo`
  ADD CONSTRAINT `codUsu` FOREIGN KEY (`codUsu`) REFERENCES `usuario` (`codUsu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
