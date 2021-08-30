CREATE DATABASE M2i_PHP_MYSQL1 CHARACTER SET utf8 COLLATE utf8_general_ci;

USE M2i_PHP_MYSQL1;

CREATE TABLE Bibliotheque (
    Ref int NOT NULL UNIQUE,
    Nom varchar(255) NOT NULL,
    Ville varchar(255),
    CodePostal varchar(25),
    PRIMARY KEY (Ref)
);

-- Type en SQL : varchar, int, text, etc
-- Clé primaire / Clé étrangère : Primary Key / Foreign Key
-- 

