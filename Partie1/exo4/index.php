<?php

$name = "Lucette";
$age = 97;
$number = 45.36;
$adress = true; // boolean valeur true ou false
echo $name;
echo $age;
echo $number;
echo $adress;

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- affichier le type boolean -->
<p><?= gettype($adress)?></p>
    
</body>
</html>