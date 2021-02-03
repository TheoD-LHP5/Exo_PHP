<!-- écrire les variables en haut du doctype pour plus de visibilité -->
<?php
    $name = "Théo";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo1</title>
</head>
<body>

<!-- mettre balise php quand on appelle la variable -->
<!-- echo pour afficher la variable dans le navigateur -->
<?php echo $name;?>

<!-- version echo court -->
<?= $name ?>

<p>Ceci est un pharagraphe monsieur <span id="php"><?= $name ?></span>.</p>

</body>
</html>