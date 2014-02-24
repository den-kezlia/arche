<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/app.css" />
    <link href='http://fonts.googleapis.com/css?family=Bubbler+One' rel='stylesheet' type='text/css'>
    <title>Arche</title>
</head>
<body>
    <div class="page">
        <div class="logo">
            <a class="logo" href="#">logo</a>
        </div>

        <div class="lang">
            <ul>
                <li><a href="#" class="ru">ru</a></li>
                <li><a href="#" class="en active">en</a></li>
            </ul>
        </div>

        <nav>
            <div class="line"></div>
            <div class="main-cycle cycle"></div>
            <a href="#1" class="center-button services"><span>services</span></a>
            <a href="#2" class="center-button prices"><span>prices</span></a>
            <a href="#3" class="left-cycle cycle">about</a>
            <a href="#4" class="right-cycle cycle">works</a>
            <div class="inner-cycle cycle">arche</div>
        </nav>

        <div class="articles">
            <?php require_once('home.php') ?>
            <?php require_once('about.php') ?>
            <?php require_once('services.php') ?>
        </div>
    </div>

    <script src="js/jquery.js"></script>
    <script src="js/app.js"></script>
</body>
</html>