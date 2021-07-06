# TCP/IP

## Modèle OSI 

Le modèle OSI (Open Systems Interconnection) définit de quelle manière les ordinateurset les périphériques en réseau doivent procéder pour communiquer:

 - il spécifie le comportement d'un système dit ouvert;

 - les règles de communication constituent les protocoles normalisés;

 - le modèle OSI est normalisé par l'ISO.

 **Le modèle OSI se décompose en 7 parties appelées couches.**

 Les couches sont réparties selon les utilisations suivantes:
 
 - les couches 1 à 3 sont orientées transmission;

 - lacouche 4 est une couche intermédiaire;

 - lescouches 5 à 7 sont orientées traitement.

 ## Adressage IP 

**Qu’est qu’une adresse IP ?**

Une Adresse IP est un numéro unique pour identifier une machine, il se trouve sur la couche 3 

Adresse IP différent de l’Adresse MAC

Adresse MAC : couche 2 = Identifiant de l’interface réseau (embarqué dans le chipset). Non modifiable.

**En classful :**

L’adresse IP est stipulée par deux paramètres
192.168.1.25 Identifiant IP
255.255.255.0 Masque de sous-réseau

**En classless :**

L’adresse IP est stipulée par un seul paramètre

192.168.1.25/24

/24 => 24 = Nombre de bits à 1 du masque de sous-réseau (remplace le masque)

**Approche de l’adresse réseau**

    PC1 : 192.168.10.15/24
    PC2 : 192.168.10.16/24

PC1 et PC2 peuvent communiquer puisqu’ils sont dans le même réseau
Le Net-ID : 192.168.10 puisque le CIDR est de /24, masque de sous-réseau 255.255.255.0

L’adresse réseau de chaque PC est 192.168.10.0/24

**Exemple 2 :**

PC1 : 192.168.10.15/20

Calcul du Net-ID
On calcule l’adresse réseau grâce au ET logique

    11000000 10101000 00001010 00001111
    11111111 11111111 11110000 00000000
    
    11000000 10101000 00001010 00000000

192.168.10.0/24 : Adresse réseau du PC2

Les adresses réseau sont différentes donc PC1 et PC2 ne peuvent pas communiquer sur le même segment réseau.



 # Vocabulaire 

**Hôte :** Ordinateur, Imprimante, Tablette, Smartphone, Lecteur réseau, tout ce qui peut être connecté à un réseau

**Adresse IP :** Internet Protocol

**Adresse MAC :** Media Access Control