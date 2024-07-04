create database atividade03LoginPHP;
use atividade03LoginPHP;

create table usuarios(
	usuario varchar(40),
    usuarioNome varchar(30),
    senha varchar(40)
);

insert into usuarios values("Paulo_V","Paulo Nogueira",md5("12345"));
insert into usuarios values("Joao_C","Joao Victor",md5("12345"));




















