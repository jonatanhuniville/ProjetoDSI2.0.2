CREATE DATABASE PROJETODSI202;

USE PROJETODSI202;

CREATE TABLE EMPRESA(
	CDEMPRESA INT PRIMARY KEY AUTO_INCREMENT,
    NOMEEMPRESA VARCHAR(255),
    CNPJEMPRESA VARCHAR(255),
    SENHAEMPRESA VARCHAR(255),
    RAMOEMPRESA VARCHAR(255)
);

SELECT * FROM EMPRESA;

TRUNCATE TABLE EMPRESA;

CREATE TABLE REPRESENTANTE(
	CDREPRESENTANTE INT PRIMARY KEY AUTO_INCREMENT,
    NOMEREPRESENTANTE VARCHAR(255),
    CPFREPRESENTANTE VARCHAR(255)
);

SELECT * FROM REPRESENTANTE;

TRUNCATE TABLE REPRESENTANTE;



