CREATE DATABASE ista;
use ista;
CREATE TABLE stagiaires (
    matStagiaire INT PRIMARY KEY,
    nomStagiaire VARCHAR(50) NOT NULL,
    prenomStagiaire VARCHAR(50) NOT NULL,
    filiereStagiaire VARCHAR(100),
    anneeEtude INT,
    typeBac VARCHAR(20),
    anneeBac INT
);