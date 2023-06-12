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
            <img class="image" src="../../images/histoire/romain/claudius.jpg" alt="Marcus Claudius Marcellus">
            <div class="container-texts">
                <h3>Fondation</h3>
                <img class="transition reverse-transition" src="../../images/sous_titre.png">
                <div class="text">
                    Cordoue a été fondée par les Romains au IIè siècle av. J.-C.
                    La région de Cordoue était auparavant habitée par les Celtes, 
                    mais les Romains ont établi une colonie dans la région et ont commencé à développer une ville.<br>
                    Cordoue aurait été fondée par le général romain Marcus Claudius Marcellus au milieu du IIè siècle av. J.-C., 
                    pendant la Deuxième guerre punique.<br>
                    Les Romains ont choisi cet endroit en raison de sa situation géographique favorable, 
                    notamment parce qu'il était située sur la rive du fleuve Guadalquivir, 
                    un affluent navigable qui permettait un accès facile à la mer Méditerranée.
                </div>
            </div>
        </div>
        <div class="container-event reverse-event">
            <img class="image" src="../../images/histoire/romain/cesar.jpg" alt="Jules César">
            <div class="container-texts">
                <h3>Règne de Jules César</h3>
                <img class="transition reverse-transition" src="../../images/sous_titre.png">
                <div class="text">
                Après les victoires de César à Pharsale et à Thapsus, les partisans de la république, menés à l'origine par Pompée,
                sont confinés dans les provinces espagnoles, tandis que Les généraux de César restent à leur camp à Oculbo, à l'est de Cordoue.<br>
                En 49 avant J.-C., César réunit les représentants des villes de la Hispania Ulterior à Cordoue et plante un arbre près de l'actuel Alcázar de los Reyes Cristianos.<br>
                En 48 avant J.-C., Quintus Cassius Longinus, gouverneur de César en Hispanie ultérieure, est agressé dans la basilique de Cordoue.
                En représailles, il détruit les possessions des Cordobans situées au sud de la rivière.
                Les habitants de Cordoue se lassent de la cruauté de Quintus Cassius Longinus et quittent le parti de César.<br>
                En 46 avant J.-C., Cordoue reçoit le statut colonial des fils de Pompée et devient Corduba Colina Patricia.
                Pendant le conflit entre César et Pompée, Cordoue est assiégée par César, qui se bat contre Pompée le Jeune pour le contrôle du pont.<br>
                Après la bataille de Munda en 45 avant J.-C., César assiège à nouveau la ville, la prend d'assaut et Cordoue se rend.
                La ville est détruite par les troupes de César en raison de son soutien à Pompée.
                </div>
            </div>
        </div>
        <div class="container-event ">
            <img class="image" src="../../images/histoire/romain/auguste.jpg" alt="Auguste">
            <div class="container-texts">
                <h3>Règne d'Auguste</h3>
                <img class="transition reverse-transition" src="../../images/sous_titre.png">
                <div class="text">
                L'Empire romain est le nom donné à la domination romaine entre 27 avant J.-C. et 476 ap. J.-C., dans certaines provinces de l'Empire.
                Celle-ci est fondée par Auguste, qui met fin à la dernière guerre civile, dans la toute fin de la République.<br>
                Auguste crée une nouvelle division administrative, la province Bétique, avec comme capitale Cordoue.
                Sous le règne d'Auguste, Cordoue subit alors des transformations majeures,
                notamment l'amélioration de la navigabilité du fleuve, l'expansion du réseau routier et la construction de grands monuments publics.
                Le forum colonial, le théâtre, les aqueducs et probablement l'amphithéâtre font partis de ces transformations. <br>
                Des travaux de construction et de restauration sont entrepris, comme la reconstruction du pont sur le Guadalquivir.
                Des fontaines publiques sont également construites à proximité de l'aqueduc.
                La période d'Auguste marque donc un développement significatif de Cordoue en tant que ville romaine prospère.
                </div>
            </div>
        </div>
    </div>
    
    <?php 
        include('../footerSousPages.inc.html');
    ?>
</body>
</html>