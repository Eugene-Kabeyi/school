<?php
include "header1.php";

?>
<title>Documents</title>
<br>
<div class="row">
    <div class="col-lg-6">
        <h4 class="text-secondary">View students Results</h4>
    </div>

    <div class="col-lg-6">
        <button class="btn btn-primary float-end">Download Details</button>
    </div>
    <br>
</div>
<?php
$link = mysqli_connect("localhost","root","","motor");
$sql="SELECT `id`, `admission`, `fullname`, `math`, `english`, `kiswahili`, `chemistry`, `biology`, `physics`, `geography`, `history`, `cre`, `ire`, `german`, `french`, `agriculture`, `metalwork`,`total` FROM `examination` WHERE 1";

$result= mysqli_query($link,$sql);
if($result){

    $data= mysqli_num_rows($result);
    if($data>0){

        echo "<br>";
        echo "<table class='table table-striped table-bordered'>";
        echo "<tr>";
        echo "<th>#</th>";
        echo "<th>Admission NO.</th>";
        echo "<th>Full Name</th>";
        echo "<th>Math</th>";
        echo "<th>English</th>";
        echo "<th>Kiswahili</th>";
        echo "<th>Chemistry</th>";
        echo "<th>Biology</th>";
        echo "<th>Physics</th>";
        echo "<th>Geography</th>";

        echo "<th>Total</th>";
        echo "</tr>";

        while ($row= mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['admission']."</td>";
            echo "<td>".$row['fullname']."</td>";
            echo "<td>".$row['math']."</td>";
            echo "<td>".$row['english']."</td>";
            echo "<td>".$row['kiswahili']."</td>";
            echo "<td>".$row['chemistry']."</td>";
            echo "<td>".$row['biology']."</td>";
            echo "<td>".$row['physics']."</td>";
            echo "<td>".$row['geography']."</td>";

            echo "<td>".$row['total']."</td>";
            echo "</tr>";
        }


    }else{
        echo "No data in db";
    }

}else{
    echo "Error executing query $sql".mysqli_error($link);
}



?>
<br>
 <div class="row col-lg-12">
    <a href="documents.php"><button class="btn btn-danger ">Student Details</button></a>
 </div>

<br>

 <div class="row col-lg-12">
    <a href="seefees.php"><button class="btn btn-danger ">Student Fee Balance</button></a>
 </div>
<br>
