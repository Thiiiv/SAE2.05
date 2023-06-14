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
    <script src="../../script/barre.js"></script>
    <link rel="stylesheet" href="../../style/style.css" />
    <link rel="stylesheet" href="../../style/monuments.css" />
    <link rel="shotcut icon" href="../../images/favicon.png">
    <title>Pont Romain</title>
</head>

<body>

    <?php
    include('../header.inc.php');
    ?>

    <div class="flexboxcolonne">
        <div id="fond" style="background-image: url('../../images/monuments/pontromainfond.jpg');">>
            <a id="boutonretour" href="../monuments.php">
                <p>◄ Monuments</p>
            </a>
            <h1>Pont Romain</h1>
            <a style="margin-top: 75vh;" href="#content"><img id="flechebas" class="shake-vertical" src="../../images/flecheversbas.png"></a>
        </div>

        <div id="content" class="partie">
            <h3>Histoire</h3>
            <img class="transition reversetransition" src="../../images/sous_titre.png">

            <div class="contenu droite">
                <p>Le Pont Romain de Cordoue a été construit au 1er siècle avant J.-C. pour traverser le fleuve Guadalquivir. Au fil des siècles, il a subi de nombreuses transformations et restaurations, notamment sous le règne des califes omeyyades. Aujourd'hui, il est devenu un symbole de l'histoire de Cordoue et de la période romaine de l'Andalousie.
                    <br><br>
                    Le Pont Romain de Cordoue a été le témoin de nombreux événements historiques, notamment des batailles sanglantes entre les Arabes et les chrétiens au Moyen Âge et de l'utilisation par les troupes napoléoniennes pendant la guerre d'indépendance espagnole. Malgré les ravages du temps, le pont a été restauré à plusieurs reprises et reste l'un des monuments les plus visités de Cordoue.
                </p>
                <img src="../../images/monuments/pontromainhistoire.jpg">
            </div>

        </div>

        <div class="partie">
            <h3>Architecture</h3>
            <img class="transition" src="../../images/sous_titre.png">
            <div class="contenu gauche">
                <img src="../../images/monuments/pontromainarchitecture.jpg">
                <p>
                    Le Pont Romain de Cordoue est construit dans un style typique de l'architecture romaine. Il est composé de 16 arches, en forme de fer à cheval, qui reposent sur des piles renforcées par des contreforts triangulaires. Le pont mesure 247 mètres de long et 9 mètres de large, et il est considéré comme un chef-d'œuvre d'ingénierie.
                    <br><br>
                    Au fil des siècles, le Pont Romain de Cordoue a été restauré à plusieurs reprises, notamment sous le règne des califes omeyyades. Ils ont ajouté des arcs en briques et en pierre pour renforcer la structure du pont et pour ajouter une touche esthétique. Aujourd'hui, le pont est un symbole emblématique de l'histoire de Cordoue, et il est souvent visité par les touristes qui apprécient la beauté de son architecture et sa signification historique.
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