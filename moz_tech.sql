-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 22, 2019 at 04:33 AM
-- Server version: 5.7.24
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moz_tech`
--

-- --------------------------------------------------------

--
-- Table structure for table `produtos`
--

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `preco` int(11) DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `descricao` mediumtext,
  `data` date DEFAULT NULL,
  `vendas` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `preco`, `quantidade`, `descricao`, `data`, `vendas`, `status`) VALUES
(1, 'Headset Gamer Logitech Prodigy', 6415, 162, 'Marca Logitech Modelo 981-000626 Driver 40mm Frequência de Resposta 20Hz - 20KHz Impedância 32 Ohm Sensibilidade 90dB', '2019-04-05', 42, 0),
(2, 'Combo Teclado + Teclado Gamer', 6480, 91, 'Teclado e Mouse gaming duráveis, totalmente programáveis com teclas de função macro, fácil de implementar meios de comunicação, botões multimídia, bem como as suas preferências mudam de acordo com o ângulo da altura do teclado, ajustável em uma variedade de jogos para atender às necessidades mais exigidas.', '2019-12-18', 50, 0),
(3, 'Roteador Wireless Intelbras HotSpot 200', 4980, 400, 'Para seu restaurante libera internet após cliente fazer checkin no seu restaurante ou qualquer estabelecimento comercial usando o Facebook. Além de ser um Roteador Wireless Corporativo de ótima qualidade e estabilidade, o Hotspot 300 possui o diferencial de divulgar e promover os estabelecimentos comerciais no Facebook de forma espontânea. Sua principal função é fornecer o acesso á rede sem fio sem a necessidade de senha, apenas com o check-in na página do estabelecimento comercial no Facebook. Além disso, permite a criação de duas redes, uma exclusiva para os clientes e outra para os funcionários, e possui alimentação poe, que une dados e energia num mesmo cabo, garantindo economia na Instalação. ', '2014-03-12', 98, 0),
(4, 'Cartão de Memoria Sandisk 32gb', 840, 1, 'Tire e salve mais fotos de alta qualidade e vídeo Full HD em seu smartphone ou tablet Android com cartões SanDisk Ultra microSD UHS-I. Com capacidade de armazenamento de até 64GB, eles são o complemento ideal para smartphones e tablets Android. E o aplicativo SanDisk Memory Zone, disponível na loja Google Play, facilita a visualização, o acesso e a cópia de segurança de todos os seus arquivos a partir da memória do seu telefone em um local conveniente.', '2019-02-27', 68, 0),
(5, 'Memoria Kingston 4GB 1600Mhz DDR3 PC3L CL11', 4780, 1, 'Especificações: \r\n- Compatível com: Notebook\r\n- Capacidade: 8GB\r\n- Velocidade: DDR3L 1600 (PC3 12800)\r\n- CAS Latência: 11\r\n- VDDQ = 1.35V\r\n- Tipo: 204-Pin DDR3 SO-DIMM', '2018-01-10', 145, 0),
(6, 'HD Externo Seagate Expansion Portatil 1 TB', 5780, 1, 'O disco portátil Seagate® Expansion é compacto e perfeito para ser transportado. Adicione mais espaço de armazenamento instantaneamente ao seu computador e leve arquivos grandes nas suas viagens.\r\n\r\nA instalação é simples e direta, bastando conectar um cabo USB e pronto. O disco é alimentado pelo cabo USB, dispensando uma fonte de alimentação externa. Além disso, ele é reconhecido automaticamente pelo sistema operacional Windows®, então não há software para instalar nem nada para configurar. Salvar arquivos é fácil - é só arrastar e soltar.\r\n\r\nAproveite ao máximo as velocidades de transferência de dados rápidas da interface USB 3.0 conectando o disco a uma porta USB 3.0 SuperSpeed. A interface USB 3.0 é compatível retroativamente com USB 2.0, proporcionando maior flexibilidade', '2019-05-13', 10, 0),
(7, 'Injustice 2 - PS4', 3200, 1, 'Injustice 2 é a sequência direta de Injustice: Gods Among Us.\r\nCom uma seleção massiva de super-heróis e super-vilões da DC, o jogo permitirá que você customize cada personagem com diferentes equipamentos adquiridos no decorrer da história', '2015-06-02', 345, 0),
(8, 'Console Sony PS4 1TB', 28000, 1, 'Marca\r\nSony\r\n\r\nLinha\r\nPlayStation\r\n\r\nModelo\r\nPlayStation 4\r\n\r\nSub modelo\r\nSlim\r\n\r\nModelo alfanumérico\r\nCUH-20\r\n\r\nCapacidade\r\n500 GB', '2019-12-10', 27, 0),
(9, 'HD Externo Portátil Seagate Expansion 3TB', 3000, 1, 'O disco rígido portátil Seagate Expansion oferece uma solução fácil de usar quando você precisa adicionar armazenamento instantaneamente ao seu computador e levar seus arquivos aonde você for.', '2019-04-24', 72, 0),
(10, 'Teclado Gamer Razer Ornata Chroma', 1500, 1, 'Especificações:\r\n\r\n- Tecnologia Mecha-Membrane Razer\r\n\r\n- Keycaps de altura média\r\n\r\n- Teclas retroiluminadas individualmente\r\n\r\n- Suporte de pulso ergonômico\r\n\r\n- Razer Synapse ativado\r\n\r\n- Teclas totalmente programáveis ??com gravação instantânea de macro\r\n\r\n- Rolagem de 10 teclas\r\n\r\n- Modo de jogo dedicado\r\n\r\n- Capacidade anti-ghost para até 10 pressões de teclas ', '2017-12-13', 114, 0),
(11, 'Placa Mãe GIGABYTE AMD AM4', 7259, 1, 'CPU:\r\n\r\n\r\n\r\nAM4 Soquete:\r\n\r\n- Processador AMD Ryzen\r\n\r\n- Processador AMD 7ª geração A / Athlon\r\n\r\n\r\nChipset:\r\n\r\n- AMD A320\r\n\r\n\r\n\r\nMemória:\r\n\r\n- 2 x DDR4 DIMM suporta até 32 GB de memória do sistema\r\n\r\n- Arquitetura de memória de canal duplo\r\n\r\n- Suporte para módulos de memória DDR4 3200 (OC) / 2933 (OC) / 2667 * / 2400/2133 MHz \r\n\r\n* Suporte para mais de DDR4 2667 MHz pode variar de CPU.\r\n\r\n- Suporte para módulos de memória DIMM 1Rx8 / 2Rx8 não-protegidos ECC (operam em modo não-ECC)\r\n\r\n- Suporte para módulos de memória DIMM 1Rx8 / 2Rx8 / 1Rx16 não-protegidos ECC não-ECC\r\n\r\n- Suporte para módulos de memória Extreme Memory Profile (XMP)', '2011-02-27', 74, 0),
(12, 'Controle PS2 Cruzeiro', 1000, 1, '- Compatível 100% com todos os Jogos\r\n- Vibração com motor duplo (Dualshock 2)\r\n- Opera nos modos digital e analógico\r\n- Comprimento do Cabo de 1 metro e 80 centímetros\r\n- Proteção na saída do cabo de controle, evitando rompimento ', '2010-03-12', 95, 0),
(13, 'Chromecast 2 Hdmi Full HD Wireless', 4850, 80, 'O mundo do entretenimento on line em sua  TV com Google Chromecast 2015. Basta conectar  a interface HDMI da sua TelevisÃ£o e sua rede WiFi  para comeÃ§ar a transmitir. Veja mais detalhes!', '2020-07-21', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nome`, `email`, `senha`, `status`) VALUES
(1, 'Elio', 'emuculo25@gmail.com', '$2y$10$WapA00tAK3BpnJMdqRUY2.IA7P9W8PjDd1mwbWhItHAc14.X7haMa', 1),
(2, 'justyn', 'Dasilva25@gmail.com', '$2y$10$k9BTdvZ67NbNXgK44IFsUuLCstpQsXGopocwGo1bLYRFDl7eEQ25a', 0),
(3, 'Dinho', 'eliodark25@gmail.com', '$2y$10$PEYc1wxw5sFsC2XfibB0wOJQU4TMtFqeA7N9fV65xxQ5gJxc9bfB6', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
