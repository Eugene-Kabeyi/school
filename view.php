<?php
include "header1.php";

$link = mysqli_connect("localhost", "root", "", "motor");

if(isset($_GET['id']) and !empty($_GET['id'])){
    $id =$_GET["id"];

    $sql ="SELECT * FROM `users` WHERE id='$id'";

    $result= mysqli_query($link,$sql);

    if($result){
        $data= mysqli_num_rows($result);

        if($data == 1){
            $row =mysqli_fetch_array($result);
            $admissionNo =$row['admission'];
            $class=$row['class'];
            $fullname = $row['fullname'];
            $email = $row['email'];
            $phonenumber = $row['phone'];
            $location = $row['location'];
            $dob = $row['dob'];
            $gender = $row['gender'];
            $photo= $row['photo'];

            $filepath="uploads/$photo";

            ?>
            <title>User Data</title>
            <div class="row m-2">
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div>
                                <img src="<?php echo $filepath; ?>" alt="Loading..." height="150" width="150" class="rounded-circle">
                            </div>
                            <div>
                                <label class="form-label h6">ADMISSION NUMBER</label>
                                <p><?php echo $admissionNo ?></p>
                            </div>

                            <div>
                                <label class="form-label h6">FULL NAME</label>
                                <p><?php echo $fullname ?></p>
                            </div>

                            <div>
                                <label class="form-label h6">CLASS</label>
                                <p><?php echo $class ?></p>
                            </div>
                        </div>



                    </div>

                </div>

                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div>
                                <label class="form-label h6">EMAIL</label>
                                <p><?php echo $email ?></p>
                            </div>
                            <div>
                                <label class="form-label h6">PHONE NUMBER</label>
                                <p><?php echo $phonenumber ?></p>
                            </div>

                        </div>
                    </div>
                </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div>
                                    <label class="form-label h6">DOB</label>
                                    <p><?php echo $dob ?></p>
                                </div>
                                <div>
                                    <label class="form-label h6">GENDER</label>
                                    <p><?php echo $gender ?></p>
                                </div>

                            </div>

                        </div>
                    </div>

            </div>

          <?php

        }

    }else{
        echo "Error executing query $sql".mysqli_error($link);
    }

}




