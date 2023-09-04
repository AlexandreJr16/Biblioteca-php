
drop database livrariai2a;
create database livrariai2a;
use livrariai2a;
create table livros (
id int auto_increment primary key,
 titulo varchar(255),
 autor varchar(255),
 ano int,
 editora varchar(250),
 genero varchar(255)
 );
 
 insert into livros values
 (default, "Do judeus e suas mentiras", "agostinho", 1810, "igreja", "Ficção");
 select * from  livros;
  insert into livros values
 (default, "The secret", "IDK", 1, "igreja", "coach");
 select * from  livros;