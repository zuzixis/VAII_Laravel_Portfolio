@extends("templates/template")
@section("content") {{----}}

<div class="blog-body">
  <section id="first-section">
      <x-blogy.nav :activeCard="2" />

    <div class = "blogger-box">
      <img src="../img/my-photo.JPG" alt="Fotka profilu">
      <a href="profil.blade.php"><h3 >Zuzana Žillová</h3></a>
      <p>
        Som študentkou informatiky na fakulte riadenia a informatiky na Žilinskej univerzite.
        Práve som v treťom ročníku, a čaká ma napísať záverečnú bakalársku prácu.
        Vo voľnom čase mám rada športovanie, chodenie von s priateľmi a samozrejme programovanie :).
        Viac v mojom profile.
      </p>
    </div>

    <div class = "blogger-box">
      <img src="../img/user.png" alt="Fotka profilu">
      <a href="profil.blade.php"><h3 >Meno Blogera</h3></a>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        Aspernatur consequatur eaque eius eum labore nam necessitatibus nemo non odio,
        omnis optio quis recusandae rem reprehenderit repudiandae sed, soluta voluptate voluptatum!
      </p>
    </div>

    <div class = "blogger-box">
      <img src="../img/user.png" alt="Fotka profilu">
      <a href="profil.blade.php"><h3 >Meno Blogera</h3></a>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        Aspernatur consequatur eaque eius eum labore nam necessitatibus nemo non odio,
        omnis optio quis recusandae rem reprehenderit repudiandae sed, soluta voluptate voluptatum!
      </p>
    </div>

    <div class = "blogger-box">
      <img src="../img/user.png" alt="Fotka profilu">
      <a href="profil.blade.php"><h3 >Meno Blogera</h3></a>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        Aspernatur consequatur eaque eius eum labore nam necessitatibus nemo non odio,
        omnis optio quis recusandae rem reprehenderit repudiandae sed, soluta voluptate voluptatum!
      </p>
    </div>
  </section>
</div>

@endsection
