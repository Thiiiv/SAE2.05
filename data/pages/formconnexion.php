<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- OSEF -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Monument</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- JS -->
    <script src="../script/barre.js"></script>
    <script src="../script/menulateral.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="../style/style.css" />
    <link rel="stylesheet" href="../style/.css" /> 
    <link rel="shotcut icon" href="../images/favicon.png">
 

    <style>
        .form {
            display : flex;
            justify-content: space-evenly;
            align-items: center;
            flex-direction : column;
            padding : 10vh;
            text-align : center;
        }

        .form form div {
            padding : 2vh 0;
            font-size: 1.5rem;
        }
        .form form input:not(#submit) {
            border-radius : 50px;
            width: 20vw;
            height : 4vh;
            border: none;
        }
        .form form #submit {
            border-radius : 50px;
            font-size: 1rem;
            padding: 1vh 1vw;
            border: none;
            box-shadow: 0 2px 5px black;
            background-color: #f7af3e; 
            font-weight: 550;
            margin: 5vh 0;

        }


    </style>
</head>

<body>
    <!-- Barre horizontale -->
    <?php 
    include('headerPages.inc.html');
    ?>
     <div class='form'>
        <form class="form" style='width:50vw;' action="connexion.php" method="POST">
            <div>Adresse mail <br><input type="text" name="email" /> <br />
            </div>
            <div>
                Mot de passe <br><input type="password" name="motdepasse" /><br />
            </div>
            <input type="submit" name="submit" value="Se connecter" id="submit"/>
            </p>
        </form>
    </div>

    <?php 
    include('footerPages.inc.html');
    ?>
    
</body>

</html>

