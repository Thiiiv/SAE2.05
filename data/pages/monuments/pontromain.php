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
    <title>Pont Romain</title>
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
        <div id="fond" style="background-image: url('../../images/monuments/pontromainfond.jpg');">>
            <a id="boutonretour" href="../monuments.php">
                <p>◄ Monuments</p>
            </a>
            <h1>Pont Romain</h1>
            <a style="margin-top: 75vh;" href="#content"><img id="flechebas" class="shake-vertical" src="../../images/flecheversbas.png"></a>
        </div>

        <div id="content" class="partie">
            <h3>Histoire</h3>
            <img class="transition reversetransition" src="../../images/sous_titre.png">

            <div class="contenu droite">
                <p>Le Pont Romain de Cordoue a été construit au 1er siècle avant J.-C. pour traverser le fleuve Guadalquivir. Au fil des siècles, il a subi de nombreuses transformations et restaurations, notamment sous le règne des califes omeyyades. Aujourd'hui, il est devenu un symbole de l'histoire de Cordoue et de la période romaine de l'Andalousie.
                    <br><br>
                    Le Pont Romain de Cordoue a été le témoin de nombreux événements historiques, notamment des batailles sanglantes entre les Arabes et les chrétiens au Moyen Âge et de l'utilisation par les troupes napoléoniennes pendant la guerre d'indépendance espagnole. Malgré les ravages du temps, le pont a été restauré à plusieurs reprises et reste l'un des monuments les plus visités de Cordoue.
                </p>
                <img src="../../images/monuments/pontromainhistoire.jpg">
            </div>

        </div>

        <div class="partie">
            <h3>Architecture</h3>
            <img class="transition" src="../../images/sous_titre.png">
            <div class="contenu gauche">
                <img src="../../images/monuments/pontromainarchitecture.jpg">
                <p>
                Le Pont Romain de Cordoue est construit dans un style typique de l'architecture romaine. Il est composé de 16 arches, en forme de fer à cheval, qui reposent sur des piles renforcées par des contreforts triangulaires. Le pont mesure 247 mètres de long et 9 mètres de large, et il est considéré comme un chef-d'œuvre d'ingénierie.
<br><br>
Au fil des siècles, le Pont Romain de Cordoue a été restauré à plusieurs reprises, notamment sous le règne des califes omeyyades. Ils ont ajouté des arcs en briques et en pierre pour renforcer la structure du pont et pour ajouter une touche esthétique. Aujourd'hui, le pont est un symbole emblématique de l'histoire de Cordoue, et il est souvent visité par les touristes qui apprécient la beauté de son architecture et sa signification historique.
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