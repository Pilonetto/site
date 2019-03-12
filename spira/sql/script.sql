-- Created by Vertabelo (http://vertabelo.com)
-- Last modification date: 2019-03-12 19:57:27.55

-- tables
-- Table: cidades
CREATE TABLE cidades (
    id_cidade int NOT NULL AUTO_INCREMENT,
    nome varchar(30) NOT NULL,
    UF varchar(2) NOT NULL,
    pais varchar(20) NOT NULL,
    CONSTRAINT cidades_pk PRIMARY KEY (id_cidade)
);

-- Table: clientes
CREATE TABLE clientes (
    id_cliente int NOT NULL AUTO_INCREMENT,
    nome varchar(50) NOT NULL,
    id_distribuidor int NOT NULL,
    CONSTRAINT clientes_pk PRIMARY KEY (id_cliente)
);

-- Table: distribuidores
CREATE TABLE distribuidores (
    id_distribuidor int NOT NULL AUTO_INCREMENT,
    nome_distribuidor varchar(50) NOT NULL,
    cpf_cnpj varchar(25) NOT NULL,
    valor_repasse decimal(2,2) NOT NULL,
    ativo int NOT NULL,
    id_cidade int NOT NULL,
    CONSTRAINT distribuidores_pk PRIMARY KEY (id_distribuidor)
) COMMENT 'tabela reservada para armazenar os dados de todos os distribuidores do sistema SPIRA
';

-- Table: usuarios
CREATE TABLE usuarios (
    id_usuario int NOT NULL AUTO_INCREMENT,
    nome varchar(15) NOT NULL,
    login varchar(12) NOT NULL,
    senha varchar(255) NOT NULL,
    id_cliente int NOT NULL,
    CONSTRAINT usuarios_pk PRIMARY KEY (id_usuario)
);

-- foreign keys
-- Reference: id_cidades (table: distribuidores)
ALTER TABLE distribuidores ADD CONSTRAINT id_cidades FOREIGN KEY id_cidades (id_cidade)
    REFERENCES cidades (id_cidade);

-- Reference: id_clientes (table: usuarios)
ALTER TABLE usuarios ADD CONSTRAINT id_clientes FOREIGN KEY id_clientes (id_cliente)
    REFERENCES clientes (id_cliente);

-- Reference: id_distribuidores (table: clientes)
ALTER TABLE clientes ADD CONSTRAINT id_distribuidores FOREIGN KEY id_distribuidores (id_distribuidor)
    REFERENCES distribuidores (id_distribuidor);


INSERT INTO `cidades` (`nome`, `UF`, `pais`) VALUES 
	('Pato Branco', 'PR', 'Brasil'), 
	('São Paulo', 'SP', 'Brasil');

INSERT INTO `distribuidores` (`nome_distribuidor`, `cpf_cnpj`, `valor_repasse`, `ativo`, `id_cidade`) VALUES
	 ('PB Data Science', '07163243936', '20', '1', '1');

INSERT INTO `clientes` (`nome`, `id_distribuidor`) VALUES 
	( 'Pato Concreto Materiais de Contrução', '1');

INSERT INTO `usuarios` ( `nome`, `login`, `senha`, `id_cliente`) VALUES 
	('Marlon Pilonetto', 'marlon', 'asd123', '1');

-- End of file.
