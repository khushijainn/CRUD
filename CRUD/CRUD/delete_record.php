<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>CRUD</title>
</head>

<body>
    <!-- Header start -->
    <?php include "header.php" ?>
    <!-- Header end -->

    <!-- delete record start -->
    <div class="container mt-3">
        <h2 class="my-4">Delete Record</h2>
        <form action="" method='GET'>
            <div class="row">
                <div class="col-lg-6">
                    <input type="text" name="id" class="form-control" placeholder="Id">
                </div>
                <div class="col-lg-6">
                    <button name="delete"class="btn btn-danger">Delete</button>
                </div>
            </div>
        </form>
    </div>
    <!-- delete record end -->

    <?php

        include "connection.php";

        if(isset($_GET['delete'])) {

            $id=$_GET['id'];

            $sql = "DELETE FROM `student_data` where id=$id";

            $query=mysqli_query($con,$sql) or die("Delete query failed");
            header('location:index.php');
        }

    ?>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>

</html>