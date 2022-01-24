<?php
$conn = mysqli_connect('localhost', 'root', '');
$mysqli_conn = mysqli_select_db($conn, 'digitaliz');
if ($conn){
    echo "database berhasil terhubung";
    if($mysqli_conn){
        echo "table ditemukan";
    }else{
        echo "table gagal di ditemukan";
    }
}else{
    echo "database gagal terhubung";
}
?>