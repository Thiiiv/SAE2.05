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
    
    <title><?php echo $translations["romain"] ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

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
    
    <h1><?php echo $translations["romain"] ?></h1>
    <img class="transition titre" src="../../images/sous_titre.png">
    <div class="container-page">
        <div class="container-event">
            <img class="image" src="../../images/histoire/romain/claudius.jpg" alt="Marcus Claudius Marcellus">
            <div class="container-texts">
                <h3><?php echo $translations["fondation"] ?></h3>
                <img class="transition reverse-transition" src="../../images/sous_titre.png">
                <div class="text"><?php echo $translations["fondation_div"] ?></div>
            </div>
        </div>
        <div class="container-event reverse-event">
            <img class="image" src="../../images/histoire/romain/cesar.jpg" alt="Jules César">
            <div class="container-texts">
                <h3><?php echo $translations["Jules"] ?></h3>
                <img class="transition reverse-transition" src="../../images/sous_titre.png">
                <div class="text"><?php echo $translations["Jules_div"] ?></div>
            </div>
        </div>
        <div class="container-event ">
            <img class="image" src="../../images/histoire/romain/auguste.jpg" alt="Auguste">
            <div class="container-texts">
                <h3><?php echo $translations["Auguste"] ?></h3>
                <img class="transition reverse-transition" src="../../images/sous_titre.png">
                <div class="text"><?php echo $translations["Auguste_div"] ?></div>
            </div>
        </div>
    </div>
    
    <?php 
        include('../footer.inc.php');
    ?>
</body>
</html>