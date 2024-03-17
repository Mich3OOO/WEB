CREATE TABLE utilisateur(
   IDu INT,
   MdpU VARCHAR(100),
   NomU VARCHAR(50),
   PrenomU VARCHAR(50),
   Date_NaisU DATE,
   MailU VARCHAR(50),
   role VARCHAR(14),
   PRIMARY KEY(IDu)
);

CREATE TABLE Pilote(
   IDu INT,
   PRIMARY KEY(IDu),
   FOREIGN KEY(IDu) REFERENCES utilisateur(IDu)
);

CREATE TABLE admin(
   IDu INT,
   PRIMARY KEY(IDu),
   FOREIGN KEY(IDu) REFERENCES utilisateur(IDu)
);

CREATE TABLE campus(
   idCentre INT,
   NomC VARCHAR(50),
   PRIMARY KEY(idCentre)
);

CREATE TABLE Secteur_d_activité(
   IdSec INT,
   Secteur_d_activité VARCHAR(200),
   PRIMARY KEY(IdSec)
);

CREATE TABLE departement(
   ID_departement INT,
   departement VARCHAR(50),
   PRIMARY KEY(ID_departement)
);

CREATE TABLE types_de_promotions(
   ID_Type INT,
   Nom_du_Type VARCHAR(50),
   PRIMARY KEY(ID_Type)
);

CREATE TABLE ville(
   Code_Post INT,
   ville VARCHAR(50),
   ID_departement INT NOT NULL,
   PRIMARY KEY(Code_Post),
   FOREIGN KEY(ID_departement) REFERENCES departement(ID_departement)
);

CREATE TABLE promotion(
   IDProm INT,
   Promotion VARCHAR(50),
   ID_Type INT NOT NULL,
   IDu INT NOT NULL,
   idCentre INT NOT NULL,
   PRIMARY KEY(IDProm),
   FOREIGN KEY(ID_Type) REFERENCES types_de_promotions(ID_Type),
   FOREIGN KEY(IDu) REFERENCES Pilote(IDu),
   FOREIGN KEY(idCentre) REFERENCES campus(idCentre)
);

CREATE TABLE adresse(
   ID_adresse INT,
   NumBatiment BIT,
   adresseA VARCHAR(50),
   complementA VARCHAR(50),
   Code_Post INT NOT NULL,
   PRIMARY KEY(ID_adresse),
   FOREIGN KEY(Code_Post) REFERENCES ville(Code_Post)
);

CREATE TABLE etudiant(
   IDu INT,
   IDProm INT NOT NULL,
   PRIMARY KEY(IDu),
   FOREIGN KEY(IDu) REFERENCES utilisateur(IDu),
   FOREIGN KEY(IDProm) REFERENCES promotion(IDProm)
);

CREATE TABLE Entreprise(
   IDE INT,
   NomE VARCHAR(50),
   descr VARCHAR(1000),
   MailE VARCHAR(50),
   TelE INT,
   Site VARCHAR(200),
   Moyenne DECIMAL(3,2),
   IDu INT NOT NULL,
   IDu_1 INT NOT NULL,
   IdSec INT NOT NULL,
   ID_adresse INT NOT NULL,
   PRIMARY KEY(IDE),
   FOREIGN KEY(IDu) REFERENCES Pilote(IDu),
   FOREIGN KEY(IDu_1) REFERENCES admin(IDu),
   FOREIGN KEY(IdSec) REFERENCES Secteur_d_activité(IdSec),
   FOREIGN KEY(ID_adresse) REFERENCES adresse(ID_adresse)
);

CREATE TABLE Offre(
   IDoffre INT,
   Duree BIT,
   Poste VARCHAR(200),
   Competence VARCHAR(200),
   remune SMALLINT,
   Date_Stage DATE,
   Nb_place BIT,
   Descr VARCHAR(1000),
   IDE INT NOT NULL,
   PRIMARY KEY(IDoffre),
   FOREIGN KEY(IDE) REFERENCES Entreprise(IDE)
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

CREATE TABLE Viser(
   IDoffre INT,
   ID_Type INT,
   PRIMARY KEY(IDoffre, ID_Type),
   FOREIGN KEY(IDoffre) REFERENCES Offre(IDoffre),
   FOREIGN KEY(ID_Type) REFERENCES types_de_promotions(ID_Type)
);