CREATE DATABASE IDEIAS DEFAULT CHARACTER SET UTF8 COLLATE UTF8_GENERAL_CI;
USE IDEIAS;

/* o comando sagrado: DROP DATABASE IDEIAS; */

CREATE TABLE USUARIOS(
ID INT NOT NULL PRIMARY KEY auto_increment,
EMAIL VARCHAR(125) NOT NULL,
SENHA VARCHAR(60) NOT NULL,
NOME VARCHAR(20) NOT NULL,
SOBRENOME VARCHAR(20) NOT NULL,
AVATAR VARCHAR(45) NOT NULL

)ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE PUBLICACOES(
ID INT NOT NULL PRIMARY KEY auto_increment,
TEXTO TEXT NOT NULL,
USUARIO INT NOT NULL,

foreign key(USUARIO) references USUARIOS(ID)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

insert into usuarios(nome,sobrenome,avatar,senha,email) values
('Gustavo','Coimbra','guzerinho.png','123','GuzeraGod@email.com'); 


insert into publicacoes(texto,usuario) values 
('GuzeraGod',1);

/* selecionar usuarios e suas publicações*/
select usuarios.nome, publicacoes.texto from publicacoes join usuarios on publicacoes.usuario=usuarios.id;

/* selecionar todos os usuários */
select * from usuarios;
