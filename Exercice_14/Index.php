<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trouver le nombre</title>
</head>
<body>
<?php
$number = 30;
$numberOfTries = 0;

do {
    $guess = rand(0, 100); //L'ordinateur choisit un nombre aléatoire
    echo 'Je tente '.$guess.' !<br>';
    $numberOfTries++;
} while ($guess !== $number); //On boucle tant que la réponse n'a pas été trouvée

echo 'Trouvé au bout de '.$numberOfTries.' essais !';

?>
</body>
</html>