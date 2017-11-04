create database AGENDA;
	USE AGENDA;
	create table registro(
		idRegistro int not null AUTO_INCREMENT,
		Nome VARCHAR (25),
		Telefone VARCHAR (45),
		PRIMARY KEY (idRegistro)
		);