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
    <title><?php echo $translations["temple"] ?></title>
</head>

<body>
        <?php
        include('../header.inc.php');
        ?>

    <div class="flexboxcolonne">
        <div id="fond" style="background-image: url('../../images/monuments/templeromainfond.jpg');">>
            <a id="boutonretour" href="<?php echo '../monuments.php?langue=' . $langue;?>">
                <p>◄ Monuments</p>
            </a>
            <h1><?php echo $translations["temple"] ?></h1>
            <a style="margin-top: 75vh;" href="#content"><img id="flechebas" class="shake-vertical"
                    src="../../images/flecheversbas.png"></a>
        </div>

        <div id="content" class="partie">
            <h3><?php echo $translations["histoire"] ?></h3>
            <img class="transition reversetransition" src="../../images/sous_titre.png">

            <div class="contenu droite">
                <p><?php echo $translations["temple_hist"] ?></p>
                <img src="../../images/monuments/templeromainhistoire.jpg">
            </div>

        </div>

        <div class="partie">
            <h3><?php echo $translations["architecture"] ?></h3>
            <img class="transition" src="../../images/sous_titre.png">
            <div class="contenu gauche">
                <img src="../../images/monuments/templeromainarchitecture.jpg">
                <p><?php echo $translations["temple_arch"] ?></p>
            </div>
        </div>
    </div>
        <!-- Bouton retour en haut -->
        <div class="retour">
        <a href="#" class="haut"></a>
    </div>
    <!-- Footer -->
    <?php
    include("../footer.inc.php");
    ?>

</body>

</html>