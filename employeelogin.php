<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta content="home, index, frontpage" name="keywords"/>
<meta content="Login for employees only" name="description" />
<script type="text/javascript" src="js/jquery-2.0.3.min.js"></script>
<link href="css/wca.css" rel="stylesheet" type="text/css">
<title>Employee Login</title>
</head>

<body>
	<div class="wrapper">
		<?php include 'top.php'; ?>
		<div class="content">
			<div class="login">
				<form name="login" id="login">
					<h1>Login</h1>
					<label class="loginemail">
					<span>Email: </span>
						<input id="email" type="text" name="email" />
					</label><br>
					<label class="password">
					<span>Password: </span>					
						<input id="password" type="text" name="password" /> <!--Only employees who are logged in can access the last tab on the nav bar -->
					</label><br>
					<label class="buttonlogin">
						<input id="button" type="submit" value="Login" />
					</label><br>
					<span id="invalid"></span>
				</form>	
			</div>		
		</div>	
	</div>
	<footer>
		<a href="privacy_policy.php">Privacy Policy </a>
		<p>© 2013 West Coast Auto</p>
	</footer>
<script type="text/javascript">
$(document).ready(function(){
  $("#login").submit(function(event){
    $.post("login.php",
    {
      username: document.getElementById("email").value,
      password: document.getElementById("password").value
    },
    function(data,status){
      if (data === "Fail") {
      	$("#invalid").text("Not valid!").show().fadeOut(3000);
      } else {
      	window.location.replace("home.php");
      };
    });
    event.preventDefault();
  });
});
</script>
</body>
</html>