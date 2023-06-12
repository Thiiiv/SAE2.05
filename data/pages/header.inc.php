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
        case "data/pages/histoire/":
            $images = "../../images/";
            $liens = "../";
            $index = "../../../index.php";
            break;
    }
}

    echo '
<header>
    <div class="menu">
    <div class="accueil">
    <a href="' . $index . '" class="lien">
        <img src="' . $images . 'logo.png" alt="logo"/>
    </a>
    </div>
    <div class="liens">
    ';

    if (isset($_SESSION['statut']) && $_SESSION['statut'] == 1){
        echo '<a href="' . $liens . 'gestionEvenements.php" class="lien">Gestion Evenements</a>';
        echo '<div style="flex:10;margin-right:20vw;"></div>';
    }
    //print_r($_SESSION);
    
    echo '<a href="' . $liens . 'histoire.php" class="lien">Histoire</a>
        <a href="' . $liens . 'monuments.php" class="lien">Monuments</a>
        <a href="' . $liens . 'evenements.php"  class="lien">Evenements</a>
        <a href="' . $liens . 'carte.php"  class="lien">Carte</a>
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
    </div>
</header>';
?>