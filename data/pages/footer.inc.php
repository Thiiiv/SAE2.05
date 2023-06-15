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
<div id="retour">
    <a href="#" class="haut"></a>
</div>

<div class="footer">
    <div class="first-part">
        <div class="lien-utile">
            <a href="#title-utile" id="title-utile">Liens utiles</a>
            <br>
            <a href="https://twitter.com/CordoueWeb"><img src= '.$images.'"twitter.webp" alt="Twitter" id="twitter"></a>
        </div>
        <div class="ecole">
            <a href="#title-ecole" id="title-ecole">Notre école</a>
            <br>
            <a href="https://iut.univ-gustave-eiffel.fr/">IUT de Marne-la-Vallée</a>
        </div>
        <div class="mention">
            <a href="#title-mention" id="title-mention">Mentions légales</a>
            <br>
            <p>© 2022/2023</p>
        </div>
    </div>
    <div class="second-part">
        <div class="partenaire">
            <img src="'.$images.'Univ.png" />
            <img src="'.$images.'unsplash.png" />
            <img src="'.$images.'pexels.png" />
            <img src="'.$images.'unesco_vrai.png" />
        </div>
    </div>
</div>

<script src="'.$liens .'../script/boutonhaut.js"></script>';
?>
