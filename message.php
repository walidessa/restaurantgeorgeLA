<?php
$alert = (isset($_GET["alert"]))? $_GET["alert"]: "default";
$id = (isset($_GET["id"]))? $_GET["id"]: "";
$pwh = (isset($_GET["pwh"]))? $_GET["pwh"]: "";
$email = (isset($_GET["email"]))? $_GET["email"]: "";


    switch ($alert) {
        case "no-email" :
            echo '<div class="alert alert-secondary mt-5 text-center w-50 mx-auto" role="alert">
               Je hebt geen e-mailadres ingevoerd, probeer het opnieuw...
               </div>';
            header("Refresh: 4; ./index.php?content=registreer");
        break;
        case "emailexists" :
            echo '<div class="alert alert-info mt-5 text-center w-50 mx-auto" role="alert">
             Het door je ingevoerde e-mailadres bestaat al, je wordt doorgestuurd naar de inlogpagina.
             </div>';
            header("Refresh: 4; ./index.php?content=inloggen");  
        break;
        case "register-error" :
            echo '<div class="alert alert-danger mt-5 text-center w-50 mx-auto" role="alert">
             Oeps! Er is iets misgegaan tijdens het registreren, probeer het opnieuw of neem contact op met klantenservice@festivalplezier.nl.
             </div>';
            header("Refresh: 5; ./index.php?content=registreer");
        break;
        case "register-success" :
            echo '<div class="alert alert-success mt-5 text-center w-50 mx-auto" role="alert">
             Het registreren is gelukt! We sturen je een link om je e-mailadres te verifiëren en je veilig te kunnen registreren.
             </div>';
            header("Refresh: 6; ./index.php?content=homepagina");
        break;
        case "hacker-alert" :
            echo '<div class="alert alert-danger mt-5 text-center w-50 mx-auto" role="alert">
             Je hebt onvoldoende rechten op deze pagina. Over 5 seconden wordt je teruggestuurd naar de homepagina.
             </div>';
            header("Refresh: 5; ./index.php?content=homepagina");
        break;
        case "password-empty" :
            echo '<div class="alert alert-warning mt-5 text-center w-50 mx-auto" role="alert">
             Je hebt een van de wachtwoordvelden niet ingevuld. Probeer het opnieuw...
             </div>';
            header("Refresh: 4; ./index.php?content=activate&id=$id&pwh=$pwh");
        break;
        case "no-match-password" :
            echo '<div class="alert alert-warning mt-5 text-center w-50 mx-auto" role="alert">
             De ingevulde wachtwoorden zijn niet gelijk. Probeer het opnieuw...
             </div>';
            header("Refresh: 4; ./index.php?content=activate&id=$id&pwh=$pwh");
        break;
        case "no-id-pwh-match" :
            echo '<div class="alert alert-warning mt-5 text-center w-50 mx-auto" role="alert">
             Je bent niet geregistreerd in de database, je zal worden doorverwezen naar de registratiepagina.
             </div>';
             header("Refresh: 4; ./index.php?content=registreer");
        break;
        case "update-success" :
            echo '<div class="alert alert-primary mt-5 text-center w-50 mx-auto" role="alert">
            Het verifiëren is gelukt! Je zal binnen enkele seconden worden doorgestuurd naar de inlogpagina.
            </div>';
            header("Refresh: 4; ./index.php?content=inloggen");
        break;
        case "update-error" :
            echo '<div class="alert alert-danger mt-5 text-center w-50 mx-auto" role="alert">
            Oeps, er is iets misgegaan! Kies een nieuw wachtwoord.
             </div>';
            header("Refresh: 4; ./index.php?content=activate&id=$id&pwh=$pwh");
        break;
        case "already-activated" :
            echo '<div class="alert alert-warning mt-5 text-center w-50 mx-auto" role="alert">
            Het account is al geactiveerd, je zal worden doorgestuurd naar de inlogpagina. 
             </div>';
            header("Refresh: 4; ./index.php?content=inloggen");
        break;
        case "loginform-empty" :
            echo '<div class="alert alert-warning mt-5 text-center w-50 mx-auto" role="alert">
            Je hebt een van de velden niet ingevuld. Probeer het opnieuw... 
             </div>';
            header("Refresh: 4; ./index.php?content=inloggen");
        break;
        case "email-unknown" :
            echo '<div class="alert alert-warning mt-5 text-center w-50 mx-auto" role="alert">
            Het ingevoerde e-mailadres is niet bij ons bekend. Probeer het opnieuw... 
             </div>';
            header("Refresh: 4; ./index.php?content=inloggen");
        break;
        case "not-activated" :
            echo '<div class="alert alert-info mt-5 text-center w-50 mx-auto" role="alert">
            Het ingevoerde e-mailadres is nog niet geactiveerd. Bevestig je e-mailadres <span class="badge badge-info p-2">' . $email . '</span> en probeer het opnieuw...
             </div>';
            header("Refresh: 4; ./index.php?content=inloggen");
        break;
        case "no-pw-match" :
            echo '<div class="alert alert-warning mt-5 text-center w-50 mx-auto" role="alert">
            Het ingevoerde wachtwoord komt niet overeen met <span class="badge badge-info p-2">' . $email . '</span> Probeer het opnieuw... 
             </div>';
            header("Refresh: 5; ./index.php?content=inloggen");
        break;
        case "uitgelogd" :
            echo '<div class="alert alert-primary mt-5 text-center w-50 mx-auto" role="alert">
               Je bent succesvol uitgelogd!
               </div>';
            header("Refresh: 3; ./index.php?content=homepagina");
        break;
        default:
            header("Location: ./index.php?content=homepagina");
        break;

    }
?>