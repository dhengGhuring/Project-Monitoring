<?php
include 'conn.php';
$projectLeader = $_GET['projectLeader'];
$sqlGet = "SELECT * FROM clients WHERE projectLeader='$projectLeader'";
$queryGet = mysqli_query($conn, $sqlGet);
$data = mysqli_fetch_array($queryGet);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <title>Halaman Update</title>
  </head>
  <body>
    <div class="w-50 mx-auto border p-3 mt-5">
        <a href="index.php">Kembali ke home</a>
        <form action="update.php" method="POST">
            <label class="mt-3" for="projectName">Nama Project</label>
            <input type="text" id="projectName" name="projectName" value="<?php echo "$data[projectName]";?>"  class="form-control" required>

            <label class="mt-3" for="client">Nama Client</label>
            <input type="text" id="client" name="client" value="<?php echo "$data[client]";?>" class="form-control" required>

            <label class="mt-3" for="projectLeader">Nama Project Leader</label>
            <input type="text" id="projectLeader" name="projectLeader" value="<?php echo "$data[projectLeader]";?>" class="form-control" required>

            <input class="btn btn-success mt-3" type="submit" name="tambah" value="Rubah Data">
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
  <?php

    if (isset($_POST['update'])) {
        $projectName = $_POST['projectName'];
        $client = $_POST['client'];
        $projectLeader = $_POST['projectLeader'];

        $sqlUpdate = "UPDATE clients 
                      SET projectName='$projectName', client='$client', projectLeader='$projectLeader'
                      WHERE projectLeader='$projectLeader'";
        $sqlUpdate = mysqli_query($conn, $sqlUpdate);

        header("location: index.php");
    }

  ?>
</html>