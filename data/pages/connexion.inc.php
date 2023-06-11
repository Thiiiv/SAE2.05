<?php

try {
        $cnx = new PDO('pgsql:host=sqletud.u-pem.fr;dbname=lucas.merlin_db',"lucas.merlin","Pomme123");  
    }
    catch (PDOException $e) {
        echo "\nError: " . $e;
    }

?>