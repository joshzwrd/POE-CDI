# Exercice routage

- Configurer chacun des routeurs
	- IP des interfaces
- Configurer les PC
	- IP des PC
- Mettre en place les routes lorsque c'est nécessaire
	- Les routes se créent en ligne de commande (CLI)

**Exemple concret:**

	----10.10.10.0/24---R1-FA2/0-----20.20.20.0/24--------R2-------25.12.10.0/24
			    |FA1/0
			    |____________30.30.30.0/24--------R3-------35.12.10.0/24


Lorsqu'un paquert provient du réseau 10.10.10.0

**On se place dans la configuration de R1 et on se dit la choise suivante:**

Pour joindre le réseau 25.12.10.0/24, on doit sortir par l'interface FA2/0

		Router(config)# ip route 25.12.10.0 255.255.255.0 fa2/0
	ou 	Router(config)# ip route 25.12.10.0 255.255.255.0 20.20.20.254

Pour joindre le réseau 35.12.10.0/24, on doit sortir par l'interface FA1/0
		Router(config)# ip route 35.12.10.0 255.255.255.0 fa1/0
		Router(config)# ip route 35.12.10.0 255.255.255.0 30.30.30.254