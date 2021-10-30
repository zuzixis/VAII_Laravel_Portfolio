@extends("templates/template")
@section("content") {{----}}

<div class="blog-body article-body">
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
                </div>
            </div>
        </div>
    </section>
    <section>
         <div class="blogger-box-article blogger-box">
             <h2>Názov odstavca</h2>
             <p>
                 Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                 Aliquam delectus dolore doloremque dolorum ea, eaque illum incidunt magnam,
                 natus neque qui quibusdam quisquam quos recusandae similique sunt, suscipit veniam voluptas.
                 Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                 Aliquam delectus dolore doloremque dolorum ea, eaque illum incidunt magnam,
                 natus neque qui quibusdam quisquam quos recusandae similique sunt, suscipit veniam voluptas.
             </p>
             <p>
                 Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                 Aliquam delectus dolore doloremque dolorum ea, eaque illum incidunt magnam,
                 natus neque qui quibusdam quisquam quos recusandae similique sunt, suscipit veniam voluptas.
                 Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                 Aliquam delectus dolore doloremque dolorum ea, eaque illum incidunt magnam,
                 natus neque qui quibusdam quisquam quos recusandae similique sunt, suscipit veniam voluptas.
             </p>
             <h2>Názov odstavca</h2>
             <p>
                 Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                 Aliquam delectus dolore doloremque dolorum ea, eaque illum incidunt magnam,
                 natus neque qui quibusdam quisquam quos recusandae similique sunt, suscipit veniam voluptas.
                 Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                 Aliquam delectus dolore doloremque dolorum ea, eaque illum incidunt magnam,
                 natus neque qui quibusdam quisquam quos recusandae similique sunt, suscipit veniam voluptas.
             </p>
             <p>
                 Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                 Aliquam delectus dolore doloremque dolorum ea, eaque illum incidunt magnam,
                 natus neque qui quibusdam quisquam quos recusandae similique sunt, suscipit veniam voluptas.
                 Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                 Aliquam delectus dolore doloremque dolorum ea, eaque illum incidunt magnam,
                 natus neque qui quibusdam quisquam quos recusandae similique sunt, suscipit veniam voluptas.
             </p>
         </div>
    </section>
</div>

@endsection
