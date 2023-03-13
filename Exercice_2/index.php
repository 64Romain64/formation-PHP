<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercice 2</title>
</head>
<body>
<h1>Numéros gagnants de notre grand loto :</h1>
<?php
$winningNumbers = [5];
foreach ($winningNumbers as $winningNumber) {
    echo '<div class="ball"><div class="ball-content">'.$winningNumber.'</div></div>';
}
?>
</body>
</html>