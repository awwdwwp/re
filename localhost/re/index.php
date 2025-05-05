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
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i" rel="stylesheet">

	
	<link rel="stylesheet" href="css/style.css"/>
	
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
	<header class="header-section" style="background-color:rgba(33, 45, 51, 1)">
		<div class="container" >
			<!-- logo -->
			<a class="site-logo" href="index.php">
				<img src="https://staticctf.ubisoft.com/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/5vjWXmgLzCT1il71p9fi8e/ce4b5ae3a6699d057c368742f3b1bee0/ac_franchise_mobile_logo.png" height="37px" alt="">
			</a>
			<div class="user-panel">
				<a href="#">Login</a>  /  <a href="community.php">Register</a>
			</div>
			<!-- responsive -->
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
			<!-- site menu -->
			<nav class="main-menu">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="review.php">Games</a></li>
					<li><a href="categories.php">Gallery</a></li>
					<li><a href="community.html">Forums</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
			</nav>
		</div>
		 <style>

.header-section {
    background-color: rgba(33, 45, 51, 1);
    height: 70px; /* taller header */
    display: flex;
    align-items: center;
}
.header-section .container {
    display: flex;
    align-items: center;
    justify-content: space-between;
}
			.user-panel {
	float: right;
	font-weight: 500;
	background: #740101 !important;
	padding: 8px 28px;
	border-radius: 30px;
}

.user-panel a {
	font-size: 14px;
	color: #ffffff;
}

.main-menu {
    margin-right: 50px;
    display: flex;
    align-items: center;
}

.main-menu ul {
    display: flex;
    align-items: center;
    gap: 35px;
    list-style: none;
    margin: 0;
    padding: 0;
}

.main-menu ul li {
	display: inline;
}

.main-menu ul li a {
	
	display: inline-block;
	font-size: 16px;
	color: #fff;
	margin-left: 35px;
	font-weight: 500;
	padding: 10px 5px;
}

.main-menu ul li a:hover {
	color: #ffb320;
}

.header-btn {
	float: right;
	margin-right: 0;
}

