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
			$manufacturer = $model = $category = $year = $price = "";
			$kilometres = $expiry = $rego = $colour = $vin = $cylinders = "";
			$fuel = $transmission = $special = $sold ="";
			$formError = $dbError = false;

			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				$manufacturer = $_POST["manufacturer"];
				if (!empty($_POST["model"])){$model = $_POST["model"];} else {$formError = true;}
				$category = $_POST["category"];
				if (!empty($_POST["year"])){$year = $_POST["year"];} else {$formError = true;}
				if (!empty($_POST["price"])){$price = $_POST["price"];} else {$formError = true;}
				if (!empty($_POST["kilometres"])){$kilometres = $_POST["kilometres"];} else {$formError = true;}
				$expiry = $_POST["expiry"];
				$rego = $_POST["rego"];
				$colour = $_POST["colour"];
				if (!empty($_POST["vin"])){$vin = $_POST["vin"];} else {$formError = true;}
				if (!empty($_POST["cylinders"])){$cylinders = $_POST["cylinders"];} else {$formError = true;}
				if (!empty($_POST["fuel"])){$fuel = $_POST["fuel"];} else {$formError = true;}
				if (!empty($_POST["transmission"])){$transmission = $_POST["transmission"];} else {$formError = true;}
				$special = $_POST["special"];
				$sold = $_POST["sold"];

				if ($_FILES["img1"]["error"] == 0){
					$tmpName = $_FILES['img1']['tmp_name'];
					$fp = fopen($tmpName, 'r');
					$data = fread($fp, filesize($tmpName));
					$data = addslashes($data);
					fclose($fp);
					$img1 = $data;
				} else {$formError = true;}

				if ($_FILES["img2"]["error"] == 0){
					$tmpName = $_FILES['img2']['tmp_name'];
					$fp = fopen($tmpName, 'r');
					$data = fread($fp, filesize($tmpName));
					$data = addslashes($data);
					fclose($fp);
					$img2 = $data;
				} else {$formError = true;}

				if ($_FILES["img3"]["error"] == 0){
					$tmpName = $_FILES['img3']['tmp_name'];
					$fp = fopen($tmpName, 'r');
					$data = fread($fp, filesize($tmpName));
					$data = addslashes($data);
					fclose($fp);
					$img3 = $data;
				} else {$formError = true;}

				if (!$formError){
					$tbl_name="cars"; // Table name 

					// Connect to server and select databse.
					mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
					mysql_select_db("$db_name")or die("cannot select DB");

					$sql="INSERT INTO $tbl_name (`CategoryID`, `ManufacturerID`,
					 `Model`, `Year`, `Price`, `Kilometres`, `Colour`, `Registration Expiry`,
					 `Registration Plate`, `VIN`, `Cylinders`, `Fuel`, `Transmission`,
					 `Sold`, `Special`, `Img1`, `Img2`, `Img3`)
					VALUES ('$category', '$manufacturer', '$model', '$year',
					 	'$price', '$kilometres', '$colour', '$expiry', '$rego',
					 	'$vin', '$cylinders', '$fuel', '$transmission', '$sold',
					 	'$special', '$img1', '$img2', '$img3')";
					$result=mysql_query($sql);
					if($result) {
					    echo("<br>New Car added");
					} else {
						$dbError = true;
						echo mysql_errno() . ": " . mysql_error() . "\n";
					}
				}
			}

			?>
			<div class="addvehicle">
				<form name="addvehicle" enctype="multipart/form-data" id="addvehicle" method="POST">
					<h2>Vehicle Form</h2>
					<label>
					<span>Special:</span>
						<select class="inputLeft" name="special">
							<option value="0">No</option>
							<option value="1">Yes</option>
						</select>
					</label>
					<label>
					<span>Manufacturer: </span>
						<select name="manufacturer">
							<option value="Toyota">Toyota</option>
							<option value="Holden">Holden</option>
							<option value="Ford">Ford</option>
						</select>
					</label><br>
					<label>												
					<span>Model: </span>
						<input id="model" class="inputLeft" type="text" name="model" 
							<?php if ($formError){if(empty($model)){echo 'placeholder="Required"';}else{echo 'value="'.$model.'"';}}?>
						/>
					</label>
					<label>
					<span>Category: </span>
						<select name="category">
							<option value="Ute">Ute</option>
							<option value="4WD">4WD</option>
							<option value="Wagon">Wagon</option>
						</select>
					</label><br>
					<label>
					<span>Year: </span>
						<input id="year" class="inputLeft" type="text" name="year" 
							<?php if ($formError){if(empty($year)){echo 'placeholder="Required"';}else{echo 'value="'.$year.'"';}}?>
						/>
					</label>
					<label>
					<span>Price: </span>
						<input id="price" type="text" name="price" 
							<?php if ($formError){if(empty($price)){echo 'placeholder="Required"';}else{echo 'value="'.$price.'"';}}?>
						/>
					</label><br>
					<label>
					<span>Kilometres: </span>
						<input id="kilometres" class="inputLeft" type="text" name="kilometres" 
							<?php if ($formError){if(empty($kilometres)){echo 'placeholder="Required"';}else{echo 'value="'.$kilometres.'"';}}?>
						/>
					</label>
					<label>
					<span>Reg Expiry: </span>
						<input id="expiry" type="text" name="expiry" />
					</label><br>
					<label>
					<span>Reg Plate: </span>
						<input id="rego" class="inputLeft" type="text" name="rego" />
					</label>
					<label>
					<span>Colour: </span>
						<select name="colour">
							<option value="pink">Pink</option>
							<option value="black">Black</option>
							<option value="purple">Purple</option>
						</select>
					</label><br>
					<label>
					<span>VIN: </span>
						<input id="vin" class="inputLeft" type="text" name="vin" 
							<?php if ($formError){if(empty($vin)){echo 'placeholder="Required"';}else{echo 'value="'.$vin.'"';}}?>
						/>
					</label>
					<label>
					<span>Cylinders: </span>
						<input id="cylinders" type="text" name="cylinders" 
							<?php if ($formError){if(empty($cylinders)){echo 'placeholder="Required"';}else{echo 'value="'.$cylinders.'"';}}?>
						/>
					</label><br>
					<label>
					<span>Fuel: </span>
						<input id="fuel" class="inputLeft" type="text" name="fuel" 
							<?php if ($formError){if(empty($fuel)){echo 'placeholder="Required"';}else{echo 'value="'.$fuel.'"';}}?>
						/>
					</label>
					<label>
					<span>Transmission: </span>
						<input id="transmission" type="text" name="transmission" 
							<?php if ($formError){if(empty($transmission)){echo 'placeholder="Required"';}else{echo 'value="'.$transmission.'"';}}?>
						/>
					</label><br>
					<label>
					<span>Sold: </span>
						<select name="sold" class="inputLeft" >
							<option value="0">No</option> <!--If sold the car will not show up on the used vehicles page -->
							<option value="1">Yes</option>
						</select>
					</label>
					<label>
					<span style="width: 100px">Image1: </span>
						<input name="MAX_FILE_SIZE" value="1024000" type="hidden">
						<input id="img1" accept="image/*" type="file" name="img1" style="width: 220px" />
					</label><br>
					<label>
					<span style="width: 100px">Image2: </span>
						<input id="img2" class="inputLeft" accept="image/*" type="file" name="img2"  style="width: 220px" />
					</label>
					<label>
					<span style="width: 100px">Image3: </span>
						<input id="img3" accept="image/*" type="file" name="img3"  style="width: 220px" />
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
		<a href="privacy_policy.php">Privacy Policy </a>
		<p>© 2013 West Coast Auto</p>
	</footer>
</body>
</html>