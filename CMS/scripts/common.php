<?php
// output header
function outputHeader($title)
{
  echo '
  <!DOCTYPE html>
  <html>
  <head>
  <title>' . $title . '</title>

  <!-- link to style.css -->
  <link rel="stylesheet" href="./scripts/styles.css";>

  <!-- Mandatory bootstrap Scripts -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <!-- link to bootstrap css file -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        ';
}

// navigation bar with active function
function outputBannerNavigation($pageName)
{

  //Output banner and first part of navigation
  echo '
    <nav class="navbar navbar-expand-lg sticky-top" id="navbar">
      <div class="container-fluid">
        <!-- Logo -->
        <a class="navbar-brand"> <img src="./img/logo.png" alt="logo" width="150" height="70"> </a>
      <!-- Navigation & links -->
        <ul class="nav nav-pills">
    ';

  // Array of the pages
  $linkNames = array("Home", "Sales", "Edit","Login", "Logout");
  $linkAddresses = array("./index.php","./sales.php", "./edit.php", "./login.php", "./logout.php");

  // Output Navigation
  // loop, compare page name and page link
  for ($i = 0; $i < count($linkNames); $i++) {
    echo '<li class="nav-item">';
    // if pagename and link matches make button active.
    if ($linkNames[$i] == $pageName) {
      echo '<a class="nav-link active text-primary" id="activeNav" ';
    }
    // otherwise do not make it active and change font color.
    else {
      echo '<a class="nav-link text-white" id="navbarFont"';
    }
    //end of each navbar button.
    echo 'href="' . $linkAddresses[$i] . '">' . $linkNames[$i] . '</a>
      </li>';
  }
  echo '
          </ul>
        </div>
      </nav>
</html>
<body class="d-flex flex-column min-vh-100">
        ';
}
