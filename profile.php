<?php
include 'parts/header.php'; 


use core\Database;
use core\ProfileManager;

require_once __DIR__ . '/db/config.php';
require_once __DIR__ . '/src/Database.php';
require_once __DIR__ . '/src/ProfileManager.php';

if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}

$db = new Database('contact');
$conn = $db->getConnection();
$profileManager = new ProfileManager($conn);

// Refresh user from DB
$user = $profileManager->getUserById($_SESSION['user']['id']);
if ($user) {
    $_SESSION['user'] = $user;
} else {
    echo "User not found.";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        body {
            background-image: url(https://static-dm.ubisoft.com/assassins-creed/franchise/prod/b7db6092b3081a637071c8a88a9270a0.jpg);
            background-size: cover;  
            background-position: center; 
            background-repeat: no-repeat; 
            background-attachment: fixed; 
            margin: 0;
            display: block;
            
            }
        .profile-img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid #ccc;
        }
        .btn-space {
            margin-top: 10px;
        }
    </style>
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card p-4 shadow-sm">
            <h2 class="mb-4">My Profile</h2>
            
            <div class="d-flex align-items-center">
                <img src="img/avatars/<?= htmlspecialchars($user['profile_picture']) ?>" width="100" alt="Profile Picture" class="profile-img me-3">
                <div>
                    <h5 class="mb-0"><?php echo htmlspecialchars($user['name']); ?></h5>
                    <small><?php echo htmlspecialchars($user['email']); ?></small>
                </div>
            </div>

            <hr>
            <form action="update_name.php" method="POST">
                <label for="name">Nickname:</label><br>
                <input type="text" class="form-control" name="name" value="<?= htmlspecialchars($user['name']) ?>" required><br><br>
                <button class="btn btn-primary btn-space" type="submit">Change Nickname</button>
            </form>
            <form action="upload_profile.php" method="POST" enctype="multipart/form-data" class="mt-3">       
                <label for="profile_picture" class="form-label">Change Profile Picture</label>
                <input type="file" name="profile_picture" class="form-control" accept=".jpg,.jpeg,.png,.webp" required>
                <button type="submit" class="btn btn-primary btn-space">Upload</button>
            </form>

            <?php if ($user['profile_picture'] !== 'default.png'): ?>
                <form method="POST" action="delete_profile_picture.php">
                    <button type="submit" class="btn btn-outline-danger btn-sm btn-space">Delete Profile Picture</button>
                </form>
            <?php endif; ?>
            <?php
            $stmt = $conn->prepare("SELECT message, created_at FROM notifications WHERE user_id = ? ORDER BY created_at DESC");
            $stmt->execute([$_SESSION['user']['id']]);
            $notifications = $stmt->fetchAll();
            ?>

            <?php if ($notifications): ?>
                <div class="notifications mt-4 p-3" style="background: rgba(255,255,255,0.1); backdrop-filter: blur(6px); border-radius: 10px;">
                    <h4>Notifications</h4>
                    <ul>
                        <?php foreach ($notifications as $note): ?>
                            <li><strong><?= $note['created_at'] ?>:</strong> <?= htmlspecialchars($note['message']) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>