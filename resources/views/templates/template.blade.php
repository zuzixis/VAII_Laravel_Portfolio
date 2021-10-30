<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Domovská stránka stránky Portfolio, záladné informácie.">
    <meta name="keywords" content="Portfólio, domovská stránka, základné informácie">
    <meta name="author" content="Zuzana Žillová">
    <title>Domov</title>
    <link rel="stylesheet" href="{{asset("public/css/style.css")}}" type="text/css">
    <script src="{{asset("js/skript.js")}}"></script>
</head>
<body>
<header>
    <div class="menu">
        <div class="left-blue-area">
            <div class="left-blue-background "></div>
            <img id="logo-icon" src="{{asset("img/portfolio.png")}}" alt="Logo">
            <ul>
                <li>
                    <a href="tel:+421910117452" >
                        <img src="{{asset("img/telefon.png")}}" alt="ikona telefónu">
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com/zuzka150/" target="_blank">
                        <img src="{{asset("img/instagram.png")}}" alt="ikona instagram">
                    </a>
                </li>
                <li>
                    <a href="https://www.facebook.com/zillova" target="_blank">
                        <img src="{{asset("img/facebook.png")}}" alt="ikona facebook">
                    </a>
                </li>
                <li>
                    <a href="mailto:zuzka.zillova@gmail.com" >
                        <img src="{{asset("img/email.png")}}" alt="ikona email">
                    </a>
                </li>
            </ul>
        </div>

        <nav class="main-menu">
            <img class="btn-menu" onclick="openCloseNav()" src="{{asset("img/menu.png")}}" alt="menu">

            <ul id="menu-items">
                <li class="active"><a href="home.blade.php">Domov</a></li>
                <li><a href="blog-blogs.blade.php">Blog</a></li>
                <li><a href="portfolios.blade.php">Portfóliá</a></li>
                <li class="no-active">
                    <a id="btn-login" href="login.blade.php">Prihlásenie</a></li>
            </ul>

        </nav>
    </div>

</header>

@yield("content")

<footer class="footer">
    <div>
    </div>
</footer>

</body>
</html>



