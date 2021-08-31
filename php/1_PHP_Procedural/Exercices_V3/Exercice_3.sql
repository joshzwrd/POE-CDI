-- Créer une table Lecteur, dont les attributs sont :        
-- -- ID (Clé primaire et auto-incrémenté), Nom, Prenom, Age, Ville, Profession        
-- Remarque : l'age du lecteur doit être supérieur ou égal à 18 ans et la profession doit être par default Etudiant.
-- Alimentez la table Lecteur par 10 jeux fictifs.    
-- Faites en sorte que certains lecteurs appartiennent à la même ville


CREATE TABLE Lecteur (
    ID int NOT NULL AUTO_INCREMENT,
    Nom varchar(255) ,
    Prenom varchar(255),
    Age int,
    Nationalite varchar(255),
    Ville varchar(255),
    Profession varchar(255) DEFAULT 'Etudiant',
    CHECK (Age>=18),
    PRIMARY KEY (ID),

);


INSERT INTO Lecteur
    (nom, prenom, age, nationalite, ville, profession) 
VALUES
    ('Sosa', 'Josh' , 24, 'Congolaise', 'Lille', 'Etudiant'),
    ('Benzema', 'Karim' , 33, 'Algérienne', 'Madrid', 'Sportif'),
    ('Lopes', 'Luna' , 24, 'Portugaise', 'Lille', 'Etudiant'),
    ('Chaton', 'Ina' , 20, 'Francaise', 'Lille', 'Etudiant'),
    ('Zed', 'Echo' , 55, 'Francaise', 'Milan', 'Retraité'),
    ('Belluci', 'Monica' , 47, 'Italienne', 'Milan', 'Actrice'),
    ('Zidane', 'Zinedine' , 67, 'Algérienne', 'Madrid', 'Sportif'),
    ('Harden', 'James' , 25, 'Americaine', 'Brooklyn', 'Sportif'),
    ('Marley', 'Bob' , 33, 'Jamaiquaine', 'Brooklyn', 'Chanteur'),
    ('Peluche', 'Jakarta' , 18, 'Indonesienne', 'Lille', 'Etudiant');
