create database rentex ;
use rentex;

CREATE  TABLE aluno(
nome VARCHAR(100) NOT NULL ,
email VARCHAR(100)  NOT NULL UNIQUE ,
curso VARCHAR (100) NOT NULL,
serie VARCHAR (100) NOT NULL
);

select * from aluno;

CREATE TABLE escola(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    senha VARCHAR(255) NOT NULL
);

insert into escola(nome, email, senha) values
("EEEP Comendador Miguel Gurgel", "EEEPCMG@gmail.com", "escola123");

select * from escola;