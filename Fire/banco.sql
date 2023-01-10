CREATE DATABASE db_help;
USE db_help;

CREATE TABLE tb_usuario(
	id INT PRIMARY KEY AUTO_INCREMENT,
  	nome VARCHAR(40) NOT NULL,
    email varchar(40) NOT NULL,
  	dataNascimento date,
  	telefone VARCHAR(40) NOT NULL,
  	cpf VARCHAR(40) NOT NULL,
  	cep VARCHAR(40) NOT NULL,
  	numeroSeguranca VARCHAR(40),
  	deficiencia VARCHAR(40) NOT NULL,
  	alergia varchar(55) NOT NULL,
	sangue varchar(55)NOT NULL,
  	pcd BOOLEAN NOT NULL
   
);

CREATE TABLE usuarios (
  id int primary key auto_increment,
  nome varchar(220) NOT NULL,
  email varchar(220) NOT NULL,
  usuario varchar(220) NOT NULL,
  senha varchar(220) NOT NULL
);
insert tb_contaUsuario(email,senha,nome) values ('fabiano@hotmail.com','123','fabiano');

drop table tb_usuario;

SELECT * FROM tb_usuario;