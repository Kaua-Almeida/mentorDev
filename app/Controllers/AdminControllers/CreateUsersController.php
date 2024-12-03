<?php 
namespace App\Controllers\AdminControllers;

use App\Controllers\Controller;

class CreateUsersController implements Controller
{
    public function processaRequisicao(): void
    {
        require "./includes/views/admin/createUsers.php";
    }
}



?>