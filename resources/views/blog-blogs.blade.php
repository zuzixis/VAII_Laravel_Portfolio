@extends("templates/template")
@section("content") {{----}}

<div class="blog-body">
  <section id="first-section">
    <x-blogy.nav :activeCard="1"/>
    <div>
      <div class="box">
        <img src="../img/my-photo.JPG" alt="Fotko autora">
        <div class="info">
          <a href="article.blade.php"><h3>Prečo študovať informatiku?</h3></a>
          <a href="profil.blade.php"><h4>Zuzana Žillová</h4></a>
          <p>
            Oplatí sa v tejto dobe ísť študovať informatiku alebo skôr vynechať
            nezmyselné poučky a skočiť rovno do praxe?
          </p>
        </div>
      </div>


      <div class="box">
        <img src="../img/user.png" alt="Fotko autora">
        <div class="info">
          <a href="#"><h3>Názov blogu</h3></a>
          <a href="profil.blade.php"><h4>Meno autora</h4></a>
          <p>
            Krátky popisok o obsahu blogu...
          </p>
        </div>
      </div>



    </div>
  </section>
</div>

@endsection
