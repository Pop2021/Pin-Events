<?php
require('../session.php');
//require('signupprocess.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css" type="text/css">
    
    <!-- Font Quicksand -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/css/mdb.min.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/js/mdb.min.js"></script>
    
    <!-- <script src = "bootstrap-validate.js"></script>
    <script>
        bootstrapValidate('#fname', 'regex: /^[A-Z][A-Za-z\ \-]{1,100}$/g: Please check your first name')
        bootstrapValidate('#lname', 'regex: /^[A-Z][A-Za-z\ \-]{1,100}$/g: Please check your last name')
        bootstrapValidate('#studID', 'regex: //(\d{7,8})/g: Please check your student ID')
        bootstrapValidate('#email', 'regex: /^([a-z]+[\.-]*[a-z]+)+(@ashesi\.edu\.gh)$/ig: Please check your email')
        bootstrapValidate('#password', 'regex: /[A-Za-z0-9\W]+/g: Please check your input')
        bootstrapValidate('#loginemail', 'regex: /^([a-z]+[\.-]*[a-z]+)+(@ashesi\.edu\.gh)$/ig: Please check your email')
        bootstrapValidate('#loginpword', 'regex: /[A-Za-z0-9\W]+/g: Please check your password')
    </script> -->

    <title>Home</title>
</head>

<body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar" style="position: absolute;">

        <!-- Navbar brand for logo -->
        <a class="navbar-brand" href="index.php">
            <img src="logo-black.svg" alt="Logo">
        </a>
    </nav>
    <!--Navbar-->


    <!-- Mask & flexbox options-->
    <div class="mask rgba-gradient align-items-center">
        <!-- Content -->
        <div class="container">
        <!--Grid row-->
        <div class="row mt-5">
            <!--Grid column for Text-->
            <div class="col-md-6 mb-5 mt-md-0 mt-5">
            <h1 class="h1-responsive wow fadeInLeft" data-wow-delay="0.3s" style="font-family: Quicksand; color:#000000;">
            Admin Home! </h1>
            <hr class="hr-light wow fadeInLeft" data-wow-delay="0.3s">
            <br>
            </div>
        </div>
            
        <div class="row mt-5">
            <!--Form-->
                <div class="text-right">
                    <button type= "submit" class="btn btn-rounded" style="width:100px; background-color:#12355B; color:#ffffff;">
                    Add an event</button>
                </div>

                <div class="text-right">
                    <button type= "submit" class="btn btn-rounded" style="width:100px; background-color:#12355B; color:#ffffff;">
                    Update an event</button>
                </div>

                <div class="text-right" style="padding-right:35px;">
                    <button type= "submit" class="btn btn-rounded" style="width:100px; background-color:#12355B; color:#ffffff;">
                    Delete an event</button>
                </div>
        </div>
    </div>
        
</body>

<!-- Footer -->
<footer class="page-footer font-small pt-4" style="background-color:#12355B; width: 100%; position:fixed; bottom: 0;">

  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

        <div class="col-md-1"></div>

        <!-- Grid column -->
        <div class="col-md-4 mt-md-0 mt-3">
            <!-- Content -->
            <h5 class="text-uppercase"><img src="logo.svg"></h5>
            <p>Pin Events is here to make your campus experience a worthwhile one.</p>
        </div>
        <div class="col-md-1"></div>

        <!-- Grid column -->
        <hr class="clearfix w-100 d-md-none pb-3">

        <!-- Grid column -->
        <div class="col-md-2 mb-md-0 mb-3">

            <!-- Links -->
            <h6 class="text-uppercase">Use Pin Events</h6>

            <ul class="list-unstyled">
            <li>
                <a href="index.php" style="color:#A9A9A9;">Home</a>
            </li>
            <li>
                <a href="about.php" style="color:#A9A9A9;">About</a>
            </li>
            <li>
                <a href="#" style="color:#A9A9A9;">Login</a>
            </li>
            <li>
            <a href="#" style="color:#A9A9A9;">Sign Up</a>
            </li>
            </ul>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 mb-md-0 mb-3">

            <!-- Links -->
            <h6 class="text-uppercase">Find Events</h6>

            <ul class="list-unstyled">
            <li>
                <a href="#" style="color:#A9A9A9;">ASC Event</a>
            </li>
            <li>
                <a href="#" style="color:#A9A9A9;">Information Sessions</a>
            </li>
            <li>
                <a href="#" style="color:#A9A9A9;">Student Businesses</a>
            </li>
            <li>
            <a href="#" style="color:#A9A9A9;">Student Clubs</a>
            </li>
            </ul>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
      <div class="col-md-2 mb-md-0 mb-3">

        <h6 class="text-uppercase">Contact Us</h6>
        <!-- Facebook -->
        <a class="fb-ic">
            <i class="fab fa-facebook-f fa-lg white-text mr-md-3 mr-3 fa-1x"> </i>
        </a>
        <!-- Twitter -->
        <a class="tw-ic">
            <i class="fab fa-twitter fa-lg white-text mr-md-3 mr-3 fa-1x"> </i>
        </a>
        <!--Instagram-->
        <a class="ins-ic">
            <i class="fab fa-instagram fa-lg white-text mr-md-3 mr-3 fa-1x"> </i>
        </a>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2019 Copyright:
    <a href="about.php"> Pin Events</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

</html>