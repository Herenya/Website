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
			<?php include "credentials.php";
			// // define variables and set to empty values
			$firstname = $lastname = $address = $suburb = $postcode = $email = $phone = $salesperson = $purchase = $car = "";
			$formError = $dbError = false;

			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				if (!empty($_POST["firstname"])){$firstname = $_POST["firstname"];} else {$formError = true;}
				if (!empty($_POST["lastname"])){$lastname = $_POST["lastname"];} else {$formError = true;}
				if (!empty($_POST["address"])){$address = $_POST["address"];} else {$formError = true;}
				if (!empty($_POST["suburb"])){$suburb = $_POST["suburb"];} else {$formError = true;}
				if (!empty($_POST["postcode"])){$postcode = $_POST["postcode"];} else {$formError = true;}
				if (!empty($_POST["email"])){$email = $_POST["email"];} else {$formError = true;}
				if (!empty($_POST["phone"])){$phone = $_POST["phone"];} else {$formError = true;}
				if (!empty($_POST["salesperson"])){$salesperson = $_POST["salesperson"];} else {$formError = true;}
				if (!empty($_POST["purchase"])){$purchase = $_POST["purchase"];} else {$formError = true;}
				if (!empty($_POST["car"])){$car = $_POST["car"];} else {$formError = true;}

				if (!$formError){
					// Connect to server and select databse.
					mysql_connect("$host", "$username", "$password")or die("cannot connect");
					mysql_select_db("$db_name")or die("cannot select DB");

					$tbl_name="customers"; // Table name
					$sql="INSERT INTO $tbl_name (`First Name`, `Last Name`, `Address`, `Suburb`, `Post Code`, `Phone`, `Email`, `Date Of Purchase`, `SalespersonID`, `CarID`)
					VALUES ('$firstname', '$lastname', '$address', '$suburb', '$postcode', '$email', '$phone', '$purchase', '$salesperson', '$car')";
					$result=mysql_query($sql);
					if(!$result) {
					 	$dbError = true;
					 	echo '<div style="text-align: center"><h2>Invalid CarID</h2></div>';
					}
				}
			}

			// Connect to server and select databse.
			mysql_connect("$host", "$username", "$password")or die("cannot connect");
			mysql_select_db("$db_name")or die("cannot select DB");

			$tbl_name="salesperson"; // Table name
			$sql="SELECT `SalespersonID`, `Name` FROM $tbl_name";
			$salesppl=mysql_query($sql);
			if(!$salesppl) {
			 	$dbError = true;
			 	echo mysql_errno() . ": " . mysql_error() . "\n";
			}

			?>
			<div class="addclient">
				<form name="addclient" id="addclient" method="POST">
					<h2>Add New Client</h2>
					<label class="firstname">
					<span>First Name: </span>
						<input id="firstname" class="inputLeft" type="text" name="firstname"
						<?php if ($formError){if(empty($firstname)){echo 'placeholder="Required"';}else{echo 'value="'.$firstname.'"';}}?> />
					</label>
					<label class="lastname">
						<span>Last Name: </span>
						<input id="lastname" type="text" name="lastname"
						<?php if ($formError){if(empty($lastname)){echo 'placeholder="Required"';}else{echo 'value="'.$lastname.'"';}}?> />
					</label><br>
					<label class="address">
						<span>Address: </span>
						<input id="address" class="inputLeft" type="text" name="address"
						<?php if ($formError){if(empty($address)){echo 'placeholder="Required"';}else{echo 'value="'.$address.'"';}}?> />
					</label>
					<label class="suburb">
						<span>Suburb: </span>
						<input id="suburb" type="text" name="suburb"
						<?php if ($formError){if(empty($suburb)){echo 'placeholder="Required"';}else{echo 'value="'.$suburb.'"';}}?> />
					</label><br>
					<label class="postcode">
						<span>Postcode: </span>
						<input id="postcode" class="inputLeft" type="text" name="postcode"
						<?php if ($formError){if(empty($postcode)){echo 'placeholder="Required"';}else{echo 'value="'.$postcode.'"';}}?> />
					</label>
					<label class="phone">
						<span>Phone: </span>
						<input id="phone" type="text" name="phone"
						<?php if ($formError){if(empty($phone)){echo 'placeholder="Required"';}else{echo 'value="'.$phone.'"';}}?> />
					</label><br>
					<label class="clientemail">
						<span>Email: </span>
						<input id="email" class="inputLeft" type="text" name="email"
						<?php if ($formError){if(empty($email)){echo 'placeholder="Required"';}else{echo 'value="'.$email.'"';}}?> />
					</label>
					<label class="salesperson">
						<span>SalespersonID: </span>
						<select id="salesperson" name="salesperson">
						<?php while($row = mysql_fetch_assoc($salesppl)) {?>
							<option value="<?php echo $row["SalespersonID"]; ?>"><?php echo $row["Name"]; ?></option>
						<?php } ?>
						</select>
					</label><br>
					<label class="purchase">
						<span>Date of Purchase: </span>
						<input id="purchase" class="inputLeft" type="text" name="purchase"
						<?php if ($formError){if(empty($purchase)){echo 'placeholder="Required"';}else{echo 'value="'.$purchase.'"';}}?> />
					</label>
					<label class="clientcar">
						<span>Car Purchased: </span>
						<input id="car" type="text" name="car" placeholder="Requires Valid CarID"
						<?php if ($formError){if(empty($car)){echo 'placeholder="Required"';}else{echo 'value="'.$car.'"';}}?> />
					</label><br>
					<label class="buttonclient">
						<input id="button" type="submit" value="Add Client" />
					</label>
				</form>
			</div>
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
				<?php

				$tbl_name="customers"; // Table name
				$sql="SELECT * FROM $tbl_name";
				$result=mysql_query($sql);
				while($row = mysql_fetch_assoc($result)) {?>
				<tr>
					<td><?php echo $row["First Name"]; ?></td>
					<td><?php echo $row["Last Name"]; ?></td>
					<td><?php echo $row["Address"]; ?></td>
					<td><?php echo $row["Suburb"]; ?></td>
					<td><?php echo $row["Post Code"]; ?></td>
					<td><?php echo $row["Phone"]; ?></td>
					<td><?php echo $row["Email"]; ?></td>
					<td><?php echo $row["Date Of Purchase"]; ?></td>
					<td><?php echo $row["SalespersonID"]; ?></td>
					<td><?php echo $row["CarID"]; ?></td>
				</tr>
				<?php } ?>
			</table>
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
