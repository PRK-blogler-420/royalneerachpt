CREATE DATABASE water_order;

USE water_order;

CREATE TABLE orders (
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100),
phone VARCHAR(15),
quantity INT,
address TEXT,
address_link TEXT
);
