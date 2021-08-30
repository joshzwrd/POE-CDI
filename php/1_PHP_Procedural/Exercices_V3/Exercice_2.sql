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