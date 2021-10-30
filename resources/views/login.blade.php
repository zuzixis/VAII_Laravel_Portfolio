@extends("templates/template")
@section("content") {{----}}

<div> <!--class="login-background"-->
  <img class="abstract-background" src="../img/login-bg2.png" alt="pozadie">
  <div class="center">
    <h1>Prihlásenie</h1>
    <form method="post">
      <div class="txt_field">
        <input id="log-name" type="text" required>
         <span></span>
        <label for="log-name">Užívateľské meno</label>
      </div>
      <div class="txt_field">
        <input id="log-pass" type="password" required>
        <span></span>
        <label for="log-pass">Heslo</label>
      </div>
      <div class="pass">Zabudnuté heslo?</div>
      <input type="submit" value="Prihlásiť sa">
      <div class="signup_link">
        Nie ste zaregistrovaný? <a href="registration.blade.php">Zaregistrovať sa</a>
      </div>
    </form>
  </div>
</div>

@endsection