.nav-switch {
	display: none;
}

		 </style>
	</header>	<!-- Header section end -->
	<!-- <div data-ccid="6DlojvIEfV0lkEzMXCfKTQ" class="moduleCarousel module--media-hero-video-carousel module--seen module--enter-done"><div class="carousel carousel--looping-thumbnail" data-ccid-m="6m3Oz4FBlqIDtNQBbGVm1I" data-ccm-m="carouselMaster"><div class="carousel__slides" data-ccid-l="7bWzSujr9USnRRuLOZHDLk" data-ccm-l="carousel"><div class="carouselSlide carousel--looping-thumbnail carouselSlide--3" data-ccid-l="37R33mQ1pZzUerJoH2OTSo" data-ccm-l="carouselSlide"><div class="carouselSlide__slides__slide" style="background-image: url(&quot;https://staticctf.ubisoft.com/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/1aecXJZGAIIdettbCPkACO/4636e21dca7a01e41181ca22126989c1/Desktop_ACSH_Takeover_Slider3.jpg&quot;);"><div class="carouselSlide__slides__slide__media" style="background-color: rgb(158, 12, 18);"></div><div class="carouselSlide__slides__slide__content"><h2 data-ccf-l="title" style="color: rgb(158, 12, 18);">Discover the digital deluxe edition</h2><div data-ccf-l="content"><p>Enhance your game experience with additional digital content, including legendary gear and weapon sets for both Naoe and Yasuke.</p></div><a aria-label="Buy Now" class="sc-gggouf iWJvHo btn btn-primary carouselSlide__slides__slide__content__btn btn__number--1 external" data-innertext="Buy Now" data-ccid-m="1FZ6g33gyb3qbdqKV30VR0" data-ccm-m="buttonMaster" href="https://store.ubisoft.com/673b49019baa3f5f7f025a29.html" target="blank" rel="noreferrer noopener "><span class="" data-innertext="Buy Now" data-ccid-l="1B8ljSt9h50BSQZWaLJcqi" data-ccm-l="button" data-ccf-l="buttonText">Buy Now</span></a><button aria-label="Watch trailer" class="sc-cyQzhP jPNGvp btn btn-primary carouselSlide__slides__slide__content__btn btn__number--2 youtube-modal" data-innertext="Watch trailer" data-ccid-m="67menp7aIlg2oOWIrZOIP7" data-ccm-m="buttonMaster" type="button"><span class="" data-innertext="Watch trailer" data-ccid-l="2glkqsPmioPKDM7BRrd2z2" data-ccm-l="button" data-ccf-l="buttonText">Watch trailer</span></button><div class="btn btn-primary carouselSlide__slides__slide__content__btn btn__number--3 no-action has-image" data-ccid-m="5PVYg8EzBO89CdLvQiZxtk" data-ccm-m="buttonMaster"><img class="" src="https://staticctf.ubisoft.com/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/2MJoL1KfnEjtJxKpWfEUyu/c53a985a90bb0f421c6d828e91a711b1/REDlogo_Vertical_AllWhite_NoCrest.png" alt="" loading="lazy"></div></div></div></div></div><div class="carousel__tabs"><div class="carousel__tabs__timer"><ul><li class=""><button class="carousel__tabs__btn" data-ccm-m="buttonMaster" type="button"><h2 data-innertext="Watch the Launch Trailer of AC Shadows">Watch the Launch Trailer of AC Shadows</h2><p>AC Shadows is available now on PS5, Xbox Series X|S, PC including Steam, and more. Buy now!</p><div class=""><img src="https://staticctf.ubisoft.com/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/20UYtJu5B4St2jVasWOwSz/9492318e3ab35aa92ebde7afc0b645d5/ACSH_Crest_logo_300x378.png" alt="" loading="lazy"><span class="carousel__underline" style="background-color: rgb(158, 12, 18);"></span></div></button></li><li class=""><button class="carousel__tabs__btn" data-ccm-m="buttonMaster" type="button"><h2 data-innertext="Discover the upcoming expansion of AC Shadows">Discover the upcoming expansion of AC Shadows</h2><p>Travel to a new distinctive region - the island of Awaji - a place of mysterious beauty. Feel the tension of being hunted by a new faction, threatening the mysterious island of Awaji. Coming later in 2025.</p><div class=""><img src="https://staticctf.ubisoft.com/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/20UYtJu5B4St2jVasWOwSz/9492318e3ab35aa92ebde7afc0b645d5/ACSH_Crest_logo_300x378.png" alt="" loading="lazy"><span class="carousel__underline" style="background-color: rgb(158, 12, 18);"></span></div></button></li><li class="is-active"><div class="progress-bar" style="width: 92%; background-color: rgb(158, 12, 18);"></div><progress value="9.2" max="10"></progress><button class="carousel__tabs__btn" data-ccm-m="buttonMaster" type="button"><h2 data-innertext="Discover the digital deluxe edition">Discover the digital deluxe edition</h2><p>Enhance your game experience with additional digital content, including legendary gear and weapon sets for both Naoe and Yasuke.</p><div class="is-active"><img src="https://staticctf.ubisoft.com/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/20UYtJu5B4St2jVasWOwSz/9492318e3ab35aa92ebde7afc0b645d5/ACSH_Crest_logo_300x378.png" alt="" loading="lazy"><span class="carousel__underline" style="background-color: rgb(158, 12, 18);"></span></div></button></li></ul></div></div><div class="carousel__backward"><button class="carousel__backward__btn" data-ccm-m="buttonMaster" type="button"><svg class="icon icon-arrow-left" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 19 30" role="img" aria-label="Arrow Left"><title>Arrow Left</title><desc>Black arrow pointing left</desc><path d="M15,30L0,15L15,0l4,4L8,15l11,11L15,30z"></path></svg></button></div><div class="carousel__forward"><button class="carousel__forward__btn" data-ccm-m="buttonMaster" type="button"><svg class="icon icon-arrow-right" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 19 30" role="img" aria-label="Arrow Right"><title>Arrow Right</title><desc>Black arrow pointing right</desc><path d="M4,0l15,15L4,30l-4-4l11-11L0,4L4,0z"></path></svg></button></div><div class="carousel__pageCount">3<span>/</span>3</div></div></div>
	-->
	

    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://staticctf.ubisoft.com/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/1XnSPW7uYDTzgOi2aKSvPJ/74782ebda69b5adb9cdcbfe0b3e214a6/Desktop_ACF_Slide1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-slide-bg"></div>
				
				<div class="carousel-slide-content">
                    <h2>Discover the</br>Digital Deluxe</br>Edition</h2>
                    <p>Enhance your game experience with additional digital content,</br> including legendary gear and weapon sets for both Naoe and Yasuke.</p>
                    <a class="custom-btn btn btn1" href="https://store.ubisoft.com/673b49019baa3f5f7f025a29.html" target="_blank">Buy Now</a>
                    <button class="custom-btn btn" type="button" aria-label="Watch trailer">Watch trailer</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://staticctf.ubisoft.com/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/1aecXJZGAIIdettbCPkACO/4636e21dca7a01e41181ca22126989c1/Desktop_ACSH_Takeover_Slider3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-slide-bg"></div>
				<div class="carousel-slide-content">
                    <h2>Next Adventure Awaits</h2>
                    <p>Get ready for your next big challenge with new missions</br>and rewards. The journey is just beginning.</p>
                    <a class="custom-btn btn btn1"  href="https://store.ubisoft.com/673b49019baa3f5f7f025a29.html" target="_blank">Buy Now</a>
                    <button class="custom-btn btn" type="button" aria-label="Watch trailer">Watch trailer</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://staticctf.ubisoft.com/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/44rMk6XXwubA02ItkfarO/7a7babadedbd39fa6e89db974f7ca6a2/ACSH_ClawsofAwaji_ACFcarouel.jpg" class="d-block w-100" alt="...">
                <div class="carousel-slide-bg"></div>
				<div class="carousel-slide-content">
                    <h2>Unleash Your Power</h2>
                    <p>Unlock powerful new gear and embark on an epic journey</br>to change the course of history.</p>
                    <a class="custom-btn btn btn1" href="https://store.ubisoft.com/673b49019baa3f5f7f025a29.html" target="_blank">Buy Now</a>
                    <button class="custom-btn btn" type="button" aria-label="Watch trailer">Watch trailer</button>
                </div>
            </div>
        </div>

    
	    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <svg class="icon icon-arrow-left" x="0px" y="0px" viewBox="0 0 19 30" role="img" aria-label="Arrow Left">
                <title>Arrow Left</title>
                <desc>Black arrow pointing left</desc>
                <path d="M15,30L0,15L15,0l4,4L8,15l11,11L15,30z"></path>
            </svg>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <svg class="icon icon-arrow-right" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 19 30" role="img" aria-label="Arrow Right">
                <title>Arrow Right</title>
                <desc>Black arrow pointing right</desc>
                <path d="M4,0l15,15L4,30l-4-4l11-11L0,4L4,0z"></path>
            </svg>
        </button>
    </div>


	<!-- Hero section -->
	<!-- <section class="hero-section">
		<div class="hero-slider owl-carousel">
			<div class="hs-item set-bg" data-setbg="img/slider-1.jpg">
				<div class="hs-text">
					<div class="container">
						<h2>The Best <span>Games</span> Out There</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada <br> lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. <br>Suspendisse cursus faucibus finibus.</p>
						<a href="#" class="site-btn">Read More</a>
					</div>
				</div>
			</div>
			<div class="hs-item set-bg" data-setbg="img/slider-2.jpg">
				<div class="hs-text">
					<div class="container">
						<h2>The Best <span>Games</span> Out There</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada <br> lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. <br>Suspendisse cursus faucibus finibus.</p>
						<a href="#" class="site-btn">Read More</a>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!-- Hero section end -->


	<!-- Latest news section -->
	<div class="latest-news-section">
		<div class="ln-title" style="font-family:PT Serif, serif; text-transform: uppercase">Latest News</div>
		<div class="news-ticker">
			<div class="news-ticker-contant">
				<div class="nt-item"><span class="new">new</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </div>
				<div class="nt-item"><span class="strategy">strategy</span>Isum dolor sit amet, consectetur adipiscing elit. </div>
				<div class="nt-item"><span class="racing">racing</span>Isum dolor sit amet, consectetur adipiscing elit. </div>
			</div>
		</div>
	</div>
	<!-- Latest news section end -->


	<!-- Feature section -->
	<section class="feature-section spad mb-5 text-center">
	    <h2 class="text-center mb-5 h1" style="color:white; font-family:PT Serif, serif;text-transform:uppercase">Trending: Assassin's Creed</br>Shadows announcements</h2>
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 p-0">
					<div class="feature-item set-bg" style="background-image: url('https://staticctf.ubisoft.com/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/2iB4IiCqv7wxcf8SDA1rGq/cd245fc1206d07699c876e64bc4a2ee1/ACFranchise-MoreThanGames-UbisoftGear.jpg');" >
						<span class="cata new">new</span>
						<div class="fi-content text-white">
							<h5><a href="#">Shop The Official Assassin's Creed Merch Collection!</a></h5>
		
							<a href="#" class="fi-comment">Buy now</a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 p-0">
					<div class="feature-item set-bg" style="background-image: url('https://staticctf.ubisoft.com/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/50kCZyPBfq4irQxZKhuA8N/f5a3fe0289f27b2bb32713dbb7d0199b/ACSH-Rhinoshield-collab.jpg');">
						<div class="fi-content text-white">
							<h5><a href="#">Assassin’s Creed Shadows x RHINOSHIELD – Phone Case Collection</a></h5>
							<a href="#" class="fi-comment">Buy now</a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 p-0">
					<div class="feature-item set-bg" style="background-image: url('https://staticctf.ubisoft.com/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/22Ek3V0NdDsy5EevJwdRWd/7f2354c66aa259fd0d99655892c18c2c/acf-merch-bokksu-collab.jpg');">
						<span class="cata new">new</span>
						<div class="fi-content text-white">
							<h5><a href="#">Japan Crate x Assassin’s Creed Shadows — Strike with Flavor Snack Crate</a></h5>
							<a href="#" class="fi-comment">Buy now</a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 p-0">
					<div class="feature-item set-bg" style="background-image: url('https://staticctf.ubisoft.com/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/6YYI7xdKYBlhJGxAEqGlom/f93d75de9a6bad3fc993b91f04819af8/FF-x-AC-More-Than-Games_Final_web.jpg');">
						<span class="cata racing">limited!</span>
						<div class="fi-content text-white">
							<h5><a href="#">FocusFuel: Limited Edition Citrus Yuzu - with in-game benefits!</a></h5>
							<a href="#" class="fi-comment">Buy now</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Feature section end -->


	<!-- Recent game section  -->
	<section class="recent-game-section spad set-bg text-center" style="Background-image: url('https://images5.alphacoders.com/136/1362766.jpeg')">
		<div class="container cnt">
			<div class="section-title">
				<div class="cata new">new</div>
				<h2 class="text-white" style="font-family: PT Serif, serif; text-transform: uppercase">Recent Games</h2>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="recent-game-item">
						<div class="rgi-thumb set-bg" style="Background-image: url('https://staticctf.ubisoft.com/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/30dd8syYR9JAPhV759qTQe/16542fd1eb739190a9eec72f3d3b08fb/acm-boxshot.jpg?imwidth=360')">
						</div>
						<div class="rgi-content text-white text-center">
							<h5>Assasin’s Creed</br>Mirage</h5>
							
							<div class="rgi-extra text-center">
								<div class="rgi-star"><img src="img/icons/star.png" alt=""></div>
								<div class="rgi-heart"><img src="img/icons/heart.png" alt=""></div>
							</div>
						</div>
					</div>	
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="recent-game-item">
						<div class="rgi-thumb set-bg" style="Background-image: url('https://staticctf.ubisoft.com/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/25jYqtlv4yZXspIIIrPYcy/f90d2f35fcb4f0080a6abbddb5e927ad/AC-Shadows-boxshot.jpg?imwidth=360')" data-setbg="https://staticctf.ubisoft.com/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/25jYqtlv4yZXspIIIrPYcy/f90d2f35fcb4f0080a6abbddb5e927ad/AC-Shadows-boxshot.jpg?imwidth=360">
						    <div class="cata new">new</div>
						</div>
						<div class="rgi-content text-white text-center">
							<h5 >Assassin’s Creed</br>Shadows</h5>
							
							<div class="rgi-extra">
								<div class="rgi-star"><img src="img/icons/star.png" alt=""></div>
								<div class="rgi-heart"><img src="img/icons/heart.png" alt=""></div>
							</div>
						</div>
					</div>	
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="recent-game-item">
						<div class="rgi-thumb set-bg" style="background-image:url('https://staticctf.ubisoft.com/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/5EBrXfSnjwvZRpDRtnqmpG/374f103250d4ed61cbb7f2323e063868/ac-valhalla.jpg?imwidth=360')">
							
						</div>
						<div class="rgi-content text-white text-center">
							<h5>Assasin’s Creed</br>Valhalla</h5>

							<div class="rgi-extra">
								<div class="rgi-star"><img src="img/icons/star.png" alt=""></div>
								<div class="rgi-heart"><img src="img/icons/heart.png" alt=""></div>
							</div>
						</div>
					</div>	
				</div>
			</div>
		</div>
		<button class="custom-btn btn w-25 mt-5 ms-0" type="button" id="btn2" aria-label="view all games">View All Games</button>
	</section>
	<!-- Recent game section end -->


	<!-- Tournaments section -->
	 <!-- 
	<section class="tournaments-section spad">
		<div class="container">
			<div class="tournament-title">Tournaments</div>
			<div class="row">
				<div class="col-md-6">
					<div class="tournament-item mb-4 mb-lg-0">
						<div class="ti-notic">Premium Tournament</div>
						<div class="ti-content">
							<div class="ti-thumb set-bg" data-setbg="img/tournament/1.jpg"></div>
							<div class="ti-text">
								<h4>World Of WarCraft</h4>
								<ul>
									<li><span>Tournament Beggins:</span> June 20, 2018</li>
									<li><span>Tounament Ends:</span> July 01, 2018</li>
									<li><span>Participants:</span> 10 teams</li>
									<li><span>Tournament Author:</span> Admin</li>
								</ul>
								<p><span>Prizes:</span> 1st place $2000, 2nd place: $1000, 3rd place: $500</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="tournament-item">
						<div class="ti-notic">Premium Tournament</div>
						<div class="ti-content">
							<div class="ti-thumb set-bg" data-setbg="img/tournament/2.jpg"></div>
							<div class="ti-text">
								<h4>DOOM</h4>
								<ul>
									<li><span>Tournament Beggins:</span> June 20, 2018</li>
									<li><span>Tounament Ends:</span> July 01, 2018</li>
									<li><span>Participants:</span> 10 teams</li>
									<li><span>Tournament Author:</span> Admin</li>
								</ul>
								<p><span>Prizes:</span> 1st place $2000, 2nd place: $1000, 3rd place: $500</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!-- Tournaments section bg -->


	<!-- Review section -->
	<!-- 
	<section class="review-section spad set-bg" data-setbg="img/review-bg.png">
		<div class="container">
			<div class="section-title">
				<div class="cata new">new</div>
				<h2>Recent Reviews</h2>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="review-item">
						<div class="review-cover set-bg" data-setbg="img/review/1.jpg">
							<div class="score yellow">9.3</div>
						</div>
						<div class="review-text">
							<h5>Assasin’’s Creed</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="review-item">
						<div class="review-cover set-bg" data-setbg="img/review/2.jpg">
							<div class="score purple">9.5</div>
						</div>
						<div class="review-text">
							<h5>Doom</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="review-item">
						<div class="review-cover set-bg" data-setbg="img/review/3.jpg">
							<div class="score green">9.1</div>
						</div>
						<div class="review-text">
							<h5>Overwatch</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="review-item">
						<div class="review-cover set-bg" data-setbg="img/review/4.jpg">
							<div class="score pink">9.7</div>
						</div>
						<div class="review-text">
							<h5>GTA</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!-- Review section end -->


	<!-- Footer top section --> <!--
	<section class="footer-top-section">
		<div class="container">
			<div class="footer-top-bg">
				<img src="img/footer-top-bg.png" alt="">
			</div>
			<div class="row">
				<div class="col-lg-4">
					<div class="footer-logo text-white">
						<img src="img/footer-logo.png" alt="">
						<p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="footer-widget mb-5 mb-md-0">
						<h4 class="fw-title">Latest Posts</h4>
						<div class="latest-blog">
							<div class="lb-item">
								<div class="lb-thumb set-bg" data-setbg="img/latest-blog/1.jpg"></div>
								<div class="lb-content">
									<div class="lb-date">June 21, 2018</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum </p>
									<a href="#" class="lb-author">By Admin</a>
								</div>
							</div>
							<div class="lb-item">
								<div class="lb-thumb set-bg" data-setbg="img/latest-blog/2.jpg"></div>
								<div class="lb-content">
									<div class="lb-date">June 21, 2018</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum </p>
									<a href="#" class="lb-author">By Admin</a>
								</div>
							</div>
							<div class="lb-item">
								<div class="lb-thumb set-bg" data-setbg="img/latest-blog/3.jpg"></div>
								<div class="lb-content">
									<div class="lb-date">June 21, 2018</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum </p>
									<a href="#" class="lb-author">By Admin</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="footer-widget">
						<h4 class="fw-title">Top Comments</h4>
						<div class="top-comment">
							<div class="tc-item">
								<div class="tc-thumb set-bg" data-setbg="img/authors/1.jpg"></div>
								<div class="tc-content">
									<p><a href="#">James Smith</a> <span>on</span>  Lorem ipsum dolor sit amet, co</p>
									<div class="tc-date">June 21, 2018</div>
								</div>
							</div>
							<div class="tc-item">
								<div class="tc-thumb set-bg" data-setbg="img/authors/2.jpg"></div>
								<div class="tc-content">
									<p><a href="#">James Smith</a> <span>on</span>  Lorem ipsum dolor sit amet, co</p>
									<div class="tc-date">June 21, 2018</div>
								</div>
							</div>
							<div class="tc-item">
								<div class="tc-thumb set-bg" data-setbg="img/authors/3.jpg"></div>
								<div class="tc-content">
									<p><a href="#">James Smith</a> <span>on</span>  Lorem ipsum dolor sit amet, co</p>
									<div class="tc-date">June 21, 2018</div>
								</div>
							</div>
							<div class="tc-item">
								<div class="tc-thumb set-bg" data-setbg="img/authors/4.jpg"></div>
								<div class="tc-content">
									<p><a href="#">James Smith</a> <span>on</span>  Lorem ipsum dolor sit amet, co</p>
									<div class="tc-date">June 21, 2018</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!-- Footer top section end -->

	<div class="promo__wrapper">
    	<div class="promo__wrapper__media"></div>
    	<div class="promo__wrapper__content" data-btn-l="8" data-ccid-l="5qKwOpfpE5jqor6CoKp9v2" data-ccm-l="promo">
    	    <h2 class="promo__content__title mb-1" data-innertext="Visit Other Assassin's Creed Channels:" style="font-family:PT Serif,serif;font-size:24px" data-ccf-l="title">
    	        Visit Other Assassin's Creed Channels:
    	    </h2>
    	    <a class="btn btn-primary promo__wrapper__content__btn external has-image" href="https://assassinscreed.com/twitter" target="_blank" rel="noreferrer noopener">
    	        <img src="https://staticctf.ubisoft.com/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/7MSfSWhXCnKkoVagD3E6lJ/89e71af79d43bee32f99824ffdaccd4d/_Ubisoft__global_twitter_logo.png" alt="Twitter">
    	    </a>
    	    <a class="btn btn-primary promo__wrapper__content__btn external has-image" href="https://assassinscreed.com/facebook" target="_blank" rel="noreferrer noopener">
    	        <img src="https://staticctf.ubisoft.com/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/32xRzuzxNUJYa3QO5iY8B5/de15e78cd700a515789ce60bd8e57e80/_Ubisoft__global_facebook_logo.png" alt="Facebook">
    	    </a>
    	    <a class="btn btn-primary promo__wrapper__content__btn external has-image" href="https://assassinscreed.com/twitch" target="_blank" rel="noreferrer noopener">
    	        <img src="https://staticctf.ubisoft.com/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/7qD6KHarSZ9h2uc7G5o20C/c9c34183556205635d0042b498b8a9fa/_Ubisoft__global_twitch_logo.webp" alt="Twitch">
    	    </a>
    	    <a class="btn btn-primary promo__wrapper__content__btn external has-image" href="https://assassinscreed.com/instagram" target="_blank" rel="noreferrer noopener">
    	        <img src="https://staticctf.ubisoft.com/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/6htnsL4NtlpGqIG7nehH4y/c429c1eab3e0422b745a0b14a51a47ee/_Ubisoft__global_instagram_logo.png" alt="Instagram">
    	    </a>
    	    <a class="btn btn-primary promo__wrapper__content__btn external has-image" href="https://assassinscreed.com/yt-playlist" target="_blank" rel="noreferrer noopener">
    	        <img src="https://staticctf.ubisoft.com/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/68qlJsyTv8sTv54rqqfOPO/01a04e004de9c60cf0854a444bd1b778/_Ubisoft__global_youtube_logo.png" alt="YouTube">
    	    </a>
    	    <a class="btn btn-primary promo__wrapper__content__btn external has-image" href="https://assassinscreed.com/tiktok" target="_blank" rel="noreferrer noopener">
    	        <img src="https://staticctf.ubisoft.com/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/2y2VH4Yqqf7yZzMVw3muFA/c5c7bac8b2dd3956378b5d1562d8fee0/ubisoft-tiktok-social-icon.png" alt="TikTok">
    	    </a>
    	    <a class="btn btn-primary promo__wrapper__content__btn external has-image" href="https://assassinscreed.com/reddit" target="_blank" rel="noreferrer noopener">
    	        <img src="https://staticctf.ubisoft.com/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/3YvZrNQQJksMvgNxZogXsr/e64d76607cf0b5416618dc3ce1ba96af/ubisoft-global-social_icon-reddit-v2.png" alt="Reddit">
    	    </a>
    	    <a class="btn btn-primary promo__wrapper__content__btn external has-image" href="https://assassinscreed.com/discord" target="_blank" rel="noreferrer noopener">
    	        <img src="https://staticctf.ubisoft.com/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/2v7txZYbSOAjPG6dkzkE9a/73206e476307830f4d82cca565b70666/social-icon-discord.png" alt="Discord">
    	    </a>
	    </div>
	</div>
	<!-- Footer section -->
	<footer class="site-footer">
    <div class="footer-content">
        <p>&copy; 2025 Ubisoft. All Rights Reserved.</p>
        <ul class="footer-links">
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Terms of Service</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </div>
</footer>	<!-- Footer section end -->

	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<!-- <script src="js/bootstrap.min.js"></script> -->
	<!-- <script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.marquee.min.js"></script> -->
	<!-- <script src="js/main.js"></script> -->
	<script src="js/new.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
	
    </body>
</html>