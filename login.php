<?php
 ?>
 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Log in</title>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">


    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/jquery.min.js "></script>
    <script src="bootstrap/js/bootstrap.min.js "></script>
</head>

<body class="bg-primary">
    <div class="container p-4">
        <div class="card">
            <div class="card-body">
                <div class="row">

                    <div class="col-md-5 col-lg-5">

                        <img src="images/Elimu-Logo.png" class="rounded" alt="Loading..." height="400" width="350">
                    </div>

                    <div class="col-md-7 col-lg-7">
                        <div class="text-center">
                            <h4 class="text-primary">Log in</h4>
                        </div>

                        <form action="handlelogin.php" method="post">
                           
                            <div class="row mb-3">
                                <div class="col-md col-lg">
                                    <input type="email" class="form-control rounded-pill" name="email" placeholder="e.g eugene@gmail.com">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-6 col-lg-6">
                                    <input type="password" class="form-control rounded-pill" name="password" placeholder="Enter password">
                                </div>

                            </div>
                            <div class="row mb-3">
                                <div class="col-md col-lg">
                                    <input class="btn-primary rounded-pill col-sm-12 text-center" type="submit" name="login" value="Login">
                                </div>
                            </div>

                        </form>

                        <div class="row ">

                            <div class="text-center">
                                <a href="Register.php">Don't have an account? Signup here</a>
                            </div>

                            <div class="text-center">
                                <a href="">Forgot Password? Click here</a>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
</body>

</html>