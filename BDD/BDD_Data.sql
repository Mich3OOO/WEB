
INSERT INTO campus (NomC) 
VALUES 
('Pau'),
('Assat'),
('Marseille'),
('Lyon'),
('Paris');

INSERT INTO reg (reg) 
VALUES 
('Île-de-France'),
('Rhône-Alpes'),
('Bouches-du-Rhône'),
('Nouvelle-Aquitaine');

INSERT INTO types_promotions (Nom_du_Type) 
VALUES 
('Informatique'),
('General'),
('Prépa');

INSERT INTO ville (Code_Post,ville, ID_reg) 
VALUES 
(75001,'Paris', 1),
(69001,'Lyon', 2),
(13001,'Marseille', 3),
(33000,'Bordeaux', 4),
(64000, 'Pau', 4),
(64140, 'Billere', 4),
(73000, 'Chambéry', 2);


INSERT INTO adresse (adresseA, complementA, idv) 
VALUES 
('12 Rue de la Liberté', NULL, 1),
('8 Avenue des Roses', 'Appartement 3', 2),
('45 Boulevard de la Santé', NULL, 3),
('30 Rue du Commerce', NULL, 4),
('3 Avenue de Gaulle', NULL, 3),
('7 Rue Henry Lafaillette', NULL, 5),
('2 Rue Jean Laffaillette', NULL, 4),
('6 Avenue du Boureau', NULL, 6),
('3 Boulevard des Pyrénées', NULL, 5),
('1 Boulevard des Aînées', NULL, 5),
('1 Rue de la Vallée', NULL, 4),
('2 Avenue de la Volaille', NULL, 6),
('2 Rue de la Vallée', NULL, 4),
('1 Avenue des Amoureux', NULL, 5),
('7 Boulevard du Centre', NULL, 1);

INSERT INTO Utilisateur (IDu, MdpU, NomU, PrenomU, Date_NaisU, MailU, role, ID_adresse) VALUES
(1, '$2y$10$irQWq/PB7HQo3h4bRalhNu6s578duuY6xxUFKFH8xisZCF2cDZ2ve', 'Do1e', 'John', '1990-05-15', 'john.doe@example.com', 'Etudiant',1),
(2, '$2y$10$GUV43oU9ySbfPHVpsZMlf.yu2jhu8VeY.1gnQVi3ktlMKufLgtSae', 'Smith', 'Alice', '1985-09-21', 'alice.smith@example.com', 'Administrateur',2),
(3, '$2y$10$ONOBFIHwXjhPNwE.3KoSZOcnCS9nipiI5mQkeFGCHCEwRHXbsaBfC', 'Johnson', 'Michael', '1982-03-10', 'michael.johnson@example.com', 'Etudiant',3),
(4, '$2y$10$M.rFKE.f4qk.1q9tuIz6PeecU5zxcst6EBVbVJDcnFltDbtbZ1vaG', 'Williams', 'Emily', '1995-12-03', 'emily.williams@example.com', 'Etudiant',4),
(5, '$2y$10$cEuAmqLaOM2LLDzpR8pX7OB6rcUW9L08HJo5GArrs4BNO77ODL0qe', 'Brown', 'Jessica', '1988-07-28', 'jessica.brown@example.com', 'Etudiant',5),
(6, '$2y$10$LIJeO4jNKUtqlSQ8QTkTy.Ml8tNJIqPddDAHN.FCcAZNS5heL6piS', 'Jones', 'David', '1979-11-18', 'david.jones@example.com', 'Pilote',6),
(7, '$2y$10$ObeTsYrP21cDCTywvt98ue5Q.iWvOXd29Kx.e6MR28a9faGKaQT9e', 'Garcia', 'Maria', '1984-02-22', 'maria.garcia@example.com', 'Etudiant',7),
(8, '$2y$10$Ewp71iVUa84ygjNeUFExT.L4wWrHteDWahacikC5NS/fkY/RzcXim', 'Martinez', 'Daniel', '1992-06-14', 'daniel.martinez@example.com', 'Etudiant',8),
(9, '$2y$10$f5OQt5o0jmYlpYorznsIcumsluJfphHyW6xT/CALtXZwvaJjXw832', 'Hernandez', 'Jennifer', '1987-04-05', 'jennifer.hernandez@example.com', 'Etudiant',9),
(10, '$2y$10$zBC3ocD.F3FaSP40O06NzO/tezS2M2Jp1MSc4G9FxIdKZt8KiUAs.', 'Lopez', 'Christopher', '1980-09-09', 'christopher.lopez@example.com', 'Etudiant',10),
(11, '$2y$10$v2IW00Vb5ugjyjj3PNb7jeZWbwZxgK3rehhzynx3uNVuU3/xUyQuW', 'Lee', 'Kim', '1991-08-12', 'kim.lee@example.com', 'Etudiant',11),
(12, '$2y$10$kHK4MkyEMjEGMXzTB1/5Vu5GXYMVrEQ7dVsvtPB9vNxqDfpXCXaca', 'Kim', 'Brian', '1983-01-30', 'brian.kim@example.com', 'Etudiant',12),
(13, '$2y$10$oWhOCYP9fXfyDuxO9H/ueOeOhHmX9N4REtn5TzIv6vIq6nr493Gvq', 'Park', 'Jessica', '1975-07-07', 'jessica.park@example.com', 'Pilote',13),
(14, '$2y$10$fcRw9BVENrz1sL.iMc224epQi4btsxJvrnrmQxXlIO4gv6QcmuxKW', 'Chen', 'William', '1993-04-25', 'william.chen@example.com', 'Etudiant',14),
(15, '$2y$10$z0Ly1MFyvHAFXM.t5luLSeWjZ80amAlLRH.25Y0pWP2BjKZZQUhf.', 'Wang', 'Linda', '1986-10-17', 'linda.wang@example.com', 'Etudiant',15);

