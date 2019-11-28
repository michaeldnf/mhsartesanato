-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Nov-2019 às 18:15
-- Versão do servidor: 10.4.8-MariaDB
-- versão do PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `mhsartesanato`
--
CREATE DATABASE IF NOT EXISTS `mhsartesanato` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `mhsartesanato`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_categorias`
--

CREATE TABLE `tb_categorias` (
  `id_categoria` int(11) NOT NULL,
  `nome_categoria` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_categorias`
--

INSERT INTO `tb_categorias` (`id_categoria`, `nome_categoria`) VALUES
(1, 'bonecas'),
(2, 'crochês'),
(3, 'brincos');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_produtos`
--

CREATE TABLE `tb_produtos` (
  `id_produto` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `descricao` varchar(150) DEFAULT NULL,
  `preco` float DEFAULT NULL,
  `link_img` varchar(60) DEFAULT NULL,
  `categoria_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_produtos`
--

INSERT INTO `tb_produtos` (`id_produto`, `nome`, `descricao`, `preco`, `link_img`, `categoria_id`) VALUES
(1, 'Boneca Sophie', 'Boneca feito com crochê de linha fina com detalhes laranjas carregando cesta de frutas. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspe', 150.99, 'boneca-sophie', 1),
(2, 'Boneca Marie', 'Boneca feito com crochê de linha fina com detalhes marron carregando ursinho. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse cur', 180.59, 'boneca-marie', 1),
(4, 'Brinco Amarelo', 'Brinco feito de crochê de linha fina na cor amalera.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspe', 199.9, 'brinco-amarelo', 3),
(5, 'Galinha Artesanal', 'Galinha artesanal colorida feita em gesso.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspe', 220.6, 'galinha-artesanal', 1),
(6, 'Kit Crochê Colorido', 'Kit crochê colorido para chá, contém 10 peças. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspe', 299.99, 'kit-croche-colorido', 2),
(9, 'Kit Crochê Azul', 'Kit crochê azul para chá, contém 4 peças. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspe', 185.25, 'kit-croche-azul', 2),
(10, 'Kit Crochê Cozinha', 'Kit crochê vermelho para cozinha, contém 2 peças. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspe', 160, 'kit-croche-cozinha-vermelho', 2),
(12, 'Brinco Artesanal Dourado', 'Brinco artesanal com bolinhas douradas e penas vermelha. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspe', 135.6, 'brinco-artesanal-dourado', 3),
(13, 'Brinco Artesanal com Pedras', 'Brinco artesanal com bolinhas coloridas e uma pedra amarela no centro. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspe', 200, 'brinco-artesanal-pedras', 3);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_categorias`
--
ALTER TABLE `tb_categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Índices para tabela `tb_produtos`
--
ALTER TABLE `tb_produtos`
  ADD PRIMARY KEY (`id_produto`),
  ADD KEY `FK__tb_categorias` (`categoria_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_categorias`
--
ALTER TABLE `tb_categorias`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tb_produtos`
--
ALTER TABLE `tb_produtos`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tb_produtos`
--
ALTER TABLE `tb_produtos`
  ADD CONSTRAINT `FK__tb_categorias` FOREIGN KEY (`categoria_id`) REFERENCES `tb_categorias` (`id_categoria`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
