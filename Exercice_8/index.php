<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Porte-monnaie virtuel</title>
</head>
<body>
<?php
$walletAmount = 10;

$isEmpty = false;
$hasLowAmount = false;
$isVip = false;

if ($isEmpty) {
    echo 'Votre porte-monnaie est vide';
}

if ($hasLowAmount) {
    echo 'Consultez notre rayon \'promotions\' !';
}

if ($isVip) {
    echo 'Le rayon VIP vous attend !';
}
?>
</body>
</html>