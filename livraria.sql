-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 08-Mar-2021 às 03:10
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `livraria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `descricao` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id`, `descricao`) VALUES
(1, 'Ficção'),
(2, 'Não-ficção');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `cep` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `email`, `cpf`, `senha`, `endereco`, `cep`) VALUES
(20, '342', 'ana@lumertz.com', 'fdsfdsfd', '$2y$10$fDC3XOjfbNFonI6YNnMgbOdDLQAHXfVd2jVsOQEOudKHT.hQT9v4.', 'dfsdf', 92310300),
(21, 'dsad dsadas', 'ana@laura.com', '00000000000', '$2y$10$fQboQZrlS9XA1jNVthn8ouREEiAduxzQPUi0/CBBIRGDlJGuTAMy2', 'dsadas', 0),
(24, 'sadsa sada', 'dasd@sdasda.com', '00000000000', '$2y$10$NDELIKeeInk.Uk.kQGDwoeISqLxFkA3hOCfj7agHl8GDi7mgPiqNu', 'dsadas', 92310300);

-- --------------------------------------------------------

--
-- Estrutura da tabela `livro`
--

CREATE TABLE `livro` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `autor` text NOT NULL,
  `preco` float(8,2) NOT NULL,
  `quant` int(11) NOT NULL,
  `editora` varchar(255) NOT NULL,
  `isbn` int(13) NOT NULL,
  `destaque` tinyint(1) NOT NULL,
  `categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `livro`
--

INSERT INTO `livro` (`id`, `titulo`, `autor`, `preco`, `quant`, `editora`, `isbn`, `destaque`, `categoria`) VALUES
(1, 'Kafka à beira-mar', 'Haruki Murakami', 65.00, 40, 'Alfaguara', 85602814, 1, 1),
(2, 'Persépolis', 'Marjane Satrapi', 39.90, 35, 'Quadrinhos & cia', 85359116, 1, 2),
(3, 'O Hobbit', 'J.R.R. Tolkien', 30.50, 60, 'HarperCollins', 40028922, 0, 1),
(4, 'Convite à filosofia', 'Marilena Chauí', 171.99, 15, 'Ática didáticos', 112233445, 0, 2),
(5, 'Harry Potter e a Pedra Filosofal', 'J.K. Rowling', 29.90, 5, 'Rocco', 324123412, 1, 1),
(6, 'Eu sou Malala', 'Malala Yousafzai', 40.00, 10, 'Companhia das Letras', 2131231, 0, 2),
(7, 'Harry Potter e a Câmara Secreta', 'J. K. Rowling', 35.00, 5, 'Rocco', 2131231, 0, 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`,`email`,`cpf`);

--
-- Índices para tabela `livro`
--
ALTER TABLE `livro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de tabela `livro`
--
ALTER TABLE `livro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
