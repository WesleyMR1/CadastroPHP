create database Cadastro;

use Cadastro;

create table usuario(
    rm int(5) not null primary key,
    nome varchar(100) not null,
    email varchar(100) not null unique,
    periodo varchar(10) not null,
    curso varchar(20) not null
);


