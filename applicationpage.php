<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="./css/application.css" rel="stylesheet">

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

<title>Solliciteer nu!</title>



</head>
    <body>
    
        <div class="main">
    
            <div class="container">
                <form method="POST" class="appointment-form" id="appointment-form">
                    <h2>Open sollicitatie</h2>
                    <div class="form-group-1">
                        <input type="text" name="name" id="voornaam" placeholder="Voornaam" required />
                        <input type="text" name="name" id="achternaam" placeholder="Achternaam" required />
                        <input type="email" name="email" id="email" placeholder="E-mail" required />
                        <input type="number" name="phone_number" id="telefoonnummer" placeholder="Telefoonnummer" required  />
                        <div class="select-list">
                            <select name="course_type" id="course_type">
                                <option slected value="">Functie:</option>
                                <option value="kok">Kok</option>
                                <option value="bediening">Bediening</option>
                                <option value="manager">Manager</option>
                                <option value="kwaliteitmederwerker">Kwaliteitmedewerker</option>
                                <option value="barista">Barista</option>
                                <option value="keukenhulp">Keukenhulp</option>
                                <option value="caissi??re">Caissi??re</option>
                                <option value="spoelkeuken">Spoelkeuken medewerker</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group-2">
                        <h3>Hoe mogen we je benaderen?</h3>
                        <div class="select-list">
                            <select name="confirm_type" id="confirm_type">
                                <option selected value="">Maak een keuze</option>
                                <option value="by_email">Telefonisch</option>
                                <option value="by_email">E-mail</option>
                                <option value="by_email">Per post</option>
                            </select>
                        </div>
                        <!-- <div class="select-list">
                            <select name="hour_appointment" id="hour_appointment">
                                <option seleected value=""></option>
                                <option value="9h-11h"></option>
                            </select>
                        </div> -->
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                        <label for="agree-term" class="label-agree-term"><span><span></span></span>Ik ga akkoord met de  <a href="#" class="term-service">algemene voorwaarden</a></label>
                    </div>
                    <div class="form-submit">
                        <input type="submit" name="submit" id="submit" class="submit" value="Solliciteer" />
                    </div>
                </form>
            </div>
    
        </div>
    
    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>