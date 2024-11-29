<?php 

namespace App\Controllers;



class HomeAdminController implements Controller
{
    public function processaRequisicao(): void
    {
       
        require "./includes/views/admin/homeAdmin.php";

    }
}


?>