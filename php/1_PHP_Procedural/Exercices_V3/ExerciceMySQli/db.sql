CREATE DATABASE my_data_base CHARACTER SET utf8 COLLATE utf8_general_ci;


USE my_data_base;

CREATE TABLE books (
    id int NOT NULL UNIQUE AUTO_INCREMENT,
    title varchar(255),
    author varchar(255),
    PRIMARY KEY (id)
);
