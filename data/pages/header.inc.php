<?php
if (isset($_SESSION['location'])) {
    $images = "";
    $liens = "";
    $index = "";
    switch ($_SESSION['location']) {
        case "root" :
            $images = "data/images/";
            $liens = "data/pages/";
            $index = "#";
            break;
        case "data/pages/" :
            $images = "../images/";
            $liens = "";
            $index = "../../index.php";
            break;
        case "data/pages/monuments/" :
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
    <div class="accueil">
        <a href="<?php echo $index; ?>" class="lien"><img src="<?php echo $images."logo.png"; ?>" alt="logo"/></a>
    </div>
    <div class="liens">
        <a href="<?php echo $liens."histoire.php"; ?>" class="lien">Histoire</a>
        <a href="<?php echo $liens."monuments.php"; ?>" class="lien">Monuments</a>
        <div class="lien infos">
            <a href="<?php echo $liens."evenements.php"; ?>">Informations Pratiques</a>
            <div class="info">
                <a href="<?php echo $liens."evenements.php"; ?>">Evenements</a>
                <a href="<?php echo $liens."carte.php"; ?>">Carte</a>
            </div>
        </div>
        <div class="lien langues">
            <a href="<?php echo $index; ?>">Langues</a>
            <div class="langue">
                <a href="<?php echo $index; ?>">Français</a>
                <a href="<?php echo $index; ?>">English</a>
            </div>
        </div>
        <a href="<?php echo $liens."connexion.php"; ?>" class="lien"><img src="<?php echo $images."connect.png"; ?>" alt="connexion" id="connexion"/></a>
        <button class="lien"><img src="<?php echo $images."recherche.png"; ?>" alt="Recherche"></button>
    </div>
</div>
