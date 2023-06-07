CREATE DATABASE shop;

USE shop;

CREATE TABLE user(
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(30) NOT NULL,
    password VARCHAR(30) NOT NULL,
    email VARCHAR(30) NOT NULL
);

USE shop;

CREATE TABLE product(
    id INT PRIMARY KEY AUTO_INCREMENT);

ALTER TABLE product ADD name VARCHAR(55), ADD description VARC;

ALTER TABLE product ADD created_by int not null;

ALTER TABLE product ADD FOREIGN KEY (created_by) REFERENCES user(id);

USE shop;

CREATE TABLE sales(
    id INT PRIMARY KEY AUTO_INCREMENT,
    product_id INT NOT NULL,
    user_id INT NOT NULL
);

ALTER TABLE sales ADD FOREIGN KEY (product_id) REFERENCES product(id);

ALTER TABLE sales ADD FOREIGN KEY (user_id) REFERENCES user(id);

USE shop;

SHOW TABLES;

SELECT * FROM user;

SELECT * FROM product;

SELECT * FROM sales;