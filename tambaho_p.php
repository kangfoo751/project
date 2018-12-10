<?php
include 'koneksi.php';
$table  			 = $_POST['table_number'];
$item     	    = $_POST['item'];
$qty		       = $_POST['qty'];

$total		="select price from item where id = $item";

$jawab = mysqli_query($koneksi, $total);
	if(mysqli_num_rows($jawab)>0){
		while($data = mysqli_fetch_assoc($jawab)){
			$tot = $data['price'];
			echo $tot;
		}}

$kali		= $tot*$qty;
$nilai 	= "20%";
$mbuh = "-";
$diskon = $kali - ($kali * 0.2);


$sql = "insert into oorder (table_number, item_id, qty, total, diskon, after) values ('$table','$item','$qty','$kali', '$mbuh', '$kali')";
$sqld = "insert into oorder (table_number, item_id, qty, total, diskon, after) values ('$table','$item','$qty','$kali', '$nilai', '$diskon')";

if ($kali < 100000){
	mysqli_query($koneksi,$sql);
} else {
	mysqli_query($koneksi,$sqld);
}

header('location:order.php');
?>
