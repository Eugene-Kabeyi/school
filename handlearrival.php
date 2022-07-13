<?php
include "header1.php";
$link = mysqli_connect("localhost","root","","motor");
if(isset($_POST["submit"])){

    $admissionNo = $_POST["admissionNo"];
    $class = $_POST["stream"];
    $arrivaltime = $_POST["arrival"];
    $fullname = $_POST["fullName"];


    $sql ="SELECT * FROM `users` WHERE admission='$admissionNo' AND class='$class' AND fullname='$fullname'";

    $result= mysqli_query($link,$sql);

    if($result){

        $data= mysqli_num_rows($result);

        if( $data == 1){
            $sql1 ="INSERT INTO `arrival`( `admission`, `class`, `fullname`, `arrivaltime`) 
                    VALUES ('$admissionNo',' $class ','$fullname','$arrivaltime')";
            $result1 =mysqli_query($link,$sql1);
            if($result1){
                echo "<p class='alert alert-success'>Data successfully recorded</p>";


            }else{
                echo "<p class='alert alert-danger'>Error in executing query $sql1</p>".mysqli_error($link);
            }


        }else{
            echo "<p class='alert alert-danger'>No data in db or error in data entry</p>";
        }

    }else{
        echo "<p class='alert alert-danger'>Error in executing query $sql</p>".mysqli_error($link);
    }
}
