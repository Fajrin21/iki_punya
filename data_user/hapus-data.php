<?php
include_once('../koneksi.php');

$id = $_GET['id'];

$query = mysqli_query($conn, "DELETE FROM login WHERE id = '$id'");

header("Location:index.php");

?>