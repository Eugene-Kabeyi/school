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
            <div class="col-md-3 col-lg-3 bg-danger">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">
                            <i class="fa fa-graduation-cap text-white fa-4x"></i>
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
                        <a class="nav-link " href="netofkin.php.">
                            <i class="fa fa-male text-white fa-2x p-2"></i>
                            <i class="fa fa-female  text-white fa-2x p-2"></i>
                            <span class="text-white h5">Parents & Guardians</span>
                        </a>
                    </li>

                    <li class="nav-item navsep">
                        <a class="nav-link " href="arrival.php">
                            <i class="fa fa-map-marker text-white fa-2x p-2"></i>
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
                <div class="row m-2">
                    <div class="col-sm-7">
                        <h3 class="text-secondary">Dashboard</h3>
                    </div>
                    <div class="col-sm-5 ">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Launch demo modal
                         </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Welcome to Admin Panel</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        This is a system developed by motor class in E-mobilis
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row m-2">

                    <div class="col-sm">
                        <div class="card">
                            <div class="card-body border-primary border-left-primary">
                                <span>EARNINGS</span>
                                <span class="float-end">
                                    <i class="fa fa-dollar fa-2x fa-lg "></i>
                                   </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm">
                        <div class="card">
                            <div class="card-body border-primary border-left-warning">
                                <span>TASKS</span>
                                <span class="float-end">
                                    <i class="fa fa-bars fa-2x fa-lg "></i>
                                   </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm">
                        <div class="card">
                            <div class="card-body border-primary border-left-success">
                                <span>REQUESTS</span>
                                <span class="float-end">
                                 <i class="fa fa-comments fa-2x fa-lg "></i>
                                </span>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row m-2">

                    <div class="col-sm-6 col-lg-6">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                 <h5>School Motto:</h5>
                                </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Elimu ni Ufunguo.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                  <h5>Mission:</h5>
                                </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">To provide wholesome education to boys and girls and mould them to all-round members of the society.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                        <h5>Vision:</h5>
                                </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Elimu school growing, mentoring and leading the society.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-6">
                        <div class="bg-white">
                            <div class="m-2 p-2">
                                <span>Student Orientation</span>
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                </div>
                            </div>

                            <div class="m-2 p-2">
                                <span>Student Admission</span>
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                                </div>
                            </div>

                            <div class="m-2 p-2">
                                <span>Exam Results</span>
                                <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                                </div>
                            </div>

                            <div class="m-2 p-2">
                                <span>Student Arrival</span>
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row m-2">
                    <div class="col-sm-6">
                        <div class="bg-white">
                            <img src="images/elimu1.jpg" alt="Loading..." height="400" width="400"> </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="bg-white">
                            <iframe width="400" height="400" src="https://www.youtube.com/embed/FC3RzgPPgoc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> </div>
                    </div>
                </div>

            </div>
        </div>
</body>

</html>

</html>