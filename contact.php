<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact</title>
	<meta charset="UTF-8">
	<meta name="description" content="Game Warrior Template">
	<meta name="keywords" content="warrior, game, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link data-react-helmet="true" rel="shortcut icon" sizes="16x16 24x24 32x32 48x48 64x64" href="https://static-dm.ubisoft.com/assassins-creed/franchise/prod/favicon.ico"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
	
	<link rel="stylesheet" href="css/contact.css"/>

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<?php include 'parts/header.php'; ?>
	<!-- Header section end -->

	<!-- Page info section -->
	<section class="page-info-section set-bg" data-setbg="img/page-top-bg/5.jpg">
		<div class="pi-content">
			<div class="container">
				<div class="row">
					<div class="col-xl-5 col-lg-6 text-white">
						<h2>Contact us</h2>
						<p>If you have any questions or just want to say hello, feel free to reach out. Our team is here to help you with any inquiries or support you may need.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Page info section -->

	<!-- Page section -->
	<section class="page-section spad contact-page">
		<div class="container">
			<div class="map" id="map-canvas"></div>
			<div class="row">
				<div class="col-lg-4 mb-5 mb-lg-0">
					<h4 class="comment-title">Contact us</h4>
					<p>Have questions about our services, feedback, or a partnership idea? We're always ready to hear from you. Let us know how we can assist.</p>
					<div class="row">
						<div class="col-md-9">
							<ul class="contact-info-list">
								<li><div class="cf-left">Address</div><div class="cf-right">1481 Creekside Lane Avila Beach, CA 931</div></li>
								<li><div class="cf-left">Phone</div><div class="cf-right">+53 345 7953 32453</div></li>
								<li><div class="cf-left">E-mail</div><div class="cf-right">yourmail@gmail.com</div></li>
							</ul>
							<a href="public/qna.php" class="btn btn-primary p-3 px-5 mt-2">Go to QnA</a>
						</div>
					</div>
					
				</div>
				<div class="col-lg-8">
					<div class="contact-form-warp">
						<h4 class="comment-title">Leave a Reply</h4>
						<form class="comment-form" method="POST" action="submit_contact.php">
							<div class="row">
								<div class="col-md-6">
									<input type="text" name="name" placeholder="Name" required>
								</div>
								<div class="col-md-6">
									<input type="email" name="email" placeholder="Email" required>
								</div>
								<div class="col-lg-12">
									<textarea name="message" placeholder="Message" required></textarea>
									<button class="site-btn btn-sm" type="submit">Send</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Page section end -->

	<!-- Footer section -->
	<?php include 'parts/footer.html'; ?>
	<!-- Footer section end -->

	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/new.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
	

    </body>
</html>