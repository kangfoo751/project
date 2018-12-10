<?php
include 'koneksi.php';
$category      = $_POST['category_id'];
$name          = $_POST['name'];
$price         = $_POST['price'];
$status        = $_POST['status'];


$sql = "insert into item (category_id, name, price, status) values ('$category','$name','$price','$status')";
mysqli_query($koneksi,$sql);
header('location:item.php');
?>
