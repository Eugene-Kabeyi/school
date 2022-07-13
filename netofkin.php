<?php
include "header1.php";
?>
<title>Kin Details</title>

<form action="handlekin.php" method="post" enctype="multipart/form-data">


    <div class="row m-2">
        <br>
        <br>
        <div><h2 class="text-danger">Student Details</h2></div>
        <div class="col-md-6">
            <label class="form-label grey">Admission Number</label>
            <input class="form-control" type="text" name="admissionNo" placeholder="">
        </div>
        <div class="col-md-6">
            <label class="form-label grey">Students  Name</label>
            <input class="form-control" type="text" name="sfullName">
        </div>
        <div>
        <hr style="2px solid grey">
        </div>

    </div>
    <div class="row m-2">
        <br>
        <br>
        <div><h2 class="text-danger">Parents Details</h2></div>
        <div><h4>Fathers Details</h4></div>

        <div class="col-md-4">
            <label class="form-label grey">Father's  Name</label>
            <input class="form-control" type="text" name="fafullName" placeholder="">
        </div>
        <div class="col-md-4">
            <label class="form-label grey">Email Address</label>
            <input class="form-control" type="text" name="faemail">
        </div>
        <div class="col-md-4">
            <label class="form-label grey">Phone Number</label>
            <input class="form-control" type="text" name="faphone">
        </div>
    </div>
        <div class="row m-2">
            <div class="col-md-12">
                <label class="form-label grey">Your Photo</label>
                <input class="form-control" type="file" name="faphoto">

            </div>
        </div>

        <hr>

        <div class="row m-2">
            <br>
            <br>
            <div><h4>Mothers Details</h4></div>
            <div class="col-md-4">
                <label class="form-label grey">Mother's  Name</label>
                <input class="form-control" type="text" name="mofull" placeholder="">
            </div>
            <div class="col-md-4">
                <label class="form-label grey">Email Address</label>
                <input class="form-control" type="text" name="moemail">
            </div>
            <div class="col-md-4">
                <label class="form-label grey">Phone Number</label>
                <input class="form-control" type="text" name="mophone">
            </div>
        </div>

            <div class="row m-2">
                <div class="col-md-12">
                    <label class="form-label grey">Your Photo</label>
                    <input class="form-control" type="file" name="mophoto">

                </div>

                <div>
                    <hr style="2px solid grey">
                </div>

            </div>
        <div class="row m-2">
            <br>
            <br>
            <div><h2 class="text-danger">Guardians Details</h2></div>
            <div><h4>Guardian 1 Details</h4></div>
            <div class="col-md-4">
                <label class="form-label grey">Guardians1 Name</label>
                <input class="form-control" type="text" name="g1Name" placeholder="">
            </div>
            <div class="col-md-4">
                <label class="form-label grey">Email Address</label>
                <input class="form-control" type="text" name="g1email">
            </div>
            <div class="col-md-4">
                <label class="form-label grey">Phone Number</label>
                <input class="form-control" type="text" name="g1phone">
            </div>

        </div>
        <div class="row m-2 ">
            <div class="col-md-12">
            <label class="form-label grey">Gender</label>
            <select class="form-control" name="g1gender">
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
            </div>
        </div>

                <div class="row m-2">
                    <div class="col-md-12">
                        <label class="form-label grey">Your Photo</label>
                        <input class="form-control" type="file" name="g1photo">

                    </div>
                </div>
        <hr>
        <div class="row m-2">
            <br>
            <br>
            <div><h4>Guardian 2 Details</h4></div>
            <div class="col-md-4">
                <label class="form-label grey">Guardian2  Name</label>
                <input class="form-control" type="text" name="g2Name" placeholder="">
            </div>
            <div class="col-md-4">
                <label class="form-label grey">Email Address</label>
                <input class="form-control" type="text" name="g2email">
            </div>
            <div class="col-md-4">
                <label class="form-label grey">Phone Number</label>
                <input class="form-control" type="text" name="g2phone">
            </div>


        </div>
        <div class="row m-2">
            <div>
              <label class="form-label grey">Gender</label>
              <select class="form-control" name="g2gender">
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
              </select>
            </div>
        </div>

        <div class="row m-2">
            <div class="col-md-12">
                <label class="form-label grey">Your Photo</label>
                <input class="form-control" type="file" name="g2photo">

            </div>
            <div>
                <hr style="4px solid grey">
            </div>
        </div>

    <div class="row m-2 ">
        <br>
        <br>
        <div><h2 class="text-danger">Parents/Guardian Address</h2></div>
        <div class="col-md-8">
            <label class="form-label grey">Parent Address </label>
            <input class="form-control" type="text" name="address" >
        </div>

        <div class="col-md-8">
        <label class="form-label grey">Guardian Address </label>
        <input class="form-control" type="text" name="gaddress" >
    </div>

    </div>


    <div class="row m-2 p-2">
        <div class="text-center">
            <input type="submit" name="submit" class="col-6 btn btn-danger" value="SUBMIT">
        </div>

    </div>
</form>


