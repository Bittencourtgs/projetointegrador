-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Set-2022 às 06:32
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `php-cms`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `nivel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `admin`
--

INSERT INTO `admin` (`id`, `nome`, `email`, `senha`, `nivel`) VALUES
(1, 'Larissa', 'admin@mail.com', 'admin', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `agendamento`
--

CREATE TABLE `agendamento` (
  `idAgendamento` int(11) NOT NULL,
  `nome` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `servico` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL,
  `hora` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `agendamento`
--

INSERT INTO `agendamento` (`idAgendamento`, `nome`, `email`, `servico`, `date`, `hora`) VALUES
(1, 'Mariana', '', 'MAQUIAGEM PARA CASAMENTO', '21/10/2022', '12:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `url` varchar(100) NOT NULL,
  `comentario` varchar(1000) NOT NULL,
  `titulo` varchar(1000) NOT NULL,
  `subtitulo` varchar(1000) NOT NULL,
  `ativo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `banner`
--

INSERT INTO `banner` (`id`, `url`, `comentario`, `titulo`, `subtitulo`, `ativo`) VALUES
(21, '424123679carousel1.jpg', '', 'MAQUIAGEM', '', 1),
(22, '423579761carousel2.jpg', '', 'PENTEADO', '', 1),
(23, '1046464378carousel3.jpg', '', 'MAQUIAGEM', '', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedor`
--

CREATE TABLE `fornecedor` (
  `id` int(11) NOT NULL,
  `nome` varchar(1000) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `senha` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `nivel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `fornecedor`
--

INSERT INTO `fornecedor` (`id`, `nome`, `telefone`, `senha`, `email`, `nivel`) VALUES
(6, 'mari', '(21)92000-7037', '111', 'msertorio@gmail.com', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `services`
--

CREATE TABLE `services` (
  `id` int(100) NOT NULL,
  `title` varchar(1000) DEFAULT NULL,
  `short` varchar(1500) DEFAULT NULL,
  `descrip` varchar(10000) DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `services`
--

INSERT INTO `services` (`id`, `title`, `short`, `descrip`, `img`, `url`, `date`, `status`) VALUES
(51, 'MAQUIAGEM PARA FESTIVAIS', '', '', '2000023652festival.jpg', NULL, '', '0'),
(52, 'PENTEADO PARA COMEMORAÇÕES', '', '', '630288203penteadocomemorativas.jpg', NULL, '', '0'),
(53, 'PENTEADO PARA CASAMENTOS', '', '', '144503851penteadocasamento.jpg', NULL, '', '0'),
(54, 'MAQUIAGEM PARA CASAMENTOS', '', '', '1598938950casamentonegra1.jpg', NULL, '', '0'),
(55, 'PENTEADO PARA FESTIVAIS', '', '', '1375504853penteadonegra.jpg', NULL, '', '0'),
(56, 'MAQUIAGEM PARA COMEMORAÇÕES', '', '', '1734234801comemorativa.jpg', NULL, '', '0');

-- --------------------------------------------------------

--
-- Estrutura da tabela `settings`
--

CREATE TABLE `settings` (
  `id` int(100) NOT NULL,
  `header_logo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone2` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `footer_logo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `footer_desc` varchar(5000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `twitter` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `linkedin` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `instagram` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `youtube` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pin` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `map` varchar(3000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `site_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `settings`
--

INSERT INTO `settings` (`id`, `header_logo`, `email`, `phone`, `phone2`, `footer_logo`, `footer_desc`, `facebook`, `twitter`, `linkedin`, `instagram`, `youtube`, `address`, `city`, `state`, `country`, `pin`, `map`, `site_name`) VALUES
(1, '1077930642754453333Logo 1-min.png', 'makeupexpress@gmail.com', '(21) 920007037', '+91 9899 007 899', '1328530813Logo 1.PNG', '', 'https://www.facebook.com/', '#', '#', '#', '#', 'SENAC - Nova Iguaçu', '', '', '', '', '                                                                                                                        <iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14717.05328690558!2d-43.4506733!3d-22.7556071!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xec20bfc8ff090b46!2sSenac%20Nova%20Igua%C3%A7u!5e0!3m2!1spt-BR!2sbr!4v1663366271359!5m2!1spt-BR!2sbr\" width=\"600\" height=\"490\" style=\"border:0; width: 100%\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           ', 'MAKEUP EXPRESS');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Índices para tabela `agendamento`
--
ALTER TABLE `agendamento`
  ADD PRIMARY KEY (`idAgendamento`);

--
-- Índices para tabela `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `fornecedor`
--
ALTER TABLE `fornecedor`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `agendamento`
--
ALTER TABLE `agendamento`
  MODIFY `idAgendamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de tabela `fornecedor`
--
ALTER TABLE `fornecedor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `services`
--
ALTER TABLE `services`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT de tabela `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
