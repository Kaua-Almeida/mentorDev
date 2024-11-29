<?php 

namespace App\Controllers;
session_start();

class LogoutController implements Controller
{
    public function processaRequisicao(): void
    {
        if(session_status() === 2){
            session_destroy();
            header("location:/");
            return;
        }
    }
}


?>