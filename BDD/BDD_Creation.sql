CREATE TABLE campus(
   idCentre INT AUTO_INCREMENT,
   NomC VARCHAR(50),
   PRIMARY KEY(idCentre)
);

CREATE TABLE Secteur_Activite(
   IdSec INT AUTO_INCREMENT,
   Secteur_Act VARCHAR(200),
   PRIMARY KEY(IdSec)
);

CREATE TABLE reg(
   ID_reg INT AUTO_INCREMENT,
   reg VARCHAR(50),
   PRIMARY KEY(ID_reg)
);

CREATE TABLE types_promotions(
   IDT INT AUTO_INCREMENT,
   Nom_du_Type VARCHAR(50),
   PRIMARY KEY(IDT)
);

CREATE TABLE ville(
   idv INT AUTO_INCREMENT,
   Code_Post SMALLINT NOT NULL,
   ville VARCHAR(50),
   ID_reg INT NOT NULL,
   PRIMARY KEY(idv),
   FOREIGN KEY(ID_reg) REFERENCES reg(ID_reg)
);

CREATE TABLE adresse(
   ID_adresse INT AUTO_INCREMENT,
   adresseA VARCHAR(50),
   complementA VARCHAR(50),
   idv INT NOT NULL,
   PRIMARY KEY(ID_adresse),
   FOREIGN KEY(idv) REFERENCES ville(idv)
);

CREATE TABLE utilisateur(
   IDu INT AUTO_INCREMENT,
   MdpU VARCHAR(100) NOT NULL,
   NomU VARCHAR(50),
   PrenomU VARCHAR(50),
   Date_NaisU DATE,
   MailU VARCHAR(50) NOT NULL,
   role VARCHAR(14) NOT NULL,
   ID_adresse INT NOT NULL,
   PRIMARY KEY(IDu),
   UNIQUE(MailU),
   FOREIGN KEY(ID_adresse) REFERENCES adresse(ID_adresse)
);

CREATE TABLE Entreprise(
   IDE INT AUTO_INCREMENT,
   NomE VARCHAR(50),
   descr VARCHAR(1000),
   MailE VARCHAR(50),
   TelE INT,
   Site VARCHAR(200),
   Moyenne DECIMAL(3,2),
   N_siret SMALLINT NOT NULL,
   IDu INT NOT NULL,
   IdSec INT NOT NULL,
   ID_adresse INT NOT NULL,
   PRIMARY KEY(IDE),
   FOREIGN KEY(IDu) REFERENCES utilisateur(IDu),
   FOREIGN KEY(IdSec) REFERENCES Secteur_Activite(IdSec),
   FOREIGN KEY(ID_adresse) REFERENCES adresse(ID_adresse)
);

CREATE TABLE Offre(
   IDoffre INT AUTO_INCREMENT,
   Duree SMALLINT,
   Poste VARCHAR(200),
   Competence VARCHAR(200),
   remune SMALLINT,
   Date_Stage DATE,
   Nb_place SMALLINT,
   Descr VARCHAR(1000),
   IDE INT NOT NULL,
   PRIMARY KEY(IDoffre),
   FOREIGN KEY(IDE) REFERENCES Entreprise(IDE)
);

CREATE TABLE promotion(
   IDProm INT AUTO_INCREMENT,
   Promotion VARCHAR(50),
   IDT INT NOT NULL,
   IDu INT NOT NULL,
   idCentre INT NOT NULL,
   PRIMARY KEY(IDProm),
   FOREIGN KEY(IDT) REFERENCES types_promotions(IDT),
   FOREIGN KEY(IDu) REFERENCES utilisateur(IDu),
   FOREIGN KEY(idCentre) REFERENCES campus(idCentre)
);

CREATE TABLE etudiant(
   IDu INT,
   IDProm INT NOT NULL,
   PRIMARY KEY(IDu),
   FOREIGN KEY(IDu) REFERENCES utilisateur(IDu),
   FOREIGN KEY(IDProm) REFERENCES promotion(IDProm)
);

CREATE TABLE Admin(
   IDu INT,
   PRIMARY KEY(IDu),
   FOREIGN KEY(IDu) REFERENCES utilisateur(IDu)
);

CREATE TABLE interesser(
   IDoffre INT,
   IDu INT,
   PRIMARY KEY(IDoffre, IDu),
   FOREIGN KEY(IDoffre) REFERENCES Offre(IDoffre),
   FOREIGN KEY(IDu) REFERENCES etudiant(IDu)
);

CREATE TABLE Postuler(
   IDoffre INT,
   IDu INT,
   PRIMARY KEY(IDoffre, IDu),
   FOREIGN KEY(IDoffre) REFERENCES Offre(IDoffre),
   FOREIGN KEY(IDu) REFERENCES etudiant(IDu)
);

CREATE TABLE Viser(
   IDoffre INT,
   IDT INT,
   PRIMARY KEY(IDoffre, IDT),
   FOREIGN KEY(IDoffre) REFERENCES Offre(IDoffre),
   FOREIGN KEY(IDT) REFERENCES types_promotions(IDT)
);

CREATE TABLE interesserA(
   IDoffre INT,
   IDu INT,
   PRIMARY KEY(IDoffre, IDu),
   FOREIGN KEY(IDoffre) REFERENCES Offre(IDoffre),
   FOREIGN KEY(IDu) REFERENCES Admin(IDu)
);

CREATE TABLE PostulerA(
   IDoffre INT,
   IDu INT,
   PRIMARY KEY(IDoffre, IDu),
   FOREIGN KEY(IDoffre) REFERENCES Offre(IDoffre),
   FOREIGN KEY(IDu) REFERENCES Admin(IDu)
);

CREATE TABLE noter(
   IDu INT,
   IDE INT,
   NoteU SMALLINT,
   PRIMARY KEY(IDu, IDE),
   FOREIGN KEY(IDu) REFERENCES utilisateur(IDu),
   FOREIGN KEY(IDE) REFERENCES Entreprise(IDE)
);
