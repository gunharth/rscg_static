<?php
$nav = "verleih";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sport Wedl - Verleih Nordic + Alpin</title>
    <meta name="description" content="">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicons/favicon-16x16.png">
    <link rel="manifest" href="/favicons/site.webmanifest">
    <link rel="shortcut icon" href="/favicons/favicon.ico">
    <meta name="msapplication-TileColor" content="#eeeeee">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/app.css">

</head>

<body class="h-screen bg-wedl-white">

    <?php include('partials/nav.php'); ?>

    <div class="w-full h-1/3 md:h-2/3 xl:h-1/2 bg-no-repeat bg-cover bg-top" style="background-image: url(img/langlauf.jpg)"></div>

    <div class="breadcrumb">
        <a href="/">Home</a>
        <span>-></span>
        <span>Verleih</span>
        <span>-></span>
        <span>Nordic + Alpin</span>
    </div>

    <main>
        <article class="">
                <h2>Verleih Nordic</h2>
                <a href="langlauf.php">
                    <button class="w-full p-4 my-2 bg-wedl-gray text-left text-sm font-semibold"> -> Klassisch und Skating - Erwachsene</button>
                </a>
                <a href="">
                    <button class="w-full p-4 my-2 bg-wedl-gray text-left text-sm font-semibold"> -> Klassisch und Skating - Kinder</button>
                </a>
            </article>
            <article class="">
                <h2>Verleih Alpin</h2>
                <a href="">
                    <button class="w-full p-4 my-2 bg-wedl-gray text-left text-sm font-semibold"> -> Alpin und Touren - Erwachsene</button>
                </a>
                <a href="">
                    <button class="w-full p-4 my-2 bg-wedl-gray text-left text-sm font-semibold"> -> Alpin - Kinder</button>
                </a>
                <a href="">
                    <button class="w-full p-4 my-2 bg-wedl-gray text-left text-sm font-semibold"> -> Snowboard - Erwachsene</button>
                </a>
            </article>
            <article class="">
                <h2>Verleih Wintersport</h2>
                <a href="">
                    <button class="w-full p-4 my-2 bg-wedl-gray text-left text-sm font-semibold"> -> Funski, Schneeshuhe, Rodel</button>
                </a>
            </article>

    </main>


    <?php include('partials/footer.php'); ?>

</body>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script src="js/app.js"></script>

</html>
