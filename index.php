<?php include 'info.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
	<title><?php echo $companyname ?> - The Only Cloud Hosting Platform You Need</title>

	<!-- CSS  -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@6.5.95/css/materialdesignicons.min.css"> -->
	<script src="//code.iconify.design/1/1.0.6/iconify.min.js"></script>
</head>
<body>

	<div class="navbar-fixed hide scrollspy" id="home">
		<nav class="custom-color">
			<div class="nav-wrapper container">
				<a id="logo-container" href="#home" class="brand-logo">Quick<span class="blue-text">Host</span></a>
				<ul class="right hide-on-med-and-down">
					<li><a href="#product">Product</a></li>
					<li><a href="#pricing">Pricing</a></li>
					<li><a href="#data-centers">Data Centers</a></li>
					<li><a href="#contact-us">Contact Us</a></li>
					<li><a href="#!" style="pointer-events: none;"><i class="material-icons left">phone</i><?php echo $phone ?></a></li>
				</ul>
			</div>
		</nav>
	</div>

	<header>
		<nav role="navigation">
			<div class="nav-wrapper container">
				<a id="logo-container" href="#" class="brand-logo">Quick<span class="blue-text">Host</span></a>
				<ul class="right hide-on-med-and-down">
					<li><a href="#product">Product</a></li>
					<li><a href="#pricing">Pricing</a></li>
					<li><a href="#data-centers">Data Centers</a></li>
					<li><a href="#contact-us">Contact</a></li>
					<li><a href="#sign-in" class="btn modal-trigger">Sign In</a></li>
				</ul>

				<ul id="nav-mobile" class="side-nav">
					<li><a href="#">Navbar Link</a></li>
				</ul>
				<a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
			</div>
		</nav>

		<br><br>

		<div class="container center-align scrollspy" id="home">
			<h1>The best <span class="blue-text">cloud hosting</span> and <span class="blue-text">server</span> you need</h1>
			<br>
			<h5 class="hide-on-med-and-down">We provide the best cloud hosting and VPS servers for all your needs with unlimited support services.</h5>
			<br><br><br>
			<div class="row white-text">

				<div class="col s12">
					<h4>Call us at <?php echo $phone ?><br>to know more about cloud hosting</h4>
				</div>

				<div class="col s12 m4">
					<h1 style="font-weight: 900; margin-right: 30px" class="light-blue-text">1</h1>
					<h5><b>Choose package</b></h5>
					<p class="grey-text text-lighten-1">Choose the package that serves your need and save it in the shopping cart</p>
				</div>
				<div class="col s12 m4">
					<h1 style="font-weight: 900; margin-right: 30px" class="light-blue-text">2</h1>
					<h5><b>Checkout order</b></h5>
					<p class="grey-text text-lighten-1">Choose the package that serves your need and save it in the shopping cart</p>
				</div>
				<div class="col s12 m4">
					<h1 style="font-weight: 900; margin-right: 30px" class="light-blue-text">3</h1>
					<h5><b>Get the features</b></h5>
					<p class="grey-text text-lighten-1">Choose the package that serves your need and save it in the shopping cart</p>
				</div>
			</div>
		</div>
		
	</header>


	<section class="center-align scrollspy" id="product">
		<div class="container">
			<h4 class="josefin grey-text text-darken-3" style="font-weight: 600;"><b>Always provide the best service</b></h4>
			<p>We present a variety of convinience in our service</p>
			<br>
			<div class="row">
				<div class="col s12 m4">
					<div class="card-panel z-depth-0 hoverable">
						<a href="#!" class="btn-large btn-floating z-depth-0 blue"><i class="material-icons">lock</i></a>
						<h5>Free SSL Security</h5>
						<p class="grey-text text-darken-1">Every purchase of a hosting service gets a free SSL security certificate for the website.</p>
					</div>
				</div>
				<div class="col s12 m4">
					<div class="card-panel z-depth-0 hoverable">
						<a href="#!" class="btn-large btn-floating z-depth-0 blue"><i class="material-icons">storage</i></a>
						<h5>Fastest Server</h5>
						<p class="grey-text text-darken-1">We use server connections with the fastest speed so that they can be accessed easily.</p>
					</div>
				</div>
				<div class="col s12 m4">
					<div class="card-panel z-depth-0 hoverable">
						<a href="#!" class="btn-large btn-floating z-depth-0 blue"><i class="material-icons">headset_mic</i></a>
						<h5>24/7 Support</h5>
						<p class="grey-text text-darken-1">If you experience problems with our service, we are ready to help you round the clock.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="grey darken-3 center-align" style="padding: 2% 0">
		<div class="white-text">
			<h3>Call <?php echo $phone ?></h3>
			<h3>To know more about cloud hosting</h3>
		</div>
	</div>

	<section class="center-align scrollspy" id="pricing">
		<div class="container">
			<h4 class="josefin grey-text text-darken-3" style="font-weight: 600;"><b>Popular hosting plans</b></h4>
			<p>We present a variety of convinience in our service</p>
			<br>
			<div class="row">
				<div class="col s12 m4">
					<div class="card-panel z-depth-0">
						<i class="material-icons blue-text">roofing</i>
						<h5>Cloud Pro</h5>
						<br><a href="#!" class="btn-large custom-btn">Get Started</a><br><br>
						<table class="centered bordered">
							<tbody>
								<tr>
									<td>Suitable for start-ups</td>
								</tr>
								<tr>
									<td>1 vCPU</td>
								</tr>
								<tr>
									<td>1 GB RAM</td>
								</tr>
								<tr>
									<td>50 GB SSD</td>
								</tr>
								<tr>
									<td>1 TB Bandwidth</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="col s12 m4">
					<div class="card-panel z-depth-0">
						<i class="material-icons blue-text">store</i>
						<h5>Cloud Premier</h5>
						<br><a href="#!" class="btn-large custom-btn">Get Started</a><br><br>
						<table class="centered bordered">
							<tbody>
								<tr>
									<td>Suitable for medium business</td>
								</tr>
								<tr>
									<td>5 vCPU</td>
								</tr>
								<tr>
									<td>4 GB RAM</td>
								</tr>
								<tr>
									<td>200 GB SSD</td>
								</tr>
								<tr>
									<td>4 TB Bandwidth</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="col s12 m4">
					<div class="card-panel z-depth-0">
						<i class="material-icons blue-text">domain</i>
						<h5>Cloud Enterprise</h5>
						<br><a href="#!" class="btn-large custom-btn">Get Started</a><br><br>
						<table class="centered bordered">
							<tbody>
								<tr>
									<td>Suitable for enterprise business</td>
								</tr>
								<tr>
									<td>10 vCPU</td>
								</tr>
								<tr>
									<td>16 GB RAM</td>
								</tr>
								<tr>
									<td>1 TB SSD</td>
								</tr>
								<tr>
									<td>20 TB Bandwidth</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="grey darken-3 center-align" style="padding: 2% 0">
		<div class="white-text">
			<h3>Call <?php echo $phone ?></h3>
			<h3>To know more about cloud hosting</h3>
		</div>
	</div>

	<section class="center-align">
		<div class="container">
			<h4 class="josefin grey-text text-darken-3" style="font-weight: 600;"><b>Our custom services</b></h4>
			<p>Some extra services we provide our users to beat the competition.</p>
			<br><br>
			<div class="row">
				<div class="col s6 m3">
					<div class="card-panel z-depth-0">
						<span class="iconify" style="font-size: 2.5rem; color: #0c48d5" data-icon="mdi-kubernetes"></span>
						<p style="font-weight: 600">Managed Kubernetes (CI/CD)</p>
						<p class="grey-text text-darken-1">Full flexibility for more agile development.</p>
					</div>
				</div>
				<div class="col s6 m3">
					<div class="card-panel z-depth-0">
						<span class="iconify" style="font-size: 2.5rem; color: #0c48d5" data-icon="mdi-cloud-upload-outline"></span>
						<p style="font-weight: 600">Daily data backup</p>
						<p class="grey-text text-darken-1">Peak protection against data loss round the clock.</p>
					</div>
				</div>
				<div class="col s6 m3">
					<div class="card-panel z-depth-0">
						<span class="iconify" style="font-size: 2.5rem; color: #0c48d5" data-icon="mdi-handshake-outline"></span>
						<p style="font-weight: 600">Cloud Partner Program</p>
						<p class="grey-text text-darken-1">Exclusive benefits and powerful tools for users.</p>
					</div>
				</div>
				<div class="col s6 m3">
					<div class="card-panel z-depth-0">
						<span class="iconify" style="font-size: 2.5rem; color: #0c48d5" data-icon="mdi-rocket-outline"></span>
						<p style="font-weight: 600"><?php echo $companyname ?> Startup Initiative</p>
						<p class="grey-text text-darken-1">Free cloud resources for startups and small businesses.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="grey darken-3 center-align" style="padding: 2% 0">
		<div class="white-text">
			<h3>Call <?php echo $phone ?></h3>
			<h3>To know more about cloud hosting</h3>
		</div>
	</div>

	<section class="center-align scrollspy" id="data-centers">
		<div class="container">
			<h4 class="josefin grey-text text-darken-3" style="font-weight: 600;"><b>Datacenters around the world</b></h4>
			<p>We have high speed data centers in 11 different locations to cover the entire globe</p>
			<br><br>
			<img src="images/datacenter-locations.png" alt="" class="responsive-img">
		</div>
	</section>

	<div class="grey darken-3 center-align" style="padding: 2% 0">
		<div class="white-text">
			<h3>Call <?php echo $phone ?></h3>
			<h3>To know more about cloud hosting</h3>
		</div>
	</div>

	<section class="center-align">
		<div class="container">
			<h4 class="josefin grey-text text-darken-3" style="font-weight: 600;"><b>What our customers say about us</b></h4>
			<p>We have high speed data centers in 11 different locations to cover the entire globe</p>
			<br><br>
			<!-- <div class="row">
				<div class="col s12 m3">
					<div class="card-panel z-depth-0">
						<p>"With <?php echo $companyname ?>, we are more competitive and building smarter server infrastructures in cost-efficient ways."<br><br></p>
						<h5>Nephilia Web</h5>
					</div>
				</div>
				<div class="col s12 m3">
					<div class="card-panel z-depth-0">
						<p>"It's just simple to get started with the <?php echo $companyname ?> setup. We’ve even moved customers from other platforms to <?php echo $companyname ?>."<br><br></p>
						<h5>Anomaly</h5>
					</div>
				</div>
				<div class="col s12 m3">
					<div class="card-panel z-depth-0">
						<p>"<?php echo $companyname ?>’s clear pricing, simplicity, strong performance, and excellent service ensure the up-time and redundancy that is critical to what we do."</p>
						<h5>FireService Rota</h5>
					</div>
				</div>
				<div class="col s12 m3">
					<div class="card-panel z-depth-0">
						<p>"When dealing with staff from <?php echo $companyname ?>, you realize that they actually care for your business."<br><br><br></p>
						<h5>CloudBrick</h5>
					</div>
				</div>
			</div> -->
			<div style="display: flex; justify-content: space-between;">
				<div class="card-panel z-depth-0" style="max-width: 24%; display: flex; flex-direction: column; justify-content: center; align-items: center">
					<p>"With <?php echo $companyname ?>, we are more competitive and building smarter server infrastructures in cost-efficient ways."</p>
					<h5>Nephilia Web</h5>
				</div>
				<div class="card-panel z-depth-0" style="max-width: 24%; display: flex; flex-direction: column; justify-content: center; align-items: center">
					<p>"It's just simple to get started with the <?php echo $companyname ?> setup. We’ve even moved customers from other platforms to <?php echo $companyname ?>."</p>
					<h5>Anomaly</h5>
				</div>
				<div class="card-panel z-depth-0" style="max-width: 24%; display: flex; flex-direction: column; justify-content: center; align-items: center">
					<p>"<?php echo $companyname ?>’s clear pricing, simplicity, strong performance, and excellent service ensure the up-time and redundancy that is critical to what we do."</p>
					<h5>FireService Rota</h5>
				</div>
				<div class="card-panel z-depth-0" style="max-width: 24%; display: flex; flex-direction: column; justify-content: center; align-items: center">
					<p>"When dealing with staff from <?php echo $companyname ?>, you realize that they actually care for your business."</p>
					<h5>CloudBrick</h5>
				</div>
			</div>
		</div>
	</section>

	<div class="grey darken-3 center-align" style="padding: 2% 0">
		<div class="white-text">
			<h3>Call <?php echo $phone ?></h3>
			<h3>To know more about cloud hosting</h3>
		</div>
	</div>

	<section class="center-align scrollspy" id="contact-us">
		<div class="container">
			<h4 class="josefin grey-text text-darken-3" style="font-weight: 600;"><b>Contact Information</b></h4>
			<p>Do you have a query? Why don't you right to us and we will respond you within 1 working day.</p>
			<br><br>
			<div class="row">
				<div class="col s12">
					<p><b><?php echo $companyname ?></b></p>
					<?php echo $map ?>
					<br><br><br>
				</div>
				<div class="col s12 m4">
					<i class="material-icons medium">roofing</i>
					<p><b>Address</b></p>
					<p class="grey-text text-darken-1"><?php echo $address ?></p>
				</div>
				<div class="col s12 m4">
					<i class="material-icons medium">phone</i>
					<p><b>Phone Number</b></p>
					<p class="grey-text text-darken-1"><?php echo $phone ?></p>
				</div>
				<div class="col s12 m4">
					<i class="material-icons medium">drafts</i>
					<p><b>Email Address</b></p>
					<p class="grey-text text-darken-1"><?php echo $email ?></p>
				</div>
			</div>
		</div>
	</section>

	<footer class="page-footer">
		<div class="container">
			<div class="row">
				<div class="col l3 s12">
					<p class="white-text" style="font-size: 18px;"><b><?php echo $companyname ?></b></p>
					<p class="grey-text text-lighten-4"><?php echo $companyname ?> is a cloud hosting platform with data centers accross 11 locations through out the globe. <?php echo $companyname ?> is known for providing affordable and reliable cloud hosting platform with maximum uptime and minimum latency.</p>
				</div>
				<div class="col l3 s12">
					<p class="white-text" style="font-size: 18px;"><b>Important Links</b></p>
					<p><a class="grey-text text-lighten-4" href="#home">Home</a></p>
					<p><a class="grey-text text-lighten-4" href="#product">Products</a></p>
					<p><a class="grey-text text-lighten-4" href="#pricing">Pricing</a></p>
					<p><a class="grey-text text-lighten-4" href="#data-centers">Data Centers</a></p>
				</div>
				<div class="col l3 s12">
					<p class="white-text" style="font-size: 18px;"><b>Policies</b></p>
					<p><a class="grey-text text-lighten-4" href="terms-and-conditions.php">Terms & Conditions</a></p>
					<p><a class="grey-text text-lighten-4" href="privacy-policy.php">Privacy Policy</a></p>
					<p><a class="grey-text text-lighten-4" href="refund-policy.php">Refund Policy</a></p>
				</div>
				<div class="col l3 s12">
					<p class="white-text" style="font-size: 18px;"><b>Contact Us</b></p>
					<p><b>(<?php echo $companyname ?>)</b></p>
					<p class="grey-text text-lighten-4"><b>Address : </b><?php echo $address ?></p>
					<p class="grey-text text-lighten-4"><b>Phone : </b><?php echo $phone ?></p>
					<p class="grey-text text-lighten-4"><b>Email : </b><?php echo $email ?></p>
				</div>
			</div>
		</div>
		<div class="footer-copyright">
			<div class="container">
			All Rights Are Reserved By <a class="orange-text text-lighten-3" href="#!"><?php echo $companyname ?></a>
			</div>
		</div>
	</footer>

	  <!-- Modal Structure -->
	<div id="sign-in" class="modal modal-fixed-footer" style="width: 500px">
		<div class="modal-content">
			<h4 class="center-align">Sign In</h4>
			<p class="center-align">To your <?php echo $companyname ?> account</p>

			<br>

			<p class="red-text error-message hide center-align">Can't Log Into Your Account. Please Contact The Support Team.</p>

			<form action="#!" method="POST" class="row">
				<div class="input-field col s12">
					<input type="email" class="custom-input" placeholder="Your Email">
				</div>
				<div class="input-field col s12">
					<input type="password" class="custom-input" placeholder="Your Password">
				</div>
				<div class="col s12">
					<p>
						<input type="checkbox" id="test5" />
						<label for="test5">Remember Me</label>
					</p>
				</div>
			</form>
		</div>
		<div class="modal-footer blue" style="display: flex; justify-content: center; align-items: center;">
			<p class="white-text" style="text-transform: none;">Sign In</p>
		</div>
	</div>


	<!--  Scripts-->
	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="js/materialize.js"></script>
	<script src="js/init.js"></script>

	<script>
		$(document).ready(function() {
			$('.scrollspy').scrollSpy({
				scrollOffset: 0
			})
			$('.modal').modal()

			$('.modal-footer').click(function(e) {
				e.preventDefault()
				$('.error-message').removeClass('hide')
			})
		})

		$(document).scroll(function(){
		  if ($(this).scrollTop() > screen.height / 2) {
		    $('.navbar-fixed').removeClass('hide');
		  } else {
		    $('.navbar-fixed').addClass('hide');
		  }
		})
	</script>

	</body>
</html>
