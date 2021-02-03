<?php

function makeCocktail ($firstIng, $secondIng){
    if ($firstIng == "Bière" && $secondIng == "Grenadine"){
        return "Monaco";

    } elseif ($firstIng == "Bière" && $secondIng == "Limonade"){
    return "Panache";

    } elseif ($firstIng == "Bière" && $secondIng == "Citron"){
    return "Twist";

    } else {
    return "Je ne peux pas faire des cocktails.";
}}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo1</title>
</head>
<body>

<p>Voici votre cocktail : <?= makeCocktail("Bière", "Coca") ?></p>
    
</body>
</html>