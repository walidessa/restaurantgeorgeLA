<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- Dit is mijn css file -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/footer.css" />

    <!--Dit is mijn icon -->
    <link rel="shortcut icon" href="./img/logo.png" type="image/x-icon">

    <title>George Marina | Los Angeles</title>
    </head>
    <body>

    <main>
            <section class="container-fluid px-0">
                <div class="row">
                    <div class="col-12"><?php include("./banner.php"); ?></div>
                </div>
            </section>
            <section class="container-fluid px-0">
                <div class="row">
                    <div class="col-12"><?php include("./navbar.php"); ?></div>
                </div>
            </section>
            <section class="container-fluid">
                <div class="row">
                    <div class="col-12">
                      <?php include ("./content.php"); ?>
                    </div>
                </div>
            </section>
            <section class="container-fluid px-0 mt-4 sticky-bottom">
                <div class="row">
                    <div class="col-12"><?php include("./footer.php"); ?></div>
                </div>
            </section>
    
        </main>

   
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="./js/app.js"></script>

  </body>
</html>