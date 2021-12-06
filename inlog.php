<!--Begin of the inlog form -->

<link rel="stylesheet" href="./css/footer.css"/>

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
              <p class="login-card-description">Inloggen </p>
              <form action="./database/login.sql">
                  <div class="form-group">
                    <label for="email" class="sr-only">E-mail:</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="123456@student.mboutrecht.nl">
                  </div>
                  <div class="form-group mb-4">
                    <label for="password" class="sr-only">Wachtwoord:</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Wachtwoord">
                  </div>
                  <input name="login" id="login" class="btn btn-block login-btn mb-4" type="button" value="Login">
                </form>
                <a href="./reset-pw.php" class="forgot-password-link">Wachtwoord vergeten?</a>
                <p class="login-card-footer-text">Inloggen als docent?<a href="./index.php?content=docent" class="text-reset"></a></p>
                <nav class="login-card-footer-nav">
                </nav>
            </div>
          </div>
        </div>
      </div>

    </div>
  </main>
  <!--End of the inlog form -->