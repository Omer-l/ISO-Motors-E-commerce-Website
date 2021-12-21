<?php
include("./scripts/common.php");
//DOCTYPE etc
outputHeader("Home");
//NAVBAR
outputBannerNavigation("Home");
?>

<div class="carousel slide bg-dark" data-ride="carousel">
	<div class="carousel-inner">
		<div class="carousel-item active">
			<div class="container" id="crslBtn">
				<img class="d-block w-100" src="./img/cars/Audi/Audi A4.png" alt="First slide" id="crslImg">
				<div class="carousel-caption d-none d-md-block">
					<h1> Audi </h1>
				</div>
			</div>
		</div>
		<div class="carousel-item">
			<div class="container" id="crslBtn">
				<img class="d-block w-100" src="./img/cars/Merc/Mercedes G Wagon.png" alt="Second slide" id="crslImg">
				<div class="carousel-caption d-none d-md-block">
					<h1> Mercedes </h1>
				</div>
			</div>
		</div>
		<div class="carousel-item">
			<div class="container" id="crslBtn">
				<img class="d-block w-100" src="./img/cars/RR/Rolls Royce Wraith.png" alt="Third slide" id="crslImg">
				<div class="carousel-caption d-none d-md-block">
					<h1> Rolls Royce </h1>
				</div>
			</div>
		</div>
		<div class="carousel-item">
			<div class="container" id="crslBtn">
				<img class="d-block w-100" src="./img/cars/Bentley/Bentley New Bentayga.png" alt="Third slide"
					id="crslImg">
				<div class="carousel-caption d-none d-md-block">
					<h1> Bentley </h1>
				</div>
			</div>
		</div>
		<div class="carousel-item" id="crslBtn">
			<div class="container">
				<img class="d-block w-100" src="./img/cars/Tesla/Tesla Model 3.png" alt="Fifth slide" id="crslImg">
				<div class="carousel-caption d-none d-md-block">
					<h1> Tesla </h1>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="shopProduct">
	<h2>ISO-Motor cars.</h2>
</div>
<div id="shopProduct">
	<p>ISO-Motor's car range covers every passenger car segment: from the urban microcar by smart, to
		the premium and luxury vehicles by mercedes-benz and Bentley, to the performance and sports
		cars by tesla. in this way, the cars division of ISO-Motor's ensures individual mobility for a
		vast spectrum of customer needs. the company has set itself the goal of selling the world’s
		safest and most efficient cars. with the technology brand eq, ISO-Motor cars are driving
		forward the systematic development of alternative drives: the aim is to electrify the entire
		portfolio by 2022.
	</p>
</div>
<div class="container text-center bg-dark text-white">
	<h1> Brands we sell </h1>
	<div class="container w-100 bg-dark">
		<div class="row  bg-dark" style="background-colour: black;">
			<div class="col-sm">
				<img class="d-block w-100" src="./img/cars/Brand/Tesla Logo.png" id="homeLogo">
			</div>
			<div class="col-sm">
				<img class="d-block w-100" src="./img/cars/Brand/Rolls Royce.png" id="homeLogo">
			</div>
			<div class="col-sm">
				<img class="d-block w-100" src="./img/cars/Brand/Mercedes Logo.png" id="homeLogo">
			</div>
		</div>
		<div class="row">
			<div class="col-sm">
				<img class="d-block w-100" src="./img/cars/Brand/Audi Logo.png" id="homeLogo">
			</div>
			<div class="col-sm">
				<img class="d-block w-100" src="./img/cars/Brand/Bentley Logo.png" id="homeLogo">
			</div>
		</div>
	</div>
</div>
<div id="shopProduct" class="text-center">
	<h1> RECOMMENDED PRODUCTS <h1>
</div>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner" id="shopProduct">
		<div class="carousel-item active">
			<div class="container" id="crslBtn">
				<img class="d-block w-100" src="./img/cars/RR/Rolls Royce Wraith.png" alt="First slide"
					style="height: 400px;">
				<div class="carousel-caption d-none d-md-block">
					<button type="submit" class="btn btn-primary" style="float: center;">Add To Cart</button>
				</div>
			</div>
		</div>
		<div class="carousel-item">
			<div class="container" id="crslBtn">
				<img class="d-block w-100" src="./img/cars/Merc/Mercedes Bb Class.png" alt="Second slide"
					style="height: 400px;">
				<div class="carousel-caption d-none d-md-block">
					<button type="submit" class="btn btn-primary" style="float: center;">Add To Cart</button>
				</div>
			</div>
		</div>
		<div class="carousel-item">
			<div class="container" id="crslBtn">
				<img class="d-block w-100" src="./img/cars//Audi/Audi A4.png" alt="Third slide" style="height: 400px;">
				<div class="carousel-caption d-none d-md-block">
					<button type="submit" class="btn btn-primary" style="float: center;">Add To Cart</button>
				</div>
			</div>
		</div>
	</div>
	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>

<!-- end body and output footer -->
<?php outputFooter() ?>