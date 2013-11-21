<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta content="home, index, frontpage" name="keywords"/>
<meta content="Finance" name="description" />
<link href="css/wca.css" rel="stylesheet" type="text/css">
<title>Finance</title>
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
			<div class="finance">
				<h1>Finance</h1>
					<p>Financing a car at West Coast Auto is unlike any other car financing experience you've ever had. Your Sales Consultant will lead you through the entire process, so you stay informed every step of the way. Any approvals are usually displayed within a few minutes. Because our process is so transparent, you'll see your options at the same time we do.</p>

					<p>Financing a car at West Coast Auto just makes sense. Take a look at the West Coast Auto Financing difference:</p>
					<ul>
						<li>Most of the financial institutions we work with provide decisions in minutes.</li>
						<li>It's haggle and hassle-free; there's no need for negotiation.</li>
						<li>You'll see your financing choices when we do. Choose an available option that suits you best.</li>
						<li>If you find better financing from another finance source, you've got 3 business days to refinance with no penalties or interest charges.</li>
						<li>Our friendly Salespeople are always on hand to answer all your questions.</li>
					</ul>
				<h2>Easy Financing Process</h2>
					<p>West Coast Auto offers a simple, up-front financing process. In just a few easy steps, you could be on your way towards owning your next car.</p>
					<ol>
						<li><strong>Choose the car that fits your needs.</strong></li>
						<li><strong>Complete an application.</strong><br>
							Once you've determined your budget and down payment, your application only takes a few minutes.</li>
						<li><strong>Select any available offer that suits you best.</strong></li>
					</ol>
			<!-- This information was taken from http://www.carmax.com/enUS/car-financing/financing-process.html as an example -->
			</div>
			<div class="carbanner marquee" id="mycrawlerbottom">
				<img src="images/smallcarbanner.jpeg" width="1200" height="100" alt="West Coast Auto" title="Car Banner" />
			</div>
		</div>	
	</div>
	<footer>
		<a href="privacy_policy.html">Privacy Policy </a> 
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