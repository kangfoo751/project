<?php
include 'koneksi.php';
$ID				= $_POST['id'];
$category      = $_POST['category_id'];
$name          = $_POST['name'];
$price         = $_POST['price'];
$status        = $_POST['status'];


$sql = "update item set category_id = '$category', name = '$name', price = '$price', status = '$status'  where id = $ID";
mysqli_query($koneksi,$sql);
header('location:item.php');
?>
