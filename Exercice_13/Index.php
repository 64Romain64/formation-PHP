<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Combats de boxe</title>
</head>
<body>
<?php
$boxer1Weight = 54.4;
$boxer2Weight = 70.2;
// Doit afficher "Impossible de combattre !" car les deux boxeurs ne sont pas dans la même catégorie

$boxer1Weight = 77.1;
$boxer2Weight = 79.1;
// Doit afficher "FIGHT MI-LOURDS !"

$boxer1Weight = 86.2;
$boxer2Weight = 79.9;
// Doit afficher "FIGHT LOURDS-LEGERS !"

$boxer1Weight = 100.4;
$boxer2Weight = 90.7;
// Doit afficher "FIGHT POIDS LOURDS !" car le boxer2 pese pile 90.7 kg, il peut combattre un poids lourd

$boxer1Weight = 79.9;
$boxer2Weight = 90.7;
// Doit afficher "FIGHT LOURDS-LEGERS !" car le boxer2 pese pile 90.7 kg, il peut aussi combattre un poids lourd-leger

$boxer1Weight = 90.7;
$boxer2Weight = 90.7;
// Doit afficher soit "FIGHT POIDS LOURDS !", soit "FIGHT LOURDS-LEGERS !", mais pas les deux messages !


?>
</body>
</html>