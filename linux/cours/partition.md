# Partition


### Gestion des disques

**Firmware BIOS Legacy**

- Disque système en MBR
    - 4 partitions maxi : 1 principale (ou primaire) minimum / 1 étendue facultative maximum, contenant des partitions logiques


- OS installé : 32 ou 64 bits

- Partition taille maxi 2 Tio

Firmware UEFI (Unified Extensible Firmware Interface)

- Disque système en GPT


    - 128 partitions maxi

- OS installé : 64 bits

- Partition taille maxi 256 Tio

### Gestion Sous Linux

Nom des disques durs : sda, sdb, sdc, sdd, sde ……..

Noms des partitions :

**Pour un disque MBR :**

    sda1, sda2, sda3, sda4 : Partitions primaires/principales ou étendues

    sda5 ou + : Partitions logiques (contenues dans la partition étendue)

**Schéma de partition classique :**

    sda1 : principale

    sda2 : étendue

    sda5 : logique contenue dans l’étendue

### Utilitaires de gestion de disques

**lsblk** pour visualiser l’état des disques et partitions

    fdisk /dev/sdx   // pour gérer le disque sdx 

**Un disque nvme (Non Volatile Memory Express)**

Le standard **NVMe** n’utilise pas le bus **SATA**, il utilise directement le bus **PCIe (PCI express)**

Sous Linux, un disque dur nvme sera mentionné comme /dev/nvme0n1

Les disques LVM (Logical Volume Manager)

Les systèmes de fichiers

Système qui permet d’organiser la façon dont les données vont être stockées et potentiellement sécurisées.

FAT (FAT12 / FAT16 / FAT32) : Ancien FS, mais non sécurisés. On s’en sert toujours/encore pour des clés USB

- Mise à jour de BIOS/Firmware EFI

- Monde audio/salon (autoradio, et autres) qui ne savent pas lire le NTFS

- FAT32 : Limitation taille de fichiers < 4Gio et partition <32 Gio

- FAT32 ne permet pas d’implémenter la sécurité/permission sur les fichiers

**NTFS (New Technology File System)**

Existe depuis Windows NT

NTFS : Possibilité de mettre en œuvre les ACL

Taille partition jusqu’à 2 Tio en MBR / 256 Tio en, GPT

**Sous Linux, on a :**

EXT2, EXT3, **EXT4.**

Linux sait lire/écrire vers NTFS. Mais Microsoft ne sait pas lire/écrire vers EXT2/3/4.*

- Création de partition (fait avec fdisk /dev/sdb)

- Installer un système de fichier (NTFS ou autre) (fait avec mkfs -t ext4 /dev/sdb1)

- Formater la partition selon les paramètres du système de fichiers (fait avec mkfs -t ext4 /dev/sdb1)

- Affectation de la lettre de lecteur (propre à Windows)

o Sous Linux, on n’affecte pas de lettre lecteur, on procède au **montage de la partition dans un dossier vide.**

Création du répertoire relatif au point de montage dans /mnt/test1 (par exemple)

    mkdir /mnt/test1
    mount /dev/sdb1 /mnt/test1/

Vérification en tapant mount

**Démontage des partitions :**

    umount /dev/sdbv n=numéro de la partition à démonter


Suppression des partitions avec fdisk /dev/sdb**n**

### Mise en œuvre des LVM

- Installer le paquet lvm2

- Création des volumes physiques (pvcreate) en choisissant les disques et/ou partitions

    - pvcreate /dev/sdb /dev/sdc

    - sdb et sdc sont ‘élus’ comme volumes physiques


- Création du Groupe de Volume (vgcreate)

    - vgcreate groupevol1 /dev/sdb /dev/sdc


- Création des volumes logiques (lvcreate)

    - lvcreate -L 25G -n lv01


- Extension du volume logique

    - lvextend -L+5G /dev/groupevol1/lv01