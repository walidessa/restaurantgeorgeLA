<!--Begin of the register form -->

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
              <p class="login-card-description">Wachtwoord vergeten? </p>
              <form action="./register_script.php" method="post">
                  <div class="form-group">
                    <label for="email" class="sr-only">E-mail:</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="E-mailadres">
                  </div>
                  <p> U ontvangt per e-mail een link om uw wachtwoord opnieuw in te stellen.</p>
                  <input name="email" id="email" class="btn btn-block login-btn mb-4" type="button" value="Verzenden">
                </form>
                <a href="./index.php?content=inlog" class="text-reset">Login</a><br></br>
                <a href="./index.php?content=registreer" class="text-reset">Registreer</a>
                <nav class="login-card-footer-nav">
                </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!--End of the register form -->