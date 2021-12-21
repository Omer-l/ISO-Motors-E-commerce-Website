<?php
include("./scripts/common.php");
//DOCTYPE etc
outputHeader("Contact Us");
//NAVBAR
outputBannerNavigation("Contact Us");
?>
<div style="background-color: black; text-white;" <h1>Welcome Customer</h1>
	<form>
		<div style="background-color: black; color: white;" class="float-center">
			<h2>Have any issues / feedback you'd like to give us<br>Send it here</h2>
			<form>
				<!-- Username -->
				<div class="form-group">
					<label for="username">Username</label>
					<input type="username" class="form-control" placeholder="Enter username">
				</div>
				<!-- Phonenumber -->
				<div class="form-group">
					<label for="phone">Phone Number </label>
					<input type="tel" class="form-control" placeholder="Enter phone number">
					<!-- Address -->
					<div class="form-group">
						<label for="phone">Address</label>
						<input type="tel" class="form-control" placeholder="123 Example Street">
					</div>
				</div>
				<!-- Feedback -->
				<div class="form-group">
					<label for="phone">Send message<br></label>
					<textarea rows="4" cols="268.8" name="comment" form="usrform" placeholder="Enter message here!">
                  </textarea>
				</div>
				<!-- Send Feedback -->
				<button id="regButton" type="submit" class="btn btn-primary">Send Message</button>
			</form>
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
			<!-- end body and output footer -->
			<?php outputFooter() ?>