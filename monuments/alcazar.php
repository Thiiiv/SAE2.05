<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="../horshtml/barre.js"></script>
    <link rel="stylesheet" href="../horshtml/Style.css" />
    <link rel="stylesheet" href="../horshtml/monuments.css" />
    <link rel="shotcut icon" href="../data/images/favicon.png">
    <title>Monuments</title>
</head>

<body>
    <header>
        <nav>
            <!-- LOGO -->
            <div class="logo">
                <a href="../Accueil.html">
                    <img class="logotype" src="../data/images/logo.png" alt="logo" />
                </a>
            </div>
            <!-- Menu responsive -->
            <div class="container nav-container">
                <input class="checkbox" type="checkbox" name="" id="check" />
                <div class="hamburger-lines">
                    <span class="line line1"></span>
                    <span class="line line2"></span>
                    <span class="line line3"></span>
                </div>
                <ul class="menu-items">
                    <li><a href="histoire.html"><button>Histoire</button></a></li>
                    <li><a href="monuments.html"><button>Monuments</button></a></li>
                    <li><a href="evenements.html"><button>Informations Pratiques</button></a>
                        <ul>
                            <li><a href="evenements.html"><button>Evenements</button></a>
                            </li>
                            <li><a href="Activite.html"><button>Activités</button></a>
                            </li>
                            <li><a href="Voyages.html"><button>Voyages</button></a>
                            </li>
                            <li><a href="carte.html"><button>Carte</button></a></li>
                        </ul>
                    </li>
                    <li><button>Langues</button>
                        <ul>
                            <li><a href="ANGAccueil.html"><button><img src="../data/images/Eng.webp" width="40"></button></a>
                            </li>
                            <li><a href="../Accueil.html"><button><img src="../data/images/FR.png" width="40"></button></a></li>
                        </ul>
                    </li>
                    <li><a href="#"><button><img src="../data/images/recherche.png" width="30"></button></a></li>
                </ul>
            </div>
            <!-- Menu -->
        </nav>
        <div id="barre"></div>
    </header>



    <div class="flexboxcolonne">
        <div id="fond" style="background-image: url(\'../data/images/monuments/alcazarfond.jpg\');">
            <a id="boutonretour" href="../monuments.php">
                <p>◄ Monuments</p>
            </a>
            <h1>Alcazar</h1>
            <a style="margin-top: 75vh;" href="#content"><img id="flechebas" class="shake-vertical" src="../data/images/flecheversbas.png"></a>
        </div>

        <div id="content" class="partie">
            <h3>Histoire</h3>
            <img class="transition reversetransition" src="../data/images/sous_titre.png">

            <div class="contenu droite">
                <p>
                    L'Alcazar de Cordoue, également connu sous le nom de Palais des Réformes, est un palais situé à
                    Cordoue, en Espagne. L'histoire du site remonte à l'époque romaine, lorsque la région était connue
                    sous le nom de "Corduba". Les Maures ont conquis la ville en 711 et ont construit un premier palais
                    sur le site. Au fil du temps, le palais a été agrandi et rénové par les différents gouverneurs qui
                    ont occupé la ville. Cependant, le palais a subi de nombreux dégâts au fil des siècles en raison des
                    guerres et des tremblements de terre.
                    <br><br>
                    Au 14ème siècle, le palais a été acquis par le roi Alphonse XI de Castille, qui a ordonné la
                    construction d'une forteresse sur le site. Plus tard, les Rois Catholiques, Isabelle et Ferdinand,
                    ont visité l'Alcazar et ont ordonné sa rénovation. Au fil du temps, le palais est devenu le siège du
                    tribunal de l'Inquisition espagnole et a également servi de caserne pour les troupes. Aujourd'hui,
                    l'Alcazar de Cordoue est un site touristique populaire et a été désigné site du patrimoine mondial
                    de l'UNESCO en 1984.
                </p>
                <img src="../data/images/monunments/alcazarhistoire.jpg">
            </div>

        </div>

        <div class="partie">
            <h3>Architecture</h3>
            <img class="transition" src="../data/images/sous_titre.png">
            <div class="contenu gauche">
                <img src="../data/images/monunments/alcazararchitecture.jpg">
                <p>L'architecture de l'Alcazar de Cordoue est un mélange de styles mauresque et chrétien. Le palais
                    d'origine construit par les Maures était un exemple typique de l'architecture islamique, avec des
                    cours intérieures entourées de portiques, des fontaines et des jardins luxuriants. Cependant, après
                    la reconquête de Cordoue par les chrétiens, le palais a subi des modifications importantes,
                    notamment la construction d'une tour et la transformation de certaines parties du palais en une
                    forteresse militaire. Plus tard, les Rois Catholiques ont ajouté des éléments de style Renaissance à
                    l'architecture, tels que des voûtes en berceau et des arcs en plein cintre.
                    <br><br>
                    Le palais dispose également d'un certain nombre de salles somptueuses, notamment la Sala de los
                    Mosaicos, qui est décorée de magnifiques mosaïques, la Sala de los Reyes, qui abrite des statues des
                    rois wisigoths et une grande cour centrale, la Cour des Orangers, qui est ornée de fontaines et
                    d'orangers. Les jardins du palais sont également remarquables, avec des arbres fruitiers, des
                    fontaines et des étangs. Dans l'ensemble, l'architecture de l'Alcazar de Cordoue est un témoignage
                    de l'histoire riche et complexe de la ville, ainsi que de l'influence des différents peuples qui ont
                    occupé la région au fil des siècles.

                </p>
            </div>
        </div>
    </div>
    <?php 
    include('../footer.html');
    ?>
</body>

</html>