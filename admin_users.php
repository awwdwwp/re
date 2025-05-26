<?php
session_start();
require_once(__DIR__ . '/src/Database.php');

use core\Database;


if (!isset($_SESSION['user']) || ($_SESSION['user']['role'] ?? '') !== 'admin') {
    header('Location: login.php');
    exit;
}

$db = new Database('contact');
$conn = $db->getConnection();


$stmt = $conn->query("SELECT id, name, email, profile_picture, role, created_at FROM users ORDER BY created_at DESC");
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    
    <title>Admin - Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <style>
        body {
            background-image: url(https://static-dm.ubisoft.com/assassins-creed/franchise/prod/b7db6092b3081a637071c8a88a9270a0.jpg);
            background-attachment: fixed;
            background-size: cover;
            margin:0;
            padding:0;
        }

        
        .admin-container {
            backdrop-filter: blur(10px);
            background-color: rgba(255, 255, 255, 0.15);
            border-radius: 12px;
            padding: 30px;
            width: 90%;
            max-width: 1000px;
            margin: 80px auto 40px auto;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
        }

        h2 {
            color:white;
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            color: #fff;
        }

        th, td {
            padding: 10px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.3);
            text-align: left;
        }

        th {
            background-color: rgba(255, 255, 255, 0.1);
        }

        tr:hover {
            background-color: rgba(255, 255, 255, 0.05);
        }

        img {
            width: 32px;
            height: 32px;
            border-radius: 50%;
        }
    </style>
</head>
<body>
    <div style="text-align: center; margin-top: 80px;">
        <a href="index.php" class="btn btn-danger btn-lg px-5 py-3">Go to Homepage</a>
    </div>

    <div class="admin-container">
        <h2 >All Registered Users</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Avatar</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Joined</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                    <?php
                        $avatar = $user['profile_picture'] ?: 'default.png';
                        $avatarPath = 'img/avatars/' . htmlspecialchars($avatar);
                    ?>
                    <tr>
                        <td><?= $user['id'] ?></td>
                        <td><img src="<?= $avatarPath ?>" alt="Avatar"></td>
                        <td><?= htmlspecialchars($user['name']) ?></td>
                        <td><?= htmlspecialchars($user['email']) ?></td>
                        <td><?= htmlspecialchars($user['role']) ?></td>
                        <td><?= $user['created_at'] ?></td>
                         <td>
                            <form action="send_notification.php" method="POST">
                                <input type="hidden" name="user_id" value="<?= $user['id'] ?>">
                                <textarea name="message" rows="1" placeholder="Enter message..." required></textarea>
                                <button type="submit" class="btn btn-sm btn-primary mt-1">Send</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>