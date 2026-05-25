<?php

namespace Infrastructure\Adapters\Persistence\MySQL\Config;

use PDO;
use PDOException;

class Connection
{
    public static function make(): PDO
    {
        try {

            return new PDO(
                'mysql:host=localhost;dbname=hexagonal_user_management;charset=utf8mb4',
                'root',
                '',
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                ]
            );

        } catch (PDOException $e) {

            die('Error de conexión: ' . $e->getMessage());
        }
    }
}