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
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-DQvkBjpPgn7RC31MCQoOeC9TI2kdqa4+BSgNMNj8v77fdC77Kj5zpWFTJaaAoMbC" crossorigin="anonymous">
	
	<link rel="stylesheet" href="css/body.css"/>
	
	<link rel="stylesheet" href="css/games.css">
	
	


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<?php include 'parts/header.html'; ?>
	<!-- Header section end -->


	
	<div class="buttons m-5">
		<a class="custom-btn btn" href="?sort=asc">Sort Ascending</a>
	    <a class="custom-btn btn" href="?sort=desc">Sort Descending</a>
    </div>
	<div class="searchFeed">
    <?php
    // Read the JSON file
    $jsonData = file_get_contents("json/games.json");

    // Decode JSON into PHP array
    $games = json_decode($jsonData, true);
	$sortOrder = $_GET['sort'] ?? 'asc';
	usort($games, function($a, $b) use ($sortOrder) {
		return ($sortOrder === 'asc') ? $a['order'] - $b['order'] : $b['order'] - $a['order'];
	});
    // Loop through games and generate HTML
    foreach ($games as $game): 
    ?>
        <a class="searchFeed__item" data-ccm-m="buttonMaster" href="<?php echo htmlspecialchars($game['url']); ?>" data-cy="same-window">
            <div class="searchFeed__item__wrapper">
                <div class="searchFeed__item__media">
                    <div>
                        <img class="searchFeed__item__wrapper__media" src="<?php echo htmlspecialchars($game['image']); ?>" alt="<?php echo htmlspecialchars($game['alt']); ?>" loading="lazy">
                    </div>
                </div>
                <div class="searchFeed__item__content">
                    <h3 class="searchFeed__item__wrapper__content__name"><?php echo htmlspecialchars($game['name']); ?></h3>
                </div>
            </div>
        </a>
    <?php endforeach; ?>
</div>


	
	<!-- Footer section -->
	<?php include 'parts/footer.html'; ?>
	<!-- Footer section end -->


	<!--====== Javascripts & Jquery ======-->
	
	<script src="js/jquery-3.2.1.min.js"></script> <!--
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.marquee.min.js"></script> -->
	<script src="js/main.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>