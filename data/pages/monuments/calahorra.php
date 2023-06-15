<?php
session_start();
$_SESSION["location"] = "data/pages/monuments/";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../../script/barre.js"></script>
    <link rel="stylesheet" href="../../style/style.css" />
    <link rel="stylesheet" href="../../style/monuments.css" />
    <link rel="shotcut icon" href="../../images/favicon.png">
    <title>Tour de la Calahorra</title>
</head>

<body>
    <header>
        <?php
        include('../header.inc.php');
        ?>
    </header>

    <div class="flexboxcolonne">
        <div id="fond" style="background-image: url('../../images/monuments/calahorrafond.jpg');">
            <a id="boutonretour" href="../monuments.php">
                <p>◄ Monuments</p>
            </a>
            <h1>Tour de la Calahorra</h1>
            <a style="margin-top: 75vh;" href="#content"><img id="flechebas" class="shake-vertical"
                    src="../../images/flecheversbas.png"></a>
        </div>

        <div id="content" class="partie">
            <h3>Histoire</h3>
            <img class="transition reversetransition" src="../../images/sous_titre.png">

            <div class="contenu droite">
                <p>La tour de Calahorra est un vestige de l'histoire de Cordoue, en Espagne. Elle a été construite par les Maures au XIIe siècle pour défendre la ville contre les attaques ennemies. Au fil des siècles, la tour a subi des modifications et des rénovations, notamment sous le règne des rois chrétiens, qui ont ajouté des éléments décoratifs.
<br><br>
Au XXe siècle, la tour de Calahorra a été restaurée et transformée en musée de la Tolérance. Le musée explore l'histoire de Cordoue en tant que ville multiculturelle et la coexistence pacifique entre les différentes religions qui ont habité la ville. Aujourd'hui, la tour de Calahorra est un site touristique populaire à Cordoue, offrant une vue panoramique sur la ville et un aperçu fascinant de l'histoire de l'Espagne médiévale.
                </p>
                <img src="../../images/monuments/calahorrahistoire.jpg">
            </div>

        </div>

        <div class="partie">
            <h3>Architecture</h3>
            <img class="transition" src="../../images/sous_titre.png">
            <div class="contenu gauche">
                <img src="../../images/monuments/calahorraarchitecture.jpg">
                <p>L'architecture de la tour de Calahorra est typique de l'époque mauresque en Espagne. Elle est construite en pierre et en brique, avec des murs épais pour résister aux attaques ennemies. La tour est dotée d'une base carrée et de plusieurs étages, avec des fenêtres étroites qui servaient à la fois de meurtrières pour les archers et de sources de lumière.
<br><br>
Au fil des siècles, la tour a subi des modifications et des ajouts de style chrétien, notamment la chapelle qui a été ajoutée au XVe siècle. Cependant, le style mauresque d'origine est encore visible dans les détails architecturaux de la tour, tels que les arcs en fer à cheval et les motifs géométriques.

                </p>
            </div>
        </div>
    </div>
    <?= include('../footer.inc.php');?>

</body>

</html>