<?php

namespace core;

use PDO;

class ProfileManager {
    private PDO $conn;
    private string $avatarDir;

    public function __construct(PDO $conn, string $avatarDir = __DIR__ . '/../img/avatars/') {
        $this->conn = $conn;
        $this->avatarDir = $avatarDir;
    }

    public function getUserById(int $id): ?array {
        $stmt = $this->conn->prepare("SELECT * FROM users WHERE id = ?");
        $stmt->execute([$id]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        return $user ?: null;
    }

    public function updateNickname(int $id, string $newName): bool {
        $stmt = $this->conn->prepare("UPDATE users SET name = ? WHERE id = ?");
        return $stmt->execute([$newName, $id]);
    }

    public function updateProfilePicture(int $id, string $filename): bool {
        $stmt = $this->conn->prepare("UPDATE users SET profile_picture = ? WHERE id = ?");
        return $stmt->execute([$filename, $id]);
    }

    public function deleteProfilePicture(int $id): bool {
        $stmt = $this->conn->prepare("SELECT profile_picture FROM users WHERE id = ?");
        $stmt->execute([$id]);
        $current = $stmt->fetchColumn();

        if ($current && $current !== 'default.png') {
            $path = $this->avatarDir . $current;
            if (file_exists($path)) {
                unlink($path);
            }
        }

        return $this->updateProfilePicture($id, 'default.png');
    }

    public function getAvatarPath(string $filename): string {
        return $this->avatarDir . $filename;
    }
}
?>