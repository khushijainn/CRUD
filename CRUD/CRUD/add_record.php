<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>DRUD | Add Record</title>
</head>

<body>
    <!-- Header start -->
    <?php include "header.php" ?>
    <!-- Header end -->

    <!-- Add Record start -->
    <div class="container mt-3">
        <h2 class="my-4">Add New Record</h2>
        <form action="create.php" method="POST">
            <div class="row gy-4">
                <div class="col-lg-6">
                    <input type="text" name="name" class="form-control" placeholder="Name">
                </div>
                <div class="col-lg-6">
                    <input type="text" name="address" class="form-control" placeholder="Address">
                </div>
                <div class="col-lg-6">
                    <input type="text" name="class" class="form-control" placeholder="Class">
                </div>
                <div class="col-lg-6">
                    <input type="text" name="phone" class="form-control" placeholder="Phone">
                </div>
            </div>
            <div class="d-flex justify-content-center align-items-center">
                <button name="submit" class="btn btn-success mt-4">Save</button>
            </div>
        </form>
    </div>
    <!-- Add Record end -->






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>

</html>