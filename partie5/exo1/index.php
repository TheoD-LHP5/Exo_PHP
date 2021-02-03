<?php

// Création d'un tableau indexé quand on rentre directement les valeurs du tableau sans la clé :
$months = ["Janvier",
    "Février",
    "Mars",
    "Avril",
    "Mai",
    "Juin",
    "Juillet",
    "Aout",
    "Septembre",
    "Octobre",
    "Novembre",
    "Décembre"
];

// Afficher tous les élements d'un tableau indéxé.
// Création d'une variable temporaire (element) pour stocker et afficher les données du tableau $months.
foreach($months as $element){
    echo $element . "<br />";
}

// Parcourir un tableau avec une boucle for :
for($i = 0; $i < count($months); $i ++){
    echo $months[$i] . "<br />";
}

// var_dump pour afficher les valeurs du tableau (équivalent console.log)
var_dump($months);
// print_r pour afficher les valeurs d'un tableau
print_r($months);

// Remplacer un élément du tableau (ex mettre l'accent sur Août, 7 car janvier = 0)
$months[7] = "Août";
var_dump($months);

// Exemple d'un tableau associatif car on crée un clé (2, 59, 62, 80) et on attribut une valeur à la clé (Aisne, Nord...) :
$departementsArray = [
    2 => "Aisne",
    59 => "Nord",
    62 => "Pas-de-Calais",
    80 => "Somme"
];
var_dump($departementsArray);
// On ne met pas de virgule à la dernière valeur du tableau pour montrer la fin du tableau.

// Afficher toutes les valeurs de ce tableau ainsi que les clés associés et faire une phrase.
var_dump($departementsArray);
foreach ($departementsArray as $departementsNumber => $departementsName)
    echo "Le département " . $departementsName . " a le numéro " . $departementsNumber . "." . "<br />";

// Afficher tous les élements d'un tableau associatif.
// Création d'une variable temporaire (element) pour stocker et afficher les données du tableau $departements.
foreach($departementsArray as $element){
    echo $element . "<br />";
}

// Afficher la valeur du Nord :
echo $departementsArray[59];
echo array_search("Nord", $departementsArray);

// Ajouter une valeur dans un tableau (ici tableau departements)
$departementsArray[35] = "Île et Vilaine";
var_dump($departementsArray);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_Partie5_Exo1</title>
</head>
<body>

<p>Exo 2 - Montrer l'index 2 d'un tableau</p>
<p><?= $months[2] ?></p>

<p>Exo 3 - Montrer l'index 5 d'un tableau</p>
<p><?= $months[5] ?></p>

</body>
</html>