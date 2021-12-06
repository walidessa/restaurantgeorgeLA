<?php 
    // Maak de laden van het $_SESSIOn array leeg met unset
    unset($_SESSION["id"]);
    unset($_SESSION["userrole"]);

    // Verwijder het session_start bestand wanneer je op uitloggen klikt
    session_destroy();

    header("Location: ./index.php?content=message&alert=uitgelogd");
?>