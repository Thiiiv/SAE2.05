<?php
session_start();
$_SESSION["location"] = "data/pages/";

$_SESSION['ok'] = false;
$_SESSION['email'] = null;
$_SESSION['id'] = null;
$_SESSION['statut'] = null;
if ( (isset($_POST['email'])) && (isset($_POST['motdepasse'])) && $_POST['email'] != "" && $_POST['motdepasse'] != "" ) {

    //Vérification de l'entrée utilisateur
    if (!(preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]+$/", $_POST['email']))){
        header('location:connexion.php');
    }
 
    include('connexion.inc.php');
    $requete = 
    "SELECT *
    FROM utilisateur
    WHERE email = '" . $_POST['email'] . "'
    and motdepasse = md5('" . $_POST['motdepasse'] . "');";

    $resultat = $cnx->query($requete);
    $resultat = $resultat->fetchAll()[0];

    // Connexion
    if ($resultat['email'] == $_POST['email']) {
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

    <title>Connexion</title>

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
        <form class="form" style='width:50vw;' action="connexion.php" method="POST">
            <div>Adresse mail <br><input type="text" name="email" /> <br />
            </div>
            <div>
                Mot de passe <br><input type="password" name="motdepasse" /><br />
            </div>
            <input type="submit" name="submit" value="Se connecter" id="submit"/>
        </form>
        <a href="inscription.php" style="color:white">S'inscrire</a>
    </div>

    <?php 
    include('footer.inc.php');
    ?>
    
</body>

</html>

