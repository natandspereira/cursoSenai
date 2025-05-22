-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22/05/2025 às 22:37
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
-- Estrutura para tabela `eventos`
--
-- Criação: 22/05/2025 às 19:35
--

CREATE TABLE `eventos` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `data` datetime DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `local` varchar(255) DEFAULT NULL,
  `tipoDeEvento` varchar(255) DEFAULT NULL,
  `usuariosID` int(11) DEFAULT NULL,
  `organizadoresID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- RELACIONAMENTOS PARA TABELAS `eventos`:
--   `usuariosID`
--       `usuarios` -> `id`
--   `organizadoresID`
--       `organizadores` -> `id`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `interacoes`
--
-- Criação: 22/05/2025 às 20:12
--

CREATE TABLE `interacoes` (
  `id` int(11) NOT NULL,
  `curtidas` int(11) DEFAULT NULL,
  `inscricoes` int(11) DEFAULT NULL,
  `comentarios` varchar(255) DEFAULT NULL,
  `usuariosID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- RELACIONAMENTOS PARA TABELAS `interacoes`:
--   `usuariosID`
--       `usuarios` -> `id`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `organizadores`
--
-- Criação: 22/05/2025 às 19:34
--

CREATE TABLE `organizadores` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `organizadoresID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- RELACIONAMENTOS PARA TABELAS `organizadores`:
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--
-- Criação: 22/05/2025 às 19:31
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `usuariosID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- RELACIONAMENTOS PARA TABELAS `usuarios`:
--

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuariosID` (`usuariosID`),
  ADD KEY `organizadoresID` (`organizadoresID`);

--
-- Índices de tabela `interacoes`
--
ALTER TABLE `interacoes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuariosID` (`usuariosID`);

--
-- Índices de tabela `organizadores`
--
ALTER TABLE `organizadores`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `interacoes`
--
ALTER TABLE `interacoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `organizadores`
--
ALTER TABLE `organizadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `eventos`
--
ALTER TABLE `eventos`
  ADD CONSTRAINT `eventos_ibfk_1` FOREIGN KEY (`usuariosID`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `eventos_ibfk_2` FOREIGN KEY (`organizadoresID`) REFERENCES `organizadores` (`id`);

--
-- Restrições para tabelas `interacoes`
--
ALTER TABLE `interacoes`
  ADD CONSTRAINT `interacoes_ibfk_1` FOREIGN KEY (`usuariosID`) REFERENCES `usuarios` (`id`);


--
-- Metadata
--
USE `phpmyadmin`;

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
