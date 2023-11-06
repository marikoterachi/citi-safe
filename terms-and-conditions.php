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
		<h2 style="font-family: 'Poiret One', cursive; text-align: center;">Terms &amp; Conditions</h2>
		<p class="justify-text">Please read the Terms of Service below. They cover the terms and conditions that apply to your use of this website (the "Website," or "Site"). <?php echo $companyname ?>. may change the Terms of Service from time to time. By continuing to use the Site following such modifications, you agree to be bound by such modifications to the Terms of Service.</p>
		<p class="justify-text">General Terms and Conditions. In consideration of use of the Site, you agree to: (a) provide true, accurate, current and complete information about yourself as prompted by the registration page and (b) to maintain and update this information to keep it true, accurate, current and complete. If any information provided by you is untrue, inaccurate, not current or incomplete, <?php echo $companyname ?> has the right to terminate your account and refuse any and all current or future use of the Site. You agree not to resell or transfer the Site or use of or access to the Site.</p>
		<p class="justify-text">You acknowledge and agree that you must: (a) provide for your own access to the World Wide Web and pay any service fees associated with such access, and (b) provide all equipment necessary for you to make such connection to the World Wide Web, including a computer and modem or other access device.</p>
		<p class="justify-text">By using the <?php echo $companyname ?> web site, including any applets, software, and content contained therein, you agree that use of the Site is entirely at your own risk. THE SITE IS PROVIDED "AS IS," WITHOUT WARRANTY OF ANY KIND, EITHER EXPRESS OR IMPLIED, INCLUDING WITHOUT LIMITATION, ANY WARRANTY FOR INFORMATION, DATA, SERVICES, UNINTERRUPTED ACCESS, OR PRODUCTS PROVIDED THROUGH OR IN CONNECTION WITH THE SITE. SPECIFICALLY, <?php echo $companyname ?> DISCLAIMS ANY AND ALL WARRANTIES, INCLUDING, BUT NOT LIMITED TO: (1) ANY WARRANTIES CONCERNING THE AVAILABILITY, ACCURACY, USEFULNESS, OR CONTENT OF INFORMATION, PRODUCTS OR SERVICES AND (2) ANY WARRANTIES OF TITLE, WARRANTY OF NON-INFRINGEMENT, WARRANTIES OF MERCHANTABILITY OR FITNESS FOR A PARTICULAR PURPOSE. THIS DISCLAIMER OF LIABILITY APPLIES TO ANY DAMAGES OR INJURY CAUSED BY ANY FAILURE OF PERFORMANCE, ERROR, OMISSION, INTERRUPTION, DELETION, DEFECT, DELAY IN OPERATION OR TRANSMISSION, COMPUTER VIRUS, COMMUNICATION LINE FAILURE, THEFT OR DESTRUCTION OR UNAUTHORIZED ACCESS TO, ALTERATION OF, OR USE OF RECORD, WHETHER FOR BREACH OF CONTRACT, TORTUOUS BEHAVIOR, NEGLIGENCE, OR UNDER ANY OTHER CAUSE OF ACTION.</p>
		<p class="justify-text">NEITHER <?php echo $companyname ?> NOR ANY OF ITS EMPLOYEES, AGENTS, SUCCESSORS, ASSIGNS, AFFILIATES, WEBSITE CO-BRANDING PROVIDERS OR CONTENT OR SERVICE PROVIDERS SHALL BE LIABLE TO YOU OR OTHER THIRD PARTY FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL OR CONSEQUENTIAL DAMAGES ARISING OUT OF USE OF SERVICE OR INABILITY TO GAIN ACCESS TO OR USE THE SERVICE OR OUT OF ANY BREACH OF ANY WARRANTY. BECAUSE SOME STATES DO NOT ALLOW THE EXCLUSION OR LIMITATION OF LIABILITY FOR CONSEQUENTIAL OR INCIDENTAL DAMAGES, THE ABOVE LIMITATION MAY NOT APPLY TO YOU. IN SUCH STATES, THE RESPECTIVE LIABILITY OF <?php echo $companyname ?>, ITS EMPLOYEES, AGENTS, SUCCESSORS, ASSIGNS, AFFILIATES, WEBSITE CO-BRANDING PROVIDERS AND CONTENT OR SERVICE PROVIDERS RESPECTIVE LIABILITY IS LIMITED TO THE GREATEST EXTENT PERMITTED BY SUCH STATE LAW.</p>
		<p class="justify-text"><?php echo $companyname ?> is the owner and/or authorized user of any trademark, registered trademark and/or service mark appearing at this Web Site, and is the copyright owner or licensee of the content and/or information on this Website including but not limited to any screens appearing at the Site. You may not download and/or save a copy of any of the screens except as otherwise provided in these Terms of Service, for any purpose. However, you may print a copy of the information on this Site for your personal use or records. If you make other use of this Site, except as otherwise provided above, you may violate copyright and other laws of the United States, other countries, as well as applicable state laws and may be subject to penalties. <?php echo $companyname ?> does not grant any license or other authorization to any user of its trademarks, registered trademarks, service marks, or other copyrightable material or other intellectual property, by placing them on this Website.</p>
		<p class="justify-text"><?php echo $companyname ?> reserves the right to change any information on this Website including but not limited to revising and/or deleting features or other information without prior notice. Clicking on certain links within this Website might take you to other web sites for which <?php echo $companyname ?> assumes no responsibility of any kind for the content, availability or otherwise. (See "Links from and to this Website" below.) The content presented at this Site may vary depending upon your browser limitations.</p>
		<h5>User Conduct On the Site.</h5>
		<p class="justify-text">While using the Site, you may not:</p>
		<p class="justify-text">restrict or inhibit any other user from using and enjoying the Site;</p>
		<p class="justify-text">or</p>
		<p class="justify-text">post or transmit any unlawful, fraudulent, libelous, defamatory, obscene, pornographic, profane, threatening, abusive, hateful, offensive, or otherwise objectionable information of any kind, including without limitation any transmissions constituting or encouraging conduct that would constitute a criminal offense, give rise to civil liability, or otherwise violate any local, state, national or foreign law, including without limitation the U.S. export control laws and regulations;</p>
		<p class="justify-text">or</p>
		<p class="justify-text">post or transmit any advertisements, solicitations, chain letters, pyramid schemes, investment opportunities or schemes or other unsolicited commercial communication (except as otherwise expressly permitted by <?php echo $companyname ?>) or engage in spamming or flooding;</p>
		<p class="justify-text">or</p>
		<p class="justify-text">post or transmit any information or software which contains a virus, trojan horse, worm or other harmful component;</p>
		<p class="justify-text">or</p>
		<p class="justify-text">post, publish, transmit, reproduce, distribute or in any way exploit any information, software or other material obtained through the Site for commercial purposes (other than as expressly permitted by the provider of such information, software or other material);</p>
		<p class="justify-text">or</p>
		<p class="justify-text">upload, post, publish, transmit, reproduce, or distribute in any way, information, software or other material obtained through the Site which is protected by copyright, or other proprietary right, or derivative works with respect thereto, without obtaining permission of the copyright owner or rightholder;</p>
		
		<p class="justify-text">or</p>
		
		<p class="justify-text">upload, post, publish, reproduce, transmit or distribute in any way any component of the Site 
		itself or derivative works with respect thereto, as the Site is copyrighted as a collective work under U.S. copyright laws.</p>

		<p class="justify-text"><?php echo $companyname ?> has no obligation to monitor the Site. However, you acknowledge and agree that <?php echo $companyname ?> has the right to monitor the Site electronically from time to time and to disclose any information as necessary or appropriate to satisfy any law, regulation or other governmental request, to operate the Site properly, or to protect itself or its customers. <?php echo $companyname ?> will not intentionally monitor or disclose any private electronic-mail message unless required by law. <?php echo $companyname ?> reserves the right to refuse to post or to remove any information or materials, in whole or in part, that, in its sole discretion, are unacceptable, undesirable, inappropriate or in violation of these Terms of Service.</p>
		<p class="justify-text">Unless otherwise indicated for a particular communication, any communications or material of any kind that you e-mail, post or otherwise transmit through this Website, including data, questions, comments or suggestions ("your Communications") will be treated as non-confidential and nonproprietary. In addition, <?php echo $companyname ?> is free to use any ideas, concepts, know-how or techniques contained in your Communications for any purpose including, but not limited to, developing and marketing products using such information without compensation to you.</p>

		<p class="justify-text">Failure to Comply With Terms and Conditions and Termination. You acknowledge and agree that <?php echo $companyname ?> may terminate your password or account or deny you access to all or part of the Site without prior notice if you engage in any conduct or activities that <?php echo $companyname ?> in its sole discretion believes violate any of the terms and conditions, violate the rights of <?php echo $companyname ?>, or is otherwise inappropriate for continued access.</p>

		<p class="justify-text">You acknowledge and agree that <?php echo $companyname ?> may in its sole discretion deny you access through <?php echo $companyname ?> to any materials stored on the Internet, or to access third party services, merchandise or information on the Internet through <?php echo $companyname ?>, and <?php echo $companyname ?> shall have no responsibility to notify any third-party providers of services, merchandise or information nor any responsibility for any consequences resulting from lack of notification.</p>

		<p class="justify-text">You agree to defend, indemnify and hold <?php echo $companyname ?> and its affiliates harmless from any and all claims, liabilities, costs and expenses, including reasonable attorneys' fees, arising in any way from your use of the Site or the placement or transmission of any message, information, software or other materials through the Site by you or users of your account or related to any violation of these Terms of Service by you or users of your account.</p>

		<p class="justify-text">Links from and to this Website. You acknowledge and agree that <?php echo $companyname ?> and any of its website co-branding providers have no responsibility for the accuracy or availability of information provided by linked sites. Links to external web sites do not constitute an endorsement by <?php echo $companyname ?> or its website co-branding providers of the sponsors of such sites or the content, products, advertising or other materials presented on such sites.</p>

		<p class="justify-text">Information in the many web pages that are linked to <?php echo $companyname ?>'s Website comes from a variety of sources. Some of this information comes from official <?php echo $companyname ?> licensees, but much of it comes from unofficial or unaffiliated organizations and individuals, both internal and external to <?php echo $companyname ?>. <?php echo $companyname ?> does not author, edit, or monitor these unofficial pages or links. You acknowledge and agree that <?php echo $companyname ?> and its Website Co-branding Providers shall not be responsible or liable, directly or indirectly, for any damage or loss caused or alleged to be caused by or in connection with use of or reliance on any such content, goods or services available on such external sites or resources.</p>

		<p class="justify-text">Other Information. <?php echo $companyname ?> is taking reasonable and appropriate measures, including encryption, to ensure that your personal information is disclosed only to those specified by you. However, the Internet is an open system and we cannot and do not guarantee that the personal information you have entered will not be intercepted by others and decrypted.</p>

		<p class="justify-text">If you wish to make purchases through the Site, you may be asked by the merchant or information or service provider from whom you are making the purchase to supply certain information, including credit card or other payment mechanism information. You agree not to hold <?php echo $companyname ?> liable for any loss or damage of any sort incurred as a result of any such dealings with any merchant or information or service provider through the Site. You agree that all information you provide any merchant or information or service provider through the Site for purposes of making purchases will be accurate, complete and current. The merchants and information and service providers offering merchandise, information and services through the Site set their own prices and may change prices or institute new prices at any time. You agree to pay all charges incurred by users of your account and credit card or other payment mechanism at the prices in effect when such charges are incurred. You also will be responsible for paying any applicable taxes relating to purchases through the Site.</p>

		<p class="justify-text">Miscellaneous. The Terms of Service and the relationship between you and <?php echo $companyname ?> shall be governed by the laws of the State of Georgia without regard to its conflict of law provisions. You and <?php echo $companyname ?> agree to submit to the personal and exclusive jurisdiction of the courts located within the state of Virginia.</p>

		<p class="justify-text">The failure of <?php echo $companyname ?> to exercise or enforce any right or provision of the Terms of Service shall not constitute a waiver of such right or provision. If any provision of the Terms of Service is found by a court of competent jurisdiction to be invalid, the parties nevertheless agree that the court should endeavor to give effect to the parties' intentions as reflected in the provision, and the other provisions of the Terms of Service remain in full force and effect.</p>

		<p class="justify-text">Pricing. By using this site you acknowledge and agree that <?php echo $companyname ?> provides listing prices only as a guide. Pricing is determined at the time or print/e-file and is subject to change at any time without prior notice.</p>
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
