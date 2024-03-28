CREATE TABLE campus(
   idCentre INT NOT NULL AUTO_INCREMENT,
   NomC VARCHAR(50),
   PRIMARY KEY(idCentre)
);

CREATE TABLE Secteur_d_activité(
   IdSec INT NOT NULL AUTO_INCREMENT,
   Secteur_d_activité VARCHAR(200),
   PRIMARY KEY(IdSec)
);

CREATE TABLE departement(
   ID_departement SMALLINT,
   departement VARCHAR(50),
   PRIMARY KEY(ID_departement)
);

CREATE TABLE types_de_promotions(
   ID_Type INT NOT NULL AUTO_INCREMENT,
   Nom_du_Type VARCHAR(50),
   PRIMARY KEY(ID_Type)
);

CREATE TABLE ville(
   Code_Post INT,
   ville VARCHAR(50),
   ID_departement SMALLINT NOT NULL,
   PRIMARY KEY(Code_Post),
   FOREIGN KEY(ID_departement) REFERENCES departement(ID_departement)
);

CREATE TABLE adresse(
   ID_adresse SMALLINT NOT NULL AUTO_INCREMENT,
   rueA SMALLINT,
   adresseA VARCHAR(50),
   complementA VARCHAR(50),
   Code_Post INT NOT NULL,
   PRIMARY KEY(ID_adresse),
   FOREIGN KEY(Code_Post) REFERENCES ville(Code_Post)
);

CREATE TABLE utilisateur(
   IDu INT,
   MdpU VARCHAR(50),
   NomU VARCHAR(50),
   PrenomU VARCHAR(50),
   Date_NaisU DATE,
   MailU VARCHAR(50),
   ID_adresse SMALLINT NOT NULL,
   PRIMARY KEY(IDu),
   FOREIGN KEY(ID_adresse) REFERENCES adresse(ID_adresse)
);

CREATE TABLE Pilote(
   IDu INT,
   EtudeP VARCHAR(50),
   PRIMARY KEY(IDu),
   FOREIGN KEY(IDu) REFERENCES utilisateur(IDu)
);

CREATE TABLE admin(
   IDu INT,
   PRIMARY KEY(IDu),
   FOREIGN KEY(IDu) REFERENCES utilisateur(IDu)
);

CREATE TABLE Entreprise(
   IDE CHAR(50),
   NomE VARCHAR(50),
   descr VARCHAR(1000),
   MailE VARCHAR(50),
   TelE INT,
   Site VARCHAR(200),
   Moyenne DECIMAL(3,2),
   IdSec INT NOT NULL,
   ID_adresse SMALLINT NOT NULL,
   PRIMARY KEY(IDE),
   FOREIGN KEY(IdSec) REFERENCES Secteur_d_activité(IdSec),
   FOREIGN KEY(ID_adresse) REFERENCES adresse(ID_adresse)
);

CREATE TABLE Offre(
   IDoffre INT NOT NULL AUTO_INCREMENT,
   Duree SMALLINT,
   Poste VARCHAR(200),
   Competence VARCHAR(200),
   remune SMALLINT,
   Date_Stage DATE,
   Nb_place SMALLINT,
   Descr VARCHAR(1000),
   IDE CHAR(50) NOT NULL,
   PRIMARY KEY(IDoffre),
   FOREIGN KEY(IDE) REFERENCES Entreprise(IDE)
);

CREATE TABLE promotion(
   IDProm INT NOT NULL AUTO_INCREMENT,
   Promotion VARCHAR(50),
   ID_Type INT NOT NULL,
   IDu INT NOT NULL,
   idCentre INT NOT NULL,
   PRIMARY KEY(IDProm),
   FOREIGN KEY(ID_Type) REFERENCES types_de_promotions(ID_Type),
   FOREIGN KEY(IDu) REFERENCES Pilote(IDu),
   FOREIGN KEY(idCentre) REFERENCES campus(idCentre)
);

CREATE TABLE etudiant(
   IDu INT,
   IDProm INT NOT NULL,
   PRIMARY KEY(IDu),
   FOREIGN KEY(IDu) REFERENCES utilisateur(IDu),
   FOREIGN KEY(IDProm) REFERENCES promotion(IDProm)
);

CREATE TABLE interesser(
   IDu INT,
   IDoffre INT,
   PRIMARY KEY(IDu, IDoffre),
   FOREIGN KEY(IDu) REFERENCES etudiant(IDu),
   FOREIGN KEY(IDoffre) REFERENCES Offre(IDoffre)
);

CREATE TABLE Postuler(
   IDu INT,
   IDoffre INT,
   PRIMARY KEY(IDu, IDoffre),
   FOREIGN KEY(IDu) REFERENCES etudiant(IDu),
   FOREIGN KEY(IDoffre) REFERENCES Offre(IDoffre)
);
