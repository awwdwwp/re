<!DOCTYPE html>
<html lang="en">
<head>
	<title>Game Warrior Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="Game Warrior Template">
	<meta name="keywords" content="warrior, game, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	<!-- <link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/animate.css"/> -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	
	<link rel="stylesheet" href="css/body.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/reg.css"/>
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div class="page-wrapper">
	<!-- Header section -->
	<?php include 'parts/header.html'; ?>
	<!-- Header section end -->
	<main class="container">
    <div class="logo" role="img" aria-label="Ubisoft Logo"></div>
    <section class="content">
      <h2>
        <span id="IdLoginText" class="text-white">Login</span>
        <a class="title-link" href="#">CREATE AN ACCOUNT</a>
      </h2>
    </section>
    <form>
      <div class="form-group">
        <label for="AuthEmail">Email address</label>
        <input id="AuthEmail" type="email" placeholder="Email" required>
      </div>
      <div class="form-group mb-5">
        <label for="AuthPassword">Password</label>
        <input id="AuthPassword" type="password" placeholder="Password" required>
      </div>
      <button class="btn">LOG IN</button>
    </form>
  </main>

	<!-- Latest news section -->
	
	<!-- Footer section -->
	<?php include 'parts/footer.html'; ?>
	<!-- Footer section end -->
</div>

	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<!-- <script src="js/bootstrap.min.js"></script> -->
	<!-- <script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.marquee.min.js"></script>
	<script src="js/main.js"></script> -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>