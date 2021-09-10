# XML : DTD 


La DTD permet de fixer des règles de contrôler si votre fichier XML est valide. On parle également de grammaire d'une structure XML.Une DTD est donc un fichier, lié à notre fichier XML, précisant comment ce dernier DOIT être composé. 

Ce fichier précise notamment :
comment les balises s'imbriquent entres elles ;
quelles sont les balises obligatoires et facultatives ;

Exemple : 

```xml
<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE etudiant SYSTEM "etudiant.dtd">
<etudiant>
    <nom>Legrand</nom>
    <prenom>Alain</prenom>
    <numero>9999</numero>
    <specialite>Droit</specialite>
    <moyenne>13</moyenne>
</etudiant>
```

```xml
<!-- etudiant.dtd -->

<!ELEMENT etudiant (nom, prenom, numero, specialite)>
<!ELEMENT nom (#PCDATA)>
<!ELEMENT penom (#PCDATA)>
<!ELEMENT numero (#PCDATA)>
<!ELEMENT specialite (#PCDATA)>


<!--

L'élément racine du document est note.

L'élément etudiant doit contenir les éléments: "nom, prenom, numero, specialite". 

Les éléments nom, prenom, numero et specialite sont de type "#PCDATA".

#PCDATA signifie des données textuelles analysables 

-->
```

**Il existe 4 façons d’utiliser une DTD :**

1. Pas de DTD. Dans ce cas, le fichier est juste bien formé (respectant la syntaxe XML) et ne sera JAMAIS valide.

2. On déclare la DTD et on y ajoute les définitions, le tout directement dans le fichier XML : on parle alors de DTD interne. 

3. La DTD est créée dans un fichier séparé du fichier XML et est stockée quelque part sur votre système ou sur votre réseau. On parle de DTD privée.

4. On déclare une DTD publique, disponible à tout le monde. Exemple :
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">







Maintenant, nous allons nous atteler aux attributs de nos balises. Tout comme la définition des balises, la définition des attributs doit respecter des règles.Un attribut se déclare de cette façon : 
<**!ATTLIST** balise attribut TypeAttribut TypeDeDefinition ValeurParDefaut>
Il y a trois types de définition :

    #REQUIRED : l'attribut DOIT avoir une valeur, l'attribut est donc obligatoire.
    #IMPLIED : l'attribut est facultatif.
    #FIXED : l'attribut a une valeur fixe, définie à l'avance.



**CDATA Acronyme pour "Character DATA"** : La valeur de l'attribut sera donc une chaîne de caractères. Exemple de syntaxe : 

<!ATTLIST balise attribut CDATA #IMPLIED > 
Exemple de XML : <balise attribut="valeur de mon attribut"/><balise/>
**ID**  : La valeur des attributs de ce type DOIT OBLIGATOIREMENT être unique. Ceci peut servir de clé de recherche ou de référencement dans le document (pensez aux ID des balises HTML permettant la manipulation de leurs contenus via du JavaScript).

Exemple de syntaxe : 
<!ATTLIST tutoriel ref ID #REQUIRED> 
Exemple de XML : <tutoriel ref="Java-009"/>


**(valeur1|valeur2|valeur3)**  : Ceci permet de figer une liste de valeurs possibles pour un attribut et, si un attribut n'a pas la bonne valeur, le document XML ne sera pas valide.
Exemple de syntaxe :
<!ATTLIST pays code (FR|EN|IT|AR) #REQUIRED> 
Exemple de XML :
<pays code="FR"/>
<pays code="AR"/>

