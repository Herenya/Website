<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta content="car, vehicle, used car" name="keywords"/>
<meta content="Used Vehicles" name="description" />
<link href="css/wca.css" rel="stylesheet" type="text/css">
<title>Used Vehicles</title>
<script type="text/javascript" src="js/jquery-2.0.3.min.js"></script>
</head>

<body>
	<div class="wrapper">
		<?php include 'top.php'; ?>
		<div class="content">
		<h1>Vehicles For Sale</h1>
		<?php include "credentials.php";
		$tbl_name="cars"; // Table name 

		// Connect to server and select databse.
		mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
		mysql_select_db("$db_name")or die("cannot select DB");

		$sql="SELECT * FROM $tbl_name WHERE Sold='0'";
		$result=mysql_query($sql);
		while($row = mysql_fetch_assoc($result)) {?>
			<div class="car">
				<div class="images_full" id="<?php echo "full" . $row["CarID"]; ?>">
				<?php echo '<img src="image.php?id='.$row["CarID"].'&image=Img1" />'; ?>
				</div>
				<div class="images_thumbnails" id="<?php echo "thumb" . $row["CarID"]; ?>">
					  <?php echo '<a href="image.php?id='.$row["CarID"].'&image=Img1" /><img src="image.php?id='.$row["CarID"].'&image=Img1" />'; ?></a>
					  <?php echo '<a href="image.php?id='.$row["CarID"].'&image=Img2" /><img src="image.php?id='.$row["CarID"].'&image=Img2" />'; ?></a>
					  <?php echo '<a href="image.php?id='.$row["CarID"].'&image=Img3" /><img src="image.php?id='.$row["CarID"].'&image=Img3" />'; ?></a>
					  
				</div>
			</div>
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

<!-- 			<div class="car">
				<div class="images_full" id="images_full">
				  <img src="images/fullimage1.png" />
				</div>
				<div class="images_thumbnails" id="images_thumbnails">
					  <a href="images/fullimage1.png"><img src="images/thumbnail1.png" /></a>
					  <a href="images/fullimage2.png"><img src="images/thumbnail2.png" /></a>
					  <a href="images/fullimage3.png"><img src="images/thumbnail3.png" /></a>
				</div>
			</div>
			<div class="description">
				<h2 class="carheading">Toyota Camry</h2>
					<p>Here is a description of the Toyota Camry</p>
					<p>Below this description will be some database automatic information such as rego, vin, fuel, kilometres, price, etc</p>
					<p>I plan to add images that can be side scrolled through for the finished site </p>
			</div>

				<hr class="divider">

			<div class="car2">
				<div class="images_full" id="images_full2">
				  <img src="images/fullimage1.png" />
				</div>
				<div class="images_thumbnails" id="images_thumbnails2">
					  <a href="images/fullimage1.png"><img src="images/thumbnail1.png" /></a>
					  <a href="images/fullimage2.png"><img src="images/thumbnail2.png" /></a>
					  <a href="images/fullimage3.png"><img src="images/thumbnail3.png" /></a>
				</div>
			</div>
			<div class="description1">
				<h2 class="carheading">Toyota Camry</h2>
				<p>Here is a description of the Toyota Camry</p>
				<p>Below this description will be some database automatic information such as rego, vin, fuel, kilometres, price, etc</p>
				<p>I plan to add images that can be side scrolled through for the finished site </p>
			</div>

				<hr class="divider"> -->
		</div>	
	</div>
	<footer>
		<a href="privacy_policy.html">Privacy Policy </a>
		<p>© 2013 West Coast Auto</p>
	</footer>
<script type="text/javascript">
	$('#images_thumbnails a').click(function(){
	  var newImageSrc = $(this).attr('href');
	  $('#images_full img').attr({'src': newImageSrc });
	  return false;
	});
</script>
<script type="text/javascript">
	$('#images_thumbnails2 a').click(function(){
	  var newImageSrc = $(this).attr('href');
	  $('#images_full2 img').attr({'src': newImageSrc });
	  return false;
	});
</script>
</body>
</html>