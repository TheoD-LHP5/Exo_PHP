<?php

function myNumbers ($numberOne, $numberTwo){
    if ($numberOne > $numberTwo){
    return "Le premier nombre est plus grand";

    } elseif ($numberOne < $numberTwo){
    return "Le premier nombre est plus petit";

    } else {
    return "Les deux nombres sont identiques";
}}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<p><?= myNumbers(45,75) ?></p>
    
</body>
</html>