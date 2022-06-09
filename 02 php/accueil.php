<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
</head>
<body>
    <?php

    const MON_SITE = "monSite.com";
    $nom = "Olivier";

    echo "Bonjour $nom <br>";
    echo "Bienvenu sur MON_SITE <br>";


    $counter = 0;
    // while ((gettype($nom[$counter]) == "string") === true) {
    //     $counter++;
    // }
    for ($i = 0; $i < strlen($nom); $i++) {

    }
    echo "Votre nom comporte $i lettres <br>";

    if ($nom[0] === "A" || $nom[0] === "E" || $nom[0] === "I" || $nom[0] === "O" || $nom[0] === "U" || $nom[0] === "Y") {
        echo "votre nom commence par une voyelle <br>";
    }
    if ($nom[0] !== "A" && $nom[0] !== "E" && $nom[0] !== "I" && $nom[0] !== "O" && $nom[0] !== "U" && $nom[0] !== "Y") {
        echo "Votre nom commence par une consonne <br>";
    }


    ?>
</body>
</html>