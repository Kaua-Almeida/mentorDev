<?php 

namespace App\Controllers;

class LoginController implements Controller
{
    public function processaRequisicao(): void
    {
        require "./includes/views/login.php";
    }
}





?>