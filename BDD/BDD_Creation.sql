CREATE TABLE Secteur_activite(
   IdSec INT AUTO_INCREMENT,
   Secteur_Act VARCHAR(200),
   PRIMARY KEY(IdSec)
);

CREATE TABLE promotion(
   IDProm INT AUTO_INCREMENT,
   Promotion VARCHAR(50),
   PRIMARY KEY(IDProm)
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

CREATE TABLE Competences(
   IDComp SMALLINT NOT NULL AUTO_INCREMENT,
   Comp VARCHAR(50) NOT NULL,
   PRIMARY KEY(IDComp)
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
   IdSec INT NOT NULL,
   ID_adresse INT NOT NULL,
   PRIMARY KEY(IDE),
   FOREIGN KEY(IdSec) REFERENCES Secteur_activite(IdSec),
   FOREIGN KEY(ID_adresse) REFERENCES adresse(ID_adresse)
);

CREATE TABLE Offre(
   IDoffre INT AUTO_INCREMENT,
   Duree SMALLINT,
   Poste VARCHAR(200),
   remune SMALLINT,
   Date_Stage DATE,
   Nb_place SMALLINT,
   Descr VARCHAR(1000),
   IDE INT NOT NULL,
   PRIMARY KEY(IDoffre),
   FOREIGN KEY(IDE) REFERENCES Entreprise(IDE)
);

CREATE TABLE Admin(
   IDu INT,
   PRIMARY KEY(IDu),
   FOREIGN KEY(IDu) REFERENCES utilisateur(IDu)
);

CREATE TABLE pilote(
   IDu INT,
   PRIMARY KEY(IDu),
   FOREIGN KEY(IDu) REFERENCES utilisateur(IDu)
);

CREATE TABLE Classe(
   IDClasse SMALLINT NOT NULL AUTO_INCREMENT,
   idv INT NOT NULL,
   IDT INT NOT NULL,
   IDProm INT NOT NULL,
   IDu INT NOT NULL,
   PRIMARY KEY(IDClasse),
   FOREIGN KEY(idv) REFERENCES ville(idv),
   FOREIGN KEY(IDT) REFERENCES types_promotions(IDT),
   FOREIGN KEY(IDProm) REFERENCES promotion(IDProm),
   FOREIGN KEY(IDu) REFERENCES pilote(IDu)
);

CREATE TABLE etudiant(
   IDu INT,
   IDClasse SMALLINT NOT NULL,
   PRIMARY KEY(IDu),
   FOREIGN KEY(IDu) REFERENCES utilisateur(IDu),
   FOREIGN KEY(IDClasse) REFERENCES Classe(IDClasse)
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

CREATE TABLE note(
   IDu INT,
   IDE INT,
   NoteU SMALLINT,
   PRIMARY KEY(IDu, IDE),
   FOREIGN KEY(IDu) REFERENCES utilisateur(IDu),
   FOREIGN KEY(IDE) REFERENCES Entreprise(IDE)
);

CREATE TABLE necessite(
   IDoffre INT,
   IDComp SMALLINT,
   PRIMARY KEY(IDoffre, IDComp),
   FOREIGN KEY(IDoffre) REFERENCES Offre(IDoffre),
   FOREIGN KEY(IDComp) REFERENCES Competences(IDComp)
);



CREATE USER admin IDENTIFIED BY 'mdp2';
GRANT ALL PRIVILEGES ON presquauchaud TO admin;
CREATE USER pilote IDENTIFIED BY 'mdp';
GRANT SELECT ON presquauchaud.* TO pilote;
GRANT UPDATE, DELETE, INSERT ON utilisateur TO pilote;
GRANT UPDATE, DELETE, INSERT ON adresse TO pilote;
GRANT UPDATE, DELETE, INSERT ON ville TO pilote;
GRANT UPDATE, DELETE, INSERT ON reg TO pilote;
GRANT UPDATE, DELETE, INSERT ON entreprise TO pilote;
GRANT UPDATE, DELETE, INSERT ON secteur_activite TO pilote;
GRANT UPDATE, DELETE, INSERT ON offre TO pilote; 
GRANT UPDATE, DELETE, INSERT ON Competences TO pilote;
GRANT UPDATE, DELETE, INSERT ON necessite TO pilote;
GRANT UPDATE, DELETE, INSERT ON promotion TO pilote;
GRANT UPDATE, DELETE, INSERT ON types_promotions TO pilote;
GRANT UPDATE, DELETE, INSERT ON Viser TO pilote;
GRANT UPDATE, DELETE, INSERT ON Classe TO pilote;
CREATE USER etudiant IDENTIFIED BY 'mdp';
GRANT SELECT ON presquauchaud.* TO etudiant;
GRANT INSERT, UPDATE, DELETE ON note TO etudiant;
GRANT INSERT, UPDATE, DELETE ON Postuler TO etudiant;
GRANT INSERT, UPDATE, DELETE ON interesser TO etudiant;