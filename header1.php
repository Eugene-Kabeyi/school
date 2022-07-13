<?php
$link = mysqli_connect("localhost","root","","motor");

session_start();

if($_SESSION["loggedin"]!== true){
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">



    


    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet " href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/jquery.min.js "></script>
    <script src="bootstrap/js/bootstrap.min.js "></script>

</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-lg-3 bg-danger">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">
                            <i class="fa fa-graduation-cap text-white fa-5x"></i>
                            <span class="h4 text-white">ELIMU HIGH SCHOOL</span>
                        </a>
                    </li>
                    <hr class="bg-white">


                    <li class="nav-item navsep">
                        <a class="nav-link " href="dashboard.php">
                            <i class="fa fa-dashboard text-white fa-2x p-2"></i>
                            <span class="text-white h5">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item navsep">
                        <a class="nav-link " href="students.php">
                            <i class="fa fa-users text-white fa-2x p-2"></i>
                            <span class="text-white h5">Students</span>
                        </a>
                    </li>



                    <li class="nav-item navsep">
                        <a class="nav-link " href="documents.php">
                            <i class="fa fa-file text-white fa-2x p-2"></i>
                            <span class="text-white h5">Documents</span>
                        </a>
                    </li>


                    <li class="nav-item navsep">
                        <a class="nav-link " href="verification1.php">
                            <i class="fa fa-dollar text-white fa-2x p-2"></i>
                            <span class="text-white h5">School Fees</span>
                        </a>
                    </li>

                    <li class="nav-item navsep">
                        <a class="nav-link " href="verification.php">
                            <i class="fa fa-wpforms text-white fa-2x p-2"></i>
                            <span class="text-white h5">Exam results</span>
                        </a>
                    </li>

                    <li class="nav-item navsep">
                        <a class="nav-link " href="netofkin.php">
                            <i class="fa fa-male text-white fa-2x p-2" class="fa fa-female  text-white fa-2x p-2"></i>
                            <i class="fa fa-female  text-white fa-2x p-2"></i>
                            <span class="text-white h5"> Parents & Guardians </span>
                        </a>
                    </li>

                    <li class="nav-item navsep">
                        <a class="nav-link " href="arrival.php">
                            <i class="fa fa-map-marker  text-white fa-2x p-2"></i>
                            <span class="text-white h5">Student Arrival</span>
                        </a>
                    </li>

                    <li class="nav-item navsep">
                        <a class="nav-link " href="logout.php">
                            <i class="fa fa-wrench text-white fa-2x p-2"></i>
                            <span class="text-white h5">Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-9 col-lg-9 bg-light">
                <div class=" row bg-white">
                    <div class="col-md-7 cl-lg-7 ">
                        <nav class="navbar navbar-light">
                            <div class="container-fluid ">
                                <form class="d-flex ">
                                    <input class="form-control me-2 " type="search " placeholder="Search " aria-label="Search ">
                                    <button class="btn btn-outline-primary " type="submit ">Search</button>
                                </form>
                            </div>
                        </nav>
                    </div>
                    <div class="col-md-5 cl-lg-5">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <div class="container-fluid">
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                              </button>
                                <div class="collapse navbar-collapse" id="navbarText">
                                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                        <li class="nav-item">
                                            <a class="nav-link active" aria-current="page" href="#">

                                                <i class="fa fa-bell fa-lg text-secondary"></i>
                                                <span class="badge bg-danger rounded-pill">8+</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">

                                                <i class="fa fa-envelope fa-lg text-secondary"></i>
                                                <span class="badge bg-danger rounded-pill">8+</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Dan Kuro |</a>
                                        </li>

                                        <li class="nav-item">
                                            <img src="images/chicken.jpg" alt="Loading..." class="rounded-circle " height="50" width="50">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        
                        </nav>

                    </div>

            </div>


