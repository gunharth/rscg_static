<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riddley Scott Creative Group - RSCG</title>
    <meta name="description" content="">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicons/favicon-16x16.png">
    <link rel="manifest" href="/favicons/site.webmanifest">
    <link rel="mask-icon" href="/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="/favicons/favicon.ico">
    <meta name="msapplication-TileColor" content="#eeeeee">
    <meta name="msapplication-config" content="/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="css/app.css">
</head>

<body>
    <?php
    $nav = "";
    include('partials/nav.php'); ?>
    <!-- Fixed navbar -->
    <!--     <nav class="fixed w-full h-[47px] bg-rscg-dark text-white text-sm px-8">
        <ul class="h-full flex items-center">
            <li><a href="https://ridleyscott.com/about">Home</a></li>
            <li><a href="https://ridleyscott.com/companies" class="active">Our Principles</a></li>
            <li><a href="https://ridleyscott.com/news">Our Story</a></li>
            <li><a href="https://ridleyscott.com/contact">Contact</a></li>
        </ul>
    </nav> -->



    <div id="statement_logo">
        <a href="/">
            <img src="/assets/logos/RSCG_logo.png" alt="RSCG">
        </a>
    </div>


    <div class="container-fluid">
        <div class="container director-content-spacer">
            <div class="row">

                <div class="col-sm-12 intro-text noPadding flex">

                    <div class="col-sm-6">
                        <h1>
                            Companies
                        </h1>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" id="isCompanies">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-xl-10 col-xl-offset-1">
                <div class="col-xs-6 col-sm-2 col-sm-offset-1 text-center">
                    <div id="rsa" class="comp-logo">
                        <a class="active" href="https://rsafilms.com">
                        </a>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-2 text-center">
                    <div id="blackdog" class="comp-logo">
                        <a href="https://blackdogfilms.com">
                        </a>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-2 text-center">
                    <div id="scottfree" class="comp-logo">
                        <a href="https://scottfree.com">
                        </a>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-2 text-center">
                    <div id="darling" class="comp-logo">
                        <a href="https://darlingfilms.co.uk">
                        </a>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-2 text-center">
                    <div id="rsaphoto" class="comp-logo">
                        <a href="https://rsaphotographic.com">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <hr style="margin-bottom: 30px; margin-top: 30px">

        <div id="pagecontent" class="container-fluid content-spacing">

            <div id="rsa-container" class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 text-center">
                        <p>RSA Films is a global commercial production company founded by directors Ridley and Tony Scott.</p>
                        <p>&nbsp;</p>
                        <p>Renowned for creative excellence and production expertise, for over 50 years RSA Films has produced innovative, award-winning campaigns for agencies and brands worldwide.</p>
                        <p>&nbsp;</p>
                        <p>Based in London, Amsterdam, Los Angeles, New York, Hong Kong and Greater China, and with a roster of leading global creative and production talent, RSA Films promotes diversity, purpose, and agility in all forms of content.</p>
                    </div>
                </div>
            </div>

            <div id="blackdog-container" class="container" style="display: none">
                <div class="row">
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 text-center">
                        <p>Black Dog Films is a creative production company specialising in innovative filmmaking from new creative talent.</p>
                        <p>&nbsp;</p>
                        <p>From music videos and live visuals, to features, documentaries, and branded creative projects, Black Dog creates work that changes perceptions and celebrates differences.</p>
                    </div>
                </div>
            </div>

            <div id="scottfree-container" class="container" style="display: none">
                <div class="row">
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 text-center">
                        <p>Scott Free Productions, is the film and television production vehicle of Ridley Scott. The company has earned over 100 Emmy nominations for its television projects and over 60 Academy Award nominations.</p>
                        <p>&nbsp;</p>
                        <p>The company is also responsible for some of the most successful films ever made ??? including TOP GUN, GLADIATOR, BLADE RUNNER, ALIEN, AMERICAN GANGSTER, THELMA AND LOUISE, BLACK HAWK DOWN, TRUE ROMANCE, SPY GAME, MAN ON FIRE, and DAYS OF THUNDER.</p>
                    </div>
                </div>
            </div>

            <div id="darling-container" class="container" style="display: none">
                <div class="row">
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 text-center">
                        <p>Established in 2018, Darling is a production company specialising in commercial production. Darling Films brings an exciting directorial roster ranging from noted young guns to established BAFTA and Cannes Lions winners.</p>
                        <p>&nbsp;</p>
                        <p>Combining exceptional directing talent with top-notch production skills, Darling Films pride themselves on delivering high quality films and winning repeat business. </p>
                    </div>
                </div>
            </div>

            <div id="rsaphoto-container" class="container" style="display: none">
                <div class="row">
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 text-center">
                        <p>RSA Films Photo &amp; Art represents and produces some of the world's most exciting photographers, illustrators, and creatives in the industry today.</p>
                        <p>&nbsp;</p>
                        <p>Established in 2013, the roster was formed to represent directors with accomplished photographic portfolios and for up-and-coming, as well as established photographers interested in film making.</p>
                        <p>&nbsp;</p>
                        <p>Commercial and creative commissions calling for any combination of visual talent have led to the development of an outstanding roster of distinctive image makers working with clients at every level worldwide.</p>
                        <p>&nbsp;</p>
                        <p>Clients include:</p>
                        <p>BBC, Cathay Pacific, David Morris Jewellers, Farfetch, Hugo Boss, Leon, Louis Vuitton, Morrisons, Net-A-Porter, M&amp;S, Oakley, Pantene, Peninsula Hotels, Stella McCartney, TU, Vans and Vodafone</p>
                        <p>&nbsp;</p>
                        <p>Magazine Commissions:</p>
                        <p>Elle, Dazed, Harper???s Bazaar, Hunger, i-D, LOVE, Mission, Numero, Sunday Times, Twin, Vogue and 1843 magazines</p>
                    </div>
                </div>
            </div>


        </div>

    </div>


    <?php include('partials/footer.php'); ?>

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js "></script>
    <script src="/js/bootstrap.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->

    <script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js "></script>
    <script src="//unpkg.com/isotope-layout@3.0.6/dist/isotope.pkgd.js"></script>
    <script src="//unpkg.com/isotope-packery@2/packery-mode.pkgd.js"></script>
    <script src="//npmcdn.com/imagesloaded@4/imagesloaded.pkgd.js"></script>
    <script src="/js/jquery.cycle2.min.js"></script>
    <script src="/js/jquery.cycle2.swipe.min.js"></script>
    <script src="/js/ios6fix.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.min.js"></script>
    <script src="/js/init.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/lazysizes/5.1.0/lazysizes.min.js"></script>
    <script src="https://player.vimeo.com/api/player.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fitvids/1.2.0/jquery.fitvids.min.js" integrity="sha256-nA828blBCdUSSdI8jpciOZsf72IGt1eBcdx1ioEfa8o=" crossorigin="anonymous"></script>
    <script>
        (function() {
            "use strict";

            var isMobile = {
                Android: function() {
                    return navigator.userAgent.match(/Android/i);
                },
                BlackBerry: function() {
                    return navigator.userAgent.match(/BlackBerry/i);
                },
                iOS: function() {
                    return navigator.userAgent.match(/iPhone|iPad|iPod/i);
                },
                Opera: function() {
                    return navigator.userAgent.match(/Opera Mini/i);
                },
                Windows: function() {
                    return navigator.userAgent.match(/IEMobile/i);
                },
                any: function() {
                    return (
                        isMobile.Android() ||
                        isMobile.BlackBerry() ||
                        isMobile.iOS() ||
                        isMobile.Opera() ||
                        isMobile.Windows()
                    );
                }
            };

            var mobileMenuOutsideClick = function() {
                $(document).click(function(e) {
                    var container = $(".js-fh5co-nav-toggle");
                    if (
                        !container.is(e.target) &&
                        container.has(e.target).length === 0
                    ) {
                        if ($("body").hasClass("overflow offcanvas")) {
                            $("body").removeClass("overflow offcanvas");
                            $(".js-fh5co-nav-toggle").removeClass("active");
                            $("#nav-icon").removeClass("open");
                        }
                        if ($("body").hasClass("overflow offcanvas-right")) {
                            $("body").removeClass("overflow offcanvas-right");
                            $(".js-fh5co-nav-toggle").removeClass("active");
                            $("#nav-icon-right").removeClass("open");
                        }
                    }
                });
            };

            var offcanvasMenu = function() {
                $(window).resize(function() {
                    if ($("body").hasClass("overflow offcanvas")) {
                        $("body").removeClass("overflow offcanvas");
                        $(".js-fh5co-nav-toggle").removeClass("active");
                        $("#nav-icon").removeClass("open");
                    }
                    if ($("body").hasClass("overflow offcanvas-right")) {
                        $("body").removeClass("overflow offcanvas-right");
                        $(".js-fh5co-nav-toggle").removeClass("active");
                        $("#nav-icon-right").removeClass("open");
                    }
                });
            };

            var burgerMenu = function() {
                $("body").on("click", "#nav-icon .js-fh5co-nav-toggle", function(e) {
                    e.preventDefault();
                    var $this = $(this);

                    if ($("body").hasClass("overflow offcanvas")) {
                        $("body").removeClass("overflow offcanvas");
                        $("#nav-icon").removeClass("open");
                    } else {
                        $("body").addClass("overflow offcanvas");
                        $("#nav-icon").addClass("open");
                    }
                    $this.toggleClass("active");
                });
            };

            var burgerMenuRight = function() {
                $("body").on(
                    "click",
                    "#nav-icon-right .js-fh5co-nav-toggle",
                    function(e) {
                        e.preventDefault();
                        var $this = $(this);

                        if ($("body").hasClass("overflow offcanvas-right")) {
                            $("body").removeClass("overflow offcanvas-right");
                            $("#nav-icon-right").removeClass("open");
                        } else {
                            $("body").addClass("overflow offcanvas-right");
                            $("#nav-icon-right").addClass("open");
                        }
                        $this.toggleClass("active");
                    }
                );
            };

            // Loading page
            var loaderPage = function() {
                $("#loader").fadeOut();
            };

            $(function() {
                mobileMenuOutsideClick();
                //mobileArtistMenuOutsideClick();
                offcanvasMenu();
                burgerMenu();
                burgerMenuRight();
                // burgerArtistMenu();
                // loaderPage();
            });

            // document.addEventListener("lazyloaded", function(e) {
            //   console.log("loaded");
            //   $("div.projectsgrid").isotope("layout");
            // });


        })();
    </script>

    <script src="js/app.js"></script>
    <script src="/js/init.js"></script>
    <!-- <script src="https://player.vimeo.com/api/player.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fitvids/1.2.0/jquery.fitvids.min.js" integrity="sha256-nA828blBCdUSSdI8jpciOZsf72IGt1eBcdx1ioEfa8o=" crossorigin="anonymous"></script> -->


    <!-- <script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>
<script>
  window.cookieconsent.initialise({
    "palette": {
      "popup": {
        "background": "#002fa7"
      },
      "button": {
        "background": "transparent"
      }
    },
    "content": {
      "dismiss": "Got it!",
      "href": "/page/privacy-policy"
    }
  });
</script> -->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-17209875-7"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-17209875-7');
</script> -->
</body>

</html>
