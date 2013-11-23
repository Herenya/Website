<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta content="specials, sale" name="keywords"/>
<meta content="Vehicle Specials" name="description" />
<link href="css/wca.css" rel="stylesheet" type="text/css">
<title>Specials</title>
</head>

<body>
	<div class="wrapper">
		<?php include 'top.php'; ?>
		<div class="content" style="text-align: center">
			<h1>Specials</h1>
		<?php include "credentials.php";
		$tbl_name="cars"; // Table name

		// Connect to server and select databse.
		mysql_connect("$host", "$username", "$password")or die("cannot connect");
		mysql_select_db("$db_name")or die("cannot select DB");

		$sql="SELECT * FROM $tbl_name WHERE Sold='0' AND Special='1'";
		$result=mysql_query($sql);
		while($row = mysql_fetch_assoc($result)) {?>
			<?php echo '<img class="special" src="image.php?id='.$row["CarID"].'&image=Img1" />'; ?>
			<?php echo '<img class="special" src="image.php?id='.$row["CarID"].'&image=Img2" />'; ?>
			<div class="specialContainer">
				<h2 class="carheading"><?php echo $row["ManufacturerID"] . " " . $row["Model"] . " [" . $row["Year"] . "]"; ?></h2>
				<span class="specialLeft">
					<p><span>Price: </span>$<?php echo $row["Price"]; ?></p>
					<p><span>Category: </span><?php echo $row["CategoryID"]; ?></p>
					<p><span>Kilometers: </span><?php echo $row["Kilometres"]; ?></p>
					<p><span>Colour: </span><?php echo $row["Colour"]; ?></p>
					<p><span>Rego Expiry: </span><?php echo $row["Registration Expiry"]; ?></p>
				</span>
				<span class="specialRight">
					<p><span>Rego Plate: </span><?php echo $row["Registration Plate"]; ?></p>
					<p><span>VIN: </span><?php echo $row["VIN"]; ?></p>
					<p><span>Cylinders: </span><?php echo $row["Cylinders"]; ?></p>
					<p><span>Fuel: </span><?php echo $row["Fuel"]; ?></p>
					<p><span>Transmission: </span><?php echo $row["Transmission"]; ?></p>
				</span>
			</div>
			<hr class="divider">
		<?php } ?>
		</div>
	</div>
	<footer>
		<a href="privacy_policy.php">Privacy Policy </a>
		<p>© 2013 West Coast Auto</p>
	</footer>
</body>
</html>
