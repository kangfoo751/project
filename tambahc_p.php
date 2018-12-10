<?php
include 'koneksi.php';
$name          = $_POST['name'];


$sql = "insert into category (name) values ('$name')";
mysqli_query($koneksi,$sql);
header('location:category.php');
?>
