CREATE DATABASE IF NOT EXISTS db_pr01_restaurante;
USE db_pr01_restaurante;

CREATE TABLE `user` (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    fullName VARCHAR(50) NULL,
    email VARCHAR(60) NULL,
    pwd LONGTEXT NULL
);

CREATE TABLE `room` (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(60) NULL
);

CREATE TABLE `table` (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    capacity INT NULL,
    available BOOLEAN NULL,
    room_id INT NULL,
    user_id INT NULL
    FOREIGN KEY (room_id) REFERENCES room(id),
    FOREIGN KEY (user_id) REFERENCES user(id)
);

CREATE TABLE `tableRegister` (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    date DATE NULL,
    set_available BOOLEAN NULL,
    table_id INT NULL,
    user_id INT NULL,
    FOREIGN KEY (table_id) REFERENCES `table`(id),
    FOREIGN KEY (user_id) REFERENCES user(id)
);