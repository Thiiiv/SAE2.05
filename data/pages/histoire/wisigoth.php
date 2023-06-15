<?php
session_start();
$_SESSION["location"] = "data/pages/histoire/";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- OSEF -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Epoque wisigoth</title>

    <!-- JS -->
    <script src="../../script/barre.js"></script>
    <script src="../../script/menulateral.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="../../style/style.css" />
    <link rel="stylesheet" href="../../style/epoque.css" />
    <link rel="shotcut icon" href="../../images/favicon.png">
</head>

<body>
    <!-- Barre horizontale -->
    <?php 
        include('../header.inc.php');
    ?>
    
    <h1>Epoque wisigoth</h1>
    <img class="transition titre" src="../../images/sous_titre.png">
    <div class="container-page">
        <div class="container-event">
            <img class="image" src="../../images/histoire/wisigoth/Léovigild.jpg" alt="Léovigild">
            <div class="container-texts">
                <h3>Règne de Léovigild</h3>
                <img class="transition reverse-transition" src="../../images/sous_titre.png">
                <div class="text">
                    En 589, Léovigild, l'un des rois les plus influents de la dynastie wisigothe, a étendu son autorité sur la péninsule ibérique et a fait de Cordoue un centre politique et culturel majeur. <br>
                    Il a choisi la ville comme centre politique et administratif, renforçant son pouvoir et unifiant le royaume wisigoth.
                    Cordoue a prospéré économiquement et culturellement sous son règne.<br>
                    Le roi était arien, adepte d'une branche du christianisme considérée comme hérétique par l'Église catholique.
                    Cependant, il a cherché à apaiser les tensions religieuses et à promouvoir l'unité entre les ariens et les catholiques.
                    Il a tenté de réconcilier les différentes factions chrétiennes présentes à Cordoue et a soutenu la construction d'églises et de monastères.<br> 
                    Léovigild a également mené des campagnes militaires visant à étendre le territoire wisigoth, notamment contre les Byzantins en Espagne méridionale.
                    Grâce à cela, il a réussi à conquérir plusieurs territoires importants.
                </div>
            </div>
        </div>
        <div class="container-event reverse-event">
            <img class="image" src="../../images/histoire/wisigoth/tolede.jpg" alt="Concile de Tolède">
            <div class="container-texts">
                <h3>Le IIIe concile de Tolède</h3>
                <img class="transition reverse-transition" src="../../images/sous_titre.png">
                <div class="text">
                Le IIIe concile de Tolède, également connu sous le nom de concile de Braga, s'est tenu en 589 à Tolède,
                en Espagne, pendant le règne du roi wisigoth Récarède Ier.<br>
                Ce concile a joué un rôle crucial dans l'histoire religieuse et politique de la péninsule ibérique.
                Il avait pour objectif principal de résoudre la question de l'arianisme,
                une doctrine théologique considérée comme hérétique par l'Église catholique.<br>
                À cette époque, une grande partie de la population wisigothe était arienne, tandis que les rois wisigoths,
                y compris Récarède Ier lui-même, se convertissaient au catholicisme.
                Le moment le plus important était lorsque Récarède Ier a annoncé publiquement de se convertir au catholicisme, 
                ce qui a conduit à la conversion massive des Wisigoths à la foi catholique.<br> 
                Le concile a également adopté des décisions et des décrets qui ont renforcé l'autorité de l'Église catholique
                dans le royaume wisigothique et favorisé son unification religieuse.
                </div>
            </div>
        </div>
    </div>
    
    <?php 
        include('../footerSousPages.inc.html');
    ?>
</body>
</html>