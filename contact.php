<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta content="home, index, frontpage" name="keywords"/>
<meta content="How to contact WCA" name="description" />
<script type="text/javascript" src="js/script.js"></script>
<link href="css/wca.css" rel="stylesheet" type="text/css">
<title>Contact</title>
</head>

<body>
	<div class="wrapper">
		<?php include 'top.php'; ?>
		<div class="content">
			<div class="contactus">
				<h2>Contact Us </h2>
					<p>You can find us at the following location:</p>
			<div class="map">
				<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.au/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=375+Albany+Hwy,+Victoria+Park,+Perth+WA+6100&amp;aq=&amp;sll=-27.435219,153.007686&amp;sspn=0.034166,0.066047&amp;ie=UTF8&amp;hq=&amp;hnear=Albany+Hwy,+Western+Australia&amp;t=m&amp;z=14&amp;ll=-31.978932,115.899326&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com.au/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=375+Albany+Hwy,+Victoria+Park,+Perth+WA+6100&amp;aq=&amp;sll=-27.435219,153.007686&amp;sspn=0.034166,0.066047&amp;ie=UTF8&amp;hq=&amp;hnear=Albany+Hwy,+Western+Australia&amp;t=m&amp;z=14&amp;ll=-31.978932,115.899326" style="color:#0000FF;text-align:left">View Larger Map</a></small>
			</div>
					<!-- Map created using Google Maps -->

				<p>If you have any questions you need answered or would like to leave us some feedback please fill out the form on this page and we will get back to you as soon as we can.</p>
				<p>Alternatively you can contact us on: <strong> 08 9415 1234</strong></p>
			</div>
			<div class="contactform">
				<form id="contact" name="contact" onsubmit="checkContactForm('contact')">
					<h2 style="margin-top:60px">Contact Form:</h2>
						<label class="contactemail">
						<span>Email:</span><br>
							<input id="email" type="text" name="email" />
						</label><br>
						<label class="contactname">
						<span>Name:</span><br>
							<input id="name" type="text" name="name" />
						</label><br>
						<label class="contactsub">	
						<span>Subject:</span><br>
							<input id="subject" type="text" name="subject" />
						</label><br>
						<label class="contacttext">		
						<span>Message:</span><br>
							<textarea id="feedback" name="feedback"></textarea>
						</label><br>
						<label>
							<input id="button" type="submit" value="Submit Form" />
						</label>
				</form>
			</div>
		</div>
	</div>
	<footer>
		<a href="privacy_policy.php">Privacy Policy </a>
		<p>© 2013 West Coast Auto</p>
	</footer>
</body>
</html>