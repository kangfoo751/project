<?php
include 'koneksi.php';
$ID    = $_GET['id'];

$sql = "DELETE FROM oorder WHERE id = '$ID'";
mysqli_query($koneksi,$sql);
header('location:order.php');
?>
