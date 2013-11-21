<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta content="home, index, frontpage" name="keywords"/>
<meta content="Add vehicles to the database" name="description" />
<link href="css/wca.css" rel="stylesheet" type="text/css">
<title>Add Vehicles</title>
</head>

<body>
	<div class="wrapper">
		<?php include 'top.php'; ?>
		<div class="content">
		<?php if (isset($_SESSION['user'])): ?>
			<div class="addvehicle">
				<form name="addvehicle" id="addvehicle">
					<h1>Vehicle Form</h1>
						<label class="carid">												
						<span>Car Identification: </span>
							<input id="carid" type="text" name="carid" />
						</label>
						<label class="special">
						<span>Special:</span>
							<select name="special">
								<option value="yes">Yes</option>
								<option value="no">No</option>
							</select>
						</label><br>
						<span>Manufacturer: </span>
						<label class="manufacturer">
							<select name="manufacturer">
								<option value="toyota">Toyota</option>
								<option value="holden">Holden</option>
								<option value="ford">Ford</option>
							</select>
						</label>
						<label class="model">												
						<span>Model: </span>
							<input id="model" type="text" name="model" />
						</label><br>
						<span>Category: </span>
						<label class="category">
							<select name="category">
								<option value="ute">Ute</option>
								<option value="4wd">4WD</option>
								<option value="wagon">Wagon</option>
							</select>
						</label>
						<label class="year">
						<span>Year: </span>
							<input id="year" type="text" name="year" />
						</label><br>
						<span>Price: </span>
						<label class="price">
							<input id="price" type="text" name="price" />
						</label>
						<label class="kilometres">
						<span>Kilometres: </span>
							<input id="kilometres" type="text" name="kilometres" />
						</label><br>
						<span>Reg Expiry: </span>
						<label class="expiry">
							<input id="expiry" type="text" name="expiry" />
						</label>
						<label class="rego">
						<span>Reg Plate: </span>
							<input id="rego" type="text" name="rego" />
						</label><br>
						<span>Colour: </span>
						<label class="colour">
							<select name="colour">
								<option value="pink">Pink</option>
								<option value="black">Black</option>
								<option value="purple">Purple</option>
							</select>
						</label>
						<label class="vin">
						<span>VIN: </span>
							<input id="vin" type="text" name="vin" />
						</label><br>
						<span>Cylinders: </span>
						<label class="cylinders">
							<input id="cylinders" type="text" name="cylinders" />
						</label>
						<label class="fuel">
						<span>Fuel: </span>
							<input id="fuel" type="text" name="fuel" />
						</label><br>
						<span>Transmission: </span>
						<label class="transmission">
							<input id="transmission" type="text" name="transmission" />
						</label>
						<label class="sold">
						<span>Sold: </span>
							<select name="sold">
								<option value="yes">Yes</option> <!--If sold the car will not show up on the used vehicles page -->
								<option value="no">No</option>
							</select>
						</label><br>
						<label class="buttonvehicle">
							<input id="button" type="submit" value="Add Vehicle" />
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