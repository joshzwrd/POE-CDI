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

lsblk pour visualiser l’état des disques et partitions

    fdisk /dev/sdx   // pour gérer le disque sdx 

**Un disque nvme (Non Volatile Memory Express)**

Le standard NVMe n’utilise pas le bus SATA, il utilise directement le bus PCIe (PCI express)

Sous Linux, un disque dur nvme sera mentionné comme /dev/nvme0n1