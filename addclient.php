<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta content="home, index, frontpage" name="keywords"/>
<meta content="Add clients to database" name="description" />
<link href="css/wca.css" rel="stylesheet" type="text/css">
<title>Add Clients</title>
</head>

<body>
	<div class="wrapper">
		<?php include 'top.php'; ?>
		<div class="content">
		<?php if (isset($_SESSION['user'])): ?>
			<div class="addclient">
				<form name="addclient" id="addclient">
					<h1>Client Form</h1>
						<span>First Name: </span>
						<label class="firstname">
							<input id="firstname" type="text" name="firstname" />
						</label>
						<label class="lastname">
						<span>Last Name: </span>
							<input id="lastname" type="text" name="lastname" />
						</label><br>
						<span>Address: </span>
						<label class="address">
							<input id="address" type="text" name="address" />
						</label>
						<label class="suburb">
						<span>Suburb: </span>
							<input id="suburb" type="text" name="suburb" />
						</label><br>
						<span>Postcode: </span>
						<label class="postcode">
							<input id="postcode" type="text" name="postcode" />
						</label>
						<label class="phone">
						<span>Phone: </span>
							<input id="phone" type="text" name="phone" />
						</label><br>
						<span>Email: </span>
						<label class="clientemail">
							<input id="email" type="text" name="email" />
						</label>
						<label class="salesperson">
						<span>Salesperson: </span>
							<input id="salesperson" type="text" name="salesperson" />
						</label><br>
						<label class="purchase">
						<span>Date of Purchase: </span>
							<input id="purchase" type="text" name="purchase" />
						</label>
						<label class="clientcar">
						<span>Car Purchased: </span>
							<input id="car" type="text" name="car" />
						</label><br>
						<label class="buttonclient">
							<input id="button" type="submit" value="Add Client" />
						</label>
				</form>	
			</div>
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