-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11-Fev-2023 às 00:12
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `inhouse`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `anuncios`
--

CREATE TABLE `anuncios` (
  `anuncioID` int(11) NOT NULL,
  `ANusuarioID` int(11) NOT NULL,
  `imoveisDiaria` varchar(20) NOT NULL,
  `imoveisDescricao` varchar(150) NOT NULL,
  `imoveisCep` varchar(8) NOT NULL,
  `imoveisRua` varchar(45) NOT NULL,
  `imoveisBairro` varchar(45) NOT NULL,
  `imoveisCidade` varchar(45) NOT NULL,
  `imoveisNumero` varchar(45) NOT NULL,
  `imoveisQuarto` varchar(30) NOT NULL,
  `imoveisBanheiro` varchar(45) NOT NULL,
  `imoveisCozinha` varchar(45) NOT NULL,
  `imoveisDiferencial` varchar(45) NOT NULL,
  `AnuncioFavorito` tinyint(4) NOT NULL,
  `mednota` decimal(2,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `anuncios`
--

INSERT INTO `anuncios` (`anuncioID`, `ANusuarioID`, `imoveisDiaria`, `imoveisDescricao`, `imoveisCep`, `imoveisRua`, `imoveisBairro`, `imoveisCidade`, `imoveisNumero`, `imoveisQuarto`, `imoveisBanheiro`, `imoveisCozinha`, `imoveisDiferencial`, `AnuncioFavorito`, `mednota`) VALUES
(1, 1, '100', 'Casa para final de semana', '1999999', 'Rua sete de setembro', 'Vila napoleão', 'São Paulo', '40', '1', '2', '1', 'Imovel bom para passar com a familia', 1, '5'),
(2, 1, '200', 'Casa para passar as ferias em familia', '19022222', 'Rua nove de novembro', 'Bairro vila madalena', 'Santos-SP', '200', '2', '2', '1', 'Casa com um perfil bom para a familia', 0, '5');

-- --------------------------------------------------------

--
-- Estrutura da tabela `anuncio_comentarios`
--

CREATE TABLE `anuncio_comentarios` (
  `comentarioID` int(11) NOT NULL,
  `anuncioID` int(11) NOT NULL,
  `ANusuarioID` int(11) NOT NULL,
  `LCusuarioID` int(11) NOT NULL,
  `comentarioDescricao` varchar(255) NOT NULL,
  `avalnota` int(11) DEFAULT NULL,
  `comentatariodata` date DEFAULT NULL,
  `comentariohora` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `anuncio_imagens`
--

CREATE TABLE `anuncio_imagens` (
  `imagemID` int(11) NOT NULL,
  `anuncioID` int(11) NOT NULL,
  `usuarioID` int(11) NOT NULL,
  `imoveis_img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `anuncio_imagens`
--

INSERT INTO `anuncio_imagens` (`imagemID`, `anuncioID`, `usuarioID`, `imoveis_img`) VALUES
(1, 1, 1, './img/img1.jpg'),
(2, 1, 1, './img/img2.jpg'),
(3, 1, 1, './img/img3.jpg'),
(4, 2, 1, './img/img4.jpg'),
(5, 2, 1, './img/img5.jpg'),
(6, 2, 1, './img/img6.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagem_chat`
--

CREATE TABLE `mensagem_chat` (
  `mensagemID` int(11) NOT NULL,
  `anuncioID` int(11) NOT NULL,
  `ANUsuarioID` int(11) NOT NULL,
  `LCusuarioID` int(11) NOT NULL,
  `mensagemDescricao` varchar(255) NOT NULL,
  `mensagemDate` date DEFAULT NULL,
  `mensagemHora` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `usuarioID` int(11) NOT NULL,
  `usuarioNome` varchar(100) NOT NULL,
  `usuarioEmail` varchar(100) NOT NULL,
  `usuarioSenha` varchar(250) NOT NULL,
  `usuarioCPF` varchar(11) DEFAULT NULL,
  `usuarioTelefone` varchar(11) DEFAULT NULL,
  `nickname` varchar(15) DEFAULT NULL,
  `administrador` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`usuarioID`, `usuarioNome`, `usuarioEmail`, `usuarioSenha`, `usuarioCPF`, `usuarioTelefone`, `nickname`, `administrador`) VALUES
(1, 'Juca teste', 'teste123@gmail.com', '1234', NULL, NULL, NULL, 0),
(2, 'juca teste2', 'juca@gmail.com', '1234', NULL, NULL, NULL, 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `anuncios`
--
ALTER TABLE `anuncios`
  ADD PRIMARY KEY (`anuncioID`,`ANusuarioID`),
  ADD KEY `fk_Anuncios_usuario1_idx` (`ANusuarioID`);

--
-- Índices para tabela `anuncio_comentarios`
--
ALTER TABLE `anuncio_comentarios`
  ADD PRIMARY KEY (`comentarioID`,`anuncioID`,`ANusuarioID`,`LCusuarioID`),
  ADD KEY `fk_anuncio_comentarios_usuario1_idx` (`LCusuarioID`),
  ADD KEY `fk_anuncio_comentarios_Anuncios1_idx` (`anuncioID`,`ANusuarioID`);

--
-- Índices para tabela `anuncio_imagens`
--
ALTER TABLE `anuncio_imagens`
  ADD PRIMARY KEY (`imagemID`,`anuncioID`,`usuarioID`),
  ADD KEY `fk_anuncio_imagens_Anuncios1_idx` (`anuncioID`,`usuarioID`);

--
-- Índices para tabela `mensagem_chat`
--
ALTER TABLE `mensagem_chat`
  ADD PRIMARY KEY (`mensagemID`,`anuncioID`,`ANUsuarioID`,`LCusuarioID`),
  ADD KEY `fk_mensagem_chat_Anuncios1_idx` (`anuncioID`,`ANUsuarioID`),
  ADD KEY `fk_mensagem_chat_usuario1_idx` (`LCusuarioID`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuarioID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `anuncios`
--
ALTER TABLE `anuncios`
  MODIFY `anuncioID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `anuncio_comentarios`
--
ALTER TABLE `anuncio_comentarios`
  MODIFY `comentarioID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `anuncio_imagens`
--
ALTER TABLE `anuncio_imagens`
  MODIFY `imagemID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `mensagem_chat`
--
ALTER TABLE `mensagem_chat`
  MODIFY `mensagemID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usuarioID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `anuncios`
--
ALTER TABLE `anuncios`
  ADD CONSTRAINT `fk_Anuncios_usuario1` FOREIGN KEY (`ANusuarioID`) REFERENCES `usuario` (`usuarioID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `anuncio_comentarios`
--
ALTER TABLE `anuncio_comentarios`
  ADD CONSTRAINT `fk_anuncio_comentarios_Anuncios1` FOREIGN KEY (`anuncioID`,`ANusuarioID`) REFERENCES `anuncios` (`anuncioID`, `ANusuarioID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_anuncio_comentarios_usuario1` FOREIGN KEY (`LCusuarioID`) REFERENCES `usuario` (`usuarioID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `anuncio_imagens`
--
ALTER TABLE `anuncio_imagens`
  ADD CONSTRAINT `fk_anuncio_imagens_Anuncios1` FOREIGN KEY (`anuncioID`) REFERENCES `anuncios` (`anuncioID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `mensagem_chat`
--
ALTER TABLE `mensagem_chat`
  ADD CONSTRAINT `fk_mensagem_chat_Anuncios1` FOREIGN KEY (`anuncioID`) REFERENCES `anuncios` (`anuncioID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_mensagem_chat_usuario1` FOREIGN KEY (`LCusuarioID`) REFERENCES `usuario` (`usuarioID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
