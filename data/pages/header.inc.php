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
?>

<header>
    <input class="menu-btn" type="checkbox" id="menu-btn" />
    <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
    <div class="menu">
        <div class="accueil">
            <a href="<?php echo $index;?>" class="lien">
                <img src="<?php echo $images.'logo.png';?>" alt="logo"/>
            </a>
        </div>
        <div class="liens">
            <?php
            if (isset($_SESSION['statut']) && $_SESSION['statut'] == 1){
                echo '<a href="'.$liens.'gestionEvenements.php" class="lien">Gestion Evenements</a>';
                echo '<div style="flex:10;margin-right:20vw;"></div>';
            }
            ?>
            
            <a href="<?php echo $liens.'histoire.php';?>" class="lien">Histoire</a>
            <a href="<?php echo $liens.'monuments.php';?>" class="lien">Monuments</a>
            <a href="<?php echo $liens.'evenements.php';?>"  class="lien">Evenements</a>
            <a href="<?php echo $liens.'parcours.php';?>"  class="lien">Parcours</a>
            <div class="langues">
                <a href="<?php echo $index;?>" class="lien">Langues</a>
                    <div class="langue">
                        <a href="<?php echo $index; ?>" class="lien"><img src="../images/fr.png" alt="FR"></a>
                        <a href="<?php echo $index; ?>" class="lien"><img src="../images/eng.png" alt="EN"></a>
                    </div>
            </div>
            <a href="<?php echo $liens.'connexion.php';?>" class="lien"><img src="<?php echo $images.'connect.png';?>" alt="connexion" id="connexion"/></a>
        </div>
    </div>
</header>