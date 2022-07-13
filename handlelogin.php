<?php
 $link = mysqli_connect("localhost","root","","motor");
 if(isset($_POST["login"])){

    $email = $_POST["email"];
    $userpassword = $_POST["password"];

    $sql ="SELECT * FROM `logusers` WHERE email='$email'";

    $result= mysqli_query($link,$sql);

    if($result){

        $data= mysqli_num_rows($result);

        if( $data == 1){

            while( $row = mysqli_fetch_array($result)){
                    $id =$row["id"];
                    $email =$row["email"];
                    $password =$row["password"];
                    
                    if(password_verify($userpassword,$password)){
                        session_start();
                        $_SESSION['loggedin']=true;
                        $_SESSION['id']=$id;
                        $_SESSION['username']=$email;

                        header("location:dashboard.php");

                    }else{
                        echo "<h3>Password doesn't match</h3>";
                    }
                }
            

        }else{
            echo "No data in db";
        }

    }else{
        echo "Error in executing query $sql".mysqli_error($link);
    }
}
