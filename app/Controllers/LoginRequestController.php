<?php

namespace App\Controllers;

session_start();

use App\Config\Database;
use App\DAO\UserDAO;
use App\Models\User;

class LoginRequestController implements Controller
{
    public function processaRequisicao(): void
    {
        if(isset($_POST)){
            $user = new User($_POST["username"],$_POST["password"]);
            $userDAO = new UserDAO(Database::connection());
            $result = $userDAO->findUser($user);
           
            if(($result)){
                $_SESSION["id"] = $result["id"];
                $_SESSION["username"] = $result["username"];
                $_SESSION["function"] = $result["function"];
                $result["function"] === "admin" ? header("location:/home/admin") : header("location:/home/student");
               
                return;
            }
            echo "erro ao logar";
            return;
        }
  
    }
}







