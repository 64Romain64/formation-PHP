# Formation PHP

Des rumeurs prétendent qu’un méchant, enfermé dans son antre, a pour plan de faire appel a ses serviteurs afin de détruire le monde. Vos exploits passés sont parvenus aux oreilles du roi, qui vous a demandé d'enquêter sur cette rumeur et de mettre un terme aux agissements du méchant, si les rumeurs étaient fondées. Beaucoup de héros avant vous sont entrés dans cet antre, mais personne n'en est ressorti. Les seules informations dont on dispose sont les suivantes :
Une protection magique entoure l'antre du méchant : quiconque possède un objet de métal sera foudroyé sur le pas de la porte. Cela ne vous plaît guère, mais vous allez devoir entrer sans épée ni bouclier et faire avec les moyens trouvés sur place. Cependant, vous pouvez remplir votre bourse de pièces d'or : la cupidité du méchant fait qu'il autorise les petits objets en or.
De l'extérieur, les chevaliers ont aperçu un coffre suspect dans la première salle.
L'antre du méchant possède un étage, ainsi qu'un sous-sol.
Enfin, des commerçants ont été aperçus dans l'antre du méchant. Leur allégeance n'est pas certaine : ils pourraient se révéler de précieux alliés contre le méchant, mais également être de terribles ennemis à sa solde.
En utilisant ces informations, vous allez devoir mettre au point votre plan de bataille avant de rentrer dans l'antre du méchant : combien de pièces d'or allez-vous prendre, allez-vous ouvrir le coffre suspect, allez vous vous rendre au sous-sol ou au premier étage et est-ce que vous allez faire confiance aux commerçants ou non ?

Ces quatre éléments seront symbolisés sous la forme de 4 variables PHP :

$goldCoinsInYourPocket = 0; représente le nombre de pièces d'or que vous souhaitez avoir. C'est un nombre
entier.

$heroOpensTheChest = false; est un booléen (donc soit false, soit true) qui va définir votre comportement envers le
coffre : allez vous l'ouvrir (true) ou pas (false) ?

$goDownAtTheStairs = false; est un booléen qui indique si vous allez choisir le sous-sol ou non (ou aller à l'étage,
dans le cas contraire).

$doYouTrustGoblins = false; est un booléen qui indique si vous faites confiance aux commerçants ou non.

Les valeurs de ces variables ne sont que des exemples : c'est à vous de définir votre plan de bataille en les modifiant.

Indice :
Il existe plusieurs "mauvaises fins" (signalées par un smiley triste "=(") et une "bonne fin" (signalée par un smiley
content "=)").
Cependant, pour les plus habiles d'entre vous, il existe également une "meilleure fin" (signalée par un smiley très
content "=D") !
