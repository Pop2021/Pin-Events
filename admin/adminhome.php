<?php
require('../session.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/admin.css" type="text/css">
    
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

    <title>Home</title>
</head>

<body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar" style="position: absolute;">

        <!-- Navbar brand for logo -->
        <a class="navbar-brand" href="index.php">
            <img src="../images/logo.svg" alt="Logo">
        </a>

        <!-- Links to Nav Items-->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home
                    <span class="sr-only">(current)</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="../index.php">Logout</a>
            </li>
        </ul>
    </nav>
    <!--Navbar-->


    <!--Background Image-->
    <div class="bg view">
        <div class="mask flex-center rgba-black-strong"></div>

    <!-- Mask & flexbox options-->
    <div class="mask rgba-gradient align-items-center">
        <!-- Content -->
        <div class="container">
        <!--Grid row-->
        <div class="row mt-5">
            <!--Grid column for Text-->
            <div class="col-md-6 mb-5 mt-md-0 mt-5 white-text text-center text-md-left">
            <br><br><br><br><br>
            <h1 class="h1-responsive wow fadeInLeft" data-wow-delay="0.3s" style="font-family: Quicksand">PinEvents Admin</h1>
            <hr class="hr-light wow fadeInLeft" data-wow-delay="0.3s">
            <br>
            <h5 class="mb-3 wow fadeInLeft" data-wow-delay="0.3s" style="font-family: Quicksand">
            This page is for organizers to add, update and/or delete events</h6>

            <a class="btn" style="background-color:#12355B; color:#ffffff;" role="button" href="adminhome.php">Add Event</a>

            <a class="btn" style="background-color:#ffffff; color:#12355B;" role="button" href="updateevent.php">Update Event</a>

            <a class="btn" style="background-color:#ffffff; color:#12355B;" role="button" href="deleteevent.php">Delete Event</a>            
            </div>

            <div class ="col-md-1"></div>
            
            <!--Grid column for Form-->
            <div class="col-md-6 col-xl-5 mb-4">
            <br><br>

            <!-- Material form login -->
            <div class="card">

                <h5 class="card-header" style="color: #12355B;">
                    <strong>Add an Event</strong>
                </h5>

                <!--Card content-->
                <div class="card-body px-lg-5 pt-0">

                    <!-- Form -->
                    <form class="text-center" action="addeventproc.php" method="POST">

                        <!-- Event Name -->
                        <div class="md-form">
                        <input type="text" id="eventname" name="eventName" class="form-control">
                        <label for="eventname">Event Name</label>
                        </div>

                        <!-- Venue -->
                        <div class="md-form py-1">
                        <input type="text" id="eventvenue" name="eventVenue" class="form-control">
                        <label for="eventvenue">Venue</label>
                        </div>

                        <!-- Date -->
                        <div class="md-form py-1">
                        <input type="date" id="eventdate" name="eventDate" class="form-control">
                        <label for="eventname">Date</label>
                        </div>

                        <!-- Start Time -->
                        <div class="md-form py-1">
                        <input type="time" id="eventstart" name="startTime" class="form-control">
                        <label for="eventname">Start time</label>
                        </div>

                        <!-- End Time -->
                        <div class="md-form py-1">
                        <input type="time" id="eventend" name="endTime" class="form-control">
                        <label for="eventname">End time</label>
                        </div>

                        <!-- Description -->
                        <div class="md-form">
                        <input type="text" id="eventdesc" name="eventDesc" class="form-control">
                        <label for="eventdesc">Description</label>
                        </div>

                        <!-- Add event button -->
                        <button type= "submit" name ="addevent" class="btn btn-rounded" style="width:100%; 
                        background-color:#12355B; color:#ffffff;" data-toggle="modal" data-target="#modalAdd">Add</button>
                    </form>
                    <!-- Form -->

                    <!--Sign up modal form-->
                    <div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header text-center">
                            <h4 class="modal-title w-100 font-weight-bold">Event added</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
</body>

</html>