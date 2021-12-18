<?php include "connection.php" ?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>CRUD | Edit Record</title>
</head>

<body>
    <!-- Header start -->
    <?php include "header.php" ?>
    <!-- Header end -->

    <?php
    
    $id = $_GET['id'];

    $sql = " SELECT * FROM `student_data` WHERE id = '$id' ";
    $query = mysqli_query($con,$sql);

    $row = mysqli_fetch_assoc($query);

    ?>

    <!-- Edit Record start -->
    <div class="container mt-3">
        <h2 class="my-4">Edit Record</h2>
        <form action="update.php" method='POST'>
            <div class="row gy-4">
                <div class="mt-4"></div>
                <div class="col-lg-6 d-none">
                    <input type="text" class="form-control" name="id" value="<?php echo $row['id']; ?>">
                </div>
                <div class="col-lg-6">
                    <input type="text" class="form-control" name="name" value="<?php echo $row['name']; ?>">
                </div>
                <div class="col-lg-6">
                    <input type="text" class="form-control" name="address" value="<?php echo $row['address']; ?>">
                </div>
                <div class="col-lg-6">
                    <input type="text" class="form-control" name="class" value="<?php echo $row['class']; ?>">
                </div>
                <div class="col-lg-6">
                    <input type="text" class="form-control" name="phone" value="<?php echo $row['phone']; ?>">
                </div>
            </div>
            <div class="d-flex justify-content-center align-items-center">
                <button name='update-btn' class="btn btn-success mt-4">Update</button>
            </div>
        </form>
    </div>
    <!-- Edit Record end -->






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>

</html>