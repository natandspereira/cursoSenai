-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24/05/2025 às 04:09
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `eventosdb`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `comentarios`
--
-- Criação: 23/05/2025 às 19:26
--

CREATE TABLE `comentarios` (
  `comentariosID` int(11) NOT NULL,
  `usuariosID` int(11) DEFAULT NULL,
  `eventosID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- RELACIONAMENTOS PARA TABELAS `comentarios`:
--   `usuariosID`
--       `usuarios` -> `usuariosID`
--   `eventosID`
--       `eventos` -> `eventosID`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `eventos`
--
-- Criação: 23/05/2025 às 19:23
--

CREATE TABLE `eventos` (
  `eventosID` int(11) NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `data` datetime DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `local` varchar(255) DEFAULT NULL,
  `organizadoresID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- RELACIONAMENTOS PARA TABELAS `eventos`:
--   `organizadoresID`
--       `organizadores` -> `organizadoresID`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `interacoes`
--
-- Criação: 23/05/2025 às 19:28
--

CREATE TABLE `interacoes` (
  `interacaoID` int(11) NOT NULL,
  `curtidas` int(11) DEFAULT NULL,
  `inscricao` int(11) DEFAULT NULL,
  `usuariosID` int(11) DEFAULT NULL,
  `eventosID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- RELACIONAMENTOS PARA TABELAS `interacoes`:
--   `usuariosID`
--       `usuarios` -> `usuariosID`
--   `eventosID`
--       `eventos` -> `eventosID`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `organizadores`
--
-- Criação: 23/05/2025 às 19:20
--

CREATE TABLE `organizadores` (
  `organizadoresID` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- RELACIONAMENTOS PARA TABELAS `organizadores`:
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--
-- Criação: 23/05/2025 às 22:05
--

CREATE TABLE `usuarios` (
  `usuariosID` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- RELACIONAMENTOS PARA TABELAS `usuarios`:
--

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`usuariosID`, `nome`, `email`, `senha`) VALUES
(5, 'natan', 'natan.s.pereira@aluno.senai.br', '$2y$10$qah5V580EpQ7h2XjtM0yauWSDl1spqIZPzw49lyp58kDaIf59Lt3m'),
(8, 'teste', 'teste@teste.com', '$2y$10$P4dM3va5F7CSAcnL3q37oOoXiAwWELqGdBbqhnz7pK10dRKI9WBPO'),
(13, 'teste2', 'teste2@teste.com', '$2y$10$GcgZrYkVzIe5r9viOE1gsuLdK7D4TCivdPN.00Asw2JCQTaCD7aWG'),
(16, 'teste3', 'teste3@teste.com', '$2y$10$nnV/6fIZHm8WN5UgG9rqj.VCyM1eT5m1SSm3kQaS7rx5Z/zMGLcPe'),
(18, 'teste5', 'teste5@teste.com', '$2y$10$lU2whw4I2pWN/.lZdcCLlubXK5iyo0NT.Jfx8ifzQVpm0/HVx98Oy'),
(19, 'teste10', 'teste10@teste.com', '$2y$10$2IHzVbJlUaRIhAeBbprytOVlVggl.eavqAeb6L3JQdJ4PJ8Z8c5Yi'),
(20, 'teste20', 'teste20@teste.com', '$2y$10$bVlYYoCLk3b8IGttyl4bj.DhcEWqPhJ/y5tbm1wiUoLBwfV.ujQ1a'),
(21, 'daniel', 'daniel@teste.com', '$2y$10$1eVRwykM07qTAMrr/54TauPb7zcut.4xle6eTUQf0PwwjKTrPV7AO'),
(22, 'matheus', 'matheus@teste.com', '$2y$10$A.ZgItgDGx1FnldGmiIa3.5Q7XlaOqMeuKnzKxkAm17SbuNmj/.Ve'),
(23, 'fulano', 'fulano@teste.com', '$2y$10$xyFgX66CLftmCjr74dHQr.1J0Vzp55nr.s8QTa1CwepKRHMOEHSI6'),
(24, 'abc', 'abc@teste.com', '$2y$10$Rs6PAQ/FIMOa.sKpOs896.sPPIhxinNU03mB/QygPKm9u4QxOzCT.');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`comentariosID`),
  ADD KEY `usuariosID` (`usuariosID`),
  ADD KEY `eventosID` (`eventosID`);

--
-- Índices de tabela `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`eventosID`),
  ADD KEY `organizadoresID` (`organizadoresID`);

--
-- Índices de tabela `interacoes`
--
ALTER TABLE `interacoes`
  ADD PRIMARY KEY (`interacaoID`),
  ADD KEY `usuariosID` (`usuariosID`),
  ADD KEY `eventosID` (`eventosID`);

--
-- Índices de tabela `organizadores`
--
ALTER TABLE `organizadores`
  ADD PRIMARY KEY (`organizadoresID`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuariosID`),
  ADD UNIQUE KEY `email_unico` (`email`),
  ADD UNIQUE KEY `nome_unico` (`nome`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `comentariosID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `eventos`
--
ALTER TABLE `eventos`
  MODIFY `eventosID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `interacoes`
--
ALTER TABLE `interacoes`
  MODIFY `interacaoID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `organizadores`
--
ALTER TABLE `organizadores`
  MODIFY `organizadoresID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usuariosID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`usuariosID`) REFERENCES `usuarios` (`usuariosID`),
  ADD CONSTRAINT `comentarios_ibfk_2` FOREIGN KEY (`eventosID`) REFERENCES `eventos` (`eventosID`);

--
-- Restrições para tabelas `eventos`
--
ALTER TABLE `eventos`
  ADD CONSTRAINT `eventos_ibfk_1` FOREIGN KEY (`organizadoresID`) REFERENCES `organizadores` (`organizadoresID`);

--
-- Restrições para tabelas `interacoes`
--
ALTER TABLE `interacoes`
  ADD CONSTRAINT `interacoes_ibfk_1` FOREIGN KEY (`usuariosID`) REFERENCES `usuarios` (`usuariosID`),
  ADD CONSTRAINT `interacoes_ibfk_2` FOREIGN KEY (`eventosID`) REFERENCES `eventos` (`eventosID`);


--
-- Metadata
--
USE `phpmyadmin`;

--
-- Metadata para tabela comentarios
--

--
-- Metadata para tabela eventos
--

--
-- Metadata para tabela interacoes
--

--
-- Metadata para tabela organizadores
--

--
-- Metadata para tabela usuarios
--

--
-- Metadata para o banco de dados eventosdb
--
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
