<?php

include("./connect_db.php");
include("./functions.php");

$email = sanitize($_POST["email"]);
$password = sanitize($_POST["password"]);

if (empty($email) || empty($password)) {
    // Check of de loginformvelden zijn ingevuld...
    header("Location: ./index.php?content=message&alert=loginform-empty");
} else {

    $sql = "SELECT * FROM `register` WHERE `email` = '$email'";

     $result = mysqli_query($conn, $sql);

    (mysqli_num_rows($result));

    // var_dump((bool) mysqli_num_rows($result));

        if (!mysqli_num_rows($result)) {
        // E-mailadres onbekend..
            header("Location: ./index.php?content=message&alert=email-unknown");
        } else {
            $record = mysqli_fetch_assoc($result);
            
            //var_dump((bool) $record["activated"]);

            if(!$record["activated"]) {
            // Niet geactiveerde account
            header("Location: ./index.php?content=message&alert=not-activated&email=$email");
            } elseif (!password_verify($password, $record["password"])) {
            // Niet matchende password
            header("Location: ./index.php?content=message&alert=no-pw-match");
            } else {
            // Password matched
            // 'root', 'admin', 'customer', 'moderator'.

            $_SESSION["id"] = $record["id"];
            $_SESSION["userrole"] = $record["userrole"];

            switch($record["userrole"]) {
            case 'customer':
                header("Location: ./index.php?content=c-homepagina");
            break;
            case 'admin':
                header("Location: ./index.php?content=a-homepagina");
            break;
            case 'root':
                header("Location: ./index.php?content=r-homepagina");
            break;
            case 'moderator':
                header("Location: ./index.php?content=m-homepagina");
            break;
            default:
                header("Location: ./index.php?content=homepagina");
            break;
            }
        }
    } // E-mailadres onbekend...



}   // Check of de loginformvelden zijn ingevuld...


?>