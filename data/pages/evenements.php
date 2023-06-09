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
    <link rel="stylesheet" href="../style/accueil.css" />
    <link rel="shotcut icon" href="../images/favicon.png">
    <style>
        h3 {
            font-size: xx-large;
        }

        h1 {
            margin-top: 15vh;
            text-align: center;
            margin-bottom: 5vh;
            font-size: 3rem;
        }

        .flexboxrow {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: row;
            flex-wrap: wrap;
        }

        .flexboxcol {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .boite {
            margin: 5vw;
            border: 5px solid #e0a340;
            height: 35vh;
            width: 30vw;
            transition: 0.5s;
            display: block;
            overflow: hidden;
            position: relative;
            box-shadow: 5px 3px 9px 0px rgba(0,0,0,0.75);
-webkit-box-shadow: 5px 3px 9px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 5px 3px 9px 0px rgba(0,0,0,0.75);
border-radius: 10px 10px 10px 10px;
-webkit-border-radius: 10px 10px 10px 10px;
-moz-border-radius: 10px 10px 10px 10px;
        }

        .photoevent {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            border-radius: 5px;
        }

        .boite:hover {
            transform: scale(1.6);
            z-index: 2;
        }

        .photoevent:hover {
            transition: 0.5s;
            opacity: 0.2;
        }

        .boite .texteevent {
            position: absolute;
            top: 0;
            left: 0;
            display: flex;
            opacity: 0;
            justify-content: center;
            align-items: center;
            text-align: center;
            flex-direction: column;
            font-size: large;

        }

        .boite:hover .texteevent, .boite:active .texteevent {
            opacity: 1;
            cursor: pointer;
            user-select: none;
        }

        .boite:hover .photoevent, .boite:active .photoevent {
            opacity: 0.4;
        }

        .titreevent {
            font-size: xx-large;
            padding-top: 5vh;
        }

        .soustitreevent {
            font-size: larger;
            padding-bottom: 5vh;
        }

        @media screen and (max-width:900px) {
            .boite {
            height:50vh;
            width: auto;
            }

            .flexboxrow {
            flex-direction: column;
            }

            .boite:hover {
            transform: scale(1);
            z-index: 2;
        }

        }

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