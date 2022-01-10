<!--Begin of the inlog form -->

<link rel="stylesheet" href="./css/inlog.css"/>

<main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="./img/Login" alt="login" class="login-card-img">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <div class="brand-wrapper">
                <img src="./img/logo" alt="logo" class="logo">
              </div>
              <p class="login-card-description">Inloggen begeleider </p>
              <form action="./db/georgemboutrecht-04.sql">
                  <div class="form-group">
                    <label for="email" class="sr-only">E-mail:</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="E-mailadres">
                  </div>
                  <div class="form-group mb-4">
                    <label for="password" class="sr-only">Wachtwoord:</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Wachtwoord">
                  </div>
                  <div class="form-group mb-4">
                    <label for="2FA" class="sr-only">2FA:</label>
                    <input type="text" name="2FA" id="2FA" class="form-control" placeholder="Two-Factor (2FA) code">
                  </div>
                  <input name="login" id="login" class="btn btn-block login-btn mb-4" type="button" value="Login">
                </form>
                <a href="./index.php?content=inlog" class="text-reset">Inloggen als student?</a><br>
                <a href="./index.php?content=d-home" class="text-reset">Inloggen als docent?</a><br>
                <a href="./index.php?content=e-home" class="text-reset">Inloggen als eigenaar?</a><br>
              </br>
                <a href="./index.php?content=resetpw" class="forgot-password-link">Wachtwoord vergeten?</a>
                <nav class="login-card-footer-nav">
                </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!--End of the inlog form -->