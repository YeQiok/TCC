
create database db_donaflor;
use db_donaflor;
CREATE TABLE users(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    usuario varchar(50) NOT NULL UNIQUE,
    senha varchar(255) NOT NULL
);
