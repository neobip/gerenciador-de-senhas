-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 26-Jun-2017 às 23:38
-- Versão do servidor: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gerenciador`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `acesso`
--

CREATE TABLE `acesso` (
  `codacesso` int(2) NOT NULL,
  `nomeacesso` varchar(50) DEFAULT NULL,
  `codgrupo` int(2) DEFAULT NULL,
  `link` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `acesso`
--

INSERT INTO `acesso` (`codacesso`, `nomeacesso`, `codgrupo`, `link`, `created_at`, `updated_at`) VALUES
(1, 'GTA', 2, 'http://rs.gta-travel.com/', NULL, '2017-06-26 21:35:58'),
(2, 'Avianca', 2, 'https://agencias.avianca.com.br/', NULL, NULL),
(3, 'Team Americany', 2, 'http://dream.teamamericany.com/', NULL, NULL),
(4, 'Hotel Bedss', 2, 'http://www.hotelbeds.com/login', NULL, '2017-06-26 19:59:28'),
(5, 'Special Tours', 2, 'https://cuentas.specialtours.com/?usertype=SptCliente&continue=https%3A%2F%2Fwww.specialtours.com%2F', NULL, NULL),
(6, 'Kaluah', 2, 'http://www.kaluahtours.com/', NULL, NULL),
(7, 'Gowaii', 2, 'http://www.gowaii.com.br/cliente/login.aspx', NULL, NULL),
(8, 'Hertz', 2, 'http://www.hertz-int.com.br/Login.aspx', NULL, NULL),
(9, 'Interep', 2, 'https://www.interep.com.br/Hotel/', NULL, NULL),
(10, 'Servidores', 1, '', NULL, NULL),
(11, 'Skype', 1, '', NULL, NULL),
(12, 'Sato Tours', 2, 'http://www.satotours.at/webmanager/view.php?dirid=6', NULL, NULL),
(13, 'Azul', 8, 'http://agencias.voeazul.com.br/PortalB2B/', NULL, NULL),
(14, 'Panavision', 2, 'http://www.panavision-tours.com.br/rol2/fwdAgencias.do?ame=S&BR=S', NULL, NULL),
(15, 'Coris', 2, 'http://www.coris-emissoes.com.br/site_v6/home/default.asp', NULL, NULL),
(16, 'Pullmantur', 2, 'https://www.pullmantur.com.br/pt/web/pullmanturbr/login', NULL, NULL),
(17, 'Costa', 2, 'https://www.costacruisemanager.com.br/#', NULL, NULL),
(18, 'Melia Pro', 2, 'https://www1.melia.com/pt/meliapro/home.htm', NULL, NULL),
(19, 'Wamos', 2, 'http://www.wamos.com/es/agencias/acceso/', NULL, NULL),
(20, 'Hotel Riu', 2, 'https://www.riuagents.com/agents/en/home.jsp', NULL, NULL),
(21, 'Nortravel', 2, 'http://www.nortravel.pt/optitravel/online/www/layout15/index.php', NULL, NULL),
(22, 'City Tours(Antigo)', 2, 'http://www.hotelcenter-usa.com/HotelCenter-USA/CTOnline/ctonline_index.jsp', NULL, NULL),
(23, 'City Tours(Novo)', 2, 'http://www.ct-res.com/Autenticacao/login.aspx', NULL, NULL),
(24, 'Grayline Equador', 2, 'http://www.graylineecuador.travel/cliente/login.aspx', NULL, NULL),
(25, 'Gema Tours', 2, 'http://www.gematours.com/agencia.php?la=es', NULL, NULL),
(26, 'Cynsa', 2, 'http://cynsa.net/login.php', NULL, NULL),
(27, 'Abreu Online EUR', 2, 'http://abreuonline.com.br/Default.aspx', NULL, NULL),
(28, 'Abreu Online USD', 2, 'http://www.abreuonline.com/Default.aspx', NULL, NULL),
(29, 'Email', 1, 'https://webmail-seguro.com.br/uneworld.com.br/', NULL, NULL),
(30, 'Wifi', 1, '', NULL, NULL),
(31, 'Locaweb', 1, 'http://www.locaweb.com.br/default.html', NULL, NULL),
(32, 'NSZ', 1, 'www.nsz.com.br/suporte', NULL, NULL),
(33, 'Bitbucket', 1, 'https://bitbucket.org/', NULL, NULL),
(34, 'Kanbanflow', 1, 'https://kanbanflow.com/', NULL, NULL),
(35, 'Login', 7, '', NULL, NULL),
(36, 'Instagram', 3, 'https://instagram.com/accounts/login/', NULL, NULL),
(37, 'Apple ID', 3, 'https://appleid.apple.com/', NULL, NULL),
(38, 'SIGU', 7, '', NULL, NULL),
(39, 'Galileo', 9, '', NULL, NULL),
(40, 'GOL', 8, 'http://www.voegol.com.br/pt-br/agencias/paginas/home.aspx', NULL, NULL),
(41, 'Clipper Travel', 2, 'https://secure.espresso.cruisingpower.com/SecureLogin.do?', NULL, NULL),
(42, 'All Ways Travel(Cuba Cruise)', 2, 'http://yourcubacruise.com/cuba-cruise-partners/travel-agents', NULL, NULL),
(43, 'Notebook', 3, '', NULL, NULL),
(44, 'Condor Link', 2, 'http://www.condorlink.com/', NULL, NULL),
(45, 'Trapsatur', 2, 'http://trapsatur.com/index.php', NULL, NULL),
(46, 'Season Travel', 2, 'http://seasonstravel.oristravel.com/index.php', NULL, NULL),
(47, 'GODESTINOS', 2, 'http://www.godestinos.com/pt/', NULL, NULL),
(48, 'Surland', 2, 'http://www.surland.com/', NULL, NULL),
(49, 'Abreu Online BRL', 2, 'http://abreuonline.com.br/Default.aspx', NULL, NULL),
(50, 'Bitbucket', 1, 'https://bitbucket.org/account/signin/?next=/', NULL, NULL),
(51, 'ADT/SIEMENS', 1, 'http://www.clienteadt.com.br/Portal_Cliente/', NULL, NULL),
(52, 'Domitur', 2, 'http://www.domitur.com/', NULL, NULL),
(53, 'HOTELDO', 2, 'http://www.hoteldo.com.br/', NULL, NULL),
(54, 'Lowcostbeds', 2, 'http://www.lowcostbeds.com/', NULL, NULL),
(55, 'Asco Lotus', 2, 'http://ascolotus.com/Login.aspx', NULL, NULL),
(56, 'Banco de Dados', 1, '', NULL, NULL),
(57, 'Dicas', 1, 'http://www.uneworld.com.br/teste_dicas/sis/index.php?logout', NULL, NULL),
(58, 'Notebook', 1, '', NULL, NULL),
(59, 'Central', 1, '', NULL, NULL),
(60, 'Cangooroo', 2, 'http://uneworld.cangooroo.net/', NULL, NULL),
(61, 'FTP', 1, '', NULL, NULL),
(62, 'Welcome Beds', 2, 'http://www.welcomebeds.com', NULL, NULL),
(63, 'Google', 7, 'www.google.com', NULL, NULL),
(64, 'IATA BSP', 6, 'https://portal.iata.org/ISSP_Login', NULL, NULL),
(65, 'GARTOUR', 2, 'http://www.gartour.it/pt', NULL, NULL),
(66, 'Welcome Tours', 8, 'http://b2b3.tourvestdm.com/', NULL, NULL),
(67, 'Quality Travel Argentina', 2, 'http://www.qualitytravel.tur.ar/', NULL, NULL),
(68, 'Bestbuy Hotel', 2, 'www.bestbuyhotel.com.br', NULL, NULL),
(69, 'Wikipedia', 1, 'http://192.168.0.55/dokuwiki/doku.php', NULL, NULL),
(70, 'Rail Europe', 2, 'http://www.raileurope.com.br/', NULL, NULL),
(71, 'Flycard', 2, 'http://www.flycard.com.br/', NULL, NULL),
(72, 'Costa Click', 2, 'http://www.costaclick.com.br/CostaClick/pt-BR/Pages/default.aspx', NULL, NULL),
(73, 'Firefox', 1, '', NULL, NULL),
(74, 'PostgreSQL', 1, '', NULL, NULL),
(75, 'CTS CHILE', 2, 'http://cts.distantis.com/distantis/ingreso.php', NULL, NULL),
(76, 'Walmart', 6, 'https://www.walmart.com.br/', NULL, NULL),
(77, 'GVT', 1, 'http://192.168.15.1/login.htm', NULL, NULL),
(78, 'Tourico', 2, 'https://login.touricoholidays.com/#', NULL, NULL),
(79, '3COM Switch', 1, 'http://192.168.0.254/', NULL, NULL),
(80, 'Sharaf Tours', 2, 'http://www.sharaftours.com/', NULL, NULL),
(81, 'Tasker Braspag', 1, 'https://braspag.tasker.com.br/tasker.dll/T5', NULL, NULL),
(82, 'Hotels Pro', 2, 'http://www.hotelspro.com/new.index.php', NULL, NULL),
(83, 'Joinview', 2, 'https://www.jonview.com/', NULL, NULL),
(84, 'Sharaf Tours', 2, 'http://www.sharaftours.com/', NULL, NULL),
(85, 'Tumlare', 2, 'https://extranet.tumlare.com', NULL, NULL),
(86, 'All Reps', 2, 'http://www.allrepsreceptivo.com/', NULL, NULL),
(87, '6Tours', 2, 'http://www.6tour.com/', NULL, NULL),
(88, 'AbTour para Hotel Online', 2, 'http://juniper.consolidlatinamerica.com/', NULL, NULL),
(89, 'AbTour', 2, 'http://uruguay.abtour.com.uy/', NULL, NULL),
(90, 'ETAM', 2, 'https://fat.e-tam.com.br/fat/html/index_fat.html', NULL, NULL),
(91, 'Royal', 2, 'http://www.cruisingpower.com/', NULL, NULL),
(92, 'MaisFly', 2, 'http://www.maisfly.com.br', NULL, NULL),
(93, 'April Brasil', 2, 'http://www.aprilbrasil.com.br/', NULL, NULL),
(94, 'KLM', 2, 'https://www.agentconnect.biz/BR/en/local/process/prehome/connexion.wadis?pays=BR', NULL, NULL),
(95, 'R11 Travel', 2, 'http://bookeasy.site.traveltek.net/fusion/agentlogin.pl?gohere=http%3A%2F%2Fbookeasy.site.traveltek.', NULL, NULL),
(96, 'Omnibees', 2, 'http://myportal.omnibees.com/', NULL, NULL),
(97, 'Transnordictours', 2, 'http://www.transnordictours.dk/pt/tours-and-services-portugisisk/guaranteed-departures-portuguese', NULL, NULL),
(98, ' Solvera', 2, 'http://69.64.77.177/Bridge.Solvera/Account/LogOn?ReturnUrl=%2fBridge.Solvera%2fHotel%2fSearch', NULL, NULL),
(99, 'First Premium', 2, 'http://b2b.firstpremium.cl/', NULL, NULL),
(100, 'GSBTours', 2, 'http://80.24.36.160/login_nuevo.php', NULL, NULL),
(101, 'Norwegian', 2, 'https://seawebagents.ncl.com/Security/login/', NULL, NULL),
(102, 'Princess', 2, 'https://www.princess.com/', NULL, NULL),
(103, 'ConnectMiles', 2, '', NULL, NULL),
(105, 'Miller', 2, 'http://www.miller-incoming.com/pt/informacoes/login/', NULL, NULL),
(106, 'Destination Of The World', 2, 'https://us.dotwconnect.com/interface/en/accommodation', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `grupo`
--

CREATE TABLE `grupo` (
  `codgrupo` int(2) NOT NULL,
  `nomegrupo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `grupo`
--

INSERT INTO `grupo` (`codgrupo`, `nomegrupo`) VALUES
(1, 'TI'),
(2, 'Fornecedores'),
(3, 'Diretores'),
(4, 'Vendas'),
(5, 'RH'),
(6, 'Financeiro'),
(7, 'Desenvolvimento'),
(8, 'Agencias'),
(9, 'Travelport');

-- --------------------------------------------------------

--
-- Estrutura da tabela `grupoacesso`
--

CREATE TABLE `grupoacesso` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `senha` varchar(45) DEFAULT NULL,
  `datahoracadastro` datetime DEFAULT NULL,
  `ativo` char(1) DEFAULT NULL,
  `datahoraultimoacesso` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`id`, `nome`, `email`, `senha`, `datahoracadastro`, `ativo`, `datahoraultimoacesso`) VALUES
(7, NULL, 'teste@uneworld.com.br', '069ec8539349bef02dc1eee84a4f30fcee26213f', '2017-06-13 18:30:17', 'N', '2017-06-13 18:30:17'),
(8, NULL, 'teste@uneworld.com.br', '069ec8539349bef02dc1eee84a4f30fcee26213f', '2017-06-13 18:30:30', 'N', '2017-06-13 18:30:30'),
(9, NULL, 'teste@uneworld.com.br', '069ec8539349bef02dc1eee84a4f30fcee26213f', '2017-06-13 18:30:47', 'N', '2017-06-13 18:30:47'),
(10, NULL, 'teste@uneworld.com.br', '069ec8539349bef02dc1eee84a4f30fcee26213f', '2017-06-13 18:31:26', 'N', '2017-06-13 18:31:26'),
(11, NULL, 'teste@uneworld.com.br', '069ec8539349bef02dc1eee84a4f30fcee26213f', '2017-06-13 18:31:44', 'N', '2017-06-13 18:31:44'),
(12, NULL, 'teste@uneworld.com.br', '069ec8539349bef02dc1eee84a4f30fcee26213f', '2017-06-13 18:32:00', 'N', '2017-06-13 18:32:00'),
(13, NULL, 'teste@uneworld.com.br', '069ec8539349bef02dc1eee84a4f30fcee26213f', '2017-06-13 18:32:32', 'N', '2017-06-13 18:32:32'),
(14, NULL, 'teste@uneworld.com.br', '069ec8539349bef02dc1eee84a4f30fcee26213f', '2017-06-13 18:35:26', 'N', '2017-06-13 18:35:26'),
(15, NULL, 'teste@uneworld.com.br', '069ec8539349bef02dc1eee84a4f30fcee26213f', '2017-06-13 18:35:53', 'N', '2017-06-13 18:35:53'),
(16, NULL, 'teste@uneworld.com.br', '069ec8539349bef02dc1eee84a4f30fcee26213f', '2017-06-13 18:36:45', 'N', '2017-06-13 18:36:45');

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `nivel`
--

