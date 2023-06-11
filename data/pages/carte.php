<?php
session_start();
$_SESSION["location"] = "data/pages/";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- OSEF -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Carte</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- JS -->
    <script src="../script/barre.js"></script>
    <script src="../script/menulateral.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="../style/style.css" />
    <link rel="stylesheet" href="../style/carte.css" />
    <link rel="shotcut icon" href="../images/favicon.png">
</head>

<body>
    <?php 
    include('header.inc.php');
    ?>
    <section class="page-content">
        <section class="carte">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50378.62436120267!2d-4.819504777871781!3d37.89153921286438!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd6cdf26f95e0aef%3A0x4df1d2e8108456c3!2sCordoue%2C%20Espagne!5e0!3m2!1sfr!2sfr!4v1673986568870!5m2!1sfr!2sfr"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>
        <form name="iti" action="#" class="itineraire">
            Vous partez de : <input type="text" class="depart" name="depart" />
            <input type="hidden" name="arrivee" value="Cordoba" />
            <input type="button" value="Rechercher" class="recherche"
                onclick="window.open("http://maps.google.fr/maps?f=d&hl=fr&saddr='+document.iti.depart.value+'&daddr='+document.iti.arrivee.value+'&ie=UTF8&z=12&om=1');" />
        </form>
    </section>
    <?php 
    include('footerPages.inc.html');
    ?>
    
</body>

</html>