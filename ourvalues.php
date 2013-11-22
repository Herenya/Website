<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta content="values, company values" name="keywords"/>
<meta content="Values of West Coast Auto" name="description" />
<link href="css/wca.css" rel="stylesheet" type="text/css">
<title>Our Valuess</title>
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
			<div class="values">
				<h1>Our Values</h1>
					<p>Vaughn and Collette take a hands on approach to the business to ensure they offer the highest level of customer service and satisfaction possible.<br>
					Quite simply, West Coast Auto was built on the fundamental principle of integrity, reflected in the way we serve our customers, treat each other, and deliver our products.</p>
						<ul>
							<li>We offer  thousands of used cars around Perth</li>
							<li>Every car we sell has a low, no-haggle price</li>
							<li>Our vehicles are superior in quality. Only the best cars meet our high standards</li>
							<li>We'll buy your car whether you buy from us or not</li>
							<li>You'll get friendly customer service</li>
						</ul> <!--This was taken from http://www.carmax.com/ as an example of some values for a car company -->
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