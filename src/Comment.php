<?php
namespace core;

class Comment {
    private string $comment;
    private int $userId;
    private string $userName;
    private string $createdAt;
    private string $imageName;
    private int $id;

    public function __construct(string $comment, int $userId, string $userName, string $imageName = '', string $createdAt = '', int $id = 0) {
        $this->comment = $comment;
        $this->userId = $userId;
        $this->userName = $userName;
        $this->imageName = $imageName;
        $this->createdAt = $createdAt;
        $this->id = $id;
    }

    public function getComment(): string {
        return $this->comment;
    }

    public function getUserId(): int {
        return $this->userId;
    }

    public function getUserName(): string {
        return $this->userName;
    }

    public function getCreatedAt(): string {
        return $this->createdAt;
    }

    public function getId(): int {
        return $this->id;
    }

    public function getImageName(): string {
        return $this->imageName;
    }
}