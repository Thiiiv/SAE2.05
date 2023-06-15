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

    <title><?php echo $translations["monuments"] ?></title>
    <!-- JS -->
    <script src="../script/barre.js"></script>
    <script src="../script/menulateral.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="../style/style.css" />
    <link rel="stylesheet" href="../style/pageMonuments.css" />
    <link rel="shotcut icon" href="../images/favicon.png">
 
</head>

<body>
    <!-- Barre horizontale -->
    <?php 
        include('header.inc.php');
    ?>

    <h1><?php echo $translations["monuments"] ?></h1>
    <img class="transition" src="../images/sous_titre.png">

    <div class="corps">

        <div class="ligne-monuments">

            <a href="<?php echo 'monuments/mosquee.php?langue=' . $langue;?>" class="monument">
                <h3><?php echo $translations["cathedrale"] ?></h3>

                <img class="image" src="../images/monuments/mosquee.png">
                <p><?php echo $translations["cathedrale_p"] ?></p>
            </a>

            <a href="<?php echo 'monuments/medina.php?langue=' . $langue;?>" class="monument">

                <h3><?php echo $translations["medina"] ?></h3>
                <img class="image" src="../images/monuments/medina.png">
                <p><?php echo $translations["medina_p"] ?></p>
            </a>


            <a href="<?php echo 'monuments/pontromain.php?langue=' . $langue;?>" class="monument">
                <h3><?php echo $translations["pont"] ?></h3>
                <img class="image" src="../images/monuments/pontromain.png">
                <p><?php echo $translations["pont_p"] ?></p>
            </a>
        </div>
        <div class="ligne-monuments">
            <a href="<?php echo 'monuments/calahorra.php?langue=' . $langue;?>" class="monument">
                <h3><?php echo $translations["calahorra"] ?></h3>
                <img class="image" src="../images/monuments/calahorra.png">
                <p><?php echo $translations["calahorra_p"] ?></p>
            </a>

            <a href="<?php echo 'monuments/alcazar.php?langue=' . $langue;?>" class="monument">
                <h3><?php echo $translations["alcazar"] ?></h3>
                <img class="image" src="../images/monuments/alcazar.png">
                <p><?php echo $translations["alcazar_p"] ?></p>
            </a>


            <a href="<?php echo 'monuments/templeromain.php?langue=' . $langue;?>" class="monument">

                <h3><?php echo $translations["temple"] ?></h3>
                <img class="image" src="../images/monuments/templeromain.png">
                <p><?php echo $translations["temple_p"] ?></p>
            </a>
        </div>

    </div>
    <!-- Bouton retour en haut -->
    <?php 
    include('footer.inc.php');
    ?>
    
</body>

</html>