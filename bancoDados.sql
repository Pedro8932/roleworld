-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22/01/2021 às 13:38
-- Versão do servidor: 10.4.14-MariaDB
-- Versão do PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `roleworld`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `avaliação`
--

CREATE TABLE `avaliação` (
  `emailC` varchar(40) NOT NULL,
  `codigo` int(4) NOT NULL,
  `comentario` varchar(200) NOT NULL,
  `qtdeEstrela` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `cliente`
--

CREATE TABLE `cliente` (
  `email` varchar(40) NOT NULL,
  `CPF` varchar(12) NOT NULL,
  `localEmbarque` varchar(40) NOT NULL,
  `dataNasc` date NOT NULL,
  `nome` varchar(50) NOT NULL,
  `RG` varchar(12) NOT NULL,
  `numCartao` varchar(18) NOT NULL,
  `senha` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `cliente`
--

INSERT INTO `cliente` (`email`, `CPF`, `localEmbarque`, `dataNasc`, `nome`, `RG`, `numCartao`, `senha`) VALUES
('calango@gmail.com', '', 'SP', '2000-01-05', 'Calango Lindão', '', '', 'lango1234');

-- --------------------------------------------------------

--
-- Estrutura para tabela `hotel`
--

CREATE TABLE `hotel` (
  `IDH` int(4) NOT NULL,
  `IDR` int(4) NOT NULL,
  `emailC` varchar(40) NOT NULL,
  `IDQ` int(4) NOT NULL,
  `faixaPreco` float NOT NULL,
  `regiao` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `quiz`
--

CREATE TABLE `quiz` (
  `id` int(4) NOT NULL,
  `pergunta` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `resultado/responde`
--

CREATE TABLE `resultadoresponde` (
  `IDR` int(4) NOT NULL,
  `emailC` varchar(40) NOT NULL,
  `IDQ` int(4) NOT NULL,
  `companhiaAerea` varchar(50) NOT NULL,
  `qtdeDias` int(10) NOT NULL,
  `descricao` varchar(200) NOT NULL,
  `imagemD` varchar(1) DEFAULT NULL,
  `nomeDestino` varchar(100) NOT NULL,
  `valor` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------
--

CREATE TABLE `alternativa` (
  `id` int(40) NOT NULL,
  `alternativa` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;




--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `avaliação`
--
ALTER TABLE `avaliação`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `Avaliacao` (`emailC`);

--
-- Índices de tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`email`);

--
-- Índices de tabela `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`IDH`),
  ADD KEY `Cliente` (`emailC`),
  ADD KEY `IDR` (`IDR`),
  ADD KEY `IDQ` (`IDQ`);

--
-- Índices de tabela `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `resultado/responde`
--
ALTER TABLE `resultado/responde`
  ADD PRIMARY KEY (`IDR`),
  ADD KEY `Quiz` (`IDQ`),
  ADD KEY `Email` (`emailC`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `avaliação`
--
ALTER TABLE `avaliação`
  MODIFY `codigo` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `hotel`
--
ALTER TABLE `hotel`
  MODIFY `IDH` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `resultado/responde`
--
ALTER TABLE `resultado/responde`
  MODIFY `IDR` int(4) NOT NULL AUTO_INCREMENT;

--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `avaliação`
--
ALTER TABLE `avaliação`
  ADD CONSTRAINT `Avaliacao` FOREIGN KEY (`emailC`) REFERENCES `cliente` (`email`);

--
-- Restrições para tabelas `hotel`
--
ALTER TABLE `hotel`
  ADD CONSTRAINT `Cliente` FOREIGN KEY (`emailC`) REFERENCES `cliente` (`email`),
  ADD CONSTRAINT `IDQ` FOREIGN KEY (`IDQ`) REFERENCES `quiz` (`ID`),
  ADD CONSTRAINT `IDR` FOREIGN KEY (`IDR`) REFERENCES `resultado/responde` (`IDR`);

--
-- Restrições para tabelas `resultado/responde`
--
ALTER TABLE `resultado/responde`
  ADD CONSTRAINT `Email` FOREIGN KEY (`emailC`) REFERENCES `cliente` (`email`),
  ADD CONSTRAINT `Quiz` FOREIGN KEY (`IDQ`) REFERENCES `quiz` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
