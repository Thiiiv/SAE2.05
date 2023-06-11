<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- OSEF -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Epoque romaine</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- JS -->
    <script src="../../script/barre.js"></script>
    <script src="../../script/menulateral.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="../../style/style.css" />
    <link rel="stylesheet" href="../../style/epoque.css" />
    <link rel="shotcut icon" href="../../images/favicon.png">
</head>

<body>
    <!-- Barre horizontale -->
    <?php 
        include('../headerSousPages.inc.html');
    ?>
    
    <h1>Epoque romaine</h1>
    <img class="transition titre" src="../../images/sous_titre.png">
    <div class="container-page">
        <div class="container-event">
            <img class="image" src="../../images/histoire/claudius.jpg" alt="Marcus Claudius Marcellus">
            <div class="container-texts">
                <h3>Fondation</h3>
                <img class="transition reverse-transition" src="../../images/sous_titre.png">
                <div class="text">
                    Cordoue a été fondée par les Romains au IIè siècle av. J.-C.
                    La région de Cordoue était auparavant habitée par les Celtes, 
                    mais les Romains ont établi une colonie dans la région et ont commencé à développer une ville.
                    Cordoue aurait été fondée par le général romain Marcus Claudius Marcellus au milieu du IIè siècle av. J.-C., 
                    pendant la Deuxième guerre punique.
                    Les Romains ont choisi cet endroit en raison de sa situation géographique favorable, 
                    notamment parce qu'il était située sur la rive du fleuve Guadalquivir, 
                    un affluent navigable qui permettait un accès facile à la mer Méditerranée.
                </div>
            </div>
        </div>
        <div class="container-event reverse-event">
            <img class="image" src="../../images/histoire/route.jpg" alt="Route romaine">
            <div class="container-texts">
                <h3>Routes romaines</h3>
                <img class="transition reverse-transition" src="../../images/sous_titre.png">
                <div class="text">
                    Les Romains étaient connus pour leur capacité à construire des routes bien planifiées et durables.
                    Ainsi, ils ont développé un vaste réseau routier dans l'ensemble de l'Empire romain, y compris en Hispanie.
                    Les routes romaines à Cordoue faisaient donc partie de ce réseau et reliaient la ville à d'autres régions de l'Hispanie et même à d'autres parties de l'Empire.
                    Elles ont facilité le commerce et les échanges commerciaux, permettant à la ville de prospérer en tant que centre commercial important. 
                    Les routes ont permis le transport efficace de marchandises telles que l'huile d'olive, le vin, le blé et d'autres produits agricoles qui étaient produits dans la région.
                </div>
            </div>
        </div>
    </div>
    
    <?php 
        include('../footerSousPages.inc.html');
    ?>
</body>
</html>