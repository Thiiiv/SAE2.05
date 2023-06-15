<?php
session_start();
$_SESSION["location"] = "data/pages/monuments/";
include("../traduction.inc.php");
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../../script/barre.js"></script>
    <link rel="stylesheet" href="../../style/style.css" />
    <link rel="stylesheet" href="../../style/monuments.css" />
    <link rel="shotcut icon" href="../../images/favicon.png">
    <title><?php echo $translations["cathedrale"] ?></title>
</head>

<body>
    <?php
        include('../header.inc.php');
    ?>
    <div class="flexboxcolonne">
        <div id="fond" style="background-image: url('../../images/monuments/mosqueefond.jpg');">
            <a id="boutonretour" href="../monuments.php">
                <p>◄ Monuments</p>
            </a>
            <h1><?php echo $translations["cathedrale"] ?></h1>
            <a style="margin-top: 75vh;" href="#content"><img id="flechebas" class="shake-vertical"
                    src="../../images/flecheversbas.png"></a>
        </div>

        <div>

        </div>

        <div id="content" class="partie">
            <h3><?php echo $translations["histoire"] ?></h3>
            <img class="transition reversetransition" src="../../images/sous_titre.png">

            <div class="contenu droite">
                <p><?php echo $translations["mosquee_hist"] ?></p>
                <img src="../../images/monuments/mosqueehistoire.jpg">
            </div>

        </div>

        <div class="partie">
            <h3><?php echo $translations["architecture"] ?></h3>
            <img class="transition" src="../../images/sous_titre.png">
            <div class="contenu gauche">
                <img src="../../images/monuments/mosqueearchitecture.jpg">
                <p><?php echo $translations["mosquee_arch"] ?></p>

            </div>
        </div>
    </div>
        <!-- Bouton retour en haut -->
    <div class="retour">
        <a href="#" class="haut"></a>
    </div>
    <!-- Footer -->
    <div class="footer">
        <div class="first-part">
            <div class="lien-utile">
                <a href="#title-utile" id="title-utile">Liens utiles</a>
                <br>
                <a href="https://twitter.com/CordoueWeb"><img src="../../images/twitter.webp" alt="Twitter" id="twitter"></a>
            </div>
            <div class="ecole">
                <a href="#title-ecole" id="title-ecole">Notre école</a>
                <br>
                <a href="https://iut.univ-gustave-eiffel.fr/">IUT de Marne-la-Vallée</a>
            </div>
            <div class="mention">
                <a href="#title-mention" id="title-mention">Mentions légales</a>
                <br>
                <p>© 2022/2023</p>
            </div>
        </div>
        <div class="second-part">
            <div class="partenaire">
                <img src="../../images/Univ.png" />
                <img src="../../images/unsplash.png" />
                <img src="../../images/pexels.png" />
                <img src="../../images/unesco_vrai.png" />
            </div>
        </div>
    </div>
</body>

</html>