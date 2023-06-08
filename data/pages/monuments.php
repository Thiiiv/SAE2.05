<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- OSEF -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Monument</title>
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
        /* Titre */
        h1 {
            margin-top: 15vh;
            text-align: center;
            width: 100%;
            padding-top: 5vh;
            font-size: 100px;
            user-select: none;
        }

        /* Corps de la page (flexbox colonne qui prend les deux lignes)*/
        .corps {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            background-color: #505050;
        }

        /* Images des monuments */
        .monument img {
            width: 20vw;
            height: 20vw;
            margin-top: 5%;
            object-fit: cover;

            border-radius: 10px 10px 10px 10px;
            -webkit-border-radius: 10px 10px 10px 10px;
            -moz-border-radius: 10px 10px 10px 10px;
            -webkit-box-shadow: 3px 3px 6px 0px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: 3px 3px 6px 0px rgba(0, 0, 0, 0.75);
            box-shadow: 3px 3px 6px 0px rgba(0, 0, 0, 0.75);

        }

        /* Texte de chaque monument */
        .ligne-monuments p {
            text-align: left;
            width: 20vw;
            font-size: 30px;
            margin-top: 3vh;
        }

        /* Titre de chaque monument */
        h3 {
            text-align: center;
            font-size: 40px;
        }

        /* Ligne de 3 monuments */
        .ligne-monuments {
            display: flex;
            justify-content: center;
            flex-direction: row;
            margin: 10px 10px;
            padding-left: 1.5vw;
            padding-right: 1.5vw;
        }

        /* div avec titre, image, texte du monument, Amène vers une autre page */
        .monument {
            text-align: center;
            display: flex;
            align-items: center;
            flex-direction: column;
            border: 4px outset #f7af3e;
            margin: 1vw;
            color: white;
            text-decoration: none;
            padding: 1.5vw;
            background-color:#3a3a3a;
            border-radius: 11px 11px 11px 11px;
            -webkit-border-radius: 11px 11px 11px 11px;
            -moz-border-radius: 11px 11px 11px 11px;
            box-shadow: 0px 0px 11px 6px rgba(51, 51, 51, 0.52);
            -webkit-box-shadow: 0px 0px 11px 6px rgba(51, 51, 51, 0.52);
            -moz-box-shadow: 0px 0px 11px 6px rgba(51, 51, 51, 0.52);
            transition: transform 0.2s;
        }

        /* Agrandissement du div des monuments */
        .monument:hover {
            transform: scale(1.08);
            cursor: pointer;
        }

        .monument a {
            position: relative;
            float: right;
        }

        /* Image en dessous du titre */
        .transition {
            width: 50vw;
            height: auto;
            display: flex;
            margin-right: auto;
            margin-left: auto;
            padding-bottom: 8vh;
        }

        @media screen and (max-width:901px) {
            .ligne-monuments {
                flex-direction: column;
                width: 90vw;
            }

            h1 {
                font-size: 40px;
            }

            .transition {
                width: 75%;
                height: 3vh;
            }

            .monuments .ligne-monuments p {
                width: 80vw;
            }

            .monuments .monument img {
                width: 65vw;
            }

            .monument {
                margin-top: 3vh;
            }

            .img {
                border-radius: 10px 10px 10px 10px;
                -moz-border-radius: 10px 10px 10px 10px;
                -webkit-border-radius: 10px 10px 10px 10px;
                border: 0px solid #000000;
            }

            .monuments h3 {
                font-size: 24px;
            }
        }
    </style>
</head>

<body>
    <!-- Barre horizontale -->
    <?php 
    include('headerPages.inc.html');
    ?>

    <h1>Monuments</h1>
    <img class="transition" src="../images/sous_titre.png">

    <div class="corps">

        <div class="ligne-monuments">

            <a href="monuments/mosquee.php" class="monument">
                <h3>Mosquée-Cathédrale</h3>

                <img class="image" src="../images/monuments/mosquee.png">
                <p>Monument le plus important de Cordoue, elle est la pièce maîtresse du panorama religieux de Cordoue.
                </p>
            </a>

            <a href="monuments/medina.php" class="monument">

                <h3>Medina Azahara</h3>
                <img class="image" src="../images/monuments/medina.png">
                <p>Ville palatiale califale construite à Cordoue au 10ème siècle, elle
                    représente l'apogée de la civilisation musulmane espagnole.
                </p>
            </a>


            <a href="monuments/pontromain.php" class="monument">
                <h3>Pont romain</h3>
                <img class="image" src="../images/monuments/pontromain.png">
                <p>Le pont romain de Cordoue, ou vieux pont, est un monument récemment restauré et d’une grande
                    importance dans la ville.</p>
            </a>
        </div>
        <div class="ligne-monuments">
            <a href="monuments/calahorra.php" class="monument">
                <h3>Tour de la Calahorra</h3>
                <img class="image" src="../images/monuments/calahorra.png">
                <p>La tour de Calahorra est un vestige historique de Cordoue, qui servait autrefois de porte d'entrée à
                    la ville.
                </p>
            </a>

            <a href="monuments/alcazar.php" class="monument">
                <h3>Alcázar</h3>
                <img class="image" src="../images/monuments/alcazar.png">
                <p>Construit en 1328, ancienne résidence des dirigeants de Cordoue, puis est devenu une prison jusqu'en
                    1950.</p>
            </a>


            <a href="monuments/templeromain.php" class="monument">

                <h3>Temple Romain</h3>
                <img class="image" src="../images/monuments/templeromain.png">
                <p>Le temple romain de Cordoue est un vestige fascinant de l'architecture romaine antique en Espagne.
                </p>
            </a>
        </div>

    </div>
    <!-- Bouton retour en haut -->
    <?php 
    include('footerPages.inc.html');
    ?>
    
</body>

</html>