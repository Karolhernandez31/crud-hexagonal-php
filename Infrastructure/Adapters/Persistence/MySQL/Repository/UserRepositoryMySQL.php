<?php

namespace Infrastructure\Adapters\Persistence\MySQL\Repository;

use Infrastructure\Adapters\Persistence\MySQL\Config\Connection;
use Domain\Models\UserModel;
use PDO;

class UserRepositoryMySQL
{
    private PDO $connection;

    public function __construct()
    {
        $this->connection = Connection::make();
    }

    public function findAll(): array
    {
        $stmt = $this->connection->query("SELECT * FROM users ORDER BY id DESC");

        $users = [];

        while ($row = $stmt->fetch()) {

            $users[] = new UserModel(
                $row['id'],
                $row['name'],
                $row['email'],
                $row['password'],
                $row['role'],
                $row['status']
            );
        }

        return $users;
    }

    public function create(UserModel $user): bool
    {
        $sql = "INSERT INTO users 
                (name, email, password, role, status)
                VALUES
                (:name, :email, :password, :role, :status)";

        $stmt = $this->connection->prepare($sql);

        return $stmt->execute([
            ':name' => $user->getName(),
            ':email' => $user->getEmail(),
            ':password' => password_hash($user->getPassword(), PASSWORD_BCRYPT),
            ':role' => $user->getRole(),
            ':status' => $user->getStatus()
        ]);
    }

    public function findById(int $id): ?UserModel
    {
        $stmt = $this->connection->prepare(
            "SELECT * FROM users WHERE id = :id"
        );

        $stmt->execute([':id' => $id]);

        $row = $stmt->fetch();

        if (!$row) {
            return null;
        }

        return new UserModel(
            $row['id'],
            $row['name'],
            $row['email'],
            $row['password'],
            $row['role'],
            $row['status']
        );
    }

    public function update(UserModel $user): bool
    {
        $sql = "UPDATE users SET
                name = :name,
                email = :email,
                role = :role,
                status = :status
                WHERE id = :id";

        $stmt = $this->connection->prepare($sql);

        return $stmt->execute([
            ':id' => $user->getId(),
            ':name' => $user->getName(),
            ':email' => $user->getEmail(),
            ':role' => $user->getRole(),
            ':status' => $user->getStatus()
        ]);
    }

    public function delete(int $id): bool
    {
        $stmt = $this->connection->prepare(
            "DELETE FROM users WHERE id = :id"
        );

        return $stmt->execute([
            ':id' => $id
        ]);
    }
}