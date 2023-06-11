<?php

try {
        $cnx = new PDO('pgsql:host=sqletud.u-pem.fr;dbname=lucas.merlin_db',"lucas.merlin","Pomme123");  
        $cnx->exec("set search_path to cordoue;");
    }
    catch (PDOException $e) {
        echo "\nError: " . $e;
        header('location:../../index.php');
    }

?>