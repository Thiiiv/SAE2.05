<?php
session_start();
$_SESSION["location"] = "data/pages/";
$jsonData = file_get_contents('../json/fr.json');
$translations = json_decode($jsonData, true);
if (isset($_GET["langue"])) {
    $langue = $_GET["langue"];
    if ($langue == "en") {
        $jsonData = file_get_contents('../json/ang.json');
        $translations = json_decode($jsonData, true);
    }
}
else {
    $langue = "fr";
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- OSEF -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Evenements</title>

    <!-- JS -->
    <script src="../script/barre.js"></script>
    <script src="../script/menulateral.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="../style/style.css" />
    <link rel="stylesheet" href="../style/evenements.css" />
    <link rel="shotcut icon" href="../images/favicon.png">

    </style>
</head>

<body>
    <?php 
        include('header.inc.php');
    ?>
    
    <h1><?php echo $translations["evenements"] ?></h1>
    <img class="transition" src="../images/sous_titre.png">


    <div class="flexboxrow">
    <?php

    include('connexion.inc.php');
    $requete = 
    "SELECT
    titre, sous_titre, description, lien
    FROM evenements;";

    $cnx->exec("set search_path to cordoue;");

    $results = $cnx->query(
        $requete
    );

    while ($ligne = $results->fetch(PDO::FETCH_OBJ))
    {

        echo "
        <div class='boite'>
            <img class='photoevent' src=".$ligne->lien.">
            <div class='texteevent'>
                <h4 class='titreevent'>".$ligne->titre."</h4>
                <h4 class='soustitreevent'>".$ligne->sous_titre."</h4>
                <p>".$ligne->description."</p>
            </div>
        </div>";
    }
    $results->closeCursor();

    ?>
    </div>
    <?php 
    include('footer.inc.php');
    ?>
    
</body>

</html>