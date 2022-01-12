CREATE DATABASE IDEIAS DEFAULT CHARACTER SET UTF8 COLLATE UTF8_GENERAL_CI;
USE IDEIAS;

/* o comando sagrado: DROP DATABASE IDEIAS; */

CREATE TABLE USUARIOS(
EMAIL VARCHAR(125) PRIMARY KEY  NOT NULL,
SENHA VARCHAR(60) NOT NULL,
NOME VARCHAR(20) NOT NULL,
SOBRENOME VARCHAR(20) NOT NULL,
AVATAR VARCHAR(45) NOT NULL

)ENGINE=InnoDB DEFAULT CHARSET=utf8;



CREATE TABLE PUBLICACOES(
ID INT NOT NULL PRIMARY KEY auto_increment,
TEXTO TEXT NOT NULL,
USUARIO VARCHAR(125) NOT NULL,

foreign key(USUARIO) references USUARIOS(EMAIL)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

insert into usuarios(nome,sobrenome,avatar,senha,email) values
('William','Carneiro','perfil.png','$2y$10$I.fqxfO5tph.IMWRFysozevKt64..QUS.1rYL9VKQveIJAI9DFgpW','william_190_@hotmail.com'); 


insert into publicacoes(texto,usuario) values 
('GuzeraGod','william_190_@hotmail.com');

/* selecionar usuarios e suas publicações*/
select usuarios.nome, publicacoes.texto from publicacoes join usuarios on publicacoes.usuario=usuarios.email;

/* selecionar todos os usuários */
select * from usuarios;
