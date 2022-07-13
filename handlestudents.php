<?php

include "header1.php";
$link = mysqli_connect("localhost", "root", "", "motor");

if (isset($_POST["submit"])) {
    $fullname = $_POST["fullName"];
    $admissionNo = $_POST["admissionNo"];
    $stream = $_POST["stream"];
    $email = $_POST["emailAddress"];
    $phone = $_POST["phoneNumber"];
    $location = $_POST["location"];
    $dob = $_POST["dob"];
    $gender = $_POST["gender"];

    $photoname = $_FILES["photo"]["name"];
    $tempname = $_FILES["photo"]["tmp_name"];
    $folder = "uploads/".$photoname;

    $cvname = $_FILES["cv"]["name"];
    $cvtempname = $_FILES["cv"]["tmp_name"];
    $cvfolder = "uploads/".$cvname;


    $sql = "INSERT INTO `users`( `admission`, `class`, `fullname`, `email`, `phone`, `location`, `dob`, `gender`, `photo`, `cv`) 
                 VALUES ('$admissionNo','$stream','$fullname','$email','$phone','$location','$dob ','$gender','$photoname','$cvname')";

    $result = mysqli_query($link,$sql);

    if (move_uploaded_file($tempname,$folder)) {
        echo "<p class='alert alert-success'>Image has been uploaded</p>";
    } else {
        echo "Error uploading image";
    }

    if (move_uploaded_file($cvtempname,$cvfolder)) {
        echo "<p class='alert alert-success'>Cv has been uploaded</p>";
    } else {
        echo "Error uploading cv";
    }

    if ($result) {
        echo "<p class='alert alert-success'>Details stored successfully</p>";
    } else {
        echo "Error executing query $sql".mysqli_error($link);
    }
}



































