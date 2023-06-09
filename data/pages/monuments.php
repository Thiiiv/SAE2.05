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
    <link rel="stylesheet" href="../style/pageMonuments.css" />
    <link rel="shotcut icon" href="../images/favicon.png">
 
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