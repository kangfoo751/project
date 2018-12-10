<html>
<head>
	<title>Edit Data || Point Of Sale - Fauzan</title>
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
	background-color: white;
	border: 1px solid;
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
	color: black;
	font-size: 14px;
	padding: 10px 5px;
	border: none;
}

#right {
	width: 250px;
	margin-left: 150px;
	background-color: #34455F;
}

#right form{
	padding: 30px;
	color: white;
}

</style>
</head>
<body>
	<?php
	include 'koneksi.php';
	$id	= $_GET['id'];
	$sql	="select * from category where id=$id";
	$jawab= mysqli_query($koneksi,$sql);
	$data	= mysqli_fetch_assoc($jawab);
	?>


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
</div>


<div id="right">
		<form action="editc_p.php" method="POST">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
			Nama : <br>
			<input type="text" name="name"><br>
			<input type="submit" value="Submit">
		</form>
</div>
</div>
</div>
</body>
</html>
