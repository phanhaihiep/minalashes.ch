<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
        name="description"
        content="Mina Lashes ist eine geprüfte Wimpernkünstlerin in Zürich, spezialisiert auf Wimpernverlängerung Klassic Natural und Hot Waxing."
    />

    <!-- Always include this line of code!!! -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="img/pics/logoLashes-01.png" />
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png" />
    <link rel="manifest" href="manifest.webmanifest" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&display=swap"
        rel="stylesheet"
    />

    <!-- Global Site Tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-R8PF4Q1DVM"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-R8PF4Q1DVM');
    </script>

    <script
        type="module"
        src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
        nomodule=""
        src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.js"
    ></script>

    <script
        defer
        src="https://unpkg.com/smoothscroll-polyfill@0.4.4/dist/smoothscroll.min.js"
    ></script>
    <script defer src="js/script.js"></script>

    <!-- treatwell platform -->

    <script src="https://buchung.treatwell.ch/common/venue-menu/javascript/widget-button.js?v1"></script>
    <script>
        (function() {
            var link = document.createElement("link");
            link.type = "text/css";
            link.rel = "stylesheet";
            link.media = "screen";
            document.getElementsByTagName("head")[0].appendChild(link);
        }());
    </script>
    <!-- Link icons -->
   
    <link rel="icon" type="image/png" href="./img/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    @yield('head')
</head>
<body>
<div>
    @if(Session::has('success'))
        <div style="padding: 12px; font-size: 18px;" class="alert alert-success">{{ Session::get('success') }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></div>
    @endif
</div>
<header class="header">
    <a href="{{ route('index') }}">
        <img
            class="logo"
            alt="Mina Lashes logo"
            src="/img/pics/Screenshot_1.png"
        />
    </a>

    <nav class="main-nav">
        <ul class="main-nav-list">
            <li><a class="main-nav-link" href="#how">Wie es funktioniert</a></li>

            <li class="main-nav-link" >
                <div class="nav__content">
                    <a class="main-nav-link" href="">Dienstleistungen</a>
                    <i class="nav__icon fa-solid fa-angle-down"></i>
                </div>
                <ul class="nav__sublist">
                    <li class="nav__subitem">
                        <a href="" class="nav__sublink">Wimpernverlangerung</a>
                    </li>
                    <li class="nav__subitem">
                        <a href="" class="nav__sublink">WarmWaxing</a>
                    </li>
                </ul>
            </li>

            <li>
                <a class="main-nav-link" href="#testimonials">Testimonials</a>
            </li>
            <li><a class="main-nav-link" href="#pricing">Preis</a></li>
            <li><a class="main-nav-link" href="#contact">Kontakt</a></li>
            <li>
                <a class="main-nav-link pointer" onclick="window.open('{{ route('blog') }}');" href="">Blog</a>
            </li>


            <li><a class="main-nav-link nav-cta pointer"  href="tel:0775070699" onclick="window.open('tel:0775070699');">Call 📞</a></li>

            <li><a class="main-nav-link nav-cta" href='https://www.treatwell.ch/' id="wahanda-online-booking-widget"
                   onclick='wahanda.openOnlineBookingWidget("https://buchung.treatwell.ch/ort/423065/menue/"); return false;' target="_blank">Online Buchung</a></li>

        </ul>
    </nav>

    <button class="btn-mobile-nav">
        <ion-icon class="icon-mobile-nav" name="menu-outline"></ion-icon>
        <ion-icon class="icon-mobile-nav" name="close-outline"></ion-icon>
    </button>
</header>

<main>
    @yield('content')
</main>

<footer class="footer">
    <div class="container grid grid--footer">
        <div class="logo-col">
            <a href="{{ route('index') }}" class="footer-logo">
                <img class="logo" alt="Mina Lashes logo" src="/img/pics/screenshot_1.png" />
            </a>

            <ul class="social-links">
                <li>
                    <a class="footer-link pointer" onclick="window.open('https://www.facebook.com/minalashes.ch', '_blank');" target="_blank"
                    ><ion-icon class="social-icon" name="logo-facebook"></ion-icon>
                    </a>
                </li>
                <li>
                    <a class="footer-link pointer" onclick="window.open('https://www.instagram.com/minalashes.zurich/', '_blank');" target="_blank"
                    ><ion-icon class="social-icon" name="logo-instagram"></ion-icon>
                    </a>
                </li>
                <li>
                    <a class="footer-link pointer" onclick="window.open('https://www.tiktok.com/@minalashes.ch', '_blank');" target="_blank"
                    ><ion-icon class="social-icon" name="logo-tiktok"></ion-icon>
                    </a>
                </li>


            </ul>

            <p class="copyright">
                Copyright &copy; <span class="year">2022</span> by Mina Lashes & Beauty.
                All rights reserved.
                Developed by <a class="author" href="https://twitter.com/phanhaihiep" onclick="window.open('https://twitter.com/phanhaihiep')";>Hiep Phan</a>
            </p>
        </div>

        <div class="address-col">
            <p class="footer-heading">Contact us</p>
            <address class="contacts">
                <p>
                    <a class="footer-link" href="https://www.google.com/maps/place/Mina+Lashes+%26+Beauty/@47.3535619,8.2779513,8.92z/data=!4m9!1m2!2m1!1smina+lashes+!3m5!1s0x479aa1ef3e195ac9:0x165edd17d6af3a3f!8m2!3d47.385362!4d8.548673!15sCgttaW5hIGxhc2hlc5IBDGJlYXV0eV9zYWxvbg" onclick="window.open('https://www.google.com/maps/place/Mina+Lashes+%26+Beauty/@47.3535619,8.2779513,8.92z/data=!4m9!1m2!2m1!1smina+lashes+!3m5!1s0x479aa1ef3e195ac9:0x165edd17d6af3a3f!8m2!3d47.385362!4d8.548673!15sCgttaW5hIGxhc2hlc5IBDGJlYXV0eV9zYWxvbg');">Universitätstrasse 116, 8006, Zurich, Switzerland</a>
                </p>

                <p>
                    <a class="footer-link" href="tel:0775070699" onclick="window.open('tel:0775070699');">+41775070699</a
                    ><br />
                    <a class="footer-link" href="mailto:minalashes.ch@gmail.com" onclick="window.open('mailto:minalashes.ch@gmail.com');"
                    >minalashes.ch@gmail.com</a
                    >
                </p>
            </address>
        </div>



        <nav class="nav-col">
            <p class="footer-heading">Company</p>
            <ul class="footer-nav">
                <li><a class="footer-link" href="#">Uber uns</a></li>
                <li><a class="footer-link" href="#">Blog</a></li>
                <li><a class="footer-link" href="#">Careers</a></li>
                <li><a class="footer-link" href="#">Impressum</a></li>
            </ul>
        </nav>

        <nav class="nav-col">
            <form action="{{ route('send.mail') }}" method="POST">
                @csrf
                <p class="footer-heading">Abonnieren Sie uns</p>
                <p class="copyright">Um das beste Angebot und die beste Aktion des Jahres zu erhalten</p>
                <div class= "copyright" style="background-color:white">
                    <input type="text" placeholder="Name" name="name" required>
                    <input type="text" placeholder="Email" name="email" required>
                </div>
                <div class="copyright">
                    <input type="submit" value="Subscribe">
                </div>
            </form>
        </nav>


    </div>
</footer>


</body>
</html>
