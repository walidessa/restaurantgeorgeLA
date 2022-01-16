<?php
    include("./connect_db.php");
    include("./functions.php");

    $id = sanitize($_POST["id"]);
    $pwh = sanitize($_POST["pwh"]);
    $password = sanitize($_POST["password"]);
    $passwordCheck = sanitize($_POST["passwordCheck"]);

    if (empty($_POST["password"]) || empty($_POST["passwordCheck"])) {
        header("Location: ./index.php?content=message&alert=password-empty&id=$id&pwh=$pwh");
    } elseif (strcmp($password,  $passwordCheck)){
        header("Location: ./index.php?content=message&alert=no-match-password&id=$id&pwh=$pwh");
    } else {

        $sql = "SELECT * FROM `register` WHERE `id` = '$id'";
        
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result)) {

           $record = mysqli_fetch_assoc($result);

           if ($record["activated"]) {
               header("Location: ./index.php?content=message&alert=already-activated");
            } else {
                //1. Maak een passwordhash voor het nieuw gekozen wachtwoord
                $password_hash = password_hash($password, PASSWORD_BCRYPT);
    
                //2. Ga het record updaten met het nieuw gekozen wachtwoord
                $sql = "UPDATE `register`
                        SET    `password` = '$password_hash',
                               `activated` = 1
                        WHERE  `id` = $id
                        AND    `password` = '$pwh'";
                
               if (mysqli_query($conn, $sql)) {
                   //success
                   header("Location: ./index.php?content=message&alert=update-success");
                } else {
                    //error
                   header("Location: ./index.php?content=message&alert=update-error&id=$id&pwh=$pwh");
               }
            }
            
            //3. Geef de gebruiker feedback met een alert dat het updaten is gelukt, stuur door naar andere pagina als het niet is gelukt.
        } else {
            // foutmelding
            header("Location: ./index.php?content=message&alert=no-id-pwh-match");
        }
    }
    
?>