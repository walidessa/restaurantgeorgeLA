<?php
    if (empty($_POST["email"])) {
        header ("Location: ./index.php?content=message&alert=no-email");
    } else {
        include("./connect_db.php");
        include("./functions.php");

        $email = sanitize($_POST["email"]);

        $sql = "SELECT * FROM `password` WHERE `email` = '$email'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result)) {
            header("Location: ./index.php?content=message&alert=emailexists");
        } else {

            //Maakt een password_hash, haalt tijd en datum op
            //Zet dit terug in een array
            
            $array = mk_password_hash_from_microtime();

           $sql = "INSERT INTO `register`  (`id`,
                                            `email`,
                                            `password`,
                                            `userrole`,
                                            `activated`)
                VALUES                      (NULL,
                                            '$email',
                                            '{$array["password_hash"]}',
                                            'customer',
                                            0)";
            // echo $sql;exit();
            if (mysqli_query($conn, $sql)) {

                $id = mysqli_insert_id($conn);

                $to = $email;
                $subject = "Bevestig je e-mailadres";
                $message = '<!doctype html>
                                <html lang="en">
                                    <head>
                                        <!-- Required meta tags -->
                                        <meta charset="utf-8">
                                        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                                    
                                        <!-- Bootstrap CSS -->
                                        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" 
                                        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" 
                                        crossorigin="anonymous">

                                        <style>
                                            body {
                                                background-color: #F5F5F5;
                                                font-size: 1.1em;
                                            }
                                        </style>

                                        <title>Hello, world!</title>
                                    </head>
                                    <body>
                                        <h6>'. $array["date"] . ' - ' . $array["time"] . '</h6>
                                        <h2>Geachte heer/mevrouw,</h2>
                                        <p>Je hebt je onlangs geregistereerd voor de site https://georgela.nl/</p>
                                        <p>Klik <a href= https://georgela.nl/index.php?content=activate&id=' . $id . '&pwh=' . $array['password_hash'] . '>hier</a> voor het activeren en/of wijzigen van het wachtwoord van je account.</p>
                                        <p>Bedankt voor het registreren!</p>
                                        <p>Met vriendelijke groet,</p>
                                        <p>Team George LA</p>

                                        <!-- Optional JavaScript; choose one of the two! -->
                                        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
                                        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
                                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
                                    
                                        <!-- Option 2: Separate Popper and Bootstrap JS -->
                                        <!--
                                        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
                                        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
                                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
                                        -->
                                    </body>
                                </html>';

                $headers = "MIME-Version: 1.0\r\n";
                $headers .= "Content-type: text/html; charset=UTF-8\r\n";
                $headers .= "From: noreply@georgela.nl\r\n";
                $headers .= "Cc: admin@georgela.nl\r\n";
                $headers .= "Bcc: moderator@georgela.nl";
    
                mail($to, $subject, $message, $headers);
                
                header("Location: ./index.php?content=message&alert=register-success");
            } else {
                header("Location: ./index.php?content=message&alert=register-error");
            }
        }
    } 

?>