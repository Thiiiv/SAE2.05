<?php
if (isset($_SESSION['location'])) {
    $images = "../../images/";
    $liens = "../";
    $index = "../../../index.php";
    switch ($_SESSION['location']) {
        case "root":
            $images = "data/images/";
            $liens = "data/pages/";
            $index = "#";
            break;
        case "data/pages/":
            $images = "../images/";
            $liens = "";
            $index = "../../index.php";
            break;
    }
}
$jsonData = file_get_contents("$liens../json/fr.json");
$translations = json_decode($jsonData, true);
if (isset($_GET["langue"])) {
    $langue = $_GET["langue"];
    if ($langue == "en") {
        $jsonData = file_get_contents("$liens../json/ang.json");
        $translations = json_decode($jsonData, true);
    }
}
else {
    $langue = "fr";
}
?>