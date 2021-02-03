<?php

function showCake ($numberCake, $cake){
    return "Aujourd'hui, j'ai mangé" . $numberCake . $cake;
}

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo5</title>
</head>
<body>

<p><?= showCake(40, "Cookies")?></p>
    
</body>
</html>