create database login;

use login;

create table usuario (
	id serial primary key not null,
	email varchar (200) not null,
	senha varchar (200) not null,
	perfil varchar (200) check (perfil = 'ADMINISTRADOR' or perfil = 'USUARIO') not null
);

insert into usuario (email, senha, perfil) values ('daniel@gmail.com', '123', 'USUARIO');
insert into usuario (email, senha, perfil) values ('marquin@gmail.com', sha1('123'), 'USUARIO');

--select email, senha from usuario where email='' or ''='' AND senha='' or ''=''