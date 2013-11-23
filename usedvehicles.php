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
		$count = 1;
		while($row = mysql_fetch_assoc($result)) {?>
		<div>
			<div class="<?php if ($count%2 == 1) {echo 'carRight';} else {echo 'carLeft';} ?>">
				<div class="images_full" id="<?php echo "full" . $row["CarID"]; ?>">
				<?php echo '<img src="image.php?id='.$row["CarID"].'&image=Img1" />'; ?>
				</div>
				<div class="images_thumbnails" id="<?php echo "thumb" . $row["CarID"]; ?>">
					<?php echo '<a href="image.php?id='.$row["CarID"].'&image=Img1" /><img src="image.php?id='.$row["CarID"].'&image=Img1" />'; ?></a>
					<?php echo '<a href="image.php?id='.$row["CarID"].'&image=Img2" /><img src="image.php?id='.$row["CarID"].'&image=Img2" />'; ?></a>
					<?php echo '<a href="image.php?id='.$row["CarID"].'&image=Img3" /><img src="image.php?id='.$row["CarID"].'&image=Img3" />'; ?></a>
				</div>
			</div>
			<div  class="desc <?php if ($count%2 == 1) {echo 'descRight';} else {echo 'descLeft';} ?>">
				<h2 class="carheading"><?php echo $row["ManufacturerID"] . " " . $row["Model"] . " [" . $row["Year"] . "]"; ?></h2>
				<p><span>Price: </span>$<?php echo $row["Price"]; ?></p>
				<p><span>Category: </span><?php echo $row["CategoryID"]; ?></p>
				<p><span>Kilometers: </span><?php echo $row["Kilometres"]; ?></p>
				<p><span>Colour: </span><?php echo $row["Colour"]; ?></p>
				<p><span>Rego Expiry: </span><?php echo $row["Registration Expiry"]; ?></p>
				<p><span>Rego Plate: </span><?php echo $row["Registration Plate"]; ?></p>
				<p><span>VIN: </span><?php echo $row["VIN"]; ?></p>
				<p><span>Cylinders: </span><?php echo $row["Cylinders"]; ?></p>
				<p><span>Fuel: </span><?php echo $row["Fuel"]; ?></p>
				<p><span>Transmission: </span><?php echo $row["Transmission"]; ?></p>
			</div>
			<!--Acts as the dividing line between cars -->
		</div>
		<script type="text/javascript">
			$('#<?php echo "thumb" . $row["CarID"]; ?> a').click(function(){
			  var newImageSrc = $(this).attr('href');
			  $('#<?php echo "full" . $row["CarID"]; ?> img').attr({'src': newImageSrc });
			  return false;
			});
		</script>
		<hr class="divider">
		<?php $count++;} ?>
		</div>
	</div>
	<footer>
		<a href="privacy_policy.php">Privacy Policy </a>
		<p>© 2013 West Coast Auto</p>
	</footer>
</body>
</html>
