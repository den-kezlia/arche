<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/app.css" />
    <link href='http://fonts.googleapis.com/css?family=Poiret+One|Forum&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <title>Arche</title>
</head>
<body>
    <div class="page">
        <div class="logo">
            <a class="logo" href="#">logo</a>
        </div>

        <!--<div class="lang">
            <ul>
                <li><a href="#" class="ru">ru</a></li>
                <li><a href="#" class="en active">en</a></li>
            </ul>
        </div>-->

        <nav id="home">
            <div class="line"></div>
            <div class="main-cycle cycle"></div>
            <a href="#services" class="center-button services nav-cycle" data-article="services"><span>Услуги</span></a>
            <a href="#prices" class="center-button prices nav-cycle" data-article="prices"><span>Цены</span></a>
            <a href="#about" class="left-cycle cycle nav-cycle" data-article="about">О нас</a>
            <a href="#works" class="right-cycle cycle nav-cycle" data-article="works">Работы</a>
            <div class="inner-cycle cycle">
                <a href="#home" class="cycle-home" data-article="home">arche</a>
            </div>
        </nav>

        <div class="articles">
            <?php require_once('home.php') ?>
            <?php require_once('about.php') ?>
            <?php require_once('services.php') ?>
            <?php require_once('works.php') ?>
        </div>
    </div>

    <script src="js/jquery.js"></script>
    <script src="js/app.js"></script>
</body>
</html>