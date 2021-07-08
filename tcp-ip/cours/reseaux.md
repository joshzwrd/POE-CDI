# Les services réseaux

## DHCP


**A quoi ça sert ?**

Attribue dynamiquement une adresse IP à une machine qui se connecte sur le réseau.

Il délivre des informations telles que : **Le BAIL DHCP**

Qui est une durée de temps pour laquelle les informations seront alloué à la machine,
c’est-à-dire qu’une Adresse IP attribué par le DHCP à une durée limité 

Il peut aussi fournir d’autres paramètres réseau :
-	Masque de sous-réseau du serveur
-	Adresse IP de la passerelle 

La passerelle est un routeur ou un pare-feu qui permet au serveur de communiquer avec une machine hors du réseau et l’Adresse IP du serveur DNS 

A la maison c’est la Box Internet qui permet d’assurer le service DHCP en attribuant une Adresse IP à chaque machines se connectant sur le réseau (ordinateur, téléphone, tablette…).
En entreprise c’est le SERVEUR qui porte se rôle.

### DHCP – Packet Tracer

Configurer l’adresse IP de la carte réseau du serveur de façon statique

**Service DHCP :**

**Pool Name :** Nom de l’étendue / **Pool par défaut :** ServerPool (on ne peut pas changer le nom de ce pool par défaut)

**Default Gateway :** Passerelle par défaut

**DNS Server :** Résolveurs DNS

**Start IP Address :** Début de la plage d’adresse

**Max number of users :** Nombre d’hôtes à adresser


## DNS 

**DNS : Domain Name System**

Résout les noms symboliques en adresses IP

**Enregistrements principaux :** A, PTR, CNAME, NS, SOA

**FQDN :** Fully Qualified Domain Name : Nom de domaine pleinement qualifié

    Nom d’ordinateur : PC1 Nom NetBIOS

    Domaine : m2i.net Nom de domaine (Suffixe DNS)

    FQDN : PC1.m2i.net


**Qu'est-ce qu'un serveur DNS ?**

Le serveur DNS (**Domain Name System**, ou **Système de noms de domaine** en français) est un service dont la principale fonction est de **traduire** un nom de domaine en **adresse IP**. Pour simplifier, le serveur DNS agit comme **un annuaire** que consulte un ordinateur au moment d'accéder à un autre ordinateur **via un réseau**. Autrement dit, le serveur DNS est ce service qui permet **d'associer à site web** (ou **un ordinateur connecté ou un serveur**) une **adresse IP**, comme un annuaire téléphonique permet d'associer un numéro de téléphone à un nom d'abonné.


## HTTP

**A quoi sert le Protocole http ?**

Il permet d'afficher des pages web,**HTTP (Hypertext Transfer Protocol)**est l'ensemble de règles régissant le transfert de fichiers (texte, images, son, vidéo, et autres fichiers multimédias) sur le Web. Dès qu'un utilisateur se connecte au Web et ouvre un navigateur, il utilise indirectement le protocole HTTP.

HyperText Transfer Protocol

Communication entre un client et un Serveur Web

**Protocole HTTP : Port 80**

Aujourd’hui, tous les sites Web sont passés en HTTPS, (http Sécurisé / http SSL)

Protocole HTTPS : Port 443

Microsoft : IIS (Internet Information Services)

Linux : Apache 2, NginX

**Remarque :**

La configuration IP d’un serveur (quel qu’il soit) se fait toujours de façon, statique (et non en dynamique) pour éviter que l’IP ne change