<<<<<<< HEAD
USE dwii_db;

CREATE TABLE projetos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(120) NOT NULL,
    descricao TEXT NOT NULL,
    tecnologias VARCHAR(200) NOT NULL,
    link_github VARCHAR(255) NULL,
    ano INT NOT NULL,
    criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
=======
-- Cria e seleciona o banco
CREATE DATABASE IF NOT EXISTS portfolio
    CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE portfolio;

-- Remove e recria (útil durante desenvolvimento)
DROP TABLE IF EXISTS projetos;

CREATE TABLE projetos (
    id           INT UNSIGNED NOT NULL AUTO_INCREMENT,
    nome         VARCHAR(120) NOT NULL,
    descricao    TEXT NOT NULL,
    tecnologias  VARCHAR(200) NOT NULL,
    link_github  VARCHAR(300) NULL DEFAULT NULL,
    ano          YEAR NOT NULL,
    criado_em    DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
>>>>>>> e7cfe0f (entregando o atraso)
