<?php
session_start();

if ( (!isset($_POST['email'])) || (!isset($_POST['motdepasse'])) || $_POST['email'] == "" || $_POST['motdepasse'] == "" ) {
    $_SESSION['ok'] = false;
    header('location:formconnexion.php');
} else {
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
        header('location:formconnexion.php');
        
    }
}