INSERT INTO promotion (Promotion, IDT, IDu, idCentre) 
VALUES 
('A1', 1, 13, 2),
('A2', 2, 13, 1),
('A2', 1, 13, 2),
('A1', 1, 4, 2),
('A1', 1, 5, 1);

INSERT INTO etudiant (IDu, IDProm) 
VALUES 
(4, 1),
(1, 1),
(3, 2),
(5, 1),
(7, 2),
(8, 3),
(9, 3),
(10, 3),
(11, 2),
(12, 1),
(14, 1),
(15, 2);

INSERT INTO Secteur_Activite (Secteur_Act) VALUES
('Marketing'),
('Informatique'),
('Finance'),
('Medecine');


INSERT INTO Entreprise (NomE, descr, MailE, TelE, `Site`, Moyenne, IDu, IdSec, ID_adresse) 
VALUES 
('Tech Solutions', 'Société spécialisée dans le développement logiciel.', 'contact@techsolutions.com', 1234567890, 'https://www.techsolutions.com', 4.5, 2, 2, 1),
('Finance Corp', 'Firme de conseil financier offrant des services de gestion de patrimoine.', 'info@financecorp.com', 987654321, 'https://www.financecorp.com', 4.2, 13, 3, 2),
('HealthCare Innovations', 'Entreprise travaillant sur des solutions technologiques pour le domaine de la santé.', 'info@healthcareinnovations.com', 654321987, 'https://www.healthcareinnovations.com', 4.8, 2, 4, 3),
('Marketing Experts', 'Agence de marketing offrant des services de stratégie et de publicité.', 'contact@marketingexperts.com', 789456123, 'https://www.marketingexperts.com', 4.0, 13, 1, 4);


INSERT INTO Competences(Comp)
VALUES
('HTML'),
('CSS'),
('JS'),
('React'),
('Node.JS'),
('Analyse financière'),
('Modelisation'),
('Reporting'),
('Biologie moleculaire'),
('Genie genetique'),
('Microbiologie'),
('Stratégie de contenu'),
('Réseaux sociaux'),
('Analyse de données');

INSERT INTO Offre (Duree, Poste, remune, Date_Stage, Nb_place, Descr, IDE) 
VALUES 
(3, 'Développeur Full-stack', 800, '2024-04-15', 5, 'Développeur Full-stack pour projet e-commerce.', 1),
(6, 'Analyste financier junior', 1200, '2024-05-20', 3, "Recherche d'un analyste financier junior pour notre équipe.", 2),
(4, 'Ingénieur en biotechnologie', 1000, '2024-06-10', 2, "Poste d'ingénieur en biotechnologie pour développement de nouveaux médicaments.", 3),
(5, 'Chargé de marketing digital', 900, '2024-07-01', 4, 'Chargé de marketing digital pour campagnes publicitaires innovantes.', 4);

INSERT INTO necessite(IDoffre, IDComp)
VALUES 
(1,1),
(1,2),
(1,3),
(1,4),
(1,5),
(2,6),
(2,7),
(2,8),
(3,9),
(3,10),
(3,11),
(4,12),
(4,13),
(4,14);

INSERT INTO Viser (IDoffre, IDT) 
VALUES 
(1, 1),
(2, 2),
(3, 2),
(4, 1);

INSERT INTO noter(IDu, NoteU, IDE)
VALUES
(11, 3, 1),
(12, 3, 1),
(14, 5, 3),
(15, 2, 4);