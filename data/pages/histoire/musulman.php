<?php
session_start();
$_SESSION["location"] = "data/pages/histoire/";
include("../traduction.inc.php");
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- OSEF -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title><?php echo $translations["musulman"] ?></title>

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
    
    <h1><?php echo $translations["musulman"] ?></h1>
    <img class="transition titre" src="../../images/sous_titre.png">
    <div class="container-page">
        <div class="container-event">
            <img class="image" src="../../images/histoire/musulman/Tariq_ibn_Ziyad.jpg" alt="Tariq ibn Ziyad">
            <div class="container-texts">
                <h3><?php echo $translations["conquete"] ?></h3>
                <img class="transition reverse-transition" src="../../images/sous_titre.png">
                <div class="text"><?php echo $translations["conquete_div"] ?></div>
            </div>
        </div>
        <div class="container-event reverse-event">
            <img class="image" src="../../images/histoire/musulman/Abd_al-Rahman_Ier.jpg" alt="Abd al-Rahman Ier">
            <div class="container-texts">
                <h3><?php echo $translations["fondation"] ?></h3>
                <img class="transition reverse-transition" src="../../images/sous_titre.png">
                <div class="text"><?php echo $translations["fondation_div"] ?></div>
            </div>
        </div>
        <div class="container-event">
            <img class="image" src="../../images/histoire/musulman/califat.png" alt="Califat de Cordoue">
            <div class="container-texts">
                <h3><?php echo $translations["califat"] ?></h3>
                <img class="transition reverse-transition" src="../../images/sous_titre.png">
                <div class="text"><?php echo $translations["califat_div"] ?></div>
            </div>
        </div>
        <div class="container-event reverse-event">
            <img class="image" src="../../images/histoire/musulman/mosquee.jpg" alt="Grande Mosquée de Cordoue">
            <div class="container-texts">
                <h3><?php echo $translations["construction"] ?></h3>
                <img class="transition reverse-transition" src="../../images/sous_titre.png">
                <div class="text"><?php echo $translations["construction_div"] ?></div>
            </div>
        </div>
        <div class="container-event">
            <img class="image" src="../../images/histoire/musulman/al-Mansur.jpg" alt="al-Mansur">
            <div class="container-texts">
                <h3><?php echo $translations["glorieuse"] ?></h3>
                <img class="transition reverse-transition" src="../../images/sous_titre.png">
                <div class="text"><?php echo $translations["glorieuse_div"] ?></div>
            </div>
        </div>
        <div class="container-event reverse-event">
            <img class="image" src="../../images/histoire/musulman/taifas.png" alt="Taïfas">
            <div class="container-texts">
                <h3><?php echo $translations["division"] ?></h3>
                <img class="transition reverse-transition" src="../../images/sous_titre.png">
                <div class="text"><?php echo $translations["division_div"] ?></div>
            </div>
        </div>
        <div class="container-event">
            <img class="image" src="../../images/histoire/musulman/almoravides.png" alt="Almoravides">
            <div class="container-texts">
                <h3><?php echo $translations["occupation"] ?></h3>
                <img class="transition reverse-transition" src="../../images/sous_titre.png">
                <div class="text"><?php echo $translations["occupation_div"] ?></div>
            </div>
        </div>
    </div>
    
    <?php 
        include('../footer.inc.php');
    ?>
</body>
</html>