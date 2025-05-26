<?php

namespace core;

use PDO;

class ProfileManager {
    private PDO $conn;

    public function __construct(PDO $conn) {
        $this->conn = $conn;
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
}