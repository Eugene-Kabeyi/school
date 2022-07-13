<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>





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
        <div class="col-md-3 col-lg-3 bg-primary">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="#">
                        <i class="fa fa-codepen text-white fa-3x"></i>
                        <span class="h4 text-white">Admin Panel</span>
                    </a>
                </li>
                <hr class="bg-white">


                <li class="nav-item navsep">
                    <a class="nav-link " href="#">
                        <i class="fa fa-dashboard text-white fa-2x p-2"></i>
                        <span class="text-white h5">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item navsep">
                    <a class="nav-link " href="students.php">
                        <i class="fa fa-users text-white fa-2x p-2"></i>
                        <span class="text-white h5">Users</span>
                    </a>
                </li>

                <li class="nav-item navsep">
                    <a class="nav-link " href="#">
                        <i class="fa fa-cogs text-white fa-2x p-2"></i>
                        <span class="text-white h5">Components</span>
                    </a>
                </li>


                <li class="nav-item navsep">
                    <a class="nav-link " href="#">
                        <i class="fa fa-file text-white fa-2x p-2"></i>
                        <span class="text-white h5">Documents</span>
                    </a>
                </li>

                <li class="nav-item navsep">
                    <a class="nav-link " href="#">
                        <i class="fa fa-line-chart text-white fa-2x p-2"></i>
                        <span class="text-white h5">Charts</span>
                    </a>
                </li>


                <li class="nav-item navsep">
                    <a class="nav-link " href="#">
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
                                        <a class="nav-link" href="#">Dan Kuro</a>
                                    </li>

                                    <li class="nav-item">
                                        <img src="images/chicken.jpg" alt="Loading..." class="rounded-circle " height="50" width="50">
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </nav>

                </div>
                <div class="col-md-6">

                    <div class="row m-2">
                        <div class="col-md-6">
                            <label class="form-label grey">Full Name</label>
                            <input class="form-control" type="text" name="fullName" placeholder="">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label grey">Email Adress</label>
                            <input class="form-control" type="text" name="emailAddress">
                        </div>

                    </div>
                    <div class="row m-2 p-2">
                        <div class="col-md-6">
                            <label class="form-label grey">Phone Number</label>
                            <input class="form-control" type="text" name="phoneNumber">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label grey">Address Location</label>
                            <input class="form-control" type="text" name="location" >
                        </div>

                    </div>
                    <div class="row m-2 p-2">
                        <div class="col-md-6">
                            <label class="form-label grey">Date of Birth</label>
                            <input class="form-control" type="date" name="dob" >
                        </div>
                        <div class="col-md-6">
                            <label class="form-label grey">Gender</label>
                            <select class="form-control" name="gender">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col-md-12">
                            <label class="form-label grey">Your Photo</label>
                            <input class="form-control" type="file" name="photo">

                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col-md-12">
                            <label class="form-label grey">Your CV</label>
                            <input class="form-control" type="file" name="cv">

                        </div>

                    </div>
                    <div class="row m-2 p-2">
                        <div class="text-center">
                            <input type="submit" name="submit" class="col-6 btn btn-danger" value="SUBMIT">
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>


</body>
</html>

