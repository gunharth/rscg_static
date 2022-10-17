<?php
$nav = "verleih";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sport Wedl - Verleih</title>
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
    </div>

    <main>
        <article>
            <a class="bg-wedl-red flex flex-col" href="verleih-nordic.php">
                <div class="aspect-video">
                    <img class="object-fit aspect-video w-full" src="img/ll1.jpg" alt="">
                </div>
                <button class="text-white p-4">Verleih Nordic + Alpin</button>
            </a>
        </article>
        <article>
            <a class="bg-wedl-red flex flex-col" href="verleih-ebike.php">
            <div class="aspect-video">
                    <img class="object-fit aspect-video w-full" src="img/iStock-665372040.jpg" alt="">
                </div>
                <button class="text-white p-4">Verleih E-Bikes + Mountainbikes</button>
            </a>
        </article>
    </main>


    <?php include('partials/footer.php'); ?>

</body>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script src="js/app.js"></script>

</html>
