<?php 

    if (isset($_GET["content"])) {
        include("./" . $_GET["content"] . ".php");
    } else {
        include("./homepagina.php");
    }
?>