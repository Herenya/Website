<?php session_start(); ?>
		<div class="banner">
			<div class="logo">	
				<img src="images/west_coast_auto_logo.png" width="395" height="140" alt="West Coast Auto" title="West Coast Auto" />
			</div>
			<address>
				<ul>
					<li><strong>Phone:</strong> 08 9415 1234</li>
					<li><strong>Email:</strong> ...</li>
					<li><strong>Address:</strong> 375 Albany Hwy, Victoria Park, Perth WA 6100</li>
				</ul>
			</address>
		</div>	
		<div class="mainnav">
			<nav>
				<ul>
				    <li><a href="home.php">Home</a></li>
				    <li><a href="aboutus.php">About Us</a>
				        <ul>
				            <li><a href="history.php">History</a></li>
				            <li><a href="ourvalues.php">Our Values</a></li>
				        </ul>
				    </li>
				    <li><a href="specials.php">Specials</a></li>
				    <li><a href="usedvehicles.php">Used Vehicles</a></li>			    
				    <li><a href="finance.php">Finance</a>
				        <ul>
				            <li><a href="insurance.php">Insurance</a></li>
				        </ul>
				    </li>
				    <li><a href="testimonials.php">Testimonials</a></li>
				    <li><a href="contact.php">Contact</a></li>
				    <?php if (isset($_SESSION['user'])): ?>
				    <li><a href="#">Admin</a>
				    	<ul>
				    		<li><a href="addvehicle.php">Add Vehicle</a></li>
				    		<li><a href="clients.php">Clients Details</a></li>
				    		<li><a href="salesperson.php">Salesperson Details</a></li>
				    	</ul>
				    </li>
				    <li><a href="logout.php">Logout</a></li>
					<?php else: ?>
					<li><a href="employeelogin.php">Employee Login</a></li>
					<?php endif; ?>
				</ul>
			</nav>
		</div>