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
			<?php include "credentials.php";
			// // define variables and set to empty values
			$carid = $manufacturer = $model = $category = $year = $price = "";
			$kilometres = $expiry = $rego = $colour = $vin = $cylinders = "";
			$fuel = $transmission = $special = $sold ="";

			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				$carid = $_POST["carid"];
				$manufacturer = $_POST["manufacturer"];
				$model = $_POST["model"];
				$category = $_POST["category"];
				$year = $_POST["year"];
				$email = $_POST["email"];
				$price = $_POST["price"];
				$kilometres = $_POST["kilometres"];
				$expiry = $_POST["expiry"];
				$rego = $_POST["rego"];
				$colour = $_POST["colour"];
				$vin = $_POST["vin"];
				$cylinders = $_POST["cylinders"];
				$fuel = $_POST["fuel"];
				$transmission = $_POST["transmission"];
				$special = $_POST["special"];
				$sold = $_POST["sold"];

				$tmpName = $_FILES['img1']['tmp_name'];
				$fp = fopen($tmpName, 'r');
				$data = fread($fp, filesize($tmpName));
				$data = addslashes($data);
				fclose($fp);
				$img1 = $data;

				$tmpName = $_FILES['img2']['tmp_name'];
				$fp = fopen($tmpName, 'r');
				$data = fread($fp, filesize($tmpName));
				$data = addslashes($data);
				fclose($fp);
				$img2 = $data;

				$tmpName = $_FILES['img3']['tmp_name'];
				$fp = fopen($tmpName, 'r');
				$data = fread($fp, filesize($tmpName));
				$data = addslashes($data);
				fclose($fp);
				$img3 = $data;

				$tbl_name="cars"; // Table name 

				// Connect to server and select databse.
				mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
				mysql_select_db("$db_name")or die("cannot select DB");

				$sql="INSERT INTO $tbl_name (`CarID`, `CategoryID`, `ManufacturerID`,
				 `Model`, `Year`, `Price`, `Kilometres`, `Colour`, `Registration Expiry`,
				 `Registration Plate`, `VIN`, `Cylinders`, `Fuel`, `Transmission`,
				 `Sold`, `Special`, `Img1`, `Img2`, `Img3`)
				VALUES ('$carid', '$category', '$manufacturer', '$model', '$year',
				 	'$price', '$kilometres', '$colour', '$expiry', '$rego',
				 	'$vin', '$cylinders', '$fuel', '$transmission', '$sold',
				 	'$special', '$img1', '$img2', '$img3')";
				$result=mysql_query($sql);
				if($result) {
				    echo("<br>New Car added");
				} else {
				   echo("<br>Data Input Failed");
				}
			}

			?>
			<div class="addvehicle">
				<form name="addvehicle" enctype="multipart/form-data" id="addvehicle" method="POST">
					<h2>Vehicle Form</h2>
					<label>												
					<span>Car Identification: </span>
						<input id="carid" class="inputLeft" type="text" name="carid" />
					</label>
					<label>
					<span>Special:</span>
						<select name="special">
							<option value="0">No</option>
							<option value="1">Yes</option>
						</select>
					</label><br>
					<label>
					<span>Manufacturer: </span>
						<select class="inputLeft" name="manufacturer">
							<option value="Toyota">Toyota</option>
							<option value="Holden">Holden</option>
							<option value="Ford">Ford</option>
						</select>
					</label>
					<label>												
					<span>Model: </span>
						<input id="model" type="text" name="model" />
					</label><br>
					<label>
					<span>Category: </span>
						<select class="inputLeft" name="category">
							<option value="Ute">Ute</option>
							<option value="4WD">4WD</option>
							<option value="Wagon">Wagon</option>
						</select>
					</label>
					<label>
					<span>Year: </span>
						<input id="year" type="text" name="year" />
					</label><br>
					<label>
					<span>Price: </span>
						<input class="inputLeft" id="price" type="text" name="price" />
					</label>
					<label>
					<span>Kilometres: </span>
						<input id="kilometres" type="text" name="kilometres" />
					</label><br>
					<label>
					<span>Reg Expiry: </span>
						<input class="inputLeft" id="expiry" type="text" name="expiry" />
					</label>
					<label>
					<span>Reg Plate: </span>
						<input id="rego" type="text" name="rego" />
					</label><br>
					<label>
					<span>Colour: </span>
						<select class="inputLeft" name="colour">
							<option value="pink">Pink</option>
							<option value="black">Black</option>
							<option value="purple">Purple</option>
						</select>
					</label>
					<label>
					<span>VIN: </span>
						<input id="vin" type="text" name="vin" />
					</label><br>
					<label>
					<span>Cylinders: </span>
						<input class="inputLeft" id="cylinders" type="text" name="cylinders" />
					</label>
					<label>
					<span>Fuel: </span>
						<input id="fuel" type="text" name="fuel" />
					</label><br>
					<label>
					<span>Transmission: </span>
						<input class="inputLeft" id="transmission" type="text" name="transmission" />
					</label>
					<label>
					<span>Sold: </span>
						<select name="sold">
							<option value="0">No</option> <!--If sold the car will not show up on the used vehicles page -->
							<option value="1">Yes</option>
						</select>
					</label><br>
					<label>
					<span>Image1: </span>
						<input name="MAX_FILE_SIZE" value="1024000" type="hidden">
						<input class="inputLeft" id="img1" accept="image/*" type="file" name="img1" />
					</label>
					<label>
					<span>Image2: </span>
						<input id="img2" accept="image/*" type="file" name="img2" />
					</label><br />
					<label>
					<span>Image3: </span>
						<input class="inputLeft" id="img3" accept="image/*" type="file" name="img3" />
					</label><br />
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