<?php
include("./scripts/common.php");
//DOCTYPE etc
outputHeader("Login");
//NAVBAR
outputBannerNavigation("Login");
?>
<div style="background-color: black; color: white;">
	<!-- login form -->
	<div id="login" class="float-left">
		<h1> Login </h1>
		<form name="logForm" action="./scripts/php/customer_login.php" method="post">
			<!-- Username -->
			<div class="form-group">
				<label for="username">Username</label>
				<input type="username" class="form-control" id="username" placeholder="Enter Username" name="email">
			</div>
			<!--  Password -->
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" class="form-control" id="password" placeholder="Password" name="password">
			</div>
			<p class="text-light bg-dark" id="isLoggedIn"></p>
			<!-- log in button -->
			<button id="logButton" style="background-color: black; color: white;" type="submit" class="btn btn-primary"
				onclick="login()">Log in</button>
		</form>
	</div>
</div>
<!-- end body and output footer -->