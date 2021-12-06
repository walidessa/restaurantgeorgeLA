<!-- <div class="container mt-5">
    <div class="row">
        <div class="col-12 col-sm-6">
            <form action= "./index.php?content=register_script" method="post">
                <div class="form-group">
                    <label for="inputEmail">Vul uw e-mailadres in:</label>
                    <input name="email" type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" autofocus>
                    <small id="emailHelp" class="form-text text-muted">Wij zullen uw gegevens nooit delen met derden!</small>
                </div>
                <button type="submit" class="btn btn-outline-secondary btn-md btn-block">Registreer</button>
            </form>
        </div>
        <div class="col-12 col-sm-6">
            <img src="./img/istockphoto-1063976282-612x612" alt="register" class="w-100 mx-auto d-block">
        </div>
    </div>
</div>

-->

<!--Begin of the inlog form -->

<link rel="stylesheet" href="./css/inlog.css"/>

<main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="./img/istockphoto-1063976282-612x612" alt="register" class="login-card-img">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <div class="brand-wrapper">
                <img src="./img/logo" alt="logo" class="logo">
              </div>
              <p class="login-card-description">Registeren </p>
              <form action="./register_script.php" method="post">
                  <div class="form-group">
                    <label for="email" class="sr-only">E-mail:</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="E-mailadres">
                  </div>
                  <input name="email" id="email" class="btn btn-block login-btn mb-4" type="button" value="Registreren">
                </form>
                <nav class="login-card-footer-nav">
                </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!--End of the inlog form -->