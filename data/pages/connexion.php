<?php
session_start();
$_SESSION["location"] = "data/pages/";
if ( (!isset($_POST['email'])) || (!isset($_POST['motdepasse'])) || $_POST['email'] == "" || $_POST['motdepasse'] == "" ) {
    $_SESSION['ok'] = false;
} else {

    if (!(preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]+$/", $_POST['email']))){
        header('location:connexion.php');
    }


    $_SESSION['email'] = $_POST['email'];
 
    include('connexion.inc.php');
    $cnx->query('set search_path to cordoue;');
    $requete = 
    "SELECT *
    FROM utilisateur
    WHERE email = '" . $_SESSION['email'] . "'
    and motdepasse = md5('" . $_POST['motdepasse'] . "');";

    $resultat = $cnx->query($requete);
    $resultat = $resultat->fetchAll()[0];

    if ($resultat['email'] == $_SESSION['email']) {
        $_SESSION['ok'] = true;

        $_SESSION['id'] = $resultat['id'];
        $_SESSION['statut'] = $resultat['typeutilisateur'];
        header('location:../../index.php');
        } else {
        $_SESSION['ok'] = false;
        header('location:connexion.php');
        
    }
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- OSEF -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Monument</title>
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
    <!-- Barre horizontale -->
    <?php 
    include('header.inc.php');
    ?>
     <div class='form'>
        <form class="form" style='width:50vw;' action="connexion.php" method="POST">
            <div>Adresse mail <br><input type="text" name="email" /> <br />
            </div>
            <div>
                Mot de passe <br><input type="password" name="motdepasse" /><br />
            </div>
            <input type="submit" name="submit" value="Se connecter" id="submit"/>
            </p>
        </form>
    </div>

    <?php 
    include('footerPages.inc.html');
    ?>
    
</body>

</html>

