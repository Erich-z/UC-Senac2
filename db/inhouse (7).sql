-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Fev-2023 às 23:44
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
(25, 2, '500', 'ssssss', '4687782', 'TESTESTESTE', 'TESTE', 'São Paulo', '30', '3', '3', '3', '3', 0, '0');

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
(26, 25, 2, './img/93aaf293bb5915e9bb0054fb8d594e7b.jpg'),
(27, 25, 2, './img/279f246d7a4f3c644e221d7d6dfdf5b6.jpg'),
(28, 25, 2, './img/0a5ab8c5027294db972e8e5ed81af0dd.jpg'),
(29, 25, 2, './img/4485240e655e2dc8c54d6659d2100b6d.jpg');

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
  `administrador` tinyint(4) NOT NULL,
  `usuario_foto` varchar(255) DEFAULT './img/images.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`usuarioID`, `usuarioNome`, `usuarioEmail`, `usuarioSenha`, `usuarioCPF`, `usuarioTelefone`, `nickname`, `administrador`, `usuario_foto`) VALUES
(1, 'Juca teste', 'teste@gmail.com', '1234', '444444444', '777777777', NULL, 0, './img/img1.jpg'),
(2, 'Joao teste2', 'juca@gmail.com', '1234', '33333333333', '12223333', NULL, 0, './img/images.png'),
(3, 'Jorge jorge', 'jorge@gmail.com', '12345', '33322222222', '99999999999', NULL, 0, './img/images.png');

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
  MODIFY `anuncioID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de tabela `anuncio_comentarios`
--
ALTER TABLE `anuncio_comentarios`
  MODIFY `comentarioID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `anuncio_imagens`
--
ALTER TABLE `anuncio_imagens`
  MODIFY `imagemID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de tabela `mensagem_chat`
--
ALTER TABLE `mensagem_chat`
  MODIFY `mensagemID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usuarioID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
