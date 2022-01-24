<?php
include 'conn.php';

$projectLeader = $_GET['projectLeader'];
$sqlDelete = "DELETE FROM clients WHERE projectLeader='$projectLeader'";
mysqli_query($conn, $sqlDelete);

header("location: index.php");
?>