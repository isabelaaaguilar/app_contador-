create database IF NOT EXISTS app_contador;
use app_contador;

#DROP TABLE contador;

CREATE TABLE if not exists contador
(

	codigo INT NOT NULL auto_increment,
	nome VARCHAR(100) NOT NULL,
	numero INT NOT NULL,
	primary key (codigo)

);

CREATE USER 'contador'@'localhost' IDENTIFIED BY 'senha123';

GRANT ALL PRIVILEGES ON app_contador.* TO 'contador'@'localhost'; 