<?php

require_once "controller_index.php";

?>

<!doctype html>
<html lang="fr">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="container-fluid">

<div class="row justify-content-center align-items-center">

<?php if ($showForm) {?>
        
    <form novalidate method="POST" action="index.php" name="signUp" class="col-12 col-sm-8 col-md-4 pb-3 d-flex flex-column">
            
    <legend class="pt-3 text-uppercase text-center titleForm">formulaire d'inscription</legend>
        
        <div class="form-group">
            <label for="lastName"></label>
            <input type="text" id="lastName" name="lastName" aria-label="lastname" class="form-control text-center" placeholder="Nom" value="<?= isset($_POST["lastName"]) ? htmlspecialchars($_POST["lastName"]) : "" ?>" required>
            <div>
                <span class="textError"><?= isset($errorMessages["lastName"]) ? $errorMessages["lastName"] : "" ?></span>
            </div>
        </div>
        <div class="form-group">
            <label for="firstName"></label>
            <input type="text" id="firstName" name="firstName" aria-label="firstname" class="form-control text-center" placeholder="Prénom" value="<?= isset($_POST["firstName"]) ? $_POST["firstName"] : "" ?>" required>
            <div>
                <span class="textError"><?= isset($errorMessages["firstName"]) ? $errorMessages["firstName"] : "" ?></span>
            </div>
        </div>
        <div class="form-group">
            <label for="birthDate"></label>
            <input type="date" id="birthDate" name="birthDate" aria-label="Date de naissance" class="form-control text-center" placeholder="Date de naissance" value="<?= isset($_POST["birthDate"]) ? $_POST["birthDate"] : "" ?>" required>
            <div>
                <span class="textError"><?= isset($errorMessages["birthDate"]) ? $errorMessages["birthDate"] : "" ?></span>
            </div>
        </div>
        <div class="form-group">
            <label for="nationality"></label>
            <input type="text" id="nationality" name="nationality" aria-label="Nationalité" class="form-control text-center" placeholder="Nationalité" value="<?= isset($_POST["nationality"]) ? $_POST["nationality"] : "" ?>" required>
            <div>
                <span class="textError"><?= isset($errorMessages["nationality"]) ? $errorMessages["nationality"] : "" ?></span>
            </div>
        </div>
        <div class="form-group">
            <label for="postalAdress"></label>
            <input type="text" id="postalAdress" name="postalAdress" aria-label="Adresse postale" class="form-control text-center" placeholder="Adresse postale" value="<?= isset($_POST["postalAdress"]) ? $_POST["postalAdress"] : "" ?>" required>
            <div>
                <span class="textError"><?= isset($errorMessages["postalAdress"]) ? $errorMessages["postalAdress"] : "" ?></span>
            </div>
        </div>
        <div class="form-group">
            <label for="email"></label>
            <input type="email" id="email" name="email" aria-label="Adresse email" class="form-control text-center" placeholder="E-mail" value="<?= isset($_POST["email"]) ? $_POST["email"] : "" ?>" required>
            <div>
                <span class="textError"><?= isset($errorMessages["email"]) ? $errorMessages["email"] : "" ?></span>
            </div>
        </div>
        <div class="form-group">
            <label for="phoneNumber"></label>
            <input type="text" min="10" max="10" id="phoneNumber" name="phoneNumber" aria-label="Numéro de téléphone" class="form-control text-center" placeholder="Téléphone" value="<?= isset($_POST["phoneNumber"]) ? $_POST["phoneNumber"] : "" ?>" required>
            <div>
                <span class="textError"><?= isset($errorMessages["phoneNumber"]) ? $errorMessages["phoneNumber"] : "" ?></span>
            </div>
        </div>
        <div class="form-group">
            <label for="diplomes"></label>
            <select class="custom-select" aria-label="Diplômes" name="diplomes" required>
                <option disabled selected>Votre niveau d'étude</option>
                <?php
                foreach($diplomesArray as $key => $value){ ?>
                    <option value="<?= $key ?>" <?= isset($_POST["diplomes"]) && $_POST["diplomes"] == $key ? "selected" : "" ?>><?= $value ?></option>
                <?php } ?>
            </select>
            <div>
                <span class="textError"><?= isset($errorMessages["diplomes"]) ? $errorMessages["diplomes"] : "" ?></span>
            </div>
        </div>
        <div class="form-group">
            <label for="numberPole"></label>
            <input type="text" id="numberPole" name="numberPole" aria-label="Numéro Pôle Emploi" class="form-control text-center" placeholder="Numéro Pôle Emploi" value="<?= isset($_POST["numberPole"]) ? $_POST["numberPole"] : "" ?>" required>
            <div>
                <span class="textError"><?= isset($errorMessages["numberPole"]) ? $errorMessages["numberPole"] : "" ?></span>
            </div>
        </div>
        <div class="form-group">
            <label for="numberBadge"></label>
            <input type="number" min="0" max="20" id="numberBadge" name="numberBadge" aria-label="Nombre de badge" class="form-control text-center" placeholder="Nombre de badge Code Academy" value="<?= isset($_POST["numberBadge"]) ? $_POST["numberBadge"] : "" ?>" required>
            <div>
                <span class="textError"><?= isset($errorMessages["numberBadge"]) ? $errorMessages["numberBadge"] : "" ?></span>
            </div>
        </div>
        <div class="form-group">
            <label for="linkCodecademy"></label>
            <input type="url" id="linkCodecademy" name="linkCodecademy" aria-label="Lien Codecademy" class="form-control text-center" placeholder="Votre lien Code Academy" value="<?= isset($_POST["linkCodecademy"]) ? $_POST["linkCodecademy"] : "" ?>" required>
            <div>
                <span class="textError"><?= isset($errorMessages["linkCodecademy"]) ? $errorMessages["linkCodecademy"] : "" ?></span>
            </div>
        </div>
        <div class="form-group">
            <label for="textHeroes"></label>
            <textarea class="form-control" id="textHeroes" aria-label="Texte Héros" name="textHeroes" rows="3" placeholder="Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ?" required><?= isset($_POST["textHeroes"]) ? $_POST["textHeroes"] : "" ?></textarea>
            <div>
                <span class="textError"><?= isset($errorMessages["textHeroes"]) ? $errorMessages["textHeroes"] : "" ?></span>
            </div>
        </div>
        <div class="form-group">
            <label for="textHacks"></label>
            <textarea class="form-control" id="textHacks" aria-label="Vos hacks" name="textHacks" rows="3" placeholder="Racontez-nous un de vos 'hacks' (pas forcément technique ou informatique)" required><?= isset($_POST["textHacks"]) ? $_POST["textHacks"] : "" ?></textarea>
            <div>
                <span class="textError"><?= isset($errorMessages["textHacks"]) ? $errorMessages["textHacks"] : "" ?></span>
            </div>
        </div>
        <div class="form-group">
            <label for="textExp"></label>
            <textarea class="form-control" id="textExp" aria-label="Votre expérience" name="textExp" rows="3" placeholder="Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?" required><?= isset($_POST["textExp"]) ? $_POST["textExp"] : "" ?></textarea>
            <div>
                <span class="textError"><?= isset($errorMessages["textExp"]) ? $errorMessages["textExp"] : "" ?></span>
            </div>
        </div>
    
    <button class="btn btnConnexion" type="submit" name="submit">Inscription</button>

    </form>

    <?php } else { ?>
            <div class="text-light">
                <p>Votre nom de famille est : <span class="font-weight-bold"><?= $lastName ?></span></p>
                <p>Votre prénom est : <span class="font-weight-bold"><?= $firstName ?></span></p>
                <p>Vous date de naissance est la suivante : <span class="font-weight-bold"><?= $birthDate ?></span></p>
                <p>Vous êtes de nationalité : <span class="font-weight-bold"><?= $nationality ?></span></p>
                <p>Votre adresse postale est la suivante : <span class="font-weight-bold"><?= $postalAdress ?></span></p>
                <p>Votre adresse email : <span class="font-weight-bold"><?= $email ?></span></p>
                <p>Votre numéro de téléphone est le suivant : <span class="font-weight-bold"><?= $phoneNumber ?></span></p>
                <p>Votre niveau d'étude : <span class="font-weight-bold"><?= $diplomes ?></span></p>
                <p>Votre numéro Pôle Emploi : <span class="font-weight-bold"><?= $numberPole ?></span></p>
                <p>Vos badges : <span class="font-weight-bold"><?= $numberBadge ?></span></p>
                <p>Lien de votre Codecademy : <span class="font-weight-bold"><?= $linkCodecademy ?></span></p>
                <p>Êtes-vous un héro ? <span class="font-weight-bold"><?= $textHeroes ?></span></p>
                <p>Êtes-vous un hacker ? <span class="font-weight-bold"><?= $textHacks ?></span></p>
                <p>Votre expérience ? <span class="font-weight-bold"><?= $textExp ?></span></p>
            </div>
            

            <?php } ?>

    </div>

</div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>