<?php
session_start();
$_SESSION["location"] = "data/pages/";

if (!isset($_SESSION['statut']) || $_SESSION['statut'] != 1){
    header('location:../../index.php');
}


if (isset($_POST['numEvent'])) {
    include('connexion.inc.php');
    $requete =
    "delete from evenement
    where numevent = ".$_POST['numEvent'];

    echo $requete;
    $cnx->exec($requete);
    header('location:heritage.php');

}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- OSEF -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Gestion des événements</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- JS -->
    <script src="../script/barre.js"></script>
    <script src="../script/menulateral.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="../style/style.css" />
    <link rel="stylesheet" href="../style/connexion.css" />
    <link rel="shotcut icon" href="../images/favicon.png">

</head>

<body>
    
    <?php 
    include('header.inc.php');
    ?>


    <?php

    include('connexion.inc.php');
    $requete = 
    "SELECT
    titre, numevent
    FROM evenements;";

    $cnx->exec("set search_path to cordoue;");

    $results = $cnx->query(
        $requete
    );

    echo "<h1>Gestion des événements</h1><div style='padding-top:10vh;display:flex;align-items:center;justify-content:center;flex-direction:column;'><ul><h2>Retirer des événements</h2>";

    while ($ligne = $results->fetch(PDO::FETCH_OBJ)) {

        echo "<div style='display:flex;flex-direction:row;align-content: center;margin-top:1vh;'>

        <form method='post' action='gestionEvenements.php'>
        <input type='hidden' name='numEvent' value='" . urlencode($ligne->numevent) . "'>
        <button type='submit' style=\"height:30px;
        width:30px;font-size:15px\">x</button>
       </form>

        <li>" . $ligne->titre. "</li></div>";
    }

    $results->closeCursor();
    ?>


</div>


    <div class='form'>
    <h2>Ajouter un événement</h2>
        <form class="form" style='width:50vw;' action="gestionEvenements.php" method="POST">
            <div>
                Titre<br><input type="text" name="titre" /><br/>
            </div>
            <div>
                Sous-Titre<br><input type="text" name="sous_titre" /><br/>
            </div>
            <div>
                Description<br><input style="height:20vh;" type="text" name="description" /><br/>
            </div>
            <div>
                Lien de l'image<br><input type="text" name="lien" /><br/>
            </div>







            <input type="submit" name="submit" value="Ajouter" id="submit"/>
        </form>



    </div>






    <?php 
    include('footerPages.inc.html');
    ?>
    
</body>

</html>