

CREATE DATABASE bdroche

use BDroche

 CREATE TABLE TblRoche
 (
    idRoche         SMALLINT(6)     NOT NULL        AUTO_INCREMENT,
    idLieu          SMALLINT(6)     NOT NULL,
    nom             VARCHAR(50)     NOT NULL,
    nomLieu         VARCHAR(50)     NOT NULL,
    idDecouverte    SMALLINT(6)     NOT NULL,
    description1    TEXT            NOT NULL,
    categorie       VARCHAR(20)     NOT NULL,
    valeurDollars   DECIMAL(5,2)    NOT NULL,
    PRIMARY KEY (idRoche),
    FOREIGN KEY (idLieu) REFERENCES TblLieu(idLieu),
    FOREIGN KEY (idDecouverte) REFERENCES TblDecouverte(idDecouverte)
 );

 CREATE TABLE TblLieu
 (
    idLieu          SMALLINT(6)     NOT NULL        AUTO_INCREMENT,
    nomEndroit      VARCHAR(20)     NOT NULL,
    PRIMARY KEY (idLieu)
 );

 CREATE TABLE TblDecouverte
 (
    idDecouverte    SMALLINT(6)     NOT NULL        AUTO_INCREMENT,
    idHumain        SMALLINT(6)     NOT NULL,
    anneeDecouverte DATE            NOT NULL,
    PRIMARY KEY (idDecouverte),
    FOREIGN KEY (idHumain) REFERENCES TblHumain(idHumain)
 );

 CREATE TABLE TblHumain
 (
    idHumain        SMALLINT(6)     NOT NUll    AUTO_INCREMENT,
    nomHumain       VARCHAR(20)     NOT NULL,
    prenomHumain    VARCHAR(20)     NOT NULL,
    origine         VARCHAR(25)     NOT NULL,
    etatDeHumain    BOOLEAN         NOT NULL,
    anneeNaissance  DATE            NOT NULL,
    numeroTel       VARCHAR(15)     NULL,
    PRIMARY KEY (idHumain)
 );

 CREATE TABLE TblRocheLieu
 (
    idRoche     SMALLINT(6)     NOT NULL,
    idLieu      SMALLINT(6)     NOT NULL,
    PRIMARY KEY (idRoche, idLieu),
    FOREIGN KEY (idRoche) REFERENCES TblRoche(idRoche),
    FOREIGN KEY (idLieu) REFERENCES TblLieu(idLieu)
 );

 CREATE TABLE TblDecouverteHumain
 (
    idHumain        SMALLINT(6)     NOT NULL,
    idDecouverte    SMALLINT(6)     NOT NULL,
    PRIMARY KEY (idHumain, idDecouverte),
    FOREIGN KEY (idHumain) REFERENCES TblHumain(idHumain),
    FOREIGN KEY (idDecouverte) REFERENCES TblDecouverte(idDecouverte)
 );

 CREATE TABLE TblUtilisateur
 (
   idUtilisateur     SMALLINT(6)    NOT NULL,
   email             VARCHAR(50)    NOT NULL,
   mdp               VARCHAR(50)
 );