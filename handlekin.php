<?php
include "header1.php";
$link = mysqli_connect("localhost","root","","motor");
if(isset($_POST["submit"])){

    $admissionNo = $_POST["admissionNo"];
    $sfullname = $_POST["sfullName"];

    $fafullname = $_POST["fafullName"];
    $faemail = $_POST["faemail"];
    $faphone = $_POST["faphone"];

    $faphotoname =$_FILES["faphoto"] ["name"];
    $fatempname = $_FILES["faphoto"]["tmp_name"];
    $fafolder = "uploads/".$faphotoname;

    $mofull = $_POST["mofull"];
    $moemail = $_POST["moemail"];
    $mophone = $_POST["mophone"];
    $address =$_POST["address"];

    $mophotoname =$_FILES["mophoto"] ["name"];
    $motempname = $_FILES["mophoto"]["tmp_name"];
    $mofolder = "uploads/".$mophotoname;

    $g1Name = $_POST["g1Name"];
    $g1email = $_POST["g1email"];
    $g1phone = $_POST["g1phone"];
    $g1gender = $_POST["g1gender"];

    $g1photoname =$_FILES["g1photo"] ["name"];
    $g1tempname = $_FILES["g1photo"]["tmp_name"];
    $g1folder = "uploads/".$g1photoname;

    $g2Name = $_POST["g2Name"];
    $g2email = $_POST["g2email"];
    $g2phone = $_POST["g2phone"];
    $g2gender = $_POST["g2gender"];
    $gaddress = $_POST["gaddress"];

    $g2photoname =$_FILES["g2photo"] ["name"];
    $g2tempname = $_FILES["g2photo"]["tmp_name"];
    $g2folder = "uploads/".$g2photoname;





    $sql ="SELECT * FROM `users` WHERE admission='$admissionNo'  AND fullname='$sfullname'";

    $result= mysqli_query($link,$sql);

    if($result){

        $data= mysqli_num_rows($result);

        if( $data == 1){

            if (move_uploaded_file($fatempname,$fafolder)) {
                echo "<p class='alert alert-success'>Fathers image has been uploaded</p>";
            } else {
                echo "<p class='alert alert-danger'>Error uploading Father's image.</p>";
            }

            if (move_uploaded_file($motempname,$mofolder)) {
                echo "<p class='alert alert-success'>Mothers has been uploaded</p>";
            } else {
                echo "<p class='alert alert-danger'>Error uploading Mother's image.</p>";
            }

            if (move_uploaded_file($g1tempname,$g1folder)) {
                echo "<p class='alert alert-success'>Guardian 1 image has been uploaded</p>";
            } else {
                echo "<p class='alert alert-danger'>Error uploading Guardian 1 image.</p>";
            }

            if (move_uploaded_file($g2tempname,$g2folder)) {
                echo "<p class='alert alert-success'>Guardian 2 image has been uploaded</p>";
            } else {
                echo "<p class='alert alert-danger'>Error uploading Guardian 2 image.</p>";
            }

            $sql1 ="INSERT INTO `parent`(`admission`,`fathersname`, `fatheremail`, `fatherphone`, `fatherphoto`, `mothersname`, `motheremail`, `motherphone`, `motherphoto`, `address`) 
                      VALUES ('$admissionNo','$fafullname ','$faemail','$faphone','$faphotoname','$mofull','$moemail',' $mophone ','$mophotoname ','$address')";
            $result1 =mysqli_query($link,$sql1);
            if($result1){
                echo "<p class='alert alert-success'>Parent's Data successfully recorded</p>";


            }else{
                echo "<p class='alert alert-danger'>Error in executing query $sql1</p>".mysqli_error($link);
            }

            $sql2 ="INSERT INTO `guardian`(`admission`,`g1name`, `g1email`, `g1phone`, `g1gender`, `g1photo`, `g2name`, `g2email`, `g2phone`, `g2gender`, `g2photo`, `address`) 
                        VALUES ('$admissionNo','$g1Name ','$g1email',' $g1phone','$g1gender','$g1photoname','$g2Name','$g2email','$g2phone','$g2gender','$g2photoname','$gaddress')";
            $result2 =mysqli_query($link,$sql1);
            if($result2){
                echo "<p class='alert alert-success'>Guardian's Data successfully recorded</p>";


            }else{
                echo "<p class='alert alert-danger'>Error in executing query $sql2</p>".mysqli_error($link);
            }

        }else{
            echo "<p class='alert alert-danger'>No data in db or error in data entry</p>";
        }

    }else{
        echo "<p class='alert alert-danger'>Error in executing query $sql</p>".mysqli_error($link);
    }
}

