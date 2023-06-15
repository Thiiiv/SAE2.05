<?php
if (isset($_SESSION['location'])) {
    $images = "../../images/";
    $liens = "../";
    $index = "../../../index.php";
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
    }
}
include("traduction.inc.php");
?>

<header>
    <input class="menu-btn" type="checkbox" id="menu-btn" />
    <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
    <div class="menu">
        <div class="accueil">
            <a href="<?php echo $index . '?langue=' . $langue;?>" class="lien">
                <img src="<?php echo $images.'logo.png';?>" alt="logo"/>
            </a>
        </div>
        <div class="liens">
            <?php
            if (isset($_SESSION['statut']) && $_SESSION['statut'] == 1){
                echo '<a href="'.$liens.'gestionEvenements.php?langue=' . $langue . '" class="lien">Gestion Evenements</a>';
                echo '<div style="flex:10;margin-right:20vw;"></div>';
            }
            ?>
            
            <a href="<?php echo $liens.'histoire.php?langue=' . $langue;?>" class="lien"><?php echo $translations["histoire"];?></a>
            <a href="<?php echo $liens.'monuments.php?langue=' . $langue;?>" class="lien"><?php echo $translations["monuments"];?></a>
            <a href="<?php echo $liens.'evenements.php?langue=' . $langue;?>"  class="lien"><?php echo $translations["evenements"];?></a>
            <a href="<?php echo $liens.'parcours.php?langue=' . $langue;?>"  class="lien"><?php echo $translations["parcours"];?></a>
            <div class="langues">
                <a href="?langue=fr" class="lien"><?php echo $translations["langue"];?></a>
                    <div class="langue">
                        <a href="?langue=fr" class="lien"><img src="<?php echo $images.'fr.png';?>" alt="FR"></a>
                        <a href="?langue=en" class="lien"><img src="<?php echo $images.'eng.png';?>" alt="EN"></a>
                    </div>
            </div>
            <a href="<?php echo $liens.'connexion.php?langue=' . $langue;?>" class="lien"><img src="<?php echo $images.'connect.png';?>" alt="connexion" id="connexion"/></a>
        </div>
    </div>
</header>