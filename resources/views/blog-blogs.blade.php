@extends("templates/template")
@section("content") {{----}}

<div class="blog-body">
  <section id="first-section">
    <div>
      <h1>Blogy</h1>
      <nav>
        <ul>
          <li class="active">
            <a href="blog-blogs.blade.php">Blogy</a>
          </li>
          <li>
            <a href="blog-list-of-bloggers.blade.php">Zoznam blogerov</a>
          </li>
          <li class="no-active">
            <a id="btn-new-blog" href="create-new-blog.blade.php">Napísať nový článok</a>
          </li>
        </ul>
      </nav>
    </div>
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
