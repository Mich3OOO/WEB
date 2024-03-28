INSERT INTO departement (ID_departement, departement) 
VALUES 
(1, 'Île-de-France'),
(2, 'Rhône-Alpes'),
(3, 'Bouches-du-Rhône'),
(4, 'Nouvelle-Aquitaine');

INSERT INTO ville (Code_Post,ville, ID_departement) 
VALUES 
(75001,'Paris', 1),
(69001,'Lyon', 2),
(13001,'Marseille', 3),
(33000,'Bordeaux', 4);

INSERT INTO adresse (adresseA, complementA, Code_Post) 
VALUES 
('12 Rue de la Liberté', NULL, 75001),
('8 Avenue des Roses', 'Appartement 3', 69001),
('45 Boulevard de la Santé', NULL, 13001),
('30 Rue du Commerce', NULL, 33000);

INSERT INTO Utilisateur (IDu, MdpU, NomU, PrenomU, Date_NaisU, MailU, ID_adresse) VALUES
(1, '$2y$10$irQWq/PB7HQo3h4bRalhNu6s578duuY6xxUFKFH8xisZCF2cDZ2ve', 'Do1e', 'John', '1990-05-15', 'john.doe@example.com', 1),
(2, '$2y$10$GUV43oU9ySbfPHVpsZMlf.yu2jhu8VeY.1gnQVi3ktlMKufLgtSae', 'Smith', 'Alice', '1985-09-21', 'alice.smith@example.com', 2),
(3, '$2y$10$ONOBFIHwXjhPNwE.3KoSZOcnCS9nipiI5mQkeFGCHCEwRHXbsaBfC', 'Johnson', 'Michael', '1982-03-10', 'michael.johnson@example.com', 2),
(4, '$2y$10$M.rFKE.f4qk.1q9tuIz6PeecU5zxcst6EBVbVJDcnFltDbtbZ1vaG', 'Williams', 'Emily', '1995-12-03', 'emily.williams@example.com', 3),
(5, '$2y$10$cEuAmqLaOM2LLDzpR8pX7OB6rcUW9L08HJo5GArrs4BNO77ODL0qe', 'Brown', 'Jessica', '1988-07-28', 'jessica.brown@example.com', 4),
(6, '$2y$10$LIJeO4jNKUtqlSQ8QTkTy.Ml8tNJIqPddDAHN.FCcAZNS5heL6piS', 'Jones', 'David', '1979-11-18', 'david.jones@example.com', 4),
(7, '$2y$10$ObeTsYrP21cDCTywvt98ue5Q.iWvOXd29Kx.e6MR28a9faGKaQT9e', 'Garcia', 'Maria', '1984-02-22', 'maria.garcia@example.com', 2),
(8, '$2y$10$Ewp71iVUa84ygjNeUFExT.L4wWrHteDWahacikC5NS/fkY/RzcXim', 'Martinez', 'Daniel', '1992-06-14', 'daniel.martinez@example.com', 1),
(9, '$2y$10$f5OQt5o0jmYlpYorznsIcumsluJfphHyW6xT/CALtXZwvaJjXw832', 'Hernandez', 'Jennifer', '1987-04-05', 'jennifer.hernandez@example.com', 4),
(10, '$2y$10$zBC3ocD.F3FaSP40O06NzO/tezS2M2Jp1MSc4G9FxIdKZt8KiUAs.', 'Lopez', 'Christopher', '1980-09-09', 'christopher.lopez@example.com', 3),
(11, '$2y$10$v2IW00Vb5ugjyjj3PNb7jeZWbwZxgK3rehhzynx3uNVuU3/xUyQuW', 'Lee', 'Kim', '1991-08-12', 'kim.lee@example.com', 2),
(12, '$2y$10$kHK4MkyEMjEGMXzTB1/5Vu5GXYMVrEQ7dVsvtPB9vNxqDfpXCXaca', 'Kim', 'Brian', '1983-01-30', 'brian.kim@example.com', 1),
(13, '$2y$10$oWhOCYP9fXfyDuxO9H/ueOeOhHmX9N4REtn5TzIv6vIq6nr493Gvq', 'Park', 'Jessica', '1975-07-07', 'jessica.park@example.com', 2),
(14, '$2y$10$fcRw9BVENrz1sL.iMc224epQi4btsxJvrnrmQxXlIO4gv6QcmuxKW', 'Chen', 'William', '1993-04-25', 'william.chen@example.com', 3),
(15, '$2y$10$z0Ly1MFyvHAFXM.t5luLSeWjZ80amAlLRH.25Y0pWP2BjKZZQUhf.', 'Wang', 'Linda', '1986-10-17', 'linda.wang@example.com', 4);

