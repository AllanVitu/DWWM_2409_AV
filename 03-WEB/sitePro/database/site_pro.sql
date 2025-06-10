DROP DATABASE IF EXISTS site_pro;
CREATE DATABASE IF NOT EXISTS site_pro;
USE site_pro;

CREATE TABLE contact (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100),
    email VARCHAR(100),
    message TEXT(100),
    date_envoi TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

USE site_pro;

CREATE TABLE inscription (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100),
    prenom VARCHAR(100),
    pseudo VARCHAR(100),
    email VARCHAR(100),
    mots_de_passe VARCHAR(100),
    date_envoi TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
