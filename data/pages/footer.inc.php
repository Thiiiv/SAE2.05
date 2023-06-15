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
include("traduction.inc.php");
?>

<div id="retour">
    <a href="#" class="haut"></a>
</div>
<div class="footer">
    <div class="first-part">
        <div class="lien-utile">
            <a href="#title-utile" id="title-utile"><?php echo $translations["liens"];?></a>
            <a href="https://twitter.com/CordoueWeb"><img src="<?php echo $images.'twitter.webp';?>" alt="Twitter" id="twitter"></a>
        </div>
        <div class="ecole"> 
            <a href="https://www.univ-gustave-eiffel.fr/" id="title-ecole"><?php echo $translations["ecole"];?></a>
            <a href="https://iut.univ-gustave-eiffel.fr/">IUT de Marne-la-Vallée</a>
        </div>
        <div class="mention">
            <a href="<?php echo $liens.'mentionslegales.php';?>" id="title-mention"><?php echo $translations["mentions"];?></a>
            <p>© 2022/2023</p>
        </div>
    </div>
    <div class="second-part">
        <img src="<?php echo $images.'Univ.png';?>" />
        <img src="<?php echo $images.'unsplash.png';?>" />
        <img src="<?php echo $images.'pexels.png';?>" />
        <img src="<?php echo $images.'unesco_vrai.png';?>" />
    </div>
</div>

<script src="<?php echo $liens .'../script/boutonhaut.js';?>"></script>
