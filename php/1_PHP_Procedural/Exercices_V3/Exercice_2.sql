-- Créez une table nommée Livre, dont les champs sont :
-- -- ID : nombre entier    
-- -- Titre : chaine de caractère dont la taille est de 250;    
-- -- Auteur : chaine de caractère dont la taille est de 150;    
-- -- Extrait : Texte;    
-- -- Année : nombre entier;
-- Tenez compte que :         
-- Le champ ID est une clé primaire        
-- Prévoyez un champ Ref comme clé étrangère faisant référence à la table Bibliotheque.


CREATE TABLE Livre (
    ID int,
    Titre varchar(250),
    Auteur varchar(150),
    Extrait text,
    Annee int,
    Ref int,

    PRIMARY KEY (ID),
    FOREIGN KEY (Ref) REFERENCES bibliotheque(Ref)

);