# Formation PHP

Dans cet exercice, nous allons écrire un petit script de
gestion de combat de boxe.
En boxe, afin d'éviter les trop gros écarts entre deux participants, les championnats sont divisés en catégories de
poids, et deux boxeurs ne peuvent s'affronter que s'ils sont dans la même catégorie. Par exemple, un boxeur pesant
92 kg, considéré comme "Poids lourd", ne peut pas affronter un autre boxeur pesant 80 kg, considéré comme
"Lourd-léger".

Écrivez un script permettant de déterminer, à partir du poids de deux boxeurs, s'ils peuvent combattre ensemble ou
non. Pour simplifier, nous n'allons gérer que le cas des poids lourds, c'est-à-dire les boxeurs de plus de 90,7 kg. Le
script devra donc vérifier les deux poids et afficher "FIGHT !" si les deux boxeurs sont tous les deux des poids lourds,
ou "Impossible de combattre !" dans le cas contraire.
Les deux poids seront stockés dans des variables.

$boxer1Weight = 80.4;
$boxer2Weight = 92.2;

Indice :
Il est possible de réaliser ce script avec un seul if, mais cela peut peut-être vous aider de faire une condition par
boxeur, puis de comparer les résultats.
