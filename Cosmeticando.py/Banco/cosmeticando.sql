create table cosmeticando;
use cosmeticando;

create table administrador(
	login_Administrador varchar(100),
    senha_Administrador varchar(100)
);

create table produto(
	id_produto int primary key auto_increment,
    nome varchar(100),
    preco double,
    tipo varchar(60),
    descricao varchar(100),
    foto varchar(60)
);