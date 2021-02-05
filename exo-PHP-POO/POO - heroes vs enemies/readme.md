# POO 2.0, Warcraft 4
Maintenant que vous avez créé votre premier script de combat basique avec des données brutes, nous allons ajouter un peu (beaucoup) de dynamisme dans tout ça !  
Le but de cette série d'exercices sera de rajouter une interface utilisateur permettant de choisir un archétype de Héros (qui sera ensuite généré aléatoirement).  
Nous allons également ajouter un peu de piment au combat et donc créer des archétypes d'ennemis plus ou moins forts.  
Vous devez réutiliser les différents fichiers créés précédemment MAIS ATTENTION ! Il faudra rajouter ou modifier certains éléments déjà existants.  
Dans cette version du jeu, le Héros et l'Ennemi attaquent en même temps, le Héros ne doit donc plus attendre que l'ennemi ait entièrement fait monter sa rage.
## Exercice 1
En vous appuyant sur le procédé que vous jugerez le plus adapté à cette situation en PHP, créez 4 archétypes de Héros :
* **Paladin** : Héros des premières lignes, son rôle est de protéger ses aliés en encaissant le plus de dégâts possible. Il disposera d'une quantité aléatoire de points de vie située entre 2000 et 3000, d'une armure de plaques absorbant entre 800 et 1500 points de dégâts, et aura pour arme un espadon causant entre 400 et 600 points de dégâts. Pour chaque attaque reçue, le Paladin gagne 30 points de rage. Lorsque la rage du Paladin atteint 100, il inflige le triple de dégats avec son arme sur sa prochaine attaque.

* **Mage** : Héros de l'arrière-ligne, son rôle est de causer le plus de dégâts possibles en invoquant de puissants sorts. Il disposera d'une quantité aléatoire de points de vie située entre 1000 et 1500, d'une robe noire absorbant entre 500 et 700 points de dégâts, et aura pour arme un bâton des flammes froides causant entre 600 et 800 points de dégâts. Pour chaque attaque reçue, le Mage gagne 20 points de rage. Lorsque la rage du Mage atteint 100, il invoque un puissant sortilège qui quadruple ses dégâts basiques.

* **Assassin** : Héros de l'ombre, l'Assassin se faufile dans les rangs ennemis afin d'en finir le plus rapidement possible. Il disposera d'une quantité aléatoire de points de vie située entre 800 et 1300, d'une cape de voleur absorbant entre 300 et 400 points de dégâts, et aura pour arme une dague empoisonée causant entre 600 et 800 points de dégâts. Pour chaque attaque reçue, l'Asassin gagne 20 points de rage. Lorsque la rage de l'Assassin atteint 100, il inflige le double de ses dégâts basiques sur sa prochaine attaque.

* **Développeur Web** : Héros de support, le Développeur Web a pour but de réparer les soi-disant bugs qui ont causé la chute de son Paladin protecteur. Il disposera d'une quantité aléatoire de points de vie située entre 1500 et 1800, d'une armure de câbles RJ-45 absorbant entre 300 et 500 points de dégâts, et aura pour arme un ordinateur vieillissant causant entre 400 et 700 points de dégâts. Pour chaque attaque reçue, le Développeur Web gagne 40 points de rage. Lorsque la rage du Développeur Web atteint 100, si sa quantité actuelle de points de vie est inférieure à celle du monstre, il a alors la possibilité de redémarrer le combat et de repartir à 0. 
## Exercice 2
Suivant le même procédé, créer 4 archétypes d'ennemis :
* **Revenant** : Ennemi commun, le Revenant est un amas de chair et d'os qui tient debout grâce au pouvoir des nécromanciens. Il disposera d'une quantité aléatoire de points de vie située entre 1000 et 1300, ne disposera d'aucune armure, et aura pour arme ses seuls ongles causant entre 200 et 400 points de dégâts. Pour chaque attaque reçue, le Revenant gagne 20 points de rage. Lorsque la rage du Revenant atteint 100, il ajoute un bonus de 300 à sa future attaque.

* **Uruk Haï** : Ennemi puissant, l'Uruk Haï est issu de la fusion de deux affreuses créatures. Il disposera d'une quantité aléatoire de points de vie située entre 1500 et 2000, d'une armure de piques absorbant entre 700 et 1000 points de dégâts, et aura pour arme un fléau causant entre 500 et 800 points de dégâts. Pour chaque attaque reçue, l'Uruk Haï gagne 20 points de rage. Lorsque la rage de l'Uruk Haï atteint 100, il casse le bras de son assaillant et l'empêche d'attaquer pendant 2 tours.

* **Coronuviras** : Ennemi dévastateur, le Coronuviras ne porte aucune attaque inutile. Il disposera d'une quantité aléatoire de points de vie située entre 2000 et 3000, d'une armure en peau de chauve-souris absorbant entre 500 et 700 points de dégâts, et aura pour arme une masse causant entre 700 et 1000 points de dégâts. Pour chaque attaque reçue, le Coronuviras gagne 20 points de rage. Lorsque la rage du Coronuviras atteint 100, son assaillant tombe KO au bout de 5 tours.

* **Le Bug** : Hantise de tous les Développeurs Web, le Bug ne recule devant rien pour éradiquer son adversaire. Il disposera d'une quantité aléatoire de points de vie située entre 1 et 9999, d'une armure d'erreurs système absorbant entre 10 et 600 points de dégâts, et aura pour arme un AiremeTiréAireÉfÉToile causant entre 500 et 800 points de dégâts. Pour chaque attaque reçue, le Bug gagne 5 points de rage. Lorsque la rage du bug atteint 100, arrêter le code du combat volontairement :)

**N'OUBLIEZ PAS D'AJOUTER LES ATTRIBUTS NÉCESSAIRES DANS VOS CLASSES (ex : l'armure des ennemis n'était pas prise en compte auparavant !)**

## Exercice 3
Créer une interface utilisateur aggrémentée d'images correspondant au contexte (ex : image de Paladin pour le choix Paladin etc...) permettant de choisir un archétype de Héros parmi les 4 proposés.  
Une fois la donnée saisie par l'utilisateur, créer l'objet correspondant à l'archétype choisi, en générant aléatoirement tous les paramètres qui doivent l'être.  
## Exercice 4
Une fois l'objet du Héros créé, générer aléatoirement un choix entre les 4 archétypes d'ennemis proposés. Une fois le choix réalisé, générer aléatoirement un ennemi selon les caractéristiques corrspondant à l'archétype.
## Exerice 5
Créer un bouton "FIGHT" sur l'interface utilisateur démarrant le combat entre les 2 personnages.
## Exercice 6
Arrêter le combat entre chaque tour et laisser l'utilisateur démarrer le prochain.  
Cette action permet de consulter le résultat du tour en cours, il faudra donc afficher une phrase récapitulant toutes les informations des échanges d'attaque.

Lien vers la partie précédente [ici](https://gitlab.ecole-e2n.fr/MajorDuky/poo/tree/master) !