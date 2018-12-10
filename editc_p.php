<?php
include 'koneksi.php';
$ID  		      = $_POST['id'];
$name          = $_POST['name'];

$sql = "UPDATE category SET name = '$name' WHERE id = $ID";
mysqli_query($koneksi,$sql);
header('location:category.php');
?>
