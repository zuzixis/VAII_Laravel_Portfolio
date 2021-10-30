@extends("templates/template")
@section("content") {{----}}

<body>
<header>
  <div class="menu">
    <div class="left-blue-area">
      <div class="left-blue-background "></div>
      <img id="logo-icon" src="../img/portfolio.png" alt="Logo">
      <ul>
        <li>
          <a href="tel:+421910117452" >
            <img src="../img/telefon.png" alt="ikona telefónu">
          </a>
        </li>
        <li>
          <a href="https://www.instagram.com/zuzka150/" target="_blank">
            <img src="../img/instagram.png" alt="ikona instagram">
          </a>
        </li>
        <li>
          <a href="https://www.facebook.com/zillova" target="_blank">
            <img src="../img/facebook.png" alt="ikona facebook">
          </a>
        </li>
        <li>
          <a href="mailto:zuzka.zillova@gmail.com" >
            <img src="../img/email.png" alt="ikona email">
          </a>
        </li>

      </ul>
    </div>

    <nav class="main-menu">
      <img class="btn-menu" onclick="openCloseNav()" src="../img/menu.png" alt="menu">

      <ul id="menu-items">
        <li><a href="home.blade.php">Domov</a></li>
        <li><a href="blog-blogs.blade.php">Blog</a></li>
        <li  class="active"><a href="portfolios.blade.php">Portfóliá</a></li>
        <!--<li><a href="#">Nové pozície</a></li>-->
        <li class="no-active">
          <a id="btn-login" href="login.blade.php">Prihlásenie</a></li>
      </ul>

    </nav>
  </div>

</header>

<div class="portfolio-page">
  <section id="first-section">
      <h1>Portfóliá</h1>
  </section>

  <section>

    <div class="grid">

      <div class="grid-item">
          <div>
            <a href="profil.blade.php">
            <img src="../img/my-photo.JPG" alt="fotka profilu">
            <h3>Zuzana Žillová</h3>
            </a>
          </div>
      </div>

      <div class="grid-item">
        <a href="profil.blade.php">
          <img src="../img/user.png" alt="fotka profilu">
          <h3>Meno užívateľa</h3>
        </a>
      </div>

      <div class="grid-item">
        <a href="profil.blade.php">
          <img src="../img/user.png" alt="fotka profilu">
          <h3>Meno užívateľa</h3>
        </a>
      </div>

      <div class="grid-item">
        <a href="profil.blade.php">
          <img src="../img/user.png" alt="fotka profilu">
          <h3>Meno užívateľa</h3>
        </a>
      </div>

      <div class="grid-item">
        <a href="profil.blade.php">
          <img src="../img/user.png" alt="fotka profilu">
          <h3>Meno užívateľa</h3>
        </a>
      </div>

      <div class="grid-item">
        <a href="profil.blade.php">
          <img src="../img/user.png" alt="fotka profilu">
          <h3>Meno užívateľa</h3>
        </a>
      </div>

      <div class="grid-item">
        <a href="profil.blade.php">
          <img src="../img/user.png" alt="fotka profilu">
          <h3>Meno užívateľa</h3>
        </a>
      </div>

      <div class="grid-item">
        <a href="profil.blade.php">
          <img src="../img/user.png" alt="fotka profilu">
          <h3>Meno užívateľa</h3>
        </a>
      </div>

      <div class="grid-item">
        <a href="profil.blade.php">
          <img src="../img/user.png" alt="fotka profilu">
          <h3>Meno užívateľa</h3>
        </a>
      </div>

      <div class="grid-item">
        <a href="profil.blade.php">
          <img src="../img/user.png" alt="fotka profilu">
          <h3>Meno užívateľa</h3>
        </a>
      </div>

    </div>
  </section>
</div>

@endsection
