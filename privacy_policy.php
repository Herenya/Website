<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta content="privacy policy" name="keywords"/>
<meta content="Privacy Policy" name="description" />
<link href="css/wca.css" rel="stylesheet" type="text/css">
<title>West Coast Auto</title>
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
			<div class="privacy">
				<h1>Privacy Policy</h1>
					<p>The West Coast Auto website is bound by the Privacy Act 1988 (Cth).</p> 
					<p>Personal information held by us about you may include your name, address, email address, account password, and contact telephone number. We only collect personal information about you directly from you and from publicly available sources of information such as telephone directories.</p> 
					<p>You may be required to enter your credit card or other financial details when using the West Coast Auto website for the purposes of processing payment. However, we are never able to access these details, as they are encrypted and sent directly to our banking service provider. We do not collect, hold, store, or have any ability to access, your credit card or other financial details.</p>
					<p>If you decline to provide certain personal information (such as your name and email address) you may not be able to register as a member of the West Coast Auto website and will have limited access and usage rights.</p> 
					<p>When you visit the West Coast Auto website or use the features available via the West Coast Auto website, we may record anonymous information such as your IP address, time and date of visit, referring URL, pages accessed, documents or files downloaded, or the type of browser and/or operating system you used to access the West Coast Auto website.</p>
					<p>We may use Cookies to record your preferences, measure and assess usage of the West Coast Auto website, and to ensure adequate security is afforded to users. You may adjust your browser settings in order to disable Cookies. If you disable your cookies browser setting we may not be able to provide you with the full range of our services via the West Coast Auto website.</p> 
					<p>Where the West Coast Auto website includes links to third party sites, those sites may have different privacy policies. We recommend that you read the privacy policies of third party sites before you disclose any personal information.</p> 
					<p>Your personal information may be used to verify your identity, assist you to become a member of the West Coast Auto website, provide you with services, enable us to contact you in relation to services purchased by you, and bill you for services you have purchased.</p> 
					<p>We do not and will not disclose your personal information to any third parties unless disclosure is permitted by you, required or authorised by law, or necessary to enable us to obtain relevant professional (legal or financial) advice.</p> 
					<p>You have a right to access and change your personal information, subject to law. We may request you to submit a written request to change your personal information.</p>
					<!-- Taken from http://www.autotrader.com.au/info/privacy-policy to be used as a used car website example only -->
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