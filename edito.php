<html>
<head>
	<title>Edit Data | Point Of Sale - Fauzan</title>
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
	$ID	= $_GET['id'];
	$sql	="select * from oorder where id=$ID";
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
		<form action="edito_p.php" method="POST">
		<input type="hidden" name="id" value="<?php echo $ID; ?>">
			Table : <br>
			<input type="text" name="table_number" placeholder="AA--"><br>
			Item : <br>
			<select name="item">
				<?php
				include 'koneksi.php';
				$sql = "select * from item where status = 1";
				$jawab = mysqli_query($koneksi, $sql);

				if(mysqli_num_rows($jawab)>0){
				while($data = mysqli_fetch_assoc($jawab)){
				echo "<option value=".$data['id'].">".$data['name']."</option> ";}}
				?>
			</select><br>

			Qty : <br>
			<input type="text" name="qty"><br>
			<input type="submit" value="Submit">
		</form>
</div>
</div>
</div>
</body>
</html>
