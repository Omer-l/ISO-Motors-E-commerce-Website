<?php
include("./scripts/common.php");
//DOCTYPE etc
outputHeader("Login/Register");
//NAVBAR
outputBannerNavigation("Login/Register");
?>
<div style="background-color: black; color: white;">
	<!-- login form -->
	<div id="login" class="float-left">
		<h1> Login </h1>
		<form name="logForm" action="./scripts/php/customer_login.php" method="post">
			<!-- Username -->
			<div class="form-group">
				<label for="username">Email</label>
				<input type="username" class="form-control" name="logemail" id="username" placeholder="Enter Email" required>
			</div>
			<!--  Password -->
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" class="form-control" name="logpassword" id="password" placeholder="Password" required>
			</div>
			<p class="text-light bg-dark" id="isLoggedIn"></p>
			<!-- log in button -->
			<button id="logButton" type="submit" class="btn btn-primary">Log in</button>
		</form>
		<p id="LoginPara"><p id="ErrorMessages"></p></p>
	</div>
	<!-- Registration form -->
	<div id="registration" class="float-right" method>
		<h1>Don't have an account?<br>Register</h1>
		<form name="regForm" action="./scripts/php/add_customer.php" method="post">
			<!-- Username -->
			<div class="form-group">
				<label for="username">Username</label>
				<input type="username" class="form-control" name="username" id="regUsername" placeholder="Enter username" require>
			</div>
			<!-- Country -->
			<div class="form-group">
				<label for="phone">Country </label>
				<input type="tel" class="form-control" name="country" id="regCountry" placeholder="Enter Country" require>
				<!-- Address -->
				<div class="form-group">
					<label for="phone">Address </label>
					<input type="tel" class="form-control" name="address" id="regAddress" placeholder="Enter Address" require>
				</div>
				<!-- Post code -->
				<div class="form-group">
					<label for="phone">Postcode</label>
					<input type="tel" class="form-control" name="postcode" id="regPostcode" placeholder="Enter postcode" require>
				</div>
			</div>
			<!-- Email -->
			<div class="form-group">
				<label>Email address</label>
				<input type="email" class="form-control" name="email" id="regEmail" placeholder="Enter email" require>
			</div>
			<!-- phone -->
			<div class="form-group">
				<label for="phone">Phone Number </label>
				<input type="tel" class="form-control" name="phone" id="regPhone" placeholder="Enter phone number" require>
			</div>
			<!--  Password -->
			<p class="text-light bg-dark" id="isPasswordRegExp"></p>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" class="form-control" name="password" id="regPassword" placeholder="Password" require>
			</div>
			<!-- Re-enter password -->
			<div class="form-group">
				<input type="password" class="form-control" id="regPassword2" placeholder="Re-enter Password" require>
			</div>
			<button id="regButton" type="submit" class="btn btn-primary">Sign up</button>
			<div class="form-group">
				<label for="terms">By signing up you agree to the terms in the link below</label>
				<a href="https://www.privacypolicies.com/live/cde24373-fb64-454a-899c-2e0347b74c9f">Terms and conditions</a>
			</div>
		</form>
	</div>
</div>
<div style="background-color: black;">
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
</div>
<!-- Script for checking login INCLUDES AJAX-->
<script src="./js/loginregister.js">
            //Global variables 
            let loggedInStr = "Logged in <button onclick='logout()'>Logout</button>";
            let loginStr = document.getElementById("LoginPara").innerHTML;
            let request = new XMLHttpRequest();
            
            //Check login when page loads
            window.onload = checkLogin;
            
            //Checks whether user is logged in.
            function checkLogin(){
                //Create event handler that specifies what should happen when server responds
                request.onload = function(){
                    if(request.responseText === "ok"){
                        document.getElementById("LoginPara").innerHTML = loggedInStr;
                    }
                    else{
                        console.log(request.responseText);
                        document.getElementById("LoginPara").innerHTML  = loginStr;
                    }
                };
                //Set up and send request
                request.open("GET", "./scripts/php/check_login.php");
                request.send();
            }
            
            //Attempts to log in user to server
            function login(){
                //Create event handler that specifies what should happen when server responds
                request.onload = function(){
                    //Check HTTP status code
                    if(request.status === 200){
                        //Get data from server
                        var responseData = request.responseText;

                        //Add data to page
                        if(responseData === "ok"){
                            document.getElementById("LoginPara").innerHTML = loggedInStr;
                            document.getElementById("ErrorMessages").innerHTML = "";//Clear error messages
                        }
                        else
                            document.getElementById("ErrorMessages").innerHTML = request.responseText;
                    }
                    else
                        document.getElementById("ErrorMessages").innerHTML = "Error communicating with server";
                };

                //Extract login data
                let usrEmail = document.getElementById("logusername").value;
                let usrPassword = document.getElementById("logpassword").value;
                
                //Set up and send request
                request.open("POST", "../scripts/php/customer_login.php");
                request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                request.send("username=" + usrEmail + "&password=" + usrPassword);
            }
            
            //Logs the user out.
            function logout(){
                //Create event handler that specifies what should happen when server responds
                request.onload = function(){
                    checkLogin();
                };
                //Set up and send request
                request.open("GET", "./scripts/php/logout.php");
                request.send();
            }
            
        </script>
<!-- end body and output footer -->
<?php outputFooter() ?>