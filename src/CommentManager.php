<?php
namespace core;

use PDO;

class CommentManager {
    private PDO $conn;

    public function __construct(PDO $conn) {
        $this->conn = $conn;
    }

    public function addComment(Comment $comment): bool {
        $stmt = $this->conn->prepare(
            "INSERT INTO comments (image_name, comment, user_id, created_at) VALUES (?, ?, ?, NOW())"
        );
        return $stmt->execute([
            $comment->getImageName(),
            $comment->getComment(),
            $comment->getUserId()
        ]);
    }

    public function updateComment(int $id, string $newText, array $user): bool {
        // Fetch comment to check ownership
        $stmt = $this->conn->prepare("SELECT * FROM comments WHERE id = ?");
        $stmt->execute([$id]);
        $existing = $stmt->fetch();

        if (!$existing) return false;

        $isOwner = $existing['user_id'] === $user['id'];
        

        if ($isOwner ) {
            $update = $this->conn->prepare("UPDATE comments SET comment = ? WHERE id = ?");
            return $update->execute([$newText, $id]);
        }

        return false;
    }

    public function deleteComment(int $id, array $user): bool {
    
        $stmt = $this->conn->prepare("SELECT * FROM comments WHERE id = ?");
        $stmt->execute([$id]);
        $existing = $stmt->fetch();
        
        if (!$existing) return false;
        
        $isOwner = $existing['user_id'] === $user['id'];
        $isAdmin = ($_SESSION['user']['role'] ?? '') === 'admin';
        
        if ($isOwner || $isAdmin) {
            $delete = $this->conn->prepare("DELETE FROM comments WHERE id = ?");
            return $delete->execute([$id]);
        }
    
        return false;
    }

    public function getCommentsForImage(string $imageName): array {
    $stmt = $this->conn->prepare(
    "SELECT c.*, u.name AS user_name, u.profile_picture
    FROM comments c
    JOIN users u ON c.user_id = u.id
    WHERE c.image_name = ?
    ORDER BY c.created_at DESC"
    );
    $stmt->execute([$imageName]);
    $rows = $stmt->fetchAll();

    $comments = [];
    foreach ($rows as $row) {
    $comment = new Comment(
        $row['comment'],
        $row['user_id'],
        $row['user_name'],
        $row['image_name'],
        $row['created_at'],
        $row['id'],
        $row['profile_picture'] ?? 'default.png'
        
    );
    $comments[] = $comment;
}

    return $comments;
}
}