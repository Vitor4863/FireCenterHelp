CREATE DATABASE db_help;
USE db_help;

CREATE TABLE tb_usuario(
	id INT PRIMARY KEY AUTO_INCREMENT,
  	nome VARCHAR(40) NOT NULL,
  	dataNascimento VARCHAR(40) NOT NULL,
  	telefone VARCHAR(40) NOT NULL,
  	cpf VARCHAR(40) NOT NULL,
  	cep VARCHAR(40) NOT NULL,
  	numeroSeguranca VARCHAR(40),
  	deficiencia VARCHAR(40) NOT NULL,
  	sangue VARCHAR(40) NOT NULL,
  	alergia VARCHAR(40),
  	pcd BOOLEAN NOT NULL
);

CREATE TABLE tb_contaUsuario(
id INT PRIMARY KEY AUTO_INCREMENT,
email varchar(55)NOT NULL,
senha varchar(55)NOT NULL,
nome varchar(55) NOT NULL
);

drop database db_help;

SELECT * FROM tb_usuario;