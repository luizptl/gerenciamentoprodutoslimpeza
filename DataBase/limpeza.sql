-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 17/05/2024 às 19:22
-- Versão do servidor: 8.3.0
-- Versão do PHP: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `limpeza`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `estoque`
--

DROP TABLE IF EXISTS `estoque`;
CREATE TABLE IF NOT EXISTS `estoque` (
  `Condominio` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `mesano` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `Aromatizante` int NOT NULL,
  `AlcoolLiquido` int NOT NULL,
  `AguaSanitaria` int NOT NULL,
  `Detergente500ML` int NOT NULL,
  `SabaoEmPo` int NOT NULL,
  `Desinfetante5L` int NOT NULL,
  `Desinfetante10L` int NOT NULL,
  `Desinfetante15L` int NOT NULL,
  `Removedor` int NOT NULL,
  `LimpaVidros` int NOT NULL,
  `LimpaInox` int NOT NULL,
  `LimpadorMultiuso` int NOT NULL,
  `PedraSanitaria` int NOT NULL,
  `PapelHigienico` int NOT NULL,
  `LustraMoveis` int NOT NULL,
  `LuvasdeBorrachaP` int NOT NULL,
  `LuvasdeBorrachaM` int NOT NULL,
  `LuvasdeBorrachaG` int NOT NULL,
  `SacodeLixo20L` int NOT NULL,
  `SacodeLixo40L` int NOT NULL,
  `SacodeLixo60L` int NOT NULL,
  `SacodeLixo100L` int NOT NULL,
  `PanodeChao` int NOT NULL,
  `Flanela` int NOT NULL,
  `VassouraPiacava` int NOT NULL,
  `VassouraCerdasMacia` int NOT NULL,
  `VasouraMOP` int NOT NULL,
  `Rodo` int NOT NULL,
  `PaColetora` int NOT NULL,
  `Esponja` int NOT NULL,
  `Balde10L` int NOT NULL,
  `ID` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3;

--
-- Despejando dados para a tabela `estoque`
--

INSERT INTO `estoque` (`Condominio`, `mesano`, `Aromatizante`, `AlcoolLiquido`, `AguaSanitaria`, `Detergente500ML`, `SabaoEmPo`, `Desinfetante5L`, `Desinfetante10L`, `Desinfetante15L`, `Removedor`, `LimpaVidros`, `LimpaInox`, `LimpadorMultiuso`, `PedraSanitaria`, `PapelHigienico`, `LustraMoveis`, `LuvasdeBorrachaP`, `LuvasdeBorrachaM`, `LuvasdeBorrachaG`, `SacodeLixo20L`, `SacodeLixo40L`, `SacodeLixo60L`, `SacodeLixo100L`, `PanodeChao`, `Flanela`, `VassouraPiacava`, `VassouraCerdasMacia`, `VasouraMOP`, `Rodo`, `PaColetora`, `Esponja`, `Balde10L`, `ID`) VALUES
('Gran Palazzo Teompompo', 'MAI24', 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
('Itapema', 'MAI24', 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2),
('Delta', 'MAI24', 1, 2, 4, 3, 2, 2, 0, 0, 2, 2, 3, 3, 4, 4, 3, 2, 0, 0, 1, 2, 1, 3, 4, 3, 2, 1, 1, 2, 2, 4, 2, 3),
('Mirella', 'MAI24', 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4),
('Simone', 'MAI24', 1, 2, 1, 2, 1, 1, 0, 0, 0, 1, 1, 1, 0, 1, 0, 1, 0, 0, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 2, 1, 5);

-- --------------------------------------------------------

--
-- Estrutura para tabela `listadecompras`
--

DROP TABLE IF EXISTS `listadecompras`;
CREATE TABLE IF NOT EXISTS `listadecompras` (
  `Condominio` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `mesano` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `Aromatizante` int NOT NULL,
  `AlcoolLiquido` int NOT NULL,
  `AguaSanitaria` int NOT NULL,
  `Detergente500ML` int NOT NULL,
  `SabaoEmPo` int NOT NULL,
  `Desinfetante5L` int NOT NULL,
  `Desinfetante10L` int NOT NULL,
  `Desinfetante15L` int NOT NULL,
  `Removedor` int NOT NULL,
  `LimpaVidros` int NOT NULL,
  `LimpaInox` int NOT NULL,
  `LimpadorMultiuso` int NOT NULL,
  `PedraSanitaria` int NOT NULL,
  `PapelHigienico` int NOT NULL,
  `LustraMoveis` int NOT NULL,
  `LuvasdeBorrachaP` int NOT NULL,
  `LuvasdeBorrachaM` int NOT NULL,
  `LuvasdeBorrachaG` int NOT NULL,
  `SacodeLixo20L` int NOT NULL,
  `SacodeLixo40L` int NOT NULL,
  `SacodeLixo60L` int NOT NULL,
  `SacodeLixo100L` int NOT NULL,
  `PanodeChao` int NOT NULL,
  `Flanela` int NOT NULL,
  `VassouraPiacava` int NOT NULL,
  `VassouraCerdasMacia` int NOT NULL,
  `VasouraMOP` int NOT NULL,
  `Rodo` int NOT NULL,
  `PaColetora` int NOT NULL,
  `Esponja` int NOT NULL,
  `Balde10L` int NOT NULL,
  `ID` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb3;

--
-- Despejando dados para a tabela `listadecompras`
--

INSERT INTO `listadecompras` (`Condominio`, `mesano`, `Aromatizante`, `AlcoolLiquido`, `AguaSanitaria`, `Detergente500ML`, `SabaoEmPo`, `Desinfetante5L`, `Desinfetante10L`, `Desinfetante15L`, `Removedor`, `LimpaVidros`, `LimpaInox`, `LimpadorMultiuso`, `PedraSanitaria`, `PapelHigienico`, `LustraMoveis`, `LuvasdeBorrachaP`, `LuvasdeBorrachaM`, `LuvasdeBorrachaG`, `SacodeLixo20L`, `SacodeLixo40L`, `SacodeLixo60L`, `SacodeLixo100L`, `PanodeChao`, `Flanela`, `VassouraPiacava`, `VassouraCerdasMacia`, `VasouraMOP`, `Rodo`, `PaColetora`, `Esponja`, `Balde10L`, `ID`) VALUES
('Venezia', 'ABR24', 3, 2, 3, 4, 1, 3, 0, 0, 2, 3, 2, 5, 1, 3, 2, 1, 0, 0, 1, 1, 1, 3, 3, 2, 1, 1, 0, 1, 1, 2, 2, 1),
('Delta', 'ABR24', 3, 2, 1, 2, 2, 0, 1, 0, 1, 1, 1, 2, 1, 2, 1, 0, 1, 0, 1, 1, 3, 2, 2, 1, 1, 2, 1, 2, 1, 4, 2, 2),
('Marianas Garden', 'ABR24', 1, 3, 2, 4, 2, 0, 0, 1, 2, 3, 2, 3, 2, 3, 2, 0, 2, 0, 3, 3, 2, 1, 2, 1, 0, 0, 1, 1, 1, 2, 1, 3),
('Simone', 'ABR24', 3, 2, 3, 4, 1, 3, 0, 0, 2, 3, 2, 5, 1, 3, 2, 1, 0, 0, 1, 1, 1, 3, 3, 2, 1, 1, 0, 1, 1, 2, 2, 4),
('Mirella', 'ABR24', 3, 2, 3, 4, 1, 3, 0, 0, 2, 3, 2, 5, 1, 3, 2, 1, 0, 0, 1, 1, 1, 3, 3, 2, 1, 1, 0, 1, 1, 2, 2, 5),
('Nove de Julho', 'ABR24', 1, 1, 1, 1, 1, 1, 0, 0, 2, 2, 1, 4, 0, 2, 1, 1, 0, 0, 1, 1, 2, 2, 3, 1, 1, 2, 0, 1, 0, 2, 1, 6),
('Solar das Palmeiras', 'ABR24', 1, 1, 1, 1, 1, 1, 0, 0, 2, 2, 1, 4, 0, 2, 1, 1, 0, 0, 1, 1, 2, 2, 3, 1, 1, 2, 0, 1, 0, 2, 1, 7),
('Gran Palazzo Teompompo', 'ABR24', 3, 2, 2, 3, 1, 0, 0, 1, 1, 2, 1, 1, 1, 1, 1, 0, 0, 1, 1, 0, 2, 1, 3, 2, 1, 0, 1, 0, 1, 4, 1, 8),
('Solar dos Colibris e Andorinhas', 'ABR24', 1, 1, 1, 1, 1, 1, 2, 2, 2, 2, 2, 1, 1, 2, 1, 1, 1, 0, 2, 2, 3, 3, 2, 1, 1, 2, 1, 1, 1, 1, 1, 9),
('Inconfidência', 'ABR24', 1, 2, 1, 2, 2, 0, 0, 1, 1, 2, 1, 2, 0, 1, 2, 2, 0, 1, 1, 1, 1, 2, 3, 3, 1, 0, 0, 0, 1, 2, 2, 10),
('Itapema', 'ABR24', 1, 1, 1, 1, 1, 1, 0, 0, 2, 2, 1, 4, 0, 2, 1, 1, 0, 0, 1, 1, 2, 2, 3, 1, 1, 2, 0, 1, 0, 2, 1, 11),
('Cabo Frio', 'ABR24', 1, 1, 1, 1, 1, 1, 0, 0, 2, 2, 1, 4, 0, 2, 1, 1, 0, 0, 1, 1, 2, 2, 3, 1, 1, 2, 0, 1, 0, 2, 1, 12),
('Felicita', 'ABR24', 1, 2, 2, 4, 1, 1, 0, 0, 2, 2, 1, 1, 0, 1, 1, 1, 0, 0, 0, 0, 2, 2, 1, 1, 0, 0, 0, 0, 0, 2, 1, 13),
('Maria Nice', 'ABR24', 1, 1, 1, 1, 1, 1, 2, 2, 2, 2, 2, 1, 1, 2, 1, 1, 1, 0, 2, 2, 3, 3, 2, 1, 1, 2, 1, 1, 1, 1, 1, 14),
('Varandas da Vila', 'ABR24', 2, 2, 2, 3, 1, 0, 2, 0, 1, 2, 0, 3, 0, 2, 3, 2, 0, 0, 1, 1, 0, 3, 2, 1, 1, 1, 0, 1, 0, 0, 2, 15),
('Venezia', 'MAI24', 1, 1, 1, 1, 2, 0, 0, 1, 1, 1, 1, 1, 1, 2, 1, 1, 0, 0, 1, 1, 0, 2, 1, 1, 0, 0, 0, 0, 0, 2, 1, 27),
('Delta', 'MAI24', 1, 1, 1, 1, 1, 0, 0, 1, 0, 0, 0, 1, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 1, 1, 0, 1, 0, 1, 0, 2, 2, 28),
('Marianas Garden', 'MAI24', 1, 2, 1, 2, 3, 1, 0, 0, 1, 2, 1, 3, 3, 0, 1, 1, 0, 0, 1, 1, 1, 2, 2, 1, 1, 1, 0, 1, 2, 2, 1, 29),
('Simone', 'MAI24', 1, 2, 2, 3, 2, 0, 1, 0, 1, 1, 1, 3, 1, 2, 1, 0, 1, 0, 1, 2, 2, 3, 2, 1, 1, 1, 0, 1, 1, 2, 2, 30);

-- --------------------------------------------------------

--
-- Estrutura para tabela `listadecompras2`
--

DROP TABLE IF EXISTS `listadecompras2`;
CREATE TABLE IF NOT EXISTS `listadecompras2` (
  `Condominio` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `Dia` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `MesAno` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `Item` varchar(150) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `Justificativa` varchar(300) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `ID` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb3;

--
-- Despejando dados para a tabela `listadecompras2`
--

INSERT INTO `listadecompras2` (`Condominio`, `Dia`, `MesAno`, `Item`, `Justificativa`, `ID`) VALUES
('Nove de Julho', '3', 'MAI24', 'esponja de aço', 'produto não disponível nas opçoes de solicitação', 11),
('Solar das Palmeiras', '3', 'MAI24', 'desengordurante', 'piso com gordura', 10);

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto`
--

DROP TABLE IF EXISTS `produto`;
CREATE TABLE IF NOT EXISTS `produto` (
  `idproduto` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `descricao` varchar(100) DEFAULT NULL,
  `valor` float NOT NULL,
  `imagem` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idproduto`)
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=utf8mb3;

--
-- Despejando dados para a tabela `produto`
--

INSERT INTO `produto` (`idproduto`, `nome`, `descricao`, `valor`, `imagem`) VALUES
(1, 'Aromatizante', 'As Essências Aromatizantes Coala, deixa o ambiente com um perfume duradouro, e a agradável sensação ', 0, 'p1'),
(2, 'Alcool 46º inpm tradicional', '', 0, 'p2'),
(3, 'Removedor', '', 0, 'p3'),
(4, 'Pedra Sanitária', '', 0, 'p4'),
(5, 'Saco de Lixo - 20L/40L/60L/100L', '', 0, 'p5'),
(6, 'Pano de Chão', '', 0, 'p6'),
(7, 'Flanela - Tecido de Microfibra', '', 0, 'p7'),
(8, 'Lustra Móveis', '', 0, 'p8'),
(9, 'Luvas de Borracha - p/m/g', '', 0, 'p9'),
(10, 'Limpa Inox', '', 0, 'p10'),
(11, 'Limpa Vidros', '', 0, 'p11'),
(12, 'Vassoura de Cerdas Macia', '', 0, 'p12'),
(13, 'Vassoura de Piaçava', '', 0, 'p13'),
(14, 'Rodo', '', 0, 'p14'),
(15, 'Papel Higiênico', '', 0, 'p15'),
(16, 'Limpador Multiuso', '', 0, 'p16'),
(17, 'Detergente Neutro 500 ML', '', 0, 'p17'),
(18, 'Esponja', '', 0, 'p18'),
(19, 'Sabão em Pó', '', 0, 'p19'),
(20, 'Desinfetante - 5L/10L/15L', '', 0, 'p20'),
(21, 'Cloro 5L', '', 0, 'p21'),
(22, 'Balde 10L', '', 0, 'p24'),
(23, 'Vassoura MOP', '', 0, 'p23');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
