<html>
<head>
	<title>Point Of Sale - Fauzan</title>
	<link rel="stylesheet" type="text/css">
<style type="text/css">
#container{
	margin: -8px;
}

#header {
	width: 100%;
	background-color: #2C363F;
}

#header p {
	font-family: RA BALI;
	text-align: center;
	font-size: 45px;
	margin-top: 0px;
	padding-top: 30px;
	padding-bottom: 30px;
	color: white;
	font-weight: bold;
}

#index {
	margin: auto;
	width: 95%;
}

#left {
	float: left;
	background-color: #CFCFD1;
}

#left tr{
	padding-top: 20px;
}

#left li{
	margin-left: 20px;
	margin-right: 20px;
	list-style: none;
	padding: 10px;
}

#left a{
	text-decoration: none;
	color: black;
	font-size: 21px;
}

#left a:hover{
	border-bottom: 1px solid;
}

#left button{
	background-color: #000;
	border: none;
	height: 30px;
}

#left button:hover{
	background-color: #34455F;
	height: 30px;
}

#left button a{
	text-decoration: none;
	color: white;
	font-size: 14px;
	padding: 10px 5px;
}

#left button a:hover{
	text-decoration: none;
	color: white;
	font-size: 14px;
	padding: 10px 5px;
	border: none;
}

#right {
	margin-left: 150px;
}

table{
	padding: 30px;
	background-color: #34455F;
}

table tr{
	text-align: center;
}

table tr th{
	padding: 5px 25px;
	font-size: 21px;
	color: white;
}

table td{
	color: white;
	padding: 5px;
}

table a{
	text-decoration: none;
	color: white;
}

table a:hover{
	text-decoration: none;
	color: white;
	border-bottom: 1px solid;
}



</style>
</head>
<body>
<div id="container">
	<div id="header">
		<p>Point of Sale</p>
	</div>

<div id="index">
<div id="left">
	<tr>
	<li><a href="category.php">Category</a></li>
	<li><a href="item.php">Item</a></li>
	<li><a href="order.php">Order</a></li>
	<li><button type="submit"><a href="tambahi.php">Tambah</a></button></li>
	</tr>
</div>

<div id="right">
<table>
	<tr>
	<th>No</th>
	<th>Category</th>
	<th>Name</th>
	<th>Price</th>
	<th>Status</th>
	<th>Action</th>
	</tr>


	<?php
	include 'koneksi.php';
	$no = 1;
	$sql = "
			select category.id, item.id, category.name as name, item. name as menu, price, status 
			from item
			join category on category.id = item.category_id;
			";
	$jawab = mysqli_query($koneksi, $sql);

	function s($status) {
	if ($status == "1") {
		return "Aktif";
	} else {
		return "Nonaktif";
	}

s();
	}

	if(mysqli_num_rows($jawab)>0){
		while($data = mysqli_fetch_assoc($jawab)){
			echo "
			<tr>
				<td>".$no++."</td>
				<td>".$data['name']."</td>
				<td>".$data['menu']."</td>
				<td>"."Rp. ".number_format($data['price'], 0, ",",".")."</td>
				<td>".s($data['status'])."</td>
						<td>
							<a href='editi.php?id=".$data['id']."'>Edit</a>
							<a href='hapusi.php?id=".$data['id']."'>Hapus</a>
						</td>
			</tr>
			";		
		}
	}
	?>
</table>
</div>
</div>
</div>
</body>
</html>
