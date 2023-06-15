<?php
session_start();
$_SESSION["location"] = "data/pages/histoire/";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- OSEF -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Epoque espagnole</title>

    <!-- JS -->
    <script src="../../script/barre.js"></script>
    <script src="../../script/menulateral.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="../../style/style.css" />
    <link rel="stylesheet" href="../../style/epoque.css" />
    <link rel="shotcut icon" href="../../images/favicon.png">
</head>

<!-- 
    Sources : 
    https://www.britannica.com/place/Cordoba-Spain
    https://whc.unesco.org/fr/list/313
    https://www.turismodecordoba.org/historia-1
    http://www.uco.es/internacional/extranjeros/es/cordoba-ciudad-patrimonio-dialogo-de-culturas

 -->
 <!-- 
    Sources images : 
    Ferdinand III - © José Luiz Bernardes Ribeiro / CC BY-SA 4.0
    Cathedrale - Jean-Pierre Dalbéra
    Archi. Gothique - Image par <a href="https://pixabay.com/fr/users/bogitw-851103/?utm_source=link-attribution&utm_medium=referral&utm_campaign=image&utm_content=756151">Gerhard Bögner</a> de <a href="https://pixabay.com/fr//?utm_source=link-attribution&utm_medium=referral&utm_campaign=image&utm_content=756151">Pixabay</a>
    decret - domaine publique - https://commons.wikimedia.org/wiki/File:Alhambra_Decree.jpg
    universite - Kent Wang from Barcelona, Spain



  -->

<body>
    
    <!-- Barre horizontale -->
    <?php 
        include('../header.inc.php');
    ?>
    
    <h1>Epoque espagnole</h1>
    <img class="transition titre" src="../../images/sous_titre.png">
    <div class="container-page">
        <div class="container-event">
            <img class="image" src="../../images/histoire/espagnol/ferdinandIII.webp" alt="Ferdinand III de Castille">
            <div class="container-texts">
                <h3>La Reconquista</h3>
                <img class="transition reverse-transition" src="../../images/sous_titre.png">
                <div class="text">
                    Prise de Cordoue par Ferdinand III de Castille (1236) <hr>
                    Après plusieurs siècles de domination musulmane, Cordoue est conquise par Ferdinand III de Castille en 1236. 
                    Cette victoire marque la fin de la période de gouvernance islamique dans la région et ouvre la voie à l'établissement du pouvoir chrétien. 
                    Ferdinand III consolide ainsi son règne en Castille et joue un rôle clé dans la Reconquista, la reconquête progressive des territoires musulmans par les chrétiens.
                </div>
            </div>
        </div>
        <div class="container-event reverse-event">
            <img class="image" src="../../images/histoire/espagnol/cathedrale.jpg" alt="Mosquée cathédrale de Cordoue">
            <div class="container-texts">
                <h3>La Grande Mosquée devient une cathédrale</h3>
                <img class="transition reverse-transition" src="../../images/sous_titre.png">
                <div class="text">
                    Conversion de la Mosquée de Cordoue en Cathédrale (1238) <hr>
                    Après la prise de Cordoue, la Grande Mosquée, qui avait été construite à l'origine au VIIIe siècle par les Omeyyades, est convertie en cathédrale. 
                    Cette transformation symbolise la suprématie chrétienne sur la ville et marque un tournant dans l'histoire de Cordoue. 
                    Des éléments chrétiens, tels que la chapelle principale, sont ajoutés à la structure existante, 
                    mélangeant ainsi les styles architectural islamique et chrétien.
                </div>
            </div>
        </div>
        <div class="container-event">
            <img class="image" src="../../images/histoire/espagnol/gothique.png" alt="Architecture Gothique">
            <div class="container-texts">
                <h3>Le développement de l'architecture gothique</h3>
                <img class="transition reverse-transition" src="../../images/sous_titre.png">
                <div class="text">
                    Construction de la Cathédrale de Cordoue (vers 1238-1600) <hr>
                    Après la conversion de la Grande Mosquée en cathédrale, des travaux de construction sont entrepris pour ériger une nouvelle cathédrale à Cordoue. 
                    Au fil des siècles, différents architectes apportent des modifications et des ajouts à l'édifice, 
                    incorporant progressivement des éléments du style gothique. 
                    Cela donne naissance à une cathédrale unique qui reflète l'évolution de l'architecture religieuse au fil du temps.
                </div>
            </div>
        </div>
        <div class="container-event reverse-event">
            <img class="image" src="../../images/histoire/espagnol/decret.jpg" alt="Décret d'expulsion des juifs et Morisques">
            <div class="container-texts">
                <h3>Les persécutions contre les juifs et les musulmans</h3>
                <img class="transition reverse-transition" src="../../images/sous_titre.png">
                <div class="text">
                    Décret d'expulsion des Juifs (1492) et Morisques (1609) <hr>
                    Au cours de cette période, l'Inquisition espagnole exerce une pression croissante sur les Juifs et les musulmans de Cordoue pour qu'ils se convertissent au christianisme. 
                    En 1492, les Juifs sont expulsés d'Espagne par le décret d'Alhambra, et de nombreux Juifs de Cordoue sont contraints de quitter la ville. 
                    En 1609, les Morisques, les musulmans convertis de force, subissent le même sort avec le décret d'expulsion des Morisques. 
                    Ces événements marquent la fin de la présence significative des communautés juives et musulmanes à Cordoue.
                </div>
            </div>
        </div>
        <div class="container-event">
            <img class="image" src="../../images/histoire/espagnol/universite.webp" alt="Université de Cordoue">
            <div class="container-texts">
                <h3>L'ouverture culturelle</h3>
                <img class="transition reverse-transition" src="../../images/sous_titre.png">
                <div class="text">
                    Fondation de l'Université de Cordoue (1972) <hr>
                    En 1972, l'Université de Cordoue est fondée, marquant un tournant important dans l'histoire de la ville. 
                    L'université devient un centre d'éducation supérieure, attirant des étudiants nationaux et internationaux. 
                    Cela contribue à l'ouverture culturelle de Cordoue, stimule la recherche, encourage les échanges intellectuels 
                    et favorise le développement des arts, des sciences et des connaissances dans la région.
                </div>
            </div>
        </div>
        <div class="container-event reverse-event">
            <img class="image" src="../../images/histoire/espagnol/unesco.png" alt="Logo de l'UNESCO">
            <div class="container-texts">
                <h3>La renommée mondiale</h3>
                <img class="transition reverse-transition" src="../../images/sous_titre.png">
                <div class="text">
                    L'inscription de la Mezquita-Catedral sur la liste du patrimoine mondial de l'UNESCO (1984) <hr>
                    La Mezquita-Catedral de Cordoue, un monument emblématique de la ville, 
                    est inscrite sur la liste du patrimoine mondial de l'UNESCO en 1984. 
                    Ce site unique combine des éléments architecturaux islamiques et chrétiens, 
                    témoignant de l'histoire complexe et des influences multiples de Cordoue. 
                    Cette reconnaissance internationale renforce la renommée mondiale de la ville en tant que destination culturelle et touristique, 
                    attirant des visiteurs du monde entier pour admirer sa splendeur architecturale et son héritage historique.
                </div>
            </div>
        </div>
    </div>
    
    <?php 
        include('../footer.inc.php');
    ?>
</body>
</html>