# XML 

## Qu'est ce que le XML ?

**L'Extensible Markup Language** (**XML**), « langage de balisage extensible » en français.

XML est un métalangage informatique de balisage générique qui dérive du SGML.

XML a été créé par l'organisme W3C.

## Utilisation de l'XML

Le fait que XML n'a pas de balises définies permet notamment de créer des fichiers de
configuration, des structures de données utilisables, etc. Beaucoup d'applications ou de
Frameworks utilisent des fichiers de configuration au format XML (la plateforme JEE,
WSDL, Android...).

## Régles à respecter 

L’entête :

Exemple : 

```xml
<?xml version="1.0" encoding="UTF-8"?>
```

Le document doit contenir au moins une balise.

Le nom de chaque balise doit respecter les règles suivantes :

- Le nom peut contenir des lettres, des chiffres ou d'autres caractères.

- Il ne doit pas commencer par un chiffre ou un signe de ponctuation. 

- Il ne doit pas non plus commencer par xml, Xml, XML...

- Aucun espace dans le nom d'une balise n'est toléré.

- Chaque balise ouvrante doit avoir une balise fermante : 

    Exemple : <exemple></exemple>

- Si la balise est vide, <exemple></exemple> par exemple, une balise abrégée peut être utilisée en 

lieu et place, comme ceci : <exemple/>

- Les balises ne peuvent se chevaucher. 

    Exemple : <data><element></data></element>

- Les balises sont sensibles à la casse.

    Exemple : <ELEMENT> (≠) <element>

- Les valeurs des attributs des balises doivent obligatoirement être encadrées avec des quottes
simples/doubles.

- Toutes les balises du document doivent obligatoirement être contenues dans une balise unique
englobant tout le document. Cette balise s'appelle également la balise racine. Exemple :

```xml
<data>
    <element attribut="valeur">élément 1</element>
</data>
```

- Les caractères spéciaux interdits sont :

    < (Doit être remplacé par&lt;)
    > (Doit être remplacé par&gt;)
    & (Doit être remplacé par&amp;)

En revanche, il est possible d’utiliser une balise spéciale qui indique aux interpréteurs de ne pas tenir 
compte des caractères spéciaux. 

Exemple :
```xml
<description>
    <![CDATA[Dans cette description, "l'interdit" est bravé <o_o>.]]>
</description>
```

## Exemple(Eléments)

```xml
<?xml version="1.0" encoding="UTF-8"?>

<vehicule>
    <type>4 Roues</type>
    <constructeur>Quadro</constructeur>
    <annee>2018</annee>
    <couleur>Rouge</couleur>
    <modele>Scooter</modele>
    <matricule>9999AB</matricule>
</vehicule>
```