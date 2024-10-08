
create database funcionarios;
use funcionarios;

create table funcionarios(
	id int primary key auto_increment not null, 
    nome varchar(20) not null,
    salario float not null,
    cargo varchar(20) not null,
    idade int not null,
    telefone int not null
);
select * from funcionarios;	

truncate funcionarios;	