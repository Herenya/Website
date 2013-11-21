<?php include "credentials.php";
	$tbl_name="cars"; // Table name 

	$id=$_GET['id']; 
	$image=$_GET['image']; 
	// Connect to server and select databse.
	mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
	mysql_select_db("$db_name")or die("cannot select DB");

	$sql="SELECT $image FROM $tbl_name WHERE CarID='$id'";
	$result=mysql_query($sql);
	header("Content-type: image/jpeg");
    echo mysql_result($result, 0);

?>