CREATE TABLE `nivel` (
  `codnivel` int(2) NOT NULL,
  `permissao` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `nivel`
--

INSERT INTO `nivel` (`codnivel`, `permissao`) VALUES
(1, 'Administrador'),
(2, 'User');

-- --------------------------------------------------------

--
-- Estrutura da tabela `permissoes`
--

CREATE TABLE `permissoes` (
  `id` int(11) NOT NULL,
  `visualiza` char(1) DEFAULT NULL,
  `edita` char(1) DEFAULT NULL,
  `remove` char(1) DEFAULT NULL,
  `adiciona` char(1) DEFAULT NULL,
  `login_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `senhas`
--

CREATE TABLE `senhas` (
  `id` int(11) NOT NULL,
  `login` varchar(50) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL,
  `datahoracadastro` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `senhas_setor`
--

CREATE TABLE `senhas_setor` (
  `id` int(11) NOT NULL,
  `setor_id` int(11) NOT NULL,
  `senhas_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `senhauser`
--

CREATE TABLE `senhauser` (
  `codsenha` int(2) NOT NULL,
  `user_id` int(2) DEFAULT NULL,
  `login` varchar(50) NOT NULL,
  `codacesso` int(2) DEFAULT NULL,
  `tipo` int(1) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `obs` varchar(100) DEFAULT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `vizualiza` int(1) DEFAULT NULL,
  `global` int(1) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `senhauser`
--

INSERT INTO `senhauser` (`codsenha`, `user_id`, `login`, `codacesso`, `tipo`, `pwd`, `obs`, `titulo`, `vizualiza`, `global`, `updated_at`, `created_at`) VALUES
(1, NULL, 'fabian@uneworld.com.br', 2, 1, 'D03mo9@15p', 'Senha única.', 'a', 1, 1, '2017-06-20 20:53:35', NULL),
(2, NULL, 'VENDAS07', 3, 2, 'RESERVAS07', '', '', 1, 0, '2017-06-21 19:59:39', NULL),
(3, NULL, 'VENDAS06', 3, 2, 'RESERVAS06', '', '', 1, 0, NULL, NULL),
(4, NULL, 'VUNEWORLD1', 4, 2, 'VUN16W07', '', '', 1, 0, NULL, NULL),
(5, NULL, 'NCENTENO1', 4, 2, 'd17m10a16', '', '', 1, 0, NULL, NULL),
(6, NULL, 'vendas07@uneworld.com.br', 8, 2, '170815', '', '', 1, 0, NULL, NULL),
(7, NULL, 'vendas07', 9, 2, '180915', '', '', 1, 0, NULL, NULL),
(15, NULL, 'operacional02uneworld', 11, 2, 'd24m06a15', '      ', '', 1, 0, NULL, NULL),
(16, NULL, 'FABIAN', 5, 1, 'un383', 'Empresa: UNEWORLD OPERADORA', '', 1, 0, NULL, NULL),
(17, NULL, 'vendas07', 5, 2, '140815', 'Empresa: UNEWORLD OPERADORA', '', 1, 0, NULL, NULL),
(18, NULL, 'vendas06', 5, 2, '140815', 'Empresa: UNEWORLD OPERADORA', '', 1, 0, NULL, NULL),
(19, NULL, 'LILIAN', 5, 1, 'un383', 'Empresa: UNEWORLD OPERADORA', '', 1, 0, NULL, NULL),
(20, NULL, 'SABRINA', 5, 1, 'un383', 'Empresa: UNEWORLD OPERADORA', '', 1, 0, NULL, NULL),
(21, NULL, 'vendas01', 5, 1, 'ger383', 'Empresa: UNEWORLD OPERADORA', '', 1, 0, NULL, NULL),
(22, NULL, 'cruzeiros01', 5, 2, '140815', 'Empresa: UNEWORLD VIAGENS E TURISMO LTDA', '', 1, 0, NULL, NULL),
(23, NULL, 'financeiro01', 5, 2, '140815', 'Empresa: UNEWORLD VIAGENS E TURISMO LTDA                   ', '', 1, 0, NULL, NULL),
(24, NULL, 'grupos01', 5, 2, '140815', 'Empresa: UNEWORLD OPERADORA', '', 1, 0, NULL, NULL),
(25, NULL, 'operacional04', 5, 2, '140815', 'Empresa: UNEWORLD OPERADORA', '', 1, 0, NULL, NULL),
(27, NULL, 'tarifarios', 5, 2, '140815', 'Empresa: UNEWORLD VIAGENS E TURISMO LTDA                       ', '', 1, 0, NULL, NULL),
(28, NULL, 'vendas08', 5, 2, '140815', 'Empresa: UNEWORLD VIAGENS E TURISMO LTDA', '', 1, 0, NULL, NULL),
(29, NULL, 'operacional02', 5, 2, '180815', 'Empresa: UNEWORLD VIAGENS E TURISMO LTDA', '', 1, 0, NULL, NULL),
(30, NULL, 'administrador', 6, 1, 'l015ZU$', '                                        ', '', 1, 0, NULL, NULL),
(31, NULL, 'fabian.saraiva', 6, 1, 'un383', '                                        ', '', 1, 0, NULL, NULL),
(32, NULL, 'lilians', 6, 1, 'liliansU8', '                                        ', '', 1, 0, NULL, NULL),
(33, NULL, 'sabrina.saraiva', 6, 1, 'un383', '                                        ', '', 1, 0, NULL, NULL),
(34, NULL, 'vendas07.uneworld', 6, 2, 'd02m05a17', '                                        ', '', 1, 0, NULL, NULL),
(35, NULL, 'grupos01', 6, 2, '190116', '                                        ', '', 1, 0, NULL, NULL),
(36, NULL, 'operacional04', 6, 2, '170815', '                                        ', '', 1, 0, NULL, NULL),
(37, NULL, 'vendas01', 6, 2, '170815', '                                        ', '', 1, 0, NULL, NULL),
(38, NULL, 'operacional02', 6, 2, '221015', '                                        ', '', 1, 0, NULL, NULL),
(39, NULL, 'vendas06', 6, 2, '110915', '                                        ', '', 1, 0, NULL, NULL),
(41, NULL, 'vendas08', 6, 2, '230915', '                                        ', '', 1, 0, NULL, NULL),
(42, NULL, 'tarifarios01', 6, 2, '170815', '                                        ', '', 1, 0, NULL, NULL),
(43, NULL, 'informatica@uneworld.com.br', 8, 1, 'l015ZU$', '                                        ', '', 1, 0, NULL, NULL),
(44, NULL, 'lilian@uneworld.com.br', 8, 1, 'un383', '                                        ', '', 1, 0, NULL, NULL),
(45, NULL, 'operacional04@uneworld.com.br', 8, 2, '170815', '                                        ', '', 1, 0, NULL, NULL),
(46, NULL, 'vendas01@uneworld.com.br', 8, 2, 'ger383', '                                        ', '', 1, 0, NULL, NULL),
(47, NULL, 'vendas06@uneworld.com.br', 8, 2, '170815', '                                        ', '', 1, 0, NULL, NULL),
(48, NULL, 'tarifarios@uneworld.com.br', 8, 2, '170815', '                                        ', '', 1, 0, NULL, NULL),
(50, NULL, 'grupos01@uneworld.com.br', 8, 2, '170815', '                                        ', '', 1, 0, NULL, NULL),
(51, NULL, 'vendas09@uneworld.com.br', 8, 2, '170815', '                                        ', '', 1, 0, NULL, NULL),
(52, NULL, 'operacional02@uneworld.com.br', 8, 2, '170815', '                                        ', '', 1, 0, NULL, NULL),
(53, NULL, 'fabian@uneworld.com.br', 8, 1, 'un383', '                                        ', '', 1, 0, NULL, NULL),
(54, NULL, 'sabrina@uneworld.com.br', 8, 1, 'un383', '                                        ', '', 1, 0, NULL, NULL),
(55, NULL, 'FSARAIVA', 4, 1, 'FSARAIVA701', '                                        ', '', 1, 0, NULL, NULL),
(56, NULL, 'VUNEWORLD3', 4, 2, 'VUN11W', '                                        ', '', 1, 0, NULL, NULL),
(57, NULL, 'VUNEWORLD', 4, 2, 'VUN12W', '                                        ', '', 1, 0, NULL, NULL),
(58, NULL, 'AUNEWORLD', 4, 1, 'jt112014', '                                        ', '', 1, 0, NULL, NULL),
(59, NULL, 'FSARAIVA', 4, 1, 'D31M03A2017', '                                        ', '', 1, 0, NULL, NULL),
(60, NULL, 'SSARAIVA', 4, 1, 'D20M07A2016', '                                        ', '', 1, 0, NULL, NULL),
(61, NULL, 'CUNEWORLD', 4, 2, 'd22m11a16', '                                        ', '', 1, 0, NULL, NULL),
(62, NULL, 'FSARAIVA', 4, 2, 'D31M03A2017', '                                        ', '', 1, 0, NULL, NULL),
(63, NULL, 'RPRATESDAC', 4, 2, 'RPR50T', '                                        ', '', 1, 0, NULL, NULL),
(64, NULL, '03307235028', 13, 1, 'd01m06a2019', 'Login de aprovador. \r\nAtualizado 01/06/2017', '', 1, 0, '2017-06-21 21:21:06', NULL),
(65, NULL, '02511075075', 13, 2, '09062017', 'Entrar uma vez na semana, caso contrario login sera bloqueado. 09/06/2017', '', 1, 0, NULL, NULL),
(66, NULL, '00492269084', 13, 2, '09052017', 'Entrar uma vez na semana, caso contrário login é bloqueado.', '', 1, 0, NULL, NULL),
(67, NULL, 'uneworld', 9, 1, 'l015ZU$', '                                        ', '', 1, 0, NULL, NULL),
(68, NULL, 'financeiro01', 9, 1, '241115', '                                        ', '', 1, 0, NULL, NULL),
(69, NULL, 'operacional04', 9, 2, '271115', '                                        ', '', 1, 0, NULL, NULL),
(70, NULL, 'vendas08', 9, 2, '301115', '                                        ', '', 1, 0, NULL, NULL),
(73, NULL, 'vendas06', 9, 2, '97078427', '                                        ', '', 1, 0, NULL, NULL),
(74, NULL, 'informatica@uneworld.com.br', 14, 1, '2305', '                                        ', '', 1, 0, NULL, NULL),
(76, NULL, 'operacional04', 14, 2, '220915', '                                        ', '', 1, 0, NULL, NULL),
(77, NULL, 'sabrina@uneworld.com.br', 7, 1, 'Uneworld15', '                                        ', '', 1, 0, NULL, NULL),
(78, NULL, 'informatica@uneworld.com.br', 7, 1, 'Primavera2015', '                                        ', '', 1, 0, NULL, NULL),
(79, NULL, 'vendas07@uneworld.com.br', 7, 2, 'D20M07@16', '                                        ', '', 1, 0, NULL, NULL),
(80, NULL, 'cruzeiros01@uneworld.com.br', 7, 2, 'Une2015', '                                        ', '', 1, 0, NULL, NULL),
(81, NULL, 'cruzeiros01@uneworld.com.br', 7, 2, 'Une2015', '                                        ', '', 1, 0, NULL, NULL),
(82, NULL, 'grupos01@uneworld.com.br', 7, 2, 'Une2015', '                                        ', '', 1, 0, NULL, NULL),
(83, NULL, 'operacional04@uneworld.com.br', 7, 2, 'Une2015', '                                        ', '', 1, 0, NULL, NULL),
(84, NULL, 'operacional07@uneworld.com.br', 7, 2, 'Une2015', '                                        ', '', 1, 0, NULL, NULL),
(85, NULL, 'operacional05@uneworld.com.br', 7, 2, '150116', '                                        ', '', 1, 0, NULL, NULL),
(86, NULL, 'vendas06@uneworld.com.br', 7, 2, 'Uneworld15', '                                        ', '', 1, 0, NULL, NULL),
(87, NULL, 'vendas08@uneworld.com.br', 7, 2, 'Une2015', '                                        ', '', 1, 0, NULL, NULL),
(88, NULL, 'vendas09@uneworld.com.br', 7, 2, 'Une2015', '                                        ', '', 1, 0, NULL, NULL),
(89, NULL, 'vendas01@uneworld.com.br', 7, 2, 'Une2015', '                                        ', '', 1, 0, NULL, NULL),
(91, NULL, 'paulaune', 15, 1, '211081', 'Login Master                                        ', '', 1, 0, NULL, NULL),
(94, NULL, 'cr02', 15, 2, '310815', '                                        ', '', 1, 0, NULL, NULL),
(95, NULL, 'fabian@uneworld.com.br', 16, 1, '17042017', '                                        ', '', 1, 1, NULL, NULL),
(98, NULL, 'financeiro04@uneworld.com.br', 16, 2, '31082015', '                                        ', '', 1, 0, NULL, NULL),
(99, NULL, 'vendas01@uneworld.com.br', 16, 2, '31082015', '                                        ', '', 1, 0, NULL, NULL),
(100, NULL, 'sabrina@uneworld.com.br', 16, 2, '31082015', '                                        ', '', 1, 0, NULL, NULL),
(101, NULL, 'cruzeiros02', 17, 2, '310815', '                                        ', '', 1, 0, NULL, NULL),
(102, NULL, 'cruzeiros01une', 72, 2, 'd03m04a17', '                                        ', '', 1, 0, NULL, NULL),
(103, NULL, '12407321', 17, 1, 'turismo01', '                                        ', '', 1, 0, NULL, NULL),
(104, NULL, 'VENDAS08', 3, 2, 'RESERVAS08', '                                        ', '', 1, 0, NULL, NULL),
(105, NULL, 'OPERACIONAL04', 3, 2, 'RESERVAS04', '                                        ', '', 1, 0, NULL, NULL),
(106, NULL, 'OPERACIONAL05', 3, 2, 'RESERVAS05', '                                        ', '', 1, 0, NULL, NULL),
(107, NULL, 'GRUPOS01', 3, 2, 'RESERVAS01', '                                        ', '', 1, 0, NULL, NULL),
(108, NULL, 'VENDAS01', 3, 2, 'trJwXTBc', '                                        ', '', 1, 0, NULL, NULL),
(109, NULL, 'SARAIVA01', 3, 2, 'RESERVAS', '                                        ', '', 1, 0, NULL, NULL),
(110, NULL, 'SARAIVA02', 3, 2, 'RESERVAS', '                                        ', '', 1, 0, NULL, NULL),
(111, NULL, 'lilian@uneworld.com.br', 18, 1, '240816', 'Caso senha for bloqueada ligar para  08005913008                        ', '', 1, 0, NULL, NULL),
(112, NULL, 'admin', 19, 1, '2865030', 'Agencia: 2865, Oficina: 030                   ', '', 1, 0, NULL, NULL),
(113, NULL, 'AUT10000516910', 20, 1, 'UNE10309', '                                        ', 'Única para todos', 1, 1, NULL, NULL),
(114, NULL, '5207', 21, 1, 'uneworld', 'Unica senha para todos.                                        ', '', 1, 1, NULL, NULL),
(115, NULL, 'UNS-BR-000', 22, 1, 'ORP-091610', '                                        ', '', 1, 1, NULL, NULL),
(116, NULL, 'lilian@uneworld.com.br', 23, 1, '9950', '                                        ', '', 1, 1, NULL, NULL),
(117, NULL, 'UNEWORLD', 24, 1, '159@travel!', '                                        ', '', 1, 0, NULL, NULL),
(118, NULL, 'une', 12, 1, '3228', '                                        ', '', 1, 1, NULL, NULL),
(119, NULL, 'uneworld', 25, 1, '159753', 'Tipo: Agency                             ', '', 1, 0, NULL, NULL),
(120, NULL, 'une10', 26, 1, 'lrt10', '                                        ', '', 1, 1, NULL, NULL),
(123, NULL, 'uneworld', 31, 1, 'd29m06a2016', '                                        ', '', 1, 0, NULL, NULL),
(124, NULL, 'uneworld', 32, 1, 'suporte2010', '                                        ', '', 1, 0, NULL, NULL),
(125, NULL, 'desenvune', 33, 1, 'une2010', '                                        ', '', 1, 0, NULL, NULL),
(126, NULL, 'informaticaune383', 33, 1, 'une*38315', '                                        ', '', 1, 0, NULL, NULL),
(127, NULL, 'desenvolvimento@uneworld.com.br', 34, 1, 'une2010', '                                        ', '', 1, 0, NULL, NULL),
(128, NULL, 'desenv', 35, 1, 'une2010', '                                        ', 'Login Computador Windows', 1, 0, NULL, NULL),
(129, NULL, 'uneworldvtadministrador', 10, 1, 'll017UN!', '192.168.0.241 - Servidor AD.', '192.168.0.241', 1, 0, NULL, NULL),
(130, NULL, 'Binasaraiva', 36, 1, 'bina40', '                                        ', '', 1, 0, NULL, NULL),
(131, NULL, 'sabrinamorandi@ig.com.br', 37, 1, 'Bina402014', '                                        ', '', 1, 0, NULL, NULL),
(132, NULL, 'desenvolvimento@uneworld.com.br', 38, 1, 'Une!2014*', '                                        ', 'Banco de Dados', 1, 0, NULL, NULL),
(133, NULL, '15897', 27, 2, 'jaquelineeur', '', '', 1, 0, NULL, NULL),
(134, NULL, '15898', 28, 2, 'jaquelineusd', '', '', 1, 0, NULL, NULL),
(135, NULL, '073047-2', 39, 2, '1105JAQUE', 'Client ID: G1265477\r\n25/04/2017', '', 1, 0, NULL, NULL),
(136, NULL, 'jaqueline', 24, 2, 'une22', '', '', 1, 0, NULL, NULL),
(137, NULL, 'une30', 26, 2, 'jaqune', '', '', 1, 0, NULL, NULL),
(138, NULL, '01942762011', 40, 2, '92471429', '25/04/2017\r\n', '', 1, 0, NULL, NULL),
(139, NULL, 'admin', 1, 1, 'l015ZU$', 'ID: 37287\r\nEntrar com navegador IE', '', 1, 0, NULL, NULL),
(140, NULL, 'Pati2015', 15, 2, '1234', '', '', 1, 0, NULL, NULL),
(141, NULL, '1454384', 28, 2, 'rhuffusd', '', '', 1, 0, NULL, NULL),
(142, NULL, '1454383', 27, 2, 'rhuffeur', '', '', 1, 0, NULL, NULL),
(143, NULL, '074505-4', 39, 2, 'MATHEUS23', '', '', 1, 0, NULL, NULL),
(145, NULL, '1rickrick', 41, 2, '1clippertravel', 'Senha unica.', '', 1, 0, NULL, NULL),
(146, NULL, '2500380', 42, 1, 'veo824', 'AGENT ACCOUNT: 250380', '', 1, 0, NULL, NULL),
(147, NULL, '0597892', 39, 2, 'PARIS2017', 'Client ID: G1265472, PCC 5L4U', '', 1, 0, NULL, NULL),
(148, NULL, 'rprates', 15, 2, '051016', '', '', 1, 0, NULL, NULL),
(149, NULL, '133310', 27, 2, 'camilaeur', '', '', 1, 0, NULL, NULL),
(150, NULL, '133311', 28, 2, 'camilausd', '', '', 1, 0, NULL, NULL),
(151, NULL, 'lisi.une', 15, 2, 'uw20i5', '', '', 1, 0, NULL, NULL),
(152, NULL, 'circuitos', 19, 2, '7012015', 'Ag: 2865, Oficina: 030', '', 1, 0, NULL, NULL),
(153, NULL, 'operacional07', 3, 2, 'reservas07', '', '', 1, 0, NULL, NULL),
(154, NULL, '01801254001', 40, 2, '15032016', '', '', 1, 0, NULL, NULL),
(156, NULL, '01101624043', 40, 2, '11032016', '', '', 1, 0, NULL, NULL),
(157, NULL, '18072852000', 40, 1, '562F493p', '', '', 1, 0, NULL, NULL),
(158, NULL, '28607813072', 40, 2, '120617', '', '', 1, 0, NULL, NULL),
(159, NULL, '66696283072', 40, 1, '20151112', 'TOKEN: vsmt65777647\r\nCetificado: gol@2015', '', 1, 0, NULL, NULL),
(160, NULL, '00492269084', 40, 2, '25112016', '', '', 1, 0, NULL, NULL),
(161, NULL, '03307235029', 40, 1, '24112016', 'Aprovador celular pessoal', '', 1, 0, '2017-06-21 20:45:09', NULL),
(162, NULL, '02511075075', 40, 2, '27101991', '', '', 1, 0, NULL, NULL),
(163, NULL, '00286878097', 40, 2, '24042017', '', '', 1, 0, NULL, NULL),
(165, NULL, '80601693000', 40, 2, '08032016', '', '', 1, 0, NULL, NULL),
(167, NULL, '92720706000', 40, 1, '24042017', 'Aprovador pelo celular Moto E Uneworld', '', 1, 0, NULL, NULL),
(168, NULL, '01630331023', 40, 2, '17062016', '', '', 1, 0, NULL, NULL),
(169, NULL, '052767-1', 39, 2, 'GDD1108', 'PCC: 5L4U', '', 1, 0, NULL, NULL),
(170, NULL, '0551364', 39, 2, 'hoje1020', '', '', 1, 0, NULL, NULL),
(171, NULL, 'financeiro02', 35, 2, 'une2154', 'Login de rede 242\r\n', 'Login de rede', 1, 0, NULL, NULL),
(172, NULL, 'financeiro04', 35, 2, 'finan*2015', '', 'Login de rede', 1, 0, NULL, NULL),
(173, NULL, 'financeiro01', 35, 2, 'henriearthur', '', '', 1, 0, NULL, NULL),
(174, NULL, 'fabian.saraiva', 35, 1, 'fune2015', '', 'Login de rede', 1, 0, NULL, NULL),
(175, NULL, 'vendas06', 35, 2, 'jaja11s5', '', 'Login de rede', 1, 0, NULL, NULL),
(176, NULL, 'operacional05', 35, 2, 'une*1020', '', 'Login de rede', 1, 0, NULL, NULL),
(177, NULL, 'operacional04', 35, 2, 'Leo1811', '', 'Login de rede', 1, 0, NULL, NULL),
(178, NULL, 'grupos01', 35, 2, 'une*1020', '', 'Login de rede', 1, 0, NULL, NULL),
(179, NULL, 'recepcao01', 35, 2, 'lu1947', '', 'Login de rede', 1, 0, NULL, NULL),
(181, NULL, 'vendas06@uneworld.com.br', 18, 2, 'KZDPVOYS', 'Caso senha for bloqueada ligar para 08005913008', '', 1, 0, NULL, NULL),
(182, NULL, 'grupos01@uneworld.com.br', 18, 2, 'JVLWCNBO', '874852XQN\r\nUNEWORLD VIAGENS E TURISMO LTDA.', '', 1, 0, NULL, NULL),
(183, NULL, 'operacional04@uneworld.com.br', 18, 2, 'RMGTSEES', '', '', 1, 0, NULL, NULL),
(185, NULL, 'vendas09@uneworld.com.br', 18, 2, 'RXOTZFDL', '', '', 1, 0, NULL, NULL),
(186, NULL, 'vendas08@uneworld.com.br', 18, 2, 'AHCVNVJS', '', '', 1, 0, NULL, NULL),
(187, NULL, 'operacional07@uneworld.com.br', 18, 2, 'LDSGBQXW', '', '', 1, 0, NULL, NULL),
(188, NULL, 'fabian@uneworld.com.br', 43, 1, 'FMS@1899', '', '', 1, 0, NULL, NULL),
(189, NULL, 'saraivalilian15@gmail.com', 29, 1, '20141n3@', 'E-mail para play store', '', 0, 0, NULL, NULL),
(190, NULL, 'vendas07@uneworld.com.br', 29, 2, 'd08m06a15', '', '', 0, 0, NULL, NULL),
(191, NULL, 'lilian@uneworld.com.br', 29, 2, '0QQTNd7n', '', '', 1, 0, NULL, NULL),
(192, NULL, 'fabian@uneworld.com.br', 29, 2, '7EwmAMdr', '', '', 0, 0, NULL, NULL),
(193, NULL, 'aereo01@uneworld.com.br', 29, 2, '6E11T1P0', '', '', 0, 0, NULL, NULL),
(194, NULL, 'atendimento01@uneworld.com.br', 29, 2, 'd25m11a15', '', '', 0, 0, NULL, NULL),
(195, NULL, 'cruzeiros01@uneworld.com.br', 29, 2, 'Uned.01M.07@.16', '', '', 0, 0, NULL, NULL),
(196, NULL, 'cruzeiros02@uneworld.com.br', 29, 2, 'd10m11@16', '', '', 0, 0, NULL, NULL),
(197, NULL, 'csaraiva@uneworld.com.br', 29, 2, 'unew1020', '', '', 0, 0, NULL, NULL),
(198, NULL, 'desenvolvimento@uneworld.com.br', 29, 1, '6ggwbsLV', '', '', 0, 0, NULL, NULL),
(199, NULL, 'grupos01@uneworld.com.br', 29, 2, '4iz9!v3m', '', '', 0, 0, NULL, NULL),
(200, NULL, 'financeiro@uneworld.com.br', 29, 1, 'd30m11a2016', '', '', 0, 0, NULL, NULL),
(201, NULL, 'financeiro02@uneworld.com.br', 29, 2, '2n7ZRwjn', '', '', 0, 0, NULL, NULL),
(203, NULL, 'financeiro03@uneworld.com.br', 29, 1, '8C7qiu8c', '', '', 0, 0, NULL, NULL),
(204, NULL, 'financeiro04@uneworld.com.br', 29, 2, '5GR5VchM', '', '', 0, 0, NULL, NULL),
(205, NULL, 'grupos02@uneworld.com.br', 29, 2, 'vz3s2x!@', '', '', 0, 0, NULL, NULL),
(206, NULL, 'grupos03@uneworld.com.br', 29, 2, '8xn3!z@4', '', '', 0, 0, NULL, NULL),
(207, NULL, 'informatica@uneworld.com.br', 29, 2, 'd29m06a15', '', '', 0, 0, NULL, NULL),
(208, NULL, 'marketing@uneworld.com.br', 29, 1, 'd27m06a2016', '', '', 0, 0, NULL, NULL),
(210, NULL, 'operacional02@uneworld.com.br', 29, 2, 'd24m06a15', 'Livre', '', 0, 0, NULL, NULL),
(211, NULL, 'operacional03@uneworld.com.br', 29, 2, 'd05m12a2016', 'Livre', '', 0, 0, NULL, NULL),
(212, NULL, 'operacional04@uneworld.com.br', 29, 2, 'u4ls4Y3x', '', '', 0, 0, NULL, NULL),
(213, NULL, 'operacional05@uneworld.com.br', 29, 2, 'd24m08a16', '', '', 0, 0, NULL, NULL),
(214, NULL, 'operacional06@uneworld.com.br', 29, 2, '03VOpbiR', 'Livre', '', 0, 0, NULL, NULL),
(215, NULL, 'operacional07@uneworld.com.br', 29, 2, 'd27m10a15', '', '', 0, 0, NULL, NULL),
(216, NULL, 'promocao01@uneworld.com.br', 29, 2, 'd16m01a17', 'Luciano Pava', '', 0, 0, NULL, NULL),
(217, NULL, 'promocao03@uneworld.com.br', 29, 2, 'Herb281010', '', '', 0, 0, NULL, NULL),
(218, NULL, 'promoserra@uneworld.com.br', 29, 2, '8leoqdszz', '', '', 0, 0, NULL, NULL),
(219, NULL, 'rh01@uneworld.com.br', 29, 2, 'rh132015', '', '', 0, 0, NULL, NULL),
(220, NULL, 'sabrina@uneworld.com.br', 29, 2, 'd16m08a16', '', '', 0, 0, NULL, NULL),
(221, NULL, 'tarifarios@uneworld.com.br', 29, 2, 'd24m06a15', '', '', 0, 0, NULL, NULL),
(222, NULL, 'vendas01@uneworld.com.br', 29, 2, 'd18m12a15', '', '', 0, 0, NULL, NULL),
(223, NULL, 'vendas03@uneworld.com.br', 29, 2, 'd02m10a15', '', '', 0, 0, NULL, NULL),
(224, NULL, 'vendas06@uneworld.com.br', 29, 2, 'd29m06a2016', '', '', 0, 0, NULL, NULL),
(225, NULL, 'vendas04@uneworld.com.br', 29, 2, '95wMn1aR', '', '', 0, 0, NULL, NULL),
(226, NULL, 'vendas05@uneworld.com.br', 29, 2, 'Un3w0rld!', 'Livre', '', 0, 0, NULL, NULL),
(227, NULL, 'vendas08@uneworld.com.br', 29, 2, '4VeM2ea9', '', '', 0, 0, NULL, NULL),
(228, NULL, 'vendas09@uneworld.com.br', 29, 2, '2jAbcVsC', '', '', 0, 0, NULL, NULL),
(229, NULL, 'webmaster@uneworld.com.br', 29, 2, '8Vuk5TlH', '', '', 0, 0, NULL, NULL),
(230, NULL, 'sabrinamorandi@ig.com.br', 29, 2, 'bina30', '', '', 0, 0, NULL, NULL),
(231, NULL, 'rhrecrutamento@gmail.com', 29, 2, 'unew1020', '', '', 0, 0, NULL, NULL),
(232, NULL, 'promocaounesc@gmail.com', 29, 2, 'unew1020', '', '', 0, 0, NULL, NULL),
(233, NULL, 'uneworldturismo@gmail.com', 29, 2, 'world2010une', '', '', 0, 0, NULL, NULL),
(234, NULL, 'postmaster@uneworldoperadora.com.br', 29, 2, 'world7868une', '', '', 0, 0, NULL, NULL),
(236, NULL, 'coris@gmail.com', 29, 2, '0KtLWPFT', '', '', 0, 0, NULL, NULL),
(237, NULL, 'uneworldvt@gmail.com', 29, 2, 'une*2015', '', '', 0, 0, NULL, NULL),
(240, NULL, 'plantaouneworld@gmail.com', 29, 2, 'une20102010', '', '', 0, 0, NULL, NULL),
(241, NULL, 'lilian@uneworld.com.br', 44, 2, 'lilian', '', '', 1, 0, NULL, NULL),
(242, NULL, 'vendas01@uneworld.com.br', 44, 2, 'vendas01', '', '', 1, 0, NULL, NULL),
(243, NULL, 'operacional05@uneworld.com.br', 44, 2, 'operacional05', '', '', 1, 0, NULL, NULL),
(244, NULL, 'operacional04@uneworld.com.br', 44, 2, 'operacional04', '', '', 1, 0, NULL, NULL),
(245, NULL, 'operacional07@uneworld.com.br', 44, 2, 'operacional07', '', '', 1, 0, NULL, NULL),
(246, NULL, 'grupos01@uneworld.com.br', 44, 2, 'grupos01', '', '', 1, 0, NULL, NULL),
(247, NULL, 'operacional02@uneworld.com.br', 44, 2, 'operacional02', '', '', 1, 0, NULL, NULL),
(248, NULL, 'tarifarios@uneworld.com.br', 44, 2, 'tarifarios', '', '', 1, 0, NULL, NULL),
(249, NULL, 'vendas06@uneworld.com.br', 44, 2, 'vendas06', '', '', 1, 0, NULL, NULL),
(250, NULL, 'vendas08@uneworld.com.br', 44, 2, 'vendas08', '', '', 1, 0, NULL, NULL),
(251, NULL, 'vendas07@uneworld.com.br', 44, 2, 'vendas07', '', '', 1, 0, NULL, NULL),
(252, NULL, 'administrador', 45, 1, 'UNEWa11000', 'Clave: 2041080', '', 1, 0, NULL, NULL),
(253, NULL, 'vendas07', 45, 2, 'd02m10a15', 'Clave: 2041080', '', 1, 0, NULL, NULL),
(254, NULL, 'vendas01', 45, 2, 'D3555110', 'Clave: 2041080', '', 1, 0, NULL, NULL),
(255, NULL, 'operacional04', 45, 2, 'N1728841', 'Clave: 2041080', '', 1, 0, NULL, NULL),
(257, NULL, 'vendas06', 45, 2, 'O7118185', 'Clave: 2041080\r\n', '', 1, 0, NULL, NULL),
(258, NULL, 'JSCHRAMMEL', 4, 2, 'JAJA11s5', '', '', 1, 0, NULL, NULL),
(259, NULL, 'uneworld_v1', 47, 2, 'daniela2015', '', '', 1, 0, NULL, NULL),
(260, NULL, 'uneworld_o5', 47, 2, 'giovana2015', '', '', 1, 0, NULL, NULL),
(261, NULL, 'uneworld_o4', 47, 2, 'camila2015', '', '', 1, 0, NULL, NULL),
(262, NULL, 'uneworld_o7', 47, 2, 'patricia2015', '', '', 1, 0, NULL, NULL),
(263, NULL, 'uneworld_g1', 47, 2, 'anacarla2015', '', '', 1, 0, NULL, NULL),
(264, NULL, 'uneworld_o2', 47, 2, 'bloqueios2015', '', '', 1, 0, NULL, NULL),
(265, NULL, 'uneworld_t', 47, 2, 'viviane2015', '', '', 1, 0, NULL, NULL),
(266, NULL, 'uneworld_v6', 47, 2, 'jaqueline2015', '', '', 1, 0, NULL, NULL),
(267, NULL, 'uneworld_v8', 47, 2, 'rubens2015', '', '', 1, 0, NULL, NULL),
(268, NULL, 'uneworld_v7', 47, 2, 'flavia2015', '', '', 1, 0, NULL, NULL),
(269, NULL, 'uneworld', 47, 2, 'lilian2015', '', '', 1, 0, NULL, NULL),
(270, NULL, '81100', 48, 1, '225trefg', 'Login para circuitos e hoteis.', '', 1, 1, NULL, NULL),
(271, NULL, 'resto07', 48, 1, 'res123to', 'Login para Tarifas Fit.', '', 1, 1, NULL, NULL),
(272, NULL, 'vendas06', 14, 1, 'd21m10a15', '', '', 1, 0, NULL, NULL),
(273, NULL, 'vendas06', 1, 2, '221015', 'ID: 37287', '', 1, 0, NULL, NULL),
(274, NULL, 'vendas07', 1, 2, '221015', 'ID: 37287, Abrir com Internet Explorer', '', 1, 0, NULL, NULL),
(275, NULL, 'operacional02', 46, 2, 'oper02', '', '', 1, 0, NULL, NULL),
(276, NULL, 'operacional04', 46, 2, 'oper04', '', '', 1, 0, NULL, NULL),
(277, NULL, 'operacional05', 46, 2, 'oper05', '', '', 1, 0, NULL, NULL),
(278, NULL, 'operacional07', 46, 2, 'oper07', '', '', 1, 0, NULL, NULL),
(279, NULL, 'grupos01', 46, 2, 'gru01', '', '', 1, 0, NULL, NULL),
(280, NULL, 'cruzeiros02', 46, 2, 'cru02', '', '', 1, 0, NULL, NULL),
(281, NULL, 'cruzeiros01', 46, 2, 'cru01', '', '', 1, 0, NULL, NULL),
(282, NULL, 'vendas01', 46, 2, 'ven01', '', '', 1, 0, NULL, NULL),
(283, NULL, 'vendas06', 46, 2, 'ven06', '', '', 1, 0, NULL, NULL),
(284, NULL, 'vendas07', 46, 2, 'ven07', '', '', 1, 0, NULL, NULL),
(285, NULL, 'vendas08', 46, 2, 'ven08', '', '', 1, 0, NULL, NULL),
(286, NULL, 'tarifarios', 46, 2, 'tari', '', '', 1, 0, NULL, NULL),
(287, NULL, 'lilian01', 46, 2, 'lilisara', '', '', 1, 0, NULL, NULL),
(288, NULL, 'fabian01', 46, 2, 'fabisara', '', '', 1, 0, NULL, NULL),
(289, NULL, 'sabrina', 46, 2, 'sabsa', '', '', 1, 0, NULL, NULL),
(290, NULL, 'UNEWORLD_PRINCIPAL', 30, 1, 'une241116', '', '', 1, 0, NULL, NULL),
(291, NULL, '15897', 27, 2, 'jaquelineeur', '', 'EUR', 1, 0, NULL, NULL),
(292, NULL, '15898', 28, 2, 'jaquelineusd', 'USD', 'USD', 1, 0, NULL, NULL),
(293, NULL, '138780', 49, 2, 'brl138780', '', '', 1, 0, NULL, NULL),
(294, NULL, '15905', 27, 2, 'lisaraivaeur', '', '', 1, 0, NULL, NULL),
(295, NULL, '15906', 28, 2, 'lisaraivausd', '', '', 1, 0, NULL, NULL),
(296, NULL, '138784', 49, 2, 'brl138784', '', '', 1, 0, NULL, NULL),
(297, NULL, '133320', 27, 2, 'mgracaeur', '', '', 1, 0, NULL, NULL),
(298, NULL, '133321', 28, 2, 'mgracausd', '', '', 1, 0, NULL, NULL),
(299, NULL, '138791', 49, 2, 'brl138791', '', '', 1, 0, NULL, NULL),
(300, NULL, '133326', 27, 2, 'ssaraivaeur', '', '', 1, 0, NULL, NULL),
(301, NULL, '133327', 28, 2, 'ssaraivausd', '', '', 1, 0, NULL, NULL),
(302, NULL, '138793', 49, 2, 'brl138793', '', '', 1, 0, NULL, NULL),
(303, NULL, '133328', 27, 2, 'fsaraivaeur', '', '', 1, 0, NULL, NULL),
(304, NULL, '133329', 28, 2, 'fsaraivausd', '', '', 1, 0, NULL, NULL),
(305, NULL, '138794', 49, 2, 'brl138794', '', '', 1, 0, NULL, NULL),
(306, NULL, '1448411', 27, 2, 'natheur', '', '', 1, 0, NULL, NULL),
(307, NULL, '1448412', 28, 2, 'nathusd', '', '', 1, 0, NULL, NULL),
(308, NULL, '1448413', 49, 2, 'nathbrl', '', '', 1, 0, NULL, NULL),
(309, NULL, '1454385', 49, 2, 'rcunhabrl', '', '', 1, 0, NULL, NULL),
(310, NULL, '1454386', 27, 2, 'rcunhaeur', '', '', 1, 0, NULL, NULL),
(311, NULL, '1454387', 28, 2, 'rcunhausd', '', '', 1, 0, NULL, NULL),
(315, NULL, '1457318', 49, 2, 'tsalamonebrl', '', '', 1, 0, NULL, NULL),
(316, NULL, '14633213', 49, 2, 'fcarvalhobrl', '', '', 1, 0, NULL, NULL),
(317, NULL, '14633214', 27, 2, 'fcarvalhoeur', '', '', 1, 0, NULL, NULL),
(318, NULL, '14633215', 28, 2, 'fcarvalhousd', '', '', 1, 0, NULL, NULL),
(319, NULL, '14633216', 49, 2, 'dulhoabrl', '', '', 1, 0, NULL, NULL),
(320, NULL, '14633217', 27, 2, 'dulhoaeur', '', '', 1, 0, NULL, NULL),
(321, NULL, '14633218', 28, 2, 'dulhoausd', '', '', 1, 0, NULL, NULL),
(322, NULL, '14633219', 49, 2, 'flagobrl', '27/12/2016', '', 1, 0, NULL, NULL),
(323, NULL, '14633220', 27, 2, 'flagoeur', '27/12/2016', '', 1, 0, NULL, NULL),
(324, NULL, '14633221', 28, 2, 'flagousd', '27/12/2016', '', 1, 0, NULL, NULL),
(325, NULL, '14633222', 49, 2, 'psilveirabrl', '', '', 1, 0, NULL, NULL),
(326, NULL, '14633223', 27, 2, 'psilveiraeur', '', '', 1, 0, NULL, NULL),
(327, NULL, '14633224', 28, 2, 'psilveirausd', '', '', 1, 0, NULL, NULL),
(328, NULL, '1454652', 49, 2, 'dtrindadebrl', '', '', 1, 0, NULL, NULL),
(329, NULL, '1454653', 27, 2, 'dtrindadeeur', '', '', 1, 0, NULL, NULL),
(330, NULL, '1454654', 28, 2, 'dtrindadeusd', '', '', 1, 0, NULL, NULL),
(331, NULL, '133316', 27, 2, 'goehreur', '', '', 1, 0, NULL, NULL),
(332, NULL, '133317', 27, 2, 'goehrusd', '', '', 1, 0, NULL, NULL),
(333, NULL, '138789', 49, 2, 'brl138789', '', '', 1, 0, NULL, NULL),
(334, NULL, '1454382', 49, 2, 'rhuffbrl', '', '', 1, 0, NULL, NULL),
(335, NULL, '1454383', 27, 2, 'rhuffeur', '', '', 1, 0, NULL, NULL),
(336, NULL, '1454384', 28, 2, 'rhuffusd', '', '', 1, 0, NULL, NULL),
(337, NULL, '133317', 28, 2, 'goehrusd', '', '', 1, 0, NULL, NULL),
(338, NULL, '138786', 49, 2, 'camilabrl', '', '', 1, 0, NULL, NULL),
(339, NULL, 'UNEWORLD_REUNIAO_INT', 30, 1, 'un3@383#', '192.168.0.2, login: admin, senha: l015ZU$', '', 1, 0, NULL, NULL),
(340, NULL, 'spallatur', 31, 1, 's842@Tur', '', '', 1, 0, NULL, NULL),
(341, NULL, 'informatica.uneworld', 11, 1, 'd18m01a16', '', '', 1, 0, NULL, NULL),
(342, NULL, 'operacional01', 11, 2, 'd29a2015', '', '', 1, 0, NULL, NULL),
(343, NULL, 'operacional01', 5, 2, '6QHOD3HT', 'Empresa: UNEWORLD VIAGENS E TURISMO LTDA', '', 1, 0, NULL, NULL),
(344, NULL, 'admin', 5, 1, 'l015ZU$', 'Empresa: UNEWORLD VIAGENS E TURISMO LTDA', '', 1, 0, NULL, NULL),
(345, NULL, 'operacional01', 6, 2, 'd02m05a17', '', '', 1, 0, NULL, NULL),
(346, NULL, 'operacional01', 14, 2, '6QHOD3HT', '', '', 1, 0, NULL, NULL),
(347, NULL, 'operacional01', 45, 2, '6QHOD3HT', '', '', 1, 0, NULL, NULL),
(348, NULL, 'grupos01', 5, 2, '140815', 'Empresa: UNEWORLD VIAGENS E TURISMO LTDA', '', 1, 0, NULL, NULL),
(350, NULL, 'UNEWORLD_SARAIVA', 30, 1, 'une@383#', '192.168.24.1\r\nLogin: admin\r\nSenha: admin', '', 1, 0, NULL, NULL),
(351, NULL, '080871-0', 39, 1, 'd19m08a15', 'PCC: 5L4U', '', 1, 0, NULL, NULL),
(352, NULL, 'operacional01@uneworld.com.br', 29, 2, 'd07m12a15', '', '', 0, 0, NULL, NULL),
(354, NULL, '77173', 51, 1, 'UNE0611fin', '', '', 1, 0, NULL, NULL),
(356, NULL, 'root', 10, 1, 'll017UN!', '192.168.0.245 - Servidor Sigu ', '', 1, 0, NULL, NULL),
(357, NULL, 'UNEWORLD', 52, 1, '18367', '', 'Única para todos', 1, 1, NULL, NULL),
(358, NULL, '9002292', 53, 1, 'une1020', 'Única para todos', 'Única para todos', 1, 1, NULL, NULL),
(359, NULL, 'une2015', 54, 1, 'une2015', 'Não é mais utilizado.', '', 0, 0, NULL, NULL),
(360, NULL, 'operacional01', 38, 2, 'une1020', '', '', 1, 0, NULL, NULL),
(361, NULL, 'operacional01@uneworld.com.br', 55, 1, 'une*1020', '', '', 1, 1, NULL, NULL),
(362, NULL, 'uneworld3', 56, 1, 'bd4t3st20i4', 'Host: mysql01.uneworld.com.br\r\nDatabase: uneworld3', '', 1, 0, NULL, NULL),
(363, NULL, 'admin', 57, 1, '102030', 'Responsáveis: Kiweb', '', 1, 0, NULL, NULL),
(364, NULL, 'Célio Saraiva', 58, 1, 'celio2713', 'Modelo: CCE WIN D23L\r\nMemória: 3 GB\r\nProcessador: I3 2.27 GHz\r\nHD: 300 GB\r\nWindows 7 Ultimate, 32 Bi', '', 1, 0, NULL, NULL),
(365, NULL, 'OUNEWORLD1', 4, 2, 'OUN07W', '', '', 1, 0, NULL, NULL),
(366, NULL, 'OPER01', 1, 1, 'h1610518', '', '', 1, 0, NULL, NULL),
(367, NULL, 'operacional02', 35, 2, '010204', 'Login de rede AD', '', 1, 0, NULL, NULL),
(368, NULL, '192.168.0.239', 59, 1, 'pbxk1064', '', '', 1, 0, NULL, NULL),
(372, NULL, 'lilian', 35, 1, '20141n3@', 'Login computador', '', 1, 0, NULL, NULL),
(373, NULL, 'fabian.saraiva', 60, 1, 'uneworld2014', '', 'Cangooroo', 1, 0, NULL, NULL),
(374, NULL, 'desenv', 35, 1, 'une2010', '', 'Computador Desenv', 1, 0, NULL, NULL),
(375, NULL, 'roberta.prates', 60, 2, 'une1020', '', 'Cangooroo', 1, 0, NULL, NULL),
(376, NULL, 'uneworld', 61, 1, 'une383!', '186.202.150.235', '', 1, 0, NULL, NULL),
(377, NULL, 'UNEWO000', 62, 1, 'UNEWO000', 'Senha única para todos', '', 1, 1, NULL, NULL),
(378, NULL, 'vendas08', 45, 2, 'd09m12a15', 'Key: 2041080', '', 1, 0, NULL, NULL),
(379, NULL, 'root', 61, 1, 'l014ZU@', '192.168.0.245 - FTP SERVIDOR SIGU', 'FTP SERVIDOR SIGU', 1, 0, NULL, NULL),
(381, NULL, 'grupos01', 1, 2, '151215', 'ID: 37287', '', 1, 0, NULL, NULL),
(382, NULL, '98864777091', 13, 2, '17122015', 'Entrar uma vez na semana, caso contrário login é bloqueado.', '', 1, 0, NULL, NULL),
(383, NULL, 'cruzeiros02.uneworld', 11, 2, 'd17m12a15', '', '', 1, 0, NULL, NULL),
(384, NULL, 'desenv01', 10, 1, 'une2010', '192.168.0.241 - servidor ', 'Servidor 241', 0, 0, NULL, NULL),
(385, NULL, 'financeiro01', 6, 1, 'd23m12a15', '', '', 1, 0, NULL, NULL),
(387, NULL, 'desenvune@gmail.com', 63, 1, 'une*2010', 'Conta do Google', '', 0, 0, NULL, NULL),
(388, NULL, 'financeiro@uneworld.com.br', 64, 1, 'Fin010216une', '', '', 1, 0, NULL, NULL),
(389, NULL, 'operacional01@uneworld.com.br', 18, 2, 'ZOBFNLKQ', '', '', 1, 0, NULL, NULL),
(390, NULL, 'une1020', 65, 1, 'unelk02', '', '', 1, 1, NULL, NULL),
(392, NULL, 'nathune', 15, 2, '180116', '', '', 1, 0, NULL, NULL),
(393, NULL, '050967-0', 39, 2, 'agos2016', 'PCC: 5L4U', '', 1, 0, NULL, NULL),
(394, NULL, 'opera05', 6, 2, '150116', '', '', 1, 0, NULL, NULL),
(395, NULL, '062267-2', 39, 2, 'grazi0102', '', '', 0, 0, NULL, NULL),
(396, NULL, 'lilianecelio.s@gmail.com', 29, 1, 'punta1205', '', '', 1, 0, NULL, NULL),
(397, NULL, 'celiosaraiva', 11, 1, 'celio2713', 'E-mail: lilianecelio.s@gmail.com', '', 1, 0, NULL, NULL),
(398, NULL, 'unepie', 15, 1, '201120', 'Uneworld Viagens e Turismo', '', 1, 0, NULL, NULL),
(399, NULL, 'jaqueune', 15, 2, '924714', '', '', 1, 0, NULL, NULL),
(400, NULL, 'oper04', 25, 2, '190116', '', '', 1, 0, NULL, NULL),
(401, NULL, 'grupos01uneworld', 11, 2, 'd19m01a16', '', '', 1, 0, NULL, NULL),
(402, NULL, '02805363051', 40, 1, '08032016', '', '', 1, 0, NULL, NULL),
(403, NULL, 'marketinguneworld', 11, 1, 'mktuneworld2014', '', '', 1, 0, NULL, NULL),
(404, NULL, 'desenv.uneworld', 11, 1, 'une*1020', '', '', 1, 0, NULL, NULL),
(406, NULL, 'vendas03', 1, 2, '150216', 'ID: 37287', '', 1, 0, NULL, NULL),
(407, NULL, 'SGLAPINSK1', 4, 2, 'une2016fln', '', '', 1, 0, NULL, NULL),
(408, NULL, 'vendas03uneworld', 11, 2, 'd03m04a2017', '', '', 1, 0, NULL, NULL),
(409, NULL, 'vendas03', 35, 2, 'd15m02A16', 'Login de rede\r\nDomínio: uneworldvt', '', 1, 0, NULL, NULL),
(415, NULL, 'vendas03', 5, 2, '150216', 'Empresa: UNEWORLD VIAGENS E TURISMO LTDA', '', 1, 0, NULL, NULL),
(416, NULL, 'roberta.prates', 9, 2, 'uneworld.1020', '', '', 1, 0, NULL, NULL),
(417, NULL, 'vendas03@uneworld.com.br', 8, 2, '150216', '', '', 1, 0, NULL, NULL),
(418, NULL, 'vendas08uneworld', 11, 2, 'd19m02a16', '', '', 1, 0, NULL, NULL),
(419, NULL, 'operacional01@uneworld.com.br', 66, 1, 'TST-5527z', '', '', 1, 1, NULL, NULL),
(420, NULL, 'cruz01', 9, 2, 'une,230216', '', '', 1, 0, NULL, NULL),
(421, NULL, 'cruzeiros01', 6, 2, '260716', '', '', 1, 0, NULL, NULL),
(422, NULL, 'cruz01', 1, 2, '20072016', 'ID: 37287 Entrar com navegador IE	', '', 1, 0, NULL, NULL),
(423, NULL, 'vendas03', 6, 2, '240216', '', '', 1, 0, NULL, NULL),
(424, NULL, 'vendas03@uneworld.com.br', 7, 2, '240216', '', '', 1, 0, NULL, NULL),
(425, NULL, 'OPERA02', 1, 2, '170815', 'ID: 37287', '', 1, 0, NULL, NULL),
(426, NULL, 'lsaraiva', 67, 1, 'uneworld.lilian', '', '', 1, 1, NULL, NULL),
(427, NULL, 'GHOEHR', 4, 2, 'GRA010204', '', '', 1, 0, NULL, NULL),
(428, NULL, 'informatica@uneworld.com.br', 34, 1, 'une383!', '', '', 1, 0, NULL, NULL),
(429, NULL, 'promoserra.uneworld@uneworld.com.br', 63, 1, 'd26m02a16', '', '', 1, 0, NULL, NULL),
(430, NULL, 'vendas03', 60, 2, 'une*1020', '', 'Gangooroo', 1, 0, NULL, NULL),
(431, NULL, 'sglapinski', 68, 2, '020316', '', '', 1, 0, NULL, NULL),
(432, NULL, 'fsaraiva', 68, 1, 'fabian123', '', '', 1, 0, NULL, NULL),
(433, NULL, 'tsalamone', 68, 2, 'thays123', '', '', 1, 0, NULL, NULL),
(434, NULL, '', 39, 2, '03feb2016', '', '', 0, 0, NULL, NULL),
(435, NULL, 'desenv', 69, 1, 'une2010', '', '', 1, 0, NULL, NULL),
(436, NULL, 'leonardo.santos', 60, 2, '140316', '', '', 1, 0, NULL, NULL),
(437, NULL, 'operacional02@uneworld.com.br', 7, 2, '17032016', '', '', 1, 0, NULL, NULL),
(438, NULL, 'vendas03@uneworld.com.br', 70, 2, 'une1020', '', '', 1, 0, NULL, NULL),
(439, NULL, 'operacional02@uneworld.com.br', 18, 2, '010204', '', '', 1, 0, NULL, NULL),
(441, NULL, 'paulaune', 15, 1, '211081', 'Administrador (Master)', '', 1, 0, NULL, NULL),
(442, NULL, 'vendas02@uneworld.com.br', 29, 2, 'd29m03a2016', '', '', 0, 0, NULL, NULL),
(444, NULL, '0581475', 39, 2, 'BRASIL2016', 'PCC: 5L4U', '', 1, 0, NULL, NULL),
(445, NULL, 'camila.uneworld', 71, 2, 'flycard', '', '', 1, 0, NULL, NULL),
(446, NULL, 'carla.uneworld', 71, 2, 'flycard', '', '', 1, 0, NULL, NULL),
(447, NULL, 'cristiane.uneworld', 71, 2, 'flycard', '', '', 1, 0, NULL, NULL),
(448, NULL, 'daniela.uneworld', 71, 2, 'flycard', '', '', 1, 0, NULL, NULL),
(450, NULL, 'fabian.uneworld', 71, 2, 'flycard', '', '', 1, 0, NULL, NULL),
(451, NULL, 'grazieli.uneworld', 71, 2, 'flycard', '', '', 1, 0, NULL, NULL),
(452, NULL, 'jaqueline.uneworld', 71, 2, 'flycard', '', '', 1, 0, NULL, NULL),
(454, NULL, 'lilian.uneworld', 71, 2, 'flycard', '', '', 1, 0, NULL, NULL),
(455, NULL, 'lucia.uneworld', 71, 2, 'flycard', '', '', 1, 0, NULL, NULL),
(456, NULL, 'maria.uneworld', 71, 2, 'flycard', 'Acesso: Financeiro/Vendas', '', 1, 0, NULL, NULL),
(457, NULL, 'nathalia.uneworld', 71, 2, 'flycard', '', '', 1, 0, NULL, NULL),
(459, NULL, 'rubens.uneworld', 71, 2, 'flycard', '', '', 1, 0, NULL, NULL),
(460, NULL, 'sabrina.uneworld', 71, 2, 'flycard', '', '', 1, 0, NULL, NULL),
(461, NULL, 'thays.uneworld', 71, 2, 'flycard', '', '', 1, 0, NULL, NULL),
(462, NULL, 'vivian.uneworld', 71, 2, 'flycard', '', '', 1, 0, NULL, NULL),
(466, NULL, 'lilian.saraiva.uneworld', 11, 1, 'Lilian1204', '', '', 1, 0, NULL, NULL),
(468, NULL, 'aereo01uneworld', 11, 2, 'd05m04a16', '', '', 1, 0, NULL, NULL),
(469, NULL, '01393432026', 40, 2, '31052016', '', '', 1, 0, NULL, NULL),
(470, NULL, 'vendas03@uneworld.com.br', 18, 2, 'une1020', '', '', 1, 0, NULL, NULL),
(471, NULL, 'operacional02', 60, 2, 'une*1020', '', '', 1, 0, NULL, NULL),
(474, NULL, 'vendas02', 1, 2, '120416', 'ID: 37287', '', 1, 0, NULL, NULL),
(475, NULL, '12407321', 72, 1, 'turismo01', 'Senha administrador\r\nOutro Link www.iberoclick.com.br', '', 1, 0, NULL, NULL),
(476, NULL, '14637277', 27, 2, 'dfernaneur', 'Senha Daiane', '', 1, 0, NULL, NULL),
(477, NULL, '14637279', 49, 2, 'dfernanbrl', 'Senha Daiane', '', 1, 0, NULL, NULL),
(478, NULL, '14637278', 28, 2, 'dfernanusd', 'Senha Daiane', '', 1, 0, NULL, NULL),
(479, NULL, 'desenvolvimento@uneworld.com.br', 73, 1, 'une*2010', 'Para pegar os favoritos e tudo mais', 'Firefox sync', 0, 0, NULL, NULL),
(480, NULL, 'sigu', 74, 1, 'Une!2014*', '', '', 1, 0, NULL, NULL),
(481, NULL, 'uneworld', 74, 1, 'ptf@Un3w0rld', 'Host: postgresql01.uneworld.com.br', '', 1, 0, NULL, NULL),
(482, NULL, 'grazi.un', 15, 2, '010204', '', '', 1, 0, NULL, NULL),
(483, NULL, 'robertap.uneworld', 71, 2, 'flycard', '', '', 1, 0, NULL, NULL),
(484, NULL, 'vendas07', 14, 2, '25042016', '', '', 1, 0, NULL, NULL),
(485, NULL, 'vendas02@uneworld.com.br', 16, 2, 'J6Gs6T', 'BRP: 2001012900', '', 1, 0, NULL, NULL),
(486, NULL, 'vendas01', 72, 2, '26042016', '', '', 1, 0, NULL, NULL),
(487, NULL, 'operacional01@uneworld.com.br', 18, 2, '874852XQN', '', '', 0, 0, NULL, NULL),
(488, NULL, 'argusalice', 72, 2, 'd16m08a16', '', '', 1, 0, NULL, NULL),
(489, NULL, 'vendas01@uneworld.com.br', 17, 2, 'une1020', '', 'mudança de senha', 0, 0, NULL, NULL),
(490, NULL, 'asdvasdvasdv', 1, 1, 'asdvasdv', 'asdvasdv', 'asdvasdv', 0, 0, NULL, NULL),
(491, NULL, 'uneworld', 61, 1, 'une1020', 'Gerenciador de senhas\r\nIP: 192.168.0.55', '', 1, 0, NULL, NULL),
(492, NULL, 'LSARAIVA', 75, 1, 'Z05BM3H', 'TIPO DE USUÁRIO: OPERADOR', '', 1, 1, NULL, NULL),
(493, NULL, 'FABIAN', 1, 2, '020516', 'ID: 37287', '', 1, 0, NULL, NULL),
(494, NULL, 'operacional02', 72, 2, '010204', '', '', 1, 0, NULL, NULL),
(495, NULL, 'tarifarios01', 72, 2, 'une1020', '', '', 1, 0, NULL, NULL),
(496, NULL, 'financeiro01@uneworld.com.br', 76, 1, '09052016', 'Login: Walmart para compras', '', 1, 0, NULL, NULL),
(497, NULL, 'DFERNAND15', 4, 2, 'DFE07N', '', '', 1, 0, NULL, NULL),
(498, NULL, 'vendas02', 6, 2, '120516', '', '', 1, 0, NULL, NULL),
(499, NULL, '95455132091', 13, 2, '03042017', 'Entrar no mï¿½nimo uma vez a semana, para nï¿½o ser bloqueado pela azul.', '', 1, 0, NULL, NULL),
(502, NULL, 'root', 10, 1, 'll017UN!', '192.168.0.55 - Gerenciador de Senhas', '', 0, 0, NULL, NULL),
(503, NULL, 'informatica.uneworld16@gmail.com', 63, 1, 'l015ZU$$', '', '', 0, 0, NULL, NULL),
(504, NULL, 'admin', 77, 1, 'd7b8398a', 'http://192.168.15.1/login.htm\r\nVivo', '', 0, 0, NULL, NULL),
(505, NULL, 'administrador', 10, 1, 'll017UN!', '192.168.0.247 - Servidor Impressora Amadeus/Galileo.  ', 'Servidor Amadeus/Galileo', 0, 0, NULL, NULL),
(506, NULL, 'https://ask.travelport.com/index?page=home&locale=', 39, 2, 'brasil2020', 'Login KarenMarinho', 'HELPDESK GALILEO', 1, 0, NULL, NULL),
(507, NULL, 'kasterl', 78, 1, 'Kaster@345', '', '', 1, 0, NULL, NULL),
(508, NULL, 'FSaraiva', 78, 1, 'Saraiva@345', '', '', 1, 0, NULL, NULL),
(510, NULL, 'FCarvalho', 78, 2, 'Carvalho@345', '', '', 1, 0, NULL, NULL),
(511, NULL, 'JSchrammel', 78, 2, 'Schrammel@345', '', '', 1, 0, NULL, NULL),
(513, NULL, 'TSalamone', 78, 2, 'Salamone@345', '', '', 1, 0, NULL, NULL),
(514, NULL, 'NCenteno', 78, 2, 'Centeno@345', '', '', 1, 0, NULL, NULL),
(515, NULL, 'MGraca', 78, 1, 'Graca@345', '', '', 1, 0, NULL, NULL),
(516, NULL, 'CAlice', 78, 2, 'Alice@345', '', '', 1, 0, NULL, NULL),
(517, NULL, 'RRosa', 78, 2, 'Rosa@345', '', '', 1, 0, NULL, NULL),
(518, NULL, 'SSaraiva', 78, 1, 'Saraiva@345', '', '', 1, 0, NULL, NULL),
(519, NULL, 'kasterl', 78, 1, 'Kaster@345', '', '', 1, 0, NULL, NULL),
(520, NULL, 'DRegina', 78, 2, 'Regina@345', '', '', 1, 0, NULL, NULL),
(521, NULL, 'GHoehr', 78, 2, 'Hoehr@345', '', '', 1, 0, NULL, NULL),
(522, NULL, 'DUlhoa', 78, 1, 'Ulhoa@345', '', '', 1, 0, NULL, NULL),
(523, NULL, 'RHuff', 78, 2, 'Huff@345', '', '', 1, 0, NULL, NULL),
(525, NULL, 'admin', 79, 1, '', 'Não tem senha', '', 1, 0, NULL, NULL),
(526, NULL, 'vendas02', 60, 2, '03062016', '', '', 1, 0, NULL, NULL),
(527, NULL, 'vendas02uneworld', 11, 2, 'd03m06a2016', '', '', 1, 0, NULL, NULL),
(528, NULL, 'administrador', 61, 1, 'l015ZU$', 'FTP servidor de teste web sigu 192.168.0.253', '', 1, 0, NULL, NULL),
(529, NULL, 'UNE', 80, 1, 'UNE', 'Clicar em: AGENT LOGIN', '', 1, 1, NULL, NULL),
(530, NULL, 'sigu', 10, 1, 'Une!2014*', 'Usuário postgres utiliza mesma senha, servidor de testes DB\r\nIP: 192.168.0.252', 'DB teste Sigu', 1, 0, NULL, NULL),
(531, NULL, 'desenvolvimento@uneworld.com.br', 81, 1, 'une2010', 'Braspag Tasker', '', 0, 0, NULL, NULL),
(532, NULL, 'tarifarios01', 14, 2, '160616', '', '', 1, 0, NULL, NULL),
(533, NULL, 'promocao03uneworld', 11, 2, 'd20m06a16', '', '', 1, 0, NULL, NULL),
(534, NULL, 'vendas03', 45, 2, 'd20m06a16', 'Clave: 2041080', '', 1, 0, NULL, NULL),
(535, NULL, 'uneworld_leonardo', 60, 1, 'uneworld2014', 'Documentação do WS Cang\r\nhttp://doc.cangooroo.net/', '', 0, 0, NULL, NULL),
(536, NULL, 'financeiro@uneworld.com.br', 7, 2, 'Mgraca16', '', '', 1, 0, NULL, NULL),
(537, NULL, 'TARI', 1, 2, '270616', 'ID: 37287, Entrar com Internet Explorer', '', 1, 0, NULL, NULL),
(538, NULL, 'tarifarios@uneworld.com.br', 7, 2, 'Tarifarios2016', '', '', 1, 0, NULL, NULL),
(539, NULL, 'lilian@uneworld.com.br', 82, 1, 'd24m04', '', '', 1, 1, NULL, NULL),
(540, NULL, 'LSARAIVA', 83, 2, 'TORONTO', 'única para todos', '', 1, 1, NULL, NULL),
(541, NULL, 'une', 84, 1, 'une', '', '', 1, 0, NULL, NULL),
(542, NULL, 'LiliaSa', 85, 1, 'Sa556741', '', '', 1, 0, NULL, NULL),
(543, NULL, 'Grazieli hoehr', 86, 2, 'Grazieli666*', 'www.allrepsreceptivo.com', '', 1, 0, NULL, NULL),
(545, NULL, 'informatica@uneworld.com.br', 88, 2, 'Jonathan123', '', '', 1, 0, NULL, NULL),
(546, NULL, 'lilian@uneworld.com.br', 89, 2, 'lilian', 'Solicitar senha para: monica.riverol@abtour.com.br', '', 1, 0, NULL, NULL),
(547, NULL, 'informatica@uneworld.com.br', 89, 2, 'informatica', '', '', 1, 0, NULL, NULL),
(548, NULL, 'Grazieli hoehr', 86, 2, 'Grazieli666*', 'www.allrepsreceptivo.com', '', 1, 0, NULL, NULL),
(549, NULL, 'tarifarios@uneworld.com.br', 89, 2, 'Grazieli123', '', '', 1, 0, NULL, NULL),
(550, NULL, 'tarifarios', 9, 2, 'D29m06a2016', '', '', 1, 0, NULL, NULL),
(551, NULL, 'JaquelineS', 85, 2, 'Js123456', '', '', 1, 0, NULL, NULL),
(552, NULL, 'FlaviaC', 85, 2, 'Fc123456', '', '', 1, 0, NULL, NULL),
(553, NULL, 'RubensH', 85, 2, 'Rh123456', '', '', 1, 0, NULL, NULL),
(554, NULL, 'NathaliaC', 85, 2, 'Nc123456', '', '', 1, 0, NULL, NULL),
(555, NULL, 'DaianeF', 85, 2, 'Df123456', '', '', 1, 0, NULL, NULL),
(556, NULL, 'SuelenG', 85, 2, 'Sg123456', '', '', 1, 0, NULL, NULL),
(557, NULL, 'CamilaP', 85, 2, 'Cp123456 ', '', '', 1, 0, NULL, NULL),
(558, NULL, 'LeonardoK', 85, 2, 'Lk123456', '', '', 1, 0, NULL, NULL),
(559, NULL, 'MDAGS', 90, 1, 'fina2906', 'Retirar faturas ETAM', '', 1, 0, NULL, NULL),
(562, NULL, 'FIN4856UN', 64, 2, 'une020516', '', '', 1, 0, NULL, NULL),
(563, NULL, '92720706000', 13, 1, 'D01M07A2016', 'Entrar uma vez na semana, caso contrário login é bloqueado.', '', 1, 0, NULL, NULL),
(564, NULL, '95455132091', 40, 2, '13022018', '13/02/2017\r\n', '', 1, 0, NULL, NULL),
(565, NULL, 'LiliaSa', 85, 2, 'Sa556741', 'Senha Lilian', '', 1, 0, NULL, NULL),
(566, NULL, 'uneworld01', 87, 2, 'uneworld1', 'Senha Lilian', '', 1, 0, NULL, NULL),
(567, NULL, 'uneworld3', 56, 1, 'bd4t3st20i4', 'Dicas do site\r\nHost: mysql01.uneworld.com.br', '', 0, 0, NULL, NULL),
(568, NULL, '01101624043', 13, 2, 'd04m10a2016', 'Entrar uma vez na semana, caso contrário login é bloqueado.', '', 1, 0, NULL, NULL),
(569, NULL, 'cruzeiros01uneworld', 11, 2, 'd06m07a2016', '', '', 1, 0, NULL, NULL),
(570, NULL, 'uneworld', 91, 2, 'Une102030', '', '', 1, 0, NULL, NULL),
(571, NULL, 'lilian@uneworld.com.br', 7, 1, 'Lilian383', '', '', 1, 0, NULL, NULL),
(572, NULL, 'angelatiaiara', 72, 2, '101167', 'Login de agencia', '', 1, 0, NULL, NULL),
(573, NULL, 'renatatiaiara', 72, 2, '100172', 'Login de agencia', '', 1, 0, NULL, NULL),
(574, NULL, 'marilenetiaiara', 72, 2, '200465', 'Login de agencia', '', 1, 0, NULL, NULL),
(575, NULL, 'rosimeritiaiara', 72, 2, '200960', 'Login de agencia', '', 1, 0, NULL, NULL),
(576, NULL, 'lucianatiaiara', 72, 2, '090371', 'Login de agencia', '', 1, 0, NULL, NULL),
(577, NULL, 'taniatiaiara', 72, 2, '270361', 'Login de agencia', '', 1, 0, NULL, NULL),
(578, NULL, 'vendas07uneworld', 11, 2, 'une*1020', '', '', 1, 0, NULL, NULL),
(579, NULL, 'fabian.uneworld', 92, 1, 'Uneworld1020', 'Qualquer liberação e/ou alteração de login e senha são feitas pela Agência de Viagem.\r\nEm caso de dú', '', 1, 0, NULL, NULL),
(580, NULL, '01630331023', 93, 2, 'D12m07@16', 'Novo Portal', '', 1, 0, NULL, NULL),
(581, NULL, 'lisi.une', 15, 2, 'uw20i5', 'Portal Antigo April Brasil', '', 1, 0, NULL, NULL),
(582, NULL, 'aereo01@uneworld.com.br', 94, 2, 'une1020', '', '', 1, 0, NULL, NULL),
(583, NULL, 'grupos01', 92, 2, 'Nc010584', '', '', 1, 0, NULL, NULL),
(584, NULL, 'aereo01', 92, 2, 'uneworld10', '', '', 1, 0, NULL, NULL),
(585, NULL, 'financeiro', 92, 1, 'Geri1942', '', '', 1, 0, NULL, NULL),
(587, NULL, 'grupos', 60, 1, '220716', '', '', 1, 0, NULL, NULL),
(588, NULL, 'RPrates', 78, 2, 'D22m07@2016', '', '', 1, 0, NULL, NULL),
(589, NULL, 'admin', 10, 1, 'll017UN!', '192.168.0.251 - Firewall', '', 1, 0, NULL, NULL),
(590, NULL, 'vendas03', 25, 1, '290716', 'Tipo: Agencia', '', 1, 0, NULL, NULL),
(591, NULL, 'uneworld', 25, 2, 'id0016', '', '', 1, 0, NULL, NULL),
(592, NULL, 'uneworld', 95, 2, 'R11TRAVEL01', '', '', 1, 0, NULL, NULL),
(593, NULL, 'FUNEWORLD', 4, 1, 'd12m08a16', '', '', 1, 0, NULL, NULL),
(594, NULL, 'maria.petry', 60, 2, 'd17m08a16', '', '', 1, 0, NULL, NULL),
(595, NULL, 'MPETRY', 4, 2, 'd23m09a16', '', '', 1, 0, NULL, NULL),
(596, NULL, 'OPERA05', 1, 2, 'd17m08a16', 'ID: 37287 abrir somente com internet explorer', '', 1, 0, NULL, NULL),
(597, NULL, '22851313053', 40, 2, '202507', '', '', 1, 0, NULL, NULL),
(598, NULL, 'aereo01', 60, 2, 'd19m08', '', '', 1, 0, NULL, NULL),
(599, NULL, 'operacional05uneworld', 11, 2, 'd24m08a16', '', '', 1, 0, NULL, NULL),
(600, NULL, 'raoni30', 72, 2, '160916', 'Cliente', '', 1, 0, NULL, NULL),
(601, NULL, 'fabian.saraiva', 96, 1, 'Fabian2016!', '', '', 0, 0, NULL, NULL),
(604, NULL, 'daniela.ulhoa', 96, 1, 'Daniela2016!', '', '', 0, 0, NULL, NULL),
(605, NULL, 'operacional05', 5, 2, '220916', 'Empresa: UNEWORLD VIAGENS E TURISMO LTDA', '', 1, 0, NULL, NULL),
(606, NULL, 'operacional05', 45, 2, '03102016', 'Clave: 2041080', '', 1, 0, NULL, NULL),
(607, NULL, 'admin', 1, 1, 'l015ZU$', 'ID: 37287 Entrar com navegador IE', '', 1, 0, NULL, NULL),
(608, NULL, '80601693000', 93, 2, 'Une@1234', '', '', 1, 0, NULL, NULL),
(609, NULL, '00820729060', 93, 1, 'Une@1234', '', '', 1, 0, NULL, NULL),
(610, NULL, '01942762011', 93, 2, 'JAune-2016', '', '', 1, 0, NULL, NULL),
(611, NULL, 'andreiacltur', 72, 2, '111016', '', '', 1, 0, NULL, NULL),
(612, NULL, 'leonardo.kaster', 96, 2, 'Leonardo2016!', 'Suporte para taymara.melo@omnibees.com', '', 1, 0, NULL, NULL),
(613, NULL, 'grazieli.hoehr', 96, 2, 'Grazieli2016!', 'Suporte para taymara.melo@omnibees.com', '', 1, 0, NULL, NULL),
(614, NULL, 'camila.prux', 96, 2, 'Camila2016!', 'Suporte para taymara.melo@omnibees.com', '', 1, 0, NULL, NULL),
(615, NULL, 'daniela.ulhoa', 96, 2, 'Daniela2016!', 'Suporte para taymara.melo@omnibees.com', '', 1, 0, NULL, NULL),
(617, NULL, 'jaqueline.schrammel', 96, 2, 'Jaqueline2016!', 'Suporte para taymara.melo@omnibees.com', '', 1, 0, NULL, NULL),
(618, NULL, 'rubens.huff', 96, 2, 'Rubens2016!', 'Suporte para taymara.melo@omnibees.com, servicedesk@omnibees.com', '', 1, 0, NULL, NULL),
(619, NULL, 'thays.salamone', 96, 2, 'Thays2016!', 'Suporte para taymara.melo@omnibees.com', '', 1, 0, NULL, NULL),
(620, NULL, 'maria.graÃ§a', 96, 2, 'Maria2017!', 'Suporte para taymara.melo@omnibees.com', '', 1, 0, NULL, NULL),
(621, NULL, 'vivian.theisen', 96, 2, 'Vivian2017', 'Suporte para taymara.melo@omnibees.com', '', 1, 0, NULL, NULL),
(622, NULL, 'roberta.prates', 96, 2, 'Roberta2016!', 'Suporte para taymara.melo@omnibees.com', '', 1, 0, NULL, NULL),
(623, NULL, 'karen.marinho', 96, 2, 'Karen2016!', 'Suporte para taymara.melo@omnibees.com', '', 1, 0, NULL, NULL),
(624, NULL, 'nathalia.centeno', 96, 2, 'Nathalia2016!', 'Suporte para taymara.melo@omnibees.com', '', 1, 0, NULL, NULL),
(625, NULL, 'lilian.saraiva', 96, 2, 'Lilian2016!', 'Suporte para taymara.melo@omnibees.com', '', 1, 0, NULL, NULL),
(626, NULL, 'fabian.saraiva', 96, 2, 'Fabian2016!', 'Suporte para taymara.melo@omnibees.com', '', 1, 0, NULL, NULL),
(627, NULL, '00492269084', 93, 2, 'Rosa*1811', '', '', 1, 0, NULL, NULL),
(628, NULL, 'TSALAMONE2', 4, 2, 'd17m10a16', '', '', 1, 0, NULL, NULL),
(629, NULL, 'flavia07', 15, 2, '181016', '', '', 1, 0, NULL, NULL),
(630, NULL, '01101624043', 93, 2, 'Grazi010204', '', '', 1, 0, NULL, NULL),
(631, NULL, 'lilian@uneworld.com.br', 97, 1, 'rvw4az', '', '', 1, 1, NULL, NULL),
(632, NULL, 'vivian.theisen', 60, 2, '181016', '', '', 1, 0, NULL, NULL),
(640, NULL, 'LEONARDOK', 98, 1, 'UNEWORLD1', 'única para todos', '', 1, 1, NULL, NULL),
(641, NULL, 'teste', 79, 2, 'teste', 'ss', '', 1, 0, NULL, NULL),
(642, NULL, '065719-3', 39, 2, 'uneworld10', '13/02/2016', '', 1, 0, NULL, NULL),
(643, NULL, 'NATHALIA', 99, 2, 'NATHALIA2016', 'Agencia 40', '', 1, 0, NULL, NULL),
(645, NULL, 'SUELEN', 99, 2, 'SUELEN2016', 'Agencia 40', '', 1, 0, NULL, NULL);
INSERT INTO `senhauser` (`codsenha`, `user_id`, `login`, `codacesso`, `tipo`, `pwd`, `obs`, `titulo`, `vizualiza`, `global`, `updated_at`, `created_at`) VALUES
(646, NULL, 'RUBENS', 99, 2, 'RUBENS2016', 'Agencia 40', '', 1, 0, NULL, NULL),
(647, NULL, 'FLAVIA', 99, 2, 'FLAVIA2016', 'Agencia 40', '', 1, 0, NULL, NULL),
(648, NULL, 'JAQUELINE', 99, 2, 'JAQUELINE2016', 'Agencia 40', '', 1, 0, NULL, NULL),
(649, NULL, 'ROBERTA', 99, 2, 'ROBERTA2016', 'Agencia 40', '', 1, 0, NULL, NULL),
(650, NULL, 'MARIA', 99, 2, 'MARIA2016', 'Agencia 40', '', 1, 0, NULL, NULL),
(651, NULL, 'VIVIAN', 99, 2, 'VIVIAN2016', 'Agencia 40', '', 1, 0, NULL, NULL),
(652, NULL, 'GRAZIELI', 99, 2, 'GRAZIELI2016', 'Agencia 40', '', 1, 0, NULL, NULL),
(653, NULL, 'LEONARDO', 99, 2, 'LEONARDO2016', 'Agencia 40', '', 1, 0, NULL, NULL),
(654, NULL, 'UNEWORLD', 24, 2, '159@travel!', '', '', 1, 0, NULL, NULL),
(655, NULL, 'vendas08', 1, 2, '211116', 'ID: 37287', '', 1, 0, NULL, NULL),
(656, NULL, 'uneworld01', 87, 2, 'uneworld1', 'única para todos', '', 1, 1, NULL, NULL),
(657, NULL, '01145635008', 40, 2, '02122016', '', '', 1, 0, NULL, NULL),
(658, NULL, 'operacional03uneworld', 11, 2, 'd06m12a2016', '', '', 1, 0, NULL, NULL),
(659, NULL, '00820729060', 40, 2, '07122016', 'Ultima AtualizaÃ§Ã£o 07/12/16', '', 1, 0, NULL, NULL),
(660, NULL, 'operacional03@uneworld.com.br', 7, 2, '13122016', 'Atualizado em 13/12/2016', '', 1, 0, NULL, NULL),
(661, NULL, '14641588', 27, 2, 'mpetryeur', 'Atualizado 16/12/2016\r\n', '', 1, 0, NULL, NULL),
(662, NULL, 'operacional03', 60, 2, '22122016', '22/12/2016', '', 1, 0, NULL, NULL),
(663, NULL, 'oper05', 25, 2, '26122016', 'Tipo: Agencia, atualizado em 26/12/2016', '', 1, 0, NULL, NULL),
(664, NULL, '138787', 49, 2, 'vthiesenbrl', '27/12/2016', '', 1, 0, NULL, NULL),
(665, NULL, '133312', 27, 2, 'vtheiseneur', '27/12/2016', '', 1, 0, NULL, NULL),
(666, NULL, '133313', 28, 2, 'vtheisenusd', '27/12/2016', '', 1, 0, NULL, NULL),
(667, NULL, 'operacional03', 72, 2, '27122016', '27/12/2016', '', 1, 0, NULL, NULL),
(668, NULL, 'operacional03', 5, 2, '27122016', 'EMPRESA: UNEWORLD VIAGENS E TURISMO LTDA', '', 1, 0, NULL, NULL),
(669, NULL, 'lilian@uneworld.com.br', 100, 2, '1835', 'Unica para todos', '', 1, 1, NULL, NULL),
(670, NULL, 'UNEWORLD2015', 101, 1, 'agt123', 'Unica para todos', '', 1, 0, NULL, NULL),
(671, NULL, 'uneworldbr', 102, 1, 'agente1', 'Fone: (21) 3410-1062', '', 1, 1, NULL, NULL),
(672, NULL, 'jhon.uneworld', 71, 2, 'flycard', '', '', 1, 0, NULL, NULL),
(673, NULL, '238662677', 103, 2, 'Une10202017', '14/02/2017 Sr. Saraiva PIN 1020', '', 1, 0, NULL, NULL),
(674, NULL, 'etam', 90, 2, 'brasil2020', '', '', 1, 0, NULL, NULL),
(675, NULL, '238806122', 103, 2, 'Une10202017', 'Lilian PIN 1020', '', 1, 0, NULL, NULL),
(676, NULL, 'Inc_por_61', 105, 1, '1400Alemanha!', '20/02/2017', '', 1, 1, NULL, NULL),
(677, NULL, 'SON/070574-0', 39, 2, 'BRASIL2020', 'Problemas com senha: galileo.helpdesk@travelportgdshelp.com', '', 1, 0, NULL, NULL),
(678, NULL, 'operacional02', 106, 2, 'D29m03a17', 'COMPANY ID: 1321495', '', 1, 0, NULL, NULL),
(679, NULL, 'operacionaluneworld', 106, 1, 'Uneworld2017', 'COMPANY ID: 1321495', '', 1, 1, NULL, NULL),
(680, NULL, 'vendas03', 106, 2, 'D29m03a17', 'COMPANY ID: 1321495', '', 1, 0, NULL, NULL),
(681, NULL, 'financeiro', 60, 2, 'd19m04a17', '', '', 1, 0, NULL, NULL),
(682, NULL, '146452492', 28, 2, 'cvargasusd', '28/04/2017', '', 1, 0, NULL, NULL),
(683, NULL, '146452491', 27, 2, 'cvargaseur', '', '', 1, 0, NULL, NULL),
(684, NULL, '146452490', 49, 2, 'cvargasbrl', '', '', 1, 0, NULL, NULL),
(685, NULL, 'tarifarios01', 45, 2, 'd02m05a17', '', '', 1, 0, NULL, NULL),
(686, NULL, 'francyne.lago', 96, 2, 'Francyne2017!', '', '', 1, 0, NULL, NULL),
(687, NULL, 'tarifarios', 60, 2, 'une1020', 'Acesso Cangooroo.', 'Acesso Cangooroo', 1, 0, NULL, NULL),
(688, NULL, 'lilian', 60, 1, 'une1020', 'Acesso Cangooroo Master', '', 1, 0, NULL, NULL),
(689, NULL, '14635395', 49, 2, 'unewxmlbrl', 'Acesso do Cangooroo ao sistema da Abreu BRL. Uneworld Viagens e Turismo - BRL - XML', '', 0, 0, NULL, NULL),
(690, NULL, '9004850', 53, 2, 'Temporal1', 'Acesso do cangooroo ao sistema da HotelDo. As reservas feitas pelo cangooroo ficam nesse usuario', '', 0, 0, NULL, NULL),
(691, NULL, 'jonatan.sc', 1, 1, '1020', NULL, NULL, NULL, NULL, '2017-06-20 18:15:37', '2017-06-20 18:15:37'),
(692, NULL, 'jonatan.sc', 1, 1, 'une1020', NULL, NULL, NULL, NULL, NULL, NULL),
(693, NULL, 'jonatan.sc', 1, 1, 'une1020', NULL, NULL, NULL, NULL, '2017-06-20 18:41:09', '2017-06-20 18:41:09'),
(694, NULL, 'testesinho', 1, 1, '1', NULL, NULL, NULL, NULL, '2017-06-20 21:26:30', '2017-06-20 21:26:30'),
(695, NULL, 'testesinho', 1, 1, '1', NULL, NULL, NULL, NULL, '2017-06-20 21:27:28', '2017-06-20 21:27:28'),
(696, NULL, 'new', 1, 1, '1', NULL, NULL, NULL, NULL, '2017-06-21 15:33:57', '2017-06-20 21:28:21'),
(697, NULL, 'teste', 1, 1, 'te', NULL, NULL, NULL, NULL, '2017-06-21 20:41:14', '2017-06-21 20:41:14'),
(698, NULL, 'SERVIDOR', 1, 1, '1', NULL, NULL, NULL, NULL, '2017-06-21 20:44:12', '2017-06-21 20:44:12'),
(699, NULL, 't', 1, 1, 't', NULL, NULL, NULL, NULL, '2017-06-21 21:16:43', '2017-06-21 21:16:43');

-- --------------------------------------------------------

--
-- Estrutura da tabela `setor`
--

CREATE TABLE `setor` (
  `id` int(11) NOT NULL,
  `setor` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipoacesso`
--

CREATE TABLE `tipoacesso` (
  `codtipo` int(1) NOT NULL,
  `nometipo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tipoacesso`
--

INSERT INTO `tipoacesso` (`codtipo`, `nometipo`) VALUES
(1, 'Master'),
(2, 'Agente');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `id` int(2) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `ativo` char(1) DEFAULT NULL,
  `remenber_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tipo` int(1) DEFAULT NULL,
  `oidsigu` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `ativo`, `remenber_token`, `created_at`, `updated_at`, `tipo`, `oidsigu`) VALUES
(1, 'Jonathan Cruz', 'informatica@uneworld.com.br', '$2y$10$0dLw/nIgFqSgsDti9CIdC.BnCaK0EhDIAsOOhChZAlpVR8M6sNXg.', NULL, NULL, NULL, NULL, 1, NULL),
(2, 'Jaqueline Schrammel', 'vendas07@uneworld.com.br', '$2y$10$2MkhXi972aO3LVpylW6/9.i2s7A18OmPaJL5y2KS2/heXvHMQT4bm', NULL, NULL, NULL, NULL, 2, NULL),
(3, 'Vendas06', 'vendas06@uneworld.com.br', '$2y$10$2MkhXi972aO3LVpylW6/9.i2s7A18OmPaJL5y2KS2/heXvHMQT4bm', NULL, NULL, NULL, NULL, 2, NULL),
(4, 'Lilian Saraiva', 'lilian@uneworld.com.br', '$2y$10$2MkhXi972aO3LVpylW6/9.i2s7A18OmPaJL5y2KS2/heXvHMQT4bm', NULL, NULL, NULL, NULL, 2, NULL),
(5, 'Fabian Saraiva', 'fabian@uneworld.com.br', '$2y$10$2MkhXi972aO3LVpylW6/9.i2s7A18OmPaJL5y2KS2/heXvHMQT4bm', NULL, NULL, NULL, NULL, 2, NULL),
(6, 'Ewerton', 'cruzeiros02@uneworld.com.br', '$2y$10$2MkhXi972aO3LVpylW6/9.i2s7A18OmPaJL5y2KS2/heXvHMQT4bm', NULL, NULL, NULL, NULL, 2, NULL),
(7, 'Camila Prux', 'grupos01@uneworld.com.br', '$2y$10$2MkhXi972aO3LVpylW6/9.i2s7A18OmPaJL5y2KS2/heXvHMQT4bm', NULL, NULL, NULL, NULL, 2, NULL),
(8, 'Rubens Huff', 'vendas08@uneworld.com.br', '$2y$10$2MkhXi972aO3LVpylW6/9.i2s7A18OmPaJL5y2KS2/heXvHMQT4bm', NULL, NULL, NULL, NULL, 2, NULL),
(9, 'Camila Prux', 'operacional04@uneworld.com.br', '$2y$10$2MkhXi972aO3LVpylW6/9.i2s7A18OmPaJL5y2KS2/heXvHMQT4bm', NULL, NULL, NULL, NULL, 2, NULL),
(10, 'cruzeiros01', 'cruzeiros01@uneworld.com.br', '$2y$10$2MkhXi972aO3LVpylW6/9.i2s7A18OmPaJL5y2KS2/heXvHMQT4bm', NULL, NULL, NULL, NULL, 2, NULL),
(11, 'Silvane Azevedo', 'silvane.coris', '$2y$10$2MkhXi972aO3LVpylW6/9.i2s7A18OmPaJL5y2KS2/heXvHMQT4bm', NULL, NULL, NULL, NULL, 2, NULL),
(12, 'Daniela Ulhoa', 'vendas01@uneworld.com.br', '$2y$10$2MkhXi972aO3LVpylW6/9.i2s7A18OmPaJL5y2KS2/heXvHMQT4bm', NULL, NULL, NULL, NULL, 2, NULL),
(13, 'Tarifarios', 'tarifarios@uneworld.com.br', '$2y$10$2MkhXi972aO3LVpylW6/9.i2s7A18OmPaJL5y2KS2/heXvHMQT4bm', NULL, NULL, NULL, NULL, 2, NULL),
(14, 'Maria', 'operacional05@uneworld.com.br', '$2y$10$2MkhXi972aO3LVpylW6/9.i2s7A18OmPaJL5y2KS2/heXvHMQT4bm', NULL, NULL, NULL, NULL, 2, NULL),
(15, 'Grazieli Hoehr', 'operacional02@uneworld.com.br', '$2y$10$2MkhXi972aO3LVpylW6/9.i2s7A18OmPaJL5y2KS2/heXvHMQT4bm', NULL, NULL, NULL, NULL, 2, NULL),
(16, 'Lucia Marlene Paula', 'atendimento01@uneworld.com.br', '$2y$10$2MkhXi972aO3LVpylW6/9.i2s7A18OmPaJL5y2KS2/heXvHMQT4bm', NULL, NULL, NULL, NULL, 2, NULL),
(17, 'Leonardo Danieli', 'desenvolvimento@uneworld.com.br', '$2y$10$2MkhXi972aO3LVpylW6/9.i2s7A18OmPaJL5y2KS2/heXvHMQT4bm', NULL, NULL, NULL, NULL, 2, NULL),
(18, 'Sabrina Saraiva', 'sabrina@uneworld.com.br', '$2y$10$2MkhXi972aO3LVpylW6/9.i2s7A18OmPaJL5y2KS2/heXvHMQT4bm', NULL, NULL, NULL, NULL, 2, NULL),
(19, 'Carla Ohana', 'rh01@uneworld.com.br', '$2y$10$2MkhXi972aO3LVpylW6/9.i2s7A18OmPaJL5y2KS2/heXvHMQT4bm', NULL, NULL, NULL, NULL, 2, NULL),
(20, 'Maria da Graca', 'financeiro01@uneworld.com.br', '$2y$10$2MkhXi972aO3LVpylW6/9.i2s7A18OmPaJL5y2KS2/heXvHMQT4bm', NULL, NULL, NULL, NULL, 2, NULL),
(21, 'Financeiro04', 'financeiro04@uneworld.com.br', '$2y$10$2MkhXi972aO3LVpylW6/9.i2s7A18OmPaJL5y2KS2/heXvHMQT4bm', NULL, NULL, NULL, NULL, 2, NULL),
(22, 'Marketing', 'marketing@uneworld.com.br', '$2y$10$2MkhXi972aO3LVpylW6/9.i2s7A18OmPaJL5y2KS2/heXvHMQT4bm', NULL, NULL, NULL, NULL, 2, NULL),
(23, 'Vendas09', 'vendas09@uneworld.com.br', '$2y$10$2MkhXi972aO3LVpylW6/9.i2s7A18OmPaJL5y2KS2/heXvHMQT4bm', NULL, NULL, NULL, NULL, 2, NULL),
(24, 'Operacional07', 'operacional07@uneworld.com.br', '$2y$10$2MkhXi972aO3LVpylW6/9.i2s7A18OmPaJL5y2KS2/heXvHMQT4bm', NULL, NULL, NULL, NULL, 2, NULL),
(25, 'Celio Saraiva', 'csaraiva@uneworld.com.br', '$2y$10$2MkhXi972aO3LVpylW6/9.i2s7A18OmPaJL5y2KS2/heXvHMQT4bm', NULL, NULL, NULL, NULL, 2, NULL),
(26, 'Financeiro02', 'financeiro02@uneworld.com.br', '$2y$10$2MkhXi972aO3LVpylW6/9.i2s7A18OmPaJL5y2KS2/heXvHMQT4bm', NULL, NULL, NULL, NULL, 2, NULL),
(27, 'Aereo01', 'aereo01@uneworld.com.br', '$2y$10$2MkhXi972aO3LVpylW6/9.i2s7A18OmPaJL5y2KS2/heXvHMQT4bm', NULL, NULL, NULL, NULL, 2, NULL),
(96, 'Andrea', 'promocao03@uneworld.com.br', '$2y$10$2MkhXi972aO3LVpylW6/9.i2s7A18OmPaJL5y2KS2/heXvHMQT4bm', NULL, NULL, NULL, NULL, 2, NULL),
(97, 'Vander', 'promoserra@uneworld.com.br', '$2y$10$2MkhXi972aO3LVpylW6/9.i2s7A18OmPaJL5y2KS2/heXvHMQT4bm', NULL, NULL, NULL, NULL, 2, NULL),
(98, 'Danuza Mikalovcz', 'danuza.mikalovcz@april.com', '$2y$10$2MkhXi972aO3LVpylW6/9.i2s7A18OmPaJL5y2KS2/heXvHMQT4bm', NULL, NULL, NULL, NULL, 2, NULL),
(99, 'Rogerio ', 'paulo.amaro@april.com', '$2y$10$2MkhXi972aO3LVpylW6/9.i2s7A18OmPaJL5y2KS2/heXvHMQT4bm', NULL, NULL, NULL, NULL, 2, NULL),
(100, 'Operacional01', 'operacional01@uneworld.com.br', '$2y$10$2MkhXi972aO3LVpylW6/9.i2s7A18OmPaJL5y2KS2/heXvHMQT4bm', NULL, NULL, NULL, NULL, 2, NULL),
(101, 'vendas03', 'vendas03@uneworld.com.br', '$2y$10$2MkhXi972aO3LVpylW6/9.i2s7A18OmPaJL5y2KS2/heXvHMQT4bm', NULL, NULL, NULL, NULL, 2, NULL),
(102, 'vendas02', 'vendas02@uneworld.com.br', '$2y$10$2MkhXi972aO3LVpylW6/9.i2s7A18OmPaJL5y2KS2/heXvHMQT4bm', NULL, NULL, NULL, NULL, 2, NULL),
(103, 'operacional03', 'operacional03@uneworld.com.br', '$2y$10$2MkhXi972aO3LVpylW6/9.i2s7A18OmPaJL5y2KS2/heXvHMQT4bm', NULL, NULL, NULL, NULL, 2, NULL),
(104, 'Financeiro03', 'financeiro03@uneworld.com.br', '$2y$10$2MkhXi972aO3LVpylW6/9.i2s7A18OmPaJL5y2KS2/heXvHMQT4bm', NULL, NULL, NULL, NULL, 2, NULL),
(107, NULL, 'teste@uneworld.com.br', '069ec8539349bef02dc1eee84a4f30fcee26213f', 'S', NULL, NULL, NULL, 2, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tipo` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `tipo`) VALUES
(1, 'Jonathan Silva', 'informatica@uneworld.com.br', '$2y$10$37S3iOylZDiRiLWm1Y4Lue/m/RrV9HrYEmIQu65tJNxMz15tQqlGq', 'mfiUGtXbID5KvhDQMo8MMEzFP1KjzFl7ecn2wgklJzer0lrwAzK2qfVJj703', '2017-06-21 18:44:43', '2017-06-21 18:44:43', NULL),
(2, 'Jonathan Cruz', 'jonathansc92@gmail.com', '$2y$10$0dLw/nIgFqSgsDti9CIdC.BnCaK0EhDIAsOOhChZAlpVR8M6sNXg.', 'jB3739HkjLbTIxfLdklIE8fedSy34HtcQ5g9GLeQzlo9hp2SXRsMgcRF2SAo', '2017-06-21 22:21:03', '2017-06-21 22:21:03', 1),
(3, 'admin', 'i@uneworld.com.br', '$2y$10$2MkhXi972aO3LVpylW6/9.i2s7A18OmPaJL5y2KS2/heXvHMQT4bm', NULL, '2017-06-23 23:52:09', '2017-06-23 23:52:09', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acesso`
--
ALTER TABLE `acesso`
  ADD PRIMARY KEY (`codacesso`),
  ADD KEY `acessso_grupos` (`codgrupo`);

--
-- Indexes for table `grupo`
--
ALTER TABLE `grupo`
  ADD PRIMARY KEY (`codgrupo`);

--
-- Indexes for table `grupoacesso`
--
ALTER TABLE `grupoacesso`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nivel`
--
ALTER TABLE `nivel`
  ADD PRIMARY KEY (`codnivel`);

--
-- Indexes for table `permissoes`
--
ALTER TABLE `permissoes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_permissoes_login1_idx` (`login_id`);

--
-- Indexes for table `senhas`
--
ALTER TABLE `senhas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `senhas_setor`
--
ALTER TABLE `senhas_setor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_senhas_setor_setor1_idx` (`setor_id`),
  ADD KEY `fk_senhas_setor_senhas1_idx` (`senhas_id`);

--
-- Indexes for table `senhauser`
--
ALTER TABLE `senhauser`
  ADD PRIMARY KEY (`codsenha`),
  ADD KEY `senha_acesso` (`codacesso`),
  ADD KEY `fk_senhauser_tipoacesso` (`tipo`);

--
-- Indexes for table `setor`
--
ALTER TABLE `setor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipoacesso`
--
ALTER TABLE `tipoacesso`
  ADD PRIMARY KEY (`codtipo`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acesso`
--
ALTER TABLE `acesso`
  MODIFY `codacesso` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;
--
-- AUTO_INCREMENT for table `grupo`
--
ALTER TABLE `grupo`
  MODIFY `codgrupo` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `nivel`
--
ALTER TABLE `nivel`
  MODIFY `codnivel` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `permissoes`
--
ALTER TABLE `permissoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `senhauser`
--
ALTER TABLE `senhauser`
  MODIFY `codsenha` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=700;
--
-- AUTO_INCREMENT for table `tipoacesso`
--
ALTER TABLE `tipoacesso`
  MODIFY `codtipo` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `acesso`
--
ALTER TABLE `acesso`
  ADD CONSTRAINT `acessso_grupos` FOREIGN KEY (`codgrupo`) REFERENCES `grupo` (`codgrupo`);

--
-- Limitadores para a tabela `permissoes`
--
ALTER TABLE `permissoes`
  ADD CONSTRAINT `fk_permissoes_login1` FOREIGN KEY (`login_id`) REFERENCES `login` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `senhas_setor`
--
ALTER TABLE `senhas_setor`
  ADD CONSTRAINT `fk_senhas_setor_senhas1` FOREIGN KEY (`senhas_id`) REFERENCES `senhas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_senhas_setor_setor1` FOREIGN KEY (`setor_id`) REFERENCES `setor` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `senhauser`
--
ALTER TABLE `senhauser`
  ADD CONSTRAINT `fk_senhauser_tipoacesso` FOREIGN KEY (`tipo`) REFERENCES `tipoacesso` (`codtipo`),
  ADD CONSTRAINT `senha_acesso` FOREIGN KEY (`codacesso`) REFERENCES `acesso` (`codacesso`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
