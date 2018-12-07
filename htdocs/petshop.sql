/*
Navicat MySQL Data Transfer

Source Server         : Local
Source Server Version : 50513
Source Host           : localhost:3306
Source Database       : petshop

Target Server Type    : MYSQL
Target Server Version : 50513
File Encoding         : 65001

Date: 2018-11-25 17:36:06
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for mensagens
-- ----------------------------
DROP TABLE IF EXISTS `mensagens`;
CREATE TABLE `mensagens` (
  `idmensagem` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(100) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Telefone` varchar(100) DEFAULT NULL,
  `Mensagem` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`idmensagem`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of mensagens
-- ----------------------------
INSERT INTO `mensagens` VALUES ('1', 'allan', 'teste@teste.com', '85994022851', 'asddadadasdasdasdasdas');

-- ----------------------------
-- Table structure for pedidos
-- ----------------------------
DROP TABLE IF EXISTS `pedidos`;
CREATE TABLE `pedidos` (
  `idcarrinho` int(11) NOT NULL AUTO_INCREMENT,
  `idproduto` int(11) DEFAULT NULL,
  `nome` varchar(150) DEFAULT NULL,
  `preco` double(10,2) DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `sessao` text,
  PRIMARY KEY (`idcarrinho`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of pedidos
-- ----------------------------

-- ----------------------------
-- Table structure for produtos
-- ----------------------------
DROP TABLE IF EXISTS `produtos`;
CREATE TABLE `produtos` (
  `idproduto` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(100) DEFAULT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `abreviacao` varchar(255) DEFAULT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `quantidade` varchar(10) DEFAULT '100',
  `preco` decimal(10,2) DEFAULT NULL,
  `imagem` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`idproduto`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of produtos
-- ----------------------------
INSERT INTO `produtos` VALUES ('1', 'Remedio', 'Bravecto Cachorro 2-4.5kg', 'Bravecto 2-4.5Kg', 'Remedio para Cachorros de Portes X', '100', '59.99', 'brave2-4.5kg.png');
INSERT INTO `produtos` VALUES ('2', 'Remedio', 'Bravecto Cachorro 4.5-10kg', 'Bravecto 4.5-10Kg', 'Remedio para Cachorros de Portes X', '100', '79.99', 'brave4.5-10kg.png');
INSERT INTO `produtos` VALUES ('3', 'Remedio', 'Bravecto Cachorro 10-20kg', 'Bravecto 10-20Kg', 'Remedio para Cachorros de Portes X', '100', '129.99', 'brave10-20kg.png');
INSERT INTO `produtos` VALUES ('4', 'Remedio', 'Bravecto Cachorro 20-40kg', 'Bravecto 20-40Kg', 'Remedio para Cachorros de Portes X', '100', '145.99', 'brave20-40kg.png');
INSERT INTO `produtos` VALUES ('5', 'Remedio', 'Bravecto Cachorro 40-56kg', 'Bravecto 40-56Kg', 'Remedio para Cachorros de Portes X', '100', '199.99', 'brave40-56kg.png');
INSERT INTO `produtos` VALUES ('6', 'Racao', 'Premier Golden Special Caes Adultos', 'Premier Gold', 'Racao Premium especial para Caes de porte medio em idade adulta', '100', '138.90', 'rachaopremiere.png');
INSERT INTO `produtos` VALUES ('7', 'Racao', 'Premier Pet Formula Caes Adultos Racas Pequenas', 'Premier Pet', 'Indicada para caes adultos de raca pequena', '100', '206.99', 'racao_prem_formula.png');
INSERT INTO `produtos` VALUES ('8', 'Racao', 'Premier Golden Formula Caes Filhotes', 'Premier Golden', 'Alimento Premium Especial desenvolvido para caes filhotes', '100', '119.90', 'golden_formula.png');
INSERT INTO `produtos` VALUES ('9', 'Racao', 'Premier Golden Formula Caes Filhotes', 'Premier Golden', 'Alimento Premium Especial desenvolvido para caes filhotes', '100', '119.90', 'golden_formula.png');
INSERT INTO `produtos` VALUES ('10', 'Racao', 'Premier Pet Formula Caes Adultos Racas Pequenas', 'Premier Pet', 'Indicada para caes adultos de raca pequena', '100', '138.90', 'racao_prem_formula.png');

-- ----------------------------
-- Table structure for upload
-- ----------------------------
DROP TABLE IF EXISTS `upload`;
CREATE TABLE `upload` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(50) NOT NULL,
  `Tipo` enum('pasta','img','file') NOT NULL,
  `Arquivo` varchar(200) NOT NULL,
  `Posicao` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of upload
-- ----------------------------

-- ----------------------------
-- Table structure for usuarios
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(20) DEFAULT NULL,
  `Login` varchar(20) NOT NULL,
  `Senha` varchar(40) NOT NULL,
  `Nivel` enum('1','2','3') DEFAULT NULL COMMENT '1 = admin, 2=moderador, 3=poster',
  `Email` varchar(150) DEFAULT NULL,
  `Colunas` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of usuarios
-- ----------------------------
INSERT INTO `usuarios` VALUES ('1', 'Ademir da Silva', '123', '202cb962ac59075b964b07152d234b70', '2', 'ademir@ademir.com', '0');
INSERT INTO `usuarios` VALUES ('2', 'teste', 'teste', '698dc19d489c4e4db73e28a713eab07b', '1', 'teste@teste.com', '0');

-- ----------------------------
-- Table structure for usuarios1
-- ----------------------------
DROP TABLE IF EXISTS `usuarios1`;
CREATE TABLE `usuarios1` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(100) DEFAULT NULL,
  `senha` varchar(20) DEFAULT NULL,
  `permissao` int(11) DEFAULT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of usuarios1
-- ----------------------------
INSERT INTO `usuarios1` VALUES ('1', 'admin', 'admin', '1');
