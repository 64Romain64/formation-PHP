<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aventure</title>
</head>
<body>
<?php
// Mettez ici votre plan de bataille
$goldCoinsInYourPocket = 0;
$heroOpensTheChest = false;
$goDownAtTheStairs = false;
$doYouTrustGoblins = false;

// Ne touchez plus à rien à partir de là
if ($goldCoinsInYourPocket > 10) {
    echo 'Votre bourse déborde et toutes les pièces tombent sur le sol. Il ne vous en reste plus
que 10.<br>';
    $goldCoinsInYourPocket = 10;
}
echo 'Vous pénétrez dans l\'antre du méchant... Un coffre se situe à droite et une porte est à
gauche<br>';
$hasSword = false;
if ($heroOpensTheChest && $goldCoinsInYourPocket > 3) {
    echo 'Le coffre était en réalité un monstre qui avait l\'apparence d\'un coffre ! Il se
réveille grâce à la forte odeur d\'or qui émane de votre bourse et vous dévore.<br>FIN =(';
    return;
} elseif ($heroOpensTheChest && $goldCoinsInYourPocket <= 3) {
    echo 'En ouvrant le coffre, vous vous rendez compte qu\'il est rempli de dents. C\'est en
réalité un monstre ayant l\'apparence d\'un coffre ! Heureusement, il semble endormi, ce qui
vous permet de récupérer son contenu : <b>une épée</b> !<br>';
    $hasSword = true;
}

echo 'Vous vous dirigez vers la porte et l\'ouvrez pour vous retrouver face à un escalier en
colimaçon. Vous pouvez soit monter à l\'étage, soit descendre au sous-sol.<br>';

$hasShield = false;
if (!$goDownAtTheStairs) {
    echo 'Vous montez les escaliers et ouvrez la porte du premier étage. Un étrange commercant vous y
attend et vous propose de vous vendre un objet utile pour 2 pièces d\'or.<br>';
    if ($doYouTrustGoblins && $goldCoinsInYourPocket < 2) {
        echo 'Vous n\'avez pas assez d\'argent pour le commercant. De rage, ce dernier sort une dague
et vous la plante dans le ventre.<br>FIN =(';
        return;
    } elseif ($doYouTrustGoblins && $goldCoinsInYourPocket >= 2) {
        echo 'Vous lui donnez deux pièces d\'or. Un peu étonné, il les prend et disparaît derrière
une armoire quelques instants, avant de ressortir avec <b>un bouclier</b> flambant neuf ! Il
n\'y a plus rien à faire à l\'étage, vous redescendez au sous-sol.<br>';
        $hasShield = true;
        $goldCoinsInYourPocket -= 2;
    } else {
        echo 'Vous ne faites pas confiance à cet étrange commercant. Vous fermez la porte et redescendez au
sous-sol.<br>';
    }
}

echo 'Vous descendez en direction du sous-sol. À chaque marche, des chants bizarres se font
entendre de plus en plus clairement. Le méchant est en bas, et, si vous n\'intervenez pas, ses soldats
envahiront notre monde. Vous arrivez finalement en bas et voyez le méchant au milieu
d\'un rond illuminé d\'une couleur rouge sang. Il vous regarde en souriant, puis, sans
crier gare, vous tire dessus avec une boule de feu qu\'il envoie dans votre direction !<br>';

if (!$hasShield) {
    echo 'Sans protection, vous vous prenez la boule de feu de plein fouet. Vous n\'êtes plus
qu\'un petit tas de cendres fumant.<br>FIN =(';
    return;
}
echo 'Vous vous protégez de justesse avec votre bouclier, qui se désintègre sous la violence
du choc. Le méchant ne s\'attendait pas à vous voir encore en vie, ce qui vous permet de
foncer vers lui avant qu\'il ne relance une boule de feu.<br>';

if ($hasSword) {
    echo 'D\'un coup d\'épée net, vous lui coupez la tête. La lumière du rond illuminé diminue
progressivement avant de s\'éteindre. Vous avez sauvé le monde de l\'invasion des soldats du méchant !
Vous sortez de l\'antre du méchant en sueur.<br>';
} else {
    echo 'Vous le plaquez au sol et le rouez de coups de poings. Hélas, ça ne suffit pas et il
se dégage d\'un coup de pied. Vous tombez au sol pendant qu\'il prépare une nouvelle boule de
feu qui, cette fois, vous touche de plein fouet.<br>FIN =(';
    return;
}

if ($goldCoinsInYourPocket > 0) {
    echo 'Il vous reste un peu d\'argent : vous décidez donc de les dépenser à la taverne pour
vous remettre de cette aventure. Le peuple se souviendra de votre acte héroïque pour les
siècles à venir.<br>FIN =D !';
} else {
    echo 'Vous décidez de rentrer chez vous pour prendre un peu de repos bien mérité. Vous ne
savez pas de quelles aventures demain sera fait, mais au moins, il ne sera pas fait de méchants.
<br>FIN =) !';
}
?>
</body>
</html>