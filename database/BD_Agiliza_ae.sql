  CREATE TABLE administrador(
	cod_gestor INT PRIMARY KEY AUTO_INCREMENT,
	cpf VARCHAR(30) UNIQUE,
	telefone VARCHAR(45) NOT NULL,
	email VARCHAR(50)
);


CREATE TABLE restaurantes (
  cod_restaurantes INT PRIMARY KEY AUTO_INCREMENT,
  cod_gestor INT UNIQUE,
  nm_restaurante VARCHAR(30) NOT NULL,
  cnpj VARCHAR(30) UNIQUE,
  ds_endereco VARCHAR(45) NOT NULL
   );
   
CREATE TABLE funcionamento (
  cod_funcionamento INT PRIMARY KEY AUTO_INCREMENT,
  cod_restaurantes INT UNIQUE,
  ds_diasemana VARCHAR(30) NOT NULL,
  hr_inicio VARCHAR(30) NOT NULL,
  hr_final VARCHAR(45) NOT NULL
   );
   
CREATE TABLE produto (
  cod_produto INT PRIMARY KEY AUTO_INCREMENT,
  cod_restaurantes INT UNIQUE,
  nm_produto VARCHAR(30) NOT NULL,
  vl_produto FLOAT(30) NOT NULL
 );
 
 CREATE TABLE categoria (
  cod_categoria INT PRIMARY KEY AUTO_INCREMENT,
  cod_produto INT UNIQUE,
  nm_categoria VARCHAR(30) NOT NULL
 );