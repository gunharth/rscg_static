<?php
$nav = "home";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sport Wedl</title>
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

    <div class="w-full h-4/5 xl:h-1/2 bg-no-repeat bg-cover bg-top" style="background-image: url(img/langlauf.jpg)"></div>

    <main>
        <article>
            <h2>Seit 40 Jahren Ihr kompetenter Ansprechpartner für Sportausrüstung in der Leutasch</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum eligendi veritatis corrupti rerum
                tempora quam dolorum amet, autem nemo cumque unde quibusdam iste saepe dolorem nobis minus. Officia,
                ex suscipit?</p>
        </article>
        <article>
            <h2>Unsere Öffnungszeiten</h2>
            <p>
                Montag bis Freitag <br>
                09.00 - 12.00 Uhr <br>
                14.30 - 18.00 <br> <br>

                Samstag <br>
                09.00 - 12.00 Uhr <br><br>
                Sonntag <br>geschlossen
            </p>
        </article>
        <article>
            <h2>Kontakt</h2>
            <p>Sport Wedl GmbH <br>
            WEidach 322g <br>
            60105 Leutasch - Österreich <br><br>
            Tel: <a href="tel:+435146444">+43 514 6444</a> <br>
            Fax: +43 514 6444

        </p>
        </article>
    </main>

    <?php include('partials/footer.php'); ?>

</body>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script src="js/app.js"></script>

</html>
