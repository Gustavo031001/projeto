create table usuario(
login varchar (100),
senha varchar(50),
perfil varchar(50)
)
insert into usuario (login, senha, perfil) values ('Funcionario', '123', 'cliente');
insert into usuario (login, senha, perfil) values ('Gestor', 'adm', 'adm');
