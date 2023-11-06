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
		<h2 style="font-family: 'Poiret One', cursive; text-align: center;">Privacy Policy</h2>
		<h5>YOUR PRIVACY IS A PRIORITY TO US</h5>
		<p class="justify-text">At <?php echo $companyname ?>, we are committed to safeguarding customer information on our site <?php echo $sitename ?>. Since your privacy is a priority to us, <?php echo $companyname ?> will not share nonpublic information about you with third parties outside of the <?php echo $companyname ?> corporate family without your consent, except as explained in our Privacy Policy.</p><br>
		<h5>PRIVACY POLICY</h5>
		<p class="justify-text">Protecting your privacy is important to <?php echo $companyname ?>. We want you to understand what information we may gather and how we may share it. This Privacy Policy explains <?php echo $companyname ?>’s collection, use, retention and security of information about you. It also describes your choices regarding use, access and correction of your personal information.</p><br>
		<h5>How We Collect Information</h5>
		<p class="justify-text"><b>Visiting our Website</b></p><br>
		<p class="justify-text">We will not collect personal information about you just because you visit this site. To improve the usefulness of our website, we automatically collect and maintain statistical information from our site's data logs that concern network traffic flow and volume. This information may consist of the visitor’s domain, Internet Protocol (IP) address, browser and operating system type, service provider, time and duration on our site, incoming and exiting page on the site, and clickstream data. This information does not identify individual visitors and is used to enhance and improve your experience on our site. No attempts are made to identify individual users unless illegal behavior is suspected.</p><br>
		<p class="justify-text"><b>Purchasing our Products</b></p><br>
		<p class="justify-text">The purpose of this site is to market and sell our products, services, and software. As a result, you may be asked to provide us your personal information such as full name, email address, and phone number. If you prepare or file a tax return using the Services on <?php echo $companyname ?>, we collect additional information such as physical address, social security number, income, employment status, claimed deductions, and other information necessary to accurately complete your tax return. If you purchase our products or services, payment information such as credit card number and expiration date is collected to complete the transaction. Additional banking information such as account and routing numbers may be collected in case of an expected refund deposit.</p><br>
		<p class="justify-text"><b>Mobile</b></p><br>
		<p class="justify-text">When you download and use our Services, we automatically collect information on the type of device, system and performance information, and operating system. We use mobile analytics software to allow us to better understand the functionality of our Mobile Software on your phone. This software may record information such as how often you use the application, the events that occur within the application, aggregated usage, performance data, and where the application originated. We do not link the information we store within the analytics software to any personally identifiable information you submit within the mobile app.</p><br>
		<p class="justify-text">From time to time, we may send push notifications to update you about any events or promotions that we may be running. If you no longer wish to receive these types of communications, you may turn them off at the device level.</p><br>
		<p class="justify-text"><b>Tracking and Analytics Technologies</b></p><br>
		<p class="justify-text">Technologies such as: cookies, beacons, tags, scripts or similar technologies are used by <?php echo $companyname ?> and our partners affiliates, or analytics or service providers. Additionally, this site uses a web analytics service which may record mouse clicks, mouse movements and scrolling activity. For an updated list of these providers please contact our marketing team. These technologies are used in analyzing trends, administering the site, tracking users’ movements around the site and to gather demographic information about our user base as a whole. We may receive reports based on the use of these technologies by these service providers on an individual as well as aggregated basis. We use cookies for [our shopping cart, to remember users’ settings (e.g. language preference), for authentication]. Users can control the use of cookies at the individual browser level. If you reject cookies, you may still use our site, but your ability to use some features or areas of our site may be limited.</p><br>
		<p class="justify-text"><b>Behavioral Advertising</b></p><br>
		<p class="justify-text">We partner with a third party provider to either display advertising on our site or to manage our advertising on other sites. Our third party partner may use technologies such as cookies to gather information about your activities on this site and other sites in order to provide you advertising based upon your browsing activities and interests. If you wish to not have this information used for the purpose of serving you interest-based ads, you may opt-out by clicking here. Please note this does not opt you out of being served ads. You may continue to receive generic ads.</p><br>
		<h5>Use of Information</h5>
		<p class="justify-text">Section 301-7216 of the Internal Revenue Code specifically governs the use and disclosure of Tax Return Information. Some states may also have additional laws and regulations related to use and disclosure of the same information. We use your Tax Return Information only in accordance with those applicable laws and regulations to prepare and assist in preparing your tax return, to provide services associated with preparing your tax return, and to provide you with other products and services you specifically request or consent to.</p><br>
		<p class="justify-text">We use the information you provide (discussed above) to complete purchases of products and services you request. As permitted by law, we may also use the information you provide to address questions submitted to our customer or technical support systems, to send updates or security alerts, marketing messages, or to provide notification of new products, services, enhancements, and promotions. We may use your information to show you relevant information and offer you other products and services. These offers may come from us or a service provider.</p><br>
		<p class="justify-text">Lastly, we also use the information we collect to monitor and investigate fraud, identity theft, and other illegal activity and to personalize and improve our Services.</p><br>
		<h5>Disclosure of Information</h5>
		<p class="justify-text">The privacy and security of your information is important to us. We do not sell or rent your information (including your social security number). We may disclose as indicated below, share your information to support the products and services you request, or provide your information to third parties, upon your specific consent, for products and services that may benefit you.</p><br>
		<p class="justify-text">We disclose Tax Return Information in accordance with your requests, such as when filing a tax return with the IRS or state revenue authority. <?php echo $companyname ?> may be required to disclose personal information without your consent as provided by law, such as, to respond to lawful requests by public authorities, including to meet national security or law enforcement requirements, a subpoena or court order, judicial process or bankruptcy proceedings, or regulatory authorities to protect against fraud.</p><br>
		<p class="justify-text">We may share information about you and the products and services you have purchased from us, to members of the <?php echo $companyname ?> Corporate family and our parent company of Rhodes Financial Services all of whom follow our Privacy Policy. In some cases, your information may be disclosed to our service providers to complete a product purchase, to fulfill a service you request, or to market one of our products or services. While this may require us to share information, these service providers are strictly prohibited from using your information other than to act on our behalf.</p><br>
		<p class="justify-text">Your information may be disclosed in connection with a proposed or actual sale, merger, or transfer of all or a portion of our business or relevant operating unit.</p><br>
		<h5>Tell A Friend/TaxPerks</h5>
		<p class="justify-text">If you choose to use our referral service to tell a friend about our site, we will ask you for the referral’s name and email address. We will automatically send the referral an electronic invitation to visit our site. <?php echo $companyname ?> stores this information for the sole purpose of sending this one-time email and tracking the success of our referral program. Your friend may contact us at to request that we remove this information from our database.</p><br>
		<p class="justify-text">When you provide us with personal information about your contacts we will only use this information for the specific reason for which it is provided. If you believe that one of your contacts has provided us with your personal information and you would like to request that it be removed from our database, please contact us at 3003 <?php echo $companyname ?> Drive Evans, GA 30809.</p><br>
		<h5>Newsletters</h5>
		<p class="justify-text">We will use your name and email address to send newsletters to you. Out of respect for your privacy, we provide you a way to unsubscribe. </p><br>
		<h5>Testimonials</h5>
		<p class="justify-text">We post customer testimonials on our website, which may contain personal information such as the customer's name. We do obtain the customer's consent prior to posting the testimonial to post their name along with their testimonial. If you wish to update or delete your testimonial, you can contact us at <?php echo $email ?> </p><br>
		<h5>Blog/Forum</h5>
		<p class="justify-text">Our website may offer publicly accessible blogs or community forums. You should be aware that any information you provide in these areas may be read, collected, and used by others who access them. To request removal of your personal information from our blog or community forum, contact us at <?php echo $email ?>  In some cases, we may not be able to remove your personal information, in which case we will let you know if we are unable to do so and why. Alternatively, if you used a third party application to post such information, you can remove it, by either logging into the said application and removing the information or by contacting the appropriate third party application.</p><br>
		<h5>Links</h5>
		<p class="justify-text">As a service to our customers, we have installed links to various tax agencies/services. These include IRS.Gov, and various state agencies and organizations. The links provided are maintained by these separate entities and are not the property of, or affiliated with, <?php echo $companyname ?>. If you submit personal information to any of those sites, your information is governed by their privacy policies. We encourage you to carefully read the privacy policy of any website you visit and use.</p><br>
		<h5>Social Media Widgets</h5>
		<p class="justify-text">Our website includes Social Media Features, such as the Facebook Like button [and Widgets, such as the Share this button or interactive mini-programs that run on our site]. These Features may collect your IP address, which page you are visiting on our site, and may set a cookie to enable the Feature to function properly. Social Media Features and Widgets are either hosted by a third party or hosted directly on our Site. Your interactions with these Features are governed by the privacy policy of the company providing it.</p><br>
		<h5>Our Security Practices and Information Accuracy</h5>
		<p class="justify-text"><?php echo $companyname ?> understands the importance of protecting customer information. <?php echo $companyname ?> adheres to regulatory, security, and privacy standards applicable to the tax preparation industry. <?php echo $companyname ?>’s web-based and desktop applications have a proven record of securing information by utilizing a variety of security related technologies including, but not limited to, firewalls, intrusion detection systems, web application firewalls, encryption, access controls, network isolation, auditing systems, data classifications, and data obfuscation. To protect the data as our client enters it in the system, <?php echo $companyname ?> incorporates the use of SSL encryption facilitated by an Extended Validation SSL Certificate issued by a recognized trusted certificate authority. <?php echo $companyname ?> utilizes security guards, access controls, biometrics, man traps, and other security mechanisms to protect physical access to the datacenter.</p><br>
		<p class="justify-text"><?php echo $companyname ?>’s information systems maintain PCI compliance which must be renewed annually. Additionally, our systems are routinely subject to automated vulnerability testing purposely exceeding the requirements of PCI compliance. This practice allows quicker identification and remediation of risks to the privacy of taxpayer data. Internal audits are performed continuously throughout the year to ensure compliance with regulatory standards and <?php echo $companyname ?>’s Information Security Policy Manual. If you have any questions about the security of your personal information, you can contact us at <?php echo $email ?> </p><br>
		<h5>Data Retention</h5>
		<p class="justify-text">We will retain your information for up to three tax years as long as your account is active, or as needed to provide you services. If you wish to cancel your account or request that we no longer use your information to provide you services contact us at <?php echo $email ?>  We will retain and use your information as necessary to comply with our legal obligations, resolve disputes, and enforce our agreements.</p><br>
		<h5>Access to Personal Information</h5>
		<p class="justify-text">Upon request, <?php echo $companyname ?> will provide you with information about whether we hold any of your personal information. Personal Information is accessible online through October 20 of the year in which the return is filed. You may view, delete and/or make changes to your personal information by visiting your account online at <?php echo $sitename ?> and selecting 'Edit Account Information' or by emailing our Customer Support at support@lyncyconsultant.com or by contacting us by telephone or postal mail at the contact information listed below. Any return e-filed through <?php echo $companyname ?> will be available only in PDF format (fees may apply). We will respond to your request to access within a reasonable timeframe.</p><br>
		<h5>Our Former Customers</h5>
		<p class="justify-text">Even if you are no longer a <?php echo $companyname ?> customer, our Privacy Policy will continue to apply to you.</p><br>
		<h5>How to Contact Us</h5>
		<p class="justify-text">If you have questions or concerns regarding this policy, you should first contact customer support at <?php echo $email ?> </p><br>
		<p class="justify-text">You can also write us at:<br><?php echo $address ?> </p><br>
		<h5>Changes in this Privacy Policy</h5>
		<p class="justify-text">The Privacy Policy applies to products and services of <?php echo $companyname ?>, online. We reserve the right to change this Privacy Policy, and any of the policies described above, at any time. Any substantive changes to our policy will be immediately posted and made available to consumers at our website. We may also email users with this information. If we make any material changes we will notify you by email or by means of a notice on the Website prior to the change becoming effective. Any examples contained within this Privacy Policy are illustrations; they are not intended to be exclusive.</p><br>
		<p class="justify-text">Approved and Effective 1/3/18</p><br>
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
