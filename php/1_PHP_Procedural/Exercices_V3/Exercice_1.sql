-- Créez une base de données nommée M2i_PHP_MYSQL;
-- Créez une table nommée Bibliothèque, dont les champs sont :        
-- -- Ref : nombre réel non-nullable et unique        
-- -- Nom : chaine de caractère, dont la taille est de 255, non-nullable
-- -- Ville : chaine de caractères, dont la taille est de 255.        
-- -- Code Postal  
-- Dont Ref est une clé primaire.



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

