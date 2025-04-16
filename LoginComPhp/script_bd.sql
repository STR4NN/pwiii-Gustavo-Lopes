CREATE DATABASE sistema_login;
USE sistema_login;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(40),
    login VARCHAR(10) UNIQUE,
    senha VARCHAR(255),
    email VARCHAR(40),
    email2 VARCHAR(40),
    data_cad DATE DEFAULT CURRENT_DATE,
    ativo BOOLEAN DEFAULT TRUE,
    nivel TINYINT DEFAULT 3
);