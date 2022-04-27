<?php
require("pages/database.php");


$pathHeader = "pages/header.php";
$pathFooter = "pages/footer.php";
$pathContacts = "pages/contacts.php";
$pathLanding = "pages/landing.php";
$pathDoctors = "pages/doctors.php";

$titleContacts = "Контакти | LosMedical";
$titleDoctors = "Наші лікарі | LosMedical";

if(isset($_GET['lang']) && $_GET['lang'] === 'ru'){
    $pathHeader = 'ru/' . $pathHeader;
    $pathFooter = 'ru/' . $pathFooter;
    $pathContacts = 'ru/' . $pathContacts;
    $pathLanding = 'ru/' . $pathLanding;
    $pathDoctors = 'ru/' . $pathDoctors;

    $titleContacts = 'Контакты' . substr($titleContacts, -12);
    $titleDoctors = 'Наши врачи' . substr($titleContacts, -12);
}

if(isset($_GET['page'])) {
    switch ($_GET['page']) {

        case "doctors":
            $title = $titleDoctors;
            $pathPage = $pathDoctors;
            break;

        case "contacts":
            $title = $titleContacts;
            $pathPage = $pathContacts;
            break;

        default:
            $title = "LosMedical";
            $pathPage = $pathLanding;
            break;
    }
}else{
    $title = "LosMedical";
    $pathPage = $pathLanding;
}


require ($pathHeader);
require ($pathPage);
require ($pathFooter);
