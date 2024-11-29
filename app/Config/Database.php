<?php

namespace App\Config;

use Exception;
use PDO;

class Database
{
    private const DBNAME = "mentordev";
    private const HOST = "localhost";
    private const USERNAME = "root";
    private const PASSWORD = "";
    private const DSN = 'mysql:host=' . self::HOST . ';dbname=' . self::DBNAME;

    protected static $conn;

    public static function connection():PDO
    {

        try {
            self::$conn = new PDO(self::DSN, self::USERNAME, self::PASSWORD);
            return self::$conn;
        } catch (Exception $e) {
            echo "Erro ao se conectar: ". $e->getMessage();
        }
    }
}
