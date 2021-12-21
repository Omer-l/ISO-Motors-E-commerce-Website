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
  <script src="./js/basket.js"></script>
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
        <div style="background-color: black; right: 50%;">
          <input type="text" placeholder="Enter desired car name here" style="background-color: black; color: white; height: 40px; width:  400px; font-size: large;">
           <button class="container-fluid" type="button" style="background-color: black; color: white; height: 30px; width:  250px; font-size: large">Search</button>
         </div>
      <!-- Navigation & links -->
        <ul class="nav nav-pills">
    ';

  // Array of the pages
  $linkNames = array("Home", "About Us", "Contact Us","Cart", "Shop", "Login/Register", "My Account", "Logout");
  $linkAddresses = array("./index.php","./aboutus.php", "./contactus.php", "./cart.php", "./shop.php",
    "./loginreg.php", "./myaccount.php", "./logout.php");

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

    ';
}

// outputs footer for every page.
function outputFooter()
{
  echo '
<!-- End <body> -->
</body>
  <!-- Footer -->
<footer class=" text-center text-lg" style="padding-left: 300px;">
  <div class="container">
    <div class="row">
      <div class="col">
        <ul class="list-unstyled">
          <li>
        <a class="navbar-brand"> <img src="./img/logo.png" alt="logo" width="150" height="70"> </a>
          </li>
          <li>
          ISO Motors have been around for over 30 years
          serving customers with the best prices around.
          </li>
        </ul>
      </div>

      <div class="col">
        <h3>Help</h3>

        <ul class="list-unstyled">
          <li>
          07482393842
          </li>
          <li>
          23 N22 3LY London UK
          </li>
          <li>
            isorders@gmail.com
          </li>
          <li>
          Pay by: Visa debit/credit, Paypal
          </li>
        </ul>
      </div>

      <div class="col">
        <h3>NAVIGATE</h3>
        <ul class="list-unstyled" id="footerCol3">
          <li>
            <a id="navbarFont" href="./index.php">Home</a>
          </li>
          <li>
            <a id="navbarFont" href="./aboutus.php">About us</a>
          </li>
          <li>
            <a id="navbarFont" href="./contactus.php">Contact us</a>
          </li>
          <li>
            <a id="navbarFont" href="./loginreg.php">Login/Register</a>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <div class="text-center" style="width:100%">
    Privacy & Policy Copyright © 2021 ISO Motors
  </div>
</footer>
</html>
<body class="d-flex flex-column min-vh-100">
        ';
}