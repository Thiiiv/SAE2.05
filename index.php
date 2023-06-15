<?php
session_start();
$_SESSION["location"] = "root";
include("data/pages/traduction.inc.php");
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- OSEF -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title><?php echo $translations["Cordoue"];?></title>
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
    include('data/pages/header.inc.php');
    ?>

    <!-- Image -->
    <div class="accueil-content">
        <span id="title-behind-img"><?php echo $translations["Cordoue"] ?></span>
        <img src="data/images/foreground3.webp" alt="foreground" id="foreground" />
    </div>
    <!-- Contenu -->
    <section class="page-content">
        <section class="content">
            <h1><?php echo $translations["histoire"] ?></h1>
            <br>
            <p><?php echo $translations["histoire_p"] ?></p>
            <p><a href="data/pages/histoire.php"><?php echo $translations["savoir_plus"] ?></a></p>
            <br>
        </section>
    </section>
    <section class="page-content">
        <section class="content">
            <h1><?php echo $translations["actualite"] ?></h1>
            <br>
            <div class="fil_twitter">
                <a class="twitter-timeline" data-width="500" data-height="500" data-theme="dark"
                    href="https://twitter.com/CordoueWeb?ref_src=twsrc%5Etfw">Tweets by CordoueWeb</a>
                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
            <br>
            <p><?php echo $translations["actualite_p"] ?></p>
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
    include('data/pages/footer.inc.php');
    ?>
    
</body>

</html>
