<?php
$link = mysqli_connect("localhost","root","","motor");

include "header1.php";
if(isset($_POST["submit"])){

    $admissionNo = $_POST["admissionNo"];
    $sfullname = $_POST["sfullname"];
    $math=$_POST["math"];
    $eng =$_POST["eng"];
    $kis=$_POST["kis"];
    $chem=$_POST["chem"];
    $bio=$_POST["bio"];
    $phy=$_POST["phy"];
    $geo=$_POST["geo"];
    $histo=$_POST["histo"];
    $cre=$_POST["cre"];
    $ire=$_POST["ire"];
    $ger=$_POST["ger"];
    $french=$_POST["french"];
    $agric=$_POST["agric"];
    $metal=$_POST["metal"];


    if($math=="Y" or$eng=="Y"or$kis=="Y" or$chem=="Y" or $bio=="Y" or$phy=="Y" or$geo=="Y" or$histo=="Y" or$cre=="Y" or$ire=="Y" or $ger=="Y" or$french=="Y" or$agric=="Y" or$metal=="Y" ){
        $total="Irregularity";
    }elseif ($math=="X" or$eng=="X"or$kis=="X" or$chem=="X" or $bio=="X" or$phy=="X" or$geo=="X" or$histo=="X" or$cre=="X" or$ire=="X" or $ger=="X" or$french=="X" or$agric=="X" or$metal=="X" ){
        $total="Exam not completed";
    }else{
        $total=$math+$eng+$kis+$chem+ $bio+$phy+$geo+$histo+$cre+$ire+$geo+$french+$agric+$metal;
    }

    $sql ="SELECT * FROM `users` WHERE admission='$admissionNo'  AND fullname='$sfullname'";

    $result= mysqli_query($link,$sql);
    if($result){

        $data= mysqli_num_rows($result);

        if( $data == 1){
            $sql1 ="INSERT INTO `examination`( `admission`, `fullname`, `math`, `english`, `kiswahili`, `chemistry`, `biology`, `physics`, `geography`, `history`, `cre`, `ire`, `german`, `french`, `agriculture`, `metalwork`,`total`) 
                   VALUES ('$admissionNo','$sfullname','$math','$eng','$kis','$chem','$bio','$phy','$geo','$histo','$cre','$ire','$ger','$french','$agric','$metal','$total')";
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
?>
<title>Exam Results</title>

<form action="#" method="post" enctype="multipart/form-data">


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
            <input class="form-control" type="text" name="sfullname">
        </div>
        <div>
        <hr style="2px solid grey">
        </div>

    </div>
  <div class="row m-2">
      <br>
      <br>
      <div><h2 class="text-danger">Examination Details</h2></div>
    <div class="row m-2">
        <div class="col-md-6">
            <label class="form-label grey">Mathematics</label>
            <input class="form-control" type="text" name="math" placeholder="">
        </div>
        <div class="col-md-6">
            <label class="form-label grey">English</label>
            <input class="form-control" type="text" name="eng">
        </div>

    </div>

    <div class="row m-2">
        <div class="col-md-6">
            <label class="form-label grey">Kiswahili</label>
            <input class="form-control" type="text" name="kis" placeholder="" >
        </div>
        <div class="col-md-6">
            <label class="form-label grey">Chemistry</label>
            <input class="form-control" type="text" name="chem">
        </div>

    </div>

      <div class="row m-2">
        <div class="col-md-6">
            <label class="form-label grey">Biology</label>
            <input class="form-control" type="text" name="bio" placeholder="">
        </div>
        <div class="col-md-6">
            <label class="form-label grey">Physics</label>
            <input class="form-control" type="text" name="phy">
        </div>
      </div>
        <div class="row m-2">
            <div class="col-md-6">
                <label class="form-label grey">Geography</label>
                <input class="form-control" type="text" name="geo" placeholder="">
            </div>
            <div class="col-md-6">
                <label class="form-label grey">History</label>
                <input class="form-control" type="text" name="histo">
            </div>

        </div>

        <div class="row m-2">
            <div class="col-md-6">
                <label class="form-label grey">CRE</label>
                <input class="form-control" type="text" name="cre" placeholder="">
            </div>
            <div class="col-md-6">
                <label class="form-label grey">IRE</label>
                <input class="form-control" type="text" name="ire">
            </div>

        </div>
        <div class="row m-2">
            <div class="col-md-6">
                <label class="form-label grey">German</label>
                <input class="form-control" type="text" name="ger" placeholder="">
            </div>
            <div class="col-md-6">
                <label class="form-label grey">French</label>
                <input class="form-control" type="text" name="french">
            </div>
            <div>

            </div>

        </div>
        <div class="row m-2">
            <div class="col-md-6">
                <label class="form-label grey">Agriculture</label>
                <input class="form-control" type="text" name="agric" placeholder="">
            </div>
            <div class="col-md-6">
                <label class="form-label grey">Metalwork</label>
                <input class="form-control" type="text" name="metal">
            </div>
  </div>





    <div class="row m-2 p-2">
        <div class="text-center">
           <input type="submit" name="submit" class="col-6 btn btn-danger" value="SUBMIT">
        </div>

    </div>
</form>
<?php
if($math>0 and $math<=30){
    $grade="E";
}elseif($math>30 and $math<=50) {
    $grade = "D";
}elseif($math>50 and $math<=70) {
    $grade = "C";
}elseif($math>70 and $math<=85) {
    $grade = "B";
}elseif($math>85 and $math<=100) {
    $grade = "A";
}elseif($math=="Y") {
    $grade = "Y";
}elseif($math=="X") {
    $grade = "X";
}else{$grade ="ERROR IN MARKS ENTERED";}

if($eng>0 and $eng<=30){
    $grade="E";
}elseif($eng>30 and $eng<=50) {
    $grade = "D";
}elseif($eng>50 and $eng<=70) {
    $grade = "C";
}elseif($eng>70 and $eng<=85) {
    $grade = "B";
}elseif($eng>85 and $eng<=100) {
    $grade = "A";
}elseif($eng=="Y") {
    $grade = "Y";
}elseif($eng=="X") {
    $grade = "X";
}else{$grade ="ERROR IN MARKS ENTERED";}

if($kis>0 and $kis<=30){
    $grade="E";
}elseif($kis>30 and $kis<=50) {
    $grade = "D";
}elseif($kis>50 and $kis<=70) {
    $grade = "C";
}elseif($kis>70 and $kis<=85) {
    $grade = "B";
}elseif($kis>85 and $kis<=100) {
    $grade = "A";
}elseif($kis=="Y") {
    $grade = "Y";
}elseif($kis=="X") {
    $grade = "X";
}else{$grade ="ERROR IN MARKS ENTERED";}

if($chem>0 and $chem<=30){
    $grade="E";
}elseif($chem>30 and $chem<=50) {
    $grade = "D";
}elseif($chem>50 and $math<=70) {
    $grade = "C";
}elseif($chem>70 and $chem<=85) {
    $grade = "B";
}elseif($chem>85 and $chem<=100) {
    $grade = "A";
}elseif($chem=="Y") {
    $grade = "Y";
}elseif($chem=="X") {
    $grade = "X";
}else{$grade ="ERROR IN MARKS ENTERED";}

if($bio>0 and $bio<=30){
    $grade="E";
}elseif($bio>30 and $bio<=50) {
    $grade = "D";
}elseif($bio>50 and $bio<=70) {
    $grade = "C";
}elseif($bio>70 and $bio<=85) {
    $grade = "B";
}elseif($bio>85 and $bio<=100) {
    $grade = "A";
}elseif($bio=="Y") {
    $grade = "Y";
}elseif($bio="X") {
    $grade = "X";
}else{$grade ="ERROR IN MARKS ENTERED";}

if($phy>0 and $phy<=30){
    $grade="E";
}elseif($phy>30 and $phy=50) {
    $grade = "D";
}elseif($phy>50 and $phy<=70) {
    $grade = "C";
}elseif($phy>70 and $phy<=85) {
    $grade = "B";
}elseif($phy>85 and $phy<=100) {
    $grade = "A";
}elseif($phy=="Y") {
    $grade = "Y";
}elseif($phy=="X") {
    $grade = "X";
}else{$grade ="ERROR IN MARKS ENTERED";}

if($geo>0 and $geo<=30){
    $grade="E";
}elseif($geo>30 and $geo<=50) {
    $grade = "D";
}elseif($geo>50 and $geo<=70) {
    $grade = "C";
}elseif($geo>70 and $geo<=85) {
    $grade = "B";
}elseif($geo>85 and $geo<=100) {
    $grade = "A";
}elseif($geo=="Y") {
    $grade = "Y";
}elseif($geo=="X") {
    $grade = "X";
}else{$grade ="ERROR IN MARKS ENTERED";}

if($histo>0 and $histo<=30){
    $grade="E";
}elseif($histo>30 and $histo<=50) {
    $grade = "D";
}elseif($histo>50 and $histo<=70) {
    $grade = "C";
}elseif($histo>70 and $histo<=85) {
    $grade = "B";
}elseif($histo>85 and $histo<=100) {
    $grade = "A";
}elseif($histo=="Y") {
    $grade = "Y";
}elseif($histo=="X") {
    $grade = "X";
}else{$grade ="ERROR IN MARKS ENTERED";}

if($math>0 and $math<=30){
    $grade="E";
}elseif($math>30 and $math<=50) {
    $grade = "D";
}elseif($math>50 and $math<=70) {
    $grade = "C";
}elseif($math>70 and $math<=85) {
    $grade = "B";
}elseif($math>85 and $math<=100) {
    $grade = "A";
}elseif($math=="Y") {
    $grade = "Y";
}elseif($math=="X") {
    $grade = "X";
}else{$grade ="ERROR IN MARKS ENTERED";}


if($math>0 and $math<=30){
    $grade="E";
}elseif($math>30 and $math<=50) {
    $grade = "D";
}elseif($math>50 and $math<=70) {
    $grade = "C";
}elseif($math>70 and $math<=85) {
    $grade = "B";
}elseif($math>85 and $math<=100) {
    $grade = "A";
}elseif($math=="Y") {
    $grade = "Y";
}elseif($math=="X") {
    $grade = "X";
}else{$grade ="ERROR IN MARKS ENTERED";}


if($math>0 and $math<=30){
    $grade="E";
}elseif($math>30 and $math<=50) {
    $grade = "D";
}elseif($math>50 and $math<=70) {
    $grade = "C";
}elseif($math>70 and $math<=85) {
    $grade = "B";
}elseif($math>85 and $math<=100) {
    $grade = "A";
}elseif($math=="Y") {
    $grade = "Y";
}elseif($math=="X") {
    $grade = "X";
}else{$grade ="ERROR IN MARKS ENTERED";}


if($math>0 and $math<=30){
    $grade="E";
}elseif($math>30 and $math<=50) {
    $grade = "D";
}elseif($math>50 and $math<=70) {
    $grade = "C";
}elseif($math>70 and $math<=85) {
    $grade = "B";
}elseif($math>85 and $math<=100) {
    $grade = "A";
}elseif($math=="Y") {
    $grade = "Y";
}elseif($math=="X") {
    $grade = "X";
}else{$grade ="ERROR IN MARKS ENTERED";}


if($math>0 and $math<=30){
    $grade="E";
}elseif($math>30 and $math<=50) {
    $grade = "D";
}elseif($math>50 and $math<=70) {
    $grade = "C";
}elseif($math>70 and $math<=85) {
    $grade = "B";
}elseif($math>85 and $math<=100) {
    $grade = "A";
}elseif($math=="Y") {
    $grade = "Y";
}elseif($math=="X") {
    $grade = "X";
}else{$grade ="ERROR IN MARKS ENTERED";}

if($math>0 and $math<=30){
    $grade="E";
}elseif($math>30 and $math<=50) {
    $grade = "D";
}elseif($math>50 and $math<=70) {
    $grade = "C";
}elseif($math>70 and $math<=85) {
    $grade = "B";
}elseif($math>85 and $math<=100) {
    $grade = "A";
}elseif($math=="Y") {
    $grade = "Y";
}elseif($math=="X") {
    $grade = "X";
}else{$grade ="ERROR IN MARKS ENTERED";}

if($math>0 and $math<=30){
    $grade="E";
}elseif($math>30 and $math<=50) {
    $grade = "D";
}elseif($math>50 and $math<=70) {
    $grade = "C";
}elseif($math>70 and $math<=85) {
    $grade = "B";
}elseif($math>85 and $math<=100) {
    $grade = "A";
}elseif($math=="Y") {
    $grade = "Y";
}elseif($math=="X") {
    $grade = "X";
}else{$grade ="ERROR IN MARKS ENTERED";}

if($math>0 and $math<=30){
    $grade="E";
}elseif($math>30 and $math<=50) {
    $grade = "D";
}elseif($math>50 and $math<=70) {
    $grade = "C";
}elseif($math>70 and $math<=85) {
    $grade = "B";
}elseif($math>85 and $math<=100) {
    $grade = "A";
}elseif($math=="Y") {
    $grade = "Y";
}elseif($math=="X") {
    $grade = "X";
}else{$grade ="ERROR IN MARKS ENTERED";}

if($math>0 and $math<=30){
    $grade="E";
}elseif($math>30 and $math<=50) {
    $grade = "D";
}elseif($math>50 and $math<=70) {
    $grade = "C";
}elseif($math>70 and $math<=85) {
    $grade = "B";
}elseif($math>85 and $math<=100) {
    $grade = "A";
}elseif($math=="Y") {
    $grade = "Y";
}elseif($math=="X") {
    $grade = "X";
}else{$grade ="ERROR IN MARKS ENTERED";}

if($math>0 and $math<=30){
    $grade="E";
}elseif($math>30 and $math<=50) {
    $grade = "D";
}elseif($math>50 and $math<=70) {
    $grade = "C";
}elseif($math>70 and $math<=85) {
    $grade = "B";
}elseif($math>85 and $math<=100) {
    $grade = "A";
}elseif($math=="Y") {
    $grade = "Y";
}elseif($math=="X") {
    $grade = "X";
}else{$grade ="ERROR IN MARKS ENTERED";}

if($math>0 and $math<=30){
    $grade="E";
}elseif($math>30 and $math<=50) {
    $grade = "D";
}elseif($math>50 and $math<=70) {
    $grade = "C";
}elseif($math>70 and $math<=85) {
    $grade = "B";
}elseif($math>85 and $math<=100) {
    $grade = "A";
}elseif($math=="Y") {
    $grade = "Y";
}elseif($math=="X") {
    $grade = "X";
}else{$grade ="ERROR IN MARKS ENTERED";}

if($math>0 and $math<=30){
    $grade="E";
}elseif($math>30 and $math<=50) {
    $grade = "D";
}elseif($math>50 and $math<=70) {
    $grade = "C";
}elseif($math>70 and $math<=85) {
    $grade = "B";
}elseif($math>85 and $math<=100) {
    $grade = "A";
}elseif($math=="Y") {
    $grade = "Y";
}elseif($math=="X") {
    $grade = "X";
}else{$grade ="ERROR IN MARKS ENTERED";}

if($math>0 and $math<=30){
    $grade="E";
}elseif($math>30 and $math<=50) {
    $grade = "D";
}elseif($math>50 and $math<=70) {
    $grade = "C";
}elseif($math>70 and $math<=85) {
    $grade = "B";
}elseif($math>85 and $math<=100) {
    $grade = "A";
}elseif($math=="Y") {
    $grade = "Y";
}elseif($math=="X") {
    $grade = "X";
}else{$grade ="ERROR IN MARKS ENTERED";}
?>









