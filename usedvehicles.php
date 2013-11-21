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
			<div class="car">
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
			<!--Acts as the dividing line between cars -->
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

				<hr class="divider">
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