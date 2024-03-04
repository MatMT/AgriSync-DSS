CREATE DATABASE db_agrysinc;

CREATE TABLE clientes ( 

    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(40) NOT NULL,
    apellido VARCHAR(40) NOT NULL,
    email VARCHAR(60) NOT NULL,
    password VARCHAR(255) NOT NULL,
    confirmado BOOLEAN DEFAULT FALSE,
    token VARCHAR(255)
    
);

CREATE TABLE tipos_gerencia ( 

id INT AUTO_INCREMENT PRIMARY KEY, nombre VARCHAR(50) NOT NULL

);

CREATE TABLE administrativos ( 

id INT AUTO_INCREMENT PRIMARY KEY,
nombre VARCHAR(40) NOT NULL,
apellido VARCHAR(40) NOT NULL,
email VARCHAR(60) NOT NULL,
password VARCHAR(255) NOT NULL,
confirmado BOOLEAN DEFAULT FALSE,
token VARCHAR(255),
tipo_gerencia_id INT,
FOREIGN KEY (tipo_gerencia_id) REFERENCES tipos_gerencia (id)

);