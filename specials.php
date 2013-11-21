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
		<div class="content">
			<h1>Specials</h1>
		<?php include "credentials.php";
		$tbl_name="cars"; // Table name 

		// Connect to server and select databse.
		mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
		mysql_select_db("$db_name")or die("cannot select DB");

		$sql="SELECT * FROM $tbl_name WHERE Sold='0' AND Special='1'";
		$result=mysql_query($sql);
		while($row = mysql_fetch_assoc($result)) {?>
			<?php echo '<img src="image.php?id='.$row["CarID"].'&image=Img1" />'; ?>
			<div class="description">
				<h2 class="carheading"><?php echo $row["ManufacturerID"] . " " . $row["Model"] . " [" . $row["Year"] . "]"; ?></h2>
					<p>Price: $<?php echo $row["Price"]; ?></p>
					<p>Category: <?php echo $row["CategoryID"]; ?></p>
					<p>Kilometers: <?php echo $row["Kilometres"]; ?></p>
					<p>Colour: <?php echo $row["Colour"]; ?></p>
					<p>Rego Expiry: <?php echo $row["Registration Expiry"]; ?></p>
					<p>Rego Plate: <?php echo $row["Registration Plate"]; ?></p>
					<p>VIN: <?php echo $row["VIN"]; ?></p>
					<p>Cylinders: <?php echo $row["Cylinders"]; ?></p>
					<p>Fuel: <?php echo $row["Fuel"]; ?></p>
					<p>Transmission: <?php echo $row["Transmission"]; ?></p>
			</div>
			<!--Acts as the dividing line between cars -->

			<script type="text/javascript">
				$('#<?php echo "thumb" . $row["CarID"]; ?> a').click(function(){
				  var newImageSrc = $(this).attr('href');
				  $('#<?php echo "full" . $row["CarID"]; ?> img').attr({'src': newImageSrc });
				  return false;
				});
			</script>
			<hr class="divider">
		<?php } ?>


<!-- 			<div class="specialleft">
				<img src="images/specialcar.png" width="350" height="250" alt="West Coast Auto" title="Car Special One" />
				<ul class="carlist">
					<li>Manufacturer:</li>
					<li>Category:</li>
					<li>Model:</li>
					<li>Year:</li>
					<li>Price:</li>
					<li>Kilometres:</li>
					<li>Colour:</li>
					<li>Registration Plate:</li>
					<li>Expiry:</li>
					<li>VIN:</li>
					<li>Cylinders:</li>
					<li>Fuel</li>
					<li>Transmission:</li>
				</ul><br>
				<img src="images/specialcar3.png" width="350" height="250" alt="West Coast Auto" title="Car Special One" />
				<ul class="carlist">
					<li>Manufacturer:</li>
					<li>Category:</li>
					<li>Model:</li>
					<li>Year:</li>
					<li>Price:</li>
					<li>Kilometres:</li>
					<li>Colour:</li>
					<li>Registration Plate:</li>
					<li>Expiry:</li>
					<li>VIN:</li>
					<li>Cylinders:</li>
					<li>Fuel</li>
					<li>Transmission:</li>
				</ul>
			</div>
			<div class="specialright">
				<img src="images/specialcar2.png" width="350" height="250" alt="West Coast Auto" title="Car Special One" />
				<ul class="carlist">
					<li>Manufacturer:</li>
					<li>Category:</li>
					<li>Model:</li>
					<li>Year:</li>
					<li>Price:</li>
					<li>Kilometres:</li>
					<li>Colour:</li>
					<li>Registration Plate:</li>
					<li>Expiry:</li>
					<li>VIN:</li>
					<li>Cylinders:</li>
					<li>Fuel</li>
					<li>Transmission:</li>
				</ul><br>
				<img src="images/specialcar4.png" width="350" height="250" alt="West Coast Auto" title="Car Special One" />
				<ul class="carlist">
					<li>Manufacturer:</li>
					<li>Category:</li>
					<li>Model:</li>
					<li>Year:</li>
					<li>Price:</li>
					<li>Kilometres:</li>
					<li>Colour:</li>
					<li>Registration Plate:</li>
					<li>Expiry:</li>
					<li>VIN:</li>
					<li>Cylinders:</li>
					<li>Fuel</li>
					<li>Transmission:</li>
				</ul>	
			</div> -->
		</div>
	</div>	
	<footer>
		<a href="privacy_policy.html">Privacy Policy </a>
		<p>© 2013 West Coast Auto</p>
	</footer>
</body>
</html>