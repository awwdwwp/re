
<?php if (session_status() === PHP_SESSION_NONE) {
    session_start();
} ?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Gallery</title>
	<meta charset="UTF-8">
	<meta name="description" content="Game Warrior Template">
	<meta name="keywords" content="warrior, game, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link data-react-helmet="true" rel="shortcut icon" sizes="16x16 24x24 32x32 48x48 64x64" href="https://static-dm.ubisoft.com/assassins-creed/franchise/prod/favicon.ico"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i" rel="stylesheet">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="stylesheet" href="css/gallery.css"/>

</head>
<body class="text-center">
	<!-- Header section -->
	<?php include 'parts/header.php'; ?>
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
</div>
<div class="text-center mb-5">
<?php
	if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

	require_once(__DIR__ . '/db/config.php');
	require_once(__DIR__ . '/src/Database.php');
	require_once(__DIR__ . '/src/Comment.php');
	require_once(__DIR__ . '/src/CommentManager.php');

use core\Database;
use core\CommentManager;

$db = new Database('contact');
$conn = $db->getConnection();
$commentManager = new CommentManager($conn);
$editingId = $_GET['edit'] ?? null;
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
    $imgPath = 'img/gallery/' . basename($photo['link']);
    $imageName = basename($photo['link']); 
?>
    <a class="photo-item" href="<?php echo htmlspecialchars($imgPath); ?>" target="_blank">
        <div class="photo-wrapper">
            <div class="photo-media">
                <img src="<?php echo htmlspecialchars($imgPath); ?>" alt="<?php echo htmlspecialchars($photo['alt']); ?>">
            </div>
        </div>
    </a>

    
    <div class="comments" style="margin-bottom: 1.5rem;">
       <?php  
        $comments = $commentManager->getCommentsForImage($imageName);

	    foreach ($comments as $comment): ?>
	    	<div class="comment bg-light p-2 mb-1 text-start">
	    	    <?php
				$pic = $comment->getProfilePicture();
				if (empty($pic) || !file_exists(__DIR__ . '/img/avatars/' . $pic)) {
				    $pic = 'default.png';
				}
				$avatarPath = 'img/avatars/' . htmlspecialchars($pic);
				?>
				<img src="<?php echo $avatarPath; ?>" alt="Avatar" style="width:32px;height:32px;border-radius:50%;vertical-align:middle;margin-right:6px;">
				<strong><?php echo htmlspecialchars($comment->getUserName()); ?>:</strong>
				<?php echo nl2br(htmlspecialchars($comment->getComment())); ?>
				<br><small><?php echo $comment->getCreatedAt(); ?></small>

                <?php
                if (isset($_SESSION['user'])) {
                    $isAdmin = ($_SESSION['user']['role'] ?? '') === 'admin';
                    $isOwner = $_SESSION['user']['id'] == $comment->getUserId();

                    if ($isOwner || $isAdmin): ?>
					    <div>
					        <?php if (isset($editingId) && $editingId == $comment->getId() && $isOwner): ?>				            
					            <form action="submit_edit.php" method="POST" class="mb-2">
					                <input type="hidden" name="id" value="<?php echo $comment->getId(); ?>">
					                <textarea name="comment" class="form-control mb-1" required><?php echo htmlspecialchars($comment->getComment()); ?></textarea>
					                <button type="submit" class="btn btn-sm btn-success">Save</button>
					                <a href="categories.php" class="btn btn-sm btn-secondary">Cancel</a>
					            </form>
								
					        <?php elseif ($isOwner): ?>
					            <a href="?edit=<?php echo $comment->getId(); ?>">Edit</a>
					        <?php endif; ?>
							
					        <?php if ($isAdmin): ?>
					            <form method="POST" action="delete_comment.php" style="display:inline;">
					                <input type="hidden" name="comment_id" value="<?php echo $comment->getId(); ?>">
					                <button type="submit" onclick="return confirm('Delete this comment?')" class="btn btn-link btn-sm p-0 m-0 align-baseline">Delete</button>
					            </form>
					        <?php endif; ?>
					    </div>
					<?php endif;
                }
                ?>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- Add Comment Form -->
    <?php if (isset($_SESSION['user'])): ?>
        <form action="submit_comment.php" method="POST" class="mb-5">
            <input type="hidden" name="image" value="<?php echo htmlspecialchars($imageName); ?>">
            <textarea name="comment" placeholder="Write a comment..." required class="form-control mb-2"></textarea>
            <button type="submit" class="btn btn-primary btn-sm">Post Comment</button>
        </form>
    <?php else: ?>
        <p><em><a href="login.php">Log in</a> to write a comment.</em></p>
    <?php endif; ?>

<?php endforeach; ?>
</div>
	<!-- Footer section -->
	<?php include 'parts/footer.html'; ?>
	<!-- Footer section end -->


	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>