-- Active: 1707474535511@@127.0.0.1@3306@shop
CREATE TABLE
    IF NOT EXISTS products (
        id INTEGER PRIMARY KEY AUTO_INCREMENT,
        name VARCHAR(50) NOT NULL,
        description TEXT NOT NULL,
        url VARCHAR(225) NOT NULL,
        price DECIMAL(10,2) NOT NULL,
        owner VARCHAR(50) NOT NULL
    );


CREATE TABLE
    IF NOT EXISTS users (
        id INTEGER PRIMARY KEY AUTO_INCREMENT,
        firstname VARCHAR(25) NOT NULL,
        lastname VARCHAR(25) NOT NULL, 
        email VARCHAR(50) NOT NULL,
        password VARCHAR(32) NOT NULL,
        wallet DECIMAL(10,2)
    );
   