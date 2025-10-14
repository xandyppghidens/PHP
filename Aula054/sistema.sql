-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12/10/2025 às 21:03
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
-- Banco de dados: `sistema`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `codigo` int(10) NOT NULL,
  `localizacao` varchar(500) DEFAULT NULL,
  `bairro` varchar(500) DEFAULT NULL,
  `descricao` varchar(500) DEFAULT NULL,
  `situacao` varchar(500) DEFAULT NULL,
  `valor` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cadastro`
--

INSERT INTO `cadastro` (`codigo`, `localizacao`, `bairro`, `descricao`, `situacao`, `valor`) VALUES
(5, 'Olegaria de Almeida Costa', 'Ana Pinto de Almeida', 'Um bairro tranquilo', 'Favoravel', 'R$ 1900,00');

-- --------------------------------------------------------

--
-- Estrutura para tabela `imagem`
--

CREATE TABLE `imagem` (
  `id` int(10) NOT NULL,
  `foto` varchar(400) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `imagem`
--

INSERT INTO `imagem` (`id`, `foto`) VALUES
(1, 'java.png');

-- --------------------------------------------------------

--
-- Estrutura para tabela `login`
--

CREATE TABLE `login` (
  `id` int(10) NOT NULL,
  `usuario` varchar(300) DEFAULT NULL,
  `senha` varchar(400) DEFAULT NULL,
  `nivel` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `login`
--

INSERT INTO `login` (`id`, `usuario`, `senha`, `nivel`) VALUES
(1, 'xandy', '123', 'Adm '),
(2, 'luqi', '$2y$10$fC8PJf0/iHmhk4wmujfjKOEmePwc4Q4p/bhFeDnTjGj.v9hqPOU8K', 'Adm'),
(3, 'xandy', '$2y$10$WCuTTv4rJDmgAD8SRxcg2OedzjR7y7wEZo562ebOUdYRCH1b6iRA2', 'Adm'),
(4, 'ali', '$2y$10$gJ7cr95mo31HpfW3sW0gvO7bLM.EVysNSle1K1pN7jmut1mUsu3SK', 'Adm'),
(5, 'brabo', '$2y$10$rDLAdhtFdppViPHf9eAkpe4/WF4IewdcTnIePm8.Bd5oSy9azg/nW', 'Adm'),
(6, 'ali', '$2y$10$vvACmh.2RUGU3zJoevjW6uGIaMV1O3WqzvgZHyLmwrpk.A2rrEnIO', 'Adm'),
(7, 'Marcilio', '$2y$10$ncWEOQHoKlJr25AR80Tba.ayFymDvWQm19IlvMADaJ/Pa24fDwcmi', 'Adm');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`codigo`);

--
-- Índices de tabela `imagem`
--
ALTER TABLE `imagem`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `codigo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `imagem`
--
ALTER TABLE `imagem`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
