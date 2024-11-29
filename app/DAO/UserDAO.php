<?php 
namespace App\DAO;

use App\Models\User;
use Exception;
use PDO;

class UserDAO
{
    static $conn;

    public function __construct(PDO $pdo)
    {
        self::$conn = $pdo;
    }

    public function findUser(User $user)
    {
        $sql = "SELECT * FROM users WHERE username = :username and password = :password";
        $stmt = self::$conn->prepare($sql);
        $stmt->bindValue(":username",$user->getUserName());
        $stmt->bindValue(":password",$user->getPassword());
        try{
            $stmt->execute();
            return $stmt->fetch();
        } catch (Exception $e) {
            echo "Erro ao logar". $e->getMessage();
            return false;
        }
    }
}



?>