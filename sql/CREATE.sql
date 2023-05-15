CREATE DATABASE cuppa_joy;
USE cuppa_joy;

CREATE TABLE coffee
(
    id          INT AUTO_INCREMENT PRIMARY KEY,
    name        VARCHAR(255)  NOT NULL UNIQUE,
    description TEXT,
    price       DECIMAL(5, 2) NOT NULL,
    image_url   VARCHAR(255)
);

ALTER TABLE coffee
    ADD COLUMN name_arabic        VARCHAR(255),
    ADD COLUMN description_arabic TEXT;

CREATE TABLE subscribers
(
    id    INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) UNIQUE NOT NULL
);

CREATE TABLE messages
(
    id         INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(255) NOT NULL,
    last_name  VARCHAR(255) NOT NULL,
    email      VARCHAR(255) NOT NULL,
    message    TEXT         NOT NULL,
    created_at DATETIME     NOT NULL DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE `admin`
(
    id         INT AUTO_INCREMENT PRIMARY KEY,
    username   VARCHAR(255) NOT NULL UNIQUE,
    password   VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
