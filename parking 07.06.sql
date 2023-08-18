-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Jun-2023 às 00:08
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
-- Banco de dados: `parking`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `logins`
--

CREATE TABLE `logins` (
  `login_id` int(11) NOT NULL,
  `login_email` varchar(60) NOT NULL,
  `login_senha` varchar(30) NOT NULL,
  `login_perfil` varchar(20) NOT NULL,
  `login_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `logins`
--

INSERT INTO `logins` (`login_id`, `login_email`, `login_senha`, `login_perfil`, `login_status`) VALUES
(1, 'admin@admin', '123', 'admin', 0),
(2, 'colab@colab', '123', 'colab', 0),
(3, 'colab2@colab', '123', 'colab', 0),
(4, 'colab3@colab', '123', 'colab', 0),
(5, 'admin2@admin', '123', 'admin', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `movimentacoes`
--

CREATE TABLE `movimentacoes` (
  `mov_id` int(11) NOT NULL,
  `mov_data_entrada` date NOT NULL,
  `mov_hora_entrada` time NOT NULL,
  `mov_placa` varchar(8) NOT NULL,
  `mov_data_saida` date NOT NULL,
  `mov_hora_saida` time NOT NULL,
  `mov_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `movimentacoes`
--

INSERT INTO `movimentacoes` (`mov_id`, `mov_data_entrada`, `mov_hora_entrada`, `mov_placa`, `mov_data_saida`, `mov_hora_saida`, `mov_status`) VALUES
(10, '2023-05-25', '19:30:00', 'novo tes', '2023-05-25', '19:38:00', 0),
(11, '2023-05-25', '19:41:00', '1', '2023-05-25', '20:03:00', 0),
(12, '2023-05-25', '19:48:00', '22', '0000-00-00', '00:00:00', 0),
(13, '2023-05-26', '20:51:00', 'a', '2023-05-29', '20:15:00', 0),
(14, '2023-05-26', '20:54:00', 'a', '2023-05-29', '20:17:00', 0),
(15, '2023-05-26', '20:54:00', 'a', '2023-05-29', '20:25:43', 0),
(16, '2023-05-26', '20:54:00', 'a', '2023-05-29', '20:25:59', 0),
(17, '2023-05-26', '20:54:00', 'a', '2023-05-29', '20:34:18', 0),
(18, '2023-05-26', '20:54:00', 'a', '2023-05-28', '12:45:40', 0),
(19, '2023-05-26', '20:54:00', 'a', '2023-05-29', '21:17:51', 0),
(20, '2023-05-26', '23:05:00', 'a', '2023-06-01', '19:39:26', 0),
(21, '2023-05-26', '23:05:00', 'a', '2023-06-07', '12:58:40', 0),
(22, '2023-05-26', '23:05:00', 'a', '2023-06-07', '13:24:03', 0),
(23, '2023-05-26', '23:05:00', 'a', '2023-06-07', '13:25:44', 0),
(24, '2023-05-26', '23:05:00', 'a', '2023-06-07', '13:25:48', 0),
(25, '2023-05-26', '23:05:00', 'a', '0000-00-00', '00:00:00', 1),
(26, '2023-05-29', '20:33:15', '123', '0000-00-00', '00:00:00', 1),
(27, '2023-05-29', '21:55:32', '1', '0000-00-00', '00:00:00', 1),
(28, '2023-06-01', '19:37:51', 'hduwh', '0000-00-00', '00:00:00', 1),
(29, '2023-06-01', '19:37:51', 'hduwh', '0000-00-00', '00:00:00', 1),
(30, '2023-06-04', '12:09:55', '1', '0000-00-00', '00:00:00', 1),
(31, '2023-06-04', '12:10:44', 'a', '0000-00-00', '00:00:00', 1),
(32, '2023-06-04', '12:15:21', '2', '0000-00-00', '00:00:00', 1),
(33, '2023-06-04', '12:15:29', '3', '0000-00-00', '00:00:00', 1),
(34, '2023-06-04', '12:15:34', '4', '0000-00-00', '00:00:00', 1),
(35, '2023-06-04', '12:15:38', '5', '0000-00-00', '00:00:00', 1),
(36, '2023-06-04', '12:15:44', '6', '0000-00-00', '00:00:00', 1),
(37, '2023-06-04', '12:15:48', '7', '0000-00-00', '00:00:00', 1),
(38, '2023-06-04', '12:15:52', '8', '0000-00-00', '00:00:00', 1),
(39, '2023-06-04', '12:15:56', '9', '0000-00-00', '00:00:00', 1),
(40, '2023-06-04', '12:16:01', '10', '0000-00-00', '00:00:00', 1),
(41, '2023-06-04', '12:16:05', '11', '0000-00-00', '00:00:00', 1),
(42, '2023-06-04', '12:16:10', '12', '0000-00-00', '00:00:00', 1),
(43, '2023-06-04', '12:16:16', '13', '2023-06-04', '12:31:49', 0),
(44, '2023-06-04', '12:16:20', '14', '2023-06-04', '12:27:25', 0),
(45, '2023-06-04', '12:16:24', '15', '2023-06-04', '12:27:00', 0),
(46, '0000-00-00', '00:00:00', '', '2023-06-04', '12:26:48', 0),
(47, '2023-06-04', '12:27:29', '1', '0000-00-00', '00:00:00', 1),
(48, '2023-06-04', '12:47:48', '1', '2023-06-04', '12:50:05', 0),
(49, '2023-06-05', '22:00:48', '151', '2023-06-05', '22:01:52', 0),
(50, '2023-06-06', '16:15:52', 'a', '0000-00-00', '00:00:00', 1),
(51, '2023-06-07', '13:00:44', '', '2023-06-07', '13:01:00', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `perfil`
--

CREATE TABLE `perfil` (
  `perfil_id` int(11) NOT NULL,
  `perfil_nome` varchar(40) NOT NULL,
  `perfil_sobrenome` varchar(40) NOT NULL,
  `perfil_cpf` varchar(11) NOT NULL,
  `perfil_data` date NOT NULL,
  `perfil_telefone` varchar(15) NOT NULL,
  `perfil_cep` varchar(9) NOT NULL,
  `perfil_logradouro` varchar(60) NOT NULL,
  `perfil_numero` int(11) NOT NULL,
  `perfil_bairro` varchar(30) NOT NULL,
  `perfil_complemento` varchar(15) NOT NULL,
  `perfil_municipio` varchar(30) NOT NULL,
  `perfil_estado` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `perfil`
--

INSERT INTO `perfil` (`perfil_id`, `perfil_nome`, `perfil_sobrenome`, `perfil_cpf`, `perfil_data`, `perfil_telefone`, `perfil_cep`, `perfil_logradouro`, `perfil_numero`, `perfil_bairro`, `perfil_complemento`, `perfil_municipio`, `perfil_estado`) VALUES
(1, 'João', 'da Silva', '12345678910', '2000-05-25', '1138639000', '13976212', 'Rua Mário Baldassim', 393, 'Loteamento Della Rocha', '', 'Itapira', 'SP'),
(2, 'João', 'da Silva', '12345678910', '2000-05-25', '', '13976213', 'Rua Abelardo Lauri', 393, 'Loteamento Della Rocha', '', 'Itapira', 'SP'),
(3, 'João', 'da Silva', '12345678910', '2000-05-25', '', '13976213', 'Rua Abelardo Lauri', 393, 'Loteamento Della Rocha', '', 'Itapira', 'SP'),
(4, 'José', 'das Couves', '12345678990', '2023-06-05', '(11) 99898-9898', '13976212', 'Rua Mário Baldassim', 20, 'Loteamento Della Rocha', '', 'Itapira', 'SP');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vagas`
--

CREATE TABLE `vagas` (
  `vaga_id` int(11) NOT NULL,
  `vaga_letra` varchar(1) NOT NULL,
  `vaga_num` int(2) NOT NULL,
  `vaga_geo_lat` varchar(40) NOT NULL,
  `vaga_geo_lgn` varchar(40) NOT NULL,
  `vaga_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `vagas`
--

INSERT INTO `vagas` (`vaga_id`, `vaga_letra`, `vaga_num`, `vaga_geo_lat`, `vaga_geo_lgn`, `vaga_status`) VALUES
(1, 'A', 1, '-22.436043', '-46.823690', 0),
(2, 'A', 2, '-22.436012', '-46.823715', 0),
(3, 'A', 3, '-22.435975', '-46.823745', 0),
(4, 'A', 4, '-22.435955', '-46.823763', 0),
(5, 'A', 5, '-22.435931', '-46.823789', 0),
(6, 'A', 6, '-22.435910', '-46.823810', 0),
(7, 'A', 7, '-22.435888', '-46.823831', 0),
(8, 'A', 8, '-22.435863', '-46.823855', 0),
(9, 'B', 1, '-22.436012', '-46.823600', 0),
(10, 'B', 2, '-22.435988', '-46.823625', 0),
(11, 'B', 3, '-22.435965', '-46.823644', 0),
(12, 'B', 4, '-22.435944', '-46.823668', 0),
(13, 'B', 5, '-22.435924', '-46.823689', 0),
(14, 'B', 6, '-22.435902', '-46.823711', 0),
(15, 'B', 7, '-22.435879', '-46.823734', 0),
(16, 'B', 8, '-22.435856', '-46.823755', 0),
(17, 'C', 1, '-22.435990', '-46.823581', 0),
(18, 'C', 2, '-22.435968', '-46.823602', 0),
(19, 'C', 3, '-22.435946', '-46.823626', 0),
(20, 'C', 4, '-22.435919', '-46.823645', 0),
(21, 'C', 5, '-22.435902', '-46.823669', 0),
(22, 'C', 6, '-22.435880', '-46.823696', 0),
(23, 'C', 7, '-22.435858', '-46.823712', 0),
(24, 'C', 8, '-22.435836', '-46.823733', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `vgstatus`
--

CREATE TABLE `vgstatus` (
  `vgstatus_id` int(11) NOT NULL,
  `vgstatus_tipo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `vgstatus`
--

INSERT INTO `vgstatus` (`vgstatus_id`, `vgstatus_tipo`) VALUES
(0, 'Ativa'),
(1, 'Pausada');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `logins`
--
ALTER TABLE `logins`
  ADD PRIMARY KEY (`login_id`);

--
-- Índices para tabela `movimentacoes`
--
ALTER TABLE `movimentacoes`
  ADD PRIMARY KEY (`mov_id`);

--
-- Índices para tabela `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`perfil_id`);

--
-- Índices para tabela `vagas`
--
ALTER TABLE `vagas`
  ADD PRIMARY KEY (`vaga_id`);

--
-- Índices para tabela `vgstatus`
--
ALTER TABLE `vgstatus`
  ADD PRIMARY KEY (`vgstatus_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `logins`
--
ALTER TABLE `logins`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `movimentacoes`
--
ALTER TABLE `movimentacoes`
  MODIFY `mov_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT de tabela `perfil`
--
ALTER TABLE `perfil`
  MODIFY `perfil_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `vagas`
--
ALTER TABLE `vagas`
  MODIFY `vaga_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de tabela `vgstatus`
--
ALTER TABLE `vgstatus`
  MODIFY `vgstatus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
