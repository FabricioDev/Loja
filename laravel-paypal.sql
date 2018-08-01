-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.34-MariaDB


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema laravelpaypal
--

CREATE DATABASE IF NOT EXISTS laravelpaypal;
USE laravelpaypal;

--
-- Definition of table `categoria`
--

DROP TABLE IF EXISTS `categoria`;
CREATE TABLE `categoria` (
  `idcategoria` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `condicao` tinyint(1) NOT NULL,
  PRIMARY KEY (`idcategoria`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categoria`
--

/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
INSERT INTO `categoria` (`idcategoria`,`nome`,`descricao`,`condicao`) VALUES 
 (1,'Rações','Aqui você encontra as melhores Rações.',1),
 (2,'Remédios','Remédios',1),
 (3,'PET SHOP','PET SHOP',1),
 (4,'UTENSÍLIOS','UTENSÍLIOS',1),
 (5,'LIMPEZA','LIMPEZA',1);
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;


--
-- Definition of table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `condition` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id`,`name`,`description`,`condition`) VALUES 
 (1,'Rações','Aqui você encontra as melhores rações.',1);
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;


--
-- Definition of table `detalhe_entrada`
--

DROP TABLE IF EXISTS `detalhe_entrada`;
CREATE TABLE `detalhe_entrada` (
  `iddetalhe_entrada` int(11) NOT NULL AUTO_INCREMENT,
  `identrada` int(11) NOT NULL,
  `idproduto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `preco_compra` decimal(9,2) DEFAULT NULL,
  `preco_venda` decimal(9,2) DEFAULT NULL,
  `detalhe_entradacol` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`iddetalhe_entrada`),
  KEY `fk_detalhe_entrada_idx` (`identrada`),
  KEY `fk_detalhe_produto_idx` (`idproduto`),
  CONSTRAINT `fk_detalhe_entrada` FOREIGN KEY (`identrada`) REFERENCES `dbsistemalaravel`.`entrada` (`identrada`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_detalhe_produto` FOREIGN KEY (`idproduto`) REFERENCES `dbsistemalaravel`.`produto` (`idproduto`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `detalhe_entrada`
--

/*!40000 ALTER TABLE `detalhe_entrada` DISABLE KEYS */;
/*!40000 ALTER TABLE `detalhe_entrada` ENABLE KEYS */;


--
-- Definition of table `detalhe_venda`
--

DROP TABLE IF EXISTS `detalhe_venda`;
CREATE TABLE `detalhe_venda` (
  `iddetalhe_venda` int(11) NOT NULL AUTO_INCREMENT,
  `idvenda` int(11) NOT NULL,
  `idproduto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `preco_venda` decimal(9,2) DEFAULT NULL,
  `desconto` decimal(9,2) DEFAULT NULL,
  PRIMARY KEY (`iddetalhe_venda`),
  KEY `fk_detalhe_venda_idx` (`idvenda`),
  KEY `fk_detalhe_produto_idx` (`idproduto`),
  CONSTRAINT `fk_detalhevenda_produto` FOREIGN KEY (`idproduto`) REFERENCES `dbsistemalaravel`.`produto` (`idproduto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_detalhevenda_venda` FOREIGN KEY (`idvenda`) REFERENCES `dbsistemalaravel`.`venda` (`idvenda`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `detalhe_venda`
--

/*!40000 ALTER TABLE `detalhe_venda` DISABLE KEYS */;
/*!40000 ALTER TABLE `detalhe_venda` ENABLE KEYS */;


--
-- Definition of table `entrada`
--

DROP TABLE IF EXISTS `entrada`;
CREATE TABLE `entrada` (
  `identrada` int(11) NOT NULL AUTO_INCREMENT,
  `idfornecedor` int(11) NOT NULL,
  `tipo_comprovante` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `serie_comprovante` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `num_comprovante` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_hora` datetime NOT NULL,
  `taxa` decimal(4,2) DEFAULT NULL,
  `estado` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`identrada`),
  KEY `fk_entrada_pessoa_idx` (`idfornecedor`),
  CONSTRAINT `fk_entrada_pessoa` FOREIGN KEY (`idfornecedor`) REFERENCES `dbsistemalaravel`.`pessoa` (`idpessoas`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `entrada`
--

/*!40000 ALTER TABLE `entrada` DISABLE KEYS */;
/*!40000 ALTER TABLE `entrada` ENABLE KEYS */;


--
-- Definition of table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`,`migration`,`batch`) VALUES 
 (4,'2014_10_12_000000_create_users_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;


--
-- Definition of table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;


--
-- Definition of table `pessoa`
--

DROP TABLE IF EXISTS `pessoa`;
CREATE TABLE `pessoa` (
  `idpessoas` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_pessoa` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_documento` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `num_doc` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `endereco` varchar(70) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`idpessoas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pessoa`
--

/*!40000 ALTER TABLE `pessoa` DISABLE KEYS */;
/*!40000 ALTER TABLE `pessoa` ENABLE KEYS */;


--
-- Definition of table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`id`,`name`,`description`,`image`,`price`,`created_at`,`updated_at`) VALUES 
 (1,'Nome do Produto - 201806221817375b2d6771f3496','Descrição do Produto - 201806221817375b2d6771f349d','Produto01.jpg',10.10,'2018-06-22 18:17:38','2018-06-22 18:17:38'),
 (2,'Nome do Produto - 201806221817385b2d67720fe51','Descrição do Produto - 201806221817385b2d67720fe5a','Produto02.jpg',10.10,'2018-06-22 18:17:38','2018-06-22 18:17:38'),
 (3,'Nome do Produto - 201806221817385b2d677216904','Descrição do Produto - 201806221817385b2d67721690c','Produto03.jpg',10.10,'2018-06-22 18:17:38','2018-06-22 18:17:38'),
 (4,'Nome do Produto - 201806221817385b2d67722406c','Descrição do Produto - 201806221817385b2d677224081','Produto04.jpg',10.10,'2018-06-22 18:17:38','2018-06-22 18:17:38');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;


--
-- Definition of table `produto`
--

DROP TABLE IF EXISTS `produto`;
CREATE TABLE `produto` (
  `idproduto` int(11) NOT NULL AUTO_INCREMENT,
  `idcategoria` int(11) NOT NULL,
  `codigo` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nome` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estoque` int(11) NOT NULL,
  `descricao` varchar(512) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagem` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estado` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`idproduto`),
  KEY `fk_produto_categoria_idx` (`idcategoria`),
  CONSTRAINT `fk_produto_categoria` FOREIGN KEY (`idcategoria`) REFERENCES `dbsistemalaravel`.`categoria` (`idcategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produto`
--

/*!40000 ALTER TABLE `produto` DISABLE KEYS */;
/*!40000 ALTER TABLE `produto` ENABLE KEYS */;


--
-- Definition of table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;


--
-- Definition of table `venda`
--

DROP TABLE IF EXISTS `venda`;
CREATE TABLE `venda` (
  `idvenda` int(11) NOT NULL AUTO_INCREMENT,
  `idcliente` int(11) NOT NULL,
  `tipo_cormprovante` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `serie` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `num_cormprovante` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_hora` datetime NOT NULL,
  `taxa` decimal(4,2) DEFAULT NULL,
  `total_venda` decimal(9,2) DEFAULT NULL,
  `estado` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`idvenda`),
  KEY `fk_venda_cliente_idx` (`idcliente`),
  CONSTRAINT `fk_venda_cliente` FOREIGN KEY (`idcliente`) REFERENCES `dbsistemalaravel`.`pessoa` (`idpessoas`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `venda`
--

/*!40000 ALTER TABLE `venda` DISABLE KEYS */;
/*!40000 ALTER TABLE `venda` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
