<?php
/*
require_once ('config/db.php');
$query = "select * from clients";
$result = mysqli_query($con, $query);
*/
require_once ('config/db.php');
require_once ('config/function.php');
$result = display_data();


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" />
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="shortcut icon" href="../assets/img/favicon_io/favicon.ico">
  <title>Relife Clinets Data</title>
</head>

<body>

  <body class="bg-dark">

    <body class="bg-dark">
      <div class="container">
        <div class="row mt-5 justify-content-center">
          <div class="col-lg-8">
            <div class="card mt-5">
              <div class="card-header">
                <h2 class="display-6 text-center font-weight-bold "><img
                    src="https://www.relifehospitals.com/img/new-images/logo.webp" alt="" width="200px">Clients Data
                </h2>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table id="tableResult2" class="table table-bordered">
                    <thead class="text-white" style="background-color:#065054">
                      <tr>
                        <th>User ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <tr>
                          <td><?php echo $row['id']; ?></td>
                          <td><?php echo $row['cname']; ?></td>
                          <td><?php echo $row['cemail']; ?></td>
                          <td><?php echo $row['mobNum']; ?></td>
                        </tr>
                        <?php
                      }
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

        </div>
        <div style="margin-left:220px;margin-top:10px;">
          <a style="text-decoration:none;" href="../index.html"><button
              style="margin-right:10px;background-color:#065054" class="btn btn-primary">Home</button> </a><span
            style="color:white;font-size:18px;font-weight:500;font-family: Arial, Helvetica, sans-serif;"> | Relife
            Hospital | info@relifehospitals.com</span>
        </div>

      </div>
      <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
      <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
      <script>
        $(document).ready(function () {
          $('#tableResult2').DataTable();
          $('#tableResult').DataTable();
        });
      </script>
    </body>

</html>