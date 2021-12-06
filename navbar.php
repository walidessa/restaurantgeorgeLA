<?php
$active = (isset($_GET["content"])) ? $_GET["content"] : "";
?>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark ">
    <div class="container">
    <a class="navbar-brand" href="#">
    <div class="spinner-grow text-secondary"></div>
      </a>
    <a class="navbar-brand" href="./index.php?content=home">GEORGE MARINA</a>
      <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon mt-2">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </span>
      </button>
      <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0 ms-lg-12 ps-lg-5" id="navigation">
        <ul class="navbar-nav navbar-nav-hover ms-auto">
          <li class="nav-item dropdown dropdown-hover mx-2 ms-lg-6">
            <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuPages2" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="material-icons opacity-6 me-2 text-md"></i>
              Pages
              <img src="./assets/img/down-arrow-white.svg" alt="down-arrow" class="arrow ms-auto ms-md-2 d-lg-block d-none">
              <img src="./assets/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-auto ms-md-2 d-lg-none d-block">
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="./index.php?content=book-event-page">Book Event</a>
                <a class="dropdown-item" href="./index.php?content=aboutus">About Us</a>
                <a class="dropdown-item" href="./index.php?content=contactus">Contact</a>
                <a class="dropdown-item" href="./index.php?content=careerpage">Career</a>
                <a class="dropdown-item" href="./index.php?content=musicplaylist">Music Playlist</a>
                <a class="dropdown-item" href="./index.php?content=covid19info">COVID-19 Information</a>
                <a class="dropdown-item" href="./index.php?content=schedule-page">Schedule</a>
              </div>
            </a>
          </li>
          <li class="nav-item dropdown dropdown-hover mx-2">
            <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuBlocks" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="material-icons opacity-6 me-2 text-md"></i>
              
              <img src="./assets/img/dowdn-arrow-white.svg" alt="" class="arrow ms-auto ms-md-2 d-lg-block d-none">
              <img src="./assets/img/down-arrow-ddark.svg" alt="" class="arrow ms-auto ms-md-2 d-lg-none d-block">
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </a>
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
          echo '<li class="nav-item '; echo ($active == "register")? "active" : ""; echo '">
                <a class="nav-link" href="./index.php?content=register">registreer</a>
                </li>
                <li class="nav-item '; echo ($active == "login") ? "active" : ""; echo '">
                  <a class="nav-link" href="./index.php?content=login">inloggen</a>
                </li>';
        }
      ?>    
    </ul>
      </div>
    </div>
  </nav>
  