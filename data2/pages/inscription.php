<?php
session_start();
$_SESSION["location"] = "data/pages/";

if ( (!isset($_POST['email'])) || (!isset($_POST['motdepasse'])) || $_POST['email'] == "" || $_POST['motdepasse'] == "" ) {
    $_SESSION['ok'] = false;
} else {


    // Regex d'un email, Vérification de l'entrée utilisateur
    if (!(preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]+$/", $_POST['email']))){
        header('location:inscription.php');
    }

    include('connexion.inc.php');
    $cnx->query('set search_path to cordoue;');
    $requete = 
    "SELECT *
    FROM utilisateur
    WHERE email = '" . $_POST['email'] . "'";

    $resultat = $cnx->query($requete);

    if ($requete){ header('location:inscription.php');}

    // Création du compte utilisateur
    $requete = 
    "INSERT INTO utilisateur
    VALUES (DEFAULT,'".$_POST['email']."',md5('".$_POST['motdepasse']."'),FALSE) returning id";

    $resultat = $cnx->query($requete);
    $id = $resultat->fetch()[0];

        $_SESSION['ok'] = true;
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['id'] = $id;
        $_SESSION['statut'] = "f";
        header('location:../../index.php');
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
    <!-- JS -->
    <script src="../script/barre.js"></script>
    <script src="../script/menulateral.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="../style/style.css" />
    <link rel="stylesheet" href="../style/formulaire.css" /> 
    <link rel="shotcut icon" href="../images/favicon.png">

</head>

<body>
    <!-- Barre horizontale -->
    <?php 
    include('header.inc.php');
    ?>
     <div class='form' style="padding:10vw;">
        <form class="form" style='width:50vw;' action="inscription.php" method="POST">
            <div>Adresse mail <br><input type="text" name="email" /> <br />
            </div>
            <div>
                Mot de passe <br><input type="password" name="motdepasse" /><br />
            </div>
            <input type="submit" name="submit" value="Créer un compte" id="submit"/>
            <a href="connexion.php" style="color:white">Se connecter</a>
        </form>
    </div>

    <?php 
    include('footerPages.inc.html');
    ?>
    
</body>

</html>

