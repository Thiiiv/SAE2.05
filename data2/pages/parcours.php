<?php
session_start();
$_SESSION["location"] = "data/pages/";
include("traduction.inc.php");
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- OSEF -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title><?php echo $translations["parcours"] ?></title>
    <!-- JS -->
    <script src="../script/barre.js"></script>
    <script src="../script/menulateral.js"></script>


    <!-- CSS -->
    <link rel="stylesheet" href="../style/style.css" />
    <link rel="stylesheet" href="../style/parcours.css" />
    <link rel="shotcut icon" href="../images/favicon.png">
</head>

<body>
    <?php 
    include('header.inc.php');
    ?>
    <section class="page-content">
        <div class="carte">

            <div id = "parcoursjourContent">
                <iframe 
                    src="https://www.google.com/maps/d/u/1/embed?mid=1gWTG1PSf3nY-EOmtTNPShk5pwrFEINk&ehbc=2E312F"
                    width="100%" height="500px" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
                <p class="dyno-rem"> <?php echo $translations["jour"] ?></p>
            </div>

            <div id = "parcoursheureContent">
            <iframe 
                src="https://www.google.com/maps/d/u/1/embed?mid=16O2kW77U6U9c11OK1zmOwLUERHl3quc&ehbc=2E312F"
                width="100%" height="500px" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
            <p class="dyno-rem"> <?php echo $translations["heure"] ?></p>
            </div>
        </div>
    </section>
    <section class="choix-parcours">
        <div class="flexboxrow space">
            <button class="button-parcours" id="parcoursjour">
                <p class="dyno-rem"> <?php echo $translations["jour"] ?></p>
            </button>
            <button class="button-parcours" id="parcoursheure">
            <p class="dyno-rem"> <?php echo $translations["heure"] ?></p>
            </button>


        </div>

    </section>
    <?php 
    include('footer.inc.php');
    ?>

<script src="../script/parcours.js"></script>
    
</body>

</html>