<?php


$link = mysqli_connect("localhost", "root", "", "motor");
if (isset($_POST["login"])) {

    $email = $_POST["email"];
    $userpassword = $_POST["password"];

    $sql = "SELECT * FROM `logusers` WHERE email='elimuhighschool@gmail.com'";

    $result = mysqli_query($link, $sql);

    if ($result) {

        $data = mysqli_num_rows($result);

        if ($data == 1) {

            while ($row = mysqli_fetch_array($result)) {
                $id = $row["id"];
                $email = $row["email"];
                $password = $row["password"];

                if (password_verify($userpassword, $password)) {
                    session_start();
                    $_SESSION['loggedin'] = true;
                    $_SESSION['id'] = $id;
                    $_SESSION['username'] = $email;

                    header("location:schoolfees.php");

                } else {
                    echo "<h3>Password doesn't match</h3>";
                }
            }


        } else {
            echo "No data in db";
        }

    } else {
        echo "Error in executing query $sql".mysqli_error($link);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Verification...</title>

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
                        <h4 class="text-primary">Verify account</h4>
                    </div>

                    <form action="#" method="post">

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
                                <input class="btn-primary rounded-pill col-sm-12 text-center" type="submit" name="login" value="Verify user as Admin">
                            </div>
                        </div>

                    </form>

                    <div class="row ">

                        <div class="text-center">
                            <a href="Dashboard.php">Not Admin? CLICK HERE</a>
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

