-- phpMyAdmin SQL Dump
-- version 4.4.15.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 20-Fev-2016 às 18:58
-- Versão do servidor: 5.6.28
-- PHP Version: 5.5.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `corridamaluca`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes_perguntas`
--

CREATE TABLE IF NOT EXISTS `clientes_perguntas` (
  `clientes_pergunta_id` int(11) NOT NULL COMMENT 'id da resposta relaiconando cliente',
  `clientes_id` int(11) NOT NULL COMMENT 'id do cliente',
  `perguntas_id` int(11) NOT NULL COMMENT 'id da pergunta feita',
  `resposta_padrao` enum('Péssimo','Ruim','Bom','Muito Bom','Excelente') DEFAULT 'Bom' COMMENT 'respostas padrao',
  `respostas_outras` varchar(100) DEFAULT NULL COMMENT 'outras respostas'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes_perguntasvariaveis`
--

CREATE TABLE IF NOT EXISTS `clientes_perguntasvariaveis` (
  `id_cpv` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_perguntavariavel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `posvenda_perguntasfixas`
--

CREATE TABLE IF NOT EXISTS `posvenda_perguntasfixas` (
  `perguntasfixas_id` int(11) NOT NULL COMMENT 'Campo de id das perguntas fixas',
  `nome` varchar(50) NOT NULL COMMENT 'nome padrão da pergunta',
  `pergunta` varchar(100) NOT NULL COMMENT 'Pergunta'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabela de perguntas fixas do sistema';

-- --------------------------------------------------------

--
-- Estrutura da tabela `posvenda_perguntasvariaveis`
--

CREATE TABLE IF NOT EXISTS `posvenda_perguntasvariaveis` (
  `perguntasvariaveis_id` int(11) NOT NULL COMMENT 'Id das perguntas variaveis',
  `nome` varchar(50) NOT NULL COMMENT 'nome das perguntas',
  `pergunta` varchar(100) NOT NULL COMMENT 'pergunta'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='tabela de perguntas variaveis gerenciadas pelo gerente';

-- --------------------------------------------------------

--
-- Estrutura da tabela `principal_clientes`
--

CREATE TABLE IF NOT EXISTS `principal_clientes` (
  `clientes_id` int(11) NOT NULL COMMENT 'id do cliente',
  `nome` varchar(30) NOT NULL COMMENT 'nome do clietne',
  `telefone` varchar(15) NOT NULL COMMENT 'telefone',
  `bairro` varchar(20) NOT NULL,
  `cidade` int(11) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `principal_usuarios`
--

CREATE TABLE IF NOT EXISTS `principal_usuarios` (
  `usuarios_id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `perfil` enum('Administrador','Gestor','Lider','Operacional','') NOT NULL COMMENT 'enum de perfil',
  `data_admissao` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientes_perguntas`
--
ALTER TABLE `clientes_perguntas`
  ADD PRIMARY KEY (`clientes_pergunta_id`),
  ADD KEY `id_cliente` (`clientes_id`),
  ADD KEY `id_pergunta` (`perguntas_id`);

--
-- Indexes for table `clientes_perguntasvariaveis`
--
ALTER TABLE `clientes_perguntasvariaveis`
  ADD PRIMARY KEY (`id_cpv`),
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `id_perguntavariavel` (`id_perguntavariavel`);

--
-- Indexes for table `posvenda_perguntasfixas`
--
ALTER TABLE `posvenda_perguntasfixas`
  ADD PRIMARY KEY (`perguntasfixas_id`);

--
-- Indexes for table `posvenda_perguntasvariaveis`
--
ALTER TABLE `posvenda_perguntasvariaveis`
  ADD PRIMARY KEY (`perguntasvariaveis_id`);

--
-- Indexes for table `principal_clientes`
--
ALTER TABLE `principal_clientes`
  ADD PRIMARY KEY (`clientes_id`),
  ADD KEY `clientes_id` (`clientes_id`);

--
-- Indexes for table `principal_usuarios`
--
ALTER TABLE `principal_usuarios`
  ADD PRIMARY KEY (`usuarios_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clientes_perguntas`
--
ALTER TABLE `clientes_perguntas`
  MODIFY `clientes_pergunta_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id da resposta relaiconando cliente';
--
-- AUTO_INCREMENT for table `clientes_perguntasvariaveis`
--
ALTER TABLE `clientes_perguntasvariaveis`
  MODIFY `id_cpv` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `posvenda_perguntasfixas`
--
ALTER TABLE `posvenda_perguntasfixas`
  MODIFY `perguntasfixas_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Campo de id das perguntas fixas';
--
-- AUTO_INCREMENT for table `posvenda_perguntasvariaveis`
--
ALTER TABLE `posvenda_perguntasvariaveis`
  MODIFY `perguntasvariaveis_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Id das perguntas variaveis';
--
-- AUTO_INCREMENT for table `principal_clientes`
--
ALTER TABLE `principal_clientes`
  MODIFY `clientes_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id do cliente';
--
-- AUTO_INCREMENT for table `principal_usuarios`
--
ALTER TABLE `principal_usuarios`
  MODIFY `usuarios_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `clientes_perguntas`
--
ALTER TABLE `clientes_perguntas`
  ADD CONSTRAINT `clientes_perguntas_ibfk_1` FOREIGN KEY (`clientes_id`) REFERENCES `principal_clientes` (`clientes_id`),
  ADD CONSTRAINT `clientes_perguntas_ibfk_2` FOREIGN KEY (`perguntas_id`) REFERENCES `posvenda_perguntasfixas` (`perguntasfixas_id`);

--
-- Limitadores para a tabela `clientes_perguntasvariaveis`
--
ALTER TABLE `clientes_perguntasvariaveis`
  ADD CONSTRAINT `clientes_perguntasvariaveis_ibfk_1` FOREIGN KEY (`id_perguntavariavel`) REFERENCES `posvenda_perguntasvariaveis` (`perguntasvariaveis_id`),
  ADD CONSTRAINT `clientes_perguntasvariaveis_ibfk_2` FOREIGN KEY (`id_cliente`) REFERENCES `principal_clientes` (`clientes_id`);

--
-- Limitadores para a tabela `posvenda_perguntasfixas`
--
ALTER TABLE `posvenda_perguntasfixas`
  ADD CONSTRAINT `posvenda_perguntasfixas_ibfk_1` FOREIGN KEY (`perguntasfixas_id`) REFERENCES `clientes_perguntas` (`perguntas_id`);

--
-- Limitadores para a tabela `principal_clientes`
--
ALTER TABLE `principal_clientes`
  ADD CONSTRAINT `principal_clientes_ibfk_1` FOREIGN KEY (`clientes_id`) REFERENCES `clientes_perguntas` (`clientes_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
