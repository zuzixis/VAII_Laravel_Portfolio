@extends("templates/template")
@section("content") {{----}}


<div class="blog-body blog-body-create">
  <section id="first-section">
    <div>
      <h1>Písanie blogu...</h1>
      <nav>
        <ul>
          <li class="no-active">
            <a id="btn-new-blog" href="{{route('blogs.index')}}">Zrušiť</a>
          </li>
        </ul>
      </nav>
    </div>
  </section>
  <section>
    <div class="center">
      <div class="left-side">
        <h1>Nový článok</h1>
        <form action="{{route('blogs.store')}}">
            @csrf {{--Ochrana--}}
          <div class="txt_field">
            <input id="create-title" type="text" name="title" required>
            <span></span>
            <label for="create-title">Nadpis</label>
          </div>
          <div>
            <label for="create-short-text">Napíšte krátky text o téme vašej téme...</label>
            <textarea id="create-short-text"  rows="15" cols="50">
            </textarea>
          </div>
        </form>
      </div>
      <div class="right-side">
        <form>
          <div>
            <label for="create-blog-text">Text:</label>
            <textarea id="create-blog-text"  rows="10" cols="10">
            </textarea>
          </div>
          <input type="submit" value="Vytvoriť blog">
        </form>
      </div>
    </div>
  </section>
</div>

@endsection
