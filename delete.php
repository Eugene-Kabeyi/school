<?php
include "header1.php";
$link = mysqli_connect("localhost", "root", "", "motor");
if (isset($_POST["submit"])) {
    $id =$_POST["id"];

    $sql= "DELETE FROM `students` WHERE id=$id";

    $result = mysqli_query($link,$sql);

    if($result){
        header("location:documents.php");
        echo "<p class='alert alert-danger' >Record was deleted successfully</p>";
    }else{
        echo "Error deleting record $sql".mysqli_error($link);

    }
}

?>
<div class="row m-2">
    <div class="alert alert-danger">
        <form action="delete.php" method="post">
            <div class="p-2">
                <label>Are you sure you want to delete this record?</label>
                <input class="form-control" type="hidden" name ="id" value="<?php echo $_GET['id']; ?>">
            </div>
            <div class="p-2">
                <input type="submit" value="YES" name="submit" class="btn btn-danger">
                <a class="btn btn-primary" href="documents.php">NO</a>
            </div>
        </form>
    </div>
</div>
