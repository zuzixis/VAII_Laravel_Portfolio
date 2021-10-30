@extends("templates/template")
@section("content") {{----}}
<div class="profil-body">
  <section id="first-section">
    <div class="header-profil">

      <img class="profil-photo" src="../img/my-photo.JPG" alt="Profilová fotka">

      <div class="header-title">
        <h1>Zuzana Žillová</h1>
        <h3>študent</h3>
      </div>

    </div>
  </section>
  <section>
    <div class="contact">
      <h2 class="p-subtitles">Kontakt:</h2>
      <ul>
        <li><img src="../img/gps.png" alt="Logo poloha">
          <span>
           Turčianske Teplice
         </span>
        </li>
        <li>
          <img src="../img/telefon.png"  alt="Logo telefón">
          <a href="tel:+421910117452">
            +421 910 114 752
          </a>
        </li>
        <li>
          <img src="../img/email.png" alt="Logo email.">
          <a href="mailto:zuzka.zillova@gmail.com">
            zuzka.zillova@gmail.com
          </a>
        </li>
        <li>
          <img src="../img/facebook.png" alt="Logo facebook">
          <a href="https://www.facebook.com/zillova" target="_blank">
            Zuzana Žillová
          </a>
        </li>
        <li>
          <img src="../img/instagram.png" alt="Logo instragram">
          <a href="https://www.instagram.com/zuzka150/" target="_blank">
            Zuzka150
          </a>
        </li>
      </ul>
    </div>
  </section>
  <section>
    <div class="profil-info">
      <h2 class="p-subtitles">Základné informácie</h2>
      <p>
        Som študentkou informatiky na fakulte riadenia a informatiky na Žilinskej univerzite.
        Som v treťom ročníku.
        Vo voľnom čase mám rada športovanie, chodenie von s priateľmi a samozrejme programovanie :)
      </p>
    </div>
  </section>
  <section>
    <div class="profil-skills">
      <h2 class="p-subtitles">Skills</h2>
      <ul>
        <li><img class="skill-icons" src="../img/cpp.png" alt="skills"></li>
        <li><img class="skill-icons" src="../img/java.jpg" alt="skills"></li>
        <li><img class="skill-icons" src="../img/asm.png" alt="skills"></li>
        <li><img class="skill-icons" src="../img/css.png" alt="skills"></li>
        <li><img class="skill-icons" src="../img/HTML.png" alt="skills"></li>
        <li><img class="skill-icons" src="../img/js.jpg" alt="skills"></li>
        <li><img class="skill-icons" src="../img/ps.png" alt="skills"></li>
        <li><img class="skill-icons" src="../img/sql.jpg" alt="skills"></li>
        <li><img class="skill-icons" src="../img/php.png" alt="skills"></li>
        <li><img class="skill-icons" src="../img/git.png" alt="skills"></li>
        <li><img class="skill-icons" src="../img/r.png" alt="skills"></li>
        <li><img class="skill-icons" src="../img/uml.jpg" alt="skills"></li>
      </ul>
    </div>
  </section>
  <section>
    <div class="profil-blogs">
      <h2 class="p-subtitles">Moje blogy</h2>
      <ul>
        <li><a href="#">Prečo študovať informatiku?</a></li>
        <li><a href="#">Ako sa stať programátorom</a></li>
        <li><a href="#">Prečo štúdium spájať s praxou?</a></li>
      </ul>
    </div>
  </section>
  <section>
    <div class="profil-portfolio">
      <h2 class="p-subtitles">Portfolio</h2>

      <div class="grid">
        <div class="grid-item">
          <img src="../img/tetris.png" alt="tetris">
          <div class="detail-grid-item">
            Tetris, práca v jave.
          </div>
        </div>

        <div class="grid-item">
          <img src="../img/SKovid.png" alt="portfólio">
          <div class="detail-grid-item">
            SKovid, strategická hra, kde sa zadávajú opatrenia
            týkajúce sa Covid-19.
          </div>
        </div>

        <div class="grid-item">
          <img src="../img/sokoban.png" alt="portfólio">
          <div class="detail-grid-item">
            Sokoban, logická hra.
          </div>
        </div>

      </div>
    </div>
  </section>
</div>

@endsection
