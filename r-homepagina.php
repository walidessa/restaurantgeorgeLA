<?php
    include("./functions.php");

    is_authorized(["root"]);
?>

r-homepagina
<?php

    echo "Mijn gebruikersrol is: " . $_SESSION["userrole"];
    echo "<hr>";
    echo "Mijn accountid is: " . $_SESSION["id"];

?>