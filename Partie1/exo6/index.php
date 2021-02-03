<?php

$name = "Georges Michael";

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo6</title>
</head>
<body>

<p>Bonjour <?= $name ?>, comment vas-tu ?</p>

<!-- à la différence de JS, il faut mettre des points à la place des plus pour concaténer -->

<?php
    echo "Bonjour " . $name . ", comment vas-tu ?";
?>

</body>
</html>