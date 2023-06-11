<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- OSEF -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Cordoue</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- JS -->
    <script src="horshtml/barre.js"></script>
    <script src="horshtml/menulateral.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="../../style/style.css" />
    <link rel="stylesheet" href="../../style/accueil.css" />
    <link rel="shotcut icon" href="../../images/favicon.png">
    <style>
        .arbre {
            width: 1600px;
            height: 1600px ;
            margin: auto;
            padding: auto;
            position: relative;
        }
        img {
            max-width: 100%;
            max-height: 100%;
        }
        .bouton {
            width: 150px;
            height: 150px;  
            position:absolute;
            border: 5px solid #f6760d;
            border-radius: 100%;
            transition: 0.5s;
            
        }
        .un {
            top: 475px;
            left: 350px;
        }
        .quatre  {
            top: 475px;
            right:350px;
        }
        .deux {
            top: 275px;
            left: 575px;
        }
        .trois {
            top: 275px;
            right:575px;
        }

        .bouton:hover {
            border: 15px solid #f6760d;
            border-radius: 100%;
            transition: 0.5s;
            
        }

        .bouton:active {
            background-color: rgb(17, 255, 0);
            transition: 0s;
        }

        .test {
            border-radius: 100%;
        }
    </style>
</head>

<body>
    
    <?php 
        include('data/pages/headerIndex.inc.html');
    ?>
    <section class="page-content">
        <section class="content">
            <h3>Histoire</h3>
        </section>
        <div class="arbre">
            <img src="../../images/arbre-vie.png">
            <div class="bouton un">
                <a href="../../../index.php"><img class="test" src="romaine.png" alt=""></a>
            </div>
            <div class="bouton deux">
                <img class="test" src="wisigoth.png" alt="">
            </div>
            <div class="bouton trois">
                <img class="test" src="musulman.png" alt="">
            </div>
            <div class="bouton quatre">
                <img class="test" src="espagne2.png" alt="">
            </div>
        </div>
    </section>
    <?php 
        include('data/pages/footerIndex.inc.html');
    ?>
</body>
</html>