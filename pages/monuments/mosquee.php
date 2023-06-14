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
    <title>Mosquée de Cordoue</title>
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
            <h1>Mosquée-Cathédrale</h1>
            <a style="margin-top: 75vh;" href="#content"><img id="flechebas" class="shake-vertical"
                    src="../../images/flecheversbas.png"></a>
        </div>

        <div>

        </div>

        <div id="content" class="partie">
            <h3>Histoire</h3>
            <img class="transition reversetransition" src="../../images/sous_titre.png">

            <div class="contenu droite">
                <p>La mosquée-cathédrale de Cordoue est un lieu de grande signification historique et culturelle en
                    Espagne. Construite au 8e siècle en tant que mosquée sous la domination musulmane de l'Espagne,
                    elle a été conçue comme l'un des plus grands centres de culte de la région. Au fil des siècles, la
                    mosquée a été témoin de nombreux événements importants, notamment lorsque les Rois Catholiques ont
                    repris Cordoue au 16e siècle et ont converti la mosquée en cathédrale. Depuis lors, la
                    mosquée-cathédrale de Cordoue a été un lieu de culte pour les communautés chrétiennes et a conservé
                    de nombreux éléments architecturaux musulmans originaux.
                    <br><br>
                    Aujourd'hui, la mosquée-cathédrale de Cordoue est un symbole de la coexistence culturelle et
                    religieuse en Espagne, et un témoignage du riche patrimoine historique de la région. Elle continue
                    d'attirer des milliers de visiteurs chaque année, qui sont émus par son histoire et son architecture
                    unique.
                </p>
                <img src="../../images/monuments/mosqueehistoire.jpg">
            </div>

        </div>

        <div class="partie">
            <h3>Architecture</h3>
            <img class="transition" src="../../images/sous_titre.png">
            <div class="contenu gauche">
                <img src="../../images/monuments/mosqueearchitecture.jpg">
                <p>C'est un vrai chef-d'œuvre d'architecture religieuse, combinant les styles
                    architecturaux musulmans, chrétiens et gothiques. Lorsqu'elle a été construite au 8e siècle en
                    tant que mosquée, elle était caractérisée par ses arcs en ogive, ses voûtes en berceau et ses
                    coupoles imposantes, qui étaient tous des éléments courants de l'architecture musulmane de l'époque.
                    <br><br>
                    Lorsque la mosquée a été convertie en cathédrale au 16e siècle, des modifications ont été
                    apportées, dont l'ajout de chapiteaux, de sculptures et d'autres
                    éléments gothiques. Des retables baroques ont également été ajoutés, ce qui a considérablement
                    modifié l'apparence de l'intérieur de la mosquée.
                    <br><br>
                    L'élévation de la mosquée-cathédrale de Cordoue est un aspect important de son architecture. Elle a
                    été conçue pour permettre une circulation de l'air et de la lumière naturelle à l'intérieur du
                    bâtiment, en utilisant une combinaison de voûtes en berceau et de coupoles. Les voûtes en berceau
                    ont été utilisées pour soutenir les murs latéraux et
                    fournir une grande ouverture au plafond, tandis que les coupoles ont été utilisées pour couvrir les
                    espaces plus importants tels que les salles de prière.
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