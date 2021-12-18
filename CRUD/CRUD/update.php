<?php 

include "connection.php"; 

if(isset($_POST['update-btn'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $class = $_POST['class'];
    $phone = $_POST['phone'];

    $sql = "UPDATE `student_data` SET `name`='$name',`address`='$address',`class`='$class',`phone`='$phone' WHERE id='$id' ";
    $query = mysqli_query($con,$sql);

    header("location: index.php");
}



?>