# Scripting Shell bash


**Entête du script**
    #!/bin/bash

**# ! SHEBANG (SHarp + Bang)**

On indique qu’on utilise le bash comme shell

    chmod u+x ./script.sh

On donne le droit en exécution au fichier/script

    ./script.sh

On exécute le script en n’oubliant pas le « ./ » pour indiquer que le script se trouve dans le répertoire courant.

**Variables**

    a=1

On ne met pas de ‘$’ pour la déclaration

    echo $a

On appelle le contenu de la variable avec un $a

    echo "il est 12h07 et la valeur de a vaut $a"

ici, il faut les guillemets pour que le contenu de la variable soit affiché.

    echo ‘il est 12h07 et la valeur de a vaut $a’

ici, il la variable est ignorée.

    read a

Le Shell attend que l’utilisateur saisisse une valeur pour la variable a.

    read -p "Entrer un nombre : " a

On affiche un message à l’utilisateur comme quoi on attend qu’il entre une valeur pour a. Le « -p » est indispensable

    echo -e "Bonjour\n"

ici, le -e permet de traiter les caractères d’échappement mentionnés par \t, \n, etc..

### Tests de comparaison

A savoir sur les codes retour

    $? Code retour qui examine la dernière commande

    = 0 : La dernière commande n’a généré aucune erreur ou le test est vrai

    ≠ 0 : La dernière commande a généré une erreur ou le test est faux

**Exemple :**

    test 1 -eq 3
    echo $?

Ici, le code retour sera 1 car le test est faux

    · -eq : Equal Egal

    · -lt : Less than Plus petit que

    · -le : Less or Equal Plus petit ou égal à

    · -gt : Greater than Plus grand que

    · -ge : Greater or Equal Plus grand ou égal à

**Attention ! Pour les tests de comparaison sur les nombres, ne pas utiliser les signes =, <, > qui sont réservés à la comparaison des chaines de caractères**

    · == Egalité entre chaine de caractères

    · \< Infériorité

    · \> Supériorité

    · != Différent de

### Conversion de chaines de caractères en majuscules ou minuscules

    ${a,,} Conversion de la variable a en minuscules

    ${a^^} Conversion de la variable a en majuscules

### Boucle tant que / Faire

    While [ Test ]

    do

    commande1

    commande2

    …

    done

### Traiter les calculs (Addition, soustraction, etc…)

    $((1+2)) Réalise l’addition 1+2

    $((1+2)) Réalise la soustraction 1-2

    $((1*2)) Réalise la multiplication 1*2

    $((1/2)) Réalise la division entière 1/2 (retourne uniquement la partie entière)

### Traitement de la division sous Shell Bash

On peut utiliser l’utilitaire bc

- Installer bc via apt install bc

- Pour afficher directement, en une seule ligne de commande, le résultat d’une division de a par b :

- echo "scale=3 ;$a/$b" | bc"

scale=3 C’est le nombre de chiffres après la virgule

| bc On transfère le résultat de la commande précédente à l’utilitaire bc

Structure conditionnelle case $variable in

Permet de remplacer dans certains cas, la structure if then else lorsque cette dernière comporte trop de conditions.

    case $variable in

    Valeur1) commande….. ;;

    Valeur2) commande….. ;;

    Valeur3) commande….. ;;

    Valeur4) commande….. ;;

    Valeur5) commande….. ;;

    *) commande pour tous les autres cas ;;

    esac

### Les boucles for.

Permettent :

- De réaliser une commande un certain de nombres de fois

- De réaliser des commande pour des valeurs contenues dans un fichier ou dans une variable de type tableau

### Boucle d’itération

    read -p "Entrer votre âge: " age
    read -p "Entrer un nombre entre 1 et 10: " n
    for ((i=1; i<=$n; i++))
    do
    echo "Dans $i ans, vous aurez $(($age+$i)) ans!"
    done

### Boucle pour lire des éléments dans un fichier

    # Grace aux antiquotes (ALT GR + 7) je récupère le résultat de cat /root/noms

    file=`cat /root/noms`

    #je déclare uen variable name pour faire une boucle qui va générer une commande pour chaque valeur de la variable

    for name in $file
    do
        echo "Je ne connais pas $name"
    done

### Traitement des champs d’une variable

On imagine qu’on dispose d’une variable :

$personnage="martin;dupont;47 ans;paris;développeur"

On souhaite séparer les champs/valeurs de cette variable. C’est possible grâce à la commande cut

- On considère que le séparateur de champs est « ; »

- On spécifie le numéro du champ par -f

    echo $personnage | cut -d ";" -f1

**Résultat:**

martin

    echo $personnage | cut -d ";" -f3

**Résultat:**

47 ans