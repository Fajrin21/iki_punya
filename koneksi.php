<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "uts";

$conn = mysqli_connect($hostname, $username, $password, $database);

if (!$conn) {
    echo "Koneksi Gagal: " . mysqli_connect_error();
    die;
}
?>