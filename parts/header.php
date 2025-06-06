<header class="header-section" style="background-color:rgba(33, 45, 51, 1)">
		<div class="container" >
			<!-- logo -->
			<a class="site-logo" href="index.php">
				<img src="https://staticctf.ubisoft.com/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/5vjWXmgLzCT1il71p9fi8e/ce4b5ae3a6699d057c368742f3b1bee0/ac_franchise_mobile_logo.png" height="37px" alt="">
			</a>
			<?php
			if (session_status() === PHP_SESSION_NONE) session_start();
			$avatar = 'img/avatars/default.png';
			if (isset($_SESSION['user'])) {
			    $pic = $_SESSION['user']['profile_picture'] ?? 'default.png';
				$picPath = dirname(__DIR__) . '/img/avatars/' . $pic;

				if (!file_exists($picPath) || empty($pic)) {
				    $pic = 'default.png';
				}
			    $avatar = '/re/img/avatars/' . htmlspecialchars($pic);
			}
			?>
			<div class="user-panel">
			    <?php if (isset($_SESSION['user'])): ?>
			        <a href="profile.php" title="Profile">
			            <img src="<?= $avatar ?>" alt="Profile" class="rounded-circle" style="height: 36px; width: 36px; object-fit: cover; border: 2px solid #fff; cursor: pointer;" onclick="location.href='profile.php'">
			        </a>
			        <a href="logout.php" style="margin-left: 8px;">Logout</a>
			    <?php else: ?>
			        <a href="login.php">Login</a> / <a href="register.php">Register</a>
			    <?php endif; ?>
			</div>

			<!-- responsive -->
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
			<!-- site menu -->
			<nav class="main-menu">
				<ul>
					<?php if (isset($_SESSION['user']) && ($_SESSION['user']['role'] ?? '') === 'admin'): ?>
					    <li><a href="admin_users.php">Admin Panel</a></li>
					<?php endif; ?>
					<li><a href="index.php">Home</a></li>
					<li><a href="review.php">Games</a></li>
					<li><a href="categories.php">Gallery</a></li>
					<li><a href="public/qna.php">QnA</a></li>
					<li><a href="contact.php">Contact</a></li>
				</ul>
			</nav>
		</div>
		 <style>
.profile-thumb {
    width: 32px;
    height: 32px;
    border-radius: 50%;
    object-fit: cover;
    vertical-align: middle;
}
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
	</header>