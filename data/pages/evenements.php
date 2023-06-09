<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- OSEF -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Evenements</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- JS -->
    <script src="../script/barre.js"></script>
    <script src="../script/menulateral.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="../style/style.css" />
    <link rel="stylesheet" href="../style/evenements.css" />
    <link rel="shotcut icon" href="../images/favicon.png">

    </style>
</head>

<body>
    <?php 
    include('headerPages.inc.html');
    ?>

    <h1>Évènements</h1>

    <div class="flexboxrow">

    <?php

    include('connexion.inc.php');
    $requete = 
    "SELECT
    titre, sous_titre, description, lien
    FROM evenements;";

    $cnx->exec("set search_path to cordoue;");

    $results = $cnx->query(
        $requete
    );

    while ($ligne = $results->fetch(PDO::FETCH_OBJ))
    {

        echo "
        <div class='boite'>
            <img class='photoevent' src=".$ligne->lien.">
            <div class='texteevent'>
                <h4 class='titreevent'>".$ligne->titre."</h4>
                <h4 class='soustitreevent'>".$ligne->sous_titre."</h4>
                <p>".$ligne->description."</p>
            </div>
        </div>";
    }
    $results->closeCursor();

    ?>
    </div>
    <?php 
    include('footerPages.inc.html');
    ?>
    
</body>

</html>