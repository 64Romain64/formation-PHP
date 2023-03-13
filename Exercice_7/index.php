<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voyage</title>
</head>
<body>
<?php
$isGroupFull = false;
$isPlaneAvailable = false;
$isDestinationDangerous = false;

// Cette variable décide du départ
$canWeGo = !$isDestinationDangerous && $isPlaneAvailable && $isGroupFull;

if ($canWeGo) {
    echo 'Départ imminent!';
}
?>
</body>
</html>