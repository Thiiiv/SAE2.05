<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="../../script/barre.js"></script>
    <link rel="stylesheet" href="../../style/style.css" />
    <link rel="stylesheet" href="../../style/monuments.css" />
    <link rel="shotcut icon" href="../../images/favicon.png">
    <title>Alcazar</title>
</head>

<body>
    <header>
        <nav>
            <!-- LOGO -->
            <div class="logo">
                <a href="../../../index.php">
                    <img class="logotype" src="../../images/logo.png" alt="logo" />
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
                    <li><a href="../histoire.php"><button>Histoires</button></a></li>
                    <li><a href="../monuments.php"><button>Monuments</button></a></li>
                    <li><a href="../evenements.php"><button>Informations Pratiques</button></a>
                        <ul>
                            <li><a href="../evenements.php"><button>Evenements</button></a>
                            </li>
                            <li><a href="../activite.php"><button>Activités</button></a>
                            </li>
                            <li><a href="../voyages.php"><button>Voyages</button></a>
                            </li>
                            <li><a href="../carte.php"><button>Carte</button></a></li>
                        </ul>
                    </li>
                    <li><button>Langues</button>
                        <ul>
                            <li><a href="../anglais/ANGAccueil.html"><button><img src="../../images/Eng.webp" width="40"></button></a>
                            </li>
                            <li><a href="../../../index.php"><button><img src="../../images/FR.png" width="40"></button></a></li>
                        </ul>
                    </li>
                    <li><a href="#"><button><img src="../../images/recherche.png" width="30"></button></a></li>
                </ul>
            </div>
            <!-- Menu -->
        </nav>
        <div id="barre"></div>
    </header>



    <div class="flexboxcolonne">
        <div id="fond" style="background-image: url('../../images/monuments/alcazarfond.jpg');">
            <a id="boutonretour" href="../monuments.php">
                <p>◄ Monuments</p>
            </a>
            <h1>Alcazar</h1>
            <a style="margin-top: 75vh;" href="#content"><img id="flechebas" class="shake-vertical" src="../../images/flecheversbas.png"></a>
        </div>

        <div id="content" class="partie">
            <h3>Histoire</h3>
            <img class="transition reversetransition" src="../../images/sous_titre.png">

            <div class="contenu droite">
                <p>
                La tour de Calahorra est un vestige de l'histoire de Cordoue, en Espagne. Elle a été construite par les Maures au XIIe siècle pour défendre la ville contre les attaques ennemies. Au fil des siècles, la tour a subi des modifications et des rénovations, notamment sous le règne des rois chrétiens, qui ont ajouté des éléments décoratifs.
                    <br><br>
                    Au XXe siècle, la tour de Calahorra a été restaurée et transformée en musée de la Tolérance. Le musée explore l'histoire de Cordoue en tant que ville multiculturelle et la coexistence pacifique entre les différentes religions qui ont habité la ville. Aujourd'hui, la tour de Calahorra est un site touristique populaire à Cordoue, offrant une vue panoramique sur la ville et un aperçu fascinant de l'histoire de l'Espagne médiévale.
                </p>
                <img src="../../images/monuments/alcazarhistoire.jpg">
            </div>

        </div>

        <div class="partie">
            <h3>Architecture</h3>
            <img class="transition" src="../../images/sous_titre.png">
            <div class="contenu gauche">
                <img src="../../images/monuments/alcazararchitecture.jpg">
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
        <!-- Bouton retour en haut -->
        <div class="retour">
        <a href="#" class="haut"></a>
    </div>
    <!-- Footer -->
    <div class="footer">
        <div class="first-part">
            <div class="lien-utile">
                <a href="#title-utile" id="title-utile">Liens utiles</a>
                <br>
                <a href="https://twitter.com/CordoueWeb"><img src="../../images/twitter.webp" alt="Twitter" id="twitter"></a>
            </div>
            <div class="ecole">
                <a href="#title-ecole" id="title-ecole">Notre école</a>
                <br>
                <a href="https://iut.univ-gustave-eiffel.fr/">IUT de Marne-la-Vallée</a>
            </div>
            <div class="mention">
                <a href="#title-mention" id="title-mention">Mentions légales</a>
                <br>
                <p>© 2022/2023</p>
            </div>
        </div>
        <div class="second-part">
            <div class="partenaire">
                <img src="../../images/Univ.png" />
                <img src="../../images/unsplash.png" />
                <img src="../../images/pexels.png" />
                <img src="../../images/unesco_vrai.png" />
            </div>
        </div>
    </div>
</body>

</html>