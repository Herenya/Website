<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta content="add salesperson, database" name="keywords"/>
<meta content="Add salespersons to database" name="description" />
<link href="css/wca.css" rel="stylesheet" type="text/css">
<title>Add Salesperson</title>
</head>

<body>
	<div class="wrapper">
		<?php include 'top.php'; ?>
		<div class="content">
		<?php if (isset($_SESSION['user'])): ?>
			<div class="addsalesperson">
				<form name="addsalesperson" id="addsalesperson">
					<h1>Client Form</h1>
						<span>Salesperson ID: </span>
						<label class="salespersonid">
							<input id="salespersonid" type="text" name="salespersonid" />
						</label>
						<label class="salespersonname">
						<span>Name: </span>
							<input id="name" type="text" name="name" />
						</label><br>
						<label class="salespersonphone">
						<span>Phone: </span>
							<input id="phone" type="text" name="phone" />
						</label>
						<label class="salespersonemail">
						<span>Email: </span>
							<input id="email" type="text" name="email" />
						</label><br>
						<label class="buttonsales">
							<input id="button" type="submit" value="Add Salesperson" />
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