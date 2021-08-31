-- Ecrivez une requête retournant toutes les villes des lecteurs sans répétition.  
-- Ecrivez une requête retournant les informations en fonction d’une ville donnée.
-- Ecrivez une requête retournant tous les lecteurs ordonnés par la ville de résidence. 
-- Ecrivez une requête modifiant le prénom et le nom, en mettant "Nicolas" "Legrand" du lecteur ayant comme id 3.
-- Ecrivez une requête supprimant un lecteur en fonction de son nom.
-- Ecrire une requête retournant les deux premiers lecteurs français.
-- Ecrire une requête retournant le lecteur le plus âgé.

SELECT DISTINCT ville FROM Lecteur;
SELECT COUNT(DISTINCT  ville) FROM Lecteur;
SELECT * FROM Lecteur WHERE ville = 'Montpellier';
SELECT * FROM Lecteur ORDER BY ville;
SELECT * FROM Lecteur ORDER BY ville DESC;
UPDATE Lecteur SET nom = 'Legrand', prenom = 'Nicolas' WHERE id = 3;


DELETE FROM Lecteur WHERE nom ='Bert';
SELECT * FROM Lecteur WHERE nationalite = 'Francaise' LIMIT 2;
SELECT MIN(age) AS PlusJeuneLecteur FROM Lecteur;
SELECT MAX(age) AS MoinsJeuneLecteur FROM Lecteur;
