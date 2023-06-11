<?php
if (isset($_SESSION['location'])) {
    $images = "";
    $liens = "";
    $index = "";
    switch ($_SESSION['location']) {
        case "root":
            $images = "data/images/";
            $liens = "data/pages/";
            $index = "#";
            break;
        case "data/pages/":
            $images = "../images/";
            $liens = "";
            $index = "../../index.php";
            break;
        case "data/pages/monuments/":
            $images = "../../images/";
            $liens = "../";
            $index = "../../../index.php";
            break;
    }
}
?>
<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="../style/style.css">
</head>
<div class="menu">
    <?php


    echo '
    <div class="accueil">
    <a href="' . $index . '" class="lien">
        <img src="' . $images . 'logo.png" alt="logo"/>
    </a>
    </div>
    <div class="liens">
    ';

    if (isset($_SESSION['statut']) && $_SESSION['statut'] == 1){
        echo '<a href="' . $liens . 'gestionEvenements.php" class="lien">Evenements</a>';
    }
    print_r($_SESSION);
    
    echo '<a href="' . $liens . 'histoire.php" class="lien">Histoire</a>
        <a href="' . $liens . 'monuments.php" class="lien">Monuments</a>
        <div class="lien infos">
            <a href="' . $liens . 'evenements.php">Informations Pratiques</a>
                <div class="info"> <a href="' . $liens . 'evenements.php">Evenements</a>
                    <a href="' . $liens . 'carte.php">Carte</a>
                </div>
        </div>
        <div class="lien langues">
        <a href="' . $index . '">Langues</a>
            <div class="langue">
                <a href="' . $index . '">Français</a>
                <a href="' . $index . '">English</a>
            </div>
        </div>
        <a href="' . $liens . 'connexion.php" class="lien"><img src="' . $images . 'connect.png" alt="connexion" id="connexion"/></a>
        <button class="lien"><img src="' . $images . 'recherche.png" alt="Recherche"></button>
        </div>
    </div> ';
        
        ?>