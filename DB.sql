/**
* Script sql de la base de donnée de gpo
*
*/
CREATE DATABASE gestion_parc_ordi;

USE gestion_parc_ordi; 

CREATE TABLE admin ( 
	CodeAdmin VARCHAR(15) NOT NULL, 
	Login VARCHAR(50) NOT NULL,
	Password VARCHAR(250) NOT NULL, 
	Mail VARCHAR(150) NOT NULL,
	PRIMARY KEY(CodeAdmin)
);

CREATE TABLE utilisateur (
	CodeUser VARCHAR(150) NOT NULL,
	Nom VARCHAR(250) NOT NULL,
	Prenom VARCHAR(50) NOT NULL,
	Mail VARCHAR(150) NOT NULL,
	PRIMARY KEY(CodeUser)
);

CREATE TABLE poste (
	CodePoste VARCHAR(50) NOT NULL,
	Marque VARCHAR(30) NOT NULL,
	NumSerie VARCHAR(50) NOT NULL,
	PRIMARY KEY(CodePoste)
);

CREATE TABLE horaire (
	Creneau VARCHAR(10) PRIMARY KEY NOT NULL
);

CREATE TABLE attribution (
	jour VARCHAR(10),
	CodeUser VARCHAR(150),
	CodePoste VARCHAR(50),
	Creneau VARCHAR(10),
	FOREIGN KEY (CodeUser) REFERENCES utilisateur(CodeUser),
	FOREIGN KEY (CodePoste) REFERENCES poste(CodePoste),
	FOREIGN KEY (Creneau) REFERENCES horaire(Creneau)
);

INSERT INTO admin(CodeAdmin, Login, Password, Mail) VALUES
	('Admin1','Yann',md5('Y@nN131745397'),'lyann1503@gmail.com' );

INSERT INTO utilisateur(CodeUser, Nom, Prenom, Mail) VALUES
	('corT','Taylor', 'Corey', 'coreytaylor@gmail.com'),
	('aleL', 'Laiho', 'Alexi', 'alexilaiho@gmail.com'),
	('dezF', 'Fafara', 'Dez', 'dezfafara@gmail.com'),
	('warB', 'Warner', 'Brian', 'brianwarner@gmail.com');

INSERT INTO poste(CodePoste, Marque, NumSerie, Disponibilite) VALUES
	('ASUS05','ASUS', 0000111547, 1),
	('HP25', 'Hewlett-Packard', 55448755, 1),
	('LENOVO15', 'Lenovo', 8874521, 1),
	('ASUS58', 'ASUS-ROG', 62154878, 1);

INSERT INTO horaire VALUES
	('08H-09H'),
	('09H-10H'),
	('11H-12H'),
	('13H-14H'),
	('14H-15H'),
	('15H-16H'),
	('16H-17H'),
	('17H-18H');
