-- RAPPEL (SQL: requêtes de base)


-- Gestion d'une base de données

REATE DATABASE databasename;
---------------------------------------------------------------------------------------------------
DROP DATABASE databasename;
---------------------------------------------------------------------------------------------------
CREATE TABLE Persons (
PersonID int,
LastName varchar(255),
FirstName varchar(255),
Address varchar(255),
City varchar(255)
);
---------------------------------------------------------------------------------------------------
DROP TABLE table_name;
---------------------------------------------------------------------------------------------------
TRUNCATE TABLE table_name;
---------------------------------------------------------------------------------------------------
ALTER TABLE table_name ADD column_name datatype;

-- Commprendre une TABLE 

CREATE TABLE table_name (
column1 datatype constraint,
column2 datatype constraint,
column3 datatype constraint,
....
);

-- The following constraints are commonly used in SQL:
/*
NOT NULL - Ensures that a column cannot have a NULL value
UNIQUE - Ensures that all values in a column are different
PRIMARY KEY - A combination of a NOT NULL and UNIQUE.
FOREIGN KEY - Uniquely identifies a row/record in another table
CHECK - Ensures that all values in a column satisfies a specific condition
DEFAULT - Sets a default value for a column when no value is specified
INDEX - Used to create and retrieve data from the database very quickly
*/

-- Gestion d'une TABLE 

-- PRIMARY KEYCREATE

CREATE TABLE Persons (
ID int NOT NULL,
LastName varchar(255) NOT NULL,
FirstName varchar(255),
Age int,
PRIMARY KEY (ID)
);

-- FOREIGN KEYCREATE

CREATE TABLE Orders (
OrderID int NOT NULL,
OrderNumber int NOT NULL,
PersonID int,
PRIMARY KEY (OrderID),
FOREIGN KEY (PersonID) REFERENCES Persons(PersonID)
);

-- Requête de base

-- INSERT INTO
INSERT INTO Customers
(CustomerName, City, Country) VALUES ('Cardinal', 'Stavanger', 'Norway');
---------------------------------------------------------------------------------------------------

-- SELECT
SELECT * FROM Customers WHERE Country='Germany' AND City='Berlin';
SELECT * FROM CustomersWHERE City='Berlin' OR City='München';
SELECT * FROM Customers WHERE NOT Country='Germany';
---------------------------------------------------------------------------------------------------

-- UPDATE
UPDATE Customers SET ContactName = 'Alfred Schmidt', City= 'Frankfurt' WHERE CustomerID = 1;

---------------------------------------------------------------------------------------------------
-- DELETE
DELETE FROM Customers WHERE CustomerName='Alfreds Futterkiste';

