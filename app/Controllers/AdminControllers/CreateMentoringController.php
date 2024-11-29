<?php 
namespace App\Controllers\AdminControllers;

use App\Controllers\Controller;

class CreateMentoringController implements Controller
{
    public function processaRequisicao(): void
    {
        require "./includes/views/admin/createMentoring.php";
    }
}





?>