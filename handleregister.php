<?php
 $link = mysqli_connect("localhost","root","","motor");

 if(isset($_POST["register"])){

   $firstname =$_POST ["fname"];
   $secondname =$_POST["sname"];
   $email=$_POST["email"];
   $password =$_POST["password"];
   $confirm_pass=$_POST["cpassword"];
  
   if($password != $confirm_pass){
       $c_pass_error = "Password doesn't match";
       echo "$c_pass_error";
   }
   
   if(strlen($password)<6){
       $l_pass_error="Password must have six characters";
       echo "$l_pass_error";
   }

   if(empty($l_pass_error) and empty($c_pass_error)){
       $store_pass =password_hash($password,PASSWORD_DEFAULT);
   }
   $sql= "INSERT INTO `logusers`( `firstname`, `secondname`, `email`, `password`) 
      VALUES ('$firstname','$secondname','$email','$store_pass')";

   $result = mysqli_query($link,$sql);

   if($result){
       echo "You have been Registered";

   }else{
       echo "error executing  query $sql".mysqli_error($link);

   }

 }
?>