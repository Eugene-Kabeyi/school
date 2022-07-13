<?php
include "header1.php";
$link = mysqli_connect("localhost", "root", "", "motor");

if(isset($_POST['update'])){
    $id=$_POST["id"];
    $fullname = $_POST["fullName"];
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


    $sql ="UPDATE `students` SET `fullname`='$fullname',`email`='$email ',`phonenumber`='$phone',
                      `location`='$location',`dob`=' $dob',`gender`='$gender',`photo`='$photoname',`cv`='$cvname' WHERE id='$id'";

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

