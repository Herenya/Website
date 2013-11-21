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

			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				$firstname = $_POST["firstname"];
				$lastname = $_POST["lastname"];
				$address = $_POST["address"];
				$suburb = $_POST["suburb"];
				$postcode = $_POST["postcode"];
				$email = $_POST["email"];
				$phone = $_POST["phone"];
				$salesperson = $_POST["salesperson"];
				$purchase = $_POST["purchase"];
				$car = $_POST["car"];

				$tbl_name="customers"; // Table name 

				// Connect to server and select databse.
				mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
				mysql_select_db("$db_name")or die("cannot select DB");

				$sql="INSERT INTO $tbl_name (`First Name`, `Last Name`, `Address`, `Suburb`, `Post Code`, `Phone`, `Email`, `Date Of Purchase`, `SalespersonID`, `CarID`)
				VALUES ('$firstname', '$lastname', '$address', '$suburb', '$postcode', '$email', '$phone', '$purchase', '$salesperson', '$car')";
				$result=mysql_query($sql);
				if($result) {
				    echo("<br>New Client added");
				} else {
				   echo("<br>Data Input Failed");
				}
			}

			?>
			<div class="addclient">
				<form name="addclient" id="addclient" method="POST">
					<h2>Add New Client</h2>
						<span>First Name: </span>
						<label class="firstname">
							<input id="firstname" class="inputLeft" type="text" name="firstname" />
						</label>
						<label class="lastname">
						<span>Last Name: </span>
							<input id="lastname" type="text" name="lastname" />
						</label><br>
						<span>Address: </span>
						<label class="address">
							<input id="address" class="inputLeft" type="text" name="address" />
						</label>
						<label class="suburb">
						<span>Suburb: </span>
							<input id="suburb" type="text" name="suburb" />
						</label><br>
						<span>Postcode: </span>
						<label class="postcode">
							<input id="postcode" class="inputLeft" type="text" name="postcode" />
						</label>
						<label class="phone">
						<span>Phone: </span>
							<input id="phone" type="text" name="phone" />
						</label><br>
						<span>Email: </span>
						<label class="clientemail">
							<input id="email" class="inputLeft" type="text" name="email" />
						</label>
						<label class="salesperson">
						<span>Salesperson: </span>
							<input id="salesperson" type="text" name="salesperson" />
						</label><br>
						<label class="purchase">
						<span>Date of Purchase: </span>
							<input id="purchase" class="inputLeft" type="text" name="purchase" />
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
				<?php include "credentials.php";
				$tbl_name="customers"; // Table name 

				// Connect to server and select databse.
				mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
				mysql_select_db("$db_name")or die("cannot select DB");

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
					<td><?php echo $row["SalespersonID"]; ?></td> <!--This will display the salespersons name -->
					<td><?php echo $row["CarID"]; ?></td> <!--This will display the car that was purchased by the customer -->
				</tr>
				<?php } ?>
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