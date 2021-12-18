<?php 

include "connection.php";

if(isset($_POST['submit'])) {

$name = $_POST['name'];
$address = $_POST['address'];
$class = $_POST['class'];
$phone = $_POST['phone'];

$sql = "INSERT INTO `student_data`(`name`, `address`, `class`, `phone`) VALUES ('$name','$address','$class','$phone')";
$query = mysqli_query($con,$sql) or die("Insert query failed");

header("location:index.php");
}

?>