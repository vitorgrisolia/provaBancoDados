CREATE DATABASE IF NOT EXISTS amigao;

USE amigao;

CREATE TABLE proprietarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    telefone VARCHAR(20),
    email VARCHAR(100)
);

CREATE TABLE pets (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    especie VARCHAR(50) NOT NULL,
    raca VARCHAR(50),
    idade INT,
    proprietario_id INT,
    FOREIGN KEY (proprietario_id) REFERENCES proprietarios(id)
);
