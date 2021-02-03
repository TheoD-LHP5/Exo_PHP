<?php

$age = 21;
$gender = "Femme";
$result;

// && permet de mettre deux variables dans une condition

if ($age >= 18 && $gender == "Homme") {
    $result = "Vous êtes un Homme et vous êtes Majeur.";
} else if ($age < 18 && $gender == "Homme") {
    $result = "Vous êtes un Homme et vous êtes Mineur.";
} else if ($age >= 18 && $gender == "Femme") {
    $result =  "Vous êtes une Femme et vous êtes Majeure.";
} else {
    $result = "Vous êtes une Femme et vous êtes Mineure.";
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo3</title>
</head>
<body>

<p><?= $result ?></p>
    
</body>
</html>