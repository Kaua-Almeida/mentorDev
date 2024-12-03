<?php 
namespace App\Controllers\AdminControllers;

use App\Config\Database;
use App\Controllers\Controller;
use App\DAO\UserDAO;
use App\Models\User;

class CreateUsersPostController implements Controller
{
    public function processaRequisicao(): void
    {
        $user = new User($_POST["username"],password_hash($_POST["password"],PASSWORD_DEFAULT));
        $user->setFunction($_POST["function"]);
        $userDAO = new UserDAO(Database::connection());
        if( $userDAO->createUser($user)){
            header("location:/home/admin");
            return;
        }
        echo "erro ao criar usuário";
       
    }
}


?>