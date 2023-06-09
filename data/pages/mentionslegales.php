<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- OSEF -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Mentions Légales</title>
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

        .flexboxcolonne{ 
            justify-content: left;
            display: flex;
            flex-direction: column;
        }

        h1 {
            margin-top: 15vh;
            margin-bottom: 3vh;
            padding-top: 5vh;
            margin-left:10vw;
            font-size: xx-large;
        }

        h2 {
            margin-top: 10vh;
            margin-bottom: 2vh;
            margin-left:10vw;

        }



        .partie {
            width: 65%;
            margin-left:12%;
        }

        .listepartie {
            justify-content: center;
            width: 50%;
            display: flex;
            flex-direction: column;
            margin-left: 23vh;
        }

        .listepartie li {
            padding-top: 1vh;
        }

    </style>
</head>

<body>
    <?php 
    include('headerPages.inc.html');
    ?>

    <div class="flexboxcolonne">
    <h1>Mentions légales</h1>
    <hr id="hrtitre">

    <h2>Unesco</h2>
    <hr class="partie">
    <ul class="listepartie">
        <li>Ce site web est un projet en partenariat avec l'UNESCO</li>

    </ul>


    <h2>Crédits</h2>
    <hr class="partie">
    <ul class="listepartie">
        <li><a href="https://favicon.io/">Flavicon</a></li>
        <li><a href="https://twitter.com">Twitter</a> pour l'API</li>
        <li><a href="https://www.google.fr/maps">Google Maps</a> pour l'API</li>

    </ul>

    <h2>Droits d'auteur</h2>
    <hr class="partie">
    <ul class="listepartie">
        <li>test</li>
        <li>test</li>
        <li>test</li>
    </ul>
    




    </div>
    <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
    <?php 
    include('footerPages.inc.html');
    ?>
    
</body>

</html>