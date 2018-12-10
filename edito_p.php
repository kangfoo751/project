<?php
include 'koneksi.php';
$ID				= $_POST['id'];
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

$sql = "update oorder set table_number = '$table', item_id = '$item', qty = '$qty', total = '$kali', diskon= '$mbuh', after='$kali'  where id = $ID";
$sqld = "update oorder set table_number = '$table', item_id = '$item', qty = '$qty', total = '$kali', diskon= '$nilai', after='$diskon'  where id = $ID";

if ($kali < 100000){
	mysqli_query($koneksi,$sql);
} else {
	mysqli_query($koneksi,$sqld);
}

mysqli_query($koneksi,$sql);
header('location:order.php');
?>
