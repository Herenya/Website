<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta content="home, index, frontpage" name="keywords"/>
<meta content="Client information" name="description" />
<link href="css/wca.css" rel="stylesheet" type="text/css">
<title>Client Details</title>
</head>

<body>
	<div class="wrapper">
		<?php include 'top.php'; ?>
		<div class="content">
		<?php if (isset($_SESSION['user'])): ?>
			<h1>Client Details</h1>
			<table class="clienttable">
				<tr>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Address</th>
					<th>Suburb</th>
					<th>Postcode</th>
					<th>Phone</th>
					<th>Email</th>
					<th>Date of Purchase</th>
					<th>Salesperson</th>
					<th>Car</th>
				</tr>
				<tr>
					<td>John</td>
					<td>Smith</td>
					<td>5 Heatherton Road</td>
					<td>Enoggera</td>
					<td>4051</td>
					<td>123456789</td>
					<td>Jsmith@gmail.com</td>
					<td>21/6/2012</td>
					<td>3</td> <!--This will display the salespersons name -->
					<td>5</td> <!--This will display the car that was purchased by the customer -->
				</tr>
				<tr>
					<td>Mary</td>
					<td>Duff</td>
					<td>5/10 Disney Street</td>
					<td>Gaythorne</td>
					<td>4051</td>
					<td>987654321</td>
					<td>maryduff@hotmail.com</td>
					<td>9/5/2013</td>
					<td>2</td>
					<td>10</td>
				</tr>
			</table>
		<?php else: ?>
		<h1>Not Authenticated</h1>
		<?php endif; ?>
		</div>	
	</div>
	<footer>
		<a href="pages/privacy_policy.html">Privacy Policy </a> 
		<p>© 2013 West Coast Auto</p>
	</footer>
</body>
</html>