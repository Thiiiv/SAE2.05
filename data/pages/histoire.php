<?php
session_start();
$_SESSION["location"] = "data/pages/";
include("traduction.inc.php");
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../script/barre.js"></script>
    <script src="../script/menulateral.js"></script>
    <link rel="stylesheet" href="../style/style.css" />
    <link rel="stylesheet" href="../style/histoire.css" />
    <link rel="shotcut icon" href="../images/favicon.png">
    <title><?php echo $translations["histoire"] ?></title>
</head>

<body>
    <?php 
    include('header.inc.php');
    ?>
    <h1><?php echo $translations["histoire"] ?></h1>
    <img class="transition" src="../images/sous_titre.png">
    
    <div class="zone">
        <img src="../images/histoire/arbre-vie.png">
        <a href="<?php echo '../pages/histoire/romain.php?langue=' . $langue;?>">
           <div class="button one">
                <p><?php echo $translations["romain"] ?></p>
                <img src="../images/histoire/romaine.png">
            </div> 
        </a>
        <a href="<?php echo '../pages/histoire/wisigoth.php?langue=' . $langue;?>">
        <div class="button two">
            <p><?php echo $translations["wisigoth"] ?></p>
            <img src="../images/histoire/wisigoth.png">
        </div>
        </a>
        <a href="<?php echo '../pages/histoire/musulman.php?langue=' . $langue;?>">
            <div class="button three">
                <p><?php echo $translations["musulman"] ?></p>
                <img src="../images/histoire/musulman.png">
            </div>
        </a>
        <a href="<?php echo '../pages/histoire/espagnol.php?langue=' . $langue;?>">
            <div class="button four">
                <p><?php echo $translations["espagnol"] ?></p>
                <img src="../images/histoire/espagne2.png">
            </div>
        </a>
    </div>
    
    <?php 
        include('footer.inc.php');
    ?>
</body>
</html>