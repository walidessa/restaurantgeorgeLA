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
                case 'docent':
                    header("Location: ./index.php?content=d-home");
                    break;
                  case 'eigenaar':
                    header("Location: ./index.php?content=e-home");
                    break;
                  case 'student':
                    header("Location: ./index.php?content=s-home");
                    break;
                  case 'begeleider':
                    header("Location: ./index.php?content=b-home");
                    break;
                  case 'klant':
                    header("Location: ./index.php?content=k-home");
                    break;
                  case 'root':
                    header("Location: ./index.php?content=r-home");
                    break;
                  default:
                    header("Location: ./index.php?content=home");
                    break;
            }
        }
    } // E-mailadres onbekend...



}   // Check of de loginformvelden zijn ingevuld...


?>