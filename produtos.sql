-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03-Jan-2020 às 19:56
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
-- Banco de dados: `restaurante`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `categoria_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `nome_produto` varchar(220) NOT NULL,
  `valor` varchar(220) NOT NULL,
  `imagem` varchar(220) NOT NULL,
  `descricao` text NOT NULL,
  `created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`categoria_id`, `id`, `nome_produto`, `valor`, `imagem`, `descricao`, `created`) VALUES
(1, 1, 'Tequila\r\n', '15', 'bebida1.png\r\n', 'A história da Tequila. Tequila é uma bebida alcoól...', '2019-12-30'),
(1, 2, 'Paloma', '20', 'bebida2.png', 'Este é outro drink famoso cujo principal ingredien...', '2019-12-30'),
(2, 3, 'Nachos', '20', 'entrada1.jpg', 'Nachos são uma comida popular nos Estados Unidos e...', '2019-12-30'),
(3, 4, 'Guacamole', '20', 'prato3.jpg', 'O guacamole é uma iguaria típica da culinária do M.', '2019-12-30'),
(4, 5, 'Petit Gâteau', '20', 'doce4.png', 'A denominação “petit gâteau\" é possivelmente uma i...', '2019-12-30'),
(4, 6, 'Brigadeiro', '20', 'doce1.jpg', 'O brigadeiro surgiu na década de 1940 em uma campanha com o intuito de promover a eleição do Brigadeiro Eduardo Gomes à presidência da República pelos moradores do Pacaembu em São Paulo.', '2019-12-30'),
(1, 7, 'Sangria', '20', 'bebida3.png', 'Mais do que uma bebida, a sangria é uma tradição. A Sangria tem como base o vinho tinto seco, que remete ao “Sangre del Toro”', '2019-12-30'),
(1, 12, 'bebida1', '10', 'bebida4.png', 'teste', '2020-01-03'),
(1, 13, 'bebida1', '10', 'bebida1.png', 'teste10bebida', '2020-01-03'),
(2, 14, 'entrada1', '10', 'entrada4.jpg', 'teste10entrada', '2020-01-03'),
(4, 15, 'sobremesa4', '10', 'doce1.jpg', 'teste10sobremesa', '2020-01-03');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `relacao` (`categoria_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `relacao` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`categoria_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
