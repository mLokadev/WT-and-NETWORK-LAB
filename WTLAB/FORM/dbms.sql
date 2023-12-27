CREATE DATABASE sega; 
USE sega;
CREATE TABLE user_info (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    register_number INT NOT NULL,
    email VARCHAR(255) NOT NULL,
    dob INT NOT NULL,
    address VARCHAR(255) NOT NULL,
    course VARCHAR(50) NOT NULL,
    phone INT NOT NULL,
    resume VARCHAR(255) NOT NULL,
    photo VARCHAR(255) NOT NULL
);

DROP TABLE user_info;
CREATE TABLE user_info (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    register_number INT,
    email VARCHAR(255),
    dob DATE,
    address VARCHAR(255),
    course VARCHAR(255),
    phone INT,
    resume VARCHAR(255),
    photo VARCHAR(255)
);


ALTER TABLE user_info
ADD COLUMN dob DATE;
SELECT*from user_info;