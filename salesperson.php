<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta content="home, index, frontpage" name="keywords"/>
<meta content="Details about salespersons" name="description" />
<link href="css/wca.css" rel="stylesheet" type="text/css">
<title>Salesperson Details</title>
</head>

<body>
	<div class="wrapper">
		<?php include 'top.php'; ?>
		<div class="content">
		<?php if (isset($_SESSION['user'])): ?>
			<h1>Salesperson Details</h1>
			<table class="employees">
				<tr>
					<th>Name</th>
					<th>Phone</th>
					<th>Email</th>
					<th>Number of Clients</th> <!--Based off the database we will be able to automatically input how many clients this salesperson has seen -->
				</tr>
				<tr>
					<td>Lisa Rowe</td>
					<td>0402546332</td>
					<td>Lisa@WCA.com</td>
					<td>10</td>
				</tr>
				<tr>
					<td>Glen Freeman</td>
					<td>0788763522</td>
					<td>Glenfreeman@WCA.com</td>
					<td>3</td>
				</tr>
			</table>
		<?php else: ?>
		<h1>Not Authenticated</h1>
		<?php endif; ?>
		</div>	
	</div>
	<footer>
		<a href="privacy_policy.html">Privacy Policy </a>
		<p>© 2013 West Coast Auto</p>
	</footer>
</body>
</html>