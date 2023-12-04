# Day 2: Cube Conundrum

### Links

https://adventofcode.com/2023/day/2

### Traduction FR

Jour 2 : Enigme du cube ---

Vous êtes lancé très haut dans l'atmosphère ! Le sommet de ta trajectoire atteint à peine la surface d'une grande île
flottant dans le ciel. Tu atterris doucement dans un tas de feuilles duveteuses. Il fait assez froid, mais vous ne voyez
pas beaucoup de neige. Un elfe se précipite pour vous saluer.

Il vous explique que vous êtes arrivé sur l'île de la neige et s'excuse du manque de neige. Il se fera un plaisir de
vous expliquer la situation, mais il faut marcher un peu, vous avez donc un peu de temps. Il n'y a pas beaucoup de
visiteurs ici. Voulez-vous jouer à un jeu en attendant ?

Tout en marchant, l'elfe vous montre un petit sac et des cubes qui sont soit rouges, soit verts, soit bleus. Chaque fois
que vous jouerez à ce jeu, il cachera un nombre secret de cubes de chaque couleur dans le sac, et votre but sera de
trouver des informations sur le nombre de cubes.

Pour obtenir des informations, une fois que le sac a été rempli de cubes, l'Elfe plonge la main dans le sac, prend une
poignée de cubes au hasard, vous les montre, puis les remet dans le sac. Il fera cela plusieurs fois par partie.

Vous jouez plusieurs parties et vous enregistrez les informations de chaque partie (votre entrée dans le puzzle). Chaque
jeu est répertorié avec son numéro d'identification (comme le 11 dans Jeu 11 : ...) suivi d'une liste séparée par un
point-virgule des sous-ensembles de cubes qui ont été révélés dans le sac (comme 3 rouges, 5 verts, 4 bleus).

Par exemple, l'enregistrement de quelques parties peut ressembler à ceci :

Jeu 1 : 3 bleus, 4 rouges ; 1 rouge, 2 verts, 6 bleus ; 2 verts
Jeu 2 : 1 bleu, 2 verts ; 3 verts, 4 bleus, 1 rouge ; 1 vert, 1 bleu
Jeu 3 : 8 verts, 6 bleus, 20 rouges ; 5 bleus, 4 rouges, 13 verts ; 5 verts, 1 rouge
Jeu 4 : 1 vert, 3 rouges, 6 bleus ; 3 verts, 6 rouges ; 3 verts, 15 bleus, 14 rouges
Jeu 5 : 6 rouges, 1 bleu, 3 verts ; 2 bleus, 1 rouge, 2 verts

Dans le jeu 1, trois séries de cubes sont sorties du sac (puis remises en place). La première série comprend 3 cubes
bleus et 4 cubes rouges ; la deuxième série comprend 1 cube rouge, 2 cubes verts et 6 cubes bleus ; la troisième série
ne comprend que 2 cubes verts.

Le lutin aimerait d'abord savoir quels jeux auraient été possibles si le sac ne contenait que 12 cubes rouges, 13 cubes
verts et 14 cubes bleus ?

Dans l'exemple ci-dessus, les jeux 1, 2 et 5 auraient été possibles si le sac avait été chargé avec cette configuration.
Cependant, le jeu 3 aurait été impossible parce qu'à un moment donné, l'elfe vous a montré 20 cubes rouges à la fois ;
de même, le jeu 4 aurait également été impossible parce que l'elfe vous a montré 15 cubes bleus à la fois. Si vous
additionnez les ID des jeux qui auraient été possibles, vous obtenez 8.

Déterminez quels jeux auraient été possibles si le sac n'avait été chargé que de 12 cubes rouges, 13 cubes verts et 14
cubes bleus. Quelle est la somme des ID de ces jeux ?

### Part 2

Your calculation isn't quite right. It looks like some of the digits are actually spelled out with letters: one, two,
three, four, five, six, seven, eight, and nine also count as valid "digits".
