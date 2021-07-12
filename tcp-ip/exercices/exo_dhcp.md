# Exercice DHCP

**Mettre en oeuvre:**

- un réseau avec 5 PC et 5 Laptops
- 1 serveur DHCP pour configure les postes
	- Dans le sous réseau 172.25.100.0/26
	- Prévoir 20 postes/adresses dans le pool (dans la plage d'adresse)

- Vérifier que tous les postes récupèrent une adresse su serveur DHCP


**Correction Exercice DHCP :**

    Adresse réseau : 172.25.100.0/26

    Masque de sous-réseau : 255.255.255.192

    50 Pc dans la plage d’adresses : 172.25.100.1/26 à 172.25.100.50/26

    Libérer le bail d’une configuration IP : ipconfig /release

    Renouveler une demande d’adresse / bail : ipconfig /renew