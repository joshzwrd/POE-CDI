# Correction Exercice Réseau

## Correction Exercices

**Conversions**

192(10) = **11000000(2)**

224(10) = **11100000(2)**

512(10) = **10 00000000(2)**

64(10) = **01000000(2)**

15(10) = 16 -1 = **00001111(2)**

7(10) = **00000111(2)**

9(10) = **00001001(2)**

### Adresses IP en notation CIDR

124.25.56.2 – 255.255.224.0 : **124.25.56.2/19**

128.10.0.1 – 255.255.192.0 : **128.10.0.1/18**

192.168.10.25 – 255.255.0.0 : **192.168.10.25/16**

### Adresses IP en notation classique

124.25.56.2 /18 : 255.255.192.0

95.25.65.1 /18 : 255.255.192.0

172.18.20.32 /14 : 255.252.0.0

**Pour chaque cas, dire si les ordinateurs suivants sont dans le même réseau :**

PC1 : Adresse IP : 192.168.25.13 / Masque de sous-réseau : **255.255.255.0**

PC2 : Adresse IP : 192.168.25.12 / Masque de sous-réseau : **255.255.0.0**

Négatif : **PC1 est dans le réseau 192.168.25.0**

**PC2 dans le réseau 192.168.0.0**

PC1 : Adresse IP : 192.168.25.13 / Masque de sous-réseau : **255.255.128.0**

PC2 : Adresse IP : 192.168.22.12 / Masque de sous-réseau : **255.255.128.0**

**PC1 et PC2 sont tous deux dans le réseau 192.168.0.0/17 donc ils communiquent**