<?php
session_start();
$_SESSION["location"] = "root";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- OSEF -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Cordoue</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- JS -->
    <script src="data/script/barre.js"></script>
    <script src="data/script/menulateral.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="data/style/style.css" />
    <link rel="stylesheet" href="data/style/accueil.css" />
    <link rel="shotcut icon" href="data/images/favicon.png">
</head>

<body>
    
    <?php 
    if (!isset($_GET["langue"])) {
        include('data/pages/header.inc.php');
    }
    else {
        $langue = $_GET["langue"];
        if ($langue == "fr") {
            include('data/pages/header.inc.php');
        }
        elseif ($langue == "en") {
            include('data/pages/ANGheader.inc.php');
        }
    }
    ?>

    <!-- Image -->
    <div class="accueil-content">
        <span id="title-behind-img">Cordoue</span>
        <img src="data/images/foreground3.webp" alt="foreground" id="foreground" />
    </div>
    <!-- Contenu -->
    <section class="page-content">
        <section class="content">
            <h1>Histoire</h1>
            <br>
            <p>
                Cordoue est une ville située en Andalousie (région du sud de l'Espagne), et la capitale de la province
                du même
                nom.
                C'est l'une des villes les plus peuplées d'Andalousie avec 326 039 habitants en 2020.
                La ville est connue pour son riche patrimoine architectural et culturel qui évoquent les différentes
                phases de
                son histoire. En effet, la ville a été érigée par les romains et dirigée ensuite par les musulmans.
            </p>
            <p>
                Cordoue a été fondée au IIe siècle av J.C. par les romains, la ville acquit une grande importance à
                l'époque d'Auguste. Au VIIIe siècle, elle devint la capitale de l'émirat dépendant de Damas. C'est
                ensuite en 929, que Abd al-Rahman III établit la ville comme siège du califat. Pendant cette période
                (qui est qualifiée comme la période glorieuse de Cordoue) commença la construction de 300 mosquées et
                d'innombrables palais et édifices publics. La ville rivalisait avec les splendeurs de Constantinople,
                Damas et Bagdad. Au XIIIe siècle, sous Ferdinand III fut construite la Grande Mosquée de Cordoue, en
                plus de l'Alcazar de los Reyes Cristianos ou la tour de la Calahorra.
                La ville est connue pour son patrimoine associant grand nombre de valeurs artistiques d'Orient et
                d'Occident et incluant des éléments jusque-là inconnus dans l'architecture religieuse islamique.
            </p>
            <p>
                Depuis le paléolithique, la province de Cordoue est marquée par la présence de l’homme. Tartessiens et
                Orétans se disputèrent ces terres et l’exploitation de ses mines de fer, de plomb et de cuivre.
            </p>
            <p><a href="histoire.php">En savoir plus</a></p>
            <br>
        </section>
    </section>
    <section class="page-content">
        <section class="content">
            <h1>Actualité</h1>
            <br>
            <div class="fil_twitter">
                <a class="twitter-timeline" data-width="500" data-height="500" data-theme="dark"
                    href="https://twitter.com/CordoueWeb?ref_src=twsrc%5Etfw">Tweets by CordoueWeb</a>
                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
            <br>
            <p>
                Jusqu'au 29 octobre, plusieurs patios de la vieille ville accueillent, à l'occasion du festival
                international
                Flora, les œuvres monumentales de huit grands artistes floraux.
                Cordoue, la plus septentrionale des grandes cités andalouses, sera pendant les dix jours qui viennent la
                capitale mondiale des fleurs. Jusqu'au 29 octobre, en effet, huit patios de la vieille ville, ces
                splendides cours intérieures dont l'origine remonte aux atriums romains, accueilleront, dans le cadre du
                festival international Flora, des œuvres monumentales réalisées par huit des plus grands artistes
                floraux de la planète.
            </p>
            <!-- Diapo -->
            <br>
            <div id="slideshow">
                <div class="slide-wrapper">
                    <div class="slide">
                        <h1><img src="data/images/patio1.webp" /></h1>
                    </div>
                    <div class="slide">
                        <h1><img src="data/images/patio2.webp" /></h1>
                    </div>
                    <div class="slide">
                        <h1><img src="data/images/patio3.webp" /></h1>
                    </div>
                    <div class="slide">
                        <h1><img src="data/images/patio4.webp" /></h1>
                    </div>
                    <div class="slide">
                        <h1><img src="data/images/patio5.webp" /></h1>
                    </div>
                </div>
            </div>
        </section>
    </section>
    
    
    <?php 
    include('data/pages/footerIndex.inc.html');
    ?>
    
</body>

</html>
