<?php
$nav = "verleih";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sport Wedl - langlauf</title>
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
        <span>-></span>
        <span>Langlauf</span>
    </div>

    <div class="lg:container xl:max-w-screen-lg mx-auto p-6 pl-4">
        <h1 class="-p-6">Ski-Verleih Langlauf</h1>
    </div>

    <main>
        <div>
            <article class="gray-box">
                <div class="circle"><span>Klassisch komplett</span></div>
                <h3 class="font-semibold">Langlauf Klassisch - Komplettausrüstung</h3>
                <ul>
                    <li>Nowax Ski, Schuhe, Stöcke</li>
                    <li>Längere Mietdauer = günstiger Preis</li>
                </ul>
                <div class="">
                    <div>1 Tag</div>
                    <div>€ 13,00</div>
                </div>
                <div>
                    <div>2 Tage</div>
                    <div>€ 25,00</div>
                </div>
                <div>
                    <div>3 Tage</div>
                    <div>€ 37,00</div>
                </div>
                <div>
                    <div>4 Tage</div>
                    <div>€ 49,00</div>
                </div>
                <div>
                    <div>5 Tage</div>
                    <div>€ 60,00</div>
                </div>
                <div>
                    <div>6 Tage</div>
                    <div>€ 71,00</div>
                </div>
                <div>
                    <div>ab 7. Tag (pro Tag)</div>
                    <div>€ 9,00</div>
                </div>
            </article>
            <div class="flex p">
                <?php include('partials/svg/nordic.svg');?>
                <div>
                    <p>Jetzt reservieren! <br>
                        <a href="tel:+4352146444">+43 5214 6444</a> <br>
                        <a href="mailto:sporthuette@sport-wedl.com">sporthuette@sport-wedl.com</a>
                    </p>
                </div>
            </div>
        </div>

        <div>
            <article class="gray-box">
                <div class="circle"><span>Klassisch komplett</span></div>
                <h3 class="font-semibold">Langlauf Klassisch - Komplettausrüstung</h3>
                <ul>
                    <li>Nowax Ski, Schuhe, Stöcke</li>
                    <li>Längere Mietdauer = günstiger Preis</li>
                </ul>
                <div class="">
                    <div>1 Tag</div>
                    <div>€ 13,00</div>
                </div>
                <div>
                    <div>2 Tage</div>
                    <div>€ 25,00</div>
                </div>
                <div>
                    <div>3 Tage</div>
                    <div>€ 37,00</div>
                </div>
                <div>
                    <div>4 Tage</div>
                    <div>€ 49,00</div>
                </div>
                <div>
                    <div>5 Tage</div>
                    <div>€ 60,00</div>
                </div>
                <div>
                    <div>6 Tage</div>
                    <div>€ 71,00</div>
                </div>
                <div>
                    <div>ab 7. Tag (pro Tag)</div>
                    <div>€ 9,00</div>
                </div>
            </article>
            <div class="flex">
                <?php include('partials/svg/nordic.svg');?>
                <div>
                    <p>Jetzt reservieren! <br>
                        <a href="tel:+4352146444">+43 5214 6444</a> <br>
                        <a href="mailto:sporthuette@sport-wedl.com">sporthuette@sport-wedl.com</a>
                    </p>
                </div>
            </div>
        </div>

    </main>

    <?php include('partials/footer.php'); ?>

</body>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script src="js/app.js"></script>

</html>
