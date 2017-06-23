-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- 
http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- 
Tempo de geração: 22/09/2016 às 13:41
-- 
Versão do servidor: 5.7.11
-- 
Versão do PHP: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";



/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;

/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;

/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;

/*!40101 SET NAMES utf8mb4 */;


--
-- Banco de dados: `celke`
--

-- --------------------------------------------------------

--
--
 Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  
`id` int(11) NOT NULL,
  
`nome` varchar(220) NOT NULL,
  
`cpf` varchar(220) NOT NULL
) 
ENGINE=MyISAM DEFAULT CHARSET=latin1;


--
-- Fazendo dump de dados para tabela `usuarios`
--


INSERT INTO `usuarios` (`id`, `nome`, `cpf`) VALUES
(1, 'Cesar', '123'),
(2, 'Cesar', '123'),
(3, 'Kelly', '123');


--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);


--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `usuarios`

--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
