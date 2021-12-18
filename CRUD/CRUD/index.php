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

    <title>CRUD</title>
</head>

<body>
    <!-- Header start -->
    <?php include "header.php" ?>
    <!-- Header end -->

    <!-- table start -->
    <div class="container mt-3">
        <h2>All Record</h2>

<?php 
$sql = "SELECT * FROM `student_data`";
$query = mysqli_query($con,$sql) or die("Select query failed");
$count = mysqli_num_rows($query);
if ($count > 0) {
  
?>


        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">NAME</th>
                <th scope="col">ADDRESS</th>
                <th scope="col">CLASS</th>
                <th scope="col">PHONE</th>
                <th scope="col">ACTION</th>
              </tr>
            </thead>
            <tbody>

            <?php 
            while($row = mysqli_fetch_assoc($query)) {
            ?>
              <tr>
                <th scope="row"><?php echo $row['id']; ?></th>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['address']; ?></td>
                <td><?php echo $row['class']; ?></td>
                <td><?php echo $row['phone']; ?></td>
                <td>
                    <a href="./edit_btn_record.php?id=<?php echo $row['id']; ?>"><button class="btn btn-sm btn-secondary">Edit</button></a>
                    <a href="./delete_btn.php?id=<?php echo $row['id']; ?>"><button class="btn btn-sm btn-danger">DELETE</button></a>
                </td>
              </tr>

              <?php 
            }
              ?>

            </tbody>
          </table>

<?php } ?>
    </div>
    <!-- table end -->






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>

</html>