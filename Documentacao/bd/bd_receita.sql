create database bd_receitas;
use bd_receitas;

create table usuarios (
id int auto_increment primary key,
nome varchar(60) not null unique,
email varchar(256) not null unique,
senha varchar(8) not null,
data_registro timestamp default current_timestamp
);

