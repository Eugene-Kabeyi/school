<?php

include "header1.php";
?>
<title>School Fees</title>
<form action="handleschoolfees.php" method="post" enctype="multipart/form-data">

    <div class="row m-2">
        <div class="col-md-6">
            <label class="form-label grey">Admission Number</label>
            <input class="form-control" type="text" name="admissionNo" placeholder="">
        </div>
        <div class="col-md-6">
            <label class="form-label grey">Class</label>
            <input class="form-control" type="text" name="stream">
        </div>

    </div>
    <div class="row m-2">
        <div class="col-md-6">
            <label class="form-label grey">Full Name</label>
            <input class="form-control" type="text" name="fullName" placeholder="">
        </div>

    </div>
    <div class="row m-2 p-2">
        <div class="col-md-6">
            <label class="form-label grey">Amount of fees</label>
            <input class="form-control" type="text" name="fees">
        </div>


    </div>


    <div class="row m-2 p-2">
        <div class="text-center">
            <input type="submit" name="submit" class="col-6 btn btn-danger" value="SUBMIT">
        </div>

    </div>
</form>


