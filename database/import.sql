DROP DATABASE IF EXISTS laravel;

CREATE DATABASE laravel;

USE laravel;

CREATE TABLE solar_systems (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    age_in_years INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE planets (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    size_in_km INT,
    solar_system_id INT UNSIGNED,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (solar_system_id) REFERENCES solar_systems(id)
);

insert into solar_systems (name, age_in_years) values ("Solar System", 20000000);

INSERT INTO planets (name, description, size_in_km, solar_system_id)
VALUES ('Mars', 'Mars is the fourth planet from the Sun.', 6779, 1),
       ('Venus', 'Venus is the second planet from the Sun.', 12104, 1),
       ('Earth', 'Our home planet.', 12742, 1);
