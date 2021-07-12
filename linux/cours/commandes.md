# Les commandes sous linux 

## Se connecter avec le compte root

**su**

root@serveur:/etc/apt

On voit bien qu’on utilise le comte du superutilisateur (root)

On voit aussi qu’on est toujours dans le répertoire /etc/apt

Su : Switch user : Permet de changer de compte utilisateur

su marcel

su laurence

su Identique à su root

Pour revenir au compte initial, on tape exit

Pour utilise pleinement les variables d’environnement du compte root, s’y connecter en faisant :

**su –**

## Système de fichier sous Linux

Sous Linux, il n’y pas de lettre de Lecteur

La racine du système de fichiers est symbolisée par **« / »**

Les répertoires particuliers du système de fichier

**« . »** Indique le répertoire courant (actuel)

Nécessaire pour exécuter un script dans le répertoire courant

**Exemple :**

    ./script.sh

**« .. »** Indique le répertoire parent

cd .. On remonte vers le répertoire parent (un cran au-dessus)

    ../script.sh 

On exécute le script script.sh se trouvant dans le répertoire parent

## Commandes de base pour la manipulation de fichiers et répertoires

**Attention : Linux est sensible à la casse. Les commandes se saisissent en minuscule, sauf cas exceptionnel**

    Mkdir : make directory : Créer un répertoire

    Mkdir toto : Crée le répertoire toto dans le répertoire courant

    Mkdir /toto : Crée le répertoire toto à la racine du système de fichiers

    Rmdir remove directory : Supprime un répertoire vide

    Rmdir /toto : Supprime le répertoire toto se trouvant à la racine

Lorsqu’il y a des fichiers dans un répertoire, pour le supprimer, on utilise la commande rm -rf

Chemin asbolu & chemin relatif

**Chemin absolu :**

Chemin complet d’un répertoire depuis la racine « / »

**Exemple :**

    samuel@serveur:/dev/repertoire1/ cd /etc/apt


**Les Commandes Ls :**

    Ls = Afficher le contenu d’un dossier

**Les Commandes Cd :**

    Cd = Se déplacer dans les dossiers

    Cd .. = Retourner au dossier parent (il possible de multiplier cette commande Ex : cd ../.. )

    Cd / = Revenir au dossier racine 


**Autres commandes :**

    Clear = Nettoyer l’affichage du terminal

    Mkdir = créer un dossier 

    Touch = créer un fichier

    Rm = Supprimer un élément