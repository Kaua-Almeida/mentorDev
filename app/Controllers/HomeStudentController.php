<?php 
namespace App\Controllers;

class HomeStudentController implements Controller
{
    public function processaRequisicao(): void
    {
        require "./includes/views/student/homeStudent.php";
    }
}





?>