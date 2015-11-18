CREATE DATABASE IF NOT EXISTS pet_finder;
USE pet_finder;

CREATE TABLE IF NOT EXISTS user (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	username VARCHAR(50) NOT NULL,
	password VARCHAR(50) NOT NULL,
	firstname VARCHAR(30) NOT NULL,
	lastname VARCHAR(30) NOT NULL,
	birth DATE,
	email VARCHAR(50),
	phone VARCHAR(30),
	address VARCHAR(255)
);

CREATE TABLE IF NOT EXISTS pet (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(20) NOT NULL,
	password VARCHAR(50) NOT NULL,
	owner VARCHAR(20),
	species VARCHAR(20), 
	sex CHAR(1), 
	age int(10)
);