-- ============================================
-- Projeto Escolar: CRUD Farmácia VAV
-- Arquivo: database.sql
-- ============================================

-- Cria o banco se não existir
CREATE DATABASE IF NOT EXISTS farmacia_vav
    CHARACTER SET utf8mb4
    COLLATE utf8mb4_unicode_ci;

USE farmacia_vav;

-- Remove e recria a tabela
DROP TABLE IF EXISTS produtos;

CREATE TABLE produtos (
    id          INT(11)        NOT NULL AUTO_INCREMENT,
    nome        VARCHAR(150)   NOT NULL,
    fabricante  VARCHAR(100)   NOT NULL,
    preco       DECIMAL(10,2)  NOT NULL DEFAULT 0.00,
    estoque     INT(11)        NOT NULL DEFAULT 0,
    PRIMARY KEY (id)
) ENGINE=InnoDB
  DEFAULT CHARSET=utf8mb4
  COLLATE=utf8mb4_unicode_ci;

-- Dados de exemplo
INSERT INTO produtos (nome, fabricante, preco, estoque) VALUES
    ('Dipirona 500mg',    'EMS',         5.90,  200),
    ('Amoxicilina 500mg', 'Medley',     18.50,   80),
    ('Omeprazol 20mg',    'Eurofarma',  12.00,  150),
    ('Vitamina C 1g',     'Cimed',       8.75,  300),
    ('Loratadina 10mg',   'Neo Química', 6.40,    8),
    ('Paracetamol 750mg', 'Takeda',      4.50,    0);
