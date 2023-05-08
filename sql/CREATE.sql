CREATE DATABASE cuppa_joy_coffee_shop;
USE cuppa_joy_coffee_shop;

CREATE TABLE coffee
(
    id          INT AUTO_INCREMENT PRIMARY KEY,
    name        VARCHAR(255)  NOT NULL UNIQUE,
    description TEXT,
    price       DECIMAL(5, 2) NOT NULL,
    image_url   VARCHAR(255)
);

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

-- Might be added later

CREATE TABLE members
(
    id         INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(255)        NOT NULL,
    last_name  VARCHAR(255)        NOT NULL,
    username   VARCHAR(255) UNIQUE NOT NULL,
    password   CHAR(60)            NOT NULL, -- Using bcrypt, password hashes are 60 characters long
    email      VARCHAR(255) UNIQUE NOT NULL,
    phone      VARCHAR(255),
    address    VARCHAR(255),
    join_date  DATETIME            NOT NULL DEFAULT CURRENT_TIMESTAMP
);

DELIMITER $$

CREATE TRIGGER subscribe_new_member -- All members are subscribers
    AFTER INSERT
    ON members
    FOR EACH ROW
BEGIN
    IF NOT EXISTS (SELECT 1 FROM subscribers WHERE email = NEW.email) THEN
        INSERT INTO subscribers (email) VALUES (NEW.email);
    END IF;
END$$

DELIMITER ;
