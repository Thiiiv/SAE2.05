<!DOCTYPE html>
<html lang="fr">

<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- OSEF -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Evenements</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- JS -->
    <script src="horshtml/barre.js"></script>
    <script src="horshtml/menulateral.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="horshtml/Style.css" />
    <link rel="stylesheet" href="horshtml/accueil.css" />
    <link rel="shotcut icon" href="data/images/favicon.png">
    <style>
        h3 {
            font-size: xx-large;
        }

        h1 {
            margin-top: 15vh;
            text-align: center;
            margin-bottom: 5vh;
            font-size: 3rem;
        }

        .flexboxrow {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: row;
        }

        .flexboxcol {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .boite {
            margin: 5vw;
            border: 5px solid #e0a340;
            height: 35vh;
            width: 30vw;
            transition: 0.5s;
            display: block;
            overflow: hidden;
            position: relative;
            box-shadow: 5px 3px 9px 0px rgba(0,0,0,0.75);
-webkit-box-shadow: 5px 3px 9px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 5px 3px 9px 0px rgba(0,0,0,0.75);
border-radius: 10px 10px 10px 10px;
-webkit-border-radius: 10px 10px 10px 10px;
-moz-border-radius: 10px 10px 10px 10px;
        }

        .photoevent {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            border-radius: 5px;
        }

        .boite:hover {
            transform: scale(1.6);
            z-index: 2;
        }

        .photoevent:hover {
            transition: 0.5s;
            opacity: 0.2;
        }

        .boite .texteevent {
            position: absolute;
            top: 0;
            left: 0;
            display: flex;
            opacity: 0;
            justify-content: center;
            align-items: center;
            text-align: center;
            flex-direction: column;
            font-size: large;

        }

        .boite:hover .texteevent, .boite:active .texteevent {
            opacity: 1;
            cursor: pointer;
            user-select: none;
        }

        .boite:hover .photoevent, .boite:active .photoevent {
            opacity: 0.4;
        }

        .titreevent {
            font-size: xx-large;
            padding-top: 5vh;
        }

        .soustitreevent {
            font-size: larger;
            padding-bottom: 5vh;
        }

        @media screen and (max-width:900px) {
            .boite {
            height:50vh;
            width: auto;
            }

            .flexboxrow {
            flex-direction: column;
            }

            .boite:hover {
            transform: scale(1);
            z-index: 2;
        }

        }

    </style>
</head>

<body>
    <?php 
    include('header.html');
    ?>

    <h1>Évènements</h1>

    <div class="flexboxrow">
        <div class="flexboxcol">
            <div class="boite">
                <img class="photoevent" src="data/images/fetesaine.jpg">
                <div class="texteevent">
                    <h4 class="titreevent">Fête sainte</h4>
                    <h4 class="soustitreevent">Fête annuelle, en début Avril</h4>
                    <p>Spectacle coloré qui célèbre la culture et la religion de la ville. La célébration commence par
                        un cortège des principales figures religieuses de la ville, accompagnées par des
                        spectacles de musique et de danse. Le cortège se dirige ensuite vers la cathédrale où les gens
                        peuvent admirer les statues et objets religieux. A la fin,
                        des spectacles de musique et de danse s'ensuivent dans les rues de la ville.
                    </p>
                </div>
            </div>


            <div class="boite">
                <img class="photoevent" src="data/images/patios.jpg">
                <div class="texteevent">
                    <h4 class="titreevent">Fête des patios</h4>
                    <h4 class="soustitreevent">Fête annuelle, en mi-Mai</h4>
                    <p>Concours de décoration de patios, ou cours intérieures, qui ont lieu dans les quartiers
                        historiques de la ville. Les patios sont décorés avec des fleurs, des plantes, et des arcs en
                        treillis. créant des espaces colorés et accueillants. La fête des patios est considérée comme
                        l'un des événements les plus importants de l'année à Cordoue.
                    </p>
                </div>
            </div>


        </div>

        <div class="flexboxcol">
            <div class="boite">
                <img class="photoevent" src="data/images/noel.jpg">
                <div class="texteevent">
                    <h4 class="titreevent">Noël</h4>
                    <h4 class="soustitreevent">Fête annuelle, en fin Décembre</h4>
                    <p>Noël à Cordoue est célébré principalement comme un événement religieux et familial. Les gens se
                        réunissent généralement avec leur famille et leurs amis pour célébrer la naissance de Jésus. Les
                        rues de Cordoue sont décorées avec des lumières et des décorations, les marchés de Noël sont
                        organisés dans la ville, où les visiteurs peuvent acheter des cadeaux, des décorations et des
                        spécialités locales.</p>
                    </p>
                </div>
            </div>

            <div class="boite">
                <img class="photoevent" src="data/images/cruces.jpg">
                <div class="texteevent">
                    <h4 class="titreevent">Croix de Mai</h4>
                    <h4 class="soustitreevent">Fête annuelle, en fin Avril</h4>
                    <p>Cette fête consiste à installer dans les rues et sur les places de la ville, des croix faites de
                        fleurs. Ces créations participent, en outre, à un concours organisé par la municipalité. Il
                        s'agit d'une ancienne tradition religieuse. Ce sont les associations de quartier qui sont chargés
                        de faire de Cordoue un tableau de couleurs et de fête. Les
                        croix sont exposées toute la journée, et le soir l'ambiance est assurée par des spectacles de
                        musique et de danse
                    </p>
                </div>
            </div>
        </div>
    </div>
    <?php 
    include('footer.html');
    ?>
    
</body>

</html>