<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta content="home, index, frontpage" name="keywords"/>
<meta content="Insurance page" name="description" />
<link href="css/wca.css" rel="stylesheet" type="text/css">
<title>Insurance</title>
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
			<div class="insurance">
			<h1>Insurance</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec aliquam in erat et sagittis. Curabitur ornare tortor a varius volutpat. Sed vel vehicula elit. Pellentesque ullamcorper nisi sed libero pellentesque ornare in ut enim. Nam imperdiet, leo et congue placerat, turpis diam ultrices sapien, sit amet fringilla turpis diam in purus. Donec elementum lorem sit amet tortor rhoncus, id lacinia odio vehicula. Vestibulum auctor ligula lorem, non ornare libero molestie sit amet. Etiam ut blandit ipsum, nec auctor nunc. Ut eu scelerisque turpis. Morbi egestas dignissim tellus, vitae accumsan elit pharetra at. Aenean sodales est enim, pharetra euismod tortor lacinia id.</p>

			<p>Sed elementum ante non mauris condimentum vestibulum. Mauris dapibus hendrerit iaculis. Phasellus purus nisl, malesuada sit amet sagittis non, fringilla ac metus. Integer tristique, ligula non rhoncus suscipit, dolor erat ultricies lorem, nec rhoncus libero nibh id diam. Cras porttitor leo pharetra bibendum facilisis. Quisque interdum placerat lectus vel fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Pellentesque magna velit, elementum ut volutpat eget, consectetur vel purus. Nam et neque luctus, molestie justo et, mattis turpis. Ut sagittis in sem tincidunt lobortis. Sed hendrerit vulputate ante ac volutpat. Nunc mattis gravida nunc ac venenatis. Duis vitae ligula vestibulum lacus congue sagittis eu pretium tellus. Curabitur vestibulum, neque sed ornare imperdiet, ipsum leo lobortis mauris, sit amet consequat est mauris id dui. Vestibulum tempus massa vel nulla posuere interdum. Donec vel lacinia arcu.</p>

			<p>Praesent euismod luctus magna suscipit fermentum. Aliquam erat volutpat. Vestibulum a magna arcu. Nulla pretium lacus est, nec facilisis est sagittis quis. Nam a eros orci. Praesent sed imperdiet tortor. Morbi at venenatis neque. Cras eget lorem dui.</p>
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