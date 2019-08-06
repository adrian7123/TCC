CREATE DATABASE Artem;

use Artem;

CREATE TABLE usuario(
    userId INT PRIMARY KEY AUTO_INCREMENT,
    userName VARCHAR(80),
    especialidade VARCHAR(50),
    email VARCHAR(180),
    userDescricao TEXT,
    imgPerfil VARCHAR(200),
    classificacao int
       
);


CREATE TABLE participacao(
    id INT PRIMARY KEY AUTO_INCREMENT,
    userParticipante INT,
    userEmpregador INT,
    titulo VARCHAR(100)
    
);

CREATE TABLE contrato(
    id INT PRIMARY KEY AUTO_INCREMENT,
    titulo VARCHAR(100),
    autor VARCHAR(80),
    descricao TEXT,
    dataCriacao DATE,
    dataExpira DATETIME


);

DESC usuario;
DESC participacao;
DESC contrato;
