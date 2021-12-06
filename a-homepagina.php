<?php
    include("./functions.php");

    is_authorized(["root", "admin"]);
?>

Studentnummer: 330710
<?php

    // unset($_SESSION["id"]);
    // unset($_SESSION["userrole"]);
    // session_destroy();

    // var_dump($_SESSION);


    echo "Mijn gebruikersrol is: " . $_SESSION["userrole"];
    echo "<hr>";
    echo "Mijn accountid is: " . $_SESSION["id"];

?>