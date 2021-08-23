- Créer une base de données

```sql
CREATE DATABASE IF NOT EXISTS flotte
DEFAULT CHARACTER SET utf8
DEFAULT COLLATE utf8_general_ci; -- collation = sous jeu de Kres


-- Utiliser
USE flotte;

-- Modifier la database
ALTER DATABASE flotte
DEFAULT CHARACTER SET utf8mb4
DEFAULT COLLATE utf8mb4_general_ci;

-- Virer DB
DROP DATABASE flotte;
```

- Créer la table Compagnie(comp, nrue, rue, ville, comComp)

```sql
CREATE TABLE flotte.Compagnie(
	comp CHAR(4) PRIMARY KEY,    -- contrainte en ligne = inline
	nrue INTEGER(3),  -- taille 3 = jusqu'à 999 compagnies
	rue CHAR(20),
	ville CHAR(15) DEFAULT 'Paris' COMMENT 'Nom en clair de la ville',
	comComp CHAR(15) NOT NULL    -- contrainte en ligne = inline
) ENGINE=InnoDB DEFAULT CHARACTER SET utf8 DEFAULT COLLATE utf8_general_ci;

-- Décrire une table = structure de la table
DESCRIBE flotte.Compagnie;

-- Virer une table  => DROP
DROP TABLE flotte.Compagnie;

-- Ajouter une compagnie => INSERT
-- L'apostrophe = guillemet SQL pour data de type CHAR ou VARCHAR

INSERT INTO flotte.Compagnie(comp, nrue, ville, comComp)
VALUES('AF', 24, 'Marseille', 'Air France');

INSERT INTO flotte.Compagnie(comp, nrue, rue, comComp)
VALUES('EJ', 140, 'rue des Pommes', 'Easy Jet');
```


- Créer la table Pilote(brevet, nom, nbHVol, compa)

```sql
CREATE TABLE flotte.Pilote(
	brevet CHAR(6) PRIMARY KEY,
	nom CHAR(20) NOT NULL,
	nbHVol DECIMAL(7, 2),
	compa CHAR(4),
	
	CONSTRAINT un_nom UNIQUE(nom),
	-- CONSTRAINT pk_brevet PRIMARY KEY(brevet),
	CONSTRAINT ck_nbHVol CHECK(nbHVol BETWEEN 0 AND 20000),
	CONSTRAINT fk_Pil_Comp FOREIGN KEY(compa) REFERENCES Compagnie(comp)
)ENGINE=InnoDB DEFAULT CHARACTER SET utf8 DEFAULT COLLATE utf8_general_ci;

-- Ajout d'un pilote de Air france

INSERT INTO flotte.Pilote(brevet, nom, nbHVol, compa)
VALUES('PL-1', 'Jorge', 25, 'AF');

-- Ajout d'un pilote de Royal Air Maroc : KO

INSERT INTO flotte.Pilote(brevet, nom, nbHVol, compa)
VALUES('PL-2', 'Mahdi', 30, 'RAM');

-- Ajout d'un pilote de Air france, de nom Jorge : KO
INSERT INTO flotte.Pilote(brevet, nom, nbHVol, compa)
VALUES('PL-2', 'Jorge', 25, 'AF');

-- Ajout d'un pilote de Air france, avec 40000 heures de vol : KO
INSERT INTO flotte.Pilote(brevet, nom, nbHVol, compa)
VALUES('PL-2', 'Dupont', 40000, 'AF');

-- Ajout d'un pilote de Air france
INSERT INTO flotte.Pilote(brevet, nom, nbHVol, compa)
VALUES('PL-2', 'Martin', 62, 'AF');
```

- Créer un index sur la colonne ville de la table Compagnie

```sql
CREATE INDEX idx_ville ON flotte.Compagnie(ville(3));
SHOW INDEX FROM flotte.Compagnie;
```
