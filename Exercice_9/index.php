<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Changer le format du tableau</title>
</head>
<body>
<?php
$languages = ['PHP', 'HTML', 'JavaScript', 'C++', 'Python'];

// Début du code à remplacer

$listOfLanguages = '';
// Pour chacun des éléments du tableau
foreach ($languages as $language) {
    // On concatène le langage à la chaîne de caractères
    $listOfLanguages .= $language . ', ';
}

// Fin du code à remplacer

// Affichera : PHP,HTML,JavaScript,C++,Python,
echo $listOfLanguages;
?>
</body>
</html>