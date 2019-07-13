drop database db_arkademy;

create database db_arkademy;

use db_arkademy;

create table kategori (
	id char(2),
	salary int UNSIGNED NOT NULL,
	PRIMARY KEY (id));

INSERT INTO kategori
	values ('1','10000000'),
			('2','12000000');

create table work (
	id char(2),
	name varchar(35),
	id_salary char(2),
	PRIMARY KEY (id),
	FOREIGN KEY(id_salary) REFERENCES kategori(id));
	
INSERT INTO work
	values ('1','Frontend Dev','1'),
			('2','Backend Dev','2');

create table nama (
	id char(2),
	name varchar(35),
	id_work char(2),
	id_salary char(2),
	PRIMARY KEY (id),
	FOREIGN KEY(id_work) REFERENCES work(id),
	FOREIGN KEY(id_salary) REFERENCES kategori(id));
	
INSERT INTO nama
	values ('1','Rebecca','1','1'),
			('2','Vita','2','2');