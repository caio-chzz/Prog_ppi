
CREATE DATABASE IF NOT EXISTS docinhos;


USE docinhos;


CREATE TABLE IF NOT EXISTS doces (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome_doce VARCHAR(255) NOT NULL,
    preco DECIMAL(10, 2) NOT NULL,
    sabor VARCHAR(50) NOT NULL
);