INSERT INTO campus (NomC) 
VALUES 
('Campus Paris'),
('Campus Lyon'),
('Campus Marseille');

INSERT INTO Secteur_d_activité (Secteur_d_activité) 
VALUES 
('Technologie'),
('Finance'),
('Santé'),
('Marketing');


INSERT INTO types_de_promotions (Nom_du_Type) 
VALUES 
('Informatique'),
('Économie'),
('Médecine'),
('Communication');


INSERT INTO promotion (Promotion, IDT, IDu, idCentre) 
VALUES 
('Promotion 2023', 1, 13, 1),
('Promotion 2022', 2, 13, 2),
('Promotion 2024', 3, 13, 3),
('Promotion 2025', 4, 13, 1);


INSERT INTO etudiant (IDu, IDProm) 
VALUES 
(1, 1),
(5, 2),
(3, 3),
(4, 4);


INSERT INTO Entreprise (IDE, NomE, descr, MailE, TelE, `Site`, Moyenne, IDu, IdSec, ID_adresse) 
VALUES 
('1', 'Tech Solutions', 'Société spécialisée dans le développement logiciel.', 'contact@techsolutions.com', 1234567890, 'https://www.techsolutions.com', 4.5, 2, 1, 1),
('2', 'Finance Corp', 'Firme de conseil financier offrant des services de gestion de patrimoine.', 'info@financecorp.com', 987654321, 'https://www.financecorp.com', 4.2, 13, 2, 2),
('3', 'HealthCare Innovations', 'Entreprise travaillant sur des solutions technologiques pour le domaine de la santé.', 'info@healthcareinnovations.com', 654321987, 'https://www.healthcareinnovations.com', 4.8, 2, 3, 3),
('4', 'Marketing Experts', 'Agence de marketing offrant des services de stratégie et de publicité.', 'contact@marketingexperts.com', 789456123, 'https://www.marketingexperts.com', 4.0, 13, 4, 4);


INSERT INTO Offre (Duree, Poste, Competence, remune, Date_Stage, Nb_place, Descr, IDE) 
VALUES 
(3, 'Développeur Full-stack', 'HTML, CSS, JavaScript, React, Node.js', 800, '2024-04-15', 5, 'Développeur Full-stack pour projet e-commerce.', 1),
(6, 'Analyste financier junior', 'Analyse financière, Modélisation, Reporting', 1200, '2024-05-20', 3, "Recherche d'un analyste financier junior pour notre équipe.", 2),
(4, 'Ingénieur en biotechnologie', 'Biologie moléculaire, Génie génétique, Microbiologie', 1000, '2024-06-10', 2, "Poste d'ingénieur en biotechnologie pour développement de nouveaux médicaments.", 3),
(5, 'Chargé de marketing digital', 'Stratégie de contenu, Réseaux sociaux, Analyse de données', 900, '2024-07-01', 4, 'Chargé de marketing digital pour campagnes publicitaires innovantes.', 4);

INSERT INTO Viser (IDoffre, IDT) 
VALUES 
(1, 1),
(2, 2),
(3, 3),
(4, 4);

CREATE USER testadmin IDENTIFIED BY "MDP";
GRANT ALL ON PROJETWEB.* TO testadmin WITH GRANT OPTION;
CREATE USER testpilote IDENTIFIED BY "MDP";
GRANT SELECT, INSERT, DELETE, UPDATE ON PROJETWEB.* TO testpilote;
CREATE USER testeleve IDENTIFIED BY "MDP";
GRANT SELECT ON PROJETWEB.* TO testeleve;
GRANT INSERT, DELETE ON PROJETWEB.Intéresser TO testeleve;
GRANT INSERT, DELETE ON PROJETWEB.Postuler TO testeleve;
