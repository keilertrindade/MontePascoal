-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Tempo de geração: 04-Jan-2022 às 06:58
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `montepascoal`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `atletas`
--

DROP TABLE IF EXISTS `atletas`;
CREATE TABLE IF NOT EXISTS `atletas` (
  `idatletas` int(11) NOT NULL AUTO_INCREMENT,
  `equipe_idequipe` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `posicao` varchar(20) DEFAULT NULL,
  `datanascimento` date DEFAULT NULL,
  `rg` varchar(15) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idatletas`),
  KEY `fk_atletas_equipe` (`equipe_idequipe`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `atletas`
--

INSERT INTO `atletas` (`idatletas`, `equipe_idequipe`, `nome`, `posicao`, `datanascimento`, `rg`, `foto`) VALUES
(1, 1, 'Atleta Teste 01', 'Goleiro', '1991-01-01', '00000000001', '../perfilatleta/1-handebol.png'),
(2, 1, 'Atleta Teste 02', 'Armador Esquerdo', '1992-09-01', '00000000002', '../perfilatleta/2-HÃ³rus.jpg'),
(3, 2, 'Atleta Teste 01 - Equipe 02', 'Pivo', '2001-12-12', '0000000000003', '../perfilatleta/3-fon fon.jpeg'),
(4, 3, 'Atleta Teste 01 - Equipe 03', 'Armador Esquerdo', '1223-09-09', '000000000132', '../perfilatleta/4-w_vLfOc5_400x400.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipe`
--

DROP TABLE IF EXISTS `equipe`;
CREATE TABLE IF NOT EXISTS `equipe` (
  `idequipe` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(45) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `cidade` varchar(45) DEFAULT NULL,
  `estado` varchar(20) DEFAULT NULL,
  `numeroatletas` int(11) DEFAULT NULL,
  `fem30` tinyint(4) DEFAULT NULL,
  `fem40` tinyint(4) DEFAULT NULL,
  `fem50` tinyint(4) DEFAULT NULL,
  `mas35` tinyint(4) DEFAULT NULL,
  `mas40` tinyint(4) DEFAULT NULL,
  `mas45` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`idequipe`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `equipe`
--

INSERT INTO `equipe` (`idequipe`, `email`, `senha`, `nome`, `cidade`, `estado`, `numeroatletas`, `fem30`, `fem40`, `fem50`, `mas35`, `mas40`, `mas45`) VALUES
(1, 'login@login.com', '$2y$10$48Dpjk9FqO.cNwLjrxF.q.JTaaKPhY16Su3bdMl5NDIs.j2P/.Uxy', 'Equipe Teste', 'Cidade Teste', 'Estado Teste', 2, 0, 1, 0, 0, 1, 0),
(2, 'login2@login.com', '$2y$10$OJGOZ57svwRff1tDV8jDzOFgowi2gBusXAYIvWxbH9a5GDDcZLuAi', 'Teste Equipe 02', 'Cidade Login 2', 'Estado Login 2', 1, 0, 0, 0, 1, 1, 1),
(3, 'login3@login.com', '$2y$10$FBoCqW/Pt9lOdkfYjkR65OpB/Y72kK9WKJ/B2htOjhm8JscV/ws3S', 'Equipe 03', 'Cidade 03', 'Estado 03', 1, 1, 1, 1, 0, 0, 0);

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `atletas`
--
ALTER TABLE `atletas`
  ADD CONSTRAINT `fk_atletas_equipe` FOREIGN KEY (`equipe_idequipe`) REFERENCES `equipe` (`idequipe`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
