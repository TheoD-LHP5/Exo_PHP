<?php
  if(isset($_FILES["fileExercice"])){
    $pathInfoFile = pathinfo($_FILES["fileExercice"]["name"]);
    var_dump($pathInfoFile);
    $filesExtension = $pathInfoFile["extension"];
    if($filesExtension == "pdf"){
        $extentionValidation = "Vous avez envoyé un fichier PDF.";
    } else {
        $extentionValidation = "Veuillez envoyer un fichier PDF.";
    }
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

    <form action="index.php" method="post" enctype="multipart/form-data">
    <input type="file" name="fileExercice">
    <button type="submit">Envoyer</button>
    </form>

    <?php
    if(isset($_FILES["fileExercice"])){
        ?>
        <p><?= $_FILES["fileExercice"]["name"] ?></p>
        <p><?= $_FILES["fileExercice"]["type"] ?></p>
    <?php
    }?>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>