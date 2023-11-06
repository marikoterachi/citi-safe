<?php include 'info.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
	<title><?php echo $companyname ?> - Accounting &amp; Bookkeeping Firm In City</title>

	<!-- CSS  -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
	<!-- Google Font For Navbar -->
	<link href="https://fonts.googleapis.com/css?family=Allerta+Stencil" rel="stylesheet">
	<!-- Google Font For Logo -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
	<!-- Google Font For Headings (H1/H2) -->
	<link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

</head>
<body>
	<div class="navbar-fixed">
		<nav class="grey darken-4" role="navigation">
			<div class="nav-wrapper container-fluid">
				<ul class="left hide-on-med-and-down">
					<li><a href="#"><i class="material-icons left">smartphone</i><?php echo $phone ?></a></li>
					<li><a href="#"><i class="material-icons left">email</i><?php echo $email ?></a></li>
				</ul>

				<ul class="right hide-on-med-and-down">
					<li><a href="#"><i class="fab fa-facebook-f" style="font-size: 18px"></i></a></li>
					<li><a href="#"><i class="fab fa-twitter" style="font-size: 18px"></i></a></li>
					<li><a href="#"><i class="fab fa-instagram" style="font-size: 18px"></i></a></li>
				</ul>
			</div>
		</nav>
	</div>
	<div class="navbar-fixed">
		<nav class="white" role="navigation">
			<div class="nav-wrapper container-fluid">
				<a id="logo-container" href="index.php" class="brand-logo"><?php echo $companyname ?></a>
				<ul class="right hide-on-med-and-down">
					<li><a href="index.php" class="grey-text text-darken-4" style="font-family: 'Allerta Stencil', sans-serif; letter-spacing: 2px">About Us</a></li>
					<li><a href="index.php" class="grey-text text-darken-4" style="font-family: 'Allerta Stencil', sans-serif; letter-spacing: 2px">Services</a></li>
					<li><a href="index.php" class="grey-text text-darken-4" style="font-family: 'Allerta Stencil', sans-serif; letter-spacing: 2px">Plans</a></li>
					<li><a href="index.php" class="grey-text text-darken-4" style="font-family: 'Allerta Stencil', sans-serif; letter-spacing: 2px">Blog</a></li>
					<li><a href="index.php" class="grey-text text-darken-4" style="font-family: 'Allerta Stencil', sans-serif; letter-spacing: 2px">Contact Us</a></li>
				</ul>

				<ul id="nav-mobile" class="side-nav">
					<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
					<li><a href="#"><i class="fab fa-twitter"></i></a></li>
					<li><a href="#"><i class="fab fa-instagram"></i></a></li>
				</ul>
				<a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
			</div>
		</nav>
	</div>

	<section>
		<h2 style="font-family: 'Poiret One', cursive; text-align: center;">Refund Policy</h2>
		<p class="justify-text"><?php echo $companyname ?>  provides several different services that customers can buy. We do our best to make sure that our customers are satisfied with the service provided, although still if they are not then the following is our refund policy, please read it carefully before purchasing our service.</p>

		<h5>Refund Policy :</h5>
		<p>Refund can be provided only in the following process:</p>

		<p>Refund Procedure:</p>
		<ul class="browser-default" style="color: #424242; letter-spacing: 1.5px;">
			<li>The refund should/must be requested within ninety (90) days from the date of purchase; sent via email to <?php echo $email ?> . It should contain order reference number along with one reason why the refund has been requested.</li>
			<li>If you are not satisfied with the services after ninety days you are eligible for a refund of 50% of the amount till 6 months.</li>
			<li>Once refund is raised, you should expect an email from <?php echo $email ?> .</li>
			<li>Once refund is approved, it might take us up to three (3) business days to process it. You will get the money returned by the same method used for purchase.</li>
			<li>Once everything is done, it can take up to 7 Business days for the money to be credited back into your account, depending on your bank/credit card processor.</li>
		</ul>
		<p>Note :</p>
		<ul class="browser-default" style="color: #424242; letter-spacing: 1.5px;">
			<li>Refund for Accounting Consultation fee or any other consultation fee will not be processed as the client has received the consultation service already.</li>
			<li>Visiting charges are non-refundable.</li>
		</ul>
	</section>

	<footer class="page-footer grey darken-4">
		<div class="container">
			<div class="row">
				<div class="col l6 s12">
					<h5 class="white-text" style="font-family: 'Poiret One', cursive;">Company Bio</h5>
					<p class="white-text" style="font-weight: 300">Our firm incorporates a unique blend of traditional accounting and tax knowledge with innovative business consulting expertise, Our team is skilled in tax and financial compliance and able to identify financial opportunities for clients.</p>
				</div>
				<div class="col l3 s12">
					<h5 class="white-text" style="font-family: 'Poiret One', cursive;">Policies</h5>
					<p style="font-weight: 300"><a href="terms-and-conditions.php" class="white-text">Terms &amp; Conditions</a></p>
					<p style="font-weight: 300"><a href="privacy-policy.php" class="white-text">Privacy Policy</a></p>
					<p style="font-weight: 300"><a href="refund-policy.php" class="white-text">Refund Policy</a></p>
				</div>
				<div class="col l3 s12">
					<h5 class="white-text" style="font-family: 'Poiret One', cursive;">Connect</h5>
					<p style="font-weight: 300" class="white-text"><?php echo $address ?></p>
					<p style="font-weight: 300" class="white-text"><?php echo $phone ?></p>
					<p style="font-weight: 300" class="white-text"><?php echo $email ?></p>
				</div>
			</div>
		</div>
		<div class="footer-copyright black">
			<div class="container">
				&copy; <?php echo date("Y") ?> All Rights Reserved By <?php echo $companyname ?>
			</div>
		</div>
	</footer>


	<!--  Scripts-->
	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="js/materialize.js"></script>
	<script src="js/init.js"></script>

	<script>
		$(document).ready(function(){
			$('.slider').slider({
				indicators: false
			});
			$('.scrollspy').scrollSpy();
			$('.modal').modal();
		});
	</script>

	</body>
</html>
