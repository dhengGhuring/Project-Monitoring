<?php
    include 'conn.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Monitoring Sistem</title>
  </head>
  <body>
    <h1 class="text-center mb-5 mt-5">Project Monitoring</h1>
    <div class="container">
        <table class="table table-borderless">
            <thead class="table-light">
                <th>PROJECT NAME</th>
                <th>CLIENT</th>
                <th>PROJECT LEADER</th>
                <th>START DATE</th>
                <th>END DATE</th>
                <th>PROGRESS</th>
                <th class="text-center">ACTION</th>
            </thead>

            <?php
                $sqlGet = "SELECT * FROM clients";
                $query = mysqli_query($conn, $sqlGet);
                while($data = mysqli_fetch_array($query)){
                    echo "
                    <tbody>
                        <td>$data[projectName]</td>
                        <td>$data[client]</td>
                        <td>$data[projectLeader]</td>
                        <td>$data[startDate]</td>
                        <td>$data[endDate]</td>
                        <td>$data[progres]</td>
                        <td>
                            <div class='row'>
                                <div class='col'>
                                    <a href='delete.php?projectLeader=$data[projectLeader]' class='btn btn-danger d-flex justify-content-center'>delete</a>
                                </div>
                                <div class='col'>
                                    <a href='update.php?projectLeader=$data[projectLeader]' class='btn btn-warning d-flex justify-content-center'>edit</a>
                                </div>
                            </div>
                        </td>
                    </tbody>
                    ";
                }
            ?>
                    
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>