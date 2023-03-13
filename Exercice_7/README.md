# Formation PHP

Une agence de voyage gère les départs de ses groupes de voyageurs selon trois critères :
Est-ce que le groupe est au complet ou non ?
Est-ce qu'un avion est disponible ? Dans le cas contraire, un bateau sera préparé.
Est-ce que la destination est dangereuse ?
Selon les groupes de voyageurs, ces critères pourront, ou non, être respectés. Ainsi, le code fourni est utilisé pour définir le départ d'un groupe au complet, pour lequel un avion est disponible et dont la destination n'est pas dangereuse.
L'affichage du message "Départ imminent !" est déterminé par le résultat de l'opération logique stockée dans la variable $canWeGo. En manipulant les valeurs des variables $isGroupFull, $isPlaneAvailable et $isDestinationDangerous, assurez-vous qu'il n'est possible de partir (donc que le message "Départ imminent !" s'affiche) uniquement quand le groupe est au complet, que l'avion est disponible et que la destination n'est pas dangereuse.
