<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="../../script/barre.js"></script>
    <link rel="stylesheet" href="../../style/style.css" />
    <link rel="stylesheet" href="../../style/monuments.css" />
    <link rel="shotcut icon" href="../../images/favicon.png">
    <title>Temple Romain</title>
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
                    <li><a href="../histoire.php"><button>Histoire</button></a></li>
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
        <div id="fond" style="background-image: url('../../images/monuments/templeromainfond.jpg');">>
            <a id="boutonretour" href="../monuments.php">
                <p>◄ Monuments</p>
            </a>
            <h1>Temple Romain</h1>
            <a style="margin-top: 75vh;" href="#content"><img id="flechebas" class="shake-vertical"
                    src="../../images/flecheversbas.png"></a>
        </div>

        <div id="content" class="partie">
            <h3>Histoire</h3>
            <img class="transition reversetransition" src="../../images/sous_titre.png">

            <div class="contenu droite">
                <p>
                Le temple romain de Cordoue est l'un des plus célèbres monuments de la ville, situé dans le centre historique de Cordoue, en Espagne. Il a été construit au 1er siècle après J.-C. et était dédié aux divinités impériales romaines. Le temple était construit sur un podium élevé, accessible par un escalier monumental, et était entouré de colonnes corinthiennes.
<br><br>
Au fil des siècles, le temple a subi de nombreuses modifications et utilisations différentes, servant notamment de forteresse, de palais, de mosquée et même de prison. Il a été restauré au 18ème siècle et est maintenant un site touristique populaire, offrant une vue imprenable sur la ville depuis son emplacement sur la colline. Le temple romain de Cordoue est un témoignage fascinant de l'histoire de la ville, reflétant les différentes cultures et civilisations qui ont façonné cet endroit au fil des siècles.
                </p>
                <img src="../../images/monuments/templeromainhistoire.jpg">
            </div>

        </div>

        <div class="partie">
            <h3>Architecture</h3>
            <img class="transition" src="../../images/sous_titre.png">
            <div class="contenu gauche">
                <img src="../../images/monuments/templeromainarchitecture.jpg">
                <p>
                L'architecture du temple romain de Cordoue reflète le style typique de l'époque impériale romaine, avec un podium rectangulaire élevé et des colonnes corinthiennes richement décorées. L'entrée principale était orientée vers l'est, face au lever du soleil, et l'intérieur comportait une cella abritant la statue des divinités romaines.
<br><br>
Au fil des siècles, le temple a subi des modifications pour s'adapter à différents usages, mais son architecture initiale est toujours visible aujourd'hui. C'est un exemple fascinant de l'adaptation des bâtiments à travers l'histoire et de l'influence de l'architecture romaine dans la région.
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