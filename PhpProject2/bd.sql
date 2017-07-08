-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 04-Jul-2017 às 22:24
-- Versão do servidor: 5.5.28
-- versão do PHP: 5.3.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `rural`
--
CREATE DATABASE IF NOT EXISTS `rural` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `rural`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `gestao`
--

CREATE TABLE IF NOT EXISTS `gestao` (
  `id` int(11) NOT NULL,
  `r211` int(11) NOT NULL,
  `r212` int(11) NOT NULL,
  `r213` int(11) NOT NULL,
  `r214` int(11) NOT NULL,
  `r215` int(11) NOT NULL,
  `r216` int(11) NOT NULL,
  `r217` int(11) NOT NULL,
  `r218` int(11) NOT NULL,
  `r219` int(11) NOT NULL,
  `r221` int(11) NOT NULL,
  `r222` int(11) NOT NULL,
  `r223` int(11) NOT NULL,
  `r224` int(11) NOT NULL,
  `r231` int(11) NOT NULL,
  `r232` int(11) NOT NULL,
  `r233` int(11) NOT NULL,
  `r234` int(11) NOT NULL,
  `r241` int(11) NOT NULL,
  `r242` int(11) NOT NULL,
  `r251` int(11) NOT NULL,
  `r252` int(11) NOT NULL,
  `r253` int(11) NOT NULL,
  `r254` int(11) NOT NULL,
  `r255` int(11) NOT NULL,
  `r256` int(11) NOT NULL,
  `r257` int(11) NOT NULL,
  `r261` int(11) NOT NULL,
  `r262` int(11) NOT NULL,
  `r263` int(11) NOT NULL,
  `r271` int(11) NOT NULL,
  `r272` int(11) NOT NULL,
  `r273` int(11) NOT NULL,
  `r274` int(11) NOT NULL,
  `r281` int(11) NOT NULL,
  `r282` int(11) NOT NULL,
  `r283` int(11) NOT NULL,
  `r284` int(11) NOT NULL,
  `r291` int(11) NOT NULL,
  `r292` int(11) NOT NULL,
  `r293` int(11) NOT NULL,
  `r2101` int(11) NOT NULL,
  `r2102` int(11) NOT NULL,
  `r2103` int(11) NOT NULL,
  `r2104` int(11) NOT NULL,
  `r2105` int(11) NOT NULL,
  `r2106` int(11) NOT NULL,
  `r2107` int(11) NOT NULL,
  `r2108` int(11) NOT NULL,
  `r2109` int(11) NOT NULL,
  `r21010` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `gestao`
--

INSERT INTO `gestao` (`id`, `r211`, `r212`, `r213`, `r214`, `r215`, `r216`, `r217`, `r218`, `r219`, `r221`, `r222`, `r223`, `r224`, `r231`, `r232`, `r233`, `r234`, `r241`, `r242`, `r251`, `r252`, `r253`, `r254`, `r255`, `r256`, `r257`, `r261`, `r262`, `r263`, `r271`, `r272`, `r273`, `r274`, `r281`, `r282`, `r283`, `r284`, `r291`, `r292`, `r293`, `r2101`, `r2102`, `r2103`, `r2104`, `r2105`, `r2106`, `r2107`, `r2108`, `r2109`, `r21010`) VALUES
(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(1, 1, 0, 0, 1, 1, 1, 0, 1, 0, 1, 0, 0, 1, 1, 1, 0, 0, 1, 0, 0, 0, 1, 0, 1, 0, 1, 0, 1, 0, 0, 1, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 0, 1, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `relacao`
--

CREATE TABLE IF NOT EXISTS `relacao` (
  `id` int(11) NOT NULL,
  `r311` int(11) NOT NULL,
  `r312` int(11) NOT NULL,
  `r313` int(11) NOT NULL,
  `r314` int(11) NOT NULL,
  `r321` int(11) NOT NULL,
  `r322` int(11) NOT NULL,
  `r323` int(11) NOT NULL,
  `r331` int(11) NOT NULL,
  `r332` int(11) NOT NULL,
  `r333` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `relacao`
--

INSERT INTO `relacao` (`id`, `r311`, `r312`, `r313`, `r314`, `r321`, `r322`, `r323`, `r331`, `r332`, `r333`) VALUES
(1, 0, 0, 1, 1, 1, 0, 1, 0, 1, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tecnologia`
--

CREATE TABLE IF NOT EXISTS `tecnologia` (
  `id` int(11) NOT NULL,
  `r111` int(1) NOT NULL,
  `r112` int(1) NOT NULL,
  `r113` int(1) NOT NULL,
  `r121` int(1) NOT NULL,
  `r122` int(1) NOT NULL,
  `r123` int(1) NOT NULL,
  `r124` int(1) NOT NULL,
  `r125` int(1) NOT NULL,
  `r126` int(1) NOT NULL,
  `r127` int(1) NOT NULL,
  `r128` int(1) NOT NULL,
  `r129` int(1) NOT NULL,
  `r1210` int(1) NOT NULL,
  `r131` int(1) NOT NULL,
  `r132` int(1) NOT NULL,
  `r133` int(1) NOT NULL,
  `r134` int(1) NOT NULL,
  `r135` int(1) NOT NULL,
  `r136` int(1) NOT NULL,
  `r137` int(1) NOT NULL,
  `r138` int(1) NOT NULL,
  `r141` int(1) NOT NULL,
  `r142` int(1) NOT NULL,
  `r143` int(1) NOT NULL,
  `r144` int(1) NOT NULL,
  `r151` int(1) NOT NULL,
  `r152` int(1) NOT NULL,
  `r153` int(1) NOT NULL,
  `r154` int(1) NOT NULL,
  `r161` int(1) NOT NULL,
  `r162` int(1) NOT NULL,
  `r163` int(1) NOT NULL,
  `r164` int(1) NOT NULL,
  `r165` int(1) NOT NULL,
  `r166` int(1) NOT NULL,
  `r167` int(1) NOT NULL,
  `r168` int(1) NOT NULL,
  `r169` int(1) NOT NULL,
  `r1610` int(1) NOT NULL,
  `r1611` int(1) NOT NULL,
  `r1612` int(1) NOT NULL,
  `r1613` int(1) NOT NULL,
  `r1614` int(1) NOT NULL,
  `r1615` int(1) NOT NULL,
  `r171` int(1) NOT NULL,
  `r172` int(1) NOT NULL,
  `r173` int(1) NOT NULL,
  `r181` int(1) NOT NULL,
  `r182` int(1) NOT NULL,
  `r183` int(1) NOT NULL,
  `r184` int(1) NOT NULL,
  `r185` int(1) NOT NULL,
  `r186` int(1) NOT NULL,
  `r187` int(1) NOT NULL,
  `r188` int(1) NOT NULL,
  `r191` int(1) NOT NULL,
  `r192` int(1) NOT NULL,
  `r193` int(1) NOT NULL,
  `r1101` int(1) NOT NULL,
  `r1102` int(1) NOT NULL,
  `r1103` int(1) NOT NULL,
  `r1104` int(1) NOT NULL,
  `r1105` int(1) NOT NULL,
  `r1106` int(1) NOT NULL,
  `r1107` int(1) NOT NULL,
  `r1108` int(1) NOT NULL,
  `r1109` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tecnologia`
--

INSERT INTO `tecnologia` (`id`, `r111`, `r112`, `r113`, `r121`, `r122`, `r123`, `r124`, `r125`, `r126`, `r127`, `r128`, `r129`, `r1210`, `r131`, `r132`, `r133`, `r134`, `r135`, `r136`, `r137`, `r138`, `r141`, `r142`, `r143`, `r144`, `r151`, `r152`, `r153`, `r154`, `r161`, `r162`, `r163`, `r164`, `r165`, `r166`, `r167`, `r168`, `r169`, `r1610`, `r1611`, `r1612`, `r1613`, `r1614`, `r1615`, `r171`, `r172`, `r173`, `r181`, `r182`, `r183`, `r184`, `r185`, `r186`, `r187`, `r188`, `r191`, `r192`, `r193`, `r1101`, `r1102`, `r1103`, `r1104`, `r1105`, `r1106`, `r1107`, `r1108`, `r1109`) VALUES
(1, 1, 0, 0, 1, 1, 1, 0, 1, 0, 1, 0, 0, 1, 1, 1, 0, 0, 1, 0, 0, 0, 1, 0, 1, 0, 1, 0, 1, 0, 0, 1, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 0, 1, 0, 1, 0, 0, 1, 1, 1, 0, 1, 0, 1, 0, 0, 1, 1, 1, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `nomep` varchar(220) NOT NULL,
  `celular` int(11) NOT NULL,
  `email` varchar(220) NOT NULL,
  `endereco` varchar(220) NOT NULL,
  `enderecoc` varchar(220) NOT NULL,
  `municipio` varchar(220) NOT NULL,
  `tipo` int(5) NOT NULL,
  `obs` varchar(220) NOT NULL,
  `total` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `nomep`, `celular`, `email`, `endereco`, `enderecoc`, `municipio`, `tipo`, `obs`, `total`) VALUES
(1, 'Louzada', 'Rodrigo', 123, 'guigolouzada', 'ibicui', 'ibicui', 'uruguaiana', 0, 'obs1', '10'),
(2, 'Potranca', 'Cesar', 123456, 'cesar123', 'centro', 'centro', 'alegrete', 1, 'obs2', '20'),
(3, 'Pelea', 'Kelly', 123456789, 'kelly123456', 'duque', 'duque', 'itaqui', 2, 'obs3', '30'),
(4, 'Corte', 'Michel', 6789, 'Michel123456', 'duque', 'duque', 'itaqui', 3, 'obs4', '40');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
