<?php
session_start();
$_SESSION["location"] = "data/pages/";
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
    <link rel="stylesheet" href="../style/monuments.css" />
    <link rel="stylesheet" href="../style/histoire.css" />
    <link rel="shotcut icon" href="../images/favicon.png">
    <title>Histoire</title>
</head>

<body>
    <?php 
    include('header.inc.php');
    ?>
    <h1>Histoire</h1>
    <img class="transition" src="../images/sous_titre.png">
    
    <div class="zone">
        <img src="../images/histoire/arbre-vie.png">
        <a href="../pages/histoire/romain.php">
           <div class="button one">
                <p>
                    Epoque romaine
                </p>
                <img src="../images/histoire/romaine.png">
            </div> 
        </a>
        <a href="../pages/histoire/wisigoth.php">
        <div class="button two">
            <p>
                Epoque wisigoth
            </p>
            <img src="../images/histoire/wisigoth.png">
        </div>
        </a>
        <a href="../pages/histoire/musulman.php">
            <div class="button three">
                <p>
                    Epoque musulmane
                </p>
                <img src="../images/histoire/musulman.png">
            </div>
        </a>
        <a href="../pages/histoire/espagnol.php">
            <div class="button four">
                <p>
                    Epoque espagnol
                </p>
                <img src="../images/histoire/espagne2.png">
            </div>
        </a>
    </div>
    
    <?php 
        include('footer.inc.php');
    ?>
</body>
</html>