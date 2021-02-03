<?php

// = attribuer une valeur
// == comparaison

$gender = "Homme";
$result;
if ($gender != "Homme"){
    $result = "C'est une développeuse !!!";
} else {
    $result = "C'est un développeur !!!";
}

//  echo ($gender != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo5</title>
</head>
<body>

<p><?= $result ?></p>
    
</body>
</html>