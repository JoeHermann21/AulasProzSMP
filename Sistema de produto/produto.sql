create database produto;

use produto;

create table produto (
	id INT AUTO_INCREMENT PRIMARY KEY,
	nome varchar (200),
	preco decimal (10, 2),
	quantidade int,
	total decimal (10,2)
);

-- decimal ou double

insert into produto 
(nome, preco, quantidade, total) 
values 
('Caneta Bic Azul', 1.50, 3, (preco * quantidade));

Select * From produto;

--ok