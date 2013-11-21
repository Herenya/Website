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
			<?php include "credentials.php";
			// // define variables and set to empty values
			$name = $email = $phone = $pword = "";

			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				$name = $_POST["name"];
				$email = $_POST["email"];
				$phone = $_POST["phone"];
				$pword = $_POST["password"];

				$tbl_name="salesperson"; // Table name 

				// Connect to server and select databse.
				mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
				mysql_select_db("$db_name")or die("cannot select DB");

				$sql="INSERT INTO $tbl_name (Name, Phone, Email, Password) VALUES ('$name', '$phone', '$email', '$pword')";
				$result=mysql_query($sql);
			}

			?>
			<div class="addsalesperson">
				<form name="addsalesperson" id="addsalesperson" method="post">
					<h2>Add New Salesperson</h2>
					<label>
					<span>Name: </span>
						<input id="name" class="inputLeft" type="text" name="name" />
					</label>
					<label>
					<span>Phone: </span>
						<input id="phone" type="text" name="phone" />
					</label><br />
					<label>
					<span>Email: </span>
						<input id="email" class="inputLeft" type="text" name="email" />
					</label>
					<label>
					<span>Password: </span>
						<input id="password" type="text" name="password" />
					</label><br />
					<label>
						<input id="button" type="submit" value="Add Salesperson" />
					</label>
				</form>	
			</div>
			<h1>Salesperson Details</h1>
			<table class="employees">
				<tr>
					<th>Name</th>
					<th>Phone</th>
					<th>Email</th>
				</tr>
				<?php include "credentials.php";
				$tbl_name="salesperson"; // Table name 

				// Connect to server and select databse.
				mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
				mysql_select_db("$db_name")or die("cannot select DB");

				$sql="SELECT Name, Phone, Email FROM $tbl_name";
				$result=mysql_query($sql);
				while($row = mysql_fetch_assoc($result)) {?>
				<tr>
					<td><?php echo $row["Name"]; ?></td>
					<td><?php echo $row["Phone"]; ?></td>
					<td><?php echo $row["Email"]; ?></td>
				</tr>
				<?php } ?>
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