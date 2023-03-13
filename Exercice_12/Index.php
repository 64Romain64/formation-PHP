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
$boxer1Weight = 80.4;
$boxer2Weight = 92.2;

// Doit afficher "Impossible de combattre !" car boxer1 n'est pas poids lourd

$boxer1Weight = 95.6;
$boxer2Weight = 78.1;

// Doit afficher "Impossible de combattre !" car boxer2 n'est pas poids lourd

$boxer1Weight = 54.4;
$boxer2Weight = 70.2;

// Doit afficher "Impossible de combattre !" car les deux boxeurs ne sont pas des poids lourds

$boxer1Weight = 91.4;
$boxer2Weight = 98.3;

// Doit afficher "FIGHT !" car les deux boxeurs sont tous les deux des poids lourds

$boxer1Weight = 90.7;
$boxer2Weight = 98.3;

// Doit afficher "FIGHT !" car les deux boxeurs sont tous les deux des poids lourds, même
// celui qui pese exactement 90.7kg
?>
</body>
</html>