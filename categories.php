<!DOCTYPE html>
<html lang="zxx">
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
	<link rel="stylesheet" href="css/animate.css"/> -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/body.css"/>
	<link rel="stylesheet" href="css/gallery.css"/>

	


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body class="text-center">
	<!-- Page Preloder -->
	

	<!-- Header section -->
	<?php include 'parts/header.html'; ?>
	<!-- Header section end -->
	<div class="formc">
		<form method="GET">
    	<label for="city">Choose a city:</label>
    	<select name="city" id="city">
    	    <option value="All">ALL</option>
    	    <option value="IGA">IGA</option>
    	    <option value="HARIMA">HARIMA</option>
    	    <option value="IZUMI">IZUMI SETTSU</option>
			<option value="YAMASHIRO">YAMASHIRO</option>
    	</select>
    	<button type="submit">Filter</button>
		</form>
	<div>
	<?php
	$jsondata = file_get_contents("json/photo.json");
	if ($jsondata === false) {
		die("Error");
	}
	$photos = json_decode($jsondata, true);
	$city = $_GET['city'] ?? 'All';
	if ($city !== 'All') {
		$photos = array_filter($photos, function($photo) use ($city) {
			return $photo['city'] === $city;
		});
	}
	foreach ($photos as $photo):
		$flink = ltrim($photo['link'], '\\');
		?>

		<a class="photo-item" href="<?php echo htmlspecialchars($flink); ?>" target="_blank">
			<div class="photo-wrapper">
				<div class="photo-media">
					<img src="<?php echo htmlspecialchars($flink); ?>" alt="<?php echo htmlspecialchars($photo['alt']); ?>">
				</div>
			</div>
		</a>

	<?php endforeach;?>
	<!-- Latest news section -->
	
	<!-- Footer section -->
	<?php include 'parts/footer.html'; ?>
	<!-- Footer section end -->


	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<!-- <script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.marquee.min.js"></script>
	<script src="js/main.js"></script> -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>