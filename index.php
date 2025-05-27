<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Assassin's Creed</title>
	<meta charset="UTF-8">
	<meta name="description" content="Game Warrior Template">
	<meta name="keywords" content="warrior, game, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">   
	<link data-react-helmet="true" rel="shortcut icon" sizes="16x16 24x24 32x32 48x48 64x64" href="https://static-dm.ubisoft.com/assassins-creed/franchise/prod/favicon.ico"/>

	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
	<link rel="stylesheet" href="css/body.css"/>
	<link rel="stylesheet" href="css/carousel.css"/>

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<?php include 'parts/header.php'; ?>
	<!-- Header section end -->

    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
	<div class="carousel-inner">
        <?php
        $slides = json_decode(file_get_contents('json/carousel.json'), true);
        if ($slides) {
            foreach ($slides as $index => $slide) {
                $active = $index === 0 ? 'active' : '';
                echo '<div class="carousel-item ' . $active . '">';
                echo '<img src="' . htmlspecialchars($slide["image"]) . '" class="d-block w-100" alt="...">';
                echo '<div class="carousel-slide-bg"></div>';
                echo '<div class="carousel-slide-content">';
                echo '<h2>' . $slide["heading"] . '</h2>';
                echo '<p>' . $slide["text"] . '</p>';
                echo '<a class="custom-btn btn btn1" href="' . htmlspecialchars($slide["link"]) . '" target="_blank">Buy Now</a>';
                echo '<button class="custom-btn btn" type="button" aria-label="Watch trailer">Watch trailer</button>';
                echo '</div></div>';
            }
        }
        ?>
    </div>

	    
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
        <svg class="icon icon-arrow-left" viewBox="0 0 19 30" role="img" aria-label="Arrow Left">
            <path d="M15,30L0,15L15,0l4,4L8,15l11,11L15,30z"></path>
        </svg>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
        <svg class="icon icon-arrow-right" viewBox="0 0 19 30" role="img" aria-label="Arrow Right">
            <path d="M4,0l15,15L4,30l-4-4l11-11L0,4L4,0z"></path>
        </svg>
    </button>
    </div>

	<!-- Latest news section -->
	<div class="latest-news-section">
	<div class="ln-title" style="font-family:PT Serif, serif; text-transform: uppercase">Latest News</div>
	<div class="news-ticker">
		<div class="news-ticker-content">
			<?php
			$newsItems = json_decode(file_get_contents('json/newstitle.json'), true);
			if ($newsItems) {
				foreach ($newsItems as $item) {
					$tag = trim($item['tag']);
					$text = htmlspecialchars($item['text']);
				
					
					if ($tag !== '') {
						$span = '<span class="' . htmlspecialchars($tag) . '">' . htmlspecialchars($tag) . '</span> ';
					} else {
						$span = '';
					}
				
					echo '<div class="nt-item">' . $span . $text . '</div>';
				}
			} else {
				echo '<div class="nt-item"><span class="new">new</span>Unable to load news.</div>';
			}
			?>
		</div>
	</div>
</div>
	<!-- Latest news section end -->

	<!-- Feature section -->
	<?php
$features = json_decode(file_get_contents('json/feature.json'), true);
?>

<section class="feature-section spad mb-5 text-center">
    <h2 class="text-center mb-5 h1" style="color:white; font-family:PT Serif, serif;text-transform:uppercase">
        Trending: Assassin's Creed<br>Shadows announcements
    </h2>
    <div class="container">
        <div class="row">
            <?php foreach ($features as $f): ?>
                <div class="col-lg-3 col-md-6 p-0">
                    <div class="feature-item set-bg" style="background-image: url('<?php echo htmlspecialchars($f['image']); ?>');">
                        <?php if (!empty($f['tag'])): ?>
                            <span class="cata <?php echo htmlspecialchars($f['tag_class']); ?>"><?php echo htmlspecialchars($f['tag']); ?></span>
                        <?php endif; ?>
                        <div class="fi-content text-white">
                            <h5><a href="<?php echo htmlspecialchars($f['link']); ?>"><?php echo htmlspecialchars($f['title']); ?></a></h5>
                            <a href="<?php echo htmlspecialchars($f['link']); ?>" class="fi-comment"><?php echo htmlspecialchars($f['cta']); ?></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
	<!-- Feature section end -->

	<!-- Recent game section  -->
	<?php
$games = json_decode(file_get_contents('json/recent_games.json'), true);
?>

<section class="recent-game-section spad set-bg text-center" style="background-image: url('https://images5.alphacoders.com/136/1362766.jpeg')">
    <div class="container cnt">
        <div class="section-title">
            <h2 class="text-white" style="font-family: PT Serif, serif; text-transform: uppercase">Recent Games</h2>
        </div>
        <div class="row">
            <?php foreach ($games as $g): ?>
                <div class="col-lg-4 col-md-6">
                    <div class="recent-game-item">
                        <div class="rgi-thumb set-bg" style="background-image: url('<?php echo htmlspecialchars($g['image']); ?>')">
                            <?php if (!empty($g['tag'])): ?>
                                <div class="cata new"><?php echo htmlspecialchars($g['tag']); ?></div>
                            <?php endif; ?>
                        </div>
                        <div class="rgi-content text-white text-center">
                            <h5><?php echo $g['title']; ?></h5>
                            <div class="rgi-extra text-center">
                                <div class="rgi-star"><img src="img/icons/star.png" alt=""></div>
                                <div class="rgi-heart"><img src="img/icons/heart.png" alt=""></div>
                            </div>
                        </div>
                    </div>	
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <button class="custom-btn btn w-25 mt-5 ms-0" type="button" id="btn2" aria-label="view all games" onclick="location.href='review.php'">
	    View All Games
    </button>
</section>
	<!-- Recent game section end -->

	<!-- Footer top section end -->

	<?php
$channels = json_decode(file_get_contents('json/social_links.json'), true);
?>

<div class="promo__wrapper"> 
    <div class="promo__wrapper__media"></div>
    <div class="promo__wrapper__content" data-btn-l="8" data-ccid-l="5qKwOpfpE5jqor6CoKp9v2" data-ccm-l="promo">
        <h2 class="promo__content__title mb-1" data-innertext="Visit Other Assassin's Creed Channels:" style="font-family:PT Serif,serif;font-size:24px" data-ccf-l="title">
            Visit Other Assassin's Creed Channels:
        </h2>

        <?php foreach ($channels as $ch): ?>
            <a class="btn btn-primary promo__wrapper__content__btn external has-image"
               href="<?php echo htmlspecialchars($ch['url']); ?>"
               target="_blank"
               rel="noreferrer noopener">
                <img src="<?php echo htmlspecialchars($ch['img']); ?>"
                     alt="<?php echo htmlspecialchars($ch['name']); ?>">
            </a>
        <?php endforeach; ?>
    </div>
</div>
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