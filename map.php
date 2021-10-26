<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <?php
$active = (isset($_GET["content"])) ? $_GET["content"] : "";
?>
<nav class="navbar navbar-expand-md navbar-light bg-light">
  <a class="navbar-brand" href="./index.php?content=home">GEORGE MARINA</a>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <?php
        if (isset($_SESSION["id"])) {
          switch ($_SESSION["userrole"]) {
            case 'admin':
              echo '<li class="nav-item '; echo (in_array($active, ["a-home", ""])) ? "active" : ""; echo '">
                      <a class="nav-link" href="./index.php?content=a-home">home <span class="sr-only">(current)</span></a>
                    </li>';
            break;
            case 'root':
              echo '<li class="nav-item '; echo (in_array($active, ["r-home", ""])) ? "active" : ""; echo '">
                      <a class="nav-link" href="./index.php?content=r-home">home <span class="sr-only">(current)</span></a>
                    </li>';
            break;
            case 'customer':
              echo '<li class="nav-item '; echo (in_array($active, ["c-home", ""])) ? "active" : ""; echo '">
                      <a class="nav-link" href="./index.php?content=c-home">home <span class="sr-only">(current)</span></a>
                    </li>';
            break;
            case 'moderator':
              echo '<li class="nav-item '; echo (in_array($active, ["m-home", ""])) ? "active" : ""; echo '">
                      <a class="nav-link" href="./index.php?content=m-home">home <span class="sr-only">(current)</span></a>
                    </li>';
            break;
            default:
              echo '<li class="nav-item '; echo (in_array($active, ["home", ""])) ? "active" : ""; echo '">
                      <a class="nav-link" href="./index.php?content=home">Home <span class="sr-only">(current)</span></a>
                    </li>';
            break;

          }
        } else {
          echo '<li class="nav-item '; echo (in_array($active, ["home", ""])) ? "active" : ""; echo '">
                  <a class="nav-link" href="./index.php?content=home">Home <span class="sr-only">(current)</span></a>
                </li>';
        }
      ?> 
      <li class="nav-item <?php echo ($active == "juices") ? "active" : "" ?>">
        <a class="nav-link" href="./index.php?content=juices">Menu</a>
      </li>
      <li class="nav-item <?php echo ($active == "juices") ? "active" : "" ?>">
        <a class="nav-link" href="./index.php?content=book-event-page">Book Event</a>
      </li>
      <li class="nav-item <?php echo ($active == "juices") ? "active" : "" ?>">
        <a class="nav-link" href="./index.php?content=juices">Gallery</a>
      </li>
      <li class="nav-item <?php echo ($active == "juices") ? "active" : "" ?>">
        <a class="nav-link" href="./index.php?content=aboutus">About Us</a>
      </li>
      <li class="nav-item <?php echo ($active == "juices") ? "active" : "" ?>">
        <a class="nav-link" href="./index.php?content=contactus">contactus</a>
      </li>
      <li class="nav-item <?php echo ($active == "juices") ? "active" : "" ?>">
        <a class="nav-link" href="./index.php?content=covid19info">covid19info</a>
      </li>
      <li class="nav-item <?php echo ($active == "juices") ? "active" : "" ?>">
        <a class="nav-link" href="./index.php?content=aboutUs">aboutUs</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <?php 
        if (isset($_SESSION["id"])) {
          switch($_SESSION["userrole"]) {
            case 'admin':
              echo '<li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle '; echo (in_array($active, ["a-users", "a-reset_password"])) ? "active" : ""; echo '" href="#" id="navbarDropdownMenuLinkRight" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        admin workbench
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLinkRight">
                        <a class="dropdown-item '; echo ($active == "a-users") ? "active" : ""; echo '" href="./index.php?content=a-users">users</a>
                        <a class="dropdown-item '; echo ($active == "a-reset_password") ? "active" : ""; echo '" href="./index.php?content=a-reset_password">reset password</a>
                      </div>
                    </li>';
            break;
            case 'root':
              echo '<li class="nav-item '; echo ($active == "r-rootpage") ? "active" : ""; echo '">
                      <a class="nav-link" href="./index.php?content=r-rootpage">rootpage</a>
                    </li>';

            break;
            case 'moderator':
              // Maak hier de hyperlinks voor de gebruikersrol moderator

            break;
            case 'customer':
              // Maak hier de hyperlinks voor de gebruikersrol customer

            break;
            default:
            break;
          }
          echo '<li class="nav-item '; echo ($active == "logout") ? "active" : ""; echo '">
                  <a class="nav-link" href="./index.php?content=logout">uitloggen</a>
                </li>';
        } else {
          echo '<li class="nav-item <?php echo ($active == "juices") ? "active" : "" ?>
                <a class="nav-link" href="./index.php?content=covid19info">COVID-19 Information</a>
                </li>
                <li class="nav-item '; echo ($active == "register")? "active" : ""; echo '">
                <a class="nav-link" href="./index.php?content=register">registreer</a>
                </li>
                
                <li class="nav-item '; echo ($active == "login") ? "active" : ""; echo '">
                  <a class="nav-link" href="./index.php?content=login">inloggen</a>
                </li>';
        }
      ?>    
    </ul>
  </div>
</nav>

</head>
<body>
  <div id = "map" >

  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d77972.0598287501!2d4.937514395375023!3d52.35905240549138!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1snl!2snl!4v1635163650092!5m2!1snl!2snl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>

<link href="aboutUs.css" rel="Stylesheet" type="text/css">
</body>
</html>