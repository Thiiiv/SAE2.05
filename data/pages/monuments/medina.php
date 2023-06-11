<?php
session_start();
$_SESSION["location"] = "data/pages/monuments/";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="../../script/barre.js"></script>
    <link rel="stylesheet" href="../../style/style.css" />
    <link rel="stylesheet" href="../../style/monuments.css" />
    <link rel="shotcut icon" href="../../images/favicon.png">
    <title>Medina Azahara</title>
</head>

<body>
    <header>
        <?php
        include('../header.inc.php');
        ?>
    </header>

    <div class="flexboxcolonne">
        <div id="fond" style="background-image: url('../../images/monuments/medinafond.jpg');">>
            <a id="boutonretour" href="../monuments.php">
                <p>◄ Monuments</p>
            </a>
            <h1>Medina Azahara</h1>
            <a style="margin-top: 75vh;" href="#content"><img id="flechebas" class="shake-vertical"
                    src="../../images/flecheversbas.png"></a>
        </div>

        <div id="content" class="partie">
            <h3>Histoire</h3>
            <img class="transition reversetransition" src="../../images/sous_titre.png">

            <div class="contenu droite">
                <p>Ancienne cité située à côté de
                    Cordoue en Andalousie, en Espagne. Fondée au 10ème siècle, elle a été construite sous le règne de
                    l'émir Abd al-Rahman III, qui a régné sur l'Empire califal de Cordoue à l'époque. La ville était
                    destinée à être un centre politique et administratif pour l'empire, ainsi qu'un lieu de vie pour la
                    cour et les fonctionnaires. Elle était considérée comme l'une des plus grandes cités du monde
                    musulman à l'époque, avec une population estimée à plusieurs milliers de personnes.
                    <br><br>
                    Malheureusement, la cité a été abandonnée peu de temps après sa construction et est restée en grande
                    partie oubliée jusqu'au 20ème siècle, lorsque des fouilles archéologiques ont été entreprises pour
                    en découvrir les vestiges. Aujourd'hui, les ruines de Medina Azahara sont considérées comme un
                    témoignage important de la richesse culturelle et historique de la période islamique en Espagne,
                    offrant un aperçu des modes de vie et des valeurs de l'époque. Bien que les vestiges de la ville ne
                    soient pas très bien conservés, ils continuent à susciter un grand intérêt auprès des historiens et
                    des touristes
                </p>
                <img src="../../images/monuments/medinahistoire.jpg">
            </div>

        </div>

        <div class="partie">
            <h3>Architecture</h3>
            <img class="transition" src="../../images/sous_titre.png">
            <div class="contenu gauche">
                <img src="../../images/monuments/medinarchitecture.jpg">
                <p>Medina Azahara est une ancienne ville construite à Cordoue au Xème siècle sous le règne du calife
                    Abderrahman III. Elle a été conçue comme un centre politique et administratif pour l'empire califal
                    et était considérée comme l'un des centres les plus importants de la culture et de la civilisation
                    de l'époque. Les ruines de la ville, qui se composent de mélanges de styles architecturaux arabes,
                    berbères et hispano-romains, montrent un niveau élevé de sophistication technique et de soin pour le
                    bien-être de ses habitants.
                    <br><br>
                    L'architecture de Medina Azahara était très avancée pour l'époque, avec des techniques telles que
                    l'arc en anse de panier, les dômes en caissons et les mosaïques colorées. Cependant, la ville a été
                    abandonnée peu de temps après sa construction en raison de conflits politiques et militaires. Les
                    efforts de restauration et de conservation de la ville sont en cours pour préserver son héritage
                    architectural pour les générations futures.
                </p>
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