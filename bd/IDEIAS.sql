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
DIA DATE NOT NULL,
LIKES INT, 
TITULO VARCHAR(30) NOT NULL,
ASSUNTO VARCHAR(20) NOT NULL,

foreign key(USUARIO) references USUARIOS(EMAIL)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE LIKES(
USUARIO VARCHAR(125) NOT NULL,
QUANTIDADE INT NOT NULL,
PUBLICACAO INT NOT NULL,


foreign key(USUARIO) references USUARIOS(EMAIL),
foreign key(PUBLICACAO) references PUBLICACOES(ID)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

insert into usuarios(nome,sobrenome,avatar,senha,email) values
('William','Carneiro','perfil.png','$2y$10$I.fqxfO5tph.IMWRFysozevKt64..QUS.1rYL9VKQveIJAI9DFgpW','william_190_@hotmail.com'); 

SELECT COUNT(publicacao) as contagem FROM likes where publicacao='1';


select count(l.publicacao) as contagem, p.texto, u.email from likes as l join publicacoes as p on p.id=l.publicacao join usuarios as u on u.email=l.usuario group by l.publicacao order by contagem desc;

select count(l.publicacao) as contagem,p.id, p.likes,p.usuario,p.titulo,p.texto,p.assunto,p.dia,u.avatar,u.email 
      from likes as l join publicacoes as p on p.id=l.publicacao join usuarios as u on l.usuario=u.email where p.assunto like '%a%'
      group by l.publicacao order by contagem  desc;

/* selecionar usuarios e suas publicações
select usuarios.nome,publicacoes.dia, publicacoes.titulo, publicacoes.texto from publicacoes join usuarios on publicacoes.usuario=usuarios.email;
*/


/* selecionar tudo
select * from usuarios;
select * from publicacoes;
select * from likes;

select usuario, publicacao from likes where likes.usuario='william_190_@hotmail.com' and likes.publicacao='1';
*/