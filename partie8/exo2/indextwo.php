<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<p>Bonjour <?= $_SESSION["firstname"] . " " . $_SESSION["lastname"] ?>, vous avez <?= $_SESSION["age"] . " "?>ans.</p>
    
</body>
</html>