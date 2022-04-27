<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Antonio:wght@400;700&family=Marmelad&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <title> <?php echo $title; ?> </title>

</head>
<body>



<header class="header">
    <div class="container">
        <div class="header-top">

            <a href="/LosMedical/" class="header-logo">
                <img  src="images/logo.png" alt="">
                <span class="header-logo-text">LosMedical</span>
            </a>


            <div class="header-tel">
                <a class="header-tel-icon" href="tel:+380982284569"><i class="fa-solid fa-phone"></i></a>
                <span class="header-tel-text">+38 098 228 45 69</span>
            </div>

            <?php
            $url = $_SERVER['REQUEST_URI'];
            $url = explode('?', $url);
            $url = $url[0];
            $QS = http_build_query(array_merge($_GET, ["lang"=>"ru"]));
            $pathLang = $url.'?'.$QS;
            ?>

            <a href="<?php echo $pathLang;?>" class="header-lang">
                <img src="images/language.png" alt="">
                <div class="header-lang-text">
                    ukraine
                </div>
            </a>

            <div class="burger-menu"><i class="fa-solid fa-bars"></i></div>
            <div class="cross"><i class="fa-solid fa-xmark"></i></div>

        </div>

        <nav class="nav">
            <a href="/LosMedical/" class="nav-link">Головна</a>
            <a href="/LosMedical/?page=doctors" class="nav-link">Наші лікарі</a>
            <a href="/LosMedical/?page=contacts" class="nav-link">Контакти</a>
        </nav>

    </div>  <!--/.container-->
</header> <!--/.header-->

