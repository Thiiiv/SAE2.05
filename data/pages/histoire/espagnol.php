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
    
    <title><?php echo $translations["espagnol"] ?></title>

    <!-- JS -->
    <script src="../../script/barre.js"></script>
    <script src="../../script/menulateral.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="../../style/style.css" />
    <link rel="stylesheet" href="../../style/epoque.css" />
    <link rel="shotcut icon" href="../../images/favicon.png">
</head>

<!-- 
    Sources : 
    https://www.britannica.com/place/Cordoba-Spain
    https://whc.unesco.org/fr/list/313
    https://www.turismodecordoba.org/historia-1
    http://www.uco.es/internacional/extranjeros/es/cordoba-ciudad-patrimonio-dialogo-de-culturas

 -->
 <!-- 
    Sources images : 
    Ferdinand III - © José Luiz Bernardes Ribeiro / CC BY-SA 4.0
    Cathedrale - Jean-Pierre Dalbéra
    Archi. Gothique - Image par <a href="https://pixabay.com/fr/users/bogitw-851103/?utm_source=link-attribution&utm_medium=referral&utm_campaign=image&utm_content=756151">Gerhard Bögner</a> de <a href="https://pixabay.com/fr//?utm_source=link-attribution&utm_medium=referral&utm_campaign=image&utm_content=756151">Pixabay</a>
    decret - domaine publique - https://commons.wikimedia.org/wiki/File:Alhambra_Decree.jpg
    universite - Kent Wang from Barcelona, Spain



  -->

<body>
    
    <!-- Barre horizontale -->
    <?php 
        include('../header.inc.php');
    ?>
    
    <h1><?php echo $translations["espagnol"];?></h1>
    <img class="transition titre" src="../../images/sous_titre.png">
    <div class="container-page">
        <div class="container-event">
            <img class="image" src="../../images/histoire/espagnol/ferdinandIII.webp" alt="Ferdinand III de Castille">
            <div class="container-texts">
                <h3><?php echo $translations["reconquista"] ?></h3>
                <img class="transition reverse-transition" src="../../images/sous_titre.png">
                <div class="text"><?php echo $translations["reconquista_div"];?></div>
            </div>
        </div>
        <div class="container-event reverse-event">
            <img class="image" src="../../images/histoire/espagnol/cathedrale.jpg" alt="Mosquée cathédrale de Cordoue">
            <div class="container-texts">
                <h3><?php echo $translations["mosquee"] ?></h3>
                <img class="transition reverse-transition" src="../../images/sous_titre.png">
                <div class="text"><?php echo $translations["mosquee_div"] ?></div>
            </div>
        </div>
        <div class="container-event">
            <img class="image" src="../../images/histoire/espagnol/gothique.png" alt="Architecture Gothique">
            <div class="container-texts">
                <h3><?php echo $translations["gothique"] ?></h3>
                <img class="transition reverse-transition" src="../../images/sous_titre.png">
                <div class="text"><?php echo $translations["gothique_div"] ?></div>
            </div>
        </div>
        <div class="container-event reverse-event">
            <img class="image" src="../../images/histoire/espagnol/decret.jpg" alt="Décret d'expulsion des juifs et Morisques">
            <div class="container-texts">
                <h3><?php echo $translations["persecutions"] ?></h3>
                <img class="transition reverse-transition" src="../../images/sous_titre.png">
                <div class="text"><?php echo $translations["persecutions_div"] ?></div>
            </div>
        </div>
        <div class="container-event">
            <img class="image" src="../../images/histoire/espagnol/universite.webp" alt="Université de Cordoue">
            <div class="container-texts">
                <h3><?php echo $translations["ouverture"] ?></h3>
                <img class="transition reverse-transition" src="../../images/sous_titre.png">
                <div class="text"><?php echo $translations["ouverture_div"] ?></div>
            </div>
        </div>
        <div class="container-event reverse-event">
            <img class="image" src="../../images/histoire/espagnol/unesco.png" alt="Logo de l'UNESCO">
            <div class="container-texts">
                <h3><?php echo $translations["renommee"] ?></h3>
                <img class="transition reverse-transition" src="../../images/sous_titre.png">
                <div class="text"><?php echo $translations["renommee_div"] ?></div>
            </div>
        </div>
    </div>
    
    <?php 
        include('../footer.inc.php');
    ?>
</body>
</html>