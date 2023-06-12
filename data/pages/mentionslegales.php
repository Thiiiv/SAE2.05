<?php
session_start();
$_SESSION["location"] = "data/pages/";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- OSEF -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mentions Légales</title>

    <!-- JS -->
    <script src="../script/barre.js"></script>
    <script src="../script/menulateral.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="../style/style.css" />
    <link rel="stylesheet" href="../style/accueil.css" />
    <link rel="shotcut icon" href="../images/favicon.png">
    <style>

        a{
            font-size: 1.2rem;
            color:dodgerblue;
        }


        h1 {
 
            font-size: 3rem;
        }

        .justify-left{
            width: 100%;
            align-items: baseline;
        }

        .mentions-legales{
            margin-top:20vh;
            width: 75%;
        }

        .mentions-partie{
            padding: 5vw;
            width: 100%;

        }

    </style>
</head>

<body>
    <?php 
    include('header.inc.php');
    ?>

    <div class="flexboxcol">
    <div class="flexboxcol mentions-legales">
        <h1>Mentions légales</h1>
        <hr id="hrtitre">

        <div class="flexboxcol mentions-partie">
            <h2>Notre projet</h2>
            <p>
Dans le cadre d’un projet en première année de BUT Informatique à L’Université Gustave Eiffel,
nous avons pour objectif de créer un site dynamique, en HTML, CSS, JS, PHP, SQL
pour mettre en valeur le patrimoine de la ville de Cordoue, située en Espagne.
En partenariat avec l'UNESCO.
            </p>

        </div>


        <div class="flexboxcol mentions-partie ">
        <h2>Sources</h2>
        <ul class="flexboxcol justify-left">
            <li><a href="https://favicon.io/">Flavicon</a> pour les images</li>
            <li><a href="https://twitter.com">Twitter</a> pour l'API</li>
            <li><a href="https://www.google.fr/maps">Google Maps</a> pour l'API</li>
            <li><a href="https://creativecommons.org/licenses/?lang=fr-FR">Creative Commons</a> pour des images</li>

        </ul>
        </div>

    </div>
    </div>
    <?php 
    include('footerPages.inc.html');
    ?>
    
</body>

</html>