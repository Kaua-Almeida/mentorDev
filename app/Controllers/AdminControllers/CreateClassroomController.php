<?php 

namespace App\Controllers\AdminControllers;

use App\Controllers\Controller;

class CreateClassroomController implements Controller
{
    public function processaRequisicao(): void
    {
        require "./includes/views/admin/createClassroom.php";
    }
}



?>