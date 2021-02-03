<?php

// Utilisation des filtres (filter_var) au lieu des regex car plus de facilité que d'écrire une regex.

$errorMessages = [];

$diplomesArray = [
    1 => "Sans",
    2 => "BAC",
    3 => "BAC +2",
    4 => "BAC +3",
    5 => "BAC +5"
];

$regexName = "/^[a-zA-ZÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ]+$/";
$regexPhoneNumber = "/^[0-9]{10}$/";
$regexDate = "/^\d{4}(-)(((0)[0-9])|((1)[0-2]))(-)([0-2][0-9]|(3)[0-1])$/";
$regexPole = "/^[a-zA-Z0-9]{8}$/";

$showForm = true;

if(isset($_POST["submit"])){

if(isset($_POST["lastName"])){
    if(!preg_match($regexName, $_POST["lastName"])){
        $errorMessages["lastName"] = "Veuillez saisir un nom valide.";
    }
    if(empty($_POST["lastName"])){
        $errorMessages["lastName"] = "Veuillez saisir votre nom.";
    }
}

if(isset($_POST["firstName"])){
    if(!preg_match($regexName, $_POST["firstName"])){
        $errorMessages["firstName"] = "Veuillez saisir un prénom valide.";
    }
    if(empty($_POST["firstName"])){
        $errorMessages["firstName"] = "Veuillez saisir votre prénom.";
    }
}

if(isset($_POST["birthDate"])){
    if(!preg_match($regexDate, $_POST["birthDate"])){
        $errorMessages["birthDate"] = "Veuillez saisir un prénom valide.";
    }
    if(empty($_POST["birthDate"])){
        $errorMessages["birthDate"] = "Veuillez saisir votre date de naissance.";
    }
}

if(isset($_POST["nationality"])){
    if(!preg_match($regexName, $_POST["nationality"])){
        $errorMessages["nationality"] = "Veuillez saisir un nationalité valide.";
    }
    if(empty($_POST["nationality"])){
        $errorMessages["nationality"] = "Veuillez saisir votre nationalité.";
    }
}

if(isset($_POST["postalAdress"])){
    if(empty($_POST["postalAdress"])){
        $errorMessages["postalAdress"] = "Veuillez saisir votre adresse postale.";
    }
}

if(isset($_POST["email"])){
    if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $errorMessages["email"] = "Veuillez saisir un email valide.";
    }
    if(empty($_POST["email"])){
        $errorMessages["email"] = "Veuillez saisir votre email.";
    }
}

if(isset($_POST["phoneNumber"])){
    if(!preg_match($regexPhoneNumber, $_POST["phoneNumber"])){
        $errorMessages["phoneNumber"] = "Veuillez saisir un numéro de téléphone valide.";
    }
    if(empty($_POST["phoneNumber"])){
        $errorMessages["phoneNumber"] = "Veuillez saisir votre numéro de téléphone.";
    }
}

if (!isset($_POST["diplomes"])) {
    $errorMessages["diplomes"] = "Veuillez sélectionner votre niveau d'étude.";
}

if (isset($_POST["diplomes"])) {
    if(!array_key_exists($_POST["diplomes"], $diplomesArray)){
        $errorMessages["diplomes"] = "NOPE !";
    }
}

if(isset($_POST["numberPole"])){
    if(!preg_match($regexPole, $_POST["numberPole"])){
        $errorMessages["numberPole"] = "Veuillez saisir un numéro Pôle Emploi valide.";
    }
    if(empty($_POST["numberPole"])){
        $errorMessages["numberPole"] = "Veuillez saisir votre numéro Pôle Emploi.";
    }
}

if(isset($_POST["numberBadge"])){
    if(empty($_POST["numberBadge"])){
        $errorMessages["numberBadge"] = "Veuillez saisir vos nombres de badges Codecademy.";
    }
}

if(isset($_POST["linkCodecademy"])){
    if (!filter_var($_POST["linkCodecademy"], FILTER_VALIDATE_URL)){
        $errorMessages["linkCodecademy"] = "Veuillez saisir un lien valide.";
    }
    if(empty($_POST["linkCodecademy"])){
        $errorMessages["linkCodecademy"] = "Veuillez saisir votre lien Codecademy.";
    }
}

if(isset($_POST["textHeroes"])){
    if(!preg_match($regexName, $_POST["textHeroes"])){
        $errorMessages["textHeroes"] = "Veuillez saisir un texte valide.";
    }
    if(empty($_POST["textHeroes"])){
        $errorMessages["textHeroes"] = "Veuillez saisir un texte.";
    }
}

if(isset($_POST["textHacks"])){
    if(!preg_match($regexName, $_POST["textHacks"])){
        $errorMessages["textHacks"] = "Veuillez saisir un texte valide.";
    }
    if(empty($_POST["textHacks"])){
        $errorMessages["textHacks"] = "Veuillez saisir un texte.";
    }
}

if(isset($_POST["textExp"])){
    if(!preg_match($regexName, $_POST["textExp"])){
        $errorMessages["textExp"] = "Veuillez saisir un texte valide.";
    }
    if(empty($_POST["textExp"])){
        $errorMessages["textExp"] = "Veuillez saisir un texte.";
    }
}
}

if(isset($_POST["submit"]) && count($errorMessages) == 0){
    $lastName = htmlspecialchars($_POST["lastName"]);
    $firstName = htmlspecialchars($_POST["firstName"]);
    $birthDate = htmlspecialchars($_POST["birthDate"]);
    $nationality = htmlspecialchars($_POST["nationality"]);
    $postalAdress = htmlspecialchars($_POST["postalAdress"]);
    $email = htmlspecialchars($_POST["email"]);
    $phoneNumber = htmlspecialchars($_POST["phoneNumber"]);
    $diplomes = htmlspecialchars($diplomesArray[$_POST["diplomes"]]);
    $numberPole = htmlspecialchars($_POST["numberPole"]);
    $numberBadge = htmlspecialchars($_POST["numberBadge"]);
    $linkCodecademy = htmlspecialchars($_POST["linkCodecademy"]);
    $textHeroes = htmlspecialchars($_POST["textHeroes"]);
    $textHacks = htmlspecialchars($_POST["textHacks"]);
    $textExp = htmlspecialchars($_POST["textExp"]);
    $showForm = false;
}

?>