<?php

include "connection.php";

$id = $_GET['id'];
$sql = " DELETE FROM `student_data` WHERE id=$id";
$query = mysqli_query($con,$sql) or die("DELETE query failed");

header("location:index.php");

?>
