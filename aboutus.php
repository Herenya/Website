<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta content="about" name="keywords"/>
<meta content="About West Coast Auto" name="description" />
<link href="css/wca.css" rel="stylesheet" type="text/css">
<title>About Us</title>
<script type="text/javascript" src="js/crawler.js">

/* Text and/or Image Crawler Script v1.53 (c)2009-2011 John Davenport Scheuer
   as first seen in http://www.dynamicdrive.com/forums/
   username: jscheuer1 - This Notice Must Remain for Legal Use
*/

</script>
</head>

<body>
	<div class="wrapper">
		<?php include 'top.php'; ?>
		<div class="content">
			<div class="carbanner marquee" id="mycrawlertop">
				<img src="images/smallcarbanner.jpeg" width="1200" height="100" alt="West Coast Auto" title="Car Banner" />
			</div>
			<div class="about">
				<h1>About Us</h1>
					<p>West Coast Auto is a family owned car dealership operated by Vaughn and Collette Dennis. They deal in both new and used vehicles and have been in operation since 1975. Vaughn and Collette take a hands on approach to the business to ensure they offer the highest level of customer service and satisfaction possible.</p>
					<p>Feel free to stop in and have a chat to one of our friendly salespersons at the following location: <br><br> <strong>375 Albany Hwy Victoria Park Perth WA 6100 </strong><br><br>
					Or contact us on the following number: <strong> 08 9415 1234</strong>
			</div>
			<div class="carbanner marquee" id="mycrawlerbottom">
				<img src="images/smallcarbanner.jpeg" width="1200" height="100" alt="West Coast Auto" title="Car Banner" />
			</div>			
		</div>	
	</div>
	<footer>
		<a href="privacy_policy.php">Privacy Policy </a>
		<p>© 2013 West Coast Auto</p>
	</footer>
	<script type="text/javascript">
		marqueeInit({
			uniqueid: 'mycrawlertop',
			inc: 5, //speed - pixel increment for each iteration of this marquee's movement
			mouse: 'cursor driven', //mouseover behavior ('pause' 'cursor driven' or false)
			moveatleast: 2,
			neutral: 150,
			savedirection: true,
			random: true
		});
		marqueeInit({
			uniqueid: 'mycrawlerbottom',
			inc: 5, //speed - pixel increment for each iteration of this marquee's movement
			mouse: 'cursor driven', //mouseover behavior ('pause' 'cursor driven' or false)
			moveatleast: 2,
			direction: "right",
			neutral: 150,
			savedirection: true,
			random: true
		});
	</script>
</body>
</html>